<!DOCTYPE html>
<html>
<head>
<meta>
<style>
body{
	background: black;
}
table {
	/*
	 b or*der-collapse: collapse;
	 width: 50%;
	 margin:350px;*/
	color:white;
}

th, td {
	text-align: left;
	padding: 8px;
}



th {
	background-color: #4CAF50;
	color: white;
}

body {margin:0;}


</style>
</head>
<body>
<div >

<?php

$host = "localhost"; /* Host name */
$user = "id8776684_studentdetail"; /* User */
$password = "QLa%5~eI](d]P}QK"; /* Password */
$dbname = "id8776684_student"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM `student`";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
	// output data of each row
	//echo "here";
	echo "<table><tr><th>Index</th><th>Name</th><th>Fathers name</th><th>Mothers Name</th><th>Class</th><th>Course</th><th>School</th><th>Address</th><th>Email</th><th>Parents No.</th><th>Mobile No.</th><th>Subject</th><th>Status </th>";
	while($row = $result->fetch_assoc())
	{
		
		echo "<tr>";
		echo "<td>".$row['index']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['mname']."</td>";
		echo "<td>".$row['class']."</td>";
		echo "<td>".$row['course']."</td>";
		echo "<td>".$row['school']."</td>";
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['pno']."</td>";
		echo "<td>".$row['mno']."</td>";
		echo "<td>".$row['sub']."</td>";
		echo "<td>".$row['Status']."</td>";
		
		echo "</tr>";
		
	}    
	echo "</table>";
} 

else 
{
	echo "0 results";
}

$conn->close();

?>
</div>
</body>
</html>
