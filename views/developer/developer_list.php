


<!--  <div id="dialog-3" title="Dialog Title goes here...">This my first jQuery UI Dialog!</div>
      <button id="opener-3">Open Dialog</button> -->

     



<script type="text/javascript">
$(document).ready(function() {
     $("#dataTables-example").dataTable();
    });

</script>
               
 <form method="POST" action="<?php echo site_url('admin/save_exam_detail')?>">
<div class="tab-pane-active" id="receipt">
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="dataTables-example" width="100%">
    <thead>
       <tr>
        
            <th width="5%">id</th>
            <th width="20%">Developer Name</th>
            <th width="10%">Developer email</th>
            <th width="10%">Developer phone</th>
            <th width="30%" align="center">Actions</th> 
            <th width="10%">Logo</th>  

        </tr>
    </thead>
    <tbody>
       
          <?php $i=1256;?>
            <?php foreach ($alldeveloper as $key): 
            $dev_id=base64_encode($key['dev_id']);
            ?>
                <tr>
                <td><?php echo $key['dev_id'];?></td>
                <td><?php echo $key['dev_name'];?></td>
                <td><?php echo $key['email_dev'];?></td>
                <td><?php echo $key['phn_dev']; ?></td>
                <td><a title="if you want to update developer details, click it" href="<?php echo site_url('developer/developer_edit/'.$dev_id);?>" class="open-dialog-edit btn btn-info btn-rad" data-id=""><i class="icon-book"></i>Edit & View</a>&nbsp<a title="if you want to update developer details, click it" href="<?php echo site_url('developer/developer_images_upload/'.$dev_id);?>" class="open-dialog-edit btn btn-info btn-rad" data-id=""><i class="icon-book"></i>Add Image</a></td>
                <?php $chk=$this->model_developer->check_dev_id(base64_decode($dev_id));
        if(empty($chk)){?>
        <td><a href="<?php echo site_url('developer/logo_form/'.base64_decode($dev_id));?>" class="open-dialog-edit btn btn-info btn-rad">Add</a></td>
        <?php }else{?>
        <td><a href="<?php echo site_url('developer/update_logo_form/'.base64_decode($dev_id));?>" class="open-dialog-edit btn btn-info btn-rad">Update</a></td>
       <?php  }
            ?>


             
        <?php $i=$i+1; ?>
                
                </tr>
            <?php endforeach ?>
    </tbody>
</table>
</div>
</form>
<!--  <div id="dialog-3" title="Dialog Title goes here...">This my first jQuery UI Dialog!</div>
      <button id="opener-3">Open Dialog</button> -->

     
 





 






