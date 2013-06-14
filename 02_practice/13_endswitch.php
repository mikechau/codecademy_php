<p>You have two ways of creating a switch. First, there's the way we have made all the past exercises:</p>

<pre>switch ($i) { 

}</pre>

<p>But we can also make it this way:</p>

<pre>
switch ($i):

endswitch;
</pre>

<p>This is called alternative syntax. It exists to provide syntactic sugar

There's no difference when using either the curly brace syntax (first example) or alternative syntax (second example), it only provides readability, thus it's usually used when mixing HTML and PHP code in the same file.</p>

<p>Instructions</p>

<p>In the editor you have the code of the previous exercise. Make the code use the alternative syntax rather than the curly-brace syntax.
</p>

<pre>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
    <?php
    $i = 5;
    
    switch ($i):
        case 0:
            echo '$i is 0.';
            break;
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo '$i is somewhere between 1 and 5.';
            break;
        case 6:
        case 7:
            echo '$1 is either 6 or 7.';
            break;
        default:
            echo "I don't know how much \$i is.";
    endswitch;
    ?>
    </body>
</html>
</pre>
