  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Layouts
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li>Layouts</li>
      <li class="active">Layout List</li>
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
        
        
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Layouts List</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			  <div class="box-body">
				<table class="table table-striped table-bordered datatable">
				  <thead>
					<th>#</th>
					<th>Zone</th>
					<th>Layouts</th>
					<th class="text-center">Plots</th>
					<th></th>
				  </thead>
				  <tbody>
					<?php $i = 1; foreach ($subzones as $key => $subcategory) { ?>
					  <tr>
						<td><?=$i++;?></td>
						<td>
						  <?php
							$CategoryName = $this->Model_default->select_data('sbgi_zones',array('id'=>$subcategory->zone_id),'id DESC');
							print_r($CategoryName[0]->name);
						  ?>
						</td>
						<td><?=$subcategory->subzone_name?></td>
						<td align="center"><span data-toggle="tooltip" title="Details list"><a href="#" data-toggle="modal" data-target="#slotdetails_<?=$subcategory->id?>"><?=$subcategory->slots?> slots</a></span></td>
						<!-- Model View -->
						<div id="slotdetails_<?=$subcategory->id?>" class="modal fade" role="dialog">
						  <div class="modal-dialog modal-lg" style="top:50px">

							<!-- Modal content-->
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><?=$CategoryName[0]->name ?> : <?=$subcategory->subzone_name?></h4>
							  </div>
							  <div class="modal-body">
								<div class="row">
								  <div class="col-md-4">
									<?php foreach ($zones as $key => $zone) { ?>
									  <label> <?php if($subcategory->zone_id == $zone->id){ echo 'Zone Name : '.$zone->name;  } ?></label>
									<?php } ?>
								  </div>  
								  <div class="col-md-4">
									<label>Layout Name :  <?=$subcategory->subzone_name?></label>
								  </div>

								  <div class="col-md-4">
									<label>No of Slots : <?=$subcategory->slots?></label>
								  </div>
								  <div class="col-md-12">
									<label>Information</label>
									<p class="col-md-12"><?=$subcategory->information?></p>
								  </div>
								  <div class="col-md-12">
									<?php if(!empty($subcategory->image)){ ?>
									  <h5>Uploaded layout image</h5>
									  <img src="<?=base_url($subcategory->image)?>" style="width: 100%">
									<?php } ?>
								  </div>
								</div>
								<div class="row">
								  <?php 
									$subzonedetails = unserialize($subcategory->slots_details);
									$colors = array('Avaliable'=>'#3db818','Booked'=>'#d41326','Reserved'=>'#d18e08','null'=>'');
									foreach ($subzonedetails as $key => $value) {
									  //echo "<pre>"; print_r($value); echo "</pre>";
									  $staus = $value['status'];
										if($staus == ''){
											$staus = 'null';
										}
									  ?>

										<div class="col-md-1" style="background: <?=$colors[$staus];?>;padding: 5px 3px;margin: 5px 3px;text-align: center;">
										  <a href="#" data-toggle="popover" data-trigger="focus" data-placement="top" title="Slot details" data-content="<?=$value['details']?>" style="color: #ffffff;" >
											<?=$value['plot_id']?>
											<?//=$value['slot_id_num']?>
										  </a>
										</div>

									  <?php
									} ?>
								</div>
							  </div>
							</div>

						  </div>
						</div>
						<td align="center">
						  <a href="<?=base_url('admin/dashboard/subzone/'.$subcategory->id.'/edit')?>"  onclick="return confirm('You want to edit zone slot details..?');"><i class="fa fa-edit"></i></a>&nbsp;

						  <a href="<?=base_url('admin/dashboard/subzone/'.$subcategory->id.'/detete')?>" onclick="return confirm('You want to delete zone slot details..?');"><i class="fa fa-trash-o"></i></a>
						</td>
					  </tr>
					<?php } ?>
				  </tbody>
				</table>
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