<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
    <!-- Basic HTML -->
    <h1>Hello Html</h1>

    <?php 
        /*Printing to HTML using echo */
        echo ' Hello PHP!';
        echo '<br/>';

        // You can echo HTML tags
        echo ' Second Line';
        echo '<br/>';
        
    ?>

    <?php 
        // declare wariable
        $name = 'Bünyamin Yigit';
        $age = 31;

        // echo variable
        echo $name;
        echo '<h1>My Name is: '.$name.'</h1>';
        echo '<h1>My Age is: '.$age.'</h1>';

        // Echo using double quotes and interpolation
        echo "<h1>My Name is: $name </h1>"
    ?>
</body>
</html>