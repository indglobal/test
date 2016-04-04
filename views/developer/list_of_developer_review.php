 


<script type="text/javascript">
 
$(document).ready(function() {


    //$(document).ready(function(){
       $("#example").dataTable();
      //$("#example").dataTable();

      

    });

</script>
               
 <form method="POST" action="<?php echo site_url('admin/save_exam_detail')?>">
<div class="tab-pane-active" id="receipt">
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
    <thead>
       <tr>
        
            <th width="5%">id</th>
            <th width="5%"> Dev id</th>
            <th width="5%">Userid</th>
            <th width="30%">Review</th>
            <th width="10%">Approved</th>

                      
        </tr>
    </thead>
    <tbody>
       
          <?php $i=1256;?>
            <?php foreach ($getall_review_for_developer as $key): 
            $id =$key['id'];
            $dev_id =$key['dev_id'];
            $userid =$key['userid'];
            $status =$key['status'];
            ?>
           <tr>
                <td id="id_<?php echo $id;?>"><?php echo $key['id']; ?></td>
                <td id="pro_id_<?php echo $id;?>"><?php echo $key['dev_id']; ?></td>
                <td id="userid_<?php echo $id;?>"><?php echo $key['userid']; ?></td>
                <td><?php echo $key['dev_review'];?></td>
               <td>
                  <button id="approved_review_<?php echo $id;?>" <?php if($status=="0"){?>class="btn btn-default"<?php }else{?>class="btn btn-success"<?php } ?>>Approved</button></td>
                    <?php $i=$i+1;?>
                </tr>
              <script type="text/javascript">
              $(document).ready(function() {
                $("#approved_review_"+<?php echo $id;?>).click(function(e){
                  e.preventDefault();
                  var id =$("#id_"+<?php echo $id;?>).text();
               
                  //alert(id);
                  $.ajax({
                  url: "<?php echo base_url(); ?>" + "index.php/developer/approved_review",
                  type: "POST",
                  data: {id:id},
                  success: function(res){
                 if (res=="success")
                     { 
                       $("#approved_review_"+<?php echo $id;?>).removeClass("btn btn-success");
                       $("#approved_review_"+<?php echo $id;?>).addClass("btn btn-default"); 

                     }else if(res=="fail"){
                      $("#approved_review_"+<?php echo $id;?>).removeClass("btn btn-default");
                       $("#approved_review_"+<?php echo $id;?>).addClass("btn btn-success"); 
                     }                   
          }
      });



                          });


                $("#approved_review_fr_index"+<?php echo $id;?>).click(function(e){
                  e.preventDefault();
                  var id =$("#id_"+<?php echo $id;?>).text();
                  //alert(id);
                  $.ajax({
                  url: "<?php echo base_url(); ?>" + "index.php/property/approved_review_fr_index",
                  type: "POST",
                  data: {id:id},
                  success: function(res){
                   // alert(res);
                if (res=="success")
                     { 
                       //$("#approved_review_fr_index"+<?php echo $id;?>).removeClass("btn btn-success");
                       $("#approved_review_fr_index"+<?php echo $id;?>).prop('checked',false); 

                     }else if(res=="fail"){
                       $("#approved_review_fr_index"+<?php echo $id;?>).prop('checked',true); 
                      //$("#approved_review_fr_index"+<?php echo $id;?>).removeClass("btn btn-default");
                       //$("#approved_review_fr_index"+<?php echo $id;?>).addClass("btn btn-success"); 
                     }                   
          }
                });



                          });


              });
           </script>
            <?php endforeach ?>
    </tbody>
</table>
</div>
</form>
<!--  <div id="dialog-3" title="Dialog Title goes here...">This my first jQuery UI Dialog!</div>
      <button id="opener-3">Open Dialog</button> -->

     
 












