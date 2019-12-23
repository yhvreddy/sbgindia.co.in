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
                    <th>Reg id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>City</th>
					<th>Position</th>
                    <th></th>
                  </thead>
                  <tbody>
                    <?php $i = 1; foreach ($agents as $key => $agent) { 
					  $position = $this->Model_default->select_data('sbgi_formdata', array('id'=>$agent->position));
					  ?>
                      <tr>
                        <td><?=$i++;?></td>
                        <td><?=$agent->reg_id?></td>
                        <td><?=$agent->name?></td>
                        <td><?=$agent->email_id?></td>
                        <td><?=$agent->mobile?></td>
                        <td><?=$agent->city?></td>
						<td><?=$position[0]->name?></td>
                        <td align="center">
                          <!--view details model-->
                          <span data-toggle="tooltip" title="Agent details"><a href="#" data-toggle="modal" data-target="#AgentDetails_<?=$agent->id?>"><i class="fa fa-eye fa-lg"></i></a></span>&nbsp;&nbsp;

                          <span data-toggle="tooltip" title="Edit Details"><a href="<?=base_url('admin/dashboard/agent/'.$agent->id.'/editdetails')?>" onclick="return confirm('Are you want to edit details..?');"><i class="fa fa-edit fa-lg"></i></a></span>&nbsp;&nbsp;
                          <span data-toggle="tooltip" title="Delete Agent"><a href="<?=base_url('admin/dashboard/agent/'.$agent->id.'/delete')?>" onclick="return confirm('Are you want to delete..?');"><i class="fa fa-trash fa-lg"></i></a></span>
                        </td>
                      </tr>
                      <div class="modal fade" id="AgentDetails_<?=$agent->id?>">
                        <div class="modal-dialog modal-lg" style="top:65px">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Details : <?=$agent->name?> </h4>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-3">
                                  <label>Name : </label> <?=$agent->name?>
                                </div>
                                <div class="col-md-3">
                                  <label>Father / Husband : </label> <?=$agent->father_husband?>
                                </div>
                                <div class="col-md-3">
                                  <label>DateofBirth : </label> <?=date('d-m-Y',strtotime($agent->dob))?>
                                </div>
                                <div class="col-md-3">
                                  <label>Email : </label> <?=$agent->email_id?>
                                </div>
                                <div class="col-md-3">
                                  <label>Mobile : </label> <?=$agent->mobile?>
                                </div>
                                <div class="col-md-3">
                                  <label>Gender : </label> <?=$agent->gender?>
                                </div>
                                <div class="col-md-3">
                                  <label>Qualification : </label> <?=$agent->qualification?>
                                </div>
                                <div class="col-md-3">
                                  <label>State : </label> <?=$agent->state?>
                                </div>
                                <div class="col-md-3">
                                  <label>City : </label> <?=$agent->city?>
                                </div>
                                <div class="col-md-3">
                                  <label>Address : </label> <?=$agent->address?>
                                </div>
                                <div class="col-md-3">
                                  <label>Pincode : </label> <?=$agent->pincode?>
                                </div>
                                <div class="col-md-3">
                                  <?php if(!empty($agent->card_type)){ 
									$idtype = $this->Model_default->select_data('sbgi_formdata',array('type'=>'govt_ids','id'=>$agent->card_type)); $cname = $idtype[0]->name; }else{ $cname = ''; }?>
                                  <label>Id Type : </label> <?=$cname?>
                                </div>
                                <div class="col-md-3">
                                  <label>Card Id : </label> <?=$agent->card_id?>
                                </div>
                                <div class="col-md-3">
                                  <label>Acc Num : </label> <?=$agent->bank_acc_number  ?>
                                </div>
                                <div class="col-md-3">
                                  <label>Bank Name : </label> <?=$agent->bank_name?>
                                </div>
                                <div class="col-md-3">
                                  <label>Branch Name : </label> <?=$agent->bank_branch?>
                                </div>
                                <div class="col-md-3">
                                  <label>Branch IFSC : </label> <?=$agent->bank_ifsc?>
                                </div>
                                <div class="col-md-3">
                                  <label>Senior id   : </label> <?=$agent->senior_id?>
                                </div>
                                <div class="col-md-3">
                                  <label>Senior name   : </label> <?=$agent->senior_name?>
                                </div>
                                <div class="col-md-3">
                                  <label>Position : </label>  
                                  <?php echo $position[0]->name; ?>
                                </div>
                                  
                                  <div class="col-md-3">
                                  <label>Password : </label>  
                                  <?php echo $agent->password.'XXX'; ?>
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