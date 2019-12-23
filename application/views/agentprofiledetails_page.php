        <!-- Sticky Navbar -->
        <div class="page-header page-title-left page-title-pattern">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">Agent Details</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?=base_url()?>">Home</a>
                            </li>
                            <li class="active">Agent Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-header -->
        <section id="services" class="page-section service-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-push-2">
                        <div class="row">
                            <div class="col-md-12 content-block">
                                <h4>Agent Profile</h4>
                                <div class="row">
                                    <p style="text-align: center;">
                                        <span style="color:red;font-size: 16px">
                                            <?=$this->session->flashdata('failed');?>
                                        </span>
                                    </p>
                                    <p style="text-align: center;">
                                        <span style="color:green;font-size: 16px">
                                            <?=$this->session->flashdata('success');?>
                                        </span>
                                    </p>
                                    <form role="form" method="post" action="<?=base_url('agent/saveeditdetails')?>">
                                        <div class="box-body">
                                            <input type="hidden" name="edit_id" value="<?=$agent->id?>"> 
                                            <div class="form-group col-md-3 col-sm-12">
                                                <label for="agent_name">Enter Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="agent_name" required="" id="agent_name" value="<?=$agent->name?>" placeholder="Enter Name">
                                            </div>

                                            <div class="form-group col-md-3 col-sm-12">
                                                <label for="agent_fhname">Father/Husband Name <span class="text-danger">*</span></label>
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
                                                <input type="text" readonly="" class="form-control datepicker" name="agent_dob" required="" id="agent_dob" placeholder="Enter date of birth" value="<?=date('d-m-Y',strtotime($agent->dob))?>">
                                            </div>

                                            <div class="form-group col-md-3 col-sm-12">
                                                <label for="agent_qualification">Enter Qualification <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="agent_qualification" required="" id="agent_qualification" value="<?=$agent->qualification?>" placeholder="Enter Qualification">
                                            </div>

                                            <div class="form-group col-md-3 col-sm-12">
                                                <label for="agent_email">Enter Email <span class="text-danger">*</span></label>
                                                <input type="email" readonly="" class="form-control" name="agent_email" id="agent_email" required="" value="<?=$agent->email_id?>" placeholder="Enter email id">
                                            </div>

                                            <div class="form-group col-md-3 col-sm-12">
                                                <label for="agent_mobile">Enter Mobile Number <span class="text-danger">*</span></label>
                                                <input type="tel" readonly="" required="" class="form-control" name="agent_mobile" id="agent_mobile" value="<?=$agent->mobile?>" placeholder="Enter Mobile Number">
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
                                                <select class="form-control" name="agent_id_type" id="agent_id_type" disabled="">
                                                <option value="">Select Id Type</option>
                                                <?php foreach ($govt_ids as $key => $govt_id) { ?>
                                                    <option value="<?=$govt_id->id?>" <?php if($agent->card_type == $govt_id->id){ echo 'selected'; } ?> ><?=$govt_id->name?></option>
                                                <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3 col-sm-12">
                                                <label for="agent_id">Enter id</label>
                                                <input type="text" readonly="" class="form-control" name="agent_id" id="agent_id" placeholder="Enter Id" value="<?=$agent->card_id?>">
                                            </div>

                                            <div class="form-group col-md-3 col-sm-12">
                                                <label for="agent_acc_num">Bank Account Number</label>
                                                <input type="tel" readonly="" class="form-control" name="agent_acc_num" id="agent_acc_num" value="<?=$agent->bank_acc_number?>" placeholder="Enter Bank Account Number">
                                            </div>

                                            <div class="form-group col-md-3 col-sm-12">
                                                <label for="agent_bank_name">Enter Bank Name</label>
                                                <input type="text" readonly="" class="form-control" name="agent_bank_name" id="agent_bank_name" value="<?=$agent->bank_name?>" placeholder="Enter Bank Name">
                                            </div>

                                            <div class="form-group col-md-3 col-sm-12">
                                                <label for="agent_branch_name">Enter Branch Name</label>
                                                <input type="text" readonly="" class="form-control" name="agent_branch_name" id="agent_branch_name" value="<?=$agent->bank_branch?>" placeholder="Enter Branch Name">
                                            </div>

                                            <div class="form-group col-md-3 col-sm-12">
                                                <label for="agent_bank_ifsc">Enter Bank IFSC Code</label>
                                                <input type="text" readonly="" class="form-control" name="agent_bank_ifsc" id="agent_bank_ifsc" value="<?=$agent->bank_ifsc?>" placeholder="Enter Bank IFSC Code">
                                            </div>

                                            <div class="form-group col-md-3 col-sm-12">
                                                <label for="agent_position">Select Position <span class="text-danger">*</span></label>
                                                <select class="form-control" name="agent_position" required="" id="agent_position" disabled="">
                                                <option value="">Select Position</option>
                                                <?php foreach ($position as $key => $value) { ?>
                                                    <option value="<?=$value->id?>" <?php if($value->id == $agent->position){ echo 'selected'; } ?> ><?=$value->name?></option>
                                                <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3 col-sm-12">
                                                <label for="agent_senior_id">Enter Senior I'd <span class="text-danger">*</span></label>
                                                <input type="text" readonly="" class="form-control" name="agent_senior_id" required="" id="agent_senior_id" value="<?=$agent->senior_id?>" placeholder="Enter Senior I'd">
                                            </div>

                                            <div class="form-group col-md-3 col-sm-12">
                                                <label for="agent_senior_name">Enter Senior Name <span class="text-danger">*</span></label>
                                                <input type="text" readonly="" class="form-control" name="agent_senior_name" required="" id="agent_senior_name" value="<?=$agent->senior_name?>" placeholder="Enter Senior Name">
                                            </div>

                                            
                                        </div>
                                        <!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-warning pull-right">Update Agent Details</button>
                                        </div>
                                    </form>

                                    <!-- <form method="post" action="">
                                        <input type="hidden" value="<?=$userdata->id?>" name="edit_id">
                                        <div class="form-group col-md-4 input-text">
                                            <label>Enter Name</label>
                                            <input type="text" placeholder="Enter Name" name="name" required="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4 input-text">
                                            <label>Enter Father / Husband Name</label>
                                            <input type="text" placeholder="Enter Father / Husband Name" name="fh_name" required="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4 input-text">
                                            <label>Enter Father / Husband Name</label>
                                            <input type="text" placeholder="Enter Father / Husband Name" name="fh_name" required="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4 input-text">
                                            <label>Enter Father / Husband Name</label>
                                            <input type="text" placeholder="Enter Father / Husband Name" name="fh_name" required="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4 input-text">
                                            <label>Enter Father / Husband Name</label>
                                            <input type="text" placeholder="Enter Father / Husband Name" name="fh_name" required="" class="form-control">
                                        </div>
                                    </form> -->

                                </div> 
                                <h4>Change Password</h4>
                                <div class="row">
                            
                                    <form method="post" action="<?=base_url('agent/savepasswordDetails')?>">
                                        <input type="hidden" value="<?=$userdata->id?>" name="edit_id">
                                        <div class="form-group col-md-4 input-text">
                                            <input type="password" placeholder="Enter new password" name="password" required="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4 input-text">
                                            <input type="password" placeholder="Enter new confirm password" name="confirm_password" required="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4 input-text">
                                            <button type="submit" style="margin-top:0px" class="btn btn-warning pull-right">Update  Password</button>
                                        </div>
                                    </form>

                                </div> 
                            </div>
                        </div>
                        
                    </div>

                    <div class="sidebar col-sm-12 col-md-2 col-md-pull-10">
                        <div class="widget list-border">
                            <div class="widget-title">
                                <h3 class="title">Agent Menus</h3>
                            </div>
                            <div id="MainMenu1">
                                <div class="list-group panel">
                                    <div class="collapse in" id="demo">
                                        <a href="<?=base_url('agents/details')?>" class="list-group-item">Details</a> 
                                        <a href="<?=base_url('agents/profiledetails')?>" class="list-group-item">Profile Details</a> 
                                    </div>
                                </div>
                            </div>
                            <!-- category-list -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services -->  