<?php

use LDAP\Result;

if(!isset($_POST['submit']))
{
    $USERNAME=$_POST['username'];
    $PASSWORD=$_POST['password'];

    $con=mysqli_connect("localhost:3306","root","","pharmacytry");
    $sql="select * from admin_credentials where USERNAME='$USERNAME' and 
    PASSWORD='$PASSWORD' ";
    $result=mysqli_query($con,$sql);
    $resultcheck=mysqli_num_rows($result);
    if($resultcheck>0)
    {
       
          require "home.php";
          
    }
    else
    {
        /*echo '<script>alert("USERNAME OR PASSWORD INCORRECT")</script>';*/
        
       /* require "index.php"; */

       require "index.php";

    }
}

?>