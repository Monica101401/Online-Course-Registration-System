<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" text="text/css" href="registration.css">
    </head>
    <body>
        <?php
        
        require 'config.php';
        session_start();
        
        
        ?>
       
        <div class="backimg">
        <div class="header">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="logo"><a href="http://localhost:8383/HTML5Application/welcome.html"><span class="glyphicon glyphicon-home">OnlineRegistrationSystem</a></div>
            </div>

    </div>
            <div class="content">
        <div class="banner-image">
        <div class="inner-banner-image">
            <div class="banner-content">
                <div class="container">
                    <h2 style="color:#fff"><b>Registration Form</b></h2>

                        <div class="panel-body"></div>
                        <form action="connect.php"  method="post">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="name" class="form-control input-lg" id="name" placeholder="Name" autocomplete="off"><br>
                                <label>Age:</label><input type="text" name="age" class="form-control input-lg" placeholder="age" id="age"><br>
                                <label>Gender:</label><br><br><div class="div4"><label><input type="radio" name="gender" value="male">Male</label></div>
                                <div class="div5"><label><input type="radio" name="gender" value="female">Female</label></div><br><br>
                                <label>Parent/Guardian Name:</label><input type="text" name="pname" class="form-control input-lg" placeholder="Parent/Guardian Name" id="pname"><br>
                                <label>Contact number:</label><input type="text"  name="contact" class="form-control input-lg" placeholder="Contact number" id="contact"><br>
                                <label>Email:</label><input type="text"  name="email" class="form-control input-lg" placeholder="Email" id="email"><br>
                                <label>Address:</label><input type="text"  name="address" class="form-control input-lg" placeholder="Address" id="address"><br>
                                <label>Degree:</label><input type="text"  name="degree" class="form-control input-lg" placeholder="Degree" id="degree">
                                <label>Domain</label>
                                <select class="form-control" name='domain'>

                                    <option value=''>--select--</option>
                                    <option value='Cse'>Computer Science</option>
                                    <option value='it'>Information Technology</option>
                                    <option value='ca'>Computer applications</option>
                                    <option value='ece'>Electronics</option>
                                    <option value='others'>Others</option>
                                </select><br>
                               
                                <label>College/University Name:</label><input type="text"  name="clgname" class="form-control input-lg" placeholder="College/University Name" id="clgname"><br>
                                <label>CurrentYear:</label>
                                <select class="form-control" name='currentyear'>
                                    
                                    
                                    <option value=''>--select--</option>
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                </select><br>
                                <label>Percentage:</label><input type="text"  name="percentage" class="form-control input-lg" placeholder="Percentage" id="percentage"><br>
                                 
                                <label>Select The course</label>
                                <select class="form-control" name='course'>
                                     
                                    <option value=''>--select--</option>
                                    <option value='Cp'>C Programming</option>
                                    <option value='py'>Python</option>
                                    <option value='java'>Java</option>
                                    <option value='EH'>Ethical Hacking</option>
                                    <option value='WD'>Web Development</option>
                                    <option value='JS'>Javascript</option>
                                </select><br>
                                
                                <button id="submit2" type="Submit" name="Submit" class="btn btn-primary btn-block">Submit</button><br><br>
                        </form>
                </div>
        </div>
            </div>
            </div>
        </div>
    </div>
    </div>
        
        
         </body>
</html>