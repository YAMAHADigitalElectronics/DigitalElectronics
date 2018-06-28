<html>
<head>
<link href="../css/bootstrap.css" rel="stylesheet" />

</head>
<body>
<center><img src="../img/find_user.png"></center><center><section>
		<div class="container ">
	<div class="btn btn-info" >
   
<table >


<form action="changepassword.php" method="post">
<h1>Change your Password</h1>
		<tr><td>Old Password: </td><td><input type="password" name="op"></td></tr>
		<tr><td>New Password:</td><td><input type="password" name="np"></td></tr>
		<tr><td>New Password:</td><td><input type="password" name="np2"></td></tr>
		<tr><td><input type="submit"  class="btn btn-dark" value="Change" name="cp"></td><td>
		<input type="reset" class="btn btn-dark" value="Clear"></td></tr>
		
	</form>
	</table>
</div></div>
	</section></center>
	<?php
	include('conn.php');
		if(isset($_POST['cp']))
		{
			$op=$_POST['op'];
			$np=$_POST['np'];
			
			$mdpassnp=md5($np);
			$mdpassop=md5($op);
			$result=mysqli_query($conn,"SELECT*from usertable WHERE  password='$mdpassop'") or die(mysqli_error($conn));
			
			$count=mysqli_num_rows($result);
			$row=mysqli_fetch_array($result);
			if($count>0)
			{
				$a=$row['id'];
				$update="UPDATE usertable SET password='$mdpassnp' WHERE id='$a'";
    
     $insert=mysqli_query($conn,$update); echo"****hi**";
     if($insert)
     {
      echo"<script>alert('Pass has been changed sucessfuly')</script>";
       echo"<script>window.open('index.php','_self')</script>";
     }
				
		}
	}
?>
</body>
</html>