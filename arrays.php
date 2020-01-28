
<!-- +---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
 -->

<?php
$food = array("pizza","burger","pasta","fries");

/*
Print every array element in a new line.
*/

echo $food[0] . "</br>";
echo $food[1] . "</br>";
echo $food[2] . "</br>";
echo $food[3] . "</br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>";
echo "<li>" . $food[0] . "</li>";
echo "<li>" . $food[1] . "</li>";
echo "<li>" . $food[2] . "</li>";
echo "<li>" . $food[3] . "</li>";
echo "</ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = array(
                "pizza"=>"thincrust",
                "burger"=>"cheeseburger",
                "pasta"=>"spaghetti",
                "fries"=>"periperi",

              );

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
$keyArray = array_keys($food_assoc);

echo $keyArray[0]. " | " . $food_assoc['pizza'] . "<br>";
echo $keyArray[1]. " | " . $food_assoc['burger'] . "<br>";
echo $keyArray[2]. " | " . $food_assoc['pasta'] . "<br>";
echo $keyArray[3]. " | " . $food_assoc['fries'] . "<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc = [

  "pizza" => [
     "type" => "main course",
     "origin" => "Italy"
  ],

  "burger" => [
    "type" => "main course",
    "origin" => "America"
  ],

  "pasta" => [
  "type" => "main course",
  "origin" => "Italy"
  ],

  "fries" => [
  "type" => "sides",
  "origin" => "France"
  ]
];


/*
Print every food, type and origin in the separate lines so it renders like this:
"pizza" | main counrse | Italy
cheesesake | desert | Greece
*/

 echo $food[0]
 . " | "
 . $food_assoc["pizza"]["type"]
 . " | "
 . $food_assoc["pizza"]["origin"]
 . "<br>"
 . $food[1]
 . " | "
 . $food_assoc["burger"]["type"]
 . " | "
 . $food_assoc["burger"]["origin"]
 . "<br>"
 . $food[2]
 . " | "
 . $food_assoc["pasta"]["type"]
 . " | "
 . $food_assoc["pasta"]["origin"]
 . "<br>"
 . $food[3]
 . " | "
 . $food_assoc["fries"]["type"]
 . " | "
 . $food_assoc["fries"]["origin"];


// task separator
echo "<hr style=\"margin 1rem 0\">"; 

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>*/

echo
"<table>
  <tr>
    <th>Food</th>
    <th>Type</th>
    <th>Origin</th>
  </tr>
  <tr>
    <td>".$food[0]."</td>
    <td>".$food_assoc["pizza"]["type"]."</td>
    <td>".$food_assoc["pizza"]["origin"]."</td>
  </tr>
  <tr>
    <td>".$food[1]."</td>
    <td>".$food_assoc["burger"]["type"]."</td>
    <td>".$food_assoc["burger"]["origin"]."</td>
  </tr>
  <tr>
    <td>".$food[2]."</td>
    <td>".$food_assoc["pasta"]["type"]."</td>
    <td>".$food_assoc["pasta"]["origin"]."</td>
  </tr>
  <tr>
    <td>".$food[3]."</td>
    <td>".$food_assoc["fries"]["type"]."</td>
    <td>".$food_assoc["fries"]["origin"]."</td>
  </tr>
</table>"

?>