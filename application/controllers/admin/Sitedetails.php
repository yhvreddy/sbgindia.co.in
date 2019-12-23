<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Sitedetails extends BaseController {

	public function __construct(){
        parent::__construct();
        $this->isAdminLoggedIn();
        $this->load->model('Model_default');
    }
	
	//about page
	public function aboutus(){
        $data['userdata']   =   $this->session->userdata('loginsbgadmindetails');
        $data['pagetitle']	=	'About us page';
        $data['aboutus']	=	 $this->Model_default->select_data('sbgi_about_us',array('status'=>1),'updated DESC');
        $this->manualview('admin/header','admin/aboutus_page','admin/footer',$data);

	}

    public function uploadAboutusDetails(){
        extract($_REQUEST);
        $path = 'uploads/aboutus/';
        if(file_exists($path)){
            $uploadfile = $this->uploadfiles($path,'BannersImages','jpg|png|jpeg',TRUE);
        }else{
            $this->createdir($path,$path);
            $uploadfile = $this->uploadfiles($path,'BannersImages','jpg|png|jpeg',TRUE);
        }
        if($uploadfile['status'] == 1){
            $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            $insertdata = array('title'=>$About_title,'image'=>$uploadedfile,'information'=>$Information,'updated'=>date('Y-m-d H:i:s'));
            $insertbanners = $this->Model_default->insert_data('sbgi_about_us',$insertdata);
            if($insertbanners != 0){
                $this->successalert('Successfully Saved Banner Details.','You have Save banner details sucessfully please check once..!');
                redirect(base_url('admin/aboutus'));
            }else{
                $this->failedalert('Failed to save Banner Details.','Unable to save banner details or oops error..!');
                redirect(base_url('admin/aboutus'));
            }
        }else{
            $this->failedalert('Image upload Failed. Try again..!','Unable to uload image file or oops error..!');
            redirect(base_url('admin/aboutus'));
        }
    }

    public function uploadEditsAboutusDetails(){
        extract($_REQUEST);
        // $this->print_r($_REQUEST);
        // $this->print_r($_FILES);
        // exit;
        $path = 'uploads/banners/';
        if(!empty($_FILES['BannersImages']['name'])){
            $uploadfile = $this->uploadfiles($path,'BannersImages','jpg|png|jpeg',TRUE);
            if($uploadfile['status'] == 1){
                //unlink last upload file
                $details = $this->Model_default->select_data('sbgi_about_us',array('id'=>$edit_id));
                @unlink($details[0]->image);
                $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            }else{
                $this->failedalert('Image upload Failed. Try again..!','Unable to uload image file or oops error..!');
                redirect(base_url('admin/gallery'));
            }
        }else{
            if(isset($Uploaded_image) && !empty($Uploaded_image)){
                $uploadedfile =  $Uploaded_image;
            }else{
                $uploadedfile = '';
            }
        }

        $conduction = array('id'=>$edit_id);
        $insertdata = array('title'=>$About_title,'image'=>$uploadedfile,'information'=>$Information,'updated'=>date('Y-m-d H:i:s'));
        $insertbanners = $this->Model_default->update_data('sbgi_about_us',$insertdata,$conduction);
        if($insertbanners != 0){
            $this->successalert('Successfully Update Banner Details.','You have Update banner details sucessfully please check once..!');
            redirect(base_url('admin/aboutus'));
        }else{
            $this->failedalert('Failed to Update Banner Details.','Unable to Update banner details or oops error..!');
            redirect(base_url('admin/aboutus'));
        }
    }


    //sitedetails
    public function sitedetails(){
        $data['userdata']   =   $this->session->userdata('loginsbgadmindetails');
        $data['pagetitle']	=	'About us page';
        $data['sitedetails']=	 $this->Model_default->select_data('sbgi_site_details',array('status'=>1),'updated DESC');
        $this->manualview('admin/header','admin/sitedetails_page','admin/footer',$data);
    }

    public function saveSiteDetails(){
        extract($_REQUEST);
        // $this->print_r($_REQUEST);
        // $this->print_r($_FILES);
        // exit;
        $path = 'uploads/sitedetails/';
        if(file_exists($path)){
            $uploadfile = $this->uploadfiles($path,'SiteLogo','jpg|png|jpeg',TRUE);
        }else{
            $this->createdir($path,$path);
            $uploadfile = $this->uploadfiles($path,'SiteLogo','jpg|png|jpeg',TRUE);
        }
        //$this->print_r($uploadfile);
        if($uploadfile['status'] == 1){
            $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            $insertdata = array('site_name'=>$site_name,'site_url'=>$domain_name,'site_logo'=>$uploadedfile,'address'=>$address,'state'=>$state_name,'city'=>$city_name,'pincode'=>$pincode,'mobile'=>$mobile,'email_id'=>$mail_id,'facebook'=>$facebook_link,'twitter'=>$twitter_link,'instagram'=>$instagram_link,'linkedin'=>$linkedin_link,'updated'=>date('Y-m-d H:i:s'));
            $insertbanners = $this->Model_default->insert_data('sbgi_site_details',$insertdata);
            if($insertbanners != 0){
                $this->successalert('Successfully Saved Banner Details.','You have Save banner details sucessfully please check once..!');
                redirect(base_url('admin/sitedetails'));
            }else{
                $this->failedalert('Failed to save Banner Details.','Unable to save banner details or oops error..!');
                redirect(base_url('admin/sitedetails'));
            }
        }else{
            $this->failedalert('Image upload Failed. Try again..!','Unable to uload image file or oops error..!');
            redirect(base_url('admin/sitedetails'));
        }
    }

    public function saveEditSiteDetails(){
        extract($_REQUEST);
        // $this->print_r($_REQUEST);
        // $this->print_r($_FILES);
        // exit;
        $path = 'uploads/sitedetails/';
        if(!empty($_FILES['SiteLogo']['name'])){
            $uploadfile = $this->uploadfiles($path,'SiteLogo','jpg|png|jpeg',TRUE);
            if($uploadfile['status'] == 1){
                //unlink last upload file
                $sitedetails = $this->Model_default->select_data('sbgi_site_details',array('id'=>$edit_id));
                @unlink($sitedetails[0]->site_logo);
                $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            }else{
                $this->failedalert('Image upload Failed. Try again..!','Unable to uload image file or oops error..!');
                redirect(base_url('admin/sitedetails'));
            }
        }else{
            if(isset($Uploaded_image) && !empty($Uploaded_image)){
                $uploadedfile =  $Uploaded_image;
            }else{
                $uploadedfile = '';
            }
        }
        
        $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
        $insertdata = array('site_name'=>$site_name,'site_url'=>$domain_name,'site_logo'=>$uploadedfile,'address'=>$address,'state'=>$state_name,'city'=>$city_name,'pincode'=>$pincode,'mobile'=>$mobile,'email_id'=>$mail_id,'facebook'=>$facebook_link,'twitter'=>$twitter_link,'instagram'=>$instagram_link,'linkedin'=>$linkedin_link,'updated'=>date('Y-m-d H:i:s'));
        $conduction = array('id'=>$edit_id);
        $insertbanners = $this->Model_default->update_data('sbgi_site_details',$insertdata,$conduction);
        if($insertbanners != 0){
            $this->successalert('Successfully Saved Banner Details.','You have Save banner details sucessfully please check once..!');
            redirect(base_url('admin/sitedetails'));
        }else{
            $this->failedalert('Failed to save Banner Details.','Unable to save banner details or oops error..!');
            redirect(base_url('admin/sitedetails'));
        }
    }

    //partners
    public function partners()
    {
        $data['userdata']   =   $this->session->userdata('loginsbgadmindetails');
        $data['pagetitle']	=	'Partners page';
        $data['partners']	=	 $this->Model_default->select_data('sbgi_partners_details',array('status'=>1),'updated DESC');
        $this->manualview('admin/header','admin/partners_page','admin/footer',$data);

    }

    public function SavepartnersDetails()
    {
        extract($_REQUEST);
        // $this->print_r($_FILES);
        // $this->print_r($_REQUEST);
        // exit;
        $path = 'uploads/partners/';
        if(file_exists($path)){
            $uploadfile = $this->uploadfiles($path,'PartnersImages','jpg|png|jpeg',TRUE);
        }else{
            $this->createdir($path,$path);
            $uploadfile = $this->uploadfiles($path,'PartnersImages','jpg|png|jpeg',TRUE);
        }
        if($uploadfile['status'] == 1){
            $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            $insertdata = array('title'=>$title_name,'image'=>$uploadedfile,'updated'=>date('Y-m-d H:i:s'));
            $insertbanners = $this->Model_default->insert_data('sbgi_partners_details',$insertdata);
            if($insertbanners != 0){
                $this->successalert('Successfully Saved Banner Details.','You have Save banner details sucessfully please check once..!');
                redirect(base_url('admin/dashboard/partners'));
            }else{
                $this->failedalert('Failed to save Banner Details.','Unable to save banner details or oops error..!');
                redirect(base_url('admin/dashboard/partners'));
            }
        }else{
            $this->failedalert('Image upload Failed. Try again..!','Unable to uload image file or oops error..!');
            redirect(base_url('admin/dashboard/partners'));
        }
    }


    public function editSitedetails()
    {
        $id = $this->uri->segment(4);
        $data['userdata']   =   $this->session->userdata('loginsbgadmindetails');
        $data['pagetitle']	=	'Partners page';
        $data['partners']	=	 $this->Model_default->select_data('sbgi_partners_details',array('status'=>1,'id !='=>$id),'updated DESC');
        $data['partnersdetails'] = $this->Model_default->select_data('sbgi_partners_details',array('id'=>$id));
        $this->manualview('admin/header','admin/partners_page','admin/footer',$data);
    }


    public function saveEditpartnersdetails()
    {
        extract($_REQUEST);
        $path = 'uploads/partners/';
        if(!empty($_FILES['PartnersImages']['name'])){
            $uploadfile = $this->uploadfiles($path,'PartnersImages','jpg|png|jpeg',TRUE);
            if($uploadfile['status'] == 1){
                //unlink last upload file
                $sitedetails = $this->Model_default->select_data('sbgi_partners_details',array('id'=>$edit_id));
                @unlink($sitedetails[0]->site_logo);
                $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            }else{
                $this->failedalert('Image upload Failed. Try again..!','Unable to uload image file or oops error..!');
                redirect(base_url('admin/dashboard/partners'));
            }
            //$uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
        }else{
            if(isset($Uploaded_image)){
                $uploadedfile =  $Uploaded_image;
            }else{
                $uploadedfile = '';
            }
        }

        $insertdata = array('title'=>$title_name,'image'=>$uploadedfile,'updated'=>date('Y-m-d H:i:s'));
        $insertbanners = $this->Model_default->update_data('sbgi_partners_details',$insertdata,array('id'=>$edit_id));
        if($insertbanners != 0){
            $this->successalert('Successfully Saved Partner Details.','You have Save Partner details sucessfully please check once..!');
            redirect(base_url('admin/dashboard/partners'));
        }else{
            $this->failedalert('Failed to save Partner Details.','Unable to save Partner details or oops error..!');
            redirect(base_url('admin/dashboard/partners'));
        }
    }


    public function deleteSitepartnerdetails()
    {
        $id = $this->uri->segment(4);
        if(isset($id) && !empty($id)){
			$conduction = 	array('id'=>$id);
			$updatedata	=	array('status'=>0);
			$updating	=	$this->Model_default->update_data('sbgi_partners_details',$updatedata,$conduction);
			if($updating != 0){
				$this->successalert('Successfully Updated partners Details.','You have Save partners details sucessfully please check once..!');
				redirect(base_url('admin/dashboard/partners'));
			}else{
				$this->failedalert('Failed to Update partners Details.','Unable to Update partners details or oops error..!');
				redirect(base_url('admin/dashboard/partners'));
			} 
		}else{
			$this->failedalert('Failed to Update partners Details.','Unable to Update partners details or Invalid oops error..!');
			redirect(base_url('admin/dashboard/partners'));
		}
    }

}
