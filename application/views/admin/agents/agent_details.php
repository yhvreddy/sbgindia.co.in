<!-- Content Wrapper. Contains page content -->

<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <h1>

      Dashboard

      <small></small>

    </h1>

    <ol class="breadcrumb">

      <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard </a></li>

    </ol>

  </section>

	

  <section class="content">	

	<?php //echo "<pre>"; print_r($agentsdata); echo "</pre>"; ?>

    <div class="row">

        <div class="col-md-12">

          <!-- Horizontal Form -->

          <div class="box box-info">

            <div class="box-header with-border">

              <h3 class="box-title"><?=$userdata[0]->name?> List</h3>

            </div>

            <!-- /.box-header -->

            <!-- form start -->

            <div class="box-body">

              <div class="table-responsive">

                <table class="table table-striped table-bordered datatable">

                  <thead>

                    <th>#</th>

                    <th>Zone Name</th>

                    <th>Layout</th>

                    <th>Flat Id</th>

					<th>Position</th>  

					<th>%</th>

					<th>Amount</th>

					<th>TDS %</th>

					<th>Tax amt</th>

					<th>Total</th>

                    <th>Details</th>

                  </thead>

                  <tbody>

                    <?php $i = 1; foreach ($agentsdata as $key => $agent) { 

						$zone = $this->Model_default->select_data('sbgi_zones',array('id'=>$agent->zone_id)); 

						$layout = $this->Model_default->select('id, zone_id, subzone_name,slots_details', 'sbgi_sub_zones' ,array('id'=>$agent->layout_id));

						$flotdata = unserialize($layout[0]->slots_details);

						$agentdata = unserialize($agent->details);

						//echo "<pre>"; print_r($agentdata); echo "</pre>";

					?>

                      <tr>

					  	  <td><?=$i++;?></td>

						  <td><?=$zone[0]->name?></td>

						  <td><?=$layout[0]->subzone_name?></td>

						  <td><?=$agent->slot_id?></td>

						  <?php

							$sale_amount = $flotdata[$agent->slot_id]['sale_amount'];

							foreach($agentdata as $ag){

								$agents = $this->Model_default->select_data('sbgi_agent_registrations', array('id'=>$ag['agent_id']));

								$position = $this->Model_default->select_data('sbgi_formdata', array('id'=>$agents[0]->position));

								$percent  = $this->Model_default->select_data('sbgi_percent', array('zone_id'=>$agent->zone_id, 'layout_id'=>$agent->layout_id, 'position_id'=>$agents[0]->position));



								$amount = $sale_amount * $percent[0]->percent / 100;

								$tdsamount = $amount * $ag['tds_tax'] / 100;

								$totalamount = $amount - $tdsamount;

								if($userdata[0]->id == $ag['agent_id']){

								?>

						  		  <td><?=$position[0]->name?></td>

								  <td><?=$percent[0]->percent?>%</td>

								  <td><?=$amount?></td>

								  <td><?=$ag['tds_tax']?></td>

								  <td><?=$tdsamount?></td>

								  <td><?=$totalamount?></td>
						<?php } } ?>

						  <td><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#AgentDetails_<?=$agent->id?>"><?=$agent->slot_id?> Details</a></td>
					  </tr>

					  <div class="modal fade" id="AgentDetails_<?=$agent->id?>">

                        <div class="modal-dialog modal-lg" style="top:65px">

                          <div class="modal-content">

                            <div class="modal-header">

                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                <span aria-hidden="true">&times;</span></button>

                              <h4 class="modal-title"><?=$agent->slot_id?> Details </h4>

                            </div>

                            <div class="modal-body">

								<div class="row">

									<div class="col-md-3">

										<label>Zone : <?=$zone[0]->name?></label>

									</div>

									<div class="col-md-3">

										<label>Layout : <?=$layout[0]->subzone_name?></label>

									</div>

									<div class="col-md-3">

										<label>Flat id : <?=$agent->slot_id?></label>

									</div>

									<div class="col-md-3">

										<label>Sale amount : <?=$flotdata[$agent->slot_id]['sale_amount']?></label>

									</div>

									<div class="col-md-12">

										<div class="row">

											<div class="col-md-3 text-info"><label>Name</label></div>

											<div class="col-md-1 text-info"><label>Position</label></div>

											<div class="col-md-1 text-info"><label>%</label></div>

											<div class="col-md-1 text-info"><label>Amount</label></div>

											<div class="col-md-2 text-info"><label>TDS Tax</label></div>

											<div class="col-md-2 text-info"><label>Tax amt</label></div>

											<div class="col-ms-1 text-info"><label>Total Amount</label></div>

										</div>

											<?php

												$sale_amount = $flotdata[$agent->slot_id]['sale_amount'];

												foreach($agentdata as $ag){

													$agents = $this->Model_default->select_data('sbgi_agent_registrations', array('id'=>$ag['agent_id']));

													$position = $this->Model_default->select_data('sbgi_formdata', array('id'=>$agents[0]->position));

													$percent  = $this->Model_default->select_data('sbgi_percent', array('zone_id'=>$agent->zone_id, 'layout_id'=>$agent->layout_id, 'position_id'=>$agents[0]->position));



													$amount = $sale_amount * $percent[0]->percent / 100;

													$tdsamount = $amount * $ag['tds_tax'] / 100;

													$totalamount = $amount - $tdsamount;

													if($userdata[0]->id == $ag['agent_id']){

													?>

												<div class="row">

													<div class="col-md-3"><label><?=$agents[0]->name?></label></div>

													<div class="col-md-1"><label><?=$position[0]->name?></label></div>

													<div class="col-md-1"><label><?=$percent[0]->percent?></label></div>

													<div class="col-md-1"><label><?=$amount?></label></div>

													<div class="col-md-2"><label><?=$ag['tds_tax']?></label></div>

													<div class="col-md-2"><label><?=$tdsamount?></label></div>

													<div class="col-ms-1"><label><?=$totalamount?></label></div>

												</div>

											<?php } } ?>

										

									</div>

								</div>

							</div>

                          </div>

                          <!-- /.modal-content -->

                        </div>

                        <!-- /.modal-dialog -->

                      </div>

                      <!-- /.modal -->

                    <?php } ?>

                  </tbody>

                </table>

              </div>  

            </div>

          </div>

          <!-- /.box -->

        </div>

    </div>

    

  </section>

  <!-- /.content -->

</div>

<!-- /.content-wrapper -->

<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">