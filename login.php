<!-- Authentication
create , read , update , delete , session , file uploading , cookies -->


<!DOCTYPE html>
<html>
<head>
	<title>Website</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	
 <?php

 require("nav.php");
 
 ?>

 <h2 class="text-center">Login page</h2>
 <div class="container">
 	
<form method="POST" action="login-action.php">
	
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name = "x3"
    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name = "x4" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


 </div>


</body>
</html>