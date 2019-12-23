<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
class Api_Formdata extends REST_Controller {

    protected $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Model_default');
	}


    /*
    *   Genders List (short name) - Perams : 
    */
    public function gendersList_get()
    {
        $genders = $this->Model_default->select_data('sbgi_formdata',array('type'=>'gender'),'id DESC');
        if(count($genders) != 0){
            $data->status = 'success';
            $data->baseurl= base_url();
            $data->message= count($genders).' Genders found..!';
            $data->details= [$genders];
        }else{
            $data->status = 'failed';
            $data->message= 'No Genders Founds..!';
        }
    }

    /*
    *   Cards types List (id) - Perams : 
    */
    public function cardsList_get()
    {
        $cards = $this->Model_default->select_data('sbgi_formdata',array('type'=>'govt_ids'),'id DESC');
        if(count($cards) != 0){
            $data->status = 'success';
            $data->baseurl= base_url();
            $data->message= count($cards).' Cards found..!';
            $data->details= [$cards];
        }else{
            $data->status = 'failed';
            $data->message= 'No cards Founds..!';
        }
    }

    /*
    *   Positions types List (id) - Perams : 
    */
    public function positionsList_get()
    {
        $positions = $this->Model_default->select_data('sbgi_formdata',array('type'=>'position'),'id DESC');
        if(count($positions) != 0){
            $data->status = 'success';
            $data->baseurl= base_url();
            $data->message= count($positions).' positions found..!';
            $data->details= [$positions];
        }else{
            $data->status = 'failed';
            $data->message= 'No positions Founds..!';
        }
    }

   
}
