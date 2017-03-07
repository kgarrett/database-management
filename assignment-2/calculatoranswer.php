<html>
<head>
<title>Calculator Answer</title>
</head>
<body>
<h1>Answer</h1>
<?php


// This script takes values from calculator.html and performs addition,

//subtraction, multiplication, and division.

// It will receive: number 1, number 2, and function in $_GET.

 
$number1 = $_GET['number1'];

$function = $_GET['function'];

$number2 = $_GET['number2'];


// Using the switch/case structure to display different results for each function.

 
switch ($_GET['function']) {

        case 'add':

                $solution1 = $number1 + $number2;

                print "<p>$number1 + $number2 = $solution1</p>";

                break;

        case 'subtract':

                $solution2 = $number1 - $number2;

                print "<p>$number1 - $number2 = $solution2</p>";

                break;

        case 'multiply':

                $solution3 = $number1 * $number2;

                print "<p>$number1 * $number2 = $solution3</p>";

                break;

        case 'divide':

                $solution4 = $number1 / $number2;

                print "<p>$number1 / $number2 = $solution4</p>";

                break;

}

?>

</body>
</html>
