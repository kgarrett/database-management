<html>

<head>

<title>Select a State</title>

</head>

<body>

<h1>Select a State</h1>

 

<p>Please select a state from the dropdown menu:</p>

<form action="statenames.php" method="GET">

 

<?php // Creating the states array.

$states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California",

"Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii",

"Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana",

"Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota",

"Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New

Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina",

"North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode

Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah",

"Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin",

"Wyoming");

 

// Count to be used in the for loop.

$numberofstates = count($states);

 

print '<select name="states">';

        for ($n = 0; $n < $numberofstates; $n++) {

                print '<option value="names">';

                print $states[$n];

                print '</option>';

}

print '</select>';

?>

 

<input type="submit" name="submit" value="Submit!" />

</form>

</body>

</html>
