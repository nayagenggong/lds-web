<?php
//available pages in this web
$navigations=array("home","about","ourspots","news","contact");
//global variable to hold i18n messages
$messages = array();
$page=isset($_GET["page"])?$_GET["page"]:'home';

$cookieExpired = time() + 60 * 60; //cokie valid for 1 day
if (isset($_GET["lang"]) && !empty($_GET["lang"])) {
		$lang = $_GET["lang"];
		switch($lang){
			case 'in':
				setcookie('lang','in',$cookieExpired,'/');
				$i18n = "in_ID";				
				break;
			default:
				setcookie('lang','en',$cookieExpired,'/');
				$i18n = "en_US";
				break;
		}
}
else{
if(isset($_COOKIE['lang']) && !empty($_COOKIE['lang'])){
		$lang = $_COOKIE["lang"];
		switch($lang){
			case 'in':
				setcookie('lang','in',$cookieExpired,'/');
				$i18n = "in_ID";
				break;
			default:
				setcookie('lang','en',$cookieExpired,'/');
				$i18n = "en_US";
				break;
		}
}
else{	
		$languages=explode(',',$_SERVER[HTTP_ACCEPT_LANGUAGE]);
		$most_preferred=$languages[0];
		switch($most_preferred){
		  case 'id':
			 $i18n="in_ID";
			 break;
		  case 'en':
		  default: 
			$i18n="en_US";
			break;
		 
		}
}
}


?>