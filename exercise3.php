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
    //creamos una función que recibe una array y un "character" que queda definido como string.
    //Devuelve verdadero o falso
    if (strlen($char) !== 1) { //strlen calcula el tamaño de $char
        //si no es idéntico a 1 (!==) devuelve falso,
        //validando que sea un único (1) caracter
        return false;
    }

    foreach ($words as $word) { //bucle foreach para recorrer cada palabra del array
        if (stripos($word, $char) === false) {
            //stripos busca $char dentro de cada $word de la array.
            //Si pongo únicamente dos = me devolvía siempre false si el $char
            //no era la primera letra de cada palabra. Con los tres = recorre la palabra entera
            //No entendí muy bien la diferencia entre equal (==) y identical (===)
            return false;
        }
    }

    return true; //devuelve true si todas las palabras contienen el $char
}

$words = ["hola", "php", "html"];
echo containChar($words, "h") ? "true\n" : "false\n";
echo containChar($words, "l") ? "true\n" : "false\n";
echo containChar($words, "r") ? "true\n" : "false\n";

// ex 4
$personal_info = array(
    "Name" => "Alex Beltran",
    "Age" => "26",
    "Email" => "alexbeltranrt@gmail.com",
    "Fav food" => "ramen"
);

echo "Name: " . $personal_info["Name"] . "\n";
echo "Age: " . $personal_info["Age"] . "\n";
echo "Email: " . $personal_info["Email"] . "\n";
echo "Fav food: " . $personal_info["Fav food"] . "\n";