<p>PHP is a very flexible language. When accessing arrays by offset, you can actually use two different types of syntax: the [] syntax we've covered, or you can use curly braces ({}). You use the curly braces just like you use the square brackets:</p>

<pre>
<?php
 $myArray = array("do", "re", "mi");
 print $myArray{2};
 // prints "mi";
?>
</pre>
