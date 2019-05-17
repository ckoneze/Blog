<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
          <img src="images/users/<?php echo $success_login_image_admin; ?>" class="zoom3" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $success_login_name_admin; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="category_admin.php"><i class="fa fa-server"></i></i> Category</a></li>
            <li><a href="post_admin.php"><i class="fa fa-file"></i> Post</a></li>
            <li><a href="users_admin.php"><i class="fa fa-users"></i> Users</a></li>
            <li><a href="comment_admin.php"><i class="fa fa-comments"></i> Comments</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
