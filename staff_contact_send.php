<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Staff Contact</title>
<link href="enginuity.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style9 {font-size: 12px; font-weight: bold; color: #FFFFFF; }

.style10 {
	color: #2A1F00;
	font-weight: bold;
	font-size: 16px;
}
-->
</style>
<script type="text/javascript" src="Scripts/contact.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php

switch ($_GET["staffname"])
{
  case "jmooney":
  $email_to = "jmooney@enginuity-llc.com";
  break;
  
  case "jelash":
  $email_to = "jelash@enginuity-llc.com";
  break;
  
  case "jwinterborne":
  $email_to = "jwinterborne@enginuity-llc.com";
  break;
  
  case "jroush":
  $email_to = "jmooney@enginuity-llc.com";
  break;
  
  case "edelash":
  $email_to = "edelash@enginuity-llc.com";
  break;  
  
  case "ccroman":
  $email_to = "ccorman@enginuity-llc.com";
  break;  
  
  case "dcraig":
  $email_to = "dcraig@enginuity-llc.com";
  break;  
  
  case "dbock":
  $email_to = "dbock@enginuity-llc.com";
  break;  
  
  case "lmartrano":
  $email_to = "lmartano@enginuity-llc.com";
  break;  
  
  case "carmena":
  $email_to = "camertrano@enginuity-llc.com";
  break;  
  
  case "lwitmer":
  $email_to = "lwitmer@enginuity-llc.com";
  break;  
  
  case "wtiedemann":
  $email_to = "wtiedemann@enginuity-llc.com";
  break;  
  
  case "jwealand":
  $email_to = "jwealand@enginuity-llc.com";
  break;  
  
  case "rklase":
  $email_to = "rklase@enginuity-llc.com";
  break;  
  
  case "swinters":
  $email_to = "swinters@enginuity-llc.com";
  break;  
  
  case "jwimer":
  $email_to = "jwimer@enginuity-llc.com";
  break;  
  
  case "kwesner":
  $email_to = "kwesner@enginuity-llc.com";
  break; 
  
  case "kelash":
  $email_to = "kelash@enginuity-llc.com";
  break;  
  
  case "jpkloske":
  $email_to = "jpkloske@enginuity-llc.com";
  break;  
  
  case "khixenbaugh":
  $email_to = "khixenbaugh@enginuity-llc.com";
  break;  
  
  case "kdundore":
  $email_to = "kdundore@enginuity-llc.com";
  break;
  
  case "tamik":
  $email_to = "tkrajcsik@enginuity-llc.com";
  break;
  
  case "rglosser":
  $email_to = "rglosser@enginuity-llc.com";
  break;
  
  case "mmchenry":
  $email_to = "mmchenry@enginuity-llc.com";
  break;  
  
  case "jmahonski":
  $email_to = "jmahonski@enginuity-llc.com";
  break;
  
  case "kmalzi":
  $email_to = "KMalzi@enginuity-llc.com";
  break;
  
default:
  echo "An error has occured. Please contact our office at 717-796-9226. Thank You.";
}
?> 

<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    

    function died($error) {
        // your error code can go here, and I might want to clean these up later on.
        echo "<br /><br /><p align=\"center\" class=\"eHelp\">We are very sorry, but there were error(s) found with the form you submitted. </p>";
        echo "<p align=\"center\" class=\"eHelp\">These errors appear below.<br /></p>";
        echo "<p align=\"center\" class=\"eHelp\">" . $error . "<br /></p>";
        echo "<p align=\"center\" class=\"eHelp\">Please <a style=\"font-weight:bold; font-size:20px\" href=\"javascript:history.go(-1)\">RETURN</a> and fix these errors.<br /><br /></p>";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
		!isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // required
    $message = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= '-The email address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= '-Please enter your first name.<br />';
  }
  if(!preg_match($string_exp,$message)) {
    $error_message .= '-Please enter a message.<br />';
  }
  if(!preg_match($string_exp,$subject)) {
    $error_message .= '-Please enter a subject line.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";

     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $subject, $message, $headers); 
?>
 
<!-- include your own success html here -->
<p align="center" class="style7">&nbsp;</p>
<p align="center" class="style7">&nbsp;</p>
<p align="center" class="eHelp">Thank You.</p>
<p align="center" class="eHelp">Your message has been sent.</p>
<p align="center">&nbsp;</p>
<p align="center"><span class="style10"><a href="javascript:window.close()" class="redlinks">Close Window</a></span></p>
<?php
}
?>

</body>
</html>