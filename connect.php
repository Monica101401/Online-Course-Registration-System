<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $pname = $_POST['pname'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $degree = $_POST['degree'];
        $domain = $_POST['domain'];
        $clgname = $_POST['clgname'];
        $currentyear = $_POST['currentyear'];
        $percentage = $_POST['percentage'];
        $course = $_POST['course'];
        
        $conn = new mysqli('localhost','root','','test');
        if($conn->connect_error){
            die('Connection Failed :'.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into registration(name,age,gender,pname,contact,email,address,degree,domain,clgname,currentyear,percentage,course)"
                    . "values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("sississsssiis",$name,$age,$gender,$pname,$contact,$email,$address,$degree,$domain,$clgname,$currentyear,$percentage,$course);
            $stmt->execute();
            echo"Registered Successfully ";
             echo"Selection Confirmation for the course will be intimated through your respective mail-id ";
             echo  "Thank You";
            $stmt->close();
            $conn->close();
            
                    
            
        }
        ?>
        
        
    </body>
</html>
