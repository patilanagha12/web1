<?php include_once("db1.php");
	
?>
<?php
session_start();
	
if(isset($_SESSION['id']))
		{
			
			
		//	echo "Welcome ".$_SESSION['id']."!";
			
		}
?>
 

<?php
	
		
			
	$w=$_POST['w'];
	$id=$_SESSION['id'];
	//$_SESSION['userid']=$userid;
	
	$w1=$_POST['w1'];
	$w2=$_POST['w2'];

	$check=mysqli_query($conn,"SELECT * FROM aboutus WHERE id ='$id'");
	//echo $check;die;
if(isset($_POST["w"])||isset($_POST["w1"])||isset($_POST["w2"]))
{
  //echo "nooo";
     $www = mysqli_real_escape_string($conn, $_POST["w"]);
       $www1 = mysqli_real_escape_string($conn, $_POST["w1"]);
         $www2 = mysqli_real_escape_string($conn, $_POST["w2"]);
     
      $id=$_SESSION['id'];
     $query = "INSERT INTO aboutus(id1,w,w1,w2) VALUES('$id','$www','$www1','$www2')";
//echo $query;die;

     if(mysqli_query($conn,$query))
     {
   // echo '<script type="text/javascript">alert("Data has been submitted");</script>';
     	echo '1';
     }
 }
else
{
	if(mysqli_num_rows($check)>=1)
	{


    //echo "User Already in Exists";
		    if(isset($_POST["w"])||isset($_POST["w1"])||isset($_POST["w2"]))
		    {
			     $ww = mysqli_real_escape_string($conn,$w);
			      $ww1 = mysqli_real_escape_string($conn,$w1);
			       $ww2 = mysqli_real_escape_string($conn,$w2);
			     
			    $id=$_SESSION['id'];
			     $query = "UPDATE aboutus SET w='$ww',w1='$ww1',w2='$ww2' WHERE id='$id'";
			     //echo $query;die;
			     if(mysqli_query($conn, $query))
			     {
			    //echo '<script type="text/javascript">alert("Data send successfully");</script>';
			     	echo '1';
			     }
		    }
    	}
}

 



/*
	$sql="INSERT into aboutus(w,id1,w1,w2)values('".$w."',".$id.",'".$w1."','".$w2."')";
		//echo $sql;die;
	$qury=mysqli_query($conn,$sql);
	//echo $qury;die;
	
	
	if($qury)
	{
		
		echo '1';
		
	}
	else
	{

		//echo "Successfully your account has been created";
		// echo "<script>alert('Successful !!!! your account has been created')</script>";
		
		
		 
		echo 'fail';

		  
		

		/*$redirect_page='http://localhost/anagha/d1.php?';
			
			$redirect=true;
			if($redirect==true)
			{
				header('Location:'.$redirect_page);
			}*/
		  
		//echo "<br /><a href='signupform.php'>SignUp</a>";
		//echo "<br /><a href='signinform.php'>SignIn</a>";
	//}
	
?>