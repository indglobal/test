 <?php $str=$plotsimage_by_proid[0]['plots_image'];
 //print_r($str);
   $a=explode("/",$str);
   $image_name=$a[3];
  //print_r($image_name);
   //exit();
 ?>
 <p style=""><i><span style='color:red'>(plots photo size should be greater then or equal to 1098*1326)</span></i></p>        


 <form id="addcity" action="<?php echo site_url('property/update_plots_image/'.$pro_id.'/'.$image_name); ?>" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                    <label for="exampleInputPassword1">plots Image >> <?php echo getProperty_name_byid($pro_id);?></label>
                      <input type="hidden" class="form-control" style="width:100px;"disabled name="pro_id" value="<?php echo $pro_id?>"
                          id="figure" placeholder="Please Enter Figure"/>
                        <!-- <input type="hidden" class="form-control" style="width:100px;"disabled name="image_id" value="<?php echo $dev_logo_image_detail[0]['id'];?>"
                          id="figure" placeholder="Please Enter Figure"/> -->
                        <input type="hidden" class="form-control" style="width:100px;"disabled name="image_name" value="<?php echo $image_name;?>"
                         id="figure" placeholder="Please Enter Figure"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
        <div id="list"><img src="<?php echo base_url($plotsimage_by_proid[0]['plots_image']);?>" alt="Trolltunga Norway" width="100" height="100"></div>
 <div id=""style="height:10px;"></div>
            <input type="file" name="photograph" id="photograph" value="<?php //echo $photograph;?>" style="left: -155.9375px; top: 3px;">
<div id=""style="height:10px;"></div>
            </div>
                  
               <input type="submit" name="submit" class="btn btn-primary firstBtn" value="Update"> 
                <div id="success"></div>
</form>
<div id="details"></div>
<script type="text/javascript">
    $(document).ready(function(){
        // $("#btn").click(function(){
        //     var pro_id=$("#pro_id").val();
        //     alert(pro_id);
        //     var uri=$("#url").val();
        //     $.ajax({
        //         //url: 'search_view?pro_id='+pro_id,
        //         url:uri+'?pro_id='+pro_id,
        //         type: 'GET',
        //         dataType: 'html',
        //         beforeSend: function(){
        //             //$("#img").show();
        //         },
        //         success: function(data) {
        //             // //$("#img").hide();
        //             // if(data=="1003"){
        //             //     alert("hiii");

        //             // }
        //             $("#details").html(data);
        //         }
        //     });
        // });


        function handleFileSelect(evt) {
        var files = evt.target.files; // FileList object

        var f = files[0];
        var reader = new FileReader();
        reader.onload = (function(theFile) {
            return function(e) {
                // Render thumbnail.
                var span = document.createElement('span');
                span.innerHTML = ['<img class="img-thumbnail" width="100" height="100" src="', e.target.result,
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
    });
</script>
    
