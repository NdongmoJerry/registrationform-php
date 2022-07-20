<?php

include('config.php');

$sql = "DELETE FROM registration WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title>Document</title>
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
         <input type="button" class='btn btn-secondary' value='Show'>
        <input type="button" class='btn btn-secondary' value='Edith'>
        <a href="reglist.php?id=<?php echo $row["id"]; ?>">Delete</a>
    </td>
    
    </tr> 

        <?php
        }
    }
        ?>

    <div class="back-button">
 <button type="button" id="back" onclick="history.back();">Back</button>
</div>
</table>
</body>
</html>





