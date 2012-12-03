<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * TYPE ADS  
 */
define("ADS_TYPE_SPONSORED", 0);
define("ADS_TYPE_POPUP", 1);
define("ADS_TYPE_SIDE1", 2);
define("ADS_TYPE_SIDE2", 3);
define("ADS_TYPE_SIDE3", 4);
define("ADS_TYPE_SIDE4", 5);

/**
 *
 * @param type $adtype 
 * @return
 *      jika $adtype=='SPONSORED'
 *      
 *      data = array(
 *          name => 'nama',
 *          location => 'lokasi misal 12/02/24_sponsored or 12/02/24_popup or 12/02/24_siden'
 * 
 *      )
 * 
 */
function get_ads($adtype, $date)
{
    switch ($adtype)
    {
        case ADS_TYPE_SPONSORED:
            //$link = "ads/$date/sponsored/";
            $link = "#";
            $imgSrc = base_url() . "images/ads/$date/sponsored/sponsored.jpg";
            echo "<a href=\"$link\" title=\"Put your title here\" ><img src=\"$imgSrc\" class=\"label_text\" /></a>";
            break;
        case ADS_TYPE_POPUP:
            $imgSrc = base_url() . "images/ads/$date/popup/popup.jpg";
            echo "<img src=\"$imgSrc\" />";
            break;
        case ADS_TYPE_SIDE1:
            $imgSrc = base_url() . "images/ads/$date/side_home1/side_home1.jpg";
            echo "<img src=\"$imgSrc\" />";
            break;
        case ADS_TYPE_SIDE2:
            $imgSrc = base_url() . "images/ads/$date/side_home2/side_home2.jpg";
            echo "<img src=\"$imgSrc\" />";
            break;
        case ADS_TYPE_SIDE3:
            $imgSrc = base_url() . "images/ads/$date/side_home3/side_home3.jpg";
            echo "<img src=\"$imgSrc\" />";
            break;
        case ADS_TYPE_SIDE4:
            $imgSrc = base_url() . "images/ads/$date/side_home4/side_home4.jpg";
            echo "<img src=\"$imgSrc\" />";
            break;
        default:
            echo "default";
            break;
    }
    $imgSrc = "";
    //$return = array();
}

?>
