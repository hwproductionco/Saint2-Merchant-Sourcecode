<?php
$camp_id = 0;
$camp_name = '';
if(isset($_GET['camp_id']))
{
	$camp_id = $_GET['camp_id'];
}

if(isset($_GET['camp_name']))
{
	$camp_name = $_GET['camp_name'];
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
					                           
                </div> 
                <?php include('include/small_header.php');
								   
								   	$data['type'] = 'campaigns_list';
									$data['type_restrict'] = 'points';
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
     <?php if($parse_array_user_info['response']['user']['user_permissions']['view_depreciations'] == 'Yes'){ ?><li><a href="#pane2" data-toggle="tab">Depreciation</a></li><?php } ?>
     
    <?php if($parse_array_user_info['response']['user']['user_permissions']['view_promotions'] == 'Yes'){ ?><li><a href="#pane3" data-toggle="tab">Promotions</a></li><?php } ?>
         <?php if($parse_array_user_info['response']['user']['user_permissions']['view_rewards'] == 'Yes'){ ?>
    <li><a href="#pane4" data-toggle="tab">Reward Levels</a></li><?php } ?>
    <li><a href="#pane5" data-toggle="tab">Recurring Fee</a></li>
    
  </ul>
  <div class="tab-content responsive">
    <div id="pane1" class="tab-pane active">
     
     <form action="edit_point_campaign.php" class="form-horizontal" method="post">
                              <div class="control-group">
                                 <label class="control-label" for="input1">Campaign Name</label>
                                 <div class="controls">
                                 <input type="hidden" name="page_id" value="1" />
                                 <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="text" class="input-medium" name="name" id="name" value="<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>" />
                                 </div>
                              </div>
                              
                            
                              
                              <!--<div class="control-group">
                                 <label class="control-label" >Ask for Amount Spent</label>
                                 <div class="controls">
                                    <label class="checkbox">
                                    <input type="checkbox" /> 
                                    </label>
                                    
                                 </div>
                              </div>-->     
                              
                              <div class="control-group">
                                 <label class="control-label" >Coalition Program</label>
                                 <div class="controls">
                                    <label class="checkbox">
                                    <input type="checkbox" value="" /> <span style="font-size:10px;">Opt Out</span>
                                    </label>
                                    
                                 </div>
                              </div>     
                              
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1">Points per Dollar</label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" name="points_ratio" id="points_ratio" value="<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['points_ratio'];?>" />
                                 </div>
                              </div> 
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1">Spend to Reward Ratio</label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" name="reward_ratio" id="reward_ratio" value="<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['reward_ratio'];?>" />
                                 </div>
                              </div> 
                              
                               <div class="control-group">
                               <label class="control-label" for="input1">Email Content</label>
                                 <div class="controls">
                                    <textarea class="span6 wysihtml5" id="email" rows="6" ></textarea>
                                 </div>
                              </div>
                              
                               <div class="form-actions">
                                 <button type="submit" class="btn btn-info">Save</button>
                                 <button type="button" class="btn" onclick="redir(5)">Discard</button>
                              </div>      
                              
                              
      </form>
     
     
     
    </div>
    <div id="pane2" class="tab-pane">
     <h4>Depreciation</h4>
		<div class="row-fluid">
        
      <div class="span12">
      <h5>Current Depreciation Levels</h5>
       
       <div>
       <?php
	   $data['type'] = 'campaign_depreciations';
	   $data['campaign_id'] = $camp_id;
	   $depreciations	=	 submit_cURL ($data);

		$parse_depreciations_array = array();
		$parse_depreciations_array = xml2array($depreciations, $get_attributes=1, $priority = 'tag');
		//print_r($parse_depreciations_array);
	    ?>
       
       <table border="0" cellpadding="10" cellspacing="10">
       <?php if(!empty($parse_depreciations_array['response']['depreciations']))
	   {
		   //print_r($parse_depreciations_array['response']['depreciations']['depreciation']);
		   if(empty($parse_depreciations_array['response']['depreciations']['depreciation'][0]))
		   {
			   
		   ?>
       
       <tr>
       	<td>Amounts will depreciate after <?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_interval'].' '.$parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_interval_type'];?>(s) by <?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_percentage'];?>%</td>
         <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_depreciation'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_points_program_depreciation.php?dep_id=<?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['id'];?>&camp_id=<?php echo $camp_id;?>&action=1&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
         <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_depreciation'] == 'Yes'){ ?><td><a href="delete_dep.php?dep_id=<?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        <?php }else
		{
			foreach($parse_depreciations_array['response']['depreciations']['depreciation'] as $depreciation)
			{
		?>
		<tr>
       	<td>Amounts will depreciate after <?php echo $depreciation['depreciation_interval'].' '.$depreciation['depreciation_interval_type'];?> (s) by <?php echo $depreciation['depreciation_percentage'];?>%</td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_depreciation'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_points_program_depreciation.php?dep_id=<?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['id'];?>&camp_id=<?php echo $camp_id;?>&action=1&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_depreciation'] == 'Yes'){ ?><td><a href="delete_dep.php?dep_id=<?php echo $depreciation['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
       
		
		<?php }}} ?>
        </table></div>
       <?php if($parse_array_user_info['response']['user']['user_permissions']['add_depreciation'] == 'Yes'){ ?><div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_points_program_depreciation.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> Add</button> </div><?php } ?>
                                 
      
      </div>
      
      </div>         
		
        
     
       

    </div>
    <div id="pane3" class="tab-pane">
      <h4>Promotions</h4>
    <div class="row-fluid">
        
      <div class="span12">
      <h5>Current Promotions</h5>
       
       <div>
       <?php
	   $data['API'] = '1.5';
	    $data['type'] = 'campaign_promos';
	   $data['user_api_key'] = $GLOBALS['api_key'];
	  
	   $data['campaign_id'] = $camp_id;
	   $promotions	=	 submit_cURL ($data);

		$parse_promotions_array = array();
		$parse_promotions_array = xml2array($promotions, $get_attributes=1, $priority = 'tag');
		//print_r($parse_promotions_array);
	    ?>
       
       <table border="0" cellpadding="10" cellspacing="10">
       <?php if(!empty($parse_promotions_array['response']['promotions']))
	   {
		   if(empty($parse_promotions_array['response']['promotions']['promotion'][0]))
		   {
		   ?>
       
       <tr>
       	<td><?php echo $parse_promotions_array['response']['promotions']['promotion']['description'];?></td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_promotions'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_points_promotions.php?promotion_id=<?php echo $parse_promotions_array['response']['promotions']['promotion']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_promotions'] == 'Yes'){ ?><td><a href="delete_promotion.php?promotion_id=<?php echo $parse_promotions_array['response']['promotions']['promotion']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        <?php }else
		{ foreach($parse_promotions_array['response']['promotions']['promotion'] as $promotion)
			{
		?>
       <tr>
       	<td><?php echo $promotion['description'];?></td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_promotions'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_points_rewards.php??promotion_id=<?php echo $promotion['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_promotions'] == 'Yes'){ ?><td><a href="delete_promotion.php?promotion_id=<?php echo $promotion['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="submit" class="btn-small btn-danger"><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        
        
			
			
			<?php }}
		}?>
        </table></div>
       <?php if($parse_array_user_info['response']['user']['user_permissions']['add_promotions'] == 'Yes'){ ?><div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_points_promotions.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> Add</button> </div><?php } ?>
                                 
      
      </div>
      
      </div> 
      </div>   
    <div id="pane4" class="tab-pane">
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
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_rewards'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_points_rewards.php?reward_id=<?php echo $parse_rewards_array['response']['rewards']['reward']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_rewards'] == 'Yes'){ ?><td><a href="delete_reward.php?reward_id=<?php echo $parse_rewards_array['response']['rewards']['reward']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        <?php }else{
			foreach($parse_rewards_array['response']['rewards']['reward'] as $reward)
			{
		?>
       <tr>
       	<td><?php echo $reward['description'];?></td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_rewards'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_points_rewards.php?reward_id=<?php echo $reward['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_rewards'] == 'Yes'){ ?><td><a href="delete_reward.php?reward_id=<?php echo $reward['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="submit" class="btn-small btn-danger"><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        
		<?php } }}?>
        </table></div>
       <?php if($parse_array_user_info['response']['user']['user_permissions']['add_rewards'] == 'Yes'){ ?><div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_points_rewards.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> Add</button> </div><?php } ?>
                                 
      
      </div>
      
      </div> 
      </div>   
    
    <div id="pane5" class="tab-pane">
    <h4>Recurring Fee</h4>
		<div class="row-fluid">
        
      <div class="span12">
      <h5>Current Recurring Fee</h5>
       
       <div>
       <?php
	   $data['type'] = 'campaign_fees';
	   $data['campaign_id'] = $camp_id;
	   //var_dump($data);
	   $fees	=	 submit_cURL ($data);

		$parse_fees_array = array();
		$parse_fees_array = xml2array($fees, $get_attributes=1, $priority = 'tag');
		//print_r($parse_fees_array);
	    ?>
       
       <table border="0" cellpadding="10" cellspacing="10">
       <?php if(!empty($parse_fees_array['response']['fees']))
	   {
		   //print_r($parse_depreciations_array['response']['depreciations']['depreciation']);
		   if(empty($parse_fees_array['response']['fees']['fee'][0]))
		   {
			   
		   ?>
       
       <tr>
       	<td>Every <?php echo $parse_fees_array['response']['fees']['fee']['interval'].' '.$parse_fees_array['response']['fees']['fee']['interval_type'],' deduct $'.$parse_fees_array['response']['fees']['fee']['amount'].' for non-activity.';?></td>
        <td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_gift_card_fees.php?fee_id=<?php echo $parse_fees_array['response']['fees']['fee']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=2&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>'"><i class="icon-pencil"></i> Edit</button></td>
        <td><a href="delete_fee.php?fee_id=<?php echo $parse_fees_array['response']['fees']['fee']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=2" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td>
        </tr>
        <?php } else {
			foreach($parse_fees_array['response']['fees']['fee'] as $fee)
			{
		?> 
         <tr>
       	<td>Every <?php echo $fee['interval'].' '.$fee['interval_type'],' deduct $'.$fee['amount'].' for non-activity.';?></td>
        <td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_gift_card_fees.php?fee_id=<?php echo $fee['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=2&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>'"><i class="icon-pencil"></i> Edit</button></td>
        <td><a href="delete_fee.php?fee_id=<?php echo $fee['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=2" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td>
        </tr>
        <?php }}} ?>
        </table></div>
       <div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_points_recurring_fee.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> Add</button> </div>
                                 
      
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
                    
                    <?php } }
					else{
						foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $camps)
						{
							//print_r($camps);
							if($camps['id'] == $camp_id)
							{
								//print_r($camps);
							 ?>
					<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $camps['name'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									<div class="tabbable tabbable-custom tabs-left">
  <ul class="nav nav-tabs tabs-left responsive">
    <li class="active"><a href="#pane1" data-toggle="tab">General</a></li>
     <?php if($parse_array_user_info['response']['user']['user_permissions']['view_depreciations'] == 'Yes'){ ?><li><a href="#pane2" data-toggle="tab">Depreciation</a></li><?php } ?>
     
    <?php if($parse_array_user_info['response']['user']['user_permissions']['view_promotions'] == 'Yes'){ ?><li><a href="#pane3" data-toggle="tab">Promotions</a></li><?php } ?>
         <?php if($parse_array_user_info['response']['user']['user_permissions']['view_rewards'] == 'Yes'){ ?>
    <li><a href="#pane4" data-toggle="tab">Reward Levels</a></li><?php } ?>
    <li><a href="#pane5" data-toggle="tab">Recurring Fee</a></li>
    
  </ul>
  <div class="tab-content responsive">
    <div id="pane1" class="tab-pane active">
     
     <form action="edit_point_campaign.php" class="form-horizontal" method="post">
                              <div class="control-group">
                                 <label class="control-label" for="input1">Campaign Name</label>
                                 <div class="controls">
                                  <input type="hidden" name="page_id" value="1" />
                                 <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="text" class="input-medium" name="name" id="name" value="<?php echo $camps['name'];?>" />
                                 </div>
                              </div>
                              
                            
                              
                              <!--<div class="control-group">
                                 <label class="control-label" >Ask for Amount Spent</label>
                                 <div class="controls">
                                    <label class="checkbox">
                                    <input type="checkbox" /> 
                                    </label>
                                    
                                 </div>
                              </div>-->     
                              
                              <div class="control-group">
                                 <label class="control-label" >Coalition Program</label>
                                 <div class="controls">
                                    <label class="checkbox">
                                    <input type="checkbox" value="" /> <span style="font-size:10px;">Opt Out</span>
                                    </label>
                                    
                                 </div>
                              </div>     
                              
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1">Points per Dollar</label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" name="points_ratio" id="points_ratio" value="<?php echo $camps['points_ratio'];?>" />
                                 </div>
                              </div> 
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1">Spend to Reward Ratio</label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" name="reward_ratio" id="reward_ratio" value="<?php echo $camps['reward_ratio'];?>" />
                                 </div>
                              </div> 
                              
                               <div class="control-group">
                               <label class="control-label" for="input1">Email Content</label>
                                 <div class="controls">
                                    <textarea class="span6 wysihtml5" id="email" rows="6" ></textarea>
                                 </div>
                              </div>
                              
                               <div class="form-actions">
                                 <button type="submit" class="btn btn-info">Save</button>
                                 <button type="button" class="btn" onclick="redir(5)">Discard</button>
                              </div>      
                              
                              
      </form>
     
     
     
    </div>
    <div id="pane2" class="tab-pane">
     <h4>Depreciation</h4>
		<div class="row-fluid">
        
      <div class="span12">
      <h5>Current Depreciation Levels</h5>
       
       <div>
       <?php
	   $data['type'] = 'campaign_depreciations';
	   $data['campaign_id'] = $camp_id;
	   $depreciations	=	 submit_cURL ($data);

		$parse_depreciations_array = array();
		$parse_depreciations_array = xml2array($depreciations, $get_attributes=1, $priority = 'tag');
		//print_r($parse_depreciations_array);
	    ?>
       
       <table border="0" cellpadding="10" cellspacing="10">
       <?php if(!empty($parse_depreciations_array['response']['depreciations']))
	   {
		   //print_r($parse_depreciations_array['response']['depreciations']['depreciation']);
		   if(empty($parse_depreciations_array['response']['depreciations']['depreciation'][0]))
		   {
			   
		   ?>
       
       <tr>
       	<td>Amounts will depreciate after <?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_interval'].' '.$parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_interval_type'];?>(s) by <?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_percentage'];?>%</td>
         <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_depreciation'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_points_program_depreciation.php?dep_id=<?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['id'];?>&camp_id=<?php echo $camp_id;?>&action=1&camp_name=<?php echo $camps['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
         <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_depreciation'] == 'Yes'){ ?><td><a href="delete_dep.php?dep_id=<?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        <?php }else
		{
			foreach($parse_depreciations_array['response']['depreciations']['depreciation'] as $depreciation)
			{
		?>
		<tr>
       	<td>Amounts will depreciate after <?php echo $depreciation['depreciation_interval'].' '.$depreciation['depreciation_interval_type'];?> (s) by <?php echo $depreciation['depreciation_percentage'];?>%</td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_depreciation'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_points_program_depreciation.php?dep_id=<?php echo $depreciation['id'];?>&camp_id=<?php echo $camp_id;?>&action=1&camp_name=<?php echo $camps['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_depreciation'] == 'Yes'){ ?><td><a href="delete_dep.php?dep_id=<?php echo $depreciation['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
       
		
		<?php }}} ?>
        </table></div>
       <?php if($parse_array_user_info['response']['user']['user_permissions']['add_depreciation'] == 'Yes'){ ?><div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_points_program_depreciation.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> Add</button> </div><?php } ?>
                                 
      
      </div>
      
      </div>         
		
        
     
       

    </div>
    <div id="pane3" class="tab-pane">
      <h4>Promotions</h4>
    <div class="row-fluid">
        
      <div class="span12">
      <h5>Current Promotions</h5>
       
       <div>
       <?php
	   $data['API'] = '1.5';
	    $data['type'] = 'campaign_promos';
	   $data['user_api_key'] = $GLOBALS['api_key'];
	  
	   $data['campaign_id'] = $camp_id;
	   $promotions	=	 submit_cURL ($data);

		$parse_promotions_array = array();
		$parse_promotions_array = xml2array($promotions, $get_attributes=1, $priority = 'tag');
		//print_r($parse_promotions_array);
	    ?>
       
       <table border="0" cellpadding="10" cellspacing="10">
       <?php if(!empty($parse_promotions_array['response']['promotions']))
	   {
		   if(empty($parse_promotions_array['response']['promotions']['promotion'][0]))
		   {
		   ?>
       
       <tr>
       	<td><?php echo $parse_promotions_array['response']['promotions']['promotion']['description'];?></td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_promotions'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_points_promotions.php?promotion_id=<?php echo $parse_promotions_array['response']['promotions']['promotion']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $camps['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_promotions'] == 'Yes'){ ?><td><a href="delete_promotion.php?promotion_id=<?php echo $parse_promotions_array['response']['promotions']['promotion']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        <?php }else
		{ foreach($parse_promotions_array['response']['promotions']['promotion'] as $promotion)
			{
		?>
       <tr>
       	<td><?php echo $promotion['description'];?></td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_promotions'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_points_promotions.php?promotion_id=<?php echo $promotion['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $camps['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_promotions'] == 'Yes'){ ?><td><a href="delete_promotion.php?promotion_id=<?php echo $promotion['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="submit" class="btn-small btn-danger"><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        
        
			
			
			<?php }}
		}?>
        </table></div>
       <?php if($parse_array_user_info['response']['user']['user_permissions']['add_promotions'] == 'Yes'){ ?><div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_points_promotions.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> Add</button> </div><?php } ?>
                                 
      
      </div>
      
      </div> 
      </div>   
    <div id="pane4" class="tab-pane">
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
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_rewards'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_points_rewards.php?reward_id=<?php echo $parse_rewards_array['response']['rewards']['reward']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $camps['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_rewards'] == 'Yes'){ ?><td><a href="delete_reward.php?reward_id=<?php echo $parse_rewards_array['response']['rewards']['reward']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        <?php }else{
			foreach($parse_rewards_array['response']['rewards']['reward'] as $reward)
			{
		?>
       <tr>
       	<td><?php echo $reward['description'];?></td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_rewards'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_points_rewards.php?reward_id=<?php echo $reward['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $camps['name'];?>'"><i class="icon-pencil"></i> Edit</button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_rewards'] == 'Yes'){ ?><td><a href="delete_reward.php?reward_id=<?php echo $reward['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="submit" class="btn-small btn-danger"><i class="icon-trash"></i> Delete</button></a></td><?php } ?>
        </tr>
        
		<?php } }}?>
        </table></div>
       <?php if($parse_array_user_info['response']['user']['user_permissions']['add_rewards'] == 'Yes'){ ?><div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_points_rewards.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> Add</button> </div><?php } ?>
                                 
      
      </div>
      
      </div> 
      </div>   
    
    <div id="pane5" class="tab-pane">
    <h4>Recurring Fee</h4>
		<div class="row-fluid">
        
      <div class="span12">
      <h5>Current Recurring Fee</h5>
       
       <div>
       <?php
	   $data['type'] = 'campaign_fees';
	   $data['campaign_id'] = $camp_id;
	   //var_dump($data);
	   $fees	=	 submit_cURL ($data);

		$parse_fees_array = array();
		$parse_fees_array = xml2array($fees, $get_attributes=1, $priority = 'tag');
		//print_r($parse_fees_array);
	    ?>
       
       <table border="0" cellpadding="10" cellspacing="10">
       <?php if(!empty($parse_fees_array['response']['fees']))
	   {
		   //print_r($parse_depreciations_array['response']['depreciations']['depreciation']);
		   if(empty($parse_fees_array['response']['fees']['fee'][0]))
		   {
			   
		   ?>
       
       <tr>
       	<td>Every <?php echo $parse_fees_array['response']['fees']['fee']['interval'].' '.$parse_fees_array['response']['fees']['fee']['interval_type'],' deduct $'.$parse_fees_array['response']['fees']['fee']['amount'].' for non-activity.';?></td>
        <td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_gift_card_fees.php?fee_id=<?php echo $parse_fees_array['response']['fees']['fee']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=2&camp_name=<?php echo $camps['name'];?>'"><i class="icon-pencil"></i> Edit</button></td>
        <td><a href="delete_fee.php?fee_id=<?php echo $parse_fees_array['response']['fees']['fee']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=2" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td>
        </tr>
        <?php } else {
			foreach($parse_fees_array['response']['fees']['fee'] as $fee)
			{
		?> 
         <tr>
       	<td>Every <?php echo $fee['interval'].' '.$fee['interval_type'],' deduct $'.$fee['amount'].' for non-activity.';?></td>
        <td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_gift_card_fees.php?fee_id=<?php echo $fee['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=2&camp_name=<?php echo $camps['name'];?>'"><i class="icon-pencil"></i> Edit</button></td>
        <td><a href="delete_fee.php?fee_id=<?php echo $fee['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=2" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> Delete</button></a></td>
        </tr>
        <?php }}} ?>
        </table></div>
       <div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_points_recurring_fee.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> Add</button> </div>
                                 
      
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
					<?php }}}}?>
                   
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