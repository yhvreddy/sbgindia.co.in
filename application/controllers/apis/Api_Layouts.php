<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
class Api_Layouts extends REST_Controller {

    protected $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Model_default');
	}


    /*
    *   Add New Zone - Perams : zoneImages, zone_name
    */
    public function zoneAddNew_post()
    {
        extract($_REQUEST);
        if(isset($zone_name) && !empty($zone_name)){
            $path = 'uploads/zones/';
            if($_FILES['zoneImages']['name'] != ''){
                if(file_exists($path)){
                    $uploadfile = $this->uploadfiles($path,'zoneImages','jpg|png|jpeg',TRUE);
                }else{
                    $this->createdir($path,$path);
                    $uploadfile = $this->uploadfiles($path,'zoneImages','jpg|png|jpeg',TRUE);
                }
                if($uploadfile['status'] == 1){
                    $uploadedfile = $path.$uploadfile['uploaddata']['file_name'];
                }else{
                    $uploadedfile = '';
                }
            }else{
                $uploadedfile = '';
            }
            $insertdata = array('image'=>$uploadedfile,'name'=>$zone_name);
            $insertzone = $this->Model_default->insert_data('sbgi_zones',$insertdata);
            if($insertzone != 0){
                $zonedetails    = $this->Model_default->select_data('sbgi_zones',array('id'=>$insertzone));  
                $data->status   = 'success';
                $data->baseurl= base_url();
                $data->message  = 'Successfully Saved Zone Details..!';
                $data->insertid = $insertzone;
                $data->details  = $zonedetails[0];
            }else{
                $data->status = 'failed';
                $data->message= 'Failed to save Zone Details..!';
            } 
        }else{
            $data->status = 'failed';
            $data->message= 'Fill the all required data..!';
        }
    }

    /*
    *   Zones List (id) - Perams : 
    */
    public function zonesList_get()
    {
        $zones = $this->Model_default->select_data('sbgi_zones',array('status'=>1),'id DESC');
        if(count($zones) != 0){
            $data->status = 'success';
            $data->baseurl= base_url();
            $data->message= count($zones).' Zones found..!';
            $data->details= [$zones];
        }else{
            $data->status = 'failed';
            $data->message= 'No Zones Founds..!';
        }
    }

    

   
}
