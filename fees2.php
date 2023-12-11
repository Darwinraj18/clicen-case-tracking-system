<html>
<head>
<link rel="stylesheet" href="overlap__gallery.css" />

<title>fees</title></head>
<body>
<BR><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF"<h6>FEES</h6></font>


<table border="" align="center" >
<form action="" method="post">
<?php
if(isset($_POST['view']))
{
$a=$_POST['client_id'];
$b=$_POST['client_name'];
$h=$_POST['address'];
mysql_connect("localhost","root","darwin123");
mysql_select_db("clientcase");
$result=mysql_query("select * from client_register where client_id='$a'");

 while($row=mysql_fetch_array($result))
  {
  echo"<tr align='center'><td>clientid</td><td><input type='text'  name='client_id' value='".$row[0]."'></td></tr>
        <tr align='center'><td>clientname</td><td><input type='text'  name='client_name' value='".$row[1]."'></td></tr>
			<tr align='center'><td>address</td><td><input type='text'  name='address' value='".$row[7]."'></td></tr> 
			<tr align='center'>
<td>FEES</td>
<td><input type='text' name='fees'/></td>
</tr>

<tr align='center'>
<td>Payment Method</td>
<td><input type='radio' name='cash' value='Cash'/>Cash</td>
</tr>

<tr align='center'>
<td>Date</td>
<td><input type='date' name='d'/></td>
</tr>
   <tr align='center'><td colspan='2'> <input type='submit' value='Add' name='submit'/></td></tr>";	
   
   }
	}
	if(isset($_POST['submit']))
{
$a=$_POST['client_id'];
$b=$_POST['client_name'];
$c=$_POST['address'];
$d=$_POST['fees'];
$e=$_POST['cash'];
$f=$_POST['d'];
if(($a=="")||($b=="")||($c=="")||($d=="")||($e=="")||($f===""))
{
echo("<script>alert('fill all info')</script>");
}
else
{
mysql_connect("localhost","root","darwin123");
mysql_select_db("clientcase");
mysql_query("Insert INTO fees values('$a','$b','$c','$d','$e','$f')");
echo("<script>alert('info submited')</script>");
}
}
			?>
			
	<tr align="center">
<td colspan="2"><a href="home.php">BACK</a></td></tr>
		
			</table>
			</form>
			</body>
			</html>
		
			