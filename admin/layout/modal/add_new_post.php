<?php
      $current_date = date('d/m/Y');
      if (isset($_POST['save_post']))
      {
        $add_post_category=$_POST['category_id']; //category_id    -select name
        $add_post_title=$_POST['post_title'];
        $add_post_title = mysqli_real_escape_string($dbconnection,$add_post_title);
        $add_post_autor=$_POST['post_autor'];
        $add_post_date=$_POST['post_date'];
        $add_post_edit_date=$current_date;
        //$add_post_image=$_POST['post_image'];
        $image_extension = pathinfo($_FILES["post_image"]["name"], PATHINFO_EXTENSION);
        if ($image_extension=='jpg' || $image_extension=='jpeg' || $image_extension=='png' || $image_extension=='gif') 
        {
          $add_post_image = $_FILES["post_image"]["name"];
          $add_post_image_temp = $_FILES["post_image"]["tmp_name"];
        }
        
        if (empty($add_post_image))
        {
         $add_post_image="nophoto-default.jpg";
        }
         move_uploaded_file($add_post_image_temp,"images/blog/$add_post_image");

        $add_post_text=$_POST['post_text'];
        $add_post_tag=$_POST['post_tag'];
        $add_post_visit_counter=$_POST['post_visit_counter'];
        $add_post_status=$_POST['post_status'];
        $add_post_priority=$_POST['post_priority'];
        

        $sql_add_post = "INSERT INTO posts(post_category,post_title,post_autor,post_date,post_edit_date,post_image,post_text,post_tag,post_visit_counter,post_status,post_priority) VALUES('$add_post_category', '$add_post_title', '$add_post_autor', '$current_date', '$current_date', '$add_post_image', '$add_post_text' , '$add_post_tag','$add_post_visit_counter','$add_post_status', '$add_post_priority')";
        $result_sql_add_post= mysqli_query($dbconnection, $sql_add_post);
        if (!$sql_add_post)
                {
                  die("Error description:" . mysqli_error());
                }
                else
                {
                  echo "Data added successfully";
                  header("Location: post_admin.php");
                }
      }
     ?>
      <!--
        <div class="modal fade" id="InsertCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      --> 
        <div class="modal fade bd-example-modal-lg" id="InsertPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header modal-header-add">
                <h4 class="modal-title" id="exampleModalLongTitle" align="center"><i class="fa fa-file"></i> Add new post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="post_title" class="col-form-label">Title:</label>
                  <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Enter Title Here" required="">
                </div>
                <script>
//function myFunction() {
  //alert("Hello! I am an alert box!");
}
</script>
                <div class="row">
                    <div class="col-sm-4">
                      <label for="category_id" class="col-form-label">Category:</label>
                      <select class="form-control" name="category_id" id="category_id">
                        <?php 
                            $sql_select_category = "SELECT * FROM categories ORDER BY id DESC";
                            $result_sql_select_category = mysqli_query($dbconnection, $sql_select_category);
                            while ($rowcategory = mysqli_fetch_assoc($result_sql_select_category))
                            {
                              $view_category_id = $rowcategory['id'];
                              $view_cat_title = $rowcategory['cat_title'];
                              $view_cat_desc = $rowcategory['cat_desc'];
                        ?>
                        <option value="<?php echo $view_category_id; ?>"><?php echo $view_cat_title; ?></option>
                        <?php
                            } 
                         ?>
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <label for="post_autor" class="col-form-label">Author:</label>
                      <p><b><?php echo $success_login_name_admin; ?></b>  &nbsp;<img src="images/users/<?php echo $success_login_image_admin; ?>" class="zoom3" alt="User Image" width="50"></p>
                      <input type="hidden" class="form-control" id="post_autor" name="post_autor" value="<?php echo $success_login_id; ?>">
                    </div>
                    <div class="col-sm-4">
                      <label for="post_date" class="col-form-label">Date:</label>
                      <input type="text" class="form-control" id="post_date" name="post_date" value="<?php echo $current_date; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="post_imagel" class="col-form-label">Image:</label>
                      <input type="file" name="post_image" id="post_image" accept="image/*">
                  </div>
                  <div class="form-group shadow-textarea">
                    <label for="post_text" class="col-form-label">Text:</label>
                    <textarea name="post_text" id="post_text" placeholder="Enter Post Text Here" required></textarea>
                  </div>
                    <script>
                       CKEDITOR.replace('post_text');
                    </script>
                  <div class="form-group">
                    <label for="post_tag" class="col-form-label">Tags:</label>
                    <input type="text" class="form-control" id="post_tag" name="post_tag">
                  </div>
                  <div class="row">
                 
                  <div class="col-sm-4">
                    <label for="post_status" class="col-form-label" >Status:</label><br>
                    <input type="radio" name="post_status" id="post_status" value="1" checked=""> Publish
                    <input type="radio" name="post_status" id="post_status" value="0"> Draft
                  </div>
                  <div class="col-sm-2">
                    <label for="post_priority" class="col-form-label">Priority:</label>
                    <input type="text" class="form-control" id="post_priority" name="post_priority" value="1">
                  </div>
                   <div class="col-sm-4">
                    
                    <input type="hidden" class="form-control" id="post_visit_counter" name="post_visit_counter" value="0">
                  </div>
                </div>
                
              </div>
              <br><br><br>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="save_post"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Save</button>
              </div>
              </form>
            </div>
          </div>
        </div>