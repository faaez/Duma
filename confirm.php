<?
$phone_number = null; 
$pass_code = null; 

if (isset($_GET["pn"])){
	$phone_number = $_GET["pn"]; 
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?include "signup_header.php"?>
    <div class="container">
		<div class="content">
			<div class="row" style="margin-left: 0px";>
					<div class="span16">
						<div class="row " style="margin-left: -10px; margin-bottom: 0px">
							<div class="span2" style="margin-bottom: 10px; width:90%">
							<h4 class="glow small" style="margin-top:10px;font-family: 'Trebuchet MS', sans-serif; font-size: 25px; font-weight: lighter; width: 800px; color:#444444; ">
							<?if ($phone_number && !isset($_GET["B$@4it"])) {echo "Your account has been created! Please enter the 4 digit code sent to $phone_number to confirm your account"; } 
							else { echo "Confirm your account";}?></h4>
							</div>
						</div>
						<? if (isset($_GET["B$@4it"])){?> <div class="row" style="width:100%;">
						<div class="alert-message warning" style="background-color:orange; margin-left:150px; height: 40px;">
							<table bgcolor="orange"><tr><td><p style="color:white;"> 
							<?php $errno = $_GET["B$@4it"];
							if ($errno == 1) { echo "Error: Please fill in all fields and click submit";} 
							else if ($errno == 2) { echo "Error: The phone number, pass key combination could not be found";} 
							
							?></p></td></tr></table>
							</div>
						</div><?}?>
						
						<div class="row " style="margin-left: 10px; margin-top: 10px; ">

							<div class = "span8" style="">
								<form action="process_confirm.php" method="post" class="pull-left">
									<table width="350px">
										<tbody>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle; width:100px" > Phone</td>
												<td font=""> <input class="input-xlarge" type="text" name="phone_number" value="<?if ($phone_number) {echo "$phone_number"; }?>"> </input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;width:100px"> Confirm Code </td>
												<td font=""> <input class="input-xlarge" type="text" name="pass_code"> </input></td>
											</tr>
											<tr>
												<td><p>&nbsp;</p></td>
												<td> <button class="btn large orange" type="submit">Confirm Account </button></td>
											</tr>
										</tbody>
									</table>	
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
