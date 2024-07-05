
            
          

<div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">
<div class="row">




<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    if(isset($contact))
    {
        foreach($contact as $value)
        { ?>

        <tr>
         <td><?php echo $value->ContID ?></td>
         <td><?php echo $value->Name ?></td>
         <td><?php echo $value->email ?></td>
         <td><?php echo $value->mobile ?></td>
         <td><?php echo $value->subject ?></td>
         <td><?php echo $value->message ?></td>
         <td>
         </form>
              <form action="" method="post">
                <button type="submit" name="delete_btn" value="<?php echo $value->ContID ?>" class="mt-2 btn-danger btn-sm">Delete</button>
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