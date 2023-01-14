<!DOCTYPE htlml>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Commerce Store</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/style.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<body>
    <div id="top"> <!--Top Bar Start-->
    <div class="container"><!--Container start--->
    <div class="col-md-6 offer"><!--col-md-6 offer Start-->
        <a href="#" class="btn btn-danger btn-sm">
            !!!Welcome!!! 
        </a>
        <a href="#">Shopping Cart Total Price: NPR 100, Total Items 1</a>
    </div><!--col-md-6 offer End-->
    <div class="col-md-6">
        <ul class="menu">
            <li>
                <a href="customer_registration.php">Register</a>
            </li>
            <li>
                <a href="Checkout.php">My Account</a>
            </li>
            <li>
                <a href="cart.php">Go To Cart</a>
            </li>
            <li>
                <a href="login.php">Login</a>
            </li>

        </ul>
    </div>
    </div><!--Container End--->
        


    </div><!--Top Bar end-->
    <div class="navbar navbar-default" id="navbar"><!--navbar default start-->
    <div class="container">
        <div class="navbar-header"><!--navbar header start-->
            <a class="navbar-brand home" href="index.php">
                <!--<img src="images/logo.png" alt="Royalroom" class="hidden-xs">hidden-xs vaneko screen small huda hide hune-->
                <!--<img src="images/logoa.png" alt="Royalroom" class="visible-xs">visible-xs vaneko screen small huda view hune-->
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-align-justify"></i>
            </button>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search"><!--# is id-->
            <span class="sr-only"></span>
            <i class="fa fa-search" aria-hidden="true"></i>

            </button>
        </div><!--navbar header End -->
        <div class="navbar-collapse collapse" id="navigation"><!--navbar collapse collapse start-->
            <div class="padding-nav"><!--padding nav start-->
                <ul class="nav navbar-nav navbar-left">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="checkout.php">Checkout</a>
                    </li>
                    <li>
                    <a href="cart.php">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="service.php">Services</a>
                    </li>
                    <li>
                        <a href="contactus.php">Contact Us</a>
                    </li>
                </ul>
            </div><!--padding nav End-->
            <a href="cart.php" class="btn btn-primary navbar-btn right">
                <i class="fa fa-shopping-cart"></i>
                <span>4 Items In Cart</span>

            </a>
            <div class="navbar-collapse collapse right"><!--navbar collapse right-start-->
                
            <span class="input-group-btn">
            <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                    <span calss="sr-only">Search</span>
                    <i class="fa fa-search"></i>

                </button>
                </span>
            </div><!--navbar collapse right-end-->
            <div class="collapse clearfix" id="search">
                <form class="navabr-form" method="get" action="result.php">
                    <div class="input-group">
                        <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
                        <button type="submit" value="Search" name="Search" calss="btn btn-primary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div>
        


    </div>

    </div><!--navbar default End-->

    <div class="container" id="slider"><!--container start-->
        <div class="col-md-12"><!--col md 12 start-->
            <div class="carousel slide" id="myCarousel" data-ride="carousel"><!--carousel slide start-->
                <ol class="carousel-indicators"><!--indicator part-->
                    <li data-target="myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="myCarousel" data-slide-to="1"></li> 
                    <li data-target="myCarousel" data-slide-to="2"></li> 
                    <li data-target="myCarousel" data-slide-to="3"></li> 
                </ol>
                <div class="carousel-inner"><!--carousel inner start-->
                    <div class="item active">
                        <img src="admin-area/slider-images/1.jpg">
                    </div>
                    <div class="item">
                        <img src="admin-area/slider-images/2.jpg">
                    </div>

                    <div class="item">
                        <img src="admin-area/slider-images/1.jpg">
                    </div>
                    <div class="item">
                        <img src="admin-area/slider-images/4.jpg">
                    </div>


                </div><!--carousel inner end-->
                <a href="#myCarousel" class=" left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Pevious</span>
                </a>
                <a href="#myCarousel" class=" right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div><!--carousel slide  end-->

        </div><!--col md 12 end-->

    </div><!--container end-->
    <div id="advantage"><!--Advantage Start-->
        <div class="container"><!--container start-->
            <div class="same-height-row"><!--slider vnada tala ko container ko lai same height banako-->
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">BEST PRICES</a></h3>
                            <p>You can check on all others sites about the prices and then compare with us.</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">100% SATISFACTION GUARANTEED FROM US</a></h3>
                            <p>Free returns on everything for 1 week</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">WE LOVE OUR CUSTOMERS</a></h3>
                            <p>We are know to provide best possible service</p>

                    </div>
                </div>
                
            </div>

        </div><!--container end-->

    </div><!--Advantage End-->
    <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>Leatest This Week</h2>
                </div>

            </div>

        </div>

    </div>
    <div id="content" class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single Start-->
                <div class="product">
                    <a href="details.php">
                        <img src="admin-area/product-images/a.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Hogin Cotton 06 Pcs Apsaras Design Sofa Covers Set of 5 Seater (3+1+1), Cushion Cover 16x16 Set of 5, Total 11 pc Sets</a></h3>
                        <p class="price">NPR 1899</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"></i> Add to cart
                            </a>
                        </p>

                    </div>

                </div>

            </div><!--col-sm-4 col-sm-6 single end-->
            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single Start-->
                <div class="product">
                    <a href="details.php">
                        <img src="admin-area/product-images/a.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Hogin Cotton 06 Pcs Apsaras Design Sofa Covers Set of 5 Seater (3+1+1), Cushion Cover 16x16 Set of 5, Total 11 pc Sets</a></h3>
                        <p class="price">NPR 1899</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"></i> Add to cart
                            </a>
                        </p>

                    </div>

                </div>

            </div><!--col-sm-4 col-sm-6 single end--><div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single Start-->
                <div class="product">
                    <a href="details.php">
                        <img src="admin-area/product-images/a.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Hogin Cotton 06 Pcs Apsaras Design Sofa Covers Set of 5 Seater (3+1+1), Cushion Cover 16x16 Set of 5, Total 11 pc Sets</a></h3>
                        <p class="price">NPR 1899</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"></i> Add to cart
                            </a>
                        </p>

                    </div>

                </div>

            </div><!--col-sm-4 col-sm-6 single end--><div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single Start-->
                <div class="product">
                    <a href="details.php">
                        <img src="admin-area/product-images/a.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Hogin Cotton 06 Pcs Apsaras Design Sofa Covers Set of 5 Seater (3+1+1), Cushion Cover 16x16 Set of 5, Total 11 pc Sets</a></h3>
                        <p class="price">NPR 1899</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"></i> Add to cart
                            </a>
                        </p>

                    </div>

                </div>

            </div><!--col-sm-4 col-sm-6 single end-->
        </div>

    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>