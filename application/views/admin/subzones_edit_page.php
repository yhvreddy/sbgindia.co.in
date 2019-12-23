<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Layout
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"> Layout</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <?php $subzone = $subzone[0]; ?>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Layout Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?=base_url('admin/dashboard/saveeditsubzone')?>" enctype="multipart/form-data">
              <input type="hidden" name="edit_id" value="<?=$subzone->id?>">
              <div class="box-body">
                <div class="form-group col-md-3">
                  <label for="category_name">Select zone Name <span class="text-danger">*</span></label>
                  <select class="form-control" name="category_name" required="" id="category_name">
                    <option value="">Select zone Name</option>
                    <?php foreach ($zones as $key => $zone) { ?>
                      <option value="<?=$zone->id?>" <?php if($subzone->zone_id == $zone->id){ echo 'selected'; } ?> ><?=$zone->name?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="subcategory_name">Subzone Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="subcategory_name" id="subcategory_name" required="" value="<?=$subzone->subzone_name?>" placeholder="Enter Subzone Name">
                </div>
                <div class="form-group col-md-3">
                  <label for="CategoryImages">Upload layout Image </label>
                  <input type="file" id="CategoryImages" name="CategoryImages" accept=".png,.jpg,.jpeg">
                </div>
                <input type="hidden" name="uploaded_image" value="<?=$subzone->image?>">
                <div class="form-group col-md-3">
                  <label for="subcategory_name">No.of Plots <span class="text-danger">*</span></label>
                  <input type="tel" class="form-control" name="slots" id="slots" required="" placeholder="Enter No.of Slots" readonly="" value="<?=$subzone->slots?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="Information">Information</label>
                  <textarea class="textarea form-control" id="Information" name="Information" placeholder="Enter Information" rows="8"><?=$subzone->information?></textarea>
                </div>
                <div class="col-md-12">
                  <?php if(!empty($subzone->image)){ ?>
                    <h5><b>Uploaded layout image</b></h5>
                    <img src="<?=base_url($subzone->image)?>" style="width: 100%;height:450px">
                  <?php } ?>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <h4 class="col-md-12">Assign Layout Details</h4>
                    <div class="col-md-12">
                      <div class="row" style="margin: 5px 0px">
                        <div class="col-md-1"><span style="font-size: 16px;font-weight: 600;">Auto-ID</span></div>
                        <div class="col-md-2"><span style="font-size: 16px;font-weight: 600;">Plot No</span></div>
                        <div class="col-md-5"><span style="font-size: 16px;font-weight: 600;">Plot Details</span></div>
                        <div class="col-md-2"><span style="font-size: 16px;font-weight: 600;">Sale Amount</span></div>
                        <div class="col-md-2"><span style="font-size: 16px;font-weight: 600;">Status</span></div>
                      </div>
                      <?php 
                        $subzonedetails = unserialize($subzone->slots_details);
                        foreach ($subzonedetails as $key => $value) {
                          //echo "<pre>"; print_r($value); echo "</pre>";
                          ?>
                            <input type="hidden" name="slot_keys[]" value="<?=$key?>">
                            <div class="row" style="margin: 5px 0px">
                              <div class="col-md-1">
                                <input type="text" name="slot_id[]" style="padding: 6px 4px;" value="<?=$value['slot_id']?>" readonly="" class="form-control">
                              </div>
							                <input type="hidden" name="slot_id_num[]" value="<?=$value['slot_id_num']?>">		
                              <div class="col-md-2">
                                <input type="text" required="required" style="padding: 6px 6px;" name="plot_id[]" placeholder=" Plot Id" value="<?=$value['plot_id']?>" class="form-control">
                              </div>
                              <div class="col-md-5">
                                <input type="text" name="slot_details[]" placeholder="Enter site details separate by ," value="<?=$value['details']?>" class="form-control">
                              </div>
                              <div class="col-md-2">
                                <input type="text" name="sale_amount[]" pattern="[0-9]+([,\.][0-9]+)?"  placeholder="Enter sale amount" value="<?=$value['sale_amount']?>"  class="form-control">
                              </div>
							                <div class="col-md-2">
                                <select class="form-control" required="" name="site_status[]">
                                  <option value="Avaliable" <?php if($value['status'] == 'Avaliable'){ echo "selected"; } ?>>Avaliable</option>
                                  <option value="Booked" <?php if($value['status'] == 'Booked'){ echo "selected"; } ?>>Booked</option>
                                  <option value="Reserved" <?php if($value['status'] == 'Reserved'){ echo "selected"; } ?>>Reserved</option>
                                </select>
                              </div>
                            </div>
                          <?php
                        } ?>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Update subzone & slots</button>
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
