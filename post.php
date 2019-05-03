<?php 
ob_start();
  include "admin/db_connection.php";
?>
<?php
      
      if (isset($_GET['postid'])) 
      {
        $edit_post_id_visit=$_GET['postid'];

        $sql_select_post_visit = "SELECT * FROM posts WHERE id={$edit_post_id_visit}";
                $result_sql_select_post_visit = mysqli_query($dbconnection, $sql_select_post_visit);
                while ($rowpost_visit = mysqli_fetch_assoc($result_sql_select_post_visit))
                {
                  
                  $view_post_visit_counter_all_visits = $rowpost_visit['post_visit_counter'];

                }


        $sql_edit_post_visit = "UPDATE posts SET post_visit_counter='$view_post_visit_counter_all_visits'+1 WHERE id={$edit_post_id_visit}";
        $result_sql_edit_post_visit= mysqli_query($dbconnection, $sql_edit_post_visit);
        if (!$result_sql_edit_post_visit)
                {
                   die("Error description:" . mysqli_error());
                }
                else
                {
                  //echo "Data added successfully";
                  //header("Location: post_admin.php");
                }
      }
     ?>
<!DOCTYPE html>
<html lang="en">

<?php include "layout/head.php"; ?>

<body>

  <!-- Navigation -->
  <?php include "layout/topnavigation.php"; ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <?php 
      if (isset($_GET['postid'])) 
      {
        $selected_post_page= $_GET['postid'];

                $sql_select_post_page = "SELECT * FROM posts WHERE id={$selected_post_page}";
                $result_sql_select_post_page = mysqli_query($dbconnection, $sql_select_post_page);
                while ($rowpostpage = mysqli_fetch_assoc($result_sql_select_post_page))
                {
                  $view_post_id = $rowpostpage['id'];
                  $view_post_category = $rowpostpage['post_category'];
                  $view_post_title = $rowpostpage['post_title'];
                  $view_post_autor = $rowpostpage['post_autor'];
                  $view_post_date = $rowpostpage['post_date'];
                  $view_post_edit_date = $rowpostpage['post_edit_date'];
                  $view_post_image = $rowpostpage['post_image'];
                  $view_post_text = $rowpostpage['post_text'];
                  $view_post_tag = $rowpostpage['post_tag'];
                  $view_post_visit_counter = $rowpostpage['post_visit_counter'];
                  $view_post_status = $rowpostpage['post_status'];
                  $view_post_priority = $rowpostpage['post_priority'];
                }
      }
      else
      {
        header("Location: index.php");
      }


       ?>
      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?php echo $view_post_title ?></h1>
        <div id="p11"></div>
        <!-- Author -->
        <?php 
                $sql_select_users_article = "SELECT * FROM users WHERE id={$view_post_autor}";
                $result_sql_select_users_article = mysqli_query($dbconnection, $sql_select_users_article);
                while ($rowusers_article = mysqli_fetch_assoc($result_sql_select_users_article))
                {
                  $view_users_id = $rowusers_article['id'];
                  $view_users_name = $rowusers_article['name'];
                  $view_users_image = $rowusers_article['image'];
                } 
             ?>
        <p class="lead">
         <img src="admin/images/users/<?php echo $view_users_image; ?>" class="zoom3" alt="User Image" width="50" align="left" hspace="5">
            By <a href="#"><?php echo $view_users_name; ?></a> <br>Web developer <a href="#">VirtuaPHP</a>
          
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?php echo $view_post_date; ?></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="admin/images/blog/<?php  echo $view_post_image; ?>" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead"><?php echo $view_post_text; ?></p>
        <hr>

        <!-- Comments Form -->
        <?php include "layout/comment_form.php" ?>

        <!-- Single Comment -->
        <?php include "layout/comments.php" ?>

        

      </div>

      <!-- Sidebar Widgets Column -->
      <?php include "layout/sidebar.php"; ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include "layout/footer.php"; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
