<?php
  ob_start(); 
  include "../admin/db_connection.php";

	if (isset($_POST['login']))
	{


		$username = $_POST['username'];
		$password= $_POST['password'];

		    $sql_select_users_login = "SELECT * FROM users WHERE username = '{$username}'";
        $result_sql_select_users_login = mysqli_query($dbconnection, $sql_select_users_login);

        if (!$result_sql_select_users_login)
            {
              die("Error description:" . mysqli_error());
            }

        while ($row_user_login = mysqli_fetch_assoc( $result_sql_select_users_login))
              {
               $id_user_login = $row_user_login['id'];
               $user_login_username = $row_user_login['username'];
               $user_login_password = $row_user_login['password'];
               $user_login_type = $row_user_login['type'];
               $user_login_image = $row_user_login['image'];
               $user_login_name = $row_user_login['name'];
               $user_login_email = $row_user_login['email'];
               $user_login_gender = $row_user_login['gender'];
              }
              if ($user_login_username === $username && $user_login_password === $password)
              {
                $_SESSION['id'] = $id_user_login;
              	$_SESSION['username'] = $user_login_username;
              	$_SESSION['type'] = $user_login_type;
                $_SESSION['image'] = $user_login_image;
                $_SESSION['name'] = $user_login_name;
                $_SESSION['email'] = $user_login_email;
                $_SESSION['password'] = $user_login_password;
                $_SESSION['gender'] = $user_login_gender;
              	echo " ok";
              	header("Location: ../index.php");
              	
              }
              else
              {
              	echo "nije ok";
              	$_SESSION['username'] = null;
              	$_SESSION['type'] = null;
              	header("Location: ../index.php");
              }
              
          
	}

 ?>