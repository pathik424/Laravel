
<?php
// echo "<pre>";
// print_r($response);
// echo "</pre>";

?>





<form action="" method="post" enctype="multipart/form-data">


  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="name" value="<?php echo $response->name;  ?>">
  </div>

  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price" value="<?php echo $response->price;  ?>">
  </div>

  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" name="image" >
  </div>

  <div class="form-group mt-3 mb-3">    
    <img src="<?php echo $response->image;  ?>" alt="No image found" height="100px" width="100px">
  </div>

  <input type="hidden" name="old_profile_pic" id="old_profile_pic" value="<?php echo $response->image;  ?>">
  
  <button type="submit" class="btn btn-primary" name="update" value="<?php echo $response->id;  ?>">Submit</button>
</form>