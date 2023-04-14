<?php

include "config.php";

$id = $_GET['ID'];

mysqli_query($con, "DELETE FROM tasks_table WHERE id='$id'");

header('location:index.php');

?>