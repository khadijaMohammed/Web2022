<?php
 $connection =mysqli_connect('localhost','root','','web2022');
if(!$connection){
  die('Connection failed'.mysqli_connect_error());
}


if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$query = "select * from students where id = $id limit 1";
	$result = mysqli_query($connection, $query);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
	}
}


  ?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Edit</title>
</head>
<body>
<?php

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$id = $_GET['id'];

			$password = $_POST['password'];
			$email = $_POST['email'];
	

			if (!empty($id) && !empty($password) && !empty($email) ) {

				$query = "update students set password = '$password', email = '$email' where id = $id";
				$result = mysqli_query($connection, $query);

				if ($result) {
					echo '<div class="row"><div class="col-12"><div class="alert alert-success">Student reconrd updated successfully</div></div></div>';
				} else {
					echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to update this student</div></div></div>';
				}

			} else {
				echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Some fields are missing</div></div></div>';
			}
		} else {
			if (isset($_GET['id'])) {
				$id = $_GET['id'];

				$query = "select * from students where id = $id limit 1";
				$result = mysqli_query($connection, $query);

				if (mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
				}
			}
		}

		?>



<form method="post" action="#. '?id=' . $_GET['id']; ?>"enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"value="<?= ((isset($row)) ? $row["email"] : "" ) ?>" name= "email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" name="email"class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password"value="<?= ((isset($row)) ? $row["password"] : "" ) ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>


  <div class="form-group">
    <label for="personalImmage">Image</label>
    <input type="file" name="Image" class="form-control" >
  </div>


  <div class="form-check">
    <input type="checkbox"name="agree" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" id="savebtn" class="btn btn-primary">Submit</button>
</form>
<div>
  <a href="http://localhost/Web2022Course/Lecture/14-file/example.php?exampleInputEmail1=khadija@gmail.com">Go To Link</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>
</html>