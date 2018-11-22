<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo "$title" ?></title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="<?php echo "$keys" ?>" />
        <meta name="description" content="<?php echo "$des" ?>" />
        <!-- //for-mobile-apps -->
        <link href="<?php echo $this->request->webroot . "css/" ?>/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $this->request->webroot . "css/" ?>/style.css" rel="stylesheet" type="text/css" media="all" />
        <link class="include" rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot . "css/" ?>/jquery.jqplot.css" />
        <!-- calender -->
        <link type="text/css" href="<?php echo $this->request->webroot . "css/" ?>/jquery.simple-dtpicker.css" rel="stylesheet" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->request->webroot; ?>images/1.png">
        <!-- //calender -->
        <!-- different-chart-bar -->
        <link rel="stylesheet" href="<?php echo $this->request->webroot . "css/" ?>/chart.min.css">
        <link rel="stylesheet" href="<?php echo $this->request->webroot . "css/" ?>/article.css">
        <!-- //different-chart-bar -->
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="<?php echo $this->request->webroot . "css/" ?>/font-awesome.min.css" />
        <!-- //font-awesome icons -->
        <!-- js -->
        <script src="<?php echo $this->request->webroot . "js" ?>/jquery-1.11.1.min.js"></script>
        <!-- js -->
        <!-- pop-up -->
        <link href="<?php echo $this->request->webroot . "css/" ?>/popuo-box.css" rel="stylesheet" type="text/css" media="all" />        
        <link href="//fonts.googleapis.com/css?family=Muli:300,300i,400,400i" rel="stylesheet">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-7326494175928694",
                enable_page_level_ads: true
            });
        </script>
    </head>

    <body>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120984454-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-120984454-1');
        </script>

        <!-- header -->
        <div class="header">
            <div class="w3ls_header_middle">
                <div class="container">
                    <div class="agileits_logo">
                        <h1><a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "index"]) ?>"><span>CodeWR</span>.com</a></h1>
                    </div>
                    <div class="agileits_search">
                        <!--                        <form action="#" method="post">
                                                    <input name="Search" type="text" placeholder="Search" required="">
                                                    <input type="submit" value="Search">
                                                </form>-->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>