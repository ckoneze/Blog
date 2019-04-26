<?php 
if (isset($_GET['postid'])) 
{
	$id_post_for_comment = $_GET['postid'];

    $sql_select_comment_for_post = "SELECT * FROM comments WHERE comm_status= 1 AND postid = $id_post_for_comment";
    $result_sql_select_comment_for_post = mysqli_query($dbconnection, $sql_select_comment_for_post);
                while ($rowcomment_for_post = mysqli_fetch_assoc($result_sql_select_comment_for_post))
                {
                  $view_comm_id = $rowcomment_for_post['id'];
                  $view_comm_postid = $rowcomment_for_post['postid'];
                  $view_comm_autor = $rowcomment_for_post['comm_autor'];
                  $view_comm_email = $rowcomment_for_post['comm_email'];
                  $view_comm_text = $rowcomment_for_post['comm_text'];
                  $view_comm_status = $rowcomment_for_post['comm_status'];
                  $view_comm_date = $rowcomment_for_post['comm_date'];
?>
<div class="media mb-4">
          <img class="zoom3" src="admin/images/users/nophoto-default.jpg" alt="" width="50">
          <div class="media-body">
            <h5 class="mt-0"><?php echo $view_comm_autor ?></h5>
            <?php echo $view_comm_text ?>
          </div>
        </div>
<?php 
}
}

 ?>