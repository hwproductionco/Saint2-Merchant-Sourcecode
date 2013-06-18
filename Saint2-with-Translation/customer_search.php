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
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">  
               
                </div> 
<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-search"></i>  Advance Search</h4>
															
								</div>
								<div class="widget-body">
                                <div class="row-fluid">
                                <div class="span12">
                                
                                
                                                            
                               
                                <!-- BEGIN FORM -->
  <?php $rand = rand(); ?>                            
                               <form class="form-horizontal" action="manage_customers.php" method="post">
                               <div id="parent">
                               <div id="field<?php echo $rand;?>">
                               <div class="control-group">
<label class="control-label"><?php echo $lang['report_search'];?></label>
<div class="controls">
<select class="span6 " tabindex="1" name="cust_field<?php echo $rand;?>" id="cust_field<?php echo $rand;?>" data-placeholder="Choose a Category">
<option value=""><?php echo $lang['label_Select'];?></option>

<?php

 $data['type'] = 'manage_fields';
				$data['API'] = '1.5';
				$data['user_api_key'] = $GLOBALS['api_key'];
				$data['action'] = 'list';
				
				$trans_fields_contents	=	 submit_cURL ($data);

				$parse_array_trans_fields = array();
				$parse_array_trans_fields = xml2array($trans_fields_contents, $get_attributes=1, $priority = 'tag');
							//print_r($parse_array_trans_fields);
				if(!empty($parse_array_trans_fields['response']['account']['fields']))
								{
									
									if(empty($parse_array_trans_fields['response']['account']['fields']['field'][0]))
									{
										
				
					//print_r($p_array);
					if(substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_1' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_2' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_3' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_4' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_5' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_6' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_7' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_8' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_9') 
					{
						
						?>
                        <option value="<?php echo $parse_array_trans_fields['response']['account']['fields']['field']['name'];?>"><?php echo $parse_array_trans_fields['response']['account']['fields']['field']['label'];?></option>
                        <?php }}else{
									foreach($parse_array_trans_fields['response']['account']['fields']['field'] as $p_array)
									{
									 ?>
                                <option value="<?php echo $p_array['name'];?>"><?php echo $p_array['label'];?></option>
                                <?php }}} ?>
</select>
</div>
</div>

                               
                               <div class="control-group">
<label class="control-label">Value</label>

<div class="controls mew_btn" id="btn">
<input class="span6 " type="text" name="cust_value<?php echo $rand;?>" id="cust_value<?php echo $rand;?>"><span id="hid<?php echo $rand;?>"> <button type="button" class="btn btn-small btn-success" onclick="add_field(<?php echo $rand;?>)" ><i class="icon-plus"></i><?php echo $lang['nav_add'];?></button></span>
<!--span class="help-inline">Some hint here</span-->
</div>
</div>
</div>
</div>


                            
                              <div class="form-actions" style="padding-top:35px;">
                                 <button type="submit" class="btn btn-primary"><i class="icon-play"></i> <?php echo $lang['report_run_report_button'];?></button>
                                 <button type="button" class="btn btn-warning" id="reset" onclick="reset_me()"><i class="icon-ban-circle"></i> Reset</button>
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