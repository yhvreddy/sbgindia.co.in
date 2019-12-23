<!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Zones
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Zones</li>
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
              <h3 class="box-title">Add / Edit Zones</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php if(isset($zone) && count($zone) != 0){ ?>
              <form role="form" method="post" action="<?=base_url('admin/dashboard/zones/saveeditzone')?>" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="edit_id" value="<?=$zone[0]->id?>">
                  <div class="form-group">
                    <label for="category_name">Zone Name <span class="text-danter">*</span></label>
                    <input type="text" class="form-control" name="category_name" id="category_name" value="<?=$zone[0]->name?>" required="" placeholder="Enter Category Name">
                  </div>
                  <div class="form-group">
                    <label for="CategoryImages">Upload Zone Image</label>
                    <input type="file" id="CategoryImages" name="CategoryImages" accept=".png,.jpg,.jpeg">

                    <p class="help-block">Upload Category image (.png,.jpg,.jpeg).</p>
                    <?php if(!empty($zone[0]->image)){ ?>
                        <b>uploaded Image</b>
                        <img src="<?=base_url($zone[0]->image)?>" width="100%">
                    <?php } ?>
                    <input type="hidden" name="uploaded_image" value="<?=$zone[0]->image?>">
                  </div>
                </div>
                <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Edit Zone</button>
              </div>
            </form>
            <?php }else{ ?>
              <form role="form" method="post" action="<?=base_url('admin/dashboard/savezones')?>" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <label for="category_name">Zone Name <span class="text-danter">*</span></label>
                    <input type="text" class="form-control" required="" name="category_name" id="category_name" placeholder="Enter Category Name">
                  </div>
                  <div class="form-group">
                    <label for="CategoryImages">Upload Zone Image</label>
                    <input type="file" id="CategoryImages" name="categoryImages" accept=".png,.jpg,.jpeg">

                    <p class="help-block">Upload Zone image (.png,.jpg,.jpeg).</p>
                  </div>

                  
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Add Zone</button>
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
              <h3 class="box-title">Zones List</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered datatable">
                  <thead>
                    <th>#</th>
                    <th>Zone Name</th>
                    <th class="text-center">Zone Image</th>
                    <th></th>
                  </thead>
                  <tbody>
                    <?php $i = 1; foreach ($zones as $key => $category) { ?>
                      <tr>
                        <td><?=$i++;?></td>
                        <td><?=$category->name?></td>
                        <td align="center"><?php if(!empty($category->image)){ ?> <img src="<?=base_url($category->image)?>" style="width:40px"> <?php }else{ ?> No Image Uplaoded <?php } ?></td>
                        <td>
                          <a href="<?=base_url('admin/dashboard/zones/'.$category->id.'/edit')?>" onclick="return confirm('Are you want to edit category..?')"><i class="fa fa-edit fa-lg"></i></a>&nbsp;
                          <a href="<?=base_url('admin/dashboard/zones/'.$category->id.'/delete')?>" onclick="return confirm('Are you want to delete category..?')"><i class="fa fa-trash-o fa-lg"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
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