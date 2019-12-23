<?php

defined('BASEPATH') OR exit('No direct script access allowed');



//base controller

require APPPATH . '/libraries/BaseController.php';

class SiteController extends BaseController {



	public function __construct(){
        parent::__construct();
		$this->load->model('Model_default');
		$this->sitedetails = $this->Model_default->select_data('sbgi_site_details',array('status'=>1));
    }
	

	public function index(){
		$data['islogin'] = $this->session->userdata('userlogin');
		$data['userdata']	=	$this->session->userdata('usersdata');
		$data['pagetitle']	=	'welcome to sbgindia';
		$data['sitedetails']=	$this->sitedetails;
		$data['banners'] = $this->Model_default->select_data('sbgi_banners',array('status'=>1));
		$data['howearedata']	= $this->Model_default->select_data('sbgi_howeare_data',array('status'=>1),'RAND(id)  DESC',1);
		$data['projects']	= $this->Model_default->select_data('sbgi_sub_zones',array('status'=>1),'id DESC');
		$data['howeare']	= $this->Model_default->select_data('sbgi_howeare_details',array('status'=>1),'id  DESC',3);
		$data['gallery']	=	$this->Model_default->select_data('sbgi_gallery_details',array('status'=>1,'gallery_type' => 1),'RAND(id) DESC',8);
		$this->loadViews('home_page',$data);
	}

	public function galleryList(){
		$data['islogin'] 	= $this->session->userdata('userlogin');
		$data['userdata']	=	$this->session->userdata('usersdata');
		$data['pagetitle']	=	'Gallery || sbgindia';
		$data['sitedetails']=	$this->sitedetails;
		$data['gallery']	=	$this->Model_default->select_data('sbgi_gallery_details',array('status'=>1,'gallery_type' => 1),'id DESC');
		$this->loadViews('gallery',$data);
	}

	public function aboutus(){
		$data['islogin'] = $this->session->userdata('userlogin');
		$data['userdata']	=	$this->session->userdata('usersdata');
		$data['pagetitle']	=	'about sbgindia';
		$data['sitedetails']=	$this->sitedetails;
		$data['aboutus']	=	$this->Model_default->select_data('sbgi_about_us',array('status'=>1));
		$this->loadViews('about_page',$data);
	}
	
	public function contactus(){
		$data['islogin'] = $this->session->userdata('userlogin');
		$data['userdata']	=	$this->session->userdata('usersdata');
		$data['pagetitle']	=	'about sbgindia';
		$data['sitedetails']=	$this->sitedetails;
		$this->loadViews('contactus_page',$data);
	}

	public function AgentLogin(){
		$data['islogin'] = $this->session->userdata('userlogin');
		$data['userdata']	=	$this->session->userdata('usersdata');
		$data['pagetitle']	=	'Agent login';
		$data['sitedetails']=	$this->sitedetails;
		$this->loadViews('agent_login',$data);
	}

	public function downloadProjects()
	{
		# code...
		$data['islogin'] = $this->session->userdata('userlogin');
		$data['userdata']	=	$this->session->userdata('usersdata');
		$data['pagetitle']	=	'Downloads';
		$data['sitedetails']=	$this->sitedetails;
		$data['projects']	= $this->Model_default->select_data('sbgi_brochures',array('status'=>1),'id DESC');
		$this->loadViews('downloads',$data);
	}

	public function loginAccess(){
		extract($_REQUEST);
		$this->print_r($_REQUEST);
		$userdata = $this->Model_default->select_data('sbgi_agent_registrations',array('email_id'=>$login_id));
		if(count($userdata) != 0){
			//get password
			$password = $this->Model_default->select_data('sbgi_agent_registrations',array('email_id'=>$login_id,'password'=>$password));
			if(count($password) != 0){
				if($password[0]->status == 1){
					//redirect to details page
					$this->session->set_userdata('usersdata',$password[0]);
					$this->session->set_userdata('userlogin',1);
					redirect(base_url('agents/details'));
				}else{
					//Your account disable
					$this->session->set_flashdata('failed','No Account Found or Disabled your account..!');
					redirect(base_url('agents/loginaccount'));
				}
			}else{
				//invalid password
				$this->session->set_flashdata('failed','Invalid login Password..!');
				redirect(base_url('agents/loginaccount'));
			}
		}else{
			//invalid login id
			$this->session->set_flashdata('failed','Invalid login Id..!');
			redirect(base_url('agents/loginaccount'));
		}
	}

	public function logoutAccount(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function AgentDetails()
	{
		$data['sitedetails']=	$this->sitedetails;
		$login = $this->session->userdata('userlogin');
		if($login == 1){
			$data['pagetitle']	=	'Agent Details';
			$data['userdata']	=	$this->session->userdata('usersdata');
			$data['islogin']	=	$login;
			$data['agents']	    =	$this->Model_default->select_data('sbgi_agent_registrations',array('status'=>1));
			$data['govt_ids']   =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'govt_ids','status'=>1));
			$data['position']   =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'position','status'=>1));
			$data['genders']    =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'gender','status'=>1));
			$data['zones']	    = 	$this->Model_default->select_data('sbgi_zones',array('status'=>1));
			$data['positions']	= 	$this->Model_default->select_data('sbgi_formdata',array('status <='=>1, 'type'=>'position'));
			$data['taxs']       = 	$this->Model_default->select('*', 'sbgi_taxs' ,array('status'=>1));
			$data['agentsdata'] = 	$this->Model_default->select_data('sbgi_agent_data', array('status'=>1),'id DESC');
			$this->loadViews('agentdetails_page',$data);
		}else{
			redirect(base_url('agents/loginaccount'));
		}
	}

	public function profileDetails()
	{
		$data['sitedetails']=	$this->sitedetails;
		$login = $this->session->userdata('userlogin');
		if($login == 1){
			$data['pagetitle']	=	'Profile : : Agent Details';
			$data['userdata']	= $userdata =	$this->session->userdata('usersdata');
			$data['islogin']	=	$login;
			$data['agents']	=	$this->Model_default->select_data('sbgi_agent_registrations',array('status'=>1,'id'=>$userdata->id));
			$data['govt_ids'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'govt_ids','status'=>1));
			$data['position'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'position','status'=>1));
			$data['genders'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'gender','status'=>1));	
			$agentdata = $this->Model_default->select_data('sbgi_agent_registrations',array('id'=>$userdata->id));
			$data['agent'] = $agentdata[0];
			$this->loadViews('agentprofiledetails_page',$data);
		}else{
			redirect(base_url('agents/loginaccount'));
		}
	}

	public function saveeditdetails()
	{
		extract($_REQUEST);
		$checkwhere = "mobile = '".$agent_mobile."' OR email_id = '".$agent_email."'";
		$checkdetails = $this->Model_default->select_data('sbgi_agent_registrations',$checkwhere);
		if(count($checkdetails) <= 0){
			//mobile or email already registered
			$this->session->set_flashdata('failed','Invalid Request to edit details..!');
			redirect(base_url('agents/profiledetails'));
		}else{
			$inserting = array('name' => $agent_name,'father_husband' => $agent_fhname,'dob' => date('Y-m-d',strtotime($agent_dob)), 'gender'=>$agent_gender, 'qualification' => $agent_qualification, 'mobile'=>$agent_mobile, 'email_id' => $agent_email, 'address' => $agent_address, 'card_id' => $agent_id, 'bank_acc_number' => $agent_acc_num, 'bank_name' => $agent_bank_name, 'bank_branch' => $agent_branch_name, 'bank_ifsc' => $agent_bank_ifsc, 'senior_id' => $agent_senior_id, 'senior_name' => $agent_senior_name, 'updated' => date('Y-m-d H:i:s'), 'state' => $agent_state, 'city' => $agent_city, 'pincode' => $agent_pincode);
			$insert = $this->Model_default->update_data('sbgi_agent_registrations',$inserting,array('id'=>$edit_id));
			if($insert != 0){
				//success redirect to agentlist or edit
				$this->session->set_flashdata('success','Details are successfully Updated..!');
				redirect(base_url('agents/profiledetails'));				 
			}else{
				//failed redirect to add to retry
				$this->session->set_flashdata('failed','Details not updated.try again or later..!');
				redirect(base_url('agents/profiledetails'));
			}
		}
	}

	public function savepasswordDetails()
	{
		extract($_REQUEST);
		$this->print_r($_REQUEST);
		if($password == $confirm_password){
			$inserting = array('password' => $password, 'updated' => date('Y-m-d H:i:s'));
			$insert = $this->Model_default->update_data('sbgi_agent_registrations',$inserting,array('id'=>$edit_id));
			if($insert != 0){
				//success redirect to agentlist or edit
				$this->session->set_flashdata('success','Password are successfully Updated..!');
				redirect(base_url('agents/profiledetails'));				 
			}else{
				//failed redirect to add to retry
				$this->session->set_flashdata('failed','Password not updated.try again or later..!');
				redirect(base_url('agents/profiledetails'));
			}
		}else{
			$this->session->set_flashdata('failed','Password and confirm Password Not Same..!');
			redirect(base_url('agents/profiledetails'));
		}
	}

	public function projects(){
		$data['islogin'] = $this->session->userdata('userlogin');
		$data['userdata']	=	$this->session->userdata('usersdata');
		extract($_REQUEST);
		$data['sitedetails']=	$this->sitedetails;
		$id = $this->uri->segment(2);
		if(isset($id) && !empty($id)){
			$title = $this->uri->segment(3);
			$data['pagetitle']	=	str_replace('-',' ',$title).' layout projects';
			$latestproject	= $this->Model_default->select_data('sbgi_sub_zones',array('id'=>$id),'id DESC',1);
			$data['projects']	= $this->Model_default->query('SELECT * FROM sbgi_sub_zones WHERE status = 1 AND id != '.$id.' ORDER BY RAND() LIMIT 3');
			$data['latestproject'] = $latestproject;
		}else{
			$data['pagetitle']	=	'Our Projects';
			//$latestproject	= $this->Model_default->select_data('sbgi_sub_zones',array('status'=>1),'id DESC',1);
			$data['projects']	= $this->Model_default->select_data('sbgi_sub_zones',array('status'=>1),'id DESC');
		}
		
		$data['zones']	= $this->Model_default->select_data('sbgi_zones',array('status'=>1));		
		$this->loadViews('projects_page',$data);
	}

	public function layoutflatenqdetails(){
		$data['islogin'] = $this->session->userdata('userlogin');
		$data['userdata']	=	$this->session->userdata('usersdata');
		extract($_REQUEST);
		$data['sitedetails']=	$this->sitedetails;
		$project	= $this->Model_default->select_data('sbgi_sub_zones',array('id'=>$layout_id));
		$flats = unserialize($project[0]->slots_details);
		if(!empty($flats[$flat_id])){
			$flat_info_details = serialize($flats[$flat_id]);
		}else{
			$flat_info_details = '';
		}
		$insertdata = array('layout_id'=>$layout_id, 'flat_id'=>$flat_id, 'flat_details'=>$flat_details, 'name'=>$name, 'mobile'=>$mobile, 'mail_id'=>$mail_id, 'details'=>$details, 'flat_info_details'=>$flat_info_details);
		$insert = $this->Model_default->insert_data('sbgi_enq_details',$insertdata);
		if($insert != 0){
			$insertdata['layout_name']  = $project[0]->subzone_name;
			$viewdetails['viewdetails'] = $insertdata;
			//sbgindia6@gmail.com
			$this->sendemail('mail_templates/flat_enq_details', $viewdetails, $mail_id, 'sbgindia6@gmail.com', $project[0]->subzone_name.' Layout of '.$flat_id.' Flat Enquery by '.$name,'',$name,'sbgindia');
			$this->session->set_flashdata('success','successfully sent..!');
			redirect(base_url('projects/'.$layout_id.'/'.url_title($project[0]->subzone_name).'?layout='.$layout_id));
		}else{
			$this->session->set_flashdata('failed','Details not saved.try again or later..!');
			redirect(base_url('projects/'.$layout_id.'/'.url_title($project[0]->subzone_name).'?layout='.$layout_id));
		}
	}

	public function savefeedbackrcontact(){
		$data['islogin'] = $this->session->userdata('userlogin');
		$data['userdata']	=	$this->session->userdata('usersdata');
		extract($_REQUEST);
		$data['sitedetails']=	$this->sitedetails;
		$tomail = 'sbgindia6@gmail.com';
		$insertdata = array('first_name'=>$contact_name,'email_id'=>$contact_email,'mobile'=>$contact_phone,'message'=>$contact_message);
		$insert = $this->Model_default->insert_data('sbgi_feedback_contact',$insertdata);
		if($insert != 0){
			//send mail
			$viewdetails['maildata'] = $insertdata;
			$title = 'Request from '.$contact_name;
			$this->sendemail('mail_templates/request_feedback',$viewdetails,$contact_email,$tomail,$title,'',$contact_name,'security system');
			$data = array('status'=>1,'message'=>'Successfully sent request..!');
		}else{
			$data = array('status'=>0,'message'=>'Failed to sent request..!');
		}
		echo json_encode($data);
	}
	
}

