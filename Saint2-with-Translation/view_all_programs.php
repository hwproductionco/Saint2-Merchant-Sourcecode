<?php

 include('include/header.php'); ?>
	<!-- BEGIN HEADER -->
    <?php include('include/menu.php');?>
	<!-- END HEADER -->
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
				<div id="page" class="dashboard">  
					               <?php include('include/small_header.php');?>               
                </div> 
<div class="row-fluid">						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-ok text-success"></i> <span class="text-success"><?php echo $lang['nav_active'].' '.$lang['Campaigns'];?></span></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
                                <?php 
									$data['type'] = 'campaigns_list';
									$campaigns	=	 submit_cURL ($data);

									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
									
								?>
									<table class="table table-striped table-hover" id="active_campaign"> 
										<thead>
											<tr>
                                            	<th style="width:8px"><input type="checkbox" class="group-checkable" data-set=".checkboxes1" /></th>
												<th><?php echo $lang['cp_campaigns_table_header_1'];?></th>
												<th><?php echo $lang['label_Type'];?></th>
												<th><?php echo $lang['Campaign'].' '.$lang['ID'];?></th>
												<!--th style="width:120px;">Deactivate</th>
												<th style="width:120px;">Edit</th-->
												
											</tr>
										</thead>
										<tbody>
                                        <?php
											if(!empty($parse_campaigns_array['response']['campaigns']))
	   										{
		   //print_r($parse_depreciations_array['response']['depreciations']['depreciation']);
		   										if(empty($parse_campaigns_array['response']['campaigns']['campaign'][0]))
		   										{
												
										?>
											<tr class="odd gradeX">
                                             <td><input type="checkbox" class="checkboxes1" name="case[]" onclick="return_false()" value="<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['id'];?>" /></td>
												<td><?php if($parse_campaigns_array['response']['campaigns']['campaign']['type']=='points'){?><a href="configure_points_program.php?camp_id=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['id'];?>&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>"> <?php } else if($parse_campaigns_array['response']['campaigns']['campaign']['type']=='buyx'){ ?><a href="configure_buy_x_get_free_campaign.php?camp_id=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['id'];?>&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>"> <?php }else if($parse_campaigns_array['response']['campaigns']['campaign']['type'] == 'earned'){ ?><a href="configure_earn_per_event_campaign.php?camp_id=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['id'];?>&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>"><?php } else if($parse_campaigns_array['response']['campaigns']['campaign']['type']=='events'){?><a href="configure_event_campaign.php?camp_id=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['id'];?>&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>"><?php } else if($parse_campaigns_array['response']['campaigns']['campaign']['type'] == 'giftcard'){?><a href="configure_gift_card_campaign.php?camp_id=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['id'];?>&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>"><?php } ?><?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?></a></td>
												<td><?php echo $parse_campaigns_array['response']['campaigns']['campaign']['type'];?></td>
                                                <td><?php echo $parse_campaigns_array['response']['campaigns']['campaign']['id'];?></td>
												
											</tr>
                                            <?php } else {
												foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $campaign)
												{
												?>
                                            		<tr class="odd gradeX">
                                             <td><input type="checkbox" class="checkboxes1" name="case[]" value="<?php echo $campaign['id'];?>" /></td>
												<td><?php if($campaign['type']=='points'){?><a href="configure_points_program.php?camp_id=<?php echo $campaign['id'];?>&camp_name=<?php echo $campaign['name'];?>"><?php } else if($campaign['type']=='buyx'){ ?><a href="configure_buy_x_get_free_campaign.php?camp_id=<?php echo $campaign['id'];?>&camp_name=<?php echo $campaign['name'];?>"><?php } else if($campaign['type']=='earned'){ ?><a href="configure_earn_per_event_campaign.php?camp_id=<?php echo $campaign['id'];?>&camp_name=<?php echo $campaign['name'];?>"><?php } else if($campaign['type']=='events'){  ?><a href="configure_event_campaign.php?camp_id=<?php echo $campaign['id'];?>&camp_name=<?php echo $campaign['name'];?>"><?php } else if($campaign['type']=='giftcard'){ ?><a href="configure_gift_card_campaign.php?camp_id=<?php echo $campaign['id'];?>&camp_name=<?php echo $campaign['name'];?>"><?php } ?><?php echo $campaign['name'];?></a></td>
												<td><?php echo $campaign['type'];?></td>
                                                <td><?php echo $campaign['id'];?></td>
												
											</tr>
                                            
                                            <?php }}} ?>
											
										</tbody>
									</table>
                                    
                                    
                                      <div class="btn-group" style="margin-top:15px;">
                                 <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"  style="width:100%;">Action <span class="caret"></span></button>
                                 <ul class="dropdown-menu">
                                 <?php if($parse_array_user_info['response']['user']['user_permissions']['deactivate_campaign'] == 'Yes'){ ?>
                                    <li><a href="#myModal1" data-toggle="modal"><i class="icon-off"></i> <?php echo $lang['nav_deactivate'];?></a></li>
                                   <?php } ?>
                                    
                                 </ul>
                              </div>
                              
                               <div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel2"><?php echo $lang['nav_deactivate'];?></h3>
										</div>
										<div class="modal-body scroller">
											<p>You are about to deactivate all these campaigns.  Are you sure you want to continue?</p>


										</div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo $lang['nav_cancel'];?></button>
											<button class="btn btn-primary" onclick="do_action(1)">Continue</button>
										</div>
									</div>
                                    
								</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div>
                    
                    <div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-off text-error"></i> <span class="text-error"><?php echo $lang['nav_deactivate'].' '.$lang['Campaigns'];?> </span></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
                                <?php
								$data['API'] = '1.5';
                                $data['type'] = 'campaigns_inactive_list';
								$data['user_api_key'] = $GLOBALS['api_key'];
								
									$campaigns	=	 submit_cURL ($data);

									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
									//print_r($parse_campaigns_array);
									?>
									<table class="table table-striped table-hover" id="deactive_campaign">
										<thead>
											<tr>
                                            	<th style="width:8px"><input type="checkbox" class="group-checkable" data-set=".checkboxes1" /></th>
												<th><?php echo $lang['cp_campaigns_table_header_1'];?></th>
												<th><?php echo $lang['label_Type'];?></th>
												<th><?php echo $lang['Campaign'].' '.$lang['ID'];?></th>
												<!--th style="width:120px;">Deactivate</th>
												<th style="width:120px;">Edit</th-->
												
											</tr>
										</thead>
										<tbody>
                                        <?php
										//var_dump($parse_campaigns_array['response']['campaign']);
											if(!empty($parse_campaigns_array['response']['campaign']))
	   										{
		   //print_r($parse_depreciations_array['response']['depreciations']['depreciation']);
		   										if(empty($parse_campaigns_array['response']['campaign'][0]))
		   										{
												
										?>
											<tr class="odd gradeX">
                                             <td><input type="checkbox" class="checkboxes" name="case[]" value="<?php echo $parse_campaigns_array['response']['campaign']['id'];?>" /></td>
												<td><?php if($parse_campaigns_array['response']['campaign']['type']=='points'){?><a href="configure_points_program.php?camp_id=<?php echo $parse_campaigns_array['response']['campaign']['id'];?>"> <?php } else if($parse_campaigns_array['response']['campaign']['type']=='buyx'){ ?><a href="configure_buy_x_get_free_campaign.php?camp_id=<?php echo $parse_campaigns_array['response']['campaign']['id'];?>"> <?php }else if($parse_campaigns_array['response']['campaign']['type'] == 'earned'){ ?><a href="configure_earn_per_event_campaign.php?camp_id=<?php echo $parse_campaigns_array['response']['campaign']['id'];?>"><?php } else if($parse_campaigns_array['response']['campaign']['type']=='events'){?><a href="configure_event_campaign.php?camp_id=<?php echo $parse_campaigns_array['response']['campaign']['id'];?>"><?php } else if($parse_campaigns_array['response']['campaign']['type'] == 'giftcard'){?><a href="configure_gift_card_campaign.php?camp_id=<?php echo $parse_campaigns_array['response']['campaign']['id'];?>"><?php } ?><?php echo $parse_campaigns_array['response']['campaign']['name'];?></a></td>
												<td><?php echo $parse_campaigns_array['response']['campaign']['type'];?></td>
                                                <td><?php echo $parse_campaigns_array['response']['campaign']['id'];?></td>
												
											</tr>
                                            <?php } else {
												foreach($parse_campaigns_array['response']['campaign'] as $campaign)
												{
												?>
                                            		<tr class="odd gradeX">
                                             <td><input type="checkbox" class="checkboxes" name="case[]" value="<?php echo $campaign['id'];?>" /></td>
												<td> <?php if($parse_array_user_info['response']['user']['user_permissions']['open_campaign'] == 'Yes'){ ?><?php if($campaign['type']=='points'){?><a href="configure_points_program.php?camp_id=<?php echo $campaign['id'];?>"><?php } else if($campaign['type']=='buyx'){ ?><a href="configure_buy_x_get_free_campaign.php?camp_id=<?php echo $campaign['id'];?>"><?php } else if($campaign['type']=='earned'){ ?><a href="configure_earn_per_event_campaign.php?camp_id=<?php echo $campaign['id'];?>"><?php } else if($campaign['type']=='events'){  ?><a href="configure_event_campaign.php?camp_id=<?php echo $campaign['id'];?>"><?php } else if($campaign['type']=='giftcard'){ ?><a href="configure_gift_card_campaign.php?camp_id=<?php echo $campaign['id'];?>"><?php } ?><?php } echo $campaign['name'];?></a></td>
												<td><?php echo $campaign['type'];?></td>
                                                <td><?php echo $campaign['id'];?></td>
												
											</tr>
                                            
                                            <?php }}} ?>
											
										</tbody>
									</table>
                                    
                                    
                                    
                                      <div class="btn-group" style="margin-top:15px;">
                                 <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"  style="width:100%;">Action <span class="caret"></span></button>
                                 <ul class="dropdown-menu">
                                 <?php if($parse_array_user_info['response']['user']['user_permissions']['activate_campaign'] == 'Yes'){ ?>
                                    <li><a href="#myModal2" data-toggle="modal"><i class="icon-ok"></i> <?php echo $lang['nav_re-activate'];?></a></li>
                                   <?php } ?> 
                                    <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_campaign'] == 'Yes'){ ?>
                                    <li><a href="#myModal3" data-toggle="modal"><i class="icon-trash"></i> <?php echo $lang['nav_delete'];?></a></li>
                                   <?php } ?>
                                    
                                 </ul>
                              </div>
                              
                               <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel2"><?php echo $lang['nav_re-activate'];?></h3>
										</div>
										<div class="modal-body scroller">
											<p>You are about to activate all of these campaigns.  Are you sure you want to continue?</p>


										</div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo $lang['nav_cancel'];?></button>
											<button class="btn btn-primary" onclick="do_action(2)">Continue</button>
										</div>
									</div>
                                    
                                     <div id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel2"><?php echo $lang['nav_delete'];?></h3>
										</div>
										<div class="modal-body scroller">
											<p>You are about to delete all these campaigns.  Are you sure you want to continue?</p>


										</div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
											<button class="btn btn-primary" onclick="do_action(3)">Continue</button>
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