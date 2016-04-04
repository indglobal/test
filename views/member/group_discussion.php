<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book My Plot</title>

	<!---datatable css-->
<link href="<?php echo base_url();?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

	<!-- Bootstrap css links -->
	<link href="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<!-- font-awesome css links -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/jquery.material.form.css">
	<!-- Add fancyBox main JS and CSS files -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/jquery.fancybox.css" media="screen" />

	<style>
		
		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
			position: relative;
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }

		#ex2 img:hover { cursor: url(grab.cur), default; }
		#ex2 img:active { cursor: url(grabbed.cur), default; }
	</style>

</head>
<body>
	<!-- menu starts here -->
	<div class="container-fluid StikyHeader">
		<div class="container">
			<div class="TopHeader1 paddigTop">
				<div class="row">
					<div class="col-md-3" style="padding:0">
						<div class="logo">
							<a href="index.php"><img src="<?php echo base_url();?>bookmyplot_design/images/logo.png" alt="logo"></a>
						</div>
					</div>
					<div class="col-md-6" style="padding:0">
						<select class="form-control locality">
						  <option>Select preffered locality</option>
						  <option>Mumbai</option>
						  <option>Bangalore</option>
						  <option>Pune</option>
						  <option>Belgaum</option>
						</select>
						<label class="localityText">Budget</label>
						<select class="form-control localityMin">
						  <option>Min</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
						<select class="form-control localityMin">
						  <option>Max</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
						<button class="btn btn-Search glyphicon glyphicon-th-large"> Search</button>
					</div>
					<div class="col-md-3" style="padding:0">
						<select class="form-control City">
						  <option>Select City</option>
						  <option>Bangalore</option>
						  <option>Pune</option>
						  <option>Chennai</option>
						  <option>Mumbai</option>
						</select>
						<?php if($logged_in=="TRUE"){ 
                               //if($this->session->userdata('logged_in')=="TRUE"){
							?>
						<div class="col-md-2 marginTop">
							<!--<span class="colorWhite">Login</span><span class="colorWhite"> |</span> <span class="colorWhite">Sign Up</span>-->
				<a href="<?php echo site_url('user/user_logout');?>"><button class="btn btn-login_Signup">Logout</button></a>

						</div>
						<?php }elseif($logged_in==""){ 
							  // }elseif($this->session->userdata('logged_in')==""){
							?>
						<div class="SmallRightdiv">
							<button class="btn btn-login_Signup" data-toggle="modal" data-target="#myModal">Login / SignUp</button>
						</div>
						<?php }?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- menu ends here -->
<?php //include_once('modals.php'); 
include_once(APPPATH.'libraries/modals.php');?>


<!-- header starts here -->
	<?php //include_once('header.php'); 
	//include_once(APPPATH.'libraries/header.php');?>
<!-- header ends here -->

<!--First Section Starts here-->
	<div class="FirstMainSection">
			<div class="container">
				<ol class="breadcrumb">
				  	<li><a href="#">Home</a></li>
				  	<li><a href="#">East Bangalore</a></li>
				  	<li><a href="#">Residential Plots</a></li>
				  	<li><a href="#">BSR Developers</a></li>
				  	<li class="active">Green Woods</li>
				</ol>
			</div>
			<div class="BannerText1">
				<div class="container">
					<div class="row">
						<div class="col-md-9 BannerText">
							<h2>Aakruthi Green Woods <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></h2>
							<h4><?php echo $getSpecific_project_detail['0']['address_pro'];?></h4>
							<span class="badge BSR">Developer : <?php echo $getSpecific_developer_detail['0']['dev_name'];?></span>
						</div>
						<div class="col-md-3 text-center groupplots">
							<div class="Innerplots">
								<h4>200 PLOTS ON GROUP PURCHASE DEAL</h4>
							</div>
							<div class="Innerplots">
								<h1>100+</h1>
								<h4>BOOKED</h4>
							</div>
							<div class="Innerplots">
								<h1>90+</h1>
								<h4>AVAILABLE</h4>
							</div>
							<button class="btn btn-viewplot">VIEW PLOTS</button>
						</div>
					</div>
				</div>
				
			</div>
			<div class="propertyMenu">
				<div class="container">
					<div class="OverviewMenu">
						<div class="row">
						<!-- Nav tabs -->
						<!--   <ul class="nav nav-tabs col-md-9" style="padding-left:2%;" role="tablist">
						    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">OVERVIEW</a></li>
						    <li role="presentation"><a href="#gallery" aria-controls="profile" role="tab" data-toggle="tab">GALLERY</a></li>
						    <li role="presentation"><a href="#plots" aria-controls="messages" role="tab" data-toggle="tab">PLOTS</a></li>
						    <li role="presentation"><a href="#amenities" aria-controls="messages" role="tab" data-toggle="tab">AMENITIES</a></li>
						    <li role="presentation"><a href="#about" aria-controls="settings" role="tab" data-toggle="tab">ABOUT BUILDER</a></li>
						    <li role="presentation"><a href="#interestedpeople" aria-controls="settings" role="tab" data-toggle="tab">INTERESTED PEOPLE</a></li>
						    <li role="presentation"><a href="#location" aria-controls="messages" role="tab" data-toggle="tab">LOCATION MAP</a></li>
						    <li role="presentation"><a href="#reviews" aria-controls="settings" role="tab" data-toggle="tab">REVIEWS</a></li>
						  </ul> -->
						  <!-- <div class="col-md-3 StartFrmsmalldiv text-center">
						  	<p>Starts from</p>
						  	<h2><i class="fa fa-inr"></i> 33.0 Lacs <small><i class="fa fa-inr"></i> 1750/Sqft</small></h2>
						  </div> -->

						</div>
					</div>
				</div>
			</div>
			
	</div>
	
<!--First Section ends here-->
<!-- <div> -->


<!--Second Section start here-->
	<div class="MiddleSection">
		<div class="container">
			<div class="row">

				<div class="col-md-9"><!--LeftSection starts here-->
					<!-- Tab panes -->
					<div class="JoinNow text-center">
										<img src="<?php echo base_url();?>bookmyplot_design/images/join-us.png" align="middle" alt="join">
									</div>
						  <div class="tab-content">
						    <div role="tabpanel" class="tab-pane active" id="home">
								<div class="LeftSection"><!--LeftSection Image starts here-->						 
									
									<div class="PropertyContent"><!--PropertyContent starts here-->
										<div class="propertyTitle">
											<h3>PROPERTY OVERVIEW</h3>
										</div>

<!--sanjaymodel-->
<div class="modal fade" id="addtopic" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Join Group
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div id="success" class="success"></div>
                <!--<form role="form" id="uploadForm" enctype="multipart/form-data">-->
               <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                	<input type="hidden" class="form-control" name="group_id" value="<?php //echo $pro_id?>">
                 <div class="form-group">
                    <label for="exampleInputPassword1">First Name</label>
                      <input type="text" class="form-control" name="firstname"
                          id="firstname" placeholder="Please Enter First Name"/>
                  </div>
                  
                  <div class="checkbox">
                    <label>
                        <input type="checkbox"/> Check me out
                    </label>
                  </div>
                  <button type="submit_join_group" class="btn btn-default" id="submit_join_group">Submit</button>

                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                         Close
                </button>
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>





<!-- Post Info -->
<!--sanjaymymodal-->

<button class="btn btn-joinGroup" data-toggle="modal" data-target="#addtopic" data-id="">Add Topic</button>

<div class="tab-pane-active" id="receipt">
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="dataTables-example" width="100%">
    <thead>
       <tr>
        
            <th width="5%">id</th>
            <th width="30%">Topic</th>
            <th width="15%">Actions</th>          
        </tr>
    </thead>
    <tbody>
       
          <?php $i=1256; ?>
            <?php //foreach ($alldeveloper as $key): 
            //$dev_id=base64_encode($key['dev_id']);
            ?>
                <tr>

                <td><?php //echo $key['dev_id'];?></td>
                <td><?php //echo $key['dev_name'];?></td>
                

                
                <td><a title="if you want to update property details, click it" href="<?php //echo site_url('property/property_edit/'.$pro_id);?>" class="open-dialog-edit btn btn-info btn-rad" data-id=""><i class="icon-book"></i>Edit & View</a>
                    <a title="if you want to upload property images, click it" href="<?php //echo site_url('property/property_images_upload/'.$pro_id.'/'.$dev_id);?>" class="open-dialog-edit btn btn-success btn-rad" data-id=""><i class="icon-book"></i>Upload Image</a>
                </td>
                    <?php $i=$i+1; ?>
                
                </tr>
            <?php //endforeach ?>
    </tbody>
</table>
</div>

									
										<div class="PlotsAvailable"><!--PlotsAvailable starts here-->
											<div class="row">
												<center>
												<ul class="text-center">
														
														<li class="col-md-3 col-md-offset-1 col-sm-2 col-xs-2 text-center">
															<div class="InnerPlotsAvailable commplots">
																<h2>80</h2>
															</div>
															<h5>PLOTS AVAILABLE</h5>
														</li>
														<li class="col-md-3 col-md-offset-1 col-xs-2 text-center">
															<div class="InnerPlotsRange commplots">
																<h4>1.2K-3.4K</h4>
															</div>
															<h5>PLOTS RANGE</h5>
														</li>
														<li class="col-md-3 col-md-offset-1 col-xs-2 text-center">
															<div class="InnerCompletedate commplots">
																<h2>48</h2>
															</div>
															<h5>PLOTS BOOKED</h5>
														</li>
														
												</ul>
												</center>
											</div>
										</div><!--PlotsAvailable ends here-->
										
									</div><!--PropertyContent ends here-->
									
								</div> <!--LeftSection Image ends here-->
							
						    </div>
						    <div role="tabpanel" class="tab-pane" id="gallery"><!--TabTwo starts here-->
								<div class="photoGallery PropertyContent">
									<div class="propertyaboutTitle">
										<h3>GALLERY</h3>
									</div>
									<div class="PhotoGalleryTitle">
										<h3>Photos</h3>
										<center>
											<?php foreach ($getSpecific_project_images as $img_value) {
												//print_r($img_value['property_images']);
                                                             ?>
<a class="fancybox" href="<?php echo base_url().''.$img_value['property_images'];?>" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?php echo base_url().''.$img_value['property_images'];?>" alt="" /></a>

										<?php 	} ?>
											<p>
												<!-- <a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/1_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?php echo base_url();?>bookmyplot_design/images/1_s.jpg" alt="" /></a>

												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/2_b.jpg" data-fancybox-group="gallery" title="Etiam quis mi eu elit temp"><img src="<?php echo base_url();?>bookmyplot_design/images/2_s.jpg" alt="" /></a>

												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/3_b.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="<?php echo base_url();?>bookmyplot_design/images/3_s.jpg" alt="" /></a>

												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/4_b.jpg" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno"><img src="<?php echo base_url();?>bookmyplot_design/images/4_s.jpg" alt="" /></a>
												
												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/1_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?php echo base_url();?>bookmyplot_design/images/1_s.jpg" alt="" /></a>

												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/2_b.jpg" data-fancybox-group="gallery" title="Etiam quis mi eu elit temp"><img src="<?php echo base_url();?>bookmyplot_design/images/2_s.jpg" alt="" /></a>

												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/3_b.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="<?php echo base_url();?>bookmyplot_design/images/3_s.jpg" alt="" /></a>

												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/4_b.jpg" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno"><img src="<?php echo base_url();?>bookmyplot_design/images/4_s.jpg" alt="" /></a> -->
											
											</p>
										</center>
										<h3>Video</h3>
										<center>
											<iframe width="88%" height="350" src="https://www.youtube.com/embed/WRk_eIdjUp8" frameborder="0" allowfullscreen></iframe>
										</center>
									</div>
								</div>

						    </div><!--TabTwo ends here-->

						    <div role="tabpanel" class="tab-pane" id="plots"><!--TabThree starts here-->
								<div class="MainlayoutTab PropertyContent">
									<div class="propertyaboutTitle">
											<h3>PLOT DETAILS</h3>
										</div>
									<span class='zoom' id='ex1'>
										<img src='<?php echo base_url();?>bookmyplot_design/images/layoutmap.jpg' width='100%' height='900' alt='Daisy on the Ohoopee'/>
										<!-- <p>Hover</p> -->
									</span>
								</div>

						    </div><!--TabThree starts here-->
							

							<div role="tabpanel" class="tab-pane" id="amenities"><!--TabFour starts here-->
								<div class="MainlayoutTab PropertyContent">
									<div class="propertyaboutTitle">
										<h3>AMENITIES</h3>
									</div>
									<div class="AmenitiesSmallIcon text-center">
										<div class="row">
											<ul>
												<li class="col-sm-3 ">
													<img src="<?php echo base_url();?>bookmyplot_design/images/w1.png">
													<p>A Magnificent swimming pool</p>
												</li>
												<li class="col-sm-3">
													<img src="<?php echo base_url();?>bookmyplot_design/images/w2.png">
													<p>Indoor games room</p>
												</li>
												<li class="col-sm-3">
													<img src="<?php echo base_url();?>bookmyplot_design/images/w3.png">
													<p>A well equipped gymnasium</p>
												</li>
												<li class="col-sm-3">
													<img src="<?php echo base_url();?>bookmyplot_design/images/w4.png">
													<p>A well equipped gymnasium</p>
												</li>
												<li class="col-sm-3 ">
													<img src="<?php echo base_url();?>bookmyplot_design/images/w5.png">
													<p>Badminton Court</p>
												</li>
												<li class="col-sm-3">
													<img src="<?php echo base_url();?>bookmyplot_design/images/w6.png">
													<p>Jogging Track</p>
												</li>
												<li class="col-sm-3">
													<img src="<?php echo base_url();?>bookmyplot_design/images/w7.png">
													<p>Guest Room</p>
												</li>
												<li class="col-sm-3">
													<img src="<?php echo base_url();?>bookmyplot_design/images/w8.png">
													<p>Steam & Sauna Bath</p>
												</li>
												<li class="col-sm-3 ">
													<img src="<?php echo base_url();?>bookmyplot_design/images/w9.png">
													<p>Service Room</p>
												</li>
												<li class="col-sm-3">
													<img src="<?php echo base_url();?>bookmyplot_design/images/w10.png">
													<p>Back Office</p>
												</li>
												<li class="col-sm-3">
													<img src="<?php echo base_url();?>bookmyplot_design/images/w11.png">
													<p>Records Room</p>
												</li>
												<li class="col-sm-3">
													<img src="<?php echo base_url();?>bookmyplot_design/images/w12.png">
													<p>Maintance Room</p>
												</li>
											</ul>
										</div>
									</div>
								</div>
								

						    </div><!--TabFour ends here-->

						    <div role="tabpanel" class="tab-pane" id="about"><!--TabFive starts here-->
						    	<div class="MainAboutTab PropertyContent">
						    		<div class="propertyaboutTitle">
										<h3>ABOUT BUILDER</h3>
									</div>
									<div class="AboutMiddleSection">
										<div class="row">
											<div class="col-md-4 text-center">
												<!-- <img src="<?php echo base_url();?>bookmyplot_design/images/builderlogo.jpg"> -->
<?php echo ($getSpecific_developer_detail['0']['photograph']!="") ? '<img src="'.base_url('uploads/developer/'.$getSpecific_developer_detail['0']['photograph']).'" height="" width="">' : ''; ?>											</div>
											<div class="col-md-8 AboutMiddleText">
												<p><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
												<?php echo $getSpecific_developer_detail['0']['dev_overview'];?></p>
											</div>
										</div>
									</div>
									<center>
							    		<div class="OngoingProjects">
							    			<ul>
							    				<li>
													<div class='section half-left text-center'>
												        <h2><div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='40' data-delay='10' data-increment="9"><h2>0</h2></div></h2>
												    	<h4>ONGOING PROJECTS</h4>
												    </div>
							    				</li>
							    				<li class="Middlerightleftborder">
							    					<div class='section half-right text-center'>
												        <h2><div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='150' data-delay='10' data-increment="9"><h2>0</h2></div></h2>
												    	<h4>UPCOMING PROJECT</h4>
												    </div>
							    				</li>
							    				<li>
							    					<div class='section half-right text-center'>
												        <h2><div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='250' data-delay='10' data-increment="9"><h2>0</h2></div></h2>
												    	<h4>COMPLETED PROJECT</h4>
												    </div>
							    				</li>
							    			</ul>											    
										</div>
									</center>
								</div>
						    </div><!--TabFive ends here-->
						     <div role="tabpanel" class="tab-pane" id="interestedpeople">
								<div class="Maininterestedtab PropertyContent">
									<div class="propertyaboutTitle">
										<h3>INTERESTED PEOPLE</h3>
									</div>
									<div class="Innerinterestedpeople">
										<ul>
									<?php foreach ($getInterested_people_byproid as  $value) {
										# code...
									?>
											<li>
												<div class="InnerpeopleImg">
													
													<?php echo ($value['member_image']!="") ? '<img src="'.base_url($value['member_image']).'" height="" width="">' : ''; ?>
												</div>
												<?php $loc_name=getcityNameByID($value['location']);?>
	                                            <h4><?php echo $value['firstname'].' '.$value['lastname'];?></h4>
										
												<p><?php echo $value['designation'];?> at <?php echo $value['company'].' '.$loc_name;?></p>
											</li>

								<?php } ?>
											<!-- <li>
												<div class="InnerpeopleImg">
													<img src="images/ajaykumar.png">
												</div>
												<h4>Dr.Ajaykumar</h4>
												<p>Manager at Infosys Bangalore</p>
											</li>
											<li>
												<div class="InnerpeopleImg1">
													<img src="<?php echo base_url();?>bookmyplot_design/images/neena.png">
												</div>
												<h4>Dr.Neenu Pahuja</h4>
												<p>Manager at Infosys Bangalore</p>
											</li> -->
											<!-- <li>
												<div class="InnerpeopleImg2">
													<img src="<?php echo base_url();?>bookmyplot_design/images/manjula.png">
												</div>
												<h4>Ms. Manjula Vinjamuri</h4>
												<p>Manager at Infosys Bangalore</p>
											</li>
											<li>
												<div class="InnerpeopleImg3">
													<img src="<?php echo base_url();?>bookmyplot_design/images/mohan.png">
												</div>
												<h4>Mr. Mohan Reddy</h4>
												<p>Manager at Infosys Bangalore</p>
											</li>
											<li>
												<div class="InnerpeopleImg">
													<img src="<?php echo base_url();?>bookmyplot_design/images/chandra.png">
												</div>
												<h4>Mr.R. Chandrashekhar</h4>
												<p>Manager at Infosys Bangalore</p>
											</li>
											<li>
												<div class="InnerpeopleImg1">
													<img src="<?php echo base_url();?>bookmyplot_design/images/manu.png">
												</div>
												<h4>Manu Parpia</h4>
												<p>Manager at Infosys Bangalore</p>
											</li>
											<li>
												<div class="InnerpeopleImg2">
													<img src="<?php echo base_url();?>bookmyplot_design/images/sanjay.png">
												</div>
												<h4>Mr. Sanjay Poddar</h4>
												<p>Manager at Infosys Bangalore</p>
											</li>
											<li>
												<div class="InnerpeopleImg3">
													<img src="<?php echo base_url();?>bookmyplot_design/images/harish.png">
												</div>
												<h4>Mr. Harish Krishnan</h4>
												<p>Manager at Infosys Bangalore</p>
											</li> -->
											
										</ul>
									</div>
								</div>
						     </div>

						    <div role="tabpanel" class="tab-pane" id="location">
						   		<div class="locationmaps">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.66007678024!2d77.35073455584109!3d12.954517010195083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka+560001!5e0!3m2!1sen!2sin!4v1453550974658" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
						    </div>
						    <div role="tabpanel" class="tab-pane" id="reviews">...</div>
						  </div>

					
				</div><!--LeftSection ends here-->

				<div class="col-md-3"><!--RightSection Starts here-->
					<div class="RightSection">
						<center>
							<h4>Group Purchase will save you </h4>
							<h3>big!</h3>
							<h3>Are you interested ?</h3>
							<form action="#" method="post">
								<div class="form-group">
							    	<!-- <label for="exampleInputEmail1">Email address</label> -->
							    	<input type="text" class="form-control" id="exampleInputFname" placeholder="Fname">
							  	</div>
							  	<div class="form-group">
							    	<!-- <label for="exampleInputEmail1">Email address</label> -->
							    	<input type="text" class="form-control" id="exampleInputLname" placeholder="Lname">
							  	</div>
							  	<div class="form-group">
							    	<!-- <label for="exampleInputEmail1">Email address</label> -->
							    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							  	</div>
							  	<div class="form-group">
							    	<!-- <label for="exampleInputPassword1">Password</label> -->
							    	<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone">
							  	</div>
							  	<div class="squaredThree text-left">
									<input type="checkbox" value="None" id="squaredThree" name="check" />
									<label for="squaredThree"></label>
								</div>

							  	<button type="submit" class="btn btn-Rightbutton">I am interested</button>
							  	<h4>For smart people smart savings</h4>
							</form>
							
						</center>
					</div>
					<div class="RightSectionSecondPart">
						<div class="RightBgColor">
							<div class="GreenRightText">
								<h4>Green Woods Community People</h4>
							</div>

							<div class="UserProfileListing">
								<div class="row">
									<div class="col-sm-2 RoundImg">
										<img src="<?php echo base_url();?>bookmyplot_design/images/round.png" alt="round">
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
										<img src="<?php echo base_url();?>bookmyplot_design/images/round.png" alt="round">
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
										<img src="<?php echo base_url();?>bookmyplot_design/images/round.png" alt="round">
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
										<img src="<?php echo base_url();?>bookmyplot_design/images/round.png" alt="round">
									</div>
									<div class="col-sm-9 col-sm-offset-1">
										<h4>Sanjay Balkrishnan</h4>
										<p>Manager at Infosys Bangalore</p>
									</div>
								</div>	
							</div>

						</div>
					</div>
				</div><!--RightSection ends here-->
			</div>
		</div>
	</div>
<!--Second Section ends here-->

<!-- footer starts here -->
	<?php //include_once('footer.php'); 
	include_once(APPPATH.'libraries/footer.php');
?>

  <!-- datatable js-->
    <script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables/dataTables.bootstrap.js"></script>
<!-- footer ends here-->

	<!-- jquery library js link -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/jquery-1.11.3.min.js"></script>
	<!-- bootstrap library js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/js/jquery.fancybox.js"></script>
	<!-- label js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/js/jquery.material.form.js"></script>
	<script src="<?php echo base_url();?>bookmyplot_design/js/numscroller-1.0.js"></script>
    <script src='<?php echo base_url();?>bookmyplot_design/js/jquery.zoom.js'></script>
	<script>
		$(document).ready(function(){
			$('#ex1').zoom();
			$('#ex2').zoom({ on:'grab' });
			$('#ex3').zoom({ on:'click' });			 
			$('#ex4').zoom({ on:'toggle' });


		});

		//$(document).ready(function() {


    
	</script>
	
	<script type="text/javascript">
		$('.galleryContent').hide();
		$('.gallery').click(function(){
			$('.galleryContent').show();
			$('.JoinNow').hide();
		});
			$('#myTabs a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			});

			$(document).ready(function(){
    	 $("#dataTables-example").dataTable();
   });
	</script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
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











