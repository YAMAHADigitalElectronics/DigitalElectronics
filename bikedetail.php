
<!DOCTYPE html>
<html lang="en">
<head>
      <?php
      include('admin/conn.php');
   
      ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DigitalElectronics ||YAMAHA</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body> <div class="navbar navbar-inverse navbar-fixed-top " >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="img/Logo.jpg" height=60pxl><img src="img/logo1.png" height=60pxl>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right set-links">
                    <li><a href="index.php" onclick=$("#menu-close").click();>HOME</a></li>
                     
 <!-- Navigation -->
                </ul>
            </div>

        </div>
    </div>
   
    <!-- Header -->
   <!-- Parts --><section id="parts">
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Bike Details</h3> <div class="table-responsive">
                             <center>   <table >
                                    <thead>
                                  
                                       

            <?php
            include("admin/conn.php");
	$modelNo=$_POST["k"];
	
	$dir='admin/product_imgLocation';
  $result=mysqli_query($conn,"SELECT*from bikes where modelNo='$modelNo'") or die(mysqli_error($conn));

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
                <td><img src=".$dir."/".$loc."></td>
                  </tr><tr>
                   <th>ModelNo</th> <th>".$modelNo."</th></tr>
                    <tr><th>ModelName</th> <th>".$modelName."</th></tr>
                    <tr><th>category</th> <th>".$category."</th></tr>
                   <tr> <th>olourModelNo</th> <th>".$colour."</th></tr>
                   <tr> <th>Warenty</th> <th>".$warranty."</th></tr>
                   <tr> <th>Price</th> <th>".$price."</th></tr>
                   ";
            } 
?>                                       
                                    </thead>
                                </table>
                          </center>
   
                </div>
            </div>
        </div>

    </div>
    </aside>
</section><section id="comment">
    <div class="container">
        <div class="row">
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
                                                                             include("admin/conn.php");
	$modelNo=$_POST["k"];
 
  $result=mysqli_query($conn,"SELECT*from bikecomment where bikeId='$modelNo'") or die(mysqli_error($conn));
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
 <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3><strong> <center> Add a your comment here</center>
                          </strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                              <form action="bikecomment.php" method="POST" enctype="multipart/form-data">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        
                                      <tr>
                                        <th>Your name</th><th><input type="text" name="name"></th></tr>
                                       <tr> <th>E-mail</th><th><input type="text" name="mailId"></th></tr>
                                       <tr> <th>Comment</th><th><input type="comment" name="comment"></th></tr>
                                        <tr><th>BikeId</th><th><input type="text" name="new"  value="<?php $modelNo=$_POST["k"];
  echo$modelNo;?>" ></th>
                                       </tr>
                                          <th><input align="left" type="submit" name="insert_post" value="Post"></th>

                                          <th><input align="left" type="reset" name="reset_post" value="Clear"></th>
                                        </tr>
                                      </tbody>
                                </table>
                                </form>
                   
                  
    
                            </div>
                        </div>
                    </div>
                   

                         </div></div></div>
          </section>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Digital Electronics</strong>
                    </h4>
                    <p>62/16, Stanly Road,
                        <br>Jaffna, SriLanka</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (021) 222-4040</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:yamaha@example.com">yamaha@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">

                    <p class="text-muted">Copyright &copy; Digital Electronics 2017</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </section>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
</script>
    


</body>

</html>
