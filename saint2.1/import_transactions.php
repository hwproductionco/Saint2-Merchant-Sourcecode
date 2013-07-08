<?php include('include/header.php');
/*$select_user_info = "Select * from tbl_marchent where username='".$data['user_name']."'";
$result = mysql_query($select_user_info);
$row = mysql_fetch_array($result);*/ ?>

	<!-- BEGIN HEADER -->
	<?php include('include/menu.php');?>
    <!-- END HEADER -->
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
               
			<div id="page" class="dashboard">  
               
                </div> 
<div class="row-fluid"> <div class="span2 responsive" style="margin-top:5px; padding-bottom:20px; width:115px;">
                        <?php if($parse_array_user_info['response']['user']['user_permissions']['add_customer'] == 'Yes') { ?><button class="btn btn-success" onclick="window.location.href='add_new_customer.php'"><i class="icon-plus icon-white"></i> Quick <?php echo $lang['nav_add'];?></button><?php } ?>
                        
                        </div>

               
                <div class="span8 responsive" style="padding-bottom: 20px; padding-right: 20px; text-align:left;">
                <!-- BEGIN QUICK SEARCH FORM -->
                
					<form class="navbar-search" id="search_form" style="width:100% !important;" action="manage_customers.php" method="post">
						<div class="search-input-icon" style="width:100%; ">
                        <input type="hidden" name="cust_value1" value="" id="cust_value"/>
							<input type="text" class="search-query dropdown-toggle" id="quick_search" name="search" placeholder="Customer Search" data-toggle="dropdown"  style="width:80% !important;" /><i class="icon-search" onclick="submit_search_form()"></i>
							<!-- BEGIN QUICK SEARCH RESULT PREVIEW -->
                            <?php $data['type'] = 'customer_find';
								$customer_list_contents	=	 submit_cURL ($data);
											$parse_array_customer_list = array();
											$parse_array_customer_list = xml2array($customer_list_contents, $get_attributes=1, $priority = 'tag');
									?>	
							<ul class="dropdown-menu extended">								
								<li>
									<span class="arrow"></span>
									<p>Found <?php echo count($parse_array_customer_list['response']['customer']);?> results</p>
								</li>
								<li>
									<a href="customer_search.php"><i class="icon-search"></i>  Advance Search</a>
								</li>
                                <?php 	
											//echo count($parse_array_customer_list['response']['customer']);
											
											if(!empty($parse_array_customer_list['response']['customer']))
											{
												if(empty($parse_array_customer_list['response']['customer'][0]))
												{
													
								
								?>
                                <li style="text-align:left;">
									<a href="#" onclick="search_form1('<?php if(!empty($parse_array_customer_list['response']['customer']['first_name'])){ echo $parse_array_customer_list['response']['customer']['first_name'].' '.$parse_array_customer_list['response']['customer']['last_name'];} else {echo '';}?>')">
									<span class="label label-success"><i class="icon-user"></i></span>
									<?php if(!empty($parse_array_customer_list['response']['customer']['first_name'])){ echo $parse_array_customer_list['response']['customer']['first_name'].' '.$parse_array_customer_list['response']['customer']['last_name'];} else {echo '';}?><i class="icon icon-arrow-right"></i>
									</a>
								</li>
                                <?php } else {
                                            //is_array($parse_array_customer_list['response']['customer']) ? 'Array' : 'not an Array';
											$customer_count = 0;
											
											foreach($parse_array_customer_list['response']['customer'] as $customers)
											{
												if($customer_count < 10)
												{
												 //print_r($parse_array_customer);
												
												$customers;
												//echo is_array($customers) ? 'Array' : 'not an Array';
												
												
												?>
                                                <li style="text-align:left;">
									<a href="#" onclick="search_form1('<?php if(!empty($customers['first_name'])){ echo $customers['first_name'].' '.$customers['last_name'];} else {echo '';}?>')">
									<span class="label label-success"><i class="icon-user"></i></span>
									<?php if(!empty($customers['first_name'])){ echo $customers['first_name'].' '.$customers['last_name'];} else {echo '';}?><i class="icon icon-arrow-right"></i>
									</a>
								</li>
                                			<?php
											}
											$customer_count ++;
											}}} ?>
								
								
							</ul>
							<!-- END QUICK SEARCH RESULT PREVIEW -->
						</div>
					</form>
                    <br /><br />
					<!-- END QUICK SEARCH FORM -->
                    </div>
                    
                    	
                    
                    </div>
<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-bar-chart"></i>  Import Transactions</h4>
															
								</div>
								<div class="widget-body">
                                <div class="row-fluid">
                                <div class="span12">
                                <?php if(isset($_GET['msg'])){
										if( $_GET['msg'] == '"Transactions Imported Successfully"')
										{
										?>
                                        <label style="color:#060"><?php echo $_GET['msg'];?></label>
										<?php }
										else
										{ ?>
                                        <label style="color:#F00"><?php echo $_GET['msg'];?></label>
                                        <?php }} ?>	
                                <h5><?php echo $lang['instructions'];?></h5>
                                
                                <?php echo $lang['manage_import_trans_instrctns'];?>
                                <!-- BEGIN FORM -->
                              
                             
                              <form class="form-horizontal" id="import_cust" action="import_trns.php" method="post">
                              <h5 style="padding-top:15px;"><?php echo $lang['manage_import_field_delimiter'];?></h5>
                              <form class="form-inline">
                                    <label class="radio">
                                    <input type="radio" name="delim" id="optionsRadios1" value="comma" />
                                    Comma
                                    </label>
                                    <label class="radio">
                                    <input type="radio" name="delim" id="optionsRadios2" value="pipe" />
                                    Pipe
                                    </label>  
                                    <label class="radio">
                                    <input type="radio" name="delim" id="optionsRadios3" value="tab" />
                                    Tab
                                    </label>  
                              
                              
                              
                              <h5 style="padding-top:5px;"><?php echo $lang['manage_import_field_order'];?></h5>
                              
                              <!--input type="hidden" name="count" value="1" />
<div class="control-group" id="fields">
           <div class="controls" id="profs"> 
             <div class="input-append">
              1. <select class="span6" data-placeholder="Choose a Category" tabindex="1">
                                       <option value="">Choose One</option>
                                       <option value="None">None</option>
                                       <option value="Code">Code</option>
                                       <option value="Card Number">Card Number</option>
                                       <option value="First Name">First Name</option>
                                       <option value="Last Name">Last Name</option>
                                       <option value="Email">Email</option>
                                       <option value="Phone">Phone</option>
                                       <option value="Custom Date">Custom Date</option>
                                       <option value="Street 1">Street 1</option>
                                       <option value="Street 2">Street 2</option>
                                       <option value="City">City</option>
                                       <option value="State">State</option>
                                       <option value="Postal Code">Postal Code</option>
                                       <option value="Country">Country</option>
                                       <option value="Custom Field">Custom Field</option>
                                       <option value="Customer Username">Customer Username</option>
                                       <option value="Customer Password">Customer Password</option>
                                       <option value="Customer Pin">Customer PIN</option>
                                       <option value="Auto Add">Auto Add</option>
                                    </select><button id="b1" onClick="addFormField()" class="btn btn-info" type="button">+</button>
             </div>
           </div>
         </div-->
                              
 <?php $rand = rand(); ?>                               
                              <!--<input type="hidden" name="camp_id" id="camp_id" value="1" />-->
                               <input type="hidden" name="email" id="email" value="" />
                              <div id="parent">
<div class="control-group" id="field<?php echo $rand;?>">
           <div class="controls" id="profs"> 
             <div class="input">
             

              <select class="span6" name="cust_field[]" id="cust_field<?php echo $rand;?>" data-placeholder="Choose a Category" tabindex="1">
                                       <option value="">Choose a Field</option>
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
                                      
                                    </select><span id="hid<?php echo $rand;?>"><img src="assets/img/clearpix.png" width="15" height="5" /><button id="b1" onclick="add_field_import(<?php echo $rand;?>)" class="btn btn-info" type="button" style="position:relative; top:-5px;">+</button></span>
             </div>
           </div>
         </div>
                              </div>
                              
                              
                              <h5 style="padding-top:5px;"><?php echo $lang['label_Select'].' '.$lang['Campaign'];?></h5>
                               <div class="control-group">
                                 <div class="controls">
                                     <select class="span6" name="camp_id"  data-placeholder="Choose a Category" tabindex="2">
                                      <option value="">Choose a campaign</option>               
                  <?php 
									$data['type'] = 'campaigns_list';
									$campaigns	=	 submit_cURL ($data);

									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
									//print_r($parse_campaigns_array);
											if(!empty($parse_campaigns_array['response']['campaign']))
	   										{
		  
		   										if(empty($parse_campaigns_array['response']['campaign'][0]))
		   										{
												
										?>
                  
                   
									  
                  <option value="<?php echo $parse_campaigns_array['response']['campaign']['id'];?>"><?php echo $parse_campaigns_array['response']['campaign']['name'];?></option>
                   <?php }
									else
									{
										foreach($parse_campaigns_array['response']['campaign'] as $campaign)
										{
											?>
                                             
                   
									  
                  <option value="<?php echo $campaign['id'];?>"><?php echo $campaign['name'];?></option>
                  <?php }}} ?>
                  </select>
                                 </div>
                              </div>                           
                              <div class="control-group">
                                 <br /><br />
                                 <label class="control-label" for="inputRemarks"><strong><?php echo $lang['manage_import_paste_trans'];?></strong></label>
                                 <div class="controls">
                                    <textarea class="span6" name="info" rows="3" id="inputRemarks"></textarea>
                                 </div>
                              </div>
                              
                               <div class="controls">
                                    <label class="checkbox">
                                    <input type="checkbox" value="" /> Convert transaction amount into what the campaign tracks?
                                    </label>
                                     <label class="checkbox" id="email_check">
                                    	<input type="checkbox" id="email_check1" value="" /> Send Email?
                                    </label>
                                 </div>
                              
                            
                              <div class="form-actions" style="padding-top:35px;">
                                 <button type="submit" class="btn btn-inverse"><i class="icon-cloud-upload"></i> Upload</button>
                                 <button type="button" class="btn"><i class="icon-ban-circle"></i> Reset</button>
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