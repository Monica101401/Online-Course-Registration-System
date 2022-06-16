<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <title>SIGN UP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" text="text/css" href="signup.css">
    </head>
    <body>
        <?php
        include 'config.php';
        
        session_start();
        
        error_reporting(0);
        
        if(isset($_POST["signup"])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $Email = mysqli_real_escape_string($conn,$_POST["Email"]); 
        $Password = mysqli_real_escape_string ($conn, md5($_POST["Password"])); 
        $CPassword = mysqli_real_escape_string ($conn, md5($_POST["CPassword"])); 
       
        $check_email = mysqli_num_rows(mysqli_query($conn,"SELECT Email FROM users WHERE Email = '$Email' "));
        
        if($Password !== $CPassword){
            echo "<script>alert('Password did not match.');</script>"; 
        }elseif($check_email > 0){
           echo "<script>alert('This Email has already registered with us ');</script>" ;
        } else {
            $sql = "INSERT INTO users(username, Email, Password) VALUES ('$username','$Email','$Password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                 $_POST['username']="";
                 $_POST['Email']="";
                 $_POST['Password']="";
                 $_POST['CPassword']="";
                echo "<script>alert('User registration successful Click Login at navbar to Login.')" . ";</script>"; 
               
            }else{
               echo "<script>alert('User registration failed.');</script>";  
            }
        }
        
        }
        
        ?>
        <div class="header">
        <div class="inner-header">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="logo"><a href="index.php"style=" text-decoration: none ; background-color: transparent ; color:#ededed;">OnlineCourseRegistration</a></div>
                <div class="header-link"><a href="login.php" style=" text-decoration: none ; background-color: transparent ; color:#ededed; "><span class="glyphicon glyphicon-log-in">.LogIn</span></a></div>
           
            </div>
            </div>
            
    </div>
        <div class="container">   
                    <h2 style="padding-left: 500px"><b>SIGN UP</b></h2>
                        
                        <div class="panel-body"></div> 
                        <form action="" method="post">
                            <div class="form-group">
                               
                                <input type="text"  name="username" class="form-control input-lg" placeholder="Username" value="<?php echo $_POST["username"]; ?>" required  /><br>
                                <input type="email"  name="Email" class="form-control input-lg" placeholder="Email" value="<?php echo $_POST["Email"];?>" required /><br>
                                <input type="password" name="Password" class="form-control input-lg" placeholder="Password" value="<?php echo $_POST["Password"];?>" required /><br> 
                                <input type="password" name="CPassword" class="form-control input-lg" placeholder="Confirm Password" value="<?php echo $_POST["CPassword"];?>" required /> <br>                                                             
                               
                                <input type="submit" value="Sign up" name= "signup" class="btn btn-primary"><br><br>
                               
                                <div>Already a user <a href="login.php"> login</a></div>
                        </form>
                        
                </div>
            
        </div>
            
    </body>
</html>


