<?php

defined('BASEPATH') OR exit('No direct script access allowed');



//base controller

require APPPATH . '/libraries/BaseController.php';

class Layouts extends BaseController {



	public function __construct(){

        parent::__construct();

        $this->isAdminLoggedIn();

        $this->load->model('Model_default');

    }

	

	public function discounts(){

		$data['pagetitle']	=	'Discounts List';

		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');

		$data['zones']	= $this->Model_default->select_data('sbgi_zones',array('status'=>1));

		$data['positions']	= $this->Model_default->select_data('sbgi_formdata',array('status <='=>1, 'type'=>'position'));

		$data['layoutpercents'] = $this->Model_default->select_data('sbgi_percent',array('status <='=>1),'id DESC');

		$this->manualview('admin/header','admin/discounts_page','admin/footer',$data);

	}



	public function zonelayoutslist(){

		extract($_REQUEST);

		$layouts = $this->Model_default->select('id, zone_id, subzone_name', 'sbgi_sub_zones' ,array('zone_id'=>$zonename,'status'=>1));

		$data = $layouts;

		echo json_encode($data);

	}	



	public function zonelayoutslotlist(){

		extract($_REQUEST);

		$layouts = $this->Model_default->select('id, zone_id, subzone_name, slots_details', 'sbgi_sub_zones' ,array('id'=>$layoutname));

		$data = unserialize($layouts[0]->slots_details);

		echo json_encode($data);

	}

	

	public function layoutslotsailamount(){

		extract($_REQUEST);

		$slot = $this->Model_default->select('id, zone_id, subzone_name, slots_details', 'sbgi_sub_zones' ,array('id'=>$layoutname));

		$slotdata = unserialize($slot[0]->slots_details);

		$saleamount = '';

		foreach($slotdata as $value){

			if($value['slot_id'] == $slotname){

				$saleamount = $value['sale_amount'];

			}

		}

		$data = array('sale_amount'=>$saleamount);

		echo json_encode($data);

	}


	public function editpercent(){

		extract($_REQUEST);

		$data['pagetitle']	=	'Discounts List';

		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');

		$data['zones']	= $this->Model_default->select_data('sbgi_zones',array('status'=>1));

		$data['positions']	= $this->Model_default->select_data('sbgi_formdata',array('status <='=>1, 'type'=>'position'));

		$data['layoutpercents'] = $this->Model_default->select_data('sbgi_percent',array('status <='=>1),'id DESC');

		if(isset($id)){

			$data['percents'] = $this->Model_default->select_data('sbgi_percent',array('id '=>$id),'id DESC');

		}

		$this->manualview('admin/header','admin/discounts_page','admin/footer',$data);

	}


	public function savepercentages(){

		extract($_REQUEST);

		if(isset($edit_id)){

			$insertdata = array('zone_id'=>$Zone_name, 'layout_id'=>$layout_name, 'position_id'=>$position_name, 'percent'=>$percentage);

			$insert = $this->Model_default->update_data('sbgi_percent',$insertdata,array('id'=>$edit_id));

			if($insert != 0){

				$this->session->set_flashdata('success','Layout position percent saved..!');

				redirect(base_url('admin/dashboard/discounts'));

			}else{

				$this->session->set_flashdata('failed','Layout position percent failed to saved..!');

				redirect(base_url('admin/dashboard/discounts'));

			}

		}else{

			$layouts = $this->Model_default->select_data('sbgi_percent',array('zone_id'=>$Zone_name, 'layout_id'=>$layout_name,'position_id'=>$position_name));

			if(count($layouts) != 0){

				$this->session->set_flashdata('failed','Layout position percent already saved..!');

				redirect(base_url('admin/dashboard/discounts'));

			}else{

				$insertdata = array('zone_id'=>$Zone_name, 'layout_id'=>$layout_name, 'position_id'=>$position_name, 'percent'=>$percentage);

				$insert = $this->Model_default->insert_data('sbgi_percent',$insertdata);

				if($insert != 0){

					$this->session->set_flashdata('success','Layout position percent saved..!');

					redirect(base_url('admin/dashboard/discounts'));

				}else{

					$this->session->set_flashdata('failed','Layout position percent failed to saved..!');

					redirect(base_url('admin/dashboard/discounts'));

				}

			}

		}

	}


	public function Taxs(){

		$data['pagetitle']	=	'Taxs';

		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');

		$data['taxs'] = $this->Model_default->select('*', 'sbgi_taxs' ,array('status'=>1));

		$this->manualview('admin/header','admin/taxs_page','admin/footer',$data);

	}


	public function savetdstaxAmount(){

		extract($_REQUEST);

		//print_r($_REQUEST);

		//exit;

		if(isset($edit_id)){

			$insertdata = array('tax'=>$tax_amount,'name'=>'TDS','amount'=>'');

			$insert = $this->Model_default->update_data('sbgi_taxs',$insertdata,array('id'=>$edit_id));

			if($insert != 0){

				$this->session->set_flashdata('success','Tax percent Updated..!');

				redirect(base_url('admin/dashboard/taxs'));

			}else{

				$this->session->set_flashdata('failed','Tax percent failed to Updated..!');

				redirect(base_url('admin/dashboard/taxs'));

			}

		}else{

			$insertdata = array('tax'=>$tax_amount,'name'=>'TDS','amount'=>'');

			$insert = $this->Model_default->insert_data('sbgi_taxs',$insertdata);

			if($insert != 0){

				$this->session->set_flashdata('success','Tax percent saved..!');

				redirect(base_url('admin/dashboard/taxs'));

			}else{

				$this->session->set_flashdata('failed','Tax percent failed to saved..!');

				redirect(base_url('admin/dashboard/taxs'));

			}

		}

	}


	public function agentData(){

		$data['pagetitle']	=	'Agents Data';

		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');

		$data['zones']	= $this->Model_default->select_data('sbgi_zones',array('status'=>1));

		$data['positions']	= $this->Model_default->select_data('sbgi_formdata',array('status <='=>1, 'type'=>'position'));

		$data['taxs'] = $this->Model_default->select('*', 'sbgi_taxs' ,array('status'=>1));

		$this->manualview('admin/header','admin/agents_data_page','admin/footer',$data);

	}

	public function agentDetailspreview(){
		extract($_REQUEST);
		//$this->print_r($_REQUEST);
		$agentslist = [];
		$postions = [];

		foreach($position_name as $agent){
			if(!empty($agent)){
				$agents = $this->Model_default->select_data('sbgi_agent_registrations', array('id'=>$agent));
				$position = $this->Model_default->select_data('sbgi_formdata', array('id'=>$agents[0]->position));
				$percent  = $this->Model_default->select_data('sbgi_percent', array('zone_id'=>$Zone_name, 'layout_id'=>$layout_name, 'position_id'=>$agents[0]->position));
				$agentslist[] =  array('id'=>$agents[0]->id,'name' => $agents[0]->name,'title' => $position[0]->name,'per' => $percent[0]->percent);
				$positions[] = array($position[0]->name);
			}
		}
		
		//$this->print_r($positions);
		//echo "<pre>";
		if((isset($soldBy) && !empty($soldBy)) && (isset($tds_tax) && !empty($tds_tax))){
			$this->percantage($sale_amount,$soldBy,$agentslist,$tds_tax,$positions);
		}else{ ?>
			<div class="col-md-12">
				<center><h3>Please Select All Required Fields..!</h3></center>
				<center><h6>(Check Data you have selected : Tax, Agents, Etc..)</h6></center>
			</div>
		<?php }
		//echo "</pre>";
	}

	function percantage($sAmout,$soldBy,$users_array,$tds_tax,$checkPositions){
        $percentageArray=[];
        //$percentageArray['saleBy'] =  $soldBy;
		//$percentageArray['saleAmount'] =  $sAmout;
		
          	if($soldBy=="GM"){
				$value=$this->getUseerData($users_array,"GM");
				$per=$value['per'];
				$perCal=($sAmout* $per)/100;
				$getper = $per;
				$d=array("name"=>$value['name'],"role"=>$value['title'],"per"=>$value['per'],"perAmout"=>$perCal,'get_percent'=>$getper,'agent_id'=>$value['id']);
				array_push($percentageArray, $d);
          	}

          	if($soldBy=="MM"){
				$value=$this->getUseerData($users_array,"MM");
				$perCal=($sAmout* 18)/100;
				$d=array("name"=>$value['name'],"role"=>$value['title'],"per"=>$value['per'],"perAmout"=>$perCal,'get_percent'=>$value['per'],'agent_id'=>$value['id']);
				array_push($percentageArray, $d);

				if(count($this->checkPositions($checkPositions,'GM')) != 0){
					$GMvalue=$this->getUseerData($users_array,"GM");
					$perCal=($sAmout* 2)/100;
					$getper = $GMvalue['per'] - 18;
					$d=array("name"=>$GMvalue['name'],"role"=>$GMvalue['title'],"per"=>$GMvalue['per'],"perAmout"=>$perCal,'get_percent'=>$getper,'agent_id'=>$GMvalue['id']);
					array_push($percentageArray, $d);
				}
          	}
          
          	if($soldBy=="BDO"){

					// echo "<pre>"; 
					// print_r(count($this->checkPositions($checkPositions,'BDO')));
					// echo "</pre>";
				
				$value=$this->getUseerData($users_array,"BDO");
				$perCal=($sAmout * $value['per'])/100;
				$d=array("name"=>$value['name'],"role"=>$value['title'],"per"=>$value['per'],"perAmout"=>$perCal,'get_percent'=>$value['per'],'agent_id'=>$value['id']);
				array_push($percentageArray, $d);
			
				if(count($this->checkPositions($checkPositions,'MM')) != 0){
					$MMvalue=$this->getUseerData($users_array,"MM");
					$MMperCal=($sAmout * ($MMvalue['per'] - $value['per']))/100;
					$d=array("name"=>$MMvalue['name'],"role"=>$MMvalue['title'],"per"=>$MMvalue['per'],"perAmout"=>$MMperCal,'get_percent'=>$MMvalue['per'] - $value['per'],'agent_id'=>$MMvalue['id']);
					array_push($percentageArray, $d);
				}else{
					$MMvalue['per'] = $value['per'];
				}

				if(count($this->checkPositions($checkPositions,'GM')) != 0){
					$GMvalue=$this->getUseerData($users_array,"GM");
					$GMperCal=($sAmout * ($GMvalue['per'] - $MMvalue['per']))/100;
					$d=array("name"=>$GMvalue['name'],"role"=>$GMvalue['title'],"per"=>$GMvalue['per'],"perAmout"=>$GMperCal,'get_percent'=>$GMvalue['per'] - $MMvalue['per'],'agent_id'=>$GMvalue['id']);
					array_push($percentageArray, $d);
				}
					
          	}
          
          	if($soldBy=="BDE"){

				$value=$this->getUseerData($users_array,"BDE");
				$perCal=($sAmout * $value['per'])/100;
				$d=array("name"=>$value['name'],"role"=>$value['title'],"per"=>$value['per'],"perAmout"=>$perCal,'get_percent'=>$value['per'],'agent_id'=>$value['id']);
				array_push($percentageArray, $d);
			
				if(count($this->checkPositions($checkPositions,'BDO')) != 0){
					$BDOvalue=$this->getUseerData($users_array,"BDO");
					$perCal=($sAmout * ($BDOvalue['per'] - $value['per']))/100;
					$d=array("name"=>$BDOvalue['name'],"role"=>$BDOvalue['title'],"per"=>$BDOvalue['per'],"perAmout"=>$perCal,'get_percent'=>$BDOvalue['per'] - $value['per'],'agent_id'=>$BDOvalue['id']);
					array_push($percentageArray, $d);
				}else{
					$BDOvalue['per'] = $value['per'];
				}
			
				if(count($this->checkPositions($checkPositions,'MM')) != 0){
					$MMvalue=$this->getUseerData($users_array,"MM");
					$MMperCal=($sAmout * ($MMvalue['per'] - $BDOvalue['per']))/100;
					$d=array("name"=>$MMvalue['name'],"role"=>$MMvalue['title'],"per"=>$MMvalue['per'],"perAmout"=>$MMperCal,'get_percent'=>$MMvalue['per'] - $BDOvalue['per'],'agent_id'=>$MMvalue['id']);
					array_push($percentageArray, $d);
				}else{
					$MMvalue['per'] = $BDOvalue['per'];
				}
			
				if(count($this->checkPositions($checkPositions,'GM')) != 0){
					$GMvalue=$this->getUseerData($users_array,"GM");
					$GMperCal=($sAmout * ($GMvalue['per'] - $MMvalue['per']))/100;
					$d=array("name"=>$GMvalue['name'],"role"=>$GMvalue['title'],"per"=>$GMvalue['per'],"perAmout"=>$GMperCal,'get_percent'=>$GMvalue['per'] - $MMvalue['per'],'agent_id'=>$GMvalue['id']);
					array_push($percentageArray, $d);
				}
          	}
        
			// echo "<pre>";   
			// 	print_r($percentageArray);
			// echo "</pre>";
		?>
			<input type="hidden" name="agentsdata" value='<?=serialize($percentageArray)?>'>
			<table class="table table-bordered" style="margin: 10px 0px">
				<thead>
					<th>#</th>
					<th>Name</th>
					<th>Position</th>
					<th>%</th>
					<th>Amount</th>
					<th>TDS Tax %</th>
					<th>Tax Amount</th>
					<th>Total Amount</th>
				</thead>

				<tbody>
					<?php $i = 1;
						foreach($percentageArray as $agent){
							/*echo "<pre>";   
								print_r($agent);
							echo "</pre>";*/
								
								//$tdsamount = $amount * $tds_tax / 100;
								//$totalamount = $amount - $tdsamount;

								//$data = array('Name'=> $agents[0]->name,'Position'=>$position[0]->name,'percent'=>$percent[0]->percent,'amount'=>$amount,'TDS Tax' => $tds_tax .' - '.$tdsamount, 'Total Amount' => $totalamount);
							?>

								<tr>

									<td><?=$i++;?></td>
									<td><?=$agent['name']?></td>
									<td><?=$agent['role']?></td>
									<td><?=$agent['get_percent']?>%</td>
									<td><?=$agent['perAmout']?></td>
									<td><?=$tds_tax?>%</td>
									<td><?=$agent['perAmout']*$tds_tax/100?></td>
									<td><?=$agent['perAmout'] - $agent['perAmout']*$tds_tax/100?></td>

								</tr>

							<?php
						
							//$this->print_r($data);

						}
					?>

				</tbody>

			</table>
		<?php
		
    }

	function checkPositions($positions,$type)
	{
		$data=[];
        foreach ($positions as $value) {
            if($type == $value[0]){
              $data[]	=  $value[0];
            }
        }
        return  $data;
	}

    function getUseerData($userArray,$type){
      $data=[];
        foreach ($userArray as $value) {
            if($type==$value['title']){
              $data=  $value;
            }
        }
        return  $data;
    }
	
	public function agentDetailsave(){

		extract($_REQUEST);
		//$this->print_r($_REQUEST);
		
		$data = $this->Model_default->select_data('sbgi_agent_data', array('zone_id'=>$Zone_name, 'layout_id'=>$layout_name, 'slot_id'=>$slot_name));
		
		//$this->print_r($data);
		if(!empty($soldBy)){
			$agentsplotsdata = unserialize($agentsdata);
		}else{
			$this->session->set_flashdata('failed','Please select Sale agent..!');
			redirect(base_url('admin/dashboard/agentdata'));
		}

		$this->print_r($agentsplotsdata);
		//exit;
		$agentdata = array();
		foreach($agentsplotsdata as $key => $agent){
			
			$tdsamount = $agent['perAmout'] * $tds_tax / 100;
			$totalamount = $agent['perAmout'] - $tdsamount;
			$agentdata[] = array('name'=> $agent['name'], 'agent_id'=>$agent['agent_id'], 'position'=>$agent['role'], 'percent'=>$agent['get_percent'],'org_percent'=>$agent['per'], 'amount'=>$agent['perAmout'], 'tds_tax' => $tds_tax, 'tax_amount' => $tdsamount, 'total_amount' => $totalamount);
			
		}
		// $this->print_r($agentdata);
		// exit;
		if(count($data) != 0){
			
			if(isset($edit_id)){
				$conduction = array('id'=>$edit_id);
				$insertdata = array('zone_id'=>$Zone_name, 'soldBy' => $soldBy, 'layout_id'=>$layout_name, 'slot_id'=>$slot_name,'details'=>serialize($agentdata),'updated'=>date('Y-m-d H:i:s'));
				$insert = $this->Model_default->update_data('sbgi_agent_data',$insertdata,$conduction);
				if($insert != 0){
					$this->session->set_flashdata('success','Agents data saved..!');
					redirect(base_url('admin/dashboard/agentdatalist'));
				}else{
					$this->session->set_flashdata('failed','Failed to save agents data..!');
					redirect(base_url('admin/dashboard/agentdatalist'));
				}
			}else{
				$this->session->set_flashdata('failed','Layout flat already saved..!');
				redirect(base_url('admin/dashboard/agentdata'));
			}

		}else{

			$insertdata = array('zone_id'=>$Zone_name, 'soldBy' => $soldBy, 'layout_id'=>$layout_name, 'slot_id'=>$slot_name,'details'=>serialize($agentdata),'updated'=>date('Y-m-d H:i:s'));
			$insert = $this->Model_default->insert_data('sbgi_agent_data',$insertdata);
			
			if($insert != 0){
				$this->session->set_flashdata('success','Agents data saved..!');
				redirect(base_url('admin/dashboard/agentdatalist'));
			}else{
				$this->session->set_flashdata('failed','Failed to save agents data..!');
				redirect(base_url('admin/dashboard/agentdata'));
			}

		}

		//$this->print_r($insertdata);

	}
	

	public function agentDataList(){

		$data['pagetitle']	=	'Agents data List';

		$data['userdata'] = $this->session->userdata('loginsbgadmindetails');

		$data['agents']	=	$this->Model_default->select_data('sbgi_agent_registrations',array('status'=>1),'id DESC');

		$data['govt_ids'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'govt_ids','status'=>1));

		$data['position'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'position','status'=>1));

		$data['genders'] =	$this->Model_default->select_data('sbgi_formdata',array('type'=>'gender','status'=>1));

		$data['agentsdata'] = $this->Model_default->select_data('sbgi_agent_data', array('status'=>1),'id DESC');

		$this->manualview('admin/header','admin/agentsdata_list','admin/footer',$data);

	}

	
	public function agentDataEdit(){
		$id = $this->uri->segment(4);
		if(!empty($id)){
			$data['editagentdata'] = $this->Model_default->select_data('sbgi_agent_data', array('id'=>$id),'id DESC');
			$data['pagetitle']	=	'Edit Agents Data';
			$data['userdata'] = $this->session->userdata('loginsbgadmindetails');
			$data['zones']	= $this->Model_default->select_data('sbgi_zones',array('status'=>1));
			$data['positions']	= $this->Model_default->select_data('sbgi_formdata',array('status <='=>1, 'type'=>'position'));
			$data['taxs'] = $this->Model_default->select('*', 'sbgi_taxs' ,array('status'=>1));
			$this->manualview('admin/header','admin/agents_data_page','admin/footer',$data);
		}else{
			$this->session->set_flashdata('failed','Invalied request to edit..!');
			redirect(base_url('admin/dashboard/agentdatalist'));
		}
	}

}

