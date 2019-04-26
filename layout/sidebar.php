<div class="col-md-4">
          <?php 
            if (!isset($_SESSION['type']))
            {
           ?>
        <div class="login-form">
    <!--<form action="/examples/actions/confirmation.php" method="post">--> 
        <h2 class="text-center">Sign in</h2>  
         <!-- 
        <div class="text-center social-btn">
            <a href="#" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b></a>
            <a href="#" class="btn btn-info btn-block"><i class="fa fa-twitter"></i> Sign in with <b>Twitter</b></a>
      <a href="#" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>
        </div>--> 
    <div class="or-seperator"><i></i></div>
    <form action="layout/login.php" method="post">
        <div class="form-group">
          <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
            </div>
        </div>
    <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" name="login" class="btn btn-success btn-block login-btn">Sign in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right text-success">Forgot Password?</a>
        </div>  
        
    </form>
    <div class="hint-text small">Don't have an account? <a href="#" class="text-success">Register Now!</a></div>
</div>
 <?php 
            }
            else
            {
              $success_login_username = $_SESSION['username'];
           ?>
<div class="card my-4">
        <div class="card-header">
          <p align="center"><img  class="zoom3" src="https://pre00.deviantart.net/22e7/th/pre/i/2018/091/2/b/avatar_profil_by_jeje90an-dc7nava.jpg" width="110"></p>
          <p align="center"><b>Welcome <?php echo $success_login_username ?></b></p>
        </div>
        <div class="card-header">
          
          <!-- Status -->
          <p align="center">
          <a href="admin/" class="btn btn-default btn-flat">Administration</a>
          <a href="layout/logout.php" class="btn btn-default btn-flat">Sign out</a></p>
        </div>
      </div>
      <?php 
            }
          ?>
   

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <form action="search.php" method="post">
            <div class="input-group">
              <input type="text" class="form-control" name="search_text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" name="search" type="submit">Go!</button>
              </span>
            </div>
            </form>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <?php 
                      $sql_select_category_wiget = "SELECT * FROM categories";
                      $result_sql_select_category_wiget = mysqli_query($dbconnection, $sql_select_category_wiget);

                       $category_counter= 0;
                        while ($rowcategory_wiget= mysqli_fetch_assoc( $result_sql_select_category_wiget)) 
                       {
                        $category_counter++;
                        $id_category_wiget = $rowcategory_wiget['id'];
                        $title_category_wiget = $rowcategory_wiget['cat_title'];


                   ?>
                  <li>
                    <a href="category.php?catid=<?=$id_category_wiget; ?>">
                       <?php 
                       if ($category_counter % 2 != 0)
                       {
                          echo $title_category_wiget;
                       }
                      

                       ?>
                      </a>
                    </li>
                    <?php 
                        }
                    ?>

                  
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <?php 
                      $sql_select_category_wiget1 = "SELECT * FROM categories";
                      $result_sql_select_category_wiget1 = mysqli_query($dbconnection, $sql_select_category_wiget1);

                       $category_counter1= 0;
                        while ($rowcategory_wiget1= mysqli_fetch_assoc( $result_sql_select_category_wiget1)) 
                       {
                        $category_counter1++;
                        $id_category_wiget1 = $rowcategory_wiget1['id'];
                        $title_category_wiget1 = $rowcategory_wiget1['cat_title'];

                   ?>
                  <li>
                    <a href="category.php?catid=<?=$id_category_wiget1; ?>">
                       <?php 
                       if ($category_counter1 % 2 == 0)
                       {
                          echo $title_category_wiget1;
                       }
                      

                       ?>
                      </a>
                    </li>
                    <?php 
                        }
                    ?>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Popular posts</h5>
          <?php 
                $counter_popular= 0;
                $sql_select_post_popular = "SELECT * FROM posts WHERE post_status = 1 ORDER BY post_visit_counter DESC LIMIT 0,5";
                $result_sql_select_post_popular = mysqli_query($dbconnection, $sql_select_post_popular);
                while ($rowpost_popular = mysqli_fetch_assoc($result_sql_select_post_popular))
                {
                  $view_post_id_popular = $rowpost_popular['id'];
                  $view_post_category_popular = $rowpost_popular['post_category'];
                  $view_post_title_popular = $rowpost_popular['post_title'];
                  $view_post_autor_popular = $rowpost_popular['post_autor'];
                  $view_post_date_popular = $rowpost_popular['post_date'];
                  $view_post_edit_date_popular = $rowpost_popular['post_edit_date'];
                  $view_post_image_popular = $rowpost_popular['post_image'];
                  $view_post_text_popular = $rowpost_popular['post_text'];
                  $view_post_tag_popular = $rowpost_popular['post_tag'];
                  $view_post_visit_counter_popular = $rowpost_popular['post_visit_counter'];
                  $view_post_status_popular = $rowpost_popular['post_status'];
                  $view_post_priority_popular = $rowpost_popular['post_priority'];
                 
                  $counter_popular++;
                  
             ?>
          <div class="card-body">
            <img class="card-img-top" src="admin/images/blog/<?php echo $view_post_image_popular;?>" alt="<?php echo $view_post_image_popular;?>">
            <b>
              <a href="post.php?postid=<?=$view_post_id_popular ?>"style="color: #cc0000"><?php echo $view_post_title_popular; ?></a></b>
          </div>
          <?php } ?>
        </div>
   </div>