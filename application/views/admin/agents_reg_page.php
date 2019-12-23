<!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add / Edit Agent
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard </a></li>
      <li><a href=":;">Agents</a></li>
      <li class="active">Add / edit Agent</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
        
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add/Edit Agent</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php if(isset($agentdetails)){ $agent = $agentdetails[0]; ?>
              <form role="form" method="post" action="<?=base_url('admin/dashboard/agent/saveeditdetails')?>">
                <div class="box-body">
                  <input type="hidden" name="edit_id" value="<?=$agent->id?>"> 
                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_name">Enter Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="agent_name" required="" id="agent_name" value="<?=$agent->name?>" placeholder="Enter Name">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_fhname">Enter Father/Husband Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" required="" name="agent_fhname" id="agent_fhname" value="<?=$agent->father_husband?>" placeholder="Enter Father/Husband Name">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_gender">Select Gender <span class="text-danger">*</span></label>
                    <select class="form-control" name="agent_gender" required="" id="agent_gender">
                      <option value="">Select Gender</option>
                      <?php foreach ($genders as $key => $gender) { ?>
                        <option value="<?=$gender->short_name?>" <?php if($gender->short_name == $agent->gender){ echo 'selected'; } ?> ><?=$gender->name?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_dob">select date of birth <span class="text-danger">*</span></label>
                    <input type="text" class="form-control datepicker" name="agent_dob" required="" id="agent_dob" placeholder="Enter date of birth" value="<?=date('d-m-Y',strtotime($agent->dob))?>">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_qualification">Enter Qualification <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="agent_qualification" required="" id="agent_qualification" value="<?=$agent->qualification?>" placeholder="Enter Qualification">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_email">Enter Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="agent_email" id="agent_email" required="" value="<?=$agent->email_id?>" placeholder="Enter email id">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_mobile">Enter Mobile Number <span class="text-danger">*</span></label>
                    <input type="tel" required="" class="form-control" name="agent_mobile" id="agent_mobile" value="<?=$agent->mobile?>" placeholder="Enter Mobile Number">
                  </div>
                  
                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_state">Enter State <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?=$agent->state?>" required="" name="agent_state" id="agent_state" placeholder="Enter State">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_city">Enter city <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?=$agent->city?>" required="" name="agent_city" id="agent_city" placeholder="Enter City">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_address">Enter Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" required="" name="agent_address" id="agent_address" value="<?=$agent->address?>" placeholder="Enter Address">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_pincode">Enter Pincode <span class="text-danger">*</span></label>
                    <input type="tel" maxlength="6" class="form-control" required="" name="agent_pincode" id="agent_pincode" value="<?=$agent->pincode?>" placeholder="Enter Pincode">
                  </div>
                             
                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_id_type">Select Id Type</label>
                    <select class="form-control" name="agent_id_type" id="agent_id_type">
                      <option value="">Select Id Type</option>
                      <?php foreach ($govt_ids as $key => $govt_id) { ?>
                        <option value="<?=$govt_id->id?>" <?php if($agent->card_type == $govt_id->id){ echo 'selected'; } ?> ><?=$govt_id->name?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_id">Enter id</label>
                    <input type="text" class="form-control" name="agent_id" id="agent_id" placeholder="Enter Id" value="<?=$agent->card_id?>">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_acc_num">Enter Bank Account Number</label>
                    <input type="tel" class="form-control" name="agent_acc_num" id="agent_acc_num" value="<?=$agent->bank_acc_number?>" placeholder="Enter Bank Account Number">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_bank_name">Enter Bank Name</label>
                    <input type="text" class="form-control" name="agent_bank_name" id="agent_bank_name" value="<?=$agent->bank_name?>" placeholder="Enter Bank Name">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_branch_name">Enter Branch Name</label>
                    <input type="text" class="form-control" name="agent_branch_name" id="agent_branch_name" value="<?=$agent->bank_branch?>" placeholder="Enter Branch Name">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_bank_ifsc">Enter Bank IFSC Code</label>
                    <input type="text" class="form-control" name="agent_bank_ifsc" id="agent_bank_ifsc" value="<?=$agent->bank_ifsc?>" placeholder="Enter Bank IFSC Code">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_position">Select Position <span class="text-danger">*</span></label>
                    <select class="form-control" name="agent_position" required="" id="agent_position">
                      <option value="">Select Position</option>
                      <?php foreach ($position as $key => $value) { ?>
                        <option value="<?=$value->id?>" <?php if($value->id == $agent->position){ echo 'selected'; } ?> ><?=$value->name?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_senior_id">Enter Senior I'd <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="agent_senior_id" required="" id="agent_senior_id" value="<?=$agent->senior_id?>" placeholder="Enter Senior I'd">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_senior_name">Enter Senior Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="agent_senior_name" required="" id="agent_senior_name" value="<?=$agent->senior_name?>" placeholder="Enter Senior Name">
                  </div>

				  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_senior_id">Create Password <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="password" required="" id="password" value="<?=$agent->password?>" placeholder="create password">
                  </div>
					
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Update Agent Details</button>
                </div>
              </form>
            <?php }else{ ?>
              <form role="form" method="post" action="<?=base_url('admin/dashboard/agent/save')?>">
                <div class="box-body">
            
                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_name">Enter Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="agent_name" required="" id="agent_name" placeholder="Enter Name">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_fhname">Enter Father/Husband Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" required="" name="agent_fhname" id="agent_fhname" placeholder="Enter Father/Husband Name">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_gender">Select Gender <span class="text-danger">*</span></label>
                    <select class="form-control" name="agent_gender" required="" id="agent_gender">
                      <option value="">Select Gender</option>
                      <?php foreach ($genders as $key => $gender) { ?>
                        <option value="<?=$gender->short_name?>"><?=$gender->name?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_dob">select date of birth <span class="text-danger">*</span></label>
                    <input type="text" class="form-control datepicker" name="agent_dob" required="" id="agent_dob" placeholder="Enter date of birth">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_qualification">Enter Qualification <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="agent_qualification" required="" id="agent_qualification" placeholder="Enter Qualification">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_email">Enter Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="agent_email" id="agent_email" required="" placeholder="Enter email id">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_mobile">Enter Mobile Number <span class="text-danger">*</span></label>
                    <input type="tel" required="" class="form-control" name="agent_mobile" id="agent_mobile" placeholder="Enter Mobile Number">
                  </div>
                  
                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_state">Enter State <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" required="" name="agent_state" id="agent_state" placeholder="Enter State">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_city">Enter city <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" required="" name="agent_city" id="agent_city" placeholder="Enter City">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_address">Enter Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" required="" name="agent_address" id="agent_address" placeholder="Enter Address">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_pincode">Enter Pincode <span class="text-danger">*</span></label>
                    <input type="tel" maxlength="6" class="form-control" required="" name="agent_pincode" id="agent_pincode" placeholder="Enter Pincode">
                  </div>
                             
                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_id_type">Select Id Type</label>
                    <select class="form-control" name="agent_id_type" id="agent_id_type">
                      <option value="">Select Id Type</option>
                      <?php foreach ($govt_ids as $key => $govt_id) { ?>
                        <option value="<?=$govt_id->id?>"><?=$govt_id->name?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_id">Enter id</label>
                    <input type="text" class="form-control" name="agent_id" id="agent_id" placeholder="Enter Id">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_acc_num">Enter Bank Account Number</label>
                    <input type="tel" class="form-control" name="agent_acc_num" id="agent_acc_num" placeholder="Enter Bank Account Number">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_bank_name">Enter Bank Name</label>
                    <input type="text" class="form-control" name="agent_bank_name" id="agent_bank_name" placeholder="Enter Bank Name">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_branch_name">Enter Branch Name</label>
                    <input type="text" class="form-control" name="agent_branch_name" id="agent_branch_name" placeholder="Enter Branch Name">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_bank_ifsc">Enter Bank IFSC Code</label>
                    <input type="text" class="form-control" name="agent_bank_ifsc" id="agent_bank_ifsc" placeholder="Enter Bank IFSC Code">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_position">Select Position <span class="text-danger">*</span></label>
                    <select class="form-control" name="agent_position" required="" id="agent_position">
                      <option value="">Select Position</option>
                      <?php foreach ($position as $key => $value) { ?>
                        <option value="<?=$value->id?>"><?=$value->name?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_senior_id">Enter Senior I'd <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="agent_senior_id" required="" id="agent_senior_id" placeholder="Enter Senior I'd">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_senior_name">Enter Senior Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="agent_senior_name" required="" id="agent_senior_name" placeholder="Enter Senior Name">
                  </div>
					
				  <div class="form-group col-md-3 col-sm-12">
                    <label for="agent_senior_id">Create Password <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="password" required="" id="password" value="" placeholder="create password">
                  </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Add Agent</button>
                </div>
              </form>
            <?php } ?>           
          </div>
          <!-- /.box -->
        </div>
        
      </div>
      <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- bootstrap datepicker -->
<script src="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>