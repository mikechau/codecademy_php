<p>Another very common string function is substr(). This function allows you to return a substring (piece of) of your string.</p>

<p>You pass this function the string you want to get a substring of, the character in your string to start at, and how many characters you want after your starting point. An example might be:</p>

<pre>
$myname = "David";

// you can manipulate strings easily
// with built-in funtions too
$partial = substr($myname, 0, 3);
print $partial;
// prints "dav"
</pre>

<p>NOTE: the second parameter (the starting character) is based on a zero-indexed array (i.e. the first character in your string is number 0, not number 1).</p>

<p>Two other very useful string functions are strtoupper() and strtolower(), which make your entire string UPPERCASE or lowercase. Here is an example of each:</p>

<pre>
$uppercase = strtoupper($myname);
print $uppercase;
// prints "DAVID"

$lowercase = strtolower($uppercase);
print $lowercase;
// prints "david"
</pre>

<p>Example:</p>

<pre>
<html>
  <p>
    <?php
    // Get a partial string from within your own name
    // and print it to the screen!
    print substr("Mike", 0, 2);
    ?>
  </p>
  <p>
    <?php
    // Make your name upper case and print it to the screen:
    print strtoupper("Mike");
    ?>
  </p>
  <p>
    <?php
    // Make your name lower case and print it to the screen:
    print strtolower("Mike");
    ?>
  </p>
</html>
</pre>
