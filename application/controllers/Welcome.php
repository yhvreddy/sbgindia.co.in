<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//base controller
require APPPATH . '/libraries/BaseController.php';
class Welcome extends BaseController {

	public function __construct(){
        parent::__construct();
        $this->load->model('Model_default');
    }
	
	public function index(){
		$data['pagetitle']	=	'Admin Login';
		$this->load->view('login',$data);
	}

	public function loginAcccess(){
		extract($_REQUEST);
//		$this->print_r($_REQUEST);
//		exit;
		$checkwhere = "mobile = '".$login_id."' OR email_id = '".$login_id."'";
		$checkdetails = $this->Model_default->select_data('sbgi_admin_users',$checkwhere);
		if(count($checkdetails) > 0){
			$checkwhere = "(".$checkwhere.") AND password = '".$login_password."'";
			$loginaccess  = $this->Model_default->select_data('sbgi_admin_users',$checkwhere);
			if(count($loginaccess) > 0){
				//redirect to dashboard
				$this->session->set_userdata('loginsbgadmindetails',$loginaccess);
				redirect(base_url('admin/dashboard'));
			}else{
				//redirect to login for invalid password
				$this->session->set_flashdata('failed','Please enter correct password..!');
				redirect(base_url('admin'));
			}
		}else{
			$checkadetails = $this->Model_default->select_data('sbgi_agent_registrations',$checkwhere);
			if(count($checkadetails) != 0){
				$checkwhere = "(".$checkwhere.") AND password = '".$login_password."'";
				$loginaccess  = $this->Model_default->select_data('sbgi_agent_registrations',$checkwhere);
				if(count($loginaccess) > 0){
					//redirect to dashboard
					$this->session->set_userdata('loginsbgadmindetails',$loginaccess);
					redirect(base_url('agent/dashboard'));
				}else{
					//redirect to login for invalid password
					$this->session->set_flashdata('failed','Please enter correct password..!');
					redirect(base_url('admin'));
				}
			}else{
				//enter correct login id
				$this->session->set_flashdata('failed','Please enter correct login id..!');
				redirect(base_url('admin'));
			}
		}
	}
	
	public function accessDashboard(){
		$this->isAdminLoggedIn();
		$data['pagetitle'] =	'Admin Dashbard';
        $data['userdata'] = $this->session->userdata('loginsbgadmindetails');
		$this->manualview('admin/header','admin/dashboard','admin/footer',$data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}
}
