<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
        require "config.php";
        $id = $_GET['ID'];

        $current_taskname = mysqli_query ($con, "SELECT * FROM tasks_table WHERE id= $id");
        $data = mysqli_fetch_array($current_taskname);

        if(ISSET($_POST['btnUpdatetask'])){
            
            $new_task_name = $_POST['newtaskname'];
            
            mysqli_query($con, "UPDATE tasks_table SET taskname='$new_task_name' WHERE id='$id'");

            header("location:index.php");
        }
        
    ?>

        <form action="" method="post" class="flex justify-center items-center w-[100vw] bg-blue-500 h-[100vh]">
            <div class="w-[70vw] h-[70%] bg-blue-800 shadow-2xl rounded p-4">
                <div>
                    <h3 class="flex justify-center font-bold text-[30px]">UPDATE TODO</h3>
                    <div class="flex justify-center mt-4">
                        <input type="text" value="<?php echo $data['taskname'] ?>" name="newtaskname" id="" class="formcontrol p-2 rounded w-[30vw]">
                        <input type="submit" value="Update" name="btnUpdatetask" class="px-8 bg-blue-500 rounded ml-[-4px]">
                    </div>
                </div>
            </div>
        </form>
</body>
</html>