<pre>
Create an array() with the names of your closest family and friends. The more names in your array, the more fun your game will be, so don't skimp!

After you've created your list, sort it and randomly select a name from the list. When you have your winning name, print it to the screen with authority so everyone knows how awesome the winner is.

Functions we'll use here: array(), sort(), count(), rand(), and strtoupper(). Play around with some of the other functions you've learned as well.
</pre>

Example:

<pre>
<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $namesList = array();
    array_push($namesList, "Joe", "Sam", "Joe", "Jam", "Brian", "Jorge", "John", "Henry", "Alex", "Pat", "Mike", "Max", "Mark", "Ryan");
	// Sort the list
    sort($namesList);
	// Randomly select a winner!
    $selectName = $namesList[rand(0, count($namesList))];
	// Print the winner's name in ALL CAPS
    print strtoupper($selectName);
	?>
	</p>
</html>
</pre>
