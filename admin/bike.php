<!DOCTYPE html>
<html>
<head>
      <?php
      include('conn.php');
      session_start();
      if(!isset($_SESSION['id']))
        {
          header('location:loginpanel.php');
        }

      ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DigitalElectronics||AdminPanel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <!-- MORRIS CHART STYLES-->
    <link href="../js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Digital Electronics</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <div class="navbar-brand"> <img src='../img/logo1.png'> </div>
            </div>
  <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"><?php
           
            $id=$_SESSION['id'];
            
              $result=mysqli_query($conn,"SELECT*from usertable where id='$id'") or die(mysqli_error($conn));
              while($query_row=mysqli_fetch_assoc($result))
                        { 
                          $lName=$query_row['lName'];
                                       
                            echo "Welcome  ".$lName."";
                        } 


            ?>                          
            <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>

        </nav>   
           <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				          <li class="text-center">
                    
                      <img src="../img/find_user.png" class="user-image img-responsive"/>
                  
                    
					        </li>
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-book fa-3x"></i> Newsfeed</a>
                    </li>
                     <li>
                        <a  href="bike.php"><i class="fa fa-motorcycle fa-3x" ></i> Bikes</a>
                    </li>
                    <li>
                        <a  href="parts.php"><i class="fa fa-gears fa-3x"></i> Spare Parts</a>
                    </li>
						        <li >
                        <a   href="station.php"><i class="fa fa-wrench fa-3x"></i> Service Stations</a>
                    </li>	
                      <li  >
                        <a  href="staff.php"><i class="fa fa-users fa-3x"></i> Staffs</a>
                    </li>
                    <li  >
                        <a  href="complaints.php"><i class="fa fa-edit fa-3x"></i> Complaints </a>
                    </li>		       
                    <li>
                        <a href="feedback.php"><i class="fa fa-envelope fa-3x"></i> Feedback<span class="fa arrow"></span></a>
                    </li>  	
                    <li>
                        <a href="orders.php"><i class="fa fa-briefcase fa-3x"></i> Orders<span class="fa arrow"></span></a>
                    </li> 
                </ul>
              </div>
          </nav>  
 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Bike Details</h2>   
                        <h5>Bike details are here. </h5>
                    </div>
                </div>  
                      
                   
            <div class="row">
                <div class="col-md-12">
                    <!--  Tables --> 
                      <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3><strong> <center> Add a new Bike</center>
                          </strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                              <form action="bike.php" method="POST" enctype="multipart/form-data">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ModelNo</th>
                                            <th>ModelName</th>
                                            <th>category</th>
                                            <th>Colour</th>
                                            <th>Warranty</th>
                                            <th>Price</th>
                                            <th>SelectImage</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td><input type="text" name="modelNo"></td>
                                        <td><input type="text" name="modelName"></td>
                                        <td><input type="text" name="category"></td>
                                        <td><input type="text" name="colour"></td>
                                        <td><input type="text" name="warranty"></td>
                                        <td><input type="text" name="price"></td>
                                        <td><input type="file" name="img" id="fileToUpload" ></td>
                                      </tr>
                                       <tr>
                                          <th><input align="left" type="submit" name="insert_post" value="Save"></th>

                                          <th><input align="left" type="reset" name="reset_post" value="Clear"></th>
                                        </tr>
                                      </tbody>
                                </table>
                                </form>
                   
                  
    
                            </div>
                        </div>
                    </div>
                    <?php
include("conn.php");
  if(isset($_POST['insert_post']))
  {
    $modelNo=$_POST['modelNo'];
    $modelName=$_POST['modelName'];
    $category=$_POST['category'];
    $colour=$_POST['colour'];
    $price=$_POST['price'];
    $war=$_POST['warranty'];
    
    
    $file = rand(1000,100000)."-".$_FILES['img']['name'];
    $file_loc = $_FILES['img']['tmp_name'];
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);


    //move_uploaded_file($product_image1_tmp,"product_imgLocation/$product_image1");
    $folder="product_imgLocation/";
    move_uploaded_file($file_loc,$folder.$final_file);

     $insert_product="INSERT INTO bikes(modelNo,modelName,category,colour,warranty,price,imgLocation) values
     ('$modelNo','$modelName','$category','$colour','$war','$price','$final_file')";
     
     $insert_pro=mysqli_query($conn,$insert_product); echo"******";
     if($insert_pro)
     {
      echo"<script>alert('Product has been insered sucessfuly')</script>";
       echo"<script>window.open('bike.php','_self')</script>";
     }
  }
?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <h3><strong> <center>  Bike Table</center>
                          </strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ModelNo</th>
                                            <th>ModelName</th>
                                            <th>category</th>
                                            <th>Colour</th>
                                            <th>Warranty</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Edit Details</th>
                                        </tr>

                                    </thead>
                                    <tbody>
            <?php
            $dir='product_imgLocation';
  $result=mysqli_query($conn,"SELECT*from bikes") or die(mysqli_error($conn));
  while($query_row=mysqli_fetch_assoc($result))
            { 
              $modelNo=$query_row['modelNo'];
              $modelName=$query_row['modelName'];
              $category=$query_row['category'];
              $colour=$query_row['colour'];
              $warranty=$query_row['warranty'];
              $price=$query_row['price'];
              $loc=$query_row['imgLocation'];
          
       
                echo "<tr>
                    <td>".$modelNo."</td>
                    <td>".$modelName."</td>
                    <td>".$category."</td>
                    <td>".$colour."</td>
                    <td>".$warranty."</td>
                    <td>".$price."</td>
                    <td><img src=".$dir."/".$loc."></td>
                    <td><form action=editbike.php method=POST><button type=submit name=bikeedit value=".$modelNo.">edit</button>
                    </form> &nbsp &nbsp <form action=delete.php method=POST><button type=submit name=bikedel value=".$modelNo.">delete</button></td></form>
                  </tr>";
            } 
?>                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End Tables -->
                </div>
            </div>
                <!-- /. ROW  -->                       
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    
    
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../js/morris/raphael-2.1.0.min.js"></script>
    <script src="../js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../js/custom.js"></script> 
</body>
</html>
