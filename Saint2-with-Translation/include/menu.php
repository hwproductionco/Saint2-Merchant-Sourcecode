<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.html">
				Welcome, <?php
				//$parse_array_user_info['reponse']['user']['user_permissions']['edit_account_info'];
				
				 echo $parse_array_user_info['response']['user']['user_id'];?>
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->				
				<div class="top-nav">
					
					<!-- BEGIN TOP NAVIGATION MENU -->					
					<ul class="nav pull-right" id="top_menu">
						<li class="divider-vertical hidden-phone hidden-tablet"></li>
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="width:100%;">
							<i class="icon-wrench"></i>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="account_settings.html"><i class="icon-wrench"></i> Account Info</a></li>
								<li><a href="#"><i class="icon-pushpin"></i> Shortcuts</a></li>
								<li><a href="#"><i class="icon-trash"></i> Trash</a></li>								
							</ul>
						</li> -->
						<!-- END USER LOGIN DROPDOWN -->
						<li class="divider-vertical hidden-phone hidden-tablet"></li>
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="width:100%;">
							<i class="icon-cog"></i>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<?php if($parse_array_user_info['response']['user']['user_permissions']['edit_my_info'] == 'Yes'){ ?><li><a href="user_info.php"><i class="icon-user"></i><?php echo $lang['User'].' '.$lang['info'];?></a></li><?php } ?>
                                <?php if($parse_array_user_info['response']['user']['user_permissions']['edit_account_info'] == 'Yes'){ ?>
								<li><a href="account_settings.php"><i class="icon-wrench"></i><?php echo $lang['Account'].' '.$lang['info'];?></a></li>
                                
                                <?php } ?>
                                <?php if($parse_array_user_info['response']['user']['user_permissions']['manage_fields'] == 'Yes'){ ?><li><a href="custom_fields.php"><i class="icon-cogs"></i> <?php echo $lang['manage_fields_custom_header'];?></a></li><?php } ?>
								<li class="divider"></li>
								<li><a href="login.php"><i class="icon-key"></i> Log Out</a></li>
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
					<!-- END TOP NAVIGATION MENU -->	
				</div>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
    <div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul>
				<li>
					<a href="index.php">
					<i class="icon-dashboard"></i> Dashboard
					</a>					
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					<i class="icon-group"></i> <?php echo $lang['Customers'];?>
					<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="manage_customers.php">View <?php echo $lang['All'];?></a></li><li><a class="" href="customer_search.php"><?php echo 'Advanced '.$lang['nav_find'];?></a></li>
						<?php if($parse_array_user_info['response']['user']['user_permissions']['import_customers'] == 'Yes') { ?><li><a class="" href="#"><?php echo $lang['manage_import_customers'];?></a></li><?php } ?>
						<?php if($parse_array_user_info['response']['user']['user_permissions']['import_transactions'] == 'Yes') { ?><li><a class="" href="#">Import <?php echo $lang['Transactions'];?></a></li><?php } ?></ul>

				</li>
				
				<li class="has-sub">
					<a href="javascript:;" class="">
					<i class="icon-book"></i> <?php echo $lang['Campaigns'];?>
					<span class="arrow"></span>
					</a>
                <ul class="sub">
               
                <li><a class="" href="view_all_programs.php">View <?php echo $lang['All'];?></a></li>
                
                 <?php if($parse_array_user_info['response']['user']['user_permissions']['add_campaign'] == 'Yes') { ?>
                <li><a class="" href="add_new_campaign.php"><?php echo $lang['campaign_add_new'];?></a></li>
                <?php } ?>
                
                </ul></li
				><?php if($parse_array_user_info['response']['user']['user_permissions']['access_reports'] == 'Yes') { ?><li class="has-sub">
					<a href="javascript:;" class="">
					<i class="icon-bar-chart"></i> Reports
					<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="all_transactions.php"><?php echo $lang['All'].' '.$lang['Transactions'];?></li></a>
						<li><a class="" href="redeemed_only.php"><?php echo $lang['report_audits_redeemed_only'];?></a></li>
						<li><a class="" href="total_transactions.php"><?php echo $lang['report_audits_totals'];?></a></li>
<li><a class="" href="all_customers.php"><?php echo $lang['report_all_customers'];?></a></li>
<li><a class="" href="new_customers.php"><?php echo $lang['report_new_customers_header'];?></a></li>
<li><a class="" href="frequent_customers.php"><?php echo $lang['report_frequent_header'];?></a></li>
<li><a class="" href="missing_customers.php"><?php echo $lang['report_missing_header'];?></a></li>
<li><a class="" href="birthday.php"><?php echo $lang['report_customer_birthday_header'];?></a></li>
<li><a class="" href="custom_date.php"><?php echo $lang['report_custom_date_header'];?></a></li>

<li><a class="" href="customer_balance.php"><?php echo $lang['report_balances_header'];?></a></li><li><a class="" href="#">Videos Created</a></li><li><a class="" href="#">Videos Watched</a></li><li><a class="" href="#">Social Media Integrations</a></li></ul></li><?php } ?>
				<?php if($parse_array_user_info['response']['user']['user_permissions']['view_user'] == 'Yes' && $parse_array_user_info['response']['user']['user_permissions']['add_user'] == 'Yes') { ?><li class="has-sub">
					<a href="javascript:;" class="">
					<i class="icon-user"></i> <?php echo $lang['User'];?>
					<span class="arrow"></span>
					</a>
					<ul class="sub">
						 <?php if($parse_array_user_info['response']['user']['user_permissions']['view_user'] == 'Yes') { ?><li><a  href="manage_authorized_users.php">View</a></li><?php } ?>
                        <?php if($parse_array_user_info['response']['user']['user_permissions']['add_user'] == 'Yes') { ?><li><a  href="add_new_user.php"><?php echo $lang['title_add_user'];?></a></li><?php } ?>
						</ul></li><?php }?>
				<li class="has-sub">
					<a href="javascript:;" class="">
					<i class="icon-tablet"></i> Apps
					<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="view_all_apps.php">View Apps</a></li><li><a class="" href="add_new_app.php">Create New App</a></li></ul></li>
				
			</ul>
		</div>

