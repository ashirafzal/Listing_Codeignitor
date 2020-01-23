<?php

	foreach($all_data as $data){
	
		$userid = $data->id;
		$username = $data->username;
		$useremail = $data->email;
		$usercategory = $data->category;

		break;
	}	
?>
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
						<a href="<?php echo base_url('')?>"><img src="<?php echo base_url('assets/images/aff-logo.png');?>" alt=""> </a>
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
                    <!--SECTION: BROWSE CATEGORY(NOTE:IT'S HIDE ON MOBILE & TABLET VIEW)-->
					<div class="ts-menu-2"><a href="#" style="font-size:1.5rem" class="t-bb"><?php echo $username?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
						<!--SECTION: BROWSE CATEGORY-->
						<div class="cat-menu cat-menu-1">
							<div class="dz-menu">
								<div class="dz-menu">
									<a style="color:#000;" href="<?php echo base_url();?>index.php/logout">Logout</a>
								</div>								
							</div>
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
							<a href="dashboard.html" class="tz-lma"><img src="<?php echo base_url('assets/images/icon/dbl1.png')?>" alt="" /> My Dashboard</a>
						</li>
						<li>
							<a href="db-all-listing.html"><img src="<?php echo base_url('assets/images/icon/dbl2.png')?>" alt="" /> All Listing</a>
						</li>
						<li>
							<a href="db-listing-add.html"><img src="<?php echo base_url('assets/images/icon/dbl3.png')?>" alt="" /> Add New Listing</a>
						</li>
						<li>
							<a href="db-message.html"><img src="<?php echo base_url('assets/images/icon/dbl14.png')?>" alt="" /> Messages(12)</a>
						</li>
						<li>
							<a href="db-review.html"><img src="<?php echo base_url('assets/images/icon/dbl13.png')?>" alt="" /> Reviews(05)</a>
						</li>
						<li>
							<a href="db-my-profile.html"><img src="<?php echo base_url('assets/images/icon/dbl6.png')?>" alt="" /> My Profile</a>
						</li>
						<li>
							<a href="db-post-ads.html"><img src="<?php echo base_url('assets/images/icon/dbl11.png')?>" alt="" /> Ad Summary</a>
						</li>
						<li>
							<a href="db-payment.html"><img src="<?php echo base_url('assets/images/icon/dbl9.png')?>" alt=""> Check Out</a>
						</li>
						<li>
							<a href="db-invoice-all.html"><img src="<?php echo base_url('assets/images/icon/db21.png')?>" alt="" /> Invoice</a>
						</li>						
						<li>
							<a href="db-claim.html"><img src="<?php echo base_url('assets/images/icon/dbl7.png')?>" alt="" /> Claim & Refund</a>
						</li>
						<li>
							<a href="db-setting.html"><img src="<?php echo base_url('assets/images/icon/dbl210.png')?>" alt="" /> Setting</a>
						</li>
						<li>
							<a href="#!"><img src="<?php echo base_url('assets/images/icon/dbl12.png')?>" alt="" /> Log Out</a>
						</li>
					</ul>
				</div>
			</div>
			<!--CENTER SECTION-->
			<div class="tz-2">
				<div class="tz-2-com tz-2-main">
					<h4>Manage Booking</h4>
					<div class="tz-2-main-com">
						<div class="tz-2-main-1">
							<div class="tz-2-main-2"> <img src="<?php echo base_url('assets/images/icon/d1.png')?>" alt="" /><span>All Listings</span>
								<p>Total no of listings</p>
								<h2>04</h2> </div>
						</div>
						<div class="tz-2-main-1">
							<div class="tz-2-main-2"> <img src="<?php echo base_url('assets/images/icon/d2.png')?>" alt="" /><span>Review</span>
								<p>Total no of reviews</p>
								<h2>69</h2> </div>
						</div>
						<div class="tz-2-main-1">
							<div class="tz-2-main-2"> <img src="<?php echo base_url('assets/images/icon/d3.png')?>" alt="" /><span>Messages</span>
								<p>Total no of messages</p>
								<h2>53</h2> </div>
						</div>
					</div>
					<div class="db-list-com tz-db-table">
						<div class="ds-boar-title">
							<h2>Listings</h2>
							<p>All the Lorem Ipsum generators on the All the Lorem Ipsum generators on the</p>
						</div>
						<table class="responsive-table bordered">
							<thead>
								<tr>
									<th>Listing Name</th>
									<th>Date</th>
									<th>Rating</th>
									<th>Views</th>
									<th>Status</th>
									<th>Edit</th>
									<th>Delete</th>
									<th>Preview</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Taj Luxury Hotel</td>
									<td>12 Jan 2019</td>
									<td><span class="db-list-rat">4.2</span></td>
									<td><span class="db-list-rat">76</span></td>
									<td><span class="db-list-ststus">Active</span></td>
									<td><a href="db-listing-edit.html" class="db-list-edit">Edit</a></td>
									<td><a href="db-listing-edit.html" class="db-list-edit">Delete</a></td>
									<td><a href="listing-details.html" class="db-list-edit" target="_blank"><i class="fa fa-eye"></i></a></td>
								</tr>
								<tr>
									<td>Pearl Perfumes</td>
									<td>04 Mar 2019</td>
									<td><span class="db-list-rat">4.2</span></td>
									<td><span class="db-list-rat">232</span></td>
									<td><span class="db-list-ststus-na">Inactive</span></td>
									<td><a href="db-listing-edit.html" class="db-list-edit">Edit</a></td>
									<td><a href="db-listing-edit.html" class="db-list-edit">Delete</a></td>
									<td><a href="listing-details.html" class="db-list-edit" target="_blank"><i class="fa fa-eye"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="db-list-com tz-db-table">
						<div class="ds-boar-title">
							<h2>Payment & analytics</h2>
							<p>All the Lorem Ipsum generators on the All the Lorem Ipsum generators on the</p>
						</div>
						<table class="responsive-table bordered">
							<thead>
								<tr>
									<th>Listing Name</th>
									<th>Views(week)</th>
									<th>Payment</th>
									<th>Listing Type</th>
									<th>Make Payment</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Taj Luxury Hotel & Resorts</td>
									<td>142</td>
									<td><span class="db-list-rat">Done</span>
									</td>
									<td><span class="db-list-ststus">Premium</span>
									</td>
									<td><a href="db-payment.html" class="db-list-edit">Payment</a>
									</td>
								</tr>
								<tr>
									<td>Joney Health and Fitness</td>
									<td>53</td>
									<td><span class="db-list-rat">Done</span>
									</td>
									<td><span class="db-list-ststus-na">Free</span>
									</td>
									<td><a href="db-payment.html" class="db-list-edit">Payment</a>
									</td>
								</tr>
								<tr>
									<td>Effi Furniture Dealers</td>
									<td>76</td>
									<td><span class="db-list-ststus-na">No</span>
									</td>
									<td><span class="db-list-ststus-na">Free</span>
									</td>
									<td><a href="db-payment.html" class="db-list-edit">Payment</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="db-list-com tz-db-table">
						<div class="ds-boar-title">
							<h2>Messages</h2>
							<p>All the Lorem Ipsum generators on the All the Lorem Ipsum generators on the</p>
						</div>
						<div class="tz-mess">
							<ul>
								<li class="view-msg">
									<h5><img src="<?php echo base_url('assets/images/users/1.png')?>" alt="" />Listing Enquiry <span class="tz-msg-un-read">unread</span></h5>
									<p>Nulla egestas leo elit, eu sollicitudin diam suscipit non. Nunc imperdiet hendrerit mi, mollis sagittis risus accumsan ac.</p>
									<div class="hid-msg"><a href="#"><i class="fa fa-eye" title="view"></i></a><a href="#"><i class="fa fa-trash" title="delete"></i></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="db-list-com tz-db-table">
						<div class="ds-boar-title">
							<h2>Reviews</h2>
							<p>All the Lorem Ipsum generators on the All the Lorem Ipsum generators on the</p>
						</div>
						<div class="tz-mess">
							<ul>
								<li class="view-msg">
									<h5><img src="<?php echo base_url('assets/images/users/1.png')?>" alt="" />Jessica <span class="tz-revi-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span></h5>
									<p>Cras viverra ligula ut sem tincidunt, et volutpat dui facilisis. Nulla congue arcu vitae lectus cursus finibus. Pellentesque consequat ante eu elit tincidunt pharetra.</p>
									<div class="hid-msg"><a href="#!"><i class="fa fa-check" title="approve this review"></i></a><a href="#!"><i class="fa fa-edit" title="edit"></i></a><a href="#!"><i class="fa fa-trash" title="delete"></i></a><a href="#!"><i class="fa fa-reply edit-replay" title="replay"></i></a>
										<form class="col s12 hide-box">
											<div class="">
												<div class="input-field col s12">
													<textarea class="materialize-textarea"></textarea>
													<label>Write your replay</label>
												</div>
												<div class="input-field col s12">
													<input type="submit" value="Submit" class="waves-effect waves-light btn-large"> </div>
											</div>
										</form>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--RIGHT SECTION-->
			<div class="tz-3">
				<h4>Notifications()</h4>
				<ul>
					<li>
						<a href="#!"> <img src="<?php echo base_url('assets/images/icon/dbr1.jpg')?>" alt="" />
							<h5>Joseph, write a review</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!--END DASHBOARD-->
	<!--MOBILE APP-->
	<section class="web-app com-padd">
		<div class="container">
			<div class="row">
				<div class="col-md-6 web-app-img"> <img src="<?php echo base_url('assets/images/mobile.png')?>" alt="" /> </div>
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
					<a href="#"><img src="<?php echo base_url('assets/images/android.png')?>" alt="" /> </a>
					<a href="#"><img src="<?php echo base_url('assets/images/apple.png')?>" alt="" /> </a>
				</div>
			</div>
		</div>
	</section>