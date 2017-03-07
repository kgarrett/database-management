<html>

<head>

<title>Multiplication Tables</title>

</head>

<body>

<h1>Multiplication Tables</h1>

 

<table border="1">

<?php // Using nested for loops.

  for ($numberone = 0; $numberone <=10; $numberone++) {

    for ($numbertwo = 0; $numbertwo <=10; $numbertwo++) {

      $answer = $numberone * $numbertwo;   

        print "<tr><td>$numberone x $numbertwo = </td><td>$answer

        </td></tr>"; // Creating the table with row and data tags.

    }                

  }

?>

</table>

</body>

</html>
