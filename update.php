<?php
//print_r ($_POST);
    $id = $_POST['id'] ;
    $name = $_POST['name'] ;
    $email = $_POST['email'];
    $number = $_POST['number'];
    $role = $_POST['role'];
    $referer = $_POST['referer'];
    $mostlike = $_POST['mostlike'];
    $improve = $_POST['improve'];
    $comment = $_POST['comment'];
  
    $host= "localhost";
    $dbname= "input";
    $username="root";
    $password="";
    $conn = mysqli_connect($host, $username, $password, $dbname);
    $sql = "UPDATE registration SET name='$name', email='$email', number='$number', role='$role', referer='$referer', mostlike='$mostlike', improve='$improve', comment='$comment'  WHERE id=$id";
    $update = mysqli_query($conn, $sql);
    if($update){
        header('Location: reglist.php');
    }
?>