<!DOCTYPE html>
<html>
<head>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<script>
function GetLocation() {
	$('#map_canvas').toggle();
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bookmyplot_design/css/balloon.css">

	<style>
	/**map**/
#map_canvas {
width:100%;
height: 350px;
}
/**map**/
            /****** Rating Starts *****/
            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            fieldset, label { margin: 0; padding: 0; }
            body{ /*margin: 20px;*/ }
            h1 {font-size: 1.5em; margin: 10px;}

            .rating { 
                border: none;
                float: left;
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
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }     


            /* Downloaded from http://devzone.co.in/ */
        </style>
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

.ForBest{
	display: inline-block;
}
.HeaderText p{
	color: #fff;
}

/* sanjay */
</style>
</head>
<body>

<!--menu starts here
<div class="container-fluid StikyHeader">
		<div class="container">
			<div class="TopHeader1 paddigTop">
				<div class="row">
					<div class="col-md-3" style="padding:0">
						<div class="logo">
							<a href="<?php echo site_url();?>/welcome/"><img src="<?php echo base_url();?>bookmyplot_design/images/logo.png" alt="logo"></a>
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
							<!--<span class="colorWhite">Login</span><span class="colorWhite"> |</span> <span class="colorWhite">Sign Up</span>
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



 </div>

<?php //include_once('modals.php'); 
include_once(APPPATH.'libraries/header.php');?>

<!-- header starts here -->
	<?php //include_once('header.php'); 
	//include_once(APPPATH.'libraries/header.php');

	?>
<!-- header ends here -->

<!--ListingFirst Section Starts here-->
	<div class="container-fluid MainHeaderImg">
		<div class="container">
			<div class="HeaderText">
				<h2>INDIA'S FIRST REAL-ESTATE GROUP BUY PLATFORM</h2>
				<p>Grab villa plots at 25% discount compared to current market price </p>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="PropertyListing">
				<div class="row">
					<ul>
						<li class="">
							<h5>TYPE OF PROPERTY</h5>
							<select id="pro_type" class="form-control PropertySelection">
						    <option value="0">--Select--</option>
                        <?php foreach ($property_type as $pro_type) { ?>
                         <?php if($pro_type['pro_type_id'] == $pro_type_id) { ?>
                        <option value="<?php echo $pro_type['pro_type_id']; ?>" selected><?php echo $pro_type['pro_type_name']; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $pro_type['pro_type_id']; ?>"><?php echo $pro_type['pro_type_name']; ?></option>
                    <?php } ?>
                    <?php } ?>

							</select>
						</li>
						<li class="">
							<h5>PROPERTY BRL</h5> 
							<select  class="form-control PropertySelection" name="brl_fr1" id="brl_fr1">
								<option value="0">--Select--</option>
								<?php foreach ($brl as $brls) { ?>
                         <?php if($brls['brl_id'] == $brl_fr) { ?>
                        <option value="<?php echo $brls['brl_id'];?>" selected><?php echo $brls['brl_name']; ?></option>
                    <?php } else { ?>

                        <option value="<?php echo $brls['brl_id']; ?>"><?php echo $brls['brl_name']; ?></option>
                    <?php } ?>
                    <?php } ?>
							</select>
						</li>
					
						<li class="">
							<h5>PROPERTY PURPOSE<?php echo $use_fr;?></h5> 
							<select  class="use_fr1 form-control PropertySelection" name="use_fr1" id="use_fr1">
								<option value="0">--Select--</option>
				            <?php if($pro_type_id=="2"){
				            	foreach ($getall_property_use as $value) {?>
				            	<?php if($value['pro_use_id'] == $use_fr) { ?>
 <option value="<?php echo $value['pro_use_id'];?>" selected><?php echo $value['pro_use_name']; ?></option>
        <?php } else { ?>
               <option value="<?php echo $value['pro_use_id']; ?>"><?php echo $value['pro_use_name']; ?></option>
				            	
				        <?php } ?>
                               <?php } ?>
                                   <?php } ?>


                              <?php if($pro_type_id=="3"){
				            	foreach ($getall_property_use as $value) {?>
				            	<?php if($value['pro_use_id'] == $use_fr) { ?>
 <option value="<?php echo $value['pro_use_id'];?>" selected><?php echo $value['pro_use_name']; ?></option>
        <?php } else { ?>
               <option value="<?php echo $value['pro_use_id']; ?>"><?php echo $value['pro_use_name']; ?></option>
				            	
				        <?php } ?>
                               <?php } ?>
                                   <?php } ?>

                                    <?php if($pro_type_id=="1"){?>
				            	<option value="0">--Select--</option>
                                   <?php } ?>
							</select>
						</li>
						<li class="">
							<h5>PROPERTY STATUS</h5>
							<select class="form-control PropertySelection" id="property_status">
								<option>Property Status</option>
							 <?php if($session_pro_status == "all") { ?>
                       <option value="all" selected><?php echo $session_pro_status; ?></option>
                       <option value="ongoing">ongoing</option>
					   <option value="ready_to_move">ready_to_move</option>
                    <?php } else { ?>
								<option value="ongoing">ongoing</option>
								<option value="ready_to_move">ready_to_move</option>
								<?php } ?>
                               
							</select>
						</li>
						
						<!-- <li class="">
							<h5>PROPERTY PRICE</h5>
							<div id="slider-range"></div><br>
								<div class="row">
									<div class="priceRange">
									  	<input type="text" id="amount" class="amount" readonly style="border:0; color:#00000; font-weight:bold;">
									  	<input type="text" id="amount1" class="amount1" readonly style="border:0; color:#00000; font-weight:bold;">
									 </div>
							</div>

						</li> -->
						<li class=""><button class="btn btn-Listing">APPLY</button></li>
						<li>
							<div class="StartFirmsmall text-center">
							<?php if($pro_type_id==0){
							}elseif($pro_type_id==2){
								?>
						  	    <p>Starts from</p>
<!-- 						  	    <h2><i class="fa fa-inr"></i> 33.0 Lacs <small><i class="fa fa-inr"></i> 1750/Sqft</small></h2>
 -->
  						<h2><i class="fa fa-inr"></i><?php echo notowords($starting_price[0]->lowest_price);?><small><i class="fa fa-inr"></i> <?php echo $starting_price[0]->persqft;?>/Sqft</small></h2>
                                  <?php }elseif ($pro_type_id=1) {?>
                              <p>Starts from</p>
<!-- 						  	    <h2><i class="fa fa-inr"></i> 33.0 Lacs <small><i class="fa fa-inr"></i> 1750/Sqft</small></h2>
 -->
  						<h2><i class="fa fa-inr"></i><?php echo notowords($starting_price[0]->lowest_price);?></h2>
                             <?php     }elseif ($pro_type_id=3) {?>
           						<h2><i class="fa fa-inr"></i><?php echo notowords($starting_price[0]->lowest_price);?></h2>

                           <?php   } ?>
						    </div>
						</li>
					</ul>


				</div>
			</div>
		</div>

		
<!--ListingFirst Section ends here-->
<input type='hidden' id='current_page'/>
<input type='hidden' id='show_per_page' />
<?php 
 if($location_id=="0"){
 $location_name="";
 }else{
 $location_name=getLocationname_byid($location_id);
 }
?>


<?php if($search=="empty"){
$no_of_records="0";
 }else{
	$no_of_records=count($search);
}

?>
<!--Second Section Starts here-->
	<div class="MainSecondSection">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="MainListingleftSection">
						<h4><?php echo $no_of_records?> RESULTS FOUND <?php if($location_id=="0"){echo "";}else{echo "NEAR " .$location_name;}?></h4>
						<div class="smallMap">
<!-- 						<input type="button" onclick="GetLocation()" value="Show map"/>
 --> 
                        <a onclick="GetLocation()">Show map</a> 


<!--                          <a href="javascript:void(0);"><i class="fa fa-map-o"></i>Show Map</a>
 -->							
							<button id="txtAddress" value="<?php echo $location_name;?>"></button>
						</div>
						
						<div class="clear"></div>
						
					</div>
					<div id="map_canvas"></div>
					<div class="googlemaps">
<!-- 					<div style="width:100%; height:350px;" id="map_canvas"></div>
 -->					
<!-- 					  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.66007678024!2d77.35073455584109!3d12.954517010195083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka+560001!5e0!3m2!1sen!2sin!4v1453550974658" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
 -->					</div>

<div id="content">

<?php 
$items = array();
if($search=="empty"){?>
sorry no records
<!-- <div style="text-align:center;padding-top:20px; background-color:#F0F8FF;"><b>Sorry<b></div>
 -->
 <?php }else{ ?>


<?php 

$i=1;
//print_r($search);
foreach ($search as $search_data) {
$dev_id=$search_data->developer_id;
	//print_r($dev_id);
if($search_data->pro_type_id=="1"){
$pro_type_id=$search_data->pro_type_id;
$price_per_sqfeet='';
$pro_name=$search_data->pro_name;
$pro_id=$search_data->pro_id;
$pro_type_name=$search_data->pro_type_name;//proerty_type_name
$property_address=$search_data->address_pro;//property_address
$developer_name=$search_data->dev_name;
//$price_in_words=$search_data->words;
$price_in_words=notowords($search_data->min_price);
$total_area=$search_data->total_area;
$near=$search_data->near;

//$price_in_words="";
//$max_price_in_words=getMaxpriceinwords($search_data->max_price);
$max_price_in_words=notowords($search_data->max_price);
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
//$price_in_words=no_to_words($search_data->total_price);
$price_in_words=notowords($search_data->total_price);
$total_area=$search_data->total_area;
$near=$search_data->near;
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
//$price_in_words=$search_data->words;
$price_in_words=notowords($search_data->total_price);
$max_price_in_words="";
$total_acres=$search_data->total_acres;
$near=$search_data->near;


}

$data['allimages_byproid']=$this->model_search_property->getAll_images_by_property_id($pro_id);
$data['firstimages_byproid']=$this->model_search_property->getfirst_images_by_property_id($pro_id);


?>




	<div class="PropertyListingPage ListingBox"><!--Property Listing starts here 1-->
		<!--sanjay modal-->
		<!-->
       
        <!-->

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
        	<div id="success_<?php echo $i;?>" class="success"></div>
               <form id="uploadimage_<?php echo $i;?>" action="" method="post" enctype="multipart/form-data">
               	<input type="hidden" class="form-control" name="count" value="<?php echo $i;?>">
               	<input type="hidden" class="form-control" name="group_id_<?php echo $i;?>" value="<?php echo $pro_id;?>">
                <input type="hidden" class="form-control" name="fb_id" id="fb_id" value="<?php if($fb_id!=""){echo $fb_id;}else{echo "";}?>" placeholder="Enter First Name">

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
$("#uploadimage_"+<?php echo $i;?>).on('submit',(function(e) {
e.preventDefault();
//alert(<?php echo $i?>);
var formData = new FormData( $("#uploadimage_"+<?php echo $i;?>)[0]);
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
						<div id="carousel-example-generic_<?php echo $i;?>" class="carousel slide Imgfixed ListingImages" data-ride="carousel">
							
										
                        <div class="carousel-inner" role="listbox">
                                              
											     <?php foreach ($data['firstimages_byproid'] as $getfirstimages) {?>
                        	                   
											    <div class="item active">
											    	<img src="<?php echo base_url($getfirstimages['property_images']);?>" alt="...">
<!-- 											      	<img src="<?php echo base_url();?>bookmyplot_design/images/aq.jpg" alt="...">
 -->											    <div class="carousel-caption">
											        
												</div>
										        </div>
										      <?php } 
										  ?>
										<?php foreach ($data['allimages_byproid'] as $value_images){
                                         $images=$value_images['property_images'];
                                         	?>
												<div class="item">
<!-- 												    <img src="<?php echo base_url();?>bookmyplot_design/images/pro_3.jpg" alt="...">
 -->												    <img src="<?php echo base_url($value_images['property_images']);?>" alt="...">
												    <div class="carousel-caption">
												        
												    </div>
												</div>

												 <a class="left" href="#carousel-example-generic_<?php echo $i;?>" role="button" data-slide="prev">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="right" href="#carousel-example-generic_<?php echo $i;?>" role="button" data-slide="next">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
											    <span class="sr-only">Next</span>
											  </a>
											   <?php }?>
					  </div>
					  <!-- Controls -->
											  <!-- <a class="left" href="#carousel-example-generic_<?php echo $i;?>" role="button" data-slide="prev">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="right" href="#carousel-example-generic_<?php echo $i;?>" role="button" data-slide="next">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
											    <span class="sr-only">Next</span>
											  </a> -->


											  
					   </div>	

				</div>
				<div class="col-md-2 text-center" style="padding:0;">
								<div class="DeveloperContent">
									<h5>DEVELOPER</h5>
									<div class="builderLogo">
				<a href="<?php echo site_url('member/specific_builder/'.$dev_id);?>"><img src="<?php echo base_url();?>uploads/developer/pimage/<?php echo $dev_id.'/'.$search_data->photograph;?>" width="80%"></a>
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
                                       <div class="col-md-6 fixedlistingtexts" style="padding:0;">
                                        <div class="InnerListingWoods">
									     <div class="row">
                                        <div class="col-sm-8">
					
											<a href="<?php echo site_url('member/specific_project/'.$pro_id);?>"><h3><?php echo $pro_name;?></h3></a>
											<div class="propertyrupees">
											<?php if($pro_type_id=="1"){?>
                                   <h4><i class="fa fa-inr"></i><?php echo $price_in_words.' / '.$total_area.' sqft';?></h4>

											<?php }elseif($pro_type_id=="2"){?>
                                  <h5><i class="fa fa-inr"></i><?php echo $price_in_words.' / ';?><i class="fa fa-inr"></i><?php echo $price_per_sqfeetby_figure.' sqft/'.$total_area.' sqft';?></h5>


                                           <?php }elseif($pro_type_id=="3"){?>
                                   <h4><?php echo $total_acres.' acres/ ';?><i class="fa fa-inr"></i><?php echo $price_per_acresby_figure.' per acres';?></h4>

                                              <?php }?>
<!-- 												<h4><i class="fa fa-inr"></i> <?php if($pro_type_id=="3"){echo $total_acres." ";}elseif($pro_type_id=="2"||$pro_type_id=="1"){echo $price_in_words.'&nbsp';} //echo $price_in_words ;?> <?php if($pro_type_id=="3"){?><i class="fa fa-inr"></i><?php echo " ".$price_per_acresby_figure.' per acres';}elseif($pro_type_id=="2"){?><i class="fa fa-inr"></i><?php echo $price_per_sqfeet.' per sqft' ;}elseif($pro_type_id=="1"){echo "per sqft";}?></h4>
 -->											</div>
											<div class="Starrating  text-left">
		    <?php 
			$data['rating']=$this->model_search_property->getallRating($pro_id);
			if(empty($data['rating'])){
				$j=0;
			}else{
		    $j=round($data['rating']['0']['avg_rate']);
		  
               }?>
	                  <fieldset id='demo1' class="rating">
                        <input class="stars" type="radio" id="star5" name="rating1_<?php echo $pro_id;?>" value="5"/>
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4half" name="rating1_<?php echo $pro_id;?>" value="4.5" <?php if($j==4.5){?>checked<?php }?> />
                        <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating1" value="4" <?php if($j==4){?>checked<?php }?> />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3half" name="rating1_<?php echo $pro_id;?>" value="3.5" <?php if($j==3.5){?>checked<?php }?>/>
                        <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating1_<?php echo $pro_id;?>" value="3" <?php if($j==3){?>checked<?php }?> />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2half" name="rating1_<?php echo $pro_id;?>" value="2.5" <?php if($j==2.5){?>checked<?php }?>/>
                        <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating1_<?php echo $pro_id;?>" value="2" <?php if($j==2){?>checked<?php }?>/>
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1half" name="rating1_<?php echo $pro_id;?>" value="1.5" <?php if($j==1.5){?>checked<?php }?>/>
                        <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating1_<?php echo $pro_id;?>" value="1" <?php if($j==1){?>checked<?php }?>/>
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input class="stars" type="radio" id="starhalf" name="rating1_<?php echo $pro_id;?>" value="0.5" <?php if($j==0.5){?>checked<?php }?>/>
                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                        
                     
                                        	
                                    
		
					
					
												<!-- <i class="fa fa-star rate1"></i>
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rating"></i>  -->
												<div class="Reviews">
													<?php $data['review']=$this->model_search_property->getallReviewby_proid($pro_id);?>
													<a href="javascript:void(0)"><?php echo $data['review'];?> Reviews</a>
												</div>
											</div>
											<div class="clear"></div>

											<i class="fa fa-map-marker"></i> Near <?php echo $near;?>
										</div>

										<div class="col-sm-4" style="padding:0;">
<!-- 				<button class="btn btn-joinGroup"><i class="fa fa-users"></i>Join Group</button>
 -->
 <?php //print_r("checking".$userid);?>
 <?php if($userid!="" || $fb_id!=""){

if($userid!=""){
 $data['checkmember_exists']=$this->model_search_property->getMember_existsornot($pro_id,$userid);

}else{
 $data['checkmember_exists']=$this->model_search_property->getMember_existsornot_for_fb($pro_id,$fb_id);

//exit();
}

 if($data['checkmember_exists']!="empty"){?>
 <button class="btn btn-joinGroup" id="group_discussion_<?php echo $i;?>" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>">Group Discussion</button>

<?php  }else{?>
 	    <button class="btn btn-joinGroup" data-toggle="modal" data-target="#joingroup_<?php echo $pro_id;?>" data-id=""><i class="fa fa-users"></i>Join Group</button>

 <?php }

 }else{?>
<!--  	  <button class="btn btn-joinGroup" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>" id="check_login_or_not_<?php echo $i;?>" data-toggle="modal" data-id=""><i class="fa fa-users"></i>Joi Group</button>
 --> 	  <div style="width:120px;padding-top:10px;"><button class="btn btn-joinGroup" data-toggle="modal" data-target="#myModal" ><i class="fa fa-users"></i>Join Group</button></div>


<?php }
 	?>

										</div>
							


<!-- 										<div class="ForBest text-right">For Best Deals  <i class="fa fa-que fa-question-circle"></i></div>
 -->
<!--THE BIG BALOON-->
<div data-balloon-length="large" data-balloon="What about something really big? This may surpass your window dimensions. Imagine you're on that boring class with that boring teacher and you didn't slept so well last night. Suddenly you're sleeping in class. Can you believe it?!" 
data-balloon-pos="up" class="ForBest text-right">For Best Deals 
<button ><i class="fa fa-que fa-question-circle"></i></button>
</div>
<!--THE END OF BIG BALOON-->

<div class="col-sm-4" style="padding:0;">
                                    <!--here 3 input box -->
 <input type="hidden" style="width:100px" id="check_memberornot" value="<?php if($check_memberornot!=="empty"){echo "member_yes";}else{echo "member_no";}?>">
 <input type="hidden" style="width:100px" id="pro_id_<?php echo $i;?>" value="<?php echo $pro_id; ?>">
 <input type="hidden" style="width:100px" id="userid" value="<?php echo $userid;?>">
<!-- <button class="btn btn-joinGroup" id="group_discussion_<?php echo $i;?>" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>">Group Discussion</button>
 -->										</div>
									</div>
								</div>
									<script type="text/javascript">
  	       $(document).ready(function(){
			$('#group_discussion_'+<?php echo $i;?>).click(function(){
  			//var check_memberornot=$("#check_memberornot").val();
  			//var userid=$("#userid").val();

  			//var loginornot=$(this).val();
  			var pro_id=$("#pro_id_"+<?php echo $i;?>).val();
  			//if(loginornot=="not_logged_in"){
  			//alert("please Sign up first");
  			//}else{
  			// $.post('<?php echo site_url("property/check_memberornot/"); ?>',{pro_id:pro_id,userid:userid}, function(data) {
                //console.log(data);
                //if(data=="empty"){
                 //alert("please Join group first");
               // }else{
               window.location.href ="<?php echo site_url('group_discussion/add_comment/'.$pro_id);?>";
               <?php //echo site_url('group_discussion/add_comment/'.$topic_id.'/'.$pro_id);?>
                //}
                 //});
  			//}
  			
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
  	                     <a href="<?php echo site_url('member/specific_project/'.$pro_id);?>"><button class="btn btn-ViewDetails">View Details</button></a>
							</div>



				</div>
							



							

					
  </div><!--Property Listing ends here 1-->
			
		<?php 
		    $i++; 
$items[] = $pro_name;
		     } //foreach

		 }//if search not empty
		
	?>
		     

<!--2nd search starts here-->
<?php //if($search_for_all=="empty"){
?>
<?php  // }else{ ?>

<!-- <b>Rest of All Records<b> -->

<?php 
$j=1;
//echo $pro_name;

foreach ($search_for_all as $search_data) {
$dev_id=$search_data->developer_id;
	//print_r($dev_id);
if($search_data->pro_type_id=="1"){
$pro_type_id=$search_data->pro_type_id;
$price_per_sqfeet='';
$pro_name=$search_data->pro_name;

$pro_id=$search_data->pro_id;
$pro_type_name=$search_data->pro_type_name;//proerty_type_name
$property_address=$search_data->address_pro;//property_address
$developer_name=$search_data->dev_name;
//$price_in_words=$search_data->words;
$price_in_words=notowords($search_data->min_price);
$total_area=$search_data->total_area;
$near=$search_data->near;

//$price_in_words="";
//$max_price_in_words=getMaxpriceinwords($search_data->max_price);
$max_price_in_words=notowords($search_data->max_price);

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
//$price_in_words=$search_data->words;
$price_in_words=notowords($search_data->total_price);
$total_area=$search_data->total_area;
$near=$search_data->near;
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
//$price_in_words=$search_data->words;
$price_in_words=notowords($search_data->total_price);
$max_price_in_words="";
$total_acres=$search_data->total_acres;
$near=$search_data->near;
}
$data['allimages_byproid']=$this->model_search_property->getAll_images_by_property_id($pro_id);
$data['firstimages_byproid']=$this->model_search_property->getfirst_images_by_property_id($pro_id);
// if(empty($items)){
// 		// print_r("Yes empty");
// 	}else{
//         print_r("no empty");
// 	}

if(in_array($pro_name,$items)){

}else{
	?>

	<div class="PropertyListingPage ListingBox"><!--Property Listing starts here 2-->
		<!--sanjay modal-->

         <!--->

<!--pradeep model---->

<div class="modal fade bs-example-modal-lg" id="joingroup2_<?php echo $pro_id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
        	<div id="success2_<?php echo $j;?>" class="success"></div>
               <form id="uploadimage2_<?php echo $j;?>" action="" method="post" enctype="multipart/form-data">
               	 <input type="hidden" class="form-control" name="count" value="<?php echo $j;?>">
               	 <input type="hidden" class="form-control" name="group_id_<?php echo $j;?>" value="<?php echo $pro_id;?>">
               	 <input type="hidden" class="form-control" name="fb_id" id="fb_id" value="<?php if($fb_id!=""){echo $fb_id;}else{echo "";}?>" placeholder="Enter First Name">


            <div class="row">
                  <div class="col-sm-6 form-group">
                      <label for="exampleInputEmail1">First Name</label>
              <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
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
<!--                   <img src="<?php echo base_url();?>bookmyplot_design/images/popupimg.png" width="50%" class="Imgpopup">
 -->                </div>
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
   $("#success2_<?php echo $j;?>").append("Registration is successfull.. Thank you");
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
						<div id="carousel-example-generic2_<?php echo $j;?>" class="carousel slide Imgfixed ListingImages" data-ride="carousel">
							
										
                        <div class="carousel-inner" role="listbox">
                        	                 <?php foreach ($data['firstimages_byproid'] as $getfirstimages) {?>
                        	                   
											    <div class="item active">
											    	<img src="<?php echo base_url($getfirstimages['property_images']);?>" alt="...">

<!-- 											      	<img src="<?php echo base_url();?>bookmyplot_design/images/aq.jpg" alt="...">
 -->											    <div class="carousel-caption">
											        
												</div>
										        </div>
										      <?php } ?>
										 <?php foreach ($data['allimages_byproid'] as $value_images) {
                                         $images=$value_images['property_images'];
                                         	?>
												<div class="item">
<!-- 												    <img src="<?php echo base_url();?>bookmyplot_design/images/pro_3.jpg" alt="...">
 -->												    <img src="<?php echo base_url($value_images['property_images']);?>" alt="...">
												    <div class="carousel-caption">
												        
												    </div>
												</div>

												<a class="left" href="#carousel-example-generic_<?php echo $j;?>" role="button" data-slide="prev">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="right" href="#carousel-example-generic_<?php echo $j;?>" role="button" data-slide="next">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
											    <span class="sr-only">Next</span>
											  </a>

											   <?php }?>
					  </div>
					  <!-- Controls -->
											  <!-- <a class="left" href="#carousel-example-generic2_<?php echo $j;?>" role="button" data-slide="prev">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="right" href="#carousel-example-generic2_<?php echo $j;?>" role="button" data-slide="next">
											    <span class="" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
											    <span class="sr-only">Next</span>
											  </a> -->
											  
					   </div>	

				</div>
				<div class="col-md-2 text-center" style="padding:0;">
								<div class="DeveloperContent">
									<h5>DEVELOPER</h5>
									<div class="builderLogo">
<a href="<?php echo site_url('member/specific_builder/'.$dev_id);?>"><img src="<?php echo base_url();?>uploads/developer/pimage/<?php echo $dev_id.'/'.$search_data->photograph;?>" width="80%"></a>

<!-- 					<img src="<?php echo base_url();?>uploads/developer/<?php echo $search_data->photograph;?>" width="80%">
 -->									</div>
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
                        include_once(APPPATH.'libraries/modals.php'); ?>	                                    
                                         <div class="col-md-6 fixedlistingtexts" style="padding:0;">
                                        <div class="InnerListingWoods">
									     <div class="row">
                                        <div class="col-sm-8">
					
											<a href="<?php echo site_url('member/specific_project/'.$pro_id);?>"><h3><?php echo $pro_name;?></h3></a>
											<div class="propertyrupees">
											<?php if($pro_type_id=="1"){?>
                                   <h4><i class="fa fa-inr"></i><?php echo $price_in_words.' / '.$total_area.' sqft';?></h4>

											<?php }elseif($pro_type_id=="2"){?>
                                  <h5><i class="fa fa-inr"></i><?php echo $price_in_words.' / ';?><i class="fa fa-inr"></i><?php echo $price_per_sqfeetby_figure.' sqft/'.$total_area.' sqft';?></h5>


                                           <?php }elseif($pro_type_id=="3"){?>
                                   <h4><?php echo $total_acres.' acres/ ';?><i class="fa fa-inr"></i><?php echo $price_per_acresby_figure.' per acres';?></h4>

                                              <?php }?>


<!-- 												<h4><i class="fa fa-inr"></i> <?php if($pro_type_id=="3"){echo $total_acres." ";}elseif($pro_type_id=="2"||$pro_type_id=="1"){echo $price_in_words." ";} //echo $price_in_words ;?> <?php if($pro_type_id=="3"){?><i class="fa fa-inr"></i><?php echo " ".$price_per_acresby_figure.' per acres';}elseif($pro_type_id=="2"){?><i class="fa fa-inr"></i><?php echo $price_per_sqfeet.' per sqft' ;}elseif($pro_type_id=="1"){echo "per sqft";}?></h4>
 -->											</div>
											<div class="Starrating  text-left">
											 <?php 
			$data['rating']=$this->model_search_property->getallRating($pro_id);
			if(empty($data['rating'])){
				$k=0;
			}else{
		    $k=round($data['rating']['0']['avg_rate']);
		    }
		    ?>
					
					<fieldset id='demo2' class="rating">
                        <input class="stars" type="radio" id="star5" name="rating_<?php echo $pro_id;?>" value="5"/>
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4half" name="rating_<?php echo $pro_id;?>" value="4.5" <?php if($k==4.5){?>checked<?php }?> />
                        <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating" value="4" <?php if($k==4){?>checked<?php }?> />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3half" name="rating_<?php echo $pro_id;?>" value="3.5" <?php if($k==3.5){?>checked<?php }?>/>
                        <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating_<?php echo $pro_id;?>" value="3" <?php if($k==3){?>checked<?php }?> />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2half" name="rating_<?php echo $pro_id;?>" value="2.5" <?php if($k==2.5){?>checked<?php }?>/>
                        <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating_<?php echo $pro_id;?>" value="2" <?php if($k==2){?>checked<?php }?>/>
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1half" name="rating_<?php echo $pro_id;?>" value="1.5" <?php if($k==1.5){?>checked<?php }?>/>
                        <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating_<?php echo $pro_id;?>" value="1" <?php if($k==1){?>checked<?php }?>/>
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input class="stars" type="radio" id="starhalf" name="rating_<?php echo $pro_id;?>" value="0.5" <?php if($k==0.5){?>checked<?php }?>/>
                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
												<!-- <i class="fa fa-star rate1"></i>
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rate1"></i> 
												<i class="fa fa-star rating"></i>  -->
												<div class="Reviews">
			<?php $data['review']=$this->model_search_property->getallReviewby_proid($pro_id);?>
													<a href="javascript:void(0)"><?php echo $data['review'];?> Reviews</a>
												</div>
						</div>
											<div class="clear"></div>
										<i class="fa fa-map-marker"></i> Near <?php echo $near;?>
										</div>
										<div class="col-sm-4" style="padding:0;">
<!-- 				<button class="btn btn-joinGroup"><i class="fa fa-users"></i> Join Group</button>
 -->
 <?php //echo $userid;?>
 <?php // if($userid!=""){
 //$data['checkmember_exists']=$this->model_search_property->getMember_existsornot($pro_id,$userid);
 //if($data['checkmember_exists']!="empty"){?>
<!-- <button class="btn btn-joinGroup" id="group_discussio_<?php echo $j;?>" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>">Group Discussio</button>
 -->

<?php // }else{ ?>
<!-- <button class="btn btn-joinGroup" data-toggle="modal" data-target="#joingroup2_<?php echo $pro_id;?>" data-id=""><i class="fa fa-users"></i>Join Group</button>
 -->
 <?php // }

// }else{ ?>
<!--   <button class="btn btn-joinGroup" data-toggle="modal" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>" id="check_login_or_not2_<?php echo $j;?>" data-id=""><i class="fa fa-users"></i>Join Group</button>
 -->
<?php //}
 	?>






 	 <?php //print_r($fb_id);?>
 <?php if($userid!="" || $fb_id!=""){

if($userid!=""){
 $data['checkmember_exists']=$this->model_search_property->getMember_existsornot($pro_id,$userid);

}else{
 $data['checkmember_exists']=$this->model_search_property->getMember_existsornot_for_fb($pro_id,$fb_id);

//exit();
}

 if($data['checkmember_exists']!="empty"){?>
<button class="btn btn-joinGroup" id="group_discussio_<?php echo $j;?>" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>">Group Discussio</button>

<?php  }else{?>
<button class="btn btn-joinGroup" data-toggle="modal" data-target="#joingroup2_<?php echo $pro_id;?>" data-id=""><i class="fa fa-users"></i>Join Group</button>

 <?php }

 }else{?>
<!--   <button class="btn btn-joinGroup" data-toggle="modal" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>" id="check_login_or_not2_<?php echo $j;?>" data-id=""><i class="fa fa-users"></i>Join Group</button>
 -->  <div style="width:120px;padding-top:10px;"><button class="btn btn-joinGroup" data-toggle="modal" data-target="#myModal" ><i class="fa fa-users"></i>Join Group</button></div>

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

<!-- <button class="btn btn-joinGroup" id="group_discussio_<?php echo $j;?>" value="<?php if($logged_in=="TRUE"){echo "logged_in";}else{echo "not_logged_in";}?>">Group Discussio</button>
 -->										</div>
									</div>
								</div>
			<script type="text/javascript">
  	       $(document).ready(function(){
			$('#group_discussio_'+<?php echo $j;?>).click(function(){
  			//var check_memberornot=$("#check_memberornot2").val();
  			//var userid=$("#userid").val();
  			//alert(userid);
  			//var loginornot=$(this).val();
  			//alert(loginornot);
  			var pro_id=$("#pro_id2_"+<?php echo $j;?>).val();
  			//alert(pro_id);
  			//if(loginornot=="not_logged_in"){
  			//alert("please Sign up first");
  			//}else{
  			// $.post('<?php echo site_url("property/check_memberornot/"); ?>',{pro_id:pro_id,userid:userid}, function(data) {
               // console.log(data);
                //alert(data);
                //if(data=="empty"){
                // alert("please Join group first");
               // }else{
               //window.location.href ="<?php echo site_url('group_discussion/listed_topic/'.$pro_id);?>";
               window.location.href ="<?php echo site_url('group_discussion/add_comment/'.$pro_id);?>";

               // }
               //   });
  			//}
  			
  		});

			 $('#check_login_or_not2_'+<?php echo $j;?>).click(function(){
       	var loginornot=$(this).val();
       	if(loginornot=="not_logged_in"){
  			alert("please Sign up first");
  			}else{

  			 }
       });

	});
  	                     </script>
<!--   	                     <button class="btn btn-ViewDetails">View Details</button>
 -->  	                     
  	      <a href="<?php echo site_url('member/specific_project/'.$pro_id);?>"><button class="btn btn-ViewDetails">View Details</button></a>

							</div>



				</div>
							

					
  </div><!--Property Listing ends here 2-->
			
		<?php 
		    $j++; 

                  }//else part inarray
		     } //foreach?>
		
		<?php //}//if not empty?>
<!--2nd search ends here--> 

</div>

<!-- <input type="text" name="firstcountervalue" id="firstcountervalue" value="<?php echo $i;?>"?>
<input type="text" name="secondcountervalue" id="secondcountervalue" value="<?php echo $j;?>"?> -->

<!--sanjay mymodal ends here-->
<!--dummy list for reference-->
                    <!--Property Listing starts here dummy list-->
				

					<!---dummy list for reference-->
				<div id='page_navigation'></div>
	</div>
 

				<div class="col-md-3"><!--Right Section Starts here-->
					<div class="RightSectionSecondPart"><!--RightSectionSecondPart starts here-->
						<!-- <div class="RightBgColor">
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

						</div> -->

					</div><!--RightSectionSecondPart ends here-->
					<div class="SmallAdvertise">
						<img src="<?php echo base_url();?>bookmyplot_design/images/qaa.jpg" width="100%"><br/><br>
						<img src="<?php echo base_url();?>bookmyplot_design/images/building-1.jpg" width="100%"><br><br>
						<img src="<?php echo base_url();?>bookmyplot_design/images/building-2.jpg" width="100%">
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

  <script>
// function initialize() {
// var geocoder = new google.maps.Geocoder();
// var address = document.getElementById("txtAddress").value;
// geocoder.geocode({ 'address': address }, function (results, status) {
// if (status == google.maps.GeocoderStatus.OK) {
//                     var latitude = results[0].geometry.location.lat();
//                     var longitude = results[0].geometry.location.lng();
//                     //alert("Latitude: " + latitude + "\nLongitude: " + longitude);


// var map_canvas = document.getElementById('map_canvas');
// var map_options = {
// //center: new google.maps.LatLng(44.5403, -78.5463),
// center: new google.maps.LatLng(latitude,longitude),

// zoom:15,
// mapTypeId: google.maps.MapTypeId.ROADMAP
// }
// var map = new google.maps.Map(map_canvas, map_options)

//     } else {
//                     alert("Request failed.")
//                 }
//             });
//         };
// google.maps.event.addDomListener(window, 'load', initialize);
// </script>

  <script type="text/javascript">
  //pagination starts here
    $(document).ready(function(){
    
    //how much items per page to show
    var show_per_page =3; 
     	var first=parseInt($('#firstcountervalue').val()-1);
     	var second=parseInt($('#secondcountervalue').val()-1);
     	var sum=first+second;
     	//alert(sum);
     	//alert(second);
    //getting the amount of elements inside content div
   var number_of_items=$('#content').children().size();
   //alert(number_of_items);
   // var number_of_items=sum;
    //alert(number_of_items);
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
    if(number_of_pages==1){

    }else{
    navigation_html += '<a class="next_link" href="javascript:next();">Next</a>';
    }
    
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
  		$('#map_canvas').hide();
  		

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

       $('#pro_type').change(function(){
       	var id=$(this).val();
       	var pro=$('#pro_type_id').val();
       	$("#pro_type_id").val(id);
       	//alert(pro);
       	if(id=="1"){
       		$('.use_fr1').html("<option>--Select--</option>");

    //$.post('<?php echo site_url("property/getall_property_use/"); ?>',{pro_type_id:id}, function(data) {
                //console.log(data);
            //$('.use_fr1').val("");
          //});
    }else if(id=="2"){
    $.post('<?php echo site_url("property/getall_property_use/"); ?>',{pro_type_id:id}, function(data) {
                //console.log(data);
              $('.use_fr1').html(data);
          });
    }else if(id=="3"){
    $.post('<?php echo site_url("property/getall_property_use/"); ?>',{pro_type_id:id}, function(data) {
                //console.log(data);
              $('.use_fr1').html(data);
          });
    }
       });


   $('#brl_fr1').change(function(){
   	var id=$(this).val();
   	$("#brl_fr").val(id);

   });

//     $('#use_fr1').change(function(){
//    	var id=$(this).val();
//    	$("#use_fr").val(id);

//    });
//    $('#property_status').change(function(){
//    	var id=$(this).val();
//    	$("#session_pro_status").val(id);

//    });

//    $('.res_location').change(function(){
//    	var id=$(this).val();
//    	$("#session_res_location").val(id);

//    });

//    $('.res_min').change(function(){
//    	var id=$(this).val();
//    	$("#session_res_min").val(id);

//    });


// $('.res_max').change(function(){
//    	var id=$(this).val();
//    	$("#session_res_max").val(id);

//    });
        // $('#pro_type').change(function(){
       	// var id=$(this).val();
       	// var pro=$('#pro_type_id').val();
       	// $("#pro_type_id").val(id);
       	// alert(pro);
  		

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
  <script>
// function getPurpose() {
//     var id=$('#pro_type_id').val();
//     //alert(id);
//     $.post('<?php echo site_url("property/getall_property_use/"); ?>',{pro_type_id:id}, function(data) {
//                 //console.log(data);
//               $('.use_fr1').html(data);
//       });
// }
</script>
  <script type="text/javascript">
	$(function(){
		$('form.material').materialForm(); // Apply material
		$('form').validate({ 
			errorPlacement: function(error, element) {}
		}); // Apply validator with no error messages but classes only
	});


// $('#signupForm').on('submit',function(e){

// 	e.preventDefault();
// 	var type = $("#type").val();
// 	alert(type);
// 	var formData = new FormData($("#signupForm")[0]);
// 	formData.append('type', type);
// 		//.append('type', type );
// 	//var formData = new FormData( $("#uploadimage_"+<?php echo $i;?>)[0]);

// 	//$("#signupForm").submit();
// 	// console.log(fd);
// 	// alert("hello");

// 	$.ajax({
// //url: "ajax_php_file.php", 
// url:"<?php echo base_url(); ?>" + "index.php/property/property_listing",// Url to which the request is send
// type: "POST",             // Type of request to be send, called as method
// data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
// contentType: false,       // The content type used when sending data to the server.
// cache: false,             // To unable request pages to be cached
// processData:false,        // To send DOMDocument or non processed data file it is set to false
// success: function(data)   // A function to be called if request succeeds
// {
// 	alert(data);

// }
// });

// });

// function enableTxt(elem) {

   	 
//    var id = $(elem).attr("id");
//    pro_type_id.value=id;
//     if(id=="1"){
//     	//alert("ok");
//       //$('#uper').css({"background-color":'red'});
//       //$('#use').hide('slow');
//       //$('#brl').hide('slow');
//       $('#myid').hide('slow');
      
//     }else if(id=="2"){
//     $.post('<?php echo site_url("property/getall_property_use/"); ?>',{pro_type_id:id}, function(data) {
//                 console.log(data);
//               $('.use_fr').html(data);
//           });
//       //$('#use').show('');
//       $('#myid').show('');
//      // $('#brl').show('');
//       //$('#uper').css({"width":'0'});
//     }else if(id=="3"){
//       $.post('<?php echo site_url("property/getall_property_use/"); ?>',{pro_type_id:id}, function(data) {
//                 console.log(data);
//               $('.use_fr').html(data);
//           });
//       $('#use').show('');
//       $('#brl').show('');
//       $('#myid').show('');
//     }

    
// }


	
</script>

</body>
</html>











