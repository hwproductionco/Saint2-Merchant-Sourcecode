<?php include('include/header.php'); ?>
	<!-- BEGIN HEADER -->
		<?php include('include/menu.php');?>
    <!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
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
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER-->
						<!-- <div id="styler" class="hidden-phone">
							<a href="configure_points_program.html"><i class="icon-cog"></i></a>
							<span class="settings">
								<span class="text">Style:</span>
								<span class="colors">
									<span class="color-default" data-style="default">
									</span>
									<span class="color-grey" data-style="grey">
									</span>
									<span class="color-navygrey" data-style="navygrey">
									</span>											
									<span class="color-red" data-style="red">
									</span>	
								</span>
								<span class="layout">
									<label class="hidden-phone">
									<input type="checkbox" class="header" checked value="" />Sticky Header
									</label><br />
									<label><input type="checkbox" class="metro" value="" />Metro Style</label>
									<span class="space5"></span>
									<a class="btn fancybox-button" data-rel="fancybox-button" title="Conquer Large Desktop Preview"  href="assets/img/demo/desktop.png"><i class="icon-eye-open"></i> Screenshots</a>
									<a class="fancybox-button" data-rel="fancybox-button" title="Conquer Notebook Preview" href="assets/img/demo/notebook.png"></a>
									<a class="fancybox-button" data-rel="fancybox-button" title="Conquer Tablet Preview"  href="assets/img/demo/tablet.png"></a>
									<a class="fancybox-button" data-rel="fancybox-button" title="Conquer Phone Preview"  href="assets/img/demo/phone.png"></a>
								</span>
							</span>
						</div>-->
						<!-- END STYLE CUSTOMIZER-->    
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->		
						<!--h3 class="page-title">
							Customers
							<small>Customer Details</small>
						</h3-->
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.php">Home</a> <span class="divider">/</span>
							</li>
							<li><a href="#">View All</a> <span class="divider">/</span></li>
                            <li>Customer Details</li>
                            <br /><br />
                             <div class="row-fluid"> <div class="span2 responsive" style="margin-top:5px; padding-bottom:20px; width:115px;">
                        <?php if($parse_array_user_info['response']['user']['user_permissions']['add_customer'] == 'Yes') { ?><button class="btn btn-success" onclick="window.location.href='add_new_customer.php'"><i class="icon-plus icon-white"></i> Quick Add</button><?php } ?>
                        
                        </div>

               
                <div class="span8 responsive" style="padding-bottom: 20px; padding-right: 20px; text-align:left;">
                <!-- BEGIN QUICK SEARCH FORM -->
                
					<form class="navbar-search" style="width:100% !important;">
						<div class="search-input-icon" style="width:100%; ">
							<input type="text" class="search-query dropdown-toggle" id="quick_search" placeholder="Customer Search" data-toggle="dropdown"  style="width:80% !important;" /><i class="icon-search"></i>
							<!-- BEGIN QUICK SEARCH RESULT PREVIEW -->
							<ul class="dropdown-menu extended">								
								<li>
									<span class="arrow"></span>
									<p>Found 23 results</p>
								</li>
								<li>
									<a href="customer_search.html"><i class="icon-search"></i>  Advance Search</a>
								</li><li style="text-align:left;">
									<a href="#">
									<span class="label label-success"><i class="icon-user"></i></span>
									Nick Kim<i class="icon icon-arrow-right"></i>
									</a>
								</li>
								<li style="text-align:left;">
									<a href="#">
									<span class="label label-info"><i class="icon-user"></i></span>
									John Doe<i class="icon icon-arrow-right"></i>
									</a>
								</li>
								<li style="text-align:left;">
									<a href="#">
									<span class="label label-warning"><i class="icon-user"></i></span>
									Nick Dalton<i class="icon icon-arrow-right"></i>
									</a>
								</li>
								<li style="text-align:left;">
									<a href="#">
									<span class="label label-important"><i class="icon-user"></i></span>
									Fred Jones<i class="icon icon-arrow-right"></i>
									</a>
								</li>
								<li style="text-align:left;">
									<a href="#">
									<span class="label label-info"><i class="icon-user"></i></span>
									Harry Truman<i class="icon icon-arrow-right"></i>
									</a>
								</li>
								<li style="text-align:left;">
									<a href="#">
									<span class="label label-info"><i class="icon-user"></i></span>
									Alex Cross<i class="icon icon-arrow-right"></i>
									</a>
								</li>
								<li>
									<a href="#">
									View All Results
									</a>
								</li>
							</ul>
							<!-- END QUICK SEARCH RESULT PREVIEW -->
						</div>
					</form>
                   
					<!-- END QUICK SEARCH FORM -->
                    </div>
                    
                    	
                    
                    </div>                </ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">  
               
                </div> 

<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-user"></i>  Edit Customer</h4>
															
								</div>
								<div class="widget-body">
                                <div class="row-fluid">
                                <div class="span12">
                                <!-- BEGIN FORM -->
                                
                                <button type="button" class="btn btn-primary" onclick="window.location.href='manage_customer_transactions2.php?card_number=<?php echo $_GET['card_number'];?>'">Go Back</button>
                                
                                 <h5>Customer Information</h5>
                                 <?php
								 	$data['type'] = 'customer_info';
									
									 $data['card_number'] = $_GET['card_number'];
									 $customer_contents	=	 submit_cURL ($data);
											$parse_array_customer = array();
											$parse_array_customer = xml2array($customer_contents, $get_attributes=1, $priority = 'tag');
											//print_r($parse_array_customer);
								 ?>
                                 
                                <form action="edit_customer.php" class="form-horizontal" method="post" name="form3" id="form3">
                               <div class="control-group">
                               <label class="control-label" for="input1">Card Number</label>
                                 <div class="controls">
                                    <div class="input-prepend">
                                       <a href="#" <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_customer_card_number'] == 'Yes'){ ?> onclick="generate_card_number()" <?php } ?>><span class="add-on"><i class="icon-credit-card"></i></span></a><input id="card" name="card" type="text" placeholder="Card Number" maxlength="8" value="<?php if(!empty($parse_array_customer['response']['customer']['card_number'])) { echo $parse_array_customer['response']['customer']['card_number'];} else {echo '';}?>" <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_customer_card_number'] != 'Yes'){ ?> disabled="disabled" <?php } ?> />
                                       <input type="hidden" value="<?php if(!empty($parse_array_customer['response']['customer']['code'])) { echo $parse_array_customer['response']['customer']['code'];} else {echo '';}?>" name="code" />
                                       			 
                                    </div>
                                 </div>
                              </div>
                              
                              
                              <div class="control-group">
                                 <label class="control-label" for="f_name">First Name</label>
                                 <div class="controls">
                                    <input type="text" id="f_name" name="f_name" value="<?php if(!empty($parse_array_customer['response']['customer']['first_name'])) { echo $parse_array_customer['response']['customer']['first_name'];} else {echo '';}?>" style="width:235px;" />
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="l_name">Last Name</label>
                                 <div class="controls">
                                    <input type="text" id="l_name" name="l_name" value="<?php if(!empty($parse_array_customer['response']['customer']['last_name'])) { echo $parse_array_customer['response']['customer']['last_name'];} else {echo '';}?>" style="width:235px;" />
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="phno">Phone Number</label>
                                 <div class="controls">
                                    <div class="input-prepend">
                                       <span class="add-on"><i class="icon-phone"></i></span><input  id="phno" name="phno" type="text" value="<?php if(!empty($parse_array_customer['response']['customer']['phone'])) { echo $parse_array_customer['response']['customer']['phone'];} else {echo '';}?>" placeholder="Phone Number" maxlength="20" />			 
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="email">Email Address</label>
                                 <div class="controls">
                                    <div class="input-prepend">
                                       <span class="add-on">@</span><input  id="email" name="email" type="text" value="<?php if(!empty($parse_array_customer['response']['customer']['email'])) { echo $parse_array_customer['response']['customer']['email'];} else {echo '';}?>" placeholder="Email Address" />
                                       			 
                                    </div>
                                    <span class="help-inline" id="email_label" style="color:#F00"></span>
                                 </div>
                              </div>
                              
                                <div class="control-group">
                                 <label class="control-label" for="DOB">Birthday</label>
                                 <div class="controls">
                                    <div class="input-prepend">
                                       <span class="add-on"><i class="icon-calendar"></i></span><input  id="DOB" name="DOB" type="text" value="<?php if(!empty($parse_array_customer['response']['customer']['custom_date'])) { echo $parse_array_customer['response']['customer']['custom_date'];} else {echo '';}?>" placeholder="Birthday" />			 
                                    </div>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="street1">Address Line 1</label>
                                 <div class="controls">
                                    <input type="text" id="street1" name="street1" value="<?php if(!empty($parse_array_customer['response']['customer']['street1'])) { echo $parse_array_customer['response']['customer']['street1'];} else {echo '';}?>" style="width:235px;" />
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="street2">Address Line 2</label>
                                 <div class="controls">
                                    <input type="text" id="street2" name="street2" value="<?php if(!empty($parse_array_customer['response']['customer']['street2'])) { echo $parse_array_customer['response']['customer']['street2'];} else {echo '';}?>" style="width:235px;" />
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="city">City</label>
                                 <div class="controls">
                                    <input type="text" id="city" name="city" value="<?php if(!empty($parse_array_customer['response']['customer']['city'])) { echo $parse_array_customer['response']['customer']['city'];} else {echo '';}?>" style="width:235px;" />
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="state">State/Province</label>
                                 <div class="controls">
                                    <input type="text" id="state" name="state" value="<?php if(!empty($parse_array_customer['response']['customer']['state'])) { echo $parse_array_customer['response']['customer']['state'];} else {echo '';}?>" style="width:235px;" />
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="ccntry">Country</label>
                                 <div class="controls">
                                    <input type="text" id="cntry" name="cntry" value="<?php if(!empty($parse_array_customer['response']['customer']['country'])) { echo $parse_array_customer['response']['customer']['country'];} else {echo '';}?>" style="width:235px;" />
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="zip">Zip Code</label>
                                 <div class="controls">
                                    <input type="text" id="zip" name="zip" value="<?php if(!empty($parse_array_customer['response']['customer']['postal_code'])) { echo $parse_array_customer['response']['customer']['postal_code'];} else {echo '';}?>" style="width:235px;" />
                                 </div>
                              </div>
                              <?php 
							  	$data['API'] = 1.5;
								$data['user_api_key'] =  $GLOBALS['api_key'];
								$data['type'] = 'manage_fields';
								$data['action'] = 'list';
								$fields_contents	=	 submit_cURL ($data);
				
								$parse_array_fields = array();
								$parse_array_fields = xml2array($fields_contents, $get_attributes=1, $priority = 'tag');
								$count = substr($parse_array_fields['response']['account']['fields']['field'][0]['name'],-1);
								//$parse_array_fields['response']['account']['fields']['field'][1]['name'];
								//echo $count;
							    if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array)
									{
										if($p_array['show'] == 'Y' && (substr($p_array['name'], 0, -1) == 'custom_field_' || substr($p_array['name'], 0, -1) == 'custom_field_1' || substr($p_array['name'], 0, -1) == 'custom_field_2' || substr($p_array['name'], 0, -1) == 'custom_field_3' || substr($p_array['name'], 0, -1) == 'custom_field_4' || substr($p_array['name'], 0, -1) == 'custom_field_5' || substr($p_array['name'], 0, -1) == 'custom_field_6' || substr($p_array['name'], 0, -1) == 'custom_field_7' || substr($p_array['name'], 0, -1) == 'custom_field_8' || substr($p_array['name'], 0, -1) == 'custom_field_9')) 
										{
											//print_r($p_array);
											//echo $parse_array_customer['response']['customer'][$p_array['name']]['data'];
											
							   ?>
                                          <div class="control-group">
                                             <label class="control-label" for="<?php echo $p_array['name'];?>"><?php echo $p_array['label'];?></label>
                                             <div class="controls">
                                             <?php if($p_array['name'] == 'custom_field_1') { ?>
                                             	<input type="text" id="custom_field" name="custom_field" value="<?php if(!empty($parse_array_customer['response']['customer']['custom_field'])) { echo $parse_array_customer['response']['customer']['custom_field'];} else {echo '';}?>" style="width:235px;" />
                                                <?php } ?>
                                             <?php
											 
											  if($p_array['type'] == 'List') { ?>
                                              

                                                <?php $count1 = 0; $arr_data = explode(',',$parse_array_customer['response']['customer'][$p_array['name']]['data']); 
												
												if(!empty($p_array['choices']['choice'])){if($p_array['choices']['choice'][0]==''){echo $p_array['choices']['choice'];}else {foreach($p_array['choices']['choice'] as $choices){  
												
												
													
												
												?>	
                                                			
                               <input type="checkbox" id="check_<?php echo $count1;?>" name="<?php echo $p_array['name'].'[]';?>" value="<?php echo $choices;?>" <?=(trim($arr_data[$count1]) == $choices)?'checked="checked"':''; ?> /><?php echo $choices;?>
										
									<? $count1++;}}}  ?>
                                                <?php } else if($p_array['type'] == 'Pick'){ ?>
										<select name="<?php echo $p_array['name'];?>" id="<?php echo $p_array['name'];?>"><option value="">Select Option</option><?php if(!empty($p_array['choices']['choice'])){if($p_array['choices']['choice'][0]==''){echo $p_array['choices']['choice'];}else {foreach($p_array['choices']['choice'] as $choices){?>
										
										<option value="<?php echo $choices;?>" <?php  if($parse_array_customer['response']['customer'][$p_array['name']]['data'] == $choices){?> selected="selected" <?php } ?> ><?php echo $choices;?></option>
									<?	} }} ?></select>												<?php }else if($p_array['name'] != 'custom_field_1') { ?>
                                                <input type="text" id="<?php echo $p_array['name'];?>" name="<?php echo $p_array['name'];?>" value="<?php if(!empty($parse_array_customer['response']['customer'][$p_array['name']]['data'])){ echo $parse_array_customer['response']['customer'][$p_array['name']]['data'];}else {echo '';}?>" style="width:235px;" />
                                                <?php } ?>
                                             </div>
                                          </div>
                                          
                                          
                                          <?php $count++; }}}?>
                                          
                                          
                              
                              
                              <h5>Add Customer to Other Campaigns</h5>
                              
                              <div class="control-group">
                                       <div class="controls">
                                       <?php
									  
									   		
									   		$data['type'] = 'campaigns_list';
											$campaign_list_contents	=	 submit_cURL ($data);
											$parse_array_campaign_list = array();
											$parse_array_campaign_list = xml2array($campaign_list_contents, $get_attributes=1, $priority = 'tag');
											//print_r($parse_array_campaign_list);
											if(count($parse_array_campaign_list['response']['campaign'])!=0)
											{
												
                                            //is_array($parse_array_customer_list['response']['customer']) ? 'Array' : 'not an Array';
											if($parse_array_campaign_list['response']['campaign'][0] == '')
											{
									    ?>
                                              <label class="checkbox line">
                                              <input type="checkbox" name="camp[]" id="check1" value="<?php echo $parse_array_campaign_list['response']['campaign']['id'];?>" <?php if($parse_array_customer['campaigns']['campaign']['id'] == $parse_array_campaign_list['response']['campaign']['id']){ ?> checked="checked" <?php } ?> /><?php echo $parse_array_campaign_list['response']['campaign']['name'];?>
                                              </label>
                                              <?php }
											  else
											  {
												foreach($parse_array_campaign_list['response']['campaign'] as $campaign)
												{  
												?>
                                                <label class="checkbox line">
                                              <input type="checkbox" name="camp[]" id="check1" value="<?php echo $campaign['id'];?>" <?php if($parse_array_customer['campaigns']['campaign']['id'] == $campaign['id']){ ?> checked="checked" <?php } ?> /><?php echo $campaign['name'];?>
                                              </label>
											  <?php }}
											  
											  }?>
                                          
                                       </div>
                                    </div>
                             
                              
                              <div class="form-actions">
                                 <button type="button" class="btn btn-info" onclick="submit_form3()">Update</button>
                                 <button type="button" class="btn" onclick="resetme_customer()">Cancel</button>
                              </div>
                              </form>
                              
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