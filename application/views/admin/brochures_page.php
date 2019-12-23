<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Brochures
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Brochures</li>
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
              <h3 class="box-title">Upload Brochures</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php if(isset($bannerdetails) && count($bannerdetails) != 0){ ?>
                <form role="form" method="post" action="<?=base_url('admin/dashboard/brochures/saveEditdetails')?>" enctype="multipart/form-data">
                  <input type="hidden" name="edit_id" value="<?=$bannerdetails[0]->id?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="bannerTitle">Brochure Title</label>
                      <input type="text" value="<?=$bannerdetails[0]->title?>" class="form-control" name="bannerTitle" id="bannerTitle" placeholder="Enter Banner Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Upload Brochure <span class="text-danger">*</span></label>
                      <input type="file" id="exampleInputFile" name="BannersImages" accept=".pdf,.png,.jpg,.jpeg">

                      <p class="help-block">Upload Brochure images (.pdf,.png,.jpg,.jpeg) formats only.</p>
                      <?php if(!empty($bannerdetails[0]->image)){ ?>
                        <b>Uploaded File</b>
                        <?php if(preg_match("/\.(gif|png|jpg)$/", $bannerdetails[0]->image)){ ?>
                          <img src="<?=base_url($banner->image)?>" style="width: 100%;margin-top:5px"></td>
                        <?php }else{ ?>
                          <a href="<?=base_url($banner->image)?>" target="_blank">Uploaded File</a>
                        <?php } ?>
                      <?php } ?>
                      <input type="hidden" name="Uploaded_image" value="<?=$bannerdetails[0]->image?>">
                    </div>
                    <div class="form-group">
                      <label for="Information">Information</label>
                      <textarea class="form-control" id="BannerInformation" name="Information" placeholder="Enter Information" rows="4"><?=$bannerdetails[0]->information?></textarea>
                    </div>
                    
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Update Brochure</button>
                  </div>
                </form>
            <?php }else{ ?>
                <form role="form" method="post" action="<?=base_url('admin/dashboard/brochures/uplaod')?>" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="bannerTitle">Brochures Title</label>
                      <input type="text" required="" class="form-control" name="bannerTitle" id="bannerTitle" placeholder="Enter Banner Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Upload Brochures File<span class="text-danger">*</span></label>
                      <input type="file" id="exampleInputFile" name="BannersImages" accept=".pdf,.png,.jpg,.jpeg" required="">

                      <p class="help-block">Upload Brochures images (.pdf,.png,.jpg,.jpeg) formats only.</p>
                    </div>
                    <div class="form-group">
                      <label for="Information">Information</label>
                      <textarea class="form-control" id="BannerInformation" name="Information" placeholder="Enter Information" rows="4"></textarea>
                    </div>
                    
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Upload Brochures</button>
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
              <h3 class="box-title">Brochures List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- form start -->
              <table class="table table-striped table-bordered datatable" id="datatable">
                <thead>
                  <th>#</th>
                  <th>Brochure Title</th>
                  <th>Brochure file / Image</th>
                  <th>Information</th>
                  <th></th>
                </thead>
                <tbody>
                  <?php $i = 1; foreach ($banners as $key => $banner) { ?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><?=$banner->title?></td>
                      <td>
                        <?php if(preg_match("/\.(gif|png|jpg)$/", $banner->image)){ ?>
                          <img src="<?=base_url($banner->image)?>" style="width:100px"></td>
                        <?php }else{ ?>
                          <a href="<?=base_url($banner->image)?>" target="_blank">Uploaded File</a>
                        <?php } ?>
                      <td><?=$banner->information?></td>
                      <td>
                        <a href="<?=base_url('admin/brochures/'.$banner->id.'/edit')?>" onclick="return confirm('Are you sure to edit brochure details..?')"><i class="fa fa-edit"></i></a>&nbsp;
                        <a href="<?=base_url('admin/brochures/'.$banner->id.'/delete')?>" onclick="return confirm('Are you sure to delete brochure details..?')"><i class="fa fa-trash-o"></i></a>
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
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>