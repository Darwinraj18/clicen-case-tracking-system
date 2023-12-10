<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="editclient2.php" method="post">
<tr align="center">
<td>id</td>
<td><input type="text" name="client_id"/></td>
</tr>
<tr align="center">
<td colspan="2"><input type="submit"  value="view" name="view"></td></tr>
</form>
<form action="edit_us.php" method="post">
<?php
if(isset($_POST['view']))
{
$a=$_POST['client_id'];
mysql_connect("localhost","root","darwin123");
mysql_select_db("clientcase");
$result=mysql_query("select * from client_register where client_id='$a'");

  while($row=mysql_fetch_array($result))
  {
 // echo "'$q','$b','$c','$d','$e','$f','$g','$h'";
  echo"<tr><td>clientid</td><td><input type='text'  name='id' value='".$row[0]."'></td></tr>";
  echo"<tr><td>clientid</td><td><input type='text'  name='name' value='".$row[1]."'></td></tr>";
    echo"<tr><td>clientid</td><td><input type='text'  name='email' value='".$row[2]."'></td></tr>";
	"<tr align='center'><td colspan='2'><input type='submit' name='update' value='update'><input type='submit' value='delete' name='delete'></td></tr>";
			}?>
			</form>
</body>
</html>
