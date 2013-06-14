Example:
<pre>
<?php
  // Let's assume we have
  // two variables, $number
  // and $guess, already defined
  if ($guess < $number) {
    echo "Your guess is too low!";
  } elseif ($guess > $number) {
    echo "Your guess is too high!";
  } else {
    echo "You guessed right!";
  }
?>
</pre>

Instructions:
<pre>
Instructions

Go ahead and add an elseif condition to your if/else. It should check whether $items == 1, and it should echo or print "Sorry, no discount!"
</pre>

Answer:
<pre>
<html>
  <head>
    <title>Our Shop</title>
  </head>
  <body>
    <p>
      <?php
        $items = 9000; // Set this to a number greater than 5!
        if ($items == 1) {
            print "Sorry, no discount!";
        } elseif ($items > 5) {
          echo "You get a 10% discount!";
        } else {
          print "You get a 5% discount!";
        }
      ?>
    </p>
  </body>
</html>
</pre>
