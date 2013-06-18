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
                <?php if(isset($_REQUEST['page_id']))
				 {
					 $reward_id = $_REQUEST['reward_id'];
	   $data['type'] = 'campaign_rewards';
	   if($data['type'] == 'campaign_rewards')
	   {
			   $data['API'] = ''; 
			    $data['user_api_key'] = ''; 
		}
	   $data['campaign_id'] = $camp_id;
	   //var_dump($data);
	  $rewards	=	 submit_cURL ($data);

		$parse_rewards_array = array();
		$parse_rewards_array = xml2array($rewards, $get_attributes=1, $priority = 'tag');
		//print_r($parse_rewards_array);
		 if(!empty($parse_rewards_array['response']['rewards']))
	   {
		   if(empty($parse_rewards_array['response']['rewards']['reward'][0]))
		   {
			   if($parse_rewards_array['response']['rewards']['reward']['id'] == $reward_id)
			   {
		   ?>
<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $_REQUEST['camp_name'];?>: Configure <?php echo $lang['Rewards'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
										<h5><?php  $lang['edit_reward_header'];?></h5>
       <form action="edit_points_rewards.php" class="form-horizontal" method="post">
                              <input type="hidden" name="reward_id" value="<?php echo $reward_id;?>" />
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_visits_table_header'];?>:</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="need" name="need" value="<?php echo $parse_rewards_array['response']['rewards']['reward']['level'];?>" />
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_visits_table_header_2'];?></label>
                                 <div class="controls">
                                    <textarea class="span6" rows="3" id="desc" name="desc"><?php echo $parse_rewards_array['response']['rewards']['reward']['description'];?></textarea>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['Reward'].' '.$lang['ID'];?>:</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="item" name="item"/>
                                    <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="hidden" name="page_id" value="2" />
                                 </div>
                              </div>
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(3)"><?php echo $lang['nav_cancel'];?></button>
                              </div>
      
      </form>
	</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div>
              <?php }}
			  else {
				  foreach($parse_rewards_array['response']['rewards']['reward'] as $reward)
				  {
					  if($reward['id'] == $reward_id)
					  {
					  ?>
			  	<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $_REQUEST['camp_name'];?>: Configure <?php echo $lang['Rewards'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
										<h5><?php $lang['edit_reward_add'];?></h5>
       <form action="edit_points_rewards.php" class="form-horizontal" method="get">
       <input type="hidden" name="reward_id" value="<?php echo $reward_id;?>" />
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_visits_table_header'];?>:</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="need" name="need" value="<?php echo $reward['level'];?>" />
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_visits_table_header_2'];?></label>
                                 <div class="controls">
                                    <textarea class="span6" rows="3" id="desc" name="desc"><?php echo $reward['description'];?></textarea>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['Reward'].' '.$lang['ID'];?>:</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="item" name="item"/>
                                    <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="hidden" name="page_id" value="2" />
                                 </div>
                              </div>
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(3)"><?php echo $lang['nav_cancel'];?></button>
                              </div>
      
      </form>
	</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div>
              <?php }}}}}
			  
			  else { ?>
              <div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $lang['cp_campaigns_table_header_1'];?>: Configure <?php echo $lang['Rewards'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
										<h5><?php $lang['edit_reward_add'];?></h5>
       <form action="add_rewards.php" class="form-horizontal" method="get">
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_visits_table_header'];?>:</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="need" name="need" />
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_visits_table_header_2'];?></label>
                                 <div class="controls">
                                    <textarea id="inputRemarks" class="span6" rows="3" name="desc"></textarea>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['Reward'].' '.$lang['ID'];?>:</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="item" name="item"/>
                                    <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="hidden" name="page_id" value="2" />
                                 </div>
                              </div>
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(3)"><?php echo $lang['nav_cancel'];?></button>
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