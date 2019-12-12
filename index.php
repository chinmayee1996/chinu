test
<?php
require("connection.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Website</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
  	$(document).ready(function(){
  		$('.txt').keyup(function(){
  			answer= $(this).val()
  			console.log(answer)
  			$.ajax({
  				type: "POST",
  				data:{mydata:answer},
  				url: "searchAction.php", 
  				success:function(result){
  					$('.SearchData').html(result)
  				}
  			})
  		})
  	})
  </script>

</head>
<body>

 <?php

 require("nav.php");
 
 ?>

<div class="container">
	<input type="text" class="txt" >
</div>

 <div class="container SearchData" >
 	
 	<?php

 	$str = "select * from product";
 	$result = mysqli_query($conn , $str);
 	//print_r($result);
 	echo "<div class='row'>";
 	while($ans = mysqli_fetch_assoc($result))
 	{
 		$path=$ans['path'];
 		echo "<div class='col-lg-3 text-center'>";
 		echo "<img src=$path class='img-fluid'/>";
 		echo "<h2>";
 		echo $ans['price'];
 		echo "</h2>";
 		echo "<p>";
 		echo $ans['name'];

 		echo "</p>";
 		echo "</div>";

 	}
 	echo "</div>";

 	?>


 </div>


</body>
</html>