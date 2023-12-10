<html>
	<head>
		<title>Case Adjournment</title>
	</head>
<body>
	<form action="" method="post">
		<table align="center" border="1">
		
		<?php
		if(isset($_POST['add']))
				{
					$a=$_POST['client_id'];
					$b=$_POST['client_name'];
					$c=$_POST['d'];
					$d=$_POST['casedetails'];
					$e=$_POST['lname'];
					$f=$_POST['court'];
				
				
			mysql_connect("localhost","root","darwin123");
mysql_select_db("clientcase");
mysql_query("Insert INTO case_adj values('$a','$b','$c','$d','$e','$f')");
				echo("<script>alert('info submited')</script>");	
				
				}
	?></table></form>
</body>
</html>