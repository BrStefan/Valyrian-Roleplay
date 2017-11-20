<html>
<head>
<title>Valyrian Roleplay Ban List</title>
<link rel="stylesheet" type="text/css" href="style.css?v=1.3">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="animate.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<body>
<?php
	include 'connection.php';
	$query=mysqli_query($con,"SELECT * FROM `ban`");
		echo "<table class=w3-table-all>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>";
		echo "Nume";
		echo "</th>";
		echo "<th>";
		echo "Admin";
		echo "</th>";
		echo "<th>";
		echo "Motiv";
		echo "</th>";
		echo "<th>";
		echo "Data";
		echo "</th>";
		echo "<th>";
		echo "Numar de zile";
		echo "</th>";
		echo "<th>";
		echo "Activ";
		echo "</th>";
		echo "</tr>";
		echo "</thead>";
	while($row= mysqli_fetch_assoc($query))
	{
		echo "<tr>";
		echo "<td>";
		echo $row['Jucator'];
		echo "</td>";
		echo "<td>";
		echo $row['Admin'];
		echo "</td>";
		echo "<td>";
		echo $row['Motiv'];
		echo "</td>";
		echo "<td>";
		echo $row['ZBAN'];
		echo "/";
		echo $row['LBAN'];
		echo "/";
		echo $row['ABAN'];
		echo "</td>";
		echo "<td>";
		if($row['Zile']==0)echo "Permanent";
		else 
		echo $row['Zile'];
		echo "</td>";
		echo "<td>";
		if($row['Activ']==1)echo "Da";
		else echo "Nu";
		echo "</td>";
		echo "</td>";
	}
			echo "</table>";
?>
</body>
</html>