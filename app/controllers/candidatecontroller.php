<?php


namespace DEK\Controllers;


use DEK\Auth;
use DEK\LIB\Helper;
use DEK\LIB\InputFilter;
use DEK\Models\CandidateModel;

class CandidateController extends Authenticated
{
         use Helper;
         use InputFilter;

         public function defaultAction(){
            $this->requireLogin();
            $this->_view();
        }

        public function profileAddAction(){
            /*
             `id`, `first_name`, `last_name`, `midle_name`,
             `user_id`, `birth_dy`, `birth_mnth`, `birth_yr`, `gender`,
            `nationality_id`, `martial_stts`, `depends_num`, `militry_stts`,
             `driving_license`, `tag_lines`, `relocate_location`, `country_id`, `city_id`, `area_id`, `post_cd`,
             `phn_1`, `phn_2`,
            `minm_sal`, `hdshw_sal`, `career_lvl`, `job_type`, `srch_stts`, `recomend1`,
             `recomend2`, `profile_img`, `users_experiece`, `education_level`, `cv_upld_url`,
             `cv_uploaded_stts`, `achievemnts`, `notes`
            */
            $this->requireLogin();
            $user_id = $_SESSION['userid'];
            $no = CandidateModel::Chck_candiate_exist($user_id);
            if($no > 0){
                Helper::redirect(SITE_URL.'candidate/profileEdit');
            }else if (isset($_POST['save'])) {

                $candidate = new CandidateModel();
                if($candidate->saveCandidate()){
                    $_SESSION['message'] = 1;
                }else{
                    $_SESSION['message'] = 2;
                }
                Helper::redirect(SITE_URL.'candidate/profileEdit');
               // $this->profileEditAction();
            }else{
                $this->_view();
            }
        }

        public function resumeAddAction(){
            $this->requireLogin();
            $candidate = new CandidateModel();
            $this->_data['candidate'] = $candidate->getCandidateByID($_SESSION['userid']);
            //var_dump($this->_data);
            extract($this->_data);

            $this->_view();
        }
        public function jobSavedAction(){
            $this->requireLogin();
            $this->_view();
        }
        public function jobAppliedAction(){
            $this->requireLogin();
            $this->_view();
        }
        public function jobAlertsAction(){
            $this->requireLogin();
            $this->_view();
        }
        public function cvManagerAction(){
            $this->requireLogin();
             $this->_view();
        }
        public function changePasswordAction(){
            $this->requireLogin();
            $this->_view();
        }
        public function applyJobAction(){
             $this->requireLogin();
             $this->_view();
        }
        public function profileEditAction(){
            $this->requireLogin();
            $candidate = new CandidateModel();
            $this->_data['candidate'] = $candidate->getCandidateByID($_SESSION['userid']);
            //var_dump($this->_data);
            extract($this->_data);
            if(isset($_POST['update']) && $_POST['update']=='update'){
                 //$_SESSION['userid'];
               $rslt = $candidate->UpdateCandidate();
               if($rslt == 1){
                   $_SESSION['message'] = 1;
                   Helper::redirect(SITE_URL.'candidate/profileEdit');
               }else{
                   $_SESSION['message'] = 2;
                   Helper::redirect(SITE_URL.'candidate/profileEdit');
               }

            }else{
                $this->_view();
            }
        }

    public function career_interestsAction(){
        $this->requireLogin();
        $this->_view();
    }

    public function experienceAction(){
        $this->requireLogin();
        $this->_view();
    }

    public function educationAction(){
        $this->requireLogin();
        $this->_view();
    }

}