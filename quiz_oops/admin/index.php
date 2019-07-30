
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Login </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
	<style type="text/css">
	 body
	{
		background-color: #556677;
		
	}
	     .panel-default{
			 
			 background-color:rgba(0,0,0,0.5);
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
	 <div class="col-sm-3"></div>
		<div class="col-sm-6">
			 <div class="panel panel-default">
           <div class="panel-body"><h3>Online Quiz<sub> ..powered by <a href="mailto:nomanpc13@gmail">Noman</a></sub></h3></div>
		   </div>
		 </div>
		 <div class="col-sm-3"></div>
		 </div>
		 
		 

 

 


	<div class="row">
	<div class="col-sm-3"></div>
			<div class="col-sm-6">
				
				  <div class="panel panel-default">
				    
						 <div class="panel-body"><h4>Login Form</h4></div>
							<div class="panel-body">
							<?php 
							  if(isset($_GET['run']) && $_GET['run']=="failed")
							  {
							     echo "Your email or password is not correct";
							  }
							
							?>
								  <form role="form" action="signin_adm.php" method="post" >
									<div class="form-group">
									  <label for="email">Email:</label>
									  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email" required>
									</div>
									<div class="form-group">
									  <label for="pwd">Password:</label>
									  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password" required>
									</div>
									<center><button type="submit" class="btn btn-info">Submit</button></center>
								  </form>
						     </div>
						     
				  </div>
			</div>
			<div class="col-sm-3"></div>
			</div>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
