<?php

include 'database.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $task = $_POST["task"];

    $sql = 'UPDATE task SET Task_Name = "'.$task.'" where Task_Id = "'.$id.'"';

    if (mysqli_query($db,$sql))
     {
      echo "<script>
          alert('Task Updated Successfully...');
         window.location.href='index2.php';
          </script>";
    }else
    {
        echo "<script>
          alert('Kindley Check some issue');
          window.location.href='updatetask.php';
           </script>";
   }
}
?>
