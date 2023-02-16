<?php

    $std1 = array("Teera","Peera","Weera","Meera","Seera");
    
    sort($std1);
    foreach($std1 as $std){
        echo $std."<br>";
    }

    echo "<hr>";

    rsort($std1);
    foreach($std1 as $std){
        echo $std."<br>";
    }

    echo "<hr>";

    $std2 = array("Teera" => "3.33",
                    "Peera" => "2.22",
                        "Weera" => "1.11",
                            "Meera" => "0.00",
                                "Seera" => "4.00");
    asort($std2);
    foreach($std2 as $kstd => $vstd){
        echo $kstd." เกรด ".$vstd."<br>";
    }

    echo "<hr>";
    ksort($std2);
    foreach($std2 as $kstd => $vstd){
        echo $kstd." เกรด ".$vstd."<br>";
    }
    
    echo "<hr>";
    arsort($std2);
    foreach($std2 as $kstd => $vstd){
        echo $kstd." เกรด ".$vstd."<br>";
    }

    echo "<hr>";
    krsort($std2);
    foreach($std2 as $kstd => $vstd){
        echo $kstd." เกรด ".$vstd."<br>";
    }

?>