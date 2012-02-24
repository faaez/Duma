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
						<div class="span9" style="margin-top: 20px; margin-bottom: 10px; border:3px solid #404040; height: 400px; margin-left: 50px; width: 680px; ">
							<div class="row" style="margin-left: 0px;">
								<div class="span4" style="min-height: 75px; width: 330px; filter: alpha(opacity=60);"> 
														<!---khtml-opacity: 0.6;  -moz-opacity: 0.6;  opacity: 0.6;-->
									<h3> Your Listed Jobs </h3>
									<table class="zebra-striped" style="width: 100%; background-color: #bababa; ">
									<tbody>
										<tr>
											<td width="70%">
											Job Name
											</td>
											<td>
												<form action="process_jobslist.php" method="post" style="margin-bottom: 0px; ">
													<input class="btn small success" type="submit" name="add" value="Edit" style="height: 25px; width: 40px; font-size: 12px;"> </input>
												</form>
											</td>
											<td>
												<form action="process_jobslist.php" method="post" style="margin-bottom: 0px; ">
													<input class="btn small danger" type="submit" name="add" value="Delete" style="height: 25px; width: 50px; font-size: 12px;"> </input>
												</form>
											</td>
										</tr>
										<tr>
											<td width="70%">
											Job Name
											</td>
											<td>
												<form action="process_jobslist.php" method="post" style="margin-bottom: 0px; ">
													<input class="btn small success" type="submit" name="add" value="Edit" style="height: 25px; width: 40px; font-size: 12px;"> </input>
												</form>
											</td>
											<td>
												<form action="process_jobslist.php" method="post" style="margin-bottom: 0px; ">
													<input class="btn small danger" type="submit" name="add" value="Delete" style="height: 25px; width: 50px; font-size: 12px;"> </input>
												</form>
											</td>
										</tr>
										<tr>
											<td width="70%">
											Job Name
											</td>
											<td>
												<form action="process_jobslist.php" method="post" style="margin-bottom: 0px; ">
													<input class="btn small success" type="submit" name="add" value="Edit" style="height: 25px; width: 40px; font-size: 12px;"> </input>
												</form>
											</td>
											<td>
												<form action="process_jobslist.php" method="post" style="margin-bottom: 0px; ">
													<input class="btn small danger" type="submit" name="add" value="Delete" style="height: 25px; width: 50px; font-size: 12px;"> </input>
												</form>
											</td>
										</tr>
										
										</tbody>
									</table>
								</div>
								<div class="span4" style="min-height: 75px; width: 300px;">
									<form action="process_jobslist.php" method="post" class="pull-left">
										<table width="350px" style="margin-bottom: 0px;">
											<tbody>
												<tr>
													<td align="right" valign="middle" height="100%" style="vertical-align:middle;" > New Job </td>
													<td font=""> <input class="input-large" type="text" placeholder="keyword"> </input></td>
												</tr>
											</tbody>
										</table>
										<div class="row" style="margin-left: 0px; margin-top: 10px;">
											<div class="span4" style="margin-top: 0px; min-height: 50px; border-left: 0px solid #eee;">
												<input class="btn small primary" type="submit" name="add" value="Add Job" style="height: 30px; width: 100px; font-size: 15px;"> </input>
											</div>
										</div>
									</form>
								</div>
								
							</div>
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
