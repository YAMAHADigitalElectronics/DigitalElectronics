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
   <style>
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
       <style>
.error {color: #FF0000;}
</style>
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
                    <li><a href="#top" onclick=$("#menu-close").click();>HOME</a></li>
                     <li><a href="#bike" onclick=$("#menu-close").click();>BIKES</a></li>
                     <li><a href="#parts" onclick=$("#menu-close").click();>PARTS</a></li>
                     <li><a href="#contact" onclick=$("#menu-close").click();>SERVICE STATIONS</a></li>
                    <li><a href="#about" onclick=$("#menu-close").click();>ABOUT</a></li>
                    <li><a href="#contact1" onclick=$("#menu-close").click();>CONTACT</a></li>
                    
                    
 <!-- Navigation -->
                </ul>
            </div>

        </div>
    </div>
   
    <!-- Header -->
    <header id="top" class="header">


        <div class="text-vertical-center">
            <font color='yellow'>
            <h1>Digital Electronics</h1>
            <h3>Pioneers in Bikes &amp; Parts sale</h3>
            <br>
            <a href="http://www.yamaha.lk/News.aspx"class="btn btn-dark btn-lg">Find Out Latest News</a>
        </div>
</font>
    </header>
<!-- bike -->
    <section id="bike" class="bike">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Bikes</h2>


                                <?php
                $dir='admin/product_imgLocation';
  $result=mysqli_query($conn,"SELECT*from bikes") or die(mysqli_error($conn));
  while($query_row=mysqli_fetch_assoc($result))
            { 
              $modelNo=$query_row['modelNo'];
              
              $loc=$query_row['imgLocation'];
          
        $a=$dir."/".$loc;
            echo"<form action=bikedetail.php method=POST><button type=submit name=k value=".$modelNo."><img src=".$dir."/".$loc."></button>";
            
            } 
?>  </form>
       </div><center><div >
       <a href="complaints.php" class="btn btn-info btn-lg" name="complaints" >Complaints</a>
       <a href="orders.php" class="btn btn-info btn-lg" name="orders">Place a pre order</a>
   </div></center>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    

    <!-- Parts --><section id="parts">

  

    
    <!-- Call to Action -->

    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Parts from us</h1>

                          <h3>Search  Bike Parts</h3> 
     <p>You  may search  by bike model and section</p> 
    <form action="parts.php" method="post">
        <select name=cat class=btn btn-info>
        <?php
 $result=mysqli_query($conn,"SELECT*from partimage") or die(mysqli_error($conn));

  while($query_row=mysqli_fetch_assoc($result))
            { 
              $cat=$query_row['category'];
             // $subcat=$query_row['subCategory'];
          
          

    echo" 

  <option value=".$cat.">".$cat."</option>";
            } 
?>
</select>
<select name="subcat" class="btn btn-info">
            <?php
 $result=mysqli_query($conn,"SELECT*from partimage") or die(mysqli_error($conn));
 

  while($query_row=mysqli_fetch_assoc($result))
            { 
             // $cat=$query_row['category'];
              $subcat=$query_row['subCategory'];
              

    echo" 

  <option value=".$subcat.">".$subcat."</option>";
            } 
?>
 
  
</select>
   

    <input type="submit" class="btn btn-info" value="search"/>
</form>
     
                    <center><div >
       <a href="complaints.php" class="btn btn-info btn-lg" name="complaints" >Complaints</a>
       <a href="orders.php" class="btn btn-info btn-lg" name="orders">Place a pre order</a>
   </div></center>
                </div>
                
            </div>
        </div>
    </aside>
</section>

    <!-- Map -->
 <section id="contact"><div > <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Our Network</h1></div></div></div>
 </div><div class="map">
        <div id="map"></div></div>
    </section>
    <!-- About -->
        <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Digital electronics is the only one dealer of YAMAHA in Jaffna peninsula!</h2>
                    <p class="lead">We are egerly waiting for giving a fabulas customer service <a target="_blank" href="http://yamaha.com/">Find our products world wide</a>.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
   

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <!--section id="services" class="services bg-primary"-->
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-motorcycle fa-stack-1x text-primary"></i>
                            </span><a href="#bike" class="btn btn-light">
                                <h4>
                                    <strong>Bikes</strong>
                                </h4>
                                <p>A large amount of bikes.</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-gear fa-stack-1x text-primary"></i>
                            </span>
                               <a href="#parts" class="btn btn-light"> <h4>
                                    <strong>Parts</strong>
                                </h4>
                                <p>All type of bike parts available here.</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-wrench fa-stack-1x text-primary"></i>
                            </span><a href="#contact" class="btn btn-light">
                                <h4>
                                    <strong>Service Stations</strong>
                                </h4>
                                <p>Big network of service stations.</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-phone fa-stack-1x text-primary"></i>
                            </span>
                            <a href="#contact1" class="btn btn-light">
                                <h4>
                                    <strong>Contact Us</strong>
                                </h4>
                                <p>Feelfree to contact us for anything.</p>
                              </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Footer -->
    <footer>
        <section id='contact1'>

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
    </footer>

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
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: new google.maps.LatLng(9.668626, 80.012501),
          mapTypeId: 'roadmap'
        });

        var icons = {
          ServStation: {
            icon:' img/mark5.png'
          },
          Showroom: {
            icon:' img/mark2.png'
          }


        };

        function addMarker(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        }

        var features = [
          {
            position: new google.maps.LatLng(9.668309,80.012366),
            type: 'Showroom'
          }
          ,{
            position: new google.maps.LatLng(9.800479,80.202916),
            type: 'Showroom'
          }
          ,{
            position: new google.maps.LatLng(9.741989,80.026102),
            type: 'Showroom'
          }
          ,{
            position: new google.maps.LatLng(9.667385,80.008457),
            type: 'ServStation'
          }
        ];
        

        for (var i = 0, feature; feature = features[i]; i++) {
          addMarker(feature);
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcgl_IGn_XVzfojzzLxHJeTLLx9WVuka8&callback=initMap">
    </script>
</body>

</html>
