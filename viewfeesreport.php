<BR><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF"><h1>FEES REPORT</h1></font>
<link rel="stylesheet" href="overlap__gallery.css" />
<table border="" bgcolor="#FFFFFF" align="center">
    <tr>
        <th>clientid</th>
        <th>clientname</th>
        <th>address</th>
        <th>fees</th>
        <th>payment method</th>
        <th>Date</th>
    </tr>

    <?php
    $a = $_POST['client_id'];
    $conn = new mysqli("localhost", "root", "", "clientcase");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM fees WHERE client_id=$a");

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['client_id'] . "</td><td>" . $row['client_name'] . "</td><td>" . $row['address'] . "</td><td>" . $row['fees'] . "</td><td>" . $row['payment'] . "</td><td>" . $row['date'] . "</td></tr>";
        }
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
    ?>

    <tr>
        <th colspan="6" align="center"><a href="home.php"><input type="button" name="SUB" value="Back" /></a></th>
    </tr>
</table>
