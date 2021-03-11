<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HP Primer - Date and Tme Manipulation</title>
</head>
<body>
    <h1>Date and Tme Manipulation</h1>
    <?php 
    $datenow = getdate();

        echo "Today's Date: " . $datenow['mon'] . '/' . $datenow['mday'] . '/' .  $datenow['year'] . '<br>';
        echo $datenow['mday'] . '<br>';
        echo $datenow['mon'] . '<br>';
        echo $datenow['year'] . '<br>';

        echo time() . '<br>';
        print date("m/d/y G:i:s<br>", time()) . '<br>';
        print "Today is ";
        print date("j of F Y, \a\\t g.i a<br>", time()) . '<br>';
        
    ?>
    
</body>
</html>