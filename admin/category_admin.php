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
               foreach ($_POST['selectOneCheckBoxArray'] as $checked_Box_Category_Id)
               {
                $group_options = $_POST['group_options'];
                switch ($group_options) {
                  case '1':
                    $sql_group_publish = "UPDATE categories SET cat_status= '{$group_options}' WHERE id={$checked_Box_Category_Id}";
                     $result_sql_group_publish= mysqli_query($dbconnection, $sql_group_publish);
                    break;
                  case '0':
                    $sql_group_unpublish = "UPDATE categories SET cat_status= '{$group_options}' WHERE id={$checked_Box_Category_Id}";
                     $result_sql_group_unpublish= mysqli_query($dbconnection, $sql_group_unpublish);
                    break;
                  case 'delete':
                  $sql_group_delete = "DELETE FROM categories WHERE id ={$checked_Box_Category_Id}";
                  $result_sql_group_delete = mysqli_query($dbconnection, $sql_group_delete);
                  header("Location: category_admin.php");
                    # code...
                    break;
                  
                  default:
                    # code...
                    break;
                }
               }
               header("Location: category_admin.php");
             }

              ?>

          
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#InsertCategory"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add new category</button>
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
              <th style="text-align: center;">No:</th>
              <th style="text-align: center;">Title</th>
              <th style="text-align: center;">Description</th>
              <th style="text-align: center;">Slug</th>
              <th style="text-align: center;">Posts</th>
              <th style="text-align: center;">Status</th>
              <th style="text-align: center;">Edit/Delete</th>
            </tr>
            <?php 
                $counter= 0;
                $sql_select_category = "SELECT * FROM categories ORDER BY id desc";
                $result_sql_select_category = mysqli_query($dbconnection, $sql_select_category);
                while ($rowcategory = mysqli_fetch_assoc($result_sql_select_category))
                {
                  $view_category_id = $rowcategory['id'];
                  $view_cat_title = $rowcategory['cat_title'];
                  $view_cat_desc = $rowcategory['cat_desc'];
                  $view_cat_slug = $rowcategory['cat_slug'];
                  $view_cat_status = $rowcategory['cat_status'];
                  $view_cat_priority = $rowcategory['cat_priority'];
                  $counter++;
                  
             ?>
             <tbody id="myTable">
            <tr class="success">
              <td style="text-align: center;">
                <input type="checkbox" class="form-check-input" id="selectOneCheckBoxArray" name="selectOneCheckBoxArray[]" value="<?php echo $view_category_id; ?>">
              </td>
              <td style="text-align: center;"><?php echo $counter ?></td>
              <td style="text-align: center;"><?php echo $view_cat_title ?></td>
              <td style="text-align: center;"><?php echo $view_cat_desc ?></td>
              <td style="text-align: center;"><?php echo $view_cat_slug ?></td>
              <td style="text-align: center;">55</td>
              <?php 
                if ($view_cat_status==1)
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
              <td style="text-align: center;">

                <button type="button" name="edit" class="btn btn-warning" data-toggle="modal" data-target="#EditCategory" data-category_id_edit="<?= $view_category_id ?>" data-category_title_edit="<?= $view_cat_title ?>" data-cat_desc_edit="<?= $view_cat_desc ?>" data-cat_slug_edit="<?= $view_cat_slug ?>" data-cat_priority_edit="<?= $view_cat_priority ?>"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</button>

               <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteCategory" data-category_id_delete="<?= $view_category_id ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</button>
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
     <!-- Modal add new category -->
    <?php
      $current_date = date('d/m/Y');
      if (isset($_POST['save_category']))
      {
        $add_cat_title=$_POST['cat_title'];
        $add_cat_desc=$_POST['cat_desc'];
        $add_cat_slug=$_POST['cat_slug'];
        $add_cat_date=$_POST['cat_date'];
        $add_cat_edit_date=$_POST['cat_edit_date'];
        $add_cat_status=$_POST['cat_status'];
        $add_cat_priority=$_POST['cat_priority'];

        $add_cat_title = mysqli_real_escape_string($dbconnection, $add_cat_title);
        $add_cat_desc = mysqli_real_escape_string($dbconnection, $add_cat_desc);
        $add_cat_slug = mysqli_real_escape_string($dbconnection, $add_cat_slug);
        $add_cat_status = mysqli_real_escape_string($dbconnection, $add_cat_status);

        $sql_add_category = "INSERT INTO categories(cat_title,cat_desc, cat_slug, cat_date, cat_edit_date, cat_status, cat_priority) VALUES('$add_cat_title', '$add_cat_desc', '$add_cat_slug', '$current_date', '$current_date', '$add_cat_status', '$add_cat_priority')";
        $result_sql_add_category= mysqli_query($dbconnection, $sql_add_category);
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
      <!--
        <div class="modal fade" id="InsertCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      --> 
        <div class="modal fade" id="InsertCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header modal-header-add">
                <h4 class="modal-title" id="exampleModalLongTitle" align="center">Add new category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="">
                <div class="form-group">
                  <label for="cat_title" class="col-form-label">Title:</label>
                  <input type="text" class="form-control" id="cat_title" name="cat_title" placeholder="Enter Title Here" required="">
                </div>
                <div class="form-group">
                  <label for="cat_desc" class="col-form-label">Description:</label>
                  <input type="text" class="form-control" id="cat_desc" name="cat_desc" placeholder="Enter Description Here" required="">
                </div>
                <div class="form-group">
                  <label for="cat_slug" class="col-form-label">Slug:</label>
                  <input type="text" class="form-control" id="cat_slug" name="cat_slug" placeholder="Enter Slug Here" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="cat_status" class="col-form-label" >Status:</label><br>
                    <input type="radio" name="cat_status" id="cat_status" value="1" checked=""> Publish
                    <input type="radio" name="cat_status" id="cat_status" value="0"> Draft
                </div>
                <div class="form-group col-md-6">
                  <label for="cat_priority" class="col-form-label">Category priority:</label>
                  <input type="text" class="form-control" id="cat_priority" name="cat_priority" placeholder="Enter category priority number 0-9" required="">
                </div>
              </div>
              <br><br><br>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="save_category"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Save</button>
              </div>
              </form>
            </div>
          </div>
        </div>
<!-- // Modal add new category -->
<!-- Modal Delete Category-->
<div class="modal modal-danger fade in" id="DeleteCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
          <?php 
              if (isset($_POST['delete_category_id_btn'])) {
                $delete_category_id_input = $_POST['category_id_delete'];
                $sql_delete_category_id = "DELETE FROM  categories WHERE id ={$delete_category_id_input}";
                $result_sql_delete_category_id = mysqli_query($dbconnection, $sql_delete_category_id);
                header("Location: category_admin.php");
              }
           ?>
    <div class="modal-content">
      <form method="post" action="">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" align="center">Delete category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <input type="hidden" class="form-control" id="category_id_delete" name="category_id_delete">
            <p align="center"><img src="admin-template/images/delete.png" width="25" align="middle">
            Are you sure you want to delete this category?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="glyphicon glyphicon-name"></span>Close</button>
        <button type="submit" name="delete_category_id_btn" class="btn btn-warning"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- // Modal Delete Category-->
    <!-- Modal EDIT  category -->
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

        $sql_edit_category = "UPDATE categories SET cat_title='$edit_cat_title', cat_desc='$edit_cat_desc', cat_slug='$edit_cat_slug',cat_date='$edit_cat_date',cat_edit_date='$edit_cat_edit_date', cat_status='$edit_cat_status',cat_priority='$edit_cat_priority'  WHERE id={$edit_cat_id}";
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
              <div class="modal-header modal-header-primary">
                <h4 class="modal-title" id="exampleModalLongTitle" align="center">Add new category</h4>
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
                  <div class="form-group">
                  <label for="cat_priority_edit" class="col-form-label">Category priority:</label>
                  <input type="text" class="form-control" id="cat_priority_edit" name="cat_priority_edit" placeholder="Enter category priority" required="">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="edit_category"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Save</button>
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
