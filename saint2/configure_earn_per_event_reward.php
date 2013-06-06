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
					               <?php include('include/small_header.php');?>               
                </div>
                <?php if(isset($_REQUEST['page_id'])){
					$data['type'] = 'campaigns_list';
									$data['type_restrict'] = 'earned';
									$data['searchField'] = 'campaign_name';
									$data['searchValue'] = $camp_id;
									$data['searchOper'] = 'eq';
									//var_dump($data);
									$campaigns	=	 submit_cURL ($data);
										
									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
									//print_r($parse_campaigns_array);
								   if(!empty($parse_campaigns_array['response']['campaigns']['campaign']))
								   {
									 if(empty($parse_campaigns_array['response']['campaigns']['campaign'][0]))
								   	 {
										 if($parse_campaigns_array['response']['campaigns']['campaign']['id'] == $camp_id)
										 {
					 ?> 
<div class="row-fluid">

						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $_REQUEST['camp_name'];?>: Configure Rewards</h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
										<h5>Reward Setting</h5>
                                        
		                                       
       <form action="add_earn_per_event.php" class="form-horizontal" method="post">
                              <div class="control-group">
                                 <label class="control-label" for="input1">Amount Per Event</label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="input1" name="need" value="<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['earned_per_event'];?>" />
                                    <input type="hidden" name="desc" value="Dollars earned per event" /> 
                                  <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="hidden" name="page_id" value="3" />
                                 </div> 
                              </div>
                              
                             
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-info">Save</button>
                                 <button type="button" class="btn">Discard</button>
                              </div>
      
      </form>
	</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div>
                    
                    
                    <?php }}
					else
				 {
					 foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $camp)
					 {
						 if($camp['id'] == $camp_id)
						 {
							 ?>
					<div class="row-fluid">

						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $_REQUEST['camp_name'];?>: Configure Rewards</h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
										<h5>Reward Setting</h5>
                                        
		                                       
       <form action="add_earn_per_event.php" class="form-horizontal" method="post">
                              <div class="control-group">
                                 <label class="control-label" for="input1">Amount Per Event</label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="input1" name="need" value="<?php echo $camp['earned_per_event'];?>" />
                                    <input type="hidden" name="desc" value="Dollars earned per event" /> 
                                  <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="hidden" name="page_id" value="3" />
                                 </div> 
                              </div>
                              
                             
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-info">Save</button>
                                 <button type="button" class="btn">Discard</button>
                              </div>
      
      </form>
	</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div>
					<?php }}}}}else{ ?>
                    <div class="row-fluid">

						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4>Campaign Name: Configure Rewards</h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
										<h5>Reward Setting</h5>
                                        
		                                       
       <form action="add_earn_per_event.php" class="form-horizontal" method="post">
                              <div class="control-group">
                                 <label class="control-label" for="input1">Amount Per Event</label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="input1" name="need" />
                                    <input type="hidden" name="desc" value="Dollars earned per event" /> 
                                  <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="hidden" name="page_id" value="3" />
                                 </div> 
                              </div>
                              
                             
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-info">Save</button>
                                 <button type="button" class="btn">Discard</button>
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