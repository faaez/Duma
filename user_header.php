    <meta charset="utf-8">
    <title>DUMA</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
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
		background-repeat: repeat-x;
 
		}
		.bottom_pane {
		background-color: #fff;
		background-repeat: repeat-x;
		height: 100px; 
		}

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {

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
