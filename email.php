<?php
$mlink="../"; $mactive="4"; 

/* Set e-mail recipient */
	$myemail  = "skydigitalweb01@gmail.com";

/**/
if(isset($_POST['submit'])) {
//Personal Information	

	$name=$_POST['name'];//Your Name
	//$email=$_POST['email'];//E mail
	$phone=$_POST['phone'];//Phone
	
	
	$message=$_POST['message'];//Message

//Date Period
	$date= date("Y-m-d");
//	$address=$_POST['destination'];//Address
//	$date_arrival=$_POST['date_arrival'];//Date of Arrival
//	$date_departure=$_POST['date_departure'];//Date of Departure
	
//Number of Guests
//	$no_of_ch1=$_POST['no_of_travelers'];//
//	$no_of_ch2=$_POST['no_of_night'];//
	
//hidden ipaddress	
	$ipaddress=$_SERVER['REMOTE_ADDR'];
	
$subject= "traveltogethercl ($date)";

/* Let's prepare the message for the e-mail */
$message = "


<html>

<body bgcolor=#CCCCCC>
<div style='width:512px;overflow:hidden;text-align:center;margin-bottom:10px;font-size:25px;color:#000;'>

<img src='http://www.statravel.co.uk/static/uk_division_web_live/assets/UK_RTW_CONTENT_310317_960X400-HERO.jpg' width='100%'>
</div>

<div style='background-color:#333333;width:502px;overflow:hidden;text-align:center;color:#FFFF00;padding-top:5px;padding-bottom:5px;'>
<strong>
Travel together
</strong>
</div>
<div style='border:1px solid #000066;width:500px;'>
<table border='0' width='490'>
    <tr background-color:#d4e3e5;>
        <td width='158' height='28' valign='top'><strong>Name</strong></td>
        <td width='332' valign='top'>".$name."</td>
    </tr>
    <tr background-color:#d4e3e5;>
        <td height='31' valign='top'><strong>Phone</strong></td>
        <td valign='top'>".$phone."</td>
    </tr>
    <tr background-color:#d4e3e5;>
        <td valign='top'></td>
        <td valign='top'></td>
    </tr>
   
	<tr background-color:#d4e3e5;>
        <td valign='top'><strong>Message</strong></td>
        <td valign='top'>".$message."</td>
    </tr>
</table>
</div>
	
<br><strong>hidden ipaddress</strong> : ".$ipaddress."<br><br>


Thankyou.<br>

<div style='width:502px;overflow:hidden;background-color:#333333;color:#CCCCCC;'>
<table width='100%' border='0'>
  <tr>
    <td width='60%'><a href='http://test.skyydigital.com/' target='_blank' style='text-decoration:none;color:#CCCCCC'>All right received</a></td>
    <td width='17%'><a href='http://test.skyydigital.com/' target='_blank' style='text-decoration:none;color:#CCCCCC'>Powerd By:</a></td>
    <td width='23%'><a href='http://test.skyydigital.com/' target='_blank'>SKY DIGITAL </a></td>
  </tr>
</table>

</div>
</body>
</html>
";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//$headers .= 'To:lankadesk<bpslolk@gmail.com>' . "\r\n";
$headers .= 'From: noreply@holidayhomekelaniya.lk <noreply@holidayhomekelaniya.lk>' . "\r\n";

/* Send the message using mail() function */
mail($myemail, $subject, $message,$headers);

	/*$myemail  = "bpslolk@gmail.com";
mail($myemail, $subject, $message,$headers);*/

	/*$myemail  = "inuraconstruction@gmail.com";
mail($myemail, $subject, $message,$headers);



$myemail  = "lankadesk@gmail.com";
mail($myemail, $subject, $message,$headers);*/

echo '<!DOCTYPE html>

<html lang="en-US" class="no-js" >
<head>';
//include($mlink.'head.php');

echo '</head><body  class="page page-id-9 page-template-default">
    <div id="page_wrapper">';
//	include($mlink.'header.php');
echo '<div id="page_header" class="uh_contact_us bottom-shadow" style="height:80%">';

echo '<div class="container" style="top:30%;">
		<div class="span12" style="margin:0;text-align:center">
		<h1 class="smallm_title centered bigger"><span>';
echo 'Your Contact Details Are Successfully Sent';
echo '</span></h1></div></div>';

echo '</div>';

//include($mlink.'footer.php');
	
/*echo '<script language="javascript">';
echo 'alert("Your Contact Details are successfully sent")';
echo '</script>';*/

echo '</div></body>
</html>';

/* Redirect visitor to the thank you page */
/*header('Location: contact-us.php');
exit();*/
		$gourl='index.php';
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$gourl.'">';
		
} else {
 echo 'you are not an valid User'; 
		$gourl='index.php';
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$gourl.'">';    
		exit;
}/**/

?>


