<?php
include("../class/users.php");
$qus=new users;
$cat=$_SESSION['cat_del'];
//$qus->qus_show($cat);
$time=$qus->get_time($cat);
$rel_time=$qus->get_rel_time($cat);
if(!$qus->qus_show($cat))
	$a=1;


?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  <script type="text/javascript">
		  function check_record()
		  {
		      
		  
			  
			  if(check)
			  {    
				
                
					  document.getElementById("demo").innerHTML=
				  "<?php echo '<br>'.'<br>'.'<br>'.'<center>'.'<b>'.'<h3>'."Sorry!!! Data record empty".'</h3>'.'</b>'.'</center>'.'<br>'.'<br>'.'<br>'; ?>";
			} 
		  }
			
  
  
   </script>
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
<body onload="check_record()">

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
  <script  type="text/javascript">
  var check=<?php echo $a; ?>
  </script>

  <div class="col-sm-2"></div>
   <div class="col-sm-8">
		  

		  
		<div id="demo" >
		     
		  	<div class="panel panel-default" data-spy="affix" data-offset-top="197" " >
            <div class="panel-body">
			<h4><div style="float:left;" >Time:<?php echo $time."minute";?></div>
			<div style="float:right;" >Date:<?php echo $rel_time;?></div>			
			</h4>
			</div>
			</div>
			
		  
		  
		  		
		  <?php 
		  
		  $i=1;
		  foreach($qus->qus as $qust)  {?>
		  <table class="table table-bordered">
			<thead>
			  <tr class="danger">
				<th><?php echo $i ?>&nbsp;<?php echo$qust['question'];?></th>
				
			  </tr>
			</thead>
			<tbody>
			<?php if(isset($qust['ans1'])){?>
			  <tr class="info">
				<td>&nbsp;1&emsp;<input type="radio"  readonly />&nbsp;<?php echo$qust['ans1'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['ans2'])){?>
			  <tr class="info">
				<td>&nbsp;2&emsp;<input type="radio" readonly />&nbsp;<?php echo$qust['ans2'];?></td>
			  </tr>
			   <?php }?>
			  <?php if(isset($qust['ans3'])){?>
			  <tr class="info">
				<td>&nbsp;3&emsp;<input type="radio" readonly />&nbsp;<?php echo$qust['ans3'];?></td>
			  </tr>
			   <?php }?>
			  <?php if(isset($qust['ans4'])){?>
			  <tr class="info">
				<td>&nbsp;4&emsp;<input type="radio" />&nbsp;<?php echo$qust['ans4'];?></td>
			  </tr>
			   <?php }?>
			    <tr class="info">
				<td>Answer:<b><?php echo$qust['ans']+1;?></b>
				
				
				  <div style="float:right;">
				<form  role="form" method="post" id="form1" onsubmit="return confirm('Do you really want to delete this question?');" action="del_question.php">
				
				<button  class="btn btn-danger" name="del" value="<?php echo$qust['id'];?>"><span class="glyphicon glyphicon-trash"></span>Delete</button></div>
				
				</form> 
				
				</td>
				
			  </tr>
			</tbody>
		  </table>
		  <?php $i++; }?>
		</div> 
		
		
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
