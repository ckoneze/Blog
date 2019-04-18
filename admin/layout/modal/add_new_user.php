<?php
      $current_date = date('d/m/Y');
      if (isset($_POST['save_user']))
      {
        $add_user_name=$_POST['user_name'];
        $add_user_username=$_POST['user_username'];
        $add_user_email=$_POST['user_email'];
        $add_user_password=$_POST['user_password'];
        $add_user_gender=$_POST['user_gender'];
        $add_user_image=$_POST['user_image'];
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
                <form method="post" action="">
                <div class="form-group col-md-6">
                  <label for="cat_title" class="col-form-label"> Name:</label>
                  <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter Name Here" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="cat_title" class="col-form-label"> Username:</label>
                  <input type="text" class="form-control" id="user_username" name="user_username" placeholder="Enter Username Here" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="cat_title" class="col-form-label"> Email:</label>
                  <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Enter Email Here" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="cat_title" class="col-form-label"> Gender:</label><br>
                  <label><input type="radio" name="optradio" checked>Option 1</label>
                  <label><input type="radio" name="optradio" checked>Option 1</label>
                </div>
                <div class="form-group">
                  <label for="cat_desc" class="col-form-label">Description:</label>
                  <input type="text" class="form-control" id="cat_desc" name="cat_desc" placeholder="Enter Description Here" required="">
                </div>
                <div class="form-group">
                  <label for="cat_slug" class="col-form-label">Slug:</label>
                  <input type="text" class="form-control" id="cat_slug" name="cat_slug" placeholder="Enter Slug Here" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="cat_status" class="col-form-label" >Status:</label><br>
                    <input type="radio" name="cat_status" id="cat_status" value="1" checked=""> Publish
                    <input type="radio" name="cat_status" id="cat_status" value="0"> Draft
                </div>
                <div class="form-group col-md-6">
                  <label for="cat_priority" class="col-form-label">Category priority:</label>
                  <input type="text" class="form-control" id="cat_priority" name="cat_priority" placeholder="Enter category priority number 0-9" required="">
                </div>
              </div>
              <br><br><br>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="save_user"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Save</button>
              </div>
              </form>
            </div>
          </div>
        </div>