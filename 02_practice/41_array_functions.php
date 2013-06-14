<p>Aside from the array() function itself, array_push() is arguably the most common and useful function for manipulating arrays.</p>

<p>array_push() takes two arguments: an array, and an element to add to the end of that array. Here's an example:</p>

<pre>
$fav_bands = array();
array_push($fav_bands, "Maroon 5");
array_push($fav_bands, "Bruno Mars");
array_push($fav_bands, "Nickelback");
array_push($fav_bands, "Katy Perry");
array_push($fav_bands, "Macklemore");
</pre>

<p>Another cool array function is count(). Passing an array to count() will return the number of elements in that array. Like this:</p>

<pre>print count($fav_bands); // prints 5</pre>

Example:
<pre>
<html>
    <p>
	<?php
	// Create an array and push 5 elements on to it, then 
    // print the number of elements in your array to the screen
    $myArray = array();
    array_push($myArray, "1", "2", "3", "4", "5");
    print count($myArray);
	?>
	</p>
</html>
</pre>
