<?php
	include('conn.php');
		if(isset($_POST['submit']))
		{
			$username=$_POST['userName'];
			$password=$_POST['password'];
			
			$mdpass=md5($password);
			$result=mysqli_query($conn,"SELECT*from usertable WHERE userName='$username' and password='$mdpass'") or die(mysqli_error($conn));
			
			$count=mysqli_num_rows($result);
			$row=mysqli_fetch_array($result);
			if($count>0)
			{
				
				session_start();
				$_SESSION['id']=$row['id'];
				header('location:index.php');  
			}
			else
			{
				header('location:loginpanel.php');  
			}
		}
?>