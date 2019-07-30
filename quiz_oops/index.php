<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Quiz-USER log in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	
	<style type="text/css">
	 body
	{
		background-color: #556677;
		
	}
	     .panel-default{
			 
			 background-color:rgba(0,0,0,0.25);
			 color:#FFFFFF;
			 font-weight:bolder;
			 box-shadow:inset -4px -4px rgba(0,0,0,0.5);
		 }
	</style>
</head>
<body>
<br>
<br>
<div class="container">
     <div class="row">
		<div class="col-sm-12">
			 <div class="panel panel-default">
           <div class="panel-body"><h3>Online Quiz<sub> ..powered by <a href="mailto:nomanpc13@gmail">Noman</a></sub></h3></div>
		   </div>
		 </div>
		 </div>
		

	<div class="row">
			<div class="col-sm-6">
				
				  <div class="panel panel-info">
						 <div class="panel-heading"><h4>login Form</h4></div></div>
						 <div class="panel panel-default">
							<div class="panel-body">
							<?php 
							  if(isset($_GET['run']) && $_GET['run']=="failed")
							  {
							     echo "Your email or password is not correct";
							  }
							
							?>
								  <form role="form" action="signin_sub.php" method="post">
									<div class="form-group">
									  <label for="email">Email:</label>
									  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email" required>
									</div>
									<div class="form-group">
									  <label for="pwd">Password:</label>
									  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password" required>
									</div>
									<center><button type="submit" class="btn btn-primary">Submit</button></center>
								  </form>
						     </div>
				  </div>
			</div>
			<div class="col-sm-6">
				  <div class="panel panel-info">
					    <div class="panel-heading"><h4>Signup Form</h4></div></div>
						<div class="panel panel-default">
							<div class="panel-body">
							      <?php 
								     if(isset($_GET['run'])&& $_GET['run']=="success")
									 { 
									    echo "your registration successfully done";
									 }
                                      if(isset($_GET['run'])&& $_GET['run']=="fail")
									 { 
									    echo "Email or ID have been used.";
									 }
										
								   ?>
								  <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data">
									<div class="form-group">
									<div class="form-group">
									  <label for="name">Roll/ID:</label>
									  <input type="text" class="form-control" name="r" id="roll" placeholder="Enter your roll" required>
									</div>
									<div class="form-group">
									  <label for="name">Name:</label>
									  <input type="text" class="form-control" name="n" id="name" placeholder="Enter name" required>
									</div>
									  <label for="email">Email:</label>
									  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email" required>
									</div>
									<div class="form-group">
									  <label for="pwd">Password:</label>
									  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password" required>
									</div>
									<div class="form-group">
									  <label for="pwd">Upload your image:</label>
									  <input type="file" class="form-control" name="img" required>
									</div>
									<center><button type="submit" class="btn btn-info">Submit</button></center>
								  </form>
						     </div>
				  </div>
				  
			 </div>
		</div>
	</div>

</body>
</html>
