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

 

<?php

$file = 'questions.txt';

 

        if ( !empty($_GET['question']) && ($_GET['question'] != 'Enter

your question here.')) {

 

                if (is_writable($file)) {

 

                        file_put_contents($file, $_GET['question'] .

PHP_EOL, FILE_APPEND);

 

print '<p>Your question has been stored.</p>';

 

} else {

print '<p style="color: red;">Your question could not be stored due to a

system error.</p>';

}

} else {

print '<p style="color: red;">Please enter a question!</p>';

}

?>

 

<form action="listofquestions.php" method="get">

        <textarea name="question" row="5" cols="30">Enter your question

here.</textarea><br />

        <input type="submit" name="submit" value="Add This Question!" />

</form>

 

</body>

</html>
