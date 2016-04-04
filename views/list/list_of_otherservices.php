 


<script type="text/javascript">
 
$(document).ready(function() {
       $("#example").dataTable();

    });




</script>

<div class="tab-pane-active" id="receipt">
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
    <thead>
       <tr>
            <th width="5%">id</th>
            <th width="10%">Section Name</th>
            <th width="10%">First Name</th>
            <th width="10%">Last Name</th>
            <th width="15%">email</th>
            <th width="10%">Phone</th>
            <th width="10%">city</th>
            <th width="30%">Remarks</th>
                     
        </tr>
    </thead>
    <tbody>
       <div>
        <div>   
        <div style="height:10px;"></div> 
          <?php $i=1256;?>
            <?php foreach ($list_of_otherservices as $key): 
            ?>
              <tr>

                <td><?php echo $key['qid']; ?></td>
                <td><?php echo $key['sectionname']; ?></td>
                <td><?php echo $key['fname']; ?></td>
                <td><?php echo $key['lname']; ?></td>
                <td><?php echo $key['email']; ?></td>
                <td><?php echo $key['phonenum']; ?></td>
                <td><?php echo $key['city']; ?></td>
                <td><?php echo $key['remarks']; ?></td>
                <!-- <td><a title="if you want to update property details, click it" href="<?php //echo site_url('property/property_edit/'.$pro_id);?>" class="open-dialog-edit btn btn-info btn-rad" data-id=""><i class="icon-book"></i>Edit & View</a>
                </td> -->
                    <?php $i=$i+1;?>
                
                </tr>
            <?php endforeach ?>
    </tbody>
</table>
</div>

<!--  <div id="dialog-3" title="Dialog Title goes here...">This my first jQuery UI Dialog!</div>
      <button id="opener-3">Open Dialog</button> -->

     
 
<!--sanjaymodel-->
<div class="modal fade" id="addtopic" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Add State
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div id="success" class="success"></div>
                <!--<form role="form" id="uploadForm" enctype="multipart/form-data">-->
               <form id="addstate" action="" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Ciy Name</label>
                      <input type="text" class="form-control" name="city_name"
                          id="city_name" placeholder="Please Enter State Name"/>
                     </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <select name="state" id="state" class="form-control">
                                 <option value="0">Select</option>
                   <?php foreach ($allstate as $all) {?>
                         <option value="<?php echo $all['state_id'];?>"><?php echo $all['state_name'];?></option>
                  <?php } ?>
                    </select>
                  </div>

                  <div id="success"></div>
                   
                  <button type="submit_join_group" class="btn btn-primary" id="submit_city">Submit</button>
                   <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                         Close
                </button>
             
                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            
        </div>
    </div>
</div>
<input type="hidden" value="<?php echo site_url('master/city/add_city')?>" id="url" >
    <script type="text/javascript">
$(document).ready(function(){
 // e.preventDefault();
$("#submit_city").click(function(e){
  e.preventDefault();
   var uri=$("#url").val();
 var state_id=$("#state").val();
var city_name=$("#city_name").val();
 $.ajax({
                    url:uri+'?state_id='+state_id+'&city_name='+city_name,
                    type: 'GET',
                    dataType: 'json',
                    beforeSend:function(){

                    },
                    success:function(data){
                        if(data.message=='true'){

                             $("#success").append('Module Saved Successfully');
                             window.location.href ='<?php echo base_url();?>index.php/master/city/list_of_city';
                             //$('#cls').attr('class', '').addClass('alert alert-success');
                             //$("#success").show();
                             // $('#img').attr('src', '<?php echo base_url()?>includes/images/Success.png?>');
                             // $('#example').dataTable().fnAddData( [data.module_code,data.module_name,data.alias_name,data.type,data.menu_index,data.anchor]);
                             
                        }
                           
                    }
               });



             });
});
    </script>


<!-- Post Info -->
<!--sanjaymymodal-->




 






