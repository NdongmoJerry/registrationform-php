<?php

include('config.php');


$sql = "DELETE FROM registration WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
}
 header('Location: reglist.php');
?>