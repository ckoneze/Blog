<?php 
  include "admin/db_connection.php";
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

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <?php 
        if (isset($_GET['catid'])) 
        {
          $selected_category_page= $_GET['catid'];
          $sql_select_category_page = "SELECT * FROM categories WHERE id = {$selected_category_page}";
          $result_sql_select_category_page = mysqli_query($dbconnection, $sql_select_category_page);
                while ($rowcategorypage = mysqli_fetch_assoc($result_sql_select_category_page))
                {
                  $view_category_id = $rowcategorypage['id'];
                  $view_cat_title = $rowcategorypage['cat_title'];
                }
        }

         ?>

        <h1 class="my-4"><?php echo $view_cat_title; ?>
          <!-- <small>Secondary Text</small>-->
        </h1>
        <?php 
                $sql_select_post = "SELECT * FROM posts WHERE post_status = 1 AND post_category = {$selected_category_page} ORDER BY id desc";
                $result_sql_select_post = mysqli_query($dbconnection, $sql_select_post);
                $post_counter_for_category = 0;
                while ($rowpost = mysqli_fetch_assoc($result_sql_select_post))
                {
                  $post_counter_for_category++;
                  $view_post_id = $rowpost['id'];
                  $view_post_category = $rowpost['post_category'];
                  $view_post_title = $rowpost['post_title'];
                  $view_post_autor = $rowpost['post_autor'];
                  $view_post_date = $rowpost['post_date'];
                  $view_post_edit_date = $rowpost['post_edit_date'];
                  $view_post_image = $rowpost['post_image'];
                  $view_post_text = $rowpost['post_text'];
                  $view_post_tag = $rowpost['post_tag'];
                  $view_post_visit_counter = $rowpost['post_visit_counter'];
                  $view_post_status = $rowpost['post_status'];
                  $view_post_priority = $rowpost['post_priority'];
             ?>
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="admin/images/blog/<?php  echo $view_post_image; ?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?php echo $view_post_title; ?></h2>
            <p class="card-text">
              <?php //echo $view_post_text; 
              echo substr($view_post_text, 0, 400) . "...";?>
            </p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            <img src="admin\images\0.jpg" class="zoom3" alt="User Image" width="50" align="left" hspace="5">
            By <a href="#"><?php echo $view_post_autor; ?></a> <br>Web developer <a href="#">VirtuaPHP</a>
            | <?php echo $view_post_date; ?>
          </div>
        </div>
      <?php
       }

       if ($post_counter_for_category==0) {
         echo "<h1>Sorry. No posts in this category!</h1>";
       }
       ?>


        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

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
  <script src="blog-template/vendor/jquery/jquery.min.js"></script>
  <script src="blog-template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>