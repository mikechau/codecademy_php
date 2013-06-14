<p>Two more useful functions along the same lines as round() are floor() and ceil(). These functions also round floating point numbers but force them to be round down or up, respectively. Here's an example:</p>

Example:
<pre>
print floor(M_PI); // prints 3

print ceil(M_PI); // prints 4
</pre>

<p>Another very common and useful function is rand(). This function returns a random number between two numbers. Optionally, you can provide your min and max numbers as parameters, like this:</p>

Example:
<pre>
// prints a number between 0 and 32767
print rand();

// prints a number between 1 and 10
print rand(1,10);
</pre>

Example:
<pre>
<html>
    <p>
    <?php
    // Use rand() to print a random number to the screen
    print rand();    
    ?>
    </p>
    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
    $name = "Mike";
    $nameLength = strlen($name);
    $randCharIndex = rand(0, $nameLength);
    $randCharLetter = substr($name, $randCharIndex, 1);
    print $randCharLetter;
    ?>
    </p>
</html>
</pre>
