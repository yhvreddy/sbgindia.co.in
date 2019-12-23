<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//base controller
require APPPATH . '/libraries/BaseController.php';
class Categories extends BaseController {

	public function __construct(){
        parent::__construct();
        $this->isAdminLoggedIn();
        $this->load->model('Model_default');
    }
	
	public function index(){
		$data['pagetitle']	=	'Categories List';
		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');
		$data['categories']	= $this->Model_default->select_data('sbgi_categories',array('status'=>1));
		$this->manualview('admin/header','admin/categories_page','admin/footer',$data);
	}

	public function CategoriesSave(){
		extract($_REQUEST);
		// $this->print_r($_FILES);
		// exit;
		$path = 'uploads/Categories/';
		if($_FILES['categoryImages']['name'] != ''){
			if(file_exists($path)){
				$uploadfile = $this->uploadfiles($path,'categoryImages','jpg|png|jpeg',TRUE);
			}else{
				$this->createdir($path,$path);
				$uploadfile = $this->uploadfiles($path,'categoryImages','jpg|png|jpeg',TRUE);
			}
			if($uploadfile['status'] == 1){
				$uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
			}else{
				$uploadedfile = '';
			}
		}else{
			$uploadedfile = '';
		}
		$insertdata = array('image'=>$uploadedfile,'name'=>$category_name);
		$insertbanners = $this->Model_default->insert_data('sbgi_categories',$insertdata);
		if($insertbanners != 0){
			$this->session->set_flashdata('success','Successfully Saved Category Details.');
			redirect(base_url('admin/dashboard/categories'));
		}else{
			$this->session->set_flashdata('failed','Failed to save Category Details.');
			redirect(base_url('admin/dashboard/categories'));
		} 
	}
	

	public function editCategories(){
		$id = $this->uri->segment(4);
		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');
		$data['pagetitle']	=	'Edit Categories';
		$data['categories']	=	$this->Model_default->select_data('sbgi_categories',array('status'=>1),'id DESC');
		$data['categorydata']	=	$this->Model_default->select_data('sbgi_categories',array('status'=>1,'id'=>$id),'id DESC');
		$this->manualview('admin/header','admin/categories_page','admin/footer',$data);
	}

	public function saveEditdetails(){
		extract($_REQUEST);
		$path = 'uploads/Categories/';
		if($_FILES['CategoryImages']['name'] != ''){
			if(file_exists($path)){
				$uploadfile = $this->uploadfiles($path,'CategoryImages','jpg|png|jpeg',TRUE);
			}else{
				$this->createdir($path,$path);
				$uploadfile = $this->uploadfiles($path,'CategoryImages','jpg|png|jpeg',TRUE);
			}
			if($uploadfile['status'] == 1){
				$uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
			}else{
				$uploadedfile = '';
			}
		}else{
			$uploadedfile = $uploaded_image;
		}


		$conduction	=	array('id'=>$edit_id);
		$insertdata = array('image'=>$uploadedfile,'name'=>$category_name);
		$updatedata = $this->Model_default->update_data('sbgi_categories',$insertdata,$conduction);
		if($updatedata != 0){
			$this->session->set_flashdata('success','Successfully Update Category Details.');
			redirect(base_url('admin/dashboard/categories'));
		}else{
			$this->session->set_flashdata('failed','Failed to Update Category Details.');
			redirect(base_url('admin/dashboard/categories'));
		} 
	}

	
	public function deleteCategories(){
		$id = $this->uri->segment(4);
		if(isset($id) && !empty($id)){
			$conduction = 	array('id'=>$id);
			$updatedata	=	array('status'=>0);
			$updating	=	$this->Model_default->update_data('sbgi_categories',$updatedata,$conduction);
			if($updating != 0){
				$this->session->set_flashdata('success','Successfully Delete Category Details.');
				redirect(base_url('admin/dashboard/categories'));
			}else{
				$this->session->set_flashdata('failed','Failed to Delete Category Details.');
				redirect(base_url('admin/dashboard/categories'));
			} 
		}else{
			$this->session->set_flashdata('failed','Unable to Delete Category details or Invalid oops error..!');
			redirect(base_url('admin/dashboard/categories'));
		}
	}	

}
