<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Functions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
    
    //functions are used for calcuating and iterating variables/values

    // function teach_Functions($name, $age) {
    //     // echo "This is a function. ";

    //     // echo "Functions have many uses. ";

    //     // echo "Function Function Function! ";

    //     echo "My name is $name. ";

    //     echo "I am $age years old";
    //     lineBreak();
    // }
     
    // function lineBreak() {
    //     echo "</br>";
    // }

    // // invoke the argument values for $name and $age
    // teach_Functions('John paul Lewis', 22);


    // create and age convert to days function
    // function age_Convert($age) {
    //     return $age*365.25;
    // }

    // $days = age_Convert(22);

    // echo $days;

    // function add_Numbers($num1, $num2) {
    //     $working = $num1 + $num2;
    //     return $working;
    // }

    // function for determining the poweer of a no.
    // 2 astrix's is used for power to no.
    // function power_Numbers($num, $exponent) {
    //     $working = $num**$exponent;
    //     return $working;
    // }

    // echo addNumbers(5, 8);

    // echo powerNumbers(addNumbers(2, 1),6);

    // echo powerNumbers(2);
    

    // function numbers(int $num, $exponent =2, $output = false) {
    //     $working = $num ** $exponent;

    //     if ($output == true) {
    //         echo $working;
    //     }
    // }

    // numbers(2, 3, true);


    ?>


    <form action="index.php" method="post">

    <input type="number" name="num1" id="">
    <input type="number" name="num2" id="">

    <input type="submit" value="Submit">
    
    <?php

    // string to upper function with forms
    // function outputUpper($name) {
    //     $working = strtoupper ($name);
    //     echo $working;
    // }
    
    // if ($_POST) {
    //     outputUpper($_POST['Name']);
    // }

    // exponent function with forms
    // function power($num1, $num2) {
    //     echo $num1**$num2;
    // }

    // if ($_POST) {
    //     power ($_POST['num1'], $_POST['num2']);
    // }

    
    function power(...$num) {

        $working = $num[0];

        foreach ($num as $n) {
            $working = $working**$n;
        }

        echo $working;
    }

    echo power(2, 99);



    ?>
    
    
    </form>
</body>

</html>