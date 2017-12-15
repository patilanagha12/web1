<?php include_once("db1.php");
	
?>
<?php
session_start();
	
if(isset($_SESSION['id']))
		{
			
			
			//echo "Welcome ".$_SESSION['id']."!";
			
		}
?>
 <?php

     extract($_POST);
  if (isset($_POST['save'])) 
    {
          $pic = rand(1000,100000)."-".$_FILES['img1']['name'];
          $pic_loc = $_FILES['img1']['tmp_name'];
          $folder="img/";
          $path="img/".$pic;
  
          if (!$pic_loc)
          {
             echo "<script>alert('Can't insert properly');window.location='incomplete_work.php';</script>";     
          }
          elseif(move_uploaded_file($pic_loc,$folder.$pic))
          {

          		$id=$_SESSION['id'];
          		 
                 // $date1=$date;
                   //$file = addslashes(file_get_contents($_FILES["img1"]["tmp_name"]));
                $sql="INSERT into service(sid1,sname,sdescription,sicon,simg) values('$id','$name','$incomplete','$path'
                ,'$pic_loc')";
                 
                // echo $sql;die;
                if (mysqli_query($conn,$sql)) 
                {
                    echo "<script>alert('inserted sucessfully');window.location='tablesm.php';</script>";
                } else 
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
          }

    }

       if (isset($_POST['save1'])) 
    {
          $pic = rand(1000,100000)."-".$_FILES['img11']['name'];
          $pic_loc = $_FILES['img11']['tmp_name'];
          $folder="img/";
          $path="img/".$pic;
          if (!$pic_loc)
          {
             echo "<script>alert('Can't insert properly');window.location='incomplete_work.php';</script>";     
          }
          elseif(move_uploaded_file($pic_loc,$folder.$pic))
          {  
            //$date11=$date;
           
                 // $date1=$year.'-'.$date.'-'.$month;
               // $sql="INSERT into cwork(ctitle,cdate,cdes,cimg) values('$name','$date1','$incomplete','$path')";
            $sql="UPDATE service SET sicon = '$path', sdescription = '$incomplete1', sname = '$name1',simg = '$pic_loc' WHERE sid = '".$_POST["bookId"]."'";
           //echo $sql;die;
                 
                 
                if (mysqli_query( $conn,$sql)) 
                {
                    echo "<script>alert('Updated sucessfully');window.location='tablesm.php';</script>";
                } else 
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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--<script src="js/jquery-1.10.2.min.js"></script>-->
<!-- Placed js at the end of the document so the pages load faster -->
<style type="text/css">
.nav-pills>li>a {
    border-radius: 4px;
    color: white!important;
}
	#h1{
		height: 55px;
	}
	.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #333030;
}
.active a i, .act a i {
    color: #ffffff;
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


.logo-icon a i {
    line-height: 1.4em;
    font-size: 1.5em;
    color: #fff;
    padding-top: 10px;
    display: none;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #5d5f60;
}
  .nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: black;
}
.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: #5d5f60;
    color: white;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #353f4f;
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

.button3{
    background-color: #7d97c1;

    border: none;
    color: white;
    padding: 7px 20px;

    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-bottom: 30px;

}
.button4{
     background-color: #7d97c1;

    border: none;
    color: white;
    padding: 7px 20px;

    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-left: 30px;
   

}
#im{
	font-size: 14px;
}
.user-name p {
    font-size: 14px;
    color: #5d5f60;
    line-height: 1em;
    font-weight: 700;
}

element.style {
    margin-top: -30px;
    color: #5d5f60;
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
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    border: 1px solid #bcb9b9;
}
</style>

</head> 
   
 <body class="sticky-header left-side-collapsed" >
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
						<li ><a href="tables.php"><i class="lnr lnr-user"></i> <span>About Us</span></a></li> 
						<!--<li><a href="forms.php"><i class="lnr lnr-spell-check"></i> <span>Forms</span></a></li>-->
						<li class="active"><a href="tablesm.php"><i class="lnr lnr-users"></i> <span>Service</span></a></li>              
					
							
						</li>   
						<li ><a href="tablesc.php"><i class="lnr lnr-store"></i> <span>Portfolio</span></a>  
							
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
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1" style="color:#1e4e84;">Service</h3>


					  <div class="x_content">
                 <div id="result"></div>
                <div class="tab-content">
                <div class="tab-pane active" id="tab1" role="tabpanel">
                <button data-toggle="modal" data-target="#addwork" class="button2 pull-right"> Add Service </button>
                     <div class="col-md-12 col-sm-6 col-xs-12"  style="overflow-x:auto;" >
                         <table class="table table-hover col-md-12 col-sm-4 col-xs-3 ">
                         	  	<thead style="background-color:#878a8e ;">
                         
                         <tr>
                           <th style="width: 10%;color: white;font-size: 16px;">No.</th>
                           <th style="width: 10%;color:  white;font-size: 16px;">Name</th>
                           <th style="width: 10%;color:   white;font-size: 16px;">Description</th>
                           <th style="width: 10%;color:  white;font-size: 16px;">Icon </th>
                           <th style="width: 10%;color:  white;font-size: 16px;">Action</th>
                         </tr>
                         </thead>
                         <?php
                           include 'db1.php';
              
                                $sql="SELECT * from service order by sid ";
                               $result = mysqli_query($conn,$sql);
                              $a=1;
                               while($row = mysqli_fetch_assoc($result)) 
                                {
                                ?>
                                    <tr>
                                 <td style="font-size: 16px;"><?php echo $a++;?></a></td><!--No-->
                                     <!--No-->
                                   
                                    <td style="font-size: 16px;"><?php echo $row['sname'];?></td><!--Event-->
 
      
                                         
          
                                    <td style="font-size: 16px;"><?php echo $row['sdescription'];?></td> <!--Dates-->

<!-- <a data-toggle="modal" data-date="<?php //echo $row['cdate'];?>" class="btn  open-AddBookDialog" href="#addwork1">EditDe</a> -->
      
                                           
            
                               
                                    
      
                                           
                                    <td><img src="<?php echo $row['sicon']; ?>" width="100px" height="80px"></td>  <!--Photo-->

                                   <td style='white-space: nowrap;font-size: 16px;'> <!--Action-->
                                        <a onclick="return confirm('Are you sure?')" href="?idd=<?php echo $row['sid'];?>" 
                                          class=btn btn-danger" id="del" style="font-size: 16px;color: black;">Delete</a>


                                        <a data-toggle="modal" 
                                        data-id="<?php echo $row['sid'];?>"  
                                        data-name="<?php echo $row['sname'];?>" 
                                        data-name0="<?php echo $row['sdescription'];?>" 
                                        data-icon="<?php echo $row['sicon'];?>"
                                        
                                  
                                        class="btn  open-AddBookDialog" href="#addwork1" style="font-size: 16px;color: black;">Edit</a> 
      
                                        
                                    </td>
                                    

         
        
                                    </tr>
                
                  
                           <?php
                              }
                if(isset($_GET['idd']))
                {
                  $id0=$_GET['idd'];
                 
                //  $result=$mysqli->query("delete from cwork where cid='$idd' ");
                  $result="DELETE from service where sid='$id0'";
                  //echo $result;die;
                  if(mysqli_query($conn, $result))
                          {
                            echo "<script>alert('Data deleted from database');window.location='tablesm.php';</script>";
                         }
                  
                }
           ?>
                  
                         </table> 
                      </div>


                 </div>
              </div>
                     </div>
                  </div>
              </div>
		
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

<div class="modal fade" id="addwork" role="dialog" tabindex="-1" aria-labeledby="Create Plan Modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Service </h4>
        </div>

     <div class="modal-body" >
               
      

              <form action="" method="POST" enctype="multipart/form-data">
               
          <input type="text" name="bookId" id="bookId" value=""  readonly=""  hidden="hidden" />

        <div class="col-md-12 col-sm-6 col-xs-12 form-group" >
         <label class="control-label col-md-4 col-sm-3 col-xs-12" style="font-size:13px;margin-left:-10px;">Service Name</label>
        <input type="text" name="name" id="name" class="form-control col-md-7 col-xs-12"  placeholder="Events Titles">
        </div>


 
            
    
        
         <div class="col-md-12 col-sm-6 col-xs-12 form-group">
         
                 <label class="control-label col-md-4 col-sm-3 col-xs-12" style="font-size:13px;margin-left:-10px;">Service Description</label>
                <textarea rows="2" name="incomplete" id="incomplete" class="form-control col-md-7 col-xs-12"   placeholder="Description"></textarea>
        </div>

        	<div class="col-md-12 col-sm-6 col-xs-12 form-group">
         
	                 <label class="control-label col-md-4 col-sm-3 col-xs-12" style="font-size:13px;margin-left:-10px;">Photo </label>
	                <input type="file" name="img1" id="img1" class="form-control col-md-7 col-xs-12"></textarea>
	                 <input type="hidden" name="action" id="action" value="insert" /> <!--1-->
	                  <input type="hidden" name="image_id" id="image_id" /> <!--1-->
                </div>
                  <button type="submit" class="button3" name="save" id="save" style="margin-left:15px;">Save</button>  
     
       </div>

       </form>

        <div class="modal-footer" style="margin-top:-30px;">
        </div>
       
      </div>
      
    </div>
  </div>



<div class="modal fade" id="addwork1" role="dialog" tabindex="-1" aria-labeledby="Create Plan Modal" >
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="width: 600px;">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Service </h4>
        </div>

     <div class="modal-body1" >
               
      

              <form action="" method="POST" enctype="multipart/form-data">
               
          <input type="text" name="bookId" id="bookId" value=""  readonly=""  hidden="hidden" />

        <div class="col-md-12 col-sm-6 col-xs-12 form-group" >
         <label class="control-label col-md-4 col-sm-3 col-xs-12" style="font-size:13px;margin-left:1px;margin-top: 20px;">Service Name</label>
        <input type="text" name="name1" id="name1" class="form-control "  placeholder="Events Titles" style="margin-left:10px; width:500px!important;">
        </div>


 
            
    
        
         <div class="col-md-12 col-sm-6 col-xs-12 form-group">
         
                 <label class="control-label col-md-4 col-sm-3 col-xs-12" style="font-size:13px;margin-left:1px;">Service Description</label>
                <textarea rows="2" name="incomplete1" id="incomplete1" class="form-control col-md-7 col-xs-12"  placeholder="Description" style="margin-left: 10px;width:500px!important;"></textarea>
        </div>

        	 <div class="col-md-9 col-sm-6 col-xs-12 form-group" id="hh">
                   <label style="margin-left: 20px;font-size:13px;">Photo Name:</label>
                     <input type="text" name="img11" id="img11" class="form-control col-md-7 col-xs-12" value="<?php echo $row['sicon']; ?>" readonly style="margin-left: 10px;width:500px!important;">

                 </div>  

        	<div class="col-md-12 col-sm-6 col-xs-12 form-group">
         
	                 <label class="control-label col-md-4 col-sm-3 col-xs-12" style="font-size:13px;margin-left:2px;">Photo </label>
	                <input type="file" name="img11" id="img11" class="form-control col-md-7 col-xs-12" style="margin-left: 10px;width:500px!important;"></textarea>
	                 <input type="hidden" name="action" id="action" value="insert" /> <!--1-->
	                  <input type="hidden" name="image_id" id="image_id" /> <!--1-->
                </div>
                  <button type="submit" class="button4" name="save1" id="save1" style="margin-right:80px;margin-top:10px;margin-bottom: 10px;">Save</button>  
     
       </div>

       </form>

        <div class="modal-footer">
        </div>
       
      </div>
      
    </div>
  </div>


  <script type="text/javascript">
  $(document).on("click", ".open-AddBookDialog", function () {

     
   // alert( myBookId1);

     var myBookId = $(this).data('id');
    
    $(".modal-body1 #bookId").val( myBookId );
    //alert( myBookId);
///////////////////////////////////////////////////////////////////////
     var myBookId1 = $(this).data('name');
    
    $(".modal-body1 #name1").val( myBookId1 );
   // alert( myBookId1);
    var myBookId2 = $(this).data('name0');  //date
     
    $(".modal-body1 #incomplete1").val( myBookId2 );

    //alert( myBookId2);
/////////////////////////////////////////////////////////////////
var myBookId4 = $(this).data('image');
///////////////////////////////////////////////////////////////////
      var myBookId3 = $(this).data('icon');  //date
     
    $(".modal-body1 #img11").val( myBookId3 );
///////////////////////////////////////////////////////////////

    
    $(".modal-body1 #img11").val( myBookId4 );


  /////////////////////////////////////////////////////////////
});

</script>