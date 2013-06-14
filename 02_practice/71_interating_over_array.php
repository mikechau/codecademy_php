<p>Looping through an associative array is just as easy as looping through a normal array, but you obtain the value from a specified key, not an integer. Just like in the previous exercises!</p>

<p>If we only need to loop through the values of an array, we can use for. Have a look at the editor to see an example of this being used.</p>

<p>Remember, when using a for loop, calculate the length of the array first!</p>

<p>Then have a look at the foreach loop to see how we can get the key and value of each pair in the array.</p>

Example Array:
<pre>
$me = array('hair' => 'black',
            'skin tone' => 'light');
</pre>

Example for Displaying Values:
<pre>
foreach ($me as $feature=>$colour) {
  echo 'My ' . $feature . ' is ' . $colour . '. ';
}
</pre>

Completed Example:
<pre>
<html>
  <head>
    <title>Iteration Nation</title>
  </head>
  <body>
    <p>
      <?php    
        $food = array('pizza', 'salad', 'burger');
        $salad = array('lettuce' => 'with',
                   'tomato' => 'without',
                   'onions' => 'with');
    
      // Looping through an array using "for".
      // First, let's get the length of the array!
      $length = count($food);
    
      // Remember, arrays in PHP are zero-based:
      for ($i = 0; $i < $length; $i++) {
        echo $food[$i] . '<br />';
      }
    
      echo '<br /><br />I want my salad:<br />';
    
      // Loop through an associative array using "foreach":
      foreach ($salad as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . '<br />';
      }
    
      echo '<br /><br />';
    
      // Create your own array here and loop
      // through it using foreach!
      $fighterStats = array('str' => 99, 'mag' => 10, 'spr' => 0, 'agi' => 40, 'ctr' => 55 );
      echo 'Fighter Stats: <br />';
      foreach ($fighterStats as $stat => $value) {
          echo $stat . ': ' . $value . '<br />';
      }
      

      ?>
    </p>
  </body>
</html>
</pre>
