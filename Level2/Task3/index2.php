<?php
     include 'database.php';
     session_start();
     $username=$_SESSION['Admin_UserName'];
      $password=$_SESSION['Admin_Password'];

      if ($_SESSION['Admin_UserName'] AND $_SESSION['Admin_Password'] ) 
      {
      
     $sql="SELECT * FROM admin WHERE Admin_UserName='".$username."' AND Admin_Password ='".$password."'";
     $result=(mysqli_query($db,$sql));
     $data=mysqli_fetch_assoc($result);
     }else
     {
        header("location:index.php");
     }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Todo Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="display:flex ; justify-content: center; margin-top: 2%;">
				<h1 style="font-size: 50px;">Todo List</h1>
			</div>
		</div>
		<form action="index2.php" method="POST">
		     <div class="row">
		   	      <div class="col-lg-12" style="display:flex ; justify-content: center; margin-top: 2%;">
			         <input type="text" class="form-control" name="task" placeholder="Add a New Task" required>
		       </div>
	      	</div>
		<div class="row" style="margin-top: 2%;">
			<div class="col-lg-11">
			     <button type="submit" name="submit" class="btn btn-primary btn-md">Add Task</button>
			</div>
			
		</div>
      </form>	
      <br>		

      <?php
       $sql="SELECT * FROM task";
       $result=(mysqli_query($db,$sql));
        while($data=mysqli_fetch_assoc($result))
         {
             ?>

       <div class="row">
			<div class="col-lg-10" style="display:flex; margin-top: 2%;">
			      <h5><?php echo $data['Task_Name'];?></h5>
			</div>
			<div class="col-lg-2">
		       <?php echo'
			     <a href="updatetask.php?rn='.$data["Task_Id"].'&&task='.$data["Task_Name"].'"> <button class="btn btn-primary btn-md" >Update</button></a>
                 <a href="deletetask.php?rn='.$data["Task_Id"].'"> <button class="btn btn-primary btn-md" >Delete</button></a>';?>
			</div>
	   </div>
	   <?php }?>
		<hr>
	</div>
		
	</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA  GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

<?php
if(isset($_POST['submit']))
{

    $task=$_POST['task'];

    $sql='INSERT INTO task VALUES("","'.$task.'")';

    if (mysqli_query($db,$sql))
     {
      echo "<script>
          alert('Task Added Successfully...');
           </script>";
    }else
    {
        echo "<script>
          alert('Check some issue');
           </script>";
    }
}

?>