<?php
 if(empty($records)){
  $pro_name=getProperty_name_byid($pro_id);
     echo "<div class='alert alert-danger'>Sorry no images found for property $pro_name;</div>";
   } else{
   ?>
<div class="msg">All image list of <?php echo getProperty_name_byid($records[0]['pro_id']);?></div>
     <?php } ?>
<?php foreach ($records as $key) {
  $image_id=$key['id'];
	$images=$key['property_images'];
  $pro_id=$key['pro_id'];
  $dev_id=$key['pro_id'];
    ?>
    <!DOCTYPE html>
<html>
<head>
<style>
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    padding-top:20px;
    float: left;
    width: 180px;
} 
div.msg {
    font-family:Georgia,serif;
  color:#4E443C;
  font-variant: small-caps; text-transform: none; font-weight: 100; margin-bottom: 0;
} 


div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
</head>
<body>


<div class="img">
  <a target="_blank" href="img_fjords.jpg">
    <img src="<?php echo base_url($images);?>" alt="Trolltunga Norway" width="300" height="200">
  </a>
<div align="center"><a title="if you want to update this photo, click it" href="<?php echo site_url('search_photo_for_property/edit_pro_pic/'.$pro_id.'/'.$image_id);?>" class="open-dialog-edit btn btn-info btn-rad" data-id=""><i class="icon-book"></i>Edit</a></div>

</div>




</body>
<?php }
?>
