<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HP Primer - Simple Functions</title>
</head>
<body>
    <h1>Simple Functions</h1>
    <?php 
        // Define a Function

        function writeMessage(){
            echo "You are realy.......";
        }

        // calling the function

    writeMessage();
    echo '<hr/>';

    // Func with parameters

    function addNumbers($num1, $num2){
        $sum = $num1 + $num2;
        $num2 = $num2 + 1;
        echo "The sum of $num1 and $num2 is: $sum <br>";
    }

    // Pass by Reference - use ampersand in parameter
    function changeNum(&$num){
        $num = $num + 10;
        // $num+=10
    }


    function returnProduct($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
    }


    $num = 500;
    addNumbers(3,6);
    addNumbers(10,$num);
    addNumbers('10',"50");

    changeNum($num);
    echo $num . '<br>';

    $return_value = returnProduct(10,200);
    echo $return_value . '<br>'


    

    ?>
    
</body>
</html>