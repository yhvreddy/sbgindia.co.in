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
	blockquote {
		padding: 10px 20px;
		margin: 0 0 20px;
		font-size: 14.5px;
		border-left: 5px solid #eee;
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
						<div class="col-md-4 content-block">
							<?php 
								if(!empty($latestproject->image)){
									$image = base_url($latestproject->image);
								}else{ 
									$image = base_url('assets_site/no_image.jpg');
								} 
							?>
							<a href="<?=$image?>">
								<img src="<?=$image?>" class="img-thumbnail" width="100%" height="500" alt="" />
							</a>
							<h4 class="text-center color-info"><?=$latestproject->subzone_name?></h4>
							<div class="col-md-12">
								<div class="row">
									<?php
										$colors = array('Avaliable'=>'#3db818','Booked'=>'#d41326','Reserved'=>'#d18e08');
										foreach($colors as $key => $color){
									?>
										<div class="col-md-4">
											<div style="background:<?=$color?>;width:15px;height:15px;margin:0px 0px;float:left"></div>
											<span style="float:left;padding: 0px 0px 5px 5px;font-size: 10px;font-weight: 600;"><?=$key?> Plot</span>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="col-md-8">
							<p style="text-align: center;"><span style="color:red;font-size: 16px">
								<?=$this->session->flashdata('failed');?></span></p>
							<p style="text-align: center;"><span style="color:green;font-size: 16px">
								<?=$this->session->flashdata('success');?></span></p>
							
							<h4>Project Details : <?=$latestproject->subzone_name?></h4>

							<?php if(!empty($latestproject->information)){ ?>

								<div style="padding:0px 10px 10px 10px">
									<?=$latestproject->information?>
								</div>

							<?php } ?> 
								<h4>PLOTS</h4>

							<div class="">
								<?php
									$flats = unserialize($latestproject->slots_details);
									//print_r($flats);
									if(count($flats) != 0){ 
										foreach($flats as $key => $value){
											if(!empty($value['color'])){
												$color = $value['color'];
											}else{
												$color = '#6ca56c';
											}
								?>
											<!-- data-toggle="collapse" data-target="#plot_<?=$value['slot_id']?>"-->
											<div class="col-md-1 col-sm-2 col-xs-3" style="padding: 8px;text-align: center;background: <?=$color?>; border: 1px dashed #f4f4f4;">
														<?php 
															if(!empty($value['plot_id'])){  
																$plot_id = $value['plot_id']; 
															}else{  
																$plot_id = $value['slot_id']; 
															}  
														?>
												<span data-toggle="tooltip" title="Plot No <?=$plot_id?>  <?=$value['status']?>">
													<a href="javascript:(0);" data-toggle="modal" data-target="#myModal_<?=$value['slot_id']?>" data-backdrop="static" data-keyboard="false" style="text-align: center;color: #ffffff;" >
														<?=$plot_id?>
													</a>
												</span>
											</div>

									

											<div id="myModal_<?=$value['slot_id']?>" class="modal fade" role="dialog">
												<div class="modal-dialog" style="top:20px"> 
													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">
																<?php if(!empty($value['plot_id'])){ ?>
																	<?= $value['plot_id']; ?>
																<?php }else{ ?>
																	<?= $value['slot_id']; ?>
																<?php }  ?> Plot Details</h4>
														</div>

														<div class="modal-body">
															<h5><?php if(!empty($value['plot_id'])){ ?>
																	<?= $value['plot_id']; ?>
																<?php }else{ ?>
																	<?= $value['slot_id']; ?>
																<?php }  ?> Details :</h5>
															<div class="row">
																<div class="col-md-12">
																	<?=$value['details']?>
																</div>
															</div>
															<?php if($flats['status'] == 'Avaliable'){ ?>
																<h5>Enquery Details</h5>
																<div class="row">
																	<form method="post" action="<?=base_url('sitecontroller/layoutflatenqdetails')?>">
																		<input type="hidden" name="layout_id" value="<?=$latestproject->id?>">
																		<?php if(!empty($value['plot_id'])){ ?>
																			<input type="hidden" name="flat_id" value="<?=$value['plot_id']?>">
																		<?php }else{ ?>
																			<input type="hidden" name="flat_id" value="<?=$value['slot_id']?>">
																		<?php }  ?>
																		
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
															<?php } ?>
														</div>
													</div>
												</div>
											</div>
											<!-- Modal end-->
								<?php 	}  
									} ?>
							</div>
						</div>

						<?php //print_r($latestproject->id); 
							$layoutmages = $this->Model_default->select_data('sbgi_gallery_details',array('plot_id'=>$latestproject->id,'gallery_type' => 2),'RAND(id) DESC',8);
							if(count($layoutmages) != 0){
						?>			
							<div class="col-md-12">
								<h6>Related Images</h6>
								<div class="row">
									<?php foreach($layoutmages as $key => $value){ ?>
										<div class="col-md-3">
											<div class="card image-card" style="background-color: #3db818;">
												<?php if(!empty($value->images)){ $link = base_url($value->images); }else{ $link = base_url($value->videos); } ?>
												<a href="<?=$link?>" target="_blank">
													<?php if(!empty($value->images)){ ?>
														<img src="<?=base_url($value->images)?>" class="card-img-top"  style="width: 100%; height: 200px; object-fit: contain; padding: 5px" class="img-responsive" />
													<?php }else{ ?>
														<video width="100%" controls>
															<source src="<?=base_url($value->videos)?>">
															<source src="<?=base_url($value->videos)?>" type="video/ogg">
															Your browser does not support the video tag.
														</video>
													<?php } ?>
												</a>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				
				<!-- More Projects -->
				<div class="col-sm-12 col-md-12" style="margin:15px 0px 0px 0px">
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

<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>