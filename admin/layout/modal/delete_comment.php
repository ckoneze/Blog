<div class="modal modal-danger fade in" id="DeleteComment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
          <?php 
              if (isset($_POST['delete_comment_id_btn'])) {
                $delete_comment_id_input = $_POST['comment_id_delete'];
                $sql_delete_comment_id = "DELETE FROM  comments WHERE id ={$delete_comment_id_input}";
                $result_sql_delete_comment_id = mysqli_query($dbconnection, $sql_delete_comment_id);
                header("Location: comment_admin.php");
              }
           ?>
    <div class="modal-content">
      <form method="post" action="">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" align="center">Delete comment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <input type="hidden" class="form-control" id="comment_id_delete" name="comment_id_delete">
            <p align="center"><img src="admin-template/images/delete.png" width="25" align="middle">
            Are you sure you want to delete this comment?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="glyphicon glyphicon-name"></span>Close</button>
        <button type="submit" name="delete_comment_id_btn" class="btn btn-warning"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>