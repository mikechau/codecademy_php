<p>When accessing the values from either type of array, the only difference is whether you use an integer, or a specified key:</p>

<pre>
echo $car[1];
// prints 2012

echo $assocCar['year'];
// prints 2012
</pre>

<p>This exercise will demonstrate how useful specified keys in an array can be.</p>

<p>Using the arrays from the previous exercises, write an echo statement on line 22 to talk about your car (beyond the fact that it's blue). Try using both arrays to describe the car. Which one makes it easier?</p>

<pre>
<html>
  <head>
    <title>Accessing Associative Arrays</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices...
        $myArray = array(2012, 'blue', 5, 'BMW');

        // ...and this is an associative array:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5,
                        'make' => 'BMW');
            
        // This code will output "blue".
        echo $myArray[1];
        echo '<br />';
            
        // Add your code here!
        echo "I drive a {$myAssocArray['year']} {$myAssocArray['make']} and it is {$myAssocArray['colour']} with {$myAssocArray['doors']} doors.";
        echo '<br />';
        echo "I drive a {$myArray[0]} {$myArray[3]} and it is {$myArray[1]} with {$myArray[2]} doors.";
      ?>
    </p>
  </body>
</html>
</pre>
