<?php
namespace DEK\Models;

class CompanyModel extends AbstractModel
{
	
	public $id;
    public $company_name;
    public $company_phone;
    public $testify;
    public $business_email;
    public $reviewed;
    public $approved;
    public $company_logo;
    public $company_cover;
    public $is_multinational;
    public $is_startup;
    public $specialities;
    public $company_profile;
    public $fax;
    public $website;
    public $facebook;
    public $linkedin;
    public $blog;
    public $twitter;
    public $company_size_id;
    public $know_us_id;
    public $country_id;
    public $city_id;
    public $area_id;
    public $owner_id;
	
    
     /* @var UserProfileModel
     */
	 
    public $profile;
    public $privileges;

    protected static $tableName = 'companies';

    protected static $tableSchema = array(
        'id'            		=> self::DATA_TYPE_INT,
        'company_name'          => self::DATA_TYPE_STR,
        'company_phone'         => self::DATA_TYPE_STR,
        'testify'             	=> self::DATA_TYPE_STR,
        'business_email'        => self::DATA_TYPE_STR,
        'reviewed'              => self::DATA_TYPE_INT,
        'approved'              => self::DATA_TYPE_INT,
        'company_logo'          => self::DATA_TYPE_STR,
        'company_cover'         => self::DATA_TYPE_STR,
        'is_multinational'      => self::DATA_TYPE_INT,
        'is_startup'            => self::DATA_TYPE_INT,
        'specialities'          => self::DATA_TYPE_STR,
        'company_profile'       => self::DATA_TYPE_STR,
        'fax'             		=> self::DATA_TYPE_STR,
        'website'             	=> self::DATA_TYPE_STR,
        'facebook'             	=> self::DATA_TYPE_STR,
        'linkedin'             	=> self::DATA_TYPE_STR,
        'blog'             		=> self::DATA_TYPE_STR,
        'twitter'             	=> self::DATA_TYPE_STR,
        'company_size_id'       => self::DATA_TYPE_INT,
        'know_us_id'            => self::DATA_TYPE_INT,
        'country_id'            => self::DATA_TYPE_INT,
        'city_id'             	=> self::DATA_TYPE_INT,
        'area_id'             	=> self::DATA_TYPE_INT,
        'owner_id'             	=> self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';
  
	public static function get_company_posts2 ($search_option=array()){
		//$jop_or_internship  1 => job | 2=> internship
		$other_cond = '';
		if(!empty($search_option)){
			for ($i=0;$i<count($search_option);$i++){
				$row = $search_option[$i];
				if ($row['condition'] == 'LIKE') {
					$other_cond .= ' AND ( '.$row['indx'].' = "'.$row['value'].'" ';
					$other_cond .= ' OR '.$row['indx'].' LIKE "%'.$row['value'].'" ';
					$other_cond .= ' OR  '.$row['indx'].' LIKE "'.$row['value'].'%" )';
				}else {
				$other_cond .= ' AND '.$row['indx'].' '.$row['condition'].' "'.$row['value'].'" ';
				}
			}
		}
 
		return self::get(
        'SELECT * FROM `job_posts_info2`
		WHERE 1=1 ' . $other_cond . '  order by id DESC LIMIT 5'
        );
	}
	
	public static function get_company_posts_count2 ($search_option=array()){
		//$jop_or_internship  1 => job | 2=> internship
		$other_cond = '';
		if(!empty($search_option)){
			for ($i=0;$i<count($search_option);$i++){
				$row = $search_option[$i];
				if ($row['condition'] == 'LIKE') {
					$other_cond .= ' AND ( '.$row['indx'].' = "'.$row['value'].'" ';
					$other_cond .= ' OR '.$row['indx'].' LIKE "%'.$row['value'].'" ';
					$other_cond .= ' OR  '.$row['indx'].' LIKE "'.$row['value'].'%" )';
				}else {
				$other_cond .= ' AND '.$row['indx'].' '.$row['condition'].' "'.$row['value'].'" ';
				}
			}
		}
		//var_dump ($other_cond);
		$rslt = self::get(
        'SELECT id FROM `job_posts_info2`
		WHERE 1=1 ' . $other_cond . '  order by id DESC '
        );
		if($rslt === false) 
			return '0' ;
		
		return count($rslt);
	}
	
	
    public static function get_company_posts ($company_id,$job_or_internship,$post_status,$post_id,$uploader_id){
		//$jop_or_internship  1 => job | 2=> internship
		$other_cond = '';
		if ($post_id != false ){
			$other_cond .= ' AND id < '.$post_id;
		}
		//0 = draft //1 = active //2 = expired / closed
		if ($post_status != '' ){
			$other_cond .= ' AND publish = '.$post_status;	
		}
		if($uploader_id != ''){
			$other_cond .= ' AND uploader_id = '.$uploader_id;
		}
		
		return self::get(
        'SELECT * FROM `job_posts_info2`
		WHERE company_id = '.$company_id.' AND type = ' . $job_or_internship . $other_cond . '  order by id DESC LIMIT 5'
        );
	}
	
	public static function get_company_posts_count ($company_id,$job_or_internship,$post_status,$post_id,$uploader_id){
		//$jop_or_internship  1 => job | 2=> internship
		$other_cond = '';
		if ($post_id != false ){
			$other_cond .= ' AND id < '.$post_id;
		}
		//0 = draft //1 = active //2 = expired / closed
		if ($post_status != '' ){
			$other_cond .= ' AND publish = '.$post_status;	
		}
		if($uploader_id != ''){
			$other_cond .= ' AND uploader_id = '.$uploader_id;
		}
		$rslt = self::get(
        'SELECT id FROM `job_posts_info2`
		WHERE company_id = '.$company_id.' AND type = ' . $job_or_internship . $other_cond . ' order by id DESC '
        );
		if($rslt === false) 
			return '0' ;
		
		return count($rslt);
	}
	
    public static function get_company_posts_ ($company_id,$job_or_internship,$post_status,$post_id){
		//$jop_or_internship  1 => job | 2=> internship
		$other_cond = '';
		if ($post_id != false ){
			$other_cond .= ' AND job_posts.id < '.$post_id;
		}
		//0 = draft //1 = active //2 = expired / closed
		if ($post_status != '' ){
			$other_cond .= ' AND job_posts.publish = '.$post_status;	
		}
		
		return self::get(
        'SELECT job_posts.*,count(job_post_application.job_id) as application_num FROM `job_posts` 
		LEFT JOIN job_post_application ON job_posts.id = job_post_application.job_id 
		WHERE job_posts.company_id = '.$company_id.' AND job_posts.type = ' . $job_or_internship . $other_cond . ' GROUP BY job_posts.id order by job_posts.id DESC LIMIT 5'
        );
	}
	
	public static function get_company_posts_count_ ($company_id,$job_or_internship,$post_status,$post_id){
		//$jop_or_internship  1 => job | 2=> internship
		$other_cond = '';
		if ($post_id != false ){
			$other_cond .= ' AND job_posts.id < '.$post_id;
		}
		//0 = draft //1 = active //2 = expired / closed
		if ($post_status != '' ){
			$other_cond .= ' AND job_posts.publish = '.$post_status;	
		}
		$rslt = self::get(
        'SELECT job_posts.id FROM `job_posts` 
		LEFT JOIN job_post_application ON job_posts.id = job_post_application.job_id 
		WHERE job_posts.company_id = '.$company_id.' AND job_posts.type = ' . $job_or_internship . $other_cond . ' GROUP BY job_posts.id order by job_posts.id DESC '
        );
		if($rslt === false) 
			return '0' ;
		
		return count($rslt);
	}
	
	
}