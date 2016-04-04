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





});//document close

  // $(function() {
  //   $( "#dob" ).datepicker();
  // });


</script>
 
   <form role="form" method="post" enctype="multipart/form-data" action="<?php echo site_url('property/add_video/'.base64_encode($pro_id));?>">
<br/>
    <legend style="font-size:15px; color:#3b5999; font-weight:700">Video » <small style="font-size:11px">if you want to add video for project ,choose file and submit ,it will reflect on project page.</small></legend>

                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="file" class="form-control" id="video" name="video" />
                                        </div>

                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="submit" class="form-control" id="button" name="video" value="submit" />
                                        </div>

                                     
                                    <hr />
                                   
 </form>




<style type="text/css">

#list .thumb{width: 60px;-webkit-border-radius: 5px 5px;-moz-border-radius: 5px / 5px;border-radius: 5px / 5px;}
select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {margin-bottom: 3px;}
</style>
