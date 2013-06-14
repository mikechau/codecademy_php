<pre>
A switch statement accepts only one argument and that is the value that you make the expressions on. The keyword case is followed by the value being compared (or an expression) and a :.

A default case is a special case. You make it like a normal case, but instead of using the keyword case and a condition, you type default:. switch doesn't require a default case, but it does require breaks to mark where the current case block ends. If no breaks are defined, when a case is matched, all the cases below get executed. The following code would output: 123.

On the other hand, the default case gets executed if all of the other cases return false.
</pre>

Syntax:
<pre>
switch (1) {
    case 1:
        echo "1";
    case 2:
        echo "2";
    case 3:
        echo "3";
}
</pre>

Answer:
<pre>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
    <?php
    $fruit = "Apple";
    
    switch ($fruit) {
        case 'Apple':
            echo "Yummy.";
            break;
        default:
            echo "Not a fruit?";
    }
    
    ?>
    </body>
</html>
</pre>
