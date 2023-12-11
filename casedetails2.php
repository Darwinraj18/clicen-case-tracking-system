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
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Check if the expected keys exist in $_POST
		$a = isset($_POST['client_id']) ? $_POST['client_id'] : "";
		$b = isset($_POST['client_name']) ? $_POST['client_name'] : "";
		$h = isset($_POST['address']) ? $_POST['address'] : "";
	
		// Validate and sanitize input if needed
	
		// Connect to the database using mysqli
		$conn = new mysqli("localhost", "root", "", "clientcase");
	
		// Check the connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	
		// Use prepared statements to prevent SQL injection
		$stmt = $conn->prepare("SELECT * FROM client_register WHERE client_id = ?");
		$stmt->bind_param("s", $a);
		$stmt->execute();
		$result = $stmt->get_result();
	
		// Do something with the result, e.g., fetch data
	
		// Close the statement and connection
		$stmt->close();
		$conn->close();
	}
	

	while ($row = $result->fetch_assoc()) 
  {
  echo"<tr align='center'><td>clientid</td><td><input type='text'  name='client_id' value='".$row['client_id']."'></td></tr>
        <tr align='center'><td>clientname</td><td><input type='text'  name='client_name' value='".$row["client_name"]."'></td></tr>
			<tr align='center'><td>address</td><td><input type='text'  name='address' value='".$row["address"]."'></td></tr> 
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
			
			
			