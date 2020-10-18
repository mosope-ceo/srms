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
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="">
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
    margin-left:100px;
}
.inpt-log{
    margin-top:3%;
    text-align:center;
}
  </style>



    <body class="admin-log">
<!-- navbar -->
      <nav class="navbar navbar-light bg-light ">
        <div class="head-title ">
          <h2 class="navbar-text container-fluid ">SAMUEL ADEGBITE ANGLICAN COLLEGE</h2>
          <h5 class="h5-title">Student Result Management System</h5>
        </div>
    </nav>
<!-- end of navbar -->
<div class="top-link">
<a href="find-result.php"><button type="button" class="btn btn-outline-success top-link-btn1">Student Login</button></a>
<a href="index.php"><button type="button" class="btn btn-outline-success top-link-btn2">Home page</button></a>
</div>
<!-- login section --> 
<!--                                         
                                            <div class="row">       
                                                <div class="container-fluid"> -->
                                                    <div class="login">
                                                        <div class="inpt-log">
                                                            <h4 class="admin-log">Admin Login</h4>
                                                            
                                                            <div class="panel-body p-20">

                                                                <!-- <div class="section-title">
                                                                    <p class="sub-title">Student Result Management System</p>
                                                                </div> -->

                                                                <form class="form-horizontal" method="post">
                                                                    <div class="form-group">
                                                                        <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="username" class="form-control " id="inputEmail3" placeholder="UserName">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group mt-20">
                                                                        <div class="col-sm-offset-2 col-sm-9">
                                                                    
                                                                            <button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    <!-- <div class="section-title">
                                                        <p align="center" class="sub-title">Student Result Management System</p>
                                                    </div> -->
                                                    </div>
                                                <!-- </div> 
                                            </div>          -->
                                       
                        

        <!-- /.main-wrapper -->
<p align="center" style="margin-top:8%;" class="text-muted text-center "><small>Copyright © --POWERED BY SYLLA</small></p>

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

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
