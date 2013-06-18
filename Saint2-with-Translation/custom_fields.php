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
				$data['API'] = 1.5;
				$data['user_api_key'] =  $GLOBALS['api_key'];
				$data['type'] = 'manage_fields';
				$data['action'] = 'list';
				$fields_contents	=	 submit_cURL ($data);

				$parse_array_fields = array();
				$parse_array_fields = xml2array($fields_contents, $get_attributes=1, $priority = 'tag');
				$parse_array_fields['response']['account']['fields']['field'][1]['name'];
				//print_r($parse_array_fields);
				
				?>
                <!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">  
               
                </div> 
<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-cogs"></i>  <?php echo $lang['manage_fields_custom_header'];?></h4>
															
								</div>
								<div class="widget-body">
                                
                                
                                <div class="tabbable tabbable-custom tabs-left">
                                    <!-- Only required for left/right tabs -->
                                    <ul class="nav nav-tabs tabs-left">
                                       <li class="active"><a href="#tab_3_1" data-toggle="tab"><?php echo $lang['label_customer_fields'];?></a></li>
                                       <li><a href="#tab_3_2" data-toggle="tab"><?php echo $lang['label_customer_fields'];?></a></li>
                                    </ul>
                                    <div class="tab-content">
                                       <div class="tab-pane active" id="tab_3_1" style="padding-left:10px;">
                                       
                                       <h5><?php echo $lang['manage_fields_predefined_header'];?></h5>
                                       <form name="form3" id="form3" method="post" action="update_card.php">
                                          <table border="0"  cellpadding="10" cellspacing="10">
                              	<tr>
                                	<th><?php echo $lang['nav_show'];?></th>
                                    <th><?php echo $lang['label_Label'];?></th>
                                    
                                </tr>
                                
                                <tr>
                                	<td><input type="checkbox" name="show1" id="show1" onchange="exefunction('show1')" <?php
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array)
				{
					
					//print_r($p_array);
					
					if($p_array['name'] == 'card_number' && $p_array['show'] == 'Y') 
					{
						
                                    ?> checked <?php }} } ?> value="<?php echo $p_array['show'];?>"/></td>
                                    <td style="padding-top:3px; padding-bottom:0px;"><input type="text" class="input-small" name="card" id="card" value="<?php  
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array)
				{
					
					//print_r($p_array);
					if($p_array['name'] == 'card_number') 
					{
						
                                    echo $p_array['label']; }}}?>"/><input type="hidden" name="show_hidden" id="show_hidden" value="" /></td>
                                    </tr>
                                    
                                     <tr>
                                	<td><input type="checkbox" name="show2" id="show2" onchange="exefunction('show2')"  <?php
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'first_name' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }}} ?> value="<?php echo $p_array['show'];?>" /></td>
                                    <td><?php echo $lang['label_first_name'];?></td>
                                    </tr>
                                    
                                     <tr>
                                	<td><input type="checkbox" name="show3" id="show3" onchange="exefunction('show3')" <?php 
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'last_name' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }}} ?> value="<?php echo $p_array['show'];?>"/></td>
                                    <td><?php echo $lang['label_last_name'];?></td>
                                    </tr>
                                    
                                      <tr>
                                	<td><input type="checkbox" name="show4" id="show4" onchange="exefunction('show4')" <?php
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'phone' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }}} ?> value="<?php echo $p_array['show'];?>" /></td>
                                    <td><?php echo $lang['label_phone'];?></td>
                                    </tr>
                                    
                                     <tr>
                                	<td><input type="checkbox" name="show5" id="show5" onchange="exefunction('show5')" <?php
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'email' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }}} ?> value="<?php echo $p_array['show'];?>"/></td>
                                    <td><?php echo $lang['label_email'];?></td>
                                    </tr>
                                    
                                      <tr>
                                	<td><input type="checkbox" name="show6" id="show6" onchange="exefunction('show6')" <?php
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'custom_date' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }}} ?> value="<?php echo $p_array['show'];?>"/></td>
                                    <td><?php echo $lang['label_date'];?></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><input type="checkbox" name="show7" id="show7" onchange="exefunction('show7')" <?php
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'address1' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }}} ?> value="<?php echo $p_array['show'];?>"/></td>
                                    <td><?php echo $lang['account_label_biz_address1'];?></td>
                                    </tr>
                                    
                                     
                                    <tr>
                                    <td><input type="checkbox" name="show8" id="show8" onchange="exefunction('show8')" <?php
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'address2' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }}} ?> value="<?php echo $p_array['show'];?>"/></td>
                                    <td><?php echo $lang['account_label_biz_address2'];?></td>
                                    </tr>
                                    
                                     <tr>
                                    <td><input type="checkbox" name="show9" id="show9" onchange="exefunction('show9')" <?php
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'city' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }} }?> value="<?php echo $p_array['show'];?>"/></td>
                                    <td><?php echo $lang['label_city'];?></td>
                                    </tr>
                                    
                                     <tr>
                                    <td><input type="checkbox" name="show10" id="show10" onchange="exefunction('show10')" <?php 
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'state' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }} }?> value="<?php echo $p_array['show'];?>"/></td>
                                    <td><?php echo $lang['label_state'];?></td>                                   
                                 </tr> 
                                 
                                 
                                    <tr>
                                    <td><input type="checkbox" name="show11" id="show11" onchange="exefunction('show11')" <?php
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'zip' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }} }?> value="<?php echo $p_array['show'];?>"/></td>
                                    <td><?php echo $lang['label_zip'];?></td>
                                    
                                 </tr> 
                                 
                                 
                                    <tr>
                                    <td><input type="checkbox" name="show12" id="show12" onchange="exefunction('show12')" <?php if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'country' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }}} ?> value="<?php echo $p_array['show'];?>"/></td>
                                    <td><?php echo $lang['Country'];?></td>
                                    
                                 </tr>
                                 
                                    
                                    <tr>
                                    <td><input type="checkbox" name="show13" id="show13" onchange="exefunction('show13')" <?php 
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'customer_username' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }} }?> value="<?php echo $p_array['show'];?>"/></td>
                                    <td><?php echo $lang['User'].' '.$lang['label_name'];?></td>
                                 </tr> 
                                 
                                
                                   
                                    <tr>
                                    <td><input type="checkbox" name="show14" id="show14" onchange="exefunction('show14')" <?php
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'customer_password' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }}} ?> value="<?php echo $p_array['show'];?>" /></td>
                                    <td><?php echo $lang['label_password'];?></td>
                                 </tr> 
                                 
                                
                                   
                                    <tr>
                                    <td><input type="checkbox" name="show15" id="show15" onchange="exefunction('show15')" <?php
									if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array) {
					
					//print_r($p_array);
					if($p_array['name'] == 'customer_PIN' && $p_array['show'] == 'Y') 
					{
				?> checked <?php }}} ?> value="<?php echo $p_array['show'];?>"  /></td>
                                    <td><?php echo $lang['label_PIN'];?></td>
                                 </tr> 
                               
                                 
                                </table> 
                                
                                <hr />
                                
                                <h5><?php echo $lang['manage_fields_custom_header'];?></h5>
                                    
                                    <table border="0" width="75%">
                              	<tr>
                                	<td valign="top"><strong><?php echo $lang['nav_show'];?></strong></td>
                                    <td valign="top"><strong><?php echo $lang['ID'];?></strong></td>
                                    <td valign="top"><strong><?php echo $lang['label_Label'];?></strong></td>
                                    <td valign="top"><strong><?php echo $lang['label_Type'];?></strong></td>
                                    <td valign="top"><strong><?php echo $lang['label_Choices'];?></strong><br />(<?php echo $lang['label_Choices_sub'];?>)</td>
                                    <td valign="top"><strong><?php echo $lang['label_Unique'];?></strong></td>
                                    <td valign="top"></td>
                                </tr>

                                <?php
																$i = 0;
								//print_r($parse_array_fields);
								$choice = '';
								if(!empty($parse_array_fields['response']['account']['fields']))
								{
								foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array)
				{
					
					//print_r($p_array);
					if(isset($p_array['name']))
					{
					if(substr($p_array['name'], 0, -1) == 'custom_field_' || substr($p_array['name'], 0, -1) == 'custom_field_1' || substr($p_array['name'], 0, -1) == 'custom_field_2' || substr($p_array['name'], 0, -1) == 'custom_field_3' || substr($p_array['name'], 0, -1) == 'custom_field_4' || substr($p_array['name'], 0, -1) == 'custom_field_5' || substr($p_array['name'], 0, -1) == 'custom_field_6' || substr($p_array['name'], 0, -1) == 'custom_field_7' || substr($p_array['name'], 0, -1) == 'custom_field_8' || substr($p_array['name'], 0, -1) == 'custom_field_9') 
					{
						
						?>
                                <tr>
                                <input type="hidden" id="chng_<?php echo $i;?>" name="<?php echo $p_array['name'].'_show';?>" value="<?php echo $p_array['show'];?>" />
                                	<td><input type="checkbox" value="<?php echo $p_array['show'];?>" name="" id="show_<?php echo $i;?>" <?php if($p_array['show'] == 'Y'){?> checked <?php } ?> onchange="chng(<?php echo $i;?>)" /></td>
                                    <td><input type="checkbox" value=""  /></td>
                                    <td><input type="text" class="input-small" name="<?php echo $p_array['name'].'_label';?>" value="<?php echo $p_array['label'];?>"/></td>
                                    <td><?php echo $p_array['type'];?></td>
                                    <td><?php if($p_array['type'] == 'List' || $p_array['type'] == 'Pick')
									{?>
                                    <input type="text" class="input-large" name="<?php echo $p_array['name'].'_choices';?>" value="<?php if(!empty($p_array['choices']['choice'])){if($p_array['choices']['choice'][0]==''){echo $p_array['choices']['choice'];}else {foreach($p_array['choices']['choice'] as $choices){
										if(!empty($choices))
										{
											echo $choices.',';
										}
										//echo substr($choice,0,-1);
										// = $choice.','.$choices;
										
										}} } ?>"/>
                                    <?php } ?></td>
                                    <td><?php if(isset($p_array['unique'])){ echo $p_array['unique'];}else{echo 'No';}?></td>
                                    <?php if($p_array['name']!='custom_field_1')
									{ ?>
                                    <td><a href="delete_field.php?name=<?php echo $p_array['name'];?>" onclick="return confirm('Are you sure?')">
<span class="label label-important"><?php echo $lang['nav_delete'];?></span>
</a></td>
<?php } ?>
                                 </tr> 
                                 <?php
					$i++;}
					}
					
						
				}
								}?>
                                 </table>
                                 <br />
                                 <button type="button" class="btn btn-inverse" onclick="window.location.href='create_custom_fields.php'"><i class="icon-plus icon-white"></i> <?php echo $lang['nav_add'];?></button>
                                 
                                  <div class="form-actions" >
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="resetme23()"><?php echo $lang['nav_cancel'];?></button>
                                 </form>
                              </div>
                                        
                                       </div>
                                       
                                       <div class="tab-pane" id="tab_3_2" style="padding-left:10px;">
                                          <h5><?php echo $lang['manage_fields_custom_header'];?></h5>
                                    <form action="update_trans_field.php" method="post" name="trans_fields">
                                    <table border="0" width="75%">
                                    <?php $data['type'] = 'transaction_fields';
				
				$trans_fields_contents	=	 submit_cURL ($data);

				$parse_array_trans_fields = array();
				$parse_array_trans_fields = xml2array($trans_fields_contents, $get_attributes=1, $priority = 'tag');
				//print_r($parse_array_trans_fields);
				?>
                              	<tr>
                                	<td valign="top"><strong><?php echo $lang['nav_show'];?></strong></td>
                                    <td valign="top"><strong><?php echo $lang['ID'];?></strong></td>
                                    <td valign="top"><strong><?php echo $lang['label_Label'];?></strong></td>
                                    <td valign="top"><strong><?php echo $lang['label_Type'];?></strong></td>
                                    <td valign="top"><strong><?php echo $lang['label_Choices'];?></strong><br />(<?php echo $lang['label_Choices_sub'];?>)</td>
                                    <td valign="top"><strong><?php echo $lang['label_Unique'];?></strong></td>
                                    <td valign="top"></td>
                                </tr>
                                <?php
								$i = 0;
								//print_r($parse_array_trans_fields['response']['account']['fields']);
								if(!empty($parse_array_trans_fields['response']['account']['fields']))
								{
									
									if(empty($parse_array_trans_fields['response']['account']['fields']['field'][0]))
									{
										
				
					//print_r($p_array);
					if(substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_1' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_2' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_3' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_4' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_5' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_6' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_7' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_8' || substr($parse_array_trans_fields['response']['account']['fields']['field']['name'], 0, -1) == 'custom_field_9') 
					{
						
						?>
                                <tr>
                                <input type="hidden" id="chng1_<?php echo $i;?>" name="<?php echo $parse_array_trans_fields['response']['account']['fields']['field']['name'].'_show';?>" value="<?php echo $parse_array_trans_fields['response']['account']['fields']['field']['show'];?>" />
                                	<td><input type="checkbox" value="<?php echo $parse_array_trans_fields['response']['account']['fields']['field']['show'];?>" name="" id="show1_<?php echo $i;?>" <?php if($parse_array_trans_fields['response']['account']['fields']['field']['show'] == 'Y'){?> checked <?php } ?> onchange="chng1(<?php echo $i;?>)" /></td>
                                    <td><input type="checkbox" value=""  /></td>
                                    <td><input type="text" class="input-small" name="<?php echo $parse_array_trans_fields['response']['account']['fields']['field']['name'].'_label';?>" value="<?php echo $parse_array_trans_fields['response']['account']['fields']['field']['label'];?>"/></td>                                    <td><?php echo $parse_array_trans_fields['response']['account']['fields']['field']['type'];?></td>
                                    <td><?php if($parse_array_trans_fields['response']['account']['fields']['field']['type'] == 'List' || $parse_array_trans_fields['response']['account']['fields']['field']['type'] == 'Pick')
									{?>
                                    <input type="text" class="input-large"  name="<?php echo $parse_array_trans_fields['response']['account']['fields']['field']['name'].'_choices';?>" value="<?php if(!empty($parse_array_trans_fields['response']['account']['fields']['field']['choices']['choice'])){if($parse_array_trans_fields['response']['account']['fields']['field']['choices']['choice'][0]==''){echo $parse_array_trans_fields['response']['account']['fields']['field']['choices']['choice'];}else {foreach($parse_array_trans_fields['response']['account']['fields']['field']['choices']['choice'] as $choices){
										if(!empty($choices))
										{
											echo $choices.',';
										}
										//echo substr($choice,0,-1);
										// = $choice.','.$choices;
										
										}} } ?>"/>
                                    <?php } ?></td>
                                    <td><?php if(isset($parse_array_trans_fields['response']['account']['fields']['field']['unique'])){ echo $parse_array_trans_fields['response']['account']['fields']['field']['unique'];}else{echo 'No';}?></td>
                                    <td><a href="delete_trans_field.php?name=<?php echo $parse_array_trans_fields['response']['account']['fields']['field']['name'];?>" onclick="return confirm('Are you sure?')">
<span class="label label-important"><?php echo $lang['nav_delete'];?></span>
</a></td>
                                 </tr> 
                                 <?php
					
									}
										
									}
									else
									{
                                foreach($parse_array_trans_fields['response']['account']['fields']['field'] as $p_array)
				{
					//print_r($p_array);
					if(isset($p_array['name']))
					{
					if(substr($p_array['name'], 0, -1) == 'custom_field_' || substr($p_array['name'], 0, -1) == 'custom_field_1' || substr($p_array['name'], 0, -1) == 'custom_field_2' || substr($p_array['name'], 0, -1) == 'custom_field_3' || substr($p_array['name'], 0, -1) == 'custom_field_4' || substr($p_array['name'], 0, -1) == 'custom_field_5' || substr($p_array['name'], 0, -1) == 'custom_field_6' || substr($p_array['name'], 0, -1) == 'custom_field_7' || substr($p_array['name'], 0, -1) == 'custom_field_8' || substr($p_array['name'], 0, -1) == 'custom_field_9') 
					{
						
						?>
                                <tr>
                                <input type="hidden" id="chng1_<?php echo $i;?>" name="<?php echo $p_array['name'].'_show';?>" value="<?php echo $p_array['show'];?>" />
                                	<td><input type="checkbox" value="<?php echo $p_array['show'];?>" name="" id="show1_<?php echo $i;?>" <?php if($p_array['show'] == 'Y'){?> checked <?php } ?> onchange="chng1(<?php echo $i;?>)" /></td>
                                    <td><input type="checkbox" value=""  /></td>
                                    <td><input type="text" class="input-small" name="<?php echo $p_array['name'].'_label';?>" value="<?php echo $p_array['label'];?>"/></td>                                    <td><?php echo $p_array['type'];?></td>
                                    <td><?php if($p_array['type'] == 'List' || $p_array['type'] == 'Pick')
									{?>
                                    <input type="text" class="input-large"  name="<?php echo $p_array['name'].'_choices';?>" value="<?php if(!empty($p_array['choices']['choice'])){if($p_array['choices']['choice'][0]==''){echo $p_array['choices']['choice'];}else {foreach($p_array['choices']['choice'] as $choices){
										if(!empty($choices))
										{
											echo $choices.',';
										}
										//echo substr($choice,0,-1);
										// = $choice.','.$choices;
										
										}} } ?>"/>
                                    <?php } ?></td>
                                    <td><?php if(isset($p_array['unique'])){ echo $p_array['unique'];}else{echo 'No';}?></td>
                                    <td><a href="delete_trans_field.php?name=<?php echo $p_array['name'];?>" onclick="return confirm('Are you sure?')">
<span class="label label-important"><?php echo $lang['nav_delete'];?></span>
</a></td>
                                 </tr> 
                                 <?php
					$i++;
					}}
						
				}}
				
								}?> 
                                 </table>
                                 <br />
                                <button type="button" class="btn btn-inverse" onclick="window.location.href='create_custom_fields_transaction.php'"><i class="icon-plus icon-white"></i> <?php echo $lang['nav_add'];?></button>
                                 
                                  <div class="form-actions" >
                                 <button type="submit" class="btn btn-info"><?php echo $lang['nav_save_changes'];?></button>
                                 <button type="button" class="btn" onclick="resetme23()"><?php echo $lang['nav_cancel'];?></button>
                                 </form>
                              </div>
                                       </div>
                                      
                                    </div>
                                
                                
                                    
                               
							<!-- END EXAMPLE TABLE PORTLET-->
                            
                            
                                   
                                 </div></div>   
                            
                            
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