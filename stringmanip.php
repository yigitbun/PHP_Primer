    <?php 
        $title = "String Manipulations";
        include 'includes/header.php';
    ?>
    <h1>PHP String Manipulation</h1>
    <?php 
    // Concatination
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = 'ben yigit';

        echo $phrase1 .  ", named Tiffany, " . $phrase2;
        echo '<br>';
        echo '<Hr>';


    // String Transformation
        echo 'Uppercase first letter: '. ucfirst($name). '<br>';
        echo 'Uppercase first letter of each word: '. ucwords($name). '<br>';
        echo 'Uppercase: '. strtoupper($name). '<br>';
        echo 'Uppercase: '. strtolower("THIS WAS ALL UPPER"). '<br>';
        echo '<Hr>';
        echo 'REPEAT STRING: '. str_repeat($name. ' ', 5). '<br>';
        echo 'REPEAT STRING: '. strtoupper(str_repeat($name. ' ', 5)). '<br>';

        echo 'Get  substring: '. substr($name. ' ', 1, 3). '<br>';
        echo 'Length  of a string: '. strlen($name). '<br>';

        echo 'Without trim: ' . "A" . " B C D " . "E" . '<br>';
        echo 'Trim both side: ' . "A" . " B C D " . "E" . '<br>';



        // Get position of a letter
        echo 'Get position of string: ' . strpos($name, 'i') . '<br>';
        echo 'Find character "y": ' . strchr($name, 'y'). '<br>';
        echo 'Find character "e": ' . strchr($name, 'e'). '<br>';
        echo 'Find character "t": ' . strchr($name, 't'). '<br>';
        echo 'Find character "d": ' . strchr($name, 'd'). '<br>';


    ?>
    <?php require 'includes/footer.php' ?>