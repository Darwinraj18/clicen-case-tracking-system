<html>
<head>

<link rel="stylesheet" href="overlap__gallery.css" />
<title>lawyer detail</title>
</head><body>
<BR><BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF"<h1>LAWYER DETAILS</h1></font>

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
<td colspan="2"><input type="submit"  value="submit" name="lawyerdetails">
				<a href="editlawyer.php">Edit Lawyer Details</a></td></tr>

<tr align="center">
<td colspan="2"><a href="home.php">BACK</a>
</td></tr>


</form>

<?php
if(isset($_POST['lawyerdetails'])) {
    $a = isset($_POST['lawyername']) ? $_POST['lawyername'] : '';
    $b = isset($_POST['qualification']) ? $_POST['qualification'] : '';
    $c = isset($_POST['experiance']) ? $_POST['experiance'] : '';
    $d = isset($_POST['Address']) ? $_POST['Address'] : '';
    $e = isset($_POST['emailid']) ? $_POST['emailid'] : '';

    if ($a == "" || $b == "" || $c == "" || $d == "" || $e == "") {
        echo("<script>alert('Fill all information')</script>");
    } else {
        $conn = mysqli_connect("localhost", "root", "", "clientcase");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO lawyer_details (lawyername, qualification, experiance, Address, emailid) VALUES ('$a', '$b', '$c', '$d', '$e')";

        if (mysqli_query($conn, $sql)) {
            echo("<script>alert('Information submitted')</script>");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
?>

</table>
</html>

