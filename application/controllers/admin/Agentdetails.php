<?php

defined('BASEPATH') OR exit('No direct script access allowed');



//base controller

require APPPATH . '/libraries/BaseController.php';

class Agentdetails extends BaseController {

	public function __construct(){

        parent::__construct();

        $this->isAdminLoggedIn();

		$this->agentdetails = $this->session->userdata('loginsbgadmindetails');

        $this->load->model('Model_default');

    }

	public function index(){

		$data['pagetitle']	=	'Agent Dashboard';

		$data['userdata'] = $this->agentdetails;

		$data['agents']	=	$this->Model_default->select_data('sbgi_agent_registrations',array('status'=>1));

		$data['govt_ids'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'govt_ids','status'=>1));

		$data['position'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'position','status'=>1));

		$data['genders'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'gender','status'=>1));

		$data['zones']	= $this->Model_default->select_data('sbgi_zones',array('status'=>1));

		$data['positions']	= $this->Model_default->select_data('sbgi_formdata',array('status <='=>1, 'type'=>'position'));

		$data['taxs'] = $this->Model_default->select('*', 'sbgi_taxs' ,array('status'=>1));

		$data['agentsdata'] = $this->Model_default->select_data('sbgi_agent_data', array('status'=>1),'id DESC');

		$this->manualview('admin/header','admin/agents/agent_details','admin/footer',$data);

	}

	public function enquirylist(){
		
		$data['pagetitle']	=	'Enquery List';
		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');
		$data['agents']	=	$this->Model_default->select_data('sbgi_agent_registrations',array('status'=>1),'id DESC');
		$data['govt_ids'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'govt_ids','status'=>1));
		$data['position'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'position','status'=>1));
		$data['genders'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'gender','status'=>1));
		$data['enquiry'] =	$this->Model_default->select_data('sbgi_enq_details',array('status'=>1),'id DESC');
		$this->manualview('admin/header','admin/layoutenquery_list','admin/footer',$data);
	}
	
}