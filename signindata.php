
<?php include_once("db1.php");
	
?>
<?php
	
		

	$em = $_POST['em'];
	$pass = $_POST['pass'];
       // $result1 = mysqli_query($conn,"SELECT username, password FROM phplogin WHERE username = '".$name."' AND  password = '".$password."'");

		// $result1 = mysqli_query($conn,"SELECT * FROM singup WHERE username='$uname' and password='$pass'");
		 $result1 = mysqli_query($conn,"SELECT * FROM signup WHERE email= '$em' and password='$pass'");
	
		 //echo $result1;die;
		$row=mysqli_fetch_row($result1);
		$id=$row[0];
		//$username=$row[1];
		//$password=$row[3];
        if(mysqli_num_rows($result1) > 0 )
        { 
        	echo "login Successful";
        	session_start();
        	$_SESSION['id']=$id;
        	$_SESSION["logged_in"] = true; 
        	  echo "<br />Welcome ".$_SESSION['id']."!";
        	// header('Location:detail.php');
        		$redirect_page='http://localhost/web1/index.php?';
			
			$redirect=true;
			if($redirect==true)
			{
				header('Location:'.$redirect_page);
			}
        	
        }
       else
        {
           
          	
			echo 'Login Fail';
			  header('Location:sign-in.php');
			 
		}   

		
		//$sql="SELECT count(*) FROM phplogin WHERE (
		//username='".$uname."' and password='".$pass."')";
/*		$sql=mysqli_query($conn,"SELECT * FROM phplogin WHERE username= '$uname' and password= '$pass'");
		
		$row=mysqli_fetch_row($sql);
		$userid=$row[0];
		$uname=$row[1];
		$pass=$row[2];
		//$qury=mysql_query($sql);
		//$qury=mysqli_query($conn,$sql);
	
		//$result=mysqli_fetch_array($qury);
		
			
			if($sql)
		{
			
			session_start();
			$_SESSION['usr']=$uname;
			$_SESSION['userid']=$userid;
			
			//echo "the data sent somewhere";
			
			
			$redirect_page='http://localhost/anagha/B.php?';
			
			$redirect=true;
			if($redirect==true)
			{
				header('Location:'.$redirect_page);
			}
		
			
			//$_SESSION['id']==$id;
			echo '
			    <center>
					<div class="alert alert-success" role="alert" style="margin-top:0px;">
		       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		         <span aria-hidden="true">&times;</span>
		       </button>
		 	     <strong>Successful Login!	</strong>
				 </div>
         </center>

				
		       ';
			 
		 		echo "<br />Welcome ".$_SESSION['usr']."!";
				echo "<br />Welcome ".$_SESSION['userid']."!";
			
		
		}
		else
	{
		echo '
			    <center>
					<div class="alert alert-success" role="alert" style="margin-top:0px;">
		       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		         <span aria-hidden="true">&times;</span>
		       </button>
		 	     <strong> Login Failed!	</strong>
				 </div>
         </center>

				<a class="btn btn-primary" href="signupform.php" type="submit" style="margin-left:370px;">SignUp</a>
		 <a class="btn btn-primary" href="signinform.php" type="submit" style="margin-left:260px;">SignIn</a>
		       ';


		}
*/


?>