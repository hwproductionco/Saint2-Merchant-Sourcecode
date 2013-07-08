<?php include('include/header.php');
/*$select_user_info = "Select * from tbl_marchent where username='".$data['user_name']."'";
$result = mysql_query($select_user_info);
$row = mysql_fetch_array($result);*/ ?>
	<!-- BEGIN HEADER -->
		<!-- END SIDEBAR -->
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
				<?php include('include/small_header.php');
				
				
				?>
                <!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">  
               
                </div> 

<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-group"></i><?php echo $lang['user_header'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									<table class="table table-striped table-hover" id="manage_auth_users">
										<thead>
											<tr>
                                            <th style="width:8px"><input type="checkbox" class="group-checkable" data-set=".checkboxes" /></th>
												<th>App <?php echo $lang['Username'];?></th>
												<th>App <?php echo $lang['label_name'];?></th>
                                                <th>App API Token</th>
												<!--th style="width:120px;">Edit</th>
                                                <th style="width:120px;">Delete</th-->
												
											</tr>
										</thead>
										<tbody>
                                        <?php $data['API'] = '1.5';
								$data['user_api_key'] = $GLOBALS['api_key'];
								$data['searchField'] = "user_custom1"; 
								$data['searchValue'] = "apps";
								 $data['type'] = 'users_list';
								$users_list_contents	=	 submit_cURL ($data);
											$parse_array_customer_list = array();
											$parse_array_customer_list = xml2array($users_list_contents, $get_attributes=1, $priority = 'tag');
										//print_r($parse_array_customer_list);
											if(!empty($parse_array_customer_list['response']['users']))
											{
												//print_r($users);
												if(empty($parse_array_customer_list['response']['users']['user'][0]))
												{
											 ?>
								
											<tr class="odd gradeX">
                                            <td><input type="checkbox" class="checkboxes" name="case[]" value="<?php echo $parse_array_customer_list['response']['users']['user']['user_id'];?>" /></td>
												<td><a href="edit_app.php?user_id=<?php echo $parse_array_customer_list['response']['users']['user']['user_id'];?>"><?php echo $parse_array_customer_list['response']['users']['user']['user_id'];?></a></td>
												<td><?php //echo $parse_array_customer_list['response']['users']['user']['account_id'];?></td>
        										<td><?php echo $parse_array_customer_list['response']['users']['user']['user_api_key'];?></td>
												
												<!--td><button class="btn btn-small btn-info" type="button" onclick="window.location.href='manage_user.html'"><i class="icon-pencil"></i> Edit</button></td>
                                                <td><button class="btn btn-small btn-danger" type="button"><i class="icon-trash"></i> Delete</button></td-->
												
											</tr>
											<?php }
											else
											{
												foreach($parse_array_customer_list['response']['users']['user'] as $users)
												{
													
													?>
                                                    <tr class="odd gradeX">
                                            <td><input type="checkbox" class="checkboxes" name="case[]" value="<?php echo $users['user_id'];?>" /></td>
                                            <td><a href="edit_app.php?user_id=<?php echo $users['user_id'];?>"><?php echo $users['user_id'];?></a></td>
												<td><?php //echo $users['account_id'];?></td>
                                                <td><?php echo $users['user_api_key'];?></td>
												
												<!--td><button class="btn btn-small btn-info" type="button" onclick="window.location.href='manage_user.html'"><i class="icon-pencil"></i> Edit</button></td>
                                                <td><button class="btn btn-small btn-danger" type="button"><i class="icon-trash"></i> Delete</button></td-->
												
											</tr>
                                            <?php	}}} ?>
											
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
											<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
											<button class="btn btn-primary" onclick="get_checked(3)">Continue</button>
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