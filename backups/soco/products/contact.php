
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SoCo Supply</title>

<link rel="stylesheet" type="text/css" href="inc/screen.css" />


</head>

<body>
<div id="fixed-header">
<table>
<tr>
      <td>SOCO SUPPLY - CALL 888-648-8785</td>
<td><a href="contact.php"><span style="height:25px;width:109px;display:inline-block;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://www.socosupply.com/images/send-email.png');"><img src="images/send-email.png" width="109" height="25" border="0" style="filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);"/></span></a></td>
</tr>
</table>
</div>
<div id="container">
  <div id="header">
    <a href="../index.php"><img src="../images/logo.png" style="margin-top:30px;margin-left:-4px;" border=0 /></a>
  <!-- end #header --></div>  
  <div id="sidebar1">
 <table>
 <tr>
    <td><a href="../../index.php"><span style="height:26px;width:97px;display:inline-block;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://www.socosupply.com/images/btn-home.png');"><img src="images/btn-home.png" width="97" height="26" border=0 style="filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);"/></span></a></td>
 <td><a href="about-us.php"><span style="height:26px;width:97px;display:inline-block;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://www.socosupply.com/images/btn-aboutus.png');"><img src="images/btn-aboutus.png" width="97" height="26" border=0 style="filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);"/></span></a></td>
 </tr>
 </table>

	<div id="nav">
    <img src="images/btn-products.jpg" />
    <ul>
    <li class="dormant" style="padding-top:5px;margin-top:0px;"><A href="sani-dry.php">DezAir</A></li>
    <li class="dormant"><a href="sump-pump.php">SUMP PUMP</a></li>
    <li class="dormant"><a href="crawl-space-liner.php">ENCAPSULATION</a></li>
    <li class="dormant"><a href="crawl-space-covers.php">CRAWLSPACE<br />
      DOORS & COVERS</a></li>
    <li class="dormant"><a href="turtl.php">THE TURTL</a></li>
    <li class="dormant"><a href="crawl-space-floor-jack.php">FLOOR JACK</a></li>
   <!-- <li class="dormant"><a href="floor-tiles.php">FLOOR TILES</a></li>-->
    <li class="dormant"><a href="cactusboard.php">WATERPROOFING</a></li>
    <li class="active"><a href="contact.php">CONTACT US</a></li>
    </ul>
    </div>


    <A href="contact.php"><span style="margin-left:-7px;margin-top:50px;display:inline-block;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://www.socosupply.com/images/call-for-pricing.png');margin-top:120px;"><img src="images/call-for-pricing.png" style="filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);" border="0"/></span></A>

    <!-- end #sidebar1 --></div>
  
<div id="mainContent" style="position:relative;z-index:1;"> 
  <h1>Contact Us</h1>
  <script type="text/javascript">
function evalid(){
	var emailID=document.contact_form.mail
	
	if ((emailID.value==null)||(emailID.value=="")){
        alert("Fields marqued with * must be entered")
        emailID.focus()
        return false
        }

//empty field validation
	
	var fname=document.contact_form.fname
	if ((fname.value==null)||(fname.value=="")){
        alert("Fields marqued with * must be entered")
        fname.focus()
        return false
        }
	
	var lname=document.contact_form.lname		
	if ((lname.value==null)||(lname.value=="")){
        alert("Fields marqued with * must be entered")
        lname.focus()
        return false
        }
 
	var message=document.contact_form.message	
	if ((message.value==null)||(message.value=="")){
        alert("Fields marqued with * must be entered")
        message.focus()
        return false
        }
			
	return true
 }
 </script>
  <form name="contact_form" method="post" action="mailer.php" onSubmit="return evalid()">
    <table cellSpacing="0" cellPadding="3" width="55%" align="center" border="0">
      <tr> 
        <td width="39%" align="right">First Name *</td>
        <td width="61%" align="left"><input maxLength="50" size="25" name="fname" required="yes" validate="text" message="Please enter your first name."></td>
      </tr>
      <tr> 
        <td align="right">Last Name *</td>
        <td align="left"><input maxLength="50" size="25" name="lname" required="yes" validate="text" message="Please enter your last name."></td>
      </tr>
      <tr> 
        <td align="right">Your E-mail *</td>
        <td align="left"><input maxLength="50" size="25" name="mail" required="yes" validate="email" message="Please enter your email."></td>
      </tr>
      <tr> 
        <td align="right">Address</td>
        <td align="left"><input maxLength="50" size="25" name="address" required="yes" validate="text" message="Please enter your street address."></td>
      </tr>
      <tr> 
        <td align="right">City</td>
        <td align="left"><input maxLength="50" size="25" name="city" required="yes" validate="text" message="Please enter your city."></td>
      </tr>
      <tr> 
        <td align="right">Zip Code</td>
        <td align="left"><input maxLength="7" size="25" name="zip" required="yes" validate="text" message="Please enter your zip code."></td>
      </tr>
      <tr> 
        <td align="right">Phone</td>
        <td align="left"><input maxLength="50" size="25" name="phone" required="yes" validate="int" message="Please enter your phone."></td>
      </tr>
      <tr> 
        <td align="right">Message *</td>
        <td colspan="2"><textarea name="message" onkeyup="return limitarelungime(this, 255)"  cols="35" rows="5"></textarea></td>
      </tr>
      <tr> 
        <td> </td>
        <td colspan="2"> </td>
      </tr>
      <tr> 
        <td><input type="reset" name="reset" value="Reset"/></td>
        <td align="right"><input type="submit" name="Submit" value="Submit"></td>
      </tr>
    </table>
  </form>
  </div>
  <!-- end #mainContent -->
  <br class="clearfloat" />
  <!-- end #container -->
</div>
</body>
</html>
