<?php
    echo "<h1> Percabangan </h1>";
    echo "<h3> If Statement </h3>";
    $t = date("H");
    if ($t < "20") {
        echo "Have a good day!";
    }

    echo "<h3> If ... else Statement </h3>";
    $t = date("H");
    if ($t > "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }

    echo "<h3> If ... elseif ... else Statement </h3>";
    $t = date("H");
    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    
    echo "<h3> Switch statement </h3>";
    $favcolor = "red";
    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
    
    
    echo "<h1> Perulangan </h1>";
    echo "<h3> While </h3>";
    $x = 1;
    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }

    echo "<h3> Do...While </h3>";
    $x = 1;
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);

    echo "<h3> For </h3>";
    for($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }

    echo "<h3> Foreach </h3>";
    $colors = array("red", "green", "blue", "yellow");
    foreach($colors as $value) {
        echo $value . "<br>";
    }

    echo "<h1> Array </h1>";
    echo "<h3> Mendeklarasikan dan mengakses array </h3>";
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . ", and " . $cars[2] . ".";

    echo "<h3> Mengetahui panjang array </h3>";
    $cars = array("Volvo", "BMW", "Toyota");
    echo "Jumlah elemen array adalah: " . count($cars);

    echo "<h3> Mengakses array melalui perulangan (loop) </h3>";
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);
    for($x = 0; $x < $arrlength; $x++) {
        echo "The car is: " . $cars[$x] . "<br>";
    }

    echo "<h3> Mendeklarasikan Associative array dan mengaksesnya </h3>";
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "Peter is " . $age['Peter'] 
        . " years old, and Ben is " . $age['Ben'] . " years old.";

    echo "<h3> Mengakses semua nilai associative array dengan perulangan </h3>";
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value . "<br>";
    }

    echo "<h3> Array Multidimensi </h3>";
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    for($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for($col = 0; $col < 3; $col++) {
            echo "<li>" .  $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }
?>