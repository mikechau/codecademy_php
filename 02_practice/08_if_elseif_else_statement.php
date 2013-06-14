<pre>
 Instructions

That guessing game sounded kind of cool. I've set the $guess and $number for you; you supply the if/elseif/else statement!

    1. If $guess < $number, your code should echo or print "Too low!"
    2. If $guess > $number, your code should echo or print "Too high!"
    3. Otherwise (else), $number must equal $guess. In that case, echo or print "You win!"
</pre>

Answer:

<pre>
<html>
  <head>
    <title>If, Elseif, and Else</title>
  </head>
  <body>
    <p>
      <?php
        $guess = 7;
        $number = 7;
        
        if ($guess < $number) {
            print "Too low!";
        } elseif ($guess > $number) {
            print "Too high!";
        } else {
            print "You win!";
        }
      ?>
    </p>
  </body>
</html>
</pre>
