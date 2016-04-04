<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book My Plot</title>
	<!-- Bootstrap css links-->
	<link href="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="plugins/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<!-- font-awesome css links-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/jquery.material.form.css">
	<!-- Add fancyBox main JS and CSS files-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/jquery.fancybox.css" media="screen" />
    <style>
            /****** Rating Starts *****/
/*            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
*/
            fieldset, label { margin: 0; padding: 0; }
            body{ margin: 20px; }
            h1 {font-size: 1.5em; margin: 10px;}
             
            .rating{ 
                border: none;
                float: right;
            }
            .rating > input {display: none;} 
            .rating > label:before{ 
                margin: 5px;
                font-size:.75em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating > label { 
                color: #ddd;
                float: right;
            }

            .rating > input:checked ~ label, 
            .rating:not(:checked) > label:hover,  
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }
            .rating > input:checked + label:hover, 
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, 
            .rating> input:checked ~ label:hover ~ label { color: #FFED85;  }    




            /* Downloaded from http://devzone.co.in/ */
        </style>
        <style>
            /****** Rating Starts *****/
/*            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
*/
            fieldset, label { margin: 0; padding: 0; }
            body{ margin: 20px; }
            h1 {font-size: 1.5em; margin: 10px;}
             
            .rating1{ 
                border: none;
                float: right;
            }
            .rating1 > input {display: none;} 
            .rating1 > label:before{ 
                margin: 5px;
                font-size:.75em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating1 > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating1 > label { 
                color: #ddd;
                float: right;
            }

            .rating1 > input:checked ~ label, 
            .rating1:not(:checked) > label:hover,  
            .rating1:not(:checked) > label:hover ~ label { color: #FFD700;  }
            .rating1 > input:checked + label:hover, 
            .rating1 > input:checked ~ label:hover,
            .rating1 > label:hover ~ input:checked ~ label, 
            .rating1> input:checked ~ label:hover ~ label { color: #FFED85;  }    

             


            /* Downloaded from http://devzone.co.in/ */
        </style>
         
    <style type="text/css">

		.BannerText{
			margin-top: 18%;
		}
		.OverviewMenu .nav-tabs>li>a {
		    padding: 10px 32px;ABOUT BUILDER		    
		}
		.PropertyContent{
			padding: 0;
		}
		.locationmaps {
		    margin: 2% 0 2% 0;
		    border: 2px solid #D6D6D6;
		    border-radius: 3px;
		    margin: 0 auto;
		    width: 95%;
		    position: relative;
		}
		.addresstext{
			position: absolute;
		    bottom: 0;
		    background-color: rgba(102, 102, 102, 0.82);
		    width: 95%;
		    color: #fff;
		    left: 2%;
		    padding-left: 5%;
		}
		.addresstext p{margin: 0;}
		.locationmaps{margin: 1% 0 1% 0;}
    </style>
    
</head>
<body>


<!-- header starts here -->
	<?php //include_once('header.php'); 
	include_once(APPPATH.'libraries/header.php');
	?>
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
						<div class="col-md-2 BannerText">
						<img src="<?php echo base_url().'uploads/developer/pimage/'.$dev_id.'/'.$getSpecific_developer_detail['0']['photograph']?>">
 
<!--              <img src="<?php echo base_url();?>uploads/developer/pimage/<?php echo $dev_id.'/'.$getSpecific_developer_detail['0']['photograph'];?>"> 
 -->
<!-- 			  <img src="<?php echo base_url();?>bookmyplot_design/images/builderplogo.png">
 -->			</div>
                    <?php $j=round($getAvgRating);
							?>
						<div class="col-md-9 BannerText">
					<h2><?php echo $getSpecific_developer_detail['0']['dev_name'];?> 
                       <fieldset id='demo1'  disabled class="rating">
                        <input class="stars"  type="radio" id="star5" name="rating" value="5"<?php if($j==5){?>checked<?php }?> />
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4half"   name="rating" value="4.5" <?php if($j==4.5){?>checked<?php }?> />
                        <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating"  value="4" <?php if($j==4){?>checked<?php }?> />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3half" name="rating"  value="3.5" <?php if($j==3.5){?>checked<?php }?>/>
                        <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating" value="3" <?php if($j==3){?>checked<?php }?> />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2half" name="rating"  value="2.5" <?php if($j==2.5){?>checked<?php }?>/>
                        <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating"  value="2" <?php if($j==2){?>checked<?php }?>/>
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1half" name="rating"  value="1.5" <?php if($j==1.5){?>checked<?php }?>/>
                        <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating"  value="1" <?php if($j==1){?>checked<?php }?>/>
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input class="stars" type="radio" id="starhalf" name="rating"  value="0.5" <?php if($j==0.5){?>checked<?php }?>/>
                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
<!-- 					<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
 -->						</h2>
							<h4><?php echo $getSpecific_developer_detail['0']['address1_dev'];?> </h4>
						</div>
						<!-- <div class="col-md-3 text-center groupplots">
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
						</div> -->
					</div>
				</div>
				
			</div>
			<div class="propertyMenu">
				<div class="container">
					<div class="OverviewMenu">
						<div class="row">
						<!-- Nav tabs -->
						  <ul class="nav nav-tabs col-md-9" style="padding-left:2%;" role="tablist">
						    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">ABOUT BUILDER</a></li>
						    <li role="presentation"><a href="#gallery" aria-controls="profile" role="tab" data-toggle="tab">PROPERTY LISTED</a></li>
						    <li role="presentation"><a href="#plots" aria-controls="messages" role="tab" data-toggle="tab">GALLERY</a></li>
						    <li role="presentation"><a href="#location" aria-controls="messages" role="tab" data-toggle="tab">LOCATION MAP</a></li>
						    <li role="presentation"><a href="#reviews" aria-controls="settings" role="tab" data-toggle="tab">REVIEWS</a></li>
						  </ul>
						<!--   <div class="col-md-3 StartFrmsmalldiv text-center">
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
										<div class="MainAboutTab PropertyContent">
						    		<div class="propertyaboutTitle">
										<h3>ABOUT BUILDER</h3>
									</div>
									<div class="AboutMiddleSection">
										<div class="row">
											<div class="col-md-4 text-center">
												<img src="<?php echo base_url();?>bookmyplot_design/images/builderlogo.jpg">
											</div>
											<div class="col-md-8 AboutMiddleText">
												<p><?php echo $getSpecific_developer_detail['0']['dev_overview'];?><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum -->.</p>
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
										
									</div><!--PropertyContent ends here-->
									
								</div> <!--LeftSection Image ends here-->
							
						    </div>
						    <div role="tabpanel" class="tab-pane" id="gallery"><!--TabTwo starts here-->
								<div class="PropertyContent">
									<div class="propertyaboutTitle">
										<h3>12 PROPERTY LISTED</h3>
									</div>
									<?php 
if($getallProperty_by_devid=="empty"){
//if(empty($search)){?>
<div style="text-align:center;padding-top:20px; background-color:#F0F8FF;"><b>Sorry no records found<b></div>
<?php }else{?>
<div id="content">
<?php 
$i=1;
foreach ($getallProperty_by_devid as $search_data) {
$dev_id=$search_data['developer_id'];
	//print_r($dev_id);
if($search_data['pro_type_id']=="1"){
$pro_type_id=$search_data['pro_type_id'];
$price_per_sqfeet='';
$pro_name=$search_data['pro_name'];
$pro_id=$search_data['pro_id'];
$pro_type_name=$search_data['pro_name'];//proerty_type_name
$property_address=$search_data['address_pro'];//property_address
$developer_name=getDevelopername($search_data['developer_id']);
//$price_in_words=$search_data['words'];
//$price_in_words="";
$max_price_in_words=getMaxpriceinwords($search_data['max_price']);
$price_per_acresby_id="";
}elseif($search_data['pro_type_id']=="2"){
$pro_type_id=$search_data['pro_type_id'];
$pro_name=$search_data['pro_name'];
$price_per_sqfeetby_figure=$search_data['price_per_square'];
$price_per_sqfeet=getMinprice_words_Byfigure($price_per_sqfeetby_figure);
$pro_id=$search_data['pro_id'];
$pro_type_name=$search_data['pro_name'];
$developer_name=getDevelopername($search_data['developer_id']);
$property_address=$search_data['address_pro'];
$price_in_words=no_to_words($search_data['total_price']);

//$price_in_words=$search_data->words;
$max_price_in_words="";
$price_per_acresby_id="";
}elseif($search_data['pro_type_id']=="3"){
$pro_type_id=$search_data['pro_type_id'];
$pro_name=$search_data['pro_name'];
$price_per_acresby_figure=$search_data['price_per_acres'];
$price_per_acresby_figure=getMinprice_words_Byfigure($price_per_acresby_figure);
$pro_id=$search_data['pro_id'];
$pro_type_name=$search_data['pro_name'];
$developer_name=getDevelopername($search_data['developer_id']);
$property_address=$search_data['address_pro'];
//$price_in_words=$search_data['words'];
$max_price_in_words="";
$total_acres=$search_data['total_acres'];
}

$data['allimages_byproid']=$this->model_search_property->getAll_images_by_property_id($pro_id);

?>
<div class="PropertyListingPage ListingBox"><!--Property Listing starts here-->
<div class="modal fade bs-example-modal-lg" id="joingroup_<?php echo $pro_id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg modallength">
    <div class="modal-content">
      <div class="row">
        <div class="col-md-8 popupleftbg">
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
                  <li><i class="fa fa-circle-thin"></i> Group Discounts of Upto 25%</li>
                  <li><i class="fa fa-circle-thin"></i> Added Benefits includes  maintenance for upto 2 years</li>
                  <li><i class="fa fa-circle-thin"></i> Lifetime Tax Pay Assistance to members </li>
                  <li><i class="fa fa-circle-thin"></i> Individual Plot Maintenance by BookmyPlots Team - 
                Photos and videos of your Plot shared every 6 months.</li>
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
        <div class="col-md-4 popform">
        	<div id="success_<?php echo $i;?>" class="success"></div>
               <form id="uploadimage_<?php echo $i;?>" action="" method="post" enctype="multipart/form-data">
               	<input type="hidden" class="form-control" name="count" value="<?php echo $i;?>">
            <div class="row">
                  <div class="col-sm-6 form-group">
                      <label for="exampleInputEmail1">First Name</label>
              <input type="email" class="form-control" id="firstname" placeholder="Enter First Name">
                  </div>
                  <div class="col-sm-6 form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                      <input type="email" class="form-control" id="lastname" placeholder="Enter Last Name">
                  </div>  
                </div>
                  <div class="col-sm-12 form-group">
                    <label for="exampleInputEmail1">Mail Id</label>
              <input type="email" class="form-control" id="email_member" placeholder="Enter Mail Id" value="<?php if($logged_in=="TRUE"){ echo $userid; }else{}?>">
                </div>
                <div class="col-sm-12 form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
                <div class="input-group">
              <span class="input-group-addon" id="basic-addon3">+91</span>
              <input type="text" class="form-control" id="phone" aria-describedby="basic-addon3" placeholder="Enter your 10 digit mobile number">
            </div>
                </div>
                <div class="col-sm-12 form-group">
                    <label for="exampleInputEmail1">Where do you work?</label>
                <input type="text" class="form-control" id="company" placeholder="Enter your organisation name">
                </div>
                <div class="col-sm-12 form-group">
                    <label for="exampleInputEmail1">Enter your designation</label>
                <input type="text" class="form-control" id="designation" placeholder="Enter your designation here">
                </div>
                <div class="col-sm-12 form-group">
                    <label for="exampleInputEmail1">Location</label>
                    <select name="location" class="form-control">
                                 <option value="0">Select</option>
							     <?php foreach ($Location_by_city as $loc) {?>
                         <option value="<?php echo $loc['city_id'];?>"><?php echo $loc['city_name'];?></option>
                                                <?php } ?>
                    </select>
                  </div>
                <div class="col-sm-12 form-group">
                    <label for="exampleInputEmail1">Image</label>
                      <input type="file" class="form-control" name="file"
                      id="file" placeholder="image"/>
                  </div>

                <div class="col-sm-6">
  <button type="submit" class="btn btn-joingroup" id="submit_join_group">JOIN GROUP</button>

                <!--   <button type="submit" class="btn btn-joingroup">JOIN GROUP</button> -->
                </div> 
                <div class="col-sm-6 popupimgrelative">
                  <img src="images/popupimg.png" width="50%" class="Imgpopup">
                </div>
            </form>
        </div>
        <button type="button" class="close popupclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
    </div>
  </div>
</div>

<!--pradeep model-->
<script type="text/javascript">
  	$(document).ready(function(){
$("#uploadimage_"+<?php echo $i;?>).on('submit',(function(e) {
e.preventDefault();
//alert(<?php echo $i?>);
var formData = new FormData( $("#uploadimage_"+<?php echo $i;?>)[0]);
$.ajax({
//url: "ajax_php_file.php", 
 url: "<?php echo base_url(); ?>" + "index.php/member/member_join_group",// Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
 if (data=="ok")
   { 
                	//alert("okkk");
   $("#success_<?php echo $i;?>").append("Registration is successfull.. Thank you");
    }else if(data=="error"){
   alert("sorry file error");
                     }  
}
});
}));
});
</script>


									
<div class="row">
						<div class="col-md-4" style="padding:0;">
						<div id="carousel-example-generic_<?php echo $i;?>" class="carousel slide Imgfixed ListingImages" data-ride="carousel">
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
										        <?php foreach ($data['allimages_byproid'] as $value_images){
                                         $images=$value_images['property_images'];
                                         	?>
															<div class="item">
<!-- 												    <img src="<?php echo base_url();?>bookmyplot_design/images/pro_3.jpg" alt="...">
 -->												    <img src="<?php echo base_url($value_images['property_images']);?>" alt="...">
												    <div class="carousel-caption">
												        
												    </div>
												</div>
											   <?php }?>
														   
														</div>

														  <!-- Controls -->
														   <a class="left" href="#carousel-example-generic_<?php echo $i;?>" role="button" data-slide="prev">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="right" href="#carousel-example-generic_<?php echo $i;?>" role="button" data-slide="next">
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
													<?php $data['no_interested_people']=$this->model_search_property->getNo_interested_people($pro_id);?>
										<h3><?php echo $data['no_interested_people'];?></h3>
												</div>
												<h5>PEOPLE</h5>
											</div>
										</div>

										<div class="col-md-6 fixedlistingtexts" style="padding:0;">
                                        <div class="InnerListingWoods">
									     <div class="row">
                                        <div class="col-sm-8">
										<a href="<?php echo site_url('member/specific_project/'.$pro_id);?>"><h3><?php echo $pro_name;?></h3></a>
											<div class="propertyrupees">
												<h4><i class="fa fa-inr"></i> <?php if($pro_type_id=="3"){echo $total_acres." ";}elseif($pro_type_id=="2"||$pro_type_id=="1"){echo "20 lacs ";} //echo $price_in_words ;?> <?php if($pro_type_id=="3"){?><i class="fa fa-inr"></i><?php echo " ".$price_per_acresby_figure.' per acres';}elseif($pro_type_id=="2"){?><i class="fa fa-inr"></i><?php echo $price_per_sqfeet.' per sqft' ;}elseif($pro_type_id=="1"){echo "per sqft";}?></h4>
											</div>
                                        <div class="Starrating  text-left">

							
				                <?php 
			$data['rating']=$this->model_search_property->getallRating($pro_id);
			if(empty($data['rating'])){
				$j=0;
			}else{
		    $j=round($data['rating']['0']['avg_rate']);
		    }
		    ?>
		    <fieldset id='demo2' class="rating">
                        <input class="stars" type="radio" id="star5" name="rating_<?php echo $pro_id;?>" value="5"/>
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4half" name="rating_<?php echo $pro_id;?>" value="4.5" <?php if($j==4.5){?>checked<?php }?> />
                        <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating" value="4" <?php if($j==4){?>checked<?php }?> />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3half" name="rating_<?php echo $pro_id;?>" value="3.5" <?php if($j==3.5){?>checked<?php }?>/>
                        <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating_<?php echo $pro_id;?>" value="3" <?php if($j==3){?>checked<?php }?> />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2half" name="rating_<?php echo $pro_id;?>" value="2.5" <?php if($j==2.5){?>checked<?php }?>/>
                        <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating_<?php echo $pro_id;?>" value="2" <?php if($j==2){?>checked<?php }?>/>
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1half" name="rating_<?php echo $pro_id;?>" value="1.5" <?php if($j==1.5){?>checked<?php }?>/>
                        <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating_<?php echo $pro_id;?>" value="1" <?php if($j==1){?>checked<?php }?>/>
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input class="stars" type="radio" id="starhalf" name="rating_<?php echo $pro_id;?>" value="0.5" <?php if($j==0.5){?>checked<?php }?>/>
                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
					
															<!-- <i class="fa fa-star rate1"></i>
															<i class="fa fa-star rate1"></i> 
															<i class="fa fa-star rate1"></i> 
															<i class="fa fa-star rate1"></i> 
															<i class="fa fa-star rating"></i> -->
															<div class="Reviews">
																<a href="javascript:void(0)">32 Reviews</a>
															</div>
														</div>

														<div class="clear"></div>
														<i class="fa fa-map-marker"></i> Near Jigani
													</div>

													<div class="col-sm-4" style="padding:0;">
<!-- 														<button class="btn btn-joinGroup"><i class="fa fa-users"></i> Join Group</button>
 -->														 <?php if($userid!=""){
 $data['checkmember_exists']=$this->model_search_property->getMember_existsornot($pro_id,$userid);
 if($data['checkmember_exists']!="empty"){?>
 <button class="btn btn-joinGroup" id="group_discussion_<?php echo $i;?>" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>">Group Discussion</button>

<?php  }else{?>
 	    <button class="btn btn-joinGroup" data-toggle="modal" data-target="#joingroup_<?php echo $pro_id;?>" data-id=""><i class="fa fa-users"></i>Join Group</button>

 <?php }

 }else{?>
 	    <button class="btn btn-joinGroup" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>" id="check_login_or_not_<?php echo $i;?>" data-toggle="modal" data-id=""><i class="fa fa-users"></i>Join Groups</button>

<?php }
 	?>
													</div>
													<div class="ForBest text-right">For Best Deals <i class="fa fa-que fa-question-circle"></i></div>
 <input type="hidden" style="width:100px" id="check_memberornot" value="<?php if($check_memberornot!=="empty"){echo "member_yes";}else{echo "member_no";}?>">
 <input type="hidden" style="width:100px" id="pro_id_<?php echo $i;?>" value="<?php echo $pro_id; ?>">
 <input type="hidden" style="width:100px" id="userid" value="<?php echo $userid;?>">
												</div>
											</div>
											<script type="text/javascript">
  	       $(document).ready(function(){
			$('#group_discussion_'+<?php echo $i;?>).click(function(){
  			var check_memberornot=$("#check_memberornot").val();
  			var userid=$("#userid").val();
  			//alert(userid);
  			var loginornot=$(this).val();
  			//alert(loginornot);
  			var pro_id=$("#pro_id_"+<?php echo $i;?>).val();
  			//alert(pro_id);
  			if(loginornot=="not_logged_in"){
  			alert("please Sign up first");
  			}else{
  			 $.post('<?php echo site_url("property/check_memberornot/"); ?>',{pro_id:pro_id,userid:userid}, function(data) {
                console.log(data);
                //alert(data);
                if(data=="empty"){
                 alert("please Join group first");
                }else{
               window.location.href="<?php echo site_url('group_discussion/add_comment/'.$pro_id);?>";
               //window.location.href ="<?php echo site_url('group_discussion/listed_topic/'.$pro_id);?>";
               <?php //echo site_url('group_discussion/add_comment/'.$topic_id.'/'.$pro_id);?>
                }
                  });
  			}
  			
  		});

       $('#check_login_or_not_'+<?php echo $i;?>).click(function(){
       	var loginornot=$(this).val();
       	if(loginornot=="not_logged_in"){
  			alert("please Sign up first");
  			}else{

  			}
       });

	});
  	                     </script>
											<button class="btn btn-ViewDetails">View Details</button>
										</div>
									</div>
								</div><!--Property Listing ends here-->


		<?php	
	$i++;
}//foreach
?>
</div>	
<?php 

}	//else complete?>		
		<div class="PropertyListingPage ListingBox"><!--Property Listing starts here-->
									
									<div class="row">
										<div class="col-md-4" style="padding:0;">
											
												<div id="carousel-example-generic1" class="carousel slide ListingImages" data-ride="carousel">
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
														<button class="btn btn-joinGroup"><i class="fa fa-users"></i> Join Group</button>
													</div>
													<div class="ForBest text-right">For Best Deals <i class="fa fa-que fa-question-circle"></i></div>
												</div>
											</div>
											<button class="btn btn-ViewDetails">View Details</button>
										</div>
									</div>
								</div><!--Property Listing ends here-->
								</div>
						    </div><!--TabTwo ends here-->

						    <div role="tabpanel" class="tab-pane" id="plots"><!--TabThree starts here-->
								<div class="photoGallery PropertyContent">
									<div class="propertyaboutTitle">
										<h3>GALLERY</h3>
									</div>
									<div class="PhotoGalleryTitle">
										
										<center>
											<p>
												<?php 

                                          if($getDeveloper_galleryimage=="empty"){?>
                                          <h3>No photos Available</h3>
                                         <?php }else{
											foreach ($getDeveloper_galleryimage as $img_value) {

                                                ?>
<a class="fancybox" href="<?php echo base_url().''.$img_value['developer_images'];?>" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?php echo base_url().''.$img_value['developer_images'];?>" alt="" /></a>

										<?php 	} 
									}?>
<!-- 												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/builergallerybig-1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?php echo base_url();?>bookmyplot_design/images/buildergallery-1.jpg" alt="" /></a>
 -->
												<!-- <a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/builergallerybig-2.jpg" data-fancybox-group="gallery" title="Etiam quis mi eu elit temp"><img src="<?php echo base_url();?>bookmyplot_design/images/buildergallery-2.jpg" alt="" /></a>

												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/builergallerybig-3.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="<?php echo base_url();?>bookmyplot_design/images/buildergallery-3.jpg" alt="" /></a>

												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/builergallerybig-4.jpg" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno"><img src="<?php echo base_url();?>bookmyplot_design/images/buildergallery-4.jpg" alt="" /></a>
												
												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/builergallerybig-2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?php echo base_url();?>bookmyplot_design/images/buildergallery-2.jpg" alt="" /></a>

												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/builergallerybig-4.jpg" data-fancybox-group="gallery" title="Etiam quis mi eu elit temp"><img src="<?php echo base_url();?>bookmyplot_design/images/buildergallery-4.jpg" alt="" /></a>

												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/builergallerybig-3.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images/buildergallery-3.jpg" alt="" /></a>

												<a class="fancybox" href="<?php echo base_url();?>bookmyplot_design/images/builergallerybig-1.jpg" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno"><img src="images/buildergallery-1.jpg" alt="" /></a>
											 -->
											</p>
										</center>
										<!-- <h3>Video</h3>
										<center>
											<iframe width="88%" height="350" src="https://www.youtube.com/embed/WRk_eIdjUp8" frameborder="0" allowfullscreen></iframe>
										</center> -->
									</div>
								</div>
						    </div><!--TabThree starts here-->
							

							<div role="tabpanel" class="tab-pane" id="amenities"><!--TabFour starts here-->
								
								

						    </div><!--TabFour ends here-->

						    <div role="tabpanel" class="tab-pane" id="about"><!--TabFive starts here-->
						    	
						    </div><!--TabFive ends here-->
						     

						    <div role="tabpanel" class="tab-pane" id="location"><!--TabFour starts here-->
						   		<div class="PropertyContent">
							   		<div class="propertyaboutTitle">
										<h3>Office Location Map</h3>
									</div>
							   		<div class="locationmaps PropertyContent">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.66007678024!2d77.35073455584109!3d12.954517010195083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka+560001!5e0!3m2!1sen!2sin!4v1453550974658" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
										<div class="addresstext">
											
												<p><i class="fa fa-map-marker"></i> No.16, Curve Road, Tusker Town (Queen’s Circle),, Bengaluru, Karnataka 560051</p>
												<p><i class="fa fa-desktop"></i> bsrdevelopers.com</p>
												<p><i class="fa fa-phone"></i> 080 2286 8710</p>
											
										</div>
									</div>
								</div>
						    </div><!--TabFour ends here-->
						    <div role="tabpanel" class="tab-pane" id="reviews"><!--Tabfifth Starts here-->
								<div class="PropertyContent">
									<div class="propertyaboutTitle">
										<h3>Top Reviews</h3>
					<input type="hidden" value="<?php echo $dev_id;?>" id="dev_id">
					<input type="hidden" value="<?php echo $userid;?>" id="userid">

					<fieldset id='demo2' class="rating1" >
                        <input class="stars" type="radio" id="star5" name="rating1" value="5" />
                        <label class ="full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4half" name="rating1" value="4.5" />
                        <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating1" value="4" />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3half" name="rating1" value="3.5" />
                        <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating1" value="3" />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2half" name="rating1" value="2.5" />
                        <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating1" value="2" />
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1half" name="rating1" value="1.5" />
                        <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating1" value="1" />
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input class="stars" type="radio" id="starhalf" name="rating1" value="0.5" />
                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
					<script>
                        $(document).ready(function () {
                            $(".rating1").click(function () {
                              //alert($(this).val());
                              var dev_id=$("#dev_id").val();
                              var userid=$("#userid").val();
                              if(userid==""){
                            alert("Sorry you are not a member of this group");
                            }else{
   $.post('<?php echo site_url("developer/rating/"); ?>',{rate:$(this).val(),dev_id:dev_id,userid:userid}, function(d) {
                                    if(d>0)
                                    {
                                        alert('You already rated');
                                    }else{
                                        alert('Thanks For Rating');
                                       // $(this).attr("checked");
                                    }
                                });

                                //$(this).attr("checked");
                       }
                            });
                        });
                    </script>
									</div>
									<div class="topReviews">
										<!-- <ul>
											<li>
												<img src="images/reviewicon.png">
											</li>
											<li>
												<h4>Sanjay Devadiga</h4>
												<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											</li>
										</ul> -->
										<div class="timeline">
                
						                    <div class="timeline-element">
						                    
						                        <h4>Sanjay Devadiga<span class="date"><small>December, 2011</small></span></h4>
						                        <p>The establishment of our agency, with two professional insurance agents, in small office in Boston.The establishment of our agency, with two professional insurance agents, in small office in Boston.</p>
						                    
						                    </div>
						                    
						                    <div class="timeline-element">
						                    
						                        <h4>Sanjay Devadiga<span class="date"><small>December, 2011</small></span></h4>
						                        <p>Three new insurance agents in our team, 2.500 customers!</p>
						                    
						                    </div>
						                    
						                    <div class="timeline-element">
						                    
						                        <h4>Sanjay Devadiga<span class="date"><small>December, 2011</small></span></h4>
						                        <p>Moving to a new office in Boston. More than 5.000 customers, great references and great view of the future!</p>
						                    
						                    </div>
						                    <div class="timeline-element">
						                    
						                        <h4>Sanjay Devadiga<span class="date"><small>December, 2011</small></span></h4>
						                        <p>Three new insurance agents in our team, 2.500 customers!</p>
						                    
						                    </div>
						                    <div class="timeline-element">
						                    
						                        <h4>Sanjay Devadiga<span class="date"><small>December, 2011</small></span></h4>
						                        <p>Three new insurance agents in our team, 2.500 customers!</p>
						                    
						                    </div>
						                
						                </div>

									</div>
								</div>
						    </div><!--Tabfifth ends here-->
						  </div>

					
				</div><!--LeftSection ends here-->

				<div class="col-md-3"><!--RightSection Starts here-->
					<img src="<?php echo base_url();?>bookmyplot_design/images/Know-more.jpg">
				</div><!--RightSection ends here-->
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
	
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/js/jquery.fancybox.js"></script>
	<!-- label js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/js/jquery.material.form.js"></script>
	<script src="<?php echo base_url();?>bookmyplot_design/js/numscroller-1.0.js"></script>
    <script src='<?php echo base_url();?>bookmyplot_design/js/jquery.zoom.js'></script>
    <script type="text/javascript">
	// $(document).ready(function(){
	// 	$("#myModal12").modal('show');
	// });
</script>
	<script>
		$(document).ready(function(){
			$('#ex1').zoom();
			$('#ex2').zoom({ on:'grab' });
			$('#ex3').zoom({ on:'click' });			 
			$('#ex4').zoom({ on:'toggle' });
		});
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











