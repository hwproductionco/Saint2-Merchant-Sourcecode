<?php include('include/header.php');
$str = '';
 ?>

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
                     Campaigns
                     <small>form controls, components, pickers and more</small>
						</h3-->
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> <span class="divider">/</span>
                     </li>
                     <li class="responsive"><a href="#">Campaigns</a></li>	<br /><br />
                     
                       <div class="row-fluid"> <div class="span2 responsive" style="margin-top:5px; padding-bottom:20px; width:115px;">
                        <?php if($parse_array_user_info['response']['user']['user_permissions']['add_customer'] == 'Yes') { ?><button class="btn btn-success" onclick="window.location.href='add_new_customer.php'"><i class="icon-plus icon-white"></i> Quick Add</button><?php } ?>
                        
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
												
											foreach($parse_array_customer_list['response']['customer'] as $customers)
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
											}}} ?>
								
								
							</ul>
							<!-- END QUICK SEARCH RESULT PREVIEW -->
						</div>
					</form>
                    <br /><br />
					<!-- END QUICK SEARCH FORM -->
                    </div>
                    
                    	
                    
                    </div>
                    </ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div id="page">
            
            
            
            <div class="row-fluid">
            	<div class="span12">
                	
                    <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-user"></i>  Customer Information</h4>
                           <span class="tools">
                           </span>							
                        </div>
                        <div class="widget-body">
                        
                        <div class="row-fluid">
                        	<div class="span12">
                            <?php 
									$data['type'] = 'customer_info';
									$code = 0;
					if(isset($_GET['card_number']))
					{
					
						$data['card_number'] = $_GET['card_number'];
						$code = $_GET['card_number']; 
					}
					if(isset($_GET['code']))
					{
						$data['code'] = $_GET['code'];
						$code = $_GET['code'];
					}
									 $customer_contents	=	 submit_cURL ($data);
											$parse_array_customer = array();
											$parse_array_customer = xml2array($customer_contents, $get_attributes=1, $priority = 'tag');
											//$parse_array_customer
							 ?>
                            <div class="span2 responsive">
                            		<div><strong>Card Number:</strong><br /><?php if(!empty($parse_array_customer['response']['customer']['card_number'])) { echo $parse_array_customer['response']['customer']['card_number'];} else {echo '';}?></div>
                                    <div><strong>Customer Name:</strong><br /><?php if(!empty($parse_array_customer['response']['customer']['first_name'])&& empty($parse_array_customer['response']['customer']['last_name'])) { echo $parse_array_customer['response']['customer']['first_name'];} if(empty($parse_array_customer['response']['customer']['first_name']) && !empty($parse_array_customer['response']['customer']['last_name'])) {echo $parse_array_customer['response']['customer']['last_name'];} if(empty($parse_array_customer['response']['customer']['first_name']) && empty($parse_array_customer['response']['customer']['last_name'])){echo '';}if(!empty($parse_array_customer['response']['customer']['first_name']) && !empty($parse_array_customer['response']['customer']['last_name'])){echo $parse_array_customer['response']['customer']['first_name'].' '.$parse_array_customer['response']['customer']['last_name'];}?></div>
                            
                            </div>
                            
                            <div class="span3 responsive">
                            <div><strong>Email Address:</strong><br /><a href="<?php if(!empty($parse_array_customer['response']['customer']['email'])) { echo $parse_array_customer['response']['customer']['email'];} else {echo '';}?>"><?php if(!empty($parse_array_customer['response']['customer']['email'])) { echo $parse_array_customer['response']['customer']['email'];} else {echo '';}?></a></div>
                            <div><strong>Address:</strong><br /><?php if(!empty($parse_array_customer['response']['customer']['street1'])) { echo $parse_array_customer['response']['customer']['street1'];} else {echo '';}?><br /><?php if(!empty($parse_array_customer['response']['customer']['street2'])) { echo $parse_array_customer['response']['customer']['street2'];} else {echo '';}?></div>
                            
                            </div>
                            
                            <div class="span3 responsive">
                            	<div><strong>Phone:</strong><br /><?php if(!empty($parse_array_customer['response']['customer']['phone'])) { echo $parse_array_customer['response']['customer']['phone'];} else {echo '';}?></div>
                                <div><strong>Birthday:</strong><br /><?php if(!empty($parse_array_customer['response']['customer']['custom_date'])) { echo $parse_array_customer['response']['customer']['custom_date'];} else {echo '';}?></div>
                            
                            </div>
                            
                            <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_customer_info'] == 'Yes'){ ?><div class="span2 responsive" style="padding:0px; margin:0px; text-align:right;"><button type="button" class="btn btn-primary" onclick="window.location.href='manage_customers_edit.php?card_number=<?php if(!empty($parse_array_customer['response']['customer']['card_number'])) { echo $parse_array_customer['response']['customer']['card_number'];} else {echo '';}?>'">Edit Customer</button></div><?php } ?>
                        	
                        </div>
                        
                        </div>
                        
                        </div>
                
                
                </div>
            
            </div>
            
            
            
            
                <div class="row-fluid">
                  <div class="span12">
                     <!-- BEGIN SAMPLE FORM PORTLET-->	
                     <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-user"></i>  Manage Customer Transactions</h4>
                           <span class="tools">
                           </span>							
                        </div>
                        <div class="widget-body">
                        
                        <div class="row-fluid">
                            
                                    <div class="span12 responsive" >
                                   
                                  <div class="tabbable tabbable-custom tabs-left">
							  <ul class="nav nav-tabs tabs-left responsive">
                              <?php if(empty($parse_array_customer['response']['campaigns']['campaign'][0])){?>
                              <?php if($parse_array_customer['response']['campaigns']['campaign']['type'] == 'points'){
								  $camp_id = $parse_array_customer['response']['campaigns']['campaign']['id'];
								   ?>
							    <li class="active"><a href="#tabs5-pane1" data-toggle="tab"><h4><?php $parse_array_customer['response']['campaigns']['campaign']['balance'].' Points';?></h4><i class="icon-money"></i><?php echo $parse_array_customer['response']['campaigns']['campaign']['name'];?></a></li>
                                <?php } ?>
                                
                                <?php if($parse_array_customer['response']['campaigns']['campaign']['type'] == 'giftcard'){
									
									$camp_id = $parse_array_customer['response']['campaigns']['campaign']['id']; ?>
							    <li><a href="#tabs5-pane2" data-toggle="tab"><h4>$<?php $parse_array_customer['response']['campaigns']['campaign']['balance'];?></h4><i class="icon-credit-card"></i><?php echo $parse_array_customer['response']['campaigns']['campaign']['name'];?></a></li>
                                <?php } ?>
                                
                                <?php if($parse_array_customer['response']['campaigns']['campaign']['type'] == 'buyx'){
									$camp_id = $parse_array_customer['response']['campaigns']['campaign']['id']; ?>
							    <li><a href="#tabs5-pane3" data-toggle="tab"><h4><?php if(empty($parse_array_customer['response']['campaigns']['campaign']['item'][0])){ echo '1 Reward';} else { echo count($parse_array_customer['response']['campaigns']['campaign']['item']).' Rewards';} ?></h4><i class="icon-barcode"></i><?php echo $parse_array_customer['response']['campaigns']['campaign']['name'];?></a></li>
                                <?php } ?>
                                <?php if($parse_array_customer['response']['campaigns']['campaign']['type'] == 'earned'){
									$camp_id = $parse_array_customer['response']['campaigns']['campaign']['id']; ?>
                                <li><a href="#tabs5-pane4" data-toggle="tab"><h4><?php echo $camp['balance'];?></h4><i class="icon-barcode"></i><?php echo $parse_array_customer['response']['campaigns']['campaign']['name'];?></a></li>
                                <?php } ?>
                                <?php if($parse_array_customer['response']['campaigns']['campaign']['type'] == 'events'){
									$camp_id = $parse_array_customer['response']['campaigns']['campaign']['id']; ?>
                                <li><a href="#tabs5-pane5" data-toggle="tab"><h4>6</h4><i class="icon-barcode"></i><?php echo $parse_array_customer['response']['campaigns']['campaign']['name'];?></a></li>
                                <?php } } else{
									foreach($parse_array_customer['response']['campaigns']['campaign'] as $camp){
									 ?>
                                
                                
                              <?php if($camp['type'] == 'points'){
								  $camp_id = $camp['id']; ?>
							    <li class="active"><a href="#tabs5-pane1" data-toggle="tab"><h4><?php echo $camp['balance'].' Points';?></h4><i class="icon-money"></i><?php echo $camp['name'];?></a></li>
                                <?php } ?>
                                
                                <?php if($camp['type'] == 'giftcard'){
									
									$camp_id = $camp['id']; ?>
							    <li><a href="#tabs5-pane2" data-toggle="tab"><h4>$<?php echo $camp['balance'];?></h4><i class="icon-credit-card"></i><?php echo $camp['name'];?></a></li>
                                <?php } ?>
                                
                                <?php if($camp['type'] == 'buyx'){
									$camp_id = $camp['id']; ?>
							    <li><a href="#tabs5-pane3" data-toggle="tab"><h4><?php 
	    if(!empty($camp['balances']))
	   {
		   if(empty($camp['balances']['item'][0]))
		   
		   { echo '0 Reward';} else { $count =0; foreach($camp['balances']['item'] as $itm){$count++;} echo $count.' Rewards';}} ?></h4><i class="icon-barcode"></i><?php echo $camp['name'];?></a></li>
                                <?php } ?>
                                <?php if($camp['type'] == 'earned'){ 
								$camp_id = $camp['id'];
								?>
                                <li><a href="#tabs5-pane4" data-toggle="tab"><h4>$<?php echo $camp['balance'];?></h4><i class="icon-barcode"></i><?php echo $camp['name'];?></a></li>
                                <?php } ?>
                                <?php if($camp['type'] == 'events'){
									
									$camp_id = $camp['id']; ?>
                                <li><a href="#tabs5-pane5" data-toggle="tab"><h4><?php echo $camp['balance'];?></h4><i class="icon-barcode"></i><?php echo $camp['name'];?></a></li>
                                <?php } } }?>
							  </ul>
							  <div class="tab-content responsive" style="min-height:400px;">
							    <div id="tabs5-pane1" class="tab-pane active" style="height:auto;">
                              			<div class="row-fluid">
                                            <div class="span6 responsive">
                                            <h4 class="text-success">Add</h4>
                                            
                                             <form action="add_leads_points.php" class="form-horizontal" method="post">
                                             <table border="0" width="75%" style="margin-bottom:20px;">
                                             	<tbody>
                                                	<tr>
                                                    	<td><strong style="padding-right:5px;">Amount Spent</strong></td>
                                                        <td><div class="input-prepend input-append"><span class="add-on">$</span><input class="input-small responsive" id="input8" name="amount" type="text"  style="width:110px;"/><input type="hidden" value="<?php echo $code;?>" name="code" /><input type="hidden" value="1" name="redirect" /></td>
                                                   </tr>
                                                   <tr style="padding-top:3px;">
                                                   		<td style="padding-top:8px;"><strong style="padding-right:5px; positon:relative; top:-10px;" >Campaign</strong></td>
                                                        <td style="padding-top:8px;"><select data-placeholder="Choose One" name="camp" class="input-medium chosen responsive" multiple tabindex="6" >
                                       <option value=""></option>
                                       <optgroup label="Your Campaigns">
                                       <?php $data['type'] = 'campaigns_list';
									$campaigns	=	 submit_cURL ($data);

									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
									if(!empty($parse_campaigns_array['response']['campaigns']))
	   										{
		   
		   										if(empty($parse_campaigns_array['response']['campaigns']['campaign'][0]))
		   										{
											
									?>
                                          <option value="<?php echo $parse_campaigns_array['response']['campaigns']['campaign']['id'];?>"><?php echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];?></option>
                                          <?php }else{ 
										  foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $campaign)
												{
										  ?>
										   <option value="<?php echo $campaign['id'];?>"><?php echo $campaign['name'];?></option>
										   <?php }}} ?>
                                          </optgroup>
                     
                                    </select></td>
                                    </tr>
								<tr>
                                		<td style="padding-top:8px;"><strong style="padding-right:5px;">Description</strong></td>
                                        <td style="padding-top:8px;"><input type="text" id="input1" class="input-small responsive" name="desc" style="width:138px;" /></td>
                                </tr>
								
                                 <?php $data['type'] = 'transaction_fields';
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
						if($parse_array_trans_fields['response']['account']['fields']['field']['type']=='Pick' || $parse_array_trans_fields['response']['account']['fields']['field']['type'] == 'List')
										{
						
						?>
									<tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Custom Field</strong></td>
                                    <td style="padding-top:8px;"> <input type="text" id="input1" name="<?php echo $parse_array_trans_fields['response']['account']['fields']['field']['name'];?>" value="<?php if(!empty($parse_array_trans_fields['response']['account']['fields']['field']['choices'])){ if(empty($parse_array_trans_fields['response']['account']['fields']['field']['choices']['choice'][0])){ echo $parse_array_trans_fields['response']['account']['fields']['field']['choices']['choice'];}else { for($i=0;$i<count($parse_array_trans_fields['response']['account']['fields']['field']['choices']['choice']);$i++){$str .= ','.$parse_array_trans_fields['response']['account']['fields']['field']['choices']['choice'][$i]; }echo substr($str,1);}}?>" class="input-small responsive" style="width:138px;" readonly="readonly"/></td>
                                </tr>
                                <?php }
								else {
									?>
                                    <tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Custom Field</strong></td>
                                    <td style="padding-top:8px;"> <input type="text" id="input1" name="<?php echo $parse_array_trans_fields['response']['account']['fields']['field']['name'];?>" value="<?php echo $parse_array_trans_fields['response']['account']['fields']['field']['label'];?>" class="input-small responsive" style="width:138px;" readonly="readonly"/></td>
                                </tr>
								<?php }}}else{
									foreach($parse_array_trans_fields['response']['account']['fields']['field'] as $p_array)
									{
										//print_r($p_array);
										if($p_array['type']=='Pick' || $p_array['type']=='List')
										{
									 ?>
                                     <tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Custom Field</strong></td>
                                    <td style="padding-top:8px;"> <input type="text" id="input1" name="<?php echo $p_array['name'];?>" value="<?php if(!empty($p_array['choices'])){ if(empty($p_array['choices']['choice'][0])){ echo $p_array['choices']['choice'];}else { $str = ''; for($i=0;$i<count($p_array['choices']['choice']);$i++){
										$str .= ','.$p_array['choices']['choice'][$i]; //echo substr($str,1);
									}echo substr($str,1);}}?>" class="input-small responsive" style="width:138px;" readonly="readonly"/></td>
                                </tr>
                                <?php }
								else
								{?>
                               
								 <tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Custom Field</strong></td>
                                    <td style="padding-top:8px;"> <input type="text" id="input1" name="<?php echo $p_array['name'];?>" value="<?php echo $p_array['label'];?>" class="input-small responsive" style="width:138px;" readonly="readonly"/></td>
                                </tr>
								 <?php } }}} ?>
                                <tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Send Email</strong></td>
                                    <td style="padding-top:8px;"> <input type="checkbox" value="Y" name="email"/> Yes</td>
                                </tr>
                              </tbody>
                              </table>                              
                                
                                <div class="control-group">  
                                <div class="controls">  
                                    <button type="submit" class="btn btn-success">Record Points</button>
                                    </div>
                                    </div>
                                </form>
                                            
                                            </div>
                                            
                                            <div class="span6 responsive">
                                            <h4 class="text-error">Redeem</h4>
                                            <form action="redeem_rewards.php" class="form-horizontal" method="post">
                                            <input type="hidden" value="<?php echo $code;?>" name="code" />
                                            <input type="hidden" value="<?php echo $camp_id?>" name="camp_id" />
                                            
                                            
                                    <table border="0" width="75%" style="margin-bottom:20px;">
                                    	<tbody>
                                        
		   
       
                                        	<tr>
                                            	<td valign="top"><strong style="padding-right:5px;">Choose Reward</strong></td>
                                                <td>
												<?php
	    ?>
       <?php
	   if(empty($parse_array_customer['response']['campaigns']['campaign'][0]))
	   {
		   
	    if(!empty($parse_array_customer['response']['campaigns']['campaign']['available_rewards']))
	   {
		   if(empty($parse_array_customer['response']['campaigns']['campaign']['available_rewards']['reward'][0]))
		   {?>
                                                <label class="radio">
                                    <input type="radio" id="optionsRadios1" name="reward" value="<?php echo $parse_array_customer['response']['campaigns']['campaign']['available_rewards']['reward']['needed_to_redeem'];?>" />
                                    <?php echo $parse_array_customer['response']['campaigns']['campaign']['available_rewards']['reward']['description'];?>
                                    </label>
                                    <div class="clearfix"></div>
                                      
                                    
                           <?php }  else
	   {
		   foreach($parse_array_customer['response']['campaigns']['campaign']['available_rewards']['reward'] as $reward)
			{
		?>
        	<label class="radio">
                                    <input type="radio" id="optionsRadios1" name="reward" value="<?php echo $reward['needed_to_redeem'];?>" />
                                    <?php echo $reward['description'];?>
                                    </label>
                                    <div class="clearfix"></div>
                                      
                                    	
			<?php } }} }
			else{
				foreach($parse_array_customer['response']['campaigns']['campaign'] as $camps)
				{
				 if(!empty($camps['available_rewards']))
	   {
		   if(empty($camps['available_rewards']['reward'][0]))
		   {
			?>
             <label class="radio">
                                    <input type="radio" id="optionsRadios1" name="reward" value="<?php echo $camps['available_rewards']['reward']['needed_to_redeem'];?>" />
                                    <?php echo $camps['available_rewards']['reward']['available_rewards']['reward']['description'];?>
                                    </label>
                                    <div class="clearfix"></div>
            <?php }
			else
			{
				foreach($camps['available_rewards']['reward'] as $reward)
				{
					?>
                     <label class="radio">
                                    <input type="radio" id="optionsRadios1" name="reward" value="<?php echo $reward['needed_to_redeem'];?>" />
                                    <?php echo $reward['description'];?>
                                    </label>
                                    <div class="clearfix"></div>
			<?php }} }}} ?>
            </td>
                                    </tr>
                                    
                                    <tr>
                                    	<td style="padding-top:8px;"><strong style="padding-right: 5px;">Description</strong></td>
                                        <td style="padding-top:8px;"><input type="text" id="input1" name="desc" class="input-small" style="width:138px;"/></td>
                                    </tr>
                                    </tbody>
                                    </table>    
                                
                                <div class="control-group">  
                                <div class="controls">  
                                    <button type="submit" class="btn btn-danger">Redeem</button>
                                    </div>
                                    </div>
									</form>
                                            
                                            
                                            </div>
                                            
                                            
                                        
                                        
                                        </div>
                              		
							
                                  
							    </div>
							    <div id="tabs5-pane2" class="tab-pane">
                              			<div class="row-fluid">
                                            <div class="span6 responsive">
                                            <h4 class="text-success">Add</h4>
                                            
                                             <form action="add_giftcard_record.php" class="form-horizontal" method="post">
                                             <table border="0" width="75%" style="margin-bottom:20px;">
                                             	<tbody>
                                                	<tr>
                                                    	<td><strong style="padding-right:5px;">Add</strong></td>
                                                        <td><div class="input-prepend input-append"><span class="add-on">$</span><input class="input-small responsive" id="input8" type="text" name="amount"  style="width:110px;"/></td>
                                                   </tr>
                                
								<tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Authorization</strong></td>
                                    <td style="padding-top:8px;"> <input type="text" id="input1" name="desc" class="input-small responsive" style="width:138px;"/><input type="hidden" value="<?php echo $code;?>" name="code" />
                                            <input type="hidden" value="<?php echo $camp_id?>" name="camp_id" /></td>
                                </tr>
                                
                                <tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Send Email</strong></td>
                                    <td style="padding-top:8px;">  <label class="checkbox line">
                                          <input type="checkbox" value="Y" name="email" /> Yes
                                          </label></td>
                                </tr>
                              </tbody>
                              </table>                              
                                
                                <div class="control-group">  
                                <div class="controls">  
                                    <button type="submit" class="btn btn-success">Record Activity</button>
                                    </div>
                                    </div>
                                </form>
                                            
                                            </div>
                                            
                                            <div class="span6 responsive">
                                            <h4 class="text-error">Deduct</h4>
                                            <form action="redeem_rewards.php" class="form-horizontal" method="post">
                                   <table border="0" width="75%" style="margin-bottom:20px;">
                                             	<tbody>
                                                	<tr>
                                                    	<td><strong style="padding-right:5px;">Deduct</strong></td>
                                                        <td><div class="input-prepend input-append"><span class="add-on">$</span><input class="input-small responsive" id="input8" name="reward" type="text"  style="width:110px;"/>
                                                        <input type="hidden" value="<?php echo $code;?>" name="code" />
                                            <input type="hidden" value="<?php echo $camp_id?>" name="camp_id" /></td>
                                                   </tr>
                                
								<tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Authorization</strong></td>
                                    <td style="padding-top:8px;"> <input type="text" id="input1" class="input-small responsive" style="width:138px;"/></td>
                                </tr>
                              </tbody>
                              </table>                          
                                
                                <div class="control-group">  
                                <div class="controls">  
                                    <button type="submit" class="btn btn-danger">Deduct</button>
                                    </div>
                                    </div>
									</form>
                                            
                                            
                                            </div>
                                            
                                            
                                        
                                        
                                        </div>
                              		
                                        
									


							    </div>
							    <div id="tabs5-pane3" class="tab-pane">
									
                                    <div class="row-fluid">
                                    
                                    	
                                        
                                        <div class="span6" style="min-height:250px;"><h4 class="text-success">New Activity</h4>
                                        
                                        
                                        <form action="add_buyx_record.php" class="form-horizontal" method="post">
                                        <input type="hidden" value="<?php echo $code;?>" name="code" />
                                            <input type="hidden" value="<?php echo $camp_id?>" name="camp_id" />
                                             <table border="0" width="75%" style="margin-bottom:20px;">
                                             	<tbody>
                                                <?php // print_r($parse_array_customer['response']['campaigns']['campaign'][0]['balances']);//echo print_r($parse_array_customer['response']['campaigns']['campaign'][0]);?>
                                                <tr style="padding-bottom:10px;">
                                                	<td style="padding-bottom:10px;"><strong style="padding-right:5px;">Product or Service</strong></td>
                                                    
                                                    <td style="padding-bottom:10px;"><select class="input-medium responsive" data-placeholder="Choose a Category" name="service_product" tabindex="1">
                                       <option value=""></option>
                                       <?php 
												//print_r($parse_array_customer['response']['campaigns']['campaign'][0]['balances']);
													
												
													//print_r($parse_array_customer['response']['campaigns']['campaign'][0]['balances']);
if(empty($parse_array_customer['response']['campaigns']['campaign'][0]))
	   {
		   
	    if(!empty($parse_array_customer['response']['campaigns']['campaign']['balances']))
	   {
		   if(empty($parse_array_customer['response']['campaigns']['campaign']['balances']['item'][0]))
		   {													
													?>	
                                                    <option value="<?php echo $parse_array_customer['response']['campaigns']['campaign']['balances']['item']['item_id'];?>"><?php echo $parse_array_customer['response']['campaigns']['campaign']['item']['name'];?></option>
												<?php  }else {
													foreach($parse_array_customer['response']['campaigns']['campaign']['balances']['item'] as $item)
			{
														
													?>
                                                    <option value="<?php echo $item['item_id'];?>"><?php echo $item['name'];?></option>
													<?php }}}}else{
				foreach($parse_array_customer['response']['campaigns']['campaign'] as $camps)
				{
				 if(!empty($camps['balances']))
	   {
		   if(empty($camps['balances']['item'][0]))
		   {
	    								?>
                                        <option value="<?php echo $camps['balances']['item']['item_id'];?>"><?php echo $camps['balances']['item']['name'];?></option>
                                        <?php }else
										{
										foreach($camps['balances']['item'] as $itm1)
										{
										?>
                                         <option value="<?php echo $itm1['item_id'];?>"><?php echo $itm1['name'];?></option>
                                         <?php }}}}} ?>
                                    </select>
                                    </td>
                                                
                                                </tr>
                                                
                                                	<tr>
                                                    	<td><strong style="padding-right:5px;">Quantity to Add</strong></td>
                                                        <td><div class=""><input class="input-medium responsive" name="qty" id="input8" type="text"  /></td>
                                                   </tr>
                                
								<tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Description</strong></td>
                                    <td style="padding-top:8px;"> <input type="text" id="input1" name="desc" class="input-medium responsive" /></td>
                                </tr>
                                <tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Send Email</strong></td>
                                    <td style="padding-top:8px;">  <label class="checkbox line">
                                          <input type="checkbox" value="Y" name="email" /> Yes
                                          </label></td>
                                </tr>
                              </tbody>
                              </table>                              
                                
                                <div class="control-group">  
                                <div class="controls">  
                                    <button type="submit" class="btn btn-success">Record Activity</button>
                                    </div>
                                    </div>
                                </form>
                                        
                                        
                                        
                                        </div>
                                        
                                        <div class="span6" style="min-height:250px;"><h4 class="text-error">Rewards Table</h4>
                                        
                                        <p>Customer has accumulated enough activity for:</p>
                                        
                                        
                                        <form action="redeem_rewards.php" class="form-horizontal" method="post">
                                    <table border="0" width="75%" style="margin-bottom:20px;">
                                    	<tbody>
                                        	<tr>
                                            	<td valign="top"><strong style="padding-right:5px;">Choose Reward</strong></td>
                                                <td>
                                                <?php
		if(empty($parse_array_customer['response']['campaigns']['campaign'][0]))
	   {
		   
	    if(!empty($parse_array_customer['response']['campaigns']['campaign']['balances']))
	   {
		   if(empty($parse_array_customer['response']['campaigns']['campaign']['balances']['item'][0]))
		   {													
	
												 ?>
                                                <label class="radio">
                                    <input type="radio" name="reward" id="optionsRadios1" value="<?php echo $parse_array_customer['response']['campaigns']['campaign']['balances']['item']['balance'];?>"/>
                                    <?php echo $parse_array_customer['response']['campaigns']['campaign']['balances']['item']['name'].' (need '.$parse_array_customer['response']['campaigns']['campaign']['balances']['item']['earn_ratio'].')'; ?> 
                                    </label>
                                    <div class="clearfix"></div>
                                      <?php }
									  else {
													foreach($parse_array_customer['response']['campaigns']['campaign']['balances']['item'] as $item)
			{
														
													?>
                                                    <label class="radio">
                                    <input type="radio" name="reward" id="optionsRadios1" value="<?php echo $item['balance'];?>"/>
                                    <?php echo $item['name'].' (need '.$item['earn_ratio'].')'; ?> 
                                    </label>
                                    <div class="clearfix"></div>
									  
									  <?php }}}}else
									  
									  { foreach($parse_array_customer['response']['campaigns']['campaign'] as $camps)
				{
					
				 if(!empty($camps['balances']))
	   {
		   if(empty($camps['balances']['item'][0]))
		   {?>
           <label class="radio">
                                    <input type="radio" name="reward" id="optionsRadios1" value="<?php echo $camps['balances']['item']['balance'];?>"/>
                                    <?php echo $camps['balances']['item']['name'].' (need '.$camps['balances']['item']['earn_ratio'].')'; ?> 
                                    </label>
                                    <div class="clearfix"></div>
                                    
                                    <?php }
									else{
										foreach($camps['balances']['item'] as $itm1)
										{
										?>
									 <label class="radio">
                                    <input type="radio" name="reward" id="optionsRadios1" value="<?php echo $itm1['balance'];?>"/>
                                    <?php echo $itm1['name'].' (need '.$itm1['earn_ratio'].')'; ?> 
                                    </label>
                                    <div class="clearfix"></div>
									<?php }}}}}?>
                                    </td>
                                    </tr>
                                    
                                    <tr>
                                    	<td style="padding-top:8px;"><strong style="padding-right: 5px;">Description</strong></td>
                                        <td style="padding-top:8px;"><input type="text" id="input1" class="input-small" style="width:138px;"/></td><input type="hidden" value="<?php echo $code;?>" name="code" />
                                            <input type="hidden" value="<?php echo $camp_id?>" name="camp_id" />
                                        
                                    </tr>
                                    </tbody>
                                    </table>    
                                
                                <div class="control-group">  
                                <div class="controls">  
                                    <button type="submit" class="btn btn-danger">Redeem</button>
                                    </div>
                                    </div>
									</form>
                                        
                                        </div>
                                    
                                    
                                    
                                    </div>





							    </div>
                                
                                <div id="tabs5-pane4" class="tab-pane">
                                
                                <div class="row-fluid">
                                            <div class="span6 responsive">
                                            <h4 class="text-success">Add</h4>
                                            
                                             <form action="add_leads_points.php" class="form-horizontal" method="post">
                                             <table border="0" width="75%" style="margin-bottom:20px;">
                                             	<tbody>
                                                	
                                
								<tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Description</strong><br />(optional)</td>
                                    <td style="padding-top:8px;"> <input type="text" id="input1" class="input-small responsive" name="desc" style="width:138px;"/><input type="hidden" value="<?php echo $camp_id;?>" name="camp_id" /><input type="hidden" value="<?php echo $code;?>" name="code" /></td>
                                </tr>
                                <tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Send Email</strong></td>
                                    <td style="padding-top:8px;">  <label class="checkbox line">
                                          <input type="checkbox" value="Y" name="email" /> Yes
                                          </label></td>
                                </tr>
                              </tbody>
                              </table>                              
                                
                                <div class="control-group">  
                                <div class="controls">  
                                    <button type="submit" class="btn btn-success">Record Activity</button>
                                    </div>
                                    </div>
                                </form>
                                            
                                            </div>
                                            
                                            <div class="span6 responsive">
                                            <h4 class="text-error">Deduct</h4>
                                            <form action="redeem_rewards.php" class="form-horizontal" method="post">
                                   <table border="0" width="75%" style="margin-bottom:20px;">
                                             	<tbody>
                                                	<tr>
                                                    	<td><strong style="padding-right:5px;">Deduct</strong></td>
                                                        <td><div class="input-prepend input-append"><span class="add-on">$</span><input class="input-small responsive" id="input8" type="text" name="reward"  style="width:110px;"/></td>
                                                   </tr>
                                
								<tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Description</strong><br />(optional)</td>
                                    <td style="padding-top:8px;"> <input type="text" id="input1" class="input-small responsive" style="width:138px;"/><input type="hidden" value="<?php echo $camp_id;?>" name="camp_id" /><input type="hidden" value="<?php echo $code;?>" name="code" /></td>
                                </tr>
                              </tbody>
                              </table>                          
                                
                                <div class="control-group">  
                                <div class="controls">  
                                    <button type="submit" class="btn btn-danger">Deduct</button>
                                    </div>
                                    </div>
									</form>
                                            
                                            
                                            </div>
                                            
                                            
                                        
                                        
                                        </div>
                              		
                                
                                
                                </div>
                                
                                <div id="tabs5-pane5" class="tab-pane">
                                
                                <div class="row-fluid">
                                    
                                    	
                                        
                                        <div class="span6" style="min-height:250px;"><h4 class="text-success">New Activity</h4>
                                        
                                        
                                        <form action="add_leads_points.php" class="form-horizontal" method="post">
                                             <table border="0" width="75%" style="margin-bottom:20px;">
                                             	<tbody>
                                                	
                                
								<tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Description</strong><br />(optional)</td>
                                    <td style="padding-top:8px;"> <input type="text" id="input1" class="input-small responsive" name="desc" style="width:138px;"/><input type="hidden" value="<?php echo $camp_id;?>" name="camp_id" /><input type="hidden" value="<?php echo $code;?>" name="code" /></td>
                                </tr>
                                <tr>
                                	<td style="padding-top:8px;"><strong style="padding-right:5px;">Send Email</strong></td>
                                    <td style="padding-top:8px;">  <label class="checkbox line">
                                          <input type="checkbox" value="Y" name="email" /> Yes
                                          </label></td>
                                </tr>
                              </tbody>
                              </table>                              
                                
                                <div class="control-group">  
                                <div class="controls">  
                                    <button type="submit" class="btn btn-success">Record Activity</button>
                                    </div>
                                    </div>
                                </form>
                                        
                                        
                                        
                                        </div>
                                        
                                        <div class="span6" style="min-height:250px;"><h4 class="text-error">Rewards Available</h4>
                                        
                                        
                                        
                                        <form action="redeem_rewards.php" class="form-horizontal" method="post">
                                        <input type="hidden" value="<?php echo $camp_id;?>" name="camp_id" /><input type="hidden" value="<?php echo $code;?>" name="code" />
                                    <table border="0" width="75%" style="margin-bottom:20px;">
                                    	<tbody>
                                        
                                        <tr>
                                        
                                        	<td><strong>Need</strong></td>
                                            <td><strong>To Get</strong></td>
                                        
                                        </tr>
                                        <?php
	   if(empty($parse_array_customer['response']['campaigns']['campaign'][0]))
	   {
	    if(!empty($parse_array_customer['response']['campaigns']['campaign']['available_rewards']))
	   {
		   if(empty($parse_array_customer['response']['campaigns']['campaign']['available_rewards']['reward'][0]))
		   {?>
                                        	<tr>
                                            	
                                                <td><label class="radio">
                                    <input type="radio" id="optionsRadios1" name="reward" value="<?php echo $parse_array_customer['response']['campaigns']['campaign']['available_rewards']['reward']['needed_to_redeem'];?>" />
                                    <?php echo $parse_array_customer['response']['campaigns']['campaign']['available_rewards']['reward']['needed_to_redeem'];?>
                                    </label>
                                    
                                    </td>
                                    <td valign="top"><?php echo $parse_array_customer['response']['campaigns']['campaign']['available_rewards']['reward']['description'];?></td>
                                    </tr>
                                    <?php }}else{
										
										 foreach($parse_array_customer['response']['campaigns']['campaign']['available_rewards']['reward'] as $reward)
			{
				?>
                <tr>
                                            	
                                                <td><label class="radio">
                                    <input type="radio" name="reward" id="optionsRadios1" value="<?php echo $reward['needed_to_redeem'];?>" />
                                    <?php echo $reward['needed_to_redeem'];?>
                                    </label>
                                    
                                    </td>
                                    <td valign="top"><?php echo $reward['description'];?></td>
                                    </tr>
                
			<?php }}}
			else{
				foreach($parse_array_customer['response']['campaigns']['campaign'] as $camps)
				{
				 if(!empty($camps['available_rewards']))
	   {
		   if(empty($camps['available_rewards']['reward'][0]))
		   {
			?> 
                <tr>
                                            	
                                                <td><label class="radio">
                                    <input type="radio" name="reward" id="optionsRadios1" value="<?php echo $camps['available_rewards']['reward']['needed_to_redeem'];?>" />
                                    <?php echo $camps['available_rewards']['reward']['needed_to_redeem'];?>
                                    </label>
                                    
                                    </td>
                                    <td valign="top"><?php echo $camps['available_rewards']['reward']['description'];?></td>
                                    </tr>
                                    
            <?php }
			else
			{
				foreach($camps['available_rewards']['reward'] as $reward)
				{
					?>
                             <tr>
                                            	
                                                <td><label class="radio">
                                    <input type="radio"  name="reward" id="optionsRadios1" value="<?php echo $reward['needed_to_redeem'];?>" />
                                    <?php echo $reward['needed_to_redeem'];?>
                                    </label>
                                    
                                    </td>
                                    <td valign="top"><?php echo $reward['description'];?></td>
                                    </tr>        
                           <?php }} }}} ?>         
                                    <tr>
                                    	<td style="padding-top:8px;"><strong style="padding-right: 5px;">Description</strong><br />(optional)</td>
                                        <td style="padding-top:8px;"><input type="text" id="input1" class="input-small" style="width:138px;"/></td>
                                    </tr>
                                    </tbody>
                                    </table>    
                                
                                <div class="control-group">  
                                <div class="controls">  
                                    <button type="submit" class="btn btn-danger">Redeem</button>
                                    </div>
                                    </div>
									</form>
                                        
                                        </div>
                                
                                
                                </div>
							    
							  </div><!-- /.tab-content -->
							</div><!-- /.tabbable -->
                                   </div>
                                   
                                   
                                   <!--div class="span3">
                                   <h4>Customer Information</h4>
                                   
                                   <table border="0" width="100%">
                                   <tbody>
                                   	<tr>
                                    	<td><img src="assets/img/default_avatar.png" style="width:115px;" />
										</td>	
                                    
                                    </tr>
                                    
                                    <tr>
                                    	<td><button type="button" class="btn btn-primary" onclick="window.location.href='manage_customers_edit.html'">Edit Customer</button></td>
                                    </tr>
                                   
                                   
                                   </tbody>
                                   </table>
                                   
                                   
                                </div-->
                                
                                
                      
                                    
                                    <div class="row-fluid">
                                    <div class="span12">
                                    <br /><h4>Customer Activity</h4>
                                     <table class="table table-bordered table-hover" id="cust_trans">
										<thead>
											<tr>
												<th style="width:8px"><input type="checkbox" class="group-checkable" data-set=".checkboxes" /></th>
                                                <th>Campaign Name</th>
												<th>Date</th>
												<th>Activity</th>
												<th class="hidden-phone">Transaction</th>
												<th>Description</th>
                                                <th class="hidden-phone">Recorded By</th>
                                                <th class="hidden-phone">Trans ID</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="checkbox" class="checkboxes" name="case" value="1" /></td>
                                                <td>Bonus Points</td>
												<td>2012-12-15</td>
												<td>Points</td>
												<td class="hidden-phone">-</td>
												<td>Account Activated</td>
                                                <td class="hidden-phone">resort</td>
                                                <td class="hidden-phone">2291</td>
											</tr>
											<tr>
												<td><input type="checkbox" class="checkboxes" name="case" value="1" /></td>
                                                <td>Bonus Points</td>
												<td>2012-12-30</td>
												<td>Points</td>
												<td class="hidden-phone">-</td>
												<td>Refer A Friend - rbenzig@benzingtech.com</td>
                                                <td class="hidden-phone">resort</td>
                                                <td class="hidden-phone">2233</td>
											</tr>
                                            </tbody>
                                            </table>
                                            
                                             <div class="btn-group" style="margin-top:15px;">
                                 <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"  style="width:100%;">Action <span class="caret"></span></button>
                                 <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                   
                                    
                                 </ul>
                              </div>
                                            
                                            
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
   </div>   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <?php include('include/footer.php') ;?>