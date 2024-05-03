


<div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Users</h6>
                            <form action="" method="post">

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="fullname" value="<?php echo $response->fullname;?>">
                                    <label for="floatingInput">Full Name</label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="username" value="<?php echo $response->username;?>" >
                                    <label for="floatingInput">User Name</label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" value="<?php echo $response->email;?>" >
                                    <label for="floatingInput">EMail</label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="mobile" value="<?php echo $response->mobile;?>">
                                    <label for="floatingInput">Mobile No.</label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="role_as" value="<?php echo $response->role_as;?>">
                                    <label for="floatingInput">Role_as</label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" id="floatingPassword"
                                    placeholder="Password"value="<?php echo $response->passwprd;?>">
                                    <label for="floatingPassword">Password</label>
                                </div>    
                                
                                <button  name="update-reg" type='submit' value="<?php echo $response->id;?>" class="btn btn-primary mr-2">Update</button>
                            </div>
                        </div>
                    </form>