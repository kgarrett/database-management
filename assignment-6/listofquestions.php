<html>

<head>

<title>Test Questions</title>

</head>

<h1>U.S. Presidents Test Questions</h1>

<?php

$questionarray = file('questions.txt');

$number = count($questionarray);

// Randomizing the questions.

shuffle($questionarray);

for ($n = 0; $n < $number; $n++) {

        print "$questionarray[$n] <br />";

}

?>

</body>

</html>
