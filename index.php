<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

    echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <style media="screen">
      .login{
        height: 400px;
        background-color: #f1f3f8;
        width: 30%;
        margin: auto;
        margin-top: 10%;
      }
      @media  (max-width: 1200px) {
        .login{
          width: 80%;
          margin: auto;
          margin-top: 10%;
        }
      }
      @media (min-width: 571px){
        .form-itm{
          margin-left: 4%;
          margin-top: 10%;
        }
      }
.h5-title{
  text-align: center;
  margin: 4%;
}
.head-title{
  text-align: center;
}

.top-link{
  /* height: 34px;
  background-color: #f1f3f8;
  width:30%;
  margin: auto; */
  text-align: center;
  margin-top: 1%;
}

.top-link-btn2{
  margin-left: 3%;
}
  </style>



    <body class="admin-log">
<!-- navbar -->
      <nav class="navbar navbar-light bg-light ">
        <div class="head-title">
          <h2 class="navbar-text container-fluid">SAMUEL ADEGBITE ANGLICAN COLLEGE</h2>
          <h5 class="h5-title">Student Result Management System</h5>
          </div>
        </nav>
<!-- end of navbar -->
<div class="top-link">
<a href="find-result.php"><button type="button" class="btn btn-outline-success top-link-btn1">Student Login</button></a>
<a href="admin.php"><button type="button" class="btn btn-outline-success top-link-btn2">Admin Login</button></a>
</div>
<!-- login section -->
<footer>
<p align="center" style="margin-top:60%;" class="text-muted text-center "><small>Copyright © --POWERED BY SYLLA</small></p>
</footer>
        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== bootstrap js ========== -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>
