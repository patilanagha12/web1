<?php include_once("db1.php");
  
?>
<?php
session_start();
  
if(isset($_SESSION['id'])) 
    {
      
      
    //echo "<br />Welcome ".$_SESSION['userid']."!";//session is used to store data in var and send perticular data over multiple webpages.
 // echo $_SESSION['id'];
    }
?>
<?php

  $id=$_SESSION['id'];
$check=mysqli_query($conn,"SELECT * FROM aboutus WHERE id1 ='$id'");

if(mysqli_num_rows($check)>=1)
{
    //echo "User Already in Exists";
    if(isset($_POST["w"])||isset($_POST["w1"])||isset($_POST["w2"])||isset($_POST["w3"]))
    {
     $ww = mysqli_real_escape_string($conn, $_POST["w"]);
       $ww1 = mysqli_real_escape_string($conn, $_POST["w1"]);
         $ww2 = mysqli_real_escape_string($conn, $_POST["w2"]);
          $ww3 = mysqli_real_escape_string($conn, $_POST["w3"]);
     
 
     $query = "UPDATE aboutus SET w='$ww',w1='$ww1',w2='$ww2',w3='$ww3' WHERE id1='$id'";

     if(mysqli_query($conn, $query))
     {
    echo '<script type="text/javascript">alert("Data send successfully");</script>';    
     }
    }
}
else
{
    if(isset($_POST["w"])||isset($_POST["w1"])||isset($_POST["w2"])||isset($_POST["w3"]))
  {
     $www= mysqli_real_escape_string($conn, $_POST["w"]);
      $www1= mysqli_real_escape_string($conn, $_POST["w1"]);
       $www2= mysqli_real_escape_string($conn, $_POST["w2"]);
        $www3= mysqli_real_escape_string($conn, $_POST["w3"]);
     
     $id=$_SESSION['id'];
     $query = "INSERT INTO aboutus(id1,w,w1,w2,w3) VALUES('$id','$www','$www1','$www2','$www3')";
     //echo $query;die;

     if(mysqli_query($conn, $query))
     {
    echo '<script type="text/javascript">alert("Data has been submitted");</script>';
     }
  }
}

?>



<!DOCTYPE HTML>
<html>
<head>
<title>Easy Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Tables :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">

 <script src="/anagha/bootbox.min.js"></script>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
 <script src="/anagha/bootbox.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--///////////////////////////////////////////////-->

<!--///////////////////////////////////////////////-->
<script src="js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<!--<script src="js/jquery-1.10.2.min.js"></script>-->
<!-- Placed js at the end of the document so the pages load faster -->
 

<style type="text/css">
  #h1{
    height: 55px;
  }
  
  #l1{
    width:100%;
  }
  #j{
    height: 950px;
  }
  section{
    padding-bottom: -100px;
  }
  .logo-icon a i {
    line-height: 1.4em;
    font-size: 1.5em;
    color: #fff;
    padding-top: 10px;
    display: none;
}
.sticky-header .logo {
    position: fixed;
    top: 0;
    left: 0;
    width: 200px;
    z-index: 100;
    background: #000000;
    border-bottom: 1px solid #303B4D;
    text-align: center;
    padding: 0.55em 0 1em;
}
  .custom-nav > li > a {
    color: white!important;
    
}.active a i, .act a i {
    color: #dbdbdb;
}
.active a i, .act a i {
    color: #ffffff;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #5d5f60;
}
.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: #5d5f60!important;
}
.lnr {
    font-family: Linearicons-Free;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    color: white;
    -moz-osx-font-smoothing: grayscale;
}
.custom-nav > li.active > a, .custom-nav > li.active > a:hover, .custom-nav > li.active > a:focus {
    background-color: #353f4f;
    color: #ffffff;
}

.left-side-collapsed .custom-nav li a i {
    margin-right: 0;
    font-size: 1.2em;
    color: white;
}.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: black;
}

  .button2{
    background-color:#7d97c1;

    border: none;
    color: white;
    padding: 10px 29px;

    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-bottom: 30px;
  
}
.button3{
    background-color:#705e66;

    border: none;
    color: white;
    padding: 10px 29px;

    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-bottom: 30px;

}
element.style {
    margin-top: -30px;
    color: #5d5f60!important;
}
.user-name p {
    font-size: 14px;
    color: #5d5f60;
    line-height: 1em;
    font-weight: 700;
}
.sticky-header .logo {
    position: fixed;
    top: 0;
    left: 0;
    width: 200px;
    z-index: 100;
    background: #000000;
    border-bottom: 1px solid #000000;
    text-align: center;
    padding: 0.55em 0 1em;
}
.toggle-btn {
    font-size: 15px;
    padding: 10px 0 0;
    width: 40px;
    height: 40px;
    margin: .4em 0 0 2em;
    text-align: center;
    cursor: pointer;
    float: left;
    color: #fff;
    background: #5d5f60;
    border: none;
    border-radius: 100%;
    -moz-transition: all 0.2s ease-out 0s;
    -webkit-transition: all 0.2s ease-out 0s;
    transition: all 0.2s ease-out 0s;
}
</style>

</head> 
   
 <body class="sticky-header left-side-collapsed"><!--onload="initMap()"-->
    <section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

      <!--logo and iconic logo start-->
      <div class="logo">
        
      </div>
      <div class="logo-icon text-center">
        <a href="index.php"><i class="lnr lnr-home"></i> </a>
      </div>

      <!--logo and iconic logo end-->
      <div class="left-side-inner">

        <!--sidebar nav start-->
          <ul class="nav nav-pills nav-stacked custom-nav">
            <li ><a href="index.php"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
            <li class="active"><a href="tables.php"><i class="lnr lnr-user"></i> <span>About Us</span></a></li> 
            <!--<li><a href="forms.php"><i class="lnr lnr-spell-check"></i> <span>Forms</span></a></li>-->
            <li><a href="tablesm.php"><i class="lnr lnr-users"></i> <span>Service</span></a></li>              
          
              
            </li>   
            <li><a href="tablesc.php"><i class="lnr lnr-store"></i> <span>Portfolio</span></a>  
              
            </li>   
            <li><a href="tablesp.php"><i class="lnr lnr-cart"></i> <span>Contact Us</span></a>  
              
            </li>
              
            
          </ul>
        <!--sidebar nav end-->
      </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content main-content4">
      <!-- header-starts -->
      <div class="header-section" id="h1">
       
      <!--toggle button start-->
      <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
      <!--toggle button end-->

      <!--notification menu start -->
        <div class="menu-right">
        <div class="user-panel-top">    
          
          <div class="profile_details" id="p">    
            <ul>
              <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <div class="profile_img"> 
                    <span style="background:url(images/1.jpg) no-repeat center"> </span> 
                     <div class="user-name">
                      <p>ABC<span>Administrator</span></p>
                     </div>
                     <i class="lnr lnr-chevron-down"></i>
                     <i class="lnr lnr-chevron-up"></i>
                    <div class="clearfix"></div>  
                  </div>  
                </a>
                <ul class="dropdown-menu drp-mnu">
                  <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                  <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
                  <li> <a href="sign-in.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                </ul>
              </li>
              <div class="clearfix"> </div>
            </ul>
          </div>    
                    
          <div class="clearfix"></div>
        </div>
        </div>
      <!--notification menu end -->
      </div>
  <!-- //header-ends -->

 
  <?php
 $id=$_SESSION['id'];
 $result1 = mysqli_query($conn,"SELECT * FROM aboutus WHERE id1='$id' "  );
 //echo $result1;
$row=mysqli_fetch_row($result1);
    $id=$row[0];
    $id1=$row[1];
    $w=$row[2];
    $w1=$row[3];
    $w2=$row[4];
    $w3=$row[5];
 if(mysqli_num_rows($result1) > 0 )
{
 // echo $testimonial ;
}
?>
      <div id="page-wrapper">
        <div class="graphs">
          <div class="jumbotron jumbotron-fluid" id="j">
           <div class="container">
              <p class="display-3" style="margin-top:-30px;color:#1e4e84;">About Us</p>
              <h6 class="lead" style="margin-top:-20px;color: #dee0e2;">____________________________________________________________________________________________________</h6>
            <form method="post" action="">
                  <h5 style="color: black;margin-top: -10px;font-size: 16px;color: #63659c;">Who we are ?</h5>
                  
            

                 <div class="container">
                  <div  class="col-lg-7" style="margin-left: 200px;margin-top: -20px;">
                    <textarea class="form-control " rows="8" id="w" name="w"><?php echo $w; ?></textarea>
                  </div>
                  <h6 class="lead" style="margin-top:-20px;color: #dee0e2;margin-top: 10px;">____________________________________________________________________________________________________</h6>
                 </div>

                  <div class="container">
               
                
                  <h5 style="color: black;margin-top:-10px;font-size: 16px;color: #63659c;">Why Choose Us ?</h5>
                  
                </div>

                 <div class="container">
                  <div  class="col-lg-7" style="margin-left: 200px;margin-top: -20px;">
                    <textarea class="form-control " rows="8" id="w1" name="w1"><?php echo $w1;?></textarea>
                  </div>
                  <h6 class="lead" style="margin-top:-20px;color: #dee0e2;margin-top: 10px;">____________________________________________________________________________________________________</h6>
                     <h5 style="color: black;margin-top: -10px;font-size: 16px;color: #63659c;">Video Link </h5>
                       <div  class="col-lg-7" style="margin-left: 200px;margin-top: -20px;">
                        <input type="text"  class="form-control " id="w2" name="w2" value="<?php echo $w2;?>">
                       </div><br><br><br>
                       <h6 class="lead" style="margin-top:-20px;color: #dee0e2;margin-top: 10px;">____________________________________________________________________________________________________</h6>
                       <h5 style="color: black;margin-top: -10px;font-size: 16px;color: #63659c;">Our Service</h5>
                  
            

                 <div class="container">
                  <div  class="col-lg-7" style="margin-left:180px;margin-top: -20px;">
                    <textarea class="form-control " rows="8" id="w3" name="w3"><?php echo $w3; ?></textarea>
                  </div>
                  <h6 class="lead" style="margin-top:-20px;color: #dee0e2;margin-top: 10px;">____________________________________________________________________________________________________</h6>
                 </div>
                      <button  class="button2">Submit</button>
                      <button  class="button3">Cancel</button>
                     </div>



          </form>
          
          </div><!--jumbotron-->

      </div>
    </div>

       
    
  </div>
    <!--footer section start-->
      <footer >
         <p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
      </footer>
        <!--footer section end-->
  </section>

  <script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
 
</body>
</html>
