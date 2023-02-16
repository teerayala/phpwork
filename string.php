<?php

    $name = "I Love You";
    $myname = "Teera Binkasem";

    echo strlen($name);
    echo "<br>" ;
    echo str_word_count($name);
    echo "<br>" ;
    echo strrev($myname);
    echo "<br>" ;
    echo strpos($name, "Love");
    echo "<br>" ;
    echo "คำเก่า : ".$name;
    $name = str_replace("Love","Hate",$name);
    echo "<br>" ;
    echo "คำใหม่ : ".$name;
    // $name = "I LOVE YOU"; 
    echo "<br>" ;
    echo strtoupper($myname);
    echo "<br>" ;
    echo strtolower($myname);
?>