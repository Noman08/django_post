<?php


include("../class/users.php");
$qus=new users;
$cat=$_SESSION['cat'];


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
	  .affix {
      top: 0;
      width: 730px;
      z-index: 9999 !important;
     }

     .affix + .container-fluid {
      padding-top: 70px;
      }
	  .table-bordered
	  {
		  color:#2f2f2f;
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
                                      <li><button  class="btn btn-primary"  onclick="window.location='index.php'"><h4><span class="glyphicon glyphicon-log-out"></span> Logout</h4></button></li>
		
              </ul>
			</div>
		  </div>
		</nav>
     </div>
  
  <br style="clear:both;">
 

  <div class="col-sm-2"></div>
   <div class="col-sm-8">
		  

		
		
			
			<center>
			
			<?php 
			  if(isset($_GET['msg']) && $_GET['msg']=="success")
			  {
			     echo "<h3 >Data insert successfully</h3>";
			  }
			  if(isset($_GET['msg']) && $_GET['msg']=="blank")
			  {
			     echo "<h3 >Fill up answer field correctly</h3>";
			  }
	     	  if(isset($_GET['msg']) && $_GET['msg']=="repeat")
			  {
			     echo "<h3 >Repeat question not allow</h3>";
			  }
			?>
			</center>
			
			
			<br style="clear:both;">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
			<table>
			<tr>
			 <td><center><label for="text"><h3>Subject Name :  </h3></label></center></td>
			 <td><input type="text" class="form-control" size="15" readonly  placeholder="<?php  echo $qus->cat_name($cat) ;?>"></td>
			 </tr>
			 </table>
			 </div>
			 <div class="col-sm-3"></div>
			<br style="clear:both;">
		   <form method="post" onsubmit="return confirm('Do you really want to submit the form?');" action="add_quiz.php">
						  
						 
						 
						  <div class="col-sm-4"></div>
						  <br style="clear:both;">
						  <div class="col-sm-3" style="float:left;"></div>
						  <div class="col-sm-6" ">
						  
						<div class="form-group">
						  <label for="text">Question</label>
						  <input type="text" class="form-control" name="qus" placeholder="Enter question" required>
						</div>
						<div class="form-group">
						  <label for="text">Option-1</label>
						  <input type="text" class="form-control" name="op1" placeholder="Enter option-1" required>
						</div>
						<div class="form-group">
						  <label for="text">Option-2</label>
						  <input type="text" class="form-control"  name="op2" placeholder="Enter option-2" required>
						</div>
						<div class="form-group">
						  <label for="text">Option-3</label>
						  <input type="text" class="form-control"  name="op3" placeholder="Enter option-3" required>
						</div>
						<div class="form-group">
						  <label for="text">Option-4</label>
						  <input type="text" class="form-control" name="op4" placeholder="Enter option-4" required>
						</div>
						<div class="form-group">
						  <label for="text">Answer</label>
						  <input type="text" class="form-control" name="ans" placeholder="Enter answer" required>
						</div>
						<div class="form-group">
						  <label for="text" name=$cat></label>
						  
						</div>
		             	<center><input type="submit" value="Submit" class="btn btn-info" /></center>
						
						<br>
						</div>

				
         </form>

		
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




