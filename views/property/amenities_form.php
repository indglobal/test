 
<script type="text/javascript">
 
$(document).ready(function() {


    //$(document).ready(function(){
       $("#example").dataTable();
      //$("#example").dataTable();

    });

</script>
    <?php    
    
//exit();
if(empty($chk[0])){ 
$amenities=$arrayName = array('0' => array('amenities_id'=>0), );
}else{
$record=$selected_amenities[0];
    //print_r($record);
    $amenities=unserialize($record[ 'amenities']);
    //print_r($amenities);
    }
?>




 <form method="POST" action="<?php echo site_url('property/amenities_form/'.base64_encode($pro_id))?>">
 <input type="hidden" name="pro_id" value="<?php echo $pro_id;?>">
<div class="tab-pane-active" id="receipt">
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
    <thead>
       <tr>
            <th width="5%">#</th>
            <th width="5%">id</th>
            <th width="10%">Amenities</th>
           <!--  <th width="10%">Amenities</th> -->

            
            

        </tr>
    </thead>
    <tbody>
       
         <!--  <?php $i=1256;?>
            <?php// foreach ($all_amenities as $key): 
            //$pro_id = base64_encode($key['pro_id']);
            //$dev_id = base64_encode($key['developer_id']);
            ?> -->
     
                            <?php $old=array();
                                  $old1=array();
                            ?>
                            <?php foreach ($all_amenities as $value) { 
                                $old1=$value['image'];
                                //print_r($old1);
                            	$old[$value[ 'id']]=$value[ 'amenities_name']; } ?>

                            <?php $new=array(); for($i=0;$i<count($amenities);$i++){ array_push($new, $amenities[$i][ 'amenities_id']); } //print_r($new); // exit(); ?>
                                <?php foreach ($old as $key=> $value) { ?>
                                <?php if(in_array($key, $new)) { ?>
              <tr>                  
            <td><input type="checkbox" id="abc" name="amenities_id[]" checked value="<?php echo $key;?>"></td>
             <td><?php echo $key; ?></td>

                 <td><?php echo $value; ?></td> 
                 <!-- <td><?php echo $old1; ?></td>  -->


                 </tr>

                                <?php } else {?>
            <td><input type="checkbox" id="abc" name="amenities_id[]" value="<?php echo $key;?>"></td>
             <td><?php echo $key; ?></td>

                 <td><?php echo $value; ?></td> 
                 <!-- <td><?php echo $old1; ?></td>  -->
                 </tr>
                                
                            
                           <?php } ?>
                                <?php } ?>
                
    
            
                
                
                </tr>
            <?php //endforeach ?>
    </tbody>
</table>
</div>
<div align="center" >
         <button type="submit" id="firstBtn" class="btn btn-primary firstBtn">Submit</button>
</div>
</form>

 
<!--  <div id="dialog-3" title="Dialog Title goes here...">This my first jQuery UI Dialog!</div>
      <button id="opener-3">Open Dialog</button> -->

     
 





 






