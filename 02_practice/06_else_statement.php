<p>Example:</p>

<pre>
<?php
  $name = "Edgar";
  if ($name == "Simon") {
    print "I know you!";
  } else {
    print "Who are you?";
  }
  // prints "Who are you?"
?>
</pre>

<p>(Unless I specify otherwise, you can always use echo and print interchangeably—they basically do the same thing!)</p>

<pre>Under your if statement, write an else statement to capture the people who are only buying 5 items or fewer. In their case, print or echo "You get a 5% discount!"</pre>

<p>Answer:</p>

<pre>
<html>
  <head>
    <title>Our Shop</title>
  </head>
  <body>
    <p>
      <?php
        $items = 9000; // Set this to a number greater than 5!
        if ($items > 5) {
          echo "You get a 10% discount!";
        } else {
            print "You get a 5% discount!";
        }
      ?>
    </p>
  </body>
</html>
</pre>
