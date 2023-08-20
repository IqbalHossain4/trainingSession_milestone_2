<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inter Product</title>

    <style media="screen">
.div1{
    border:1px solid black;
    padding:20px;
}

label{
    font-size:18px;
    font-weight:600;
}

#product_name{
    width:100%;
    padding:10px 5px;
}

#product_details{
    width:100%;
}

#product_price{
    width:100%;
    padding:10px 5px;
}

#submitBtn{
    padding:8px 15px;
    background:black;
    color:white;
    border-radius:5px;
}

    </style>
</head>
<body style="max-width:1220px; margin:0 auto;">
    
<div class="div1">
<form action="insert.php" method="post" enctype="multipart/form-data">
<label for="">Name</label> <br>
<input id="product_name" type="text" name="product_name" placeholder="Name" required>
<br> <br>
<label for="">Price</label> <br>
<input id="product_price" type="text" name="product_price" placeholder="Price" required>

<br> <br>
<label for="">Details</label> <br>
<textarea id="product_details" name="product_details"   rows="10" placeholder="Details" required></textarea>
<br> <br>

<label for="">Image</label> <br>
<input type="file" name="product_image" id="product_image" required >
<br> <br>

<input id="submitBtn" type="submit" name="submitBtn" value="Submit"
>
</form>
<?php
include 'db.php';

if(isset($_POST['submitBtn'])){
$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$product_detials=$_POST['product_details'];
$image_name=$_FILES['product_image']['name'];
$image_size=$_FILES['product_image']['size'];
$image_type=$_FILES['product_image']['type'];
$image_tem_loc=$_FILES['product_image']['tmp_name'];
$image_stre='image/'.$image_name;
move_uploaded_file($image_tem_loc,$image_stre);

$sql="INSERT INTO products(product_name,product_price,product_details,product_img) 
values('$product_name','$product_price','$product_detials','$image_name')";


// funtion
$query=mysqli_query($conn,$sql);


}

?>

</div>
</body>
</html>