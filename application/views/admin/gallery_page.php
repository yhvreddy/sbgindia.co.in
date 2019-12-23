<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Gallery
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Gallery</li>
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
              <h3 class="box-title">Upload Gallery</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <form role="form" method="post" action="<?=base_url('admin/gallery/savedata')?>" enctype="multipart/form-data">
                    <input type="hidden" value="1" name="gallery_id">
                    <input type="hidden" value="" name="plot_id">
                    <div class="form-group">
                        <label for="bannerTitle">Gallery Title</label>
                        <input type="text" class="form-control" name="bannerTitle" id="bannerTitle" placeholder="Enter Gallery Image Title">
                    </div>
                    <div class="form-group">
                        <label for="GalleryImages">Upload Gallery Image </label>
                        <input type="file" id="GalleryImages" name="GalleryImages" accept=".png,.jpg,.jpeg">
                        <small class="help-block">Upload Banner images (.png,.jpg,.jpeg) formats only.</small>
                    </div>
                    <div class="form-group">
                        <label for="uploadvideo">Upload Gallery Video</label>
                        <input type="file" id="uploadvideo" name="uploadvideo" accept=".mp4,.avi,.mov,.mpeg">
                        <small class="help-block">Uploaded Video formats (.mp4, .avi, .mov, .mpeg).</small>
                    </div>
                    <div class="form-group">
                        <label for="Information">Information</label>
                        <textarea name="information" class="form-control" rows="4" placeholder="Type Information"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Upload Data</button>
                    </div>
                </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-7">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Gallery List</h3>
            </div>
            <div class="box-body">
              <table class="table table-striped table-bordered datatable">
                <thead>
                  <th>#</th>
                  <th>Title</th>
                  <th>Image / video</th>
                  <th>Information</th>
                  <th></th>
                </thead>
                <tbody>
                  <?php $i = 1; foreach ($gallery as $key => $value) { ?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><?=$value->title?></td>
                      <td>
                        <?php if(!empty($value->images)){ ?>
                          <img src="<?=base_url($value->images)?>" style="width:100px">
                        <?php }else if(!empty($value->videos)){ ?>
                          <a href="<?=base_url($value->videos)?>" target="_blank">Video Link</a>
                        <?php } ?>
                      </td>
                      <td><?=$value->information?></td>
                      <td>
                        <a href="<?=base_url('admin/gallery/'.$value->id.'/delete')?>" onclick="return confirm('Are you sure to delete gallery details..?')"><i class="fa fa-trash-o"></i></a>
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