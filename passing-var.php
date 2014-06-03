<html>
	
	<head>
		<link type="text/css" rel="stylesheet" href="recaptch/css/stylesheet.css"/>
		<title>Captcha Web Form</title>
	</head>
	
	<body>
		
			<img src="recaptch/images/SDSUwLSH_2Color_RV_4C.gif" width="190" height="162" />
			<div class = "upperPart">
				<h1>Captcha Web Form</h1>
				<h3>Submit a Request of Potential ADA Issues on Campus</h3>
			</div>

			<form form method=post enctype=multipart/form-data action=catching-var.php >
			<table width="600" border="0" cellspacing="0" cellpadding="5">

                <tr>
                  <td align="right">Name: </td>
                  <td>&nbsp;</td>
                  <td align="left"><label for="name"></label>
                  <input name="name" type="text" id="name" size="40" maxlength="50" /></td>
                </tr>
                <tr>
                  <td align="right">Email:</td>
                  <td>&nbsp;</td>
                  <td align="left"><label for="email"></label>
                  <input name="email" type="text" id="email" value="Enter your email" size="40" maxlength="70" /></td>
                </tr>
                <tr>
                  <td align="right">Phone Number:</td>
                  <td>&nbsp;</td>
                  <td align="left"><label for="phone"></label>
                  <input name="phone" type="text" id="phone" size="20" maxlength="30" /></td>
                </tr>
                <tr>
                  <td align="right">Location information of ADA issue:</td>
                  <td>&nbsp;</td>
                  <td align="left"><label for="location"></label>
                  <input name="location" type="text" id="location" size="40" maxlength="70" /></td>
                </tr>
                <tr>
                  <td align="right">Describe the ADA Issue:</td>
                  <td>&nbsp;</td>
                  <td align="left"><label for="description"></label>
                  <textarea name="description" id="description" cols="40" rows="4"></textarea></td>
                </tr>
			</table>
			<div class = "captcha">
				<?php
							require_once('recaptchalib.php');
							$publickey = "6LcjBPQSAAAAAJlx3VvxAw9PCqm-_PQQpap4DZuj"; // you got this from the signup page
							echo recaptcha_get_html($publickey);
				?>
				<br><br><input type="submit" name="submit" id="submit" value="Submit" />
             </div>   
				
            </form>
              
	</body>
</html>