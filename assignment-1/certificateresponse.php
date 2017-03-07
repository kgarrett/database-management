<html>

<head>

<title>Certificate</title>

</head>

<body style="background-color:lightgrey;">

<h1 style="color:blue;">Certificate of

Completion</h1>

<?php

// This page recieves the data from certificate.html.

// It will recieve: name, class, day, month, and submit in $_GET.

$studentname = $_GET['student']; // The student's name.

$class = $_GET['class']; // The class the student taught.

$month = $_GET['month']; // The month of the class.

$day = $_GET['day']; // The day of the class.

$year = $_GET['year']; // The year of the class.

print "<p>Congratulations!</p>This certificate acknowledges that $studentname has

successfully completed the $class

course on $month $day, $year.";

?>

</body>

</html>
