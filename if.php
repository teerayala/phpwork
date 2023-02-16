<?php

    $num = 10;
    if($num < 20){  
        echo "จริง";
    }

    echo "<br>";

    $gender = "M";
    if($gender == 'M'){
        echo "ผู้ชาย";
    }

    echo "<br>";

    $a = 10;
    $b = 20;
    if($b <=> $a){
        echo '$b มากกกว่า $a';
    }

    echo "<br>";

    $x = 10;
    $y = 20;
    if($y === $x){
       echo '$y มากกว่า $x'; 
    }else{
        echo '$y น้อยกว่า $x';
    }

    echo "<br>";

    $z = 12225917;

    if($z%2 != 1){
        echo "เลขคู่";
    }else{
        echo "เลขคี่";
    }

    $led = "red";  //yellow    //green
    if($led){
        echo "ไปได้";
    }elseif($led){
        echo "ชะลอ";
    }else{
        echo "หยุด";
    }

    echo "<br>";

    $year = 2028;
    //Leap Year Feb(29) ปีอธิกสุรทิน /100 /400 /4
    if($year%4 == 0){ //false
        echo "ปีอธิกสุรทิน";
    }elseif($year%400 == 0){
        echo "ปีอธิกสุรทิน";
    }elseif($year%100 != 0){
        echo "ไม่ใช่ปีอธิกสุรทิน";
    }



?>