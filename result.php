<!DOCTYPE html>
<html>
<head>
	<title>Poll results</title>
	<link rel="shortcut icon" type="image/png" href="eci.jpg">
	<title>Voting- Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<br><br>
<?php
	$db=new mysqli('localhost','root','','voting');
	$temp="SELECT * FROM polldetails1";
	$result=$db->query($temp);
	$disp=$result->num_rows;
	$temp1="SELECT * FROM polldetails1 WHERE party='TDP'";
	$temp2="SELECT * FROM polldetails1 WHERE party='BJP'";
	$temp3="SELECT * FROM polldetails1 WHERE party='Janasena'";
	$temp4="SELECT * FROM polldetails1 WHERE party='Congress'";
	$temp5="SELECT * FROM polldetails1 WHERE party='Loksatta'";
	$temp6="SELECT * FROM polldetails1 WHERE party='YSRCP'";
	$temp7="SELECT * FROM polldetails1 WHERE party='NOTA'";
	$result1=$db->query($temp1);$disp1=($result1->num_rows)*(100)/($disp);
	$result2=$db->query($temp2);$disp2=($result2->num_rows)*(100)/($disp);
	$result3=$db->query($temp3);$disp3=($result3->num_rows)*(100)/($disp);
	$result4=$db->query($temp4);$disp4=($result4->num_rows)*(100)/($disp);
	$result5=$db->query($temp5);$disp5=($result5->num_rows)*(100)/($disp);
	$result6=$db->query($temp6);$disp6=($result6->num_rows)*(100)/($disp);
	$result7=$db->query($temp7);$disp7=($result7->num_rows)*(100)/($disp);
	$resulttotal=($result1->num_rows + $result2->num_rows + $result3->num_rows + $result4->num_rows + $result5->num_rows + $result6->num_rows + $result7->num_rows);
?>
<div class="container">
	<table class="table">
		<thead>
				<tr>
					<th>S.NO.</th>
					<th>PARTY</th>
					<th>CANDIDATE NAME</th>
					<th>NO. OF VOTES</th>
				</tr>
		</thead>
		<tbody>
			<tr>
				<td>1.</td>
				<td>TDP</td>
				<td>Sandeep</td>
				<td><?php echo $result1->num_rows; ?></td>
			</tr>
			<tr>
				<td>2.</td>
				<td>BJP</td>
				<td>Sabarish</td>
				<td><?php echo $result2->num_rows; ?></td>
			</tr>
			<tr>
				<td>3.</td>
				<td>Janasena</td>
				<td>Kishore</td>
				<td><?php echo $result3->num_rows; ?></td>
			</tr>
			<tr>
				<td>4.</td>
				<td>Congress</td>
				<td>H.C.I</td>
				<td><?php echo $result4->num_rows; ?></td>
			</tr>
			<tr>
				<td>5.</td>
				<td>Loksatta</td>
				<td>Nara Lokesh</td>
				<td><?php echo $result5->num_rows; ?></td>
			</tr>
			<tr>
				<td>6.</td>
				<td>YSRCP</td>
				<td>Roja</td>
				<td><?php echo $result6->num_rows; ?></td>
			</tr>
			<tr>
				<td>7.</td>
				<td>NOTA</td>
				<td>----</td>
				<td><?php echo $result7->num_rows; ?></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><h3><b>Total votes</b></h3></td>
				<td><h3><b><?php echo $resulttotal;?></b></h3></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="container">
	<div class="progress" style="height: 26px;">
    <div class="progress-bar" role="progressbar" style="width:<?php echo $disp1;?>%; background-color: #e0ea23">
      TDP
    </div>
    <div class="progress-bar" role="progressbar" style="width:<?php echo $disp2;?>%; background-color: #e5a910">
      BJP
    </div>
    <div class="progress-bar" role="progressbar" style="width:<?php echo $disp3;?>%; background-color: #d10a0a">
      Janasena
    </div>
    <div class="progress-bar" role="progressbar" style="width:<?php echo $disp4;?>%; background-color: #1b4c11">
      Congress
    </div>
    <div class="progress-bar" role="progressbar" style="width:<?php echo $disp5;?>%; background-color: #d10a0a">
      Loksatta
    </div>
    <div class="progress-bar" role="progressbar" style="width:<?php echo $disp6;?>%; background-color: black;">
      YSRCP
    </div>
    <div class="progress-bar" role="progressbar" style="width:<?php echo $disp7;?>%; background-color: white;">
      NOTA
    </div>
  </div>
</div>
<div class="container">
	<h3><b>Vote percentage</b></h3>
	<div style="display: inline-block;"><h4>TDP     : <?php echo (int)$disp1;?>%</h4></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<div style="display: inline-block;"><h4>BJP     : <?php echo (int)$disp2;?>%</h4></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<div style="display: inline-block;"><h4>JANASENA: <?php echo (int)$disp3;?>%</h4></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<div style="display: inline-block;"><h4>CONGRESS: <?php echo (int)$disp4;?>%</h4></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<div style="display: inline-block;"><h4>LOKSATTA: <?php echo (int)$disp5;?>%</h4></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<div style="display: inline-block;"><h4>YSRCP   : <?php echo (int)$disp6;?>%</h4></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<div style="display: inline-block;"><h4 style="color: red;">NOTA    : <?php echo (int)$disp7;?>%</h4></div>
</div>
</body>
</html>