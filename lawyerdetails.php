<html>
<head>
<title>lawyer detail</title>
</head><body>
<table>
<form action="" method="post">
<tr align="center">
<td>Lawyer name</td>
<td><input type="text" name="lawyername"/></td>
</tr>

<tr align="center">
<td>Qualification</td>
<td><input type="text" name="qualification"/></td>
</tr>


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
$a=$_POST['lawyername'];
$b=$_POST['qualification'];
$c=$_POST['experiance'];
$d=$_POST['Address'];
$e=$_POST['emailid'];
 //echo "'$a','$b','$c','$d','$e'";

if(isset($_POST['lawyerdetails']))
{
if(($a=="")||($b=="")||($c=="")||($d=="")||($e==""))
{
echo("<script>alert('fill all info')</script>");
}
else
{
mysql_connect("localhost","root","darwin123");
mysql_select_db("clientcase");
mysql_query("Insert INTO lawyer_details values('$a','$b','$c','$d','$e')");
echo("<script>alert('info submited')</script>");
}
}
?>
</table>
</html>

