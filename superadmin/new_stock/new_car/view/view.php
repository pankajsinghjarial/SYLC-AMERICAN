<!-- start content-outer ........................................................................................................................START -->
<SCRIPT language="javascript">
$(function(){
 
    // add multiple select / deselect functionality
    $("#selectall").click(function () {
          $('.case').attr('checked', this.checked);
    });
 
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".case").click(function(){
 
        if($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");
        }
 
    });
});
</SCRIPT>
<script type="text/javascript" id="js">
$(document).ready(function()
{ 
	// call the tablesorter plugin 
	$("#product-table").tablesorter({ 
        // pass the headers argument and assing a object 
        headers: { 
            // assign the secound column (we start counting zero) 
            0: { 
                // disable it by setting the property sorter to false 
                sorter: false 
            },
			4: { 
                // disable it by setting the property sorter to false 
                sorter: false 
            }, 
            // assign the third column (we start counting zero) 
            5: { 
                // disable it by setting the property sorter to false 
                sorter: false 
            } 
        } 
    }); 
});


function checkBoxChecked(){
		var atLeastOneIsChecked = $('input[name="allselect[]"]:checked').length;
		if(atLeastOneIsChecked == 0){
			alert('Please select atleast one record.');
			return false;
		}else{
			
			$('#mainform').submit();
			return true;
		}
}

function checkBoxCheckedForEdit(){
		var onlyOneIsChecked = $('input[name="allselect[]"]:checked').length;
		if(onlyOneIsChecked == 0){
			alert('Please select atleast one record.');
			return false;
		}else{
				if(onlyOneIsChecked > 1){
					alert('Please select only one record to edit.');
					return false;
				}else{
					var checkedValue = $('input[name="allselect[]"]:checked').val();
					location.href	 = 'edit.php?id='+checkedValue;
					return true;
				}
		}
}

</script>
<?php

	if(isset($_REQUEST['searchtext']) and !isset($_REQUEST['start'])){
			$addToPagging = '&searchtext='.$_REQUEST['searchtext'].'&searchcombo='.$_REQUEST['searchcombo'];
	}else if(isset($_REQUEST['searchtext']) and isset($_REQUEST['start'])){
			$addToPagging = '&searchtext='.$_REQUEST['searchtext'].'&searchcombo='.$_REQUEST['searchcombo'];
	}
					
?>
<div id="content-outer">
  <!-- start content -->
  <div id="content">
    <!--  start page-heading -->
    <div id="page-heading" style="width:1211px;">
      <h1 style="float:left;">Car Manager</h1>
    <div style="float:right;"><a href="<?= DEFAULT_ADMIN_URL;?>/car/add.php?type=nostock"><img src="<?php echo ADMIN_IMAGE_URL; ?>/forms/icon_plus.gif" align="absmiddle" title="Add New"/></a></div></td>

    </div>
    <!-- end page-heading -->
    <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
      <tr>
        <th rowspan="3" class="sized"><img src="<?php echo ADMIN_IMAGE_URL; ?>/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
        <th class="topleft"></th>
        <td id="tbl-border-top">&nbsp;</td>
        <th class="topright"></th>
        <th rowspan="3" class="sized"><img src="<?php echo ADMIN_IMAGE_URL; ?>/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
      </tr>
      <tr>
        <td id="tbl-border-left"></td>
        <td><!--  start content-table-inner ...................................................................... START -->
          <div id="content-table-inner">
            <!--  start table-content -->
            <div id="table-content">
              <?php if(isset($_SESSION['success_msg']) && $_SESSION['success_msg']!='') { ?>
              <!--  start message-green -->
              <div id="message-green">
                <table border="0" width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="green-left" style="padding-left: 35px;"><?=$_SESSION['success_msg']?></td>
                    <td class="green-right"><a class="close-green"><img src="<?php echo ADMIN_IMAGE_URL; ?>/table/icon_close_green.gif"   alt="" /></a></td>
                  </tr>
                </table>
              </div>
              <!--  end message-green -->
              <?php 
				unset($_SESSION['success_msg']);
				} 
			  ?>
              <!--  start product-table ..................................................................................... -->
              <form id="mainform" action="delete.php" method="post">
                <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table" class="tablesorter">
                  <thead>
                    <tr>
                      <th width="5%" class="table-header-check"><input type="checkbox" id="selectall" />
                      </th>
                      <th width="5%" class="table-header-repeat line-left minwidth-1"><a href="javascript:void(0)">Stock ID</a> </th>
                      <th width="20%" class="table-header-repeat line-left minwidth-1"><a href="javascript:void(0)">Car Name</a></th>
                      <th width="35%" class="table-header-repeat line-left"><a href="javascript:void(0)">Feature</a></th>
                      <th width="10%" class="table-header-repeat line-left"><a href="javascript:void(0)">Mileage</a></th>
                      <th width="10%" class="table-header-repeat line-left"><a href="javascript:void(0)">Price</a></th>
                      <th width="8%" class="table-header-options line-left"><a href="javascript:void(0);">Options</a></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
				  if($total_rows > 0){
				  $ii =1;
				  foreach($all_car as $getPageData){ 
				  ?>
                    <tr <?php if($ii%2==0) echo 'class="alternate-row"';?>>
                      <td><input  type="checkbox" name="allselect[]" class="case" id="allselect<?php echo $getPageData['id'];?>" value="<?php echo $getPageData['id'];?>"/></td>
                      <td><?php echo $getPageData['stock_id'];?></td>
                      <td><?php echo $getPageData['fullName'];?></td>
                      <td><?php echo $obj_setting->getFeatureForListing($getPageData['features']);?></td>
                      <td><?php echo number_format($getPageData['mileage']);?></td>
                      <td>$<?php echo number_format($getPageData['price']);?></td>
                      <td>
			<!--<a href="<?php echo DEFAULT_ADMIN_URL?>/car/view.php?id=<?php echo $getPageData['id'].$addToPagging;?>&type=nostock" title="View" class="icon-3 info-tooltip"></a>-->
		      <a href="<?php echo DEFAULT_ADMIN_URL?>/car/edit.php?id=<?php echo $getPageData['id'].$addToPagging;?>&type=nostock" title="Edit" class="icon-1 info-tooltip"></a>
		      <a href="<?php echo DEFAULT_ADMIN_URL?>/car/delete.php?car_id=<?php echo $getPageData['id'].$addToPagging;?>&action=delete&type=nostock" title="Delete" class="icon-2 info-tooltip"  onclick="return confirm('Are you sure you want to delete.');"></a></td>
                    </tr>
                    <?php $ii++; 
				 	  } 
					 }else{
				  ?>
                    <tr>
                      <th colspan="6" style="text-align:center;">No record found.</th>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <!--  end product-table................................... -->
				<?php if(isset($_REQUEST['searchtext']) and $_REQUEST['searchtext']!=''){  ?>
                <input type="hidden" name="searchtext" id="searchtext" value="<?php echo $_REQUEST['searchtext'];?>" />
                <?php } ?>
                <?php if(isset($_REQUEST['searchcombo']) and $_REQUEST['searchcombo']!=''){  ?>
                <input type="hidden" name="searchcombo" id="searchcombo" value="<?php echo $_REQUEST['searchcombo'];?>" />
                <?php } ?>
              </form>
            </div>
            <?php if(mysql_num_rows($getBlock) > 0){?>
            <!--  end content-table  -->
            <!--  start actions-box ............................................... -->
            <div id="actions-box"> <a href="" class="action-slider"></a>
              <div id="actions-box-slider">
              <a href="javascript:"  onclick="checkBoxChecked();" class="action-delete">Delete</a> </div>
              <div class="clear"></div>
            </div>
            <!-- end actions-box........... -->
            <!--  start paging..................................................... -->
            <table border="0" cellpadding="0" cellspacing="0" id="paging-table">
              <tr>
                <td>
				<?php
				
                	if($back >=0) { 
                 		echo '<a href="'.$page_name.'?start='.$back.'&limit='.$limit.$addToPagging.'" class="page-left"></a>';
				  	}else{
						echo '<a href="javascript:" class="page-left" onclick="void(0);"></a>';
					}
				 ?>
                  <div id="page-info">
                    <?php
                  	$i=0;
                    $l=1;
                    for($i=0;$i < mysql_num_rows($getBlock);$i=$i+$limit){
                    if($i <> $eu){
                    	echo "<span class='otherpage'><a href='".$page_name."?start=".$i."&limit=".$limit.$addToPagging."'>$l</a></span>";
                    }
						else { echo '<span class="currentpage">'.$l.'</span>';}        /// Current page is not displayed as link and given font color red
						$l=$l+1;
                    }
 				?>
                  </div>
                  <?php
                	if($this1 < mysql_num_rows($getBlock)) { 
                 		echo '<a href="'.$page_name.'?start='.$next.'&limit='.$limit.$addToPagging.'" class="page-right"></a>';
				  	}else{
						echo '<a href="javascript:" class="page-right" onclick="void(0);"></a>';
					}
				 ?>
                </td>
                <td><form method="get" action="<?php echo $page_name;?>" name="pageform">
                    <select  class="styledselect_pages" name="limit_combo">
                      <option value="">Number of rows</option>
                      <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="15">15</option>
                      <option value="20">20</option>
                    </select>
                    <?php if(isset($_REQUEST['searchtext']) and $_REQUEST['searchtext']!=''){  ?>
                    <input type="hidden" name="searchtext" id="searchtext" value="<?php echo $_REQUEST['searchtext'];?>" />
                    <?php } ?>
                    <?php if(isset($_REQUEST['searchcombo']) and $_REQUEST['searchcombo']!=''){  ?>
                    <input type="hidden" name="searchcombo" id="searchcombo" value="<?php echo $_REQUEST['searchcombo'];?>" />
                    <?php } ?>
                  </form></td>
              </tr>
            </table>
            <?php }?>
            <!--  end paging................ -->
            <div class="clear"></div>
          </div>
          <!--  end content-table-inner ............................................END  -->
        </td>
        <td id="tbl-border-right"></td>
      </tr>
      <tr>
        <th class="sized bottomleft"></th>
        <td id="tbl-border-bottom">&nbsp;</td>
        <th class="sized bottomright"></th>
      </tr>
    </table>
    <div class="clear">&nbsp;</div>
  </div>
  <!--  end content -->
  <div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->
<div class="clear">&nbsp;</div>
