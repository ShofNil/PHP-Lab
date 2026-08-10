<?php
$text = "   PHP is Awesome Programming Language   ";

echo "Original text : {$text}";
echo "<br>";
echo "Trim : " . trim($text);
echo "<br>";
echo "Length : ".strlen($text);
echo "<br>";
echo "Trimmed Length : " . strlen(trim($text));
echo "<br>";
echo "Total Word : ".str_word_count($text);
echo "<br>";
echo "Uppercase : ".strtoupper($text);
echo "<br>";
echo "Lowercase : ".strtolower($text);
echo "<br>";
echo "Replace : " . str_replace("Awesome", "Powerful", $text);
echo "<br>";
echo "Reverse : " . strrev($text);
echo "<br>";


echo " check if the text contains 'Programming' : ";
if (str_contains($text, "Programming")) {
    echo "Yes, the text contains 'Programming'";
} else {
    echo "No, the text does not contain 'Programming' ";
} 

echo "<br>";
echo "Substring : " . substr($text, 0, 10);
echo "<br>";



$text1 = "Apple,Banana,Mango";
$fruits = explode(",", $text1);

print_r($fruits);
echo "<br>";


$text2 = ["Red", "Green", "Blue"]; // array
$colors = implode(",", $text2);
echo "11. Colors: " . $colors . "<br>";
?>
