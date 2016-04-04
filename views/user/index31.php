
<!DOCTYPE html>
<html lang="en">
<head>
	<!--fb-->
	<style type="text/css">
h1{font-family:Arial, Helvetica, sans-serif;color:#999999;}
</style>
	<!--fb-->
	<meta charset="UTF-8">
	<meta name="author" content="Chandraprakash N J">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book My Plot</title>
	<!-- Bootstrap css links -->
	<link href="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<!-- font awesome link -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/plugins/font-awesome/css/font-awesome.css">
	<!-- jquery ui css links -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/plugins/jquery-ui-1.11.4/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/plugins/jquery-ui-1.11.4/jquery-ui.theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/plugins/jquery-ui-1.11.4/jquery-ui.theme.css">
	<!-- Google fonts link -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	
	<!-- my style sheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/style.css">
	<link href="<?php echo base_url();?>bookmyplot_design/css/owl.carousel.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url();?>bookmyplot_design/css/owl.theme.css" rel="stylesheet"> -->
    <link href="<?php echo base_url();?>bookmyplot_design/plotslider/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>bookmyplot_design/css/animated-slider.css" rel="stylesheet">

    <link href="<?php echo base_url();?>bookmyplot_design/css/menustyle.css" rel="stylesheet">
   <!--  <link href="/public/fontastic/styles.css" rel="stylesheet">-->
</head>
<body>
	<header>
	<div class="header-cont">
		<div class="fullWidth">
			<div class="container">
				<div class="paddigTop">
					<div class="row">
						<div class="col-md-3">
							<img src="<?php echo base_url();?>bookmyplot_design/images/Bookmyplotfinallogo_homepage.png">
						</div>
						<div class="col-md-2">
							<i class="fa fa-map-marker faColor"></i>
							<select id="dropdown" class="dropdown_city">
								<option value="0">Select City</option>
								<?php foreach ($allcities as $city) { ?>
                                    <option value="<?php echo $city['city_id'];?>"><?php echo $city['city_name'];?></option>
                                <?php } ?>
							</select>
						
						</div>
						<!-- <div class="col-md-2 text-right">
							<select id="other">
								<option>Other Services</option>
							</select>
						</div> -->

<div class="col-md-2 text-right" style="padding-left:0;">
<a style="display:inline-block;color:white;font-weight:600;border-right:2px solid #fff;line-height:12px;padding-right:5px;" href = "<?php echo base_url();?>index.php/user/otherserve" target='_blank' >Other Services</a>
<!-- <a style="padding-top:10px;display:inline-block;color:white;" href = "">|</a> -->
<a style="padding-top:10px;display:inline-block;color:white;font-weight:600;" href = "<?php echo base_url();?>blog" target='_blank' >Blog</a>
</div>

<!-- <div class="col-md-2">
<a href="tel:+91 80 2286 8710"><img src="<?php echo base_url("bookmyplot_design/images/tel.png");?>">&nbsp;<font style="color:white;"><b><i>Call us!</b></i></font></a>
</div> -->

						<div class="col-md-2">
							<a href="<?php echo base_url(); ?>index.php/user/list_your_property"><button type="button" class="btn btn-success btnCustomized">List your property</button></a>
						</div>
						

						
<div id="fblogin">
<?php if($user_profile):?>
	<div id="mylogin" style="display:none">
						<?php if($logged_in=="TRUE"){ 
                               //if($this->session->userdata('logged_in')=="TRUE"){
							?>
						<div class="col-md-2 marginTop">
							<!--<span class="colorWhite">Login</span><span class="colorWhite"> |</span> <span class="colorWhite">Sign Up</span>-->
							<a href="<?php echo site_url('user/user_logout');?>"><button class="btn btn-login_Signup btn-login-index">Logout</button></a>
						</div>
						<?php }elseif($logged_in==""){ 
							  // }elseif($this->session->userdata('logged_in')==""){
							?>
						<div class="col-md-2 marginTop">
							<!-- <span class="colorWhite">Login</span><span class="colorWhite"> |</span> <span class="colorWhite">Sign Up</span> -->
							<button class="btn btn-login_Signup btn-login-index" data-toggle="modal" data-target="#myModal">Login / SignUp</button>
						</div>
						<?php } ?>
	</div>
    <div class="profilelogout col-md-3" style="color:#fff;">
    	<img src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" style="width:40px; height:40px;">
    	<h6><?=$user_profile['first_name'];?></h6>
    	<a href="<?=$logout_url?>">logout</a>
    </div>
    
   <?php else: ?>
   <div id="mylogin">
						<?php if($logged_in=="TRUE"){ 
                               //if($this->session->userdata('logged_in')=="TRUE"){
							?>
						<div class="col-md-2 marginTop">
							<!--<span class="colorWhite">Login</span><span class="colorWhite"> |</span> <span class="colorWhite">Sign Up</span>-->
							<a href="<?php echo site_url('user/user_logout');?>"><button class="btn btn-login_Signup btn-login-index">Logout</button></a>
						</div>
						<?php }elseif($logged_in==""){ 
							  // }elseif($this->session->userdata('logged_in')==""){
							?>
						<div class="col-md-2 marginTop">
							<!-- <span class="colorWhite">Login</span><span class="colorWhite"> |</span> <span class="colorWhite">Sign Up</span> -->
							<button class="btn btn-login_Signup btn-login-index" data-toggle="modal" data-target="#myModal">Login / SignUp</button>
						</div>

						<?php }?>
					</div>
<!--    <a href="<?=$login_url?>"><img src="<?php echo base_url("bookmyplot_design/images/fb.png");?>"></a>
 -->   <?php endif;?>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>




<?php //include_once('modals.php'); 
include_once(APPPATH.'libraries/modals.php');
?>	
	<!-- start banner slider -->
 <div class="container-fluid pd0">
    <div class="banner-block">
      <div id="coe-banner" class="owl-carousel">
        <div>
            <img src="<?php echo base_url();?>bookmyplot_design/images/banner-img.jpg"> 
        </div>
        <div>
            <img src="<?php echo base_url();?>bookmyplot_design/images/banner-img.jpg"> 
        </div>
      </div>
          
        <div class="plot-search">
         <button id="reg-close" class="close hidden-lg hidden-md" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	       <h2>Let's Join Hands For Group Purchase<?php //echo $userid_fb;?></h2>
	       <form id="signupForm" method="post"  action="<?php echo site_url('property/property_listing/'); ?>">
           <input type="hidden" name="city" id="city" value="0"><input type="hidden" name="pro_status" id="pro_status" value="all">
	       <div class="row" style="margin-top:2%;">
	       	<div class="col-md-12">
	       		<ul class="nav nav-pills navPillsCustomized">
				   <input type="hidden" name="pro_type_id" id="pro_type_id" value="0">
	       		 	<?php foreach ($property_type as $pro_type) {
	       		 	//echo $pro_type['pro_type_id'];?>
 <li id="<?php echo $pro_type['pro_type_id'];?>" onclick="enableTxt(this)"  value="<?php echo $pro_type['pro_type_id'];?>"><a href="#tab1" data-toggle="tab"><?php echo $pro_type['pro_type_name'];?></a></li>

	       		   <?php }?>
				    
				</ul>
				 <div class="tab-content">
			        <div class="contents tab-pane active" id="tab1">
			            
			            <!-- <div class="row paddingTopRow">
			            	<div class="col-md-4">
			            		<select id="selectPrefered">
			            			<option>Select preffered locality</option>
			            			<option>Bangalore</option>
			            			<option>Chennai</option>
			            			<option>Hyderabad</option>
			            		</select>
			            	</div>
			            	
			            	<div class="col-md-8">
			            	<label class="colorLabel">Budget</label>
			            		<select id="selectPrefered">
			            			<option>Min</option>
			            			<option>1 Lakh</option>
			            			<option>2 Lakh</option>
			            			<option>3 Lakh</option>
			            		</select>
			            		<select id="selectPrefered">
			            			<option>Max</option>
			            			<option>1 Lakh</option>
			            			<option>2 Lakh</option>
			            			<option>3 Lakh</option>
			            		</select>
			            		<button class="btn btn-Search glyphicon glyphicon-th-large btnSearchCustomized"> Search</button>
			            	</div>
			            	
			            </div> -->

			            <div class="row">
			            		<div class="col-md-9" style="padding:0;">
				            		<div class="paddingTopRowCommercial">
					            		<div class="row">
					            			<div class="col-md-6 padding0" style="padding-left:10px;">
					            				<!--<select id="selectPreferedCommercial">
							            			<option>Looking for...</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select> -->
							            		<select id="selectPreferedCommercial" name="res_location" class="res_location">
			            		                <option value="0">Select locality</option>
			                                    <?php foreach ($location as $loc) { ?>
                               <option value="<?php echo $loc['loc_id'];?>"><?php echo $loc['loc_name']; ?></option>
                                                <?php } ?>
			            		                </select>
					            			</div>
					            			<div class="col-md-2 padding0">
					            				<label class="colorLabelCommercial">Budget</label>
						            		</div>
				            				<div class="col-md-2 padding0">	
							            		<!--<select id="selectPreferedCommercial">
							            			<option>Min</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select>-->
							            		<select id="selectPreferedCommercial" name="res_min">
			            			            <option value="0">Min</option>
			            			            <?php foreach ($figure as $fig) { ?>
                                    <option value="<?php echo $fig['figure'];?>"><?php echo $fig['words'];?></option>
                                               <?php } ?>
			            		                </select>
							            	</div>
							            	<div class="col-md-2 padding0" style="padding-right:10px;">	
							            		<!-- <select id="selectPreferedCommercial">
							            			<option>Max</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select> -->
							            		<select id="selectPreferedCommercial" name="res_max">
			            			            <option value="0">Max</option>
			            			            <?php foreach ($figure as $fig) { ?>
                         <option value="<?php echo $fig['figure'];?>"><?php echo $fig['words'];?></option>
                                                <?php } ?>
			            		               </select>
							            	</div>	
							            		
					            			</div>

					            			<div class="row" style="margin-top: 2%; display: none;" id="myid">
					            			<div class="col-md-6 padding0" style="padding-left:10px;">
							            		
							            	<select id="selectPreferedCommercial" name="use_fr" class="use_fr">
			            		            
			            		            </select>
					            			</div>

					            			<div class="col-md-6 padding0" style="padding-right:10px;">
					            				<!-- <select id="buy">
							            			<option>Buy</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select> -->
							            		<select id="buy" name="brl_fr">
					            					<option value="0">Select</option>
							            		 <?php foreach ($brl as $brls) {?>
                         <option value="<?php echo $brls['brl_id'];?>"><?php echo $brls['brl_name'];?></option>
                                                <?php } ?>
							            		</select>
					            			</div>
					            		</div>
					            		</div>
				            		</div>
				            	<div id="loader" style="display:none;">please wait....</div>
				            	<div class="col-md-3">
				            			<button class="btn btn-Search glyphicon glyphicon-th-large btnSearchCustomizedCommercial" id="search"> Search</button>
				            	</div>
				            	
			            	</div>
			           
			        </div>









			           <!-- /.contents -->     
			        <div class="contents tab-pane" id="tab2">
			            
			            	<div class="row">
			            		<div class="col-md-9">
				            		<div class="paddingTopRowCommercial">
					            		<div class="row">
					            			<div class="col-md-6 padding0" style="padding-left:10px;">
					            				<select id="selectPreferedCommercial">
							            			<option>Select preffered locality</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            			<div class="col-md-6 padding0" style="padding-right:10px;">
					            				<select id="buy">
							            			<option>Buy</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            		</div>
					            		<div class="row" style="margin-top: 2%;">
					            			<div class="col-md-6 padding0" style="padding-left:10px;">
					            				<select id="selectPreferedCommercial">
							            			<option>Looking for...</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            			<div class="col-md-2 padding0">
					            				<label class="colorLabelCommercial">Budget</label>
						            		</div>
				            				<div class="col-md-2 padding0">	
							            		<select id="selectPreferedCommercial">
							            			<option>Min</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select>
							            	</div>
							            	<div class="col-md-2 padding0" style="padding-right:10px;">	
							            		<select id="selectPreferedCommercial">
							            			<option>Max</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select>
							            	</div>	
							            		
					            			</div>






					            		</div>
				            		</div>
				            	
				            	<div class="col-md-3">
				            			<button class="btn btn-Search glyphicon glyphicon-th-large btnSearchCustomizedCommercial"> Search</button>
				            	</div>
			            	</div>
			        </div><!-- /.contents -->
			        <div class="contents tab-pane" id="tab3">
			           <div class="row">
			            		<div class="col-md-9">
				            		<div class="paddingTopRowCommercial">
					            		<div class="row">
					            			<div class="col-md-6 padding0" style="padding-left:10px;">
					            				<select id="selectPreferedCommercial">
							            			<option>Select preffered locality</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            			<div class="col-md-6 padding0" style="padding-right:10px;">
					            				<select id="buy">
							            			<option>Buy</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            		</div>
					            		<div class="row" style="margin-top: 2%;">
					            			<div class="col-md-6 padding0" style="padding-left:10px;">
					            				<select id="selectPreferedCommercial">
							            			<option>Looking for...</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            			<div class="col-md-2 padding0">
					            				<label class="colorLabelCommercial">Budget</label>
						            		</div>
				            				<div class="col-md-2 padding0">	
							            		<select id="selectPreferedCommercial">
							            			<option>Min</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select>
							            	</div>
							            	<div class="col-md-2 padding0" style="padding-right:10px;">	
							            		<select id="selectPreferedCommercial">
							            			<option>Max</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select>
							            	</div>	
							            		
					            		</div>
					            		</div>
				            		</div>
				            	
				            	<div class="col-md-3">
				            			<button class="btn btn-Search glyphicon glyphicon-th-large btnSearchCustomizedCommercial"> Search</button>
				            	</div>
			            	</div> 
			            
			            
			        </div><!-- /.contents -->
    			</div>
	       </div>
		</div>
		</form>
	</div>
<button id="reg-open" class="btn btn-reg hidden-lg hidden-md">Search</span></button>
 </div>
  </div>
  </div>
    
  <!-- end banner slider -->
<div class="container-fluid FirstSection">
	<div class="container">
		<div class="InnerFirstSection">
			<div class="greenSection">
					<center>
						<h1>FIRST TIME IN INDIA</h1><br/>
						<h4>INTRODUCING GROUP BUYING - UNBELIEVABLE SAVINGS, COMMUNITY SUPPORT AND PEACE OF MIND. JOIN TODAY! </h4>
					</center>
					<ul class="list-inline">
						<li><img src="<?php echo base_url();?>bookmyplot_design/images/b1.png"><br/>
							<p>Discover Plots</p>
						</li>
					
						<li><img src="<?php echo base_url();?>bookmyplot_design/images/b2.png"><br/>
							<p>1 Person Enquiry</p>
						</li>
					
						<li><img src="<?php echo base_url();?>bookmyplot_design/images/b3.png"><br/>
							<p>2 Person Enquiry</p>
						</li>
						
						<li><img src="<?php echo base_url();?>bookmyplot_design/images/b4.png"><br/>
							<p>Group Enquiry</p>
							
						</li>
						
						<li><img src="<?php echo base_url();?>bookmyplot_design/images/b5.png"><br/>
							<p>Purchase with best price</p>
						</li>
					</ul>
			</div>
		</div>
	</div>
	
</div><!-- First Section Ends Here -->
  
<style type="text/css">
	
    .choose_slider {
        height: 383px;
        position: relative;
    }
    .plot-carousel-text{
    	background-color: #fff;
    	color: #000;
    	padding-bottom: 2%;
    }
    .plot-carousel-text-right{
    	background-color: #fff;
    	color: #ccc;
    	padding-top: 3%;
    	padding-bottom: 3%;
    }
    li.current_item {
    box-shadow: 1px 5px 5px #888888;
}
.plot-carousel-text h4{
	font-family: roboto-regular;
}
a#btn_next1 {
    position: absolute;
    /*z-index: 9999;*/
    left: 8%;
    top: 39%;
}
a#btn_prev1 {
    position: absolute;
    /* z-index: 9999; */
    right: 8%;
    top: 39%;
}
.plot-carousel-text ul li{
	color: #ccc;
	font-size: 12px;
}
.font-color{
	color: #000;
	font-size: 14px;
}
.border-right{
	border-right: 1px solid #ccc;
}
</style>
<!-- Second Section Starts Here -->
<div class="container-fluid">
	<div class="container">
		<div class="secondSection">	
			<center>
				<h2>Recently Added Plots</h2>
				<!-- <div style="padding:20px 0;">
			        <div id="thumbnail-slider">
			            <div class="inner">
			                <ul>
			                    <li>
			                        <div class="slider-text">
			                        	Hello World Hello WorldHello WorldHello WorldHello WorldHello WorldHello WorldHello WorldHello WorldHello World
			                        </div>
			                        <a class="thumb" href="images/s1.jpg">
			                        	
			                        </a>
			                        
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/7.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/s1.jpg"></a>
			                        Hello world
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/3.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/s1.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/5.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/s1.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/9.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/s1.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/11.jpg"></a>
			                    </li>
			                </ul>
			            </div>
			        </div>
	    		</div> -->
	    	<div class="outer_pad">	
	    		<div class="choose_slider">

                    <div class="choose_slider_items">
                        <ul id="mySlider1">
                        	<?php foreach ($recently_added_plots as $value) {
                        		 $data['firstimages_byproid']=$this->model_search_property->getfirst_images_by_property_id($value['pro_id']);                         	     
 ?>
                        	   <li class="current_item">
                                <a href="#">
             <?php foreach ($data['firstimages_byproid'] as $getfirstimages) {?>
       <a href="<?php echo site_url('member/specific_project/'.$value['pro_id']);?>"><img src="<?php echo base_url($getfirstimages['property_images']);?>" width="581px" height="244px"></a>
                <?php //} ?>
                                    <div class="row" >
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4><a href="<?php echo site_url('member/specific_project/'.$value['pro_id']);?>"><?php echo $value['pro_name'];?></h4></a>
                                    	<h5>By <?php echo getDevelopername($value['developer_id']);?></h5>
                                    	<ul class="list-inline">
                                    		<?php if($value['pro_type_id']==0){
    }elseif($value['pro_type_id']==1){
    $data['starting_price']=$this->model_property->getStarting_price($value['pro_type_id']);
    ?>
    <li>
       Starts From<br/>
      <span class="font-color"><i class="fa fa-inr"></i><?php echo notowords($data['starting_price'][0]->lowest_price);?></span>
    </li>
      <?php }elseif($value['pro_type_id']==2){
    $data['starting_price']=$this->model_property->getStarting_price($value['pro_type_id']);?>
    <li>
       Starts From<br/>
      <span class="font-color"><i class="fa fa-inr"></i><?php echo notowords($data['starting_price'][0]->lowest_price);?></span>
    </li>
    <li>
        Per sq.ft<br/>
       <span class="font-color"><i class="fa fa-inr"></i><?php echo $data['starting_price'][0]->persqft;?></span>
    </li>
   <?php     
   }elseif($value['pro_type_id']==3){
    $data['starting_price']=$this->model_property->getStarting_price($value['pro_type_id']);?>
     <li>
       Starts From<br/>
      <span class="font-color"><i class="fa fa-inr"></i><?php echo notowords($data['starting_price'][0]->lowest_price);?></span>
    </li>
   <?php $data['persqft']="";
    }
    ?>
                                    		<!-- <li>
                                    			Starts From<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>15.46 Lacs</span>
                                    		</li> -->
                                    		<!-- <li>
                                    			<div class="border-right"></div>
                                    		</li> -->
                                    		<!-- <li>
                                    			Per sq.ft<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>1100</span>
                                    		</li> -->
                                    	</ul>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<a href="<?php echo site_url('member/specific_project/'.$value['pro_id']);?>"><button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button></a>
                                    </div>
                                    
                                   </div>
                                </a>
                                <?php } ?>
                            </li>
                            <?php }?>
                      
                            <!-- <li class="current_item">
                                <a href="#">
                                    <img src="<?php echo base_url();?>bookmyplot_design/images/s1.jpg" />
                                    <div class="row">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>BSK Greenwood</h4>
                                    	<h5>By BSR Group</h5>
                                    	<ul class="list-inline">
                                    		<li>
                                    			Starts From<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>15.46 Lacs</span>
                                    		</li>
                                    		<li>
                                    			<div class="border-right"></div>
                                    		</li>
                                    		<li>
                                    			Per sq.ft<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>1100</span>
                                    		</li>
                                    	</ul>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="<?php echo base_url();?>bookmyplot_design/images/s1.jpg" />
                                    <div class="row">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>BSK Greenwood</h4>
                                    	<h5>By BSR Group</h5>
                                    	<ul class="list-inline">
                                    		<li>
                                    			Starts From<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>15.46 Lacs</span>
                                    		</li>
                                    		<li>
                                    			<div class="border-right"></div>
                                    		</li>
                                    		<li>
                                    			Per sq.ft<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>1100</span>
                                    		</li>
                                    	</ul>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="<?php echo base_url();?>bookmyplot_design/images/s1.jpg" />
                                    <div class="row">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>BSK Greenwood</h4>
                                    	<h5>By BSR Group</h5>
                                    	<ul class="list-inline">
                                    		<li>
                                    			Starts From<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>15.46 Lacs</span>
                                    		</li>
                                    		<li>
                                    			<div class="border-right"></div>
                                    		</li>
                                    		<li>
                                    			Per sq.ft<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>1100</span>
                                    		</li>
                                    	</ul>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="<?php echo base_url();?>bookmyplot_design/images/s1.jpg" />
                                	<div class="row">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>BSK Greenwood</h4>
                                    	<h5>By BSR Group</h5>
                                    	<ul class="list-inline">
                                    		<li>
                                    			Starts From<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>15.46 Lacs</span>
                                    		</li>
                                    		<li>
                                    			<div class="border-right"></div>
                                    		</li>
                                    		<li>
                                    			Per sq.ft<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>1100</span>
                                    		</li>
                                    	</ul>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="<?php echo base_url();?>bookmyplot_design/images/s1.jpg" />
                                    <div class="row">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>BSK Greenwood</h4>
                                    	<h5>By BSR Group</h5>
                                    	<ul class="list-inline">
                                    		<li>
                                    			Starts From<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>15.46 Lacs</span>
                                    		</li>
                                    		<li>
                                    			<div class="border-right"></div>
                                    		</li>
                                    		<li>
                                    			Per sq.ft<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>1100</span>
                                    		</li>
                                    	</ul>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="<?php echo base_url();?>bookmyplot_design/images/s1.jpg" />
                                    <div class="row">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>BSK Greenwood</h4>
                                    	<h5>By BSR Group</h5>
                                    	<ul class="list-inline">
                                    		<li>
                                    			Starts From<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>15.46 Lacs</span>
                                    		</li>
                                    		<li>
                                    			<div class="border-right"></div>
                                    		</li>
                                    		<li>
                                    			Per sq.ft<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>1100</span>
                                    		</li>
                                    	</ul>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="<?php echo base_url();?>bookmyplot_design/images/s1.jpg" />
                                    <div class="row">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>BSK Greenwood</h4>
                                    	<h5>By BSR Group</h5>
                                    	<ul class="list-inline">
                                    		<li>
                                    			Starts From<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>15.46 Lacs</span>
                                    		</li>
                                    		<li>
                                    			<div class="border-right"></div>
                                    		</li>
                                    		<li>
                                    			Per sq.ft<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>1100</span>
                                    		</li>
                                    	</ul>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="<?php echo base_url();?>bookmyplot_design/images/s1.jpg" />
                                    <div class="row">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>BSK Greenwood</h4>
                                    	<h5>By BSR Group</h5>
                                    	<ul class="list-inline">
                                    		<li>
                                    			Starts From<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>15.46 Lacs</span>
                                    		</li>
                                    		<li>
                                    			<div class="border-right"></div>
                                    		</li>
                                    		<li>
                                    			Per sq.ft<br/>
                                    			<span class="font-color"><i class="fa fa-inr"></i>1100</span>
                                    		</li>
                                    	</ul>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li> -->

                        </ul>
                    </div>
                    <div><a id="btn_next1" href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/arrows.png"></a></div>
                    <div><a id="btn_prev1" href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/arrows2.png"></a></div>
                </div>
                
                
            </div>
			</center>
		</div>	
	</div>
</div>

<!-- Second Section Ends Here -->

<!-- Third section Starts here -->
<div class="container-fluid thirdSection">
	<div class="container">
		<div class="areaMain">
			<center>
				<h2>Most Popular Area</h2>
					<div class="listOfArea">
						<ul class="list-inline">
							<?php foreach ($most_popular_area as $popular_area) {?>
	
							<li>
								<p><?php echo $popular_area['area_name'];?></p>
								<span class="badge badgetarea"><?php echo $popular_area['no_of_plots'];?> Plots</span>	
							</li>
							<?php } ?>
							<!-- <li>
								<p>Airport Road</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Doddaballapura</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Whitefield</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Kormangala</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Kanakpura Road</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Airport Road</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Doddaballapura</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Whitefield</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Kormangala</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Kanakpura Road</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Airport Road</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Doddaballapura</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Whitefield</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Kormangala</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Kanakpura Road</p>
								<span class="badge">32 Plots</span>	
							</li> -->

						</ul>
					</div>	
			</center>
		</div>	
	</div>

</div><!-- Third section Ends here-->
<!-- Fourth Section Starts here -->
<div class="container-fluid">
	<div class="container">
		<div class="fourthSection">
			<h3>POPULAR PROJECTS</h3>
				<div class="row">
					<div class="col-md-9">
						<div class="carousel slide" id="myCarousel">
					        <div class="carousel-inner">
					            <div class="item active">
					                    <ul class="thumbnails">
					                   <!-- <input type='hidden' id='current_page'/>
                                          <input type='hidden' id='show_per_page' />
                                           <div id='content'> --> 	
					                    	<?php foreach ($popular_projects as $popular_project) { ?>
					                        <li class="col-sm-4">
					    						<div class="fff">
													<div class="thumbnail">
		<?php $data['firstimages_byproid']=$this->model_search_property->getfirst_images_by_property_id($popular_project['pro_id']); 
	          if(empty($data['firstimages_byproid'])){
	          	?>
<!-- 	         <img src="<?php echo base_url();?>bookmyplot_design/images/no-document.jpg" height="200px;">
 -->	      
 <img src="<?php echo base_url();?>bookmyplot_design/images/q11.jpg" alt="">
              <?php }else{?>
			<a href="<?php echo site_url('member/specific_project/'.$popular_project['pro_id']);?>"><img src="<?php echo base_url($data['firstimages_byproid'][0]['property_images']);?>"  alt=""></a>
			<?php }?>
													</div>
													<div class="caption">
														<h4><?php echo $popular_project['pro_name'];?></h4>
															<?php $data['pro_overview']=$this->model_property->some_project_overview($popular_project['pro_id']);
															$str=$data['pro_overview'];
															$a=explode(" ",$str);
															?>
														<p><?php echo $a[0].' '.$a[1].' '.$a[2].' '.$a[3];?> <a class="btn btn-mini" href="<?php echo site_url('member/specific_project/'.$popular_project['pro_id']);?>">» Read More</a></p>
														
													</div>
					                            </div>
					                        </li>
					                        <?php } ?>
					                <!--  </div>
					                  <div id='page_navigation'></div> -->
					                       <!--  <li class="col-sm-4">
					    						<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q11.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q2.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q3.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q11.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                         <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q2.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                         <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q3.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li> -->
					                    </ul>
					            </div><!-- /Slide1 --> 
					            <div class="item">
					                    <ul class="thumbnails">
					                    	<!-- <input type='hidden' id='current_page'/>
                                          <input type='hidden' id='show_per_page' />
                                           <div id='content'> --> 
                                      <?php foreach ($popular_projects1 as $popular_project) { ?>
					                        <li class="col-sm-4">
					    						<div class="fff">
													<div class="thumbnail">
<?php $data['firstimages_byproid']=$this->model_search_property->getfirst_images_by_property_id($popular_project['pro_id']); 
	          if(empty($data['firstimages_byproid'])){
	          	?>
<!-- 	         <img src="<?php echo base_url();?>bookmyplot_design/images/no-document.jpg" height="200px;">
 -->	      
 <img src="<?php echo base_url();?>bookmyplot_design/images/q11.jpg" alt="">
              <?php }else{?>
			<a href="<?php echo site_url('member/specific_project/'.$popular_project['pro_id']);?>"><img src="<?php echo base_url($data['firstimages_byproid'][0]['property_images']);?>"  alt=""></a>
			<?php }?>			
		                                              </div>
													<div class="caption">
														<h4><?php echo $popular_project['pro_name'];?></h4>
															<?php $data['pro_overview']=$this->model_property->some_project_overview($popular_project['pro_id']);
															$str=$data['pro_overview'];
															$a=explode(" ",$str);
															?>
														<p><?php echo $a[0].' '.$a[1].' '.$a[2].' '.$a[3];?> <a class="btn btn-mini" href="<?php echo site_url('member/specific_project/'.$popular_project['pro_id']);?>">» Read More</a></p>
													</div>
					                            </div>
					                        </li>
					                      <?php } ?>
					                 <!-- </div>
					                  <div id='page_navigation'></div> -->
					                        <!-- <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q2.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q3.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q11.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q2.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q3.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li> -->

					                    </ul>
					              </div>
					            <!-- <div class="item">
					                    <ul class="thumbnails">
					                        <li class="col-sm-4">	
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q11.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q2.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q3.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="<?php echo base_url();?>bookmyplot_design/images/q11.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                    </ul>
					              </div> -->
					        </div>
					        
					       
						   <nav>
								<ul class="control-box pager">
									<li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
									<li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
								</ul>
							</nav>
						   <!-- /.control-box -->   
					                              
					    </div><!-- /#myCarousel -->
					</div>

					<!-- /CREATE FREE ALERT anurag-->
<div class="col-md-3">
<h4>Create free alert</h4>
<div class="formFreeAlert">



<form role="form" method="post" action="<?php echo base_url();?>index.php/user/create_free_alert_cont" id="testform">

<div class="form-group">


<label for="location">Preffered Location</label>
<select required class="form-control" name="selectlocation">
<option value="0">Select locality</option>
<?php foreach ($location as $loc) { ?>
<option value="<?php echo $loc['loc_id'];?>"><?php echo $loc['loc_name'];?></option>
<?php } ?>
</select>
</div>



<div class="form-group">
<label for="budget">Budget</label><br/>




<select required id="bdmin" name="budgetmin" class="form-control minControl">
<option value="0">Min</option>
<?php foreach ($figure as $fig) { ?>
<option value="<?php echo $fig['figure'];?>">
<?php echo $fig['words'];?></option>
<?php } ?>
</select>

<select required id="bdmax" name="budgetmax" class="form-control maxControl">
<option value="0">Max</option>
<?php foreach ($figure as $fig) { ?>
<option value="<?php echo $fig['figure'];?>">
<?php echo $fig['words'];?><?php } ?>
</option>
</select>
</div><br/>

<div class="form-group">
<label for="email">Email address</label>
<input required id="mailid" type="email" name="umail" class="form-control" id="email">
</div>

<div class="form-group">
<label for="mobile">Mobile Number</label>
<div class="input-group">
<span class="input-group-addon" id="basic-addon1">+91</span>
<input required id="mobid" type="text" name="mobnum" class="form-control" id="number">
</div>	
</div>



<center>
<button type="submit" name="submit" class="btn btn-primary btnCenterCustomized">Send</button>
</center>
</form>	
</div>
</div>	
</div>
</div>
</div>
</div>
<!-- Fourth Section ends here anurag-->

					<!-- <div class="col-md-3">
						<h4>Create free alert</h4>
						<div class="formFreeAlert">
							<form role="form">
								<div class="form-group">
									<label for="location">Preffered Location</label>
									<select class="form-control">
										<option>Sarjapur Road</option>
										<option>Whitefield</option>
									</select>
								</div>
								<div class="form-group">
									<label for="budget">Budget</label><br/>
									<select class="form-control minControl">
										<option>Min</option>
										<option>1 Lakh</option>
										<option>2 Lakh</option>
										<option>3 Lakh</option>
									</select>
									<select class="form-control maxControl">
										<option>Max</option>
										<option>1 Lakh</option>
										<option>2 Lakh</option>
										<option>3 Lakh</option>
									</select>
								</div><br/>
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" id="email">
								</div>
								<div class="form-group">
									<label for="mobile">Mobile Number</label>
									<div class="input-group">
										  <span class="input-group-addon" id="basic-addon1">+91</span>
										  <input type="text" class="form-control" id="number">
									</div>	  
								</div>
								<center>
									<button type="button" class="btn btn-primary btnCenterCustomized">Send</button>
								</center>
							</form>	
						</div>
					</div>	
				</div>
		</div>
	</div>
</div>
<!-- Fourth Section ends here -->
<!-- Fifth Section Starts here -->
<div class="container-fluid topLine">
	<div class="container">
 		<center>
 			<div class="developersBeginning">
 				<h3>TOP DEVELOPERS</h3>
 				<div class="developersList">
 					<ul class="list-inline">
 						<?php foreach ($top_developer as $top_dev) {			
                         ?>
                 <li><a href="<?php echo site_url('member/specific_builder/'.$top_dev['dev_id']);?>"><?php echo ($top_dev['photograph']!="") ? '<img src="'.base_url('uploads/developer/pimage/'.$top_dev['dev_id'].'/'.$top_dev['photograph']).'" height="" width="">' : ''; ?></a></li>  
                         <?php } ?>
 						<!-- <li><img src="<?php echo base_url();?>bookmyplot_design/images/developer_1.png"></li>
 						<li><img src="<?php echo base_url();?>bookmyplot_design/images/developer_2.png"></li>
 						<li><img src="<?php echo base_url();?>bookmyplot_design/images/developer_3.png"></li>
 						<li><img src="<?php echo base_url();?>bookmyplot_design/images/developer_4.png"></li>
 						<li><img src="<?php echo base_url();?>bookmyplot_design/images/developer_5.png"></li>
 						<li><img src="<?php echo base_url();?>bookmyplot_design/images/developer_6.png"></li>
 						<li><img src="<?php echo base_url();?>bookmyplot_design/images/developer_7.png"></li> -->
 					</ul>
 				</div>
 			</div>
 		</center>
 	</div>
</div>

<!-- Fifth Section Ends here -->
<!-- Sixth Section Starts here -->
<div class="container-fluid thirdSection">
	<div class="container">
		<div class="testimonial-section">
			<center>
				<h3>Great things people are saying about us</h3>
			</center>	
				<div class="testimonial-content">
					<ul class="list-inline">
						<?php foreach ($member_review as $value){ ?>
						<li>
							<div class="testimonialText">
									<p><i class="fa fa-quote-left fa-3x coloredFont"></i><?php echo $value['mem_review'];?> </p>
							</div>
							<div class="testimonial-clientImg">
			<?php $data['member_detail']=$this->model_user->getMember_image($value['pro_id'],$value['userid']);                     	     
              //print_r($data['member_detail']);exit();?>
							<!-- <img src="<?php echo base_url();?>bookmyplot_design/images/client1.png" align="left">  -->
						<img src="<?php echo base_url($data['member_detail'][0]['member_image']);?>" align="left">
 							<h4><?php echo $data['member_detail'][0]['firstname'].' '.$data['member_detail'][0]['lastname'];?></h4>
								<span><?php echo $data['member_detail'][0]['designation'] ;?>, <?php echo $data['member_detail'][0]['company'] ;?></span>
							</div>	
						</li>
						<?php } ?>
						<!-- <li>
							<div class="testimonialText">
								<p><i class="fa fa-quote-left fa-3x coloredFont"></i>Lorem Ipsum is simply dummy text of 
									the printing and <br/>typesetting industry. 
									Lorem Ipsum has been the industry's standard <br/>
									dummy text ever since the 1500s, when an unknown<br/> 
									printer took a galley of type and  scrambled it to<br/> 
									make a type specimen book. </p>
							</div>
							<div class="testimonial-clientImg">
								<img src="<?php echo base_url();?>bookmyplot_design/images/client1.png" align="left"> 
								<h4>Maria Desouza</h4>
								<span>Software Engineer, Infosys</span>
								
							</div>
						</li>
						<li>
							<div class="testimonialText">
									<p><i class="fa fa-quote-left fa-3x coloredFont"></i>Lorem Ipsum is simply dummy text of 
									the printing and <br/>typesetting industry. 
									Lorem Ipsum has been the industry's standard <br/>
									dummy text ever since the 1500s, when an unknown<br/> 
									printer took a galley of type and  scrambled it to<br/> 
									make a type specimen book. </p>
							</div>
							<div class="testimonial-clientImg">
							<img src="<?php echo base_url();?>bookmyplot_design/images/client1.png" align="left"> 
								<h4>Maria Desouza</h4>
								<span>Software Engineer, Infosys</span>
							</div>	
						</li>
						<li>
							<div class="testimonialText">
								<p><i class="fa fa-quote-left fa-3x coloredFont"></i>Lorem Ipsum is simply dummy text of 
									the printing and <br/>typesetting industry. 
									Lorem Ipsum has been the industry's standard <br/>
									dummy text ever since the 1500s, when an unknown<br/> 
									printer took a galley of type and  scrambled it to<br/> 
									make a type specimen book. </p>
							</div>
							<div class="testimonial-clientImg">
								<img src="<?php echo base_url();?>bookmyplot_design/images/client1.png" align="left"> 
								<h4>Maria Desouza</h4>
								<span>Software Engineer, Infosys</span>
								
							</div>
						</li> -->
					</ul>
				</div>
			
		</div>
	</div>
</div>



<!-- Sixth Section ends here -->

<!-- footer starts here -->
	<div class="FooterSection">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="FooterText text-justify">
						<h4>About Bookmyplots</h4><br/>
						<p>We at bookmyplots.com select the prime projects for best prize at best locations with the best amenities strategically located for a future growth appreciation with best price. We strive to work for a group creation wherein the group will be benefitted getting the best group deal and...</p><br/>
<!-- 						<p>The Plots and Land ecosystem aims to replace existing information asymmetry </p>
 -->						<a class="btn btn-mini" href="<?php echo base_url(); ?>index.php/user/aboutus">» Read More</a>
					</div>
				</div>
				<div class="col-md-3 borderLeftRight">
					<div class="FooterText">
						<h4>Popular Searches</h4>
						<div class="row">
							<div class="col-sm-6">
								<div class="FooterSecondText">
									<ul>
								<?php foreach ($popular_search1 as $popular_area) {?>
							        <li>
								<?php echo $popular_area['area_name'];?>
							       </li>
							    <?php } ?>	
									</ul>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="FooterSecondText">
									<ul>
										<?php foreach ($popular_search2 as $popular_area) {?>
							        <li>
								<?php echo $popular_area['area_name'];?>
							       </li>
							    <?php } ?>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="FooterText"><!--FooterText starts here-->
						<h4>Quick Links</h4>
						<div class="row">
							<div class="col-sm-6">
								<div class="FooterSecondText">
									<ul>
										<li><a href="<?php echo base_url(); ?>index.php/user/aboutus">About Us</a></li>
										<li><a href="<?php echo base_url(); ?>index.php/user/contactus">Contact Us</a></li>
									    <li><a href="<?php echo base_url(); ?>index.php/user/carrers">Carrers</a></li>

									</ul>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="FooterSecondText">
									<ul>
			                           <li><a href="<?php echo base_url(); ?>index.php/user/faq">Help</a></li>
									    <li><a href="<?php echo base_url(); ?>index.php/user/advertise">Advertise With Us</a></li>
										<li>Blog</li>
									</ul>
								</div>
							</div>
						</div>
					</div><!--FooterText ends here-->
					
				</div>

			</div>
		</div>
	</div>
	

	<div class="FooterSection FooterSecondSection">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h5>Copyright © 2015 www.bookmyplots.com</h5>
				</div>
				<div class="col-md-4">
					<h5>Designed by - www.indglobal.in</h5>
				</div>
				<div class="col-md-4">
					<div class="FooterLastulli">
						<ul>
							<li>Listing Policy </li>
							<li>Terms of Use</li>
							<li>Privacy Policy</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- footer ends here -->
<div class="modal fade bs-example-modal-lg" id="myModalhome" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="row">
      	<div class="col-md-12 popupleftbg">
      		<h4>Benefits of Group Buying - Unbeatable Price Challenge</h4>
      		<div class="row">
      			<div class="col-sm-6">
      				<p class="otherwesite">www.otherwebsite.com</p>
      				<img src="<?php echo base_url();?>bookmyplot_design/images/individual.png" class="individualimg">
      			</div>
      			<div class="col-sm-6">
      				<img src="<?php echo base_url();?>bookmyplot_design/images/logo.png">
      				<img src="<?php echo base_url();?>bookmyplot_design/images/ourpurchase.png">
      			</div>
      		</div>
      		<div class="row textbordertop">
      			<div class="col-sm-6" style="padding:0;">
      				<div class="priceplots">
		      			<ul>
		      				<!-- <li><i class="fa fa-circle-thin"></i> Group Discounts of Upto 25%</li>
		      				<li><i class="fa fa-circle-thin"></i> Added Benefits includes  maintenance for upto 2 years</li>
		      				<li><i class="fa fa-circle-thin"></i> Lifetime Tax Pay Assistance to members </li>
		      				<li><i class="fa fa-circle-thin"></i> Individual Plot Maintenance by BookmyPlots Team - 
								Photos and videos of your Plot shared every 6 months.</li> -->
		      			</ul>
		      		</div>
      			</div>
      			<div class="col-sm-6" style="padding:0;">
      				<div class="priceplots">
		      			<ul>
		      				<li><i class="fa fa-circle-thin"></i> Group Discounts of Upto 25%</li>
		      				<li><i class="fa fa-circle-thin"></i> Added Benefits includes  maintenance for upto 2 years</li>
		      				<li><i class="fa fa-circle-thin"></i> Lifetime Tax Pay Assistance to members </li>
		      				<li><i class="fa fa-circle-thin"></i> Individual Plot Maintenance by BookmyPlots Team - 
								Photos and videos of your Plot shared every 6 months.</li>
		      			</ul>
		      		</div>
      			</div>
      		</div>
      		
      	</div>
      	<div class="popupbottomstrip text-center">
      			<br><h3>FOR SMART PEOPLE. SMART SAVING</h3>
      			<button type="button" class="close popupclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      		</div>
      	
      </div>
    </div>
  </div>
</div>

<!-- jquery library file -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/js/jquery-1.11.3.min.js"></script>

	<!-- bootstrap js link -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			// $(".dropdown_city").click(function(){
   //            var id=$(this).val();
   // 	          $("#city").val(id);
   //            });
			$('.dropdown_city').on('change', function() {
            var me = $(this);
            $("#city").val(me.val()); 
            $.post('<?php echo site_url("property/getLocation/");?>',{city_id: me.val()}, function(data) {
            console.log(data);
            $('.res_location').html(data);
            });
        });

			//$("#myModalhome").modal('show');
		  	//$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-pills'});
		});
	</script>
	<!-- jquery ui js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/jquery-ui-1.11.4/jquery-ui.js"></script>
	<script type="text/javascript">
		  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });
	</script>
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/js/jquery.cssslider.js"></script>
	<script type="text/javascript">
		$(function() {
            $("#mySlider1").AnimatedSlider( { prevButton: "#btn_prev1", 
                                             nextButton: "#btn_next1",
                                             visibleItems: 3,
                                             infiniteScroll: true,
                                             willChangeCallback: function(obj, item) { $("#statusText").text("Will change to " + item); },
                                             changedCallback: function(obj, item) { $("#statusText").text("Changed to " + item); }
                                          });
        });
	</script>
	<script src="<?php echo base_url();?>bookmyplot_design/plotslider/thumbnail-slider.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/js/owl.carousel.min.js"></script>
	<script type="text/javascript">
		/* Starts banner script */
    $("#coe-banner").owlCarousel({ 
      autoplay:true,
      autoplayTimeout:3000, 
      autoplayHoverPause:true,
      items:1,
      nav: true,
      loop:true,
      dots:true,
      thumbs: false   
   });
   /* Ends banner script */

   $("#reg-open").click(function(){
      $(".plot-search").show();
   });
//    $("#search").click(function(){
//    	///alert("hiiiii");
//     var location=$(".res_location").val();
//     if(location==0){
//     alert("Please choose location first");
//     return false;
//     }
    
// window.setTimeout(function() {
//     $('#loader').show('slow');
// }, 5000);
//       return true;
//    });


		// $("#login").click(function(){
		// 	var email=$("#exampleInputEmail1").val();
		// 	var password=$("#exampleInputPassword1").val();
		// 	alert(email);
		// 	alert(password);
		// 	//var name=$("#name").val();
		// 	//if(dept=='' && code=='' && name==''){
		// 		//alert('Please Enter some input');
		// 	//}else{
		// 		$.ajax({
		// 		//url: "<?php echo site_url('user/user_login')?>"+'?email='+email+'&password='+password,
		// 		url: "<?php echo base_url(); ?>" + "index.php/user/user_login",

		// 	    //type: 'GET',
		// 	    type: "POST",
		// 	    //dataType: 'html',
		// 	    //dataType: 'json',
  //               data: {email:email,password: password},
		// 	    success: function(res){
  //                   //alert(res);
		// 	    	if (res=="login_success")
  //                    { 
  //                    	//alert("hiii");
  //                   window.location.href ='<?php echo base_url();?>index.php/welcome';
  //                    }else if(res=="login_fail"){
  //                      alert("login_fail");
  //                      //$("#login_msg").hide();
  //                    }                   
		// 	    }
		// 	});
		// 	//}
			
		// });

     function enableTxt(elem) {

   	 
   var id = $(elem).attr("id");
   pro_type_id.value=id;
    if(id=="1"){
    	//alert("ok");
      //$('#uper').css({"background-color":'red'});
      //$('#use').hide('slow');
      //$('#brl').hide('slow');
      $('#myid').hide('slow');
      
    }else if(id=="2"){
    $.post('<?php echo site_url("property/getall_property_use/"); ?>',{pro_type_id:id}, function(data) {
                console.log(data);
              $('.use_fr').html(data);
          });
      //$('#use').show('');
      $('#myid').show('');
     // $('#brl').show('');
      //$('#uper').css({"width":'0'});
    }else if(id=="3"){
      $.post('<?php echo site_url("property/getall_property_use/"); ?>',{pro_type_id:id}, function(data) {
                console.log(data);
              $('.use_fr').html(data);
          });
      $('#use').show('');
      $('#brl').show('');
      $('#myid').show('');
    }

    
}



   $("#reg-close").click(function(){
      $(".plot-search").hide();
   });
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
		
 
		  $("#owl-demo").owlCarousel({
		 
		      autoPlay: 3000, //Set AutoPlay to 3 seconds
		 
		      items : 4,
		      itemsDesktop : [1199,3],
		      itemsDesktopSmall : [979,3]
		 
		  });

        	

		});
	</script>
	 <script type="text/javascript">
  //pagination starts here
    $(document).ready(function(){
    
    //how much items per page to show
    var show_per_page =5; 
     	var first=parseInt($('#firstcountervalue').val()-1);
     	var second=parseInt($('#secondcountervalue').val()-1);
     	var sum=first+second;
     	//alert(sum);
     	//alert(second);
    //getting the amount of elements inside content div
   var number_of_items=$('#content').children().size();
   //alert(number_of_items);
   // var number_of_items=sum;
    //alert(number_of_items);
    //calculate the number of pages we are going to have
    var number_of_pages = Math.ceil(number_of_items/show_per_page);
    
    //set the value of our hidden input fields
    $('#current_page').val(0);
    $('#show_per_page').val(show_per_page);
    
    //now when we got all we need for the navigation let's make it '
    
    /* 
    what are we going to have in the navigation?
        - link to previous page
        - links to specific pages
        - link to next page
    */
    //var navigation_html = '<a class="previous_link" href="javascript:previous();">Prev</a>';
        //var navigation_html +='<ul class="control-box pager"><li><a class="previous_link" data-slide="prev"  href="javascript:previous();">Prev</a></li></ul>';
    var navigation_html ='<ul class="control-box pager"><li><a class="previous_link" data-slide="prev"  href="javascript:previous();">Prev</a>';

    var current_link = 0;
    while(number_of_pages > current_link){
    	navigation_html += '<a class="page_link" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a>';
        //navigation_html += '';
        current_link++;
    }
    if(number_of_pages==1){

    }else{
    //navigation_html += '<a class="next_link" href="javascript:next();">Next</a>';
    navigation_html +='<a class="next_link" data-slide="next"  href="javascript:next();">Next</a></li></ul>';


    }

        //                      <ul class="control-box pager">
								// 	<li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
								// 	<li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
								// </ul>
    
    $('#page_navigation').html(navigation_html);
    
    //add active_page class to the first page link
    $('#page_navigation .page_link:first').addClass('active_page');
    
    //hide all the elements inside content div
    $('#content').children().css('display', 'none');
    
    //and show the first n (show_per_page) elements
    $('#content').children().slice(0, show_per_page).css('display', 'block');
    
});

function previous(){
    
    new_page = parseInt($('#current_page').val()) - 1;
    //if there is an item before the current active link run the function
    if($('.active_page').prev('.page_link').length==true){
        go_to_page(new_page);
    }
    
}

function next(){
    new_page = parseInt($('#current_page').val()) + 1;
    //if there is an item after the current active link run the function
    if($('.active_page').next('.page_link').length==true){
        go_to_page(new_page);
    }
    
}
function go_to_page(page_num){
    //get the number of items shown per page
    var show_per_page = parseInt($('#show_per_page').val());
    
    //get the element number where to start the slice from
    start_from = page_num * show_per_page;
    
    //get the element number where to end the slice
    end_on = start_from + show_per_page;
    
    //hide all children elements of content div, get specific items and show them
    $('#content').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
    
    /*get the page link that has longdesc attribute of the current page and add active_page class to it
    and remove that class from previously active page link*/
    $('.page_link[longdesc=' + page_num +']').addClass('active_page').siblings('.active_page').removeClass('active_page');
    
    //update the current page input field
    $('#current_page').val(page_num);
}
//pagination ends here//
</script>
</body>
</html>
