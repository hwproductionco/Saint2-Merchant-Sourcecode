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
                 <?php
				 if(isset($_REQUEST['page_id']))
				 {
					 $promo_id = $_REQUEST['promotion_id'];
	   $data['API'] = '1.5';
	    $data['type'] = 'campaign_promos';
	   $data['user_api_key'] = $GLOBALS['api_key'];
	  
	   $data['campaign_id'] = $camp_id;
	   //var_dump($data);
	   $promotions	=	 submit_cURL ($data);

		$parse_promotions_array = array();
		$parse_promotions_array = xml2array($promotions, $get_attributes=1, $priority = 'tag');
		//print_r($parse_promotions_array);
	     if(!empty($parse_promotions_array['response']['promotions']))
	   {
		   if(empty($parse_promotions_array['response']['promotions']['promotion'][0]))
		   {
			   if($parse_promotions_array['response']['promotions']['promotion']['id'] == $promo_id)
			   {
		?>
         
<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $_REQUEST['camp_name'];?>: Configure <?php echo $lang['section_points_promotions'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									 <h5><?php echo $lang['title_add_promotion'];?></h5>
       <form action="edit_points_promotion.php" class="form-horizontal" method="post">
       <input type="hidden" name="promo_id" value="<?php echo $promo_id;?>" />
       						 <div class="control-group">
                                 <label class="control-label" ><?php echo $lang['edit_promo_table_header_1'];?></label>
                                 <div class="controls">
                                    <select data-placeholder="Choose One" tabindex="1" class="input-medium" style="width:165px;" name="oprator">
                                       <option value=""></option>
                                       <option value="x" <?php if($parse_promotions_array['response']['promotions']['promotion']['operand'] == 'x'){?> selected="selected" <?php } ?>>X</option>
                                       <option value="+" <?php if($parse_promotions_array['response']['promotions']['promotion']['operand'] == '+'){?> selected="selected" <?php } ?>>+</option>
                                       
                                    </select>
                                 </div>
                              </div>
       
       
       
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_promo_table_header'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="desc" name="desc" value="<?php echo $parse_promotions_array['response']['promotions']['promotion']['description'];?>" />
                                 </div>
                              </div>
                              
      
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_promo_table_header_2'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="much" name="much" value="<?php echo $parse_promotions_array['response']['promotions']['promotion']['value'];?>" />
                                 </div>
                              </div> 
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_promo_table_header_3'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="input1" value="<?php if(!empty($parse_promotions_array['response']['promotions']['promotion']['promo_custom_id'])){ echo $parse_promotions_array['response']['promotions']['promotion']['promo_custom_id'];}else {echo '';}?>" /> <?php echo $lang['optional'];?>
                                 </div>
                                 <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="hidden" name="page_id" value="1" />
                              </div> 
                              
                             
                              
                               <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(2)"><?php echo $lang['nav_cancel'];?></button>
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
						foreach($parse_promotions_array['response']['promotions']['promotion'] as $promo)
						{
							//print_r($promo);
							if($promo['id'] == $promo_id)
							{
								?>
					<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $_REQUEST['camp_name'];?>: <?php echo $lang['section_points_promotions'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									 <h5><?php echo $lang['title_add_promotion'];?></h5>
       <form action="edit_points_promotion.php" class="form-horizontal" method="post">
       <input type="hidden" name="promo_id" value="<?php echo $promo_id;?>" />
       						 <div class="control-group">
                                 <label class="control-label" ><?php echo $lang['edit_promo_table_header_1'];?></label>
                                 <div class="controls">
                                    <select data-placeholder="Choose One" tabindex="1" class="input-medium" style="width:165px;" name="oprator">
                                       <option value=""></option>
                                       <option value="x" <?php if($promo['operand'] == 'x'){?> selected="selected" <?php } ?>>X</option>
                                       <option value="+" <?php if($promo['operand'] == '+'){?> selected="selected" <?php } ?>>+</option>
                                       
                                    </select>
                                 </div>
                              </div>
       
       
       
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_promo_table_header'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="desc" name="desc" value="<?php echo $promo['description'];?>" />
                                 </div>
                              </div>
                              
      
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_promo_table_header_2'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="much" name="much" value="<?php echo $promo['value'];?>" />
                                 </div>
                              </div> 
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_promo_table_header_3'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="input1" value="<?php echo $promo['promo_custom_id'];?>" /> <?php echo $lang['optional'];?>
                                 </div>
                                 <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="hidden" name="page_id" value="1" />
                              </div> 
                              
                             
                              
                               <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(2)"><?php echo $lang['nav_cancel'];?></button>
                              </div>      
                              
                              
      </form>
					</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div>
					<?php }}}}}else
					{ ?>
                    <div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><?php echo $lang['cp_campaigns_table_header_1'];?>: Configure <?php echo $lang['section_points_promotions'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									 <h5><?php echo $lang['title_add_promotion'];?></h5>
       <form action="add_promotion.php" class="form-horizontal" method="get">
       
       						 <div class="control-group">
                                 <label class="control-label" ><?php echo $lang['edit_promo_table_header_1'];?></label>
                                 <div class="controls">
                                    <select data-placeholder="Choose One" tabindex="1" class="input-medium" style="width:165px;" name="oprator">
                                       <option value=""></option>
                                       <option value="x">X</option>
                                       <option value="+">+</option>
                                       
                                    </select>
                                 </div>
                              </div>
       
       
       
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_promo_table_header'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="desc" name="desc" />
                                 </div>
                              </div>
                              
      
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_promo_table_header_2'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="much" name="much" />
                                 </div>
                              </div> 
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_promo_table_header_3'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="input1" /> <?php echo $lang['optional'];?>
                                 </div>
                                 <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="hidden" name="page_id" value="1" />
                              </div> 
                              
                             
                              
                               <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(2)"><?php echo $lang['nav_cancel'];?></button>
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