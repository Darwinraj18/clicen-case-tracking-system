<html>
<head>
<link rel="stylesheet" href="overlap__gallery.css" />
<title>edit Lawyer Details</title></head>
<body>
<h1>LAWYER DETAILS</h1>
<br>
<br>
<table border="" align="center" >
<form action="" method="post">
<?php
if(isset($_POST['view']))
{
$a=$_POST['lawyername'];
echo"$a";
mysql_connect("localhost","root","darwin123");
mysql_select_db("clientcase");
$result=mysql_query("select * from lawyer_details where lawyer_name='$a'");

  while($row=mysql_fetch_array($result))
  {
  echo"<tr><td>clientid</td><td><input type='text'  name='lawyername' value='".$row[0]."'></td></tr>
        <tr><td>clientname</td><td><input type='text'  name='qualification' value='".$row[1]."'></td></tr>
		 <tr><td>Father/husband/wife name</td><td><input type='text'  name='experiance' value='".$row[2]."'></td></tr>
		 <tr><td>emailido</td><td><input type='text'  name='emailid' value='".$row[3]."'></td></tr>
			<tr><td>Address</td><td><input type='text'  name='Address' value='".$row[4]."'></td></tr> 
			<tr align='center'><td colspan='2'><input type='submit' name='update' value='update'><input type='submit' value='delete' name='delete'></td></tr>
			<tr align='center'><td colspan='2'><a href='home.php'>HOME</a></td></tr>";
			}
			}
			if(isset($_POST['update']))
			{
			$a=$_POST['lawyername'];
			$b=$_POST['qualification'];
			$c=$_POST['experiance'];
			$d=$_POST['emailid'];
			$e=$_POST['Address'];
			  
			 mysql_connect("localhost","root","darwin123");
			 mysql_select_db("clientcase");
			 mysql_query("update lawyer_details  set qualification='$b', experiance='$c', email_id='$d', address='$e' where lawyer_name='$a'");			 
			 echo"<script>alert('Record Updated Sucesfully')</script>";
				}
	 	else if(isset($_POST['delete']))
			{
		
			  	$a=$_POST['lawyername'];
			$b=$_POST['qualification'];
			$c=$_POST['experiance'];
			$d=$_POST['emailid'];
			$e=$_POST['Address'];
			mysql_connect("localhost", "root", "darwin123");
			mysql_select_db("clientcase");
			mysql_query("delete from lawyer_details where lawyer_name='$a'");
  			echo"<script>alert('Record Deleted Sucesfully')</script>";
  }
  
  ?>
  </form>
  </table>
  </body>
  </html>