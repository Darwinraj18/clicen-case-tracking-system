
<BR><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF"<h1>FEES REPORT</h1></font>

<table border="" bgcolor="#FFFFFF"align="center" ><tr><th>clientid</th><th>clientname</th><th>address</th><th>fees</th><th>payment method</th><th>Date</th>
<link rel="stylesheet" href="overlap__gallery.css" />
<?php
$a=$_POST['client_id'];
mysql_connect("localhost","root","darwin123");
mysql_select_db("clientcase");

$result=mysql_query("select * from fees where client_id=$a");//$result and $row=variable
while($row=mysql_fetch_array($result))
{
echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>";
}
?>
<tr><th colspan="8" align="center"><a href="home.php"><input type="button" name="SUB" value="Back" /></a></th>
</tr>
</table>