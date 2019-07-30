<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$notice=$profile->notice_board();
//print_r($profile->data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>User-home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
      <style>
     .bg-4 { 
     background-color: #2f2f2f;
      color: #ffffff;
	  height:60px;
        }
	.tab-content
	{
		height:380px;
		color: #ffffff;
		background-color: #556677;
		
	}
	.container
	{
		background-color: #556677;
	}
	
	.panel-default
	{
      background-color: #2f2f2f;
      color: #ffffff;
	}
	
     </style>
  
  
</head>
<body>

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
				   <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
				   <li><a data-toggle="tab" href="#menu1">Profile</a></li>
				  <li><a data-toggle="tab" href="#result">Result</a></li>
				  
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
                    
                     <li><button  class="btn btn-primary"  onclick="window.location='index.php'"><span class="glyphicon glyphicon-log-out"></span> Logout</button></li>
              </ul>
			</div>
		  </div>
		</nav>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
    <div class="item active">
    <h4> Alwayes Keep eyes<br>..............<br><span style="font-style:normal;">on the notice board</span></h4>
    </div>
    <div class="item">
      <h4>Next immediate exam<br>............<br><span style="font-style:normal;">
	  <?php 
	  
	   if(isset($notice['cat_name']))
			  
			 echo $notice['cat_name'];
	  else
		  echo  "There is no upcoming exam"
	  ?></span></h4>
    </div>
      <div class="item">
      <h4>Date of next immediate exam <br>............<br><span style="font-style:normal;">
	  <?php 
	  
	   if(isset($notice['rel_time']))
			  
			 echo $notice['rel_time'];
	  else
		  echo  "There is no upcoming exam"
	  ?></span></h4>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
   </div>

   </div>
  

  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
      <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select"><h4>Start Quiz</h4></button></center> 
      
	  
	  <div class="col-sm-4"></div>
	  <div class="col-sm-4"><br>
		  <div id="select" class="tab-pane fade">
		    
		          <form method="post" action="qus_show.php">
				  <select class="form-control" id="" name="cat">
				  
				     <?php
					   $profile->cat_shows() ;
					   foreach($profile->cat as $category)
					   {?>		  
					
					<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
					
					<?php  }
					?>
				  </select><br>
				  
				  <center> <input type="submit" value="submit" class="btn btn-primary"/></center>
				  </form>
		  </div>
      </div>
	  <div class="col-sm-4"></div>
	</div>
    <div id="menu1" class="tab-pane fade">
	<br>
	<br>
	<br>
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
      <h3>Showing profile</h3>
	   <table class="table">
			<thead>
			  <tr>
				<th>id</th>
				<th>name</th>
				<th>email</th>
                <th>image</th>
			  </tr>
			</thead>
			<tbody>
			<?php
			    foreach($profile->data as $prof)
			{?>
			  <tr>
				<td><?php echo $prof['st_id'];?></td>
				<td><?php echo $prof['name'];?></td>
				<td><?php echo $prof['email'];?></td>
				<td><img src="img/<?php echo $prof['img'] ?>" alt="" width="80px" height="50px"/></td>
			  </tr>
			  
			</tbody>
			<?php  }?>
      </table>
	  </div>
	  <div class="col-sm-2"></div>
	  
	  
	  
    </div>
 <div id="result" class="tab-pane fade">
	  
	     <br>
		 <br>
			<center><h3 >Select Subject</h3></center> 
      
	  
	           <div class="col-sm-4"></div>
	           <div class="col-sm-4"><br>
		        
		    
		          <form method="post"   action="result.php">
				  
				 
				     <?php
					   
					   foreach($profile->cat as $category)
					   {?>
                     <center>					   
					<button  class="btn btn-info" name="cat"  value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></button>
					<br>
					<br>
					</center>
					<?php  }
					?>
				  
				  
				 
				  </form>
		    </div>
          
	     <div class="col-sm-4"></div>
		 
	  </div>
	  
	  
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
	
    </div>
 
	 <br style="clear:both;">
    <div class="panel panel-default">
    <footer class="container-fluid bg-4 text-center">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<br>
     <center<p ><B>Online Quiz System Made By <a href="https://www.w3schools.com">noman-borhan</a></b></p> </center> </center>
	 </div>
	 <div class="col-sm-4"></div>
    </footer>
	</div>

</div>

</body>
</html>
