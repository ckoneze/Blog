<?php
      $current_date = date('d/m/Y');
      if (isset($_POST['edit_comment']))
      {
        $edit_comm_id=$_POST['comm_id_edit'];
        $edit_comm_postid=$_POST['comm_postid_edit'];
        $edit_comm_autor=$_POST['comm_autor_edit'];
        $edit_comm_email=$_POST['comm_email_edit'];
        $edit_comm_text=$_POST['comm_text_edit'];
        $edit_comm_status=$_POST['comm_status_edit'];
        $edit_comm_date=$_POST['comm_date_edit'];
        
        $sql_edit_comment = "UPDATE comments SET postid='$edit_comm_postid', comm_autor='$edit_comm_autor', comm_email='$edit_comm_email',comm_text='$edit_comm_text',comm_status='$edit_comm_status', comm_date='$edit_comm_date' WHERE id={$edit_comm_id}";
        $result_sql_edit_comment= mysqli_query($dbconnection, $sql_edit_comment);
        if (!$result_sql_edit_comment)
                {
                  die("Error description:" . mysqli_error());
                }
                else
                {
                  echo "Data added successfully";
        header("Location: comment_admin.php");
                }
      }
     ?>

        <div class="modal fade" id="EditComment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header modal-header-warning">
                <h4 class="modal-title" id="exampleModalLongTitle" align="center">Edit comment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="">
                  <div class="form-group">
                  <input type="hidden" class="form-control" id="comm_id_edit" name="comm_id_edit">
                  <input type="hidden" class="form-control" id="comm_postid_edit" name="comm_postid_edit">
                  <input type="hidden" class="form-control" id="comm_autor_edit" name="comm_autor_edit">
                  <input type="hidden" class="form-control" id="comm_email_edit" name="comm_email_edit">
                  <input type="hidden" class="form-control" id="comm_date_edit" name="comm_date_edit">
                </div>
                <div class="form-group">
                  <label for="cat_title_edit" class="col-form-label">Comment:</label>
                  <textarea rows="4" cols="50" class="form-control" id="comm_text_edit" name="comm_text_edit" placeholder="Enter Comment Here" required="" ></textarea>  
                </div>
                
                <div class="col-sm-4">
                    <label for="comm_status_edit" class="col-form-label" >Status:</label><br>
                    <input type="radio" name="comm_status_edit" id="comm_status_edit" value="1" checked=""> Publish
                    <input type="radio" name="comm_status_edit" id="comm_status_edit" value="0"> Draft
                  </div>
                  
              </div>
              <br><br><br>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="edit_comment"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Save</button>
              </div>
              </form>
            </div>
          </div>
        </div>