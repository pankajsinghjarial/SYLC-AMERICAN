<?php
extract($_GET);
extract($_POST);
$obj_setting = new common();


if(isset($id) and $id!='' and isset($action) and $action=='delete'){

	if(isset($searchtext) and $searchtext!=''){
			$addToUrl = '?searchtext='.$searchtext.'&searchcombo='.$searchcombo;
	}else{
			$addToUrl = '';
	}
    $obj_setting->delete('phone_leads'," id=$id");
	$_SESSION['success_msg'] = 'Enquiry deleted successfully.';
	echo '<script>location.href="'.DEFAULT_ADMIN_URL.'/contact/phone/index.php'.$addToUrl.'";</script>'; 
}

$total_rows = $obj_setting->numberOfRows('phone_leads'," id=$id");
if($total_rows > 0){
	$singlePage 	= $obj_setting->customQuery("SELECT * FROM phone_leads where id='".$id."'");
	$getPageName 	= $db->fetchNextObject($singlePage);
	$pageName  		= $getPageName->name;
}else{
	$pageName  = 'No enquiry exists with this id.';
}
unset($obj_setting);

?>