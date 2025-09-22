<?php

$num1 = 12;
$num2 = 24;
$num3 = 31;
$num4 = 8;
$num5 = 67;

$array = [$num1, $num2, $num3, $num4, $num5];
echo $array [0] . "\n";
echo $array [1] . "\n";
echo $array [2] . "\n";
echo $array [3] . "\n";
echo $array [4] . "\n";

print_r($array);

// dos formas de mostrar una array por pantalla
// ex 2

$colors = array("red", "blue", "green", "purple", "grey", "yellow");
echo "Size of the array: " . count($colors) . "\n";
unset($colors[3]);
echo "New size of the array: " . count($colors) . "\n";
print_r($colors);

// ex 3
function containChar(array $words, string $char): bool {
    if (strlen($char) !== 1) {
        return false;
    }

    foreach ($words as $word) {
        if (stripos($word, $char) === false) {
            return false;
        }
    }

    return true;
}

$words = ["hola", "php", "html"];
echo containChar($words, "h") ? "true\n" : "false\n";
echo containChar($words, "l") ? "true\n" : "false\n";
echo containChar($words, "r") ? "true\n" : "false\n";