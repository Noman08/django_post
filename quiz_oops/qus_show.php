<?php
include("class/users.php");
$qus=new users;
$cat=$_POST['cat'];
$qus->qus_show($cat);
$time=$qus->get_time($cat);
$_SESSION['cat']=$cat;
//echo"<pre>";
//print_r($qus->qus);
$rel_time=$qus->get_rel_time($cat);
$start  = strtotime("$rel_time");
$current    = time()+4*3600; // Waktu sekarang
//$current  = strtotime("$current")+4*3600;
$diff   =$start-$current;
//$diff   =$diff/60;
//echo $current.'hjvyj'.'<br>';
//echo $rel_time.'rwgg';
//echo $time;
//echo $start.'dfa'.'<br>';
//echo $diff;
$st_id=$_SESSION['st_id'];
$check;
if($qus->check_submit($st_id,$cat))
	$check=1;
else $check=0;
//echo '<br>'.$check; 
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
		  function timeout()
		  {
		      
		  
			  var hours=Math.floor(timeLeft/3600);
		      var minute=Math.floor((timeLeft-(hours*3600))/60);
			  var second =timeLeft%60;
			  var mint=checktime(minute);
			   var hrs=checktime(hours);
			  var sec=checktime(second);
			  var check=<?php echo $check; ?>;
			  if(!check)
			  {    
				if(exam_time=="not_ready")
                {
					  document.getElementById("demo").innerHTML=
				  "<?php echo '<br>'.'<br>'.'<br>'.'<center>'.'<b>'.'<h3>'."Sorry!!! Question not ready".'</h3>'.'</b>'.'</center>'.'<br>'.'<br>'.'<br>'; ?>";
				}					
			  else if(exam_time=="wait")
			  {
				
					  document.getElementById("demo").innerHTML=
				     "<?php 
				        echo '<br>'.'<br>'.'<br>'.'<center>'.'<b>'.'<h2>'."Wait...".'</h2>'.'</b>'.'</center>'.'<br>';
						echo '<br>'.'<br>'.'<br>'.'<center>'.'<b>'.'<h4>'."Exam will be started at "." ".$rel_time.'</h4>'.'</b>'.'</center>'.'<br>'.'<br>'.'<br>'.'<br>';
				      ?>";
					  //wait_time();
					  //window.location.reload();
					  setTimeout(function (){ location.reload(1);},2000);
				  
			  }
			  else if(exam_time=="taken")
			  {
				  document.getElementById("demo").innerHTML=
				  				  "<?php echo '<br>'.'<br>'.'<br>'.'<center>'.'<b>'.'<h2>'."Examtime has overed".'</h2>'.'</b>'.'</center>'.'<br>'.'<br>'.'<br>'; ?>";
			  }
			  else if(timeLeft<=0)
			  {
			     clearTimeout(tm);
			     document.getElementById("form1").submit();
			  
			  }
			  else 
			  {
			     
			     document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec;
			  }
			  }
			  else
			  {
				  document.getElementById("demo").innerHTML=
				  "<?php echo '<br>'.'<br>'.'<br>'.'<center>'.'<b>'.'<h3>'."Already you hve given your exam!!!!".'</h3>'.'</b>'.'</center>'.'<br>'.'<br>'.'<br>'; ?>";
			  }
			  timeLeft--;
			  diff--;
			  var tm=setTimeout(function(){timeout()},1000);
		  }
		  

		  function checktime(msg)
		  {
		      if(msg<10)
				 { 
				   msg="0"+msg;
				 
				 }
				 return msg;
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
<body onload="timeout()">

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
		  
		  <script type="text/javascript">
		   var exam_time;
		   var ttt=60*<?php echo $time; ?>;
		  var timeLeft;
	      var diff=<?php echo $diff; ?>;
		  if(ttt==0)
		  {
			  exam_time="not_ready";
		  }
		  
		  else if(diff>0)
		  {
			  
			   exam_time="wait";
		  }
		 
		  else if(diff<0)
		  {   
	          
			  if(diff+ttt<=0)
				  exam_time="taken";
			  else timeLeft=ttt+diff;
		  }
		  else{
			  timeLeft=60*<?php echo $time; ?>;
		  }
		  
		  </script>
		  
		  
		<div id="demo" >
		     
		  	<div class="panel panel-default" data-spy="affix" data-offset-top="197" " >
            <div class="panel-body"><h2><div id="time" >TIME</div></h2>
			</div>
			</div>
			
		  
		  
		  		
		  <?php 
		  $i=1;
		  foreach($qus->qus as $qust)  {?>
			<form method="post" id="form1" onsubmit="return confirm('Do you really want to submit the form?');" action="answer.php">	
          
		  <table class="table table-bordered">
			<thead>
			  <tr class="danger">
				<th><?php echo $i ?>&nbsp;<?php echo$qust['question'];?></th>
				
			  </tr>
			</thead>
			<tbody>
			<?php if(isset($qust['ans1'])){?>
			  <tr class="info">
				<td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo$qust['id'];?>"/>&nbsp;<?php echo$qust['ans1'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['ans2'])){?>
			  <tr class="info">
				<td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo$qust['id'];?>"/>&nbsp;<?php echo$qust['ans2'];?></td>
			  </tr>
			   <?php }?>
			  <?php if(isset($qust['ans3'])){?>
			  <tr class="info">
				<td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo$qust['id'];?>"/>&nbsp;<?php echo$qust['ans3'];?></td>
			  </tr>
			   <?php }?>
			  <?php if(isset($qust['ans4'])){?>
			  <tr class="info">
				<td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo$qust['id'];?>"/>&nbsp;<?php echo$qust['ans4'];?></td>
			  </tr>
			   <?php }?>
			    <tr class="info">
				<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo$qust['id'];?>"/></td>
			  </tr>
			</tbody>
		  </table>
		  <?php $i++; }?>
		  <center><input type="submit" value="Submit Quiz" class="btn btn-success" /></center>
		  </form>
		</div>  
		
    </div>
	<div class="col-sm-2"></div>
	<br style="clear:both;">
    <div <div class="panel panel-default">
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
