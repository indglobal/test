<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>includes/jquery.jeditable.js"></script>
 


<script type="text/javascript">
 
$(document).ready(function() {
       $("#example").dataTable();

    });



$(document).ready(function() {
        var oTable=$('#example').dataTable();
        oTable.$('.edit').editable("<?php echo site_url('master/state/update_ajax') ?>", {
    
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
       
<p style=""><i><span style='color:red'>(To Edit a State Name please Click on the record write the update value and hit Enter)</span></i></p>        


<div class="tab-pane-active" id="receipt">
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
    <thead>
       <tr>
            <th width="35%">id</th>
            <th width="30%">State Name</th>
                   
        </tr>
    </thead>
    <tbody>
       <div>
<button class="btn btn-joinGroup" data-toggle="modal" data-target="#addtopic" data-id="">Add New</button>
        <div>   
        <div style="height:10px;"></div> 
          <?php $i=1256;?>
            <?php foreach ($allstates as $key): 
            // $pro_id = base64_encode($key['pro_id']);
            // //print_r($pro_id);
            // $dev_id = base64_encode($key['developer_id']);
            ?>
                <tr id="<?php echo $key['state_id'];?>">

                <td><?php echo $key['state_id']; ?></td>
                <td class="edit"><?php echo $key['state_name']; ?></td>
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
                    <label for="exampleInputPassword1">State Name</label>
                      <input type="text" class="form-control" name="state_name"
                          id="state_name" placeholder="Please Enter State Name"/>
                  </div>
                  
                
                  <button type="submit_join_group" class="btn btn-primary" id="submit_state">Submit</button>
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
    <script type="text/javascript">
$(document).ready(function(e){
$("#addstate").on('submit',(function() {
var formData = new FormData( $("#addstate")[0]);
//var formData = new FormData( $("#uploadimage")[0] );
$.ajax({
//url: "ajax_php_file.php", 
 url: "<?php echo base_url(); ?>" + "index.php/master/state/add_state",// Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,       // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
    alert(data);
//     e.preventDefault();
// if(data=="ok"){

//     //window.location.href ='<?php echo base_url();?>index.php/master/state/list_of_state';
//     alert("okkk");
//    //$("#success2_<?php echo $i;?>").append("Registration is successfull.. Thank you");
//     }else if(data=="fail"){
//    alert("sorry file error");
//                      }  
}
});


                         }));
         
             });
    </script>


<!-- Post Info -->
<!--sanjaymymodal-->




 






