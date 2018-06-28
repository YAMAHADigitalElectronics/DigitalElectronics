                <?php
include("conn.php");
  if(isset($_POST['save']))
    
  {
    $modelNo=$_POST["1"];
    $modelName=$_POST["2"];
    $category=$_POST["3"];
    $colour=$_POST["4"];
    $price=$_POST["5"];
    $war=$_POST["6"];
   // $img=$_POST["img"];
    
    
    $file = rand(1000,100000)."-".$_FILES['img']['name'];
    $file_loc = $_FILES['img']['tmp_name'];
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);


    //move_uploaded_file($product_image1_tmp,"product_imgLocation/$product_image1");
    $folder="product_imgLocation/";
    move_uploaded_file($file_loc,$folder.$final_file);
$update="UPDATE bikes SET modelNo='$modelNo',modelName='$modelName',category='$category',colour='$colour',warranty='$war',price='$price',imgLocation='$final_file' WHERE modelNo='$modelNo'";
    
     $insert=mysqli_query($conn,$update); echo"******";
     if($insert)
     {
      echo"<script>alert('Product has been insered sucessfuly')</script>";
       echo"<script>window.open('bike.php','_self')</script>";
     }
  }
if(isset($_POST['partsave']))
    
  {
    $partNo=$_POST["1"];
    $pageRefNo=$_POST["2"];
    $barcode=$_POST["3"];
    $pName=$_POST["4"];
    $cat=$_POST["5"];
    $subcat=$_POST["6"];    
$update="UPDATE parts SET partNo='$partNo',pageRefNo='$pageRefNo',barcode='$barcode',partName='$pName',category='$cat',subCategory='$subcat' WHERE barcode='$barcode'";
    
     $insert=mysqli_query($conn,$update); echo"****hi**";
     if($insert)
     {
      echo"<script>alert('Product has been insered sucessfuly')</script>";
       echo"<script>window.open('parts.php','_self')</script>";
     }
  }

?>                     