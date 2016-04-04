<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>includes/jquery.jeditable.js"></script>
 
<script type="text/javascript">
 
$(document).ready(function() {
       $("#example").dataTable();

    });

$(document).ready(function() {
        var oTable=$('#example').dataTable();
        oTable.$('.edit').editable("<?php echo site_url('master/location/update_ajax') ?>", {
    
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
<p style=""><i><span style='color:red'>(To Edit a Location Name please Click on the record write the update value and hit Enter)</span></i></p>        


<div class="tab-pane-active" id="receipt">
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
    <thead>
       <tr>
            <th width="5%">id</th>
            <th width="30%">Location Name</th>
            <th width="30%">City</th>
                      
        </tr>
    </thead>
    <tbody>
       <div>
<button class="btn btn-joinGroup" data-toggle="modal" data-target="#addcity" data-id="">Add New</button>
        <div>   
        <div style="height:10px;"></div> 
          <?php $i=1256;?>
            <?php foreach ($alllocation as $key): 
            // $pro_id = base64_encode($key['pro_id']);
            // //print_r($pro_id);
            // $dev_id = base64_encode($key['developer_id']);
            ?>
              <tr id="<?php echo $key['loc_id'];?>">


                <td><?php echo $key['loc_id']; ?></td>
                <td class="edit"><?php echo $key['loc_name']; ?></td>
                <td><?php echo getcityNameByID($key['city_id']); ?></td>
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
<div class="modal fade" id="addcity" tabindex="-1" role="dialog" 
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
                    Add Location
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div id="success" class="success"></div>
                <!--<form role="form" id="uploadForm" enctype="multipart/form-data">-->
               <form id="addcity" action="" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Location Name</label>
                      <input type="text" class="form-control" name="loc_name"
                          id="loc_name" placeholder="Please Enter Location Name"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">City</label>
                    <select name="city" id="city_id" class="form-control">
                   <option value="0">Select</option>
                   <?php foreach ($allcity as $all) { ?>
                         <option value="<?php echo $all['city_id'];?>"><?php echo $all['city_name'];?></option>
                  <?php } ?>
                    </select>
                  </div>
                  
                
                  <button type="submit_join_group" class="btn btn-primary" id="submit_location">Submit</button>
                   <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                         Close
                </button>
                <div id="success"></div>
                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            
        </div>
    </div>
</div>
  

  <input type="hidden" value="<?php echo site_url('master/location/add_location')?>" id="url" >
    <script type="text/javascript">
$(document).ready(function(){
 // e.preventDefault();
$("#submit_location").click(function(e){
  e.preventDefault();
   var uri=$("#url").val();
 var city_id=$("#city_id").val();
var loc_name=$("#loc_name").val();
 $.ajax({
                    url:uri+'?city_id='+city_id+'&loc_name='+loc_name,
                    type: 'GET',
                    dataType: 'json',
                    beforeSend:function(){

                    },
                    success:function(data){
                        if(data.message=='true'){
                             $("#success").append('Location Saved Successfully');
                             window.location.href ='<?php echo base_url();?>index.php/master/location/list_of_location';
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




 






