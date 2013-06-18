<?php
$camp_id = 0;
if(isset($_GET['camp_id']))
{
	$camp_id = $_GET['camp_id'];
}
 include('include/header.php'); ?>
	<!-- BEGIN HEADER -->
    <?php include('include/menu.php');?>
	<!-- END HEADER -->
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
				<div id="page" class="dashboard">  
					               <?php include('include/small_header.php');?>               
                </div> 
<div class="row-fluid">						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4>Campaign Name: Configure Depreciation</h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									 <form action="add_depreciation.php" class="form-horizontal" method="get">
        
        					 <div class="control-group">
                               
                                 <div class="controls">
                                    <label class="radio">
                                    <input type="radio" name="trans_type" id="optionsRadios1" value="last_transaction" checked />
                                    For each amount earned, depreciation is applied regardless of subsequent actvity
                                    </label>
                                    <div class="clearfix"></div>
                                    <label class="radio">
                                    <input type="radio" name="trans_type" id="optionsRadios2" value="per_transaction" />
                                    Any activity will reset the depreciation 'clock' to the current balance
                                    </label>  
                                    <div class="clearfix"></div>
                                     
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" >Amounts will depreciate after</label>
                                 <div class="controls">
                                    <input class="input-small" id="input8" type="text" name="interval" /> <select data-placeholder="" class="input-small" name="interval_type" tabindex="1">
                                       <option value=""></option>
                                       <option value="days">days</option>
                                       <option value="months">months</option>
                                       <option value="years">years</option>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input7">By</label>
                                 <div class="controls">
                                    <div class="input-append">
                                       <input class="input-small" id="input7" type="text" name="percent" /><span class="add-on">%</span>
                                       <input type="hidden" name="camp_id" value="<?php echo $camp_id;?>" />
                                    <input type="hidden" name="page_id" value="5" />		 
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-info">Save</button>
                                 <button type="button" class="btn">Discard</button>
                              </div>
                              
                              </form>
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