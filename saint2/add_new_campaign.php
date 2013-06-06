<?php include('include/header.php'); ?>
	<!-- BEGIN HEADER -->
    <?php include('include/menu.php');?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
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
				<div id="page" class="dashboard">  
               <?php include('include/small_header.php');?>
                </div>
<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-ok"></i>  Add New Campaign</h4>
															
								</div>
								<div class="widget-body">
                                <div class="row-fluid">
                                <div class="span12">
                                
                                <h5>Select a Campaign Type</h5>
                                
                                <p>If you haven’t already, make sure to famillarize your self with all the features and possibillities that these five program types offer, on our website’s Ideas section. You will also find there step-by-step instructions on which campaign style to choose, and how to set it up.</p>
                                
                               
                                <!-- BEGIN FORM -->
                            	<div style="padding-top:15px;">
                                <form method="get" action="add_campaign.php">
                                <table border="0" style="width:370px;" cellspacing="10" cellpadding="3">
                                	<tr>
                                    	<td style="width:20px;"><input type="radio" name="point" id="points" value="points" /></td>
                                        <td style="width:100px;">Points Campaign</td>
                                        <td style="width:65px;"><a href="#myModal1" role="button" class="btn btn-mini btn-info" data-toggle="modal" style="margin-top:-10px;">More Info</a></td>
                                    </tr>
                                    
                                    <tr>
                                    	<td><input type="radio" name="point" value="giftcard" id="giftcard" /></td>
                                        <td>Gift Cards Campaign</td>
                                        <td><a href="#myModal3" role="button" class="btn btn-mini btn-info" data-toggle="modal" style="margin-top:-10px;">More Info</a></td>
                                    </tr>
                                    
                                    <tr>
                                    	<td><input type="radio" name="point" value="buyx" id="buyx" /></td>
                                        <td>Buy X Get 1 Free Campaign</td>
                                        <td><a href="#myModal4" role="button" class="btn btn-mini btn-info" data-toggle="modal" style="margin-top:-10px;">More Info</a></td>
                                    </tr>
                                    
                                    <tr>
                                    	<td><input type="radio" name="point" value="events" id="events" /></td>
                                        <td>Event Based Campaign</td>
                                        <td><a href="#myModal5" role="button" class="btn btn-mini btn-info" data-toggle="modal" style="margin-top:-10px;">More Info</a></td>
                                    </tr>
                                    
                                    <tr>
                                    	<td><input type="radio" name="point" value="earned" id="earned" /></td>
                                        <td>Earn Money Per Event Campaign</td>
                                        <td><a href="#myModal6" role="button" class="btn btn-mini btn-info" data-toggle="modal" style="margin-top:-10px;">More Info</a></td>
                                    </tr>
                                </table>
                            </div>
                              
                                                           
                               <div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel2">Points Campaigns</h3>
										</div>
										<div class="modal-body scroller">
											<p>Your customers accumulate points based on their purchases, payments, or promotion you define. Points can be redeemed based on custom reward levels.</p>

<p>A points program, like an airline miles programs, lets you:</p>

<p><strong>Assign a certain amount of points per Dollars spent. For example:</strong>
<ul>
	<li>5 points for each Dollar</li>
	<li>.25 points per Dollar</li>
    </ul>
    </p>

<p><strong>Define Reward Levels. Some examples:</strong>
<ul>
<li>1000 points: 50% off a purchase</li>
<li>5000 points: Free Widget</li>
<li>100,000 points: Trip to Disneyland.</li>
</ul>
</p>

<p><strong>Define promotions. Some examples:</strong>
<ul>
<li>Double-point Tuesdays</li>
<li>Extra 500 points for pre-booking</li>
<li>25% Bonus points with Gift Card purchase.</li>
</ul>
</p>

<p>Optionally, you can define a Spend-to-Reward Ratio that allows you to redeem points using a Dollar value.</p>
										</div>
										<div class="modal-footer">
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><i class="icon-check"></i> OK</button>
										</div>
									</div>
                              
                              
                               <div id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel3">Gift Card Campaign</h3>
										</div>
										<div class="modal-body">
												<p>A Gift Card campaign allows you to add money to a customer\'s account, and deduct it when used as payment.</p>

<p>Simple and straightforward. It\'s usually used in conjunction with plastic gift cards, where a card is loaded with a certain cash value to be given out as a present or to be used as a pre-paid debit card.</p>

<p><strong>Plastic cards are not needed,</strong> and it can be used any time you simply need to keep track of multiple stored value accounts, such as bar tabs, installment purchase plans, kids' allowance... your imagination is the only limit.</p>
										</div>
										<div class="modal-footer">
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><i class="icon-check"></i> OK</button>
										</div>
									</div>
                                    
                                     <div id="myModal4" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel4">Buy X Get 1 Free Campaign</h3>
										</div>
										<div class="modal-body">
											<p>	Like the paper punch-card it replaces, only much more flexible, this campaign style allows you to reward your customers based on the number of times they purchase <strong>any number of different</strong> products, product lines, or services.</p>
                                            
                                            <p>Great for coffee houses and any store that offers a limited menu of items or types of items. (Like buy 10 regulars coffees and get the next free, buy 3 mugs and get the next one free, etc. Define as many of these Buy 'X' and Get One Free promotions as you want.) It's often encountered in the form of paper cards with a certain number of squares to be punched-out before receiving a free item or service. This type of campaign allows you to do the same, but now without the necessity of printing cards (and dealing with lost ones, etc.) Another immense benefit is that you know how many customers you have on the program and you can run marketing reports on them.</p>
                                            
                                            <p><strong>You can assign any number of items or item categories a specific number until the customer can receive a free one. For example:</strong>
                                            <ul>
                                            	<li>10 haircuts until the next one is free.</li>
                                                <li>16 lbs of feed until you get one on the house.</li>
                                                <li>8 Pastries until the next one is free.</li>
                                                </ul>
                                                </p>
                                                
                                                <p>You can also assign a default X until the next one is free number to make it easier to set up a bunch of items that all redeem at the same level.</p>
                                            
                                            
										</div>
										<div class="modal-footer">
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><i class="icon-check"></i> OK</button>
										</div>
									</div>
                                    
                                     <div id="myModal5" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel5">Event Based Campaigns</h3>
										</div>
										<div class="modal-body">
											<p>Allows you to define rewards based on the number of interactions customers have with your business, rather than money spent.</p>

<p>It is often used for customer referral campaigns: A business will give a few cards all stamped with the same number to one of its customers, a concierge at a hotel, or a receptionist at a large firm. When one of their referrals comes to your business and hands you one of those cards, your evangelist gets a 'visit' added to their balance. After, for example, 5 'visits' they receive a free service or widget. You get new customers. Everyone wins.</p>

<p>That is just one scenario. People have found some pretty creative ways to use this program.</p>

<p>An Events-Based program lets you:</p>

<p><strong>Assign a number of reward levels. For example:</strong>
<ul>
<li>accumulate 5 events and get 10% off</li>
<li>accumulate 10 visits and get 50% off</li>
<li>accumulate 20 referrals and get a massage</li>
</ul>

<p><strong>Some examples:</strong>
<ul>
<li>Referral Campaigns as described above.</li>
<li>Gyms keeping track of routines.</li>
<li>Product repairs until it gets replaced.</li>
<li>VIP Club usage.</li>
<li>etc...</li>
</ul>
</p>
										</div>
										<div class="modal-footer">
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><i class="icon-check"></i> OK</button>
										</div>
									</div>
                              
                              
                               <div id="myModal6" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel6">Earn Money per Event Campaigns</h3>
										</div>
										<div class="modal-body">
											<p>A hybrid between a Gift Card and an Event-Based campaign: Reward someone by giving them monetary credit (or actual cash) for each 'event' (store visit, referral, etc.), to be redeemed later for products or services at your establishment.</p>

<p><strong>This type of loyalty programs lets you:</strong>
<ul>
<li>Assign how many Dollars are earned for each visit or action</li>
<li>Redeem any amount from the accumulated balance, just like a gift card</li>
</ul>
</p>

<p><strong>Some examples:</strong>
<ul>
<li>Referral campaigns: Reward customers, hotel concierges, receptionists at large firms, for sending customers to your business.</li>
<li>Pay an employee or contractor for repetitive jobs.</li>
<li>Reward VIP customers with in-house 'monopoly' money to spend on your business.</li>
<li>Give kids help-around-the-house incentives.</li>
</ul>
</p>
										</div>
										<div class="modal-footer">
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><i class="icon-check"></i> OK</button>
										</div>
									</div>
                              
                              
                              
                              
                              

<div class="control-group" style="padding-top:15px;">
                                 <label class="control-label" for="input1"><strong>Campaign Name</strong></label>
                                 <div class="controls">
                                    <input type="text" class="span6 popovers" id="input3" name="name"  /> <a href="#myModal2" role="button" class="btn btn-info" data-toggle="modal" style="margin-top:-10px;">More Info</a>
                                 </div>
                              </div>
                              
                              
                              <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel2">Campaign Tips</h3>
										</div>
										<div class="modal-body">
											<p>If you are creating your first campaign, give it a name that starts with ‘Test’ while you try things out - You will be able to create as many campaigns as you want, and pause or delete any unwanted ones. In general, it’s a good idea to use your organisation’s name, if short, or a play on words based on it. Some examples of names: ACME Rewards, Club Red (For a salon called ‘Red’), Roasters (For a coffee shop that caters to bikers), Party Points (For a caterer)"</p>
										</div>
										<div class="modal-footer">
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><i class="icon-check"></i> OK</button>
										</div>
									</div>
                              
                              
                            
                              <div class="form-actions" style="padding-top:35px;">
                                 <button type="submit" class="btn btn-success"><i class="icon-plus"></i> Add Campaign</button>
                                 <button type="button" class="btn" onclick="resetme_campaign()"><i class="icon-ban-circle"></i> Reset</button>
                              </div>
                              
                              
                              </div></div>
                              </form>
                              <!-- END FORM -->
									
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