<?php include('include/header.php');
/*$select_user_info = "Select * from tbl_marchent where username='".$data['user_name']."'";
$result = mysql_query($select_user_info);
$row = mysql_fetch_array($result);*/ ?>
	<!-- BEGIN HEADER -->
	<?php include('include/menu.php');?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div id="body">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
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
									<h4><i class="icon-group"></i> Totals Audit Report</h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
                                
                              <span class="visible-phone space10"></span>
                              
                              <table class="table table-striped table-hover" id="manage_cust">
										<thead>
											<tr>
												<th><?php echo $lang['Earned'];?></th>
												<th class="hidden-phone"><?php echo $lang['Redeemed'];?></th>
												<th class="hidden-phone"><?php echo $lang['Balance'];?></th>
											
											</tr>
										</thead>
										<tbody>
                                        <?php
				$camp_ids = $_POST['camp_id'];
				$date_time = $_POST['date_time'];
				$date_array = array();
				$date_array = explode(' ',$date_time);
				$start_date = strtotime($date_array[0]);
				$start_date = date('Y-m-d',$start_date);
				$end_date = strtotime($date_array[2]);
				$end_date = date('Y-m-d',$end_date);
				$data['type'] = 'reports';
				$data['report'] = 'audit_totals';
				$data['date_start'] = $start_date;
				$data['date_end'] = $end_date;
				$data['selected_campaigns'] = substr($camp_ids,1);
				
				$all_trans	=	 submit_cURL ($data);
				$parse_all_trans_array = array();
				$parse_all_trans_array = xml2array($all_trans, $get_attributes=1, $priority = 'tag');
				//print_r($parse_all_trans_array);
				if(!empty($parse_all_trans_array['response']['campaign']))
				{
					if(empty($parse_all_trans_array['response']['campaign'][0]))
					{
						
?>
											<tr class="odd gradeX" id="tr1">
                                            
												<td><?php echo $parse_all_trans_array['response']['campaign']['earned'];?></td>
												<td><?php echo $parse_all_trans_array['response']['campaign']['redeemed'];?></td>
												<td class="hidden-phone"><?php echo $parse_all_trans_array['response']['campaign']['liability'];?></td>
												
												
											</tr>
                                          <?php } 
					else
					{
						$count = 0;
						foreach($parse_all_trans_array['response']['campaign'] as $all_transactions)
						{
							?>
                            <tr class="odd gradeX" id="tr<?php echo $count;?>">
                                            
												<td><?php echo $all_transactions['earned'];?></td>
												<td><?php echo $all_transactions['redeemed'];?></td>
												<td class="hidden-phone"><?php echo $all_transactions['liability'];?></td>
												
											</tr>
                            <?php $count++; }}} ?>
											
										</tbody>
									</table>
                                    
                                     <div id="dvData" style="display:none">
                                     <table id="parent">
										<thead>
											<tr>
                                            <th style="width:8px"><input type="checkbox" class="group-checkable" data-set=".checkboxes" /></th>
												<th>Earned</th>
												<th class="hidden-phone">Redeemed</th>
												<th class="hidden-phone">Balance</th>
											
											</tr>
										</thead>
										<tbody>
                                        </tbody>
                                        </table>
                                            
                                     </div>
                                      <div id="dvData1" style="display:none">
<table id="parent">
<thead>
											<tr>
											<th><?php echo $lang['Earned'];?></th>
												<th class="hidden-phone"><?php echo $lang['Redeemed'];?></th>
												<th class="hidden-phone"><?php echo $lang['Balance'];?></th>
											</tr>
										</thead>
										<tbody>
                                        <?php
				$camp_ids = $_POST['camp_id'];
				$date_time = $_POST['date_time'];
				$date_array = array();
				$date_array = explode(' ',$date_time);
				$start_date = strtotime($date_array[0]);
				$start_date = date('Y-m-d',$start_date);
				$end_date = strtotime($date_array[2]);
				$end_date = date('Y-m-d',$end_date);
				$data['type'] = 'reports';
				$data['report'] = 'audit_totals';
				$data['date_start'] = $start_date;
				$data['date_end'] = $end_date;
				$data['selected_campaigns'] = substr($camp_ids,1);
				
				$all_trans	=	 submit_cURL ($data);
				$parse_all_trans_array = array();
				$parse_all_trans_array = xml2array($all_trans, $get_attributes=1, $priority = 'tag');
				//print_r($parse_all_trans_array);
				if(!empty($parse_all_trans_array['response']['campaign']))
				{
					if(empty($parse_all_trans_array['response']['campaign'][0]))
					{
						
?>
											<tr class="odd gradeX" id="tr1">
                                            
												<td><?php echo $parse_all_trans_array['response']['campaign']['earned'];?></td>
												<td><?php echo $parse_all_trans_array['response']['campaign']['redeemed'];?></td>
												<td class="hidden-phone"><?php echo $parse_all_trans_array['response']['campaign']['liability'];?></td>
												
												
											</tr>
                                          <?php } 
					else
					{
						$count = 0;
						foreach($parse_all_trans_array['response']['campaign'] as $all_transactions)
						{
							?>
                            <tr class="odd gradeX" id="tr<?php echo $count;?>">
                                            	<td><?php echo $all_transactions['earned'];?></td>
												<td><?php echo $all_transactions['redeemed'];?></td>
												<td class="hidden-phone"><?php echo $all_transactions['liability'];?></td>
												
											</tr>
                            <?php }}} ?>
											
										</tbody>
                                        </table>
                   </div>                  
                                     
                                    <div style="margin-top:15px;"><a id="export"><button id="btnExport" class="btn btn-warning" onclick="export_excel()">
<i class="icon-cloud-download icon-white"></i>
<?php echo $lang['export_xls'];?>
</button></a></div>
                                    
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