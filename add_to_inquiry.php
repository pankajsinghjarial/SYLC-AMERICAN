<?php include("conf/config.inc.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="<?php echo DEFAULT_URL; ?>/css/popup.css" type="text/css" rel="stylesheet" media="all" />
<script type="text/javascript">
	function validate_check()
	{
	

		var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		var ck_number = /^-{0,1}\d*\.{0,1}\d+$/;
		
		var validation='';
		var email = document.getElementById("email").value;		
		
		if(email == ''|| email=='Email:'){	
			
				filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if (filter.test(email)){
 				}
				else{
					validation +='E-mail doit être valide.\n';
				}		
		}
		
		
		if(validation){
			alert(validation);
			return false;
		}
		else{
			 return true;
		}
}
</script>
</head>

<body>
<div class="popup" style="height:365px; width:500px;">

	<div class="popup_head">
	<p><?php echo (!empty($_REQUEST['order'])) ? "COMMANDER L'HISTORIQUE DE CETTE VOITURE" : "DEMANDER LA FICHE TECHNIQUE DE CE VEHICULE"; ?></p>
    
    </div>
    
    <div class="popup_cnt">
      <div class="popup_cnt01">
      <form name="inquir_form" id="inquir_form" method="post">
      	<table width="100%" cellpadding="0" cellspacing="0">
       
        <tr>
        <td ><div class="input_text">Email :</div></td>
        <td ><div class="input_outer"> <input type="text" placeholder="Email:" name="email" id="email" class="input_01"  value="" /></div></td>
        </tr>
	<input type="hidden" name="order" value="<?php echo (!empty($_REQUEST['order'])) ? 1 : 0; ?>"
        <tr>
        <td ></td>
        <td ><input type="submit" class="submit_btn" class="form-submit" name="add_to_enquire" value="" id="submit_inq" onclick="return validate_check()" /></td>
        </tr>
      </table>
      <input type="hidden" name="car_id" value="<?php echo $_GET['carId'] ?>"/>
      </form>
      </div>
    </div>
    
    
    <div class="popup_bottom">
    <img src="<?php echo DEFAULT_URL;?>/images/bottom_bg.png" width="499" height="12" alt="" /></div>
  
</div>



<?php /*?><div id="homer" style="height:370px; width:440px;">

<div id="homer_iner">

  <h3>ENREGISTREZ-VOUS ET RECEVEZ DES ALERTES SUR CETTE VOITURE.</h3>
<form name="inquir_form" id="inquir_form" method="post">
<div class="text_box_iner">
    <input type="text" value="Nom:" name="name" id="name" class="input_text" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Nom:':this.value;" />
    <input type="text" value="Pr&eacute;nom:" name="prename" id="prename" class="input_text" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Pr&eacute;nom:':this.value;" />
    <input type="text" value="Email:" name="email" id="email" class="input_text" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Email :':this.value;" />
    <input type="text" value="Num&eacute;ro de t&eacute;l&eacute;phone:" name="phone" id="phone" class="input_text" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Num&eacute;ro de t&eacute;l&eacute;phone:':this.value;" />  
    <input type="hidden" name="car_id" value="<?php echo $_GET['carId'] ?>"/>
    <input type="hidden" name="title" value="<?php echo $_GET['title'] ?>"/>
    <input type="hidden" name="buyItNowPrice" value="<?php echo $_GET['buyItNowPrice'] ?>"/>
    <input type="hidden" name="postalCode" value="<?php echo $_GET['postalCode'] ?>"/>
    <input type="hidden" name="location" value="<?php echo $_GET['location'] ?>"/>
    <input type="hidden" name="listingType" value="<?php echo $_GET['listingType'] ?>"/>
    <input type="hidden" name="endson" value="<?php echo $_GET['endson'] ?>"/>
    <input type="hidden" name="endtimestamp" value="<?php echo $_GET['endtimestamp'] ?>"/>
    <input type="hidden" name="buyItNowAvailable" value="<?php echo $_GET['buyItNowAvailable'] ?>"/>
    <input type="submit" class="form-submit" name="add_to_sel" value="" id="submit_inq" onclick="return validate_check()">
    </div>
</form>
</div></div><?php */?>
</body>
</html>