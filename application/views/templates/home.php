<!DOCTYPE html>
<?php
require_once APPPATH . "helpers/functions.php";
//require_once APPPATH . "helpers/global.php";
require_once APPPATH . "helpers/ads_service.php";
?>
<html>
    <head>
        <title><?php ?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo base_url('css/boilerplate.css'); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('css/gaya.css'); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('css/skitter.styles.css'); ?>" media="all" type="text/css" />
       
        <script type="text/javascript" src="<?php echo base_url('js/jquery-1.5.2.min.js'); ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url('js/jquery.form.js'); ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url('js/ajaxfileupload.js'); ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url('js/jquery.skitter.min.js'); ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url('js/jquery.animate-colors-min.js'); ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url('js/jquery.easing.1.3.js'); ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url('js/respond.min.js'); ?>" ></script>
      
        <script>
            $(function(){
                $('.box_skitter_large').skitter();
            });
        </script>

        <!-- Start follow div scrolling -->
        <script>
            $(function() {
                var $sidebar   = $("#sideAds-home1"), 
                $window    = $(window),
                offset     = $sidebar.offset(),
                topPadding = 15;

                $window.scroll(function() {
                    if ($window.scrollTop() > offset.top) {
                        $sidebar.stop().animate({
                            marginTop: $window.scrollTop() - offset.top + topPadding
                        });
                    } 
                    else {
                        $sidebar.stop().animate({
                            marginTop: 0
                        });
                    }
                });

            });
            $(function() {
                var $sidebar   = $("#sideAds-home2"), 
                $window    = $(window),
                offset     = $sidebar.offset();
                //                topPadding = 15;

                $window.scroll(function() {
                    if ($window.scrollTop() > offset.top) {
                        $sidebar.stop().animate({
                            marginTop: 0
                        });
                    } else {
                        $sidebar.stop().animate({
                            marginTop: 0
                        });
                    }
                });

            });
            $(function() {
                var $sidebar   = $("#sideAds-home3"), 
                $window    = $(window),
                offset     = $sidebar.offset(),
                topPadding = 15;

                $window.scroll(function() {
                    if ($window.scrollTop() > offset.top) {
                        $sidebar.stop().animate({
                            marginTop: $window.scrollTop() - offset.top + topPadding
                        });
                    } else {
                        $sidebar.stop().animate({
                            marginTop: 0
                        });
                    }
                });

            });
            $(function() {
                var $sidebar   = $("#sideAds-home4"), 
                $window    = $(window),
                offset     = $sidebar.offset();
                //                topPadding = 15;

                $window.scroll(function() {
                    if ($window.scrollTop() > offset.top) {
                        $sidebar.stop().animate({
                            marginTop: 0
                        });
                    } else {
                        $sidebar.stop().animate({
                            marginTop: 0
                        });
                    }
                });

            });
        </script>
        <!-- End follow div scrolling -->
        <style type="text/css">
            #mask { position:absolute; left:0; top:0; z-index:9000; background-color:#000; display:none; margin: 0 auto; }
            #boxes .window { position:fixed; width:440px; height:200px; display:none; z-index:9999; /*padding:20px;*/ margin: 0 auto; }
            #boxes #dialog1 { /*width:375px; height:203px;*/  }
            #dialog1 .d-header { background:url('<?php echo base_url('ads/121001/popup/popup.jpg'); ?>') no-repeat 0 0 transparent; width:600px; height:400px; }
            .close img{ display: block; }
        </style>
    </head>

    <body  id="home">
        <div id="wrap">
            <div class="gridContainer clearfix">
                <div id="container">
                    <div id="sideAds-leftContainer">
                        <div id="sideAds-home1"><?php get_ads(ADS_TYPE_SIDE1, "121119"); ?></div>
                        <div id="sideAds-home2"><?php get_ads(ADS_TYPE_SIDE2, "121119"); ?></div>
                    </div> 
                    <div id="main">
                        <div id="header">
                            <div id="logo"><a class="logo" href="index.php"></a></div>
                            <div id="nav">
                                <ul>
                                    <?php
                                    if (isset($pages))
                                    {
                                        foreach ($pages as $page)
                                        {
                                            $selected = "";
                                            //Controller class name should be same as page title
                                            if ($page->title == strtoupper($this->router->class))
                                                $selected = "class='selected'";

                                            echo "<li ${selected}>";
                                            echo anchor($page->name, $page->title, 'title=' . $page->title);
                                            echo "</li>";
                                        }
                                    }
                                    ?>           
                                </ul>
                            </div>
                            <div id="clear-slider"></div>
                            <div id="slider" class="box_skitter box_skitter_large">
                                <ul>
                                    <li><?php get_ads(ADS_TYPE_SPONSORED, "121119"); ?></li>
                                    <li><a href="http://www.lightningdigitalsignage.com" title="LDS Official Website"><img src="<?php echo base_url(); ?>images/intro.jpg" class="block" /></a><div class="label_text"></div></li>
                                    <li><a href="http://www.lightningdigitalsignage.com" title="Advertise right now and meet your business goals with 3000 estimation people per day"><img src="<?php echo base_url('images/airport.jpg'); ?>" class="cube" /></a><div class="label_text"></div></li>
                                    <li><a href="http://www.lightningdigitalsignage.com" title="Advertise right now and meet your business goals with 1000 estimation people per day"><img src="<?php echo base_url('images/gp.jpg'); ?>" class="default" /></a><div class="label_text"></div></li>
                                    <li><a href="http://www.lightningdigitalsignage.com" title="Advertise right now and meet your business goals with 1000 estimation people per day"><img src="<?php echo base_url('images/feunud.jpg'); ?>" class="block" /></a><div class="label_text"></div></li>
                                    <li><a href="http://www.lightningdigitalsignage.com" title="Advertise right now and meet your business goals with 1000 estimation people per day"><img src="<?php echo base_url('images/bc.jpg'); ?>" class="cube" /></a><div class="label_text"></div></li>
                                </ul>
                            </div>
                            <div id="slogan">
                                <h1>Advertising paperless technology, save our trees</h1>
                            </div>    
                        </div>

                        <div id="content">
                            <?php echo $body; ?>
                        </div>   
                        <div id="pfooter"></div>
                        <div id="footer">      
                            <div id="lang">
                                <ul>                                   

                                </ul>
                            </div>
                            <div id="menu-footer">
                                <ul>
                                    <?php
                                    if (isset($pages))
                                    {
                                        foreach ($pages as $page)
                                        {
                                            echo $page->title;
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                            <p class="copyright">&copy;copyright 2012 <a class="copyright" title="Lightning Digital Signage" href="http://www.lightningdigitalsignage.com">LDS</a>. All rights reserved.<br />Powered by <a class="copyright" href="http://www.lli.co.id" title="PT. Lucent Lestari Indah">LLI</a></p>
                            <p align="right">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
                        </div>
                    </div>
                    <div id="sideAds-rightContainer">
                        <div id="sideAds-home3"><?php get_ads(ADS_TYPE_SIDE3, "121119"); ?></div>
                        <div id="sideAds-home4"><?php get_ads(ADS_TYPE_SIDE4, "121119"); ?></div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>