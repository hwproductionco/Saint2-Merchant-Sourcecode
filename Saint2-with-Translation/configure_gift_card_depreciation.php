<?php
$camp_id = 0;
if(isset($_GET['camp_id']))
{
	$camp_id = $_GET['camp_id'];
}
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
					     <?php include('include/small_header.php'); ?>         
								              
                </div> 
                 <?php
								   
								   
									if(isset($_REQUEST['page_id']))
									{
										$dep_id = $_REQUEST['dep_id'];
										$data['type'] = 'campaign_depreciations';
	   $data['campaign_id'] = $camp_id;
//var_dump($data);
	   $depreciations	=	 submit_cURL ($data);

		$parse_depreciations_array = array();
		$parse_depreciations_array = xml2array($depreciations, $get_attributes=1, $priority = 'tag');
		//print_r($parse_depreciations_array);
		if(!empty($parse_depreciations_array['response']['depreciations']))
	   {
		   //print_r($parse_depreciations_array['response']['depreciations']['depreciation']);
		   if(empty($parse_depreciations_array['response']['depreciations']['depreciation'][0]))
		   {
			 if($parse_depreciations_array['response']['depreciations']['depreciation']['id'] == $dep_id) 
			 { 
			 	
		   ?>
<div class="row-fluid">						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $_REQUEST['camp_name'];?>: Configure <?php echo $lang['report_depreciation'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									 <form action="edit_depreciation.php" class="form-horizontal" method="post">
        
        					 <div class="control-group">
                               
                                 <div class="controls">
                                    <label class="radio">
                                    <input type="radio" name="trans_type" id="optionsRadios1" value="last_transaction" checked />
                                    <?php echo $lang['edit_depreciation_type_T'];?>
                                    </label>
                                    <div class="clearfix"></div>
                                    <label class="radio">
                                    <input type="radio" name="trans_type" id="optionsRadios2" value="per_transaction" />
                                    <?php echo $lang['edit_depreciation_type_L'];?>
                                    </label>  
                                    <div class="clearfix"></div>
                                     
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" ><?php echo $lang['edit_depreciation_longevity'];?></label>
                                 <div class="controls">
                                    <input class="input-small" id="interval" type="text" value="<?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_interval'];?>" name="interval" /> <select data-placeholder="" class="input-small" name="interval_type" tabindex="1">
                                       <option value=""></option>
                                       <option value="days" <?php if($parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_interval_type'] == 'days'){?> selected="selected" <?php } ?>><?php echo $lang['days'];?></option>
                                       <option value="months" <?php if($parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_interval_type'] == 'months'){?> selected="selected" <?php } ?>><?php echo $lang['months'];?></option>
                                       <option value="years" <?php if($parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_interval_type'] == 'years'){?> selected="selected" <?php } ?>><?php echo $lang['years'];?></option>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input7"><?php echo $lang['edit_depreciation_percentage'];?></label>
                                 <div class="controls">
                                    <div class="input-append">
                                       <input class="input-small" id="percent" type="text" name="percent" value="<?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_percentage'];?>" /><span class="add-on">%</span>
                                       <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="hidden" name="page_id" value="4" />	
                                     <input type="hidden" name="dep_id" value="<?php echo $dep_id;?>" />		 
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(1)"><?php echo $lang['nav_cancel'];?></button>
                              </div>
                              
                              </form>
		</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div>
                    
                    <?php }}
					else {
						foreach($parse_depreciations_array['response']['depreciations']['depreciation'] as $depr)
						{ 
						if($depr['id'] == $dep_id)
						{
						?>
					<div class="row-fluid">						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $_REQUEST['camp_name'];?>: Configure <?php echo $lang['report_depreciation'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									 <form action="edit_depreciation.php" class="form-horizontal" method="post">
        
        					 <div class="control-group">
                               
                                 <div class="controls">
                                    <label class="radio">
                                    <input type="radio" name="trans_type" id="optionsRadios1" value="last_transaction" checked />
                                    <?php echo $lang['edit_depreciation_type_T'];?>
                                    </label>
                                    <div class="clearfix"></div>
                                    <label class="radio">
                                    <input type="radio" name="trans_type" id="optionsRadios2" value="per_transaction" />
                                    <?php echo $lang['edit_depreciation_type_L'];?>
                                    </label>  
                                    <div class="clearfix"></div>
                                     
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" ><?php echo $lang['edit_depreciation_longevity'];?></label>
                                 <div class="controls">
                                    <input class="input-small" id="interval" type="text" value="<?php echo $depr['depreciation_interval'];?>" name="interval" /> <select data-placeholder="" class="input-small" name="interval_type" tabindex="1">
                                       <option value=""></option>
                                       <option value="days" <?php if($depr['depreciation_interval_type'] == 'days'){?> selected="selected" <?php } ?>><?php echo $lang['days'];?></option>
                                       <option value="months" <?php if($depr['depreciation_interval_type'] == 'months'){?> selected="selected" <?php } ?>><?php echo $lang['months'];?></option>
                                       <option value="years" <?php if($depr['depreciation_interval_type'] == 'years'){?> selected="selected" <?php } ?>><?php echo $lang['years'];?></option>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input7"><?php echo $lang['edit_depreciation_percentage'];?></label>
                                 <div class="controls">
                                    <div class="input-append">
                                       <input class="input-small" id="percent" type="text" name="percent" value="<?php echo $depr['depreciation_percentage'];?>" /><span class="add-on">%</span>
                                       <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="hidden" name="page_id" value="4" />
                                    <input type="hidden" name="dep_id" value="<?php echo $dep_id;?>" />		 
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(1)"><?php echo $lang['nav_cancel'];?></button>
                              </div>
                              
                              </form>
		</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div>
					<?php }}}}}
					else
					{ ?>
                    
                  <div class="row-fluid">						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $lang['cp_campaigns_table_header_1'];?>: Configure <?php echo $lang['report_depreciation'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									 <form action="add_depreciation.php" class="form-horizontal" method="get">
        
        					 <div class="control-group">
                               
                                 <div class="controls">
                                    <label class="radio">
                                    <input type="radio" name="trans_type" id="optionsRadios1" value="last_transaction" checked />
                                    <?php echo $lang['edit_depreciation_type_T'];?>
                                    </label>
                                    <div class="clearfix"></div>
                                    <label class="radio">
                                    <input type="radio" name="trans_type" id="optionsRadios2" value="per_transaction" />
                                    <?php echo $lang['edit_depreciation_type_L'];?>
                                    </label>  
                                    <div class="clearfix"></div>
                                     
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" ><?php echo $lang['edit_depreciation_longevity'];?></label>
                                 <div class="controls">
                                    <input class="input-small" id="interval" type="text" name="interval" /> <select data-placeholder="" class="input-small" name="interval_type" tabindex="1">
                                       <option value=""></option>
                                       <option value="days"><?php echo $lang['days'];?></option>
                                       <option value="months"><?php echo $lang['months'];?></option>
                                       <option value="years"><?php echo $lang['years'];?></option>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input7"><?php echo $lang['edit_depreciation_percentage'];?></label>
                                 <div class="controls">
                                    <div class="input-append">
                                       <input class="input-small" id="percent" type="text" name="percent" /><span class="add-on">%</span>
                                       <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="hidden" name="page_id" value="2" />		 
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(1)"><?php echo $lang['nav_cancel'];?></button>
                              </div>
                              
                              </form>
		</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div> 
                    <?php } ?>
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