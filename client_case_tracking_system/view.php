<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clientcase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM client_register");

echo "<table border='' bgcolor='#FFFFFF' align='center'><tr><th>client_id</th><th>client_name</th><th>father/husband/wife_name</th><th>gender</th><th>contact_no</th><th>age</th><th>email_id</th><th>address</th>";

// Check if there are rows in the result set
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['client_id'] . "</td><td>" . $row['client_name'] . "</td><td>" . $row['father_husband_wife_name'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['contact_no'] . "</td><td>" . $row['age'] . "</td><td>" . $row['email_id'] . "</td><td>" . $row['address'] . "</td>";
    }
} else {
    echo "<tr><td colspan='8'>No records found</td></tr>";
}

echo "<tr><th colspan='8' align='center'><a href='home.php'><input type='button' name='SUB' value='Back' /></a></th></tr></table>";

$conn->close();
?>
