<table align="center">
<tr>
<th colspan="2">USER LOGIN</th>
</tr>
<tr>
<td>User Name</td>
<td><input type="text" name="un"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pa"></td></tr>

<tr><th colspan="2"><input type=submit name=sub value=REGISTER></th></tr></tr></table></form>
<?php
if(isset($_POST['sub']))
{
error_reporting(E-ERROR);
$a=$_POST['un'];
$b=$_POST['pa'];
mysql_connect("localhost","root","darwin123");
mysql_select_db("store");
mysql_query("INSERT INTO register VALUES('$a','$b')");
echo"<script>alert('Register Successfully')</script>";
}
?>
