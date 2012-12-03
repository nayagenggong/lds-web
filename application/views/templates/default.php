<!DOCTYPE html>
<?php
require_once APPPATH . "helpers/functions.php";
?>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php ?></title>

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/boilerplate.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/gaya.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/galleria.classic.css" type="text/css">

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.5.2.min.js" ></script>      

        <script type="text/javascript" src="<?php echo base_url(); ?>js/galleria-1.2.8.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/galleria.classic.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/galleria.classic.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.animate-colors-min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/respond.min.js" ></script>

        <style type="text/css">
            #mask { position:absolute; left:0; top:0; z-index:9000; background-color:#000; display:none; margin: 0 auto; }
            #boxes .window { position:fixed; width:440px; height:200px; display:none; z-index:9999; /*padding:20px;*/ margin: 0 auto; }
            #boxes #dialog1 { /*width:375px; height:203px;*/  }
            #dialog1 .d-header { background:url('<?php echo base_url(); ?>ads/121001/popup/popup.jpg') no-repeat 0 0 transparent; width:600px; height:400px; }
            .close img{ display: block; }
        </style>
    </head>

    <body id="home" >

        <div id="wrap">
            <div class="gridContainer clearfix">
                <div id="container-x"> 
                    <div id="sideAds-leftContainer">
                        <div id="sideAds-home1"><?php //get_ads(ADS_TYPE_SIDE1, "121001");   ?></div>
                        <div id="sideAds-home2"><?php //get_ads(ADS_TYPE_SIDE2, "121001");   ?></div>
                    </div>
                    <div id="main-x">
                        <!-- Start Head -->
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

                            <div id="slogan">
                                <h1></h1>
                            </div>    
                        </div>
                        <!-- End Head -->

                        <!-- Start Body -->
                        <?php echo $body; ?>
                        <!-- End Body -->

                        <!-- Start Footer -->
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
                        <!-- End Footer -->
                    </div> 
                    <div id="sideAds-rightContainer">
                        <div id="sideAds-home3"><?php //get_ads(ADS_TYPE_SIDE3, "121001");  ?></div>
                        <div id="sideAds-home4"><?php //get_ads(ADS_TYPE_SIDE4, "121001");  ?></div>
                    </div>  
                </div>
            </div>
        </div>
    </body>
</html>