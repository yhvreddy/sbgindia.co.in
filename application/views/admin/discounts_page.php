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
      <li class="active">Layouts</li>
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
        <div class="col-md-5">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add /Edit Layouts</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?=base_url('admin/layouts/savepercentages')?>">
              <div class="box-body">
				  <?php if(isset($percents)){ //print_r($percents); ?>
				  	<input type="hidden" value="<?=$percents[0]->id?>" name="edit_id">
					<div class="form-group">
					  <label for="category_name">Select zone Name <span class="text-danger">*</span></label>
					  <select class="form-control" name="Zone_name" required="" id="Zone_name">
						<option value="">Select Zone Name</option>
						<?php foreach ($zones as $key => $zone) { ?>
						  <option value="<?=$zone->id?>" <?php if($zone->id == $percents[0]->zone_id){ echo "selected"; } ?>><?=$zone->name?></option>
						<?php } ?>
					  </select>
					</div>

					<div class="form-group">
						<?php $layouts = $this->Model_default->select('id, zone_id, subzone_name, slots_details', 'sbgi_sub_zones' ,array('zone_id'=>$percents[0]->zone_id)); ?>
					  <label for="category_name">Select Layout <span class="text-danger">*</span></label>
					  <select class="form-control" name="layout_name" required="" id="layouts_name">
						<option value="">Select Layout Name</option>
						<?php foreach($layouts as $layout){ ?>
							<option <?php if($layout->id == $percents[0]->layout_id){ echo 'selected'; } ?> value="<?=$layout->id?>"> <?=$layout->subzone_name?> </option>  
						<?php } ?>
					  </select>
					</div>  

					<div class="form-group">
					  <label for="category_name">Select Position <span class="text-danger">*</span></label>
					  <select class="form-control" name="position_name" required="" id="category_name">
						<option value="">Select Position</option>
						<?php foreach ($positions as $key => $zone) { ?>
						  <option value="<?=$zone->id?>" <?php if($zone->id == $percents[0]->position_id){ echo 'selected'; } ?> ><?=$zone->name?></option>
						<?php } ?>
					  </select>
					</div>
				  
				  	<div class="form-group">
					  <label for="subcategory_name">Enter Percentage <span class="text-danger">*</span></label>
					  <input type="tel" class="form-control" value="<?=$percents[0]->percent?>" name="percentage" id="slots" required="" placeholder="Enter Percentage %">
					</div>
				  <?php }else{ ?>
				  	<div class="form-group">
					  <label for="category_name">Select zone Name <span class="text-danger">*</span></label>
					  <select class="form-control" name="Zone_name" required="" id="Zone_name">
						<option value="">Select Zone Name</option>
						<?php foreach ($zones as $key => $zone) { ?>
						  <option value="<?=$zone->id?>"><?=$zone->name?></option>
						<?php } ?>
					  </select>
					</div>

					<div class="form-group">
					  <label for="category_name">Select Layout <span class="text-danger">*</span></label>
					  <select class="form-control" name="layout_name" required="" id="layouts_name">
						<option value="">Select Layout Name</option>

					  </select>
					</div>  

					<div class="form-group">
					  <label for="category_name">Select Position <span class="text-danger">*</span></label>
					  <select class="form-control" name="position_name" required="" id="category_name">
						<option value="">Select Position</option>
						<?php foreach ($positions as $key => $zone) { ?>
						  <option value="<?=$zone->id?>"><?=$zone->name?></option>
						<?php } ?>
					  </select>
					</div>
				  
				  	<div class="form-group">
					  <label for="subcategory_name">Enter Percentage <span class="text-danger">*</span></label>
					  <input type="tel" class="form-control" name="percentage" id="slots" required="" placeholder="Enter Percentage %">
					</div>
				  <?php } ?>
				  
					
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Save Percentage %</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
		<script>
			$(document).ready(function(){
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
				})
			})
		</script>
        <!-- right column -->
        <div class="col-md-7">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Layouts Percent (%) List</h3>
            </div>
			<div class="box-body">
				<table class="table table-striped table-bordered datatable">
					<thead>
						<th>#</th>
						<th>Layout Zone</th>
						<th>Layout</th>
						<th>Position</th>  
						<th class="text-center">(%)</th>
						<th></th>
					</thead>
					<tbody>
						<?php $i = 1; foreach($layoutpercents as $value){ ?>
						<tr>
							<td><?=$i++;?></td>
							<td>
								<?php $zone = $this->Model_default->select_data('sbgi_zones',array('id'=>$value->zone_id)); ?>
								<?=$zone[0]->name?>
							</td>
							<td>
								<?php $layout = $this->Model_default->select_data('sbgi_sub_zones',array('id'=>$value->layout_id)); ?>
								<?=$layout[0]->subzone_name?>
							</td> 
							<td>
								<?php $position = $this->Model_default->select_data('sbgi_formdata',array('id'=>$value->position_id)); ?>
								<?=$position[0]->name?>
							</td>
							<td align="center"><?=$value->percent?></td>
							<td align="center">
								<span><a href="<?=base_url('admin/layouts/editpercent?id='.$value->id)?>" onclick="return confirm('Do you want to edit data..!');"><i class="fa fa-edit"></i></a></span>&nbsp;
								<!--<span><a href="<?//=base_url('admin/layouts/deletepercent?id='.$value->id)?>" onclick="return confirm('Do you want to delete data..!');"><i class="fa fa-trash"></i></a></span>  -->
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
          </div>
          <!-- /.box -->
          
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- DataTables -->
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>