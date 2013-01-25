<cfparam name="URL.StaffCode" default="1">
<cfquery name="rs_staff" datasource="enginuityllc">
SELECT *
FROM tbl_staff
WHERE StaffCode = <cfqueryparam value="#URL.StaffCode#" cfsqltype="cf_sql_clob" maxlength="255"> 
</cfquery><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
</head>

<body>
<form id="contact" name="contact" method="post" action="staff_contact_sent.cfm">
  <p class="eHelp">Contact <cfoutput>#rs_staff.StaffName#</cfoutput></p>
  <table width="610"  border="1" cellpadding="6" cellspacing="0" bordercolor="#000000">
    <tr>
      <td width="84" bgcolor="#CA1814"><div align="right"><span class="eHelp">*Name:</span></div></td>
      <td width="496" bgcolor="#FFFFFF"><input name="name" type="text" id="name" size="58" /></td>
    </tr>
    <tr>
      <td width="84" bgcolor="#CA1814" class="style9"><div align="right" class="eHelp">*E-mail:</div></td>
      <td bgcolor="#FFFFFF"><input name="emailAddress" type="text" id="emailAddress" size="58" /></td>
    </tr>
    <tr>
      <td width="84" bgcolor="#CA1814" class="style9"><div align="right" class="eHelp">Phone:</div></td>
      <td bgcolor="#FFFFFF"><input name="phone" type="text" id="phone" size="20" /></td>
    </tr>
    <tr>
      <td width="84" bgcolor="#CA1814" class="style9"><div align="right" class="eHelp">*Subject:</div></td>
      <td bgcolor="#FFFFFF"><input name="subject" type="text" id="subject" size="58" /></td>
    </tr>
    <tr>
      <td width="84" bgcolor="#CA1814" class="style9"><div align="right" class="eHelp">*Message:</div></td>
      <td bgcolor="#FFFFFF"><textarea name="message" cols="58" rows="5" id="message"></textarea></td>
    </tr>
    <tr bgcolor="#CA1814">
      <td colspan="2"><div align="left">
          <input type="submit" name="Submit" value="Submit" />
          <input name="staffemail" type="hidden" id="staffemail" value="<cfoutput>#rs_staff.StaffEmail#</cfoutput>" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
