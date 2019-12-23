<!-- DataTables -->

  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <h1>

      Enquery List

      <small></small>

    </h1>

    <ol class="breadcrumb">

      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>

      <li>Enquery</li>

      <li class="active">Enquery List</li>

    </ol>

  </section>



  <!-- Main content -->

  <section class="content">

    <div class="row">

        <div class="col-md-12">

          <!-- Horizontal Form -->

          <div class="box box-info">

            <div class="box-header with-border">

              <h3 class="box-title">Enquery List</h3>

            </div>

            <!-- /.box-header -->

            <!-- form start -->

            <div class="box-body">

              <div class="table-responsive">

                <table class="table table-striped table-bordered datatable">

                  <thead>

                    <th>#</th>
					<th>layout</th>
					<th>Flot id</th>  
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Details</th>

                  </thead>

                  <tbody>

                    <?php $i = 1; foreach ($enquiry as $key => $value) { 
						$project	= $this->Model_default->select_data('sbgi_sub_zones',array('id'=>$value->layout_id));
						$flats = unserialize($project[0]->slots_details);
						if(!empty($flats[$value->flat_id])){
							$flat_info_details = serialize($flats[$value->flat_id]);
						}else{
							$flat_info_details = '';
						}
					?>

                      <tr>

                        <td><?=$i++;?></td>
                        <td><?=$project[0]->subzone_name?></td>
						<td><?=$value->flat_id?></td>
                        <td><?=$value->name?></td>
                        <td><?=$value->mail_id?></td>
                        <td><?=$value->mobile?></td>
                        <td><?=$value->details?></td>
                      </tr>
                      
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