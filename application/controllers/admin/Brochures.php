<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Brochures extends BaseController {

	public function __construct(){
        parent::__construct();
        $this->isAdminLoggedIn();
        $this->load->model('Model_default');
    }
	
	//login page
	public function index()
	{
        $data['userdata']   =   $this->session->userdata('loginsbgadmindetails');
        $data['pagetitle']	=	'Brochures Page';
        $data['banners']	=	 $this->Model_default->select_data('sbgi_brochures',array('status'=>1),'updated DESC');
        $this->manualview('admin/header','admin/brochures_page','admin/footer',$data);

	}

    public function uplaodBanners(){
        extract($_REQUEST);
        $path = 'uploads/brochures/';
        if(file_exists($path)){
            $uploadfile = $this->uploadfiles($path,'BannersImages','pdf|jpg|png|jpeg',TRUE);
        }else{
            $this->createdir($path,$path);
            $uploadfile = $this->uploadfiles($path,'BannersImages','pdf|jpg|png|jpeg',TRUE);
        }
        //$this->print_r($uploadfile);
        if($uploadfile['status'] == 1){
            $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            $insertdata = array('title'=>$bannerTitle,'image'=>$uploadedfile,'information'=>$Information,'updated'=>date('Y-m-d H:i:s'));
            $insertbanners = $this->Model_default->insert_data('sbgi_brochures',$insertdata);
            if($insertbanners != 0){
                $this->successalert('Successfully Saved brochures Details.','You have Save brochures details sucessfully please check once..!');
                redirect(base_url('admin/brochures'));
            }else{
                $this->failedalert('Failed to save brochures Details.','Unable to save brochures details or oops error..!');
                redirect(base_url('admin/brochures'));
            }
        }else{
            $this->failedalert('Image upload Failed. Try again..!','Unable to uload image file or oops error..!');
            redirect(base_url('admin/brochures'));
        }
    }

    public function deleteBanners(){
        $id = $this->uri->segment(3);
        if(isset($id) && !empty($id)){
            $conduction = 	array('id'=>$id);
            $updatedata	=	array('status'=>0);
            $updating	=	$this->Model_default->update_data('sbgi_brochures',$updatedata,$conduction);
            if($updating != 0){
                $this->successalert('Successfully Delete brochures Details.','You have Delete brochures details sucessfully please check once..!');
                redirect(base_url('admin/brochures'));
            }else{
                $this->failedalert('Failed to Delete brochures Details.','Unable to Delete brochures details or oops error..!');
                redirect(base_url('admin/brochures'));
            }
        }else{
            $this->failedalert('Failed to Delete brochures Details.','Unable to Delete brochures details or Invalid oops error..!');
            redirect(base_url('admin/brochures'));
        }
    }

    public function editBanners(){
        $id = $this->uri->segment(3);
        $data['userdata'] = $this->session->userdata('loginsbgadmindetails');
        $data['pagetitle']	=	'Banners Page';
        $data['banners']	=	$this->Model_default->select_data('sbgi_brochures',array('status'=>1),'id DESC');
        $data['bannerdetails']	=	$this->Model_default->select_data('sbgi_brochures',array('status'=>1,'id'=>$id),'id DESC');
        $this->manualview('admin/header','admin/brochures_page','admin/footer',$data);
    }

    public function saveEditdetails(){
        extract($_REQUEST);
        $path = 'uploads/banners/';
        $details = $this->Model_default->select_data('sbgi_brochures',array('id'=>$edit_id),'id DESC');
        if(!empty($_FILES['BannersImages']['name'])){
            $uploadfile = $this->uploadfiles($path,'BannersImages','pdf|jpg|png|jpeg',TRUE);
            if($uploadfile['status'] == 1){
                @$unlink = unlink($details[0]->image);
                $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            }else{
                $this->failedalert('Image upload Failed. Try again..!','Unable to uload image file or oops error..!');
                redirect(base_url('admin/brochures'));
            }
        }else{
            if(isset($Uploaded_image) && !empty($Uploaded_image)){
                $uploadedfile =  $Uploaded_image;
            }else{
                $uploadedfile = '';
            }
        }
        $conduction = array('id'=>$edit_id);
        $insertdata = array('image'=>$uploadedfile,'title'=>$bannerTitle,'information'=>$Information,'updated'=>date('Y-m-d H:i:s'));
        $insertbanners = $this->Model_default->update_data('sbgi_brochures',$insertdata,$conduction);
        if($insertbanners != 0){
            $this->successalert('Successfully Update Banner Details.','You have Update brochures details sucessfully please check once..!');
            redirect(base_url('admin/brochures'));
        }else{
            $this->failedalert('Failed to Update Banner Details.','Unable to Update brochures details or oops error..!');
            redirect(base_url('admin/brochures'));
        }
    }

	
}
