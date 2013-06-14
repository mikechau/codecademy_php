<p>We've talked a lot about variables in PHP, and how we can reassign them whenever it suits us. Occasionally we want to set variables that don't change, however, and these are prefixed with the const keyword (short for constant).</p>

<p>PHP lets us set constants on a class-by-class basis! The good news is that this means we can have many constants with the same name, so long as they're all in different classes. The bad news is that means we need to have some way of specifying which class we mean.</p>

<p>Each class has its own scope, which is the context in which its variables can be used. In PHP, we can use ::, the scope resolution operator, to specify which constant we want, like so:</p>

<pre>

class Immortal extends Person {
  // Immortals never die!
  const alive = true;
}

// If true...
if (Immortal::alive) {
  echo "I live forever!";
}
// echoes "I live forever!"

</pre>

<p> Note that constants do not start with $. </p>

<p>We've created the Ninja class for you in the editor. Go ahead and set a stealth constant to the string "MAXIMUM", then echo it to the page using the scope resolution operator (::).</p>

<pre>
<html>
  <head>
    <title>Scope it Out!</title>
  </head>
  <body>
    <p>
      <?php
      class Person {
          
      }
      class Ninja extends Person {
        // Add your code here...
        const stealth = "MAXIMUM";
      }
      // ...and here!
      echo Ninja::stealth;
        
      ?>
    </p>
  </body>
</html>
</pre>
