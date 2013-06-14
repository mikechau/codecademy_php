<pre>
while(cond) {
   // looped statements go here
}
</pre>

<pre>
where the statements in side the curly braces { and } are executed as long as the condition cond is evaluated as true. In the last exercise, cond was the condition that the number of consecutive heads was less than 3: $headCount < 3.

It is important when writing loops to make sure that the loop will exit at some point. The loop

while(2 > 1){
   // Code
}

will never exit and is an example of an infinite loop. Avoid infinite loops like the plague! This is why we need to include $loopCond = false; in line 12. If you submit an infinite loop in one of these exercises, you will need to reload the page to stop it.
</pre>

<pre>
 Instructions

Make sure the while loop in the editor runs as long as $loopCond is true, and echo "<p>The loop is running.</p>" below the comment in the loop. Then click Save & Submit Code to run your first PHP while loop!
</pre>

Example
<pre>
<!DOCTYPE html>
<html>
    <head>
		<title>Your First PHP while loop!</title>
	</head>
	<body>
    <?php
	$loopCond = true;
	while ($loopCond == true){
		//Echo your message that the loop is running below
		echo "<p>The loop is running.</p>";
		$loopCond = false;
	}
	echo "<p>And now it's done.</p>";
    ?>
    </body>
</html>
</pre>
