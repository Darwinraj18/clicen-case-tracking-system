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
if (isset($_POST['view'])) {
    $a = $_POST['lawyername'];
   // echo "$a";

    $conn = mysqli_connect("localhost", "root", "", "clientcase");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $result = mysqli_query($conn, "SELECT * FROM lawyer_details WHERE lawyer_name='$a'");

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td>LawyerName</td><td><input type='text'  name='lawyername' value='" . $row[0] . "'></td></tr>
              <tr><td>Qualification</td><td><input type='text'  name='qualification' value='" . $row[1] . "'></td></tr>
              <tr><td>Experiance</td><td><input type='text'  name='experiance' value='" . $row[2] . "'></td></tr>
              <tr><td>emailid</td><td><input type='text'  name='emailid' value='" . $row[3] . "'></td></tr>
              <tr><td>Address</td><td><input type='text'  name='Address' value='" . $row[4] . "'></td></tr>
              <tr align='center'><td colspan='2'><input type='submit' name='update' value='update'></td></tr>
              <tr align='center'><td colspan='2'><input type='submit' value='delete' name='delete'></td></tr>
              <tr align='center'><td colspan='2'><a href='home.php'>HOME</a></td></tr>";
    }
}

if (isset($_POST['update'])) {
    $a = $_POST['lawyername'];
    $b = $_POST['qualification'];
    $c = $_POST['experiance'];
    $d = $_POST['emailid'];
    $e = $_POST['Address'];

    $conn = mysqli_connect("localhost", "root", "", "clientcase");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "UPDATE lawyer_details SET qualification='$b', experiance='$c', email_id='$d', address='$e' WHERE lawyer_name='$a'";
    mysqli_query($conn, $query);

    echo "<script>alert('Record Updated Successfully')</script>";
}

if (isset($_POST['delete'])) {
    $a = $_POST['lawyername'];

    $conn = mysqli_connect("localhost", "root", "", "clientcase");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "DELETE FROM lawyer_details WHERE lawyer_name='$a'";
    mysqli_query($conn, $query);

    echo "<script>alert('Record Deleted Successfully')</script>";
}

?>

  
  </form>
  </table>
  </body>
  </html>