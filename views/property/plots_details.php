 


<script type="text/javascript">
 
$(document).ready(function() {


    //$(document).ready(function(){
       $("#example").dataTable();
      //$("#example").dataTable();

    });

</script>
      <div>
<!--        <a href="<?php echo site_url('property/addnew_photo/');?>"><button type="submit" id="firstBtn" class="btn btn-primary firstBtn">Add New</button></a>
 -->        <div>   
        <div style="height:10px;"></div>      
 <form method="POST" action="<?php echo site_url('admin/save_exam_detail')?>">
<div class="tab-pane-active" id="receipt">
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
    <thead>
       <tr>
        
            <th width="5%"> id</th>
            <th width="10%">Available</th>

            <th width="30%">Booked</th>     
             <th width="10%">Range</th>

            <th width="30%">group Purchase</th>      
            <th width="30%">Actions</th> 

        </tr>
    </thead>
    <tbody>
       
          <?php $i=1256;?>
            <?php foreach ($plots_details as $key): 
            //$pro_id = base64_encode($key['pro_id']);
            //print_r($pro_id);
            //$dev_id = base64_encode($key['developer_id']);
            ?>
                <tr>

                <td><?php echo $key['id']; ?></td>
                <td><?php echo $key['available']; ?></td>
                <td><?php echo $key['booked']; ?></td>
                <td><?php echo $key['plots_range']; ?></td>
                <td><?php echo $key['on_group_purchase']; ?></td>
                
                <td><a title="if you want to update property details, click it" href="<?php //echo site_url('property/property_edit/'.$pro_id);?>" class="open-dialog-edit btn btn-info btn-rad" data-id=""><i class="icon-book"></i>Edit & View</a>
                    <a title="if you want to upload property images, click it" href="<?php //echo site_url('property/property_images_upload/'.$pro_id.'/'.$dev_id);?>" class="open-dialog-edit btn btn-success btn-rad" data-id=""><i class="icon-book"></i></a>
                </td>
                    <?php $i=$i+1;?>
                
                </tr>
            <?php endforeach ?>
    </tbody>
</table>
</div>
</form>
<!--  <div id="dialog-3" title="Dialog Title goes here...">This my first jQuery UI Dialog!</div>
      <button id="opener-3">Open Dialog</button> -->

     
 





 






