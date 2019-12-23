<style>
	.image-card{
		background-color: #08395d;
		padding: 0;	
		/* margin: 5px; */
		box-sizing: border-box;
	}
	.image-card a{
		margin-bottom: 15px;
	}
	.image-card .card-body h5{
		line-height: 3;
		color: #f4f4f4;
		text-align: center;
	}	
</style>
<?php error_reporting(0); ?>
	 <div class="page-header page-title-left page-title-pattern">
		<div class="container">
		   <div class="row">
			  <div class="col-md-12">
				 <h1 class="title">Our projects</h1>
				 <ul class="breadcrumb">
					<li><a href="<?=base_url()?>">Home</a></li>
					<li class="active">Projects</li>
				 </ul>
			  </div>
		   </div>
		</div>
	 </div>

	 <!-- page-header -->        

	 <section id="services" class="page-section service-section">
		<div class="container">
		   <div class="row">
			<?php if(count($latestproject) != 0 && isset($latestproject)){ 
				$latestproject = $latestproject[0]; ?> 

				<div class="col-sm-12 col-md-12">
					<div class="row">
						<div class="col-md-6 content-block">
							<?php if(!empty($latestproject->image)){ ?>
								<img src="<?=base_url($latestproject->image)?>" width="100%" height="500" alt="" />
							<?php }else{ ?>
								<img src="<?=base_url('assets_site/no_image.jpg')?>" width="100%" height="500" alt="" />
							<?php } ?>
						</div>

						<div class="col-md-6">
							<p style="text-align: center;"><span style="color:red;font-size: 16px">
								<?=$this->session->flashdata('failed');?></span></p>
							<p style="text-align: center;"><span style="color:green;font-size: 16px">
								<?=$this->session->flashdata('success');?></span></p>

							<?php if(!empty($latestproject->information)){ ?>

								<div class="">
									<?=$latestproject->information?>
								</div>

							<?php } ?> 
								<h4>PLOTS</h4>

							<div class="">
								<?php
									$flats = unserialize($latestproject->slots_details);
									if(count($flats) != 0){ 
										foreach($flats as $key => $value){
											if(!empty($value['color'])){
												$color = $value['color'];
											}else{
												$color = '#6ca56c';
											}
								?>

									<div title="<?=$value['status']?>" class="col-md-3 col-sm-3 col-xs-4" style="padding: 10px;text-align: center;background: <?=$color?>; border: 1px dashed #f4f4f4;">
										<button data-toggle="collapse" data-target="#plot_<?=$value['slot_id']?>" ><?=$value['slot_id']?></button>

										<!-- <a href="javascript:(0);" style="text-align: center;color: #ffffff;" data-toggle="modal" data-target="#myModal_<?=$value['slot_id']?>" data-backdrop="static" data-keyboard="false">
											<?=$value['slot_id']?>
										</a> -->
									</div>

									

									<div id="myModal_<?=$value['slot_id']?>" class="modal fade" role="dialog">
										<div class="modal-dialog" style="top:20px"> 
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title"><?=$value['slot_id']?> Flat Details</h4>
												</div>

												<div class="modal-body">
													<h5><?=$value['slot_id']?> Details :</h5>
													<div class="row">
														<div class="col-md-12">
															<?=$value['details']?>
														</div>
													</div>
													<h5>Enquery Details</h5>
													<div class="row">
														<form method="post" action="<?=base_url('sitecontroller/layoutflatenqdetails')?>">
															<input type="hidden" name="layout_id" value="<?=$latestproject->id?>">
															<input type="hidden" name="flat_id" value="<?=$value['slot_id']?>">
															<input type="hidden" name="flat_details" value="<?=$value['details']?>">
															<div class="form-group col-md-4">
																<input type="text" placeholder="Enter name" class="form-control" name="name" required> 
															</div>

															<div class="form-group col-md-4">
																<input type="text" placeholder="Enter email id" class="form-control" name="mail_id" required> 
															</div>

															<div class="form-group col-md-4">
																<input type="text" placeholder="Enter mobile number" class="form-control" required name="mobile"> 
															</div>

															<div class="form-group col-md-12">
																<textarea placeholder="Enquery Details" class="form-control" name="details"></textarea> 
															</div>

															<div class="form-group col-md-12">
																<input type="submit" value="Submit Details" class="btn btn-success pull-right">
															</div>

														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Modal end-->
								<?php } 
							
								foreach($flats as $key => $value){
									?>
									<div id="plot_<?=$value['slot_id']?>" class="collapse col-md-12">
									Lorem ipsum dolor text....
									</div>
									<?php
								}
											
							} ?>

							</div>
						</div>

					</div>
				</div>
				
				<!-- More Projects -->
				<div class="col-sm-12 col-md-12">
					<?php if(count($projects) != 0){ ?>
						<h3>More projects</h3>

						<div class="row">
							<?php foreach($projects as $project){ ?>

								<div class="col-md-4">
									<div class="card image-card">
										<a href="<?=base_url('projects/'.$project->id.'/'.url_title($project->subzone_name).'?layout='.$project->id)?>" title="<?='Project '.$project->subzone_name?>">
											<?php if(!empty($project->image)){ ?>
												<img src="<?=base_url($project->image)?>" class="card-img-top"  style="width: 100%; height: 273px; object-fit: contain; padding: 5px" alt="<?=$project->subzone_name?>" class="img-responsive" />
											<?php }else{ ?>
												<img src="<?=base_url('assets_site/no_image.jpg')?>" class="card-img-top"  style="width: 100%; height: 273px; object-fit: contain; padding: 5px" alt="<?=$project->subzone_name?>" class="img-responsive" />
											<?php } ?>
										</a>
										<div class="card-body">
											<h5 class="card-title"><?=$project->subzone_name?></h5>
										</div>
									</div>
								</div>

							<?php } ?>
						</div>
						
					<?php } ?>				
				</div>

			<?php }else{ ?>

				<?php if(count($projects) != 0){ ?>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row">
							<?php foreach($projects as $project){ ?>
								<div class="col-md-4">
									<div class="card image-card">
										<a href="<?=base_url('projects/'.$project->id.'/'.url_title($project->subzone_name).'?layout='.$project->id)?>" title="<?='Project '.$project->subzone_name?>">
											<?php if(!empty($project->image)){ ?>
												<img src="<?=base_url($project->image)?>" class="card-img-top"  style="width: 100%; height: 273px; object-fit: contain; padding: 5px" alt="<?=$project->subzone_name?>" class="img-responsive" />
											<?php }else{ ?>
												<img src="<?=base_url('assets_site/no_image.jpg')?>" class="card-img-top"  style="width: 100%; height: 273px; object-fit: contain; padding: 5px" alt="<?=$project->subzone_name?>" class="img-responsive" />
											<?php } ?>
										</a>
										<div class="card-body">
											<h5 class="card-title"><?=$project->subzone_name?></h5>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php }else{ ?>
					<div class="col-sm-12 col-md-12">
						<h4 style="text-align:center;padding: 25px 0px;">No Projects..!</h4> 
					</div> 
				<?php } ?>

			<?php } ?>

		
		   </div>

		</div>

	 </section>

	 <!-- Services -->        
