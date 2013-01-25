<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Staff Contact</title>
<style type="text/css">
<!--
.style9 {font-size: 12px; font-weight: bold; color: #FFFFFF; }
-->
</style>
<link href="enginuity.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
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

<body><br />
 <?php

switch ($_GET["staffname"])
{
  case "jmooney":
  $staff_name = "James C. Mooney PE";
  break;
  
  case "jelash":
  $staff_name = "James P. Elash";
  break;
  
  case "jwinterborne":
  $staff_name = "Jeffrey Winterborne";
  break;
  
  case "jroush":
  $staff_name = "Jeremy Roush";
  break;
  
  case "edelash":
  $staff_name = "James \"Ed\" Elash";
  break;  
  
  case "ccroman":
  $staff_name = "Chris Cronman";
  break;  
  
  case "dcraig":
  $staff_name = "Dino Craig";
  break;  
  
  case "dbock":
  $staff_name = "Dan Bock";
  break;  
  
  case "lmartrano":
  $staff_name = "Lure Martrano";
  break;  
  
  case "carmena":
  $staff_name = "Carmen Ametrano";
  break;  
  
  case "lwitmer":
  $staff_name = "Lenny Witmer";
  break;  
  
  case "wtiedemann":
  $staff_name = "William Tiedemann";
  break;  
  
  case "jwealand":
  $staff_name = "Jim Wealand";
  break;  
  
  case "rklase":
  $staff_name = "Randy Klase";
  break;  
  
  case "swinters":
  $staff_name = "Scott Winters";
  break;  
  
  case "jwimer":
  $staff_name = "John Wimer";
  break;  
  
  case "kwesner":
  $staff_name = "Kristine Wesner";
  break; 
  
  case "kelash":
  $staff_name = "Kyra Elash";
  break;  
  
  case "jpkloske":
  $staff_name = "JP Kloske";
  break;  
  
  case "khixenbaugh":
  $staff_name = "Keith Hixenbaugh";
  break;  
  
  case "kdundor":
  $staff_name = "Karl Dundor";
  break;
  
  case "tamik":
  $staff_name = "Tami Krajcsik";
  break;
  
  case "rglosser":
  $staff_name = "Rich Glosser";
  break;
  
  case "mmchenry":
  $staff_name = "Mike McHenry";
  break;  
  
  case "jmahonski":
  $staff_name = "Jerry Mahonski";
  break;
  
default:
  echo "<p align=\"center\" style=\"color:#fff\">An error has occured. Please contact our office at 717-796-9226. Thank You.</p>";
}
?> 
<form method="post" action="staff_contact_send.php?staffname=<?php echo $_GET["staffname"]; ?>" id="contact">

  <table width="610"  border="1" cellpadding="6" cellspacing="0" bordercolor="#000000">
    <tr>
      <td bgcolor="#CA1814">&nbsp;</td>
      <td bgcolor="#FFFFFF" class="redheader">Contact <?php echo $staff_name; ?></td>
    </tr>
    <tr>
      <td width="84" bgcolor="#CA1814" class="style9"><div align="right"><span class="eHelp">*Name:</span></div></td>
      <td width="496" bgcolor="#FFFFFF"><input name="name" type="text" id="name" size="58" tabindex="1" onclick="this.value = '';" /></td>
    </tr>
    <tr>
      <td width="84" bgcolor="#CA1814" class="style9"><div align="right" class="eHelp">*E-mail:</div></td>
      <td bgcolor="#FFFFFF"><input name="email" type="text" id="email" tabindex="2" size="58" onclick="this.value = '';" /></td>
    </tr>
    <tr>
      <td width="84" bgcolor="#CA1814" class="style9"><div align="right" class="eHelp">Phone:</div></td>
      <td bgcolor="#FFFFFF"><input name="phone" type="text" id="phone" size="20" tabindex="3"  onclick="this.value = '';" /></td>
    </tr>
    <tr>
      <td width="84" bgcolor="#CA1814" class="style9"><div align="right" class="eHelp">*Subject:</div></td>
      <td bgcolor="#FFFFFF"><input name="subject" type="text" id="subject" size="58" tabindex="4" onclick="this.value = '';"/></td>
    </tr>
    <tr>
      <td width="84" valign="top" bgcolor="#CA1814" class="style9"><div align="right" class="eHelp">*Message:</div></td>
      <td bgcolor="#FFFFFF"><textarea name="message" cols="58" rows="5" id="message" tabindex="5" onclick="this.value = '';"></textarea></td>
    </tr>
    <tr bgcolor="#CA1814">
      <td colspan="2" align="center"><div align="center"> 
          <input type="submit" name="Submit" value="Submit" />
          
      </div></td>
    </tr>
  </table>
</form>



</body>
</html>
