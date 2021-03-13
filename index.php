    <?php 
        $title = "Index";
        include 'includes/header.php';
        
    ?>
    <!-- Basic HTML -->
    <h1>Hello Html</h1>
    <br>

    <?php 
        /*Printing to HTML using echo */
        echo ' Hello PHP!';
        echo '<br/>';

        // You can echo HTML tags
        echo ' Second Line';
        echo '<br/>';
        
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
    <button type="button" class="btn btn-dark">Click Me!</button>
    <?php require 'includes/footer.php' ?>