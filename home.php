<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/png" href="images/eci.jpg">
	<title>Voting- Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.well {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.1s cubic-bezier(.25,.8,.25,1);
}

.well:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
  </style>
</head>
<body>
	<?php
	$display=$votedone='';
	 $db=new mysqli('localhost','root','','voting');
	 $ses=($_SESSION['username']);
	 if(isset($_POST['opinion1']) && !empty($ses))
	 {
	 	$temp=$_SESSION['username'];
	 	$sql="INSERT INTO polldetails1(party,candidate,user) VALUES ('TDP','Sandeep','$temp')";
	 	$submitcheck="SELECT * FROM polldetails1 WHERE user='$temp'";
	 	$submitresult=$db->query($submitcheck);
		$subyes=$submitresult->num_rows;
		if($subyes>0)
		{
			$votedone="Already voted, please logout" ;
		}
		else
		{
			if(mysqli_query($db, $sql))
		{
				echo '<script type="text/javascript">alert("Opinion submitted");</script>';
				 //header('Location:empty.php');
		}
		}
	 }
	 elseif(isset($_POST['opinion2']) && !empty($ses))
	 {
	 	$temp=$_SESSION['username'];
	 	$sql="INSERT INTO polldetails1(party,candidate,user) VALUES ('BJP','Sabarish','$temp')";
	 	$submitcheck="SELECT * FROM polldetails1 WHERE user='$temp'";
	 	$submitresult=$db->query($submitcheck);
		$subyes=$submitresult->num_rows;
		if($subyes>0)
		{
			$votedone="Already voted, please logout" ;
		}
		else
		{
			if(mysqli_query($db, $sql))
		{
				echo '<script type="text/javascript">alert("Opinion submitted");</script>';
				 //header('Location:empty.php');
		}
		}
	 }
	 elseif(isset($_POST['opinion3']) && !empty($ses))
	 {
	 	$temp=$_SESSION['username'];
	 	$sql="INSERT INTO polldetails1(party,candidate,user) VALUES ('Janasena','Kishore','$temp')";
	 	$submitcheck="SELECT * FROM polldetails1 WHERE user='$temp'";
	 	$submitresult=$db->query($submitcheck);
		$subyes=$submitresult->num_rows;
		if($subyes>0)
		{
			$votedone="Already voted, please logout" ;
		}
		else
		{
			if(mysqli_query($db, $sql))
		{
				echo '<script type="text/javascript">alert("Opinion submitted");</script>';
				 //header('Location:empty.php');
		}
		}
	 }
	 elseif(isset($_POST['opinion4']) && !empty($ses))
	 {
	 	$temp=$_SESSION['username'];
	 	$sql="INSERT INTO polldetails1(party,candidate,user) VALUES ('Congress','HCI','$temp')";
	 	$submitcheck="SELECT * FROM polldetails1 WHERE user='$temp'";
	 	$submitresult=$db->query($submitcheck);
		$subyes=$submitresult->num_rows;
		if($subyes>0)
		{
			$votedone="Already voted, please logout" ;
		}
		else
		{
			if(mysqli_query($db, $sql))
		{
				echo '<script type="text/javascript">alert("Opinion submitted");</script>';
				 //header('Location:empty.php');
		}
		}
	 }
	 elseif(isset($_POST['opinion5']) && !empty($ses))
	 {
	 	$temp=$_SESSION['username'];
	 	$sql="INSERT INTO polldetails1(party,candidate,user) VALUES ('Loksatta','Nara Lokesh','$temp')";
	 	$submitcheck="SELECT * FROM polldetails1 WHERE user='$temp'";
	 	$submitresult=$db->query($submitcheck);
		$subyes=$submitresult->num_rows;
		if($subyes>0)
		{
			$votedone="Already voted, please logout" ;
		}
		else
		{
			if(mysqli_query($db, $sql))
		{
				echo '<script type="text/javascript">alert("Opinion submitted");</script>';
				 //header('Location:empty.php');
		}
		}
	 }
	 elseif(isset($_POST['opinion6']) && !empty($ses))
	 {
	 	$temp=$_SESSION['username'];
	 	$sql="INSERT INTO polldetails1(party,candidate,user) VALUES ('YSRCP','Roja','$temp')";
	 	$submitcheck="SELECT * FROM polldetails1 WHERE user='$temp'";
	 	$submitresult=$db->query($submitcheck);
		$subyes=$submitresult->num_rows;
		if($subyes>0)
		{
			$votedone="Already voted, please logout" ;
		}
		else
		{
			if(mysqli_query($db, $sql))
		{
				echo '<script type="text/javascript">alert("Opinion submitted");</script>';
				 //header('Location:empty.php');
		}
		}
	 }
	 elseif(isset($_POST['opinion7']) && !empty($ses))
	 {
	 	$temp=$_SESSION['username'];
	 	$sql="INSERT INTO polldetails1(party,candidate,user) VALUES ('NOTA','----','$temp')";
	 	$submitcheck="SELECT * FROM polldetails1 WHERE user='$temp'";
	 	$submitresult=$db->query($submitcheck);
		$subyes=$submitresult->num_rows;
		if($subyes>0)
		{
			$votedone="Already voted, please logout" ;
		}
		else
		{
			if(mysqli_query($db, $sql))
		{
				echo '<script type="text/javascript">alert("Opinion submitted");</script>';
				 //header('Location:empty.php');
		}
		}
	 }
	 if (isset($_POST['logout'])) 
	 {
	 	session_unset();
	 	session_destroy();
	 	echo '<script type="text/javascript">alert("Logged out Successfully");</script>';
		echo("<script>location.href ='login.php';</script>");
	 }
	?>
<br><br>
<div style="position: absolute;right: 20px;width: 300px; padding-top: 5px; padding-bottom: 15px;padding-left: 30px;border:1px solid #64afa2;">
	<h2 ><b>Voter Details</b></h2>
	<h3 >Aadhar: <b><?php echo $_SESSION['aadhar'] ?></b></h3>
    <h3 >Name: <b><?php echo $_SESSION['username'] ?></b></h3>
    <h4 style="color: #ef361a"><b><?php echo $votedone;?><b></h4>
   <form method="post" action="home.php"> <button type="submit" class=" btn btn-primary" name="logout">Logout</button></form>
</div>
<br><br>
<div class="container">
	<h3 style="color: #407a73;">&nbsp&nbspCAST YOUR VOTE</h3>
	<div class="col-sm-8 col-md-8">
		<div class="well" style="cursor: pointer;">
			<form method="post" action="home.php">
			<table class="table">
				<thead>
					<tr>
						<th>S.NO.</th>
						<th>PARTY</th>
						<th>LOGO</th>
						<th>CANDIDATE NAME</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1.</td>
						<td>Telugu Desam Party</td>
						<td><img style="width: 35px; height: 35px;" src="images/tdp.jpg"></td>
						<td>Sandeep</td>
						<td><button type="submit" class="btn btn-primary active" name="opinion1">Vote</button></td>
					</tr>
					<tr>
						<td>2.</td>
						<td>Bharathiya Janatha Party</td>
						<td><img style="width: 35px; height: 35px;" src="images/bjp.jpg"></td>
						<td>Sabarish</td>
						<td><button type="submit" class="btn btn-primary active" name="opinion2">Vote</button></td>
					</tr>
					<tr>
						<td>3.</td>
						<td>Janasena</td>
						<td><img style="width: 35px; height: 35px;" src="images/janasena.jpg"></td>
						<td>Kishore</td>
						<td><button type="submit" class="btn btn-primary active" name="opinion3">Vote</button></td>
					</tr>
					<tr>
						<td>4.</td>
						<td>Congress</td>
						<td><img style="width: 35px; height: 35px;" src="images/congress.jpg"></td>
						<td>H.C.I</td>
						<td><button type="submit" class="btn btn-primary active" name="opinion4">Vote</button></td>
					</tr>
					<tr>
						<td>5.</td>
						<td>Loksatta</td>
						<td><img style="width: 35px; height: 35px;" src="images/loksatta.jpg"></td>
						<td>Nara Lokesh</td>
						<td><button type="submit" class="btn btn-primary active" name="opinion5">Vote</button></td>
					</tr>
					<tr>
						<td>6.</td>
						<td>YSRCP</td>
						<td><img style="width: 35px; height: 35px;" src="images/ysrcp.jpg"></td>
						<td>Roja</td>
						<td><button type="submit" class="btn btn-primary active" name="opinion6">Vote</button></td>
					</tr>
					<tr>
						<td>7.</td>
						<td>NOTA</td>
						<td><img style="width: 35px; height: 35px;" src="images/nota.jpg"></td>
						<td>----</td>
						<td><button type="submit" class="btn btn-primary active" name="opinion7">Vote</button></td>
					</tr>
				</tbody>
			</table>
		</form>
		</div>
	</div>
</div>
</body>
</html>