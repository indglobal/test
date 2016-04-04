 
 <div class="form-group">
                    <label for="exampleInputPassword1">Property ID</label>
                         <input type="text" class="form-control" name="pro_id"
                          id="pro_id" placeholder="Please Enter Property ID"/>
</div>
                  
                
                  <button type="submit_join_group" class="btn btn-primary" id="btn">Submit</button>
                    <input type="hidden" value="<?php echo site_url('search_photo_for_property/search_view')?>" id="url" >

<div id="details"></div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#btn").click(function(){
            var pro_id=$("#pro_id").val();
            var uri=$("#url").val();
            $.ajax({
                //url: 'search_view?pro_id='+pro_id,
                url:uri+'?pro_id='+pro_id,
                type: 'GET',
                dataType: 'html',
                beforeSend: function(){
                    //$("#img").show();
                },
                success: function(data) {
                    // //$("#img").hide();
                    // if(data=="1003"){
                    //     alert("hiii");

                    // }
                    $("#details").html(data);
                }
            });
        });
    });
</script>
    
