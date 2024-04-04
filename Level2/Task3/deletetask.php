<?php

include 'database.php';

$rollno = $_GET['rn'];
$query = "DELETE FROM task WHERE Task_Id=".$rollno."";
$result=(mysqli_query($db,$query));
if ($result =true)
{
    echo "<script>
    alert('Task Deleted Successfully...');
     window.location.href='index2.php';
    </script>";

}else
{
     echo "<script>
    alert('Task not Deleted...');
     window.location.href='index2.php';
    </script>";
}
?>