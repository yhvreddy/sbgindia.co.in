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
                        <h1 class="title">Gallery</h1>
                        <h5></h5>
                        <ul class="breadcrumb">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li class="active">Gallery</li>
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
                        <?php if(isset($gallery) && count($gallery) != 0){ ?>

                            <?php foreach($gallery as $key => $value){ ?>

                                <div class="col-md-3" style="margin:10px 0px">
                                    
                                    <div class="card image-card">
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
                        <?php }else{ ?>
                            <h4 style="text-align:center;margin-top:25px;color:black">No Gallery Images or Videos Found..!</h4>
                        <?php } ?>                
                    </div>
                <!-- Mix Container -->
            </div>
        </section>
        
        <!-- page-section -->