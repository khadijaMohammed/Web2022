<?php
 $connection =mysqli_connect('localhost','root','','web2022');
if(!$connection){
  die('Connection failed'.mysqli_connect_error());
}


  ?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>View </title>
</head>
<body>


    <div class= container>
      <div class ="row"> 
<div class="col-12">
<table class="table table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Email</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
  
<?php $query ="SELECT id,email,password from students";
$result=mysqli_query($connection,$query) ;
if(mysqli_num_rows($result)>0){
while ($row =mysqli_fetch_assoc($result)){
  echo '<tr>' . '<td>' . $row['id'] . '</td>' . '<td>' . $row['email'] . '</td>' . '<td>' . $row['password']  . '</td>' . '<td><a href="editdb.php?id=' . $row['id'] . '">Edit</a></td>' . '<td><form action="deldb.php" method="POST"><input type="hidden" name="id" value="' . $row['id'] . '"> <button type="button" class="btn btn-danger" id="delete-btn"0>DELETE</button> </form></td>' . '</tr>';


};

}
?>    
</tbody>
</table>

  <a href="http://localhost/Web2022Course/Lecture/14-file/example.php?exampleInputEmail1=khadija@gmail.com">Go To Link</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
	$('#delete-btn').click(function (event) {
		event.preventDefault();

		var result = confirm("Are you sure?");

		if (result == true) {
			$(this).parent('form').submit();
		}
	});
</script>
</body>
</html>