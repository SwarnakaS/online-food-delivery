<!DOCTYPE html>
<html lang="en">
<?php
include("php_action/connection.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Best Food Corner</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <script src="js/modernizer.js"></script>

    </head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                               
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#menu">Menu</a></li>                                                              
                                    <li><a href="#reservation">Order</a></li>
                                    <li><a href="#footer">Contact us</a></li>

                                    

                                    <?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">signup</a> </li>';
							}
						else
							{
									//if user is login
									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">your orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">logout</a> </li>';
							}

						?>
                                </ul>
                                
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->
	
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Jaffna Dinner with us  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>Choose your Favorite Food </h2>
                           
                            <div class="book-btn">
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Order Now</a>
                            </div>
                            
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

   

    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Today's Special </h2>
                        <h5 class="title-caption text-center">  </h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            SALMON STEAK
                                            <div class="line"></div>
                                            <div class="dit-line"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/special-menu-1.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                         CHICKEN BURGER 
                                            <div class="line"></div>
                                            <div class="dit-line"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/burger.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            VEG. ROLL
                                            <div class="line"></div>
                                            <div class="dit-line"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/special-menu-3.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            8PC-KFC
                                            <div class="line"></div>
                                            <div class="dit-line"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/8PC-KFC.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            TANDOORI CHICKEN PIZZA
                                            <div class="line"></div>
                                            <div class="dit-line"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/special-menu-2.jpg" alt="sp-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->

    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Menu 	
					</h2>
                        <p class="title-caption text-center"> </p>
                    </div>
                    <div class="tab-menu">
                        <div class="slider slider-nav">
                            <div class="tab-title-menu">
                                <h2>RESTAURANT</h2>
                                <p> <i class="flaticon-canape"></i> </p>
                            </div>
                            
                            <div class="tab-title-menu">
                                <h2>MAIN DISHES</h2>
                                <p> <i class="flaticon-dinner"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DESERTS</h2>
                                <p> <i class="flaticon-desert"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DRINKS</h2>
                                <p> <i class="flaticon-coffee"></i> </p>
                            </div>
                        </div>
                        <div class="slider slider-single">
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/kfc.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>KFC</h3>
                                            <p>
                                               Hospital Rd, Jaffna 40000
                                                 </p>
                                             <p>  0212 228 228</p>
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/u.s-hotel.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>
                                                <a href="u.s-hotel.html">U.S. Restaurant</a>
                                            </h3>
                                            <p>
                                                No. 855 Hospital St, Jaffna 40000  
                                                                    
                                            </p>
                                            <p>  0212 220 695 </p> 
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end col -->
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/green-grass-hotel.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>
                                                <a href="greengrass-hotel&restaurant.html">Green Grass Hotel & Restaurant</a>
                                            </h3>
                                            
                                            <p>
                                                No.33 Aseervatham Lane, Jaffna 40000
                                                </p>
                                             <p> 0212 224 385</p>  
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end col -->
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/pennisula.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>Peninsula Hotel</h3>
                                            <p>
                                                 53 Kandy Rd, Jaffna 40000
                                                </p>
                                             <p> 078 310 6317</p>  
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end col -->
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/cosy%20resturant.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>
                                            <a href="cosy restaurant.html">Cosy Hotel & Restaurant</a>
                                                </h3>
                                            <p>
                                                266/1 Stanley Rd, Jaffna 40000
                                            </p>
                                             <p>  0212 225 899</p>  
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/tilko.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>Tilko Restaurant</h3>
                                            <p>
                                                 70/6, K.K.S. Road, Jaffna-Kankesanturai Rd, Jaffna 40000
                                            </p>
                                             <p>  0217 200 707</p>  
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/Malayan-3.png" alt="" class="img-responsive">
                                        <div>
                                            <h3>Malayan Cafe</h3>
                                            <p>
                                                C Ponnampalam Rd, Jaffna 40000
                                            </p>
                                             <p> 0212 222 373</p>  
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end col -->
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/valampuri-hotel.jpg" alt="" class="img-responsive">
                                        <div>
                                            
                                            <h3>
                                            
                                            <a href="valampuri.html">Valampuri</a>
                                                </h3>
                  
                                            <p>
                                                 148/10 Railway, Station Rd, Jaffna 40000
                                            </p>
                                             <p>  0212 220 111</p>  
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/pizza-hut.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>
                                                <a href="pizzahut.html">Pizza Hut</a>
                                            
                                            </h3>
                                            <p>
                                                 Hospital Rd, Jaffna 40000
                                            </p>
                                             <p> 0112 729 729</p>  
                                            
                                        </div>
                                    
                                    </div>
                                </div>
                                <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/nallur-bhaven.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>
                                                <a href="nallurbhaven.html">NallurBhavan Vegetarian Restaurant</a>
                                            
                                            </h3>
                                            <p>
                                                250 Kovil Rd, Jaffna 40000
                                            </p>
                                               <p>0212 220 695</p>
                                                                                      
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end col -->
                            
                            </div>
                        
                        
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/chickenkottu.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>CHICKEN KOTTU</h3>
                                           
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.420</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/hotbuttercuttlefish.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>HOT BUTTER CUTTLEFISH PIZZA - MEDIUM</h3>
                                            
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.850</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/eggkottu.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>EGG KOTTU</h3>
                                            
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.350</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/chickenrice&curry.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>CHICKEN RICE & CURRY</h3>
                                            
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.180</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/dumbiriyani.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>DUMBIRIYANI</h3>
                                            
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.220</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/veggiesupreme.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>VEGGIE SUPREME PIZZA - SMALL</h3>
                                            
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.450</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/vegrice&curry.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>VEG RICE & CURRY</h3>
                                            
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.140</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/navarathna-kuruma.png" alt="" class="img-responsive">
                                        <div>
                                            <h3>NAVARATHNA KURUMA</h3>
                                            
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.140</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/chickenthominiumsoup.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>CHICKEN SOUP</h3>
                                            
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.80</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/gallery_10.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>PRAWN FRIED RICE</h3>
                                            
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.245</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/chicken-pakora.jpeg" alt="" class="img-responsive">
                                        <div>
                                            <h3>CHICKEN PAKORA</h3>
                                            
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.245</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/butterNaan.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>BUTTER NAAN</h3>
                                            
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.180</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/seafood-fried-noodles.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>SEAFOOD FRIED NOODLES</h3>
                                            
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.220</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/mushroom-masala.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>MUSHROOM MASALA</h3>
                                            
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.325</span>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/almond-and-date-cake-.jpeg" alt="" class="img-responsive">
                                        <div>
                                            <h3>ALMOND & DATE CAKE</h3>
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.100</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/apple-berry-crumble.jpeg" alt="" class="img-responsive">
                                        <div>
                                            <h3>APPLE BERRY CRUMBLE</h3>
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.150</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/maltesers-tiramisu.jpeg" alt="" class="img-responsive">
                                        <div>
                                            <h3>MALTESERS TIRAMISU</h3>
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.120</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/don.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>DONNET</h3>
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.75</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/honey-cheesecake.jpeg" alt="" class="img-responsive">
                                        <div>
                                            <h3>HONEY CHEESE CAKE</h3>
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.50</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/pineappleupside.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>PINEAPPLE UPSIDE</h3>
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.160</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/gulab-jamun.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>GULAB JAMUN</h3>
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.45</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/chocolate%20-coffee%20-truffle.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>CHOCLOATE COFFEE TRUFFLE</h3>
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.65</span>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <div>
                               
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/whisky-chai.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>WHISKY</h3>
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.240</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/freshwatermelonjuice.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>FRESH WATERMELON JUICE</h3>
                                           <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.125</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/Black-Coffee1.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>BLACK COFFEE</h3>
                                           <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.65</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/wine.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>wine</h3>
                                           <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">$Rs.400</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                 
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/bloody-fairy.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>BLOODY FAIRY</h3>
                                           <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.180</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/almond-milk.png" alt="" class="img-responsive">
                                        <div>
                                            <h3>ALMOND MILK</h3>
                                           <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">$Rs.120</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/rose.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>ROSE DRINK</h3>
                                            <button class="button button3">Add cart</button>
                                        </div>
                                        <span class="offer-price">Rs.110</span>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                        </div>
                    </div>
                    <!-- end tab-menu -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->

    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
						Food Order			
					</h2>
                        </div>
                        <h4 class="form-title">Booking Your Favorite Food Items</h4>
                        

                        <form id="contact-form" method="post" class="reservations-box" name="contactform" action="mail.php">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="form_name" id="form_name" placeholder="Name" required="required" data-error="Firstname is required.">
                                </div>
                            </div>
                            <!-- end col -->
                           
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="phone" id="phone" placeholder="contact no.">
                                </div>
                            </div>
                            <!-- end col -->
                           
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="date-picker" id="date-picker" placeholder="Date" required="required" data-error="Date is required." />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="time-picker" id="time-picker" placeholder="Time" required="required" data-error="Time is required." />
                                </div>
                            </div>
                            <!-- end col -->
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="location" id="location" placeholder="Enter Your Delivery Location" required="required" data-error="location is required." />
                                </div>
                            </div>
                            <!-- end col -->
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="order" id="order" placeholder="No of order" required="required" data-error="order is required." />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="Restaurant Name" id="Restaurant Name" class="selectpicker">
                                        <option selected disabled>Restaurant Name</option>
                                        <option>KFC</option>
                                        <option>Pizza Hut</option>
                                        <option>Green Grass Hotel & Restaurant</option>
                                        <option>Cosy Restaurant</option>
                                        <option>U.S Restaurant</option>
                                        <option>Nallurbhavan</option>
                                        <option>Malayan Cafe</option>
                                        <option>Pennisula</option>
                                        <option>Valampuri Hotel</option>
                                        <option>Tilko Restaurant</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="Favorite Food" id="Favorite Food" class="selectpicker">
                                        <option selected disabled>Favorite Food</option>
                                        <option>Hot butter cuttlefish Pizza</option>
                                        <option>Tandoori chicken Pizza</option>
                                        <option>Veggie supreme Pizza</option>
                                        <option>Spicy sea food Pizza</option>
                                         <option>KFC Chicken</option>
                                         <option>Burger</option>
                                         <option>Egg kottu</option>
                                        <option>veg rice & curry</option>
                                        <option>Egg kottu</option>
                                        <option>Mutton briyani</option>
                                                                            
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">Booking Order </button>
                                </div>
                            </div>
                            <!-- end col -->
                        </form>
                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end reservations-main -->

    <div id="footer" class="footer-main">
        
        <!-- end footer-news -->
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>Find Us on Social Media</h3>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-instagram"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-b">
                                <h3>For You</h3>
                                <ul>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                </ul>
                            </div>
                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>Point Pedro, Jaffna</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
									+94 777158528 
								</span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">jaffna@foodorder.com</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Opening Hours</h3>

                                <ul>
                                    <li>
                                        <p>Monday - Thursday </p>
                                        <span> 09:30 AM - 9:00 PM</span>
                                    </li>
                                    <li>
                                        <p>saturday - Sunday </p>
                                        <span>  10:00 AM - 5:00 PM</span>
                                    </li>
                                </ul>
                                
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
        <!-- Colors -->
        <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
        </div>
    </section>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>