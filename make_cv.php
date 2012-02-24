<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
    <title>DUMA</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
	<script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript">
	$(function() {
	
	var ps_PhoneNumber = 'Phone Number';
	$("input#PN").val(ps_PhoneNumber);
	
    $('input#PN').focus(function() {
        if ($(this).val() == ps_PhoneNumber)
            $(this).val('');
    });
 
    $('input#PN').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_PhoneNumber);
    });
	
	
	var ps_jobTitle = 'Job Title';
	$("input#JT").val(ps_jobTitle);
	
    $('input#JT').focus(function() {
        if ($(this).val() == ps_jobTitle)
            $(this).val('');
    });
 
    $('input#JT').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_jobTitle);
    });
	
	var ps_fullName = 'Full Name';
	$("input#FN").val(ps_fullName);
	
    $('input#FN').focus(function() {
        if ($(this).val() == ps_fullName)
            $(this).val('');
    });
 
    $('input#FN').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_fullName);
    });
	
	
	var ps_name = 'Name of School';
	$("input#Name_school").val(ps_name);
	
    $('input#Name_school').focus(function() {
        if ($(this).val() == ps_name)
            $(this).val('');
    });
 
    $('input#Name_school').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_name);
    });
	
	var ps_position = 'Name of Job/Position';
	$("input#JP").val(ps_position);
	
    $('input#JP').focus(function() {
        if ($(this).val() == ps_position)
            $(this).val('');
    });
 
    $('input#JP').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_position);
    });
	
	
	var ps_company = 'Name of Company';
	$("input#Company").val(ps_company);
	
    $('input#Company').focus(function() {
        if ($(this).val() == ps_company)
            $(this).val('');
    });
 
    $('input#Company').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_company);
    });
	
	
	var ps_start_year = 'Start Year';
	$("input#Start_year").val(ps_start_year);
	
    $('input#Start_year').focus(function() {
        if ($(this).val() == ps_start_year)
            $(this).val('');
    });
 
    $('input#Start_year').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_start_year);
    });
	
	var ps_end_year = 'End Year';
	$("input#End_year").val(ps_end_year);
	
    $('input#End_year').focus(function() {
        if ($(this).val() == ps_end_year)
            $(this).val('');
    });
 
    $('input#End_year').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_end_year);
    });
	
	var ps_score = 'National Exam Score';
	$("input#Nat_Score").val(ps_score);
	
    $('input#Nat_Score').focus(function() {
        if ($(this).val() == ps_score)
            $(this).val('');
    });
 
    $('input#Nat_Score').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_score);
    });
	
	var ps_location = 'Location/Ward';
	$("input#Loc_school").val(ps_location);
	
    $('input#Loc_school').focus(function() {
        if ($(this).val() == ps_location)
            $(this).val('');
    });
 
    $('input#Loc_school').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_location);
    });
	
	var ps_degree = 'Name of Degree';
	$("input#Degree").val(ps_degree);
	
    $('input#Degree').focus(function() {
        if ($(this).val() == ps_degree)
            $(this).val('');
    });
 
    $('input#Degree').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_degree);
    });
	
	var objective_content = 'What kind of job are you looking for?\nWhat are your strengths and skills that make you a good employee?\nWhat are your longterm career goals?';
	$("textarea#objective").val(objective_content);
	
    $('#objective').focus(function() {
        if ($(this).val() == objective_content)
            $(this).val('');
    });
 
    $('#objective').blur(function() {
        if($(this).val() == '')
            $(this).val(objective_content);
    });
});
	</script>
    <link href="./css/bootstrap.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Spinnaker' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
	
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
		background-position: right top;
		height: 225px;
		width: 100%;
      }
      body {
        padding-top: 70px; /* 70px to make the container go all the way to the bottom of the topbar */
		/*background-color: #ff00ff;*/
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 960px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }
	
      /* The white background content wrapper */
      .container > .content {
        padding: 10px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }
	/* Wrapper for bottom orange pane */
      .container > .bottom_pane {
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }
		
	
      /* Page header tweaks */
      .page-header {
        background-color: #002b00;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }
		.content {
		background-image: url(images/background.png);
		background-color: #eee;
		background-repeat: repeat;
 
		}
		.bottom_pane {
		background-color: #fff;
		background-repeat: repeat-x;
		height: 100px; 
		}

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 500px;
      }
	  
	  .bottom_pane .span17{
		background-image: url(images/bottom_line.png);
		background-color: #eee;
		background-repeat: repeat-x;
		height:10px;
	  }
	  .bottom_pane .span12{
		height:10px;
		margin: 5px auto; 
		text-align: left;
	  }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }
		
		
	.topbar .btn:hover {
	  background-position: 0 30px;
	  color: #333;
	  text-decoration: none;
	}
	.topbar .fill{
		margin-top: 15px;
		background-color: #444444;
		/*width: 960px;*/
	}
		
	.topbar .container {
		background-color: #444444;
		/*width: 960px;*/
	}
	
  .topbar .btn {
	border: 0;
  }

    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>
		<div class="topbar" >
		  <div class="fill">
			<div class="container">
				<div class="row">
					<div class="span16">
						<div class="row">
							<div class="span8">
							  <a href="index.php"><img src="images/dumalogo.png" height="50px"> </img></a>
							 </div>
							 <div class="span8">
								<table>
									<tbody>
										<tr>
											<td>
												<div class="span3" style="height: 40px; border-left: 0px;">
													<form method="post" action="make_cv.php" style="margin-top: 5px; margin-bottom: 5px;">
														<input class="btn small grey" type="submit" style="height: 30px; width: 90px; font-size: 12px; color: #ffffff;" value="Make a CV!"> </input>
													</form>
												</div>
											</td>
											<td>
												<div class="span3" style="min-height: 10px; border-left: 0px;">
													<form method="post" action="profile.php" style="margin-top: 5px; margin-bottom: 5px;">
														<input class="btn small grey" type="submit" style="height: 30px; width: 90px; font-size: 12px; color: #ffffff;" value="My Profile"> </input>
													</form>
												</div>
											</td>
											<td>
												<div class="span3" style="min-height: 10px; border-left: 0px;">
													<form method="post" action="account.php" style="margin-top: 5px; margin-bottom: 5px;">
														<input class="btn small grey" type="submit" style="height: 30px; width: 90px; font-size: 12px; color: #ffffff;" value="My Account"> </input>
													</form>
												</div>
											</td>
											<td>
												<div class="span3" style="min-height: 10px; border-left: 0px;">
													<form method="post" action="userguide.php" style="margin-top: 5px; margin-bottom: 5px;">
														<input class="btn small " type="submit" style="height: 30px; width: 85px; font-size: 13px; color: #000000;" value="Sign out"> </input>
													</form>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
					  </div>
				  </div>
				</div>
			</div>
		  </div>
		</div>

    <div class="container">
		<div class="content">
			<div class="row" style="margin-left: 0px";>
				<div class="span16">
					<div class="row " style="margin-left: -10px; margin-bottom: 0px">
						<div class="span4" style="margin-top: 20px; border:3px solid #404040; margin-left: 10px; height: 400px; overflow: auto; padding: 5px; width: 320px; background-color: #f88158; -khtml-opacity: 0.70;  -moz-opacity: 0.70;  opacity: 0.70;">
							<div class="row" style="margin-left: 0px;">
							
								<table style="margin-bottom: 5px;">
									<tbody>
										<tr>
											<td > <h3 style="font-weight: bold; font-size: 20px; color: #000000; line-height: 20px; ">Turn your DUMA profile into a professional CV! </h3> </td>
										</tr>
										<? if (isset($_GET['objective'])){
											include "mcv_objective.php";
										}
										else if (isset($_GET['education'])){
											include "mcv_education.php";
										}
										else if (isset($_GET['experience'])){
											include "mcv_experience.php";
										}
										else if (isset($_GET['skills'])){
											include "mcv_skills.php";
										}
										else if (isset($_GET['references'])){
											include "mcv_references.php";
										}
										?>
										</tbody>
								</table>
							
							</div>
						</div>
						
						<div class="span9" style=" overflow: auto; margin-top: 20px; margin-bottom: 10px; border:3px solid #404040; height: 400px; margin-left: 50px; width: 530px; background-color: #FAFAFA; -khtml-opacity: 0.70;  -moz-opacity: 0.70;  opacity: 0.70;">
							<div class="row" style="margin-left: 0px; ">
								<h2 align="center">Full Name</h2>
								<p align="center"> Ward, Rift Valley | 254-XXX-XXX-XXX | email@something.com</p>
								<form style="margin: 0 0 0 0;" action="make_cv.php" method="GET">
								<table style="width: 100px; margin-bottom: 0; ">
									<tr style="height: 10px;">
										<td style="vertical-align: middle; height: 10px;">
											<h4 style="margin-left: 15px; line-height: 0px;">OBJECTIVE</h4> 
										</td>
										<td style="vertical-align: middle;">
											<input class="btn small primary" type="submit" style="width:35px; height: 15px; padding: 0 0 0 0; font-size: 10px;" name="objective" value="Edit"> </input> 
										</td>
									</tr>
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td><p style="margin-left: 25px; line-height: 0px;"> La la la la </p></td>
									</tr>
								</table>
								<table style="width: 100px; margin-bottom: 0; ">
									<tr style="height: 10px;">
										<td style="vertical-align: middle; height: 10px;">
											<h4 style="margin-left: 15px; line-height: 0px;">EDUCATION</h4> 
										</td>
										<td style="vertical-align: middle;">
											<input class="btn small primary" type="submit" style="width:35px; height: 15px; padding: 0 0 0 0; font-size: 10px;" name="education" value="Edit"> </input>
										</td>
									</tr>
								</table>
								
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:75%"><p style="margin-left: 25px; line-height: 0px;"> Nakuru Pri School, Nakuru </p> </td>
										<td><p style="line-height: 0px;">  1990-1998</p> </td>
									</tr>	
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:75%"><p style="margin-left: 50px; line-height: 0px;">National Exam Score </p> </td>
									</tr>	
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:75%"><p style="margin-left: 25px; line-height: 0px;"> Flamingo Secondary School, Nakuru </p> </td>
										<td><p style="line-height: 0px;">  1998-2002</p> </td>
									</tr>	
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:75%"><p style="margin-left: 50px; line-height: 0px;">National Exam Score </p> </td>
									</tr>	
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:75%"><p style="margin-left: 25px; line-height: 0px;"> University Of Nairobi </p> </td>
										<td><p style="line-height: 0px;">  2002-2007</p> </td>
									</tr>	
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:75%"><p style="margin-left: 50px; line-height: 0px;">Baba Alinituma </p> </td>
									</tr>	
								</table>
								<table style="width: 250px; margin-bottom: 0; ">
									<tr style="height: 10px;">
										<td style="vertical-align: middle; height: 10px; width: 90%;">
											<h4 style="margin-left: 15px; line-height: 0px;">WORK EXPERIENCE</h4> 
										</td>
										<td style="vertical-align: middle;">
											<input class="btn small primary" type="submit" style="width:35px; height: 15px; padding: 0 0 0 0; font-size: 10px;" name="experience" value="Edit"> </input> 
										</td>
									</tr>
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:75%"><p style="margin-left: 25px; line-height: 0px;"> Company Name, Location </p> </td>
										<td><p style="line-height: 0px;">  1990-1998</p> </td>
									</tr>	
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:75%"><p style="margin-left: 25px; line-height: 0px;"> Job Position </p> </td>
									</tr>	
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:75%"><p style="margin-left: 50px; line-height: 0px;">Work, Responsibilities, etc </p> </td>
									</tr>	
								</table>
								
								
								<table style="width: 250px; margin-bottom: 0; ">
									<tr style="height: 10px;">
										<td style="vertical-align: middle; height: 10px; width: 90%;">
											<h4 style="margin-left: 15px; line-height: 0px;">SKILLS and TRAINING</h4> 
										</td>
										<td style="vertical-align: middle;">
											<input class="btn small primary" type="submit" style="width:35px; height: 15px; padding: 0 0 0 0; font-size: 10px;" name="skills" value="Edit"> </input> 
										</td>
									</tr>
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:75%"><p style="margin-left: 25px; line-height: 0px;"> Name of Technical School, Location </p> </td>
										<td><p style="line-height: 0px;">  1990-1998</p> </td>
									</tr>	
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:75%"><p style="margin-left: 25px; line-height: 0px;"> Certificates Received </p> </td>
									</tr>	
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:75%"><p style="margin-left: 25px; line-height: 0px;"> Other Skills: X,Y,Z...</p> </td>
									</tr>	
								</table>
								
								<table style="width: 250px; margin-bottom: 0; ">
									<tr style="height: 10px;">
										<td style="vertical-align: middle; height: 10px; width: 90%;">
											<h4 style="margin-left: 15px; line-height: 0px;">REFERENCES</h4> 
										</td>
										<td style="vertical-align: middle;">
											<input class="btn small primary" type="submit" style="width:35px; height: 15px; padding: 0 0 0 0; font-size: 10px;" name="references" value="Edit"> </input> 
										</td>
									</tr>
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:25%"><p style="margin-left: 25px; line-height: 0px;"> 1) Name </p> </td>
										<td style="width:25%"><p style="line-height: 0px;"> Occupation </p> </td>
										<td style="width:45%"><p style="line-height: 0px;"> Phone Number </p> </td>
									</tr>	
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:25%"><p style="margin-left: 25px; line-height: 0px;"> 2) Name </p> </td>
										<td style="width:25%"><p style="line-height: 0px;"> Occupation </p> </td>
										<td style="width:45%"><p style="line-height: 0px;"> Phone Number </p> </td>
									</tr>	
								</table>
								<table style="width: 100%; margin-bottom: 0; ">
									<tr>
										<td style="width:25%"><p style="margin-left: 25px; line-height: 0px;"> 3) Name </p> </td>
										<td style="width:25%"><p style="line-height: 0px;"> Occupation </p> </td>
										<td style="width:45%"><p style="line-height: 0px;"> Phone Number </p> </td>
									</tr>	
								</table>
							</form>
							</div>
						</div>
						<div class="span9" style="margin-top: 5px; margin-bottom: 5px; height: 100px; margin-left: 50px; width: 550px;">
							<div class="row" style="margin-left: 0px;">
								<form>
								
									<input class="btn small orange" type="submit" style="width:150px; font-size: 15px;" name="DownloadCV" value="Download CV"> </input>
									<input class="btn small orange" type="submit" style="width:150px; font-size: 15px; margin-left: 246px;" name="EmailCv" value="Email CV"> </input>
								</form>
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
