<?php
include("class/users.php");
$ans=new users;
$answer=$ans->answer($_POST);

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
 
       <style>
     .bg-4 { 
     background-color: #2f2f2f;
      color: #ffffff;
	  height:100px;
        }
	.tab-content
	{
		height:385px;
		color: #ffffff;
		background-color: #556677;
		
	}
	.container
	{
		background-color: #556677;
		color: #ffffff;
	}
	
	.panel-default
	{
      background-color: #2f2f2f;
      color: #ffffff;

	}
	  
   
	</style>
	
  </head>
<body >

<div class="container">
	<div class="panel panel-default">
    <div class="panel-body"><h3>Online Quiz<sub> ..powered by <a href="mailto:nomanpc13@gmail">Noman</a></sub></h3></div>
    <nav class="navbar navbar-inverse ">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			
			  <ul class="nav navbar-nav">
			  <center>
				   <li ><button  class="btn btn-primary"  onclick="window.location='home.php'"><h4><span class="glyphicon glyphicon-home"></span>Home</h4></button></li>
				  
				</center>  
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
                     <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                     <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              </ul>
			</div>
		  </div>
		</nav>
     </div>
  
  <br style="clear:both;">
  

  <div class="col-sm-2"></div>
   <div class="col-sm-8">
		  

		  
		 
   
   <?php
   $total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
   $attempt_qus=$total_qus-$answer['no_answer'];
   ?>
   
   
 
  <h2>Your Quiz Results</h2>
                         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total number of Question</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted Questions</td>
        <td><?php echo $attempt_qus; ?></td>
      </tr>
      <tr>
        <td>Right Answer</td>
        <td><?php echo $answer['right']; ?></td>
      </tr>
      <tr>
        <td>Wrong Answer</td>
        <td><?php echo $answer['wrong']; ?></td>
      </tr>
	  <tr>
        <td>No Answer</td>
        <td><?php echo $answer['no_answer']; ?></td>
      </tr>
	  <tr>
        <td>Your Result</td>
        <td><?php 
		 $per=($answer['right']*100)/($total_qus); 
		 $per=substr($per,0,5);
		 echo $per."%";
		?></td>
         </tr>
       </tbody>
       </table>
  
		
    </div>
	<div class="col-sm-2"></div>
	<br style="clear:both;">
    <div >
    <footer class="container-fluid bg-4 text-center">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<br>
     <center>
	 <button  class="btn btn-primary"  onclick="window.location='home.php'"><h5><span class="glyphicon glyphicon-home"></span></h5></button>
	 <p>Online Quiz System Made By <a href="https://www.w3schools.com">noman-borhan</a></p> </center>
	 </div>
	 <div class="col-sm-4"></div>
    </footer>
	</div>

</div>
</body>
</html>
