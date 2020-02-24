<?php 
if(isset($_SERVER['HTTP_USER_AGENT']) && strlen(strstr($_SERVER['HTTP_USER_AGENT'],"Fenix")) > 0 ){
header('Location: https://pastebin.com/raw/xt12XcSH');
} else {
header('Location: https://www.hostinger.es/tutoriales/wp-content/uploads/sites/7/2017/08/que-es-el-error-403-Prohibido-y-como-arreglarlo.jpg'); exit();
}
?>
