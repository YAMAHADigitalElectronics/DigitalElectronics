<?php
	include('conn.php');
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$NICNo=$_POST['NICNo'];
		$phoneNo=$_POST['phoneNo'];
		$mail=$_POST['mailId'];
		$user=$_POST['userName'];
		$pass=$_POST['password'];
		$type=$_POST['cat'];		
		
		$mdpass=md5($pass);
		
		$querry="INSERT INTO usertable(fName,lName,NICNo,phoneNo,mailId,userName,password,type) VALUES ('$fname','$lname','$NICNo','$phoneNo','$mail','$user','$mdpass','$type')";
		$result=mysqli_query($conn,$querry)or die(mysqli_error($conn));
		if($result)
		{
			header('location:loginpanel.php');
		}
?>