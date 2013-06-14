<p>Another common thing to do with arrays is sort them. Handily enough, PHP has a sort() function for just such an occasion! Pass your array to sort() and it will sort the elements from low to high (or a-z). This function does not return anything. Instead, sort() will modify the array you pass to it. See it in action here:</p>

<pre>
$names = array("david","alana","violet","rory");
sort($names);
// array("alana","david","rory","violet")
</pre>

<p>PHP also has the opposite function: rsort(). Pass your array to rsort() and it will sort the elements from high to low (or z-a). This function does not return anything. Instead, rsort() will modify the array you pass to it just like sort() does. Check it out:</p>

<pre>
$names = array("david","alana","violet","rory");
rsort($names);
// array("violet","rory","david","alana")
</pre>

<p>Lastly, we'll use join() so we can easily print out the representations of our sorted arrays in this exercise. join() accepts two parameters, the glue and the array you wish to glue together. See it here:</p>

<pre>
$names = array("david","alana","violet","rory");
sort($names);
print join(", ", $names);
// prints alana, david, rory, violet
</pre>

<p>For this exercise, we'll use a comma (,) as the glue.</p>

Example:
<pre>
<html>
    <p>
	<?php
	// Create an array with several elements in it,
	// then sort it and print the joined elements to the screen
    $myArray = array("cats", "dogs", "lions");
    sort($myArray);
    print join(", ", $myArray);
    ?>
	</p>
	<p>
	<?php
	// Reverse sort your array and print the joined elements to the screen
    rsort($myArray);
    print join(", ", $myArray);
	?>
	</p>
</html> 
</pre>
