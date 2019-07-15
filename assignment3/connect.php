<?php
$conn=mysqli_connect('localhost','root','','instagram1');
if(mysqli_connect_errno()) 
{
 echo"error";    
} 
else
 {
   echo "connected";
}

$username= filter_input(INPUT_POST, "username");
$password= filter_input(INPUT_POST, "password");
if(!empty($username))
{
	if (!empty($password))
	{
		$username="root";
		$password= "aditya123";
		//create connection	


	
			$query="INSERT INTO insta(username,password)
			values('$username','$password')";
			$data=mysqli_query($conn,$query);

			if ($conn -> query())
			{
				echo "New record is inserted sucessfully";
				# code..
			}
		        else
			{
				echo "error" ;
                             $conn->close();
			}
		
		
		# code...
	}
	else
	{
		echo "password should not be empty";
		die();
	}
            }
       else
            {
	echo "username should be empty";
	die();

             }

?>
