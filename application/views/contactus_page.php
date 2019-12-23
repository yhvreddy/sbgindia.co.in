

 <div class="page-header page-title-left page-title-pattern">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <h1 class="title">Contact Us</h1>

                        <ul class="breadcrumb">

                            <li>

                                <a href="<?=base_url()?>">Home</a>

                            </li>

                            <li class="active">Contact Us</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <!-- page-header -->

        <section id="contact-us" class="page-section">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 col-md-6">

                        <div class="row">

                            <div class="col-sm-6 col-md-6">

                                <h5 class="title">

                                <i class="icon-address text-color"></i>Contact Address</h5>

                                <address><?= $sitedetails[0]->address ?>,

                                <br /><?= $sitedetails[0]->city ?>, <?= $sitedetails[0]->state ?>,

                                <br />zipcode - <?= $sitedetails[0]->pincode ?>.</address>

                            </div>

                            <div class="col-sm-6 col-md-6">

                                <h5 class="title">

                                <i class="icon-contacts text-color"></i>Contact Info</h5>

                                <!-- <div>Mobile : <?= $sitedetails[0]->mobile ?></div> -->

                                <div>Email :  <?= $sitedetails[0]->email_id ?>

                                <a href="mailto:<?= $sitedetails[0]->email_id ?>"><?= $sitedetails[0]->email_id ?></a></div>

                            </div>

                        </div>

                        <hr />

                    </div>

                    <div class="col-md-6 col-md-6">

                        <h3 class="title">Contact Form</h3>

                        <p class="form-message"></p>

                        <div class="contact-form">

                            <!-- Form Begins -->
							<div class="col-md-12" id="responcedata"></div>
                            <form id="contactDetailsform" method="post">

                                <div class="row">

                                    <div class="col-md-6">

                                        <!-- Field 1 -->

                                        <div class="input-text form-group">

                                            <input type="text" name="contact_name" class="input-name form-control"

                                            placeholder="Full Name" />

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <!-- Field 2 -->

                                        <div class="input-email form-group">

                                            <input type="email" name="contact_email" class="input-email form-control"

                                            placeholder="Email" />

                                        </div>

                                    </div>

                                </div>

                                <!-- Field 3 -->

                                <div class="input-email form-group">

                                    <input type="text" name="contact_phone" class="input-phone form-control" placeholder="Phone" />

                                </div>

                                <!-- Field 4 -->

                                <div class="textarea-message form-group">

                                    <textarea name="contact_message" class="textarea-message form-control" placeholder="Message" rows="6"></textarea>

                                </div>

                                <!-- Button -->

                                <button class="btn btn-default" id="contactDetailsformClick" type="button">Send Now 

                                <i class="icon-paper-plane"></i></button>

                            </form>

                            <!-- Form Ends -->
							<script type="text/javascript">
								$(document).ready(function(){
									$("#contactDetailsformClick").click(function(event){
										event.preventDefault
										//alert("+++++++");
										var qutodata = $("#contactDetailsform").serialize();
										//alert(qutodata);
										$.ajax({
											url : "<?=base_url('savefeedbackrcontact')?>",
											data : qutodata,
											method : 'post',
											dataType: 'json',
											success : function(responcedata){
												console.log(responcedata);
												if(responcedata.status == 1){
													$("#responcedata").text(responcedata.message);
													$("#responcedata").css('color','green');
													$("#contactDetailsform").trigger("reset");
												}else{
													$("#responcedata").text(responcedata.message);
													$("#responcedata").css('color','red');
													$("#contactDetailsform").trigger("reset");
												}
											},
											error : function(erroresponce){
												console.log(erroresponce);
												//alert(erroresponce + "oops error");
											}
										})
									})
								})
							</script>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- page-section -->

        <section id="map">

            <div class="map-section">

                <div class="map-canvas" data-zoom="12" data-lat="-35.2835" data-lng="149.128" data-type="roadmap"

                data-title="Austin"

                data-content="Company Name&lt;br&gt; Contact: +012 (345) 6789&lt;br&gt; &lt;a href=mailto_info%40youremail.cominfo%40youremail.com/a.html

                style="height: 376px;"></div>

            </div>

        </section>

        <!-- map -->

        