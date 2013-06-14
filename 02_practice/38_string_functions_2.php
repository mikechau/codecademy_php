<p>strpos() is one of the most useful PHP string functions. This function allows you to get the position in a string where another string (a substring) occurs.</p>

<p>The parameters passed to strpos() are haystack and needle. It's a little bit of programmer humor that's used throughout PHP's documentation. Here's what it looks like:</p>

<pre>
$pos = strpos("david", "v");
print $pos;  // prints 2
</pre>

<p>

NOTE: When searching for a string within a string, the return value will be the position in your haystack of the first character of your needle. Remember, PHP starts counting string characters at 0!

</p>

<p>You are not limited to searching for a single character with strpos() either. You can search for entire strings within a string.</p>

<p>If the needle you are looking for does not exist in the haystack, strpos() will return false.
Here's an example:</p>

<pre>
if (strpos("david","h") === false) {
  print "Sorry, no 'h' in 'david'";
}
// prints the "Sorry" message
</pre>

<p>Example:</p>

<pre>
<html>
    <p>
    <?php
    // Print out the position of a letter that is in
    // your own name
    print strpos("mike", "m");
    ?>
    </p>
    <p>
    <?php
    // Check for a false value of a letter that is not
    // in your own name and print out an error message
    if (strpos("mike", "x") === false) {
        print "False.";
    }
    ?>
    </p>
</html>
</pre>
