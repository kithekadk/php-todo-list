<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="insert.php" method="post" class="flex justify-center items-center w-[100vw] bg-blue-500 h-[100vh]">
        <div class="w-[70vw] h-[70%] bg-blue-800 shadow-2xl rounded p-4">
            <div>
                <h3 class="flex justify-center font-bold text-[30px]">TODO</h3>
                <div class="flex justify-center mt-4">
                    <input type="text" name="task" id="" class="formcontrol p-2 rounded w-[30vw]">
                    <input type="submit" value="ADD" name="btnaddtask" class="px-8 bg-blue-500 rounded ml-[-4px]">
                </div>
            </div>
            
            <?php
                include "config.php";
                $rawData = mysqli_query($con, "SELECT * FROM tasks_table");

                // var_dump($rawData);
            ?>
            <table class="flex justify-center mt-4 table-auto">
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_array($rawData)){
                    ?>

                <tr class="text-white">
                    <td class="border p-2 w-[5vw]"><?php echo $row['id'] ?></td>
                    <td class="border p-2 w-[30vw]"><?php echo $row['taskname'] ?></td>
                    <td class="border text-center p-2 w-[10vw] text-green-400 hover:cursor-pointer hover:bg-green-300 hover:text-black"><a href="update.php? ID= <?php echo $row['id'] ?>">Update</a></td>
                    <td class="border p-2 w-[10vw] text-center p-2 w-[10vw] text-red-400 hover:cursor-pointer hover:bg-red-400 hover:text-black"><a href="delete.php? ID=<?php echo $row['id'] ?>">Delete</a></td>
                </tr>
            
                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </form>
</body>
</html>