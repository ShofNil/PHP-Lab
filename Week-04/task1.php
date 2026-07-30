<?php
// Variables
$name = "Alice";
$age = 25;

// Function
function greet($name) {
    return "Hello, " . $name . "!";
}

// Output
echo greet($name) . "<br>";
echo "Age: " . $age . "<br>";

// Loop
echo "<h3>Numbers 1 to 5:</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
?>