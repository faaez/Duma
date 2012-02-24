<?php
session_start();
if (isset($_SESSION['myusername']))
{
	header("location:generalInfo.php");
}

?>
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
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Spinnaker' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript">
	
	 function pwdFocus() {
            $('#fakepassword').hide();
            $('#password').show();
            $('#password').focus();
        }

    function pwdBlur() {
            if ($('#password').attr('value') == '') {
                $('#password').hide();
                $('#fakepassword').show();
            }
        }

	 function pwdFocus1() {
            $('#fakepassword1').hide();
            $('#password1').show();
            $('#password1').focus();
        }

    function pwdBlur1() {
            if ($('#password1').attr('value') == '') {
                $('#password1').hide();
                $('#fakepassword1').show();
            }
        }

	function pwdFocus2() {
            $('#fakepassword2').hide();
            $('#password2').show();
            $('#password2').focus();
        }

    function pwdBlur2() {
            if ($('#password2').attr('value') == '') {
                $('#password2').hide();
                $('#fakepassword2').show();
            }
        }
	
	$(function() {
	
	var ps_fullName = 'Name';
	if ($("input#FN").val() == ' '){
		$("input#FN").val(ps_fullName);
	}
	
    $('input#FN').focus(function() {
        if ($(this).val() == ps_fullName)
            $(this).val('');
    });
 
    $('input#FN').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_fullName);
    });
	
	
	var ps_PhoneNumber = 'Phone Number';
	if ($("input#PN1").val() == ' '){
		$("input#PN1").val(ps_PhoneNumber);
	}
    $('input#PN1').focus(function() {
        if ($(this).val() == ps_PhoneNumber)
            $(this).val('');
    });
 
    $('input#PN1').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_PhoneNumber);
    });
	
	if ($("input#PN").val() == ' '){
		$("input#PN").val(ps_PhoneNumber);
	}
    $('input#PN').focus(function() {
        if ($(this).val() == ps_PhoneNumber)
            $(this).val('');
    });
 
    $('input#PN').blur(function() {
        if($(this).val() == '')
            $(this).val(ps_PhoneNumber);
    });
	});
	</script>
	
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
		height: 425px; 
		}
		.bottom_pane {
		background-color: #fff;
		background-repeat: repeat-x;
		height: 43px; 
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
		
	.topbar .fill{
		margin-top: 15px;
		margin-bottom: 15px;
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
							  <img src="images/dumalogo.png" height="50px"> </img>
							 </div>

							 <div class="span8">
								  <form action="login.php" method="POST" class="pull-right" width="50px">
									<input class="input-medium" id="PN1" style="color: #696969;" value = " " name="username" > </input>
									<input class="input-medium" style="color: #696969" type="text" name="fakepassword" id="fakepassword" value="Password" onfocus="pwdFocus()" />
									<input class="input-medium" style="display: none" type="password" name="password" id="password" value="" onblur="pwdBlur()" />
									<button class="btn medium " type="submit">Sign in</button>
								  </form>
							</div>
					  </div>
					</div>
				</div>
			</div>
		  </div>
		</div>


    <div class="container">
      <div class="content">
	  <? if (isset($_GET["B$@4it"])){?>
		<div class="row" style="width:100%;">
			<div class="alert-message warning" style="background-color:orange; margin-left:150px; height: 40px;">
				<table bgcolor="orange"><tr><td><p style="color:white;"> 
				<?php $errno = $_GET["B$@4it"];
				if ($errno == 1) { echo "A confirmation code has been sent to your number.";} 
				else if ($errno == 2) { echo "The email you gave is invalid. Please use a different email address or use a different one. ";} 
				else if ($errno == 3) { echo "Please log in to view the page";} 
				else if ($errno == 4) {echo " It seems you have not confirmed your messages from a confirmation code from DUMA</br> 
											<a href=\"confirm.php\" style=\"color:blue;\">Resend confirmation link? </a>";}
				else if ($errno == 5) { $given_email = $_GET["given"]; echo "$given_email does not exist in our database please sign up below";} 
				else if ($errno == 6) { echo "Wrong Username/Password  <a href=\"forgot.php\" style=\"color:blue;\">Forgot password? </a>";} 
				else if ($errno == 7) { echo "A Password reset link has been sent to your email. Please check your email and follow the instructions to confirm your account.";} 
				else if ($errno == 8) { echo "Your password has been reset please log in";} 
	
				?></p></td></tr></table>
			</div>
		</div>
		<?}?>
        <div class="row">
			<div class="span16">
				
				<div class="row">
					<div class="span8" height="450px" align="left" <style="text-align:center;">
					<div class="glow" style="margin-top: 90px; margin-left: 50px; line-height: 40px; vertical-align: middle;"> Revolutionizing <br> how people find jobs </div>
					<p class="slogan" style="margin-left: 50px; margin-top: 10px;">Una ujuzi? <br> Una connections na unataka kuzi-expand?</br> Poa! We'll send you free SMS job alerts. <br> Kazi pap! </br></p>
				<form action="process_create.php" method="POST">
					<div class="span8" style="margin-left: 50px; margin-top: 7px;" align="left"> <button class="btn large orange" style="margin-top: 15px;">Learn More!</button> </div>
					</div>
					<div class = "span8" style="margin-top: 30px;">
					<?	$error = null;
						$given_name = null; 
						$given_phone = null;
						$given_terms = 1; 
						if (isset($_GET["D@0v^"])){
							$error = $_GET["D@0v^"];
							}
						if (isset($_GET["nm*"])){
							$given_name = $_GET["nm*"];
							}
						if (isset($_GET["pn*"])){
							$given_phone = $_GET["pn*"];
							}
						if (isset($_GET["tm*"])){
							$given_terms= $_GET["tm*"];
							}
					?>
					<form action="process_create.php" method="POST" class="pull-right">	
						<table style="margin-left:45px;" width="350px">
							<thead>
								<tr> 
									<td> <p class="glow_small"> New to DUMA? </p></td>
								</tr> 
							</thead>
							<tbody>
								<tr>
									<td> <input class=<?if($error%10){echo"\"large\"";}else{echo"\"input-xlarge \"";} if($given_name){ echo "value=\"$given_name\""; } else {echo "value = \" \"";}?> type="text" id="FN" name="name"> </input>
									<?if($error%10){echo "<span class=\"help-inline\" style=\"color:red\">Name field cannot be empty</span>";}?>
									</td>
									
								</tr>
								<tr>
									<td> <input class=<?if($error%10000 >= 10){echo"\"large\"";}else{echo"\"input-xlarge \"";} if($given_phone){ echo "value=\"$given_phone\""; } else {echo "value = \" \"";}?> type="text" id="PN" name="phone"> </input>
									<?if($error%100 >= 10){echo "<span class=\"help-inline\" style=\"color:red\">Phone Number field cannot be empty</span>";}?>
									<?if($error%1000 >= 100){echo "<span class=\"help-inline\" style=\"color:red\">Phone provided is already in use</span> 
										<tr><td><a href=\"forgot.php\" style=\"color:blue; decoration:underline;\">Forgot password?</a></td></tr>";}?>
									<?if($error%10000 >= 1000){echo "<span class=\"help-inline\" style=\"color:red\">Invalid Phone Number</span>";}?>
									</td>
								</tr>
								<tr>
									<td>
									<input class=<?if($error%100000000 >= 10000){echo"\"large\"";}else{echo"\"input-xlarge \"";}?> type="text" name="pin1" id="fakepassword1" value="Pin" onfocus="pwdFocus1()"></input>
									<input class=<?if($error%100000000 >= 10000){echo"\"large\"";}else{echo"\"input-xlarge \"";}?> style="display: none" type="password" name="pin1" id="password1" value="" onblur="pwdBlur1()"></input>
									<? if($error%100000 >= 10000){echo "<span class=\"help-inline\" style=\"color:red\">Please provide a 4 digit pin</span>";} 
										else if ($error%1000000 >= 100000){echo "<span class=\"help-inline\" style=\"color:red\">The Pin Must have Four Digits </span>";}
										else if ($error%10000000 >= 1000000){echo "<span class=\"help-inline\" style=\"color:red\">The passwords you provided do not match </span>";}
										?>
									</td>
								</tr>
								<tr>
									<td> 
									
									<input class=<?if($error%100000000 >= 10000000){echo"\"large\"";}else{echo"\"input-xlarge \"";}?> type="text" name="pin2" id="fakepassword2" value="Re-Enter Pin" name="pin2" onfocus="pwdFocus2()"></input>
									<input class=<?if($error%100000000 >= 10000000){echo"\"large\"";}else{echo"\"input-xlarge \"";}?> style="display: none" type="password" name="pin2" id="password2" value="" onblur="pwdBlur2()"></input>
									<?if($error%100000000 >= 10000000){echo "<span class=\"help-inline\" style=\"color:red\">Please confirm your pin</span>";}?>
									</td>
								</tr>
<tr>
<td>
<table style="margin-left:0px;margin-bottom: 0px;width:950px;">
							<tbody>
<tr>

<td style="font-size:13px;font-weight:lighter;font-family: 'Lucida Grande', sans-serif;color:#444444;"> 
<input type="checkbox" name="terms" <?if ($given_terms == "terms") {echo "checked=\"yes\"";}?>value="terms"/> I agree to DUMA's <a href="terms.php" style="font-size:13px;font-weight:lighter;font-family: 'Lucida Grande', sans-serif;color:#008AE6;margin-left: 0px;  margin-bottom: 5px;"> Terms of Use </a> 
<? if($given_terms == null){echo "<span class=\"help-inline\" style=\"color:red\">Please agree to terms and conditions</span>";} ?>
</td>
</tr>
</tbody>
</table>

</td>
</tr>

								<tr>
									<td> <button class="btn large orange" type="submit">Join Today!</button></td>
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
