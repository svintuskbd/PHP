<?php

function insertBr()
{
    echo '<br>' . '<br>';
}

//1. Объявите переменные типов: Число,
// число с плавающей точкой, строка,
// булево значение, нул, массив.
echo '<b>' . 'Задание 1' . '</b>';
insertBr();


$num = 7;
$float = 7.7;
$str = 'some string';
$bool = true;
$null = NULL;
$arr = [];

$allVar = compact("num", "float", "str", "bool", "null", "arr");

foreach ($allVar as $key => $value) {
    echo 'Переменная ' . $key . ' = ' . $value . ' её тип => ' . gettype($value) . '<br>';
}


//2. Создайте переменную $name,
// присвойте ей строковое значение содержащее ваше имя.
// Создайте переменную $age,
// и присвойте ей числовое значение содержащее ваш возраст.
insertBr();
echo '<b>' . 'Задание 2' . '</b>';
insertBr();


$name = 'lelik';
$age = 28;
echo $name .'<br>'. $age;


//3. Выведите с помощью echo (print, var_dump)
// фразу “Меня зовут …..”,
// выведите фразу “Мой возраст … лет”.
// Измените код таким образом чтоб каждая фраза была с новой строки.
insertBr();
echo '<b>' . 'Задание 3' . '</b>';
insertBr();


echo "Меня зовут $name" . '<br>' . "Мой возраст $age лет";


//4. Удалите переменную $age
insertBr();
echo '<b>' . 'Задание 4' . '</b>';
insertBr();


unset($age);

if (!$age) {
    echo 'Переменная age не существует';
}


//5. Создайте константу и присвойте ей
// любое значение, выведите ее на экран.
insertBr();
echo '<b>' . 'Задание 5' . '</b>';
insertBr();


define("CONSTANT", "Константа");
echo CONSTANT;


//6. Создайте переменную $age
// и присвойте ей произвольное число,
// напишите конструкцию if которая выводит фразу
// “Вам еще работать и работать” если значение
// переменной $age попадает в диапазон от 18 до 59.
// Расширьте конструкцию if выводя фразу “Вам пора на пенсию”,
// если значение переменной больше 59.
// Далее расширьте конструкцию и выводите фразу
// “Вам еще рано работать” если значение переменной
// $age попадает в диапазон от 1 до 17 включительно.
// И наконец дополните конструкцию таким образом
// чтоб на экран вывелась фраза “Неизвестный возраст”
// если значение переменной $age
// не попадает ни в один диапазон.
insertBr();
echo '<b>' . 'Задание 6' . '</b>';
insertBr();


$age = rand(1, 100);
echo $age . '<br>';

if ($age >= 18 && $age <= 59) {
    echo 'Вам еще работать и работать';
} elseif ($age >= 59) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 1 && $age <= 17) {
    echo 'Вам еще рано работать';
} else {
    echo 'Неизвестный возраст';
}


//7. Создайте переменную $day,
// присвойте ей любое числовое значение.
// С помощью конструкции switch выведите фразу
// “Это рабочий день”, если переменной $day
// попадает в диапазон чисел от 1 до 5 включительно.
// Выведите фразу “Это выходной день”,
// если значение $day равно числам 6 или 7,
// и на конец выведите фразу “Неизвестный день”
// если значение $day не попадает в диапазон
// чисел от 1 до 7 включительно.
insertBr();
echo '<b>' . 'Задание 7' . '</b>';
insertBr();


$day = rand(1, 10);
echo $day . '<br>';

switch ($day) {
    case 1:
        echo 'Это рабочий день';
        break;
    case 2:
        echo 'Это рабочий день';
        break;
    case 3:
        echo 'Это рабочий день';
        break;
    case 4:
        echo 'Это рабочий день';
        break;
    case 5:
        echo 'Это рабочий день';
        break;
    case 6:
        echo 'Это выходной день';
        break;
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
        break;
}


//8. Создайте массив $bmw с ячейками
// “model”, “speed”, “doors”, “year”.
// Заполните ячейки значениями “X5”, 120, 5, 2006.
//Создайте массивы $toyota и $opel
// аналогичные массиву $bmw и
// заполните их - $toyota “Carina”, 130, 4, 2007
//$opel “Corsa”, 140, 5, 2007
//Выведите значение всех трех массивов в виде:
//name - model - speed - doors - year
insertBr();
echo '<b>' . 'Задание 8' . '</b>';
insertBr();


$cars = [
    "bmv" => [
        "model" => "X5",
        "speed" => 120,
        "doors" => 5,
        "year" => 2006
    ],
    "toyota" => [
        "model" => "Carina",
        "speed" => 130,
        "doors" => 4,
        "year" => 2007
    ],
    "opel" => [
        "model" => "Corsa",
        "speed" => 140,
        "doors" => 5,
        "year" => 2007
    ]
];

foreach ($cars as $brands => $massiv) {
    echo 'name ' . '<b>' . strtoupper($brands) . '</b>';
    insertBr();
    foreach ($massiv as $innerKey => $value) {
        echo $innerKey . ': ' . $value . ' ' ;
        insertBr();
    }
}
//9. Используя цикл for выведите все нечетные числа от 1 до 50.
insertBr();
echo '<b>' . 'Задание 9' . '</b>';
insertBr();


for ($i = 0; $i <= 50; $i++) {
    if ($i % 2 != 0) {
        echo $i . ' ';
    }
}


//10. Используя цикл for заполните массив от 0 до 100
insertBr();
echo '<b>' . 'Задание 10' . '</b>';
insertBr();


$arrNumbers = [];

for ($i = 0; $i <= 100; $i++) {
    $arrNumbers[] = $i;
}
print_r($arrNumbers);
