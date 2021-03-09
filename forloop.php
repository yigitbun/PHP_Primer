<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - FOR LOOP</title>
</head>
<body>
    <h1>For Loops</h1>
    

    <?php 
        // For Loops
        for($count = 0; $count < 10; $count++){
            echo '<p>Hello World</p>';
        }
        for($count = 0; $count < 10; $count++){
            echo "<p>The Count is: $count</p>";
            // If we use " then we don't need a concatination
        }

        
    ?>
</body>
</html>