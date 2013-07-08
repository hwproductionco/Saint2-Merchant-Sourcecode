<?php include('include/header.php');
/*$select_user_info = "Select * from tbl_marchent where username='".$data['user_name']."'";
$result = mysql_query($select_user_info);
$row = mysql_fetch_array($result);*/ ?>
	<!-- BEGIN HEADER -->
		<!-- END SIDEBAR -->
        <?php include('include/menu.php');?>
		<!-- BEGIN PAGE -->
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
				<!-- END PAGE HEADER-->
				<?php include('include/small_header.php');
				
				
				?>
                <!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">  
               
                </div> 
<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-bar-chart"></i>  <?php echo $lang['report_marketing_freq_cust'];?></h4>
															
								</div>
								<div class="widget-body">
                                <div class="row-fluid">
                                <div class="span12">
                                
                                
                                                            
                               
                                <!-- BEGIN FORM -->
                              
                                <form class="form-horizontal" action="frequent_customers_report.php" method="post" id="all_trans_report">
                                <input type="hidden" name="camp_id" id="camp_id" value="" />
                              <div class="control-group">
                                 <h5><?php echo $lang['report_col_2_header'];?></h5>
                                 <div class="controls">
                                    <div class="input-prepend">
                                       <span class="add-on"><i class="icon-calendar"></i></span><input type="text" name="date_time" id="date_time" class="input-large date-range" />
                                       
                                    </div>
                                    <span class="help-inline" id="error" style="color:#F00"></span>
                                 </div>
                              </div>
                              <div class="control-group">
                               <label class="control-label"><strong>Select Frequency</strong></label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="freq" name="freq" value="" /><span class="help-inline" id="error2" style="color:#F00"></span>
                                 </div>
                              </div>
                              <div class="control-group">
                            <label class="control-label"><strong>Include Redeemed</strong></label>
                            <div class="controls">
                              <select class="span6" data-placeholder="Choose a Category" tabindex="1" name="redem">
                                       <option value="NO">Choose One</option>
                                       <option value="Yes">Yes</option>
                                       <option value="No">No</option>
                                 
                                    </select>
                                    </div></div>
                              
                               <h5 style="padding-top:20px;"><?php echo $lang['label_Select'].' '.$lang['Campaigns'];?></h5>
                              
                              <div class="control-group">
                                 <div class="controls">
                                    <label class="checkbox ">
                                    <label class="checkbox">
                                    <input type="checkbox" class="group-checkable" id="selectall" data-set=".checkboxes" /><?php echo $lang['label_Select'].' / '.$lang['nav_deselect_all'];?>
                                    </label>
                  
                  <?php 
									$data['type'] = 'campaigns_list';
									$campaigns	=	 submit_cURL ($data);

									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
									
											if(!empty($parse_campaigns_array['response']['campaigns']))
	   										{
		  
		   										if(empty($parse_campaigns_array['response']['campaigns']['campaign'][0]))
		   										{
												
										?>
                  <label class="checkbox ">
                   
									  
                  <input type="checkbox" class="checkboxes" id="inlineCheckbox1" name="case[]" value="<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['id'];?>" /><?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?></label>
                   <?php }
									else
									{
										foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $campaign)
										{
											?>
                                             <label class="checkbox ">
                   
									  
                  <input type="checkbox" class="checkboxes" id="inlineCheckbox1" name="case[]" value="<?php echo $campaign['id'];?>" /><?php echo $campaign['name'];?></label>
                  <?php }}} ?>
                  
                                 </div>
                              </div>
                              
                            
                              <div class="form-actions" style="padding-top:35px;">
                                 <button type="button" class="btn btn-success" onclick="sub_form_cust()"><i class="icon-play"></i> <?php echo $lang['report_run_report_button'];?></button>
                                 <button type="button" class="btn btn-warning"><i class="icon-ban-circle"></i> Reset</button>
                              </div>
                              
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