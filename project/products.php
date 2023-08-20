<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce platform</title>
</head>
<body>
    
<div class="div1">
<?php
include 'db.php';
$sql="SELECT * from products";
$query=mysqli_query($conn,$sql);

while($info=mysqli_fetch_array($query)){
?>

<div class="div2">
<p><?php echo $info['product_name']; ?></p>

</div>


<?php
}


?>
</div>

</body>
</html>