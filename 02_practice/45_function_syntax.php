<pre>
function name(parameters) {
  statement;
}
</pre>

<ol>
  <li>The keyword function indicates that the code following it will be a user-defined function.</li>
  <li>name indicates the name of a function, which is case insensitive. The name of a function can contain numbers, letters, underscores or dashes.</li>
  <li>The arguments, or parameters, will be the optional input a function uses to perform calculations.</li>
  <li>And of course, the statements themselves will be the code the function executes when it is called.</li>
</ol>

Example:
<pre>
<html>
    <head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
          // Here we define the function...
          function helloWorld() {
            echo "Hello world!";
          }
          
          // ...and here we call it!
          helloWorld();
        ?>
      </p>
    </body>
</html>
</pre>
