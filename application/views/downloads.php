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
    
    <!-- Sticky Navbar -->
    <div class="page-header page-title-left page-title-pattern">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">Downloads</h1>
                        <h5></h5>
                        <ul class="breadcrumb">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li class="active">Downloads</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-header -->
        
        <section id="works" class="page-section">
            <div class="work-section">
                <!-- filter -->
                <div class="general-section white container tz-gallery">
                    <div class="row">
                        <?php if(isset($projects) && count($projects) != 0){ ?>

                            <?php foreach($projects as $project){ ?>

                                <div class="col-md-4">
                                    <div class="card image-card">
                                        <a href="<?=base_url($project->image)?>" target="_blank">
                                            <?php if(preg_match("/\.(gif|png|jpg)$/", $project->image)){ ?>
                                                <img src="<?=base_url($project->image)?>" class="card-img-top lightbox" alt="<?=$project->title?>" style="width: 100%; height: 273px; object-fit: contain; padding: 5px" class="img-responsive">
                                            <?php }else{ ?>
                                                <img src="<?=base_url('images/file_icon.png')?>" class="card-img-top lightbox" style="width: 100%; height: 273px; object-fit: contain; padding: 5px" alt="<?=$project->title?>" class="img-responsive">
                                            <?php } ?>
                                        </a>
                                        <h6 style="text-align:center;color:#fff"><?=$project->title?></h6>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php }else{ ?>
                            <h4 style="text-align:center;margin-top:25px;color:black">No Brochures Found..!</h4>
                        <?php } ?>                
                    </div>
                <!-- Mix Container -->
            </div>
        </section>
        
        <!-- page-section -->