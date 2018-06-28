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
                <a class="navbar-brand" href="index.html"><img src='../img/logo1.png'></a> 
            </div>
  <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"><?php
              $result=mysqli_query($conn,"SELECT*from usertable where id='1'") or die(mysqli_error($conn));
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
                    <a href="changepassword.php"><i class="fa fa-gear fa-2x"></i> change password</a>
					        </li>
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-book fa-3x"></i> Newsfeed</a>
                    </li>
                     <li>
                        <a  href="bike.php"><i class="fa fa-home fa-3x"></i> Bikes</a>
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
                     <h2>NewsFeed</h2> 
                 <h5>View your news feed here. </h5>
                 <a href="http://www.yamaha.lk/News.aspx">Latest News</a>
                    </div>
                </div>
       

            <div class="row/">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                   
                    <div class="chat-panel panel panel-default chat-boder chat-panel-head" >
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Bike comment Box
                          </div> 

                        <div class="panel-body">
                            <ul class="chat-box">
                               
                           
                    
                                <li class="right clearfix">
                                   
                                    <div class="chat-body clearfix">
                                        
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>13 mins ago</small>
                                            
                                      
                                        <p>
                                                                            <?php
  $result=mysqli_query($conn,"SELECT*from bikecomment") or die(mysqli_error($conn));
  while($query_row=mysqli_fetch_assoc($result))
            { 
              $bikeId=$query_row['bikeId'];
              
              $userName=$query_row['userName'];
              
              $comment=$query_row['comment'];
        
              
                echo "".$bikeId."</br>
                    
                   ________________</br> ".$userName."</br>
                    
                    ".$comment."</br>..........................................................................................
                    </br>";
            } 
?>  
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div></div>
                         </div></div>
                                    <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                   
                    <div class="chat-panel panel panel-default chat-boder chat-panel-head" >
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Parts comment Box
                          </div> 

                        <div class="panel-body">
                            <ul class="chat-box">
                               
                           
                    
                                <li class="right clearfix">
                                   
                                    <div class="chat-body clearfix">
                                        
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>13 mins ago</small>
                                            
                                      
                                        <p>
                                                                            <?php
  $result=mysqli_query($conn,"SELECT*from partscomment") or die(mysqli_error($conn));
  while($query_row=mysqli_fetch_assoc($result))
            { 
              
              
              $userName=$query_row['userName'];
              
              $comment=$query_row['comment'];
        
              
                echo "".$userName."</br>_____________________</br>
                    
                    ".$comment."</br>..........................................................................................
                    ";
            } 
?>  
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div></div>
                         </div></div>
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
