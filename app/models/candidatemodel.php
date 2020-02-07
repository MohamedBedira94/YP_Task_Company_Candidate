<?php


namespace DEK\Models;


use DEK\Lib\Database\DatabaseHandler;

class CandidateModel extends AbstractModel
{
/*
`id`, `first_name`, `last_name`, `midle_name`,
             `user_id`, `birth_dy`, `birth_mnth`, `birth_yr`, `gender`,
            `nationality_id`, `martial_stts`, `depends_num`, `militry_stts`,
             `driving_license`, `tag_lines`, `relocate_location`, `country_id`, `city_id`, `area_id`, `post_cd`,
             `phn_1`, `phn_2`,
            `minm_sal`, `hdshw_sal`, `career_lvl`, `job_type`, `srch_stts`, `recomend1`,
             `recomend2`, `profile_img`, `users_experiece`, `education_level`, `cv_upld_url`,
             `cv_uploaded_stts`, `achievemnts`, `notes`
 `employee` WHERE 1
*/

    public $id;
    public $first_name;
    public $last_name;
    public $midle_name;
    public $user_id;
    public $birth_dy;
    public $birth_mnth;
    public $birth_yr;
    public $gender;
    public $nationality_id;
    public $martial_stts;
    public $depends_num;
    public $militry_stts;
    public $driving_license;
    public $tag_lines;
    public $relocate_location;
    public $country_id;
    public $city_id;
    public $area_id;
    public $post_cd;
    public $phn_1;
    public $phn_2;
    public $minm_sal;
    public $hdshw_sal;
    public $career_lvl;
    public $job_type;
    public $srch_stts;
    public $recomend1;
    public $recomend2;
    public $profile_img;
    public $users_experiece;
    public $education_level;
    public $cv_upld_url;
    public $cv_uploaded_stts;
    public $achievemnts;
    public $notes;

    /************** table name ************/
    protected static $tableName = 'employee';


    protected static $tableSchema = array(
        'id'  => self::DATA_TYPE_INT,
        'first_name' => self::DATA_TYPE_STR,
        'last_name' => self::DATA_TYPE_STR,
        'midle_name' => self::DATA_TYPE_STR,
        'user_id' => self::DATA_TYPE_INT,
        'birth_dy' => self::DATA_TYPE_STR,
        'birth_mnth' => self::DATA_TYPE_STR,
        'birth_yr' => self::DATA_TYPE_STR,
        'gender' => self::DATA_TYPE_INT,
        'nationality_id' => self::DATA_TYPE_INT,
        'martial_stts' => self::DATA_TYPE_INT,
        'depends_num' => self::DATA_TYPE_INT,
        'militry_stts' => self::DATA_TYPE_INT,
        'driving_license' => self::DATA_TYPE_INT,
        'tag_lines' => self::DATA_TYPE_STR,
        'relocate_location' => self::DATA_TYPE_INT,
        'country_id' => self::DATA_TYPE_INT,
        'city_id' => self::DATA_TYPE_INT,
        'area_id' => self::DATA_TYPE_INT,
        'post_cd' => self::DATA_TYPE_STR,
        'phn_1' => self::DATA_TYPE_STR,
        'phn_2' => self::DATA_TYPE_STR,
        'minm_sal' => self::DATA_TYPE_DECIMAL,
        'hdshw_sal' => self::DATA_TYPE_INT,
        'career_lvl' => self::DATA_TYPE_INT,
        'job_type' => self::DATA_TYPE_STR,
        'srch_stts' => self::DATA_TYPE_INT,
        'recomend1' => self::DATA_TYPE_INT,
        'recomend2' => self::DATA_TYPE_INT,
        'profile_img' => self::DATA_TYPE_STR,
        'users_experiece' => self::DATA_TYPE_INT,
        'education_level' => self::DATA_TYPE_INT,
        'cv_upld_url' => self::DATA_TYPE_STR,
        'cv_uploaded_stts' => self::DATA_TYPE_INT,
        'achievemnts' => self::DATA_TYPE_STR,
        'notes' => self::DATA_TYPE_STR
    );

  protected static $primaryKey = 'id';

  public function saveCandidate(){
      $first_name = $_POST['first_name'] ;
      $last_name = $_POST['last_name'] ;
      $midle_name = $_POST['midle_name'];
      $user_id = $_SESSION['userid'];
      $birth_dy = $_POST['birth_dy'];
      $birth_mnth = $_POST['birth_mnth'];
      $birth_yr = $_POST['birth_yr'];
      $gender = $_POST['gender'];
      $nationality_id = $_POST['nationality_id'];
      $martial_stts = $_POST['martial_stts'];
      $depends_num = $_POST['depends_num'];
      $militry_stts = $_POST['militry_stts'];
      $driving_license = $_POST['driving_license'];
      $tag_lines = $_POST['tag_lines'];
      $relocate_location = $_POST['relocate_location'];
      $country_id = $_POST['country_id'];
      $city_id = $_POST['city_id'];
      $area_id = $_POST['area_id'];
      $post_cd = $_POST['post_cd'];
      $phn_1 = $_POST['phn_1'];
      $phn_2 = $_POST['phn_2'];
      if (isset($_FILES['profile_img']) && $_FILES['profile_img']['error'] === UPLOAD_ERR_OK) {
          // get details of the uploaded file
          $fileTmpPath = $_FILES['profile_img']['tmp_name'];
          $fileName = $_FILES['profile_img']['name'];
          $fileSize = $_FILES['profile_img']['size'];
          $fileType = $_FILES['profile_img']['type'];
          $fileNameCmps = explode(".", $fileName);
          $fileExtension = strtolower(end($fileNameCmps));
          $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
          $allowedfileExtensions = array('gif', 'png','jpg','jpeg','GIF','PNG','JPG','JPEG');
          if (in_array($fileExtension, $allowedfileExtensions)) {
              // directory in which the uploaded file will be moved
              // Helper::redirect(SITE_URL.'employer/manage_jobs');
              //echo SITE_URL;
              $uploadFileDir = './emp_profiles/';
              $dest_path = $uploadFileDir . $newFileName;

              if(move_uploaded_file($fileTmpPath, $dest_path))
              {
                  $message ='File is successfully uploaded.';
              }
              else
              {
                  $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
              }


          }
      }
      $profile_img = $newFileName;

      /*
`id`, `first_name`, `last_name`, `midle_name`,
             `user_id`, `birth_dy`, `birth_mnth`, `birth_yr`, `gender`,
            `nationality_id`, `martial_stts`, `depends_num`, `militry_stts`,
             `driving_license`, `tag_lines`, `relocate_location`, `country_id`, `city_id`, `area_id`, `post_cd`,
             `phn_1`, `phn_2`,
            `minm_sal`, `hdshw_sal`, `career_lvl`, `job_type`, `srch_stts`, `recomend1`,
             `recomend2`, `profile_img`, `users_experiece`, `education_level`, `cv_upld_url`,
             `cv_uploaded_stts`, `achievemnts`, `notes`
 `employee` WHERE 1
*/

      $sql = 'INSERT INTO employee (first_name,last_name,midle_name,user_id,birth_dy,birth_mnth,birth_yr,gender,nationality_id,martial_stts,depends_num,militry_stts,driving_license,tag_lines,relocate_location,country_id,city_id,area_id,post_cd,phn_1,phn_2,profile_img)
              VALUES (:first_name,:last_name,:midle_name,:user_id,:birth_dy,:birth_mnth,:birth_yr,:gender,:nationality_id,:martial_stts,:depends_num,:militry_stts,:driving_license,:tag_lines,:relocate_location,:country_id,:city_id,:area_id,:post_cd,:phn_1,:phn_2,:profile_img)';
      $stmt = DatabaseHandler::factory()->prepare($sql);
      $stmt->bindValue(':first_name', $first_name, \PDO::PARAM_STR);
      $stmt->bindValue(':last_name', $last_name, \PDO::PARAM_STR);
      $stmt->bindValue(':midle_name', $midle_name, \PDO::PARAM_STR);
      $stmt->bindValue(':user_id', $user_id, \PDO::PARAM_INT);
      $stmt->bindValue(':birth_dy', $birth_dy, \PDO::PARAM_STR);
      $stmt->bindValue(':birth_mnth', $birth_mnth, \PDO::PARAM_STR);
      $stmt->bindValue(':birth_yr', $birth_yr, \PDO::PARAM_STR);
      $stmt->bindValue(':gender', $gender, \PDO::PARAM_INT);
      $stmt->bindValue(':nationality_id', $nationality_id, \PDO::PARAM_INT);
      $stmt->bindValue(':martial_stts', $martial_stts, \PDO::PARAM_INT);
      $stmt->bindValue(':depends_num', $depends_num, \PDO::PARAM_INT);
      $stmt->bindValue(':militry_stts', $militry_stts, \PDO::PARAM_INT);
      $stmt->bindValue(':driving_license', $driving_license, \PDO::PARAM_INT);
      $stmt->bindValue(':tag_lines', $tag_lines, \PDO::PARAM_STR);
      $stmt->bindValue(':relocate_location', $relocate_location, \PDO::PARAM_INT);
      $stmt->bindValue(':country_id', $country_id, \PDO::PARAM_INT);
      $stmt->bindValue(':city_id', $city_id, \PDO::PARAM_INT);
      $stmt->bindValue(':area_id', $area_id, \PDO::PARAM_INT);
      $stmt->bindValue(':post_cd', $post_cd, \PDO::PARAM_STR);
      $stmt->bindValue(':phn_1', $phn_1, \PDO::PARAM_STR);
      $stmt->bindValue(':phn_2', $phn_2, \PDO::PARAM_STR);
      $stmt->bindValue(':profile_img', $profile_img, \PDO::PARAM_STR);

      return $stmt->execute();
  }

  public function getCandidateByID($user_id){
      try {
          $sql = 'SELECT * FROM employee WHERE user_id = :user_id';
          $stmt = DatabaseHandler::factory()->prepare($sql);
          $stmt->bindValue(':user_id', $user_id, \PDO::PARAM_STR);
          $stmt->setFetchMode(\PDO::FETCH_CLASS, 'DEK\Models\CandidateModel');
          $stmt->execute();
          return $stmt->fetch();

      }catch (PDOException $e){
          print $e->getMessage ();
      }
  }

  public static function get_birth_mnth($birth_mnth){
    $html = '';
    if($birth_mnth == 1){
        $html = '<option value="1" selected>01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option>
                <option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>';

    }elseif ($birth_mnth == 2){
        $html = '<option value="1">01</option><option value="2" selected>02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option>
                <option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>';
    }
    elseif ($birth_mnth == 3){
        $html = '<option value="1">01</option><option value="2">02</option><option value="3" selected>03</option><option value="4">04</option><option value="5">05</option>
                <option value="6" >06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>';
    }
    elseif ($birth_mnth == 4){
        $html = '<option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4" selected>04</option><option value="5">05</option>
                <option value="6" >06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>';
    }
    elseif ($birth_mnth == 5){
        $html = '<option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5" selected>05</option>
                <option value="6" >06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>';
    }
    elseif ($birth_mnth == 6){
        $html = '<option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option>
                <option value="6" selected>06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>';
    }
    elseif ($birth_mnth == 7){
        $html = '<option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option>
                <option value="6" >06</option><option value="7" selected>07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>';
    }
    elseif ($birth_mnth == 8){
        $html = '<option value="1">01</option><option value="2">02</option><option value="3"03</option><option value="4">04</option><option value="5">05</option>
                <option value="6" >06</option><option value="7">07</option><option value="8" selected>>08</option><option value="9">09</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>';
    }
    elseif ($birth_mnth == 9){
        $html = '<option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option>
                <option value="6" >06</option><option value="7">07</option><option value="8">08</option><option value="9" selected>09</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>';
    }
    elseif ($birth_mnth == 10){
        $html = '<option value="1">01</option><option value="2">02</option><option value="3" selected>03</option><option value="4">04</option><option value="5">05</option>
                <option value="6" >06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10"  selected>10</option>
                <option value="11">11</option><option value="12">12</option>';
    }
    elseif ($birth_mnth == 11){
        $html = '<option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option>
                <option value="6" >06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option>
                <option value="11" selected>11</option><option value="12">12</option>';
    }
    elseif ($birth_mnth == 12){
        $html = '<option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option>
                <option value="6" >06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option>
                <option value="11">11</option><option value="12" selected>12</option>';
    }else{
        $html = '<option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option>
                <option value="6" >06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>';
    }
   return $html;
  }

  public static function get_birth_yr($birth_yr){
      $html = '';
      if($birth_yr == 1990){
          $html ='<option value="1990" selected>1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 1991){
          $html ='<option value="1990">1990</option><option value="1991" selected>1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 1992){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992" selected>1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 1993){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993" selected>1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 1994){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994" selected>1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 1995){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995 selected">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 1996){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996" selected>1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 1997){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997" selected>1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 1998){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998" selected>1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 1999){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999" selected>1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 2000){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000" selected>2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 2001){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001" selected>2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 2002){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }else if ($birth_yr == 2003){
          $html ='<option value="1990" selected>1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003" selected>2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 2004){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004" selected>2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }else if ($birth_yr == 2005){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005" selected>2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 2006){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006" selected>2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 2007){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007" selected>2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 2008){
          $html ='<option value="1990"1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008" selected>>2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 2009){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009" selected>2009</option><option value="2010">2010</option>';
      }
      else if ($birth_yr == 2010){
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010" selected>2010</option>';
      }
      else{
          $html ='<option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
                 <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                 <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>
                 <option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>';
      }

      return $html;
  }

  public static function get_militry_stts($militry_stts){
      $html='';
      if ($militry_stts == 0){
          $html = ' <option value="0" selected>Not Applicable</option>
                   <option value="1">Exempted</option>
                   <option value="2">Completed</option>
                   <option value="3">Postponed</option>
                  ';
      }elseif ($militry_stts == 1){
          $html = ' <option value="0">Not Applicable</option>
                   <option value="1" selected>Exempted</option>
                   <option value="2">Completed</option>
                   <option value="3">Postponed</option>
                  ';
      }elseif ($militry_stts == 2){
          $html = ' <option value="0">Not Applicable</option>
                   <option value="1">Exempted</option>
                   <option value="2" selected>Completed</option>
                   <option value="3">Postponed</option>
                  ';
      }elseif ($militry_stts == 3){
          $html = ' <option value="0">Not Applicable</option>
                   <option value="1">Exempted</option>
                   <option value="2">Completed</option>
                   <option value="3" selected>Postponed</option>
                  ';
      }else{
          $html = ' <option value="0">Not Applicable</option>
                   <option value="1">Exempted</option>
                   <option value="2">Completed</option>
                   <option value="3">Postponed</option>
                  ';
      }

      return $html;
  }

  public static function get_depends_num($depends_num){
      $html='';
      if($depends_num == 1){
          $html='                           <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>';
      }else if($depends_num == 2){
          $html='                           <option value="1">1</option>
                                            <option value="2" selected>2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>';
      }else if($depends_num == 3){
          $html='                           <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3" selected>3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>';
      }else if($depends_num == 4){
          $html='                           <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4" selected>4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>';
      }else if($depends_num == 5){
          $html='                           <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected>5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>';
      }else if($depends_num == 6){
          $html='                           <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6" selected>6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>';
      }else if($depends_num == 7){
          $html='                           <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7" selected>7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>';
      }else if($depends_num == 8){
          $html='                           <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8" selected>8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>';
      }else if($depends_num == 9){
          $html='                           <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9" selected>9</option>
                                            <option value="10">10</option>';
      }else if($depends_num == 10){
          $html='                           <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10" selected>10</option>';
      }else {
          $html='                           <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>';
      }
      return $html;
  }


public static function Chck_candiate_exist($user_id){
    try {
        $sql = 'SELECT * FROM employee WHERE user_id = :user_id';
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->bindValue(':user_id', $user_id, \PDO::PARAM_STR);
        //$stmt->setFetchMode(\PDO::FETCH_CLASS, 'DEK\Models\CandidateModel');
        $stmt->execute();
        $no=$stmt->rowCount();
        return $no;

    }catch (PDOException $e){
        print $e->getMessage ();
    }
}


public function UpdateCandidate(){
    //var_dump($this->get_candidate_photo($_SESSION['userid']));
    //die();
    //$user_id = $_SESSION['userid'];
    $enc_id = $_POST['id'];
    $id = base64_decode(base64_decode($enc_id));
    $first_name = $_POST['first_name'] ;
    $last_name = $_POST['last_name'] ;
    $midle_name = $_POST['midle_name'];
    $user_id = $_SESSION['userid'];
    $birth_dy = $_POST['birth_dy'];
    $birth_mnth = $_POST['birth_mnth'];
    $birth_yr = $_POST['birth_yr'];
    $gender = $_POST['gender'];
    $nationality_id = $_POST['nationality_id'];
    $martial_stts = $_POST['martial_stts'];
    $depends_num = $_POST['depends_num'];
    $militry_stts = $_POST['militry_stts'];
    $driving_license = $_POST['driving_license'];
    $tag_lines = $_POST['tag_lines'];
    $relocate_location = $_POST['relocate_location'];
    $country_id = $_POST['country_id'];
    $city_id = $_POST['city_id'];
    $area_id = $_POST['area_id'];
    $post_cd = $_POST['post_cd'];
    $phn_1 = $_POST['phn_1'];
    $phn_2 = $_POST['phn_2'];
    if (isset($_FILES['profile_img']) && $_FILES['profile_img']['error'] === UPLOAD_ERR_OK) {

        // get details of the uploaded file
        $fileTmpPath = $_FILES['profile_img']['tmp_name'];
        $fileName = $_FILES['profile_img']['name'];
        $fileSize = $_FILES['profile_img']['size'];
        $fileType = $_FILES['profile_img']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $allowedfileExtensions = array('gif', 'png','jpg','jpeg','GIF','PNG','JPG','JPEG');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            // directory in which the uploaded file will be moved
            // Helper::redirect(SITE_URL.'employer/manage_jobs');
            //echo SITE_URL;
            $uploadFileDir = './emp_profiles/';
            $dest_path = $uploadFileDir . $newFileName;

            if(move_uploaded_file($fileTmpPath, $dest_path))
            {
                $message ='File is successfully uploaded.';
            }
            else
            {
                $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
            }


        }
    }
    $old_candidate_profile = $this->get_candidate_photo($_SESSION['userid']);
    if (isset($newFileName)) {
        $profile_img = $newFileName;

         $file_upld_before = './emp_profiles/' . $old_candidate_profile;
        if (file_exists($file_upld_before) && !empty($old_candidate_profile)) {
            unlink($file_upld_before);
        }else{

        }
    }else{
       $profile_img = $old_candidate_profile;
    }


    try {

        $data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'midle_name' => $midle_name,
            'birth_dy' => $birth_dy,
            'birth_mnth' => $birth_mnth,
            'birth_yr' => $birth_yr,
            'gender' => $gender,
            'nationality_id' => $nationality_id,
            'martial_stts' => $martial_stts,
            'depends_num' => $depends_num,
            'militry_stts' => $militry_stts,
            'driving_license' => $driving_license,
            'tag_lines' => $tag_lines,
            'relocate_location' => $relocate_location,
            'country_id' => $country_id,
            'city_id' => $city_id,
            'area_id' => $area_id,
            'post_cd' => $post_cd,
            'phn_1' => $phn_1,
            'phn_2' => $phn_2,
            'profile_img' => $profile_img,
            'id' => $id,
            'user_id' => $user_id
        ];

        $sql = 'UPDATE `employee` SET first_name =:first_name , last_name =:last_name , midle_name =:midle_name , birth_dy =:birth_dy , birth_mnth =:birth_mnth , birth_yr =:birth_yr , gender =:gender ,
               nationality_id=:nationality_id , martial_stts=:martial_stts , depends_num=:depends_num , militry_stts=:militry_stts ,
               driving_license=:driving_license , tag_lines=:tag_lines , relocate_location=:relocate_location , country_id=:country_id , city_id=:city_id , area_id=:area_id , post_cd=:post_cd ,
               profile_img=:profile_img , phn_1=:phn_1 , phn_2=:phn_2 WHERE id=:id AND user_id=:user_id';

        $stmt = DatabaseHandler::factory()->prepare($sql);

        $rslt = $stmt->execute($data);

    }catch (PDOException $e){
        print $e->getMessage ();
    }

    return $rslt;
}

public function get_candidate_photo($user_id){
    try {
        $sql = 'SELECT profile_img FROM employee WHERE user_id = :user_id';
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->bindValue(':user_id', $user_id, \PDO::PARAM_STR);
       // $stmt->setFetchMode(\PDO::FETCH_CLASS, 'DEK\Models\CandidateModel');
        $stmt->execute();
        $arr =  $stmt->fetch();
        return $arr['profile_img'];

    }catch (PDOException $e){
        print $e->getMessage ();
    }
}


}