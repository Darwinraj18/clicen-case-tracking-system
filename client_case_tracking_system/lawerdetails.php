<html>
<head>
<h1>lawyer details</h1>
<br>
<br>
<link rel="stylesheet" href="overlap__gallery.css" />
<title>lawyer detail</title>
</head><body>
<table align="center">
<form action="" method="post">
<tr align="center">
<td>Lawyer name</td>
<td><input type="text" name="lawyername"/></td>
</tr>

<tr align="center">
<td>Qualification</td>
<td><input type="text" name="qualification"/></td>
</tr>

<form action="" method="post">
<tr align="center">
<td>Experiance</td>
<td><input type="text" name="experiance"/></td>
</tr>

<tr align="center">
<td>Address</td>
<td><input type="text" name="Address"/></td>
</tr>


<tr align="center">
<td>Email id</td>
<td><input type="text" name="emailid"/></td>
</tr>

<tr align="center">
<td colspan="2"><input type="submit"  value="submit" name="lawyerdetails"></td></tr>



</form>
<?php
$Lawyername=$_POST['lawyername'];
$Qualification=$_POST['qualification'];
$Experiance=$_POST['experiance'];
$Address=$_POST['Address'];
$Emailid=$_POST['emailid'];

if(isset($_POST['lawyerdetails']))
{
if(($Lawyername=="")||($Qualification=="")||($Experiance=="")||($Address=="")||($Emailid==""))
{
echo("<script>alert('fill all info')</script>");
}
else
{
mysql_connect("localhost","root","darwin123");
mysql_select_db("clientcase");
mysql_query("Insert INTO lawyer_details values('$clientid','$clientname','$father_husband_wife_name','$gender','$contactno','$age','$emailid','$address')");
echo("<script>alert('info submited')</script>");
}
}
?>
</table>
</html>

