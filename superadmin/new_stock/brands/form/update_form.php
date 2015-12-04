<div id="content-outer">
  <!-- start content -->
  <div id="content">
    <div id="page-heading">
      <h1>Update Brand</h1>
    </div>
          <form action="<?=$_SERVER['REQUEST_URI'];?>" method="post" name="add_form" id="add_form" enctype="multipart/form-data" >

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
          <td><!--  start content-table-inner -->
            <div id="content-table-inner">
              <table border="0" width="100%" cellpadding="0" cellspacing="0">
                <tr valign="top">
                  <td><!-- start id-form -->
                    <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                      <tr>
                        <td colspan="3"><?php if(isset($errorMsg)) {?>
                          <!--  start message-red -->
                          <div id="message-red">
                            <table border="0" width="100%" cellpadding="0" cellspacing="0">
                              <tr>
                                <td class="red-left" style="padding-left: 35px;"><?php echo $errorMsg?></td>
                                <td class="red-right"><a class="close-red"><img src="<?php echo ADMIN_IMAGE_URL; ?>/table/icon_close_red.gif" alt="" /></a></td>
                              </tr>
                            </table>
                          </div>
                          <!--  end message-red -->
                          <?php } else if(isset($_SESSION['success_msg']) && $_SESSION['success_msg']!='') { ?>
                          <!--  start message-green -->
                          <div id="message-green">
                            <table border="0" width="100%" cellpadding="0" cellspacing="0">
                              <tr>
                                <td class="green-left" style="padding-left: 35px;"><?php echo $_SESSION['success_msg']?></td>
                                <td class="green-right"><a class="close-green"><img src="<?php echo ADMIN_IMAGE_URL; ?>/table/icon_close_green.gif"   alt="" /></a></td>
                              </tr>
                            </table>
                          </div>
                          <!--  end message-green -->
                          <?php 
							unset($_SESSION['success_msg']);
						} ?>
                        </td>
                      </tr>
                      <tr>
                        <th valign="top">Brand Title:</th>
                        <td> <input type="text" name="title" id="title" value="<?=$title?>" class="inp-form"/></td>
                        <td><div class="error-left"></div>
                          <div class="error-inner">This field is required.</div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <th valign="top">Brand Logo:</th>
                        <td><input type="file" name="logo" id="logos" />
                        <input type="hidden" name="old_image" value="<?=$old_image?>"
        <?php if($old_image!='') {?>
          	<img src="<?=DEFAULT_URL?>/images/brands/<?=$old_image?>" width="30px" height="30px" />        
        <?php }?></td>
                        <td><div class="error-left"></div>
                          <div class="error-inner">This field is required.</div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <th valign="top">Publish:</th>
                        <td> Yes
        <input type="radio" name="publish" id="publish_1" value="1" <?php if($publish == '1') {echo 'checked="checked"'; }?> />
        &nbsp;&nbsp;&nbsp; no
        <input type="radio" name="publish" id="publish_2" value="0"  <?php if($publish == '0') {echo 'checked="checked"'; }?> /></td>
                          <td>&nbsp;</td>
                      </tr>
						
                       <tr>
                        <th valign="top"></th>
                        <td>
                        <input type="hidden" name="sub" value="sub"/>
                        <input type="submit" value="submit" class="form-submit" />
                        <img src="../../images/forms/back.jpg" onclick="window.location='<?php echo DEFAULT_ADMIN_URL; ?>/new_stock/brands/index.php'" /></td>
                        
                      </tr>
                    </table>
                    </form>

                    <!-- end id-form  -->
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><img src="<?php echo ADMIN_IMAGE_URL; ?>/shared/blank.gif" width="695" height="1" alt="blank" /></td>
                  <td></td>
                </tr>
              </table>
              <div class="clear"></div>
            </div>
            <!--  end content-table-inner  -->
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
