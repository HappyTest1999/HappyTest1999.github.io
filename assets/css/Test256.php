<?php 
if(isset($_SERVER['HTTP_USER_AGENT']) && strlen(strstr($_SERVER['HTTP_USER_AGENT'],"Kodi")) > 0 ){
 readfile('secret.xml');
} else {
 die("No Access");
}
?>