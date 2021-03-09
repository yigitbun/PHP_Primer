<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While/Do-While Loops</title>
</head>
<body>
<h1>While Loops</h1>


    <?php 
        $grade = 0;
        // INFINITE
        // while($grade < 10){
        //     echo '<p>I AM LESS THAN 10!</p>'
        // }
        // Pre-Condition Loop
    ?>
    <h1>While Loops</h1>
    <?php 
        
        while($grade < 10){
            echo '<p>I AM LESS THAN 10!</p>';
            $grade++;
        }
    ?>

    <h1>Do-While Loops</h1>

    <?php
        // Post-Condition Loop
        $grade = 0;
        do{
            echo '<p>I AM A DO/WHILE LOOP</p>';
            $grade++;
        }while($grade < 10);
        
        echo 'Exit';

    ?>

</body>
</html>