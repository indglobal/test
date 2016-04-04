 


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
        
            <th width="5%">Property id</th>
            <th width="10%">Developer Name</th>
            <th width="30%">Address</th>
            <th width="10%">Property Type</th>
            <th width="30%">Actions</th>          
        </tr>
    </thead>
    <tbody>
       
          <?php $i=1256;?>
            <?php foreach ($allproperty as $key): 
            $pro_id = base64_encode($key['pro_id']);
            $dev_id = base64_encode($key['developer_id']);
            ?>
                <tr>

                <td><?php echo $key['pro_id']; ?></td>
                <td><?php echo $key['developer_id']; ?></td>
                <td><?php echo $key['address_pro']; ?></td>
                <td><?php echo $key['pro_type_id']; ?></td>
                <td><a title="if you want to Add video for this project, click it" href="<?php echo site_url('property/add_video/'.$pro_id);?>" class="open-dialog-edit btn btn-info btn-rad" data-id=""><i class="icon-book"></i>Add Video</a>
                </td>
                <!-- <td><a title="if you want to update property details, click it" href="<?php echo site_url('property/property_edit/'.$pro_id);?>" class="open-dialog-edit btn btn-info btn-rad" data-id=""><i class="icon-book"></i>Edit & View</a>
                    <a title="if you want to upload property images, click it" href="<?php echo site_url('property/property_images_upload/'.$pro_id.'/'.$dev_id);?>" class="open-dialog-edit btn btn-success btn-rad" data-id=""><i class="icon-book"></i>Upload Image</a>
                    <a title="if you want to upload plots image, click it" href="<?php echo site_url('property/add_plots/'.$pro_id);?>" class="open-dialog-edit btn btn-success btn-rad" data-id=""><i class="icon-book"></i>Plots Image</a>

                </td>-->
                    <?php $i=$i+1;?>
                
                </tr>
            <?php endforeach ?>
    </tbody>
</table>
</div>
</form>
<!--  <div id="dialog-3" title="Dialog Title goes here...">This my first jQuery UI Dialog!</div>
      <button id="opener-3">Open Dialog</button> -->

     
 





 






