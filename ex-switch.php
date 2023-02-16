<?php

    $color = "green";

    switch ($color) {
        case 'yellow':
            $GLOBALS['co1'] = "yellow";
            break;
        case 'green':
            $GLOBALS['co2'] = "green";
            break;
        
        default:
            $GLOBALS['co3'] = "red";
            break;  

    }


?>
<html lang="en">
<body>

<table>
    <tr>
        <td style="border: 1px solid black">
            <span style='height: 50px;
                width: 50px;
                background-color: <?php echo $co3; ?>;
                border-radius: 50%;
                display: flex;'>
            </span>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid black">
        <span style='height: 50px;
            width: 50px;
            background-color: <?php echo $co1; ?>;
            border-radius: 50%;
            display: flex;'>
            </span></td>
    </tr>
    <tr>
        <td style="border: 1px solid black">
        <span style='height: 50px;
            width: 50px;
            background-color: <?php echo $co2; ?>;
            border-radius: 50%;
            display: flex;'>
            </span></td>
    </tr>
</table>

</body>
</html>