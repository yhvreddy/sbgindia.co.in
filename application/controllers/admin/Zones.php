<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//base controller
require APPPATH . '/libraries/BaseController.php';
class zones extends BaseController {

	public function __construct(){
        parent::__construct();
        $this->isAdminLoggedIn();
        $this->load->model('Model_default');
    }
	
	public function index(){
		$data['pagetitle']	=	'Zones';
		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');
		$data['zones']	= $this->Model_default->select_data('sbgi_zones',array('status'=>1));
		$this->manualview('admin/header','admin/zones_page','admin/footer',$data);
	}

	public function zoneSave(){
		extract($_REQUEST);
		// $this->print_r($_REQUEST);
		// exit;
		$path = 'uploads/zones/';
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
		$insertbanners = $this->Model_default->insert_data('sbgi_zones',$insertdata);
		if($insertbanners != 0){
			$this->session->set_flashdata('success','Successfully Saved Zone Details.');
			redirect(base_url('admin/dashboard/zones'));
		}else{
			$this->session->set_flashdata('failed','Failed to save Zone Details.');
			redirect(base_url('admin/dashboard/zones'));
		} 
	}

	public function editZones(){
		$id = $this->uri->segment(4);
		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');
		$data['pagetitle']	=	'Edit Categories';
		$data['zones']	=	$this->Model_default->select_data('sbgi_zones',array('status'=>1),'id DESC');
		$data['zone']	=	$this->Model_default->select_data('sbgi_zones',array('status'=>1,'id'=>$id),'id DESC');
		$this->manualview('admin/header','admin/zones_page','admin/footer',$data);
	}

	public function saveEditZones(){
		extract($_REQUEST);
		// $this->print_r($_REQUEST);
		// exit;
		$path = 'uploads/zones/';
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
		$updatedata = $this->Model_default->update_data('sbgi_zones',$insertdata,$conduction);
		if($updatedata != 0){
			$this->session->set_flashdata('success','Successfully Update zone Details.');
			redirect(base_url('admin/dashboard/zones'));
		}else{
			$this->session->set_flashdata('failed','Failed to Update zone Details.');
			redirect(base_url('admin/dashboard/zones'));
		} 
	}

	public function deleteZones(){
		$id = $this->uri->segment(4);
		if(isset($id) && !empty($id)){
			$conduction = 	array('id'=>$id);
			$updatedata	=	array('status'=>0);
			$updating	=	$this->Model_default->update_data('sbgi_zones',$updatedata,$conduction);
			if($updating != 0){
				$this->session->set_flashdata('success','Successfully Delete zone Details.');
				redirect(base_url('admin/dashboard/zones'));
			}else{
				$this->session->set_flashdata('failed','Failed to Delete zone Details.');
				redirect(base_url('admin/dashboard/zones'));
			} 
		}else{
			$this->session->set_flashdata('failed','Unable to Delete zone details or Invalid oops error..!');
			redirect(base_url('admin/dashboard/zones'));
		}
	}

	/***** subzones *****/
	public function subzones(){
		$data['pagetitle']	=	'SubZones';
		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');
		$data['zones']	= $this->Model_default->select_data('sbgi_zones',array('status'=>1));
		$data['subzones']	= $this->Model_default->select_data('sbgi_sub_zones',array('status'=>1),'id DESC');
		$this->manualview('admin/header','admin/subzones_page','admin/footer',$data);
	}

	//subzones list
	public function subzonesList(Type $var = null)
	{
		$data['pagetitle']	=	'SubZones list';
		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');
		$data['zones']	= $this->Model_default->select_data('sbgi_zones',array('status'=>1));
		$data['subzones']	= $this->Model_default->select_data('sbgi_sub_zones',array('status'=>1),'updated DESC');
		$this->manualview('admin/header','admin/subzoneslist_page','admin/footer',$data);
	}

	public function subzoneSave(){
		extract($_REQUEST);
		//$this->print_r($_REQUEST);
		//$this->print_r($_FILES);
		//exit();
		$path = 'uploads/subzones_layouts/';
		if($_FILES['CategoryImages']['name'] != ''){
			if(file_exists($path)){
				$uploadfile = $this->uploadfiles($path,'CategoryImages','jpg|png|jpeg',TRUE);
				$uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
			}else{
				$this->createdir($path,$path);
				$uploadfile = $this->uploadfiles($path,'CategoryImages','jpg|png|jpeg',TRUE);
				$uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
			}
		}else{
			$uploadedfile = '';
		}
		$insertdata = array('zone_id'=>$category_name,'slots'=>$slots,'image'=>$uploadedfile,'subzone_name'=>$subcategory_name,'information'=>$Information,'updated' => date('Y-m-d H:i:s'));
		$insert_data = $this->Model_default->insert_data('sbgi_sub_zones',$insertdata);
		if($insert_data != 0){
			$slots_details = array();
			for($i=1; $i <= $slots; $i++) { 
				$slots_details['S'.$insert_data.'0'.$i] = array('slot_id'=>'S'.$insert_data.'0'.$i,'plot_id' => '','details'=>'','slot_id_num'=>$i,'sale_amount'=>'','status'=>'','color'=>'');
			}
			$conduction  = array('id'=>$insert_data);
			$update = array('slots_details'=>serialize($slots_details));
			$this->Model_default->update_data('sbgi_sub_zones',$update,$conduction);
			$this->session->set_flashdata('success','Successfully Saved SubZone Details.');
			redirect(base_url('admin/dashboard/subzone/'.$insert_data.'/edit'));
		}else{
			$this->session->set_flashdata('failed','Failed to save SubZone Details.');
			redirect(base_url('admin/dashboard/subzones'));
		} 
	}

	public function editSubzone(){
		$id = $this->uri->segment(4);
		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');
		$data['pagetitle']	=	'Edit SubZone & assign slots';
		$data['zones']	= $this->Model_default->select_data('sbgi_zones',array('status'=>1));
		$data['subzone']	=	$this->Model_default->select_data('sbgi_sub_zones',array('status'=>1,'id'=>$id),'id DESC');
		$this->manualview('admin/header','admin/subzones_edit_page','admin/footer',$data);
	}

	public function saveEditSubzone(){
		extract($_REQUEST);
		$data = $this->Model_default->select_data('sbgi_sub_zones',array('id'=>$edit_id));
		// $this->print_r($_REQUEST);
		// $this->print_r($_FILES);
		// $this->print_r(unserialize($data[0]->slots_details));
		// exit;
		$slotdata = array();
		$i = 0;
		$colors = array('Avaliable'=>'#3db818','Booked'=>'#d41326','Reserved'=>'#d18e08');
		foreach ($slot_keys as $key => $value) {
			$status = $site_status[$i];
			$slotdata[$value] = array('slot_id'=>$value,'plot_id'=>$plot_id[$i],'details'=>$slot_details[$i],'slot_id_num'=>$slot_id_num[$i],'sale_amount'=>$sale_amount[$i],'status'=>$status,'color'=>$colors[$status]);
			$i++;
		}
		
		$path = 'uploads/subzones_layouts/';
		if($_FILES['CategoryImages']['name'] != ''){
			if(file_exists($path)){
				$uploadfile = $this->uploadfiles($path,'CategoryImages','jpg|png|jpeg',TRUE);
			}else{
				$this->createdir($path,$path);
				$uploadfile = $this->uploadfiles($path,'CategoryImages','jpg|png|jpeg',TRUE);
			}
			if($uploadfile['status'] == 1){
				@unlink($data[0]->image);
				$uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
			}else{
				$uploadedfile = '';
			}
		}else{
			$uploadedfile = $uploaded_image;
		}

		$conduction	=	array('id'=>$edit_id);
		$insertdata = array('zone_id'=>$category_name,'slots'=>$slots,'image'=>$uploadedfile,'subzone_name'=>$subcategory_name,'information'=>$Information,'slots_details'=>serialize($slotdata),'updated' => date('Y-m-d H:i:s'));
		$updatedata = $this->Model_default->update_data('sbgi_sub_zones',$insertdata,$conduction);
		if($updatedata != 0){
			$this->session->set_flashdata('success','Successfully Update zone Details.');
			redirect(base_url('admin/dashboard/subzonesList'));
		}else{
			$this->session->set_flashdata('failed','Failed to Update zone Details.');
			redirect(base_url('admin/dashboard/subzones'));
		} 
	}

	public function deleteSubzone(){
		$id = $this->uri->segment(4);
		if(isset($id) && !empty($id)){
			$conduction = 	array('id'=>$id);
			$updatedata	=	array('status'=>0);
			$updating	=	$this->Model_default->update_data('sbgi_sub_zones',$updatedata,$conduction);
			if($updating != 0){
				$this->session->set_flashdata('success','Successfully Delete zone Details.');
				redirect(base_url('admin/dashboard/subzonesList'));
			}else{
				$this->session->set_flashdata('failed','Failed to Delete zone Details.');
				redirect(base_url('admin/dashboard/subzonesList'));
			} 
		}else{
			$this->session->set_flashdata('failed','Unable to Delete zone details or Invalid oops error..!');
			redirect(base_url('admin/dashboard/subzonesList'));
		}
	}

}
