<html>
 <head>
 <title>uploadfile2</title>
 </head>
 <body>
 <?php
 if(isset($_POST['submit']))
 {
 
 	$a=$_FILES['file']['name'];
	
	$s=$_SERVER['DOCUMENT_ROOT']."/myproject/document";
	move_uploaded_file($_FILES["file"]["tmp_name"],$s."/".$_FILES["file"]["name"]);
	echo"stored in:".$s."/".$_FILES["file"]["name"];

     
$b=$_POST['client_id'];
$c=$_POST['client_name'];
$d=$_POST['address'];
$e=$_POST['case_details'];
$f=$_POST['area'];
$g=$_POST['station'];
$h=$_POST['court'];
$i=$_POST['lawter_name'];
 
 mysql_connect("localhost","root","darwin123");
mysql_select_db("clientcase");
mysql_query("Insert INTO client_details values('$b','$c','$d','$e','$f','$g','$h','$i', '$a')");
echo("<script>alert('info submited')</script>");


}
	?>
	</body>
	</html>