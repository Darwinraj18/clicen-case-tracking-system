<html>
<head>
<title>clienregestration</title>
<link rel="stylesheet" href="overlap__gallery.css" />
</head><body>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF"<h1>CLENT REGISTRATION </h1></font>

<table align="center" >
<form action="" method="post">

<tr align="center">
<td>client id</td>
<td><input type="text" name="clientid"/></td>
</tr>

<tr align="center">
<td>client name</td>
<td><input type="text" name="clientname"/></td>
</tr>

<tr align="center">
<td>Father/husband/wife name</td>
<td><input type="text" name="father_husband_wife_name"/></td>
</tr>

<tr align="center">
<td>Gender</td>
<td><input type="radio"  name="gender" value="male"/>male
<input type="radio"  name="gender" value="female"/>female</td>
</tr>

<tr align="center">
<td>contact no</td>
<td><input type="text" name="contactno"/></td>
</tr>

<tr align="center">
<td>age</td>
<td><input type="text" name="age"/></td>
</tr>


<tr align="center">
<td>email id</td>
<td><input type="text" name="emailid"/></td>
</tr>

<tr align="center">
<td>address</td>
<td><textarea rows="" cols="" name="address"></textarea></td>
</tr>
<tr align="center">
<td colspan="2"><input type="submit"  value="submit" name="submit"></td></tr>
<tr align="center"><td colspan="2"><a href="editclient.php">EDIT CLIENT DETAILS</td></tr>

<tr align="center">
<td colspan="2"><a href=home.php>HOME</a></td></tr>

</form>
<?php

if(isset($_POST['submit'])) {
    $clientid = isset($_POST['clientid']) ? $_POST['clientid'] : '';
    $clientname = isset($_POST['clientname']) ? $_POST['clientname'] : '';
    $father_husband_wife_name = isset($_POST['father_husband_wife_name']) ? $_POST['father_husband_wife_name'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $contactno = isset($_POST['contactno']) ? $_POST['contactno'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $emailid = isset($_POST['emailid']) ? $_POST['emailid'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';

    if($clientid=="" || $clientname=="" || $father_husband_wife_name=="" || $gender=="" || $contactno=="" || $age=="" || $emailid=="" || $address=="") {
        echo("<script>alert('Fill all info')</script>");
    } else {
        $connection = mysqli_connect("localhost", "root", "", "clientcase");
        if(!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $clientid = mysqli_real_escape_string($connection, $clientid);
        $clientname = mysqli_real_escape_string($connection, $clientname);
        $father_husband_wife_name = mysqli_real_escape_string($connection, $father_husband_wife_name);
        $gender = mysqli_real_escape_string($connection, $gender);
        $contactno = mysqli_real_escape_string($connection, $contactno);
        $age = mysqli_real_escape_string($connection, $age);
        $emailid = mysqli_real_escape_string($connection, $emailid);
        $address = mysqli_real_escape_string($connection, $address);

        $query = "INSERT INTO client_register VALUES ('$clientid','$clientname','$father_husband_wife_name','$gender','$contactno','$age','$emailid','$address')";
        if(mysqli_query($connection, $query)) {
            echo("<script>alert('Info submitted')</script>");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }

        mysqli_close($connection);
    }
}
?>


</table>

</body></html>

