<?php

    //Indexed Array     0       1       2       3
    $student1 = array("Teera","Peera","Weera","Meera");
    foreach($student1 as $std){
        echo $std."<br>";
    }

    echo "<hr>";
    //Associative Array     key       value
        $student2 = array("Teera" => "3.33",
                        "Peera" => "2.22",
                        "Weera" => "1.11",
                        "Meera" => "0.00");    

    foreach($student2 as $kstd => $vstd){
        echo $kstd." เกรด ".$vstd."<br>";
    }
                    
    echo "<hr>";
    //Multi Dimension Array
    /*
    -------------------------
    |  id  |  NAME  |  GPA  |
    -------------------------
    | 101 | Teera  |  3.33 |
    -------------------------
    | 102 | Seera  |  2.22 |
    -------------------------
    | 103 | Peera  |  1.11 |
    -------------------------
    | 104 | Weera  |  0.00 |
    -------------------------
    */
    // row = 5 (0/1/2/3/4)
    // col = 3 (0/1/2)
    $student3 = array(
        array("101","Teera","3.33"),
        array("102","Seera","2.22"),
        array("103","Peera","1.11"),
        array("104","Weera","0.00"),
        array("105"," "," ")
    );
    // echo $student3[2][1]."<br>";
    // echo $student3[3][2]."<br>";
    // echo $student3[4][0]."<br>";

    for($row = 0;$row < 4;$row++){
        echo "ข้อมูลนักศึกษา";
        echo "<ul>";
        for($col = 0; $col < 3;$col++){
            echo "<li>".$student3[$row][$col]."</li>";
        }
        echo "</ul>";
    }

?>