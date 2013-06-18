<?php include('include/header.php'); ?>
	<!-- BEGIN HEADER -->
    <?php include('include/menu.php');?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
		<div id="body">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="widget-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button">×</button>
					<h3>Widget Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->			
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div id="page" class="dashboard">  
               <?php include('include/small_header.php');?>
                </div>
<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-ok"></i>  <?php echo $lang['campaign_add_new'];?></h4>
															
								</div>
								<div class="widget-body">
                                <div class="row-fluid">
                                <div class="span12">
                                
                                <h5><?php echo $lang['campaign_new_sub_header'];?></h5>
                                
                                <p>If you haven't already, make sure to famillarize your self with all the features and possibillities that these five program types offer, on our website's Ideas section. You will also find there step-by-step instructions on which campaign style to choose, and how to set it up.</p>
                                
                               
                                <!-- BEGIN FORM -->
                            	<div style="padding-top:15px;">
                                <form method="get" action="add_campaign.php">
                                <table border="0" style="width:370px;" cellspacing="10" cellpadding="3">
                                	<tr>
                                    	<td style="width:20px;"><input type="radio" name="point" id="points" value="points" /></td>
                                        <td style="width:100px;"><?php echo $lang['campaign_type_points'];?></td>
                                        <td style="width:65px;"><a href="#myModal1" role="button" class="btn btn-mini btn-info" data-toggle="modal" style="margin-top:-10px;">More Info</a></td>
                                    </tr>
                                    
                                    <tr>
                                    	<td><input type="radio" name="point" value="giftcard" id="giftcard" /></td>
                                        <td><?php echo $lang['campaign_type_gift_cards'];?>n</td>
                                        <td><a href="#myModal3" role="button" class="btn btn-mini btn-info" data-toggle="modal" style="margin-top:-10px;">More Info</a></td>
                                    </tr>
                                    
                                    <tr>
                                    	<td><input type="radio" name="point" value="buyx" id="buyx" /></td>
                                        <td><?php echo $lang['campaign_type_buyx'];?></td>
                                        <td><a href="#myModal4" role="button" class="btn btn-mini btn-info" data-toggle="modal" style="margin-top:-10px;">More Info</a></td>
                                    </tr>
                                    
                                    <tr>
                                    	<td><input type="radio" name="point" value="events" id="events" /></td>
                                        <td><?php echo $lang['campaign_type_event-based'];?></td>
                                        <td><a href="#myModal5" role="button" class="btn btn-mini btn-info" data-toggle="modal" style="margin-top:-10px;">More Info</a></td>
                                    </tr>
                                    
                                    <tr>
                                    	<td><input type="radio" name="point" value="earned" id="earned" /></td>
                                        <td><?php echo $lang['campaign_type_earn_per_event'];?></td>
                                        <td><a href="#myModal6" role="button" class="btn btn-mini btn-info" data-toggle="modal" style="margin-top:-10px;">More Info</a></td>
                                    </tr>
                                </table>
                            </div>
                              
                                                           
                               <div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel2"><?php echo $lang['campaign_type_points'];?></h3>
										</div>
										<div class="modal-body scroller">
											<?php echo $lang['campaign_new_points_desc'];?>
										</div>
										<div class="modal-footer">
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><i class="icon-check"></i> OK</button>
										</div>
									</div>
                              
                              
                               <div id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel3"><?php echo $lang['campaign_type_gift_cards'];?></h3>
										</div>
										<div class="modal-body">
												<?php echo $lang['campaign_new_gift_card_desc'];?>
										</div>
										<div class="modal-footer">
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><i class="icon-check"></i> OK</button>
										</div>
									</div>
                                    
                                     <div id="myModal4" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel4"><?php echo $lang['campaign_type_buyx'];?></h3>
										</div>
										<div class="modal-body">
											<?php echo $lang['campaign_new_buyx_desc'];?>
										</div>
										<div class="modal-footer">
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><i class="icon-check"></i> OK</button>
										</div>
									</div>
                                    
                                     <div id="myModal5" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel5"><?php echo $lang['campaign_type_event-based'];?></h3>
										</div>
										<div class="modal-body">
											<?php echo $lang['campaign_new_event-based_desc'];?>
										</div>
										<div class="modal-footer">
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><i class="icon-check"></i> OK</button>
										</div>
									</div>
                              
                              
                               <div id="myModal6" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel6"><?php echo $lang['campaign_type_earn_per_event'];?></h3>
										</div>
										<div class="modal-body">
											<?php echo $lang['campaign_new_earn_event_desc'];?>
										</div>
										<div class="modal-footer">
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><i class="icon-check"></i> OK</button>
										</div>
									</div>
                              
                              
                              
                              
                              

<div class="control-group" style="padding-top:15px;">
                                 <label class="control-label" for="input1"><strong><?php echo $lang['cp_campaigns_table_header_1'];?></strong></label>
                                 <div class="controls">
                                    <input type="text" class="span6 popovers" id="input3" name="name"  /> <a href="#myModal2" role="button" class="btn btn-info" data-toggle="modal" style="margin-top:-10px;">More Info</a>
                                 </div>
                              </div>
                              
                              
                              <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel2"><?php echo $lang['campaign'];?> Tips</h3>
										</div>
										<div class="modal-body">
											<p><?php echo $lang['campaign_new_name_desc'];?></p>
										</div>
										<div class="modal-footer">
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><i class="icon-check"></i> OK</button>
										</div>
									</div>
                              
                              
                            
                              <div class="form-actions" style="padding-top:35px;">
                                 <button type="submit" class="btn btn-success"><i class="icon-plus"></i> <?php echo $lang['title_add_campaign'];?></button>
                                 <button type="button" class="btn" onclick="resetme_campaign()"><i class="icon-ban-circle"></i> Reset</button>
                              </div>
                              
                              
                              </div></div>
                              </form>
                              <!-- END FORM -->
									
                                            </div>
                                            
                                    
                                    </div>
                                    
                                    
								</div>
                                
                                
                                
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
                            
                            
                                   
                                    
                            
                            
						</div>
					</div>
					
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php include('include/footer.php') ;?>