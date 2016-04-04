<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>includes/jquery.jeditable.js"></script>
<script type="text/javascript">
 
$(document).ready(function() {
       $("#example").dataTable();
    });

$(document).ready(function() {
        var oTable=$('#example').dataTable();
        oTable.$('.edit').editable("<?php echo site_url('property/update_ajax') ?>", {
    
                    "callback": function( sValue, y ) {
                        var aPos = oTable.fnGetPosition( this );
                        oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                    },

                    "submitdata":function(value,settings) {
                        return {
                            "row_id": this.parentNode.getAttribute('id'),
                            "column": oTable.fnGetPosition(this)[2]
                        };
                    },
      
                    "height": "24px",
                    "width": "100%",
                    "onblur": "submit"
               });
    });

</script>
<p style=""><i><span style='color:red'>(To Edit a Area name and no of plots please Click on the record write the update value and hit Enter)</span></i></p>        

      <div>
       <a href="<?php echo site_url('property/addnew_popular_area/');?>"><button type="submit" id="firstBtn" class="btn btn-primary firstBtn">Add New</button></a>
        <div>   
        <div style="height:10px;"></div>      
 <form method="POST" action="<?php echo site_url('admin/save_exam_detail')?>">
<div class="tab-pane-active" id="receipt">
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
    <thead>
       <tr>
        
            <th width="5%"> id</th>
            <th width="10%">Area Name</th>
            <th width="10%">No of Plots</th>
<!--             <th width="10%">Popularity</th>
 -->
          <!--   <th width="30%">Actions</th>      -->     
        </tr>
    </thead>
    <tbody>
       
          <?php $i=1256;?>
            <?php foreach ($allpopular_area as $key): 
            ?>
               <tr id="<?php echo $key['area_id'];?>">

                <td><?php echo $key['area_id']; ?></td>
                 <td class="edit"><?php echo $key['area_name']; ?></td>
                  <td class="edit"><?php echo $key['no_of_plots']; ?></td>
<!--                   <td class="edit"><?php echo $key['popularity']; ?></td>
 -->                  <!--  <td><a title="if you want to update property details, click it" href="<?php //echo site_url('property/property_edit/'.$pro_id);?>" class="open-dialog-edit btn btn-info btn-rad" data-id=""><i class="icon-book"></i>Edit & View</a>
                    <a title="if you want to upload property images, click it" href="<?php //echo site_url('property/property_images_upload/'.$pro_id.'/'.$dev_id);?>" class="open-dialog-edit btn btn-success btn-rad" data-id=""><i class="icon-book"></i></a>
                </td> -->
                    <?php $i=$i+1;?>
                
                </tr>
            <?php endforeach ?>
    </tbody>
</table>
</div>
</form>
<!--  <div id="dialog-3" title="Dialog Title goes here...">This my first jQuery UI Dialog!</div>
      <button id="opener-3">Open Dialog</button> -->

     
 





 






