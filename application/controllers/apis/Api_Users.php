<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
class Api_Users extends REST_Controller {

    protected $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->model('Model_default');
	}

    /*
    *   Admin and Agent Login - Perams : login_id, login_password
    */
	public function userlogin_post($data=NULL)
	{
        extract($_REQUEST);
        if(isset($login_id) && !empty($login_id) && isset($login_password) && !empty($login_password)){
            $checkwhere = "mobile = '".$login_id."' OR email_id = '".$login_id."'";
            $checkdetails = $this->Model_default->select_data('sbgi_admin_users',$checkwhere);
            if(count($checkdetails) > 0){
                $checkwhere = "(".$checkwhere.") AND password = '".$login_password."'";
                $loginaccess  = $this->Model_default->select_data('sbgi_admin_users',$checkwhere);
                if(count($loginaccess) > 0){
                    $data->status = 'success';
                    $data->message= 'Admin as suceessfully login..!';
                    $data->details= $loginaccess[0];
                }else{
                    $data->status = 'failed';
                    $data->message= 'Please enter correct password..!';
                }
            }else{
                $checkadetails = $this->Model_default->select_data('sbgi_agent_registrations',$checkwhere);
                if(count($checkadetails) != 0){
                    $checkwhere = "(".$checkwhere.") AND password = '".$login_password."'";
                    $loginaccess  = $this->Model_default->select_data('sbgi_agent_registrations',$checkwhere);
                    if(count($loginaccess) > 0){
                        $data->status = 'success';
                        $data->baseurl= base_url();
                        $data->message= 'Agent as suceessfully login..!';
                        $data->details= $loginaccess[0];
                    }else{
                        $data->status = 'failed';
                        $data->message= 'Please enter correct password..!';
                    }
                }else{
                    $data->status = 'failed';
                    $data->message= 'Please enter correct login id..!';
                }
            }
        }else{
            $data->status = 'failed';
            $data->message= 'Please enter all required details..!';
        }
		$this->response($data, REST_Controller::HTTP_OK);
    }
    
    /*
    *   Agent Registration - Perams : agent_name,agent_fhname,agent_dob,agent_gender,agent_qualification,agent_mobile, agent_email,agent_address,agent_id_type,agent_id,agent_acc_num,agent_bank_name,agent_branch_name,agent_bank_ifsc, agent_position,agent_senior_id,agent_senior_name,agent_state,agent_city,agent_pincode,password
    */
    public function agentRegestration_post()
    {
        extract($_REQUEST);
        $checkwhere = "mobile = '".$agent_mobile."' OR email_id = '".$agent_email."'";
		$checkdetails = $this->Model_default->select_data('sbgi_agent_registrations',$checkwhere);
		if(count($checkdetails) > 0){
			$data->status = 'failed';
            $data->message= 'Mobile or Email id already registered..!';
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

                $data->status = 'success';
                $data->baseurl= base_url();
                $data->message= 'New agent as successfully registered..!';				 
			}else{
				$data->status = 'failed';
                $data->message= 'Failed to registered..!';
			}
		}
    }

    /*
    *   Agents List - Perams : 
    */
    public function agentList_get()
    {
        $agents = $this->Model_default->select_data('sbgi_agent_registrations',array('status'=>1),'id DESC');
        if(count($agents) != 0){
            $data->status = 'success';
            $data->baseurl= base_url();
            $data->message= count($agents).' Agents found..!';
            $data->details= [$agents];
        }else{
            $data->status = 'failed';
            $data->message= 'No Agents Founds..!';
        }
    }

    /*
    *   Agents Details - Perams : agent_id 
    */
    public function agentDetails_post()
    {
        extract($_REQUEST);
        $agents = $this->Model_default->select_data('sbgi_agent_registrations',array('status'=>1,'id'=>$agent_id),'id DESC');
        if(count($agents) != 0){
            $data->status = 'success';
            $data->message= 'Agents Details..!';
            $data->baseurl= base_url();
            $data->details= $agents[0];
        }else{
            $data->status = 'failed';
            $data->message= 'Invalid agent id or Not Found..!';
        }
    }

    /*
    *   Agent Edit - Perams : agent_name,agent_fhname,agent_dob,agent_gender,agent_qualification,agent_mobile, agent_email,agent_address,agent_id_type,agent_id,agent_acc_num,agent_bank_name,agent_branch_name,agent_bank_ifsc, agent_position,agent_senior_id,agent_senior_name,agent_state,agent_city,agent_pincode,password,edit_id
    */
    public function agentsaveEditdata_post()
    {
        extract($_REQUEST);
		$checkwhere = "mobile = '".$agent_mobile."' OR email_id = '".$agent_email."'";
		$checkdetails = $this->Model_default->select_data('sbgi_agent_registrations',$checkwhere);
		if(count($checkdetails) <= 0){
			$data->status = 'failed';
            $data->message= 'Invalid Request or Agent Not Found..!';
		}else{
			$inserting = array('name'=>$agent_name,'father_husband'=>$agent_fhname,'dob'=>date('Y-m-d',strtotime($agent_dob)), 'gender'=>$agent_gender, 'qualification'=>$agent_qualification, 'mobile'=>$agent_mobile, 'email_id'=>$agent_email, 'address'=>$agent_address, 'card_type'=>$agent_id_type, 'card_id'=>$agent_id, 'bank_acc_number'=>$agent_acc_num, 'bank_name'=>$agent_bank_name, 'bank_branch'=>$agent_branch_name, 'bank_ifsc'=>$agent_bank_ifsc, 'position'=>$agent_position, 'senior_id'=>$agent_senior_id, 'senior_name'=>$agent_senior_name, 'updated'=>date('Y-m-d H:i:s'), 'state'=>$agent_state, 'city'=>$agent_city, 'pincode'=>$agent_pincode, 'password'=>$password);
			$insert = $this->Model_default->update_data('sbgi_agent_registrations',$inserting,array('id'=>$edit_id));
			if($insert != 0){
                $data->status = 'success';
                $data->baseurl= base_url();
                $data->message= 'Agent details are successfully Updated..!';				 
			}else{
                $data->status = 'failed';
                $data->message= 'Failed to update agent details or oops error..!';
			}
		}
    }

    /*
    *   Agent Delete - Perams : delete_id 
    */
    public function agentDeleteData_post()
    {
        extract($_REQUEST);
        $agents = $this->Model_default->select_data('sbgi_agent_registrations',array('status'=>1,'id'=>$delete_id),'id DESC');
        if(count($agents) != 0){
            $delete = $this->Model_default->update_data('sbgi_agent_registrations', array('status'=>1), array('id'=>$delete_id));
            if($delete != 0){
                $data->status = 'success';
                $data->baseurl= base_url();
                $data->message= 'Successfully Deleted Agents Details..!';
            }else{
                $data->status = 'failed';
                $data->message= 'Unable to Delete Agent Details..!';
            }            
        }else{
            $data->status = 'failed';
            $data->message= 'Invalid agent id or Not Found..!';
        }
    }
}
