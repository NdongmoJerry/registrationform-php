<?php

include('config.php');


$sql = "DELETE FROM registration WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deletd successfully";
}else{
echo "record has not been deleted";
}
 header('Location: reglist.php');
?>