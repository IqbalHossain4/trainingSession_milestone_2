<!-- Syntax
1:Echo must if you show the result on server after that use semi colon;

2:close the tag <?php ?> and  also  -->


<!DOCTYPE html>
<html>
<head>
<title>Introduction</title>
</head>
<body>

<h1>My First Heading</h1>
<?php
echo "welcome to PhP";
 ?>

<!-- syntax -->
 <h1>
    <?php echo "Hello PhP";
     echo " Php is Running";

    ?>
 </h1>
</body>
</html>




<!-- variable -->

<!-- 1:Initially Start $ sign and then a name than = sign and then pass any value

2: if you are want multiple variable store in one line then you should use "" not '' qutetion,
ex:echo "hello $name I am ean this month $amount"

3: concatination: if you are concatinate any variable you should you . between string or variable
ex: echo 'hello'.$name, 'I am ean this month'.$amount



-->

<?php
$user="Ayan ";
$price=150;
echo $user;echo $price;
// multiple variable show sys
$name="Iqbal";
$amount=150;

echo "hello $name I am ean this month $amount";
echo "<br>";
// concatinate

echo 'hello'.$name, 'I am ean this month'.$amount;


// use oparator

$first_price=10;
$second_price=50;
$total_price=$first_price + $second_price;
echo " ".$total_price;

?>


<!-- constant variable -->

<!-- 
1: it's behave like javascript const variable it's can't change or can't reassign.

2: if you want assign the constant variable you need to assign first define() function and than between the constantt name or value,

3:one thing it's better when we use constant name are  all capitale letter you can assign small letter but capital is good practise

ex: define("NAME","Ayan")

4:ai variable k string ar sathe use korte hole concatinate kore use korte hobe.

5 assign another sys use constant function

ex: define("NAME","Khan");
echo constant("NAME")
 -->
<?php 

define("NAME","Ayan");
echo "<br>";
echo NAME;
echo "<br>";

echo "Ayan Ahmed Is My Name ".NAME .'<br>';

   //  Check typeof in php--- use var_dump
   $age =21;
   var_dump($age);

   print "<br>";

   $flotnumber=30.5;
   var_dump($flotnumber);

   echo"<br>";
//array
   $people=array('Ayan','Hasan','Robin');
   var_dump($people);
   echo "<br>";

//object

class Phone{
   var $model;
   function phoneModel($number){
      global $model;
      $model=$number;
      echo "This is $model <br>";
   }
};

$apple=new Phone;
$apple->phoneModel("iphone 16");

$samsung=new Phone;
$samsung->phoneModel("s21 ultra");

$nokia=new Phone;
$nokia->phoneModel("C1");

//check length use strlen

echo strlen("Hello World"),"<br>";

//how many world in a sentence check use str_word_count

echo str_word_count("Hello World"),"<br>";


//reverse in word use strrev

echo strrev("Hello World"),"<br>";


//search any word and find the position use strpos

echo strpos("Hello World","World"),"<br>";

//replace any word use str_replace

echo str_replace("World","Ayan","Hello World"),"<br>";


//php math oparation

echo (pi()),"<br>";
echo (min(0,10,20,30,40,50)),"<br>";
echo (max(0,10,20,30,40,50)),"<br>";

//positive number use abs
echo (abs(-10)),"<br>";

//squar root number use sqrt
echo (sqrt(16)),"<br>";

//all result in porno number use round
echo (round(10.4)),"<br>";

//generate any random number use rand
echo (rand()),"<br>";
//jodi fixed area dite chai
echo (rand(10,50)),"<br>";

?>


