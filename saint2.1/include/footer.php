<div id="footer">
		
	<div class="span pull-right">
			<span class="go-top"><i class="icon-arrow-up"></i></span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->		
   <!-- Load javascripts at bottom, this will reduce page load time -->
   
<!--   <script src="include/assets/js/jquery-1.8.2.min.js"></script>-->		
   <script src="include/assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="include/assets/js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="assets/js/excanvas.js"></script>
   <script src="assets/js/respond.js"></script>
   <![endif]-->
   <script src="include/assets/flot/jquery.flot.js"></script>
	<script src="include/assets/flot/jquery.flot.resize.js"></script>
	<script src="include/assets/flot/jquery.flot.pie.js"></script>
	<script src="include/assets/flot/jquery.flot.stack.js"></script>
	<script src="include/assets/flot/jquery.flot.crosshair.js"></script>
        <script type="text/javascript" src="include/assets/bootstrap-rowlink/bootstrap-rowlink.js"></script>
    <script type="text/javascript" src="include/assets/jquery.datepick.js"></script>
   <script type="text/javascript" src="include/assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="include/assets/data-tables/DT_bootstrap.js"></script>
   <script type="text/javascript" src="include/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="include/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="include/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>	
   <script type="text/javascript" src="include/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="include/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="include/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="include/assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="include/assets/bootstrap-daterangepicker/daterangepicker.js"></script>	
   <script type="text/javascript" src="include/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>	
   <script type="text/javascript" src="include/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script src="inclde/assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
   <script src="include/assets/js/app.js"></script>		
    <?php
	  $str = '';
	   $data['type'] = 'customer_find';
							$customer_list_contents	=	 submit_cURL ($data);
											$parse_array_customer_list = array();
											$parse_array_customer_list = xml2array($customer_list_contents, $get_attributes=1, $priority = 'tag');
											if(!empty($parse_array_customer_list['response']['customer']))
											{
											if(empty($parse_array_customer_list['response']['customer'][0]))
											{
												$str = '"'.$parse_array_customer_list['response']['customer']['first_name'].' '.$parse_array_customer_list['response']['customer']['last_name'].'"'; 
							?>
	 
	
 
<?
											}
											else {
											foreach($parse_array_customer_list['response']['customer'] as $customers)
											{
												$str .= '"'.$customers['first_name'].' '.$customers['last_name'].'",'; 
												?>
												
     

<?php }}}?>
   <script>
      jQuery(document).ready(function() {
		  			
      	// initiate layout and plugins
      	App.init();
		$( "#autocomplete" ).autocomplete({
			
	
		 source: [
	 <?php
echo trim($str);
 ?>
]
});

		$('#email_check').change(function (){ 
		
			document.getElementById('email').value	= 'Y';
		//alert(document.getElementById('email').value);
		});
      });
   </script>
   <!-- END JAVASCRIPTS -->	
</body>
<!-- END BODY -->
</html>