    <!-- Sticky Navbar -->
    <div class="page-header page-title-left page-title-pattern">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">Agent Login</h1>
                        <h5></h5>
                        <ul class="breadcrumb">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li class="active">Agent Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-header -->
        <section id="contact-us" class="page-section">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6 col-md-6">
                        <h3 class="title">Agent login</h3>
                        <p class="form-message"></p>
                        <div class="contact-form">
                            <p style="text-align: center;">
                                <span style="color:red;font-size: 16px">
                                    <?=$this->session->flashdata('failed');?>
                                </span>
                            </p>
                            <!-- Form Begins -->
                            <form role="form" method="post" action="<?=base_url('agents/loginAccess')?>">
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <!-- Field 2 -->
                                        <div class="input-email form-group">
                                            <input type="email" name="login_id" class="input-email form-control" placeholder="Login id" required="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Field 1 -->
                                        <div class="input-text form-group">
                                            <input type="password" name="password" class="input-name form-control"
                                            placeholder="Enter password" required=""/>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Button -->
                                <button class="btn btn-default" type="submit">Login 
                                <i class="icon-paper-plane"></i></button>
                            </form>
                            <!-- Form Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-section -->