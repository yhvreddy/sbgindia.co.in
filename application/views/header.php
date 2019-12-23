<!DOCTYPE html>

<html lang="en">

    



<head>

	<meta charset="utf-8" />

	<title><?=$pagetitle?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta name="keywords" content="" />

	<meta name="description" content="" />

	<meta name="author" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Favicon -->

	<link rel="shortcut icon" href="<?=base_url()?>assets_site/images/fav_icon.png" />

    <!-- Font -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,500,700,400italic,700italic' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
    <!-- Font Awesome Icons -->
    <link href='<?=base_url()?>assets_site/css/font-awesome.min.css' rel='stylesheet' type='text/css' />
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets_site/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets_site/css/hover-dropdown-menu.css" rel="stylesheet" />
    <!-- Icomoon Icons -->
    <link href="<?=base_url()?>assets_site/css/icons.css" rel="stylesheet" />
    <!-- Revolution Slider -->
    <link href="<?=base_url()?>assets_site/css/revolution-slider.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets_site/rs-plugin/css/settings.css" rel="stylesheet" />
    <!-- Animations -->
    <link href="<?=base_url()?>assets_site/css/animate.min.css" rel="stylesheet" />
    <!-- Owl Carousel Slider -->
    <link href="<?=base_url()?>assets_site/css/owl/owl.carousel.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets_site/css/owl/owl.theme.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets_site/css/owl/owl.transitions.css" rel="stylesheet" />
    <!-- PrettyPhoto Popup -->
    <link href="<?=base_url()?>assets_site/css/prettyPhoto.css" rel="stylesheet" />
    <!-- Custom Style -->
    <link href="<?=base_url()?>assets_site/css/style.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets_site/css/responsive.css" rel="stylesheet" />
    <!-- Color Scheme -->
    <link href="<?=base_url()?>assets_site/css/color.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- <script src="<?//=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.DataTable').DataTable()
            $('.datatable').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                'columnDefs': [{ 'orderable': false, 'targets': 0 }], // hide sort icon on header of firstcolumn
                'aaSorting': [[1]] // start to sort data in second column
            })
        })
    </script>
    <style>
        header .is-sticky .navbar.navbar-bg-light .navbar-nav > li > a, .navbar-nav > li > a {
            color: #2b2b2b;
            font-size: 13px !important;
        }
        
        header .is-sticky .navbar.navbar-bg-light .navbar-nav > li, .navbar-nav > li{ margin-top: 18px; }

        .navbar-brand>img {
            width:200px !important;
        }
        .icon-bar {
            position: fixed;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            z-index: 111111111;
        }
        img{
            object-fit: fill !important;
        }
        .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 18px;
        }

        .icon-bar a:hover {
            background-color: #eabe1f;
        }

        .icon-bar a p{
            writing-mode: vertical-rl;
            text-orientation: upright;
            font-weight: 500;
            padding: 0px 0px 0px 0px;
        }

        .icon-bar a span{
            padding: 15px 0px;
            letter-spacing: 1px;
            font-size: small;
        }

        .linkedin {
            background: #08395d;
            color: white;
            border-radius: 0 15px 15px 0;
        }
        .icon-bar .linkedin:hover{
            background: #f4f4f4;
            color: #08395d; 
            border: 2px solid #08395d;
            border-left-width: 0;
            font-weight: bold;
        }
        .icon-bar .linkedin:hover p{
            font-weight: bold;
        }
        
        /* ============================================== */
        .top-bar-section.top-bar-bg-light{
            background-color: #007836;
        }
        .top-bar-bg-light .top-contact{
            width: 50%;
            float: left;
            text-align: left;
            box-sizing: border-box;
        } 
        .top-bar-bg-light .top-contact .sbg__title{
            color: #f4f4f4;
            background-color: #08395d;
            border: 2px solid #eee;
            padding: 1% 2%;
            border-radius: 20px;
            font-weight: bold;
            font-size: 15px;
        }
        .top-bar-bg-light .top-contact .sbg__title:hover{
            color: #08395d;
            background-color: #f4f4f4;
            border: 2px solid #08395d
        }
        .top-bar-bg-light .top-social-icon{
            width: 50%;
            float: right;
            text-align: right;
        }
        .top-bar-bg-light .top-social-icon a{
            padding: 5px 3px 5px 8px;
            margin: 0 5px;
            color: #f4f4f4;
            background-color: transparent;
            border-radius: 5px;
            border: 1px solid #eee;
            box-sizing: border-box;
        }
        .top-bar-bg-light .top-social-icon a:last-child{
            padding: 5px 10px;
            font-weight: bold;
            background-color: #08395d;
            color: #f4f4f4;
            border: 2px solid #eee;
        }
        .top-social-icon a i{
            padding: 0;
        }
        .top-bar-bg-light .top-social-icon a:hover i,
        .top-bar-bg-light .top-social-icon a:hover{
            color: #08395d;
        }
        .top-bar-bg-light .top-social-icon a:hover:last-child{
            background-color: #f4f4f4;
            border: 2px solid #08395d
        }
        .sbg__logo{
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .sbg__logo img{
            width: 25%;
        }
        .navbar-nav{
            float: left;
        }
        header .is-sticky .navbar.navbar-bg-light .navbar-nav > li, .navbar-nav > li{
            margin-top:0px !important;

        }
        #sticker-sticky-wrapper{
            height: 70px !important;
        }
    </style>
</head>

    <body>
    <div class="icon-bar">
        <a href="<?=base_url('projects')?>" class="linkedin"><p>PROJECTS</p></a>
    </div>
    <div id="page">

        <!-- Page Loader -->

        <div id="pageloader">

            <div class="loader-item fa fa-spin text-color"></div>

        </div>

        <!-- Top Bar -->

        <div id="top-bar" class="top-bar-section top-bar-bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-between">
                        <!-- Top Contact -->

                        <div class="top-contact link-hover-black text-left">

                            <!-- <a href="#">
                            <i class="fa fa-phone"></i><?=$sitedetails[0]->mobile?></a> 
                            <a href="#">

                            <i class="fa fa-envelope"></i><?=$sitedetails[0]->email_id?></a> -->
                            <a hre  f="#" class="sbg__title text-left">SBG CHARITABLE TRUST </a>
                        </div>

                        <!-- Top Social Icon -->

                        <div class="top-social-icon icons-hover-black">
							<a href="<?=$sitedetails[0]->facebook?>">
								<i class="fa fa-facebook"></i>
							</a> 
							<a href="<?=$sitedetails[0]->twitter?>">
								<i class="fa fa-twitter"></i>
							</a> 
							<a href="<?=$sitedetails[0]->linkedin?>">
								<i class="fa fa-linkedin"></i>
							</a> 
							<a href="<?=$sitedetails[0]->instagram?>">
								<i class="fa fa-instagram"></i>
							</a> &nbsp;&nbsp;&nbsp;
                            <a href="<?=base_url('projects')?>">PROJECTS</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Top Bar -->
        <!-- Logo Bar Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="sbg__logo" href="<?=base_url()?>">
                        <?php if(!empty($sitedetails[0]->site_logo)){ ?>
                            <img class="site_logo" alt="Site Logo" src="<?=base_url($sitedetails[0]->site_logo)?>" />
                        <?php }else{ ?>
                            <img class="site_logo" alt="Site Logo" src="<?=base_url()?>assets_site/images/logo.png" />
                        <?php } ?>
                    </a>
                </div>
            </div>
        </div>
        <!-- Logo Bar End -->


        <!-- Sticky Navbar -->

        <header id="sticker" class="sticky-navigation">

            <!-- Sticky Menu -->
            <div class="sticky-menu relative">
                <!-- navbar -->

                <div class="navbar navbar-default navbar-bg-light" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="navbar-header">
                                    <!-- Button For Responsive toggle -->

                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span>
                                    </button> 

                                    <!-- Logo -->                                 

                                    <!-- <a class="navbar-brand" href="<?=base_url()?>">
                                    <?php if(!empty($sitedetails[0]->site_logo)){ ?>
                                        <img class="site_logo" alt="Site Logo" src="<?=base_url($sitedetails[0]->site_logo)?>" />
                                    <?php }else{ ?>
                                        <img class="site_logo" alt="Site Logo" src="<?=base_url()?>assets_site/images/logo.png" />
                                    <?php } ?>

                                    </a> -->
                                </div>

                                <!-- Navbar Collapse -->

                                <div class="navbar-collapse collapse d-flex justify-content-center">

                                    <!-- nav -->

                                    <ul class="nav navbar-nav">

                                        <!-- Home  Mega Menu -->

										<li><a href="<?=base_url()?>">Home</a></li>
										<li><a href="<?=base_url('aboutus')?>">About us</a></li>
                                        <li><a href="<?=base_url('downloads')?>">Download's</a></li>
										<li><a href="<?=base_url('gallery')?>">Gallery</a></li>
										<!-- <li><a href="#">Downloads</a></li> -->
										<li><a href="<?=base_url('contactus')?>">Contact us</a></li>
                                        <?php if(isset($islogin) && $islogin ==1){ ?>
                                            <li>
                                            <a class="active" href="#"><?=$userdata->name?></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?=base_url('agents/details')?>">Agent Details</a></li>
                                                <li><a href="<?=base_url('agents/logoutaccount')?>">Logout</a></li>
                                            </ul>
                                        </li>
                                        <?php }else{ ?>
										    <li><a href="<?=base_url('agents/loginaccount')?>">Agent Login</a></li>
                                        <?php } ?>
                                        <!-- Ends Contact Block -->

                                        <!-- Header Search -->
                                        <!-- <li class="hidden-767">
                                            <a href="#" class="header-search">
                                                <span>
                                                    <i class="fa fa-search"></i>
                                                </span>
                                            </a>
                                        </li>-->

                                    </ul>

                                    <!-- Right nav -->
                                    <!-- Header Search Content -->

                                    <div class="bg-white hide-show-content no-display header-search-content">
                                        <form role="search" class="navbar-form vertically-absolute-middle">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter your text &amp; Search Here"
                                                class="form-control" id="s" name="s" value="" />
                                            </div>
                                        </form>
                                        <button class="close">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- Header Search Content -->

                                </div>
                                <!-- /.navbar-collapse -->

                            </div>
                            <!-- /.col-md-12 -->

                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.container -->

                </div>
                <!-- navbar -->

            </div>
            <!-- Sticky Menu -->

        </header>
        <!-- Sticky Navbar -->

