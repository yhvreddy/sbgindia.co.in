<?php error_reporting(0); ?>
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

    <?php if(count($banners) != 0){ ?>

        <div class="slider rs-slider-full border-bottom">
            <div class="tp-banner-container">
                <div class="tp-banner-full">
                    <ul>
                        <?php if(count($banners) <= 3){ ?>
                            <?php foreach($banners as $banner){ ?>
                                <!-- Intro Slide -->
                                    <li data-transition="fade" data-slotamount="6" data-masterspeed="1500" data-delay="7000"
                                    data-title="Intro Slide">
                                        <img src="<?=base_url($banner->image)?>" alt="" data-bgposition="left center" data-kenburns="on"
                                        data-duration="16000" data-ease="Linear.easeNone" data-bgfit="115" data-bgfitend="115"
                                        data-bgpositionend="right bottom" />
                                        <div class="elements">
                                            <h2 class="tp-caption tp-resizeme customin customout lft skewtotop title bold" data-x="right" data-y="201"
                                            data-speed="800" data-start="800"
                                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn">
                                                <strong><?=$banner->banner_title?></strong>
                                            </h2>
                                            <div class="tp-caption tp-resizeme customin customout lft skewtoright description " data-x="right"
                                            data-y="290" data-speed="800" data-start="1200"
                                            data-customin="x:-50;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.1;scaleY:0.1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn"
                                            style="max-width: 800px; text-align:right">
                                                <p><?=$banner->information?></p>
                                            </div>
                                            <p class="tp-caption tp-resizeme lft customin customout  text-right" data-x="right" data-y="350"
                                            data-speed="800"
                                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-start="1600" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn">
                                            <?php if(!empty($banner->links)){ ?>
                                                <a href="<?= $banner->links ?>" target="_blank" class="btn btn-default">Read more</a>
                                            <?php } ?>
                                        </div>
                                    </li>
                                <!-- Slide Ends -->    
                            <?php } ?>
                        <?php }else{ ?>
                            <!-- Intro Slide -->
                                <li data-transition="fade" data-slotamount="6" data-masterspeed="1500" data-delay="7000"
                                data-title="Intro Slide">
                                    <img src="<?=base_url()?>assets_site/img/sections/slider/slide5.jpg" alt="" data-bgposition="left center" data-kenburns="on"
                                    data-duration="16000" data-ease="Linear.easeNone" data-bgfit="115" data-bgfitend="115"
                                    data-bgpositionend="right bottom" />
                                    <div class="elements">
                                        <h2 class="tp-caption tp-resizeme customin customout lft skewtotop title bold" data-x="right" data-y="201"
                                        data-speed="800" data-start="800"
                                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn">
                                            <strong>Welcome To Metal</strong>
                                        </h2>
                                        <div class="tp-caption tp-resizeme customin customout lft skewtoright description " data-x="right"
                                        data-y="290" data-speed="800" data-start="1200"
                                        data-customin="x:-50;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.1;scaleY:0.1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn"
                                        style="max-width: 800px; text-align:right">
                                            <p>Proin a velit aliquam vitae malesuada rutrum. Aenean ullamcorper placerat porttitor velit
                                            aliquam vitae. Aliquam a augue suscipit, bibendum luctus neque laoreet rhoncus ipsum,
                                            ullamcorper</p>
                                        </div>
                                        <p class="tp-caption tp-resizeme lft customin customout  text-right" data-x="right" data-y="350"
                                        data-speed="800"
                                        data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-start="1600" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn">
                                        <a href="#" class="btn btn-default">Read more</a> 
                                        <a href="#" class="btn btn-default">Download now</a></p>
                                    </div>
                                </li>
                            <!-- Slide Ends -->
                        <?php } ?>
                        
                        
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </div>

    <?php } ?>

        <section id="features" class="page-section slider-block1" data-animation="fadeInUp">
            <div class="container">
                <div class="row special-feature">
                    <!-- Special Feature Box 1 -->
                    <div class="col-md-3">
                        <div class="s-feature-box text-center">
                            <div class="mask-top">
                            <!-- Icon -->
                            <i class="icon-magic-wand"></i> 
                            <!-- Title -->
                            <h4>Creative</h4>
                            <!-- Text -->
                            <p>Creative Constructions is one point destination for all your solutions in construction.</p></div>
                        </div>
                    </div>
                    <!-- Special Feature Box 2 -->
                    <div class="col-md-3">
                        <div class="s-feature-box text-center">
                            <div class="mask-top">
                            <!-- Icon -->
                            <i class="icon-texture"></i> 
                            <!-- Title -->
                            <h4>Technology</h4>
                            <!-- Text -->
                            <p>Technologies in construction are being developed at planning our constructions in digital.</p></div>
                        </div>
                    </div>
                    <!-- Special Feature Box 3 -->
                    <div class="col-md-3">
                        <div class="s-feature-box text-center">
                            <div class="mask-top">
                            <!-- Icon -->
                            <i class="icon-tree3"></i> 
                            <!-- Title -->
                            <h4>Go Green</h4>
                            <!-- Text -->
                            <p>We given were: client demands, environmental regulations, healthier buildings and market demands.</p></div>
                        </div>
                    </div>
                    <!-- Special Feature Box 3 -->
                    <div class="col-md-3">
                        <div class="s-feature-box text-center">
                            <div class="mask-top">
                            <!-- Icon -->
                            <i class="icon-group-outline"></i> 
                            <!-- Title -->
                            <h4>Team Work</h4>
                            <!-- Text -->
                            <p>Teamwork communication to improve the workplace safely and successfully achieve the goal.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php if(count($gallery) != 0){ ?>

        <section id="who-we-are" class="page-section light-bg border-tb">
            <div class="container who-we-are">
                <div class="section-title text-left">
                    <!-- Title -->
                    <h2 class="title">Gallery</h2>
                </div>
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="row">
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
                        </div>
                    </div>
                
                </div>
            </div>
        </section>

    <?php } ?>

    <?php if(isset($projects) && count($projects) != 0){ ?>

        <section id="works" class="page-section">
            <div class="work-section">
                <div class="section-title">
                    <!-- Heading -->
                    <h2 class="title">Our Projects</h2>
                </div>
                
                <!-- filter -->
                <div class="general-section white container">
                    <div class="row">
                        
                        <?php foreach($projects as $project){ ?>
                            <div class="col-md-4">
                                
                                <div class="card image-card">
                                    <a href="<?=base_url('projects/'.$project->id.'/'.url_title($project->subzone_name).'?layout='.$project->id)?>" title="<?='Project '.$project->subzone_name?>">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <?php if(!empty($project->image)){ ?>
                                        <img src="<?=base_url($project->image)?>" class="card-img-top"  style="width: 100%; height: 273px; object-fit: contain; padding: 5px" alt="<?=$project->subzone_name?>" class="img-responsive" />
                                    <?php }else{ ?>
                                        <img src="<?=base_url('assets_site/no_image.jpg')?>" class="card-img-top"  style="width: 100%; height: 273px; object-fit: contain; padding: 5px" alt="<?=$project->subzone_name?>" class="img-responsive" />
                                    <?php } ?>
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$project->subzone_name?></h5>
                                    </div>
                                </div>
                            
                            </div>
                        <?php } ?>

                    </div>
                <!-- Mix Container -->
            </div>
        </section>

    <?php } ?>

    <?php if(count($howearedata) != 0 && isset($howearedata)){ ?>

        <section id="who-we-are" class="page-section light-bg border-tb">
            <div class="container who-we-are">
                <div class="section-title text-left">
                    <!-- Title -->
                    <h2 class="title">Who We Are</h2>
                </div>
                <div class="row">
                    <div class="col-md-7 who-we-are-slider">
                        <?php $howearedata = $howearedata[0]; ?>

                        <div class="col-md-12" style="margin:0px 0px 10px 0px">
                            <div class="row">
                                <?php if(!empty($howearedata->images)){ 
                                    $images = explode(',',$howearedata->images);
                                    ?>
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <?php foreach($images as $key => $image){ ?>
                                                    <li data-target="#myCarousel_<?=$key?>" data-slide-to="_<?=$key?>" <?php if($key == 0){ ?> class="active" <?php } ?> ></li>
                                                <?php } ?>
                                            </ol>

                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                <?php foreach($images as $key => $image){ ?>
                                                    <div class="item <?php if($key == 0){ ?> active <?php } ?>">
                                                        <img src="<?=base_url($image)?>" alt="Slider_<?=$key?>" style="width:100%;height: 350px;">
                                                    </div>
                                                <?php } ?>
                                            </div>

                                            <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>

                                    <?php }else if(!empty($howearedata->video)){ ?>
                                        <div class="col-md-12">
                                            <video style="width:100%;height: 350px;" controls>
                                                <source src="<?=base_url($howearedata->video)?>">
                                                <!--<source src="movie.ogg" type="video/ogg">-->
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    <?php }else if(!empty($howearedata->links)){ ?>
                                        <a href="<?=$howearedata->links?>">Source Link</a>
                                    <?php }
                                ?>
                            </div>
                        </div>
                    
                        
                        <div class="row">
                            <div class="col-md-12">
                                <?php if(!empty($howearedata->banner_title)){ ?>
                                    <h5 style="font-size:14px"><?=ucwords($howearedata->banner_title)?></h5>
                                <?php } ?>

                                <?php if(!empty($howearedata->information)){ ?>
                                    <p><?=ucwords($howearedata->information)?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-5">
                        <div class="item-box bottom-pad-10">
                            <?php foreach($howeare as $value){ ?>
                            <a>
                                <?php if(!empty($value->image)){ ?>
                                    <img src="<?=base_url($value->image)?>" class="i-5x" style="width:50px;height:50px">
                                <?php }else{ ?>
                                    <i class="icon-star13 i-5x bg-color"></i>
                                <?php } ?>
                                <h4><?=$value->banner_title?></h4>
                                <p><?=$value->information?></p>
                            </a> 
                            <?php } ?>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <ul class="arrow-style">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Consectetur adipiscing elit.</li>
                            <li>Vestibulum nec odio ipsum.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Suspendisse cursus malesuada facilisis.</li>
                            <li>Vestibulum nec odio ipsum.</li>
                            <li>Suspendisse cursus malesuada facilisis.</li>
                        </ul>
                        <h3>
                            <a href="#" class="hover">Download Our Brochure - 
                            <i class="icon-file-pdf red"></i></a>
                        </h3>
                    </div> -->
                </div>
            </div>
        </section>

    <?php } ?>