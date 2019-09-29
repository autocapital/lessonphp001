g<?php

$x = "Привет всем";
echo "$x";

echo '<br>';
echo "Меня зовут ";
echo "Дмитрий Николаевич!!!";

// Цикл DO

$numb = 15;

echo "<br>";

do {

    echo $numb;
} while ($numb>20);

//Оператор FOR
echo "<br>";
for ($i = 1; $i <15; $i++ ){

    echo $i . "<br>";

}
// Оператор Foreach

$arr = [1,2,3,4];

foreach ($arr as $newarr) {
    echo $newarr . "<br>";
}


?>