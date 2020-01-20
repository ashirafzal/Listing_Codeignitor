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
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!--PRE LOADING-->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<!--BANNER AND SERACH BOX-->
	<section>
		<div class="v3-top-menu">
			<div class="container">
				<div class="row">
					<div class="v3-menu">
						<div class="v3-m-1">
							<a href="index-1.html"><img src="<?php echo base_url('/assets/images/logo2.png'); ?>" alt=""> </a>
						</div>
						<div class="v3-m-2">
							<ul>
								<!--<li><a class='dropdown-button' href='<?php echo base_url('/'); ?>'>Home</a></li>-->
							</ul>
						</div>
						<div class="v3-m-3">
							<div class="v3-top-ri v32-top-ri">
								<ul>
									<li><a href="<?php echo base_url('/index.php/login'); ?>" class="v3-menu-sign"><i class="fa fa-sign-in"></i> Sign In</a></li>
									<!--<li><a href="db-listing-add.html" class="v3-add-bus"><i class="fa fa-plus" aria-hidden="true"></i> Add Listing</a></li>-->
								</ul>
							</div>
						</div>
					</div>
						
						
						<!--DROP DOWN MENU: WEB DESIGN-->
						<ul id='adm-dr1' class='dropdown-content'>
							<li><a href="admin-all-listing.html">All listing</a> </li>
							<li><a href="admin-list-add.html">Add New listing</a> </li>
							<li><a href="admin-listing-category.html">All listing Category</a> </li>
							<li><a href="admin-list-category-add.html">Add listing Category</a> </li>
						</ul>
						<!--END DROP DOWN MENU-->
						<!--DROP DOWN MENU: WEB DESIGN-->
						<ul id='adm-dr2' class='dropdown-content'>
							<li><a href="admin-all-users.html">All Users</a> </li>
							<li><a href="admin-list-users-add.html">Add New user</a> </li>
						</ul>
						<!--END DROP DOWN MENU-->
						<!--DROP DOWN MENU: WEB DESIGN-->
						<ul id='adm-dr3' class='dropdown-content'>
							<li><a href="admin-ads.html">All Ads</a> </li>
							<li><a href="admin-ads-create.html">Create New Ads</a> </li>
						</ul>
						<!--END DROP DOWN MENU-->
						<!--DROP DOWN MENU: WEB DESIGN-->
						<ul id='adm-dr4' class='dropdown-content'>
							<li><a href="admin-notifications.html">All Notifications</a> </li>
							<li><a href="admin-notifications-user-add.html">User Notifications</a> </li>
							<li><a href="admin-notifications-push-add.html">Push Notifications</a> </li>
						</ul>
						<!--END DROP DOWN MENU-->
						<!--DROP DOWN MENU: WEB DESIGN-->
						<ul id='adm-dr5' class='dropdown-content'>
							<li><a href="admin-price.html">All List Price</a> </li>
							<li><a href="admin-price-list.html">Add New Price</a> </li>
						</ul>
						<!--END DROP DOWN MENU-->
						<!--DROP DOWN MENU: WEB DESIGN-->
						<ul id='adm-dr6' class='dropdown-content'>
							<li><a href="admin-login.html">Admin Login</a> </li>
							<li><a href="admin-register.html">Admin Register</a> </li>
							<li><a href="admin-pass.html">Admin Forgot Pass</a> </li>
						</ul>
						<!--END DROP DOWN MENU-->	
						<!--DROP DOWN MENU: EMAIL TEMPLATE-->
						<ul id='email-temp' class='dropdown-content'>
							<li><a href="email-template-register.html" target="_blank">Register</a> </li>
							<li><a href="email-template-invoice.html" target="_blank">Invoice</a> </li>
							<li><a href="email-listing-submited.html" target="_blank">Listing Submit</a> </li>
							<li><a href="email-subscribe.html" target="_blank">Subscripe</a> </li>
							<li><a href="email-template-email-verification.html" target="_blank">Email Verification</a> </li>
							<li><a href="email-template-forgot-pass.html" target="_blank">Forgot Password</a> </li>
						</ul>
						<!--END DROP DOWN MENU-->						
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="v3-mob-top-menu">
			<div class="container">
				<div class="row">
					<div class="v3-mob-menu">
						<div class="v3-mob-m-1">
							<a href="index-1.html"><img src="<?php echo base_url('/assets/images/logo2.png'); ?>" alt=""> </a>
						</div>
						<div class="v3-mob-m-2">
							<div class="v3-top-ri">
								<ul>
									<li><a href="login.html" class="v3-menu-sign"><i class="fa fa-sign-in"></i> Sign In</a> </li>
									<li><a href="price.html" class="v3-add-bus"><i class="fa fa-plus" aria-hidden="true"></i> Add Listing</a> </li>
									<li><a href="#" class="ts-menu-5" id="v3-mob-menu-btn"><i class="fa fa-bars" aria-hidden="true"></i>Menu</a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mob-right-nav" data-wow-duration="0.5s">
			<div class="mob-right-nav-close"><i class="fa fa-times" aria-hidden="true"></i> </div>
			<h5>Business</h5>
			<ul class="mob-menu-icon">
				<li><a href="price.html">Add Business</a> </li>
				<li><a href="#!" data-toggle="modal" data-target="#register">Register</a> </li>
				<li><a href="#!" data-toggle="modal" data-target="#sign-in">Sign In</a> </li>
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
	</section>
	<section id="background1" class="dir1-home-head">
		<div class="container dir-ho-t-sp">
			<div class="row">
				<div class="dir-hr1">
					<div class="dir-ho-t-tit dir-ho-t-tit-2">
						<h1>Connect with the right Service Experts</h1> 
						<p>Find B2B & B2C businesses contact addresses, phone numbers,<br> user ratings and reviews.</p>
					</div>
						<form class="tourz-search-form">
							<div class="input-field">
								<input type="text" id="select-city" class="autocomplete">
								<label for="select-city">Enter city</label>
							</div>
							<div class="input-field">
								<input type="text" id="select-search" class="autocomplete">
								<label for="select-search" class="search-hotel-type">Search your services like hotel, resorts, events and more</label>
							</div>
							<div class="input-field">
								<input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
						</form>
				</div>
			</div>
		</div>
	</section>
	<!--FIND YOUR SERVICE-->
	<section class="cat-v2-hom com-padd mar-bot-red-m30">
		<div class="container">
			<div class="row">
				<div class="com-title">
					<h2>Find your <span>Services</span></h2>
					<p>Explore some of the best business from around the world from our partners and friends.</p>
				</div>
				<div class="cat-v2-hom-list">
					<ul>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat1.png'); ?>" alt=""> Hospitals</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat2.png'); ?>" alt=""> Hotel & Resort</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat3.png') ?>" alt=""> Events</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat4.png'); ?>" alt=""> Wedding Halls</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat5.png'); ?> " alt=""> Shops</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat6.png'); ?>" alt=""> Fitness & Gym</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat7.png'); ?>" alt=""> Sports</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat8.png'); ?>" alt=""> Education</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat9.png'); ?>" alt=""> Electricals</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat10.png'); ?>" alt=""> Automobiles</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat11.png'); ?>" alt=""> Real Estates</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat12.png'); ?>" alt=""> Import & Export</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat13.png'); ?>" alt=""> Interior Design</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat14.png'); ?>" alt=""> Software Solutions</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo base_url('/assets/images/icon/hcat15.png'); ?>" alt=""> Yoga Training</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--EXPLORE CITY LISTING-->
	<section class="com-padd com-padd-redu-top">
		<div class="container">
			<div class="row">
				<div class="com-title">
					<h2>Explore your <span>City Listings</span></h2>
					<p>Explore some of the best business from around the world from our partners and friends.</p>
				</div>
				<div class="col-md-6">
					<a href="list-lead.html">
						<div class="list-mig-like-com">
							<div class="list-mig-lc-img"> <img src="<?php echo base_url('/assets/images/listing/home.jpg'); ?>" alt="" /> </div>
							<div class="list-mig-lc-con">
								<div class="list-rat-ch list-room-rati"> <span>4.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
								<h5>United States</h5>
								<p>21 Cities . 2045 Listings . 3648 Users</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="list-lead.html">
						<div class="list-mig-like-com">
							<div class="list-mig-lc-img"> <img src="<?php echo base_url('/assets/images/listing/home2.jpg'); ?>" alt="" /> </div>
							<div class="list-mig-lc-con list-mig-lc-con2">
								<h5>United Kingdom</h5>
								<p>18 Cities . 1454 Listings</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="list-lead.html">
						<div class="list-mig-like-com">
							<div class="list-mig-lc-img"> <img src="<?php echo base_url('/assets/images/listing/home3.jpg');?>" alt="" /> </div>
							<div class="list-mig-lc-con list-mig-lc-con2">
								<h5>Australia</h5>
								<p>14 Cities . 1895 Listings</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="list-lead.html">
						<div class="list-mig-like-com">
							<div class="list-mig-lc-img"> <img src="<?php echo base_url('/assets/images/listing/home4.jpg'); ?>" alt="" /> </div>
							<div class="list-mig-lc-con list-mig-lc-con2">
								<h5>Germany</h5>
								<p>12 Cities . 1260 Listings</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="list-lead.html">
						<div class="list-mig-like-com">
							<div class="list-mig-lc-img"> <img src="<?php echo base_url('/assets/images/listing/home1.jpg'); ?>" alt="" /> </div>
							<div class="list-mig-lc-con list-mig-lc-con2">
								<h5>India</h5>
								<p>24 Cities . 4152 Listings</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--ADD BUSINESS-->
	<section class="com-padd home-dis">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><span>30% Off</span> Promote Your Business with us <a href="price.html">Add My Business</a></h2> </div>
			</div>
		</div>
	</section>
	<!--BEST THINGS-->
	<section class="com-padd com-padd-redu-bot1">
		<div class="container dir-hom-pre-tit">
			<div class="row">
				<div class="com-title">
					<h2>Top Trendings for <span>your City</span></h2>
					<p>Explore some of the best tips from around the world from our partners and friends.</p>
				</div>
				<div class="col-md-6">
					<div>
						<!--POPULAR LISTINGS-->
						<div class="home-list-pop">
							<!--POPULAR LISTINGS IMAGE-->
							<div class="col-md-3"> <img src="<?php echo base_url('/assets/images/services/tr1.jpg'); ?>" alt="" /> </div>
							<!--POPULAR LISTINGS: CONTENT-->
							<div class="col-md-9 home-list-pop-desc"> <a href="automobile-listing-details.html"><h3>Import Motor America</h3></a>
								<h4>Express Avenue Mall, Santa Monica</h4>
								<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
										<li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
										<li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
										<li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
									</ul>
								</div>
							</div>
						</div>
						<!--POPULAR LISTINGS-->
						<div class="home-list-pop">
							<!--POPULAR LISTINGS IMAGE-->
							<div class="col-md-3"> <img src="<?php echo base_url('/assets/images/services/tr2.jpg') ?>" alt="" /> </div>
							<!--POPULAR LISTINGS: CONTENT-->
							<div class="col-md-9 home-list-pop-desc"> <a href="property-listing-details.html"><h3>Luxury Property</h3></a>
								<h4>Express Avenue Mall, New York</h4>
								<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
										<li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
										<li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
										<li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
									</ul>
								</div>
							</div>
						</div>
						<!--POPULAR LISTINGS-->
						<div class="home-list-pop">
							<!--POPULAR LISTINGS IMAGE-->
							<div class="col-md-3"> <img src="<?php echo base_url('/assets/images/services/tr3.jpg'); ?>" alt="" /> </div>
							<!--POPULAR LISTINGS: CONTENT-->
							<div class="col-md-9 home-list-pop-desc"> <a href="shop-listing-details.html"><h3>Spicy Supermarket Shop</h3></a>
								<h4>Express Avenue Mall, Chicago</h4>
								<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
										<li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
										<li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
										<li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
									</ul>
								</div>
							</div>
						</div>
						<!--POPULAR LISTINGS-->
						<div class="home-list-pop">
							<!--POPULAR LISTINGS IMAGE-->
							<div class="col-md-3"> <img src="<?php echo base_url('/assets/images/services/s4.jpg'); ?>" alt="" /> </div>
							<!--POPULAR LISTINGS: CONTENT-->
							<div class="col-md-9 home-list-pop-desc"> <a href="list-lead.html"><h3>Packers and Movers</h3></a>
								<h4>Express Avenue Mall, Toronto</h4>
								<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
										<li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
										<li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
										<li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div>
						<!--POPULAR LISTINGS-->
						<div class="home-list-pop">
							<!--POPULAR LISTINGS IMAGE-->
							<div class="col-md-3"> <img src="<?php echo base_url('/assets/images/services/s5.jpg'); ?>" alt="" /> </div>
							<!--POPULAR LISTINGS: CONTENT-->
							<div class="col-md-9 home-list-pop-desc"> <a href="list-lead.html"><h3>Tour and Travels</h3></a>
								<h4>Express Avenue Mall, Los Angeles</h4>
								<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
										<li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
										<li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
										<li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
									</ul>
								</div>
							</div>
						</div>
						<!--POPULAR LISTINGS-->
						<div class="home-list-pop">
							<!--POPULAR LISTINGS IMAGE-->
							<div class="col-md-3"> <img src="<?php echo base_url('/assets/images/services/s6.jpg'); ?>" alt="" /> </div>
							<!--POPULAR LISTINGS: CONTENT-->
							<div class="col-md-9 home-list-pop-desc"> <a href="list-lead.html"><h3>Andru Modular Kitchen</h3></a>
								<h4>Express Avenue Mall, San Diego</h4>
								<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
										<li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
										<li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
										<li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
									</ul>
								</div>
							</div>
						</div>
						<!--POPULAR LISTINGS-->
						<div class="home-list-pop">
							<!--POPULAR LISTINGS IMAGE-->
							<div class="col-md-3"> <img src="<?php echo base_url('/assets/images/services/s7.jpg'); ?>" alt="" /> </div>
							<!--POPULAR LISTINGS: CONTENT-->
							<div class="col-md-9 home-list-pop-desc"> <a href="list-lead.html"><h3>Rute Skin Care & Treatment</h3></a>
								<h4>Express Avenue Mall, Toronto</h4>
								<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
										<li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
										<li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
										<li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
									</ul>
								</div>
							</div>
						</div>
						<!--POPULAR LISTINGS-->
						<div class="home-list-pop mar-bot-red-0">
							<!--POPULAR LISTINGS IMAGE-->
							<div class="col-md-3"> <img src="<?php echo base_url('/assets/images/services/s8.jpg'); ?>" alt="" /> </div>
							<!--POPULAR LISTINGS: CONTENT-->
							<div class="col-md-9 home-list-pop-desc"> <a href="list-lead.html"><h3>Health and Fitness</h3></a>
								<h4>Express Avenue Mall, San Diego</h4>
								<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
										<li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
										<li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
										<li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--CREATE FREE ACCOUNT-->
	<section class="com-padd sec-bg-white com-padd-redu-top">
		<div class="container">
			<div class="row">
				<div class="com-title">
					<h2>Create a free <span>Account</span></h2>
					<p>Explore some of the best tips from around the world from our partners and friends.</p>
				</div>
				<div class="col-md-6">
					<div class="hom-cre-acc-left">
						<h3>A few reasons you’ll love Online <span>Business Directory</span></h3>
						<p>5 Benefits of Listing Your Business to a Local Online Directory</p>
						<ul>
							<li> <img src="<?php echo base_url('/assets/images/icon/7.png'); ?>" alt="">
								<div>
									<h5>Enhancing Your Business</h5>
									<p>Imagine you have made your presence online through a local online directory, but your competitors have..</p>
								</div>
							</li>
							<li> <img src="<?php echo base_url('/assets/images/icon/5.png'); ?>" alt="">
								<div>
									<h5>Advertising Your Business</h5>
									<p>Advertising your business to area specific has many advantages. For local businessmen, it is an opportunity..</p>
								</div>
							</li>
							<li> <img src="<?php echo base_url('/assets/images/icon/6.png'); ?> " alt="">
								<div>
									<h5>Develop Brand Image</h5>
									<p>Your local business too needs brand management and image making. As you know the local market..</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="hom-cre-acc-left hom-cre-acc-right">
						<form action="<?php echo base_url();?>index.php/Register/insert_user" method="post">
							<div class="row">
								<div class="input-field col s12">
									<input id="acc-name" name="username" type="text" class="validate">
									<label for="acc-name">Username</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="acc-mail" name="email" type="email" class="validate">
									<label for="acc-mail">Email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
								<select name="category">
									<option value = "user" selected>User</option>
									<option value = "vendor">Vendor</option>
								</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="acc-pass" name="password" type="password" class="validate">
									<label for="acc-pass">Password</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="acc-pass" name="confirmpassword" type="password" class="validate">
									<label for="acc-pass">Confirm Password</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12 hom-cr-acc-check">
									<input type="checkbox" id="test5" />
									<label for="test5">By signing up, you agree to the Terms and Conditions and Privacy Policy. You also agree to receive product-related emails.</label>
								</div>
							</div>
							<div class="row">
							<input type="submit" value="Register" style="background:rgb(217,83,79);" name="save" class="btn-danger btn-block">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--MOBILE APP-->
	<section class="web-app com-padd com-padd-redu-top">
		<div class="container">
			<div class="row">
				<div class="col-md-6 web-app-img"> <img src="<?php echo base_url('/assets/images/mobile.png'); ?>" alt="" /> </div>
				<div class="col-md-6 web-app-con">
					<h2>Looking for the Best Service Provider? <span>Get the App!</span></h2>
					<ul>
						<li><i class="fa fa-check" aria-hidden="true"></i> Find nearby listings</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Easy service enquiry</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Listing reviews and ratings</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Manage your listing, enquiry and reviews</li>
					</ul> <span>We'll send you a link, open it on your phone to download the app</span>
					<form>
						<ul>
							<li>
								<input type="text" placeholder="+01" /> </li>
							<li>
								<input type="number" placeholder="Enter mobile number" /> </li>
							<li>
								<input type="submit" value="Get App Link" /> </li>
						</ul>
					</form>
					<a href="#"><img src="<?php echo base_url('/assets/images/android.png'); ?>" alt="" /> </a>
					<a href="#"><img src="<?php echo base_url('/assets/images/apple.png'); ?>" alt="" /> </a>
				</div>
			</div>
		</div>
	</section>
	<!--FOOTER SECTION-->
	<footer id="colophon" class="site-footer clearfix">
		<div id="quaternary" class="sidebar-container " role="complementary">
			<div class="sidebar-inner">
				<div class="widget-area clearfix">
					<div id="azh_widget-2" class="widget widget_azh_widget">
						<div data-section="section">
							<div class="container">
								<div class="row">
									<div class="col-sm-4 col-md-3 foot-logo"> <img src="<?php echo base_url('/assets/images/foot-logo.png'); ?>" alt="logo">
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
											<li> <a href="<?php echo base_url('/index.php/register'); ?>">Register</a> </li>
											<li> <a href="<?php echo base_url('/index.php/login'); ?>">Login</a> </li>
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
										<p class="hasimg"> <img src="<?php echo base_url('/assets/images/payment.png'); ?>" alt="payment"> </p>
									</div>
									<div class="col-sm-4">
										<h4>Address</h4>
										<p>Main Road Nagan Chowrangi , North Karachi , District Central , Karachi , Pakistan</p>
										<p> <span class="strong">Phone: </span> <span class="highlighted">+923423351437</span> </p>
									</div>
									<div class="col-sm-5 foot-social">
										<h4>Follow with us</h4>
										<p>Join the thousands of other There are many variations of passages of services available</p>
										<ul>
											<li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
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
		<!-- REQUIREMENT Popup END -->
		<div class="req-pop">
			<div class="req-pop-in">
				<div class="req-pop-lhs">
					<h4>Why should I fill this?</h4>
					<ul>
						<li>
							<img src="<?php echo base_url('/assets/images/icon/d1.png'); ?>" alt="">
							<p>Receive advertiser details instantly</p>
						</li>
						<li>
							<img src="<?php echo base_url('/assets/images/icon/d2.png'); ?>" alt="">
							<p>Discover new projects/properties to <br>your liking via email/sms</p>
						</li>
						<li>
							<img src="<?php echo base_url('/assets/images/icon/d3.png'); ?> " alt="">
							<p>Our experts will get in touch to help<br> you out when required</p>
						</li>
					</ul>
				</div>
				<div class="req-pop-rhs">
					<i class="fa fa-times req-pop-clo"></i>
					<!---===SECTION 1===--->
					<div class="req-pop-sec-1">
						<h2>What you looking for?</h2>
						<p>Choose your category what you looking for</p>
						<div class="v8-chbox">
							<form>
								<ul>
									<li>
									  <input type="checkbox" id="look-1">
									  <label for="look-1">Hotel room booking</label>
									</li>
									<li>
									  <input type="checkbox" id="look-2">
									  <label for="look-2">Realestates</label>
									</li>
									<li>
									  <input type="checkbox" id="look-3">
									  <label for="look-3">Hospitals</label>
									</li>
									<li>
									  <input type="checkbox" id="look-4">
									  <label for="look-4">Property buy, sell & rent</label>
									</li>
									<li>
									  <input type="checkbox" id="look-5">
									  <label for="look-5">Automobiles</label>
									</li>
									<li>
									  <input type="checkbox" id="look-6">
									  <label for="look-6">Tution centeres</label>
									</li>
									<li>
									  <input type="checkbox" id="look-7">
									  <label for="look-7">Spa and massage centeres</label>
									</li>
									<li>
									  <input type="checkbox" id="look-8">
									  <label for="look-8">IT training centers</label>
									</li>
									<li>
									  <input type="checkbox" id="look-9">
									  <label for="look-9">Sports training</label>
									</li>
									<li>
									  <input type="checkbox" id="look-10">
									  <label for="look-10">Cab booking services</label>
									</li>
									<li>
									  <input type="checkbox" id="look-11">
									  <label for="look-11">Bike and car mechanics</label>
									</li>
									<li>
									  <input type="checkbox" id="look-12">
									  <label for="look-12">Home appliances</label>
									</li>
								</ul>
							</form>
						</div>
						<span class="req-nxt req-nxt-1">Next</span>
					</div>
					<!---===END SECTION 1===--->
					<!---===SECTION 2===--->
					<div class="req-pop-sec-2">
						<h2>Fill this form</h2>
						<p>Choose your category what you looking for</p>
						<div class="v8-inputs">
							<form>
								<ul>
									<li>
									  <input type="textbox" placeholder="Enter your name" required>
									</li>
									<li>
									  <input type="textbox" placeholder="Enter your email">
									</li>
									<li>
									  <input type="textbox" placeholder="Enter your mobile number">
									</li>
									<li>
									  <span class="rer-sub-btn">Submit</span>
									</li>
								</ul>
							</form>
						</div>
						<span class="req-nxt req-nxt-1">Next</span>
					</div>
					<!---===END SECTION 2===--->
					<!---===SECTION 2===--->
					<div class="req-pop-sec-3">
						<div>
							<h2>Success!</h2>
							<p>Thanks for contacting us! We will get in touch with you shortly</p>
							<img src="<?php echo base_url('/assets/images/thank-you.png'); ?>">
						</div>
					</div>
					<!---===END SECTION 2===--->
				</div>
			</div>
		</div>
		<!-- REQUIREMENT Popup END -->		
	</section>
	<!--SCRIPT FILES-->
	<script src="<?php echo base_url('/assets/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/js/bootstrap.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('/assets/js/materialize.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('/assets/js/custom.js'); ?>"></script>
</body>
</html>