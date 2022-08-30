<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  /*
 $email=$_POST['email'];
  $password=$_POST['password'];
  if(isset($_POST['agree'])){
    $agree=true;
  }else{
    $agree=false;
//action.php?exampleInputEmail1=khadija@gmail.com
  }
  */
  if(isset($_POST['email'])&& isset($_POST['password'])){
    $email=$_POST['email'];
  $password=$_POST['password'];
  if(empty($email)&& empty($password)){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){}

  }
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
  <title>Form</title>
</head>
<body>
<form method="post" action="#"id="myForm">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox"name="agree" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" id='save-btn' class="btn btn-primary">Submit</button>
</form>
<div>
  <a href="http://localhost/Web2022Course/Lecture/14-file/example.php?exampleInputEmail1=khadija@gmail.com">Go To Link</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $('#save-btn').click(function(){
    var result =confirm('Are you Sure');
    if (result == true){
      $('#myForm').subimt();
    } 
  });
});
</script>
</body>
</html>
 