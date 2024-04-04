<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>To do List</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">
                       	    <div class="col-lg-12" style="display:flex ; justify-content: center;margin-left: 40%;">
				             <img src="../Img/login.png" style="width:30%">
			                </div>
                       </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                    </div>
                    
                       <div class="modal-body">
                      <form action="login.php" method="POST">
                          <div class="form-group">
                            <label for="username" class="font-weight-bold">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
                          </div>
                          <div class="form-group">
                            <label for="password" class="font-weight-bold">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                          </div>
                           <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                          <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
                        </form>
                        </div>
                       <div class="modal-footer">
                   	<button class="btn btn-danger" data-dismiss="modal" style="margin-right: 72%;">Cancel</button>
                        <h6>Forget <a href="#">Password?</a></h6>
                    </div>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="col-lg-12" style="display:flex ; justify-content: center; margin-top: 1%;">
				<img src="../Img/login.png" style="width:20%">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12" style="display:flex ; justify-content: center; margin-top: 2%;">
				<h1 style="font-size: 70px;">Login to Add Tasks</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12" style="display:flex ; justify-content: center; margin-top: 2%;">
				<button type="button" class="btn btn-success btn-square-lg" data-toggle="modal" data-target=".bd-example-modal-lg" style="padding: 20px 40px;font-size: 20px; ">Login</button>
			</div>
		</div>
	</div>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>