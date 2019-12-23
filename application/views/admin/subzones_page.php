<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Layouts
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li>Layouts</li>
      <li class="active">Add Layout</li>
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
              <h3 class="box-title">Add Layouts</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?=base_url('admin/dashboard/savesubzone')?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-md-3 form-group">
                  <label for="category_name">Select zone Name <span class="text-danger">*</span></label>
                  <select class="form-control" name="category_name" required="" id="category_name">
                    <option value="">Select zone Name</option>
                    <?php foreach ($zones as $key => $zone) { ?>
                      <option value="<?=$zone->id?>"><?=$zone->name?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-3 form-group">
                  <label for="subcategory_name">Layouts Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="subcategory_name" id="subcategory_name" required="" placeholder="Enter Subzone Name">
                </div>
                <div class="col-md-3 form-group">
                  <label for="CategoryImages">Upload layout Image <span class="text-danger">*</span></label>
                  <input type="file" id="CategoryImages" class="form-control" required="" name="CategoryImages" accept=".png,.jpg,.jpeg">
                </div>
                <div class="col-md-3 form-group">
                  <label for="subcategory_name">No of Slots in layouts <span class="text-danger">*</span></label>
                  <input type="tel" class="form-control" name="slots" id="slots" required="" placeholder="Enter No.of Slots">
                </div>
                <div class="col-md-12 form-group">
                  <label for="Information">Layout Information</label>
                  <textarea class="textarea form-control" id="Information" name="Information" placeholder="Type Layout Information" rows="14"></textarea>
                </div>
                <div class="col-md-12">
					<button type="submit" class="btn btn-primary pull-right">Add Layout</button>
				</div>
              </div>
              <!-- /.box-body -->

              
            </form>
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
<!-- DataTables -->
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>