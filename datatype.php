<?php
    //String
    $name = "Teera";
    $province = 'Pattani';
    $code = "<span style='color: red;'>Teera</span>";
    $score = "123";

    echo $name;
    echo "<br>";
    echo $province;
    echo "<br>";
    echo "My Name is $name";
    echo "<br>";
    echo "ฉันอาศัยอยู่จังหวัด $province";
    echo "<br>";
    echo $code;

    echo "<hr color='red'>";
    //Integer
    $number1 = 123;
    $number2 = -116;
    $number3 = +101;

    //Base 10 => 0 1 2 3 4 5 6 7 8 9
    //Base 16 => 0 1 2 3 4 5 6 7 8 9 A B C D E F
    //Base 8 => 0 1 2 3 4 5 6 7
    //Base 2 => 0 1

    //1x2^2 + 1x2^1 + 1x2^0
    //4 + 2 + 1
    //7 

    $cpu = 0x111;
    echo $cpu;
    echo "<br>";
    $ram = 0111;
    echo $ram;
    echo "<br>";
    $harddisk = 0b111;
    echo $harddisk;
    echo "<br>";

    echo "<hr color='gold'>";

    //Float
    $grade = 3.99;
    echo $grade;
    echo "<br>";
    $age = 3e5; // 3 x 10^5
    echo $age;
    echo "<br>";
    $width = 3e-5; // 3 x 10^-5
    echo $width;
    echo "<br>";

    echo "<hr color='pink'>";

    //Boolean
    $male = true;
    $female = false;

    echo $male;
    echo "<br>";
    echo var_dump($female);

    echo "<hr color='navy'>";

    $test = null;

?>