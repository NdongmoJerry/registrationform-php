<?php

include('config.php');
?>



<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reglist.css" type="text/css">
    <title>Registration Content</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

    <table class="box">

        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Role</th>
            <th>Referer</th>
            <th>Mostlike</th>
            <th>Improve</th>
            <th>Comment</th>
            <th>Actions</th>

        </tr>

        <?php

    $sql = "SELECT * FROM registration;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
    ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['role']; ?></td>
            <td><?php echo $row['referer']; ?></td>
            <td><?php echo $row['mostlike']; ?></td>
            <td><?php echo $row['improve']; ?></td>
            <td><?php echo $row['comment']; ?></td>
            <td>
                <a href="view.php?id=<?php echo $row["id"]; ?>" class='btn btn-info btn-sm'>View</a>
                <a href="edit.php?id=<?php echo $row["id"]; ?>" class='btn btn-success btn-sm'>Edit</a>
                <a href="delete.php?id=<?php echo $row["id"]; ?>"
                    onclick="return confirm('Are you sure you want to delete this item')"
                    class='btn btn-danger btn-sm'>Delete</a>
            </td>

        </tr>

        <?php
        }
    }
        ?>

        <div>

            <a href='registration.php' class='btn btn-primary btn-sm'> &lt; Back </a>
        </div>

    </table>
</body>

</html>