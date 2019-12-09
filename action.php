<?php 
	$name=$_POST['name'];//takes value from form
	$email=$_POST['email'];
	$feedback=$_POST['feedback'];

	echo $name."<br>".$email."<br>".$feedback."<br>";//prints the details again

	$con=mysqli_connect("localhost","root","root","sample");
	if($con){
		echo "Connected Successfully.<br>";
		
		$sql="INSERT INTO user_details VALUES('$name','$email','$feedback')";

		$data=mysqli_query($con,$sql);
		echo "<br>".$data;
	}
		else{
		die("connection insuccessful ,dying.");
	}	
?>
