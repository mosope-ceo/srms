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
$sql ="SELECT UserName,Password FROM teacher WHERE UserName=:uname and Password=:password";
$sql = "SELECT * FROM `teacher`";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'teacher_dashboard.php'; </script>";
} else{

    echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- bootstrap css -->
    <script src="js/modernizr/modernizr.min.js"></script>
</head>
<body>
<style media="screen">
.login{
        height: 400px;
        background-color: #f1f3f8;
        width: 30%;
        margin: auto;
        margin-top: 10%;
        padding-top:4%;
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
body:{
    text-align:center;
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
.admin-log{
    text-align:center;
    padding-bottom:2%;
   
}
.inpt{
    margin-left:5%;
}
.inpt-log{
    margin-top:3%;
    text-align:center;
}
</style>


<!-- navbar -->
      <nav class="navbar navbar-light bg-light ">
        <div class="head-title  ">
          <h2 class="navbar-text container-fluid">SAMUEL ADEGBITE ANGLICAN COLLEGE</h2>
          <h5 class="h5-title text-center">Student Result Management System</h5>
        </div>
    </nav>
<!-- end of navbar -->
<div class="top-link">
<a href="find-result.php"><button type="button" class="btn btn-outline-success top-link-btn1">Student Login</button></a>
<a href="index.php"><button type="button" class="btn btn-outline-success top-link-btn2">Home page</button></a>
<a href="admin.php"><button type="button" class="btn btn-outline-success top-link-btn2">Admin page</button></a>
</div>

<div class="login">

<form  method="post">
<h4 class="admin-log">Teacher Login</h4>
<div class="inpt">

        <div class="form-group col-sm-11">
        <label for="teacher_username">Username</label>
            <input type="text" name="username"placeholder="Username" class="form-control " id="inputEmail3">
        </div>
        <div class="form-group col-sm-11">
        <label for="teacher_password">Password</label>
            <input type="password" name="password"placeholder="password" class="form-control" id="inputPassword3">
        
        </div>
        <div class="form-group mt-20">
            <div class="col-sm-offset-2 col-sm-7">                                                        
              <button type="submit" name="login" align="center" class="btn btn-success btn-block ">Sign in<span>&nbsp<i class="fa fa-check"></i></span></button>
           </div>
        </div>
        
      
</div>
</form>
</div>
<p align="center" style="margin-top:8%;" class="text-muted text-center "><small>Copyright © --POWERED BY SYLLA</small></p>
 <!-- bootsrat js -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>