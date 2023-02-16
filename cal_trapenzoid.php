<?php

    $a = $_POST['a'];
    $b = $_POST['b'];
    $h = $_POST['h'];

    
    $area = (($a + $b)/2) * $h;

    echo "ด้าน a เท่ากับ ".$a."<br>";
    echo "ด้าน b เท่ากับ ".$b."<br>";
    echo "ด้าน h เท่ากับ ".$h."<br>";
    echo "พื้นที่สี่เหลี่ยมคางหมู เท่ากับ ".$area." หน่วย";
    header("refresh: 5; url=trapenzoid.html");

?>