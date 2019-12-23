<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <h1>

      Agents data

      <small></small>

    </h1>

    <ol class="breadcrumb">

      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

      <li class="active">Agents data</li>

    </ol>

  </section>

  <style type="text/css">

    .popover{

      width: max-content !important;

    }

  </style>

  <!-- Main content -->

  <section class="content">

    <div class="row">

        <!-- left column -->

        <div class="col-md-12">

          <!-- general form elements -->

          <div class="box box-primary">

            <div class="box-header with-border">

              <h3 class="box-title">Add Agents Data</h3>

            </div>

            <!-- /.box-header -->

            <!-- form start -->

            <form role="form" method="post" id="AgentdetailsData" action="<?=base_url('admin/layouts/agentDetailsave')?>">

              <div class="box-body">

                <?php if(isset($editagentdata)){  
						$editagentdata = $editagentdata[0];		
					//echo "<pre>"; print_r($editagentdata); echo "</pre>"; ?>
					<input type="hidden" name="edit_id" value="<?=$editagentdata->id?>">
				  
					<div class="form-group col-md-3 col-sm-12 col-xs-12">

					  <label for="category_name">Select zone Name <span class="text-danger">*</span></label>

					  <select class="form-control" name="Zone_name" required="" id="Zone_name">

						<option value="">Select Zone Name</option>

						<?php foreach ($zones as $key => $zone) { ?>
			
						  <option value="<?=$zone->id?>" <?php if($editagentdata->zone_id == $zone->id){ echo "selected"; } ?> ><?=$zone->name?></option>

						<?php } ?>

					  </select>

					</div>

					<div class="form-group col-md-3 col-sm-12 col-xs-12">

					  <label for="category_name">Select Layout <span class="text-danger">*</span></label>
					  <?php
						$layouts = $this->Model_default->select_data('sbgi_sub_zones',array('zone_id'=>$editagentdata->zone_id));
					  ?>
					  <select class="form-control" name="layout_name" required="" id="layouts_name">

						<option value="">Select Layout Name</option>
						<?php foreach($layouts as $layout){ ?>
							<option value="<?=$layout->id?>" <?php if($editagentdata->layout_id == $layout->id){ echo "selected"; } ?> ><?=$layout->subzone_name?></option>  
						<?php } ?>
					  </select>

					</div>  

					<div class="form-group col-md-3 col-sm-12 col-xs-12">

					  <label for="category_name">Select Plot Id <span class="text-danger">*</span></label>
						<?php
							$slotsdata = unserialize($layouts[0]->slots_details);
						?>
					  <select class="form-control" name="slot_name" required="" id="slot_name">

						<option value="">Select slot</option>

						<?php foreach($slotsdata as $key => $slot){ ?>
							<option value="<?=$slot['slot_id']?>" <?php if($editagentdata->slot_id == $slot['slot_id']){ echo "selected"; } ?> ><?=$slot['slot_id']?></option>  
						<?php } ?>

					  </select>

					</div>

					<div class="form-group col-md-3 col-sm-12 col-xs-12">

					  <label for="taxs">sale amount <span class="text-danger">*</span></label>

					  <input type="text" readonly class="form-control" name="sale_amount" id="sale_amount" required="" placeholder="Sale amount" value="<?=$slotsdata[$editagentdata->slot_id]['sale_amount']?>">

					</div>
					<?php //echo "<pre>"; print_r(unserialize($editagentdata->details)); echo "</pre>"; ?>
					<?php foreach ($positions as $key => $zone) { ?>
						<div class="form-group col-md-3 col-sm-12 col-xs-12">
							
						  <label for="category_name">Select <?=$zone->name?>
						  
						  </label>

						  <?php 

							$position = $agents = $this->Model_default->select_data('sbgi_formdata', array('name'=>$zone->name));

							$agents = $this->Model_default->select_data('sbgi_agent_registrations', array('position'=>$position[0]->id)); 

							$agent_list = unserialize($editagentdata->details);									 		
						  ?>			

						  <select class="form-control" name="position_name[]" id="position_name_<?=$zone->id?>">

							<?php if(count($agents) != 0){ ?>

								<option value="">Select <?=$zone->name?></option>  

							<?php foreach($agents as $key => $agent){ ?>
								
								<option value="<?=$agent->id?>" <?php for($i = 0;$i < count($agent_list); $i++){ if($agent_list[$i]['agent_id'] == $agent->id){ echo "selected"; } } ?>  ><?=$agent->name?></option>  

							<?php } }else{ ?>

							  	<option value=""> No Persons Found : <?=$zone->name?></option>

							<?php } ?>

						  </select>
						  <?php if(count($agents) != 0){ ?>
							<div style="margin:5px 0px">
								<label class="radio-inline"><input type="radio" required name="soldBy" <?php if($zone->name == $editagentdata->soldBy){ echo 'checked'; } ?> value="<?=$zone->name?>"> <b>Select Sale by <?=$zone->name?></b></label>	
							</div>
						  <?php } ?>
						</div>
						
					<?php } ?>  
					
						<div class="form-group col-md-3 col-sm-12 col-xs-12">
							<label for="taxs">TDS Tax % <span class="text-danger">*</span></label>
							<input type="tel" value="<?=$taxs[0]->tax?>" readonly class="form-control" name="tds_tax" id="tds_tax" required="" placeholder="TDS Tax">
						</div>
						
				<?php }else{ ?>
				  
					<div class="form-group col-md-3 col-sm-12 col-xs-12">

					  <label for="category_name">Select zone Name <span class="text-danger">*</span></label>

					  <select class="form-control" name="Zone_name" required="" id="Zone_name">

						<option value="">Select Zone Name</option>

						<?php foreach ($zones as $key => $zone) { ?>

						  <option value="<?=$zone->id?>"><?=$zone->name?></option>

						<?php } ?>

					  </select>

					</div>

					<div class="form-group col-md-3 col-sm-12 col-xs-12">

					  <label for="category_name">Select Layout <span class="text-danger">*</span></label>

					  <select class="form-control" name="layout_name" required="" id="layouts_name">

						<option value="">Select Layout Name</option>

					  </select>

					</div>  

					<div class="form-group col-md-3 col-sm-12 col-xs-12">

					  <label for="category_name">Select Plot Id <span class="text-danger">*</span></label>
					  <select class="form-control" name="slot_name" required="" id="slot_name">
						<option value="">Select slot</option>
					  </select>

					</div>

					<div class="form-group col-md-3 col-sm-12 col-xs-12">

					  <label for="taxs">sale amount <span class="text-danger">*</span></label>
					  <input type="text" readonly class="form-control" name="sale_amount" id="sale_amount" required="" placeholder="Sale amount">

					</div>

					<?php foreach ($positions as $key => $zone) { ?>

						<div class="form-group col-md-3 col-sm-12 col-xs-12">

						  <label for="category_name">Select <?=$zone->name?> </label>

						  <?php 

							$position = $agents = $this->Model_default->select_data('sbgi_formdata', array('name'=>$zone->name));

							$agents = $this->Model_default->select_data('sbgi_agent_registrations', array('position'=>$position[0]->id,'status'=>1)); 


						  ?>			

						  <select class="form-control" name="position_name[]" id="position_name_<?=$zone->id?>">

							<?php if(count($agents) != 0){ ?>

								<option value="">Select <?=$zone->name?></option>  

							<?php foreach($agents as $agent){ ?>

								<option value="<?=$agent->id?>"><?=$agent->name?></option>  

							<?php } }else{ ?>

							  <option value=""> No Agents Found  On : <?=$zone->name?></option>

							<?php } ?>

						  </select>
						  <?php if(count($agents) != 0){ ?>
							<div style="margin:5px 0px">
								<label class="radio-inline"><input type="radio" required name="soldBy" value="<?=$zone->name?>"> <b>Select Sale by <?=$zone->name?></b></label>	
							</div>
						  <?php } ?>
						  	
						</div>

					<?php } ?>  

					<?php if(isset($taxs[0]->tax) && !empty($taxs[0]->tax)){ ?>
					<div class="form-group col-md-3 col-sm-12 col-xs-12">

					  <label for="taxs">TDS Tax % <span class="text-danger">*</span></label>

					  <input type="tel" value="<?=$taxs[0]->tax?>" readonly class="form-control" name="tds_tax" id="tds_tax" required="" placeholder="TDS Tax">

					</div>  
					
					<?php } ?>
				<?php } ?>  

				  <div class="col-md-12">

					<center><a href="#" id="PreviewData" class="btn btn-success">Preview Data</a></center>

				  </div>

				  

				<div class="col-md-12" id="Previewdetails"></div>  

				  

              </div>

              <!-- /.box-body -->



              <div class="box-footer">

                <button type="submit" class="btn btn-primary pull-right" id="SaveUpdateBtn">Save Agents Data</button>

              </div>

            </form>

		<script>

			$(document).ready(function(){
				$("#SaveUpdateBtn").hide();
				$("#Zone_name").change(function(){

					var zonename = $("#Zone_name").val();

					if(zonename != ''){

						$.ajax({

							method:"POST",

							url: "<?=base_url('admin/layouts/zonelayoutslist')?>",

							data:{zonename : zonename},

							dataType:'json',

							success:function(data){

								console.log(data);

								$('#layouts_name').empty();;

								var toAppend = '';

								toAppend +=  '<option value="">Select Layout Name</option>';

								$.each(data,function(i,o){

								   toAppend += '<option value='+o.id+'>'+o.subzone_name+'</option>';

								});



								$('#layouts_name').append(toAppend);

							},

							error:function(errordata){

								console.log(errordata);

							}

						})

					}

				});

				

				$("#layouts_name").change(function(){

					var layoutname = $("#layouts_name").val();

					if(layoutname != ''){

						$.ajax({

							method:"POST",

							url: "<?=base_url('admin/layouts/zonelayoutslotlist')?>",

							data:{layoutname : layoutname},

							dataType:'json',

							success:function(data){

								console.log(data);

								$('#slot_name').empty();;

								var toAppend = '';

								toAppend +=  '<option value="">Select Layout Name</option>';

								$.each(data,function(i,o){

									//console.log(i + '  - ' + o.slot_id + o.status + o.sale_amount);

								   toAppend += '<option value='+o.slot_id+'>'+o.slot_id+'</option>';

								});

								$('#slot_name').append(toAppend);

							},

							error:function(errordata){

								console.log(errordata);

							}

						})

					}else{

						alert("Please select Layout..!");

					}

				});

				

				$("#slot_name").change(function(){

					var slotname = $("#slot_name").val();

					var layoutname = $("#layouts_name").val();

					if(slotname != ''){

						$.ajax({

							method:"POST",

							url: "<?=base_url('admin/layouts/layoutslotsailamount')?>",

							data:{slotname : slotname,layoutname : layoutname},

							dataType:'json',

							success:function(data){

								console.log(data);

								$('#sale_amount').val('');;

								$('#sale_amount').val(data.sale_amount);

							},

							error:function(errordata){

								console.log(errordata);

							}

						})

					}else{

						alert("Please select slot id..!");

					}

				})

				//

				$("#PreviewData").click(function(){

					var formdata = $("#AgentdetailsData").serialize();

					console.log(formdata);

					$.ajax({

						method:"POST",

						url: "<?=base_url('admin/layouts/agentDetailspreview')?>",

						data: formdata,

						//dataType:'json',

						success:function(data){

							//console.log(data);
							$("#SaveUpdateBtn").show();
							$("#Previewdetails").html(data);

						},

						error:function(errordata){
							$("#SaveUpdateBtn").hide();
							alert("Somthing wrong..! please contact admin.!");
							console.log(errordata);
						}

					})

				});

			})

		</script>

          </div>

          <!-- /.box -->

        </div>

        <!--/.col (left) -->

		

        

      </div>

      <!-- /.row -->

  </section>

  <!-- /.content -->

</div>

<!-- /.content-wrapper -->