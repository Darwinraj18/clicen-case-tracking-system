
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="../../../Users/91959/AppData/Local/Temp/Temp1_ORGAN[PROJECT].zip/index.html">
            <img src="../../../Users/91959/AppData/Local/Temp/Temp1_ORGAN[PROJECT].zip/images/logo.png" alt="" />
            <span>
             Oragan Donate Website
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
               
                <li class="nav-item" active>
                  <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../../Users/91959/AppData/Local/Temp/Temp1_ORGAN[PROJECT].zip/Adminlogin.php"> ADMIN </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../../Users/91959/AppData/Local/Temp/Temp1_ORGAN[PROJECT].zip/login.php"> USER</a>
                </li>
 
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">




<form action="" method="post">
<body bgcolor="#CCFF99">
<table align="center">
<tr>
<th colspan="2">Registration</th>
</tr>
<td>UserName</td>
<td><input type="text" name="un"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="Password" name="pa"></td>
</tr>
<tr>

<tr><th colspan="2"><input type=submit name=sub value=REGISTER><a href="login.php"><input type=button name=sub1 value="LOGIN"></a></th></tr>
</table>
</body>
</form>
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




  </div>
                </div>
              </div>
            </div>
           
           
    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  
  <!-- end offer section -->

  <!-- about section -->
 
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023 All Rights Reserved By
      <a href="#"></a>
    </p>
  </section>
 
</body>

</html>