<?php
 $connection =mysqli_connect('localhost','root','','web2022');
if(!$connection){
  die('Connection failed'.mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = $_POST['id'];

	if (!empty($id)) {
		$query = "delete from students where id = $id";
		$result = mysqli_query($connection, $query);

		if ($result) {
			echo "Deleted successfully";
		} else {
			echo "Failed to delete";
		}

		mysqli_close($connection);
	} else {
		echo "ID is missing";
	}
}

  ?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="selectdb.php">View Students</a>
</body>
</html>