<?php

include('config.php');
$id = $_GET['id'];

$sql = "SELECT * FROM registration WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
//print_r($row);
$name = $row['name'];
$email = $row['email'];
$age = $row['age'];
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
    <title>View Content</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>



<body>

    <a href='reglist.php' class='btn btn-primary btn-sm'> &lt; Back </a>
    <div class="table-form">
        <tr>
            <td><b>Name:</b></td>
            <td><?php echo $row['name']; ?></td>
        </tr>
        <br>
        <tr>
            <td><b>Email:</b></td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <br>
        <tr>
            <td><b>Age:</b></td>
            <td><?php echo $row['number']; ?></td>

        </tr>

        <tr>
            <br>
            <td><b>Role:</b></td>
            <td><?php echo $row['role']; ?></td>

        </tr>
        <br>
        <tr>
            <td><b>Referer:</b></td>
            <td><?php echo $row['referer']; ?></td>

        </tr>
        <br>
        <tr>
            <td><b>Mostlike:</b></td>
            <td><?php echo $row['mostlike']; ?></td>

        </tr>

        <br>
        <tr>
            <td><b>Improve:</b></td>
            <td><?php echo $row['improve']; ?></td>

        </tr>
        <br>
        <tr>
            <td><b>Comment:</b></td>
            <td><?php echo $row['comment']; ?></td>

        </tr>
    </div>




</body>


</html>