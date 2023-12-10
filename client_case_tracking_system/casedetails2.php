<html>
<head>
<link rel="stylesheet" href="overlap__gallery.css" />

<title>casedetails</title></head>
<body>
<BR><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF"<h1>CASE DETAILS</h1></font>

<BR><br><br><table border="" align="center" >
<form action="uploadfile2.php" method="post" enctype="multipart/form-data" >

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
<td>case details</td>
<td><input type='text' name='case_details'/></td>
</tr>

<tr align='center'>
<td>Area</td>
<td><input type='text' name='area'/></td>
</tr>

<tr align='center'>
<td>station</td>
<td><input type='text' name='station'/></td>
</tr>


<tr align='center'>
<td>Court</td>
<td><input type='radio'  name='court' value='session court'/>session court
<input type='radio'  name='court' value='RDO court'/>RDO court
<input type='radio'  name='court' value='Madras High court'/>Madras High court
</td>
</tr>


<tr align='center'>
<td>Lawyer name</td>
<td><input type='text' name='lawter_name'/></td>
</tr>

	<tr> <td>filename:</td>
<td>  <input type='file' name='file'id='file' /></td></tr>
   <tr align='center'><td colspan='2'> <input type='submit' name='submit' id='submit' /><input type='Reset'></td></tr>";	
		
			
		
//<tr align='center'><td colspan='2'><input type='submit' name='submit' value='submit'></td></tr>";	
		
	}
	}
			?>
			<tr align='center'><td colspan='2'> <a href="home.php">BACK</a>
			
			</table>
			</form></body>
			</html>
			
			
			