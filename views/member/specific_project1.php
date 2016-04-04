<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book My Plot</title>
	<!-- Bootstrap css links -->
	<link href="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<!-- font-awesome css links -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/style.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.material.form.css">
	<!-- Add fancyBox main JS and CSS files -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/jquery.fancybox.css" media="screen" />
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  <link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet"> 
  <script src="http://vjs.zencdn.net/c/video.js"></script>
	<style>
	#map_canvas{
  width:100%;
  height:350px;
}
.form-group-custom {
    background-color: #89B350;
    text-align: center;
    /* width: 100%; */
    border-radius: 5px;
    padding: 2%;
}
.text-area-custom{
  width: 100%;
  border-radius: 5px;
  padding: 2%;
}
.btn-submit-review{
    background-color: #89B350;
    color: #fff;
    border-radius: 5px;
    float: right;
    padding: 1% 7% 1% 7%;
    font-size: 16px;
    font-weight: 600;
}
.InnerpeopleImg img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
}
</style>
 
 <style>
            /****** Rating Starts *****/
            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
            fieldset, label { margin: 0; padding: 0; }
            body{/* margin: 20px;*/ }
            h1 {font-size: 1.5em; margin: 10px;}

            .rating2{ 
                border: none;
                float: right;
            }
            .rating2 > input {display: none;} 
            .rating2 > label:before{ 
                margin: 5px;                                                                                                      
                font-size:.75em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating2 > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating2 > label { 
                color: #ddd;
                float: right;
            }

            .rating2 > input:checked ~ label, 
            .rating2:not(:checked) > label:hover,  
            .rating2:not(:checked) > label:hover ~ label { color: #FFD700;  }
            .rating2 > input:checked + label:hover, 
            .rating2 > input:checked ~ label:hover,
            .rating2 > label:hover ~ input:checked ~ label, 
            .rating2 > input:checked ~ label:hover ~ label { color: #FFED85;  }     


            /* Downloaded from http://devzone.co.in/ */
        </style>  
        
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

		.LoanApproval{padding-top: 3%;margin-top: 3%;border-top: 1px solid #ccc;}
		.OtherApproval{padding-top: 3%;margin-top: 3%;border-top: 1px solid #ccc;}
		.BannerText img {margin-top: -21%;}
		.viewAllProjects {margin-top: 17%;padding-bottom: 5%;}
		li.innerYou {padding: 3% 10% 0% 10%;}
		.btn-join{background: none;border: 0;}
		.locationAddress{background-color: #fff;padding: 1% 1% 1% 1%;margin-top: 2%;}
		.locationAddress h4{border-bottom: 1px solid #ccc;padding-top: 2%;}
		ul.locAdv {padding: 3%;}
	</style>

</head>
<body>
<!-- header starts here -->
	<?php
	include_once(APPPATH.'libraries/header.php');
	?>
<!-- header ends here -->
<!--pradeep model---->
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
              <img src="<?php echo base_url();?>bookmyplot_design/images/Bookmyplotfinallogo_homepage.png">
              <img src="<?php echo base_url();?>bookmyplot_design/images/ourpurchase.png">
            </div>
          </div>
          <div class="row textbordertop">
            <div class="col-sm-6" style="padding:0;">
              <div class="priceplots">
                <!-- <ul>
                  <li><i class="fa fa-circle-thin"></i> Group Discounts of Upto 25%</li>
                  <li><i class="fa fa-circle-thin"></i> Added Benefits includes  maintenance for upto 2 years</li>
                  <li><i class="fa fa-circle-thin"></i> Lifetime Tax Pay Assistance to members </li>
                  <li><i class="fa fa-circle-thin"></i> Individual Plot Maintenance by BookmyPlots Team - 
                Photos and videos of your Plot shared every 6 months.</li>
                </ul> -->
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
        	<div id="success_<?php echo $pro_id;?>" class="success"></div>
               <form id="uploadimage_<?php echo $pro_id;?>" action="" method="post" enctype="multipart/form-data">
               	<input type="hidden" class="form-control" name="count" value="<?php echo $pro_id;?>">
               	<input type="hidden" class="form-control" name="group_id_<?php echo $pro_id;?>" value="<?php echo $pro_id;?>">
            <div class="row">
                  <div class="col-sm-6 form-group">
                      <label for="exampleInputEmail1">First Name</label>
              <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name">
                  </div>
                  <div class="col-sm-6 form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
                  </div>  
                </div>
                  <div class="col-sm-12 form-group">
                    <label for="exampleInputEmail1">Mail Id</label>
              <input type="email" class="form-control" id="email_member" name="email_member" placeholder="Enter Mail Id" value="<?php if($logged_in=="TRUE"){ echo $userid; }else{}?>">
                </div>
                <div class="col-sm-12 form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
                <div class="input-group">
              <span class="input-group-addon" id="basic-addon3">+91</span>
              <input type="text" class="form-control" id="phone" name="phone" aria-describedby="basic-addon3" placeholder="Enter your 10 digit mobile number">
            </div>
                </div>
                <div class="col-sm-12 form-group">
                    <label for="exampleInputEmail1">Where do you work?</label>
                <input type="text" class="form-control" id="company" name="company" placeholder="Enter your organisation name">
                </div>
                <div class="col-sm-12 form-group">
                    <label for="exampleInputEmail1">Enter your designation</label>
                <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter your designation here">
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
$("#uploadimage_"+<?php echo $pro_id;?>).on('submit',(function(e) {
e.preventDefault();
var formData = new FormData( $("#uploadimage_"+<?php echo $pro_id;?>)[0]);
$.ajax({
//url: "ajax_php_file.php", 
 url: "<?php echo base_url(); ?>" + "index.php/member/member_join_group",// Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: formData, //Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
 if (data=="ok")
   { 
   $("#success_<?php echo $pro_id;?>").append("Registration is successfull.. Thank you");
    }else if(data=="error"){
   alert("sorry file error");
    }  
}
});
}));
});
</script>

<!--sanjaymymodal-->
<!--First Section Starts here-->
	<div class="FirstMainSection">
			<div class="container">
				<ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/welcome">Home</a></li>
				  	<li><a href="#"> <?php echo getLocationname_byid($getSpecific_project_detail['0']['location_pro']);?></a></li>
<!-- 				  	<li><a href="#"><?php echo getProperty_name_bypro_typeid($getSpecific_project_detail['0']['pro_type_id']);?> Plots</a></li>
 -->				  	<li><a href="#"><?php echo getDevelopername($getSpecific_project_detail['0']['developer_id']);?></a></li>
				  	<li class="active"><?php echo $getSpecific_project_detail['0']['pro_name'];?></li>
				</ol>
			</div>
			<div class="BannerText1">
				<div class="container">
					<div class="row">
						<div class="col-md-9 BannerText">
							<?php $j=round($getAvgRating);
							
							?>
							<img src="<?php echo base_url();?>bookmyplot_design/images/100.png" class="img-responsive">
							<br/><br/><br/>
							<h2><?php echo $getSpecific_project_detail['0']['pro_name'];?>
                      <fieldset id='demo1' disabled class="rating2">
                        <input class="stars" type="radio" id="star5" name="rating" value="5"<?php if($j==5){?>checked<?php }?> />
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4half" name="rating" value="4.5" <?php if($j==4.5){?>checked<?php }?> />
                        <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating" value="4" <?php if($j==4){?>checked<?php }?> />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3half" name="rating" value="3.5" <?php if($j==3.5){?>checked<?php }?>/>
                        <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating" value="3" <?php if($j==3){?>checked<?php }?> />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2half" name="rating" value="2.5" <?php if($j==2.5){?>checked<?php }?>/>
                        <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating" value="2" <?php if($j==2){?>checked<?php }?>/>
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1half" name="rating" value="1.5" <?php if($j==1.5){?>checked<?php }?>/>
                        <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating" value="1" <?php if($j==1){?>checked<?php }?>/>
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input class="stars" type="radio" id="starhalf" name="rating" value="0.5" <?php if($j==0.5){?>checked<?php }?>/>
                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
<!-- 							 <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></h2>
 -->					<h4><?php echo $getSpecific_project_detail['0']['address_pro'];?></h4>
							<span class="badge BSR">Developer: <?php echo $getSpecific_developer_detail['0']['dev_name'];?></span><br>




   <?php //print_r($fb_id);?>
 <?php if($userid!="" || $fb_id!=""){

if($userid!=""){
 $data['checkmember_exists']=$this->model_search_property->getMember_existsornot($pro_id,$userid);

}else{
 $data['checkmember_exists']=$this->model_search_property->getMember_existsornot_for_fb($pro_id,$fb_id);

//exit();
}

 if($data['checkmember_exists']!="empty"){?>
<!--  <button class="btn btn-joinGroup" id="group_discussion_<?php echo $pro_id;?>" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>">Group Discussion</button>
 --> <div style="width:140px;padding-top:10px;"><button class="btn btn-joinGroup" id="group_discussion_<?php echo $pro_id;?>" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>">Group Discussion</button></div>

<?php  }else{?>
<!--       <button class="btn btn-joinGroup" data-toggle="modal" data-target="#joingroup_<?php echo $pro_id;?>" data-id=""><i class="fa fa-users"></i>Join Group</button>
 -->      <div style="width:120px;padding-top:10px;"><button class="btn btn-joinGroup" data-toggle="modal" data-target="#joingroup_<?php echo $pro_id;?>" data-id=""><i class="fa fa-users"></i>Join Group</button></div>

 <?php }

 }else{?>
<!--     <button class="btn btn-joinGroup" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>" id="check_login_or_not_<?php echo $i;?>" data-toggle="modal" data-id=""><i class="fa fa-users"></i>Join Group</button>
 -->    <div style="width:120px;padding-top:10px;"><button class="btn btn-joinGroup" data-toggle="modal" data-target="#myModal" ><i class="fa fa-users"></i>Join Group</button></div>

<?php }
  ?>
</div>

 <input type="hidden" style="width:100px" id="check_memberornot" value="<?php if($check_memberornot!=="empty"){echo "member_yes";}else{echo "member_no";}?>">
 <input type="hidden" style="width:100px" id="pro_id_<?php echo $pro_id;?>" value="<?php echo $pro_id; ?>">
 <input type="hidden" style="width:100px" id="userid" value="<?php echo $userid;?>">

<script type="text/javascript">
  	       $(document).ready(function(){
			$('#group_discussion_'+<?php echo $pro_id;?>).click(function(){
  			//var check_memberornot=$("#check_memberornot").val();
  			//var userid=$("#userid").val();
  			//alert(userid);
  			//var loginornot=$(this).val();
  			//alert(loginornot);
  			var pro_id=$("#pro_id_"+<?php echo $pro_id;?>).val();
  			//alert(pro_id);
  			//if(loginornot=="not_logged_in"){
  			//alert("please Sign up first");
  			//}else{
  			// $.post('<?php echo site_url("property/check_memberornot/"); ?>',{pro_id:pro_id,userid:userid}, function(data) {
               // console.log(data);
                //alert(data);
                //if(data=="empty"){
                 //alert("please Join group first");
                //}else{
               window.location.href ="<?php echo site_url('group_discussion/add_comment/'.$pro_id);?>";
               //window.location.href ="<?php echo site_url('group_discussion/listed_topic/'.$pro_id);?>";
               <?php //echo site_url('group_discussion/add_comment/'.$topic_id.'/'.$pro_id);?>
               // }
               //   });
  		//	}
  			
  		});

	});
  	                     </script>

						<?php //print_r($getSpecific_project_detail);?>
						<div class="col-md-3 text-center groupplots">
							<div class="Innerplots">
								<h4><?php echo($getSpecific_project_detail[0]['group_purchase']);?> PLOTS ON GROUP PURCHASE DEAL</h4>
							</div>
							<div class="Innerplots">
								<h1><?php echo($getSpecific_project_detail[0]['booked_plots']);?>+</h1>
								<h4>BOOKED</h4>
							</div>
							<div class="Innerplots">
								<h1><?php echo($getSpecific_project_detail[0]['available_plots']);?>+</h1>
								<h4>AVAILABLE</h4>
							</div>
<!-- 							<button class="btn btn-viewplot"  data-toggle="modal" data-target="#video">PROJECT WALKTHROUGH VIDEO</button>
 -->              <button class="btn btn-viewplot"  data-toggle="modal" data-target="#video">Project&nbsp;&nbsp;<i class="fa fa-video-camera video-icon"></i>&nbsp;&nbsp; Walkthrough</button>

						</div>
					</div>
				</div>
				
			</div>
      
      <!-- Modal -->
<div id="video" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Video</h4>
      </div>
      <div class="modal-body">
         <?php 
                      if(empty($get_video_link_youtube)){?>
                      <h3>No videos Available</h3>
                      <?php }else{?>
                    <iframe width="100%" height="350" src="<?php echo $get_video_link_youtube[0]['link']?>" frameborder="0" allowfullscreen></iframe>
                      <?php } ?>
      </div>
      <div class="modal-footer">
<!--         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 -->      </div>
    </div>

  </div>
</div>






			<div class="propertyMenu">
				<div class="container">
					<div class="OverviewMenu">
						<div class="row">
						<!-- Nav tabs -->
						  <ul class="nav nav-tabs col-md-9" style="padding-left:2%;" role="tablist">
						    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">OVERVIEW</a></li>
						    <li role="presentation"><a href="#gallery" aria-controls="profile" role="tab" data-toggle="tab">GALLERY</a></li>
						    <li role="presentation"><a href="#plots" aria-controls="messages" role="tab" data-toggle="tab">PLOTS</a></li>
						    <li role="presentation"><a href="#amenities" aria-controls="messages" role="tab" data-toggle="tab">AMENITIES</a></li>
						    <li role="presentation"><a href="#about" aria-controls="settings" role="tab" data-toggle="tab">ABOUT BUILDER</a></li>
						    <li role="presentation"><a href="#interestedpeople" aria-controls="settings" role="tab" data-toggle="tab">INTERESTED PEOPLE</a></li>
						    <li role="presentation"><a href="#location" aria-controls="messages" onclick="GetLocation()" role="tab" data-toggle="tab">LOCATION MAP</a></li>
						    <li role="presentation"><a href="#reviews" aria-controls="settings" role="tab" data-toggle="tab">REVIEWS</a></li>
						  </ul>
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
						<input type="hidden" value="<?php echo $pro_id;?>" id="pro_id">
						<input type="hidden" value="<?php echo $userid;?>" id="userid">
            <?php echo $getSpecific_project_detail[0]['pro_overview'];?>
										<!-- <p>Sprawling over 100 acres, Green County is a spacious, lush green new development brought to you by Highlife constructions. Green County has excellent recreational and leisure facilities and comes equipped with all the basic amenities and utilities needed for a comfortable lifestyle, as well as round the clock security facilities. 
										A highly accessible location, with connections via several ring roads, a highway and several rail lines.</p>
										<div class="PropertyUlli">
											<ul>
												<li>Utilities: Box type drainage, Sewage system, Electricity, Over head water tank,Water connection to every plot.</li>
												<li>Recreational and leisure facilities.</li>
												<li>24 hours security & Compound wall for entire township.</li>
												<li>International school.</li>
												<li>Easy accesibility via road and public transport.</li>
												<li>Approval Type: DTCP.</li>
											</ul>
										</div> -->
										<div class="PlotsAvailable"><!--PlotsAvailable starts here-->
											<div class="row">
												<center>
												<ul class="text-center">
														
														<li class="col-md-3 col-md-offset-1 col-sm-2 col-xs-2 text-center">
															<div class="InnerPlotsAvailable commplots">
																<h2><?php echo($getSpecific_project_detail[0]['available_plots']);?></h2>
															</div>
															<h5>PLOTS AVAILABLE</h5>
														</li>
														<li class="col-md-3 col-md-offset-1 col-xs-2 text-center">
															<div class="InnerPlotsRange commplots">
																<h4><?php echo($getSpecific_project_detail[0]['plots_range']);?></h4>
															</div>
															<h5>PLOTS RANGE</h5>
														</li>
														<li class="col-md-3 col-md-offset-1 col-xs-2 text-center">
															<div class="InnerCompletedate commplots">
																<h2><?php echo($getSpecific_project_detail[0]['booked_plots']);?></h2>
															</div>
															<h5>PLOTS BOOKED</h5>
														</li>
														
												</ul>
												</center>
											</div>
										</div><!--PlotsAvailable ends here-->
										<div class="LoanApproval"><!--LoanApproval starts here-->
											<div class="row">
												<h4>LOAN APPROVAL</h4>
												<center>
												<ul class="text-center">
														
														<li class="col-md-4 col-sm-2 col-xs-2 text-center">
															
																<img src="<?php echo base_url();?>bookmyplot_design/images/punjab_national_bank.jpg">
															
															
														</li>
														<li class="col-md-4 col-xs-2 text-center">
															
																<img src="<?php echo base_url();?>bookmyplot_design/images/axis_bank.jpg">
															
															
														</li>
														<li class="col-md-4 col-xs-2 text-center">
															<img src="<?php echo base_url();?>bookmyplot_design/images/lic.jpg">
															
														</li>
														
												</ul>
												</center>
											</div>
										</div><!--LoanApproval ends here-->
										<div class="OtherApproval"><!--OtherApproval starts here-->
											<div class="row">
												<h4>OTHER APPROVAL</h4>

												<center>
												<ul class="text-center">
														
														<li class="col-md-4 col-sm-2 col-xs-2 text-center">
															<img src="<?php echo base_url();?>bookmyplot_design/images/bmrda.png">
															
														</li>
														
														
												</ul>
												</center>
											</div>
										</div><!--OtherApproval ends here-->
										
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
											<p>
											<?php 
                                          if($getSpecific_project_images=="empty"){?>
                                          <h3>No photos Available</h3>
                                         <?php }else{
											foreach ($getSpecific_project_images as $img_value) {
                                                ?>
<a class="fancybox" href="<?php echo base_url().''.$img_value['property_images'];?>" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?php echo base_url().''.$img_value['property_images'];?>" alt="" /></a>

										<?php 	} 
									}?>
											
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
                      <?php 
                      if(empty($get_video_link_youtube)){?>
                      <h3>No videos Available</h3>
                      <?php }else{?>
                    <iframe width="88%" height="350" src="<?php echo $get_video_link_youtube[0]['link']?>" frameborder="0" allowfullscreen></iframe>
                      <?php } ?>

               <?php
                      //if(empty($get_video)){?>
                       <!--<h3>No videos Available</h3>-->

                        <?php //}else{?>
                  <!-- <video width="600" height="600" controls>
                  <source src="<?php echo base_url().''.$get_video[0]['pro_video'];?>" type="video/mp4">
                  </video> --> 
                        <?php // } ?>
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
										<?php echo ($plots_image!="empty") ? '<img src="'.base_url($plots_image).'" height="900" width="100%">' : '<h3>No plots photo Available</h3>'; ?>
<!-- 										<img src='<?php echo base_url();?>bookmyplot_design/images/layoutmap.jpg' width='100%' height='900' alt='Daisy on the Ohoopee'/>
 -->										<!-- <p>Hover</p> -->
									</span>
								<!-- 	<span class='zoom' id='ex1'>
										<img src='<?php echo base_url();?>bookmyplot_design/images/layoutmap.jpg' width='100%' height='900' alt='Daisy on the Ohoopee'/>
										<!-- <p>Hover</p>
									</span> -->
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
                        <?php if(empty($pro_amenities)){?>
                          <h3>No Amenities Available</h3>
                        <?php }else{ ?>

                        <?php $pro_amenities=$pro_amenities[0];
                          $arr_amenities=unserialize($pro_amenities['amenities']);
                          foreach ($arr_amenities as $value) {
                            //print_r($value['amenities_id']);
                            $data['amenities_master']=$this->model_property->get_amenities_from_master($value['amenities_id']);
                            //print_r($data['amenities_master'][0]['image']);?>

                        <li class="col-sm-3 ">
<!--                           <img src="<?php echo base_url();?>uploads/amenities/<?php $data['amenities_master'][0]['image'];?>">
 -->                        <img src="<?php echo base_url().'uploads/amenities/'.$data['amenities_master']['0']['image']?>">

                          <p><?php echo $data['amenities_master'][0]['amenities_name'];?></p>
                        </li>

                            
                       
                          <?php 
                          }
                           }
                         ?>
												<!-- <li class="col-sm-3 ">
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
												</li> -->
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
												<img src="<?php echo base_url();?>bookmyplot_design/images/builderlogo.jpg">
											</div>
											<div class="col-md-8 AboutMiddleText">
		<?php //echo ($getSpecific_developer_detail['0']['photograph']!="") ? '<img src="'.base_url('uploads/developer/'.$getSpecific_developer_detail['0']['photograph']).'" height="" width="">' : ''; ?>											</div>
											<div class="col-md-8 AboutMiddleText">
												<p><?php echo $getSpecific_developer_detail['0']['dev_overview'];?></p>
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
									<center>
										<div class="viewAllProjects">
											<a href="javascript:void(0);">View all BSR Developers property listing</a>
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
													<img src="<?php echo base_url();?>bookmyplot_design/images/ajaykumar.png">
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
											</li>
											<li>
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
											</li>
											<li class="innerYou">
												<div class="InnerpeopleImg5">
													<img src="<?php echo base_url();?>bookmyplot_design/images/you.png">
												</div>
												<h4>YOU</h4>
												<button type="button" class="btn btn-join">JOIN NOW</button>
											</li> -->
											
										</ul>
									</div>
								</div>
						     </div>
     <button id="txtAddress" value="<?php echo $getSpecific_project_detail['0']['address_pro'];?>"></button>

						    <div role="tabpanel" class="tab-pane" id="location">
						   		<div class="locationAddress ">
						   			<h4>LOCATION MAP</h4>
						   			<div class="locationmaps">
						   				 <div id="map_canvas"></div> 

<!-- 										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.66007678024!2d77.35073455584109!3d12.954517010195083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka+560001!5e0!3m2!1sen!2sin!4v1453550974658" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
 -->									</div>
									<h4>LOCATION ADVANTAGE</h4>
									<ul class="locAdv">
										<li>ADVANTAGE 1</li>
										<li>ADVANTAGE 2</li>
										<li>ADVANTAGE 3</li>
										<li>ADVANTAGE 4</li>
										<li>ADVANTAGE 5</li>
									</ul>
								</div>	
						    </div>
						    <div role="tabpanel" class="tab-pane" id="reviews">
								<div class="PropertyContent">
									<div class="propertyaboutTitle">
                    <div class="topreviewrating">
										<ul class="list-inline">
                        <li>
                          <h3 class="left">Top Reviews</h3>
                        </li>
                        <li>  
            					         <fieldset id="demo2" class="rating2 reviewrating" >
                                    <input class="stars" type="radio" id="star5" name="rating2" value="5" />
                                    <label class = "full stars" for="star5" title="Awesome - 5 stars"></label>
                                    <input class="stars" type="radio" id="star4half" name="rating2" value="4.5" />
                                    <label class="half stars" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input class="stars" type="radio" id="star4" name="rating2" value="4" />
                                    <label class = "full stars" for="star4" title="Pretty good - 4 stars"></label>
                                    <input class="stars" type="radio" id="star3half" name="rating2" value="3.5" />
                                    <label class="half stars" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input class="stars" type="radio" id="star3" name="rating1" value="3" />
                                    <label class = "full stars" for="star3" title="Meh - 3 stars"></label>
                                    <input class="stars" type="radio" id="star2half" name="rating1" value="2.5" />
                                    <label class="half stars" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input class="stars" type="radio" id="star2" name="rating1" value="2" />
                                    <label class = "full stars" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input class="stars" type="radio" id="star1half" name="rating1" value="1.5" />
                                    <label class="half stars" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input class="stars" type="radio" id="star1" name="rating1" value="1" />
                                    <label class = "full stars" for="star1" title="Sucks big time - 1 star"></label>
                                    <input class="stars" type="radio" id="starhalf" name="rating1" value="0.5" />
                                    <label class="half stars" for="star1half" title="Meh - 0.5 stars"></label>                                                                                                                                                                                                                                                                                                         
                                </fieldset>
                        </li> 
                        <li>
                          <h4>(Rate Us here)</h4>
                        </li>       
                    </ul>
                    </div>
								<script>
                   
                        $(document).ready(function () {
                          $("#demo2").on("click",".stars",function () {
                           var ratingval = parseFloat($(this).prev().val());
                             var length = $("#demo2 label").length;
                            $("#demo2 label").each(function(key,element){
                                if((length-key) <= (ratingval*2)){
                                    $(this).css('color','yellow');
                                }else{
                                  $(this).css('color','');
                                }
                            });
                              var pro_id=$("#pro_id").val();
                              var userid=$("#userid").val();
                            if(userid==""){
                            alert("Sorry you are not a member of this group");
                            }else{
   $.post('<?php echo site_url("property/rating/"); ?>',{rate:ratingval,pro_id:pro_id,userid:userid}, function(d) {

                                    if(d>0)
                                    {
                                        alert('You already rated');
                                    }else{
                                        alert('Thanks For Rating');
                                       // $(this).attr("checked");
                                    }
                                });

                   
                       }
                            });
                        });
                    </script>
									</div>
				<div class="topReviews">

 <div id="success_mem_review"></div>

<?php if($logged_in=="TRUE"):
     if($check_memberornot!=="empty"):
  ?>
        <div class="chat-message clearfix">
         <form id="signupForm" method="post"  action="<?php //echo site_url('property/pro_review/'); ?>">
              
              <input type="hidden" class="form-control" name="pro_id" value="<?php echo $pro_id;?>" id="pro_id" />
              <input type="hidden" class="form-control" name="userid" value="<?php echo $userid;?>" id="userid" />
              <input type="hidden" class="form-control" name="fb_id" id="fb_id" value="<?php if($fb_id!=""){echo $fb_id;}else{echo "0";}?>" placeholder="">
            <div class="form-group-custom">
              <textarea class="text-area-custom" name="mem_review" id="mem_review" placeholder="Type your review about this project" rows="3"></textarea>
            </div> <br/>
            <button type="submit" class="btn btn-submit-review" id="submit_member_review">Submit</button>
        </form>
      </div><!-- end chat-message -->

<?php endif;
endif;
?>

  <script id="message-template" type="text/x-handlebars-template">
  <li class="clearfix">
    <div class="message-data align-right">
      <span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
      <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
    </div>
    <div class="message other-message float-right">
      {{messageOutput}}
    </div>
  </li>
</script>
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
                           <?php foreach ($getAll_member_review as $value) { ?>

						                    <div class="timeline-element">
						                    <?php 
                                $date=$value['created_at'];
                                $date1= new DateTime($date);

                                ?>
						                        <h4><?php echo getMemberanmeby_email($value['userid']);?><span class="date"><small><?php echo date_format($date1, 'g:ia \o\n l jS F Y');?></small></span></h4>
						                        <p><?php echo $value['mem_review'];?></p>
						                    
						                    </div>
                                <?php }?>
						                    
						                    <!-- <div class="timeline-element">
						                    
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
						                    
						                    </div> -->
						                
						                </div>

									</div>
								</div>
						    </div>
						  </div>
				</div><!--LeftSection ends here-->
        
				<!-- <div class="col-md-3">
        <!-RightSection Starts here-->
					<!-- <div class="RightSection">
						<center>
							<h4>Group Purchase will save you </h4>
							<h3>big!</h3>
							<h3>Are you interested?</h3>
							<div id="success"></div>
							<form action="#" method="post">
								<div class="form-group">
							    	<input type="text" class="form-control" id="fname" name="fname" placeholder="Fname">
							  	</div>
							  	<div class="form-group">
							    	<input type="text" class="form-control" id="lname" name="lname" placeholder="Lname">
							  	</div>
							  	<div class="form-group">
							    	<label for="exampleInputEmail1">Email address</label>
							    	<input type="email" class="form-control" id="email_mem" name="email" placeholder="Email">
							  	</div>
							  	<div class="form-group">
							    	<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
							  	</div>
							  	<div class="squaredThree text-left">
									<input type="checkbox" value="None" id="squaredThree" name="check" />
									<label for="squaredThree"></label>
								</div>
 				  	<button type="submit" id="submit_are_u_interested" class="btn btn-Rightbutton">I am interested</button>
							  	<h4>For smart people smart savings</h4>
							</form>
							
						</center>
					</div>
  -->

<div class="col-md-3"><!--RightSection Starts here-->
<div class="RightSection">
<center>
<h4>Group Purchase will save you </h4>
<h3>big!</h3>
<?php $msg = $this->session->flashdata('message'); 
  echo $msg;  
?>
<h3>BOOK A CAB</h3>
<!-- <form action="<?php echo base_url(); ?>index.php/user/bookacab_cont" method="post">
 --><form action="<?php echo site_url('user/bookacab_cont/'.$pro_id); ?>" method="post">

<!--   <?php echo site_url('developer/update_logo_form/'.$dev_id.'/'.$image_name); ?>
 --><div class="form-group">
<!-- <label for="exampleInputEmail1">Email address</label> -->
<input type="text" required class="form-control" 
name="ipname" placeholder="Your Name">
</div>

<div class="form-group">
<!-- <label for="exampleInputEmail1">Email address</label> -->
<input type="email" required class="form-control"
name="ipmail" placeholder="Email">
</div>
<div class="form-group">
<!-- <label for="exampleInputPassword1">Password</label> -->
<input type="text"required class="form-control"
name="ipphone" placeholder="Phone">
</div>


<button type="submit" name="bac" class="btn btn-Rightbutton">I am interested</button>
<h4>For smart people smart savings</h4>
</form>

</center>
</div>

					<!-- <div class="RightSectionSecondPart">
					<img src="<?php echo base_url();?>bookmyplot_design/images/Know-more.jpg" class="img-responsive"> 
				  <div class="RightBgColor"> -->

              <!-- IMAGE POP UP OF KNOW MORE-->
<div class="RightSectionSecondPart">
<img src="<?php echo base_url();?>bookmyplot_design/images/Know-more.jpg" 
data-toggle="modal" data-target="#myModalhome" class="img-responsive">

<!-- END OF POP UP IMAGE NO MORE-->
    <div class="RightBgColor">

							<div class="GreenRightText">
								<h4>Green Woods Community People</h4>
							</div>
							 <?php foreach ($getInterested_people_byproid as $value) {
                             	//print_r($value['member_image']);?>
                             <div class="UserProfileListing">
								<div class="row">
									<div class="col-sm-2 RoundImg">
										<img src="<?php echo base_url();?>bookmyplot_design/images/round.png" alt="round">
<!-- 										<img src="<?php echo base_url($value['member_image']);?>" alt="round">
 -->									</div>
									<div class="col-sm-9 col-sm-offset-1">
										<h4><?php echo $value['firstname'].'<br>'.$value['lastname'];?></h4>
										<p><?php echo $value['designation'];?> at <?php echo $value['company'].' '.getcityNameByID($value['location']);?></p>
									</div>
								</div>	
							</div>
							<?php }?>

							<!-- <div class="UserProfileListing">
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
							</div> -->

						</div> 

					</div>
				</div><!--RightSection ends here-->
			</div>
		</div>
	</div>
<!--Second Section ends here-->

<!-- footer starts here -->
	<?php 	include_once(APPPATH.'libraries/footer.php');

	//include_once('footer.php'); ?>
<!-- footer ends here-->

	<!-- jquery library js link -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/jquery-1.11.3.min.js"></script>
	<!-- bootstrap library js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/js/jquery.fancybox.js"></script>
	<!-- label js links -->
	<script type="text/javascript" src="<?php //echo base_url();?>bookmyplot_design/js/jquery.material.form.js"></script>
	<script src="<?php echo base_url();?>bookmyplot_design/js/numscroller-1.0.js"></script>
    <script src='<?php echo base_url();?>bookmyplot_design/js/jquery.zoom.js'></script>
    <script type="text/javascript">
	function GetLocation() {
var geocoder = new google.maps.Geocoder();
var address = document.getElementById("txtAddress").value;
geocoder.geocode({ 'address': address }, function (results, status) {
if (status == google.maps.GeocoderStatus.OK) {
                    var latitude = results[0].geometry.location.lat();
                    var longitude = results[0].geometry.location.lng();
                    //alert("Latitude: " + latitude + "\nLongitude: " + longitude);


var map_canvas = document.getElementById('map_canvas');
var map_options={
//center: new google.maps.LatLng(44.5403, -78.5463),
center: new google.maps.LatLng(latitude,longitude),
zoom:15,
mapTypeId: google.maps.MapTypeId.ROADMAP
}
var map = new google.maps.Map(map_canvas, map_options)
var marker = new google.maps.Marker({
      map: map,
      position: results[0].geometry.location
    });

    } else {
                    alert("Request failed.")
                }
            });
        };
google.maps.event.addDomListener(window, 'load', initialize);
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
			 $("#submit_are_u_interested").click(function(e){
			 	e.preventDefault();

        if($("#fname").val() == '')
    {
      $("#fname").focus().attr("placeholder","Enter First name").val('');
      $("#fname").css("border-color","red");
      return false;
    }

      if($("#lname").val() == '')
    {
      $("#lname").focus().attr("placeholder","Enter Last name").val('');
      $("#lname").css("border-color","red");
      return false;
    }
    if($("#email_mem").val() == '')
    {
      $("#email_mem").focus().attr("placeholder","Enter Email").val('');
      $("#email_mem").css("border-color","red");
      return false;
    }
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(!(emailReg.test($("#email_mem").val())))
    {
      $("#email_mem").focus().attr("placeholder","Enter valid email").val('');
      $("#email_mem").css("border-color","red");
      return false;
    }
      var fname=$("#fname").val();
      var lname=$("#lname").val();
      var email=$("#email_mem").val();
      var phone=$("#phone").val();


        $.ajax({
        url: "<?php echo base_url(); ?>" + "index.php/member/site_visit_add",
          type: "POST",
          data: {fname:fname,lname:lname,email:email,phone:phone},
          success: function(res){
            if (res=="success")
                     { 
                      //alert("oklo");
                      $("#success").append("Registration is successfull.. Thank you");
                     }else if(res=="fail"){
                     $("#success").append("You alredy have an existing email id.. Thank you");
                       //alert("You alredy have an existing email id");
                     }                   
          }
      });
  });


$("#submit_member_review").click(function(e){
        e.preventDefault();
        if($("#mem_review").val() == '')
    {
      $("#mem_review").focus().attr("placeholder","Please give your Review").val('');
      $("#mem_review").css("border-color","red");
      return false;
    }
      var pro_id=$("#pro_id").val();
      var userid=$("#userid").val();
      var fb_id=$("#fb_id").val();
      var mem_review=$("#mem_review").val();
        $.ajax({
        url: "<?php echo base_url(); ?>" + "index.php/property/pro_review",
        type: "POST",
         // data: {pro_id:pro_id,userid:userid,mem_review:mem_review},
          data: {"pro_id":pro_id,"userid":userid,"fb_id":fb_id,"mem_review":mem_review},
          success: function(res){
            // alert($.trim(res).length);
            if ($.trim(res)== "success")
                     { 
                    //$("#success_mem_review").remove();
                    $("#success_mem_review").append("Thanks for Your Review.. Thank you");
                     }else if($.trim(res)== "fail"){
                      //alert("no");
                      //$("#success_mem_review").remove();
                     $("#success_mem_review").append("You already Given Review on this project.. Thank you");

                     }                   
          }
      });
  });
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

<div class="modal fade bs-example-modal-lg" id="myModalhome" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
<div class="modal-dialog modal-lg">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<!--<button type="button" class="close popupclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>-->
<center>
 <img style="height:650px; width:460px;>"; src="<?php echo base_url();?>bookmyplot_design/images/pop2.jpg" ></center>

</div>



</body>
</html>











