<?php include('include/header.php');
$camp_id = $_REQUEST['camp_id'];
 ?>
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
  if(isset($_REQUEST['page_id']))
  {
	  $fee_id = $_REQUEST['fee_id'];
	   $data['type'] = 'campaign_fees';
	   $data['campaign_id'] = $camp_id;
	   //var_dump($data);
	   $fees	=	 submit_cURL ($data);

		$parse_fees_array = array();
		$parse_fees_array = xml2array($fees, $get_attributes=1, $priority = 'tag');
		//print_r($parse_fees_array);
		if(!empty($parse_fees_array['response']['fees']))
	   {
		   //print_r($parse_depreciations_array['response']['depreciations']['depreciation']);
		   if(empty($parse_fees_array['response']['fees']['fee'][0]))
		   {
			   
			   if($parse_fees_array['response']['fees']['fee']['id'] == $fee_id)
			   {	
			   
	    ?>
<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $_REQUEST['camp_name'];?>: Configure Recurring Fee</h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									 <form action="edit_fee.php" class="form-horizontal" method="post">
        
        					
                              
                              <div class="control-group">
                                 <label class="control-label" >Every</label>
                                 <div class="controls">
                                    <input class="input-small" name="time" id="time" type="text" value="<?php echo $parse_fees_array['response']['fees']['fee']['interval'];?>" /> <select data-placeholder="" class="input-small" tabindex="1" name="period">
                                       <option value=""></option>
                                       <option value="days" <?php if($parse_fees_array['response']['fees']['fee']['interval_type'] == 'days'){ ?> selected="selected" <?php } ?>>days</option>
                                       <option value="months" <?php if($parse_fees_array['response']['fees']['fee']['interval_type'] == 'months'){ ?> selected="selected" <?php } ?>>months</option>
                                       <option value="years" <?php if($parse_fees_array['response']['fees']['fee']['interval_type'] == 'years'){ ?> selected="selected" <?php } ?>>years</option>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input7">Deduct</label>
                                 <div class="controls">
                                    <div class="input-append">
                                       <input class="input-small" name="amount" id="amount" type="text" value="<?php echo $parse_fees_array['response']['fees']['fee']['amount'];?>" /><span class="add-on">$</span>		 
                                    </div>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="input7">For the following reason:</label>
                                 <div class="controls">
                                    <div class="input-append">
                                       <input class="input-small" id="desc" name="desc" type="text" value="<?php echo $parse_fees_array['response']['fees']['fee']['description'];?>" />	 
                                    	<input type="hidden" value="<?php echo $camp_id;?>" name="camp_id" />
                                    <input type="hidden" value="<?php echo $_REQUEST['page_id'];?>" name="page" />
                                    <input type="hidden" name="fee_id" value="<?php echo $fee_id;?>"  />
                                    </div>
                                    
                                 </div>
                              </div>
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-info">Save</button>
                                 <button type="button" class="btn" onclick="redir(4)">Discard</button>
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
				  foreach($parse_fees_array['response']['fees']['fee'] as $fee)
				  {
					  if($fee['id'] == $fee_id)
					  {
						  print_r($fee);
					  
					  ?>
			  <div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $_REQUEST['camp_name'];?>: Configure Recurring Fee</h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									 <form action="edit_fee.php" class="form-horizontal" method="post">
        
        					
                              
                              <div class="control-group">
                                 <label class="control-label" >Every</label>
                                 <div class="controls">
                                    <input class="input-small" name="time" id="time" type="text" value="<?php echo $fee['interval'];?>" /> <select data-placeholder="" class="input-small" tabindex="1" name="period">
                                       <option value=""></option>
                                       <option value="days" <?php if($fee['interval_type'] == 'days'){ ?> selected="selected" <?php } ?>>days</option>
                                       <option value="months" <?php if($fee['interval_type'] == 'months'){ ?> selected="selected" <?php } ?>>months</option>
                                       <option value="years" <?php if($fee['interval_type'] == 'years'){ ?> selected="selected" <?php } ?>>years</option>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input7">Deduct</label>
                                 <div class="controls">
                                    <div class="input-append">
                                       <input class="input-small" name="amount" id="amount" type="text" value="<?php echo $fee['amount'];?>" /><span class="add-on">$</span>		 
                                    </div>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="input7">For the following reason:</label>
                                 <div class="controls">
                                    <div class="input-append">
                                       <input class="input-small" id="input7" name="desc" type="text" value="<?php echo $fee['description'];?>" />	 
                                    	<input type="hidden" value="<?php echo $camp_id;?>" name="camp_id" />
                                    <input type="hidden" value="<?php echo $_REQUEST['page_id'];?>" name="page" />
                                    <input type="hidden" name="fee_id" value="<?php echo $fee_id;?>"  />
                                    </div>
                                    
                                 </div>
                              </div>
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-info">Save</button>
                                 <button type="button" class="btn" onclick="redir(4)">Discard</button>
                              </div>
                              
                              </form>
								</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div>
			  <?php }}}}
			  }else { ?>
           <div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4>Campaign Name: Configure Recurring Fee</h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									 <form action="add_fee.php" class="form-horizontal" method="post">
        
        					
                              
                              <div class="control-group">
                                 <label class="control-label" >Every</label>
                                 <div class="controls">
                                    <input class="input-small" name="time" id="time" type="text" /> <select data-placeholder="" class="input-small" tabindex="1" name="period">
                                       <option value=""></option>
                                       <option value="days">days</option>
                                       <option value="months">months</option>
                                       <option value="years">years</option>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input7">Deduct</label>
                                 <div class="controls">
                                    <div class="input-append">
                                       <input class="input-small" name="amount" id="amount" type="text" /><span class="add-on">$</span>		 
                                    </div>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="input7">For the following reason:</label>
                                 <div class="controls">
                                    <div class="input-append">
                                       <input class="input-small" id="desc" name="desc" type="text" />	 
                                    	<input type="hidden" value="<?php echo $camp_id;?>" name="camp_id" />
                                    <input type="hidden" value="2" name="page" />
                                    </div>
                                    
                                 </div>
                              </div>
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-info">Save</button>
                                 <button type="button" class="btn" onclick="redir(4)">Discard</button>
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