<?php include 'db1.php';
?>
<?php
	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$em=$_POST['em'];
	$mob=$_POST['mob'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];





  $result1 = mysqli_query($conn,"SELECT email FROM signup WHERE email= '$em'");
	

  if (mysqli_num_rows($result1) != 0)
  {
      echo "Email already exists";
      //header('Location:register.php');
  }

  else
  {
    	echo '........';

	$sql = "INSERT INTO signup (firstname,lastname,email,password,confirmpassword,mobile)
	VALUES ('".$fn."','".$ln."','".$em."','".$pass."','".$cpass."','".$mob."')";

	//echo $sql;die;
	 

	$qury=mysqli_query($conn,$sql);

	if($qury)
	   {

	      echo "Account Created Successfully";
	      // header('Location:welcome.php');


	   }

	   else
	   {
	      echo 'Insertion Fail';
	   }
	 
  }


?>