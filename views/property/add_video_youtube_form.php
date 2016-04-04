<script src='<?php echo base_url()?>includes/vendors/ckeditor/ckeditor.js'></script>
<script src='<?php echo base_url()?>includes/vendors/ckeditor/adapters/jquery.js'></script>


<link rel="stylesheet" href="<?php echo base_url();?>ui/jquery-ui-themes-1.11.4/themes/smoothness/jquery-ui.css">
<script src="<?php echo base_url();?>ui/jquery-ui-1.11.4/jquery-ui.js"></script>

<script type="text/javascript">


  

</script>
<p style=""><i><span style='color:red'>(Copy you tube video link and past in input box below and click submit)</span></i></p>        

 
    <form id="signupForm" method="post"  action="<?php echo site_url('property/add_video_youtube/'.$pro_id); ?>">
    <div class="col-md-12" id="firstStep" class="firstStep">
    

  <div class="col-xs-6 form-group">
            <label id="label">you tube video link:*</label>
           <input type="text" class="form-control" style="width:400px" id="video_link" name="video_link" placeholder="Enter you tube video link:"><?php echo form_error('phn_dev', '<div class="error" style="color:red;">', '</div>');?> 
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