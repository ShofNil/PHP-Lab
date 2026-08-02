<?php
$student_name = "Shofnil";
$student_id = "24-56474-1";
$choice = 1;
$quantity = 8;

switch ($choice) {
    case 1:
        $food_item = "Burger";
        $price = 5;
        break;
    case 2:
        $food_item = "Pizza";
        $price = 8;
        break;
    case 3:
        $food_item = "Sandwich";
        $price = 4;
        break;
    case 4:
        $food_item = "Coffee";
        $price = 3;
        break;
    default:
        $food_item = "Invalid choice";
        $price = 0;
}

$subtotal = $price * $quantity;

if ($subtotal >= 30) {
    $discountPercent = 20;
} elseif ($subtotal >= 20) {
    $discountPercent = 10;
} else {
    $discountPercent = 0;
}

$discountAmount = ($subtotal * $discountPercent) / 100;
$finalBill = $subtotal - $discountAmount;


echo " UNIVERSITY CAFETERIA <br> <br>";
echo "Student Name : {$student_name}";
echo "<br>Student ID : {$student_id}";
echo "<br>Food Item : {$food_item}";
echo "<br>Price : {$price}";
echo "<br>Quantity : {$quantity}";


echo "<br>Ordered Item <br>";
for($i=1;$i<=$quantity;$i++){
    echo "{$i}. {$food_item} <br>";
}
echo "<br>Subtotal : {$subtotal}";
echo "<br>Discount : {$discountPercent}%";
echo "<br>Discount Amount : {$discountAmount}";
echo "<br>Final Bill : {$finalBill}";
echo "<br>";
echo "Thank you for visiting!";
?>