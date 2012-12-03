<?php

function pageNavigation($pageParam, $formatFunc) {
    global $messages;
    switch ($pageParam) {
        case 'home':
            echo "<a href=\"index.php\">";
            echo $formatFunc($messages["navigation"][$pageParam]);
            echo "</a>";
            break;
        default:
            echo "<a href=\"page.php?page=" . $pageParam . "\">";
            echo $formatFunc($messages["navigation"][$pageParam]);
            echo "</a>";
            break;
    }
}

function ourspot_link($name, $spot) {
    echo "<a id=\"link_${name}\" href=\"#gallery_${name}\"";
    //echo " onclick=\"switchGallery($('#gallery_${name}'))\"";
    echo ">";
    echo "<span style=\"font-size:16px;\">";
    echo $spot["title"];
    echo "</span>";
    echo '</a>';
    return false;
}

function ourspot_spot($spot, $preview, $width, $height) {
    $imgSrc = "images/ourspots/${spot}/" . $preview["img"];
    echo "<div class=\"spot\">";
    echo "<img src=\"$imgSrc\" alt=\"\"  width=\"${width}\" height=\"${height}\" rel=\"" . $preview["caption"] . "\">";
    echo "<div class=\"caption\">";
    if ($preview['marqueue']) {
        echo "<marqueue class=\"content\" width=\"100%\" direction=\"right\" scrollamount=\"3\" behavior=\"scroll\">";
        echo "</marqueue>";
    } else {
        echo "<div class=\"content\"></div>";
    }
    echo "</div>";
    echo "</div>";
}

function isValidEmail($email) {
    return preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/", $email);
}

function sendEmail($to, $subject, $message, $message_cc, $from, $fromName) {

    $setheader = "MIME-Version: 1.0" . "\r\n";
    $setheader .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $setheader .= "From: $fromName <$from>\r\n";
    $setheader .= "Reply-To: $from\r\n";
    $setheader .= "X-Sender: $from\r\n";
    $setheader .= "Return-Path: $from\r\n";
    $setheader .= "Cc: $message_cc\r\n";

    $ok = @mail($to, $subject, $message, $setheader);
    if ($ok) {
        return true;
    } else {
        return false;
    }
}

function galleriffic_it($folder, $image) {
    echo '<li>';
    echo "<a class=\"thumb\" name=\"drop\"  title=\"Title #1\" href=\"$folder/" . $image["img"] . "\">";
    echo "<img src=\"$folder/" . $image["img"] . "\" width=\"75\" height=\"75\" />";
    echo "</a>";
    echo "<div class=\"caption\">";
    echo $image['caption'];
    echo "</div>";
    echo "</li>";
}


?>