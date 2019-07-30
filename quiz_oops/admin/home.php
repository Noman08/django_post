<?php
include("../class/users.php");
$email=$_SESSION['email_ad'];
$profile=new users;
$profile->users_profile($email);
$notice=$profile->notice_board();
//print_r($profile->data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../js/custom.js"></script>
  <link href="../css/menu.css" rel="stylesheet">
  
        <style>
		
		
		
     .bg-4 { 
     background-color: #2f2f2f;
      color: #ffffff;
	  height:100px;
        }
	
	.container
	{
		background-color: #556677;
		color:pink;
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
	     <br>
      <ul class="nav navbar-nav">
        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Question <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a data-toggle="tab" href="#menu1">Make Question</a></li>
            <li><a data-toggle="tab" href="#menu2">Set up Exam  Time</a></li>
            <li><a data-toggle="tab" href="#menu4">Set up Start Time</a></li>
            
          </ul>
        </li>
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Subject<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a data-toggle="tab" href="#add_sub">Add Subject</a></li>
            <li><a data-toggle="tab" href="#del_sub">Delete Subject</a></li>
            
          </ul>
        </li>
		<li><a data-toggle="tab" href="#pre_ques">Preview Question</a></li>
        <li><a data-toggle="tab" href="#result">Result</a></li>
        <li><a data-toggle="tab"href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> privacy</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
    <h4>Sir alwayes makes sure<br>..............<br><span style="font-style:normal;">to review the question before any exam</span></h4>
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
			<center><h3>Sorry!!!<br>Not ready this phage</h3></center>
			</div>
			<div id="menu1" class="tab-pane fade ">
			<br>
			<br>
			<center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Select Subject</button></center> 
      
	  
	           <div class="col-sm-4"></div>
	           <div class="col-sm-4"><br>
		         <div id="select" class="tab-pane fade">
		    
		          <form method="post" action="hold_cat.php">
				  <select class="form-control" id="" name="cat_name">
				 
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
    <div id="menu2" class="tab-pane fade">
      <br>
			<br>
			<center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select2">Select Subject</button></center> 
      
	  
	           <div class="col-sm-4"></div>
	           <div class="col-sm-4"><br>
		         <div id="select2" class="tab-pane fade">
		    
		          <form method="post" action="set_time.php">
				  <select class="form-control" id="" name="cat">
				 
				     <?php
					   
					   foreach($profile->cat as $category)
					   {?>		  
					
					<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
					
					<?php  }
					?>
				  </select><br>
				  <div class="form-group" >
									  <label for="time">Time:</label>
									  <select class="form-control" id="" name="minute">
				            <?php
					   
					              for($i=1;$i<=60;$i++):?>		  
					
				                	<option value="<?php echo $i;?>"><?php echo $i;?></option>
					
				             	<?php  endfor;?>
				  </select><br>
		   		</div>
				  <center> <input type="submit" value="submit" class="btn btn-primary"/></center>
				  </form>
		    </div>
          </div>
	     <div class="col-sm-4"></div>
      </div>
	
	  <div id="add_sub" class="tab-pane fade">
	              <br style="clear:both;">
	              <div class="col-sm-4"></div>
	              <div class="col-sm-4"><br>
	  			  <form role="form" onsubmit="return confirm('Do you really want to add the subject?');"  action="add_sub.php" method="post">
							<div class="form-group">
							  <center><label for="subject">Subject Name:</label></center>
							  <input type="text" class="form-control"  name="sub" id="" placeholder="Enter Subject Name">
							</div>
									
							<center><button type="submit" class="btn btn-success">Add Subject</button></center>
				</form>
				</div>
				<div class="col-sm-4"></div>
	  </div>
	  
	  
	  
	  
	  
	  
	      <div id="pre_ques" class="tab-pane fade">
           <br>
			<br>
			<center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select100">Select Subject</button></center> 
      
	  
	           <div class="col-sm-4"></div>
	           <div class="col-sm-4"><br>
		         <div id="select100" class="tab-pane fade">
		    
		          <form method="post"  action="hold_cat_del.php">
							  <select class="form-control" id="" name="cat">
							 
								 <?php
								   
								   foreach($profile->cat as $category)
								   {?>		  
								
								<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
								
								<?php  }
								?>
							  </select><br>
							  
							</div>
				 <center> <input type="submit" value="submit" class="btn btn-primary"/></center>
			</form>
		    </div>
          
	     <div class="col-sm-4"></div>
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
	  
	  
	  
	  
	  
	  <div id="del_sub" class="tab-pane fade">
	  
	     <br>
		 <br>
			<center><button type="button" class="btn btn-info" data-toggle="tab" href="#select3">Select Subject</button></center> 
      
	  
	           <div class="col-sm-4"></div>
	           <div class="col-sm-4"><br>
		         <div id="select3" class="tab-pane fade">
		    
		          <form method="post" onsubmit="return confirm('Do you really want to delete?');"  action="del_sub.php">
				  <select class="form-control" id="" name="cat">
				 
				     <?php
					   
					   foreach($profile->cat as $category)
					   {?>		  
					
					<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
					
					<?php  }
					?>
				  </select><br>
				  
				  <center> <input type="submit" value="Delete Subject"  class="btn btn-danger"/></center>
				  </form>
		    </div>
          </div>
	     <div class="col-sm-4"></div>
		 
	  </div>
	   <div id="menu4" class="tab-pane fade">
      <br>
			<br>
			<center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select4">Select Subject</button></center> 
      
	  
	           <div class="col-sm-4"></div>
	           <div class="col-sm-4"><br>
		         <div id="select4" class="tab-pane fade">
		    
		          <form method="post" onsubmit="return confirm('Do you really want to submit the time?');"  action="rel_time.php">
				  <select class="form-control" id="" name="cat">
				 
				     <?php
					   
					   foreach($profile->cat as $category)
					   {?>		  
					
					<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
					
					<?php  }
					?>
				  </select><br>
				  <div class="form-group" >
				  <center>
									  <label for="time">Time:</label>
									 <input type="datetime-local" name="release" required">
									 <br>
					</center>				 
		   		</div>
				  <center> <input type="submit" value="submit" class="btn btn-primary"/></center>
				  </form>
		    </div>
          </div>
	     <div class="col-sm-4"></div>
      </div>
	</div>
    <br style="clear:both;">
	<br>
	<br>
	<br>
    <div >
    <footer class="container-fluid bg-4 text-center">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
	<br>
     <center>
	 <button  class="btn btn-primary"  onclick="window.location='home.php'"><h5><span class="glyphicon glyphicon-home"></span></h5></button>
	 <p>Online Quiz System Made By <a href="https://www.w3schools.com">noman-borhan</a></p> </center>
	 </div>
	 <div class="col-sm-2"></div>
    </footer>
	</div>
  </div>				
</body>  