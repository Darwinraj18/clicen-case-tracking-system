<html>
<head>
    <title>adminlogin</title>
    <link rel="stylesheet" href="overlap__gallery.css" />
</head>
<body>
    <br><br>
    <font color="#FFFFFF"><h1>ADMIN LOGIN</h1></font>
    <br>
    <br>
    <table border="" align="center">
        <form action="" method="post">
            <tr align="center">
                <td>user name</td>
                <td><input type="text" name="name" /></td>
            </tr>

            <tr align="center">
                <td>password</td>
                <td><input type="password" name="password" /></td>
            </tr>

            <tr align="center">
                <td colspan="2"><input type="submit" value="login" name="lawyerlogin" /></td>
            </tr>

            <tr align="center">
                <td colspan="2"><a href="home.php">BACK</a></td>
            </tr>
        </form>
    </table>

    <?php
    if(isset($_POST["lawyerlogin"]))
    {
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";

        if(($name == "ADMIN" || $name == "admin") && ($password == "LAWYER" || $password == "lawyer"))
        {
            echo ("<script>window.location.href='view.php'</script>");
        }
        else if($name == "") {
            echo '<script>alert("Invalid user name")</script>';
        }
        else if($password == "") {
            echo '<script>alert("Invalid password")</script>';
        }
    }
    ?>
</body>
</html>
