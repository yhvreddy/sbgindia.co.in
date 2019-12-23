<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//base controller
require APPPATH . '/libraries/BaseController.php';
class Agent extends BaseController {

	public function __construct(){
        parent::__construct();
        $this->isAdminLoggedIn();
        $this->load->model('Model_default');
    }
	
	public function addNewAgent(){
		$data['pagetitle']	=	'Agent Register';
		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');
		$data['agents']	=	$this->Model_default->select_data('sbgi_agent_registrations',array('status'=>1));
		$data['govt_ids'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'govt_ids','status'=>1));
		$data['position'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'position','status'=>1));
		$data['genders'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'gender','status'=>1));
		$this->manualview('admin/header','admin/agents_reg_page','admin/footer',$data);
	}

	public function saveNewAgent(){
		extract($_REQUEST);
		$checkwhere = "mobile = '".$agent_mobile."' OR email_id = '".$agent_email."'";
		$checkdetails = $this->Model_default->select_data('sbgi_agent_registrations',$checkwhere);
		if(count($checkdetails) > 0){
			//mobile or email already registered
			$this->session->set_flashdata('failed','Mobile or Email id already registered..!');
			redirect(base_url('admin/dashboard/agent/add'));
		}else{
			$inserting = array('name'=>$agent_name,'father_husband'=>$agent_fhname,'dob'=>date('Y-m-d',strtotime($agent_dob)),'gender'=>$agent_gender,'qualification'=>$agent_qualification,'mobile'=>$agent_mobile,'email_id'=>$agent_email,'address'=>$agent_address,'card_type'=>$agent_id_type,'card_id'=>$agent_id,'bank_acc_number'=>$agent_acc_num,'bank_name'=>$agent_bank_name,'bank_branch'=>$agent_branch_name,'bank_ifsc'=>$agent_bank_ifsc,'position'=>$agent_position,'senior_id'=>$agent_senior_id,'senior_name'=>$agent_senior_name,'updated'=>date('Y-m-d H:i:s'),'state'=>$agent_state,'city'=>$agent_city,'pincode'=>$agent_pincode,'password'=>$password);
			$insert = $this->Model_default->insert_data('sbgi_agent_registrations',$inserting);
			if($insert != 0){
				//success redirect to agentlist or add
				$this->Model_default->update_data('sbgi_agent_registrations',array('reg_id'=>'SBG00'.$insert),array('id'=>$insert));
				$inserting['reg_id'] = 'SBG00'.$insert;
				$viewdetails['viewdetails'] = $inserting;
				$this->sendemail('mail_templates/welcome',$viewdetails,'sbgindia6@gmail.com',$agent_email,'ThankQ for being with us '.$agent_name,'','sbgindia',$agent_name);
				//sms 
				$message = "Dear Mr/Ms: ".$agent_name." Welcome to Sri Balaji Group Family Member. Your Bussiness ID NO: SBG00".$insert." Thank you. our Best Support in Transforming Your Dreams into Reality. Good Luck and God Bless You.";
				
				//merge API url and parameters
				$apiUrl = "http://sms.commcryptnetworksolutions.com/submitsms.jsp?user=Keyitsol&key=fd83196d9dXX&mobile=+91".$agent_mobile."&message=".urlencode($message)."&senderid=SBGIND&accusage=1";
				//API call
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $apiUrl);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_exec($ch);
				curl_close($ch);

				$this->session->set_flashdata('success','Details are successfully saved..!');
				redirect(base_url('admin/dashboard/agent/list'));				 
			}else{
				//failed redirect to add to retry
				$this->session->set_flashdata('failed','Details not saved.try again or later..!');
				redirect(base_url('admin/dashboard/agent/add'));
			}
		}
	}	

	public function AgentsList(){
		$data['pagetitle']	=	'Agents List';
		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');
		$data['agents']	=	$this->Model_default->select_data('sbgi_agent_registrations',array('status'=>1),'id DESC');
		$data['govt_ids'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'govt_ids','status'=>1));
		$data['position'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'position','status'=>1));
		$data['genders'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'gender','status'=>1));
		$this->manualview('admin/header','admin/agents_list','admin/footer',$data);		
	}

	public function editAgentDetails(){
		$id = $this->uri->segment(4);
		
		if(isset($id) && !empty($id)){
			$data['pagetitle']	=	'Edit Agent Register details';
			$data['userdata'] = $this->session->userdata('loginsbgadmindetails');			
			$data['govt_ids'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'govt_ids','status'=>1));
			$data['position'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'position','status'=>1));
			$data['genders'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'gender','status'=>1));
			$data['agentdetails']	=	$this->Model_default->select_data('sbgi_agent_registrations',array('id'=>$id));
			$this->manualview('admin/header','admin/agents_reg_page','admin/footer',$data);
		}else{
			$this->session->set_flashdata('failed','Invalid request to edit details..!');
			redirect('admin/dashboard/agent/list');
		}
				
	}

	public function saveeditdetails(){
		extract($_REQUEST);
		$checkwhere = "mobile = '".$agent_mobile."' OR email_id = '".$agent_email."'";
		$checkdetails = $this->Model_default->select_data('sbgi_agent_registrations',$checkwhere);
		if(count($checkdetails) <= 0){
			//mobile or email already registered
			$this->session->set_flashdata('failed','Invalid Request to edit details..!');
			redirect(base_url('admin/dashboard/agent/list'));
		}else{
			$inserting = array('name'=>$agent_name,'father_husband'=>$agent_fhname,'dob'=>date('Y-m-d',strtotime($agent_dob)), 'gender'=>$agent_gender, 'qualification'=>$agent_qualification, 'mobile'=>$agent_mobile, 'email_id'=>$agent_email, 'address'=>$agent_address, 'card_type'=>$agent_id_type, 'card_id'=>$agent_id, 'bank_acc_number'=>$agent_acc_num, 'bank_name'=>$agent_bank_name, 'bank_branch'=>$agent_branch_name, 'bank_ifsc'=>$agent_bank_ifsc, 'position'=>$agent_position, 'senior_id'=>$agent_senior_id, 'senior_name'=>$agent_senior_name, 'updated'=>date('Y-m-d H:i:s'), 'state'=>$agent_state, 'city'=>$agent_city, 'pincode'=>$agent_pincode, 'password'=>$password);
			$insert = $this->Model_default->update_data('sbgi_agent_registrations',$inserting,array('id'=>$edit_id));
			if($insert != 0){
				//success redirect to agentlist or edit
				$this->session->set_flashdata('success','Details are successfully Updated..!');
				redirect(base_url('admin/dashboard/agent/list'));				 
			}else{
				//failed redirect to add to retry
				$this->session->set_flashdata('failed','Details not updated.try again or later..!');
				redirect(base_url('admin/dashboard/agent/list'));
			}
		}
	}

	public function deleteAgent(){
		$id = $this->uri->segment(4);
		if(isset($id) && $id != ''){
			$delete = $this->Model_default->update_data('sbgi_agent_registrations',array('status'=>0),array('id'=>$id));
			if($delete != 0){
				$this->session->set_flashdata('success','Details are successfully deleted..!');
				redirect(base_url('admin/dashboard/agent/list'));				
			}else{
				$this->session->set_flashdata('failed','Failed to delete agent details..!');
				redirect(base_url('admin/dashboard/agent/list'));
			}
		}else{
			$this->session->set_flashdata('success','Unable to delete agent details or oops error..!');
			redirect(base_url('admin/dashboard/agent/list'));
		}
	}

	public function mailtemplate(){
		$data['registerdetails']	= $this->Model_default->select_data('sbgi_agent_registrations',array('id'=>1));
		$this->load->view('mail_templates/welcome',$data);
	}

}
