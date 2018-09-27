<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/png" href="eci.jpg">
	<title>Login page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</script>
<style type="text/css">
html, body {
        height: 100%;
        width: 100%;
        margin: 0;
    }
   #bgnd {
        position:relative;
        height: 100%;
        width: 100%;
        background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);
    }
    .form-group
    {
      width: 30%; margin: 0 auto; padding-top: 100px;
       position: absolute; z-index: 9999; margin-left: 30px;
    }
</style>
  <script type="text/javascript">
    function checkfields()
    {
      var temp=document.forms["logindetails"]["aadhar"].value;
      var temp1=document.forms["logindetails"]["pass1"].value;
      if(temp=="" || temp1=="")
      {
        alert("Please fill all the fields");
        return false;
      }
    }
  </script>
</head>
<body background="robo.jpg" style="background-repeat: no-repeat;">
  <div id="bgnd">
<?php
  $db=new mysqli('localhost','root','','voting');
  $mailidcheck;
  $passshort=$passfail=' ';
  if(isset($_POST['login']))
  {
  	$aad=$_POST['aadhar'];
  	$pass=$_POST['pass1'];
  	$aadcheck="SELECT * FROM registerdetails1 WHERE aadhar='$aad' AND pass='$pass' ";
  	$result=$db->query($aadcheck);
  	$logyes=$result->num_rows;
  	if($logyes == 1)
  	{
  		$row=mysqli_fetch_array($result);
  		{
  			$_SESSION['aadhar']=$row['aadhar'];
  			$_SESSION['username']=$row['name'];
  		}
  		echo("<script>location.href ='home.php';</script>");
  	}
  	else
  	{
  		echo '<script type="text/javascript">alert("Invalid credentials");</script>';
  	}
  }
 ?>

<div class="form-group">
		<form method="post" action="login.php" name="logindetails"><br><br><br><br><br><br><br>
		<label class="control-label col-sm-2">Login</label>
		<input type="number" name="aadhar" id="aad" class="form-control" placeholder="Enter Aadhar no."><br>
		<input type="password" name="pass1" id="pass" class="form-control" placeholder="Enter password"><br>
<button style="width: 30%;" class="btn btn-primary" type="submit" name="login" onclick="return checkfields()">Login</button>
</form>
<br><br>
<p>No account? <a href="hciregister.php" style="color: red; text-decoration: none;">Register here</a></p>
<!--  <span><?php //echo $showlog;?></span>   -->
</div>
<script src="polygonizr.min.js"></script>
<script type="text/javascript">

$('#bgnd').polygonizr();

</script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" 
  crossorigin="anonymous">
</script>
</div>
</body>
</html>