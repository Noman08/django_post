<?php
session_start();

  class users{
       public $host="localhost";
       public $username="root";
       public $pass="";
       public $db_name="quiz_oops";
	   public $conn;
	   public $data;
	   
	   public $qus; 
	    public $a;
	   /*public $right;
       public $wrong;
       public $no_answer;*/
	   public function __construct()
	   {   
	      $this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		  if($this->conn->connect_errno)
		  {
		     die ("database connection failed".$this->conn->connect_errno);
		  }	   
	     
	   }
       public function signup($data)
        {
		   $a=$this->conn->query($data);
		  
		   return $a;
		 
         }
		public function signin($email,$pass)
        {
		    $query=$this->conn->query("select email,pass from signup where email='$email' and pass='$pass'");
			$query->fetch_array(MYSQLI_ASSOC);
			if($query->num_rows>0)
			{ 
			  $_SESSION['email']=$email;
			  $query=$this->conn->query("select st_id,name from signup where email='$email'");
			  $a=$query->fetch_array(MYSQLI_ASSOC);
			 
			  $st_id=$a['st_id'];
			  $_SESSION['st_id']=$st_id;
			  return true;
			}
			else
			{
			  return false;
			}
			
			
		}
		public function signin_admin($email,$pass)
        {
		    $query=$this->conn->query("select email,pass from admin where email='$email' and pass='$pass'");
			$query->fetch_array(MYSQLI_ASSOC);
			if($query->num_rows>0)
			{ 
			  $_SESSION['email_ad']=$email;
			  return true;
			}
			else
			{
			  return false;
			}
			
			
		}
		public function users_profile($email)
		{
		   $query=$this->conn->query("select * from signup where email='$email' ");
			$row=$query->fetch_array(MYSQLI_ASSOC);
			if($query->num_rows>0)
			{ 
			  $this->data[]=$row;
			}
			return $this->data;
			
		}
		public function cat_shows()
		{
		    $query=$this->conn->query("select * from category");
			
			while($row=$query->fetch_array(MYSQLI_ASSOC))
			{ 
			  $this->cat[]=$row;
			}
			return $this->cat;
		}
		public function qus_show($qus)
		{
		    $query=$this->conn->query("select * from questions where cat_id='$qus'");
			if($query->num_rows>0)
			{ 
					  while($row=$query->fetch_array(MYSQLI_ASSOC))
					{ 
					  $this->qus[]=$row;
					}
					
					return $this->qus;
			}
			else
			{
			        return false;
			}
		
			
		
		}
		public function result_show($qus)
		{
		    $query=$this->conn->query("select * from result where cat_id='$qus'");
			if($query->num_rows>0)
			{ 
					  while($row=$query->fetch_array(MYSQLI_ASSOC))
					{ 
					  $this->qus[]=$row;
					}
					
					return $this->qus;
			}
			else
			{
			        return false;
			}
		
			
		
		}
		
		
		public function check_submit($st_id,$cat)
        {
		    $query=$this->conn->query("select * from result where st_id='$st_id' and cat_id='$cat'");
			
			if($query->num_rows>0)
			{ 
			  
			  return true;
			}
			else
			{
			  return false;
			}
			
			
		}
		
		
		public function answer($data)
		{
		   $ans=implode("",$data);
		   $right=0;
		   $wrong=0;
		   $no_answer=0;
		   
		   
		   $query=$this->conn->query("select id,ans from questions where cat_id='".$_SESSION['cat']."'");
		
			while($qust=$query->fetch_array(MYSQLI_ASSOC))
			{ 
			  if($qust['ans']==$_POST[$qust['id']])
			  {
			    $right++;
			  }
			  elseif($_POST[$qust['id']]=="no_attempt")
			  {
			     $no_answer++;
			  }
			  else
			  {
			     $wrong++;
			  }
			}
			$array=array();
			$array['right']=$right;
			$array['wrong']=$wrong;
			$array['no_answer']=$no_answer;
			
			
			$email=$_SESSION['email'];
			$query=$this->conn->query("select st_id,name from signup where email='$email'");
			$a=$query->fetch_array(MYSQLI_ASSOC);
			$st_name=$a['name'];
			$st_id=$a['st_id'];
			
			$total_qus=$right+$wrong+$no_answer;
			$wrong_t=$wrong+$no_answer;
			$per=($right*100)/($total_qus); 
			$per=substr($per,0,5);
		    $res= $per."%";
			$query=$this->conn->query("insert into result values ('$st_id','$st_name','".$_SESSION['cat']."','$total_qus','$right','$wrong_t','$res')");
			
			return $array;
		}
		
		 public function add_quiz($rec)
		 {
		  
		  if($this->conn->query($rec))
		  return true;
	      else return false;
		 }
		 public function set_time($rec)
		 {
		  $a=$this->conn->query($rec);
		  return true;
		 }
		 public function rel_time($rec)
		 {
		  $a=$this->conn->query($rec);
		  return true;
		 }
		 public function get_rel_time($data)
		 {
		    $query=$this->conn->query("select rel_time  from set_time where cat_id='$data'");
			$a=$query->fetch_array(MYSQLI_ASSOC);
			
			return $a['rel_time'];
		 }
		 public function get_time($data)
		 {
		    $query=$this->conn->query("select time from set_time where cat_id='$data'");
			$a=$query->fetch_array(MYSQLI_ASSOC);
			
			return $a['time'];
		 }
		 public function cat_name($data)
		 {
		  
		    $query=$this->conn->query("select cat_name from category where id='$data'");
			$a=$query->fetch_array(MYSQLI_ASSOC);
			
			return $a['cat_name'];
		 }
		 public function add_sub($data)
		 {
		  
		    $query=$this->conn->query("insert into category values ('','$data')");
			$query=$this->conn->query("insert into set_time values ('','0','0')");
			
			
			return true;
		 }
		  public function del_sub($data)
		 {
		  
		    $query=$this->conn->query("delete from category where id='$data'");
			$query=$this->conn->query("delete from set_time where cat_id='$data'");
			$query=$this->conn->query("delete from questions where cat_id='$data'");
			$query=$this->conn->query("delete from result where cat_id='$data'");
			return true;
		 }
		   public function del_res($data)
		 {
		  
		     $query=$this->conn->query("delete from result where cat_id='$data'");
			return true;
		 }
		    public function password($p1,$p2)
		 {
		  
		     $query=$this->conn->query("update admin set pass='$p2' where pass='$p1' and email='".$_SESSION['email_ad']."'");
			return true;
		 }
		 
		 
		 	  public function del_ques($data)
		 {
		  
		   
		
			$query=$this->conn->query("delete from questions where id='$data'");
			
			return true;
		 }
     	 
     	 
		  public function notice_board()
		 {
		  
			$query=$this->conn->query("SELECT MIN(rel_time) as near,cat_id,time FROM set_time WHERE rel_time>CURRENT_TIMESTAMP");
			$a=$query->fetch_array(MYSQLI_ASSOC);
			$data=$a['cat_id'];
			
			$array=array();
			$array['rel_time']=$a['near'];
			$array['time']=$a['time'];
			$query=$this->conn->query("select cat_name from category where id='$data'");
			$a=$query->fetch_array(MYSQLI_ASSOC);
			 
			$array['cat_name']=$a['cat_name'];
			
			return $array;
		 }
        public function url($url)
         { 
		    header("location:".$url);
          }		 
  }

?>