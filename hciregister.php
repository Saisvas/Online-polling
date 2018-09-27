<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/png" href="eci.jpg">
	<title>Registration page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      width: 30%; margin: 0 auto; padding-top: 20px;
       position: absolute; z-index: 9999; margin-left: 50px;
    }
</style>


  <script type="text/javascript">
   
    function checkfields()
    {
      var temp=document.forms["registerdetails"]["username"].value;
      var temp1=document.forms["registerdetails"]["fathername"].value;
     //var temp2=document.forms["registerdetaiols"]["aadhar"].value;
      var temp3=document.forms["registerdetails"]["address"].value;
      var temp4=document.forms["registerdetails"]["optradio"].value;
      var temp5=document.forms["registerdetails"]["dob"].value;
      var temp6=document.forms["registerdetails"]["pass"].value;
    //var temp7=document.forms["registerdetails"]["pass1"].value;*/


      if(temp=="" || temp1=="" || temp3=="" || temp4=="" || temp5=="" || temp6=="")
      {
        alert("Please fill all the fields");
        return false;
      }
    }
  </script>
</head>
<body>
  
<?php
  $db=new mysqli('localhost','root','','voting');
  $mailidcheck;
  $passshort=$passfail=' ';
  if(isset($_POST['register']))
  {
  	$uname=$_POST['username'];
  	$fname=$_POST['fathername'];
  	$aad=$_POST['aadhar'];
  	$add=$_POST['address'];
  	$gen=($_POST['optradio']);//either 0 or 1
  	$date=$_POST['dob'];
  	$pass=$_POST['pass'];
  	$pass1=$_POST['pass1'];
  	//if(empty($uname) || empty($fname) || empty($aad) || empty($add) || empty($gen) || empty($date) || empty($pass) || empty($pass1))
  	//{
  	//	echo "<script type='text/javascript'>alert('Kindly fill all the fields');</script>";
  	//}
  	//else
  	//{
  		$gender=$_POST['optradio'];
  	
        //if($pass!=$pass1) 
        //{

          //$passfail="Password mismatch";
        //}
        //else
      //  {
          $mailidcheck="SELECT * FROM registerdetails1 WHERE aadhar='$aad' OR name='$uname'";
          $result=$db->query($mailidcheck);
          $regyes=$result->num_rows;
          if ($regyes>0)
          {
            echo '<script type="text/javascript">alert("AadharID or Username exists already");</script>' ;
          }
          else
          {
	$into="INSERT INTO registerdetails1 (name,fname,aadhar,address,gender,dob,pass) VALUES ('$uname','$fname','$aad','$add','$gender','$date','$pass')";
  	if(mysqli_query($db,$into))
  	{
  		echo "<script type='text/javascript'>alert('Registration successfull');</script>";
      echo("<script>location.href ='login.php';</script>");
  	}
  }
  //}
  
  //}
  }
?>
<div id="bgnd">
<div class="form-group">
	<form method="post" action="hciregister.php" name="registerdetails">
		<label class="control-label col-sm-2" style="color: yellow;">Register</label>
		<input type="text" name="username" id="mail" class="form-control" placeholder="Enter Name"><br>
		<input type="text" name="fathername" id="user" class="form-control" placeholder="Father's name"><br>
		<input type="number" name="aadhar" id="adno" class="form-control" placeholder="Enter AADHAR no."><br>
		<input type="text" name="address" id="add" class="form-control" placeholder="Enter address"><br>
		<h5>Choose Gender</h5>
		&nbsp&nbsp<div class="radio" style="display: inline;">
			<input type="radio" name="optradio" value="male">Male
		</div>&nbsp&nbsp&nbsp&nbsp
		<div class="radio" style="display: inline;">
			<input type="radio" name="optradio" value="female">Female
		</div>&nbsp&nbsp&nbsp&nbsp
		<div class="radio" style="display: inline;">
			<input type="radio" name="optradio" value="others">Others
		</div>
		<br><br>
		<h5>Enter DOB</h5>
		<input type="date" name="dob" class="form-control" placeholder="DD/MM/YYYY"><br>
		<input type="password" name="pass"  class="form-control" placeholder="Enter Password(Min 8 characters)"><span style="color:red";><?php echo $passshort;?></span><br>
		<input type="password" name="pass1" class="form-control" placeholder="Re-enter Password"><span style="color:red";><?php echo $passfail;?></span><br>
	
<button style="width: 70%; margin: 0 auto;" class="btn btn-primary" type="submit" name="register" onclick="return checkfields()">Register</button>
</form>



<br><br>
<p>Already registered?<a href="login.php" style="text-decoration: none;color: red;"> Login here</a></p>
</div>
</div>
</script>

<script src="polygonizr.min.js"></script>
<script type="text/javascript">
$('#bgnd').polygonizr();
</script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" 
  crossorigin="anonymous">
</script>
</body>
</html>