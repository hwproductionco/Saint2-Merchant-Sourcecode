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
               
                </div><div class="row-fluid"> <div class="span2 responsive" style="margin-top:5px; padding-bottom:20px; width:115px;">
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
									<h4><i class="icon-group"></i> View <?php echo $lang['All'];?> Customers</h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
                                
                              <span class="visible-phone space10"></span>
                              
                              <table class="table table-striped table-hover" id="manage_cust">
										<thead>
											<tr>
												<th style="width:8px"><input type="checkbox" class="group-checkable" data-set=".checkboxes" /></th>
												<th>Card Number</th>
												<th class="hidden-phone"><?php echo $lang['label_first_name'];?></th>
												<th class="hidden-phone"><?php echo $lang['label_last_name'];?></th>
												<th class="hidden-phone"><?php echo $lang['label_email'];?></th>
                                                <th class="hidden-phone"><?php echo $lang['label_phone'];?></th>
												<th class=""><?php echo $lang['customer_activity_print_short'].' '.$lang['Date'];?></th>
												
											</tr>
										</thead>
										<tbody>
                                        <?php 
										$keys = array();
										$str = '';
										$keys = array_keys($_POST);
											$data['type'] = 'customer_find';
											for($i=0;$i<count($keys);$i++)
											{
												if(substr($keys[$i],0, 10) == 'cust_value')
												{
													$str  .= ','.$_POST[$keys[$i]];
												}
												
											}
											if(isset($_POST['search']) && $_POST['search']!='')
											{
												$str = '';
												$str = ','.$_POST['search'];	
											}
											
											$data['find_customer'] = substr($str,1);
										    //var_dump($data);
											$customer_list_contents	=	 submit_cURL ($data);
											$parse_array_customer_list = array();
											$parse_array_customer_list = xml2array($customer_list_contents, $get_attributes=1, $priority = 'tag');
											//print_r($parse_array_customer_list['response']['customer']);
											//echo count($parse_array_customer_list['response']['customer']);
											$count = count($parse_array_customer_list['response']);
											if(count($parse_array_customer_list['response']['customer'])!=0)
											{
												
                                            //is_array($parse_array_customer_list['response']['customer']) ? 'Array' : 'not an Array';
											if(empty($parse_array_customer_list['response']['customer'][0]))
											{ 
											
											?>
												<tr class="odd gradeX">
                                            <td><input type="checkbox" class="checkboxes" name="case[]" value="<?php if(!empty($parse_array_customer_list['response']['customer']['code'])){ echo $parse_array_customer_list['response']['customer']['code'];} else { echo '';}?>" /></td>
												<td><a href="manage_customer_transactions2.php?card_number=<?php   if(!empty($parse_array_customer_list['response']['customer'])){ echo $parse_array_customer_list['response']['customer']['card_number'];} else {echo '';}?>"><?php if(!empty($parse_array_customer_list['response']['customer']['card_number'])){ echo $parse_array_customer_list['response']['customer']['card_number'];} else {echo '';}?></a></td>
												<td><?php if(!empty($parse_array_customer_list['response']['customer']['first_name'])){ echo $parse_array_customer_list['response']['customer']['first_name'];} else {echo '';}?></td>
												<td class="hidden-phone"><?php if(!empty($parse_array_customer_list['response']['customer']['last_name'])){ echo $parse_array_customer_list['response']['customer']['last_name'];} else {echo '';}?></td>
												<td class="hidden-phone"><?php if(!empty($parse_array_customer_list['response']['customer']['email'])){ echo $customers['email'];} else {echo '';}?></td>
												<td class="center"><?php if(!empty($parse_array_customer_list['response']['customer']['phone'])){ echo $parse_array_customer_list['response']['customer']['phone'];} else {echo '';}?></td><td class="center"></td>
                                                 
												
												
												
											</tr>
                                            <?
											}
											else {
											foreach($parse_array_customer_list['response']['customer'] as $customers)
											{
												
												$customers;
												//echo is_array($customers) ? 'Array' : 'not an Array';
												
												
												?>	
											
											<tr class="odd gradeX">
                                            <td><input type="checkbox" class="checkboxes" name="case[]" value="<?php if(!empty($customers['code'])){ echo $customers['code'];} else { echo '';}?>" /></td>
												<td><a href="manage_customer_transactions2.php?card_number=<?php   if(!empty($customers['card_number'])){ echo $customers['card_number'];} else {echo '';}?>"><?php if(!empty($customers['card_number'])){ echo $customers['card_number'];} else {echo '';}?></a></td>
												<td><?php if(!empty($customers['first_name'])){ echo $customers['first_name'];} else {echo '';}?></td>
												<td class="hidden-phone"><?php if(!empty($customers['last_name'])){ echo $customers['last_name'];} else {echo '';}?></td>
												<td class="hidden-phone"><?php if(!empty($customers['email'])){ echo $customers['email'];} else {echo '';}?></td>
												<td class="center"><?php if(!empty($customers['phone'])){ echo $customers['phone'];} else {echo '';}?></td><td class="center"></td>
                                                 
												
												
												
											</tr>
											<?php }}} ?>
										</tbody>
									</table>
                              
                              
									
                                    
                                      <div class="btn-group" style="margin-top:15px;">
                                 <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"  style="width:100%;">Action <span class="caret"></span></button>
                                 <ul class="dropdown-menu">
                                    <li><a href="#myModal1" data-toggle="modal"><i class="icon-trash"></i> <?php echo $lang['nav_delete'];?></a></li>
                                   
                                    
                                 </ul>
                              </div>
                              
                              
                               <div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel2"><?php echo $lang['nav_delete'];?></h3>
										</div>
										<div class="modal-body scroller">
											<p>You are about to delete these users.  Are you sure you want to continue?</p>


										</div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo $lang['nav_cancel'];?></button>
											<button class="btn btn-primary" onclick="get_checked(1)">Continue</button>
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