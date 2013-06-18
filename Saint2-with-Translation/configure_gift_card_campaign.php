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
									$data['type_restrict'] = 'giftcard';
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
         <?php if($parse_array_user_info['response']['user']['user_permissions']['view_depreciations'] == 'Yes'){ ?><li><a href="#pane2" data-toggle="tab"><?php echo $lang['report_depreciation'];?></a></li><?php } ?>
<li><a href="#pane4" data-toggle="tab"><?php echo $lang['preferences_recurring_fee_header'];?></a></li>
    <li><a href="#pane3" data-toggle="tab">Predictive Analysis</a></li>
  </ul>
  <div class="tab-content responsive">
    <div id="pane1" class="tab-pane active">
     
     <form action="edit_point_campaign.php" class="form-horizontal" method="post">
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['cp_campaigns_table_header_1'];?></label>
                                 <div class="controls">
                                 <input type="hidden" name="page_id" value="4" />
                                 <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="text" class="input-medium" id="name" name="name" value="<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>" />
                                 </div>
                              </div>
                              
                                <div class="control-group">
                                 <label class="control-label" >Link to <?php echo $lang['campaign_type_points'];?></label>
                                 <div class="controls">
                                    <label class="checkbox">
                                    <input type="checkbox" value="" /> 
                                    </label>
                                    
                                 </div>
                              </div>  
                              
                               <div class="control-group">
                                 <label class="control-label" ><?php echo $lang['coalition_program'];?></label>
                                 <div class="controls">
                                    <label class="checkbox">
                                    <input type="checkbox" value="" /> <span style="font-size:10px;"><?php echo $lang['opt_out'];?></span>
                                    </label>
                                    
                                 </div>
                              </div>    
                              
                               
                                                                            
                              
                               <div class="control-group">
                               <label class="control-label" for="input1">Email Content</label>
                                 <div class="controls">
                                    <textarea class="span6 wysihtml5" rows="6" id="email" name="email" ></textarea>
                                 </div>
                              </div>
                              
                               <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(8)"><?php echo $lang['nav_cancel'];?></button>
                              </div>      
                              
                              
      </form>
     
     
     
    </div>
    <div id="pane2" class="tab-pane">
     <h4><?php echo $lang['report_depreciation'];?></h4>
		<div class="row-fluid">
        
      <div class="span12">
      <h5>Current <?php echo $lang['report_depreciation'];?></h5>
       
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
       	<td><?php echo $lang['edit_depreciation_longevity'].' '.$parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_interval'].' '.$parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_interval_type'];?>(s) <?php echo $lang['edit_depreciation_percentage'];?> <?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_percentage'];?>%</td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_depreciation'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_gift_card_depreciation.php?dep_id=<?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>'"><i class="icon-pencil"></i> <?php echo $lang['nav_edit'];?></button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_depreciation'] == 'Yes'){ ?><td><a href="delete_dep.php?dep_id=<?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=4" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> <?php echo $lang['nav_delete'];?></button></a></td><?php } ?>
        </tr>
        <?php }else
		{
			foreach($parse_depreciations_array['response']['depreciations']['depreciation'] as $depreciation)
			{
		?>
		<tr>
       	<td><?php echo $lang['edit_depreciation_longevity'].' '.$depreciation['depreciation_interval'].' '.$depreciation['depreciation_interval_type'];?> (s) by <?php echo $depreciation['depreciation_percentage'];?>%</td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_depreciation'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_gift_card_depreciation.php?dep_id=<?php echo $depreciation['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>'"><i class="icon-pencil"></i> <?php echo $lang['nav_edit'];?></button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_depreciation'] == 'Yes'){ ?><td><a href="delete_dep.php?dep_id=<?php echo $depreciation['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=4" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> <?php echo $lang['nav_delete'];?></button></a></td><?php } ?>
        </tr>
       
		
		<?php }}} ?>
        </table></div>
       <?php if($parse_array_user_info['response']['user']['user_permissions']['add_depreciation'] == 'Yes'){ ?><div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_gift_card_depreciation.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> <?php echo $lang['nav_add'];?></button> </div><?php } ?>
                                 
      
      </div>
      
      </div>

    </div>
   <div id="pane4" class="tab-pane">
    <h4><?php echo $lang['preferences_recurring_fee_header'];?></h4>
		<div class="row-fluid">
        
      <div class="span12">
      <h5>Current <?php echo $lang['preferences_recurring_fee_header'];?></h5>
       
       <div>
       <?php
	   $data['type'] = 'campaign_fees';
	   $data['campaign_id'] = $camp_id;
	   //var_dump($data);
	   $fees	=	 submit_cURL ($data);

		$parse_fees_array = array();
		$parse_fees_array = xml2array($fees, $get_attributes=1, $priority = 'tag');
		
	    ?>
       
       <table border="0" cellpadding="10" cellspacing="10">
       <?php if(!empty($parse_fees_array['response']['fees']))
	   {
		   //print_r($parse_depreciations_array['response']['depreciations']['depreciation']);
		   if(empty($parse_fees_array['response']['fees']['fee'][0]))
		   {
			   
		   ?>
       
       <tr>
       	<td><?php echo $lang['edit_recurring_fee_interval'].' '.$parse_fees_array['response']['fees']['fee']['interval'].' '.$parse_fees_array['response']['fees']['fee']['interval_type'].' '.$lang['edit_recurring_fee_amount'].' $'.$parse_fees_array['response']['fees']['fee']['amount'].' '.$lang['edit_recurring_fee_description'];?></td>
        <td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_gift_card_fees.php?fee_id=<?php echo $parse_fees_array['response']['fees']['fee']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>'"><i class="icon-pencil"></i> Edit</button></td>
        <td><a href="delete_fee.php?fee_id=<?php echo $parse_fees_array['response']['fees']['fee']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> <?php echo $lang['nav_delete'];?></button></a></td>
        </tr>
        <?php } else {
			foreach($parse_fees_array['response']['fees']['fee'] as $fee)
			{
		?> 
         <tr>
       	<td><?php echo $lang['edit_recurring_fee_interval'].' '.$fee['interval'].' '.$fee['interval_type'].' '.$lang['edit_recurring_fee_amount'].' '.$lang['edit_recurring_fee_description'];?></td>
        <td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_gift_card_fees.php?fee_id=<?php echo $fee['id'];?>&camp_name=<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?>&camp_id=<?php echo $camp_id;?>&page_id=1'"><i class="icon-pencil"></i> <?php echo $lang['nav_edit'];?></button></td>
        <td><a href="delete_fee.php?fee_id=<?php echo $fee['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> <?php echo $lang['nav_delete'];?></button></a></td>
        </tr>
        <?php }}} ?>
        </table></div>
       <!--<div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_gift_card_fees.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> <?php //echo $lang['nav_add'];?></button> </div>-->
                                 
      
      </div>
      
      </div>         

    </div>
    <div id="pane3" class="tab-pane">
      <h4>Predictive Analysis</h4>
      <div class="row-fluid">
        
      <div class="span12">
      <h5>Tell the system what determines a qualified lead</h5>
       
       <div class="row-fluid">
       <div class="span6">
       <form>
       	 <div class="control-group">
                                 <label class="control-label" >Fico</label>
                                 <div class="controls">
                                    <select class="input-medium" data-placeholder="" tabindex="1">
                                       <option value=""></option>
                                       <option value="Category 1">450-500</option>
                                       <option value="Category 2">501-550</option>
                                       <option value="Category 3">551-600</option>
                                       <option value="Category 4">601-650</option>
                                       <option value="Category 4">651-700</option>
                                       <option value="Category 4">&gt;700</option>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" >Age</label>
                                 <div class="controls">
                                    <select class="input-medium" data-placeholder="" tabindex="1">
                                       <option value=""></option>
                                       <option value="Category 1">18-25</option>
                                       <option value="Category 2">26-30</option>
                                       <option value="Category 3">31-35</option>
                                       <option value="Category 4">36-40</option>
                                       <option value="Category 4">41-45</option>
                                       <option value="Category 4">46-50</option>
                                       <option value="Category 4">&gt;50</option>
                                    </select>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" >Income</label>
                                 <div class="controls">
                                    <select class="input-medium" data-placeholder="" tabindex="1">
                                       <option value=""></option>
                                       <option value="Category 1">0-20,000</option>
                                       <option value="Category 2">21,000-25,000</option>
                                       <option value="Category 3">26,000-30,000</option>
                                       <option value="Category 4">31,000-35,000</option>
                                       <option value="Category 4">36,000-40,000</option>
                                       <option value="Category 4">41,000-45,000</option>
                                       <option value="Category 4">46,000-50,000</option>
                                       <option value="Category 4">&gt;50,000</option>
                                    </select>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" >Do you have children?</label>
                                 <div class="controls">
                                    <select class="input-medium" data-placeholder="" tabindex="1">
                                       <option value=""></option>
                                       <option value="Category 1">Yes</option>
                                       <option value="Category 2">No</option>
                                      
                                    </select>
                                 </div>
                              </div>
       
       
       </form>
       </div>
       
       <div class="span6">
       	
        <label class="control-label" >Upload Historical Data</label>
        
        <div class="control-group">
                                 <div class="controls">
                                    <input type="file"/>
                                 </div>
       
       </div>
      
      </div>
      
      </div>
       <div style="margin-top:15px;"> <button type="submit" class="btn btn-info" >Save</button> </div>
                                 
      
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
						foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $camps)
						{
							if($camps['id'] == $camp_id)
							{
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
         <?php if($parse_array_user_info['response']['user']['user_permissions']['view_depreciations'] == 'Yes'){ ?><li><a href="#pane2" data-toggle="tab"><?php echo $lang['report_depreciation'];?></a></li><?php } ?>
<li><a href="#pane4" data-toggle="tab"><?php echo $lang['preferences_recurring_fee_header'];?></a></li>
    <li><a href="#pane3" data-toggle="tab">Predictive Analysis</a></li>
  </ul>
  <div class="tab-content responsive">
    <div id="pane1" class="tab-pane active">
     
     <form action="edit_point_campaign.php" class="form-horizontal" method="post">
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['cp_campaigns_table_header_1'];?></label>
                                 <div class="controls">
                                 <input type="hidden" name="page_id" value="4" />
                                 <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="text" class="input-medium" id="name" name="name" value="<?php echo $camps['name'];?>" />
                                 </div>
                              </div>
                              
                                <div class="control-group">
                                 <label class="control-label" >Link to <?php echo $lang['campaign_type_points'];?></label>
                                 <div class="controls">
                                    <label class="checkbox">
                                    <input type="checkbox" value="" /> 
                                    </label>
                                    
                                 </div>
                              </div>  
                              
                               <div class="control-group">
                                 <label class="control-label" ><?php echo $lang['coalition_program'];?></label>
                                 <div class="controls">
                                    <label class="checkbox">
                                    <input type="checkbox" value="" /> <span style="font-size:10px;"><?php echo $lang['opt_out'];?></span>
                                    </label>
                                    
                                 </div>
                              </div>    
                              
                               
                                                                            
                              
                               <div class="control-group">
                               <label class="control-label" for="input1">Email Content</label>
                                 <div class="controls">
                                    <textarea class="span6 wysihtml5" rows="6" id="email" name="email" ></textarea>
                                 </div>
                              </div>
                              
                               <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(8)"><?php echo $lang['nav_cancel'];?></button>
                              </div>      
                              
                              
      </form>
     
     
     
    </div>
    <div id="pane2" class="tab-pane">
     <h4><?php echo $lang['report_depreciation'];?></h4>
		<div class="row-fluid">
        
      <div class="span12">
      <h5>Current <?php echo $lang['report_depreciation'];?></h5>
       
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
       	<td><?php echo $lang['edit_depreciation_longevity'].' '.$parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_interval'].' '.$parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_interval_type'];?>(s) <?php echo $lang['edit_depreciation_percentage'];?> <?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['depreciation_percentage'];?>%</td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_depreciation'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_gift_card_depreciation.php?dep_id=<?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $camps['name'];?>'"><i class="icon-pencil"></i> <?php echo $lang['nav_edit'];?></button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_depreciation'] == 'Yes'){ ?><td><a href="delete_dep.php?dep_id=<?php echo $parse_depreciations_array['response']['depreciations']['depreciation']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=4" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> <?php echo $lang['nav_delete'];?></button></a></td><?php } ?>
        </tr>
        <?php }else
		{
			foreach($parse_depreciations_array['response']['depreciations']['depreciation'] as $depreciation)
			{
		?>
		<tr>
       	<td><?php echo $lang['edit_depreciation_longevity'].' '.$depreciation['depreciation_interval'].' '.$depreciation['depreciation_interval_type'];?> (s) by <?php echo $depreciation['depreciation_percentage'];?>%</td>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_depreciation'] == 'Yes'){ ?><td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_gift_card_depreciation.php?dep_id=<?php echo $depreciation['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $camps['name'];?>'"><i class="icon-pencil"></i> <?php echo $lang['nav_edit'];?></button></td><?php } ?>
        <?php if($parse_array_user_info['response']['user']['user_permissions']['delete_depreciation'] == 'Yes'){ ?><td><a href="delete_dep.php?dep_id=<?php echo $depreciation['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=4" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> <?php echo $lang['nav_delete'];?></button></a></td><?php } ?>
        </tr>
       
		
		<?php }}} ?>
        </table></div>
       <?php if($parse_array_user_info['response']['user']['user_permissions']['add_depreciation'] == 'Yes'){ ?><div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_gift_card_depreciation.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> <?php echo $lang['nav_add'];?></button> </div><?php } ?>
                                 
      
      </div>
      
      </div>

    </div>
   <div id="pane4" class="tab-pane">
    <h4><?php echo $lang['preferences_recurring_fee_header'];?></h4>
		<div class="row-fluid">
        
      <div class="span12">
      <h5>Current <?php echo $lang['preferences_recurring_fee_header'];?></h5>
       
       <div>
       <?php
	   $data['type'] = 'campaign_fees';
	   $data['campaign_id'] = $camp_id;
	   //var_dump($data);
	   $fees	=	 submit_cURL ($data);

		$parse_fees_array = array();
		$parse_fees_array = xml2array($fees, $get_attributes=1, $priority = 'tag');
		
	    ?>
       
       <table border="0" cellpadding="10" cellspacing="10">
       <?php if(!empty($parse_fees_array['response']['fees']))
	   {
		   //print_r($parse_depreciations_array['response']['depreciations']['depreciation']);
		   if(empty($parse_fees_array['response']['fees']['fee'][0]))
		   {
			   
		   ?>
       
       <tr>
       	<td><?php echo $lang['edit_recurring_fee_interval'].' '.$parse_fees_array['response']['fees']['fee']['interval'].' '.$parse_fees_array['response']['fees']['fee']['interval_type'].' '.$lang['edit_recurring_fee_amount'].' $'.$parse_fees_array['response']['fees']['fee']['amount'].' '.$lang['edit_recurring_fee_description'];?></td>
        <td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_gift_card_fees.php?fee_id=<?php echo $parse_fees_array['response']['fees']['fee']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1&camp_name=<?php echo $camps['name'];?>'"><i class="icon-pencil"></i> <?php echo $lang['nav_edit'];?></button></td>
        <td><a href="delete_fee.php?fee_id=<?php echo $parse_fees_array['response']['fees']['fee']['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> <?php echo $lang['nav_delete'];?></button></a></td>
        </tr>
        <?php } else {
			foreach($parse_fees_array['response']['fees']['fee'] as $fee)
			{
		?> 
         <tr>
       	<td><?php echo $lang['edit_recurring_fee_interval'].' '.$fee['interval'].' '.$fee['interval_type'].' '.$lang['edit_recurring_fee_amount'].' '.$lang['edit_recurring_fee_description'];?></td>
        <td><button type="submit" class="btn-small btn-info" onclick="window.location.href='configure_gift_card_fees.php?fee_id=<?php echo $fee['id'];?>&camp_name=<?php echo $camps['name'];?>&camp_id=<?php echo $camp_id;?>&page_id=1'"><i class="icon-pencil"></i> <?php echo $lang['nav_edit'];?></button></td>
        <td><a href="delete_fee.php?fee_id=<?php echo $fee['id'];?>&camp_id=<?php echo $camp_id;?>&page_id=1" onclick="return confirm('Are you sure?')"><button type="button" class="btn-small btn-danger" ><i class="icon-trash"></i> <?php echo $lang['nav_delete'];?></button></a></td>
        </tr>
        <?php }}} ?>
        </table></div>
      <!-- <div style="margin-top:15px;"> <button type="submit" class="btn btn-success" onclick="window.location.href='configure_gift_card_fees.php?camp_id=<?php echo $camp_id;?>'"><i class="icon-plus"></i> <?php //echo $lang['nav_add'];?></button> </div>-->
                                 
      
      </div>
      
      </div>         

    </div>
    <div id="pane3" class="tab-pane">
      <h4>Predictive Analysis</h4>
      <div class="row-fluid">
        
      <div class="span12">
      <h5>Tell the system what determines a qualified lead</h5>
       
       <div class="row-fluid">
       <div class="span6">
       <form>
       	 <div class="control-group">
                                 <label class="control-label" >Fico</label>
                                 <div class="controls">
                                    <select class="input-medium" data-placeholder="" tabindex="1">
                                       <option value=""></option>
                                       <option value="Category 1">450-500</option>
                                       <option value="Category 2">501-550</option>
                                       <option value="Category 3">551-600</option>
                                       <option value="Category 4">601-650</option>
                                       <option value="Category 4">651-700</option>
                                       <option value="Category 4">&gt;700</option>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" >Age</label>
                                 <div class="controls">
                                    <select class="input-medium" data-placeholder="" tabindex="1">
                                       <option value=""></option>
                                       <option value="Category 1">18-25</option>
                                       <option value="Category 2">26-30</option>
                                       <option value="Category 3">31-35</option>
                                       <option value="Category 4">36-40</option>
                                       <option value="Category 4">41-45</option>
                                       <option value="Category 4">46-50</option>
                                       <option value="Category 4">&gt;50</option>
                                    </select>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" >Income</label>
                                 <div class="controls">
                                    <select class="input-medium" data-placeholder="" tabindex="1">
                                       <option value=""></option>
                                       <option value="Category 1">0-20,000</option>
                                       <option value="Category 2">21,000-25,000</option>
                                       <option value="Category 3">26,000-30,000</option>
                                       <option value="Category 4">31,000-35,000</option>
                                       <option value="Category 4">36,000-40,000</option>
                                       <option value="Category 4">41,000-45,000</option>
                                       <option value="Category 4">46,000-50,000</option>
                                       <option value="Category 4">&gt;50,000</option>
                                    </select>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" >Do you have children?</label>
                                 <div class="controls">
                                    <select class="input-medium" data-placeholder="" tabindex="1">
                                       <option value=""></option>
                                       <option value="Category 1">Yes</option>
                                       <option value="Category 2">No</option>
                                      
                                    </select>
                                 </div>
                              </div>
       
       
       </form>
       </div>
       
       <div class="span6">
       	
        <label class="control-label" >Upload Historical Data</label>
        
        <div class="control-group">
                                 <div class="controls">
                                    <input type="file"/>
                                 </div>
       
       </div>
      
      </div>
      
      </div>
       <div style="margin-top:15px;"> <button type="submit" class="btn btn-info" >Save</button> </div>
                                 
      
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