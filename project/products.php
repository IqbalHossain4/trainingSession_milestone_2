<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce platform</title>
<style>
    .div2{
    width:400px;
    height:350px;
    float:right;
    }

</style>

</head>
<body style="max-width:1220px; margin:0 auto;">
    
<div class="div1">
<?php
include 'db.php';
$sql="SELECT * from products";
$query=mysqli_query($conn,$sql);

while($info=mysqli_fetch_array($query)){
?>

<div class="div2">
<p><?php echo $info['product_name']; ?></p>
<div style="width:250px; height:250px; margin-top:10px;">
<img src="image/<?php echo $info['product_img']; ?>" style="width:100%; height:100%;" alt="">
</div>
</div>


<?php
}


?>
</div>

</body>
</html>