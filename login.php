
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" text="text/css" href="login.css">
    </head>
    <body>
         <?php
        
         include 'config.php';
         
         session_start();
         
         error_reporting(0);
         if (isset($_SESSION["Email"])) {
            header("Location: registration.php");
            }
         
         if(isset($_POST["login"])){
        
        $Email = mysqli_real_escape_string($conn,$_POST["Email"]); 
        $Password = mysqli_real_escape_string ($conn, md5($_POST["Password"])); 
        
       
        $check_email = mysqli_num_rows(mysqli_query($conn,"SELECT id FROM users WHERE Email = '$Email' AND Password='$Password' "));
        
        
            
            if(mysqli_num_rows($check_email > 0)){
                 $row = mysqli_fetch_assoc($check_email);
                 $_SESSION["user_id"]= $row['id'];
                 header('Location: registration.php');
                
            }
            else{
               echo "<script>alert('user details invalid');</script>";  
            }
        
        
        }
        
        ?>
        <div class="header">
        <div class="inner-header">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="logo"><a href="index.php" style=" text-decoration: none ; background-color: transparent ; color:#ededed; ">OnlineCourseRegistration</a></div>
                <div class="header-link"><a href="signup.php" style=" text-decoration: none ; background-color: transparent ; color:#ededed; "><span class="glyphicon glyphicon-user">SignUp</span></a></div>
                <div class="header-link"><a href="index.php" style=" text-decoration: none ; background-color: transparent ; color:#ededed; "><span class="glyphicon glyphicon-log-in">.LogOut</span></a></div>
            
            </div>
            </div>
            
    </div>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-4" >
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body"><p class="text-warning">Login to register for course</p></div> 
                        <form action="registration.php" method="post">
                            <div class="form-group">
                               Email:    <input type="text" class="form-control input-lg" name="Email" placeholder="Email" value="<?php echo $_POST["Email"]; ?>" required><br>
                               Password: <input type="text" class="form-control input-lg"  name="Password" placeholder="Password" value="<?php echo $_POST["Password"]; ?>" required><br><br>
                               <input type="submit" value="Login" name="login" class="btn btn-primary "><br><br>
                               
                        </form>
                        
                        <div class="panel-footer">Don't have an account? <a href="signup.php">SignUp</div>
                    
                </div>
            </div>
         </div>
         </div>
        </div>
               
    </body>
</html>
