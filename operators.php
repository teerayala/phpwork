<?php

    //Arithmetic
    $a = 10;
    $b = 20;
    $c = "2";
    echo $a + $b ."<br>";
    echo $a + $c ."<br>";
    echo $a - $c ."<br>";
    echo $a * $b ."<br>";
    echo $b / $a ."<br>";
    echo $b % $a ."<br>";
    echo $b ** $c ."<br>";

    //Assignment
    $d = 30;
    echo "No. 1 : ".$d."<br>";
    $d += 30;
    //$d = $d + 30;
    echo "No. 2 : ".$d."<br>";
    $d -= 30;
    //$d = $d - 30;
    echo "No. 3 : ".$d."<br>";
    $d *= 30;
    //$d = $d * 30;
    echo "No. 4 : ".$d."<br>";
    $d /= 30;
    //$d = $d / 30;
    echo "No. 5 : ".$d."<br>";
    $d %= 30;
    //$d = $d % 30;
    echo "No. 6 : ".$d."<br>";

    //Comparison  True จริง / False เท็จ/ไม่จริง
    $e = 40;
    $f = 50;
    $g = "50";
    echo var_dump($e == $f)."<br>";
    echo var_dump($e != $f)."<br>";
    echo var_dump($e <> $f)."<br>";
    echo var_dump($f == $g)."<br>";
    echo var_dump($f === $g)."<br>";
    echo var_dump($f !== $g)."<br>";
    echo var_dump($e > $f)."<br>";
    echo var_dump($e < $f)."<br>";
    echo var_dump($e >= $f)."<br>";
    echo var_dump($e <= $f)."<br>";
    echo var_dump($e <=> $f)."<br>";

    //Increment Decrement
    $h = 10;
    $i = 20;
    echo $h++."<br>"; //10 /11
    echo ++$h."<br>"; //12
    echo $i--."<br>"; //10 /11
    echo --$i."<br>"; //12

    //Logical ตรรกะ
    $j = ($h > $i); //false
    $k = ($h < $i); //true
    echo var_dump($j and $k)."<br>"; //false
    echo var_dump($j or $k)."<br>"; //true
    echo var_dump($j && $k)."<br>"; //false
    echo var_dump($j || $k)."<br>"; //true
    echo var_dump($j and $k)."<br>"; //false
    echo var_dump(!$j)."<br>";

    $m = "Teera";
    $n = "Pattani";


    echo $m.$n."<br>";
    echo $m." ".$n."<br>";
    echo $m.=$n;

    //  http://192.168.10.24/workphp

    echo "<br><br><br><br><br><br><br><br><br><br>";

?>