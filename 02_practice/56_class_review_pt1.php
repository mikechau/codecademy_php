<ol>
  <li>Add the <?php ?> tag.</li>
  <li>Create a Dog class.</li>
  <li>Add a public property called $numLegs, which stores the value 4 to the Dog class.</li>
  <li>Add another public property called $name, which doesn't contain a value.</li>
  <li>Add the __construct()or method, which accepts $name as a parameter.</li>
  <li>In this __construct()or method, add some code, so $this->name contains $name.</li>
</ol>

<pre>
<!DOCTYPE html>
<html>
	<head>
	  <title> Practice makes perfect! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
          class Dog {
              public $numLegs = 4;
              
              public function __constructor($name) {
                  $this->name = $name;
              }
          }
        ?>
      </p>
    </body>
</html>
</pre>
