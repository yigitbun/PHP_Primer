    <?php 
        $title = "If Statements";
        include 'includes/header.php';
    ?>
    <h1>If Statements</h1>
    <?php 
    
        // An if statement that will carry out an action based on the value of the variable.

        echo 'deneme';
        echo '<h2>If Else</h2>';

        $grade = 30;
        

        if($grade >= 50){
            echo '<h3 style="color: green">You have passed</h3>';
        }
        else {
            echo '<h3 style="color: red">You have failed</h3>';
        }

        $grade = 'A';
        
        // If-Else If-Else

        if($grade == 'A'){
            echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';

        }
        elseif($grade == 'B'){
            echo '<h2 style="color: blue">YOU DID WELL!</h2>';
        }
        else{
            echo '<h2 style="color: red">YOU HAVE FAILED</h2>';
        }


    ?>
<?php require 'includes/footer.php' ?>