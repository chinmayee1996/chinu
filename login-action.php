<?php

require("connection.php");

print_r($_POST);


$exp3 = "/^([a-zA-Z0-9]([a-zA-Z0-9_\.]+)?[a-zA-Z0-9])@([a-zA-Z0-9]([a-zA-Z0-9\-]+)?[a-zA-Z0-9])\.([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/";

$exp4 = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#]).{4,12}$/";


$data3 = $_POST["x3"];
$data4 = $_POST["x4"];




	

	if(preg_match($exp3, $data3)==0){

		echo "invalid Email-Id";
	}
	
	 elseif(preg_match($exp4, $data4)==0){

		echo "invalid Password";
	}
	
	
	else{
		//echo "ok";
		//cheching that data exist in database or not
		$str = "select * from user1 where email = '$data3'";
		echo $str;

		$ans = mysqli_query($conn , $str);
		print_r($ans);

		//object accessor; 
		if($ans -> num_rows == 0){
			echo "invalid id does not exist";
		}  
		else{
			$result = mysqli_fetch_assoc($ans);
			echo "<pre>";
			print_r($result);
			echo "</pre>";

			$dbpass = $result["password"];
			echo $dbpass;

			if($dbpass != md5($data4)){
				echo "password doesnt match";
			}
			else{
				//echo "ok";
			$_SESSION["id"] = $result['id'];
			$_SESSION["name"] = $result['name'];
			$_SESSION["mobile"] = $result['mobile'];
			$_SESSION["email"] = $result ['email'];
			$_SESSION["status"] = $result['status'];
//used to redirect automatically- header()
			header("location:index.php");

			}
		}


	}
	 



?>






