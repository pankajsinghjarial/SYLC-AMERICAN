<?php include_once(LIST_ROOT.'/includes/views/head.php'); ?>
<?php $page = end(explode("/",$_SERVER['REQUEST_URI']));?>
<script src="<?php echo DEFAULT_URL; ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo DEFAULT_URL; ?>/js/nivo.slider.js" type="text/javascript"></script> 
	<link rel="stylesheet" href="<?php echo DEFAULT_URL; ?>/css/flexslider.css" type="text/css" media="screen" />
	<script src="<?php echo DEFAULT_URL; ?>/js/jquery.flexslider-min.js"></script>

	<script type="text/javascript">
		
window.onload = function(){$('.flexslider').flexslider();};
		
(function($){
	$(document).ready(function () {
		$('.nav li a').hover(
			function () {
				$('ul', this).slideDown(450); 
			},
			function () {
				$('ul', this).slideUp(450);         
			});
	});
})(jQuery);
	</script>

<div class="wrapper">
<div class="main_header">
    <div class="header">
      <div class="header_left">
        <div class="logo"><a href="<?php echo DEFAULT_URL; ?>/home"><img src="<?php echo DEFAULT_URL ?>/images/logo.png" alt="Logo" /></a></div>
      </div>
      <div class="update_tabes">
		<ul>
		<?php if($_SESSION['User']['id']==''){?>
		<li><a href="<?php echo DEFAULT_URL."/loginaccount"?>" <?php if($page=='loginaccount' || $page=='createaccount' ){?> class="active" <?php }?>><span>CREEZ UN COMPTE</span></a> </li>
        <li><a href="<?php echo DEFAULT_URL."/wishlist"?>" <?php if($page=='wishlist'){?> class="active" <?php }?>><span>MA S&Eacute;LECTION</span></a></li>
		
		<?php }if($_SESSION['User']['id']!=''){ //echo 'hi';?>
        <li><a href="<?php echo DEFAULT_URL."/editaccount"?>" <?php if($page=='editaccount'){?> class="active" <?php }?>><span>MON COMPTE</span></a> </li>
        <li><a href="<?php echo DEFAULT_URL."/wishlist"?>" <?php if($page=='wishlist'){?> class="active" <?php }?>><span>MA S&Eacute;LECTION</span></a></li>
        <li><a href="<?php echo DEFAULT_URL."/logout"?>" <?php if($page=='logout'){?> class="active" <?php }?>><span>D&Eacute;CONNEXION</span></a></li>
		<?php }?>
		</ul>
	</div>
      
      <div class="contact_no_m"><?php
     		$commons= new common(); 
	 		$urls = $commons->CustomQuery("Select * from admins where id =1"); 
		  $urlinfo = mysql_fetch_object($urls);
		  ?>
          <!--<ul class="header_social">
      <li><a href="<?php echo $urlinfo->facebook; ?>" target="_blank"><img src="<?php echo DEFAULT_URL ?>/images/facebook_head.png" alt="Facebook" /></a></li>
      <li><a href="<?php echo $urlinfo->youtube; ?>" target="_blank"><img src="<?php echo DEFAULT_URL ?>/images/youtube_head.png" alt="You Tube" /></a></li>
    </ul> -->
    <div class="header_right"> <span class="contactez">Contactez-nous!</span> <span class="cell_number">
      <?php 
		  $phonenum = $commons->CustomQuery("Select phone1,phone2 from admins where id = 1");
		  $phonenum = mysql_fetch_object($phonenum);
		  echo $phonenum->phone1."<br/>".$phonenum->phone2;
	  ?></span> </div></div>
      
      <div class="header_mid"><span><?php $commons->countCars();?></span> </div>
      <div class="clear"></div>
      <div class="nav">
        <ul>
          <li><a <?php if(basename($_SERVER['REQUEST_URI'])=='home' || basename($_SERVER['REQUEST_URI'])=='sylc') { ?> class="active" <?php } ?> href="<?php echo DEFAULT_URL; ?>/home"><span> Accueil</span></a></li>
          <li><a <?php if(basename($_SERVER['REQUEST_URI'])=='announces') { ?> class="active" <?php } ?> href="<?php echo DEFAULT_URL; ?>/announces"><span>LES ANNONCES</span></a></li>
          <li><a <?php if(basename($_SERVER['REQUEST_URI'])=='services') { ?> class="active" <?php } ?> href="<?php echo DEFAULT_URL; ?>/page/<?php echo $commons->getPageSlug('52'); ?>"><span>Services</span></a>
            <ul>
              <li><a href="<?php echo DEFAULT_URL; ?>/page/<?php echo $commons->getPageSlug('54'); ?>">Notre mission</a></li>
              <li><a href="<?php echo DEFAULT_URL; ?>/page/<?php echo $commons->getPageSlug('47'); ?>">Nos Garanties</a></li>
              <li><a href="<?php echo DEFAULT_URL?>/page/<?php echo $commons->getPageSlug('48'); ?>">Logistiques</a></li>
              <li><a href="<?php echo DEFAULT_URL?>/page/<?php echo $commons->getPageSlug('49'); ?>">Conseils</a></li>
              <li><a href="<?php echo DEFAULT_URL?>/page/<?php echo $commons->getPageSlug('50'); ?>">Calculateur</a></li>
              <li><a href="<?php echo DEFAULT_URL?>/page/<?php echo $commons->getPageSlug('51'); ?>">Devis</a></li>
              <li><a href="<?php echo DEFAULT_URL?>/faq">FAQ</a></li>
            </ul>
        </li>
          <li><a <?php if(basename($_SERVER['REQUEST_URI'])=='presentation') { ?> class="active" <?php } ?> href="<?php echo DEFAULT_URL; ?>/page/<?php echo $commons->getPageSlug('53'); ?>"><span>Presentation</span></a></li>
          <li><a <?php if(basename($_SERVER['REQUEST_URI'])=='nosstock') { ?> class="active" <?php } ?> href="<?php echo DEFAULT_URL; ?>/nosstock"><span>Nos stocks</span></a>
            <ul>
              <li><a href="<?php echo DEFAULT_URL; ?>/nosstock?stockType=neuf">Neuf</a></li>
              <li><a href="<?php echo DEFAULT_URL; ?>/nosstock?stockType=classic">Classic Car</a></li>
            </ul>
          </li>
          <li class="last"><a  <?php if(basename($_SERVER['REQUEST_URI'])=='contacts') { ?> class="active" <?php } ?> href="<?php echo DEFAULT_URL; ?>/<?php echo $commons->getPageSlug('17'); ?>"><span>Contact</span></a></li>
        </ul>
      </div>
      <div class="banner1"> <div id="slider">
<?php     

$slide = $commons->CustomQuery("Select * from banner where publish = 1 and type = 1");
while($image = mysql_fetch_object($slide))
{
 ?>
 <img src="<?php echo DEFAULT_URL; ?>/images/banner/<?php echo $image->image;  ?>" alt="Banner" width="988" height="358" />
<?php } ?>
			
		</div> </div>
      <div class="clear"></div>
      
    </div>
  </div>