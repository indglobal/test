
<link rel="stylesheet" href="<?php echo base_url();?>ui/jquery-ui-themes-1.11.4/themes/smoothness/jquery-ui.css">
<script src="<?php echo base_url();?>ui/jquery-ui-1.11.4/jquery-ui.js"></script>

<script type="text/javascript">

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
///file_preview1

$('#file1').on('change', function(){
        var maximum =  104857600; // 1MB
        var inputFile = $('#file1');

     var filename=inputFile.val();
     var valid_extensions = /(\.jpg|\.jpeg|\.png|\.gif|\.pdf|\.doc|\.docx)$/i;   
      var extension=filename.substr((Math.max(0, filename.lastIndexOf(".")) || Infinity) + 1);
      //alert(extension);

if(!valid_extensions.test(filename))
{ 
   alert('Please upload a file in image format of either  .jpeg .jpg .gif .png .pdf .doc or .docx formats');
   inputFile.val('');
   inputFile.next('.file-input-name').html('');
   return false;
}
        
        
  else if (inputFile.files && inputFile.files[0].size > maximum) {
    alert("Photo size exceeded 100MB. Please choose a file that is less than or equal to 100MB"); // Do your thing to handle the error.
    inputFile.val(''); // Clear the field.
    inputFile.next('.file-input-name').html('');
    return false;
   }
   else { 

        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("file1").files[0]);
if(extension.toLowerCase()=='jpg' || extension.toLowerCase()=='jpeg' || extension.toLowerCase()=='png' || extension.toLowerCase()=='gif'){
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview1").src = oFREvent.target.result;
          

            $("#uploadPreview1").show();
              }
              $("#uploadPreviewFile1").hide();
document.getElementById("typical1").value='image';

          }
          else {
$("#uploadPreview1").hide();
$("#uploadPreviewFile1").show();
 document.getElementById("typical1").value='file';
          }
         }
});
//file_preview1



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

   ///file_preview
   

   ///file_preview


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


$('.del-files').click(function(){
            var length = $('[name="chk[]"]:checked').length;
            alert(length);
            if(length == 1) {
                var delRowID = $('[name="chk[]"]:checked').closest('.rowIndex').attr('id');
                $('#'+delRowID).remove();
            } else {
                $.each($('[name="chk[]"]:checked'), function() {
                    var delRowID = $(this).closest('.rowIndex').attr('id');
                    $('#'+delRowID).remove();
                });
            }
            $('.del-files').hide();
        });
//remove select checkbox
$('#addMore').click(function(){
  //alert("hii");
  var i = $('.container .rowIndex:last').attr('id').replace("row","");
  //alert(i);
  i++;
            var row = '<div id="row'+i+'" class="rowIndex addedRow"><input onclick="showdel()"   id="showdel'+i+'" class="chk'+i+'" type="checkbox" name="chk[]" value="'+i+'"><button id="butt'+i+'" type="button" class="btn btn-warning">Choose File</button> <input type="file" id="file'+i+'"  name="file_'+i+'" class="file"  style="display:none;left: left: -182.75px; top: 7px;" /><img title="Document" id="uploadPreview'+i+'" height="30px" width="30px"   style=" border:1px solid #3b5999; border-radius:5px" hidden="true" /><img title="Document" id="uploadPreviewFile'+i+'" height="30px" width="30px"   style=" border:1px solid #3b5999; border-radius:5px" hidden="true" src="<?php echo base_url();?>includes/images/dc.png" /><input type="text" style="display: none" value="" name="typical'+i+'" id="typical'+i+'"></div>';
            $('.container').append(row);
                $("#butt"+i).click(function()
            {
          $("#file"+i).click();
            });
       //show remove button all other then 1
         $("#showdel"+i).click(function(){
            //alert(i);
            var row = $('.container .rowIndex').length;
            //var ln= $('[name="chk[]"]:checked').length;
            var ln= $('[class="chk"]:checked').length;
           if(ln==1){
          alert("yes");
        }
        if(row>1) {
            if(row == ln) {
                alert('Can\'t delete all row.');
                $.each($('[name="chk[]"]'), function(){
                    $(this).prop('checked', false);
                });
                $('.del-files').hide();
            } else {
                if(ln>=1) {
                    $('.del-files').show();
                } else {
                    $('.del-files').hide();
                }
            }
        }
    })

         //show remove button only for 1
   
         $("#showdel1").click(function(){
            //alert(i);
        var row = $('.container .rowIndex').length;
        var ln= $('[name="chk[]"]:checked').length;
        //var ln= $('[class="chk"]:checked').length;
        
        if(row>1) {
            if(row == ln) {
                alert('Can\'t delete all row.');
                $.each($('[name="chk[]"]'), function(){
                    $(this).prop('checked',false);
                });
                $('.del-files').hide();
            } else {
                if(ln>=1) {
                    $('.del-files').show();
                } else {
                    $('.del-files').hide();
                }
            }
        }
    })

                //file_preview
            $('#file'+i).on('change', function(){
            var maximum =  104857600; // 1MB
            var inputFile = $('#file'+i);

            var filename=inputFile.val();
            var valid_extensions = /(\.jpg|\.jpeg|\.png|\.gif|\.pdf|\.doc|\.docx)$/i; 
            var extension=filename.substr((Math.max(0, filename.lastIndexOf(".")) || Infinity) + 1);

if(!valid_extensions.test(filename))
{ 
  alert('Please upload a file in image format of either  .jpeg .jpg .gif .png .pdf .doc or .docx formats');
   inputFile.val('');
   inputFile.next('.file-input-name').html('');
   return false;
   
}
        
        
  else if (inputFile.files && inputFile.files[0].size > maximum) {
    alert("Photo size exceeded 100MB. Please choose a file that is less than or equal to 100MB"); // Do your thing to handle the error.
    inputFile.val(''); // Clear the field.
    inputFile.next('.file-input-name').html('');
    return false;
   }
   else { 
 var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("file"+i).files[0]);
if(extension.toLowerCase()=='jpg' || extension.toLowerCase()=='jpeg' || extension.toLowerCase()=='png' || extension.toLowerCase()=='gif'){
        oFReader.onload = function (oFREvent) {
        
            document.getElementById("uploadPreview"+i).src = oFREvent.target.result;
            $("#uploadPreview"+i).show();

 
             
        }
         $("#uploadPreviewFile"+i).hide();
           document.getElementById("typical"+i).value='image';

     } else {

  $("#uploadPreview"+i).hide();
  $("#uploadPreviewFile"+i).show();
    document.getElementById("typical"+i).value='file';
           }
        
        }
    });

    

    //file_preview
});



  

    

$('body').on('focus',"#dob", function(){
        $(this).datepicker({dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true, yearRange: '1900:+0'});
    });






});//document close

  // $(function() {
  //   $( "#dob" ).datepicker();
  // });


</script>
 
<form id="file_form" action="<?php echo site_url('developer/developer_images_upload'); ?>" method="post" enctype="multipart/form-data">
<legend style="font-size:15px; color:#3b5999; font-weight:700">Upload images » <small style="font-size:11px"> Use the below panel to upload images of a particular Property Under developer.</small></legend>

          <div class="col-xs-6 form-group">
            <label id="label">Developer ID: *</label>
            <input value="<?php  echo $dev_id;?>" class="form-control" title="Enter file number" autocomplete="off" type="text" name="dev_id"/>
        </div>
         <div class="col-xs-6 form-group">
            <label id="label">Property ID: *</label>
            <input value="" class="form-control" title="Enter file number" autocomplete="off" type="text" name="pro_id"/>
        </div>
       
   
    <p style='font-size:10px'>Please upload .jpg .gif .png .pdf .doc or .docx files not exceeding 10MB size</p>




    <div class="container">
        <div id="row1" class="rowIndex fixedRow">
        <input onclick="showdel()"  id="showdel1" class="chk"  type="checkbox" name="chk[]" value="1">
           
      
        <button id="butt" onclick="$('#file1').click();" type="button" class="btn btn-warning">Choose File</button> 
            <input  style="display:none" id="file1" type="file" name="file_1" class="file" />
            <img title="Document" id="uploadPreview1" height="30px" width="30px"   style=" border:1px solid #3b5999; border-radius:5px" hidden="true"/>
  <img title="Document" id="uploadPreviewFile1" height="30px" width="30px"   
  style=" border:1px solid #3b5999; border-radius:5px" src="<?php echo base_url();?>includes/images/dc.png" hidden="true" />
  <input type="text" style="display: none" value="" name="typical1" id="typical1">
        </div>
    </div>
    <br/>
    <input type="submit" name="submit" id="save" class="btn btn-success" value="Upload Document(s)">
    <a title="Select a checkbox and Remove files" class="btn btn-danger del-files" style="display:none" href="#">Remove</a>
    <a href="#" id="addMore" class="btn btn-info">Add More Document(s)</a>
</form>




<style type="text/css">

#list .thumb{width: 60px;-webkit-border-radius: 5px 5px;-moz-border-radius: 5px / 5px;border-radius: 5px / 5px;}
select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {margin-bottom: 3px;}
</style>

<style type="text/css">
    .fixedRow .file_desc {margin-top: 10px;}
    .addedRow .file_desc {margin: 5px;}
    .rowIndex {height: 38px;}
    .fixedRow {margin-bottom: 5px;}
    .addedRow input[type="text"] {margin: 5px 4px;}
</style>
