	<!-- BEGIN HEADER -->
<?php
$camp_id = 0;
if(isset($_GET['camp_id']))
{
	$camp_id = $_GET['camp_id'];
}

 include('include/header.php'); ?>
	<!-- BEGIN HEADER -->
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
				<?php include('include/small_header.php');?>
			
                <div id="page" class="dashboard">  
					               
                </div> 
                <?php 
								   
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
									<h4><?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									<div class="tabbable tabbable-custom tabs-left">
  <ul class="nav nav-tabs tabs-left responsive">
    <li class="active"><a href="#pane1" data-toggle="tab">General</a></li>
   
         <?php if($parse_array_user_info['response']['user']['user_permissions']['view_rewards'] == 'Yes'){ ?>
    <li><a href="#pane3" data-toggle="tab">Reward Levels</a></li><?php } ?>
    
  </ul>
  <div class="tab-content responsive">
    <div id="pane1" class="tab-pane active">
     
     <form action="edit_point_campaign.php" class="form-horizontal">
                              <div class="control-group">
                                 <label class="control-label" for="input1">Campaign Name</label>
                                 <div class="controls">
                                 <input type="hidden" name="page_id" value="5" />
                                 <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="text" class="input-medium" id="name" name="name" value="<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>" />
                                 </div>
                              </div>
                              
                              
                              
                               <div class="control-group">
                               <label class="control-label" for="input1">Email Content</label>
                                 <div class="controls">
                                    <textarea class="span6 wysihtml5" rows="6" id="email" name="email" ></textarea>
                                 </div>
                              </div>
                              
                               <div class="form-actions">
                                 <button type="submit" class="btn btn-info">Save</button>
                                 <button type="button" class="btn" onclick="redir(6)">Discard</button>
                              </div>      
                              
                              
      </form>
     
     
     
    </div>
    
    <div id="pane3" class="tab-pane">
      <h4>Reward Levels</h4>
      
		 <div class="row-fluid">
        
      <div class="span12">
      <h5>Current Reward Levels</h5>
       <div>
       <?php
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
	    ?>
       
       <table border="0" cellpadding="10" cellspacing="10">
       <?php if(!empty($parse_rewards_array['response']['rewards']))
	   {
		   if(empty($parse_rewards_array['response']['rewards']['reward'][0]))
		   {
		   ?>
       <tr>
       	<td><?php echo $parse_rewards_array['response']['rewards']['reward']['description'];?></td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_rewards'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_earn_per_event_reward.php?reward_id=<?php echo $parse_rewards_array['response']['rewards']['reward']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_rewards'] == 'Yes'){ ?><td><a href="delete_reward.php?reward_id=<?php echo $parse_rewards_array['response']['rewards']['reward']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        <?php }else{
			foreach($parse_rewards_array['response']['rewards']['reward'] as $reward)
			{
		?>
       <tr>
       	<td><?php echo $reward['description'];?></td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_rewards'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_earn_per_event_reward.php?reward_id=<?php echo $reward['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_rewards'] == 'Yes'){ ?><td><a href="delete_reward.php?reward_id=<?php echo $reward['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="submit" class="btn-small btn-danger"><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        
		<?php } }}?>
        </table></div>
       <?php if($parse_array_user_info['response']['user']['user_permissions']['add_rewards'] == 'Yes'){ ?><div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_earn_per_event_reward.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> Add</button> </div><?php } ?>
                                 
      
      </div>
      
      </div> 
      </div>
    
    
    
    
  </div><!-- /.tab-content -->
</div><!-- /.tabbable -->
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
							 print_r($camp);
							 ?>
                             <div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $camp['name'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									<div class="tabbable tabbable-custom tabs-left">
  <ul class="nav nav-tabs tabs-left responsive">
    <li class="active"><a href="#pane1" data-toggle="tab">General</a></li>
   
         <?php if($parse_array_user_info['response']['user']['user_permissions']['view_rewards'] == 'Yes'){ ?>
    <li><a href="#pane3" data-toggle="tab">Reward Levels</a></li><?php } ?>
    
  </ul>
  <div class="tab-content responsive">
    <div id="pane1" class="tab-pane active">
     
     <form action="edit_point_campaign.php" class="form-horizontal">
                              <div class="control-group">
                                 <label class="control-label" for="input1">Campaign Name</label>
                                 <div class="controls">
                                    <input type="hidden" name="page_id" value="5" />
                                 <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="text" class="input-medium" id="name" name="name" value="<?php echo $camp['name'];?>" />
                                 </div>
                              </div>
                              
                              
                              
                               <div class="control-group">
                               <label class="control-label" for="input1">Email Content</label>
                                 <div class="controls">
                                    <textarea class="span6 wysihtml5" rows="6" id="email" name="email" ></textarea>
                                 </div>
                              </div>
                              
                               <div class="form-actions">
                                 <button type="submit" class="btn btn-info">Save</button>
                                 <button type="button" class="btn" onclick="redir(6)">Discard</button>
                              </div>      
                              
                              
      </form>
     
     
     
    </div>
    
    <div id="pane3" class="tab-pane">
      <h4>Reward Levels</h4>
      
		 <div class="row-fluid">
        
      <div class="span12">
      <h5>Current Reward Levels</h5>
       <div>
       <?php
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
	    ?>
       
       <table border="0" cellpadding="10" cellspacing="10">
       <?php if(!empty($parse_rewards_array['response']['rewards']))
	   {
		   if(empty($parse_rewards_array['response']['rewards']['reward'][0]))
		   {
		   ?>
       <tr>
       	<td><?php echo $parse_rewards_array['response']['rewards']['reward']['description'];?></td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_rewards'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_earn_per_event_reward.php?reward_id=<?php echo $parse_rewards_array['response']['rewards']['reward']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $camp['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_rewards'] == 'Yes'){ ?><td><a href="delete_reward.php?reward_id=<?php echo $parse_rewards_array['response']['rewards']['reward']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        <?php }else{
			foreach($parse_rewards_array['response']['rewards']['reward'] as $reward)
			{
		?>
       <tr>
       	<td><?php echo $reward['description'];?></td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_rewards'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_earn_per_event_reward.php?reward_id=<?php echo $reward['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $camp['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_rewards'] == 'Yes'){ ?><td><a href="delete_reward.php?reward_id=<?php echo $reward['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="submit" class="btn-small btn-danger"><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        
		<?php } }}?>
        </table></div>
       <?php if($parse_array_user_info['response']['user']['user_permissions']['add_rewards'] == 'Yes'){ ?><div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_earn_per_event_reward.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> Add</button> </div><?php } ?>
                                 
      
      </div>
      
      </div> 
      </div>
    
    
    
    
  </div><!-- /.tab-content -->
</div><!-- /.tabbable -->
								</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div>
				 <?php }}}} ?>   
                   
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