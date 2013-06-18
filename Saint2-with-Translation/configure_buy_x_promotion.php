<?php
$camp_id = 0;
if(isset($_GET['camp_id']))
{
	$camp_id = $_GET['camp_id'];
}
$promo_id = 0;
if(isset($_GET['promotion_id']))
{
	$promo_id = $_GET['promotion_id'];
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
					               <?php include('include/small_header.php');
								   
								   
								   ?>               
                </div> 
                <?php
				if(isset($_REQUEST['page_id']))
				{
					
				 $data['API'] = '1.5';
	   $data['user_api_key'] = $GLOBALS['api_key'];
	   $data['type'] = 'buyx_items_list';
	   $data['campaign_id'] = $camp_id;
	   $promotions	=	 submit_cURL ($data);

		$parse_promotions_array = array();
		$parse_promotions_array = xml2array($promotions, $get_attributes=1, $priority = 'tag');
        //print_r($parse_promotions_array);
		 if(!empty($parse_promotions_array['response']['buyx_items']))
	   {
		   if(empty($parse_promotions_array['response']['buyx_items']['item'][0]))
		   {
			   if($parse_promotions_array['response']['buyx_items']['item']['id'] == $promo_id)
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
									 <h5><?php echo $lang['nav_add'].' '.$lang['section_points_promotions'];?></h5>
                                    
       <form action="edit_buy_x_promotion.php" class="form-horizontal" method="post">
       
       						
       
       
       
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_buyx_item_table_header_1'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="desc" name="desc" value="<?php echo $parse_promotions_array['response']['buyx_items']['item']['description'];?>" />

                                    <input type="hidden" name="promo_id" value="<?php echo $promo_id;?>" />
                                 </div>
                              </div>
                               <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['section_points_promotions'].' '.$lang['ID'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="promo_id1" name="promo_id1" value=""  /> <?php echo $lang['optional'];?>
                                 </div>
                              </div> 
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_buyx_item_table_header_2'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="need" name="need" value="<?php echo $parse_promotions_array['response']['buyx_items']['item']['level'];?>" />
                                    <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    
                                 </div>
                              </div> 
                              
                             
                              
                               <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(7)"><?php echo $lang['nav_cancel'];?></button>
                              </div>      
                              
                              
      </form>
      
	</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div>
                    <?php }}
					else { 
					foreach($parse_promotions_array['response']['buyx_items']['item'] as $item)
					{
						if($item['id'] == $promo_id)
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
									 <h5><?php echo $lang['nav_add'].' '.$lang['section_points_promotions'];?></h5>
                                    
       <form action="edit_buy_x_promotion.php" class="form-horizontal" method="post">
       
       						
       
       
       
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_buyx_item_table_header_1'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="desc" name="desc" value="<?php echo $item['description'];?>" />

                                    <input type="hidden" name="promo_id" value="<?php echo $promo_id;?>" />
                                 </div>
                              </div>
                               <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['section_points_promotions'].' '.$lang['ID'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="promo_id1" name="promo_id1" value=""  /> <?php echo $lang['optional'];?>
                                 </div>
                              </div> 
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_buyx_item_table_header_2'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="need" name="need" value="<?php echo $item['level'];?>" />
                                    <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    
                                 </div>
                              </div> 
                              
                             
                              
                               <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(7)"><?php echo $lang['nav_cancel'];?></button>
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
									 <h5><?php echo $lang['nav_add'].' '.$lang['section_points_promotions'];?></h5>
                                    <?php if($promo_id != 0)
									{?>
       <form action="edit_buy_x_promotion.php" class="form-horizontal" method="post">
         <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_buyx_item_table_header_1'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="desc" name="desc" />

                                    <input type="hidden" name="promo_id" value="<?php echo $promo_id;?>" />
                                 </div>
                              </div>
                               <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['section_points_promotions'].' '.$lang['ID'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="promo_id1" name="promo_id1" /> <?php echo $lang['Optional'];?>
                                 </div>
                              </div> 
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_buyx_item_table_header_2'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="need" name="need" />
                                    <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    
                                 </div>
                              </div> 
                              
                             
                              
                               <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(7)"><?php echo $lang['nav_cancel'];?></button>
                              </div>      
                              
                              
      </form>
      <?php } else{ ?>
       <form action="add_buy_x_promotion.php" class="form-horizontal" method="get">
       
       						
       
       
       
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_buyx_item_table_header_1'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="input1" name="desc" />
                                 </div>
                              </div>
                              
      
                              
                              
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['section_points_promotions'].' '.$lang['ID'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="input1" name="promo_id" /> <?php echo $lang['optional'];?>
                                 </div>
                              </div> 
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['edit_buyx_item_table_header_2'];?></label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="input1" name="need" />
                                    <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    
                                 </div>
                              </div> 
                              
                             
                              
                               <div class="form-actions">
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="redir(7)"><?php echo $lang['nav_cancel'];?></button>
                              </div>      
                              
                              
      </form>
      <?php } ?>
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