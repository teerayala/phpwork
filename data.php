<?php

    session_start();
    include "config.php";
    $fullname = $_SESSION['fullname'];

    $sql = "SELECT * FROM account";
    $query = mysqli_query($conn,$sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
</head>
<body>
    <h2>
        <?php echo "Helle, ".$fullname; ?>
    </h2>
    <?php
        while($result = mysqli_fetch_assoc($query)){
            echo $result['id']."<br>";
            echo $result['username']."<br>";
            echo $result['password']."<br>";
            echo $result['department']."<br>";
            echo "<hr>";
        }
    ?>
</body>
</html>