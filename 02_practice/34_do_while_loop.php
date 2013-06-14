<pre>
<!DOCTYPE html>
<html>
    <head>
		<title>Much a do-while</title>
	</head>
	<body>
    <?php
		$loopCond = false;
		do {
			echo "<p>The loop ran even though the loop condition is false.</p>";
		} while ($loopCond);
		echo "<p>Now the loop is done running.</p>";
    ?>
    </body>
</html>
</pre>

<pre>
In the previous exercise, you saw how a do/while could be used to ensure that the code in a loop executed at least once. The general syntax for a do/while loop looks like this:

do {
   // looped statements go here
} while (cond); 

Note the semicolon after the end paranthesis.
</pre>
