<!DOCTYPE html>
<html lang="en">
  <head>
    <?include "user_header.php"?>
    <div class="container">
		<div class="content">
			<div class="row" style="margin-left: 0px";>
				<div class="span16">
					<div class="row " style="margin-left: -10px; margin-bottom: 0px">
						<?include "user_sidebar.php"?>
						<div class="span9" style="margin-top: 20px; margin-bottom: 10px; border:3px solid #404040; height: 400px; margin-left: 50px; ">
							<form action="signup.php" class="pull-left">	
									<table width="350px" style="margin-bottom: 5px;">
										<tbody>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Full Name </td>
												<td font=""> <input class="input-large" style="height: 20px;"type="text"> </input></input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Phone Number </td>
												<td font=""> <input class="input-large" style="height: 20px;"type="text"> </input></input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Email Address</td>
												<td font=""> <input class="input-large" style="height: 20px;"type="text"> </input></input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Location/Ward </td>
												<td font=""> <input class="input-large" style="height: 20px;"type="text"> </input></input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Education </td>
												<td font=""> <input class="input-large" style="height: 20px;"type="text"> </input></input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Current Pin</td>
												<td font=""> <input class="input-large" style="height: 20px;"type="text"> </input></input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;">	New Pin </td>
												<td font=""> <input class="input-large" style="height: 20px;"type="text"> </input></input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Re-Enter New Pin </td>
												<td font=""> <input class="input-large" style="height: 20px;"type="text"> </input></input></td>
											</tr>
											
										</tbody>
									</table>
									<div class="row" style="margin-left: 0px";>
									<div class="span4" style="margin-top: 0px; margin-left: 110px; min-height: 50px;   border-left: 0px;">
										<button class="btn small orange" type="submit" style="height: 35px;">  Save Changes </button>
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
