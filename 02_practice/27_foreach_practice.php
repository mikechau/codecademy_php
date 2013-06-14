Example:
<pre>
<?php
  $numbers = array(1, 2, 3);

  foreach($numbers as $item) {
      echo $item;
  }
?>
</pre>

Description:
<pre>
First, we create our array using the array() syntax we learned in the last lesson.

Next, we use the foreach keyword to start the loop, followed by parentheses. (This is very similar to what we've done with for loops.)

Between the parentheses, we use the $numbers as $item) syntax to tell PHP: "For each thing in $numbers, assign that thing temporarily to the variable $item." (We don't have to use the name $item—just as with for loops, we can call our temporary variable anything we want.)

Finally, we put the code we want to execute between the curly braces. In this case, we just echo each element in turn.
</pre>

Example:

<pre>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        $sentence = array("I'm ", "learning ", "PHP!");
        
        foreach ($sentence as $word) {
          echo $word;
        }
      ?>
    </p>
  </body>
</html>
</pre>
