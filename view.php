<?php

include('config.php');
$id = $_GET['id'];

$sql = "SELECT * FROM registration WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
//print_r($row);
$name = $row['name'];
$email = $row['email'];
$number = $row['number'];
$role = $_POST['role'];
$referer = $_POST['referer'];
$mostlike = $_POST['mostlike'];
$improve = $_POST['improve'];
$comment = $_POST['comment'];
?>



<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>


<body>
   

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>number</th>
            <th>role</th>
            <th>referer</th>
            <th>mostlike</th>
            <th>improve</th>
            <th>comment</th>
            <th>Actions</th>



        <tr>
          
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['role']; ?></td>
            <td><?php echo $row['referer']; ?></td>
            <td><?php echo $row['mostlike']; ?></td>
            <td><?php echo $row['improve']; ?></td>
            <td><?php echo $row['comment']; ?></td>
</tr>
<div>
            <a href='reglist.php' class='btn btn-primary btn-sm'> &lt; Back </a>
            </div>
    </table>
</body>

</html>