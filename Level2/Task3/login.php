<?php

include 'database.php';
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql="SELECT * FROM admin WHERE Admin_UserName='".$username."' AND Admin_Password ='".$password."'";
    $result=(mysqli_query($db,$sql));

    if (mysqli_num_rows($result))
     {
        $_SESSION['Admin_UserName']= $username;
        $_SESSION['Admin_Password']= $password;
      echo "<script>
          alert('Hi, Login Successfully...');
          window.location.href='index2.php'
           </script>";
    }else
    {
        echo "<script>
          alert('Hi your Username and password is Invalid...');
           window.location.href='index.php'
           </script>";
    }
}
?>
