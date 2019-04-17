<?php 
  ob_start();
  include "db_connection.php";
?>
<!DOCTYPE html>
<html>
<?php include "layout/head.php"; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include "layout/header.php"; ?>
  <?php include "layout/leftsidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          
           <?php 
             if (isset($_POST['selectOneCheckBoxArray']))
             {
                 //header("Location: index.php");
               foreach ($_POST['selectOneCheckBoxArray'] as $checked_Box_Post_Id)
               {
                $group_options = $_POST['group_options'];
                switch ($group_options) {
                  case '1':
                    $sql_group_publish = "UPDATE posts SET post_status= '{$group_options}' WHERE id={$checked_Box_Post_Id}";
                     $result_sql_group_publish= mysqli_query($dbconnection, $sql_group_publish);
                    break;
                  case '0':
                    $sql_group_unpublish = "UPDATE posts SET post_status= '{$group_options}' WHERE id={$checked_Box_Post_Id}";
                     $result_sql_group_unpublish= mysqli_query($dbconnection, $sql_group_unpublish);
                    break;
                  case 'delete':
                  $sql_group_delete = "DELETE FROM posts WHERE id ={$checked_Box_Post_Id}";
                  $result_sql_group_delete = mysqli_query($dbconnection, $sql_group_delete);
                  header("Location: post_admin.php");
                    # code...
                    break;
                  
                  default:
                    # code...
                    break;
                }
               }
               header("Location: post_admin.php");
             }

              ?>

          
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#InsertPost"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add new post</button>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
          <form action="" method="post">
           <table width=100%>
            <tr>
               <th>
                 <select class="form-control" id="group_options" name="group_options">
                    <option value="" disabled selected>Group action</option>
                    <option value="delete" >Delete</option>
                    <option value="1">Publish</option>
                    <option value="0">Unpublish</option>
            </select>
               </th>
               <th>&nbsp;</th>
               <th>
                  <button class="btn btn-search" type="submit" name="applyed"> Apply</button>
               </th>

               
               
               <th>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script>
                $(document).ready(function(){
                  $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                });
                </script>
                  <input class="col-xs-4" type="text" placeholder="Search" id="myInput" aria-label="Search">
              </th>
              
             </tr>

           </table>
            <br>
          <table class="table table-hover">
            <tr class="info">
              <th style="text-align: center;">
                <input type="checkbox" class="form-check-input" id="selectAllCategoryCheckbox" name="selectAllCategoryCheckbox">
              </th>
              <th style="text-align: center;">Title</th>
              <th style="text-align: center;">Autor</th>
              <th style="text-align: center;">Category</th>
              <th style="text-align: center;">Image</th>
              <th style="text-align: center;"><i class="fa far fa-eye" aria-hidden="true"></i></th>
              <th style="text-align: center;">Status</th>
              <th style="text-align: center;">Comments</th>
              
              <th style="text-align: center;">Edit/Delete</th>
            </tr>
            <?php 
                $counter= 0;
                $sql_select_post = "SELECT * FROM posts ORDER BY id desc";
                $result_sql_select_post = mysqli_query($dbconnection, $sql_select_post);
                while ($rowpost = mysqli_fetch_assoc($result_sql_select_post))
                {
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
                 
                  $counter++;
                  
             ?>
             <tbody id="myTable">
            <tr class="success">
              <td style="text-align: center;">
                <input type="checkbox" class="form-check-input" id="selectOneCheckBoxArray" name="selectOneCheckBoxArray[]" value="<?php echo $view_post_id; ?>">
              </td>
              <td style="text-align: left;"><?php echo $view_post_title ?></td>
              <td style="text-align: center;"><?php echo $view_post_autor ?></td>
              <?php 
                    $sql_select_category_by_id = "SELECT * FROM categories WHERE id ={$view_post_category}";
                    $result_sql_select_category_by_id = mysqli_query($dbconnection, $sql_select_category_by_id);
                     while ($rowcategory_by_id = mysqli_fetch_assoc($result_sql_select_category_by_id))
                      {
                        $view_category_id_by_id = $rowcategory_by_id['id'];
                        $view_cat_title_by_id = $rowcategory_by_id['cat_title'];
                        //$view_cat_desc_by_id = $rowcategory_by_id['cat_desc'];
                      } 
              ?>
              <td style="text-align: center;"><?php echo $view_cat_title_by_id ?></td>
              <td style="text-align: center;"><img  class="zoom" src="images/blog/<?php  echo $view_post_image; ?>" width="50"></td>
              <td style="text-align: center;"><span class="label label-success"><?php echo $view_post_visit_counter ?></span></td>
              <?php 
                if ($view_post_status==1)
                {
               ?>
              <td style="text-align: center;"><span class="label label-success">Published</span></td>
              <?php 
                }
                else
                {
              ?>
              <td style="text-align: center;"><span class="label label-warning">Draft</span></td>
              <?php
                }
              ?>
              <td style="text-align: center;"><span class="label label-success">23584</span></td>
              <td style="text-align: center;">

                <button type="button" name="edit" class="btn btn-warning" data-toggle="modal" data-target="#EditPost" data-post_id_edit="<?= $view_post_id ?>" data-post_category_edit="<?= $view_post_category ?>" data-post_title_edit="<?= $view_post_title ?>" data-post_autor_edit="<?= $view_post_autor ?>" data-post_date_edit="<?= $view_post_date ?>" data-post_edit_date_edit="<?= $view_post_edit_date ?>" data-post_image_edit="<?= $view_post_image ?>" data-post_text_edit="<?= $view_post_text ?>" data-post_tag_edit="<?= $view_post_tag ?>" data-post_visit_counter_edit="<?= $view_post_visit_counter ?>" data-post_status_edit="<?= $view_post_status ?>" data-post_priority_edit="<?= $view_post_priority ?>"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</button>

               <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeletePost" data-post_id_delete="<?= $view_post_id ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</button>
              </td>
            </tr>
            <?php
                } 
             ?>
             </tbody>
          </table>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
     <!-- Modal add new post -->
    <?php
      $current_date = date('d/m/Y');
      if (isset($_POST['save_post']))
      {
        $add_post_category=$_POST['category_id']; //category_id    -select name
        $add_post_title=$_POST['post_title'];
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
                      <label for="post_autor" class="col-form-label">Autor:</label>
                      <input type="text" class="form-control" id="post_autor" name="post_autor">
                    </div>
                    <div class="col-sm-4">
                      <label for="post_date" class="col-form-label">Date:</label>
                      <input type="text" class="form-control" id="post_date" name="post_date" value="<?php echo $current_date; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="post_imagel" class="col-form-label">Image:</label>
                      <input type="file" name="post_image" id="post_image">
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
                    <label for="post_visit_counter" class="col-form-label">Visit counter:</label>
                    <input type="text" class="form-control" id="post_visit_counter" name="post_visit_counter">
                  </div>
                  <div class="col-sm-4">
                    <label for="post_status" class="col-form-label" >Status:</label><br>
                    <input type="radio" name="post_status" id="post_status" value="1" checked=""> Publish
                    <input type="radio" name="post_status" id="post_status" value="0"> Draft
                  </div>
                  <div class="col-sm-4">
                    <label for="post_priority" class="col-form-label">Priority:</label>
                    <input type="text" class="form-control" id="post_priority" name="post_priority">
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
<!-- // Modal add new Post -->
<!-- Modal Delete Post-->
<div class="modal modal-danger fade in" id="DeletePost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
          <?php 
              if (isset($_POST['delete_post_id_btn'])) {
                $delete_post_id_input = $_POST['post_id_delete'];
                $sql_delete_post_id = "DELETE FROM  posts WHERE id ={$delete_post_id_input}";
                $result_sql_delete_post_id = mysqli_query($dbconnection, $sql_delete_post_id);
                header("Location: post_admin.php");
              }
           ?>
    <div class="modal-content">
      <form method="post" action="">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" align="center">Delete post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <input type="hidden" class="form-control" id="post_id_delete" name="post_id_delete">
            <p align="center"><img src="admin-template/images/delete.png" width="25" align="middle">
            Are you sure you want to delete this post?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="glyphicon glyphicon-name"></span>Close</button>
        <button type="submit" name="delete_post_id_btn" class="btn btn-warning"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- // Modal Delete Post-->
    <!-- Modal EDIT  Post -->
    <?php
      $current_date = date('d/m/Y');
      if (isset($_POST['edit_post']))
      {
        $edit_post_id=$_POST['post_id_edit'];
        $edit_post_category=$_POST['post_category_edit'];
        $edit_post_title=$_POST['post_title_edit'];
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


        $sql_edit_post = "UPDATE posts SET post_category='$edit_post_category', post_title='$edit_post_title', post_autor='$edit_post_autor',post_date='$edit_post_date',post_edit_date='$current_date', post_image='$new_post_image',post_text='$edit_post_text', post_tag='$edit_post_tag', post_visit_counter='$edit_post_visit_counter', post_status='$edit_post_status', post_priority = '$edit_post_priority'  WHERE id={$edit_post_id}";
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
              <div class="modal-body">
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
                    <div class="col-sm-4">
                      <label for="post_autor_edit" class="col-form-label">Autor:</label>
                      <input type="text" class="form-control" id="post_autor_edit" name="post_autor_edit">
                    </div>
                    
                  </div><br>
                  <div class="form-group">
                    <input type="hidden" name="post_image_edit1" id="post_image_edit1">
                      <label for="post_imagel" class="col-form-label">Curent post image:</label>
                      <img  class="zoom" src="images/blog/<?php  echo $view_post_image; ?>" width="80"><br>
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
                    <label for="post_status_edit" class="col-form-label" >Status:</label><br>
                    <input type="radio" name="post_status_edit" id="post_status_edit" value="1" checked=""> Publish
                    <input type="radio" name="post_status_edit" id="post_status_edit" value="0"> Draft
                  </div>
                  <div class="col-sm-4">
                    <label for="post_priority_edit" class="col-form-label">Priority:</label>
                    <input type="text" class="form-control" id="post_priority_edit" name="post_priority_edit">
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
<!-- // Modal EDIT  category -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "layout/footer.php"; ?>

  <?php include "layout/rightsidebar.php"; ?>
<!-- ./wrapper -->
<?php include "layout/scripts.php"; ?>



</body>
</html>
