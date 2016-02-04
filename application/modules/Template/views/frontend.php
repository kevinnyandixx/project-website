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
    <title>TSHOP - Your one stop shop for any bottle you need</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/frontend/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">

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
    <script src="<?php echo base_url(); ?>assets/frontend/js/pace.min.js"></script>
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
                <form method = "POST" action = "<?php echo base_url(); ?>Account/authenticate">
                    <div class="form-group login-username">
                        <div>
                            <input name="user_emailaddress" id="login-user" class="form-control input" size="20"
                                   placeholder="Enter Username" type="email">
                        </div>
                    </div>
                    <div class="form-group login-password">
                        <div>
                            <input name="user_password" id="login-password" class="form-control input" size="20"
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
                </form>
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
                <form method="POST" action = "<?php echo base_url(); ?>Account/register">
                    <div class="form-group reg-username">
                        <div>
                            <input name="user_firstname" class="form-control input" size="20" placeholder="Enter First Name"
                                   type="text" required>
                        </div>
                    </div>
                    <div class="form-group reg-username">
                        <div>
                            <input name="user_lastname" class="form-control input" size="20" placeholder="Enter Last Name"
                                   type="text" required>
                        </div>
                    </div>
                    <div class="form-group reg-email">
                        <div>
                            <input name="user_emailaddress" class="form-control input" size="20" placeholder="Enter Email Address" type="email" required>
                        </div>
                    </div>
                    <div class="form-group reg-username">
                        <div>
                            <input name="user_phonenumber" class="form-control input" size="20" placeholder="Enter Phone Number"
                                   type="text">
                        </div>
                    </div>
                    <div class="form-group reg-password">
                        <div>
                            <input name="user_password" class="form-control input" size="20" placeholder="Password" type="password" id = "entered_pass" required>
                        </div>
                    </div>
                    <div class="form-group reg-password">
                        <div>
                            <input name="user_password_confirm" class="form-control input" size="20" placeholder="Confirm Password" type="password" id = "confirmed_pass" required>
                        </div>
                    </div>
                    <p style="color: red" id = "password_error"></p>
                    <div>
                        <div>
                            <input id = "register_button" name="submit" class="btn  btn-block btn-lg btn-primary" value="REGISTER" type="submit">
                        </div>
                    </div>
                </form>
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
                        <?php if($this->session->userdata('is_logged_in') == TRUE){?>
                          <li><a href="#"><span class="hidden-xs"> My Account</span> <em class="glyphicon glyphicon-user hide visible-xs "></em></a></li>
                          <?php if($this->session->userdata('user_type') == "admin"){?>
                            <li><a href = "<?php echo base_url(); ?>Dashboard">Admin Dashboard</a></li>
                          <?php } ?>
                          <li><a href = "<?php echo base_url(); ?>Account/signout"><span class="hidden-xs">Sign Out</span></a></li>
                          <?php } else { ?>
                          <li><a href="#" data-toggle="modal" data-target="#ModalLogin"> <span class="hidden-xs">Sign In</span>
                                <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a></li>
                            <li class="hidden-xs"><a href="#" data-toggle="modal" data-target="#ModalSignup"> Create
                                Account </a></li>
                            <?php } ?>
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
            <a class="navbar-brand " href="index.html"> <img src="<?php echo base_url(); ?>assets/frontend/Logo Psd/logo.png" alt="TSHOP" height="30" width="90"> </a>

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
                                <li><a href="#"> WHISKEY </a></li>
                                <li><a href="#"> VODKA </a></li>
                                <li><a href="#"> BEERS </a></li>
                                <li><a href="#"> WINE </a></li>
                                <li><a href="#"> CREMES AND LIQUER </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                                <li><a class="newProductMenuBlock" href="category-vodka.html"> <img
                                        class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/IMAGES/imagesslider/big_thumb_679b22c8399d3a45cf0d2c0db6233808.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> VODKA </span>
                                </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="category-whisky.html"> <img
                                        class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/IMAGES/imagesslider/johnnie_walker_diamond_jubilee_whiskey_alcohol_98345_1920x1080.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i
                                        class="fa fa-caret-right"> </i> WHISKY </span> </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="category-beers.html"> <img
                                        class="img-responsive" src="<?php echo base_url(); ?>assets/frontend/IMAGES/imagesslider/heineken_beer_drink_logo_brand_87446_1920x1080.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> BEERS   </span>
                                </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
				<li><a href="#" target="_blank"> ABOUT US </a></li>
            </ul>
            </ul>

            <!--- this part will be hidden for mobile version -->
            <div class="nav navbar-nav navbar-right hidden-xs">
                <div class="dropdown  cartMenu "><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i
                        class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Cart (Ksh. 0.00) </span> <b
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
                <div class="slider-item slider-item-img1"><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imagesslider/Jean-Marc_Gady_Product_Interior_Design_Scenography_Art_Paris_Window_Display_Imperial-MOET-CHANDON4.jpg"
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
                    <img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imagesslider/absolute_vodka-1920x1080.jpg" class="img-responsive parallaximg sliderImg" alt="img"></div>
                <!--/.slider-item-->

                <div class="slider-item slider-item-img2 ">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-12 col-md-12 col-sm-12 sliderTextFull  "> </div>
                        </div>
                    </div>
                    <img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imagesslider/Chivas-Regal-18-Year-Old-Whisky-1920x1200.jpg"class="img-responsive parallaximg sliderImg" alt="img"></div>
                <!--/.slider-item-->

                <div class="slider-item slider-item-img3 ">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-5 col-md-4 col-sm-6 col-xs-8   pull-left sliderText white hidden-xs"> </div>
                        </div>
                    </div>
                    <img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imagesslider/image2.png"></div>
                <!--/.slider-item-->

                <div class="slider-item slider-item-img3">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-5 col-md-6 col-sm-5 col-xs-5 pull-left sliderText blankstyle transformRight">
                                <div class="inner text-right"></div>
                            </div>
</div>
                    </div>
                    <img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imagesslider/ws_Heineken_bottles_1920x1080.jpg" class="img-responsive parallaximg sliderImg" alt="img"></div>
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
<div class="image"> <a><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/1.jpg" alt="img"
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
<div class="image"> <a><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/1r.jpg" alt="img"
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
<div class="image"><a> <img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/2.jpg" alt="img"
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
                
<div class="image"> <a><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/vodka/7.jpg" alt="img" class="img-responsive"></a>
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
                        
                        <a> <img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/4.jpg" alt="img"
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
                      
                        <a><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/vodka/5.jpg" alt="img"
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
                       
                       <a> <img src="<?php echo base_url(); ?>assets/frontend/IMAGES/vodka/8.jpg" alt="img"
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
                        
                        <a><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/9.jpg"alt="img"
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
                   
                    <div class="image"> <a><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/10.jpg" alt="img"
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

                        <div class="image"> <a ><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/11.jpg" alt="img"
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

                        <div class="image"> <a ><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/12.jpg" alt="img"
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

                        <div class="image"> <a ><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/13.jpg" alt="img"
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
<div class="image"> <a ><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/14.jpg" alt="img"
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
<div class="image"> <a ><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/15.jpg" alt="img"
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
<div class="image"> <a ><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/vodka/absolut_mandrin.jpg" alt="img"
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
<div class="image"> <a><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/The_Singleton_12_Years_Old.jpg" alt="img"
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
<div class="image"> <a ><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/tequila-rose.jpg" alt="img"
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
<div class="image"> <a ><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/Remy-Martin-VSOP.jpg" alt="img"
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
<div class="image"> <a ><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/Mumm_Brut.jpg" alt="img"
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
<div class="image"> <a ><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/vodka/ciroc_pineapple.jpg" alt="img"
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
                            <a ><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/imgs/casillero-del-diablo-merlot-.jpg" alt="img"
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
                    <li><a><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/Heineken-International-Logo.png" alt="img"></a></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/jameson-sized.gif" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/JohnnieWalker-sized.gif" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/smirnoff-sized.gif" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/Belvedere-sized.gif" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/CaptainMorgan-sized.gif" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/Grey-Goose-sized.gif" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/Tanqueray_logo-sized.gif" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/150129143448_beer_carlsberg_logo_624x351_getty.jpg" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/Baileys-sized.gif" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/CirocVodka-sized.gif" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/FamousGrouse-sized.gif" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/244.png" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/logo.png" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/Baileys-sized.gif" alt="img"></li>
                    <li><img src="<?php echo base_url(); ?>assets/frontend/IMAGES/logos/Glenlivet-sized.gif" alt="img"></li>
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
<script src="<?php echo base_url(); ?>assets/frontend/bootstrap/js/bootstrap.min.js"></script>
<script>
    // this script required for subscribe modal
    $(window).load(function () {
        // full load
        $('#modalAds').modal('show');
        $('#modalAds').removeClass('hide');
    });

</script>

<!-- include jqueryCycle plugin -->
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.cycle2.min.js"></script>

<!-- include easing plugin -->
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.easing.1.3.js"></script>

<!-- include  parallax plugin -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.parallax-1.1.js"></script>

<!-- optionally include helper plugins -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/helper-plugins/jquery.mousewheel.min.js"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.mCustomScrollbar.js"></script>

<!-- include icheck plugin // customized checkboxes and radio buttons   -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/plugins/icheck-1.x/icheck.min.js"></script>

<!-- include grid.js // for equal Div height  -->
<script src="<?php echo base_url(); ?>assets/frontend/js/grids.js"></script>

<!-- include carousel slider plugin  -->
<script src="<?php echo base_url(); ?>assets/frontend/js/owl.carousel.min.js"></script>

<!-- jQuery select2 // custom select   -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.touchspin.js"></script>

<!-- include custom script for only homepage  -->
<script src="<?php echo base_url(); ?>assets/frontend/js/home.js"></script>
<!-- include custom script for site  -->
<script src="<?php echo base_url(); ?>assets/frontend/js/script.js"></script>
<script>
    $("#register_button").click(function(event){
        // event.preventDefault();

        pass = $("#entered_pass").val();
        conf_pass = $("#confirmed_pass").val();

        if(pass !== conf_pass)
        {
            $("#password_error").html("The passwords you entered do not match");
            event.preventDefault();
        }
    });
</script>
</body>
</html>
