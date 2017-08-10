
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
      <td>SOCO SUPPLY - CALL 888-648-8785 
        <!--866-375-9992-->
      </td>
<td><a href="/products/contact.php"><span style="height:25px;width:109px;display:inline-block;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://www.socosupply.com/images/send-email.png');"><img src="images/send-email.png" width="109" height="25" border="0" style="filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);"/></span></a></td>
</tr>
</table>
</div>
<div id="container">
  <div id="header">
    <a href="index.php"><img src="images/logo.png" style="margin-top:30px;margin-left:-4px;" border=0 /></a>
  <!-- end #header --></div>  
  <div id="sidebar1">

	<div id="nav">
	  <ul>
    <li class="dormant"><a href="index.php">Home</a></li> 
	<li class="dormant"><a href="crawlspace-encapsulation-products.php">Products for Crawl Space Encapsulation</a>
	    </li>    
	
  <li class="dormant"><a href="../products/index.php">Products</a></li>
	
	
	 
    <li class="dormant"><a href="crawlspace-humidity.php">Crawl Space Humidity</a></li>
    <li class="dormant"><a href="mold-allergen-problems.php">Mold &amp; Allergen Problems</a></li>        
    
    
    
    <li class="dormant"><a href="about-us.php">About Us</a></li>   
	
  <li class="dormant"><a href="../products/contact.php">Contact Us</a></li>   
    </ul>




      <a href="contact.php"><span style="border:none;margin-left:10px;margin-top:30px;display:inline-block;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://www.socosupply.com/images/call-for-pricing.png')"><img src="images/call-for-pricing.png" style="filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);" border="0" /></span></a>

</div>
<br clear="left" />
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
    <form name="contact_form" method="post" action="products/mailer.php" onSubmit="return evalid()">
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
