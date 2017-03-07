<html>

<head>

<title>States and Capitals</title>

</head>

<body>

<h1>Find the capital of any state!</h1>

<form action="capitalsanswer.php" method="GET">

<select name="select">

<?php

// Creating an array with states as the key and capitals as the value.

$statecapital = array("Alabama"=>"Montgomery",

                 "Alaska"=>"Juneau",

                 "Arizona"=>"Phoenix",

                 "Arkansas"=>"Little Rock",

                 "California"=>"Sacramento",

                "Colorado"=>"Denver",

                 "Connecticut"=>"Hartford",

                 "Delaware"=>"Dover",

                 "Florida"=>"Tallahassee",

                 "Georgia"=>"Atlanta",

                 "Hawaii"=>"Honolulu",

                "Idaho"=>"Boise",

                 "Illinois"=>"Springfield",

                 "Indiana"=>"Indianapolis",

                 "Iowa"=>"Des Moines",

                 "Kansas"=>"Topeka",

                 "Kentucky"=>"Frankfort",

                 "Louisiana"=>"Baton Rouge",

                "Maine"=>"Augusta",

                 "Maryland"=>"Annapolis",

                 "Massachusetts"=>"Boston",

                 "Michigan"=>"Lansing",

                 "Minnesota"=>"St. Paul",

                "Mississippi"=>"Jackson",

                 "Missouri"=>"Jefferson City",

                 "Montana"=>"Helena",

                 "Nebraska"=>"Lincoln",

                 "Nevada"=>"Carson City",

                 "New Hampshire"=>"Concord",

                 "New Jersey"=>"Trenton",

                 "New Mexico"=>"Santa Fe",

                 "New York"=>"Albany",

                 "North Carolina"=>"Raleigh",

                "North Dakota"=>"Bismarck",

                 "Ohio"=>"Columbus",

                 "Oklahoma"=>"Oklahoma City",

                 "Oregon"=>"Salem",

                 "Pennsylvania"=>"Harrisburg",

                 "Rhode Island"=>"Providence",

                 "South Carolina"=>"Columbia",

                 "South Dakota"=>"Pierre",

                 "Tennessee"=>"Nashville",

                 "Texas"=>"Austin",

                 "Utah"=>"Salt Lake City",

                "Vermont"=>"Montpelier",

                "Virginia"=>"Richmond",

                 "Washington"=>"Olympia",

                 "West Virginia"=>"Charleston",

                 "Wisconsin"=>"Madison",

                "Wyoming"=>"Cheyenne");

 

// Creating a dropdown menu.

 

foreach ($statecapital as $state=>$capital) {

        print "<option value='$capital'>$state</option>";

}

?>

<input type="submit" name="submit" value="Submit!" />

</select>

</form>

 

</body>

</html>
