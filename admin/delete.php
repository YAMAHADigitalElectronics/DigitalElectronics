 <?php
 include("conn.php");
 if(isset($_POST['bikedel']))
  {         
  	$modelNo=$_POST["bikedel"];
  $result="DELETE FROM bikes WHERE modelNo='$modelNo'";
  $del=mysqli_query($conn,$result); echo"******";
     if($del)
     {
      echo"<script>alert('Product has been insered sucessfuly')</script>";
       echo"<script>window.open('bike.php','_self')</script>";
     }
 }

  if(isset($_POST['partdel']))
  {         
  	$partNo=$_POST["partdel"];
  $result="DELETE FROM parts WHERE barcode='$partNo'";
  $del=mysqli_query($conn,$result); echo"******";
     if($del)
     {
      echo"<script>alert('Product has been insered sucessfuly')</script>";
       echo"<script>window.open('parts.php','_self')</script>";
     }
 }
?>