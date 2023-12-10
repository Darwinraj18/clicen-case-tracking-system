<html>
	<head>
		<title>Case Adjournment</title>
		
<link rel="stylesheet" href="overlap__gallery.css" />
	</head>
<body>
<BR><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF"<h1>CASE ADJOURNMENT</h1></font>

	<form action="" method="post">
		<table align="center" border="1">
		
		<?php
		
			if(isset($_POST['view']))
				{
					
					$a=$_POST['clientid'];
					
					mysql_connect("localhost","root","darwin123");
					mysql_select_db("clientcase");
					$result=mysql_query("select * from client_details where client_id='$a'");

  while($row=mysql_fetch_array($result))
  {


			echo"<tr align='center'>
			<td>Client ID</td>
			<td><input type='text' name='client_id' value='".$row[0]."'</td>
			</tr>
			<tr align='center'>
			<td>client Name</td>
			<td><input type='text' name='client_name' value='".$row[1]."'></td>
			</tr>
			<tr align='center'>
			<td>Hearing Date</td>
			<td><input type='date' name='d'></td>
			</tr>
			<tr align='center'>
			<td>Case Details</td>
			<td><input type='text' name='casedetails' value='".$row[3]."'></td>
			</tr>
			<tr align='center'>
			<td>Lawyer Name</td>
			<td><input type='text' name='lname' value='".$row[7]."'></td>
			</tr>
			<tr align='center'>
			<td>Court</td>
			<td><input type='text' name='court' value='".$row[5]."'></td>
			</tr>
			<tr align='center'>
			<td colspan='2'><input type='submit' value='ADD' name='add'></td>
			</tr>";
			}
			}
		if(isset($_POST['add']))
				{
					$a=$_POST['client_id'];
					$b=$_POST['client_name'];
					$c=$_POST['d'];
					$d=$_POST['casedetails'];
					$e=$_POST['lname'];
					$f=$_POST['court'];
				
				
			mysql_connect("localhost","root","darwin123");
mysql_select_db("clientcase");
mysql_query("Insert INTO case_adj values('$a','$b','$c','$d','$e','$f')");
				
				echo("<script>alert('info submited')</script>");
				
				}
		?>	
		
<tr align="center">
<td colspan="2"><a href="home.php">BACK</a></td></tr>
</table></form>
</body>
</html>