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
				 <?php include('include/small_header.php'); ?>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">  
               
                </div> 
                
					<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-group"></i> Reports - <?php echo $lang['report_balances_header'];?></h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
                                
                              <span class="visible-phone space10"></span>
                              
                              <table class="table table-striped table-hover" id="manage_cust" data-provides="rowlink">
										<thead>
											<tr>
												<th><?php echo $lang['label_Date'];?></th>
												<th class="hidden-phone"><?php echo $lang['User']; ?></th>
												<th class="hidden-phone"><?php echo $lang['Transaction'];?></th>
												<th class="hidden-phone"><?php echo $lang['Campaign'];?></th>
												
                                                <th class="hidden-phone">Card Number</th>
												<th class="hidden-phone"><?php echo $lang['Balance'];?></th>
                                                <th><?php echo $lang['label_name'];?></th>
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
				$data['report'] = 'customers_balances';
				$data['date_start'] = $start_date;
				$data['date_end'] = $end_date;
				$data['campaign_id'] = $camp_ids;
				//var_dump($data);
				$all_trans	=	 submit_cURL ($data);
				$parse_all_trans_array = array();
				$parse_all_trans_array = xml2array($all_trans, $get_attributes=1, $priority = 'tag');
				
    			//print_r($parse_all_trans_array);
				if(!empty($parse_all_trans_array['response']['customer']))
				{
					if(empty($parse_all_trans_array['response']['customer'][0]))
					{
						
				?>
											<tr class="odd gradeX" id="tr1">
                                            
												<td><?php if(!empty($parse_all_trans_array['response']['customer']['record_timestamp'])){  echo $parse_all_trans_array['response']['customer']['record_timestamp'];/*$list .= $parse_all_trans_array['response']['transaction']['date'].',';} else { $list .=',';*/}?></td>
												<td><?php  echo $GLOBALS['api_user']; /*$list .= $parse_all_trans_array['response']['transaction']['user_id'].',';}else { $list .=',';*/?></td>
												<td class="hidden-phone"></td>
												<td class="hidden-phone"><?php $data['type'] = 'campaigns_list';
									$campaigns	=	 submit_cURL ($data);

									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
									
									if(!empty($parse_campaigns_array['response']['campaigns']))
	   										{
		  
		   										if(empty($parse_campaigns_array['response']['campaigns']['campaign'][0]))
		   										{
													if($parse_campaigns_array['response']['campaigns']['campaign']['id'] == $camp_ids)
													{ if(!empty($parse_campaigns_array['response']['campaigns']['campaign']['name'])){  echo $parse_campaigns_array['response']['campaigns']['campaign']['name']; /*$list .= $parse_campaigns_array['response']['campaigns']['campaign']['name'].',';}else { $list .=',';*/} }}}
													
													else
									{
										foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $campaign)
										{
											if($campaign['id'] == $camp_ids){
											   if(!empty($campaign['name'])){	echo $campaign['name'];/*$list .= $campaign['name'].',';}else { $list .=',';*/}
											
											}}} ?></td>
												<td class="hidden-phone center"><?php if(!empty($parse_all_trans_array['response']['customer']['card_number'])){ echo $parse_all_trans_array['response']['customer']['card_number'];} ?></td>
                                                <td class="hidden-phone center"><?php if(!empty($parse_all_trans_array['response']['customer']['balance'])){ echo $parse_all_trans_array['response']['customer']['balance'];} ?></td>
												<td class="hidden-phone"><?php if(!empty($parse_all_trans_array['response']['customer']['first_name']) && !empty($parse_all_trans_array['response']['customer']['last_name'])){ echo $parse_all_trans_array['response']['customer']['first_name'].' '.$parse_all_trans_array['response']['customer']['last_name'];/*$list .= $parse_all_trans_array['response']['transaction']['first_name'].' '.$parse_all_trans_array['response']['transaction']['last_name'].',),';}else { $list .=',),';*/}?></td>
												
											</tr>
					<?php } 
					else
					{
						$count = 0;
						foreach($parse_all_trans_array['response']['customer'] as $all_transactions)
						{
							
							?>
							<tr class="odd gradeX" id="tr<?php echo $count;?>">
                                            
												<td><?php if(!empty($all_transactions['record_timestamp'])){ echo $all_transactions['record_timestamp'];}?></td>
												<td><?php  echo $GLOBALS['api_user'];?></td>
												<td class="hidden-phone"></td>
												<td class="hidden-phone"><?php $data['type'] = 'campaigns_list';
									$campaigns	=	 submit_cURL ($data);

									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
								
									if(!empty($parse_campaigns_array['response']['campaigns']))
	   										{
		  
		   										if(empty($parse_campaigns_array['response']['campaigns']['campaign'][0]))
		   										{
													if($parse_campaigns_array['response']['campaigns']['campaign']['id'] == $camp_ids)
													{ if(!empty($parse_campaigns_array['response']['campaigns']['campaign']['name'])){ echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];} }}
													
													else
									{
										foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $campaign)
										{
											//print_r($campaign);
											if($campaign['id'] == $camp_ids){
												if(!empty($campaign['name'])){ echo $campaign['name'];}
											
											}}}} ?></td>
												<td class="hidden-phone center"><?php if(!empty($all_transactions['card_number'])){ echo $all_transactions['card_number'];} ?></td>
                                                <td class="hidden-phone center"><?php if(!empty($all_transactions['balance'])){ echo $all_transactions['balance'];} ?></td>
												<td class="hidden-phone"><?php if(!empty($all_transactions['first_name']) && !empty($all_transactions['last_name'])){ echo $all_transactions['first_name'].' '.$all_transactions['last_name'];}?></td>
												
											</tr>
						
					<?php 
					$count ++;
					}}}
					
					/*echo $list;
					foreach ($list as $fields) {
    fputcsv($fp, $fields);
}*/
					 ?>						
										</tbody>
									</table>
                                    <div id="dvData" style="display:none">
<table>
										<thead>
											<tr>
												<th style="width:8px"><input type="checkbox" class="group-checkable" data-set=".checkboxes" /></th>
												<th>Date</th>
												<th class="hidden-phone">User/Employee</th>
												<th class="hidden-phone">Transaction</th>
												<th class="hidden-phone">Campaign</th>
												<th class="hidden-phone">Card Number</th>
												<th>Name</th>
											</tr>
										</thead>
										<tbody id="parent">
                                      
									
										</tbody>
									</table>
</div>
                              <div id="dvData1" style="display:none">
<table id="parent">
										<thead>
											<tr>
											<th><?php echo $lang['label_Date'];?></th>
												<th class="hidden-phone"><?php echo $lang['User']; ?></th>
												<th class="hidden-phone"><?php echo $lang['Transaction'];?></th>
												<th class="hidden-phone"><?php echo $lang['Campaign'];?></th>
												
                                                <th class="hidden-phone">Card Number</th>
												<th class="hidden-phone"><?php echo $lang['Balance'];?></th>
                                                <th><?php echo $lang['label_name'];?></th>
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
				$data['report'] = 'customers_balances';
				$data['date_start'] = $start_date;
				$data['date_end'] = $end_date;
				$data['campaign_id'] = $camp_ids;
				//var_dump($data);
				$all_trans	=	 submit_cURL ($data);
				$parse_all_trans_array = array();
				$parse_all_trans_array = xml2array($all_trans, $get_attributes=1, $priority = 'tag');
				
    			//print_r($parse_all_trans_array);
				if(!empty($parse_all_trans_array['response']['customer']))
				{
					if(empty($parse_all_trans_array['response']['customer'][0]))
					{
						
				?>
											<tr class="odd gradeX" id="tr1">
                                            
												<td><?php if(!empty($parse_all_trans_array['response']['customer']['record_timestamp'])){  echo $parse_all_trans_array['response']['customer']['record_timestamp'];/*$list .= $parse_all_trans_array['response']['transaction']['date'].',';} else { $list .=',';*/}?></td>
												<td><?php  echo $GLOBALS['api_user']; /*$list .= $parse_all_trans_array['response']['transaction']['user_id'].',';}else { $list .=',';*/?></td>
												<td class="hidden-phone"></td>
												<td class="hidden-phone"><?php $data['type'] = 'campaigns_list';
									$campaigns	=	 submit_cURL ($data);

									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
									
									if(!empty($parse_campaigns_array['response']['campaigns']))
	   										{
		  
		   										if(empty($parse_campaigns_array['response']['campaigns']['campaign'][0]))
		   										{
													if($parse_campaigns_array['response']['campaigns']['campaign']['id'] == $camp_ids)
													{ if(!empty($parse_campaigns_array['response']['campaigns']['campaign']['name'])){  echo $parse_campaigns_array['response']['campaigns']['campaign']['name']; /*$list .= $parse_campaigns_array['response']['campaigns']['campaign']['name'].',';}else { $list .=',';*/} }}}
													
													else
									{
										foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $campaign)
										{
											if($campaign['id'] == $camp_ids){
											   if(!empty($campaign['name'])){	echo $campaign['name'];/*$list .= $campaign['name'].',';}else { $list .=',';*/}
											
											}}} ?></td>
												<td class="hidden-phone center"><?php if(!empty($parse_all_trans_array['response']['customer']['card_number'])){ echo $parse_all_trans_array['response']['customer']['card_number'];} ?></td>
                                                <td class="hidden-phone center"><?php if(!empty($parse_all_trans_array['response']['customer']['balance'])){ echo $parse_all_trans_array['response']['customer']['balance'];} ?></td>
												<td class="hidden-phone"><?php if(!empty($parse_all_trans_array['response']['customer']['first_name']) && !empty($parse_all_trans_array['response']['customer']['last_name'])){ echo $parse_all_trans_array['response']['customer']['first_name'].' '.$parse_all_trans_array['response']['customer']['last_name'];/*$list .= $parse_all_trans_array['response']['transaction']['first_name'].' '.$parse_all_trans_array['response']['transaction']['last_name'].',),';}else { $list .=',),';*/}?></td>
												
											</tr>
					<?php } 
					else
					{
						$count = 0;
						foreach($parse_all_trans_array['response']['customer'] as $all_transactions)
						{
							
							?>
							<tr class="odd gradeX" id="tr<?php echo $count;?>">
                                            
												<td><?php if(!empty($all_transactions['record_timestamp'])){ echo $all_transactions['record_timestamp'];}?></td>
												<td><?php  echo $GLOBALS['api_user'];?></td>
												<td class="hidden-phone"></td>
												<td class="hidden-phone"><?php $data['type'] = 'campaigns_list';
									$campaigns	=	 submit_cURL ($data);

									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
								
									if(!empty($parse_campaigns_array['response']['campaigns']))
	   										{
		  
		   										if(empty($parse_campaigns_array['response']['campaigns']['campaign'][0]))
		   										{
													if($parse_campaigns_array['response']['campaigns']['campaign']['id'] == $camp_ids)
													{ if(!empty($parse_campaigns_array['response']['campaigns']['campaign']['name'])){ echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];} }}
													
													else
									{
										foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $campaign)
										{
											//print_r($campaign);
											if($campaign['id'] == $camp_ids){
												if(!empty($campaign['name'])){ echo $campaign['name'];}
											
											}}}} ?></td>
												<td class="hidden-phone center"><?php if(!empty($all_transactions['card_number'])){ echo $all_transactions['card_number'];} ?></td>
                                                <td class="hidden-phone center"><?php if(!empty($all_transactions['card_number'])){ echo $all_transactions['card_number'];} ?></td>
												<td class="hidden-phone"><?php if(!empty($all_transactions['first_name']) && !empty($all_transactions['last_name'])){ echo $all_transactions['first_name'].' '.$all_transactions['last_name'];}?></td>
												
											</tr>
						
					<?php 
					$count ++;
					}}}
					
					/*echo $list;
					foreach ($list as $fields) {
    fputcsv($fp, $fields);
}*/
					 ?>						
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