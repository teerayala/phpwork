<?php

    $color = "yellow";

    // switch ($color) {
    //     case 'yellow':
    //         echo "กรุณาชะลอความเร็ว";
    //         break;
    //     case 'green':
    //         echo "ขับไปได้";
    //         break;
        
    //     default:
    //         echo "กรุณาหยุด";
    //         break;
    // }


?>
<html lang="en">
<body>

    <?php
        switch ($color) {
            case 'red':
                echo "<span style='height: 50px;
                width: 50px;
                background-color: #F9050C;
                border-radius: 50%;
                display: flex;'>
                </span>";
                break;
    ?>
    
    <?php
        case 'yellow':
            echo "<span style='height: 25px;
            width: 25px;
            background-color: #EEF905;
            border-radius: 50%;
            display: flex;'>
            </span>";
            break;
    ?>
    
    <?php
        default:
            echo "<span style='height: 25px;
            width: 25px;
            background-color: #10F905;
            border-radius: 50%;
            display: flex;'>
            </span>";
            break;
        }
    ?>
    
</body>
</html>