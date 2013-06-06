<?php include('include/header.php');
/*$select_user_info = "Select * from tbl_marchent where username='".$data['user_name']."'";
$result = mysql_query($select_user_info);
$row = mysql_fetch_array($result);*/ ?>
	<!-- BEGIN HEADER -->
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
									<h4><i class="icon-cogs"></i>  Custom Fields</h4>
															
								</div>
								<div class="widget-body">
                                <div class="row-fluid" >
                                	<div class="span6"><h5>Custom Fields</h5>
                                  <form method="post" action="add_custom_trans_field.php">  
                                    <table border="0" width="75%" cellpadding="5" cellspacing="10">
                              	<tr>
                                	<td><strong>Show</strong></td>
                                    <td><strong>Unique</strong></td>
                                    <td><strong>Label</strong></td>
                                    <td><strong>Type</strong></td>
                                    
                                </tr>
                                
                                <tr>
                                	<td align="center"><input type="checkbox" name="show" id="show" value="" onChange="exefunction()" /></td>
                                   
                                    <td align="center"><input type="checkbox" value="" name="uni" id="uni" onChange="exefunction2()" /></td>
                                    <td><input type="text" id="lab" name="lab" /></td>
                                    <td><select data-placeholder="Choose a Type" class="input-small" tabindex="1" name="typ" id="typ" onchange="show_text()">
                                       <option value=""></option>
                                       <option value="Text">Text</option>
                                       <option value="Date">Date</option>
                                       <option value="List">List</option>
                                       <option value="Pick">Picklist</option>
                                    </select></td>
                                    <td valign="top" id="list" style="display:none"><input type="text" name="list" value="" placeholder="Separate each option with a comma"/></td>
                                 </tr> 
                                 </table>
                                    
                                    </div>
                                    
                                    <div class="span6"></div>
                                </div>    
                                    
                                    
								</div>
                                
                                <div class="row-fluid">
                                	
                                    <div class="span12">
                                      <div class="form-actions" >
                                 <button type="submit" class="btn btn-info">Save</button>
                                 <button type="button" class="btn">Cancel</button>
                                 </form>
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
	<?php include('include/footer.php') ;?>