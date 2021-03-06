<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title>TSHOP - Bootstrap E-Commerce Parallax Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="assets/js/pace.min.js"></script>
</head>

<body>

<!-- Modal Login start -->
<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> Login to LIQUORMART </h3>
            </div>
            <div class="modal-body">
                <div class="form-group login-username">
                    <div>
                        <input name="log" id="login-user" class="form-control input" size="20"
                               placeholder="Enter Username" type="text">
                    </div>
                </div>
                <div class="form-group login-password">
                    <div>
                        <input name="Password" id="login-password" class="form-control input" size="20"
                               placeholder="Password" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" value="forever" checked="checked" type="checkbox">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="LOGIN" type="submit">
                    </div>
                </div>
                <!--userForm-->

            </div>
            <div class="modal-footer">
                <p class="text-center"> Not here before? <a data-toggle="modal" data-dismiss="modal"
                                                            href="#ModalSignup"> Sign Up. </a> <br>
                    <a href="forgot-password.html"> Lost your password? </a></p>
            </div>
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>
<!-- /.Modal Login -->

<!-- Modal Signup start -->
<div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> REGISTER </h3>
            </div>
            <div class="modal-body">
                <div class="control-group"></div>
<div class="form-group reg-username">
            <div>
                        <input name="login" class="form-control input" size="20" placeholder="Enter Username"
                               type="text">
                    </div>
                </div>
                <div class="form-group reg-email">
                    <div>
                        <input name="reg" class="form-control input" size="20" placeholder="Enter Email" type="text">
                    </div>
                </div>
                <div class="form-group reg-password">
                    <div>
                        <input name="password" class="form-control input" size="20" placeholder="Password"
                               type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" id="rememberme" value="forever" checked="checked"
                                       type="checkbox">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="REGISTER" type="submit">
                    </div>
                </div>
                <!--userForm-->

            </div>
            <div class="modal-footer">
                <p class="text-center"> Already member? <a data-toggle="modal" data-dismiss="modal" href="#ModalLogin">
                    Sign in </a></p>
            </div>
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>
<!-- /.ModalSignup End -->

<!-- Fixed navbar start -->
<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                    <div class="pull-left ">
                        <ul class="userMenu ">
                            <li><a href="#"> <span class="hidden-xs">HELP</span><i
                                    class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a></li>
                            <li class="phone-number"><a href="callto:+12025550151"> <span> <i
                                    class="glyphicon glyphicon-phone-alt "></i></span> <span class="hidden-xs"
                                                                                             style="margin-left:5px"> +254 731 409 276 </span>
                            </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                    <div class="pull-right">
                        <ul class="userMenu">
                          <li><a href="account-1.html"><span class="hidden-xs"> My Account</span> <em class="glyphicon glyphicon-user hide visible-xs "></em></a></li>
                          <li><a href="#" data-toggle="modal" data-target="#ModalLogin"> <span class="hidden-xs">Sign In</span>
                                <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a></li>
                            <li class="hidden-xs"><a href="#" data-toggle="modal" data-target="#ModalSignup"> Create
                                Account </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.navbar-top-->

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                    class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span
                    class="icon-bar"> </span> <span class="icon-bar"> </span></button>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"><i
                    class="fa fa-shopping-cart colorWhite"> </i> <span
                    class="cartRespons colorWhite"> Cart ($210.00) </span></button>
            <a class="navbar-brand " href="index.html"> <img src="../Logo Psd/logo.png" alt="TSHOP" height="30" width="90"> </a>

            <!-- this part for mobile -->
            <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
                <div class="input-group">
                    <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
                </div>
                <!-- /input-group -->

            </div>
        </div>

        <!-- this part is duplicate from cartMenu  keep it for mobile -->
        <div class="navbar-cart  collapse">
            <div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
                <div class="w100 miniCartTable scroll-pane">
                    <table>
                        <tbody>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/2.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/5.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/4.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!--/.miniCartTable-->

                <div class="miniCartFooter  miniCartFooterInMobile text-right">
                    <h3 class="text-right subtotal"> Subtotal: $210 </h3>
                    <a class="btn btn-sm btn-danger" href="cart.html"> <i class="fa fa-shopping-cart"> </i> VIEW CART
                    </a> <a href="checkout-0.html"
                            class="btn btn-sm btn-primary"> CHECKOUT </a></div>
                <!--/.miniCartFooter-->

            </div>
            <!--/.cartMenu-->
        </div>
        <!--/.navbar-cart-->

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html"> Home </a></li>
                <li class="dropdown megamenu-fullwidth"><a data-toggle="dropdown" class="dropdown-toggle" href="#"> 
                    CATEGORIES <b class="caret"> </b> </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content ">
                            <ul class="col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl">
                                <li class="no-border">
                                  
                                </li>
                                <li><a href="category-whisky.html"> WHISKEY </a></li>
                                <li><a href="category-vodka.html"> VODKA </a></li>
                                <li><a href="category-beers.html"> BEERS </a></li>
                                <li><a href="category-wines.html"> WINE </a></li>
                                <li><a href="category-creme.html"> CREMES AND LIQUER </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                                <li><a class="newProductMenuBlock" href="category-vodka.html"> <img
                                        class="img-responsive" src="../../IMAGES/images slider/big_thumb_679b22c8399d3a45cf0d2c0db6233808.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> VODKA </span>
                                </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="category-whisky.html"> <img
                                        class="img-responsive" src="../../IMAGES/images slider/johnnie_walker_diamond_jubilee_whiskey_alcohol_98345_1920x1080.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i
                                        class="fa fa-caret-right"> </i> WHISKY </span> </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="category-beers.html"> <img
                                        class="img-responsive" src="../../IMAGES/images slider/heineken_beer_drink_logo_brand_87446_1920x1080.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> BEERS   </span>
                                </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
                <li class="dropdown megamenu-80width ">
<ul class="dropdown-menu">
              <li class="megamenu-content">

                            <!-- megamenu-content -->

                            <ul class="col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft">
                                <li>
                                    <p><strong> Women Collection </strong></p>
                                </li>
                                <li><a href="#"> Kameez </a></li>
                                <li><a href="#"> Tops </a></li>
                                <li><a href="#"> Shoes </a></li>
                                <li><a href="#"> T shirt </a></li>
                                <li><a href="#"> TSHOP </a></li>
                                <li><a href="#"> Party Dress </a></li>
                                <li><a href="#"> Women Fragrances </a></li>
                            </ul>
                            <ul class="col-lg-2  col-sm-2 col-md-2  unstyled">
                                <li>
                                    <p><strong> Men Collection </strong></p>
                                </li>
                                <li><a href="#"> Panjabi </a></li>
                                <li><a href="#"> Male Fragrances </a></li>
                                <li><a href="#"> Scarf </a></li>
                                <li><a href="#"> Sandal </a></li>
                                <li><a href="#"> Underwear </a></li>
                                <li><a href="#"> Winter Collection </a></li>
                                <li><a href="#"> Men Accessories </a></li>
                            </ul>
                            <ul class="col-lg-2  col-sm-2 col-md-2  unstyled">
                                <li>
                                    <p><strong> Top Brands </strong></p>
                                </li>
                                <li><a href="#"> Diesel </a></li>
                                <li><a href="#"> Farah </a></li>
                                <li><a href="#"> G-Star RAW </a></li>
                                <li><a href="#"> Lyle & Scott </a></li>
                                <li><a href="#"> Pretty Green </a></li>
                                <li><a href="#"> TSHOP </a></li>
                                <li><a href="#"> TANJIM </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                                <li class="no-margin productPopItem "><a href="product-details.html"> <img
                                        class="img-responsive" src="images/site/g4.jpg" alt="img"> </a> <a
                                        class="text-center productInfo alpha90" href="product-details.html"> Eodem modo
                                    typi <br>
                                    <span> $60 </span> </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                                <li class="no-margin productPopItem relative"><a href="product-details.html"> <img
                                        class="img-responsive" src="images/site/g5.jpg" alt="img"> </a> <a
                                        class="text-center productInfo alpha90" href="product-details.html"> Eodem modo
                                    typi <br>
                                    <span> $60 </span> </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown megamenu-fullwidth">
<ul class="dropdown-menu">
              <li class="megamenu-content ProductDetailsList">

                            <!-- remove .ProductDetailsList class from megamenu-content || this class for demo uses only -->

                            <!-- megamenu-content -->

                            <h3 class="promo-1 no-margin hidden-xs">60 + HTML PAGES || AVAILABLE ONLY AT WRAP
                                BOOTSTRAP </h3>

                            <h3 class="promo-1sub hidden-xs"> Complete Parallax E-Commerce Boostrap Template, Responsive
                                on any Device, 10+ color Theme + Parallax Effect </h3>

                            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                <li class="no-border">
                                    <p><strong> Home Pages </strong></p>
                                </li>
                                <li><a href="index.html"> Home Version 1 </a></li>
                                <li><a href="index2.html"> Home Version 2 </a></li>
                                <li><a href="index3.html"> Home Version 3 (BOXES) </a></li>
                                <li><a href="index4.html"> Home Version 4 (LOOK 2)</a></li>
                                <li><a href="index5.html"> Home Version 5 (LOOK 3)</a></li>
                                <li><a href="index6.html"> Home Version 6 (STORY)</a></li>
                                <li><a href="index-v-7.html"> Home Version 7 (Flat) <span class="label label-success">new</span></a>
                                </li>
                                <li><a href="index-header2.html"> Header Version 2 </a></li>
                                <li><a href="index-header3.html"> Header Version 3 </a></li>

                                <li><a href="index-logged-in.html">Topbar Logged In user menu <span class="label label-success">new</span></a></li>
                                <li><a href="sidebar-shopping-cart.html">Sidebar Shopping cart <span
                                        class="label label-success">new</span></a></li>
                            </ul>

                            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                <li class="no-border">
                                    <p><strong> Featured Pages </strong></p>
                                </li>
                                <li><a href="category.html"> Category </a></li>
                                <li><a href="category2.html"> Category Style 2 [Parallax] </a></li>
                                <li><a href="sub-category.html"> Sub Category </a></li>
                                <li><a href="category-list.html"> Category List View </a></li>
                                <li><a href="category-product-hover.html"> Category [Product Hover] </a></li>
                                <li><a href="category-product-slide.html"> Category [Product Slide] </a></li>

                                <li><a href="cart.html"> Cart </a></li>
                                <li><a href="about-us-3.html"> About Us V3 <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="about-us-2.html"> About Us V2 </a></li>
                                <li><a href="about-us.html"> About Us V1 </a></li>

                                <li><a href="contact-us.html"> Contact us </a></li>
                                <li><a href="contact-us-2.html"> Contact us 2 (No Fixed Map) </a></li>
                                <li><a href="terms-conditions.html"> Terms &amp; Conditions </a></li>

                            </ul>

                            <ul class="col-lg-3  col-sm-3 col-md-3 unstyled ">
                                <li class="no-border">
                                    <p><strong> Product Details </strong></p>
                                </li>
                                <li><a href="product-details.html"> Product Details v1 </a></li>
                                <li><a href="product-details-style2.html"> Product Details v 2 </a></li>
                                <li><a href="product-details-style3.html"> Product Details v 3 (Custom Thumbnail
                                    Position)</a></li>
                                <li><a href="product-details-style4.html"> Product Details v 4 (with litebox)</a></li>


                                <li><a href="product-details-style5.html"> Product Details v 5 (Flat) <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-1.html"> Product Details v 5.1 <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-2.html"> Product Details v 5.2 <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-3.html"> Product Details v 5.3 <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-3-fadein.html"> Product Details v 5.3.1
                                    <small>(fadein)</small> <span
                                            class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-4.html"> Product Details v 5.4  <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-4.1-popup-video.html"> Product Details v 5.4.1
                                    <small>(popup video)</small><span
                                            class="label label-success">NEW</span> </a></li>
                                <li><a href="product-details-style5-4.1-with-zoom.html"> Product Details v 5.4.1
                                    <small>(zoom + litebox)</small> <span
                                            class="label label-success">NEW</span></a></li>

                            </ul>
                            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                <li class="no-border">
                                    <p><strong> Checkout </strong></p>
                                </li>
                                <li><a href="checkout-0.html"> Checkout Before </a></li>
                                <li><a href="checkout-1.html"> checkout step 1 </a></li>
                                <li><a href="checkout-2.html"> checkout step 2 </a></li>
                                <li><a href="checkout-3.html"> checkout step 3 </a></li>
                                <li><a href="checkout-4.html"> checkout step 4 </a></li>
                                <li><a href="checkout-5.html"> checkout step 5 </a></li>
                                <li><a href="one-page-checkout.html"> One page checkout <span
                                        class="label label-success">NEW</span> </a></li>
                                <li><a href="thanks-for-order.html"> Thanks for order</a></li>
                            </ul>
                            <ul class="col-lg-1  col-sm-1 col-md-1 no-padding unstyled">
                                <li class="no-border">
                                    <p><strong> User Account </strong></p>
                                </li>
                                <li><a href="account-1.html"> Account Login </a></li>
                                <li><a href="account.html"> My Account </a></li>
                                <li><a href="my-address.html"> My Address </a></li>
                                <li><a href="user-information.html"> User information </a></li>
                                <li><a href="wishlist.html"> Wish List </a></li>
                                <li><a href="order-list.html"> Order list </a></li>
                                <li><a href="order-status.html"> Order Status </a></li>
                                <li><a href="forgot-password.html"> Forgot Password </a></li>
                            </ul>
                            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                <li class="no-border">
                                    <p><strong> &nbsp; </strong></p>
                                </li>
                <li><a href="blog.html"> Blog </a></li>
                <li><a href="blog-details.html"> Blog Details </a></li>
                                <li><a href="single-product-modal.html"> Single Product Details Modal</a></li>
                                <li><a href="single-subscribe-modal.html"> Single Subscribe Modal</a></li>
                                <li><a href="error-page.html"> Error Page </a></li>
                                <li><a href="blank-page.html"> Blank Page </a></li>   <li><a href="form.html"> Basic Form Element </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
				<li><a href="about-us-2.html" target="_blank"> ABOUT US </a></li>
            </ul>
            </ul>

            <!--- this part will be hidden for mobile version -->
            <div class="nav navbar-nav navbar-right hidden-xs">
                <div class="dropdown  cartMenu "><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i
                        class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Cart ($210.00) </span> <b
                        class="caret"> </b> </a>

                    <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
                        <div class="w100 miniCartTable scroll-pane">
                            <table>
                                <tbody>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="product-details.html"> TSHOP Tshirt DO9 </a></h4>
                                            <span class="size"> 12 x 1.5 L </span>

                                            <div class="price"><span> $22 </span></div>
                                        </div>
                                    </td>
                                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                    <td style="width:15%" class="miniCartSubtotal"><span> $33 </span></td>
                                    <td style="width:5%" class="delete"><a> x </a></td>
                                </tr>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="product-details.html"> <img src="images/product/2.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="product-details.html"> TShir TSHOP 09 </a></h4>
                                            <span class="size"> 12 x 1.5 L </span>

                                            <div class="price"><span> $15 </span></div>
                                        </div>
                                    </td>
                                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                    <td style="width:15%" class="miniCartSubtotal"><span> $120 </span></td>
                                    <td style="width:5%" class="delete"><a> x </a></td>
                                </tr>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="product-details.html"> <img src="images/product/5.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="product-details.html"> Tshir 2014 </a></h4>
                                            <span class="size"> 12 x 1.5 L </span>

                                            <div class="price"><span> $30 </span></div>
                                        </div>
                                    </td>
                                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                    <td style="width:15%" class="miniCartSubtotal"><span> $80 </span></td>
                                    <td style="width:5%" class="delete"><a> x </a></td>
                                </tr>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="product-details.html"> TSHOP T shirt DO20 </a></h4>
                                            <span class="size"> 12 x 1.5 L </span>

                                            <div class="price"><span> $15 </span></div>
                                        </div>
                                    </td>
                                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                    <td style="width:15%" class="miniCartSubtotal"><span> $55 </span></td>
                                    <td style="width:5%" class="delete"><a> x </a></td>
                                </tr>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="product-details.html"> <img src="images/product/4.jpg" alt="img">
                                        </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="product-details.html"> T shirt Black </a></h4>
                                            <span class="size"> 12 x 1.5 L </span>

                                            <div class="price"><span> $44 </span></div>
                                        </div>
                                    </td>
                                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                    <td style="width:15%" class="miniCartSubtotal"><span> $40 </span></td>
                                    <td style="width:5%" class="delete"><a> x </a></td>
                                </tr>
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div><a href="product-details.html"> <img src="images/site/winter.jpg"
                                                                                  alt="img"> </a></div>
                                    </td>
                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="product-details.html"> G Star T shirt </a></h4>
                                            <span class="size"> 12 x 1.5 L </span>

                                            <div class="price"><span> $80 </span></div>
                                        </div>
                                    </td>
                                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                    <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                                    <td style="width:5%" class="delete"><a> x </a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/.miniCartTable-->

                        <div class="miniCartFooter text-right">
                            <h3 class="text-right subtotal"> Subtotal: $210 </h3>
                            <a class="btn btn-sm btn-danger" href="cart.html"> <i class="fa fa-shopping-cart"> </i> VIEW
                                CART </a><a
                                class="btn btn-sm btn-primary"> CHECKOUT </a></div>
                        <!--/.miniCartFooter-->

                    </div>
                    <!--/.dropdown-menu-->
                </div>
                <!--/.cartMenu-->

                <div class="search-box">
                    <div class="input-group">
                        <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
                    </div>
                    <!-- /input-group -->

                </div>
                <!--/.search-box -->
            </div>
            <!--/.navbar-nav hidden-xs-->
        </div>
        <!--/.nav-collapse -->

    </div>
    <!--/.container -->

    <div class="search-full text-right"><a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>

        <div class="searchInputBox pull-right">
            <input type="search" data-searchurl="search?=" name="q" placeholder="start typing and hit enter to search"
                   class="search-input">
            <button class="btn-nobg search-btn" type="submit"><i class="fa fa-search"> </i></button>
        </div>
    </div>
    <!--/.search-full-->

</div>
<!-- /.Fixed navbar  -->

<div class="banner">
    <div class="full-container">
        <div class="slider-content">
            <ul id="pager2" class="container">
            </ul>
            <!-- prev/next links -->

            <span class="prevControl sliderControl"> <i class="fa fa-angle-left fa-3x "></i></span> <span
                class="nextControl sliderControl"> <i class="fa fa-angle-right fa-3x "></i></span>

            <div class="slider slider-v1"
                 data-cycle-swipe=true
                 data-cycle-prev=".prevControl"
                 data-cycle-next=".nextControl" data-cycle-loader="wait">
                <div class="slider-item slider-item-img1"><img src="../../IMAGES/images slider/Jean-Marc_Gady_Product_Interior_Design_Scenography_Art_Paris_Window_Display_Imperial-MOET-CHANDON4.jpg"
                                                               class="img-responsive parallaximg sliderImg" alt="img">
                </div>
                <div class="slider-item slider-item-img1">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-12 col-md-12 col-sm-12 sliderTextFull ">
                                <div class="inner text-center">
                                    <div class="topAnima animated">
                                        <h1 class="uppercase xlarge">FREE DELIVERY</h1>

                                     
                                    </div>
</div>
                            </div>
                        </div>
                    </div>
                    <img src="../../IMAGES/images slider/absolute_vodka-1920x1080.jpg" class="img-responsive parallaximg sliderImg" alt="img"></div>
                <!--/.slider-item-->

                <div class="slider-item slider-item-img2 ">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-12 col-md-12 col-sm-12 sliderTextFull  "> </div>
                        </div>
                    </div>
                    <img src="../../IMAGES/images slider/Chivas-Regal-18-Year-Old-Whisky-1920x1200.jpg"class="img-responsive parallaximg sliderImg" alt="img"></div>
                <!--/.slider-item-->

                <div class="slider-item slider-item-img3 ">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-5 col-md-4 col-sm-6 col-xs-8   pull-left sliderText white hidden-xs"> </div>
                        </div>
                    </div>
                    <img src="../../IMAGES/images slider/image2.png"></div>
                <!--/.slider-item-->

                <div class="slider-item slider-item-img3">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-5 col-md-6 col-sm-5 col-xs-5 pull-left sliderText blankstyle transformRight">
                                <div class="inner text-right"></div>
                            </div>
</div>
                    </div>
                    <img src="../../IMAGES/images slider/ws_Heineken_bottles_1920x1080.jpg" class="img-responsive parallaximg sliderImg" alt="img"></div>
            </div>
            <!--/.slider slider-v1-->
        </div>
        <!--/.slider-content-->
    </div>
    <!--/.full-container-->
</div>
<!--/.banner style1-->

<div class="container main-container">

    <!-- Main component call to action -->

    <div class="row featuredPostContainer globalPadding style2">
      <h3 class="section-title style2 text-center"><span>SHOPPING LIST</span></h3>
      <div id="productslider" class="owl-carousel owl-theme">
            <div class="item">
                <div class="product">
<div class="image"> <a><img src="../../IMAGES/imgs/1.jpg" alt="img"
                                                            class="img-responsive"></a>

            <div class="promotion"> </div>
                    </div>
                    <div class="description">
                      <h4><a >CORONA EXTRA</a></h4>
                      <p>&nbsp;</p>
                      330 ML<br>
                    </div>
                    <div class="price"><span>KES 170</span></div>
                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                </div>
            </div>
            <div class="item">
                <div class="product">
<div class="image"> <a><img src="../../IMAGES/imgs/1r.jpg" alt="img"
                                                            class="img-responsive"></a>

            <div class="promotion"></div>
                    </div>
                    <div class="description">
                      <h4><a >MIDLETON</a></h4>
                      <p>&nbsp;</p>
                      <span class="size">1 LITRE</span></div>
                    <div class="price"><span>KES 2800</span></div>
                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                </div>
            </div>
            <div class="item">
                <div class="product">
<div class="image"><a> <img src="../../IMAGES/imgs/2.jpg" alt="img"
                                                            class="img-responsive"></a>

            <div class="promotion"></div>
                    </div>
                    <div class="description">
                      <h4><a >HEINEKEN</a></h4>
                      <p>&nbsp;</p>
                      <span class="size">330 ML</span></div>
                    <div class="price"><span>KES 190</span></div>
                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                </div>
            </div>
            <div class="item">
                <div class="product">
                
<div class="image"> <a><img src="../../IMAGES/vodka/7.jpg" alt="img" class="img-responsive"></a>
            </div>
                    <div class="description">
                      <h4><a >SMIRNOFF VODKA</a></h4>
                      <p>&nbsp;</p>
                      <span class="size">750 ML</span></div>
                    <div class="price"><span>KES 1100</span></div>
                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                </div>
            </div>
            <div class="item">
                <div class="product">
                    
                   

                    <div class="image">
                        
                        <a> <img src="../../IMAGES/imgs/4.jpg" alt="img"
                                                            class="img-responsive"></a></div>
                    <div class="description">
                      <h4><a >TUSKER LAGER</a></h4>
                      <p>&nbsp;</p>
                      <span class="size">500 ML</span></div>
                    <div class="price"><span>KES 160</span></div>
                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                </div>
            </div>
            <div class="item">
                <div class="product">
                    
                    <div class="image">
                      
                        <a><img src="../../IMAGES/vodka/5.jpg" alt="img"
                                                            class="img-responsive"></a></div>
                    <div class="description">
                      <h4><a >CRUZ VODKA</a></h4>
                      <p>&nbsp;</p>
                      <span class="size">750 ML</span></div>
                    <div class="price"><span>KES 1000</span></div>
                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                </div>
            </div>
            <div class="item">
                <div class="product">
                   

                    <div class="image">
                       
                       <a> <img src="../../IMAGES/vodka/8.jpg" alt="img"
                                                            class="img-responsive"></a></div>
                    <div class="description">
                      <h4><a >MAGIC MOMENTS</a></h4>
                      <p>&nbsp;</p>
                      <span class="size">750 ML</span></div>
                    <div class="price"><span>KES 970</span></div>
                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                </div>
            </div>
            <div class="item">
                <div class="product">
                   
                    <div class="image">
                        
                        <a><img src="../../IMAGES/imgs/9.jpg"alt="img"
                                                            class="img-responsive"></a> </div>
                    <div class="description">
                      <h4><a href="product-details.html">JACK DANIEL'S</a></h4>
                      <p>&nbsp;</p>
                      <span class="size">1 LITRE</span></div>
                    <div class="price"><span>KES 3200</span></div>
                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                </div>
            </div>
            <div class="item">
                <div class="product">
                   
                    <div class="image"> <a><img src="../../IMAGES/imgs/10.jpg" alt="img"
                                                            class="img-responsive"></a></div>
                    <div class="description">
                      <h4><a >JAMESON</a></h4>
                      <p>&nbsp;</p>
                      <span class="size">750 ML</span></div>
                    <div class="price"><span>KES 2200</span></div>
                    <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                </div>
            </div>
        </div>
        <!--/.productslider-->

    </div>
    <!--/.featuredPostContainer-->
</div>
<!-- /main container -->
<!--/.parallax-image-1-->

<div class="container main-container">


    <!-- Demo Features Content start -->    <!-- Demo Features Content end -->

    <!-- Main component call to action -->

    <div class="morePost row featuredPostContainer style2 globalPaddingTop ">
        <h3 class="section-title style2 text-center"><span>FEATURES PRODUCT</span></h3>

        <div class="container">
            <div class="row xsResponse">
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
                        
                        </a>

                        <div class="image"> <a ><img src="../../IMAGES/imgs/11.jpg" alt="img"
                                                                class="img-responsive"></a>                        </div>
                        <div class="description">
                          <h4><a >the famous grouse</a></h4>
                          <p>&nbsp;</p>
                          <span class="size">750 ml</span></div>
                        <div class="price">KES 1500<br>
                        </div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
                     
                        </a>

                        <div class="image"> <a ><img src="../../IMAGES/imgs/12.jpg" alt="img"
                                                                class="img-responsive"></a>

                          <div class="promotion"></div>
                        </div>
                        <div class="description">
                          <h4><a >Four cousins pink</a></h4>
                          <p>&nbsp;</p>
                          <span class="size">750 ml</span></div>
                        <div class="price"><span>KES 800</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
                        
                        </a>

                        <div class="image"> <a ><img src="../../IMAGES/imgs/13.jpg" alt="img"
                                                                class="img-responsive"></a>

                          <div class="promotion"></div>
                        </div>
                        <div class="description">
                          <h4><a>4Th street</a></h4>
                          <p>&nbsp;</p>
                          <span class="size">750 ml</span></div>
                        <div class="price"><span>KES 750</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
<div class="image"> <a ><img src="../../IMAGES/imgs/14.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                          <h4><a>drostdy HOF</a></h4>
                          <p>&nbsp;</p>
                          <span class="size">750 ML</span></div>
                        <div class="price"><span>KES 800</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
<div class="image"> <a ><img src="../../IMAGES/imgs/15.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                          <h4><a >DIMMAINE FOUASSIER</a></h4>
                          <p>&nbsp;</p>
                          <span class="size">750 ML</span></div>
                        <div class="price"><span>KES 950</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
<div class="image"> <a ><img src="../../IMAGES/vodka/absolut_mandrin.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                          <h4><a >ABSOLUT MANDARIN</a></h4>
                          <p>&nbsp;</p>
                          <span class="size">1 LITRE</span></div>
                        <div class="price">KES 2100</div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
<div class="image"> <a><img src="../../IMAGES/imgs/The_Singleton_12_Years_Old.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                          <h4><a >SINGLETON</a></h4>
                          <p>&nbsp;</p>
                          <span class="size">1 LITRE</span></div>
                        <div class="price"><span>KES 4200</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
<div class="image"> <a ><img src="../../IMAGES/imgs/tequila-rose.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                          <h4><a >TEQUILA ROSE</a></h4>
                          <p>&nbsp;</p>
                          <span class="size">750 ML</span></div>
                        <div class="price">KES 1600<br>
                        </div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
<div class="image"> <a ><img src="../../IMAGES/imgs/Remy-Martin-VSOP.jpg" alt="img"
                                                                class="img-responsive"></a></div>
                        <div class="description">
                          <h4><a >REMY MARTIN VSOP</a></h4>
                          <p>&nbsp;</p>
                          750 ML<br>
                        </div>
                        <div class="price">KES 2300<br>
                        </div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
<div class="image"> <a ><img src="../../IMAGES/imgs/Mumm_Brut.jpg" alt="img"
                                                                class="img-responsive"></a>                        </div>
                        <div class="description">
                          <h4><a >MUMM</a></h4>
                          <p>&nbsp;</p>
                          <span class="size">750 ML</span></div>
                        <div class="price"><span>KES 2600</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
<div class="image"> <a ><img src="../../IMAGES/vodka/ciroc_pineapple.jpg" alt="img"
                                                                class="img-responsive"></a>

                        
              </div>
                        <div class="description">
                          <h4><a >CIROC PINEAPPLE</a></h4>
                          <p>&nbsp;</p>
                          <span class="size">1 LITRE</span></div>
                        <div class="price"><span>KES 3200</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
<div class="image">
                <div class="quickview"> </div>
                            <a ><img src="../../IMAGES/imgs/casillero-del-diablo-merlot-.jpg" alt="img"
                                                                class="img-responsive"></a>

                     
                      </div>
                        <div class="description">
                          <h4><a >CASILLERO DEL DIABLO</a></h4>
                          <p>&nbsp;</p>
                          <span class="size">750 ML</span></div>
                        <div class="price"><span>KES 3100</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <!--/.item-->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="load-more-block text-center">&nbsp;</div>
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.featuredPostContainer-->

    <hr class="no-margin-top">
    <div class="width100 section-block ">
        <div class="row featureImg">
<div class="col-md-3 col-sm-3 col-xs-6"><a href="category.html"></a>
        </div>
            <div class="col-md-3 col-sm-3 col-xs-6"><a href="category.html"></a>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.section-block-->

    <div class="width100 section-block">
        <h3 class="section-title"><span> BRAND</span> <a id="nextBrand" class="link pull-right carousel-nav"> <i
                class="fa fa-angle-right"></i></a> <a id="prevBrand" class="link pull-right carousel-nav"> <i
                class="fa fa-angle-left"></i> </a></h3>

        <div class="row">
            <div class="col-lg-12">
                <ul class="no-margin brand-carousel owl-carousel owl-theme">
                    <li><a><img src="../../IMAGES/logos/Heineken-International-Logo.png" alt="img"></a></li>
                    <li><img src="../../IMAGES/logos/jameson-sized.gif" alt="img"></li>
                    <li><img src="../../IMAGES/logos/JohnnieWalker-sized.gif" alt="img"></li>
                    <li><img src="../../IMAGES/logos/smirnoff-sized.gif" alt="img"></li>
                    <li><img src="../../IMAGES/logos/Belvedere-sized.gif" alt="img"></li>
                    <li><img src="../../IMAGES/logos/CaptainMorgan-sized.gif" alt="img"></li>
                    <li><img src="../../IMAGES/logos/Grey-Goose-sized.gif" alt="img"></li>
                    <li><img src="../../IMAGES/logos/Tanqueray_logo-sized.gif" alt="img"></li>
                    <li><img src="../../IMAGES/logos/150129143448_beer_carlsberg_logo_624x351_getty.jpg" alt="img"></li>
                    <li><img src="../../IMAGES/logos/Baileys-sized.gif" alt="img"></li>
                    <li><img src="../../IMAGES/logos/CirocVodka-sized.gif" alt="img"></li>
                    <li><img src="../../IMAGES/logos/FamousGrouse-sized.gif" alt="img"></li>
                    <li><img src="../../IMAGES/logos/244.png" alt="img"></li>
                    <li><img src="../../IMAGES/logos/logo.png" alt="img"></li>
                    <li><img src="../../IMAGES/logos/Baileys-sized.gif" alt="img"></li>
                    <li><img src="../../IMAGES/logos/Glenlivet-sized.gif" alt="img"></li>
                </ul>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.section-block-->

</div>
<!--main-container--><!--/.parallax-section-->

<!-- Product Details Modal  -->
<!-- Modal -->
<div class="modal fade" id="productSetailsModalAjax" tabindex="-1" role="dialog"
     aria-labelledby="productSetailsModalAjaxLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Modal -->

<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                    <h3> Support </h3>
                    <ul>
                        <li class="supportLi">
<h4><a class="inline" href="callto:+12025550151"> <strong> <em class="fa fa-phone"> </em> +254 731 409 276</strong></a></h4>
                            <h4><a class="inline" href="liquormart07@gmail.com"> <em class="fa fa-envelope-o"> </em> liquormart07@gmail.com</a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Shop </h3>
                    <ul>
                        <li><a href="category-whiskey.html">
                            Whiskey
                        </a></li>
                        <li><a href="category-vodka.html">
                            Vodka</a></li>
                        <li><a href="#">
                            Kids'
                        </a></li>
                        <li><a href="#">Shoes
                        </a></li>
                        <li><a href="#">
                            Gift Cards
                        </a></li>

                    </ul>

                </div>

                <div style="clear:both" class="hide visible-xs"></div>
<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
            <h3> My Account </h3>
                    <ul>
                        <li><a href="account.html"> My Account </a></li>
                        <li><a href="my-address.html"> My Address </a></li>
                        <li></li>
                        <li><a href="order-list.html"> Order list </a></li>
                    </ul>
                </div>

                <div style="clear:both" class="hide visible-xs"></div>
</div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->    <!--/.footer-bottom-->
</footer>
<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script>
    // this script required for subscribe modal
    $(window).load(function () {
        // full load
        $('#modalAds').modal('show');
        $('#modalAds').removeClass('hide');
    });

</script>

<!-- include jqueryCycle plugin -->
<script src="assets/js/jquery.cycle2.min.js"></script>

<!-- include easing plugin -->
<script src="assets/js/jquery.easing.1.3.js"></script>

<!-- include  parallax plugin -->
<script type="text/javascript" src="assets/js/jquery.parallax-1.1.js"></script>

<!-- optionally include helper plugins -->
<script type="text/javascript" src="assets/js/helper-plugins/jquery.mousewheel.min.js"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.js"></script>

<!-- include icheck plugin // customized checkboxes and radio buttons   -->
<script type="text/javascript" src="assets/plugins/icheck-1.x/icheck.min.js"></script>

<!-- include grid.js // for equal Div height  -->
<script src="assets/js/grids.js"></script>

<!-- include carousel slider plugin  -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- jQuery select2 // custom select   -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src="assets/js/bootstrap.touchspin.js"></script>

<!-- include custom script for only homepage  -->
<script src="assets/js/home.js"></script>
<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>
<script>

</script>
</body>
</html>
