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
$check=mysqli_query($conn,"SELECT * FROM contact WHERE id1 ='$id'");

if(mysqli_num_rows($check)>=1)
{
       
   

    //echo "User Already in Exists";
    if(isset($_POST["a"])||isset($_POST["d"])||isset($_POST["e"])||isset($_POST["f"])||isset($_POST["g"])||isset($_POST["h"])||isset($_POST["i"])||isset($_POST["j"])||isset($_POST["k"])||isset($_POST["l"])||isset($_POST["m"])||isset($_POST["n"])||isset($_POST["o"])||isset($_POST["p"])||isset($_POST["q"])||isset($_POST["r"])||isset($_POST["s"])||isset($_POST["t"])||isset($_POST["u"]))
    {
     $ww = mysqli_real_escape_string($conn, $_POST["a"]);
       
          $ww3 = mysqli_real_escape_string($conn, $_POST["d"]);
       $ww4 = mysqli_real_escape_string($conn, $_POST["e"]);
         $ww5 = mysqli_real_escape_string($conn, $_POST["f"]);
          $ww6 = mysqli_real_escape_string($conn, $_POST["g"]);
       $ww7 = mysqli_real_escape_string($conn, $_POST["h"]);
         $ww8 = mysqli_real_escape_string($conn, $_POST["i"]);
          $ww9 = mysqli_real_escape_string($conn, $_POST["j"]);
       $ww10 = mysqli_real_escape_string($conn, $_POST["k"]);
         $ww11 = mysqli_real_escape_string($conn, $_POST["l"]);
          $ww12 = mysqli_real_escape_string($conn, $_POST["m"]);
       $ww13 = mysqli_real_escape_string($conn, $_POST["n"]);
         $ww14 = mysqli_real_escape_string($conn, $_POST["o"]);
          $ww15 = mysqli_real_escape_string($conn, $_POST["p1"]);
       $ww16 = mysqli_real_escape_string($conn, $_POST["q"]);
         $ww17 = mysqli_real_escape_string($conn, $_POST["r"]);
          $ww18 = mysqli_real_escape_string($conn, $_POST["s"]);
       $ww19 = mysqli_real_escape_string($conn, $_POST["t"]);
         $ww20 = mysqli_real_escape_string($conn, $_POST["u"]);
     
 
     $query = "UPDATE contact SET a='$ww',d='$ww3',e='$ww4',f='$ww5',g='$ww6',h='$ww7',i='$ww8',j='$ww9',k='$ww10',l='$ww11',m='$ww12',n='$ww13',o='$ww14',p='$ww15',q='$ww16',r='$ww17',s='$ww18',t='$ww19',u='$ww20' WHERE id1='$id'";
      //echo $query;die;
     if(mysqli_query($conn, $query))
     {
    echo '<script type="text/javascript">alert("Data send successfully");</script>';    
     }
    }
}
else
{
      extract($_POST);
     
                $id=$_SESSION['id'];



                if(isset($_POST["a"])||isset($_POST["d"])||isset($_POST["e"])||isset($_POST["f"])||isset($_POST["g"])||isset($_POST["h"])||isset($_POST["i"])||isset($_POST["j"])||isset($_POST["k"])||isset($_POST["l"])||isset($_POST["m"])||isset($_POST["n"])||isset($_POST["o"])||isset($_POST["p"])||isset($_POST["q"])||isset($_POST["r"])||isset($_POST["s"])||isset($_POST["t"])||isset($_POST["u"]))
    {
     $ww = mysqli_real_escape_string($conn, $_POST["a"]);
       
          $ww3 = mysqli_real_escape_string($conn, $_POST["d"]);
       $ww4 = mysqli_real_escape_string($conn, $_POST["e"]);
         $ww5 = mysqli_real_escape_string($conn, $_POST["f"]);
          $ww6 = mysqli_real_escape_string($conn, $_POST["g"]);
       $ww7 = mysqli_real_escape_string($conn, $_POST["h"]);
         $ww8 = mysqli_real_escape_string($conn, $_POST["i"]);
          $ww9 = mysqli_real_escape_string($conn, $_POST["j"]);
       $ww10 = mysqli_real_escape_string($conn, $_POST["k"]);
         $ww11 = mysqli_real_escape_string($conn, $_POST["l"]);
          $ww12 = mysqli_real_escape_string($conn, $_POST["m"]);
       $ww13 = mysqli_real_escape_string($conn, $_POST["n"]);
         $ww14 = mysqli_real_escape_string($conn, $_POST["o"]);
          $ww15 = mysqli_real_escape_string($conn, $_POST["p1"]);
       $ww16 = mysqli_real_escape_string($conn, $_POST["q"]);
         $ww17 = mysqli_real_escape_string($conn, $_POST["r"]);
          $ww18 = mysqli_real_escape_string($conn, $_POST["s"]);
       $ww19 = mysqli_real_escape_string($conn, $_POST["t"]);
         $ww20 = mysqli_real_escape_string($conn, $_POST["u"]);
        
               
                $sql="INSERT into contact(id1,a,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u)values(".$id.",'".$ww."','".$ww3."',
                '".$ww4."','".$ww5."','".$ww6."','".$ww7."','".$ww8."','".$ww9."','".$ww10."','".$ww11."','".$ww12."','".$ww13."','".$ww14."','".$ww15."','".$ww16."','".$ww17."','".$ww18."','".$ww19."','".$ww20."')";
                             
        //echo $sql;die;
                  if (mysqli_query($conn,$sql)) 
                            {
                                echo "<script>alert('inserted sucessfully');window.location='tablesp.php';</script>";
                            } 
                            else 
                            {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
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
<!--<script src="js/jquery-1.10.2.min.js"></script>-->
<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/wow.min.js"></script>
    <script>
         new WOW().init();
    </script>


<style type="text/css">
	#h1{
		height: 55px;
	}
	
  
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #353f4f!important;
}
.custom-nav > li.active > a, .custom-nav > li.active > a:hover, .custom-nav > li.active > a:focus {
    background-color: #353f4f;
    color: #ffffff;
}
ul.nav li a span {
    padding-left: .5em;
    color: white;
}
.active a i, .act a i {
    color: #ffffff;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #58638c!important;
    cursor: default;
    background-color: #ffffff!important;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
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
.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: #5d5f60!important;
}

.left-side-collapsed .custom-nav li a i {
    margin-right: 0;
    font-size: 1.2em;
    color: white;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #353f4f!important;
}

.logo-icon a i {
    line-height: 1.4em;
    font-size: 1.5em;
    color: #fff;
    padding-top: 10px;
    display: none;
}
	.button1{
    background-color: #4CAF50;

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
.button4{
    background-color:#563d96;
	
    border: none;
    color: white;
    padding: 6px 11px;

    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
        margin-bottom: -10px;
  font-size: 14px;

}
#im{
	font-size: 14px;
}
#tt{
	margin-top: 10px;
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
   
 <body class="sticky-header left-side-collapsed">
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
						<li><a href="tables.php"><i class="lnr lnr-user"></i> <span>About Us</span></a></li> 
						<!--<li><a href="forms.php"><i class="lnr lnr-spell-check"></i> <span>Forms</span></a></li>-->
						<li><a href="tablesm.php"><i class="lnr lnr-users"></i> <span>Service</span></a></li>              
					
							
						</li>   
						<li><a href="tablesc.php"><i class="lnr lnr-store"></i> <span>Portfolio</span></a>  
							
						</li>   
						<li class="active"><a href="tablesp.php"><i class="lnr lnr-cart"></i> <span>Contact Us</span></a>  
							
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
									<li> <a href="sign-up.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
 $result1 = mysqli_query($conn,"SELECT * FROM contact WHERE id1='$id' ");
 //echo $result1;
$row=mysqli_fetch_row($result1);
    $id=$row[0];
    $id1=$row[1];
    $w=$row[2];//a
    $w1=$row[3];//d
    $w2=$row[4];//e
      $w3=$row[5];//f
    $w4=$row[6];//g
    $w5=$row[7];//h
      $w6=$row[8];//i
    $w7=$row[9];//j
    $w8=$row[10];//k
      $w9=$row[11];//l
    $w10=$row[12];//m
    $w11=$row[13];//n
      $w12=$row[14];//o
    $w13=$row[15];//p
    $w14=$row[16];//q
      $w15=$row[17];//r
    $w16=$row[18];//s
    $w17=$row[19];//t
      $w18=$row[20];//u
   
 if(mysqli_num_rows($result1) > 0 )
{
 // echo $testimonial ;
}
?>
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1" style="color:#1e4e84;">Contact us</h3>


					 <ul class="nav nav-tabs">
                        <li class="active"><a href="#info-tab" data-toggle="tab" style="font-size: 16px;color: #63659c;">Setting <i class="fa"></i></a></li>
                        <li><a href="#address-tab" data-toggle="tab" style="font-size: 16px;color: #63659c;">SEO<i class="fa"></i></a></li>
                         <li><a href="#contact" data-toggle="tab" style="font-size: 16px;color: #63659c;">Contact Info<i class="fa"></i></a></li>
                    </ul>

            
                           <form action="" method="POST" enctype="multipart/form-data" id="accountForm" class="form-horizontal">
                    <div class="tab-content" id="tt">

                                <div class="tab-pane active" id="info-tab">
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Set Title</label>
                                                <div class="col-xs-5">
                                                    <input type="text" class="form-control" name="a" id="a" value="<?php echo $w;?>"/>
                                                </div>
                                            </div>

                                          

                                            <div class="form-group">
                                                <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">WebMaster Email</label>
                                                <div class="col-xs-5">
                                                    <input type="text" class="form-control" name="d" id="d" value="<?php echo $w1;?>"/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Copyright</label>
                                                <div class="col-xs-5">
                                                    <input type="text" class="form-control" name="e" id="e" value="<?php echo $w2;?>"/>
                                                </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Description</label>
                                                <div  class="col-md-5">
                                                        <textarea class="form-control " rows="4" name="f" id="f"><?php echo $w3;?></textarea>
                                                        </div>
                                            </div>

                                </div>

        <!--////////////////////////////////////////////////////////////////////////////////////////////////////-->
                                <div class="tab-pane" id="address-tab">

                                  <div class="form-group">
                                        <label class="col-xs-3 control-label" style="font-size: 14px; resize: none;color: #63659c;">Meta Description</label>
                                        <div  class="col-xs-7">
                                                    <textarea class="form-control " rows="9" name="g" id="g">
                                                        <?php echo $w4;?>
                                                    </textarea>
                                                </div>
                                    </div>

                                   <div class="form-group">
                                        <label class="col-xs-3 control-label" style="font-size: 14px; resize: none;color: #63659c;">Meta Keyword</label>
                                        <div  class="col-xs-7">
                                                    <textarea class="form-control " rows="9" name="h" id="h"><?php echo $w5;?></textarea>
                                                </div>
                                    </div>


                                    
                                </div>
        <!--////////////////////////////////////////////////////////////////////////////////////////////////////-->
                                 <div class="tab-pane" id="contact">

                                    

                                    <div class="form-group">
                                         <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Logngitude</label>
                                            <div class="col-xs-2">
                                                <input type="text" class="form-control" name="i" id="i" placeholder="" value="<?php echo $w6;?>"/>
                                            </div>
                            
                                    </div>

                                   <div class="form-group">  
                                     <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Latitude</label>
                                        <div class="col-xs-2">
                                            <input type="text" class="form-control" name="j" id="j" placeholder="" value="<?php echo $w7;?>"/>
                                        </div>
                                    </div>
                                              
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Address</label>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" name="k" id="k" value="<?php echo $w8;?>"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Phone</label>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" name="l" id="l" value="<?php echo $w9;?>"/>
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Whatsapp</label>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" name="m" id="m" value="<?php echo $w10;?>"/>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Skype</label>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" name="n" id="n" value="<?php echo $w11;?>"/>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Your website</label>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" name="o" id="o" value="<?php echo $w12;?>"/>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Facebook Account</label>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" name="p1" id="p1" value="<?php echo $w13;?>"/>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Google Plus accout</label>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" name="q" id="q" value="<?php echo $w14;?>"/>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Twitter </label>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" name="r" id="r" value="<?php echo $w15;?>"/>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">LInked In</label>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" name="s" id="s" value="<?php echo $w16;?>"/>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Instagram</label>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" name="t" id="t" value="<?php echo $w17;?>"/>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-xs-3 control-label" style="font-size: 14px;color: #63659c;">Youtube</label>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" name="u" id="u" value="<?php echo $w18;?>"/>
                                        </div>
                                    </div>

                                 
                                    </div>
                    </div>

                    <div class="form-group" style="margin-top: 15px;">
                        <div class="col-xs-5 col-xs-offset-3">
                         <button class="button2"   name="save" id="save">Submit</button>
                             <button type="submit" class="button3">Cancel</button>
                        </div>
                         
                           
                        
                    </div>
                </form>
                					 
            </div></div></div>
		<!--footer section start-->
			<footer>
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