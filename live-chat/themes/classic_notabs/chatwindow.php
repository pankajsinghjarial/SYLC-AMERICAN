<!DOCTYPE html>
<html>
<body  marginheight=0 marginwidth=0 leftmargin=0 topmargin=0  bgcolor=<?php echo $botbackcolor; ?> background="<?php echo $botbackground; ?>">
<link rel="stylesheet" type="text/css" href="themes/<?php echo $theme; ?>/chatbubble.css"   />	

<!-- theme: <?php echo $theme; ?> -->

<DIV style="background: #FFFFFF url('<?php echo $topbackground; ?>'); width:100%; height:<?php echo $topframeheight; ?>px; top:0px; left:0px; position:relative;">

   <?php if ($CSLH_Config['showoperator']=="Y"){ ?>
  <DIV style="width:100px; height:<?php echo $topframeheight; ?>px;  position:relative; float:left;">
  <table width=100><tr><td valign=center width=100><img src=<?php echo $urlforoperator; ?> height=<?php echo $topframeheight; ?>   border=0>    			   
   </td></tr></table>
  </DIV>
  <?php } ?>  

  <DIV style="float:right; width:300px; height:<?php echo $topframeheight; ?>px; text-align:right;  "><?php echo $cslhdue; ?></DIV>    


</DIV>    

 	<?php if(!(empty($td_list))){ ?>
 	 	<DIV style="width:100%; height:28px; background: #FFFFFF url('themes/<?php echo $theme; ?>/topbar.png'); position:relative;">
		<DIV style="left:20px; position:relative;">
    <?php echo $td_list; ?>
     </div>
    </div>
<?php } ?> 
   
 
 <DIV style="background: <?php echo $midbackcolor; ?> url('themes/classic/topbubble.gif') no-repeat; width:100%; height:6px; top:0px; left:0px; position:relative;"></DIV>
  <DIV style="width:100%; height:240px;  top:0px; left:0px; position:relative;  float:left;">
	    <iframe height="240" width="100%" frameborder=0 src="<?php echo $urlforchat; ?>" name="chatwindow" scrolling="auto" border="1" marginheight="0" marginwidth="0" NORESIZE=NORESIZE></iframe>
 </DIV>
	<div style="margin: 0; padding: 0; clear: both;"></div>
 <DIV style="background: <?php echo $botbackcolor; ?> url('themes/classic/botbubble.gif'); width:100%; height:17px; top:0px; left:0px; position:relative;"></DIV>
 
 
  			  	  			  	
	
	<div style="margin: 0; padding: 0; clear: both;"></div>
  
	<DIV style="width:90%; height:75px; float:left; top:20px; left:0px;  position:relative;">	 		


<table width=99% cellpadding=0 cellspacing=0 border=0 background=images/blank.gif>
    <tr><td valign=top>
    	 <FORM action="javascript:nothingtodo()"  name=chatter METHOD=POST name=chatter>
       <table cellspacing=0 cellpadding=0 border=0><tr>
        <td width=20>&nbsp; </td>
        <td><b><?php echo $lang['ask']; ?></b></td>
        <td width=80%><textarea cols=45 rows=2 name=comment ONKEYDOWN="return microsoftKeyPress()"></textarea></td>
         <td><table width=75 cellspacing=0 cellpadding=0 border=0><tr>
<?php 
 if($smiles!="N"){  
   if ($UNTRUSTED['convertsmile'] == "ON"){ 
   	print "<td><a href=javascript:showsmile()><img src=images/icon_smile.gif border=0>&nbsp;".$lang['view']."</a></td></tr><tr><td><font color=009900><b>".$lang['ON']."</b></font> / <a href=livehelp.php?convertsmile=OFF&department=$department>".$lang['OFF']."</a></td></tr></table></td>";
   } else { 
   	print "<td><img src=images/icon_nosmile.gif border=0>&nbsp;<s>".$lang['view']."</s></td></tr><tr><td><a href=livehelp.php?department=$department>".$lang['ON'] ."</a> / <font color=990000><b>".$lang['OFF']."</b></font></td></tr></table></td>";  }
  } 
   
 ?>
<td valign=top valign=bottom width=76 STYLE="top:10px; border:0px;"><img src=images/blank.gif width=70 height=10 border=0><br><a class="button" href="javascript:nothingtodo()" onClick="safeSubmit()" STYLE="border:0px;"><span STYLE="border:0px;" ><?php echo $lang['SAY']; ?></span></a></td>
<td valign=top width=75>&nbsp;  </td>
<td valign=top valign=bottom width=76 STYLE="top:10px; border:0px;"><img src=images/blank.gif width=70 height=10 border=0><br><a class="button" href="javascript:nothingtodo()" onClick="exitchat()" STYLE="border:0px;"><span STYLE="border:0px;" ><?php echo $lang['exit']; ?></span></a></td>
<input type=hidden name=channel value=<?php echo $channel; ?> >
<input type=hidden name=department value=<?php echo $department; ?> >
<input type=hidden name=myid value=<?php echo $myid; ?> >
<input type=hidden name=typing value="no">
<?php 
if ($UNTRUSTED['convertsmile'] == "ON")
  	print "<input type=hidden name=convertsmile value=ON>";
   else
    print "<input type=hidden name=convertsmile value=OFF>";
?>	
</td></tr></table>
</FORM>
</td></tr></table> 


</DIV>
  

</body>
</html>