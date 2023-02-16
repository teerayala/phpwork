<?php

    $color = "EP";

    switch ($color) {
        case 'IT':
            $GLOBALS['dp1'] = "blue";
            break;
        case 'BC':
            $GLOBALS['dp2'] = "red";
            break;
        case 'AC':
            $GLOBALS['dp3'] = "yellow";
            break;
                
        
        default:
            $GLOBALS['dp4'] = "green";
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
                background-color: <?php echo $dp1; ?>;
                display: flex;'>
            </span>Information Technology
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid black">
            <span style='height: 50px;
                width: 50px;
                background-color: <?php echo $dp2; ?>;
                display: flex;'>
            </span>Business Computer
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid black">
            <span style='height: 50px;
                width: 50px;
                background-color: <?php echo $dp3; ?>;
                display: flex;'>
            </span>Accounting
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid black">
            <span style='height: 50px;
                width: 50px;
                background-color: <?php echo $dp4; ?>;
                display: flex;'>
            </span>Electrical Power
        </td>
    </tr>
</table>

</body>
</html>