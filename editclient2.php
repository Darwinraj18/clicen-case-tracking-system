<html>
<head>

<link rel="stylesheet" href="overlap__gallery.css" /></head>
<title>editclient</title></head>
<body><BR><BR><BR>
<style>
  .a{
text decoration:none;
}
  </style>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF"<h1>EDIT CLIENT </h1></font>

<br><br><br>
<table border="" align="center" >
<form action="" method="post">
<?php
if(isset($_POST['view']))
{
$a=$_POST['client_id'];
mysql_connect("localhost","root","darwin123");
mysql_select_db("clientcase");
  {
  echo "'$q','$b','$c','$d','$e','$f','$g','$h'";
  echo"<tr><td>clientid</td><td><input type='text'  name='client_id' value='".$row[0]."'></td></tr>
        <tr><td>clientname</td><td><input type='text'  name='client_name' value='".$row[1]."'></td></tr>
		 <tr><td>Father/husband/wife name</td><td><input type='text'  name='father_husband_wife_name' value='".$row[2]."'></td></tr>
  	     <tr><td>Gender</td><td><input type='text'  name='gender' value='".$row[3]."'></td></tr>
		 <tr><td>contact no</td><td><input type='text'  name='contact_no' value='".$row[4]."'></td></tr>
		<tr><td>age</td><td><input type='text'  name='age' value='".$row[5]."'></td></tr>
			<tr><td>emailid</td><td><input type='text'  name='email_id' value='".$row[6]."'></td></tr>      
			<tr><td>address</td><td><input type='text'  name='address' value='".$row[7]."'></td></tr> 
			<tr align='center'><td colspan='2'><input type='submit' name='update' value='update'><input type='submit' value='delete' name='delete'></td></tr>";
			}
			}
			if(isset($_POST['update']))
			{
			$a=$_POST['client_id'];
			$b=$_POST['client_name'];
			$c=$_POST['father_husband_wife_name'];
			$d=$_POST['gender'];
			$e=$_POST['contact_no'];
			$f=$_POST['age'];
			$g=$_POST['email_id'];
			$h=$_POST['address'];
		//*	  echo "'$a','$b','$c','$d','$e','$f','$g','$h'";
			 mysql_connect("localhost","root","darwin123");
			 mysql_select_db("clientcase");
			 mysql_query("update client_register set client_name='$b', father_husband_wife_name='$c', gender='$d', contact_no='$e', age='$f', email_id='$g', address='$h' where client_id='$a'");			 
			 echo"<script>alert('Record Updated Sucesfully')</script>";
				}

	 	else if(isset($_POST['delete']))
			{			$a=$_POST['client_id'];
			$b=$_POST['clientname'];
			$c=$_POST['father_husband_wife_name'];
			$d=$_POST['gender'];
			$e=$_POST['contactno'];
			$f=$_POST['age'];
			$g=$_POST['emailid'];
			$h=$_POST['address'];
			  
			mysql_connect("localhost", "root", "darwin123");
			mysql_select_db("clientcase");
			mysql_query("delete from  client_register where client_id='$a'");
  			echo"<script>alert('Record Deleted Sucesfully')</script>";
  }
  
  ?>
  
  </form>
  
  <tr align="center">
<td colspan="2"><a href=home.php>HOME</a></td></tr>
  
</table>
  </body>
  </html>