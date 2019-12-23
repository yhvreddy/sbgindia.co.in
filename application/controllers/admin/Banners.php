<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Banners extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->isAdminLoggedIn();
        $this->load->model('Model_default');
    }
	
	//login page
	public function index()
	{
        $data['userdata']   =   $this->session->userdata('loginsbgadmindetails');
        $data['pagetitle']	=	'Banners Page';
        $data['banners']	=	 $this->Model_default->select_data('sbgi_banners',array('status'=>1),'updated DESC');
        $this->manualview('admin/header','admin/banners_page','admin/footer',$data);

	}

    public function uplaodBanners()
    {
        extract($_REQUEST);
        $path = 'uploads/banners/';
        if(file_exists($path)){
            $uploadfile = $this->uploadfiles($path,'BannersImages','jpg|png|jpeg',TRUE);
        }else{
            $this->createdir($path,$path);
            $uploadfile = $this->uploadfiles($path,'BannersImages','jpg|png|jpeg',TRUE);
        }
        if($uploadfile['status'] == 1){
            $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            $insertdata = array('banner_title'=>$bannerTitle,'image'=>$uploadedfile,'information'=>$Information,'links'=>$BannerURl,'updated'=>date('Y-m-d H:i:s'));
            $insertbanners = $this->Model_default->insert_data('sbgi_banners',$insertdata);
            if($insertbanners != 0){
                $this->successalert('Successfully Saved Banner Details.','You have Save banner details sucessfully please check once..!');
                redirect(base_url('admin/banners'));
            }else{
                $this->failedalert('Failed to save Banner Details.','Unable to save banner details or oops error..!');
                redirect(base_url('admin/banners'));
            }
        }else{
            $this->failedalert('Image upload Failed. Try again..!','Unable to uload image file or oops error..!');
            redirect(base_url('admin/banners'));
        }
    }

    public function deleteBanners(){
        $id = $this->uri->segment(3);
        if(isset($id) && !empty($id)){
            $conduction = 	array('id'=>$id);
            $updatedata	=	array('status'=>0);
            $updating	=	$this->Model_default->update_data('sbgi_banners',$updatedata,$conduction);
            if($updating != 0){
                $this->successalert('Successfully Delete Banner Details.','You have Delete Banner details sucessfully please check once..!');
                redirect(base_url('admin/banners'));
            }else{
                $this->failedalert('Failed to Delete Banner Details.','Unable to Delete Banner details or oops error..!');
                redirect(base_url('admin/banners'));
            }
        }else{
            $this->failedalert('Failed to Delete Banner Details.','Unable to Delete Banner details or Invalid oops error..!');
            redirect(base_url('admin/banners'));
        }
    }

    public function editBanners(){
        $id = $this->uri->segment(3);
        $data['userdata'] = $this->session->userdata('loginsbgadmindetails');
        $data['pagetitle']	=	'Banners Page';
        $data['banners']	=	$this->Model_default->select_data('sbgi_banners',array('status'=>1),'id DESC');
        $data['bannerdetails']	=	$this->Model_default->select_data('sbgi_banners',array('status'=>1,'id'=>$id),'id DESC');
        $this->manualview('admin/header','admin/banners_page','admin/footer',$data);
    }

    public function saveEditdetails(){
        extract($_REQUEST);
        $path = 'uploads/banners/';
        $details = $this->Model_default->select_data('sbgi_banners',array('id'=>$edit_id),'id DESC');
        if(!empty($_FILES['BannersImages']['name'])){
            $uploadfile = $this->uploadfiles($path,'BannersImages','jpg|png|jpeg',TRUE);
            if($uploadfile['status'] == 1){
                @$unlink = unlink($details[0]->image);
                $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            }else{
                $this->failedalert('Image upload Failed. Try again..!','Unable to uload image file or oops error..!');
                redirect(base_url('cpanel/dashboard/banners'));
            }
        }else{
            if(isset($Uploaded_image) && !empty($Uploaded_image)){
                $uploadedfile =  $Uploaded_image;
            }else{
                $uploadedfile = '';
            }
        }
        $conduction = array('id'=>$edit_id);
        $insertdata = array('image'=>$uploadedfile,'banner_title'=>$bannerTitle,'information'=>$Information,'links'=>$BannerURl,'updated'=>date('Y-m-d H:i:s'));
        $insertbanners = $this->Model_default->update_data('sbgi_banners',$insertdata,$conduction);
        if($insertbanners != 0){
            $this->successalert('Successfully Update Banner Details.','You have Update banner details sucessfully please check once..!');
            redirect(base_url('admin/banners'));
        }else{
            $this->failedalert('Failed to Update Banner Details.','Unable to Update banner details or oops error..!');
            redirect(base_url('admin/banners'));
        }
    }

	/* How we are */
	public function howeAre(){
		$data['pagetitle']	=	'How we are..!';
		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');
        $data['howearedata']	= $this->Model_default->select_data('sbgi_howeare_data',array('status'=>1),'RAND(id)  DESC');
        $data['howeare']	= $this->Model_default->select_data('sbgi_howeare_details',array('status'=>1),'RAND(id)  DESC');
		$this->manualview('admin/header','admin/howeare_page','admin/footer',$data);
	}

    /* Save Data */
    public function howeAreSavedata()
    {
        extract($_REQUEST);
        $path = 'uploads/homepage/';
        if(!empty($_FILES['uploadImages']['name'])){
            if(file_exists($path)){
                $uploadfile = $this->uploadfiles($path,'uploadImages','jpg|png|jpeg',TRUE);
                $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            }else{
                $this->createdir($path,$path);
                $uploadfile = $this->uploadfiles($path,'uploadImages','jpg|png|jpeg',TRUE);
                $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            }
        }else{
            $uploadedfile = '';
        }

        $insertdata = array('banner_title'=>$title_name,'image'=>$uploadedfile,'information'=>$description);
        $insertbanners = $this->Model_default->insert_data('sbgi_howeare_details',$insertdata);
        if($insertbanners != 0){
            $this->successalert('Successfully Saved Details.','You have Save details sucessfully please check once..!');
            redirect(base_url('admin/howeare'));
        }else{
            $this->failedalert('Failed to save Details.','Unable to save details or oops error..!');
            redirect(base_url('admin/howeare'));
        }
        
    }

    /* Delete Delete data */
    public function howeAreDeletedata()
    {
        $id = $this->uri->segment(3);
        if(isset($id) && !empty($id)){
            $conduction = 	array('id'=>$id);
            $updating	=	$this->Model_default->delete_data('sbgi_howeare_details',$conduction);
            if($updating != 0){
                $this->successalert('Successfully Delete Details.','You have Delete details sucessfully please check once..!');
                redirect(base_url('admin/howeare'));
            }else{
                $this->failedalert('Failed to Delete Details.','Unable to Delete details or oops error..!');
                redirect(base_url('admin/howeare'));
            }
        }else{
            $this->failedalert('Failed to Delete Details.','Unable to Delete details or Invalid oops error..!');
            redirect(base_url('admin/howeare'));
        }
    }

    public function howeAreInterDeletedata()
    {
        $id = $this->uri->segment(3);
        if(isset($id) && !empty($id)){
            $conduction = 	array('id'=>$id);
            $updating	=	$this->Model_default->delete_data('sbgi_howeare_data',$conduction);
            if($updating != 0){
                $this->successalert('Successfully Delete Details.','You have Delete details sucessfully please check once..!');
                redirect(base_url('admin/howeare'));
            }else{
                $this->failedalert('Failed to Delete Details.','Unable to Delete details or oops error..!');
                redirect(base_url('admin/howeare'));
            }
        }else{
            $this->failedalert('Failed to Delete Details.','Unable to Delete details or Invalid oops error..!');
            redirect(base_url('admin/howeare'));
        }
    }

    /* video save */
    public function interSavedata()
    {
        extract($_REQUEST);
        $this->print_r($_REQUEST);
        //$this->print_r($_FILES);
        $path = 'uploads/homepage/';
        if(!empty($_FILES['uploadvideo']['name'])){
            if(file_exists($path)){
                $uploadfile = $this->uploadfiles($path,'uploadvideo','mp4|avi|mov|mpeg',TRUE);
                $uploadedvideofile = $path.$uploadfile['uploaddata']['file_name'];
            }else{
                $this->createdir($path,$path);
                $uploadfile = $this->uploadfiles($path,'uploadvideo','mp4|avi|mov|mpeg',TRUE);
                $uploadedvideofile = $path.$uploadfile['uploaddata']['file_name'];
            }
        }else{
            $uploadedvideofile = '';
        }
        
        $mpath = 'uploads/homepage/slides/';
        if(count($_FILES['uploadImages']) != 0){
            if(file_exists($mpath)){
                $uploadedimagefile =  $this->multiuploadfiles($mpath,'uploadImages','jpg|jpeg|png',TRUE,'','');
                $uploadedimages = $uploadedimagefile['uploaddata'];
            }else{
                $this->createdir($mpath,$mpath);
                $uploadedimagefile =  $this->multiuploadfiles($mpath,'uploadImages','jpg|jpeg|png',TRUE,'','');
                $uploadedimages = $uploadedimagefile['uploaddata'];
            }
        }else{
            $uploadedimages = '';
        }

        $insertdata = array('banner_title'=>$title_name,'images'=>$uploadedimages,'video'=> $uploadedvideofile,'information'=>$description,'links' => $video_link);
        $insertbanners = $this->Model_default->insert_data('sbgi_howeare_data',$insertdata);
        if($insertbanners != 0){
            $this->successalert('Successfully Saved Details.','You have Save details sucessfully please check once..!');
            redirect(base_url('admin/howeare'));
        }else{
            $this->failedalert('Failed to save Details.','Unable to save details or oops error..!');
            redirect(base_url('admin/howeare'));
        }
    }

    /* Gallery Part */
    public function gallerypart()
    {
        $data['userdata']   =   $this->session->userdata('loginsbgadmindetails');
        $data['pagetitle']	=	'Gallery Page';
        $data['gallery']	=	 $this->Model_default->select_data('sbgi_gallery_details',array('status'=>1,'gallery_type' => 1),'updated DESC');
        $this->manualview('admin/header','admin/gallery_page','admin/footer',$data);
    }

    public function gallerySavedata()
    {
        extract($_REQUEST);
        // $this->print_r($_REQUEST);
        // $this->print_r($_FILES);
        //images
        $path = 'uploads/gallery/images/';
        if(!empty($_FILES['GalleryImages']['name'])){
            if(file_exists($path)){
                $uploadfile = $this->uploadfiles($path,'GalleryImages','jpg|png|jpeg',TRUE);
                $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            }else{
                $this->createdir($path,$path);
                $uploadfile = $this->uploadfiles($path,'GalleryImages','jpg|png|jpeg',TRUE);
                $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            }
        }else{
            $uploadedfile = '';
        }

        //videos
        $path = 'uploads/gallery/videos/';
        if(!empty($_FILES['uploadvideo']['name'])){
            if(file_exists($path)){
                $uploadfile = $this->uploadfiles($path,'uploadvideo','mp4|avi|mov|mpeg',TRUE);
                $uploadedvideofile = $path.$uploadfile['uploaddata']['file_name'];
            }else{
                $this->createdir($path,$path);
                $uploadfile = $this->uploadfiles($path,'uploadvideo','mp4|avi|mov|mpeg',TRUE);
                $uploadedvideofile = $path.$uploadfile['uploaddata']['file_name'];
            }
        }else{
            $uploadedvideofile = '';
        }

        $data = array('gallery_type'=>$gallery_id,'plot_id'=>$plot_id,'title'=>$bannerTitle,'images'=>$uploadedfile,'videos'=>$uploadedvideofile,'information'=>$information);
        $insertbanners = $this->Model_default->insert_data('sbgi_gallery_details',$data);
        if($insertbanners != 0){
            $this->successalert('Successfully Saved Details.','You have Save details sucessfully please check once..!');
            redirect(base_url('admin/gallery'));
        }else{
            $this->failedalert('Failed to save Details.','Unable to save details or oops error..!');
            redirect(base_url('admin/gallery'));
        }
    }

    /* Delete gallery item */
    public function deleteGalleryitem()
    {
        $id = $this->uri->segment(3);
        if(isset($id) && !empty($id)){
            $conduction = 	array('id'=>$id);
            $updating	=	$this->Model_default->delete_data('sbgi_gallery_details',$conduction);
            if($updating != 0){
                $this->successalert('Successfully Delete Details.','You have Delete details sucessfully please check once..!');
                redirect(base_url('admin/gallery'));
            }else{
                $this->failedalert('Failed to Delete Details.','Unable to Delete details or oops error..!');
                redirect(base_url('admin/gallery'));
            }
        }else{
            $this->failedalert('Failed to Delete Details.','Unable to Delete details or Invalid oops error..!');
            redirect(base_url('admin/gallery'));
        }
    }

    /* Layout Gallery */
    public function layoutGallerypart()
    {
        $data['userdata']   =   $this->session->userdata('loginsbgadmindetails');
        $data['pagetitle']	=	'Layout Gallery Page';
        $data['gallery']	=	 $this->Model_default->select_data('sbgi_gallery_details',array('status'=>1,'gallery_type' => 2),'updated DESC');
        $data['layouts']    =   $this->Model_default->select_data('sbgi_sub_zones',array('status'=>1));
        $this->manualview('admin/header','admin/gallery_plots_page','admin/footer',$data);
    }

    public function layoutgallerySavedata()
    {
        extract($_REQUEST);
        // $this->print_r($_REQUEST);
        // $this->print_r($_FILES);
        // exit;
        //images
        $path = 'uploads/gallery/images/';
        if(!empty($_FILES['GalleryImages']['name'])){
            if(file_exists($path)){
                $uploadfile = $this->uploadfiles($path,'GalleryImages','jpg|png|jpeg',TRUE);
                $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            }else{
                $this->createdir($path,$path);
                $uploadfile = $this->uploadfiles($path,'GalleryImages','jpg|png|jpeg',TRUE);
                $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
            }
        }else{
            $uploadedfile = '';
        }

        //videos
        $path = 'uploads/gallery/videos/';
        if(!empty($_FILES['uploadvideo']['name'])){
            if(file_exists($path)){
                $uploadfile = $this->uploadfiles($path,'uploadvideo','mp4|avi|mov|mpeg',TRUE);
                $uploadedvideofile = $path.$uploadfile['uploaddata']['file_name'];
            }else{
                $this->createdir($path,$path);
                $uploadfile = $this->uploadfiles($path,'uploadvideo','mp4|avi|mov|mpeg',TRUE);
                $uploadedvideofile = $path.$uploadfile['uploaddata']['file_name'];
            }
        }else{
            $uploadedvideofile = '';
        }

        $data = array('gallery_type'=>$gallery_id,'plot_id'=>$plot_id,'title'=>$imageTitle,'images'=>$uploadedfile,'videos'=>$uploadedvideofile,'information'=>$information);
        $insertbanners = $this->Model_default->insert_data('sbgi_gallery_details',$data);
        if($insertbanners != 0){
            $this->successalert('Successfully Saved Details.','You have Save details sucessfully please check once..!');
            redirect(base_url('admin/layout/gallery'));
        }else{
            $this->failedalert('Failed to save Details.','Unable to save details or oops error..!');
            redirect(base_url('admin/layout/gallery'));
        }
    }

    public function deletelayoutGalleryitem()
    {
        $id = $this->uri->segment(3);
        if(isset($id) && !empty($id)){
            $conduction = 	array('id'=>$id);
            $updating	=	$this->Model_default->delete_data('sbgi_gallery_details',$conduction);
            if($updating != 0){
                $this->successalert('Successfully Delete Details.','You have Delete details sucessfully please check once..!');
                redirect(base_url('admin/gallery'));
            }else{
                $this->failedalert('Failed to Delete Details.','Unable to Delete details or oops error..!');
                redirect(base_url('admin/gallery'));
            }
        }else{
            $this->failedalert('Failed to Delete Details.','Unable to Delete details or Invalid oops error..!');
            redirect(base_url('admin/gallery'));
        }
    }
}
