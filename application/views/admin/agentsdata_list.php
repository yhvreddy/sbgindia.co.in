<!-- DataTables -->

  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <h1>

      Agents

      <small></small>

    </h1>

    <ol class="breadcrumb">

      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>

      <li>Agents</li>

      <li class="active">Agent List</li>

    </ol>

  </section>



  <!-- Main content -->

  <section class="content">

	  <?php //echo "<pre>"; print_r($agentsdata); echo "</pre>"; ?>

    <div class="row">

        <div class="col-md-12">

          <!-- Horizontal Form -->

          <div class="box box-info">

            <div class="box-header with-border">

              <h3 class="box-title">Agent List</h3>

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

                    <th>Plot Id</th>

					          <th>Sale Amount</th>

                    <th>Details</th>

                    <th></th>

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

						  <td><?=$flotdata[$agent->slot_id]['sale_amount']?></td>

						  <td><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#AgentDetails_<?=$agent->id?>"><?=$agent->slot_id?> Details</a></td>

						  <td align="center">

						  	<span title="Edit" data-toggle="tooltip">
								<a href="<?=base_url('admin/dashboard/agentdatalist/'.$agent->id.'/'.url_title($layout[0]->subzone_name))?>" onClick="return confirm('Are you want to edit details..!');"><i class="fa fa-edit"></i></a>
							</span>&nbsp;&nbsp;
<!--
							<span title="Delete" data-toggle="tooltip">
								<a href="#" onClick="return confirm('Are you want to delete..!');"><i class="fa fa-trash-o"></i></a>
							</span>
-->

						  </td>

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

										<label>Plot id : <?=$agent->slot_id?></label>

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
												?>

											<div class="row" style="">
												<div class="col-md-3"><label><?=$ag['name']?></label></div>
												<div class="col-md-1"><label><?=$ag['position']?></label></div>
												<div class="col-md-1"><label><?=$ag['percent']?></label></div>
												<div class="col-md-1"><label><?=$ag['amount']?></label></div>
												<div class="col-md-2"><label><?=$ag['tds_tax']?></label></div>
												<div class="col-md-2"><label><?=$ag['tax_amount']?></label></div>
												<div class="col-ms-1"><label><?=$ag['total_amount']?></label></div>
											</div>

										<?php } ?>

										

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

      <!-- /.row -->

  </section>

  <!-- /.content -->

</div>

<!-- /.content-wrapper -->

<!-- DataTables -->

<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>