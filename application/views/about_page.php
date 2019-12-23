
        <div class="page-header page-title-left page-title-pattern">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">About Us</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?=base_url()?>">Home</a>
                            </li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-header -->
        <?php if(count($aboutus) != 0){ ?>
            <section id="about-us" class="page-section">
                <div class="container">
                    <h3 class="text-center"><?= $aboutus[0]->title ?></h3>
                    <!-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elits officiis similique maiores!</p> -->
                    <br />
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <!-- <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol> -->
                    <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <?php if(!empty($aboutus[0]->image)){ ?>
                                    <img src="<?=base_url($aboutus[0]->image)?>" width="1200" height="200" alt="" title="" />
                                <?php }else{ ?>
                                    <img src="<?=base_url()?>assets_site/img/sections/about/6.jpg" width="1200" height="200" alt="" title="" />
                                <?php } ?>
                                
                            </div>
                        </div>
                    <!-- Controls -->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <?=$aboutus[0]->information?>
                        </div>
                    </div>

                    <!-- <div class="row text-center top-pad-30">
                        <div class="col-sm-4 col-md-4 opacity">
                            <img src="<?=base_url()?>assets_site/img/sections/about/1.jpg" width="370" height="185" alt="" />
                            <h3>Who We Are?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus facilisis cvallis.</p>
                        </div>
                        <div class="col-sm-4 col-md-4 opacity">
                            <img src="<?=base_url()?>assets_site/img/sections/about/2.jpg" width="370" height="185" alt="" />
                            <h3>Why Choose Us?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus facilisis cvallis.</p>
                        </div>
                        <div class="col-sm-4 col-md-4 opacity">
                            <img src="<?=base_url()?>assets_site/img/sections/about/3.jpg" width="370" height="185" alt="" />
                            <h3>Our Mission</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus facilisis cvallis.</p>
                        </div>
                    </div> -->
                </div>
            </section>
        <?php }else{ ?>
            <section id="about-us" class="page-section">
                <div class="container">
                    
                </div>
            </section>
        <?php } ?>
        <!-- page-section -->   