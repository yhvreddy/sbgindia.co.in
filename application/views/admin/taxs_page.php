<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Taxs
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Taxs</li>
    </ol>
  </section>
  <style type="text/css">
    .popover{
      width: max-content !important;
    }
  </style>
  <!-- Main content -->
  <section class="content">
	  <?php //echo "<pre>"; print_r($taxs); echo "</pre>"; ?>
    <div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add / Edit TDS Tax %</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?=base_url('admin/layouts/savetdstaxAmount')?>">
              <div class="box-body">
                
                <?php if($taxs[0]->name == 'TDS'){ ?>
                  <div class="form-group">
                    <label for="taxs">Enter Tax % <span class="text-danger">*</span></label>
                    <input type="tel" value="<?=$taxs[0]->tax?>" class="form-control" name="tax_amount" id="taxs" required="" placeholder="Enter Tax %">
                  </div>
				          <input type="hidden" name="edit_id" value="<?=$taxs[0]->id?>">
                <?php }else{ ?>
                  <div class="form-group">
                    <label for="taxs">Enter Tax % <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" name="tax_amount" id="taxs" required="" placeholder="Enter Tax %">
                  </div>  
				        <?php } ?>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Save tax %</button>
              </div>
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