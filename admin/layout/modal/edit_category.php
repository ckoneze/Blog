<?php
      $current_date = date('d/m/Y');
      if (isset($_POST['edit_category']))
      {
        $edit_cat_id=$_POST['cat_id_edit'];
        $edit_cat_title=$_POST['cat_title_edit'];
        $edit_cat_desc=$_POST['cat_desc_edit'];
        $edit_cat_slug=$_POST['cat_slug_edit'];
        $edit_cat_date=$_POST['cat_date_edit'];
        $edit_cat_edit_date=$_POST['cat_edit_date_edit'];
        $edit_cat_status=$_POST['cat_status_edit'];
        $edit_cat_priority=$_POST['cat_priority_edit'];

        $sql_edit_category = "UPDATE categories SET cat_title='$edit_cat_title', cat_desc='$edit_cat_desc', cat_slug='$edit_cat_slug',cat_date='$edit_cat_date',cat_edit_date='$current_date', cat_status='$edit_cat_status',cat_priority='$edit_cat_priority'  WHERE id={$edit_cat_id}";
        $result_sql_add_category= mysqli_query($dbconnection, $sql_edit_category);
        if (!$result_sql_add_category)
                {
                  die("Niste snimili u bazu" . mysqli_error());
                }
                else
                {
                  echo "Uspiješno snimljeno";
        header("Location: category_admin.php");
                }
      }
     ?>

        <div class="modal fade" id="EditCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header modal-header-warning">
                <h4 class="modal-title" id="exampleModalLongTitle" align="center">Edit category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="">
                  <div class="form-group">
                  <input type="hidden" class="form-control" id="cat_id_edit" name="cat_id_edit">
                </div>
                <div class="form-group">
                  <label for="cat_title_edit" class="col-form-label">Title:</label>
                  <input type="text" class="form-control" id="cat_title_edit" name="cat_title_edit" placeholder="Enter Title Here" required="">
                </div>
                <div class="form-group">
                  <label for="cat_desc_edit" class="col-form-label">Description:</label>
                  <input type="text" class="form-control" id="cat_desc_edit" name="cat_desc_edit" placeholder="Enter Description Here" required="">
                </div>
                <div class="form-group">
                  <label for="cat_slug_edit" class="col-form-label">Slug:</label>
                  <input type="text" class="form-control" id="cat_slug_edit" name="cat_slug_edit" placeholder="Enter Slug Here" required="">
                </div>
                <div class="col-sm-4">
                    <label for="cat_status_edit" class="col-form-label" >Status:</label><br>
                    <input type="radio" name="cat_status_edit" id="cat_status_edit" value="1" checked=""> Publish
                    <input type="radio" name="cat_status_edit" id="cat_status_edit" value="0"> Draft
                  </div>
                  <div class="form-group col-md-6">
                  <label for="cat_priority" class="col-form-label">Category priority:</label>
                  <input type="text" class="form-control" id="cat_priority_edit" name="cat_priority_edit" placeholder="Enter category priority number 0-9" required="">

                  <input type="hidden" class="form-control" id="cat_date_edit" name="cat_date_edit" required="">
                </div>
              </div>
              <br><br><br>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="edit_category"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Save</button>
              </div>
              </form>
            </div>
          </div>
        </div>