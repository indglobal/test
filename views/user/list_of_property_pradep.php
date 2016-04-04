<!DOCTYPE html>
<html>
<head>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book My Plot</title>
	<!-- Bootstrap css links -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/css/bootstrap-theme.min.css">
	<!-- font-awesome css links -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/jquery.material.form.css">
	<style type="text/css">
		.ui-slider-range.ui-widget-header.ui-corner-all {
    background: #4AAEDF !important;
     color: #4AAEDF !important; 
}
div#slider-range {
    max-height: 7px;
    background: #ebebeb;
}
span.ui-slider-handle.ui-state-default.ui-corner-all {
    width: 17px;
    border-radius: 10px;
    height: 17px;
    box-shadow: 0px 2px 1px 0px #a4a4a4;
    margin-top: -2px;
    outline: none;
}
	/*.priceRange{
	    width: 100%;
	}
	.amount1 {
	    float: right;
	    width: 15%;
	}
	.amount {
	    width: 32%;
	    float: left;
	}*/
</style>

</head>
<body>


<!-- header starts here -->
	<?php //include_once('header.php'); 
	include_once(APPPATH.'libraries/header.php');
	?>
<!-- header ends here -->

<!--ListingFirst Section Starts here-->
	<div class="container-fluid MainHeaderImg">
		<div class="container">
			<div class="HeaderText">
				<h2>BIGGEST LAND AND PLOT LISTING WITH BIG SAVING</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.  </p>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="PropertyListing">
				<div class="row">
					<ul>
						<li class="">
							<h5>TYPE OF PROPERTY</h5>
							<select class="form-control PropertySelection">
								<option>Select property type</option>
								<option>Agency Leasing</option>
								<option>Retail</option>
								<option>Residential</option>
								<option>5</option>
							</select>
						</li>
						<li class="">
							<h5>PROPERTY LOCATION</h5> 
							<select class="form-control PropertySelection">
								<option>Select preffered locality</option>
								<option>Bangalore</option>
								<option>Pune</option>
								<option>Chennai</option>
								<option>5</option>
							</select>
						</li>
						<li class="">
							<h5>PROPERTY STATUS</h5>
							<select class="form-control PropertySelection">
								<option>Select preffered locality</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</li>
						<li class="">
							<!-- <h5>PROPERTY PRICE</h5>
							<div id="slider-range"></div><br>
								<div class="row">
									<div class="priceRange">
									  	<label for="amount">Price range:</label>
  										<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
									 </div>
							</div> -->

						</li>
						<li class=""><button class="btn btn-Listing">APPLY</button></li>
					</ul>


				</div>
			</div>
		</div>
<!--ListingFirst Section ends here-->

<!--Second Section Starts here-->
	<div class="MainSecondSection">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="MainListingleftSection">
						<h4>7 RESULTS FOUND NEAR BELLANDUR</h4>
						<div class="smallMap">
							<a href="javascript:void(0);"><i class="fa fa-map-o"></i> Show Map</a>
						</div>
						
						<div class="clear"></div>
						
					</div>
					<div class="googlemaps">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.66007678024!2d77.35073455584109!3d12.954517010195083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka+560001!5e0!3m2!1sen!2sin!4v1453550974658" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>

					<div class="PropertyListingPage ListingBox"><!--Property Listing starts here-->
						<div class="row">
							<div class="col-md-4" style="padding:0;">
								
									<div id="carousel-example-generic" class="carousel slide Imgfixed ListingImages" data-ride="carousel">
										<!-- Indicators -->
											<!--  <ol class="carousel-indicators">
											    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
											    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
											    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
											</ol> -->

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
											    <div class="item active">
											      	<img src="<?php echo base_url();?>bookmyplot_design/images/aq.jpg" alt="...">
											    <div class="carousel-caption">
											        
												</div>
												</div>
												<div class="item">
												    <img src="<?php echo base_url();?>bookmyplot_design/images/aq.jpg" alt="...">
												    <div class="carousel-caption">
												        
												    </div>
												</div>
											   
											</div>

											  <!-- Controls -->
											  <a class="left" href="#carousel-example-generic" role="button" data-slide="prev">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="right" href="#carousel-example-generic" role="button" data-slide="next">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
											    <span class="sr-only">Next</span>
											  </a>
									</div>
								
							</div>
							<div class="col-md-2 text-center" style="padding:0;border-right: 2px solid #ccc;">
								<div class="DeveloperContent">
									<h5>DEVELOPER</h5>
									<div class="builderLogo">
										<img src="<?php echo base_url();?>bookmyplot_design/images/builderlogo.jpg" width="80%">
									</div>
								</div>
								<div class="Intrested">
									<h5>INTRESTED</h5>
									<div class="Intrestedpeople text-center">
										<h3>25</h3>
									</div>
									<h5>PEOPLE</h5>
								</div>
							</div>
							<div class="col-md-6" style="padding:0;">
								<div class="InnerListingWoods">
									<div class="row">
										<div class="col-sm-8">
											<h3>Aakruthi Green Woods</h3>
											<div class="propertyrupees">
												<h4><i class="fa fa-inr"></i> 33.0 Lacs <i class="fa fa-inr"></i> 1750/Sqft</h4>
											</div>
											<div class="Starrating  text-left">
												<i class="fa fa-star rate1"></i>
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rating"></i> 
												<div class="Reviews">
													<a href="javascript:void(0)">32 Reviews</a>
												</div>
											</div>
											<div class="clear"></div>
											<i class="fa fa-map-marker"></i> Near Jigani
										</div>
										<div class="col-sm-4" style="padding:0;">
											<button class="btn btn-joinGroup" data-toggle="modal" data-target="#myModal12"><i class="fa fa-users"></i> Join Group</button>
										</div>
										<div class="ForBest text-right">For Best Deals <i class="fa fa-que fa-question-circle"></i></div>
									</div>
								</div>
								<button class="btn btn-ViewDetails">View Details</button>
							</div>
						</div>
					</div><!--Property Listing ends here-->
					<div class="PropertyListingPage ListingBox"><!--Property Listing starts here-->
						<div class="row">
							<div class="col-md-4" style="padding:0;">
								
									<div id="carousel-example-generic1" class="carousel slide Imgfixed ListingImages" data-ride="carousel">
										<!-- Indicators -->
											<!--  <ol class="carousel-indicators">
											    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
											    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
											    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
											</ol> -->

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
											    <div class="item active">
											      	<img src="<?php echo base_url();?>bookmyplot_design/images/banner-img.jpg" alt="...">
											    <div class="carousel-caption">
											        
												</div>
												</div>
												<div class="item">
												    <img src="<?php echo base_url();?>bookmyplot_design/images/aq.jpg" alt="...">
												    <div class="carousel-caption">
												        
												    </div>
												</div>
											   
											</div>

											  <!-- Controls -->
											  <a class="left" href="#carousel-example-generic1" role="button" data-slide="prev">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="right" href="#carousel-example-generic1" role="button" data-slide="next">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
											    <span class="sr-only">Next</span>
											  </a>
									</div>
								
							</div>
							<div class="col-md-2 text-center" style="padding:0;">
								<div class="DeveloperContent">
									<h5>DEVELOPER</h5>
									<div class="builderLogo">
										<img src="<?php echo base_url();?>bookmyplot_design/images/builderlogo.jpg" width="80%">
									</div>
								</div>
								<div class="Intrested">
									<h5>INTRESTED</h5>
									<div class="Intrestedpeople text-center">
										<h3>25</h3>
									</div>
									<h5>PEOPLE</h5>
								</div>
							</div>
							<div class="col-md-6 fixedlistingtexts" style="padding:0;">
								<div class="InnerListingWoods">
									<div class="row">
										<div class="col-sm-8">
											<h3>Aakruthi Green Woods</h3>
											<div class="propertyrupees">
												<h4><i class="fa fa-inr"></i> 33.0 Lacs <i class="fa fa-inr"></i> 1750/Sqft</h4>
											</div>
											<div class="Starrating  text-left">
												<i class="fa fa-star rate1"></i>
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rating"></i> 
												<div class="Reviews">
													<a href="javascript:void(0)">32 Reviews</a>
												</div>
											</div>
											<div class="clear"></div>
											<i class="fa fa-map-marker"></i> Near Jigani
										</div>
										<div class="col-sm-4" style="padding:0;">
											<button class="btn btn-joinGroup" data-toggle="modal" data-target="#myModal12"><i class="fa fa-users"></i> Join Group</button>
										</div>
										<div class="ForBest text-right">For Best Deals <i class="fa fa-que fa-question-circle"></i></div>
									</div>
								</div>
								<button class="btn btn-ViewDetails">View Details</button>
							</div>
						</div>
					</div><!--Property Listing ends here-->

					<div class="advertise">
						<img src="<?php echo base_url();?>bookmyplot_design/images/qa.jpg" width="100%">
					</div>


					<div class="PropertyListingPage ListingBox"><!--Property Listing starts here-->
						<div class="row">
							<div class="col-md-4" style="padding:0;">
								
									<div id="carousel-example-generic2" class="carousel slide Imgfixed ListingImages" data-ride="carousel">
										<!-- Indicators -->
											<!--  <ol class="carousel-indicators">
											    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
											    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
											    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
											</ol> -->

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
											    <div class="item active">
											      	<img src="<?php echo base_url();?>bookmyplot_design/images/aq.jpg" alt="...">
											    <div class="carousel-caption">
											        
												</div>
												</div>
												<div class="item">
												    <img src="<?php echo base_url();?>bookmyplot_design/images/aq.jpg" alt="...">
												    <div class="carousel-caption">
												        
												    </div>
												</div>
											   
											</div>

											  <!-- Controls -->
											  <a class="left" href="#carousel-example-generic2" role="button" data-slide="prev">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="right" href="#carousel-example-generic2" role="button" data-slide="next">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
											    <span class="sr-only">Next</span>
											  </a>
									</div>
									
								
							</div>
							<div class="col-md-2 text-center" style="padding:0;border-right: 2px solid #ccc;">
								<div class="DeveloperContent">
									<h5>DEVELOPER</h5>
									<div class="builderLogo">
										<img src="<?php echo base_url();?>bookmyplot_design/images/builderlogo.jpg" width="80%">
									</div>
								</div>
								<div class="Intrested">
									<h5>INTRESTED</h5>
									<div class="Intrestedpeople text-center">
										<h3>25</h3>
									</div>
									<h5>PEOPLE</h5>
								</div>
							</div>
							<div class="col-md-6" style="padding:0;">
								<div class="InnerListingWoods">
									<div class="row">
										<div class="col-sm-8">
											<h3>Aakruthi Green Woods</h3>
											<div class="propertyrupees">
												<h4><i class="fa fa-inr"></i> 33.0 Lacs <i class="fa fa-inr"></i> 1750/Sqft</h4>
											</div>
											<div class="Starrating  text-left">
												<i class="fa fa-star rate1"></i>
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rating"></i> 
												<div class="Reviews">
													<a href="javascript:void(0)">32 Reviews</a>
												</div>
											</div>
											<div class="clear"></div>
											<i class="fa fa-map-marker"></i> Near Jigani
										</div>
										<div class="col-sm-4" style="padding:0;">
											<button class="btn btn-joinGroup" data-toggle="modal" data-target="#myModal12"><i class="fa fa-users"></i> Join Group</button>
										</div>
										<div class="ForBest text-right">For Best Deals <i class="fa fa-que fa-question-circle"></i></div>
									</div>
								</div>
								<button class="btn btn-ViewDetails">View Details</button>
							</div>
						</div>
					</div><!--Property Listing ends here-->

					
				</div>

				<div class="col-md-3"><!--Right Section Starts here-->
					<div class="RightSectionSecondPart"><!--RightSectionSecondPart starts here-->
						<!-- <div class="RightBgColor">
							<div class="GreenRightText">
								<h4>Green Woods Community People</h4>
							</div>

							<div class="UserProfileListing">
								<div class="row">
									<div class="col-sm-2 RoundImg">
										<img src="images/round.png" alt="round">
									</div>
									<div class="col-sm-9 col-sm-offset-1">
										<h4>Sanjay Balkrishnan</h4>
										<p>Manager at Infosys Bangalore</p>
									</div>
								</div>	
							</div>
							<div class="UserProfileListing">
								<div class="row">
									<div class="col-sm-2 RoundImg">
										<img src="images/round.png" alt="round">
									</div>
									<div class="col-sm-9 col-sm-offset-1">
										<h4>Sanjay Balkrishnan</h4>
										<p>Manager at Infosys Bangalore</p>
									</div>
								</div>	
							</div>
							<div class="UserProfileListing">
								<div class="row">
									<div class="col-sm-2 RoundImg">
										<img src="images/round.png" alt="round">
									</div>
									<div class="col-sm-9 col-sm-offset-1">
										<h4>Sanjay Balkrishnan</h4>
										<p>Manager at Infosys Bangalore</p>
									</div>
								</div>	
							</div>
							<div class="UserProfileListing">
								<div class="row">
									<div class="col-sm-2 RoundImg">
										<img src="images/round.png" alt="round">
									</div>
									<div class="col-sm-9 col-sm-offset-1">
										<h4>Sanjay Balkrishnan</h4>
										<p>Manager at Infosys Bangalore</p>
									</div>
								</div>	
							</div>

						</div> -->

					</div><!--RightSectionSecondPart ends here-->
					<div class="SmallAdvertise">
						<img src="<?php echo base_url();?>bookmyplot_design/images/qaa.jpg" width="100%">
					</div>
				</div><!--Right Section ends here-->
			</div>
		</div>
	</div>
<!--Second Section ends here-->

<!-- footer starts here -->
	<?php //include_once('footer.php'); 
	include_once(APPPATH.'libraries/footer.php');
	?>
<!-- footer ends here-->

	<!-- jquery library js link -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/jquery-1.11.3.min.js"></script>
	<!-- bootstrap library js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- jquery ui js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/jquery-ui-1.11.4/jquery-ui.js"></script>
	<script>
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>
	<!-- label js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/js/jquery.material.form.js"></script>
	
  <script type="text/javascript">
  	$(document).ready(function(){
  		$('.googlemaps').hide();
  		$('.smallMap').click(function(){
  			$('.googlemaps').toggle();
  		});
  	});
  </script>
  <script type="text/javascript">
	$(function(){
		$('form.material').materialForm(); // Apply material
		$('form').validate({ 
			errorPlacement: function(error, element) {}
		}); // Apply validator with no error messages but classes only
	});
</script>

</body>
</html>











