<?php include('include/header.php');
/*$select_user_info = "Select * from tbl_marchent where username='".$data['user_name']."'";
$result = mysql_query($select_user_info);
$row = mysql_fetch_array($result);*/ ?>	
<!-- BEGIN HEADER -->
		<!-- BEGIN SIDEBAR -->
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
			<!-- END PAGE HEADER-->
			<?php include('include/small_header.php'); ?>
			<!-- BEGIN PAGE CONTENT-->
				 <div class="row-fluid"> <div class="span2 responsive" style="margin-top:5px; padding-bottom:20px; width:115px;">
                        <button class="btn btn-success" onclick="window.location.href='add_new_customer.php'"><i class="icon-plus icon-white"></i> Quick Add</button>
                        
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
						<div class="span8">
                        	<div class="widget">
                            	<div class="widget-title"><h4><i class="icon-group"></i>  Most Active Customers</h4>
                                <span class="tools">								
							
							</span>		</div>
                                <div class="widget-body">
                                <table class="table table-bordered table-hover">
										<thead>
											<tr>
												<th style="width:100px;">Card Number</th>
												<th>Name</th>
												<th style="width:150px;">Total Number of Visits</th>
												<th style="width:35px;">Detail</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>John Smith</td>
												<td class="hidden-phone">150</td>
												<td><a href="manage_customer_transactions2.php"><span class="label label-success">View</span></a></td>
											</tr>
											<tr>
												<td>2</td>
												<td>John Doe</td>
												<td class="hidden-phone">100</td>
												<td><a href="manage_customer_transactions2.html"><span class="label label-success">View</span></a></td>
											</tr>
											<tr>
												<td>3</td>
												<td>Larry Smith</td>
												<td class="hidden-phone">95</td>
												<td><a href="manage_customer_transactions2.html"><span class="label label-success">View</span></a></td>
											</tr>
											<tr>
												<td>3</td>
												<td>Sandy Smith</td>
												<td class="hidden-phone">70</td>
												<td><a href="manage_customer_transactions2.html"><span class="label label-success">View</span></a></td>
											</tr>
                                            
                                            <tr>
												<td>4</td>
												<td>Jane Smith</td>
												<td class="hidden-phone">65</td>
												<td><a href="manage_customer_transactions2.html"><span class="label label-success">View</span></a></td>
											</tr>
                                            
                                            <tr>
												<td>5</td>
												<td>Frank Smith</td>
												<td class="hidden-phone">40</td>
												<td><a href="manage_customer_transactions2.html"><span class="label label-success">View</span></a></td>
											</tr>
                                            
                                           
										</tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                        
                       <div class="span4">
                        	 <div class="row-fluid">
                          <div class="span12 responsive" data-tablet="span12" data-desktop="span12">
							<div class="stats-overview block clearfix">
								
								<div class="details">
									<div class="title" style="text-align:center;"><span style="font-size:14px;">Total Number of Customers</span></div>
									<div class="numbers good" style="text-align:center; padding-top:13px; padding-bottom:13px;"><span style="font-size:24px; " class="text-success">1360</span></div>
								</div>
								
							</div>
						</div>
                        </div>
                        
                        <div class="row-fluid">
                          <div class="span12 responsive" data-tablet="span12" data-desktop="span12">
							<div class="stats-overview block clearfix">
								<div class="details">
									<div class="title" style="text-align:center;"><span style="font-size:14px;">Total Active Campaigns</span></div>
									<div class="numbers good" style="text-align:center; padding-top:13px; padding-bottom:13px;"><span style="font-size:24px; " class="text-success">2</span></div>
								</div>
							</div>
						</div>
                        </div>
                        
                        <div class="row-fluid">
                          <div class="span12 responsive" data-tablet="span12" data-desktop="span12">
							<div class="stats-overview block clearfix">
								<div class="display stat good huge">
									<div class="percent">+25%</div>
								</div>
								<div class="details">
									<div class="title">Total Transactions this Month</div>
									<div class="numbers">360</div>
								</div>
								<div class="progress progress-info">
									<div class="bar" style="width: 25%"></div>
								</div>
							</div>
						</div>
                        </div>
                        
                        
                        <div class="row-fluid">
						<div class="span12 responsive" data-tablet="span12" data-desktop="span12">
							<div class="stats-overview block clearfix">
								<div class="display stat good huge">
									<div class="percent">+16%</div>
								</div>
								<div class="details">
									<div class="title">New Customers this Month</div>
									<div class="numbers">80</div>
									<div class="progress progress-info">
										<div class="bar" style="width: 16%"></div>
									</div>
								</div>
							</div>
					</div>
                        </div>
                        
                   </div>
               
                <div class="row-fluid">
                	<div class="span8">
					<!-- BEGIN BASIC CHART PORTLET-->
					<div class="widget">
						<div class="widget-title">
							<h4><i class="icon-bar-chart"></i>  Program Activity</h4>
							<span class="tools">								
							
							</span>							
						</div>
						<div class="widget-body">
							<div id="chart_1" class="chart"></div>
						</div>
					</div>
					<!-- END BASIC CHART PORTLET-->
					</div>
                    
                    <div class="span4">
                    	<!-- BEGIN NOTIFICATIONS PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-bullhorn"></i>  Notifications</h4>
									<span class="tools">
									
									</span>							
								</div>
								<div class="widget-body">
									<ul class="item-list scroller padding" data-height="307" data-always-visible="1">
										<li>
											<span class="label label-success"><i class="icon-plus"></i></span>
											<span>New Customer Registered: John Doe</span>
											<span class="small italic">Just now</span>
										</li>
										<li>
											<span class="label label-success"><i class="icon-plus"></i></span>
											<span>New Customer Registered: Jane Doe</span>
											<span class="small italic">15 mins ago</span>
										</li>
										<li>
											<span class="label label-success"><i class="icon-plus"></i></span>
											<span>New Customer Registered: Frank Smith</span>
											<span class="small italic">2 hrs ago</span>
										</li>
										<li>
											<span class="label label-important"><i class="icon-coffee"></i></span>
											<span>Reward Redeemed: Buy 4 Get 1 Free</span>
											<span class="small italic">11 hrs ago</span>
										</li>
										<li>
											<span class="label label-important"><i class="icon-coffee"></i></span>
											<span>Reward Redeemed: Coffee Perks Reward</span>
											<span class="small italic">14 hrs ago</span>
										</li>
										<li>
											<span class="label label-info"><i class="icon-calendar"></i></span>
											<span>Customer Birthday: John Smith</span>
											<span class="small italic">15 hrs ago</span>										
										</li>
										<li>
											<span class="label label-info"><i class="icon-calendar"></i></span>
											<span>Customer Birthday: Jane Smith</span>
											<span class="small italic">15 hrs ago</span>
										</li>
										<li>
											<span class="label label-success"><i class="icon-plus"></i></span>
											<span>Customer Registered: Dan Brown</span>
											<span class="small italic">2 days ago</span>
										</li>
										
									
									</ul>
									<div class="space5"></div>
									<a href="#" class="pull-right">View all notifications</a>										
									<div class="clearfix no-top-space no-bottom-space"></div>
								</div>
							</div>
							<!-- END NOTIFICATIONS PORTLET-->
                    </div>
                    
                    <div class="row-fluid">
                    </div>
                    
					</div>
					
					
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- BEGIN PAGE CONTAINER-->		
		</div>
		<!-- END PAGE -->	
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php include('include/footer.php') ;?>