 <?php
include("admin/conn.php");

  if(isset($_POST['insert_post']))
  {
    $modelNo=$_POST["new"];
    $name=$_POST['name'];
    $mail=$_POST['mailId'];
    $comment=$_POST['comment'];
    
echo$modelNo;
echo$name;echo$mail;echo$comment;

     $insert_product="INSERT INTO bikecomment(bikeId,commentId,userName,mailId,comment) values
     ('$modelNo','','$name','$mail','$comment')";
     
     $insert_pro=mysqli_query($conn,$insert_product); echo"******";
     if($insert_pro)
     {
      echo"<script>alert('Product has been insered sucessfuly')</script>";
       echo"<script>window.open('index.php','_self')</script>";
     }
  }
?>