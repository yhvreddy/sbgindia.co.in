<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			How we are
			<small></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">How we are</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">

			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Add What we want</h3>
							</div>
							<!-- /.box-header -->
							<!-- form start -->
							
							<form role="form" method="post" action="<?=base_url('admin/howeare/howeAreSavedata')?>" enctype="multipart/form-data">
								<div class="box-body">
									<div class="form-group">
										<label for="title_name">Title Name</label>
										<input type="text" class="form-control" name="title_name" id="title_name" placeholder="Enter Title Name">
									</div>
									<div class="form-group">
										<label for="uploadImages">Upload Image</label>
										<input type="file" id="uploadImages" name="uploadImages" accept=".png,.jpg,.jpeg">
										<p class="help-block">Upload Category image (.png,.jpg,.jpeg).</p>
									</div>
									<div class="form-group">
										<label for="description">Description </label>
										<textarea class="form-control" name="description" id="description" placeholder="Type Description..." rows="5"></textarea>
									</div>
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									<button type="submit" class="btn btn-primary pull-right">Save Data</button>
								</div>
							</form>
							
						</div>
					</div>

					<div class="col-md-12">
						<!-- Horizontal Form -->
						<div class="box box-info">
							<div class="box-header with-border">
								<h3 class="box-title">Saved Data List</h3>
							</div>
							<!-- /.box-header -->
							<!-- form start -->
							<div class="box-body">
								<?php //print_r($howeare); ?>
								<div class="table-responsive">
									<table class="table table-striped table-bordered datatable">
										<thead>
										<th>#</th>
										<th>Tilte Name</th>
										<th class="text-center">Uploaded Image</th>
										<th>Description</th>
										<th></th>
										</thead>
										<tbody>
											<?php foreach($howeare as $key => $value){ ?>
												<tr>
													<td><?=$key+1?></td>
													<td><?=$value->banner_title?></td>
													<td><?php if(!empty($value->image)){ ?> <img src="<?=base_url($value->image)?>" style="width:40px;height:40px"> <?php } ?></td>
													<td><?=$value->information?></td>
													<td>
														<a href="<?=base_url('admin/howeare/'.$value->id.'/deletedata')?>" onclick="return confirm('You want to delete <?=$value->banner_title?>')"><i class="fa fa-trash"></i></a>
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
				</div>
			</div>

			<div class="col-md-6">

				<div class="row">

					<div class="col-md-12">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Add Video</h3>
							</div>
							
							<div class="box-body">
								<form role="form" method="post" action="<?=base_url('admin/howeare/interSavedata')?>" enctype="multipart/form-data">
									<div class="box-body">
										<div class="form-group">
											<label for="title_name">Title Name</label>
											<input type="text" class="form-control" name="title_name" id="title_name" placeholder="Enter Title Name">
										</div>
										
										<div class="row">
											<div class="col-md-6 form-group">
												<label for="uploadvideo">Upload Video</label>
												<input type="file" id="uploadvideo" name="uploadvideo" accept=".mp4,.avi,.mov,.mpeg">
												<small class="help-block">Video formats (.mp4, .avi, .mov, .mpeg).</small>
											</div>

											<div class="col-md-6 form-group">
												<label for="uploadImages">Upload Images</label>
												<input type="file" id="uploadImages" multiple name="uploadImages[]" accept=".jpg,.jpeg,.png">
												<small class="help-block">Images formats (.jpg, .jpeg, .png).</small>
											</div>
										</div>

										<div class="form-group">
											<label for="video_link">Video Link</label>
											<input type="text" class="form-control" name="video_link" id="video_link" placeholder="video link">
										</div>

										<div class="form-group">
											<label for="description">Description </label>
											<textarea class="form-control" name="description" id="description" placeholder="Type Description..." rows="5"></textarea>
										</div>
									</div>
									<!-- /.box-body -->
									<div class="box-footer">
										<button type="submit" class="btn btn-primary pull-right">Save Data</button>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="box box-info">
							<div class="box-header with-border">
								<h3 class="box-title">Saved Data List</h3>
							</div>
							<!-- /.box-header -->
							<!-- form start -->
							<div class="box-body">
								<?php //print_r($howearedata); ?>
								<div class="table-responsive">
									<table class="table table-striped table-bordered datatable">
										<thead>
										<th>#</th>
										<th>Tilte Name</th>
										<th class="text-center">Uploaded File</th>
										<th>Description</th>
										<th></th>
										</thead>
										<tbody>
											<?php foreach($howearedata as $key => $value){ ?>
												<tr>
													<td><?=$key+1?></td>
													<td><?=$value->banner_title?></td>
													<td>
														<?php 
															if(!empty($value->images)){
																$images = explode(',',$value->images);
																echo count($images).' Uploaded';
															}else if(!empty($value->video)){
																echo "video uploaded";
															}else if(!empty($value->links)){
																echo "Source Link";
															}else{
																echo "No Source..!";
															} 
														?>
													</td>
													<td><?=$value->information?></td>
													<td>
														<a href="#" data-toggle="modal" data-target="#myModal_<?=$value->id?>" data-backdrop="static" data-keyboard="false"><i class="fa fa-file"></i></a>

														<a href="<?=base_url('admin/howeare/'.$value->id.'/interdeletedata')?>" onclick="return confirm('Do you want to delete <?=$value->banner_title?>')"><i class="fa fa-trash-o"></i></a>
													</td>
												</tr>
												<!-- Modal -->
												<div id="myModal_<?=$value->id?>" class="modal fade" role="dialog">
												<div class="modal-dialog">

													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title"><?=$value->banner_title?></h4>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-md-12">
																	<b>Title :</b> <?=$value->banner_title?>
																</div>
																<div class="col-md-12">
																	<b>Information :</b> 
																	<p><?=$value->information?></p>
																</div>
																<?php if(!empty($value->images)){ 
																	$images = explode(',',$value->images);
																	?>
																		<div class="col-md-12">
																			<div class="row">
																				<?php foreach($images as $image){ ?>
																					<div class="col-md-4">
																						<img src="<?=base_url($image)?>" class="img-thumbnail">
																					</div>
																				<?php } ?>
																			</div>
																		</div>
																	<?php }else if(!empty($value->video)){ ?>
																		<div class="col-md-12">
																			<video style="width:100%" controls>
																				<source src="<?=base_url($value->video)?>">
																				<!--<source src="movie.ogg" type="video/ogg">-->
																				Your browser does not support the video tag.
																			</video>
																		</div>
																	<?php }else if(!empty($value->links)){ ?>
																		<a href="<?=$value->links?>">Source Link</a>
																	<?php }
																?>
															</div>
														</div>
													</div>

												</div>
												</div>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>

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
