<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url()?>admin_assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Partners
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Partners</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-5">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upload Partners Logos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php if(isset($partnersdetails) && count($partnersdetails) != 0){ ?>
                <form role="form" method="post" action="<?=base_url('admin/dashboard/partners/saveEditdetails')?>" enctype="multipart/form-data">
                  <input type="hidden" name="edit_id" value="<?=$partnersdetails[0]->id?>">
                  <div class="box-body">

                    <div class="form-group">
                      <label for="partnertitle">Title <span class="text-danger">*</span></label>
                      <input type="text" placeholder="Enter Title" value="<?=$partnersdetails[0]->title?>" class="form-control" id="partnertitle" required name="title_name">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Upload Image <span class="text-danger">*</span></label>
                      <input type="file" id="exampleInputFile" name="PartnersImages" accept=".png,.jpg,.jpeg">
                      <p class="help-block">Upload images (.png,.jpg,.jpeg) formats only.</p>
                      <?php if(!empty($partnersdetails[0]->image)){ ?>
                        <b>Uploaded Image preview</b>
                        <img src="<?=base_url($partnersdetails[0]->image)?>" style="width: 100%;margin-top:5px">
                      <?php } ?>
                      <input type="hidden" name="Uploaded_image" value="<?=$partnersdetails[0]->image?>">
                    </div>

                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Save Partner</button>
                  </div>
                </form>
            <?php }else{ ?>
                <form role="form" method="post" action="<?=base_url('admin/savepartnersdetails')?>" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                        <label for="bannertitle">Title</label>
                        <input type="text" placeholder="Enter Title" class="form-control" required name="title_name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Upload Image <span class="text-danger">*</span></label>
                      <input type="file" id="exampleInputFile" name="PartnersImages" accept=".png,.jpg,.jpeg" required="">
                      <p class="help-block">Upload images (.png,.jpg,.jpeg) formats only.</p>
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Save Partners</button>
                  </div>
                </form>
            <?php } ?>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-7">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Partners List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- table start -->
              <table class="table table-striped table-bordered datatable">
                <thead>
                  <th>#</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th></th>
                </thead>
                <tbody>
                  <?php $i = 1; foreach ($partners as $key => $partner) { ?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><img src="<?=base_url($partner->image)?>" style="width:100px"></td>
                      <td><?=$partner->title?></td>
                      <td align="center"> 
                        <a href="<?=base_url('admin/dashboard/partners/'.$partner->id.'/edit')?>" onclick="return confirm('Are you sure to edit Partner details..?')"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                        <a href="<?=base_url('admin/dashboard/partners/'.$partner->id.'/delete')?>" onclick="return confirm('Are you sure to delete Partner details..?')"><i class="fa fa-trash-o"></i></a>
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
<script src="<?=base_url()?>admin_assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>admin_assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>