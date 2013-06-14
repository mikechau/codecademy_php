<!DOCTYPE html>
<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='style.css'/>
		<title>Coin Flips</title>
	</head>
	<body>
	<p>We are going to flip a coin until we get three heads in a row!</p>
	<?php
	$headCount = 0;
	$flipCount = 0;
	while ($headCount < 3) {
		$flip = rand(0,1);
		$flipCount ++;
		if ($flip){
			$headCount ++;
			echo "<div class=\"coin\">H</div>";
		}
		else {
			$headCount = 0;
			echo "<div class=\"coin\">T</div>";
		}
	}
	echo "<p>It took {$flipCount} flips!</p>";
	?>
    <pre>


Before the loop, variables are defined to count the number of consecutive heads, $headCount, and the total number of flips, $flipCount.

The loop executes as long as $headCount is less than 3. Inside the loop rand(0,1) randomly outputs either a 0 or 1 representing tails and heads respectively, and $flipCount increases by one. If the result is heads (1 evaluates as true) $headCount increases by one and the heads <div> is echoed to the page. If not, $headCount becomes 0 and the tails <div> is echoed to the page.

When the loop is done, $flipCount is echoed to the page within a paragraph.
</pre>
    </body>
</html>
