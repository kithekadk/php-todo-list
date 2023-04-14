<?php
include "config.php";

$task = $_POST['task'];

if (ISSET($_POST['btnaddtask']) &&  $task !== ''){
    mysqli_query($con, "INSERT INTO tasks_table(taskname) VALUES ('$task')");
}

header("location:index.php");

?>