<p>Arrays in PHP are zero-based (this means the numeric ID of the first value in the array will always be 0, not 1).</p>

<p>An array can contain values ("val1", "val2", etc... )</p>

<p>As an associative array, it can contain keys and values ("key1" => "val1", "key2" => "val2", etc... )</p>

<p>A multidimensional array can contain arrays within arrays!</p>

<p>To loop through an array containing values only, you can use the for loop. For an array containing keys and values, you can use the foreach loop.</p>

<ol>
  <li>Start by creating a variable called $myArray and setting it equal to your own array, which can contain any items you like.</li>
  <li>Grab a value from your array and display it.</li>
  <li>Now loop through the array and output the contents to the browser!</li>
</ol>

<pre>
<html>
  <head>
    <title>I am the King of Arrays!</title>
  </head>
  <body>
    <p>
      <?php
      // On the line below, create your own associative array:
      $myArray = array("sword", "shield", "axe", "knife", "scythe", "nunchucks", "halberd", "spear", "wand", "dual blades", "brass knuckles", "rocket launcher", "laser cannon", "shuriken", "kodachi", "katanna", "staff", "crowbar", "wooden box", "mallet", "hammer", "steel boots", "smoke bomb", "fork");

      // On the line below, output one of the values to the page:
      echo $myArray[0];
      print '<br />';
      // On the line below, loop through the array and output
      // *all* of the values to the page:
      print '<ul>';
      for ($i = 0; $i < count($myArray); $i++ ) {
          print '<li>' . $myArray[$i] . '</li>';
      }
      print '</ul>';
      ?>
    </p>
  </body>
</html>
</pre>
