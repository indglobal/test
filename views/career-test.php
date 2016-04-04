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
	

.bannerImageCareer{
    background-image: url("<?php echo base_url();?>bookmyplot_design/images/careerbanner.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 430px;
}
.bannerTextContact{
    text-align: center;
    color: #fff;
    font-size: 2em;
    padding-top: 17%;
    font-family: roboto-regular;
}
.btn-patient{
    background-color: #78a044;
    border-radius: 5px;
    border: 1px solid #ccc;
    color: #fff;
    font-family: roboto-bold;
    font-size: 15px;
    padding: 0.5% 2% 0.5% 2%;

}
.content-faq{
	padding-top: 5%;
	padding-bottom: 5%;
}
.panel-heading .accordion-toggle:after {
    /* symbol for "opening" panels */
    font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
    content: "\e114";    /* adjust as needed, taken from bootstrap.css */
    float: right;        /* adjust as needed */
    color: grey;         /* adjust as needed */
}
.panel-heading .accordion-toggle.collapsed:after {
    /* symbol for "collapsed" panels */
    content: "\e080";    /* adjust as needed, taken from bootstrap.css */
}
.panel-default > .panel-heading{
    background: none;
    background-image: none !important;
    border: 0;
    padding: 2%;
}
.panel.panel-default.panel-default-custom {
    border-radius: 0 !important;
    border-left: 0 !important;
    border-right: 0 !important;
    border-bottom: 0 !important;
    box-shadow: none;
}
.panelBodyCustom{
    border-top: none !important;
    background-color: #78A044;
    border-radius: 5px;
    color: #E6E4E4;
    line-height: 36px;
    font-family: roboto-regular;
}
.panelTitleCustom{
    color: #78A044;
    font-family: roboto-regular;
}
.panelTitleCustom a{
	text-decoration: none;
}
.panelBodyCustom p{
	color: #fff;
}
</style>

<body>


<!-- header starts here -->
	<?php //include_once('header.php'); ?>
	<?php //include_once('modals.php'); 
include_once(APPPATH.'libraries/header.php');?>
<!-- header ends here -->
<div class="container-fluid" style="margin: 0;padding: 0;">

	<div class=" bannerImageCareer">
		<div class="bannerTextContact">
			<h1>WE ARE A GROWING TEAM</h1>
		</div>
	</div>

</div>
<div class="container">
	<div class="content-faq">
						<button class="btn btn-patient">Marketing</button>
	</div>
	<div class="faq-accordin">
		<div class="panel-group" id="accordion">
			  <div class="panel panel-default panel-default-custom">
			    <div class="panel-heading panel-custom">
			      <h4 class="panel-title panelTitleCustom">
			        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
			         Marketing Executive
			        </a>
			      </h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse in">
			      <div class="panel-body panelBodyCustom">
			        <p>
			        	Sales executives are the key point of contact between an organisation and its clients: answering queries, offering advice and introducing new products.<br/>
						Their work includes:
						<ul>
							<li>Organising sales visits</li>
							<li>Demonstrating/presenting products</li>
							<li>Establishing new business</li>
							<li>Maintaining accurate records</li>
							<li>Attending trade exhibitions, conferences and meetings</li>
							<li>Reviewing sales performance</li>
							<li>Negotiating contracts</li>
						</ul><br/>	
							Promotional prospects are excellent - progression can be into senior sales roles or into related employment areas such as marketing or management.
			        	
			        </p>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default panel-default-custom">
			    <div class="panel-heading panel-custom">
			      <h4 class="panel-title panelTitleCustom">
			        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
			          Senior Marketing Executive
			        </a>
			      </h4>
			    </div>
			    <div id="collapseTwo" class="panel-collapse collapse">
			      <div class="panel-body panelBodyCustom">
			      	<p>
			        	Sales executives are the key point of contact between an organisation and its clients: answering queries, offering advice and introducing new products.<br/>
						Their work includes:
						<ul>
							<li>Organising sales visits</li>
							<li>Demonstrating/presenting products</li>
							<li>Establishing new business</li>
							<li>Maintaining accurate records</li>
							<li>Attending trade exhibitions, conferences and meetings</li>
							<li>Reviewing sales performance</li>
							<li>Negotiating contracts</li>
						</ul><br/>	
							Promotional prospects are excellent - progression can be into senior sales roles or into related employment areas such as marketing or management.
			        	
			        </p> 
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default panel-default-custom">
			    <div class="panel-heading panel-custom">
			      <h4 class="panel-title panelTitleCustom">
			        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
			          Manager
			        </a>
			      </h4>
			    </div>
			    <div id="collapseThree" class="panel-collapse collapse">
			      <div class="panel-body panelBodyCustom">
			       		<ul>
			       				
							<li>Present purchase offers to sellers for consideration.</li>
							<li>Act as an intermediary in negotiations between buyers and sellers, generally representing one or the other.</li>
							<li>Compare a property with similar properties that have recently sold to determine its competitive market price.</li>
							<li>Advise clients on market conditions, prices, mortgages, legal requirements and related matters.</li>
							<li>Promote sales of properties through advertisements, open houses, and participation in multiple listing services.</li>
							<li>Accompany buyers during visits to and inspections of property, advising them on the suitability and value of the homes they are visiting.</li>
							<li>Prepare documents such as representation contracts, purchase agreements, closing statements, deeds and leases.</li>
							<li>Confer with escrow companies, lenders, home inspectors, and pest control operators to ensure that terms and conditions of purchase agreements are met before closing dates.</li>
							<li>Interview clients to determine what kinds of properties they are seeking.</li>
							<li>Coordinate property closings, overseeing signing of documents and disbursement of funds.</li>
							<li>Generate lists of properties that are compatible with buyers' needs and financial resources.</li>
							<li>Contact property owners and advertise services to solicit property sales listings.</li>
							<li>Arrange for title searches to determine whether clients have clear property titles.</li>
							<li>Display commercial, industrial, agricultural, and residential properties to clients and explain their features.</li>
							<li>Review property listings, trade journals, and relevant literature, and attend conventions, seminars, and staff and association meetings to remain knowledgeable about real estate markets.</li>
							<li>Coordinate appointments to show homes to prospective buyers.</li>
							<li>Answer clients' questions regarding construction work, financing, maintenance, repairs, and appraisals.</li>
							<li>Advise sellers on how to make homes more appealing to potential buyers.</li>
							<li>Investigate clients' financial and credit status to determine eligibility for financing.</li>
							<li>Develop networks of attorneys, mortgage lenders, and contractors to whom clients may be referred.</li>
							<li>Inspect condition of premises, and arrange for necessary maintenance or notify owners of maintenance needs.</li>
							<li>Conduct seminars and training sessions for sales agents to improve sales techniques.</li>
							<li>Appraise properties to determine loan values.</li>
							<li>Evaluate mortgage options to help clients obtain financing at the best prevailing rates and terms.</li>
							<li>Arrange meetings between buyers and sellers when details of transactions need to be negotiated.</li></li>
							<li>Rent or lease properties on behalf of clients.</li>
							<li>Secure construction or purchase financing with own firm or mortgage company.</li>
							<li>Solicit and compile listings of available rental properties.</li>
							<li>Review plans for new construction with clients, enumerating and recommending available options and features.</li>
							<li>Visit properties to assess them before showing them to clients.</li>
							<li>Locate and appraise undeveloped areas for building sites, based on evaluations of area market conditions.</li>
							<li>Contact utility companies for service hookups to clients' property</li>
			       		</ul>
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
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">	
	$(document).ready(function(){
		$(".scrollDon").click(function() {
		   $('html, body').animate({
		       scrollTop: $(".careerTextScroll").offset().top
		   }, 1000);
		});
	});
	</script>
	<!-- bootstrap library js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/js/bootstrap.min.js"></script>
	
	


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>

        <script src="<?php echo base_url();?>bookmyplot_design/js/index.js"></script>
</body>

</html>	