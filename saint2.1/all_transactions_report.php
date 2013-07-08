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
									<h4><i class="icon-group"></i> <?php echo $lang['All'].' '.$lang['Transactions'];?></h4>
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
												<th class="hidden-phone"><?php echo $lang['Amount'];?></th>
                                                <th class="hidden-phone">Card Number</th>
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
				$data['report'] = 'transactions_all';
				$data['date_start'] = $start_date;
				$data['date_end'] = $end_date;
				$data['selected_campaigns'] = substr($camp_ids,1);
				
				$all_trans	=	 submit_cURL ($data);
				$parse_all_trans_array = array();
				$parse_all_trans_array = xml2array($all_trans, $get_attributes=1, $priority = 'tag');
				if(!empty($parse_all_trans_array['response']['transaction']))
				{
					if(empty($parse_all_trans_array['response']['transaction'][0]))
					{
				?>
											<tr class="odd gradeX" id="tr1">
                                            
												<td><?php if(!empty($parse_all_trans_array['response']['transaction']['date'])){ echo $parse_all_trans_array['response']['transaction']['date'];}?></td>
												<td><?php if(!empty($parse_all_trans_array['response']['transaction']['user_id'])){ echo $parse_all_trans_array['response']['transaction']['user_id'];}?></td>
												<td class="hidden-phone"><?php if(!empty($parse_all_trans_array['response']['transaction']['authorization'])){ echo $parse_all_trans_array['response']['transaction']['authorization'];}?></td>
												<td class="hidden-phone"><?php $data['type'] = 'campaigns_list';
									$campaigns	=	 submit_cURL ($data);

									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
									
									if(!empty($parse_campaigns_array['response']['campaigns']))
	   										{
		  
		   										if(empty($parse_campaigns_array['response']['campaigns']['campaign'][0]))
		   										{
													if($parse_campaigns_array['response']['campaigns']['campaign']['id'] == $parse_all_trans_array['response']['transaction']['campaign_id'])
													{ if(!empty($parse_campaigns_array['response']['campaigns']['campaign']['name'])){ echo $parse_campaigns_array['response']['campaigns']['campaign']['name']; }}}
													
													else
									{
										
										foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $campaign)
										{
											if($campaign['id'] == $parse_all_trans_array['response']['transaction']['campaign_id']){
											   if(!empty($campaign['name'])){	echo $campaign['name'];}
											
											}}}} ?></td>
                                            
												<td class="hidden-phone center"><?php if(!empty($parse_campaigns_array['response']['campaigns']['campaign']['name'])){ echo $parse_all_trans_array['response']['transaction']['card_number'];}?></td>
                                                <td class="hidden-phone center"><?php if(!empty($parse_all_trans_array['response']['transaction']['amount_number']) && !empty($parse_all_trans_array['response']['transaction']['amount_type'])){ echo $parse_all_trans_array['response']['transaction']['amount_number'].' '.$parse_all_trans_array['response']['transaction']['amount_type'];}?></td>
												<td class="hidden-phone"><?php if(!empty($parse_campaigns_array['response']['campaigns']['campaign']['first_name']) && !empty($parse_campaigns_array['response']['campaigns']['campaign']['last_name'])){ echo $parse_all_trans_array['response']['transaction']['customer']['first_name'].' '.$parse_all_trans_array['response']['transaction']['customer']['last_name'];}?></td>
												
											</tr>
					<?php } 
					else
					{
						$count = 0;
						foreach($parse_all_trans_array['response']['transaction'] as $all_transactions)
						{
							?>
							<tr class="odd gradeX" id="tr<?php echo $count;?>">
                                            
												<td><?php if(!empty($all_transactions['date'])){ echo $all_transactions['date'];}?></td>
												<td><?php if(!empty($all_transactions['user_id'])){ echo $all_transactions['user_id'];}?></td>
												<td class="hidden-phone"><?php if(!empty($all_transactions['authorization'])){ echo $all_transactions['authorization'];}?></td>
												<td class="hidden-phone"><?php $data['type'] = 'campaigns_list';
									$campaigns	=	 submit_cURL ($data);

									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
								
									if(!empty($parse_campaigns_array['response']['campaigns']))
	   										{
		  
		   										if(empty($parse_campaigns_array['response']['campaigns']['campaign'][0]))
		   										{
													if($parse_campaigns_array['response']['campaigns']['campaign']['id'] == $all_transactions['campaign_id'])
													{ if(!empty($parse_campaigns_array['response']['campaigns']['campaign']['name'])){ echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];} }}
													
													else
									{
										foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $campaign)
										{
											//print_r($campaign);
											if($campaign['id'] == $all_transactions['campaign_id']){
												if(!empty($campaign['name'])){ echo $campaign['name'];}
											
											}}}} ?></td>
                                            <td class="hidden-phone center"><?php if(!empty($all_transactions['amount_number']) && !empty($all_transactions['amount_type'])){ echo $all_transactions['amount_number'].' '.$all_transactions['amount_type']; }?></td>
												<td class="hidden-phone center"><?php if(!empty($all_transactions['card_number'])){ echo $all_transactions['card_number']; }?></td>
												<td class="hidden-phone"><?php if(!empty($all_transactions['customer']['first_name']) && !empty($all_transactions['customer']['last_name'])){ echo $all_transactions['customer']['first_name'].' '.$all_transactions['customer']['last_name'];}?></td>
												
											</tr>
						
					<?php $count++; }}} ?>						
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
												<th class="hidden-phone"><?php echo $lang['Amount'];?></th>
                                                <th class="hidden-phone">Card Number</th>
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
				$data['report'] = 'transactions_all';
				$data['date_start'] = $start_date;
				$data['date_end'] = $end_date;
				$data['selected_campaigns'] = substr($camp_ids,1);
				
				$all_trans	=	 submit_cURL ($data);
				$parse_all_trans_array = array();
				$parse_all_trans_array = xml2array($all_trans, $get_attributes=1, $priority = 'tag');
				if(!empty($parse_all_trans_array['response']['transaction']))
				{
					if(empty($parse_all_trans_array['response']['transaction'][0]))
					{
				?>
											<tr class="odd gradeX">
                                            
												<td><?php if(!empty($parse_all_trans_array['response']['transaction']['date'])){ echo $parse_all_trans_array['response']['transaction']['date'];}?></td>
												<td><?php if(!empty($parse_all_trans_array['response']['transaction']['user_id'])){ echo $parse_all_trans_array['response']['transaction']['user_id'];}?></td>
												<td class="hidden-phone"><?php if(!empty($parse_all_trans_array['response']['transaction']['authorization'])){ echo $parse_all_trans_array['response']['transaction']['authorization'];}?></td>
												<td class="hidden-phone"><?php $data['type'] = 'campaigns_list';
									$campaigns	=	 submit_cURL ($data);

									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
									
									if(!empty($parse_campaigns_array['response']['campaigns']))
	   										{
		  
		   										if(empty($parse_campaigns_array['response']['campaigns']['campaign'][0]))
		   										{
													if($parse_campaigns_array['response']['campaigns']['campaign']['id'] == $parse_all_trans_array['response']['transaction']['campaign_id'])
													{ if(!empty($parse_campaigns_array['response']['campaigns']['campaign']['name'])){ echo $parse_campaigns_array['response']['campaigns']['campaign']['name']; }}}
													
													else
									{
										foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $campaign)
										{
											if($campaign['id'] == $parse_all_trans_array['response']['transaction']['campaign_id']){
											   if(!empty($campaign['name'])){	echo $campaign['name'];}
											
											}}}} ?></td>
												<td class="hidden-phone center"><?php if(!empty($parse_campaigns_array['response']['campaigns']['campaign']['name'])){ echo $parse_all_trans_array['response']['transaction']['card_number'];}?></td>
                                                <td class="hidden-phone center"><?php if(!empty($parse_all_trans_array['response']['transaction']['amount_number']) && !empty($parse_all_trans_array['response']['transaction']['amount_type'])){ echo $parse_all_trans_array['response']['transaction']['amount_number'].' '.$parse_all_trans_array['response']['transaction']['amount_type'];}?></td>
												<td class="hidden-phone"><?php if(!empty($parse_campaigns_array['response']['campaigns']['campaign']['first_name']) && !empty($parse_campaigns_array['response']['campaigns']['campaign']['last_name'])){ echo $parse_all_trans_array['response']['transaction']['customer']['first_name'].' '.$parse_all_trans_array['response']['transaction']['customer']['last_name'];}?></td>
												
											</tr>
					<?php } 
					else
					{
						foreach($parse_all_trans_array['response']['transaction'] as $all_transactions)
						{
							?>

							<tr class="odd gradeX">
                                            
												<td><?php if(!empty($all_transactions['date'])){ echo $all_transactions['date'];}?></td>
												<td><?php if(!empty($all_transactions['user_id'])){ echo $all_transactions['user_id'];}?></td>
												<td class="hidden-phone"><?php if(!empty($all_transactions['authorization'])){ echo $all_transactions['authorization'];}?></td>
												<td class="hidden-phone"><?php $data['type'] = 'campaigns_list';
									$campaigns	=	 submit_cURL ($data);

									$parse_campaigns_array = array();
									$parse_campaigns_array = xml2array($campaigns, $get_attributes=1, $priority = 'tag');
								
									if(!empty($parse_campaigns_array['response']['campaigns']))
	   										{
		  
		   										if(empty($parse_campaigns_array['response']['campaigns']['campaign'][0]))
		   										{
													if($parse_campaigns_array['response']['campaigns']['campaign']['id'] == $all_transactions['campaign_id'])
													{ if(!empty($parse_campaigns_array['response']['campaigns']['campaign']['name'])){ echo $parse_campaigns_array['response']['campaigns']['campaign']['name'];} }}
													
													else
									{
										foreach($parse_campaigns_array['response']['campaigns']['campaign'] as $campaign)
										{
											//print_r($campaign);
											if($campaign['id'] == $all_transactions['campaign_id']){
												if(!empty($campaign['name'])){ echo $campaign['name'];}
											
											}}}} ?></td>
                                             <td class="hidden-phone center"><?php if(!empty($all_transactions['amount_number']) && !empty($all_transactions['amount_type'])){ echo $all_transactions['amount_number'].' '.$all_transactions['amount_type']; }?></td>
												<td class="hidden-phone center"><?php if(!empty($all_transactions['card_number'])){ echo $all_transactions['card_number']; }?></td>
												<td class="hidden-phone"><?php if(!empty($all_transactions['customer']['first_name']) && !empty($all_transactions['customer']['last_name'])){ echo $all_transactions['customer']['first_name'].' '.$all_transactions['customer']['last_name'];}?></td>
												
											</tr>
						
					<?php }}} ?>						
										</tbody>
</table>
</div>
                          
                                      <div style="margin-top:15px;"><a id="export"><button id="btnExport" class="btn btn-warning" onclick="export_excel()">
<i class="icon-cloud-download icon-white"></i>
<?php echo $lang['export_xls'];?>
</button></a></div>
                              <!--<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel2">Delete</h3>
										</div>
										<div class="modal-body scroller">
											<p>You are about to delete these users.  Are you sure you want to continue?</p>


										</div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
											<button class="btn btn-primary" onclick="delete_report(1)">Continue</button>
										</div>
									</div>-->
                                    
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