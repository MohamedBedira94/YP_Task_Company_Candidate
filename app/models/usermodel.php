<?php


namespace DEK\Models;


use DEK\Lib\Database\DatabaseHandler;

class UserModel extends AbstractModel
{
    /*
     * `id`, `fname`, `lname`, `email`, `password`, `confirmed`, `status`, `created_at`, `user_type`, `dev_notes`, `last_login`
     * SELECT * FROM `users` WHERE 1
     */

    public $id;
    public $fname;
    public $lname;
    public $email;
    public $password;
    public $company_id; //OTammam
    /*public $password_confirmation;*/     /******* removed after ******/
    public $confirmed;
    public $status;
    public $user_type;
    public $dev_notes;
    public $last_login;

    /*************** Array for Storing Errors ***************/
    public $errors = [];

    public function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }


    }


    /************** table name ***********/
    protected static $tableName = 'users';

    protected static $tableSchema = array(
        'id' => self::DATA_TYPE_INT,
        'fname' => self::DATA_TYPE_STR,
        'lname' => self::DATA_TYPE_STR,
        'email' => self::DATA_TYPE_STR,
        'password' => self::DATA_TYPE_STR,
        'confirmed' => self::DATA_TYPE_INT,
        'status' => self::DATA_TYPE_INT,
        'user_type' => self::DATA_TYPE_INT,
        'dev_notes' => self::DATA_TYPE_STR,
		'company_id' => self::DATA_TYPE_INT, //OTammam
        'last_login' => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    public function saveUser()
    {
        $this->validate();

        if(empty($this->errors)) {
            $password_hash = password_hash($this->password, PASSWORD_DEFAULT);
            $this->status = 1;
            $this->user_type = 1;
            $sql = 'INSERT INTO users (fname,lname,email,password,status,user_type) VALUES (:fname,:lname,:email,:password,:status,:user_type)';
            $stmt = DatabaseHandler::factory()->prepare($sql);
            $stmt->bindValue(':fname', $this->fname, \PDO::PARAM_STR);
            $stmt->bindValue(':lname', $this->lname, \PDO::PARAM_STR);
            $stmt->bindValue(':email', $this->email, \PDO::PARAM_STR);
            $stmt->bindValue(':password', $password_hash, \PDO::PARAM_STR);
            $stmt->bindValue(':status', $this->status, \PDO::PARAM_INT);
            $stmt->bindValue(':user_type', $this->user_type, \PDO::PARAM_INT);

            return $stmt->execute();
        }
        return false;
    }

    public function validate(){
        // First Name
        if ($this->fname == '') {
            $this->errors[] = 'First Name is required';
        }
        // Last Name
        if ($this->lname == '') {
            $this->errors[] = 'Last Name is required';
        }

        // email address
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL) === false) {
            $this->errors[] = 'Invalid email';
        }

        if (static::emailExists($this->email)) {
            $this->errors[] = 'email already taken';
        }

        // Password
        /*
        if ($this->password != $this->password_confirmation) {
            $this->errors[] = 'Password must match confirmation';
        }
        */

        if (strlen($this->password) < 6) {
            $this->errors[] = 'Please enter at least 6 characters for the password';
        }

        if (preg_match('/.*[a-z]+.*/i', $this->password) == 0) {
            $this->errors[] = 'Password needs at least one letter';
        }

        if (preg_match('/.*\d+.*/i', $this->password) == 0) {
            $this->errors[] = 'Password needs at least one number';
        }
    }

    public static function emailExists($email)
    {
        $sql = 'SELECT * FROM users WHERE email = :email';
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->bindParam(':email',$email,\PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch() !== false;
    }

    public static function findByEmail($email)
    {
        try {
            $sql = 'SELECT * FROM users WHERE email = :email';
            $stmt = DatabaseHandler::factory()->prepare($sql);
            $stmt->bindValue(':email', $email, \PDO::PARAM_STR);
            $stmt->setFetchMode(\PDO::FETCH_CLASS, 'DEK\Models\UserModel');
            $stmt->execute();
            return $stmt->fetch();
           
        }catch (PDOException $e){
            print $e->getMessage ();
        }
           

    }

    public static function findById($id)
    {
        // try {
        $sql = 'SELECT * FROM users WHERE id = :id';
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'DEK\Models\UserModel');
        $stmt->execute();
        return $stmt->fetch();
        /*
    }catch (PDOException $e){
        print $e->getMessage ();
    }
        */

    }

    public static function authenticate($email,$password){
        $user = UserModel::findByEmail($email);
			
        if($user){
            if(password_verify($password,$user->password)){
			//	var_dump ($user);die();
              return $user;
            }
        }
        return false;
    }



}