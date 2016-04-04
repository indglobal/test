<script src='<?php echo base_url()?>includes/vendors/ckeditor/ckeditor.js'></script>
<script src='<?php echo base_url()?>includes/vendors/ckeditor/adapters/jquery.js'></script>
<link rel="stylesheet" href="<?php echo base_url();?>ui/jquery-ui-themes-1.11.4/themes/smoothness/jquery-ui.css">
<script src="<?php echo base_url();?>ui/jquery-ui-1.11.4/jquery-ui.js"></script>
<script type="text/javascript">

  $(function() {
        // CKEditor Standard
        $('textarea.ckeditor_standard').ckeditor({
            height: '150px',
            width:'500px',
            toolbar: [
                {name: 'document', items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates']}, // Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
                ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'], // Defines toolbar group without name.
                {name: 'basicstyles', items: ['Bold', 'Italic']}
            ]
        });
    });
$(document).ready(function() {
	
$('#pro_type_id').on('change', function() {
             var me = $(this);
              $.post('<?php echo site_url("property/getall_property_use/"); ?>',{pro_type_id: me.val()}, function(data) {
                console.log(data);
              $('#use').html(data);
          });
              $('#residential').hide('slow');
              $('#commercial').hide('slow');
              $('#agriculture').hide('slow');
             if(me.val()=="1"){
              $('#residential').show('slow');
              $('#commercial').hide('slow');
              $('#agriculture').hide('slow');
             }else if(me.val()=="2"){
              $('#residential').hide('slow');
              $('#commercial').show('slow');
              $('#agriculture').hide('slow');
             }else if(me.val()=="3"){
             $('#residential').hide('slow');
              $('#commercial').hide('slow');
              $('#agriculture').show('slow');
             }
        });

// $('#price_per_square').on('change', function() {
//     var me=$(this);
//     var total_area=parseFloat($('#total_area').val());
//     var price_per_square=parseFloat(me.val());
//     var total=total_area*price_per_square;
//     //alert(total);
//     $('#total_price').val(total);
//      // var last_pay = parseFloat($('#last_pay').val()) || 0;
//      //    var grade_pay = parseFloat($('#grade_pay').val()) || 0;
//      //    var sum = last_pay+grade_pay;
//      //    $('#revised_total').val(sum);

// });

$('#price_per_square').keyup(function() {
      revised_total();
    });

var revised_total = function() {
        var price_per_square = parseFloat($('#price_per_square').val()) || 0;
        var total_area = parseFloat($('#total_area').val()) || 0;
        var multi = price_per_square*total_area;
        $('#total_price').val(multi);
    }
//$(document).ready(function() {
//     function f1(){
//  alert("hii");


// }
//});




   $('#state_pro').on('change', function() {
            var me = $(this);
            //var a=$('#state').val();
            //alert(me.val()); 
            $.post('<?php echo site_url("developer/getCity/"); ?>',{state: me.val()}, function(data) {
                console.log(data);
             //$('#city').html(data);
             $('#city_pro').html(data);

            });
        });

   $('#state_academic').on('change', function() {
            var me = $(this);
            //var a=$('#state').val();
            //alert(me.val()); 
            $.post('<?php echo site_url("welcome/getCity/"); ?>', {state: me.val()}, function(data) {
                console.log(data);
             //$('#city').html(data);
             $('#city_academic').html(data);

            });
        });


   function handleFileSelect(evt) {
        var files = evt.target.files; // FileList object

        var f = files[0];
        var reader = new FileReader();
        reader.onload = (function(theFile) {
            return function(e) {
                // Render thumbnail.
                var span = document.createElement('span');
                span.innerHTML = ['<img class="thumb" src="', e.target.result,
                                '" title="', escape(theFile.name), '"/>'].join('');
                $('#list').html(span);
            };
        })(f);
        reader.readAsDataURL(f);
    }

   $('#photograph').on('change',function(e){
       handleFileSelect(e);

//alert(e);

   })

// $('#photograph').live('change', function(e){
//         alert(e);
//      //handleFileSelect(e);
//     });



$('body').on('focus',"#dob", function(){
        $(this).datepicker({dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true, yearRange: '1900:+0'});
    });





});
//document close

  // $(function() {
  //   $( "#dob" ).datepicker();
  // });


</script>

<?php $pro_detail=$property_details[0];
 $pro_id=$pro_detail['pro_id'];
 $developer_id=$pro_detail['developer_id'];
 $developer_name=getDevelopername($developer_id);
 $pro_name=$pro_detail['pro_name'];
 $pro_type_id=$pro_detail['pro_type_id'];
 $pro_type_name=getProperty_name_bypro_typeid($pro_type_id);
 $location_pro=$pro_detail['location_pro'];
 $location_name=getLocationname_byid($location_pro);
 $state_pro=$pro_detail['state_pro'];
 $city_pro=$pro_detail['city_pro'];
 $use_id=$pro_detail['use_id'];
 $use_name=getUsename_byid($use_id);
 $city_name=getcityNameByID($city_pro);
 $address_pro=$pro_detail['address_pro'];
 $pro_overview=$pro_detail['pro_overview'];

 $near=$pro_detail['near'];
 $group_purchase=$pro_detail['group_purchase'];
 $available_plots=$pro_detail['available_plots'];
 $booked_plots=$pro_detail['booked_plots'];
 $plots_range=$pro_detail['plots_range'];
 $pro_status=$pro_detail['pro_status'];

 //residential
 if($pro_type_id==1){
 $total_area="";
 $total_price="";
 $price_per_square="";
 $total_acres="";
 $price_per_acres="";

 //$available_plots=$pro_detail['available_plots'];
 //$booked_plots=$pro_detail['booked_plots'];
 $min_price=$pro_detail['min_price'];
 $min_price_value=getMinprice_words_Byfigure($min_price);
 $max_price=$pro_detail['max_price'];
 $max_price_value=getMinprice_words_Byfigure($max_price);
 $total_area=$pro_detail['total_area'];

 





 //commercial
 }elseif($pro_type_id==2){
 //$available_plots="";
 //$booked_plots="";
 $min_price="";
 $min_price_value="";
 $max_price="";
 $max_price_value="";
 $total_acres="";
 $price_per_acres="";

 $total_area=$pro_detail['total_area'];
 $total_price=$pro_detail['total_price'];
 $price_per_square=$pro_detail['price_per_square'];

}elseif($pro_type_id==3){
 //$available_plots="";
 //$booked_plots="";
 $min_price="";
 $min_price_value="";
 $max_price="";
 $max_price_value="";
 $total_area="";
 $total_price="";
 $price_per_square="";

//agriculture
 $total_acres=$pro_detail['total_acres'];

 $price_per_acres=$pro_detail['price_per_acres'];
 //print_r($price_per_acres);

}
?>
 
    <form id="signupForm" method="post"  action="<?php echo site_url('property/property_edit/'); ?>" enctype="multipart/form-data">
    <div class="col-md-12" id="firstStep" class="firstStep">
    
    <input type="hidden" name="pro_id" value="<?php echo $pro_id;?>">
    <legend style="font-size:15px; color:#3b5999; font-weight:700">Developer » <small style="font-size:11px">Before addition of property user should select developer.</small></legend>
        <div class="col-xs-6 form-group">
            <label id="label">Developer:*</label>
             

            <select title="Choose State" class="form-control parsley-validated parsley-success" name="developer_id" id="developer_id" style="width:200px;">
                    <?php foreach ($developer as $develop) { ?>
                         <?php if($develop['dev_id'] == $developer_id) { ?>
                        <option value="<?php echo $develop['dev_id']; ?>" selected><?php echo $developer_name; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $develop['dev_id']; ?>"><?php echo $develop['dev_name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                    </select> 
            <?php echo form_error('developer_id', '<div class="error" style="color:red;">', '</div>');?>
        </div>        
        

<input type="text" name="userid" value="<?php //echo $user_id;?>" hidden>

    <legend style="font-size:15px; color:#3b5999; font-weight:700">Property Details » <small style="font-size:11px"> Use the below panel to enter relevant details.</small></legend>
        <div class="col-xs-6 form-group">
            <label id="label">Property Type:*</label>
             
            <select title="Choose Property type" class="form-control parsley-validated parsley-success" name="pro_type_id" id="pro_type_id" style="width:200px;">
                    <?php foreach ($property_type as $pro_type) { ?>
                         <?php if($pro_type['pro_type_id'] == $pro_type_id) { ?>
                        <option value="<?php echo $pro_type['pro_type_id']; ?>" selected><?php echo $pro_type_name; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $pro_type['pro_type_id']; ?>"><?php echo $pro_type['pro_type_name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                    </select> 
            <?php echo form_error('pro_type_id', '<div class="error" style="color:red;">', '</div>');?>
        </div>

        <div class="col-xs-6 form-group">
                 <label id="label">Project Name: *</label>
                <input type="text" name="pro_name" id="pro_name" style="width:200px;"class="form-control" value="<?php echo $pro_name;?>"/>
                  <?php echo form_error('pro_name', '<div class="error" style="color:red;">', '</div>');?>
                </div>

        <div class="col-xs-6 form-group">
            <label id="label">Location: *</label>
            <select title="Choose Property type" class="form-control parsley-validated parsley-success" name="location" id="location" style="width:200px;">
                    <?php foreach ($location as $loc) { ?>
                         <?php if($loc['loc_id'] == $location_pro) { ?>
                        <option value="<?php echo $loc['loc_id']; ?>" selected><?php echo $location_name; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $loc['loc_id']; ?>"><?php echo $loc['loc_name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                    </select>


            <?php echo form_error('location', '<div class="error" style="color:red;">', '</div>');?>
        </div>
     
        
        

        <div class="col-xs-6 form-group">
            <label id="label">State: *</label>
                     <select title="Choose State" class="form-control parsley-validated parsley-success" name="state_pro" id="state_pro" style="width:200px;">
                    <?php foreach ($state as $st) { ?>
                         <?php if($st['state_id'] == $state_pro) { ?>
                        <option value="<?php echo $st['state_id']; ?>" selected><?php echo $st['state_name']; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $st['state_id']; ?>"><?php echo $st['state_name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                    </select> 
                    <?php echo form_error('state_pro', '<div class="error" style="color:red;">', '</div>');?>
                    
        </div>
                
        
         <div class="col-xs-6 form-group">

            <label id="label">City:*</label>
            <select name="city_pro" id="city_pro" class="form-control" style="width:200px;">
             <option value="<?php echo $city_pro;?>" selected><?php echo $city_name;?></option>
            </select>
            <?php echo form_error('city_pro', '<div class="error" style="color:red;">', '</div>');?> 
        </div>

        <div class="col-xs-6 form-group">
             <label id="label">Use:*</label> 
            <select name="use" id="use" class="form-control" style="width:200px;">
             <option value="<?php echo $use_id;?>" selected><?php echo $use_name;?></option>
            </select>


            <?php echo form_error('use','<div class="error" style="color:red;">', '</div>');?>
        </div>

         <div class="col-xs-6 form-group">
            <label id="label">Address: *</label>
            <textarea class="form-control" rows="3" cols="8"  name="address_pro" id="address_pro"><?php  echo set_value('address_pro');?><?php echo $address_pro;?></textarea><?php echo form_error('address_pro', '<div class="error" style="color:red;">', '</div>');?> 
        </div>

<?php if($brlnew=="no"){
?>
<div class="col-xs-6 form-group">
             <?php 
             foreach ($brl as $brls) { ?>
            <input type="checkbox" name="brl[]" id="brl" value="<?php echo $brls['brl_id'];?>"><?php echo $brls['brl_name']; ?>
            <?php } ?>
            <?php echo form_error('brl', '<div class="error" style="color:red;">', '</div>');?> 
</div>


<?php
}else{
      //print(count($brlnew));
      $all_brl=array();
      foreach ($brl as $brls) { 
      $all_brl[$brls['brl_id']]=$brls['brl_name'];    //exit();
                              }
      $new=array(); 
      for($i=0;$i<count($brlnew);$i++){ 
      array_push($new, $brlnew[$i]['brl_id']);
                 }             
      foreach ($all_brl as $key => $value){
                 if(in_array($key, $new)){ 
                  ?>
      <input type="checkbox" name="brl[]" id="brl" value="<?php echo $key;?>" checked><?php echo $value;?>
      <?php   }else{
        ?>

      <input type="checkbox" name="brl[]" id="brl" value="<?php echo $key;?>" ><?php echo $value;?>

<?php 
     }
   }
}    ?>

<div class="col-xs-6 form-group">
            <label id="label">Near: *</label>
            <input type="text" class="form-control" style="width:200px" id="near" name="near" placeholder="Enter Near Area:" value="<?php echo $near;?>"></input>
            <?php echo form_error('near', '<div class="error" style="color:red;">', '</div>');?>        
        </div>




<legend style="font-size:15px; color:#3b5999; font-weight:700">Plot Details » <small style="font-size:11px"> Use the below panel to enter relevant details about PLots.</small></legend>
        <div class="col-xs-6 form-group">
            <label id="label">Group Purchase: *</label>
            <input type="text" class="form-control" style="width:200px" id="group_purchase" name="group_purchase" placeholder="Enter " value="<?php echo $group_purchase;?>"></input><?php echo form_error('group_purchase', '<div class="error" style="color:red;">', '</div>');?> 
        </div>
        
         <div class="col-xs-6 form-group">
            <label id="label">Available Plots: *</label>
            <input type="text" class="form-control" style="width:200px" id="available_plots" name="available_plots" value="<?php echo $available_plots;?>" placeholder="Enter Available plots:"></input>
            <?php echo form_error('available_plots', '<div class="error" style="color:red;">', '</div>');?>         
        </div>


        
   
        <div class="col-xs-6 form-group">
            <label id="label">Booked Plots: *</label>
            <input type="text" class="form-control" style="width:200px" id="booked_plots" name="booked_plots" placeholder="Enter Booked plots:" value="<?php echo $booked_plots; ?>"></input>
            <?php echo form_error('booked_plots', '<div class="error" style="color:red;">', '</div>');?>        
        </div>
                
        
    
        <div class="col-xs-6 form-group">
            <label id="label">Range: *</label>
            <input type="text" class="form-control" style="width:200px" id="plots_range" name="plots_range" placeholder="Enter Range" value="<?php echo $plots_range;?>"></input><?php echo form_error('plots_range', '<div class="error" style="color:red;">', '</div>');?> 
        </div>
       
       <div class="col-xs-6 form-group">
            <label id="label">Project Status:*</label>
             <select name="pro_status" id="pro_status" class="form-control" style="width:200px;">>
             <option value="<?php echo $pro_status;?>"><?php if($pro_status=="ready_to_move"){echo "Ready To move";}elseif($pro_status=="ongoing"){echo "ongoing";}?></option>
             <option value="ongoing">Ongoing</option>
             <option value="ready_to_move">Ready to move</option>
            </select> <?php echo form_error('pro_status','<div class="error" style="color:red;">', '</div>');?> 


        </div>


         
<legend style="font-size:15px; color:#3b5999; font-weight:700">Property Overview » <small style="font-size:11px">Give some brief description about property..</small></legend>
        
         <div class="col-xs-6 form-group">
            <label id="label">Overview: *</label>
            <textarea class="ckeditor_standard"   name="pro_overview" placeholder="Please Enter Remarks" class="form-control parsley-validated" id="pro_overview"><?php echo $pro_overview;?>
            <?php  echo set_value('pro_overview');?></textarea><?php echo form_error('pro_overview', '<div class="error" style="color:red;">', '</div>');?> 
        </div>

                
            
             

    
         <legend style="font-size:15px; color:#3b5999; font-weight:700">Price Details » <small style="font-size:11px"> Use the below panel to enter relevant price details of property.</small></legend>
  
         <div id="residential" <?php if($pro_type_id=="1"){ }else{ ?>style="display:none"<?php }?>>
            <!-- <div class="col-xs-6 form-group">
            <label id="label">Available Plots:*</label>
            <input type="text" class="form-control" style="width:200px" id="available_plots" name="available_plots" value="<?php echo $available_plots; ?>" placeholder="Enter Plots available:"></input>
            <?php echo form_error('available_plots', '<div class="error" style="color:red;">', '</div>');?> 
            </div>

           

            <div class="col-xs-6 form-group">
            <label id="label">Booked Plots:*</label>
            <input type="text" class="form-control" style="width:200px" id="booked_plots" name="booked_plots" placeholder="Enter booked plots:" value="<?php echo $booked_plots;?>"></input>
            <?php echo form_error('booked_plots', '<div class="error" style="color:red;">', '</div>');?> 
            </div> -->

         

            <div class="col-xs-6 form-group">
            <label id="label">Min price:*</label>
            

            <select title="Choose State" class="form-control parsley-validated parsley-success" name="min_price" id="min_price" style="width:200px;">
                    <?php foreach ($figure as $fig) { ?>
                         <?php if($fig['figure'] == $min_price) { ?>
                        <option value="<?php echo $fig['figure']; ?>" selected><?php echo $min_price_value; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $fig['figure']; ?>"><?php echo $fig['words']; ?></option>
                    <?php } ?>
                    <?php } ?>
                    </select>
            <?php echo form_error('min_price', '<div class="error" style="color:red;">', '</div>');?>
            </div>

       

            <div class="col-xs-6 form-group">
            <label id="label">Max price:*</label>
                <select title="Choose State" class="form-control parsley-validated parsley-success" name="max_price" id="max_price" style="width:200px;">
                    <?php foreach ($figure as $fig) { ?>
                         <?php if($fig['figure'] == $max_price) { ?>
                        <option value="<?php echo $fig['figure']; ?>" selected><?php echo $max_price_value; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $fig['figure']; ?>"><?php echo $fig['words']; ?></option>
                    <?php } ?>
                    <?php } ?>
                    </select>
            <?php echo form_error('max_price', '<div class="error" style="color:red;">', '</div>');?>
            </div>

             <div class="col-xs-6 form-group">
            <label id="label">Total Area: *</label>
            <input type="text" class="form-control" style="width:200px" id="total_area_res" name="total_area_res" placeholder="Enter Total Area:" value="<?php echo $total_area;?>"></input>
            <?php echo form_error('total_area_res', '<div class="error" style="color:red;">', '</div>');?>        
           </div>


         </div>

        <div id="commercial" <?php if($pro_type_id=="2"){ }else{ ?>style="display:none"<?php }?>>
            <div class="col-xs-6 form-group">
            <label id="label">Total Area:*</label>
            <input type="text" class="form-control" style="width:200px" id="total_area" name="total_area" placeholder="" value="<?php echo $total_area;?>"></input>
            <?php echo form_error('total_area', '<div class="error" style="color:red;">', '</div>');?> 
            </div>


            <div class="col-xs-6 form-group">
            <label id="label">Total Price:*</label>
             
            <input type="text" class="form-control" style="width:200px" id="total_price" name="total_price" placeholder="" value="<?php echo $total_price;?>"></input>
            <?php echo form_error('total_price', '<div class="error" style="color:red;">', '</div>');?> 
            </div>


             <!-- <div class="col-xs-6 form-group">
            <label id="label">Price per square:*</label>

            <select title="Choose State" class="form-control parsley-validated parsley-success" name="price_per_square" id="price_per_square" style="width:200px;">
                    <?php foreach ($figure as $fig) { ?>
                         <?php if($fig['figure'] == $price_per_square) { ?>
                        <option value="<?php echo $fig['figure']; ?>" selected><?php echo $price_per_square; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $fig['figure']; ?>"><?php echo $fig['words']; ?></option>
                    <?php } ?>
                    <?php } ?>
            </select>
            <?php echo form_error('price_per_square', '<div class="error" style="color:red;">', '</div>');?>
            </div>  -->

           <div class="col-xs-6 form-group">
            <label id="label">Price per square:*</label>
            <input type="text" class="form-control" style="width:200px" id="price_per_square" name="price_per_square" placeholder="Enter Price per square:" value="<?php echo $price_per_square;?>"></input>
            <?php echo form_error('price_per_square', '<div class="error" style="color:red;">', '</div>');?> 
          </div>

         </div>

         <div id="agriculture" <?php if($pro_type_id=="3"){ }else{ ?>style="display:none"<?php }?>>
             <div class="col-xs-6 form-group">
            <label id="label">Total Acres:*</label>
            <input type="text" class="form-control" style="width:200px" id="total_acres" name="total_acres" placeholder="Enter total acres:" value="<?php echo $total_acres;?>"></input>
            <?php echo form_error('total_acres', '<div class="error" style="color:red;">', '</div>');?> 
            </div>

             <!-- <div class="col-xs-6 form-group">
            <label id="label">Price per acres:*</label>
            <input type="text" class="form-control" style="width:200px" id="price_per_acres" name="price_per_acres" placeholder="Enter Price per acres:" value="<?php echo $price_per_acres;?>"></input>
            <?php echo form_error('price_per_acres', '<div class="error" style="color:red;">', '</div>');?> 
            </div> -->

             <!-- <div class="col-xs-6 form-group">
            <label id="label">Price per acres:*</label>
            <select title="Choose State" class="form-control parsley-validated parsley-success" name="price_per_acres" id="price_per_acres" style="width:200px;">
                    <?php foreach ($figure as $fig) { ?>
                         <?php if($fig['figure'] == $price_per_acres) { ?>
                        <option value="<?php echo $fig['figure']; ?>" selected><?php echo $fig['words']; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $fig['figure']; ?>"><?php echo $fig['words']; ?></option>
                    <?php } ?>
                    <?php } ?>
            </select>
            <?php echo form_error('price_per_acres', '<div class="error" style="color:red;">', '</div>');?>
            </div> -->

            <div class="col-xs-6 form-group">
            <label id="label">Price per acres:*</label>
            <input type="text" class="form-control" style="width:200px" id="price_per_acres" name="price_per_acres" placeholder="Enter Price per acres:" value="<?php echo $price_per_acres;?>"></input>
            <?php echo form_error('price_per_acres', '<div class="error" style="color:red;">', '</div>');?> 
          </div>

         </div>


</div>

<div align="center" >
         <button type="submit" id="firstBtn" class="btn btn-primary firstBtn">Submit</button>
</div>
</form>




<style type="text/css">

#list .thumb{width: 60px;-webkit-border-radius: 5px 5px;-moz-border-radius: 5px / 5px;border-radius: 5px / 5px;}
select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {margin-bottom: 3px;}
</style>
