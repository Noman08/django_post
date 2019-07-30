<?php
include("../class/users.php");
$qus=new users;

extract($_POST);

//$qus->result_show($cat);
if(!$qus->result_show($cat))
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
          function printData()
		  {
			  var a=document.getElementById("print_table");
			  newWin=window.open("");
			  newWin.document.write(a.outerHTML);
			  newWin.print();
			  newWin.close();
		  }
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
                     
                   <li><button  class="btn btn-primary"  onclick="window.location='index.php'"><h4><span class="glyphicon glyphicon-log-out"></span> Logout</h4></button></li>
		
    
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
		     
		  
			
		 <center><h3><?php  echo $qus->cat_name($cat) ;?></h3></center>
	   <table class="table" id="print_table">
	   <caption><input type="text" class="form-control" size="15" readonly  placeholder="<?php  echo $qus->cat_name($cat) ;?>"></caption>
	   
			<thead>
			
			  <tr>
				
				<th>SN</th>
				<th>Id</th>
				<th>Name</th>
				<th>Total Question</th>
						
				<th>Right</th>
                <th>Wrong</th>
				<th>Result</th>
			  </tr>
			</thead>
			 <?php 
		  
		     $i=1;
		    foreach($qus->qus as $qust)  {?>
			<tbody>
			
			  <tr>
			  <td><?php echo $i;?></td>
			  <?php if(isset($qust['st_id'])){?>
			  
				<td ><?php echo$qust['st_id'];?></td>
			  
			  <?php }?>
			  <?php if(isset($qust['st_name'])){?>
			  
				<td><?php echo$qust['st_name'];?></td>
			  
			  <?php }?>
			  <?php if(isset($qust['total_ques'])){?>
			  
				<td><?php echo$qust['total_ques'];?></td>
			  
			  <?php }?>
			  
			  <?php if(isset($qust['right_ans'])){?>
			  
				<td><?php echo$qust['right_ans'];?></td>
			  
			  <?php }?>
			  <?php if(isset($qust['wrong_ans'])){?>
			  
				<td><?php echo$qust['wrong_ans'];?></td>
			  
			  <?php }?>
			  <?php if(isset($qust['res'])){?>
			  
				<td><?php echo$qust['res'];?></td>
			  
			  <?php }?>
			   
			</tbody>
			<?php $i++; }?>
			
       </table>
	   
	   
	   <center><button   class="btn btn-primary"   onclick="printData()">PRINT</button></center>
	   <br>
	   		  		
		 
	   
	   
	   
	   
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
