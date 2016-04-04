<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book My Plot</title>
	<!-- Bootstrap css links -->
	<link href="<?php echo base_url();?>bookmyplot_design/newabout/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>bookmyplot_design/newabout/plugins/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<!-- font-awesome css links -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/newabout/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/newabout/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/newabout/css/jquery.material.form.css">
	<!-- Add fancyBox main JS and CSS files -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/newabout/css/jquery.fancybox.css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url();?>bookmyplot_design/newabout/css/reset.css">
	<link rel="stylesheet" href="<?php echo base_url();?>bookmyplot_design/newabout/css/style1.css">


</head>
<style type="text/css">
	
.about-tab-center ul li {
    padding: 2% 0% 0% 11%;
    font-family: roboto-regular;
}
.tab-content-about{padding: 5%;}
.about-tab-center .nav-tabs > li.active > a{background-color: none !important; color: #000; border: none !important;border-bottom: 2px solid #F00 !important;}
.about-first-section{background-color: #fff;}
.red-color{color: #F00;}
.about-content p{line-height: 2em;    font-family: roboto-regular;}
</style>
<body>


<!-- header starts here -->
	<?php //include_once('header.php');?>
	<?php //include_once('modals.php'); 
include_once(APPPATH.'libraries/header.php');?>
<!-- header ends here -->
<div class="MiddleSection">

<div class="banner-about">
	<div class="container">
		<div class="banner-here">
			<img src="<?php echo base_url();?>bookmyplot_design/newabout/images/projectpage-banner.jpg">
		</div>
	</div>
</div>
<div class="container">
		<div class="about-first-section">
			<div id="exTab3" class="container-fluid about-tab-center">	
						<ul class="nav nav-tabs about-tab">
									<li class="active">
						        	<a  href="#corporate" data-toggle="tab">CORPORATE PROFILE</a>
									</li>
									<li><a href="#vision" data-toggle="tab">VISION</a>
									</li>
									<li><a href="#objectives" data-toggle="tab">OBJECTIVES</a>
									</li>
									<li><a href="#quality" data-toggle="tab">QUALITY POLICIES</a>
									</li>
									
						</ul>
						<div class="tab-content">	
							<div class="tab-pane active" id="corporate">
								<div class="tab-content-about container">
									<div class="row">
										<div class="col-md-3">
											<div class="img-border-project">
												<!-- <img src="images/RAVI-VARMA.jpg"> -->
											</div>
										</div> 
										<div class="col-md-9 about-content">
											<p>
												We at bookmyplots.com select the prime projects for best prize at best locations with the best amenities strategically located for a future growth appreciation with best price. We strive to work for a group creation wherein the group will be benefitted getting the best group deal and the group strength which helps the customers /group members to be connected and also update the layout/plot development activities through face book/what’s app group created by us.
Through this, Groups members can have a regular discussion and chats about their layouts developments this will have a good strength to face any uncertain situations and face the developer to give the best in class maintenance which would be obviously neglected by all the developers
											</p><br/>	
											<p>
												We also make sure that group created by Book my plot team will get registered as a association and will be handed over to the group and a director and working director would be selected we would help the group in organizing an general body meeting and check the status of the developments. 
We also help the customers to notify and pay for property tax and khata opening on request. Loans from nationalized and MNC Banks would be availed for all our customers.
											</p><br/>
											<p class="red-color">
												NOTE-ALL PROPERTIES WHICH ARE SELECTED BY BOOKMYPLOTS.COM ARE LEGALLY VERIFIED AND NO BROKARAGE FEES CHARGED FROM THE BUYERS.
											</p><br/>
											
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="vision">
								<div class="tab-content-about container">
									<div class="row">
										
										<div class="col-md-12">
											<p>
												Hello World
											</p><br/>	
											
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="objectives">
								<div class="tab-content-about container">
									<div class="row">
										
										<div class="col-md-12">
											<p>
												Content here
											</p><br/>
											
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="quality">
								<div class="tab-content-about container">
									<div class="row">
										
										<div class="col-md-12">
											<p>
												Content here
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		</div>
	</div>
</div>









<!-- footer starts here -->
	<?php //include_once('footer.php'); ?>
	<?php //include_once('modals.php'); 
include_once(APPPATH.'libraries/footer.php');?>
<!-- footer ends here-->

	<!-- jquery library js link -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/newabout/plugins/jquery-1.11.3.min.js"></script>
	<!-- bootstrap library js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/newabout/plugins/bootstrap/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/newabout/js/jquery.fancybox.js"></script>
	<!-- label js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/newabout/js/jquery.material.form.js"></script>
	<script src="<?php echo base_url();?>bookmyplot_design/newabout/js/numscroller-1.0.js"></script>
    <script src='<?php echo base_url();?>bookmyplot_design/newabout/js/jquery.zoom.js'></script>
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


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>

        <script src="<?php echo base_url();?>bookmyplot_design/newabout/js/index.js"></script>
</body>

</html>		