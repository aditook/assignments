<?php
$username= filter_input(INPUT_POST, "username");
$password= filter_input(INPUT_POST, "password");
if(!empty($username)){
	if (!empty($password)) {
		$dbusername="root";
		$password= "aditya123";
		//create connection	
$conn=mysqli_connect('localhost','root','','blog');
if(mysqli_connect_errno()) 
{
 echo"error";    
} 
else
 {
   echo "connected";
}

	
			$query="INSERT INTO instagram1(username,password)
			values('$username','$password')";
			$data=mysqli_query($conn,$query);

			if ($conn -> query()) {
				echo "New record is inserted sucessfully";
				# code..
			}else{
				echo "error" ;

			}
			$conn->close();
		
		# code...
	}
	else
	{
		echo "password should not be empty";
		die();
	}
}
else{
	echo "username should be empty";
	die();

}

?>