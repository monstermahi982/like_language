<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $name = $_POST['name'];
 $language = $_POST['language'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $description = $_POST['description'];
 $q = " update crudtable set id=$id,  name='$name',language='$language',phone='$phone',email='$email',description='$description' where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:display.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Your Choice </h1>
 </div><br>

 <label class="text-center"> Name: </label>
 <input type="text" name="name" class="form-control text-center" placeholder="enter your lovely name"> <br>

 <label class="text-center"> Language: </label>
 <input type="text" name="language" class="form-control text-center" placeholder="enter which language you like most" > <br>

 <label class="text-center"> Phone: </label>
 <input type="text" name="phone" class="form-control text-center" placeholder="enter your phone number"> <br>

 <label class="text-center"> Email: </label>
 <input type="text" name="email" class="form-control text-center" placeholder="enter your email"> <br>


 <div class="form-group text-center">
    <label for="comment" >Why do you like this language</label>
    <textarea class="form-control" name="description" rows="3" id="comment"></textarea>
  </div>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>