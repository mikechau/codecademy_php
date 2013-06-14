<p>Functions wouldn't be nearly as useful if they weren't able to take in some input. This is where parameters or arguments come in. These are the variables or inputs that a function uses to perform calculations.</p>

<pre>
function squareValue($number) {
  echo $number * $number;
} 
</pre>

<p>
The function squareValue, above, takes one parameter, which it multiplies by itself and then echos the result. The names of the parameters themselves are used internally within the function, so they should be named something helpful.
</p>

<p>You can also use multiple parameters as long as they are separated by commas.</p>

<ol>
  <li>Write a function called greetings.</li>
  <li>It should take $name as a parameter.</li>
  <li>
      <p>The function should echos a string equal to "Greetings, " . $name . "!".</p>
      <p>The dots might look a bit strange to you, but that's how PHP concatenates (glues) strings together. Typing</p>
      <pre>print "Hello, " . "world!"</pre>
      <p>Would print "Hello, world!" Call the function after you have defined it to test it out!</p>
  </li>
</ol>

<pre>
<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
            function greetings($name) {
                echo "Greetings, " . $name . "!";
            }
            
            greetings("Mike");
        ?>
      </p>
    </body>
</html>
</pre>
