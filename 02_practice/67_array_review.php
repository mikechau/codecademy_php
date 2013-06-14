<p>Arrays are an extremely useful way to store multiple values, like numbers, strings, and even other arrays!</p>

<p>You can assign an array to a variable as easily as you would with any other value by using the array() function, and then easily access it with its numeric index (i.e. $myArray[2]).</p>

<p>Remember, arrays in PHP are zero-based, meaning it counts from 0 (i.e. the first value is defined as 0, the second as 1, and so on).</p>

<ol>
  <li>Start by setting $fruits to a simple array of 'bananas', 'apples' and 'pears' on line 3.</li>
  <li>Modify the echo statement on line 13 to display the fruit in the middle of the array (that is, it should echo "apples".</li>
</ol>

<pre>
<html>
  <head>
    <title>Array Review</title>
  </head>
  <body>
    <p>
      <?php
        $fruits = array("bananas", "apples", "pears");
        echo 'I love eating ' . $fruits[1] . ' too!';
      ?>
    </p>
  </body>
</html>
</pre>
