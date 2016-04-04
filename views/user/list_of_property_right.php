<!DOCTYPE html>
<html>
<head>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book My Plot</title>
	<!-- Bootstrap css links -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/css/bootstrap-theme.min.css">
	<!-- font-awesome css links -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/jquery.material.form.css">
	<style type="text/css">
		.ui-slider-range.ui-widget-header.ui-corner-all {
    background: #4AAEDF !important;
     color: #4AAEDF !important; 
}

#page_navigation a{
    padding:3px;
    border:1px solid gray;
    margin:2px;
    color:black;
    text-decoration:none
}
.active_page{
    background:darkblue;
    color:white !important;
}
div#slider-range {
    max-height: 7px;
    background: #ebebeb;
}
span.ui-slider-handle.ui-state-default.ui-corner-all {
    width: 17px;
    border-radius: 10px;
    height: 17px;
    box-shadow: 0px 2px 1px 0px #a4a4a4;
    margin-top: -2px;
    outline: none;
}
.priceRange{
    width: 100%;
}
.amount1 {
    float: right;
    width: 15%;
}
.amount {
    width: 32%;
    float: left;
}
/* sanjay */
.success{
color: #4F8A10;
background-color: #DFF2BF;
}

/* sanjay */
</style>

</head>
<body>

<!-- menu starts here -->
	<div class="container-fluid StikyHeader">
		<div class="container">
			<div class="TopHeader1 paddigTop">
				<div class="row">
					<div class="col-md-3" style="padding:0">
						<div class="logo">
							<a href="index.php"><img src="<?php echo base_url();?>bookmyplot_design/images/logo.png" alt="logo"></a>
						</div>
					</div>
					<div class="col-md-6" style="padding:0">
						<select class="form-control locality">
						  <option>Select preffered locality</option>
						  <option>Mumbai</option>
						  <option>Bangalore</option>
						  <option>Pune</option>
						  <option>Belgaum</option>
						</select>
						<label class="localityText">Budget</label>
						<select class="form-control localityMin">
						  <option>Min</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
						<select class="form-control localityMin">
						  <option>Max</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
						<button class="btn btn-Search glyphicon glyphicon-th-large"> Search</button>
					</div>
					<div class="col-md-3" style="padding:0">
						<select class="form-control City">
						  <option>Select City</option>
						  <option>Bangalore</option>
						  <option>Pune</option>
						  <option>Chennai</option>
						  <option>Mumbai</option>
						</select>
						<?php if($logged_in=="TRUE"){ 
                               //if($this->session->userdata('logged_in')=="TRUE"){
							?>
						<div class="col-md-2 marginTop">
							<!--<span class="colorWhite">Login</span><span class="colorWhite"> |</span> <span class="colorWhite">Sign Up</span>-->
				<a href="<?php echo site_url('user/user_logout');?>"><button class="btn btn-login_Signup">Logout</button></a>

						</div>
						<?php }elseif($logged_in==""){ 
							  // }elseif($this->session->userdata('logged_in')==""){
							?>
						<div class="SmallRightdiv">
							<button class="btn btn-login_Signup" data-toggle="modal" data-target="#myModal">Login / SignUp</button>
						</div>
						<?php }?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- menu ends here -->



<?php //include_once('modals.php'); 
include_once(APPPATH.'libraries/modals.php');?>

<!-- header starts here -->
	<?php //include_once('header.php'); 
	//include_once(APPPATH.'libraries/header.php');

	?>
<!-- header ends here -->

<!--ListingFirst Section Starts here-->
	<div class="container-fluid MainHeaderImg">
		<div class="container">
			<div class="HeaderText">
				<h2>BIGGEST LAND AND PLOT LISTING WITH BIG SAVING</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.  </p>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="PropertyListing">
				<div class="row">
					<ul>
						<li class="">
							<h5>TYPE OF PROPERTY</h5>
							<select class="form-control PropertySelection">
								<option>Select property type</option>
								<option>Agency Leasing</option>
								<option>Retail</option>
								<option>Residential</option>
								<option>5</option>
							</select>
						</li>
						<li class="">
							<h5>PROPERTY LOCATION</h5> 
							<select class="form-control PropertySelection">
								<option>Select preffered locality</option>
								<option>Bangalore</option>
								<option>Pune</option>
								<option>Chennai</option>
								<option>5</option>
							</select>
						</li>
						<li class="">
							<h5>PROPERTY STATUS</h5>
							<select class="form-control PropertySelection">
								<option>Select preffered locality</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</li>
						<li class="">
							<h5>PROPERTY PRICE</h5>
							<div id="slider-range"></div><br>
								<div class="row">
									<div class="priceRange">
									  	<input type="text" id="amount" class="amount" readonly style="border:0; color:#00000; font-weight:bold;">
									  	<input type="text" id="amount1" class="amount1" readonly style="border:0; color:#00000; font-weight:bold;">
									 </div>
							</div>

						</li>
						<li class=""><button class="btn btn-Listing">APPLY</button></li>
					</ul>


				</div>
			</div>
		</div>
<!--ListingFirst Section ends here-->
<input type='hidden' id='current_page'/>
<input type='hidden' id='show_per_page' />

<?php if($search=="empty"){
$no_of_records="";
$location_name="";
}else{
	$no_of_records=count($search);
    //print_r("records".$no_of_records);
    $location_id=$search[0]->location_pro; 
    $location_name=getLocationname_byid($location_id);
}

?>
<!--Second Section Starts here-->
	<div class="MainSecondSection">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="MainListingleftSection">
						<h4><?php echo $no_of_records?> RESULTS FOUND NEAR <?php echo $location_name;?></h4>
						<div class="smallMap">
							<a href="javascript:void(0);"><i class="fa fa-map-o"></i> Show Map</a>
						</div>
						
						<div class="clear"></div>
						
					</div>
					<div class="googlemaps">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.66007678024!2d77.35073455584109!3d12.954517010195083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka+560001!5e0!3m2!1sen!2sin!4v1453550974658" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

<?php 
if($search=="empty"){
//if(empty($search)){?>
<div style="text-align:center;padding-top:20px; background-color:#F0F8FF;"><b>Sorry no records found<b></div>
<?php }else{?>
<div id="content">
<?php 
$i=1;
foreach ($search as $search_data) {
if($search_data->pro_type_id=="1"){
$pro_type_id=$search_data->pro_type_id;
$price_per_sqfeet='';
$pro_name=$search_data->pro_name;
$pro_id=$search_data->pro_id;
$pro_type_name=$search_data->pro_type_name;//proerty_type_name
$property_address=$search_data->address_pro;//property_address
$developer_name=$search_data->dev_name;
$price_in_words=$search_data->words;
//$price_in_words="";
$max_price_in_words=getMaxpriceinwords($search_data->max_price);
$price_per_acresby_id="";
}elseif($search_data->pro_type_id=="2"){
$pro_type_id=$search_data->pro_type_id;
$pro_name=$search_data->pro_name;
$price_per_sqfeetby_figure=$search_data->price_per_square;
$price_per_sqfeet=getMinprice_words_Byfigure($price_per_sqfeetby_figure);
$pro_id=$search_data->pro_id;
$pro_type_name=$search_data->pro_type_name;
$developer_name=$search_data->dev_name;
$property_address=$search_data->address_pro;
$price_in_words=no_to_words($search_data->total_price);

//$price_in_words=$search_data->words;
$max_price_in_words="";
$price_per_acresby_id="";
}elseif($search_data->pro_type_id=="3"){
$pro_type_id=$search_data->pro_type_id;
$pro_name=$search_data->pro_name;
$price_per_acresby_figure=$search_data->price_per_acres;
$price_per_acresby_figure=getMinprice_words_Byfigure($price_per_acresby_figure);
$pro_id=$search_data->pro_id;
$pro_type_name=$search_data->pro_type_name;
$developer_name=$search_data->dev_name;
$property_address=$search_data->address_pro;
$price_in_words=$search_data->words;
$max_price_in_words="";
$total_acres=$search_data->total_acres;


}

$data['allimages_byproid']=$this->model_search_property->getAll_images_by_property_id($pro_id);

?>



	<div class="PropertyListingPage ListingBox"><!--Property Listing starts here-->
		<!--sanjay modal-->
<div class="modal fade" id="joingroup_<?php echo $pro_id;?>" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Join Group
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div id="success_<?php echo $i;?>" class="success"></div>
                <!--<form role="form" id="uploadForm" enctype="multipart/form-data">-->
               <form id="uploadimage_<?php echo $i;?>" action="" method="post" enctype="multipart/form-data">
               	 <input type="hidden" class="form-control" name="count" value="<?php echo $i;?>">

                	<input type="hidden" class="form-control" name="group_id_<?php echo $i;?>" value="<?php echo $pro_id?>">
                 <div class="form-group">
                    <label for="exampleInputPassword1">First Name</label>
                      <input type="text" class="form-control" name="firstname"
                      id="firstname" placeholder="Please Enter First Name"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                      <input type="text" class="form-control" name="lastname"
                          id="lastname" placeholder="Please Enter Last Name"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" value="<?php if($logged_in=="TRUE"){ echo $userid; }else{}?>"
                      id="email_member"  name="email_member" placeholder="Please Enter Email"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                      <input type="text" class="form-control" name="phone"
                      id="phone" placeholder="Please Enter Phone"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Designation</label>
                      <input type="text" class="form-control" name="designation"
                      id="designation" placeholder="Please Enter Designation"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Company</label>
                      <input type="text" class="form-control" name="company"
                      id="company" placeholder="Please Enter Company"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <select name="location" class="form-control">
                                 <option value="0">Select</option>
							     <?php foreach ($Location_by_city as $loc) {?>
                         <option value="<?php echo $loc['city_id'];?>"><?php echo $loc['city_name'];?></option>
                                                <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                      <input type="file" class="form-control" name="file"
                      id="file" placeholder="image"/>
                  </div>
                 
                  <button type="submit_join_group" class="btn btn-default" id="submit_join_group">Submit</button>

                </form>
                
                
            </div><!--modal body -->
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                         Close
                </button>
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>
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


<!--sanjaymymodal-->

						<div class="row">
						<div class="col-md-4" style="padding:0;">
						<div id="carousel-example-generic_<?php echo $i;?>" class="carousel slide ListingImages" data-ride="carousel">
							
										
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
									<img src="<?php echo base_url();?>uploads/developer/<?php echo $search_data->photograph;?>" width="80%">
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
										<?php //include_once('modals.php'); 
include_once(APPPATH.'libraries/modals.php');
?>	                                    
                                         <div class="col-md-6" style="padding:0;">
                                        <div class="InnerListingWoods">
									     <div class="row">
                                        <div class="col-sm-8">
					
											<a href="<?php echo site_url('member/specific_project/'.$pro_id);?>"><h3><?php echo $pro_name;?></h3></a>
											<div class="propertyrupees">
												<h4><i class="fa fa-inr"></i> <?php if($pro_type_id=="3"){echo $total_acres." ";}elseif($pro_type_id=="2"||$pro_type_id=="1"){echo $price_in_words." ";} //echo $price_in_words ;?> <?php if($pro_type_id=="3"){?><i class="fa fa-inr"></i><?php echo " ".$price_per_acresby_figure.' per acres';}elseif($pro_type_id=="2"){?><i class="fa fa-inr"></i><?php echo $price_per_sqfeet.' per sqft' ;}elseif($pro_type_id=="1"){echo "per sqft";}?></h4>
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
											<!-- <i class="fa fa-map-marker"></i> Near Jigani -->
										</div>
										<div class="col-sm-4" style="padding:0;">
<!-- 				<button class="btn btn-joinGroup"><i class="fa fa-users"></i> Join Group</button>
 -->
 <?php if($userid!=""){
 $data['checkmember_exists']=$this->model_search_property->getMember_existsornot($pro_id,$userid);
 if($data['checkmember_exists']!="empty"){

 }else{?>
 	    <button class="btn btn-joinGroup" data-toggle="modal" data-target="#joingroup_<?php echo $pro_id;?>" data-id=""><i class="fa fa-users"></i>Join Group</button>

 <?php }

 }else{?>
 	    <button class="btn btn-joinGroup" data-toggle="modal" data-target="#joingroup_<?php echo $pro_id;?>" data-id=""><i class="fa fa-users"></i>Join Group</button>

<?php }
 	?>

										</div>
										<div class="ForBest text-right">For Best Deals <i class="fa fa-que fa-question-circle"></i></div>
										<div class="col-sm-4" style="padding:0;">
                                    <!--here 3 input box -->
 <input type="hidden" style="width:100px" id="check_memberornot" value="<?php if($check_memberornot!=="empty"){echo "member_yes";}else{echo "member_no";}?>">
 <input type="hidden" style="width:100px" id="pro_id_<?php echo $i;?>" value="<?php echo $pro_id; ?>">
 <input type="hidden" style="width:100px" id="userid" value="<?php echo $userid;?>">
<button class="btn btn-joinGroup" id="group_discussion_<?php echo $i;?>" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>">Group Discussion</button>
										</div>
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
               window.location.href ="<?php echo site_url('group_discussion/listed_topic/'.$pro_id);?>";
                }
                  });
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

		     } //foreach?>

<!--2nd search starts here-->
<?php 
$j=1;
foreach ($search_for_all as $search_data) {
if($search_data->pro_type_id=="1"){
$pro_type_id=$search_data->pro_type_id;
$price_per_sqfeet='';
$pro_name=$search_data->pro_name;
$pro_id=$search_data->pro_id;
$pro_type_name=$search_data->pro_type_name;//proerty_type_name
$property_address=$search_data->address_pro;//property_address
$developer_name=$search_data->dev_name;
$price_in_words=$search_data->words;
//$price_in_words="";
$max_price_in_words=getMaxpriceinwords($search_data->max_price);
$price_per_acresby_id="";
}elseif($search_data->pro_type_id=="2"){
$pro_type_id=$search_data->pro_type_id;
$pro_name=$search_data->pro_name;
$price_per_sqfeetby_figure=$search_data->price_per_square;
$price_per_sqfeet=getMinprice_words_Byfigure($price_per_sqfeetby_figure);
$pro_id=$search_data->pro_id;
$pro_type_name=$search_data->pro_type_name;
$developer_name=$search_data->dev_name;
$property_address=$search_data->address_pro;
$price_in_words=$search_data->words;
$max_price_in_words="";
$price_per_acresby_id="";
}elseif($search_data->pro_type_id=="3"){
$pro_type_id=$search_data->pro_type_id;
$pro_name=$search_data->pro_name;
$price_per_acresby_figure=$search_data->price_per_acres;
$price_per_acresby_figure=getMinprice_words_Byfigure($price_per_acresby_figure);
$pro_id=$search_data->pro_id;
$pro_type_name=$search_data->pro_type_name;
$developer_name=$search_data->dev_name;
$property_address=$search_data->address_pro;
$price_in_words=$search_data->words;
$max_price_in_words="";
$total_acres=$search_data->total_acres;


}
$data['allimages_byproid']=$this->model_search_property->getAll_images_by_property_id($pro_id);

?>



	<div class="PropertyListingPage ListingBox"><!--Property Listing starts here-->
		<!--sanjay modal-->
<div class="modal fade" id="joingroup2_<?php echo $pro_id;?>" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Join Group
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div id="success2_<?php echo $j;?>" class="success"></div>
                <!--<form role="form" id="uploadForm" enctype="multipart/form-data">-->
               <form id="uploadimage2_<?php echo $j;?>" action="" method="post" enctype="multipart/form-data">
               	 <input type="hidden" class="form-control" name="count" value="<?php echo $j;?>">

                	<input type="hidden" class="form-control" name="group_id2_<?php echo $i;?>" value="<?php echo $pro_id?>">
                 <div class="form-group">
                    <label for="exampleInputPassword1">First Name</label>
                      <input type="text" class="form-control" name="firstname"
                      id="firstname" placeholder="Please Enter First Name"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                      <input type="text" class="form-control" name="lastname"
                          id="lastname" placeholder="Please Enter Last Name"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" value="<?php if($logged_in=="TRUE"){ echo $userid; }else{}?>"
                      id="email_member"  name="email_member" placeholder="Please Enter Email"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                      <input type="text" class="form-control" name="phone"
                      id="phone" placeholder="Please Enter Phone"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Designation</label>
                      <input type="text" class="form-control" name="designation"
                      id="designation" placeholder="Please Enter Designation"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Company</label>
                      <input type="text" class="form-control" name="company"
                      id="company" placeholder="Please Enter Company"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <select name="location" class="form-control">
                                 <option value="0">Select</option>
							     <?php foreach ($Location_by_city as $loc) {?>
                         <option value="<?php echo $loc['city_id'];?>"><?php echo $loc['city_name'];?></option>
                                                <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                      <input type="file" class="form-control" name="file"
                      id="file" placeholder="image"/>
                  </div>
                 
                  <button type="submit_join_group" class="btn btn-default" id="submit_join_group">Submit</button>

                </form>
                
                
            </div><!--modal body -->
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                         Close
                </button>
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  	$(document).ready(function(){
$("#uploadimage2_"+<?php echo $j;?>).on('submit',(function(e) {
e.preventDefault();
//alert(<?php echo $i?>);
var formData = new FormData( $("#uploadimage2_"+<?php echo $j;?>)[0]);
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
   $("#success2_<?php echo $i;?>").append("Registration is successfull.. Thank you");
    }else if(data=="error"){
   alert("sorry file error");
                     }  
}
});
}));
});
</script>


<!--sanjaymymodal-->

						<div class="row">
						<div class="col-md-4" style="padding:0;">
						<div id="carousel-example-generic2_<?php echo $j;?>" class="carousel slide ListingImages" data-ride="carousel">
							
										
                        <div class="carousel-inner" role="listbox">
											    <div class="item active">
											      	<img src="<?php echo base_url();?>bookmyplot_design/images/aq.jpg" alt="...">
											    <div class="carousel-caption">
											        
												</div>
										         </div>
												<?php foreach ($data['allimages_byproid'] as $value_images) {
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
											  <a class="left" href="#carousel-example-generic2_<?php echo $j;?>" role="button" data-slide="prev">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="right" href="#carousel-example-generic2_<?php echo $j;?>" role="button" data-slide="next">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
											    <span class="sr-only">Next</span>
											  </a>


											  
					   </div>	

				</div>
				<div class="col-md-2 text-center" style="padding:0;border-right: 2px solid #ccc;">
								<div class="DeveloperContent">
									<h5>DEVELOPER</h5>
									<div class="builderLogo">
									<img src="<?php echo base_url();?>uploads/developer/<?php echo $search_data->photograph;?>" width="80%">
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
										<?php //include_once('modals.php'); 
include_once(APPPATH.'libraries/modals.php');
?>	                                    
                                         <div class="col-md-6" style="padding:0;">
                                        <div class="InnerListingWoods">
									     <div class="row">
                                        <div class="col-sm-8">
					
											<a href="<?php echo site_url('member/specific_project/'.$pro_id);?>"><h3><?php echo $pro_name;?></h3></a>
											<div class="propertyrupees">
												<h4><i class="fa fa-inr"></i> <?php if($pro_type_id=="3"){echo $total_acres." ";}elseif($pro_type_id=="2"||$pro_type_id=="1"){echo $price_in_words." ";} //echo $price_in_words ;?> <?php if($pro_type_id=="3"){?><i class="fa fa-inr"></i><?php echo " ".$price_per_acresby_figure.' per acres';}elseif($pro_type_id=="2"){?><i class="fa fa-inr"></i><?php echo $price_per_sqfeet.' per sqft' ;}elseif($pro_type_id=="1"){echo "per sqft";}?></h4>
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
											<!-- <i class="fa fa-map-marker"></i> Near Jigani -->
										</div>
										<div class="col-sm-4" style="padding:0;">
<!-- 				<button class="btn btn-joinGroup"><i class="fa fa-users"></i> Join Group</button>
 -->
<?php if($userid!=""){
 $data['checkmember_exists']=$this->model_search_property->getMember_existsornot($pro_id,$userid);
 if($data['checkmember_exists']!="empty"){

 }else{?>
 	    <button class="btn btn-joinGroup" data-toggle="modal" data-target="#joingroup_<?php echo $pro_id;?>" data-id=""><i class="fa fa-users"></i>Join Group</button>

 <?php }

 }else{?>
 	    <button class="btn btn-joinGroup" data-toggle="modal" data-target="#joingroup_<?php echo $pro_id;?>" data-id=""><i class="fa fa-users"></i>Join Group</button>

<?php }
 	?>

<!-- <button class="btn btn-joinGroup" data-toggle="modal" data-target="#joingroup2_<?php echo $pro_id;?>" data-id=""><i class="fa fa-users"></i>Join Group</button>
 -->
										</div>
										<div class="ForBest text-right">For Best Deals <i class="fa fa-que fa-question-circle"></i></div>
										<div class="col-sm-4" style="padding:0;">
                                    <!--here 3 input box -->
 <input type="hidden" style="width:100px" id="check_memberornot2" value="<?php if($check_memberornot!=="empty"){echo "member_yes";}else{echo "member_no";}?>">
 <input type="hidden" style="width:100px" id="pro_id2_<?php echo $j;?>" value="<?php echo $pro_id; ?>">
 <input type="hidden" style="width:100px" id="userid" value="<?php echo $userid;?>">

<button class="btn btn-joinGroup" id="group_discussio_<?php echo $j;?>" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>">Group Discussio</button>
										</div>
									</div>
								</div>
									<script type="text/javascript">
  	       $(document).ready(function(){
			$('#group_discussio_'+<?php echo $j;?>).click(function(){
  			var check_memberornot=$("#check_memberornot2").val();
  			var userid=$("#userid").val();
  			//alert(userid);
  			var loginornot=$(this).val();
  			//alert(loginornot);
  			var pro_id=$("#pro_id2_"+<?php echo $j;?>).val();
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
               window.location.href ="<?php echo site_url('group_discussion/listed_topic/'.$pro_id);?>";
                }
                  });
  			}
  			
  		});

	});
  	                     </script>
  	                     <button class="btn btn-ViewDetails">View Details</button>
							</div>



				</div>
							



							

					
  </div><!--Property Listing ends here-->
			
		<?php 
		    $j++; 

		     } //foreach?>



<!--2nd search ends here-->

</div>
    <?php  }
?>

<!--sanjay mymodal ends here-->
<!--dummy list for reference-->
                    <!--Property Listing starts here dummy list-->
				

					<!---dummy list for reference-->
				<div id='page_navigation'></div>
				</div>
				<div id='page_navigation'></div>

				<div class="col-md-3"><!--Right Section Starts here-->
					<div class="RightSectionSecondPart"><!--RightSectionSecondPart starts here-->
						<div class="RightBgColor">
							<div class="GreenRightText">
								<h4>Green Woods Community People</h4>
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

						</div>

					</div><!--RightSectionSecondPart ends here-->
					<div class="SmallAdvertise">
						<img src="<?php echo base_url();?>bookmyplot_design/images/qaa.jpg" width="100%">
					</div>
				</div><!--Right Section ends here-->
			</div>
		</div>
	</div>
<!--Second Section ends here-->

<!-- footer starts here -->
	<?php // include_once('footer.php'); 
	include_once(APPPATH.'libraries/footer.php');?>
<!-- footer ends here-->

	<!-- jquery library js link -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/jquery-1.11.3.min.js"></script>
	<!-- bootstrap library js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- jquery ui js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/plugins/jquery-ui-1.11.4/jquery-ui.js"></script>
	<!-- label js links -->
	<script type="text/javascript" src="<?php echo base_url();?>bookmyplot_design/js/jquery.material.form.js"></script>
	<script>
	  $(function() {
	    $( "#slider-range" ).slider({
	      range: true,
	      min: 0,
	      max: 500,
	      values: [ 75, 300 ],
	      slide: function( event, ui ) {
	        $( "#amount" ).val( "Rs" + ui.values[ 0 ] );
	         $( "#amount1" ).val("Rs" + ui.values[ 1 ] );
	      }
	    });
	    $( "#amount" ).val( "Rs" + $( "#slider-range" ).slider( "values", 0 )  );
	    $( "#amount1" ).val( "Rs" + $( "#slider-range" ).slider( "values", 1 ) );
	  });
  </script>
  <script type="text/javascript">
  //pagination starts here
    $(document).ready(function(){
    
    //how much items per page to show
    var show_per_page =5; 
    //getting the amount of elements inside content div
    var number_of_items = $('#content').children().size();
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
    var navigation_html = '<a class="previous_link" href="javascript:previous();">Prev</a>';
    var current_link = 0;
    while(number_of_pages > current_link){
        navigation_html += '<a class="page_link" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a>';
        current_link++;
    }
    navigation_html += '<a class="next_link" href="javascript:next();">Next</a>';
    
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
  	$(document).ready(function(){
  		$('.googlemaps').hide();

  		$('.smallMap').click(function(){
  			$('.googlemaps').toggle();
  		});

  		
  		$('#group_discussion').click(function(){
  			//alert("hiiii");
  			var check_memberornot=$("#check_memberornot").val();
  			var loginornot=$(this).val();
  			// var pro_id=$("#pro_id").val();
  			// alert(pro_id);
  			if(loginornot=="not_logged_in"){
  				alert("please Sign up first");
  			}else{
  				if(check_memberornot=="member_yes"){
                      window.location.href ='<?php echo base_url();?>index.php/group_discussion';
  				}else{
  					alert("please join group first");
  				}
  			}
  		});
  		


  		//$(document).ready(function (e) {
// $("#uploadimage").on('submit',(function(e) {
// e.preventDefault();
// alert("hi");
//  var formData = new FormData( $("#uploadimage")[0]);
// $.ajax({
// //url: "ajax_php_file.php", 
//  url: "<?php echo base_url(); ?>" + "index.php/member/member_join_group",// Url to which the request is send
// type: "POST",             // Type of request to be send, called as method
// data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
// contentType: false,       // The content type used when sending data to the server.
// cache: false,             // To unable request pages to be cached
// processData:false,        // To send DOMDocument or non processed data file it is set to false
// success: function(data)   // A function to be called if request succeeds
// {
//  if (data=="ok")
//    { 
//                 	//alert("okkk");
//    $("#success").append("Registration is successfull.. Thank you");
//     }else if(data=="error"){
//    alert("sorry file error");
//                      }  
// }
// });
// }));



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











