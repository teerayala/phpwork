<?php

    $a = $_POST['a'];
    $b = $_POST['b'];
    $h = $_POST['h'];


    $area = (($a + $b)/2) * $h;

    echo "พื้นที่สี่เหลี่ยมคางหมู เท่ากับ ".$area." หน่วย";
    header("refresh: 3; url=trapenzoid.html");

?>