<?php
$name = "Ahmed"; 
$age = 20;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php page | <?php echo $name ?> </title>
</head>
<body>
    <div>
        <h1>hello <?php echo $name ?></h1>
        
    </div>
    <div>
    <?php include("score.php") ?>  <!-- include file   -->
    </div>
</body>
</html>