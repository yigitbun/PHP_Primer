<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If Statement</title>
</head>
<body>
    <h1>If Statements</h1>
    <?php 
    
        // An if statement that will carry out an action based on the value of the variable.

        echo '<h2>If Else</h2>';

        $grade = 70;
        


        if($grade >= 50){
            echo '<h3 style="color: green">You have passed</h3>';
        }
        else {
            echo '<h3 style="color: red">You have failed</h3>';
        }

        $grade = 'A';
        
        // If-Else If-Else

        if($grade == 'A'){
            echo '<h2 style="color: green>YOU ARE A SUPERSTAR!</H2>';

        }
        elseif($grade == 'B'){
            echo '<h2 style="color: blue>YOU DID WELL!</h2>';
        }
        else{
            echo '<h2 style="color: red>YOU HAVE FAILED</h2>';
        }

        echo 'deneme'

    ?>
</body>
</html>