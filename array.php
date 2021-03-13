    <?php 
        $title = "Array";
        include 'includes/header.php';
    ?>
    <h1>Arrays</h1>
    <?php 
        // a number
        $num = 3;

        // an array
        // Only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10,45,67,43543,543,435455,5,667,67,78,67,23);
        
        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array Number size: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>
    
    <?php require 'includes/footer.php' ?>