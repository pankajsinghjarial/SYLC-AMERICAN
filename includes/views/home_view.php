<link rel="stylesheet" type="text/css" href="<?php echo DEFAULT_URL ?>/css/style-detail.css" />
<link rel="stylesheet" href="<?php echo DEFAULT_URL ?>/css/jquery.jscrollpane.css" >
<script type="text/javascript" src="<?php echo DEFAULT_URL ?>/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="<?php echo DEFAULT_URL ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroller_box').jScrollPane();
                                        
                                $('#foo2').carouFredSel({
					auto: false,
					prev: '#prev2',
					next: '#next2',
					mousewheel: true,
					swipe: {
						onMouse: true,
						onTouch: true
					}
				});
                                        
			});
		</script>
<script
	src="<?php echo DEFAULT_URL; ?>/js/jquery.colorbox.js"
	type="text/javascript"></script>
	<script type="text/javascript">
	window.onload = function(){
	$('.popup_class').css('display', 'block');
	jQuery(".popup_class").colorbox({
		//escKey: false,
		closeButton : false,
		//overlayClose: false,
		
	});
};

</script>
	
<script type="text/javascript">
function changeSel(val){
	if( val != ''){
		 var sel2 = $('.year_a').find('option').remove().end();
		 $('.year_a').removeAttr('disabled');
		 $(sel2).append('<option value="">A</option>');
		 for(var i = 2013 ; i > val; i--){
			$(sel2).append('<option value="'+i+'">'+i+'</option>'); 
		 }
	}
	else{
		$('.year_a').attr('disabled','disabled');
	}
}
function ajaxcall(val,attribute,name,manufac){ 
 	var divname = "#"+name;
 	jQuery(divname).html('<p style="position: absolute; top: 10px; left: 30px;"><img width="72" height="15" src="<?php echo DEFAULT_URL?>/images/loading.gif"></p>');
  	jQuery.ajax({
		  type: "POST",
		  url: "<?php echo DEFAULT_URL?>/ajax_new.php",
		  data: { value: val, attr : attribute, manufact : manufac, css_class : 'combo_box'},
		  dataType: "html",
		  success: function(data) {
			jQuery(divname).html("");
			jQuery(divname).append(data);
		  }
	});
}


function formcheck() {
	
 if(document.getElementsByName('manufacturer').value == ""){
   alert("Please Select Make.");
   return false;
 }else{
     var oldMilage = $("#Slider2").val();
     if(oldMilage>0){
        $("#Slider2").val("Moins+Que+"+oldMilage*1000+"+miles");
     }else{
         $("#Slider2").val('');
     }
     
     //var oldPrice = $("#Slider1").val();
     //oldPriceArr = oldPrice.split(';');
     //var from = oldPriceArr[0]/1000;
	 var from = $('#min_price').val()/1000;
	//     var to = oldPriceArr[1]/1000;
	var to = $('#max_price').val()/1000;
     if(from==0 && to==0){
         $("#Slider1").val('');
     }else{
        $("#Slider1").val(from+"~"+to);
     }
    
     //var madeYearRange = $("#Slider3").val();
     //oldmadeYearRangeArr = madeYearRange.split(';');
     //$("#from").val(oldmadeYearRangeArr[0]);
     //$("#to").val(oldmadeYearRangeArr[1]);
	 
 }
}

function changeBrand(valueId){ 
    $("input:checkbox[value="+valueId+"]").trigger('click');
//    var currClass = $('#brand'+valueId).attr('class');
//    alert(currClass);
//    if(currClass=='active-li'){
//        $('#brand'+valueId).removeClass('active-li');
//        $('#manufacturer'+valueId).val("");
//        
//    }else{
////        $('#brand'+valueId).addClass('active-li');
////        $('#manufacturer'+valueId).val($('#brand'+valueId).html());
//        
//    }
    
}

function changeBrandSelect(valueId,isChecked){
    if (isChecked){
       $('#brand'+valueId).addClass('active-li');
       $('#manufacturer'+valueId).val($('#brand'+valueId).html());
       ajaxcall($('#brand'+valueId).html(),'manufacturer','model','','append');
    }else{
        $('#brand'+valueId).removeClass('active-li');
        $('#manufacturer'+valueId).val("");  
        ajaxcall($('#brand'+valueId).html(),'manufacturer','model','','remove');
    }
}

function changeCategory(valueId,divId){

    var currClass = $('#car-text'+divId).attr('class');

    if(currClass == 'car-text active-li'){
        $('#car-text'+divId).removeClass('active-li');
        $('#cat'+divId).css('top',"-16px");
        $('#cat'+divId).css('height',"");
        $('#bodyStyle'+divId).val("");
    }else{
        $('#cat'+divId).css("height","17px");
        if(divId==3){
            $('#cat'+divId).css('top',"12px");
        }else if(divId==6){
            $('#cat'+divId).css('top',"9px");
        }else{
            $('#cat'+divId).css('top',"10px");
        }
        $('#car-text'+divId).addClass('active-li');
        $('#bodyStyle'+divId).val(valueId);
    }
    
}
</script>

<!--*******************Range Slider code*********************-->
 <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="<?php echo DEFAULT_URL ?>/js/range-slider/css/jslider.css" type="text/css">
<link rel="stylesheet" href="<?php echo DEFAULT_URL ?>/js/range-slider/css/jslider.plastic.css" type="text/css">
<script type="text/javascript" src="<?php echo DEFAULT_URL ?>/js/range-slider/js/jshashtable-2.1_src.js"></script>
<script type="text/javascript" src="<?php echo DEFAULT_URL ?>/js/range-slider/js/jquery.numberformatter-1.2.3.js"></script>
<script type="text/javascript" src="<?php echo DEFAULT_URL ?>/js/range-slider/js/tmpl.js"></script>
<script type="text/javascript" src="<?php echo DEFAULT_URL ?>/js/range-slider/js/jquery.dependClass-0.1.js"></script>
<script type="text/javascript" src="<?php echo DEFAULT_URL ?>/js/range-slider/js/draggable-0.1.js"></script>
<script type="text/javascript" src="<?php echo DEFAULT_URL ?>/js/range-slider/js/jquery.slider.js"></script>


<!--*******************Range Slider code*********************-->
<style>
	.popup_class{display: none}
	#cboxClose {
  background: none !important;
  display: none !important;
}
.economise_box {
  float: left;
}
</style>

<?php if(isset($_SESSION['sentmail_txt'])){ echo $_SESSION['sentmail_txt']; unset($_SESSION['sentmail_txt']);}?>
<!--middle start-->
<div class="middle">
  <div class="content_left_outer">
    <h1>Commencez Votre Recherche</h1>
    <form action="<?php echo DEFAULT_URL?>/announces" id="seach_index_form" method="post" onsubmit="return formcheck();" >
    <div class="content_left_inner">
      <div class="left_panel">
        <div class="car_model">
            <div class="car_img" style="left:9px;" id="cat1">
             <img src="<?php echo DEFAULT_URL ?>/images/car_cat1.png" alt="car" onclick="changeCategory('Hatchback',1)">
            </div>
             <span class="car-text"  id="car-text1" onclick="changeCategory('Hatchback',1)">Hatchback</span>
             <input type="hidden" id="bodyStyle1" name="bodyStyle[]" value=""/>
             
             <div class="car_img" style="left:74px;" id="cat2">
                 <img src="<?php echo DEFAULT_URL ?>/images/car_cat2.png" alt="car" onclick="changeCategory('Sedan',2)">
            </div>
             <span class="car-text" id="car-text2" onclick="changeCategory('Sedan',2)">Sedan</span>
             <input type="hidden" id="bodyStyle2" name="bodyStyle[]" value=""/>
             
             <div class="car_img" style="left:137px;" id="cat3">
             <img src="<?php echo DEFAULT_URL ?>/images/car_cat3.png" alt="car" onclick="changeCategory('4X4',3)">
            </div>
             <span class="car-text" id="car-text3" onclick="changeCategory('4X4',3)">4X4</span>
             <input type="hidden" id="bodyStyle3" name="bodyStyle[]" value=""/>
             
             <div class="car_img" style="left:199px;" id="cat4">
             <img src="<?php echo DEFAULT_URL ?>/images/car_cat4.png" alt="car" onclick="changeCategory('MPV',4)">
            </div>
             <span class="car-text" id="car-text4" onclick="changeCategory('MPV',4)">MPV</span>
             <input type="hidden" id="bodyStyle4" name="bodyStyle[]" value=""/>
             
             <div class="car_img" style="left:264px;" id="cat5">
             <img src="<?php echo DEFAULT_URL ?>/images/car_cat5.png" alt="car" onclick="changeCategory('Estate',5)">
            </div>
             <span class="car-text" id="car-text5" onclick="changeCategory('Estate',5)">Estate</span>
             <input type="hidden" id="bodyStyle5" name="bodyStyle[]" value=""/>
             
             <div class="car_img" style="left:329px;" id="cat6">
             <img src="<?php echo DEFAULT_URL ?>/images/car_cat6.png" alt="car" onclick="changeCategory('Convertible',6)">
            </div>
             <span class="car-text" id="car-text6" onclick="changeCategory('Convertible',6)">Convertible</span>
             <input type="hidden" id="bodyStyle6" name="bodyStyle[]" value=""/>
             
             <div class="car_img" style="left:392px;" id="cat7">
             <img src="<?php echo DEFAULT_URL ?>/images/car_cat7.png" alt="car" onclick="changeCategory('Coupe',7)">
            </div>
             <span class="car-text" id="car-text7" onclick="changeCategory('Coupe',7)">Coupe</span>
             <input type="hidden" id="bodyStyle7" name="bodyStyle[]" value=""/>
        </div>
        <div class="car_model_form">
          <ul>
            <li>
              <div class="field_box01">
                <label>Marque:</label>
                <select class="field_textbox" id="manufacturer_select" multiple="multiple"  name="manufacturer">
                    <?php foreach($modelList as $model){ ?>
                    <option value="<?php echo $model['value_id'] ?>"><?php echo $model['value']; ?></option>
                    <?php }?>                     
                 </select>
              </div>
              <div class="field_box02">
                <label>Modele:</label> 
                <select class="field_textbox" name="model" id="model_select">                    
                    <option value="">Modèles</option>                                 
                 </select>
                <div id="loader" style="display: none;margin-top:7px;">
                    <img width="72" height="15" src="<?php echo DEFAULT_URL ?>/images/loading.gif">
                </div>
              </div>
            </li>
            <li>
              <div class="field_box01">
                <label>Couleur Exterieur :</label>
                <select id="newPrice" name="extColor" class="field_textbox">
                 	 <option value="">S&eacute;lectionner</option>
                     <option value="White">Blanc</option>
                     <option value="Blue">Bleu</option>
                     <option value="Burgundy">Bourgogne</option>
                     <option value="Tan">Bronzer</option>
                     <option value="Brown">Brun</option>
                     <option value="Gray">Gris</option>
                     <option value="Yellow">Jaune</option>
                     <option value="Black">Noir</option>
                     <option value="Gold">Or</option>
                     <option value="Orange">Orange</option>
                     <option value="Purple">Pourpre</option>
                     <option value="Silver">Pi&egrave;ces d'argent</option>
                     <option value="Red">Rouge</option>
                     <option value="Teal">Sarcelle</option>
                     <option value="Green">Vert</option>
                  </select>
              </div>
              <div class="field_box02">
                <label>Couleur Interieur:</label>
                <select id="newPrice" name="interColor" class="field_textbox">
                 	 <option value="">S&eacute;lectionner</option>
                     <option value="White">Blanc</option>
                     <option value="Blue">Bleu</option>
                     <option value="Burgundy">Bourgogne</option>
                     <option value="Tan">Bronzer</option>
                     <option value="Brown">Brun</option>
                     <option value="Gray">Gris</option>
                     <option value="Gold">Or</option>
                     <option value="Black">Noir</option>
                     <option value="Red">Rouge</option>
                     <option value="Teal">Sarcelle</option>
                     <option value="Green">Vert</option>
                  </select>
              </div>
            </li>
            <li>
              <div class="price_box"  style="width: 75px;">
                <p>Prix min.:</p>
				<input id="Slider1" type="hidden" name="price" class="field_textbox min_box1" />
                <div class="price_slider">
                 <span>
                    <input id="min_price" type="text" name="min_price" class="field_textbox min_box1" />
                </span>
				 
				
				 
                </div>               
                <script type="text/javascript" charset="utf-8">
                //jQuery("#Slider1").slider({ 
                //    from: 0, 
                //    to: 100000, 
                //    step: 10000, 
                //    smooth: true, 
                //    round: 0, 
                //    dimension: "&nbsp;$", 
                //    skin: "plastic" 
                //});
              </script>
              </div>
			  
			  <div class="price_box"  style="width: 75px;">
                <p>Prix max.:</p> 
                <div class="price_slider">
                 <span>
                    <input id="max_price" type="text" name="max_price"  class="field_textbox min_box1" />
                </span>
				 
		
				 
                </div>               
                
              </div>
			  <style>
				.min_box{ width: 73px;}
				.min_box1{ width: 45px;}
				.price_slider {height: 34px;padding:10px 6px 10px 1px;}
			  </style>
              <div class="price_box">
                <p>Kilométrage:</p>
                <div class="price_slider" style="padding-left: 7px;"> 
                    <span style="display: inline-block; width: 120px;">
                        <input id="Slider2" type="slider" name="mileage" value="0" />
                    </span>
                </div>               
                <script type="text/javascript" charset="utf-8">
                jQuery("#Slider2").slider({ 
                    from: 0, 
                    to: 100, 
                    step: 10, 
                    smooth: true,
                    format: { format: '0', locale: 'us' },
                    round: 1, 
                    dimension: "&nbsp;k", 
                    skin: "plastic" 
                });
              </script>
              </div>
              <div class="price_box">
                <p>Anneé:</p>
                <div class="price_slider" style="width: 165px;">
			<select name="madeYear[]" id="from" class="field_textbox min_box">
				<?php for($start = 1901; $start <= date('Y'); $start++ ) {
							$selected = ( $start == 1901 ) ? 'selected="selected"' : null;
							echo '<option '.$selected.'>'.$start.'</option>';			
				} ?>
			</select>
			
			<label style="vertical-align:middle">&agrave;</label>
			<select  name="madeYear[]" id="to" class="field_textbox min_box">
				<?php for($start = 1901; $start <= date('Y'); $start++ ) {
							$selected = ( $start == date('Y') ) ? 'selected="selected"' : null;
							echo '<option '.$selected.'>'.$start.'</option>';			
				} ?>
			</select>                    <!--<span style="display: inline-block; width: 130px;">
                        <input id="Slider3" type="slider" name="madeYearRange" value="<?php echo "1901;".date('Y');  ?>" />
                        <input type="hidden" name="madeYear[]" id="from" />
                        <input type="hidden" name="madeYear[]" id="to" />
                    </span>-->
                </div>               
                <script type="text/javascript" charset="utf-8">
                /*jQuery("#Slider3").slider({ 
                    from: 1901, 
                    to: (new Date).getFullYear(), 
                    step: 1, 
                    smooth: true, 
                    round: 5, 
                    format: { format: '####', locale: 'us' },
                    dimension: "", 
                    skin: "plastic" 
                });*/
              </script>
              </div>
            </li>
          </ul>
        </div>
        <div class="form_button">
          <ul>
            <li>
				<?php if( empty( $_SESSION['User']['id'] ) ){ ?>
					<a href="index_page_inquiry.php" class="popup_class"><img src="<?php echo DEFAULT_URL ?>/images/detail_view/search-button.jpg" alt="advancesearch"></a>
				<?php } else { ?>
					<input type="submit" class="recherche_button"  name="submit" value="sub_home"> 
				<?php } ?>
            </li>
            <li>
				<?php if( empty( $_SESSION['User']['id'] ) ){ ?>
					<a href="index_page_inquiry.php?act=advancesearch" class="popup_class">
						<img src="<?php echo DEFAULT_URL ?>/images/detail_view/advanced_search.jpg" alt="advancesearch">
					</a>  
				<?php } else { ?>
					<a href="advancesearch">
						<img src="<?php echo DEFAULT_URL ?>/images/detail_view/advanced_search.jpg" alt="advancesearch">
					</a>
				<?php } ?>
                
            </li>
          </ul>
        </div>
      </div>
      <div class="scroller_box">
        <ul>
            <?php foreach($modelList as $model){ ?>
            <li onclick="changeBrand(<?php echo $model['value_id']; ?>);" id="brand<?php echo $model['value_id']; ?>"><?php echo $model['value']; ?> </li>
            <input type="hidden" name="manufacturer[]" id="manufacturer<?php echo $model['value_id']; ?>"/>
            <?php }?>
        </ul>
      </div>
    </div>
       
    </form>
	
	
  </div>
  <div class="sidebar">
    <h1>Pourquoi choisir American Car Central</h1>
    <div class="sidebar_inner">
      <ul>
        <li><a href="#">Jusqu'&agrave; 40% d'économie</a></li>
        <li><a href="#">L'exportateur le plus réactif du marché</a></li>
        <li><a href="#">97.4% de clients satisfaits</a></li>
        <li><a href="#">Un interlocuteur fran&ccedil;ais aux US et en France.</a></li>
        <li><a href="#">Fonds sécurisés et garantis par Bank of America</a></li>
        <li><a href="#">Tarifs logistique imbattables</a></li>
      </ul>
    </div>
  </div>
  <div class="clear"></div>
  <div class="home_row01">
    <h1>Mieux nous connaitre</h1>
    <div class="gallery_box">
      <ul>
        <li>
          <div class="gallery_box_pic"><img src="<?php echo DEFAULT_URL ?>/images/ford-mustang.jpg" alt="view"></div>
          <div class="gallery_box_ccntent">Une equipe, aux USA et en France, coordonne toute la logistique de votre voiture americaine, depuis son achat jusqu'a sa livraison...</div>
        </li>
        <li>
          <div class="gallery_box_pic"><img src="<?php echo DEFAULT_URL ?>/images/usa-france.jpg" alt="view"></div>
          <div class="gallery_box_ccntent">American Car Centrale vous offres des packs adaptes a votre budget, demandez nous...</div>
        </li>
        <li>
          <div class="gallery_box_pic"><img src="<?php echo DEFAULT_URL ?>/images/checkbox.jpg" alt="view"></div>
          <div class="gallery_box_ccntent">Tous les avantages, competences et prix direct USA avec votre partenaire American Car Centrale. </div>
        </li>
      </ul>
    </div>
    <div class="autocheck"><img src="<?php echo DEFAULT_URL ?>/images/detail_view/autocheck.jpg" alt="autocheck"></div>
    <div class="remind_box">
      <div class="remind_title">On vous rappelle</div>
      <div class="remind_inner">
          <p>Entrez votre numéro de téléphone et un de nos représentants vous répondra &agrave; coup s&ucirc;r.</p>
        <form action="thank_you.php" method="post" name="myForm">
            <div id="messagePhone" style="float: left;margin-left: 3px;font-size: 12px;"></div>
            <input type="text" class="remind_textbox" name="phone" id="phone_number" onkeypress="return isNumber(event)">
          <input type="submit" class="remind_submit" onclick="return submitPhoneLead();">
        </form>
      </div>
    </div>
  </div>
  <div class="home_row02">
    <div class="transport_box">
      <div class="transport_box_inner"> Transport maritime <br>
        <span>a partir de $900 vers la France</span></div>
    </div>
    <div class="economise_box"> <img src="<?php echo DEFAULT_URL ?>/images/detail_view/economize.jpg" alt="economize"> </div>
    <div class="news_box">
      <div class="news_box_inner">
        <div class="news_box_title">obtenir des nouvelles tous les jours</div>
        <form action="thank_you.php" method="post" name="newsform">
            <div id="message" style="float: left;margin-left: 3px;"></div>
            <input type="text" class="news_textbox" name="email" id="newletter_email">
          <input type="submit" class="news_submit" onclick="return submitAjaxForm();">
        </form>
      </div>
    </div>
  </div>
  <div class="brand">
    <h1>GRANDES MARQUES</h1>
    <img src="<?php echo DEFAULT_URL ?>/images/detail_view/brand.jpg" alt="brand" style="width: 987px;"> </div>
<section class="slider">
                <div class="list_carousel">
                    <ul id="foo2">
                        <?php  include(LIST_ROOT."/includes/views/mostview.php"); ?>                   
                    </ul>
                    <div class="clearfix"></div>
                    <a id="prev2" class="prev" href="#">&lt;</a> <a id="next2" class="next" href="#">&gt;</a> </div>
</section>
</div>
<!--middle end-->

    <div class="clear"></div>
 </div>
 <script type="text/javascript">
     
 function submitAjaxForm(){
     var email = $("#newletter_email").val();
     var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
     if(email==""){
         alert("S'il vous plaît entrez l'adresse e-mail");
         return false;
     }else if(!reg.test(email)){
         alert("S'il vous plaît entrez l'adresse e-mail valide");
         return false;
     }else{
        $.ajax({
               type: "POST",
               url: "<?php echo DEFAULT_URL?>/ajax_news_subscribe.php",
               data: { email: email},
               dataType: "html",
               success: function(data) {
                     if(data==0){
                         $("#message").css("color","#FF0000");
                         $("#message").html("Adresse e-mail existe déjà");
                     }else{
                        // $("#message").css("color","green");
                        // $("#message").html("Courriel ajouté avec succès");
						// window.location.reload();
                    	 $("form[name='newsform']").submit();
                     }                     
               }
       });
       return false;
    }
 }
 
      
 function submitAjaxFormTop(){
     var email = $("#newletter_email_top").val();
     var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
     if(email==""){
         alert("S'il vous plaît entrez l'adresse e-mail");
         return false;
     }else if(!reg.test(email)){
         alert("S'il vous plaît entrez l'adresse e-mail valide");
         return false;
     }else{
        $.ajax({
               type: "POST",
               url: "<?php echo DEFAULT_URL?>/ajax_news_subscribe.php",
               data: { email: email},
               dataType: "html",
               success: function(data) {
                     if(data==0){
                         $("#messagePhone").css("color","#FF0000");
                         $("#messagePhone").html("Adresse e-mail existe déjà");
                     }else{
                         $("#messagePhone").css("color","green");
                         $("#messagePhone").html("Courriel ajouté avec succès");
						 
                     }                     
               }
       });
       return false;
    }
 }

 function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

 function submitPhoneLead(){
     var phone = $("#phone_number").val();
if( !$.isNumeric(phone) ){
alert("S'il vous plaît entrer le numéro de téléphone correct");
         return false;
}
     if(phone==""){
         alert("S'il vous plaît entrer le numéro de téléphone");
         return false;
     } else{
        $.ajax({
               type: "POST",
               url: "<?php echo DEFAULT_URL?>/ajax_phone_lead.php",
               data: { phone: phone},
               dataType: "html",
               success: function(data) {
				   //alert(data);
                     if(data==0){
                         $("#messagePhone").css("color","#FF0000");
                         $("#messagePhone").html("Demande déjà envoyé");
                     }else{
                        // $("#messagePhone").css("color","green");
                        // $("#messagePhone").html("Demande envoyé avec succés");
						// window.location.reload();
                    	 $("form[name='myForm']").submit();
                     }                     
               }
       });
       return false;
    }
 }
 (function($){
	$(document).ready(function () {
		
		$("#sidebar_nav > li").bind("click",function(){
			if(false == $(this).next().is(':visible')) {
				$('#sidebar_nav > ul').slideUp(500);
			}
			$(this).next().slideToggle(300);
			$(this).parent().find("li").each(function(){ $(this).removeClass();});
			$(this).addClass("active_nav");
		});
	});
})(jQuery);


$('#sidebar_nav > ul').eq(0).show();
 
 </script>

<script type="text/javascript" src="<?php echo DEFAULT_URL ?>/js/jquery.multiselect.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo DEFAULT_URL ?>/css/jquery.multiselect.css" />
<script type="text/javascript">
$(function(){
	$("#manufacturer_select").multiselect({
            noneSelectedText: "Sélectionner",
            selectedList: 0,
            click: function(event, ui){
                changeBrandSelect(ui.value,ui.checked);                
            }
         });
});

function ajaxcall(val,attribute,name,manufac,type){ 
    $('#loader').show();
    $('#model_select').hide();
    $.ajax({
             type: "POST",
             url: "<?php echo DEFAULT_URL?>/ajax_home_model.php",
             data: { value: val, attr : attribute, manufact : manufac,class : 'customStyleSelectBox'},
             dataType: "json",
             success: function(data) {  
                   if(type=="append"){
                        $.each(data, function(i){  

if(data[i]['value'] === null){
return;
}
var catdata=data[i]['value'][0];
							
  //$('#model_select').append('<option value="'+catdata+'" '+selected+'>'+catdata+'</option>');                                

                          
  $('#model_select').append('<option value="'+catdata+'">'+catdata+'</option>');                                
                        });
                   }else{
                       $.each(data, function(i){      

			if(data[i]['value'] === null){
			return;
			}
			var catdata=data[i]['value'][0];                   
                          $("#model_select option[value='"+catdata+"']").remove();                          
                      });
                   }   
                   $('#loader').hide();
                   $('#model_select').show();
             }
   });
}
</script>
