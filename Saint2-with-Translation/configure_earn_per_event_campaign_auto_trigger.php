	<!-- BEGIN HEADER -->
<?php include('include/header.php'); ?>
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
				<div id="page" class="dashboard">  
					               
                </div> 
<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4>Campaign Name</h4>
									<span class="tools">
									
											
									</span>							
								</div>
								<div class="widget-body">
									 <h4>Auto Trigger</h4>
      <div class="row-fluid">
      	<div class="span6">
      <p>Choose to deduct points from one campaign and add the amount to another campaign once a user reaches a certain criteria that you set below</p>
      
      <form action="#" class="form-horizontal">
                              <div class="control-group">
                                 <label class="control-label" for="input1">Auto Trigger Level</label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="input1" />
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1">Points to Move</label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="input1" />
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1">Select Campaign</label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="input1" />
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1">Reason for Trigger</label>
                                 <div class="controls">
                                    <input type="text" class="input-medium" id="input1" />
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
	<div id="footer">
		
		<div class="span pull-right">
			<span class="go-top"><i class="icon-arrow-up"></i></span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<script src="assets/js/jquery-1.8.2.min.js"></script>	
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.blockui.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="assets/js/excanvas.js"></script>
	<script src="assets/js/respond.js"></script>
	<![endif]-->	
    <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>	
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>	
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>	
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="assets/js/app.js"></script>		
   <script>
      jQuery(document).ready(function() {			
      	// initiate layout and plugins
      	App.init();
      });
   </script>
</body>
<!-- END BODY -->
</html>