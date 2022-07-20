<?php

$host= "localhost";
$dbname= "input";
$username="root";
$password="";

$conn = mysqli_connect($host, $username, $password, $dbname);


if(isset($_POST['submit'])){ 

    $name = $_POST['name'] ;
    $email = $_POST['email'];
    $number = $_POST['number'];
    $role = $_POST['role'];
    $referer = $_POST['referer'];
    $mostlike = $_POST['mostlike'];
    $improve = $_POST['improve'];
    $comment = $_POST['comment'];
  
    $sql_insert_registration = "INSERT INTO registration ( name, email, number, role, referer, mostlike, improve, comment )
    VALUES('$name','$email','$number', '$role', '$referer', '$mostlike', '$improve', '$comment')";


 mysqli_query($conn,$sql_insert_registration) or die(mysqli_error($conn));

}




?>







  

