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
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'test';
        
        $conn = mysqli_connect($hostname,$username,$password,$database) or die("database connection failed");
        ?>
    </body>
</html>
