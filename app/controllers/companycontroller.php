<?php 
namespace DEK\Controllers;
use DEK\LIB\InputFilter;
use DEK\LIB\Helper;
use DEK\Models\EmployerModel;

class companyController extends AbstractController
{
	use InputFilter;
	use Helper;
	
    public function defaultAction(){
		//$this->_data['employers'] = EmployerModel::getAll();
		//var_dump($this->_data);
		$this ->_view();
		
		/*
        $this->language->load('template.common');
        $this->language->load('index.default');
        $this->_view();*/
    }
	
	public function addAction(){
		/*
		if (isset ($_POST['submit'])){
		
			$employer = new EmployerModel();	
			$employer->title=$this->filterString($_POST['title']);
			$employer->phone1=$this->filterString($_POST['phone1']);
			$employer->notes=$this->filterString($_POST['notes']);;
			$employer->status=$this->filterString($_POST['status']);
			$employer->recieve_news=$this->filterInt($_POST['recieve_news']);
			$employer->unlock_confirmation=$this->filterInt($_POST['unlock_confirmation']);
			$employer->emp_type_id=$this->filterInt($_POST['emp_type_id']);
			$employer->company_id= 1;
			
			if ($employer -> save()){
				$_SESSION['message'] = 'employer add successfully';
				$this->redirect('/employer');
			}else {
				echo 'saved failed '; 
			}
			
			//var_dump($employer); 
		}*/
		
		$this ->_view();
	}
	
	public function editAction(){
		/*
		$id = $this->filterInt($this -> _params[0]);
		$employer = EmployerModel::getByPK($id);
		$this -> _data ['employer']= $employer;
		if ($employer == false ) {
			$this->redirect('/employer');
		}
			
		if (isset ($_POST['submit'])){
		
			
			$employer->title=$this->filterString($_POST['title']);
			$employer->phone1=$this->filterString($_POST['phone1']);
			$employer->notes=$this->filterString($_POST['notes']);;
			$employer->status=$this->filterString($_POST['status']);
			$employer->recieve_news=$this->filterInt($_POST['recieve_news']);
			$employer->unlock_confirmation=$this->filterInt($_POST['unlock_confirmation']);
			$employer->emp_type_id=$this->filterInt($_POST['emp_type_id']);
			$employer->company_id= 1;
			
			if ($employer -> save()){
				$_SESSION['message'] = 'employer edited successfully';
				$this->redirect('/employer');
			}else {
				echo 'saved failed '; 
			}
			
			var_dump($employer); 
		}*/
		
		$this ->_view();
	}

	public function deleteAction(){/*
		$id = $this->filterInt($this -> _params[0]);
		$employer = EmployerModel::getByPK($id);
		if ($employer -> delete()){
			$_SESSION['message'] = 'employer deleted successfully';
			}
			$this->redirect('/employer');$this->redirect('/employer');*/
	}

}