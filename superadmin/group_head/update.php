<?php 

include_once("../../conf/config.inc.php");



//Checking admin login or not

if(!$loginCheck->isLoggedIn()){

    echo '<script>location.href = "'.DEFAULT_ADMIN_URL.'/login/login.php";</script>';

	exit;

}

//include coding or processing of article file

include_once(LIST_ROOT_ADMIN."/group_head/code/update_code.php"); 



include(LIST_ROOT_ADMIN_INCLUDES."/views/admin_header.php");   

 

include(LIST_ROOT_ADMIN."/group_head/form/update_form.php");  

 

include(LIST_ROOT_ADMIN_INCLUDES."/views/admin_footer.php");  

?>











