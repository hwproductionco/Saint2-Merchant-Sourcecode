<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER-->
						<!-- <div id="styler" class="hidden-phone">
							<a href="configure_points_program.html"><i class="icon-cog"></i></a>
							<span class="settings">
								<span class="text">Style:</span>
								<span class="colors">
									<span class="color-default" data-style="default">
									</span>
									<span class="color-grey" data-style="grey">
									</span>
									<span class="color-navygrey" data-style="navygrey">
									</span>											
									<span class="color-red" data-style="red">
									</span>	
								</span>
								<span class="layout">
									<label class="hidden-phone">
									<input type="checkbox" class="header" checked value="" />Sticky Header
									</label><br />
									<label><input type="checkbox" class="metro" value="" />Metro Style</label>
									<span class="space5"></span>
									<a class="btn fancybox-button" data-rel="fancybox-button" title="Conquer Large Desktop Preview"  href="assets/img/demo/desktop.png"><i class="icon-eye-open"></i> Screenshots</a>
									<a class="fancybox-button" data-rel="fancybox-button" title="Conquer Notebook Preview" href="assets/img/demo/notebook.png"></a>
									<a class="fancybox-button" data-rel="fancybox-button" title="Conquer Tablet Preview"  href="assets/img/demo/tablet.png"></a>
									<a class="fancybox-button" data-rel="fancybox-button" title="Conquer Phone Preview"  href="assets/img/demo/phone.png"></a>
								</span>
							</span>
						</div>-->
						<!-- END STYLE CUSTOMIZER-->    
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->		
						<!--h3 class="page-title">
							Users
							<small>Add New User</small>
						</h3-->
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.php">Home</a> <span class="divider">/</span>
							</li>
							<li><a href="#"><?php echo $lang['User'];?></a> <span class="divider">/</span></li>
                            <li><?php echo $lang['title_add_user'];?></li>	 <div class="row-fluid">
                     <div class="span12 responsive">
                     
                     <div class="span4 responsive">
                     	<div><strong><?php echo $lang['Account'].' '.$lang['label_name'];?>: </strong><br /><?php echo $parse_array['response']['account']['biz_name'];?></div>
                        <div><strong><?php echo $lang['label_account_id'];?>:</strong><br /><?php echo $parse_array['response']['account']['account_id'];?></div>
                     </div>
                     
                     <div class="span4 responsive">
                     	<div><strong><?php echo $lang['label_phone'];?>:</strong><br /><?php if(!empty($parse_array['response']['account']['contact_phone'])){ echo $parse_array['response']['account']['contact_phone'];}else {echo '';}?></div>
                        <div><strong><?php echo $lang['label_email'];?>:</strong><br /><a href="<?php echo $parse_array['response']['account']['contact_email'];?>"><?php echo $parse_array['response']['account']['contact_email'];?></a></div>
                     </div>
                      
                      <div class="span4 responsive" style="text-align: right;">
                      		<img src="include/assets/img/loyaltymonster.png" border="0" style="max-width:125px;" />
                      </div>
                      
                    </div>
                    
                  </div>        </ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>