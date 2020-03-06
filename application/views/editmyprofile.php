<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>World Best Local Directory Website template</title>
	<!-- FAV ICON(BROWSER TAB ICON) -->
	<link rel="shortcut icon" href="<?php echo base_url('/assets/images/fav.ico'); ?>" type="image/x-icon">
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
	<!-- FONTAWESOME ICONS -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/font-awesome.min.css'); ?>"/>
	<!-- ALL CSS FILES -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/materialize.css'); ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?> "/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.css'); ?> "/>
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link  rel="stylesheet" href="<?php echo base_url('/assets/css/responsive.css') ?> "/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<!--TOP SEARCH SECTION-->
	<section class="bottomMenu dir-il-top-fix">
		<div class="container top-search-main">
			<div class="row">
				<div class="ts-menu">
					<!--SECTION: LOGO-->
					<div class="ts-menu-1">
						<a href="index-1.html"><img src="<?php echo base_url('images/aff-logo.png')?>" alt=""> </a>
					</div>
					<!--SECTION: BROWSE CATEGORY(NOTE:IT'S HIDE ON MOBILE & TABLET VIEW)-->
					<div class="ts-menu-2"><a href="#" class="t-bb">All Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
						<!--SECTION: BROWSE CATEGORY-->
						<div class="cat-menu cat-menu-1">
							<div class="dz-menu">
								<div class="dz-menu-inn">
									<h4>Frontend Pages</h4>
									<ul>
										<li><a href="index-1.html">Home 1</a></li>
										<li><a href="index-2.html">Home 2</a></li>
										<li><a href="index-3.html">Home 3</a></li><li><a href="index-4.html">Home 4</a></li>
										<li><a href="list.html">All Listing</a></li>
										<li><a href="listing-details.html">Listing Details </a> </li>
										<li><a href="price.html">Add Listing</a> </li>
										<li><a href="list-lead.html">Lead Listing</a></li>
										<li><a href="list-grid.html">Listing Grid View</a></li>
									</ul>
								</div>
								<div class="dz-menu-inn">
									<h4>Frontend Pages</h4>
									<ul>
										<li><a href="new-business.html"> New Listings </a> </li>
										<li><a href="nearby-listings.html">Nearby Listings</a> </li>
										<li><a href="customer-reviews.html"> Customer Reviews</a> </li>
										<li><a href="trendings.html"> Top Trendings</a> </li>
										<li><a href="how-it-work.html"> How It Work</a> </li>
										<li><a href="advertise.html"> Advertise with us</a> </li>
										<li><a href="price.html"> Price Details</a> </li>
									</ul>
								</div>
								<div class="dz-menu-inn">
									<h4>Frontend Pages</h4>
									<ul>
										<li><a href="about-us.html"> About Us</a> </li>
										<li><a href="customer-reviews.html"> Customer Reviews</a> </li>
										<li><a href="contact-us.html"> Contact Us</a> </li>
										<li><a href="blog.html"> Blog Post</a> </li>
										<li><a href="blog-content.html"> Blog Details</a> </li>
										<li><a href="elements.html"> All Elements </a> </li>
										<li><a href="shop-listing-details.html"> Shop Details </a> </li>
										<li><a href="property-listing-details.html"> Property Details </a> </li>
									</ul>
								</div>
								<div class="dz-menu-inn">
									<h4>Dashboard Pages</h4>
									<ul>
										<li><a href="dashboard.html"> Dashboard</a> </li>
										<li><a href="db-invoice.html"> Invoice</a> </li>
										<li><a href="db-setting.html"> User Setting</a> </li>
										<li><a href="db-all-listing.html"> All Listings</a> </li>
										<li><a href="db-listing-add.html"> Add New Listing</a> </li>
										<li><a href="db-review.html"> Listing Reviews</a> </li>
										<li><a href="db-payment.html"> Listing Payments </a> </li>
									</ul>
								</div>
								<div class="dz-menu-inn">
									<h4>Dashboard Pages</h4>
									<ul>
										<li><a href="register.html"> User Register</a> </li>
										<li><a href="login.html"> User Login</a> </li>
										<li><a href="forgot-pass.html"> Forgot Password</a> </li>
										<li><a href="db-message.html"> Messages</a> </li>
										<li><a href="db-my-profile.html"> Dashboard Profile</a> </li>
										<li><a href="db-post-ads.html"> Post Ads </a> </li>
										<li><a href="db-invoice-download.html"> Download Invoice </a> </li>
									</ul>
								</div>
								<div class="dz-menu-inn lat-menu">
									<h4>Admin Panel Pages</h4>
									<ul>
										<li><a target="_blank" href="admin.html"> Admin</a> </li>
										<li><a target="_blank" href="admin-all-listing.html"> All Listing</a> </li>
										<li><a target="_blank" href="admin-all-users.html"> All Users</a> </li>
										<li><a target="_blank" href="admin-analytics.html"> Analytics</a> </li>
										<li><a target="_blank" href="admin-ads.html"> Advertisement</a> </li>
										<li><a target="_blank" href="admin-setting.html"> Admin Setting </a> </li>
										<li><a target="_blank" href="admin-payment.html"> Payments </a> </li>
									</ul>
								</div>
							</div>
							<div class="dir-home-nav-bot">
								<ul>
									<li>A few reasons you’ll love Online Business Directory <span>Call us on: +01 6214 6548</span> </li>
									<li><a href="advertise.html" class="waves-effect waves-light btn-large"><i class="fa fa-bullhorn"></i> Advertise with us</a>
									</li>
									<li><a href="db-listing-add.html" class="waves-effect waves-light btn-large"><i class="fa fa-bookmark"></i> Add your business</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--SECTION: SEARCH BOX-->
					<div class="ts-menu-3">
						<div class="">
							<form class="tourz-search-form tourz-top-search-form">
								<div class="input-field">
									<input type="text" id="top-select-city" class="autocomplete">
									<label for="top-select-city">Enter city</label>
								</div>
								<div class="input-field">
									<input type="text" id="top-select-search" class="autocomplete">
									<label for="top-select-search" class="search-hotel-type">Search your services like hotel, resorts, events and more</label>
								</div>
								<div class="input-field">
									<input type="submit" value="" class="waves-effect waves-light tourz-top-sear-btn"> </div>
							</form>
						</div>
					</div>
					<!--SECTION: REGISTER,SIGNIN AND ADD YOUR BUSINESS-->
					<div class="ts-menu-4">
						<div class="v3-top-ri">
							<ul>
								<li><a href="login.html" class="v3-menu-sign"><i class="fa fa-sign-in"></i> Sign In</a> </li>
								<li><a href="db-listing-add.html" class="v3-add-bus"><i class="fa fa-plus" aria-hidden="true"></i> Add Listing</a> </li>
							</ul>
						</div>
					</div>
					<!--MOBILE MENU ICON:IT'S ONLY SHOW ON MOBILE & TABLET VIEW-->
					<div class="ts-menu-5"><span><i class="fa fa-bars" aria-hidden="true"></i></span> </div>
					<!--MOBILE MENU CONTAINER:IT'S ONLY SHOW ON MOBILE & TABLET VIEW-->
					<div class="mob-right-nav" data-wow-duration="0.5s">
						<div class="mob-right-nav-close"><i class="fa fa-times" aria-hidden="true"></i> </div>
						<h5>Business</h5>
						<ul class="mob-menu-icon">
							<li><a href="price.html">Add Business</a> </li>
							<li><a href="register.html">Register</a> </li>
							<li><a href="login.html">Sign In</a> </li>
						</ul>
						<h5>All Categories</h5>
						<ul>
							<li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Help Services</a> </li>
							<li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Appliances Repair & Services</a> </li>
							<li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Furniture Dealers</a> </li>
							<li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Packers and Movers</a> </li>
							<li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Pest Control </a> </li>
							<li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Solar Product Dealers</a> </li>
							<li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Interior Designers</a> </li>
							<li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Carpenters</a> </li>
							<li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Plumbing Contractors</a> </li>
							<li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Modular Kitchen</a> </li>
							<li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Internet Service Providers</a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--DASHBOARD-->
	<section>
		<div class="tz">
			<!--LEFT SECTION-->
			<div class="tz-l">
				<div class="tz-l-1">
					<ul>
						<li><img src="<?php echo base_url('assets/images/db-profile.jpg')?>" alt="" /> </li>
						<li><span>80%</span> profile compl</li>
						<li><span>18</span> Notifications</li>
					</ul>
				</div>
				<div class="tz-l-2">
					<ul>
						<li>
							<a href="dashboard"><img src="<?php echo base_url('assets/images/icon/dbl1.png');?>" alt="" /> My Dashboard</a>
						</li>
						<li>
							<a href="db-all-listing.html"><img src="<?php echo base_url('assets/images/icon/dbl2.png'); ?>" alt="" /> All Listing</a>
						</li>
						<li>
							<a href="add-listing"><img src="<?php echo base_url('assets/images/icon/dbl3.png'); ?>" alt="" /> Add New Listing</a>
						</li>
						<li>
							<a href="db-message.html"><img src="<?php echo base_url('assets/images/icon/dbl14.png'); ?>" alt="" /> Messages(12)</a>
						</li>
						<li>
							<a href="db-review.html"><img src="<?php echo base_url('assets/mages/icon/dbl13.png'); ?>" alt="" /> Reviews(05)</a>
						</li>
						<li>
							<a href="profile" class="tz-lma"><img src="<?php echo base_url('assets/images/icon/dbl6.png'); ?>" alt="" /> My Profile</a>
						</li>
						<li>
							<a href="db-post-ads.html"><img src="<?php echo base_url('assets/images/icon/dbl11.png'); ?>" alt="" /> Ad Summary</a>
						</li>
						<li>
							<a href="db-payment.html"><img src="<?php echo base_url('assets/images/icon/dbl9.png'); ?>" alt=""> Check Out</a>
						</li>
						<li>
							<a href="db-invoice-all.html"><img src="<?php echo base_url('assets/images/icon/db21.png'); ?>" alt="" /> Invoice</a>
						</li>						
						<li>
							<a href="db-claim.html"><img src="<?php echo base_url('assets/images/icon/dbl7.png'); ?>" alt="" /> Claim & Refund</a>
						</li>
						<li>
							<a href="db-setting.html"><img src="<?php echo base_url('assets/images/icon/dbl210.png'); ?>" alt="" /> Setting</a>
						</li>
						<li>
							<a href="#!"><img src="<?php echo base_url('assets/images/icon/dbl12.png'); ?>" alt="" /> Log Out</a>
						</li>
					</ul>
				</div>
			</div>
			<!--CENTER SECTION-->
			<div class="tz-2">
				<div class="tz-2-com tz-2-main">
					<h4>Profile</h4>
					<div class="db-list-com tz-db-table">
						<div class="ds-boar-title">
							<h2>Edit Profile</h2>
							<p>All the Lorem Ipsum generators on the All the Lorem Ipsum generators on the</p>
						</div>
						<div class="tz2-form-pay tz2-form-com">
							<?php echo form_open_multipart('update_profile');?>
							<form class="col s12" id="update_profile" action="update_profile" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="alert alert-success" style="display:none">
									</div>
									<div class="alert alert-danger" style="display:none">
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input name="username" type="text" value="<?php foreach ($all_data as $user) { echo $user->username; } ?>" class="validate">
										<label>User Name</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 m6">
										<input name="password" type="password" value="<?php foreach ($all_data as $user) { echo $user->password; } ?>" class="validate">
										<label>Enter Password</label>
									</div>
									<div class="input-field col s12 m6">
										<input name="confirmpassword" type="password" value="<?php foreach ($all_data as $user) { echo $user->password; } ?>" class="validate">
										<label>Confirm Password</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 m6">
										<input name="email" type="email" value="<?php foreach ($all_data as $user) { echo $user->email; } ?>" class="validate">
										<label>Email id</label>
									</div>
									<div class="input-field col s12 m6">
										<input name="phone" type="text" value="<?php foreach ($all_data as $user) { echo $user->phone; } ?>" class="validate">
										<label>Phone</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<select name="status">
											<option value="" disabled selected>Select Status</option>
											<option value="Active">Active</option>
											<option value="Non-Active">Non-Active</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input name="address" type="text" value="<?php foreach ($all_data as $user) { echo $user->address; } ?>" class="validate">
										<label>Address</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input name="dob" type="text" value="<?php foreach ($all_data as $user) { echo $user->dob; } ?>" class="validate">
										<label>Date Of Birth</label>
									</div>
								</div>
								<div class="row tz-file-upload">
									<div class="file-field input-field">
										<div class="tz-up-btn"> <span>Image</span>
											<input name="image" type="file"> </div>
										<div class="file-path-wrapper">
											<input class="file-path validate" type="text"> </div>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input type="submit" id="submit" value="upload" class="waves-effect waves-light full-btn"> 
									</div>
								</div>
							</form>
							<?php echo form_close(); ?>
						</div>
						<div class="db-mak-pay-bot">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p> <a href="db-setting.html" class="waves-effect waves-light btn-large">Profile Setting</a> </div>
					</div>
				</div>
			</div>
			<!--RIGHT SECTION-->
			<div class="tz-3">
				<h4>Notifications()</h4>
				<ul>
					<li>
						<a href="#!"> <img src="<?php echo base_url('assets/images/icon/dbr1.jpg'); ?>" alt="" />
							<h5>Joseph, write a review</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>					
				</ul>
			</div>
		</div>
	</section>
    <!--END DASHBOARD-->
	<!--FOOTER SECTION-->
<footer id="colophon" class="site-footer clearfix">
		<div id="quaternary" class="sidebar-container " role="complementary">
			<div class="sidebar-inner">
				<div class="widget-area clearfix">
					<div id="azh_widget-2" class="widget widget_azh_widget">
						<div data-section="section">
							<div class="container">
								<div class="row">
									<div class="col-sm-4 col-md-3 foot-logo"> 
                                        <img src="<?php echo base_url('assets/images/foot-logo.png'); ?>" alt="logo">
										<p class="hasimg">Worlds's No. 1 Local Business Directory Website.</p>
										<p class="hasimg">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
									</div>
									<div class="col-sm-4 col-md-3">
										<h4>Support & Help</h4>
										<ul class="two-columns">
											<li> <a href="advertise.html">Advertise us</a> </li>
											<li> <a href="about-us.html">About Us</a> </li>
											<li> <a href="customer-reviews.html">Review</a> </li>
											<li> <a href="how-it-work.html">How it works </a> </li>
											<li> <a href="add-listing.html">Add Business</a> </li>
											<li> <a href="#!">Register</a> </li>
											<li> <a href="#!">Login</a> </li>
											<li> <a href="#!">Quick Enquiry</a> </li>
											<li> <a href="#!">Ratings </a> </li>
											<li> <a href="trendings.html">Top Trends</a> </li>
										</ul>
									</div>
									<div class="col-sm-4 col-md-3">
										<h4>Popular Services</h4>
										<ul class="two-columns">
											<li> <a href="#!">Hotels</a> </li>
											<li> <a href="#!">Hospitals</a> </li>
											<li> <a href="#!">Transportation</a> </li>
											<li> <a href="#!">Real Estates </a> </li>
											<li> <a href="#!">Automobiles</a> </li>
											<li> <a href="#!">Resorts</a> </li>
											<li> <a href="#!">Education</a> </li>
											<li> <a href="#!">Sports Events</a> </li>
											<li> <a href="#!">Web Services </a> </li>
											<li> <a href="#!">Skin Care</a> </li>
										</ul>
									</div>
									<div class="col-sm-4 col-md-3">
										<h4>Cities Covered</h4>
										<ul class="two-columns">
											<li> <a href="#!">Atlanta</a> </li>
											<li> <a href="#!">Austin</a> </li>
											<li> <a href="#!">Baltimore</a> </li>
											<li> <a href="#!">Boston </a> </li>
											<li> <a href="#!">Chicago</a> </li>
											<li> <a href="#!">Indianapolis</a> </li>
											<li> <a href="#!">Las Vegas</a> </li>
											<li> <a href="#!">Los Angeles</a> </li>
											<li> <a href="#!">Louisville </a> </li>
											<li> <a href="#!">Houston</a> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div data-section="section" class="foot-sec2">
							<div class="container">
								<div class="row">
									<div class="col-sm-3">
										<h4>Payment Options</h4>
										<p class="hasimg"> 
                                            <img src="<?php echo base_url('assets/images/payment.png');?>" alt="payment"> </p>
									</div>
									<div class="col-sm-4">
										<h4>Address</h4>
										<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
										<p> <span class="strong">Phone: </span> <span class="highlighted">+01 1245 2541</span> </p>
									</div>
									<div class="col-sm-5 foot-social">
										<h4>Follow with us</h4>
										<p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
										<ul>
											<li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
											<li><a href="https://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
											<li><a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
											<li><a href="https://www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
											<li><a href="https://www.youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
											<li><a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .widget-area -->
			</div>
			<!-- .sidebar-inner -->
		</div>
		<!-- #quaternary -->
	</footer>
	<!--COPY RIGHTS-->
	<section class="copy">
		<div class="container">
			<p>copyrights © <span id="cryear">2017</span> RN53Themes.net. &nbsp;&nbsp;All rights reserved. </p>
		</div>
	</section>
	<!--QUOTS POPUP-->
	<section>
		<!-- GET QUOTES POPUP -->
		<div class="modal fade dir-pop-com" id="list-quo" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header dir-pop-head">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title">Get a Quotes</h4>
						<!--<i class="fa fa-pencil dir-pop-head-icon" aria-hidden="true"></i>-->
					</div>
					<div class="modal-body dir-pop-body">
						<form method="post" class="form-horizontal">
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Full Name *</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="fname" placeholder="" required> </div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Mobile</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="mobile" placeholder=""> </div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Email</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="email" placeholder=""> </div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Message</label>
								<div class="col-md-8 get-quo">
									<textarea class="form-control"></textarea>
								</div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<div class="col-md-6 col-md-offset-4">
									<input type="submit" value="SUBMIT" class="pop-btn"> </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- GET QUOTES Popup END -->
	</section>
	<!--SCRIPT FILES-->
	<script type="text/javascript">
		$(document).ready(function() {
		$("#submit").click(function(e){
			
				e.preventDefault();
				var username = $("input[name='username']").val();
				var email = $("input[name='email']").val();
				var status = $("select[name='status']").val();
				var password = $("input[name='password']").val();
				var confirmpassword = $("input[name='confirmpassword']").val();
				var address = $("input[name='address']").val();
				var phone = $("input[name='phone']").val();
				var dob = $("input[name='dob']").val();
				var image = $("input[name='image']").val();
			
				$.ajax({
					url: "update_profile",
					type: "post",
					dataType: "json",

					data: {username:username , email:email , status:status ,
					password:password , confirmpassword:confirmpassword,
					phone:phone , dob:dob , address:address ,image:image },

					success: function(data) {
						if($.isEmptyObject(data.error)){
							$(".alert-success").css('display','block');
							$(".alert-success").html(data.success);
						}else{
							$(".alert-danger").css('display','block');
							$(".alert-danger").html(data.error);
							}
						}
					});      
				}); 
			});
		</script>
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/angular.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/materialize.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/custom.js');?> "></script>
</body>
</html>