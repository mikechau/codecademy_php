<p>So far, you have been accessing the values of an array using integers. This is all well and good, but if you want to be more descriptive of your data, you can make use of something called an associative array.</p>

<p>An associative array makes use of (key => value) pairs. Some languages may separate arrays from associative arrays, but PHP treats both as the same.</p>

<pre>
<html>
  <head>
    <title>Associate Arrays</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices...
        $myArray = array(2012, 'blue', 5);

        // ...and this is an associative array:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5);
            
        // This code will output "blue"...
        echo $myArray[1];
        echo '<br />';
            
        // ... and this will also output "blue"!
        echo $myAssocArray['colour'];
      ?>
    </p>
  </body>
</html>
</pre>
