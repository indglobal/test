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

   $('#state_dev').on('change', function() {
            var me = $(this);
            //var a=$('#state').val();
            //alert(me.val()); 
            $.post('<?php echo site_url("developer/getCity/"); ?>',{state: me.val()}, function(data) {
                console.log(data);
             //$('#city').html(data);
             $('#city_dev').html(data);

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





});//document close

  // $(function() {
  //   $( "#dob" ).datepicker();
  // });


</script>
      
    <form id="signupForm" method="post"  action="<?php echo site_url('developer/developer_detail/'); ?>" enctype="multipart/form-data">
    <div class="col-md-12" id="firstStep" class="firstStep">
    
       
<input type="text" name="userid" value="<?php //echo $user_id;?>" hidden>

    <legend style="font-size:15px; color:#3b5999; font-weight:700">Developer Details » <small style="font-size:11px"> Use the below panel to enter relevant details about developer(fields marked with * are all mandatory).</small></legend>
        <div class="col-xs-6 form-group">
            <label id="label">Developer Name: *</label>
            <input type="text" class="form-control" style="width:200px" id="dev_name" name="dev_name" placeholder="Enter Developer Name"></input><?php echo form_error('dev_name', '<div class="error" style="color:red;">', '</div>');?> 
        </div>

   
        <div class="col-xs-6 form-group">
            <label id="label">State: *</label>
                    <select title="Choose State" class="form-control parsley-validated parsley-success" name="state_dev" id="state_dev" style="width:200px;">
                    <option value="">Select</option>
                    <?php foreach ($state as $st) { ?>
                         <option value="<?php echo $st['state_id'];?>"><?php echo $st['state_name']; ?></option>
                    <?php } ?>
                   
                    </select> <?php echo form_error('state_dev', '<div class="error" style="color:red;">', '</div>');?>     
                    
        </div>
                
        
         <div class="col-xs-6 form-group">
            <label id="label">City:*</label>
             <select name="city_dev" id="city_dev" class="form-control" style="width:200px;">>
             <option value="">--Select--</option>
            </select><?php echo form_error('city_dev', '<div class="error" style="color:red;">', '</div>');?> 
        </div>
        
        <div class="col-xs-6 form-group">
            <label id="label">Pin:*</label>
           <input type="text" class="form-control" style="width:200px" id="pin_dev" name="pin_dev" placeholder="Enter Pin Here:"></input><?php echo form_error('pin_dev', '<div class="error" style="color:red;">', '</div>');?> 
        </div>



        
      

         <div class="col-xs-6 form-group">
            <label id="label">Email: *</label>
            <input type="text" class="form-control" style="width:200px" id="email_dev" name="email_dev" placeholder="Enter Email here"></input><?php echo form_error('email_dev', '<div class="error" style="color:red;">', '</div>');?> 
        </div>

        
         <div class="col-xs-6 form-group">
            <label id="label">Phone:*</label>
           <input type="text" class="form-control" style="width:200px" id="phn_dev" name="phn_dev" placeholder="Enter Phone No:"><?php echo form_error('phn_dev', '<div class="error" style="color:red;">', '</div>');?> 
        </div>

        <div class="col-xs-6 form-group">
            <label id="label">Address: *</label>
            <textarea class="form-control" rows="3" cols="8"  name="address1_dev"></textarea><?php echo form_error('address1_dev', '<div class="error" style="color:red;">', '</div>');?> 
        </div>
       
        
       
        
        <div class="form-group">
           <label id="label">LOGO: *</label>
               
         <input type="file" name="photograph" id="photograph"   style="left: -155.9375px; top: 3px;">
          <div id="list" style="width:100px;height:100px"></div>    
        </div>

        
                





        <div class="col-xs-6 form-group">
            <label id="label">Overview: *</label>
            <textarea class="ckeditor_standard"   name="dev_overview"  class="form-control parsley-validated" id="dev_overview">
            <?php  echo set_value('dev_overview');?></textarea><?php echo form_error('dev_overview', '<div class="error" style="color:red;">', '</div>');?> 
        </div>


     <legend style="font-size:15px; color:#3b5999; font-weight:700">Plot Details » <small style="font-size:11px"> Use the below panel to enter relevant details about PLots.</small></legend>
        <div class="col-xs-6 form-group">
            <label id="label">Ongoing projects: *</label>
            <input type="text" class="form-control" style="width:200px" id="ongoing_pro" name="ongoing_pro" placeholder="Enter "></input><?php echo form_error('ongoing_projects', '<div class="error" style="color:red;">', '</div>');?> 
        </div>
        
         <div class="col-xs-6 form-group">
            <label id="label">Upcoming projects: *</label>
            <input type="text" class="form-control" style="width:200px" id="upcoming_pro" name="upcoming_pro" value="<?php echo set_value('available_plots'); ?>" placeholder="Enter Available plots:"></input>
            <?php echo form_error('upcoming_pro', '<div class="error" style="color:red;">', '</div>');?>         
        </div>
   
        <div class="col-xs-6 form-group">
            <label id="label">Completed Projects: *</label>
            <input type="text" class="form-control" style="width:200px" id="completed_pro" name="completed_pro" placeholder="Enter Booked plots:"></input>
            <?php echo form_error('completed_pro', '<div class="error" style="color:red;">', '</div>');?>        
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
