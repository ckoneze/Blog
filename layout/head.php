 <?php 
 if (isset($_SESSION['type']))
 {
   # code...

              $success_login_id = $_SESSION['id'];
              $success_login_name_admin = $_SESSION['name'];
              $success_login_username_admin = $_SESSION['username'];
              $success_login_email_admin = $_SESSION['email'];
              $success_login_type_password_admin = $_SESSION['password'];
              $success_login_gender_admin = $_SESSION['gender'];
              $success_login_image_admin = $_SESSION['image'];
              $success_login_code_admin = $_SESSION['code'];
              $success_login_status_admin = $_SESSION['status'];
              $success_login_type_admin = $_SESSION['type'];
   }
   ?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>VirtuaPHP - Blog Home</title>

  <!-- Bootstrap core CSS -->
  <link href="blog-template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="blog-template/css/blog-home.css" rel="stylesheet">
  <link href="css/blog-post.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!-- Ionicons -->
  <link rel="stylesheet" href="admin/admin-template/bower_components/Ionicons/css/ionicons.min.css">

<style>
.zoom1 {
  padding: 50px;
  background-color: white;
  transition: transform .5s; /* Animation */
  width: 1500px;
  height: 1500px;
  margin: 0 auto;
}

.zoom1:hover {
  transform: scale(2.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
 .zoom
  {
    border-radius: 50%;
    transition: all 0.5s;
  }
  .zoom:hover
  {
    transform: scale(5.1);
    box-shadow: 4px 4px 1px #888888;
    
  }
  .zoom3
  {
    border-radius: 50%;
    transition: all 0.5s;
  }
  .zoom3:hover
  {
    transform: scale(2.1);
    box-shadow: 4px 4px 1px #888888;
    
  }
</style>
<style type="text/css">
  .login-form {
    width: 340px;
      margin: 30px auto;
  }
    .login-form form {
      margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .login-form .hint-text {
    color: #777;
    padding-bottom: 15px;
    text-align: center;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .login-btn {        
        font-size: 15px;
        font-weight: bold;
    }
    .or-seperator {
        margin: 20px 0 10px;
        text-align: center;
        border-top: 1px solid #ccc;
    }
    .or-seperator i {
        padding: 0 10px;
        background: #f7f7f7;
        position: relative;
        top: -11px;
        z-index: 1;
    }
    .social-btn .btn {
        margin: 10px 0;
        font-size: 15px;
        text-align: left; 
        line-height: 24px;       
    }
  .social-btn .btn i {
    float: left;
    margin: 4px 15px  0 5px;
        min-width: 15px;
  }
  .input-group-addon .fa{
    font-size: 18px;
  }
</style>
</head>