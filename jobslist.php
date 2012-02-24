<!DOCTYPE html>
<html lang="en">
  <head>
    <?include "signup_header.php"?>
    <div class="container">
		<div class="content">
			<div class="row" style="margin-left: 0px";>
					<div class="span16">
						<div class="row " style="margin-left: -10px; margin-bottom: 0px">
							<div class="span2" style="margin-bottom: 10px">
							<h4 class="glow" style="margin-top:10px;font-family: 'Trebuchet MS', sans-serif; font-size: 30px; font-weight: lighter; color:#444444; "> &nbsp;Step 3:</h4>
							</div>
							<div class="span12" style="margin-bottom: 10px;">
							<h2 style="margin-top:10px;font-family: 'Trebuchet MS', sans-serif; font-weight: lighter; color:#444444; font-size: 25px; "> Tell us what jobs you have</h2>
							</div>
						
						<div class="span15" style="margin-bottom: 7px; margin-left: 30px; margin-right: auto;">
							<h2 style="font-family: 'Trebuchet MS', sans-serif; text-align: left; font-weight: medium; color:#444444; font-size: 16px; line-height: 20px;"> 
								This step only applies for employers.  If you will not be using DUMA to hire employees, you can <input class="btn small orange" type="submit" style="width:160px;" name="skipstep" value="Skip this Step"> </input> 
							</h2>
							</div>
						
						</div>
						<div class="row " style="margin-left: -10px; margin-bottom: 0px; ">

							<div class = "span8" style="">
								<form action="process_jobslist.php" method="post" class="pull-left">
									<div class="row" style="margin-left: 0px";>
										<div class="span4" style="margin-top: 0px; min-height: 40px; border-left: 0px solid #eee;">
											
										</div>
									</div>
									<table width="350px" style="margin-left:-50px;margin-top:-40px;margin-bottom: -20px;">
										<tbody>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;" > Job 1 </td>
												<td font=""> <input class="input-xlarge" type="text" placeholder="Keyword (e.g. mechanic)"> </input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Job 2 </td>
												<td font=""> <input class="input-xlarge" type="text" placeholder="Keyword (e.g. electrician)"> </input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Job 3 </td>
												<td font=""> <input class="input-xlarge" type="text" placeholder="Keyword (e.g. tailor)"> </input></td>
											</tr>
										</tbody>
									</table>
									<div class="row" style="margin-left: 0px; margin-top: 30px;">
										<div class="span4" style="margin-top: 0px; min-height: 50px; border-left: 0px solid #eee;">
											<input class="btn small primary" type="submit" name="add" value="Add Another Job" style="margin-left:38px;height: 30px; width: 150px; font-size: 15px;"> </input>
										</div>
									</div>
									<div class="row" style="margin-left: 0px";>
										<div class="span15" style="margin-top: 0px; min-height: 50px; border-left: 0px solid #eee;">
											<p style="margin-left:-8px;font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight:bold;"> When you wish to hire someone for these jobs, simply text "#keyword" to 07xx-xxx-xxx (Example:#mechanic) </br>
												You can always request a job by texting "menu" and then selecting from our standard list of jobs, </br>
												but creating job profiles on MyDuma.org allows you to specify your own hiring criteria.
											</p>
										</div>
									</div>
									
									<div class="row" style="margin-left: 0px; height: 20px; margin-top: 5px; ">
										<div class="span4" style="margin-left:-10px;margin-top: -5px; min-height: 30px; border-left: 0px solid #eee;">
											<input class="btn small orange" type="submit" style="width:175px;" name="previous" value="Previous Step"> </input>
										</div>
										<div class="span4 " style="font-size:15px;margin-top: -5px; margin-left: -50px; min-height: 30px; border-left: 0px solid #eee;">
											<input class="btn small orange" type="submit" style="width:150px;" name="next" value="Next Step"> </input>
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
