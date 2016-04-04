<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book My Plot</title>
	<!-- Bootstrap css links -->
	<link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="plugins/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<!-- font-awesome css links -->
	<link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.material.form.css">
	<!-- Add fancyBox main JS and CSS files -->
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style1.css">


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
.about-content p{line-height: 2em; color: #848484; font-family: roboto-regular;}
.list-property-form{
	background-color: #fff;
}
.form-list{
	background-color: #f2f2f2;
	padding: 5%;
	border-radius: 5px;
	box-shadow: 0px 0px 7px 0px;
}
.list-property-form{
	padding-top: 5%;
	padding-bottom: 5%;
}
.list-property-form h1{
	font-family: roboto-bold;
	padding-bottom: 5%;
}
.list_form_custom{
	font-family: roboto-regular;
	margin-bottom: 2%;
}
.list-textarea{
	width: 100%;
	border-radius: 5px;
	border: 1px solid #ccc;
}
.btn-list-submit{
	background-color: #78A044;
	border-radius: 5px;
	padding: 1% 7% 1% 7%;
	color: #fff;
	font-family: roboto-bold;
	font-size: 15px;
	text-transform: uppercase;
}
</style>
<body>


<!-- header starts here -->
	<?php include_once('header.php'); ?>
<!-- header ends here -->
<div class="MiddleSection">

<div class="banner-about">
	<div class="container">
		<div class="banner-here">
			<img src="images/list-banner.jpg">
		</div>
	</div>
</div>

<div class="container">
	<div class="list-property-form">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<center>
						<h1>LIST YOUR PROPERTY</h1>
					</center>
						<div class="form-list">
							<form role="form">
								<div class="form-group list_form_custom">
								  	<label for="location">Property Type</label><br/><br/>
									<select class="form-control" id="sel1">
									   	
									    <option>Plots</option>
									    <option>Apartments</option>
									    <option>Agriculture</option>
									</select>
								</div>
						  		<div class="form-group list_form_custom">
						    		<label for="location">Location</label><br/><br/>
						    		<input type="text" class="form-control" id="location" >
						  		</div>
						  		<div class="form-group list_form_custom">
						    		<label for="name">Name</label><br/><br/>
						    		<input type="text" class="form-control" id="name" >
						  		</div>
						  		<div class="form-group list_form_custom">
							    	<label for="email">Email</label><br/><br/>
							    	<input type="email" class="form-control" id="email" >
							    </div>
						  		<div class="form-group list_form_custom">
						    		<label for="mobile">Mobile</label><br/><br/>
						    		<input type="tel" class="form-control" id="mobile" >
						  		</div>
						  		<div class="form-group list_form_custom">
						    		<label for="property-details">Property Details</label><br/><br/>
						    		<textarea rows="4" class="list-textarea"></textarea>
						  		</div>
						  		<div class="form-group list_form_custom">
						    		<label for="quot">Quote Your Best Price For The Group Purchase</label><br/><br/>
						    		<input type="text" class="form-control" id="name" >
						  		</div>
						  		<div class="form-group list_form_custom">
								    <label for="exampleInputFile">Upload Brouhers/ Documents of the property</label><br/><br/>
								    <input type="file" class="form-control-file" id="exampleInputFile"><br/>
								    <small class="text-muted">Only .pdf and .doc files</small>
								</div>
								

						  		<center>
						  			<button type="submit" class="btn btn-list-submit">Submit</button>
						  		</center>
							</form>
						</div>

					
			</div>
		</div>
	</div>
</div>

</div>


<!-- footer starts here -->
	<?php include_once('footer.php'); ?>
<!-- footer ends here-->

	<!-- jquery library js link -->
	<script type="text/javascript" src="plugins/jquery-1.11.3.min.js"></script>
	<!-- bootstrap library js links -->
	<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<!-- label js links -->
	<script type="text/javascript" src="js/jquery.material.form.js"></script>
	<script src="js/numscroller-1.0.js"></script>
    <script src='js/jquery.zoom.js'></script>
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

        <script src="js/index.js"></script>
</body>

</html>		