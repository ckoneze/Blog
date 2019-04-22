<?php
      $current_date = date('d/m/Y');
      if (isset($_POST['save_user']))
      {
        $add_user_name=$_POST['user_name'];
        $add_user_username=$_POST['user_username'];
        $add_user_email=$_POST['user_email'];
        $add_user_password=$_POST['user_password'];
        $add_user_gender=$_POST['user_gender'];
        //$add_user_image=$_POST['user_image'];

        $image_extension = pathinfo($_FILES["user_image"]["name"], PATHINFO_EXTENSION);
        if ($image_extension=='jpg' || $image_extension=='jpeg' || $image_extension=='png' || $image_extension=='gif') 
        {
          $add_user_image = $_FILES["user_image"]["name"];
          $add_user_image_temp = $_FILES["user_image"]["tmp_name"];
        }
        
        if (empty($add_user_image))
        {
         $add_user_image="nophoto-default.jpg";
        }
         move_uploaded_file($add_user_image_temp,"images/users/$add_user_image");

        $add_user_code=$_POST['user_code'];
        $add_user_status=$_POST['user_status'];
        $add_user_type=$_POST['user_type'];

        $sql_add_user = "INSERT INTO users(name,username,email,password,gender,image,code,status,type) VALUES('$add_user_name', '$add_user_username', '$add_user_email', '$add_user_password', '$add_user_gender', '$add_user_image', '$add_user_code', '$add_user_status', '$add_user_type')";
        $result_sql_add_user= mysqli_query($dbconnection, $sql_add_user);
        if (!$result_sql_add_user)
                {
                  die("Error description:" . mysqli_error());
                }
                else
                {
                  echo "Data added successfully";
                  header("Location: users_admin.php");
                }
      }
     ?>
      <!--
        <div class="modal fade" id="InsertCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      --> 
        <div class="modal fade" id="InsertUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header modal-header-add">
                <h4 class="modal-title" id="exampleModalLongTitle" align="center"><i class="fa fa-user"></i> Add new user</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="" enctype="multipart/form-data" oninput='up2.setCustomValidity(password.value != user_password.value ? "Passwords do not match." : "")'>
 
                <div class="form-group col-md-4">
                  <label for="cat_title" class="col-form-label"> Name:</label>
                  <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter Name Here" required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="cat_title" class="col-form-label"> Username:</label>
                  <input type="text" class="form-control" id="user_username" name="user_username" placeholder="Enter Username Here" required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="cat_title" class="col-form-label"> Email:</label>
                  <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter Email Here" data-error="Bruh, that email address is invalid" required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="user_type" class="col-form-label"> User type:</label>
                      <select class="form-control" id="user_type" name="user_type">
                    <option value="" disabled selected>Select...</option>
                    <option value="0" >User</option>
                    <option value="1">Administrator</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="user_password" class="col-form-label"> Confirm Password:</label>
                  <input type="password" data-minlength="6" class="form-control" name="user_password" id="user_password" placeholder="Enter Password Here" required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="user_password_reapet" class="col-form-label"> Password:</label>
                  <input type="password" data-minlength="6" class="form-control" name="inputPasswordConfirm" id="inputPasswordConfirm" data-match="#user_password" data-match-error="Whoops, these don't match" placeholder="Confirm password" required><div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-md-4">
                      <label for="user_imagel" class="col-form-label">Image:</label>
                      <input type="file" name="user_image" id="user_image">
                </div>
                <div class="form-group col-md-4">
                  <label for="cat_title" class="col-form-label"> Gender:</label><br>
                  <label><input type="radio" name="user_gender" id="user_gender" value="1" checked> <i class="fa fa-female" aria-hidden="true"></i></label>
                  <label><input type="radio" name="user_gender" id="user_gender" value="2"> <i class="fa fa-male" aria-hidden="true"></i></label>
                </div>
                <div class="form-group col-md-4">
                    <label for="user_status" class="col-form-label" > Status:</label><br>
                    <input type="radio" name="user_status" id="user_status" value="1" checked=""> Active
                    <input type="radio" name="user_status" id="user_status" value="0"> Pending
                </div>
                
              </div>
              <br>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="save_user"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Save</button>
              </div>
              </form>
            </div>
          </div>
        </div>