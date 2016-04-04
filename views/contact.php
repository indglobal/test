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
	<link rel="stylesheet" href="<?php echo base_url();?>bookmyplot_design/newabout/css/style1.css">


</head>
<style type="text/css">
.contact-bg{
	background-image: url("<?php echo base_url();?>bookmyplot_design/images/contact-bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 680px;
}
.contact {
    background-color: rgba(255, 255, 255, 0.4);
    padding: 5%;
    margin-top: 2%;
    border-radius: 8px;
}
.contact-heading h1{font-size: 2em;font-family: Arial;margin-top: 4%;color: #fff;}
.address p, .address h4{font-family: Arial;line-height: 20px;}
ul.social-icons li.facebook a span {
    background-position: 0px -71px;
}
ul.social-icons li.skype a span {
    background-position: -34px -71px;
}
ul.social-icons li.youtube a span {
    background-position: -72px -71px;
}
ul.social-icons li.googleplus a span {
    background-position: 53px -71px;
}
ul.social-icons li.twitter a span {
    background-position: 22px -71px;
}
ul.social-icons li a span {
    background: url('<?php echo base_url();?>bookmyplot_design/images/social-contact-icons.png') 0px -71px;
    width: 23px;
    height: 19px;
    display: inline-block;
}
.text-contact{
	width: 100%;
}
.social-contact{
	margin-top: 3%;
}
.btn-submit{
	background-color: #78A044;
    padding: 1% 5% 1% 5%;
    color: #fff;
    font-family: Arial;
    font-size: 15px;
}
.contact-color label, .contact-form h4, .address h4, .address p{
	font-family: Arial;
	color: #fff;
}

</style>
<body>


<!-- header starts here -->
	<?php //include_once('header.php'); ?>
	<?php //include_once('modals.php'); 
include_once(APPPATH.'libraries/header.php');?>
<!-- header ends here -->
<div class="container-fluid contact-bg">
<div class="container">
	<center>
		<div class="contact-heading">
			<h1>Get in Touch With Us</h1>
		</div>
	</center>
	<div class="contact">
	
		<div class="row">
			<div class="col-md-6">
				<div class="address">
					<h4>OUR OFFICE</h4><br/><br/>
					<p>
						Address: #54 17 cross,M.C Layout<br/>
						Vijayanagar Bangalore,Next to Canara Bank<br/>
						Karnataka 560079 <br/><br/>
						Email: contacts@bookmyplots.com</br>
						phone:7411085006,9844575001
					</p>
				</div>
				<div class="social-contact">
					<ul class="social-icons list-inline">
						<li class="facebook"><a href="https://m.facebook.com/Bookmyplots-1389121278063778/" target="_blank"><span></span> </a> </li>
						<li class="skype"> <a href="http://twitter.com/bookmyplotscom" target="_blank"><span></span> </a> </li>
						<li class="youtube"> <a href="http://youtube.com" target="_blank"><span></span> </a> </li>
						<li class="googleplus"> <a href="http://pintrest.com" target="_blank"><span></span> </a> </li>
						<li class="twitter"> <a href="http://instagram.com" target="_blank"><span></span> </a> </li>
						
			      	</ul>
				</div><br><br>
				<div class="address-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.985170125404!2d77.53563994992288!3d12.972800218318246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3ddd9e5cc4d1%3A0xe4c3909e53e595a8!2s54%2C+17th+Cross+Rd%2C+Govindaraja+Nagar+Ward%2C+Stage+2%2C+Vijayanagar%2C+Bengaluru%2C+Karnataka+560040!5e0!3m2!1sen!2sin!4v1459420393569" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contact-form">
					<?php $msg = $this->session->flashdata('message'); 
                           echo $msg;
                        ?>
					<h4>CONTACT US</h4><br/><br/>
					<form method="post" action="<?php echo base_url(); ?>/index.php/user/contact_cont" >
						<div class="form-group">
							<div class="row">
								<div class="col-md-6" style="padding-left:0;">
									<label for="exampleInputEmail1">First Name</label>
								    <input type="fname" name="cfname" required class="form-control form-name" id="exampleInputEmail1">
								</div>
								<div class="col-md-6">
									<label for="exampleInputEmail1">Last Name</label>
								    <input type="lname" name="clname" required class="form-control form-name" id="exampleInputEmail1">
								</div>
							</div>
						</div>
						<div class="form-group">
						    <div class="row">
								<div class="col-md-6" style="padding-left:0;">
									<label for="exampleInputEmail1">Email</label>
								    <input type="email" name="cmail" required class="form-control form-name" id="exampleInputEmail1">
								</div>
								<div class="col-md-6">
									<label for="exampleInputEmail1">Mobile</label>
								    <input type="tel" name="mob" required class="form-control form-name" id="exampleInputEmail1">
								</div>
							</div>
						</div>
						<div class="col-md-12" style="padding-left:0;">
							<label for="exampleInputEmail1">Message</label><br/>
						    <textarea name="textarea" required class="text-contact form-control form-name" rows="5"></textarea>
						</div>
						<div class="col-md-12" style="padding-left:0;">
						  	<button name="contbut" required type="submit" class="btn btn-contactbtn">SEND MESSAGE</button>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>



<!-- footer starts here -->
	<?php //include_once('footer.php'); ?>
<!-- footer ends here-->

<?php //include_once('modals.php'); 
include_once(APPPATH.'libraries/footer.php');?>

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


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>
<script src="<?php echo base_url();?>bookmyplot_design/js/index.js"></script>
</body>

</html>	