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
	<link rel="stylesheet" type="text/css" href="<?php //echo base_url();?>bookmyplot_design/css/jquery.material.form.css">
	<!-- Add fancyBox main JS and CSS files -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/jquery.fancybox.css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url();?>bookmyplot_design/css/reset.css">
	<!-- <link rel="stylesheet" href="css/discussion.css"> -->

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
		.discussion-heading{background-color: #1881c2;margin-top: 1%;padding: 2% 1% 2% 1%;}
		.discussion-names li:after{content: ",";}
		.discussion-chat{background-color: #fff;padding: 3%;width: 100%;}
		/*.chat-starts-left{width: 50%;}
		.chat-blue{background-color: #d0effc;padding: 2% 2% 5% 2%;}
		.chat-white{background-color: #fff;width: 50%;padding: 2% 2% 5% 2%;}
		.chat-starts-left .float-right ul li{float: right;}*/
	</style>
	<style>
              @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
            fieldset, label { margin: 0; padding: 0; }
            body{/* margin: 20px;*/ }
            h1 {font-size: 1.5em; margin: 10px;}

            .rating2{ 
                border: none;
                float: left;
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

            .rating2  > input:checked ~ label, 
            .rating2:not(:checked) > label:hover,  
            .rating2:not(:checked) > label:hover ~ label { color: #FFD700;  }
            .rating2 > input:checked + label:hover, 
            .rating2 > input:checked ~ label:hover,
            .rating2 > label:hover ~ input:checked ~ label, 
            .rating2 > input:checked ~ label:hover ~ label { color: #FFED85;  }     


            /* Downloaded from http://devzone.co.in/ */
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
							<img src="<?php echo base_url();?>bookmyplot_design/images/100.png" class="img-responsive">
							<br/><br/><br/>
							<h2><?php echo $getSpecific_project_detail['0']['pro_name'];?> <!-- <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i> -->
							</h2>
							<h4><?php echo $getSpecific_project_detail['0']['address_pro'];?></h4><br/>
							<span class="badge BSR">Developer : <?php echo $getSpecific_developer_detail['0']['dev_name'];?></span><br>
							<?php $k=round($getAvgRating);?>
				    <fieldset id='demo1' disabled class="rating2 topreviewleft">
                        <input class="stars" type="radio" id="star5" name="myrating" value="5"<?php if($k==5){?>checked<?php }?> />
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4half" name="myrating" value="4.5" <?php if($k==4.5){?>checked<?php }?> />
                        <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="myrating" value="4" <?php if($k==4){?>checked<?php }?> />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3half" name="myrating" value="3.5" <?php if($k==3.5){?>checked<?php }?>/>
                        <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input class="stars" type="radio" id="star3" name="myrating" value="3" <?php if($k==3){?>checked<?php }?> />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2half" name="myrating" value="2.5" <?php if($k==2.5){?>checked<?php }?>/>
                        <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input class="stars" type="radio" id="star2" name="myrating" value="2" <?php if($k==2){?>checked<?php }?>/>
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1half" name="myrating" value="1.5" <?php if($k==1.5){?>checked<?php }?>/>
                        <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input class="stars" type="radio" id="star1" name="myrating" value="1" <?php if($k==1){?>checked<?php }?>/>
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input class="stars" type="radio" id="starhalf" name="myrating" value="0.5" <?php if($k==0.5){?>checked<?php }?>/>
                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
						</div>
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
<!-- 							<button class="btn btn-viewplot">PROJECT WALKTHROUGH VIDEO</button>
 -->							<button class="btn btn-viewplot"  data-toggle="modal" data-target="#video">PROJECT WALKTHROUGH VIDEO</button>

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
<!--Second Section start here-->
	<div class="MiddleSection">
		<div class="container">
			<div class="row">

				<div class="col-md-9"><!--LeftSection starts here-->
					<!-- Tab panes -->
					<div class="JoinNow text-center">
						<img src="<?php echo base_url();?>bookmyplot_design/images/join-us.png" align="middle" alt="join">
					</div>
					<div class="discussion-form">
						<div class="discussion-heading">
							<h3><?php echo $getSpecific_project_detail['0']['pro_name'];?> Group Discussion</h3>
							<div class="discussion-names">
								<p>
									<span>Intrested People:<?php echo count($getInterested_people_byproid);?>
										<ul class="list-inline">
											
										<?php foreach ($getInterested_people_byproid as $value) {?>
										  <li data-toggle="popover"><?php echo $value['firstname'].' '.$value['lastname'];?></li>
										  <?php }?>
											<!-- <li data-toggle="popover">Ramesh Kali</li>
											<li data-toggle="popover">Chitrangada Puranik</li>
											<li data-toggle="popover">Ramesh Kali</li>
											<li data-toggle="popover">Chitrangada Puranik</li>
											<li data-toggle="popover">Ramesh Kali</li>
											<li data-toggle="popover">Chitrangada Puranik</li>
											<li data-toggle="popover">Ramesh Kali</li>
											<li data-toggle="popover">Chitrangada Puranik</li>
											<li data-toggle="popover">Ramesh Kali</li>
											<li data-toggle="popover">Chitrangada Puranik</li>
											<li data-toggle="popover">Ramesh Kali</li>
											<li data-toggle="popover">Chitrangada Puranik</li> -->
											

										</ul>
									</span>	
								</p>
							</div>
						</div>
						<div class="discussion-chat">
							<!-- <div class="chat-starts-left">
								<ul class="list-unstyled">
									<li>	
										<p>Ramesh Kali, <span>10:30 am, Today</span></p>
										<div class="chat-blue">
											<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
										</div>
									</li><br/>
									<li>
										
											<p>Vinayak Jadav, <span>10:30 am, Today</span></p>
											<div class="chat-blue">
												<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											</div>
										
									</li>
								</ul>
										
							</div><br/>
							
							
						
						</div>
						<div class="chat-starts-right" style="float:right;">
									<ul class="list-unstyled float-right" style="float:right;">		
									<li>
										<p>Ramesh Kali, <span>10:30 am, Today</span></p>
										<div class="chat-white">
											<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
										</div>
									</li><br/>	
									<li>
										<p>Ramesh Kali, <span>10:30 am, Today</span></p>
										<div class="chat-white">
											<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
										</div>
									</li>
								</ul>
						</div><br/> -->

				<div class="chat">
				       <!-- end chat-header -->
				      <?php $member_name=getmember_name_by_user_id($userid);
				            
				            
?>                      
				      <div class="chat-history">
				        <ul id="update">
				        	<?php foreach ($getspecific_topic_with_comments_by_id as $value) {
				        	 $date=$value['created_at'];
                             $date1= new DateTime($date);

				        	if ($value['user_id']==$userid){?>
				        	<li class="clearfix">
				             <div class="message-data align-right">
				              <span class="message-data-time"><?php echo date_format($date1, 'l jS F Y');?></span> &nbsp; &nbsp;
				              <span class="message-data-name"><?php echo $member_name;?></span> <i class="fa fa-circle me"></i>
				            </div>
				            <div class="message other-message float-right">
				            	<?php echo $value['comment'];?>
				            </div>
				          </li>
				          <?php }else{
				          	$other_member=getmember_name_by_user_id($value['user_id']);
				          	//$other_member=getmember_name_by_user_id($value['email_member']);
				          	?>
                            <li>
				            <div class="message-data">
				              <span class="message-data-name"><i class="fa fa-circle online"></i><?php echo $other_member;?></span>
				              <span class="message-data-time"><?php echo date_format($date1, 'l jS F Y');?></span>
				            </div>
				            <div class="message my-message">
                            <?php echo $value['comment'];?>				            
                           </div>
				          </li>
				          	
				          <?php 
				                    }
				                }
				            ?>
	


				          <!-- <li class="clearfix">
				            <div class="message-data align-right">
				              <span class="message-data-time">10:10 AM, Today</span> &nbsp; &nbsp;
				              <span class="message-data-name">Olia</span> <i class="fa fa-circle me"></i>
				              
				            </div>
				            <div class="message other-message float-right">
				              Hi Vincent, how are you? How is the project coming along?
				            </div>
				          </li>
				          
				          <li>
				            <div class="message-data">
				              <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
				              <span class="message-data-time">10:12 AM, Today</span>
				            </div>
				            <div class="message my-message">
				              Are we meeting today? Project has been already finished and I have results to show you.
				            </div>
				          </li>
				          
				          <li class="clearfix">
				            <div class="message-data align-right">
				              <span class="message-data-time">10:14 AM, Today</span> &nbsp; &nbsp;
				              <span class="message-data-name">Olia</span> <i class="fa fa-circle me"></i>
				              
				            </div>
				            <div class="message other-message float-right">
				              Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project?
				            </div>
				          </li>
				          
				          <li>
				            <div class="message-data">
				              <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
				              <span class="message-data-time">10:20 AM, Today</span>
				            </div>
				            <div class="message my-message">
				              Actually everything was fine. I'm very excited to show this to our team.
				            </div>
				          </li> -->
				          
				         <!--  <li>
				            <div class="message-data">
				              <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
				              <span class="message-data-time">10:31 AM, Today</span>
				            </div>
				            <i class="fa fa-circle online"></i>
				            <i class="fa fa-circle online" style="color: #AED2A6"></i>
				            <i class="fa fa-circle online" style="color:#DAE9DA"></i>
				          </li> -->
				          
				        </ul>
				        
				      </div> <!-- end chat-history -->
				      
				      <div class="chat-message clearfix">
				       <form id="insert_comment" action="<?php //echo site_url('group_discussion/add_comment/'.$topic_id.'/'.$pro_id);?>" method="post">
                       <input type="hidden" class="form-control" name="topic_id" value="12"
                          id="topic_id" />
                          <input type="hidden" class="form-control" name="pro_id" value="<?php echo $pro_id;?>"
                          id="pro_id" />
                      <input type="hidden" class="form-control" name="userid" value="<?php echo $userid;?>"
                          id="userid" />
				        <textarea  name="comment" id="comment" placeholder="Type your message" rows="3"></textarea>
				        <!-- <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
				        <i class="fa fa-file-image-o"></i> -->
				        
<!-- 				        <button>Send</button>
 -->            <button type="submit_join_group" class="btn btn-primary" id="submit_join_group">Submit</button>
</form>
				      </div> <!-- end chat-message -->
				      
				    </div>
										
				</div>
			</div>
			</div>			<!--LeftSection ends here-->



				<div class="col-md-3"><!--RightSection Starts here-->
<div class="RightSection">
<center>
<h4>Group Purchase will save you </h4>
<h3>big!</h3>
<h3>BOOK A CAB</h3>
<form action="<?php echo site_url('user/bookacab_cont/'.$pro_id); ?>" method="post">

<div class="form-group">
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
					<div class="RightSectionSecondPart">
<img src="<?php echo base_url();?>bookmyplot_design/images/Know-more.jpg" 
data-toggle="modal" data-target="#myModalhome" class="img-responsive">						 <!--<div class="RightBgColor">


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

						</div>--> 

					</div>
				</div><!--RightSection ends here-->
			</div>
		</div>
	</div>	

</div>

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
		$(document).ready(function(){

$("#insert_comment").on('submit',(function(e) {
e.preventDefault();
       //alert("hi");
var formData = new FormData( $("#insert_comment")[0] );
$("#flash").show();
$("#flash").fadeIn(400).html('<img src="<?php echo base_url();?>bookmyplot_design/includes/images/ajax_loader_blue_512.gif" />Loading Comment...');
$.ajax({
//url: "ajax_php_file.php", 
url: "<?php echo base_url(); ?>" + "index.php/group_discussion/save_comment",// Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(html)   // A function to be called if request succeeds
{
	$('#comment').val('');
	$("#update").append(html);
	// $("#update").append('<li>
	// 			            <div class="message-data">
	// 			              <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
	// 			              <span class="message-data-time">10:31 AM, Today</span>
	// 			            </div>
	// 			            <i class="fa fa-circle online"></i>
	// 			            <i class="fa fa-circle online" style="color: #AED2A6"></i>
	// 			            <i class="fa fa-circle online" style="color:#DAE9DA"></i>
	// 			          </li>');
	 
	///s$().append(html);
	//$("ol#update li:last").fadeIn("slow");
	//$("#flash").hide();

}
});
                         }));



		    $('[data-toggle="popover"]').popover({
		        placement : 'top',
				trigger : 'hover',
		        html : true,
		        content : '<div class="media "><a href="#" class="pull-left"><img src="../images/avatar-tiny.jpg" class="media-object" alt="Sample Image"></a><div class="media-body"><h4 class="media-heading">Jhon Carter</h4><p>Excellent Bootstrap popover! I really love it.</p></div></div>'
		    });
		});
	</script>
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

<script id="message-response-template" type="text/x-handlebars-template">
  <li>
    <div class="message-data">
      <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
      <span class="message-data-time">{{time}}, Today</span>
    </div>
    <div class="message my-message">
      {{response}}
    </div>
  </li>
</script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>

        <script src="<?php echo base_url();?>bookmyplot_design/js/index.js"></script>

        <div class="modal fade bs-example-modal-lg" id="myModalhome" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
<div class="modal-dialog modal-lg">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<!--<button type="button" class="close popupclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>-->
<center>
 <img style="height:650px; width:460px;>"; src="<?php echo base_url();?>bookmyplot_design/images/pop2.jpg" ></center>

</div>
</body>

</html>		