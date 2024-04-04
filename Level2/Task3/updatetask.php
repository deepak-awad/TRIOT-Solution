<?php
include 'database.php';
error_reporting(0);
session_start();

$id = $_GET['rn'];
$task = $_GET['task'];

?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To update it </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="display:flex ; justify-content: center; margin-top: 2%;">
                <h1 style="font-size: 50px;">Task List Update</h1>
            </div>
        </div>
        <form action="updatenew.php" method="POST">
             <div class="row">
                 <div class="col-lg-1" style="display:flex ; justify-content: center; margin-top: 2%;">
                     <input type="text" class="form-control" name="id" value="<?php echo $id?>" >
                  </div>
                  <div class="col-lg-11" style="display:flex ; justify-content: center; margin-top: 2%;">
                     <input type="text" class="form-control" name="task" value="<?php echo $task?>" >
                  </div>
               </div>
            <div class="row" style="margin-top: 2%">
                <div class="col-lg-12">
                      <button type="submit" class="btn btn-primary btn-md">Update it</button>
                </div>
           </div>
      </form>   
        
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA  GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>