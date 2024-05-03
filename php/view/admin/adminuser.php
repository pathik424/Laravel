<div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">
<div class="row">

<a href="admin-adduser" type="button" class="btn btn-primary mb-4">Add user</a>



<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full_Name</th>
      <th scope="col">User_Name</th>
      <th scope="col">Email_Id</th>
      <th scope="col">Mobile_Number</th>

      <!-- <th scope="col">Password</th> -->
      <th scope="col">Role_as</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    if(isset($user))
    {
        foreach($user as $value)
        { ?>

        <tr>
         <td><?php echo $value->id ?></td>
         <td><?php echo $value->fullname ?></td>
         <td><?php echo $value->username ?></td>
         <td><?php echo $value->email ?></td>
         <td><?php echo $value->mobile ?></td>
         <td><?php echo $value->role_as ?></td>
         <td>
           <form action="admin-update" method="post" enctype="multipart/form-data">
              <button class="btn-primary btn-sm" name="update-btn" value="<?php echo $value->id ?>">Update</button>
            </form>
              <form action="" method="post">
                <button type="submit" name="delete_btn" value="<?php echo $value->id ?>" class="mt-2 btn-danger btn-sm">Delete</button>
              </form>
            </td>
        </tr>
        <?php } 
                    }
                    else 
                    {
                      echo "<tr>
                      <th style='text-align:center;' colspan=8>No Data Found</th>
                      </tr>";
                    }?>
      
      
      
      
      
      
</tbody>
</table>
</div>
</div>
 </div>