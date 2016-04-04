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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/jquery.material.form.css">
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
						<div class="col-md-9 BannerText">
							<img src="<?php echo base_url();?>bookmyplot_design/images/100.png" class="img-responsive">
							<br/><br/><br/>
							<h2>Aakruthi Green Woods <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></h2>
							<h4>East Bangalore, Near Jigani, Bangalore.</h4>
							<span class="badge BSR">Developer : BSR Developer</span>
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
							<h3>Aakruthi Green Woods Group Discussion</h3>
							<div class="discussion-names">
								<p>
									<span>Intrested People:
										<ul class="list-inline">
											<li data-toggle="popover">Ramesh Kali</li>
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
											<li data-toggle="popover">Chitrangada Puranik</li>
											

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
				      
				      <div class="chat-history">
				        <ul>
				          <li class="clearfix">
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
				          </li>
				          
				          <li>
				            <div class="message-data">
				              <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
				              <span class="message-data-time">10:31 AM, Today</span>
				            </div>
				            <i class="fa fa-circle online"></i>
				            <i class="fa fa-circle online" style="color: #AED2A6"></i>
				            <i class="fa fa-circle online" style="color:#DAE9DA"></i>
				          </li>
				          
				        </ul>
				        
				      </div> <!-- end chat-history -->
				      
				      <div class="chat-message clearfix">
				        <textarea name="message-to-send" id="message-to-send" placeholder="Type your message" rows="3"></textarea>
				                
				        <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
				        <i class="fa fa-file-image-o"></i>
				        
				        <button>Send</button>

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
						<img src="<?php echo base_url();?>bookmyplot_design/images/Know-more.jpg" class="img-responsive"> 
						 <!--<div class="RightBgColor">


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
</body>

</html>		