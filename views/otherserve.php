
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Other services</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">


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
    <link href="<?php echo base_url();?>bookmyplot_design/css/menustyle.css" rel="stylesheet">
   <!--  <link href="/public/fontastic/styles.css" rel="stylesheet">-->

</head>
<body>
<!-- <header>
	<div class="header-cont">
		<div class="fullWidth">
			<div class="container">
				<div class="paddigTop">
					<div class="row">
						<div class="col-md-3">
							<img src="<?php echo base_url();?>bookmyplot_design/images/logo1.png">
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
	<div class="col-md-2 text-right">
	  <a style="padding-top:10px;display:inline-block;color:white;font-weight:600;" href = "<?php echo base_url();?>index.php/user/otherserve">Other Services</a>
	<a style="padding-top:10px;display:inline-block;color:white;font-weight:600;" href = "<?php echo base_url();?>test/blog">/Blog</a>
	</div>
						<div class="col-md-2">
							<button type="button" class="btn btn-success btnCustomized">List your property</button>
						</div>
						

						
<div id="fblogin">
<?php if($user_profile):?>
	<div id="mylogin" style="display:none">
						<?php if($logged_in=="TRUE"){ 
							?>
						<div class="col-md-2 marginTop">
							<a href="<?php echo site_url('user/user_logout');?>"><button class="btn btn-login_Signup btn-login-index">Logout</button></a>
						</div>
						<?php }elseif($logged_in==""){ 
							?>
						<div class="col-md-2 marginTop">
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
							?>
						<div class="col-md-2 marginTop">
							<a href="<?php echo site_url('user/user_logout');?>"><button class="btn btn-login_Signup btn-login-index">Logout</button></a>
						</div>
						<?php }elseif($logged_in==""){ 
							?>
						<div class="col-md-2 marginTop">
							<button class="btn btn-login_Signup btn-login-index" data-toggle="modal" data-target="#myModal">Login / SignUp</button>
						</div>

						<?php }?>
					</div>
 <?php endif;?>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header> -->




<?php //include_once('modals.php'); 
//include_once(APPPATH.'libraries/modals.php');
?>	
	<?php //include_once('modals.php'); 
include_once(APPPATH.'libraries/header.php');?>

<section class="master-werap">
	
<!-- Sticky Nav Start -->
	<!-- <section id="sticky-nav"> 
		<div class="sticky-nav">
			<div class="container">
				<div class="row">
					<article class="col-sm-6">
						<div class="logo-wrp">
							<h1>LOGO</h1>
						</div>
					</article>
					<article class="col-sm-6">
						<div class="signin-wrp">
							<ul>
								<li><a href="">Signin</a></li>
								<li><a href="">Sign up</a></li>
							</ul>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section> -->
<!-- Sticky Nav End -->

	<section class=""><!-- Content wraper -->
		<div class="content-wrpr container">

			<div class="row"><!-- Header Row Starts -->
				<article class="col-sm-12">
					<div class="main-header">
						<h2>Other Services</h2>
					</div>
				</article>
			</div><!-- Header Row Ends -->

			<div class="row" ><!-- Icon row -->
				<article class="col-sm-12" style="padding: 0;">
					<div class="servc-icons" >
						<ul style="border-bottom: 1px solid #999;">
							<li data-type="home-loan" class="active"><div><img src="<?php echo base_url();?>bookmyplot_design/images/ic1.png"></div><p>Home Loans</p></li>
							<li data-type="ploat-loan"><div><img src="<?php echo base_url();?>bookmyplot_design/images/ic2.png"></div><p>Plot Purchase loan</p></li>
							<li data-type="tax-payment"><div><img src="<?php echo base_url();?>bookmyplot_design/images/ic3.png"></div><p>Tax Payment</p></li>
							<li data-type="apply-online"><div><img src="<?php echo base_url();?>bookmyplot_design/images/ic4.png"></div><p>Apply khata Online </p></li>
							<li data-type="audit-report"><div><img src="<?php echo base_url();?>bookmyplot_design/images/ic5.png"></div><p>Social Audit Reports</p></li>
							<li data-type="deed-writers"><div><img src="<?php echo base_url();?>bookmyplot_design/images/ic6.png"></div><p>Deed Writers</p></li>
							<li data-type="agents"><div><img src="<?php echo base_url();?>bookmyplot_design/images/ic7.png"></div><p>Agents</p></li>
						</ul>
					</div>
				</article>
			</div><!-- Icon row ends -->
			<br>


													


					<!-- FORM NUM-1 OF HOME LOAN SECTION -->
		    <section style="display: block;" class="contentWrpAll" id="home-loan"><!-- Home Loan Section -->
			<form action="<?php  echo base_url();?>index.php/user/add_otherserve" method="post" onsubmit="return formValidationHOME()">
			<div class="row">
			<h1>HOME LOAN</h1>
			<?php $msg = $this->session->flashdata('message'); 
                           echo $msg;
                        ?>
			<input type="hidden" name="sn" value="HOME_LOAN">
				<article class="col-sm-5">
					<div class="firstName">
						<label>First Name</label>
						<input name="o_fname" required id="Fname1" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="lastName">
						<label>Last Name</label>
						<input name="o_lname" required id="Lname1" type="text">
					</div>
				</article>
			</div>	
			<div class="row">
				<article class="col-sm-5">
					<div class="eMail">
						<label>Email</label>
						<input name="o_email" required onclick='Javascript:formValidationone();' id="Email1" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="phoneNumber">
						<label>Phone Number</label>
						<input name="o_phone" required id="Pnumber1" maxlength="10" type="text">&nbsp;<span id="errmsg"></span>
					</div>
				</article>
			</div>	

			<div class="row">
				<article class="col-sm-5">
					<div class="city-selcet-wrp">
						<label>Select City</label>
						<select name="o_city" id="City1" required>
							 <option value="0">--Select--</option>
								<?php foreach ($allcities as $city) { 
						        ?>
                        <option value="<?php echo $city['city_id']; ?>"><?php echo $city['city_name']; ?></option>
                    <?php } ?>
						</select>
					</div>
				</article>
			</div>
			<br>
			
			<div class="row">
				<article class="col-sm-6">
					<div class="remarks-wrp">
						<label>Remarks</label>
						<textarea name="o_remark" required id="reMarks1"></textarea>
					</div>
				</article>
			</div>

			<div class="row">
				<article class="col-sm-4">
					<div class="submit-butn-wrp">
						<input type="submit" name="osub" class="btn btn-primary" value="submit">
					</div>
				</article>

			</div>
			
			</form>
		</section><!-- Home Loan Section Ends -->












        <!-- FORM NUM-2 OF PLOT LOAN SECTION -->

		<section class="contentWrpAll" id="ploat-loan"><!-- Plot LOan Starts -->
				<form action="<?php  echo base_url();?>index.php/user/otherserve" method="post" onsubmit="return formValidationPLOT()">
			<div class="row">
			<h1>PLOT LOAN</h1>
			<input type="hidden" name="sn" value="PLOAT_LOAN">
				<article class="col-sm-5">
					<div class="firstName">
						<label>First Name</label>
						<input name="o_fname" id="Fname2" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="lastName">
						<label>Last Name</label>
						<input name="o_lname" id="Lname2" type="text">
					</div>
				</article>
			</div>	
			<div class="row">
				<article class="col-sm-5">
					<div class="eMail">
						<label>Email</label>
						<input name="o_email" onclick='Javascript:formValidationone();' id="Email2" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="phoneNumber">
						<label>Phone Number</label>
						<input name="o_phone" id="Pnumber2" maxlength="10" type="text">&nbsp;<span id="errmsg"></span>
					</div>
				</article>
			</div>	

			<div class="row">
				<article class="col-sm-5">
					<div class="city-selcet-wrp">
						<label>Select City</label>
						<select name="o_city" id="City2">
							<option value="0">-------Select-------</option>
							<option value="1">Banglore</option>
							<option value="2">Rajaji Nagar</option>
							<option value="3">Prakash Nagar</option>
							<option value="4">Malleswaram</option>
							<option value="5">Marthahalli</option>
						</select>
					</div>
				</article>
			</div>
			<br>
			
			<div class="row">
				<article class="col-sm-6">
					<div class="remarks-wrp">
						<label>Remarks</label>
						<textarea name="o_remark" id="reMarks2"></textarea>
					</div>
				</article>
			</div>

			<div class="row">
				<article class="col-sm-4">
					<div class="submit-butn-wrp">
						<input type="submit" name="osub" class="btn btn-primary" value="submit">
					</div>
				</article>

			</div>
			</form>
		</section><!-- Plot LOan Ends -->


                                                















                                                  <!-- FORM NUM- 3 oF TAXPAYMENT SECTION -->

		<section class="contentWrpAll" id="tax-payment"><!-- Tax Payment Starts -->
			<form action="<?php  echo base_url();?>index.php/user/otherserve" method="post" onsubmit="return formValidationTAX()">
			<div class="row">
			<h1>TAXPAYMENT</h1>
			<input type="hidden" name="sn" value="TAXPAYMENT">
				<article class="col-sm-5">
					<div class="firstName">
						<label>First Name</label>
						<input name="o_fname" id="Fname3" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="lastName">
						<label>Last Name</label>
						<input name="o_lname" id="Lname3" type="text">
					</div>
				</article>
			</div>	
			<div class="row">
				<article class="col-sm-5">
					<div class="eMail">
						<label>Email</label>
						<input name="o_email" onclick='Javascript:formValidationone();' id="Email3" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="phoneNumber">
						<label>Phone Number</label>
						<input name="o_phone" id="Pnumber3" maxlength="10" type="text">&nbsp;<span id="errmsg"></span>
					</div>
				</article>
			</div>	

			<div class="row">
				<article class="col-sm-5">
					<div class="city-selcet-wrp">
						<label>Select City</label>
						<select name="o_city" id="City3">
							<option value="0">-------Select-------</option>
							<option value="1">Banglore</option>
							<option value="2">Rajaji Nagar</option>
							<option value="3">Prakash Nagar</option>
							<option value="4">Malleswaram</option>
							<option value="5">Marthahalli</option>
						</select>
					</div>
				</article>
			</div>
			<br>
			
			<div class="row">
				<article class="col-sm-6">
					<div class="remarks-wrp">
						<label>Remarks</label>
						<textarea name="o_remark" id="reMarks3"></textarea>
					</div>
				</article>
			</div>

			<div class="row">
				<article class="col-sm-4">
					<div class="submit-butn-wrp">
						<input type="submit" name="osub" class="btn btn-primary" value="submit">
					</div>
				</article>

			</div>
			</form>
		</section><!-- Tax Payment Ends -->















                                           <!-- FORM NUM-4 OF APPLY ONLINE SECTION -->


		<section class="contentWrpAll" id="apply-online"><!-- Apply Online Starts -->
			<form action="<?php  echo base_url();?>index.php/user/otherserve" method="post" onsubmit="return formValidationAPLY()">
			<div class="row">
			<h1>APPLY ONLINE</h1>
			<input type="hidden" name="sn" value="APPLY_ONLINE">
				<article class="col-sm-5">
					<div class="firstName">
						<label>First Name</label>
						<input name="o_fname" id="Fname4" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="lastName">
						<label>Last Name</label>
						<input name="o_lname" id="Lname4" type="text">
					</div>
				</article>
			</div>	
			<div class="row">
				<article class="col-sm-5">
					<div class="eMail">
						<label>Email</label>
						<input name="o_email" onclick='Javascript:formValidationone();' id="Email4" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="phoneNumber">
						<label>Phone Number</label>
						<input name="o_phone" id="Pnumber4" maxlength="10" type="text">&nbsp;<span id="errmsg"></span>
					</div>
				</article>
			</div>	

			<div class="row">
				<article class="col-sm-5">
					<div class="city-selcet-wrp">
						<label>Select City</label>
						<select name="o_city" id="City4">
							<option value="0">-------Select-------</option>
							<option value="1">Banglore</option>
							<option value="2">Rajaji Nagar</option>
							<option value="3">Prakash Nagar</option>
							<option value="4">Malleswaram</option>
							<option value="5">Marthahalli</option>
						</select>
					</div>
				</article>
			</div>
			<br>
			
			<div class="row">
				<article class="col-sm-6">
					<div class="remarks-wrp">
						<label>Remarks</label>
						<textarea name="o_remark" id="reMarks4"></textarea>
					</div>
				</article>
			</div>

			<div class="row">
				<article class="col-sm-4">
					<div class="submit-butn-wrp">
						<input name="osub" type="submit" class="btn btn-primary" value="submit">
					</div>
				</article>

			</div>
			</form>
		</section><!-- Apply Online Ends -->

                                     













                                     <!-- FORM NUM-5 OF AUDIT REPORT SECTION -->

		<section class="contentWrpAll" id="audit-report"><!-- Audit Report Starts -->
			<form action="<?php  echo base_url();?>index.php/user/otherserve" method="post" onsubmit="return formValidationAUDIT()">
			<div class="row">
			<h1>AUDIT REPORT</h1>
			<input type="hidden" name="sn" value="AUDIT_REPORT">
				<article class="col-sm-5">
					<div class="firstName">
						<label>First Name</label>
						<input name="o_fname" id="Fname5" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="lastName">
						<label>Last Name</label>
						<input name="o_lname" id="Lname5" type="text">
					</div>
				</article>
			</div>	
			<div class="row">
				<article class="col-sm-5">
					<div class="eMail">
						<label>Email</label>
						<input name="o_email" onclick='Javascript:formValidationone();' id="Email5" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="phoneNumber">
						<label>Phone Number</label>
						<input name="o_phone" id="Pnumber5" maxlength="10" type="text">&nbsp;<span id="errmsg"></span>
					</div>
				</article>
			</div>	

			<div class="row">
				<article class="col-sm-5">
					<div class="city-selcet-wrp">
						<label>Select City</label>
						<select name="o_city" id="City5">
							<option value="0">-------Select-------</option>
							<option value="1">Banglore</option>
							<option value="2">Rajaji Nagar</option>
							<option value="3">Prakash Nagar</option>
							<option value="4">Malleswaram</option>
							<option value="5">Marthahalli</option>
						</select>
					</div>
				</article>
			</div>
			<br>
			
			<div class="row">
				<article class="col-sm-6">
					<div class="remarks-wrp">
						<label>Remarks</label>
						<textarea name="o_remark" id="reMarks5"></textarea>
					</div>
				</article>
			</div>

			<div class="row">
				<article class="col-sm-4">
					<div class="submit-butn-wrp">
						<input name="osub" type="submit" class="btn btn-primary" value="submit">
					</div>
				</article>

			</div>
			</form>
		</section><!-- Audit Report Starts -->


                                       














        <!-- FORM NUM-6 OF DEED WRITES SECTION -->
		<section class="contentWrpAll" id="deed-writers"><!-- Deed Writes Starts -->
			<form action="<?php  echo base_url();?>index.php/user/otherserve" method="post" onsubmit="return formValidationDEED()">
			<div class="row">
			<h1>DEED WRITES</h1>
			<input type="hidden" name="sn" value="DEED_WRITES">
				<article class="col-sm-5">
					<div class="firstName">
						<label>First Name</label>
						<input name="o_fname" id="Fname6" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="lastName">
						<label>Last Name</label>
						<input name="o_lname" id="Lname6" type="text">
					</div>
				</article>
			</div>	
			<div class="row">
				<article class="col-sm-5">
					<div class="eMail">
						<label>Email</label>
						<input name="o_email" onclick='Javascript:formValidationone();' id="Email6" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="phoneNumber">
						<label>Phone Number</label>
						<input name="o_phone" id="Pnumber6" maxlength="10" type="text">&nbsp;<span id="errmsg"></span>
					</div>
				</article>
			</div>	

			<div class="row">
				<article class="col-sm-5">
					<div class="city-selcet-wrp">
						<label>Select City</label>
						<select name="o_city" id="City6">
							<option value="0">-------Select-------</option>
							<option value="1">Banglore</option>
							<option value="2">Rajaji Nagar</option>
							<option value="3">Prakash Nagar</option>
							<option value="4">Malleswaram</option>
							<option value="5">Marthahalli</option>
						</select>
					</div>
				</article>
			</div>
			<br>
			
			<div class="row">
				<article class="col-sm-6">
					<div class="remarks-wrp">
						<label>Remarks</label>
						<textarea name="o_remark" id="reMarks6"></textarea>
					</div>
				</article>
			</div>

			<div class="row">
				<article class="col-sm-4">
					<div class="submit-butn-wrp">
						<input name="osub" type="submit" class="btn btn-primary" value="submit">
					</div>
				</article>

			</div>
			</form>
		</section><!-- Deed Writes Ends -->















                                               <!-- FORM NUM-7F HOME AGENT SECTION -->

		<section class="contentWrpAll" id="agents"><!-- Agents Starts -->
			<form action="<?php  echo base_url();?>index.php/user/otherserve" method="post" onsubmit="return formValidationAGENT()">
			<div class="row">
			<h1>AGENT</h1>
			<input type="hidden" name="sn" value="AGENT">
				<article class="col-sm-5">
					<div class="firstName">
						<label>First Name</label>
						<input id="Fname7" name="o_fname" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="lastName">
						<label>Last Name</label>
						<input id="Lname7" name="o_lname" type="text">
					</div>
				</article>
			</div>	
			<div class="row">
				<article class="col-sm-5">
					<div class="eMail">
						<label>Email</label>
						<input name="o_email" onclick='Javascript:formValidationone();' id="Email7" type="text">
					</div>
				</article>
				<article class="col-sm-5">
					<div class="phoneNumber">
						<label>Phone Number</label>
						<input id="Pnumber7" name="o_phone" maxlength="10" type="text">&nbsp;<span id="errmsg"></span>
					</div>
				</article>
			</div>	

			<div class="row">
				<article class="col-sm-5">
					<div class="city-selcet-wrp">
						<label>Select City</label>
						<select name="o_city" id="City7">
							<option value="0">-------Select-------</option>
							<option value="1">Banglore</option>
							<option value="2">Rajaji Nagar</option>
							<option value="3">Prakash Nagar</option>
							<option value="4">Malleswaram</option>
							<option value="5">Marthahalli</option>
						</select>
					</div>
				</article>
			</div>
			<br>
			
			<div class="row">
				<article class="col-sm-6">
					<div class="remarks-wrp">
						<label>Remarks</label>
						<textarea name="o_remark" id="reMarks7"></textarea>
					</div>
				</article>
			</div>

			<div class="row">
				<article class="col-sm-4">
					<div class="submit-butn-wrp">
						<input name="osub" type="submit" class="btn btn-primary" value="submit">
					</div>
				</article>

			</div>
			</form>
		</section><!-- Agents Ends -->



		</div>
	</section><!-- Content wraper -->



	<!-- Footer Section  -->
<?php //$this->load->view('/layouts/footer');?>
<?php //include_once('footer.php'); ?>
<?php //include_once('modals.php'); 
include_once(APPPATH.'libraries/footer.php');?>
	<!-- Footer Section Ends -->
</section>


<!-- js files -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.2.0.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js" ></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/validation.js"></script>

<script type="text/javascript">
	$("document").ready(function(){
		$(".servc-icons ul li").click(function(){
			var iD = "#";
			$(".servc-icons ul li").removeClass("active");
			$(this).addClass("active");
			$(".contentWrpAll").css("display", "none")
			var pageId = $(this).attr("data-type");
			$(iD+pageId).css("display","block");
			
		});
	});
</script>
<script type="text/javascript">
	$("document").ready(function(){
		$('span.fa').on('click', function() {
	    $('span.fa').removeClass('fa-blue');
	    $(this).addClass('fa-blue');
	    $(this).prev('input.radio').prop('checked', true);
});
	});
</script>

<script type="text/javascript">
	function limitText(field, maxChar){
    $(field).attr('maxlength',maxChar);
}
</script>

<script type="text/javascript">
	





</script>

</body>
</html>