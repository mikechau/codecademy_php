<p>Not only can you store integers and strings in arrays, you can also store... other arrays! This is called a multidimensional array.</p>

<p>How do we do this? Well, just like a normal array with comma-separated values, but you would put comma-separated arrays instead—just like the code in the editor.</p>

<p>$deck is an array which contains 3 rows, each being a playing card. Within each row, it has the name of the card, along with the value.</p>

<p>To retrieve a card, we would first get the row for that card, then get the value we require (either to display the card, or calculate the player's total).</p>

<p>If we access $deck[2], we would get the third row (remember, arrays start from 0 in PHP!)</p>

<p>That will return another array containing 2 values: the first (0) which is a string that has the value "7 of Diamonds", and the second (1) which is an integer that has the value 7.</p>

<p>If we want the "7 of Diamonds" string, we would simply use $deck[2][0];.</p>

<p>Try adding another card to the array. It can have whatever rank, suit, and value you like, but keep in mind the value should be a number!</p>

<pre>
<html>
  <head>
    <title>Blackjack!</title>
  </head>
  <body>
    <p>
      <?php
        $deck = array(array('2 of Diamonds', 2),
                      array('5 of Diamonds', 5),
                      array('7 of Diamonds', 7));
        
      // Imagine the first chosen card was the 7 of Diamonds.
      // This is how we would show the user what they have:
      echo 'You have the ' . $deck[2][0] . '!';
      
      array_push($deck, array('Ace of Spades', 1));
      
      echo '<br />' . $deck[3][0];
      ?>
    </p>
  </body>
</html>
</pre>
