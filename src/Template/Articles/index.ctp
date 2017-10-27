<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trade Market a Corporate Business Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Trade Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <!-- //for-mobile-apps -->
        <link href="<?php echo $this->request->webroot . "css/" ?>/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $this->request->webroot . "css/" ?>/style.css" rel="stylesheet" type="text/css" media="all" />
        <link class="include" rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot . "css/" ?>/jquery.jqplot.css" />
        <!-- calender -->
        <link type="text/css" href="<?php echo $this->request->webroot . "css/" ?>/jquery.simple-dtpicker.css" rel="stylesheet" />
        <!-- //calender -->
        <!-- different-chart-bar -->
        <link rel="stylesheet" href="<?php echo $this->request->webroot . "css/" ?>/chart.min.css">
        <!-- //different-chart-bar -->
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="<?php echo $this->request->webroot . "css/" ?>/font-awesome.min.css" />
        <!-- //font-awesome icons -->
        <!-- js -->
        <script src="<?php echo $this->request->webroot . "js" ?>/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $this->request->webroot . "js" ?>/jquery.marquee.min.js"></script>
        <!-- js -->
        <!-- pop-up -->
        <link href="<?php echo $this->request->webroot . "css/" ?>/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <!-- //pop-up -->
        <!-- left-chart -->
        <script src="<?php echo $this->request->webroot . "js" ?>/jquery.flot.min.js" type="text/javascript"></script> 
        <script src="<?php echo $this->request->webroot . "js" ?>/jquery.flot.animator.min.js" type="text/javascript"></script>
        <!-- //left-chart -->
        <link href="//fonts.googleapis.com/css?family=Muli:300,300i,400,400i" rel="stylesheet">
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="<?php echo $this->request->webroot . "js" ?>/move-top.js"></script>
        <script type="text/javascript" src="<?php echo $this->request->webroot . "js" ?>/easing.js"></script>
    </head>

    <body>
        <!-- header -->
        <div class="header">
            <div class="w3ls_header_top">
                <div class="container">
                    <div class="w3l_header_left">
                        <ul class="w3layouts_header">
                            <li class="w3layouts_header_list">
                                <ul>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language<span class="caret"></span></a>
                                        <div class="mega-dropdown-menu">
                                            <ul class="dropdown-menu w3_dropdown">
                                                <li><a href="#">English</a></li> 
                                                <li><a href="#">Viet Nam</a></li>
                                            </ul>              
                                        </div>	
                                    </li>
                                    <li>
                                        <i>|</i>
                                    </li>
                                </ul>
                            </li>
                            <li class="w3layouts_header_list">
<!--                                <a href="login.html">Login To Trade</a><i>|</i>-->
                            </li>
                            <li class="w3layouts_header_list">
<!--                                <a href="faq.html">FAQ</a><i>|</i>-->
                            </li>
                            <li class="w3layouts_header_list">
<!--                                <a href="contact.html">Contact Us</a>-->
                            </li>
                        </ul>
                    </div>
                    <div class="w3l_header_right">
                        <!--<h2><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+(000) 123 456 678</h2>-->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="w3ls_header_middle">
                <div class="container">
                    <div class="agileits_logo">
                        <h1><a href="index.html"><span>Code</span> Write Read<i>Code change for life</i></a></h1>
                    </div>
                    <div class="agileits_search">
                        <form action="#" method="post">
                            <input name="Search" type="text" placeholder="Search" required="">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //header -->
        <!-- navigation -->
        <div class="trade_navigation">
            <div class="container">
                <nav class="navbar nav_bottom">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <nav class="wthree_nav">
                            <ul class="nav navbar-nav nav_1">
                                <li class="act"><a href="index.html">Home</a></li>
                                <li><a href="equity.html">JAVA</a></li>
                                <li><a href="equity.html">PHP</a></li>
                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>
        <!-- //navigation -->
        <!-- news-original -->
        <div class="news-original">
            <div class="container">
                <div class="agileinfo_news_original_grids">
                    <div class="col-md-8 agileinfo_news_original_grids_left1">
                        <h2>PHP Cơ bản</h2>
                        <ul>
                            <li><a href="#">Bắt đầu với PHP </a></li>
                            <li><a href="#">Bắt đầu với PHP </a></li>
                            <li><a href="#">Bắt đầu với PHP </a></li>
                            <li><a href="#">Bắt đầu với PHP </a></li>
                            <li><a href="#">Bắt đầu với PHP </a></li>
                            <li><a href="#">Bắt đầu với PHP </a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 agileinfo_news_original_grids_right">
                        <div class="w3layouts_add_market">
                            <img src="<?php echo $this->request->webroot . "images" ?>/13.jpg" alt=" " class="img-responsive" />
                            <div class="w3layouts_add_market_pos">
                                <h3>pay demat dues online</h3>
                            </div>
                        </div>
                        <div class="agileinfo_chat">
                            <h3><i class="fa fa-comments-o" aria-hidden="true"></i>Chat</h3>
                            <div class="agileinfo_chat_left">
                                <img src="<?php echo $this->request->webroot . "images" ?>/17.jpg" alt=" " class="img-responsive" />
                            </div>
                            <div class="agileinfo_chat_right">
                                <h4>Mark Allen</h4>
                                <p>investments in fixed income</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h5><i>Head funds & fixed income research, CRISIL <span>(25 Sep 2016 - 20:00hrs)</span></i></h5>
                            <a href="single.html"><span class="blink_me">Chat Now</span></a>
                        </div>
                        <div class="wthree_international">
                            <img src="<?php echo $this->request->webroot . "images" ?>/18.jpg" alt=" " class="img-responsive" />
                            <div class="wthree_international_pos">
                                <p>international markets</p>
                            </div>
                        </div>
                        <div class="w3layouts_newsletter">
                            <h3><i class="fa fa-envelope" aria-hidden="true"></i>Newsletter</h3>
                            <form action="#" method="post">
                                <input class="email" name="Email" type="email" placeholder="Email" required="">
                                <input type="submit" value="Send">
                            </form>
                            <p>Trade market offers you a choice of email alerts on your investments for FREE!</p>
                        </div>
                        <div class="w3_latest_stock">
                            <img src="<?php echo $this->request->webroot . "images" ?>/19.jpg" alt=" " class="img-responsive" />
                            <div class="w3_latest_stock_pos">
                                <h3>latest <span>stock <i>market</i> updates</span></h3>
                            </div>
                        </div>
                        <div class="w3l_your_stocks">
                            <h3><i class="fa fa-stack-exchange" aria-hidden="true"></i>Your Stocks</h3>
                            <form action="#" method="post">
                                <span>
                                    <label>Name</label>
                                    <input type="text" name="Name" placeholder=" " required="">
                                </span>
                                <span>
                                    <label>Mobile</label>
                                    <input type="text" name="Mobile" placeholder=" " required="">
                                </span>
                                <span>
                                    <label>Email</label>
                                    <input type="email" name="Email" placeholder=" " required="">
                                </span>
                                <span>
                                    <label>Location</label>
                                    <input type="text" name="Location" placeholder=" " required="">
                                </span>
                                <span>
                                    <label>Pin</label>
                                    <input type="text" name="Pin" placeholder=" " required="">
                                </span>
                                <input type="submit" value="Submit Now">
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //news-original -->
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <ul class="agileits_w3layouts_footer_info">
                    <li><a href="index.html">Home</a><i>|</i></li>
                    <li><a href="news.html">JAVA</a><i>|</i></li>
                    <li><a href="funds.html">PHP</a><i>|</i></li>
                </ul>
                <p>© 2017  | Design by <a href="#">Codewr</a></p>
            </div>
        </div>
        <!-- //footer -->
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo $this->request->webroot . "js" ?>/bootstrap.min.js"></script>

        <!-- //Bootstrap Core JavaScript -->

    </body>
</html>