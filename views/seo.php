<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>includes/jquery.jeditable.js"></script>
 


<script type="text/javascript">
 
$(document).ready(function() {
       $("#example").dataTable();

    });

$(document).ready(function() {
        var oTable=$('#example').dataTable();
        oTable.$('.edit').editable("<?php echo site_url('seo/update_ajax') ?>", {
    
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
<p style=""><i><span style='color:red'>(To Edit a seo detail please Click on the record write the update value and hit Enter)</span></i></p>        

<div class="tab-pane-active" id="receipt">
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
    <thead>
       <tr>
            <th width="5%">id</th>
            <th width="10%">page title</th>
            <th width="10%">Keywords</th>
            <th width="10%">title</th>
            <th width="10%">Description</th>



                     
        </tr>
    </thead>
    <tbody>
       <div>
<button class="btn btn-joinGroup" data-toggle="modal" data-target="#addtopic" data-id="">Add New</button>
        <div>   
        <div style="height:10px;"></div> 
          <?php $i=1256;?>
            <?php foreach ($getSeo_detail as $key): 

            // $pro_id = base64_encode($key['pro_id']);
            // //print_r($pro_id);
            // $dev_id = base64_encode($key['developer_id']);
            ?>
              <tr id="<?php echo $key['id'];?>">

                <td ><?php echo $key['id'];?></td>
                <td ><?php echo getPage_name($key['page_id']);?></td>
                <td class="edit"><?php echo $key['keywords']; ?></td>
                <td class="edit"><?php echo $key['title']; ?></td>
                <td class="edit"><?php echo $key['description'];?></td>

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
                    Add SEO Detail
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div id="success" class="success"></div>
                <!--<form role="form" id="uploadForm" enctype="multipart/form-data">-->
               <form id="addstate" action="" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Pages</label>
                    <select name="page_id" id="page_id" class="form-control">
                      <option value="0">Select</option>
                   <?php foreach ($getPage as $all) {?>
                         <option value="<?php echo $all['id'];?>"><?php echo $all['page_title'];?></option>
                  <?php } ?>
                    </select>
                  </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">keywords</label>
                      <input type="text" class="form-control" name="keywords"
                          id="keywords" placeholder="Please Enter Keywords"/>
                     </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                      <input type="text" class="form-control" name="title"
                          id="title" placeholder="Please Enter title"/>
                     </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                      <input type="text" class="form-control" name="description"
                          id="description" placeholder="Please Enter description"/>
                     </div>
                 

                  <div id="success"></div>
                   
                  <button type="submit_join_group" class="btn btn-primary" id="submit_seo">Submit</button>
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
<input type="hidden" value="<?php echo site_url('seo/add_seo')?>" id="url" >
    <script type="text/javascript">
$(document).ready(function(){
 // e.preventDefault();
$("#submit_seo").click(function(e){
  e.preventDefault();
   var uri=$("#url").val();
 var page_id=$("#page_id").val();
var keywords=$("#keywords").val();
var title=$("#title").val();
var description=$("#description").val();
 $.ajax({
                    // url:uri+'?state_id='+state_id+'&city_name='+city_name,
                    url:uri+'?page_id='+page_id+'&keywords='+keywords+'&title='+title+'&description='+description,
                    type: 'GET',
                    dataType: 'json',
                    beforeSend:function(){

                    },
                    success:function(data){
                        if(data.message=='true'){

                             $("#success").append('Module Saved Successfully');
                             window.location.href ='<?php echo base_url();?>index.php/seo';
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




 






