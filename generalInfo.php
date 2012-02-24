<?include "connect.php"?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?include "signup_header.php"?>
    <div class="container">
		<div class="content">
			<? if (isset($_GET["B$@4it"])){?>
				<div class="row" style="width:100%">
					<div class="span12.5" style="background-color:darkorange; margin-left:142px; height: 14px;">
						<table bgcolor="darkorange"><tr><td><p style="color:white;font-family: 'Trebuchet MS', sans-serif;"> 
						<?php $errno = $_GET["B$@4it"];
						if ($errno == 1) { echo "Thank you for confirming your phone number. Welcome to DUMA!";} 
						
						?></p></td></tr></table>
					</div>
				</div>
				<?}?>
			<div class="row" style="margin-left: 0px";>
					<div class="span16">
						<div class="row " style="margin-left: -10px; margin-bottom: 0px">
							<div class="span2" style="margin-top:10px;margin-bottom: 10px">
							<h4 class="glow" style="font-family: 'Trebuchet MS', sans-serif; font-size: 30px; font-weight: lighter; color:#444444; "> &nbsp;Step 1:</h4>
							</div>
							<div class="span5" style="margin-bottom: 10px; width:350px;">
							<h2 style="margin-top:10px;font-family: 'Trebuchet MS', sans-serif; font-weight: lighter; color:#444444; font-size: 25px; "> General Information</h2>
							</div>
							
						</div>
						<div class="row " style="margin-left: -10px; margin-bottom: 0px; ">
							<div class = "span8" style="">
							<?
							$all = mysql_query("SELECT * FROM `locations` LIMIT 0 , 30") or die (mysql_error());
							$numrows = mysql_num_rows($all);
							$info = mysql_query("SELECT * FROM `users` WHERE `users`.`id` = '$userid'") or die (mysql_error());
							$user_data = mysql_fetch_assoc($info);
							$email = $user_data['email'];
							?>
								<form action="signup.php" class="pull-left">	
									<table width="350px" style="margin-bottom: 5px;">
										<tbody>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Email </td>
												<td font=""> <input class="input-xlarge" type="text"  <?if ($email){echo "value=\"$email\"";}?>> </input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Location/Ward </td>
												<td> <select class="xlarge" style = "width: 340px;"name="gender_select" id="gender_select"> 
												<option> </option>
												<?
												while ($loc = mysql_fetch_assoc($all)){
												$location = $loc["location_name"];
												echo "<option> $location </option>"; 
												}
												?>
												</select>
												</td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Age </td>
												<td> <input class="input-xlarge" type="text" > </input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Gender </td>
												<td> <select class="xlarge" style = "width: 340px;" name="gender_select" id="gender_select"> 
												<option> </option>
												<option> Male </option>
												<option> Female </option>
												</select>
												</td>
											</tr>
											<tr>
												<td align="right" > Education <p style="font-size = 3px;"><em>(Check all </br> that apply)</em></p></td>
												<td> 
												<table style="opacity:0.75;filter:alpha(opacity=75);">
													<tbody>
														<tr>
															<td>
																<input type="checkbox" name="vehicle" value="Car" /> Primary School
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" name="vehicle" value="Car" /> Secondary School
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" name="vehicle" value="Car" /> University
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" name="vehicle" value="Car" /> Technical School
															</td>
														</tr>
													
													</tbody>
												</table>
											</td>
											</tr>
										
										</tbody>
									
									</table>
									<div class="row" style="margin-left: 0px";>
									<div class="span4" style="margin-top: 0px; margin-left: 88px; min-height: 50px; border-left: 0px solid #eee;">
										<button class="btn small orange" type="submit">  Next Step </button>
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>	
			</div>
			
		<?include "bottom_pane.php"?>
		<footer>
			<p>&copy; Duma 2011</p>
		</footer>
    </div> 
  </body>
</html>
