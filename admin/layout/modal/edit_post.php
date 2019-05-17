<?php
      $current_date = date('d/m/Y');
      if (isset($_POST['edit_post']))
      {
        $edit_post_id=$_POST['post_id_edit'];
        $edit_post_category=$_POST['post_category_edit'];
        $edit_post_title=$_POST['post_title_edit'];
        $edit_post_title = mysqli_real_escape_string($dbconnection,$edit_post_title);
        $edit_post_autor=$_POST['post_autor_edit'];
        $edit_post_date=$_POST['post_date_edit'];
        $edit_post_edit_date=$_POST['post_edit_date_edit'];
        //$edit_post_image=$_POST['post_image_edit'];
        $new_post_image = $_FILES["new_post_image"]["name"];
        $new_post_image_temp = $_FILES["new_post_image"]["tmp_name"];
        move_uploaded_file($new_post_image_temp,"images/blog/$new_post_image");
        if (empty($new_post_image))
        {
         $new_post_image=$_POST['post_image_edit1'];
        }

        $edit_post_text=$_POST['post_text_edit'];
        $edit_post_tag=$_POST['post_tag_edit'];
        $edit_post_visit_counter=$_POST['post_visit_counter_edit'];
        $edit_post_status=$_POST['post_status_edit'];
        $edit_post_priority=$_POST['post_priority_edit'];


        $sql_edit_post = "UPDATE posts SET post_category='$edit_post_category', post_title='$edit_post_title', post_autor='$edit_post_autor',post_date='$edit_post_date',post_edit_date='$current_date', post_image='$new_post_image',post_text='$edit_post_text', post_tag='$edit_post_tag', post_visit_counter='$edit_post_visit_counter', post_status ='$edit_post_status', post_priority = '$edit_post_priority' WHERE id={$edit_post_id}";
        $result_sql_edit_post= mysqli_query($dbconnection, $sql_edit_post);
        if (!$result_sql_edit_post)
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

        <div class="modal fade bd-example-modal-lg" id="EditPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header modal-header-warning">
                <h4 class="modal-title" id="exampleModalLongTitle" align="center"><i class="fa fa-pencil-square-o"></i> Edit post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="demo" onmouseover="mouseOver(this)">
                <form method="post" action="" enctype="multipart/form-data">
                  <div class="form-group">
                  <input type="hidden" class="form-control" id="post_id_edit" name="post_id_edit">
                </div>
                <div class="form-group">
                  <label for="post_title_edit" class="col-form-label">Title:</label>
                  <input type="text" class="form-control" id="post_title_edit" name="post_title_edit" placeholder="Enter Title Here" required="">
                </div>
                <div class="row">
                    <div class="col-sm-4">
                      <label for="category_id" class="col-form-label">Category:</label>
                      <select class="form-control" name="post_category_edit" id="post_category_edit">
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
                    <div class="col-sm-4" id="author">
                      <!--
                      <label for="post_autor_edit" class="col-form-label">Autor:</label>-->
                      <input type="hidden" class="form-control" id="post_autor_edit" name="post_autor_edit">
                    </div>
                    
                  </div><br>
                  <div class="form-group" id="foo">
                    <input type="hidden" name="post_image_edit1" id="post_image_edit1">
                    
 <script>
function mouseOver() {
   var image = document.getElementById('image');
   var slikazaprikaz = document.getElementById("post_image_edit1").value; 
   var putanja = 'images/blog/';
   image.setAttribute('src', putanja + slikazaprikaz);
   //alert(slikazaprikaz);
}
//function bigImg() {
  // var image = document.getElementById('image');
   //image.setAttribute('src', 'images/blog/nophoto-default1.jpg');
//}
</script>
    
                     <img  class="zoom" src="" id="image" name="image" width="50">
                     
                    <br><br>
                      <input type="file" name="new_post_image" id="new_post_image">

                  </div>
                  <div class="form-group shadow-textarea">
                    <label for="post_text_edit" class="col-form-label">Text:</label>
                    <textarea name="post_text_edit" id="post_text_edit" placeholder="Enter Post Text Here" required></textarea>
                  </div>
                    <script>
                       CKEDITOR.replace('post_text_edit');
                    </script>
                  <div class="form-group">
                    <label for="post_tag_edit" class="col-form-label">Tags:</label>
                    <input type="text" class="form-control" id="post_tag_edit" name="post_tag_edit">
                  </div>
                  <div class="row">
                  <div class="col-sm-4">
                    <label for="post_visit_counter_edit" class="col-form-label">Visit counter:</label>
                    <input type="text" class="form-control" id="post_visit_counter_edit" name="post_visit_counter_edit">
                  </div>
                  <div class="col-sm-4">
                    <label for="post_status_edit1" class="col-form-label" >Status:</label><br>
                    <input type="radio" name="post_status_edit" value="1" checked=""> Publish
                    <input type="radio" name="post_status_edit" value="0"> Draft
                  </div>
                  <div class="col-sm-4">
                    <label for="post_priority_edit" class="col-form-label">Priority:</label>
                    <input type="text" class="form-control" id="post_priority_edit" name="post_priority_edit">
                    <input type="hidden" name="post_date_edit" id="post_date_edit">
                  </div>
                </div>
                
              </div>
              <br><br><br>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="edit_post"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Save</button>
              </div>
              </form>
            </div>
          </div>
        </div>