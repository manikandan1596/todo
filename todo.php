<html>
<head>
<title>TODO LIST</title>
</head>
<body bgcolor=#60b4n0>
<center><h1>TODO LIST </h1></center>
<center>
	<form action="insert.php" method="POST">
	TITLE:<input type="text" name="title"><br>
	DESCRIPTION:<input type="text" name="description"><br>
	DUE DATE:<input type="date" name="duedate"><br>
	<input type="submit" value="insert">
</center>

<?php

$db=mysqli_connect('localhost','root','');

mysqli_select_db($db,'todo');

$sql="SELECT * FROM todo1";

$view=mysqli_query($db,$sql);

?>

<h3>TASKS:</h3>
<table>
<tr>

<th>TITLE</th>
<th>DESCRIPTION</th>
<th>DUE DATE</th>
</tr>
<tr>
<?php

while($rows=mysqli_fetch_array($view))
{

	echo "<tr>";
	echo "<td>".$rows['TITE']."</td>";
	echo "<td>".$rows['DISCRIPTION']."</td>";
	echo "<td>".$rows['DUEDATE']."</td>";
	echo "</tr>";
}
?>
</tr>
</table>
</body>
</html>
 