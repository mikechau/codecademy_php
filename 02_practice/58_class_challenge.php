<ol>
  <li>Create a class called Cat.</li>
  <li>Add two public properties to this class: $isAlive ought to store the value true and $numLegsshould contain the value 4.</li>
  <li>Add a public $name property, which gets its value via the __construct()or.</li>
  <li>Add a public method called meow(), which returns "Meow meow".</li>
  <li>Create an instance of the Cat class, which has the $name "CodeCat".</li>
  <li>Call the meow() method on this Cat and echo the result.</li>
</ol>

<pre>
<!DOCTYPE html>
<html>
    <head>
	  <title> Challenge Time! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
          class Cat {
              public $isAlive = true;
              public $numLegs = 4;
              public $name;
              
              public function __construct($name) {
                  $this->name = $name;
              }
              
              public function meow() {
                  return "Meow meow.";
              }
          }
          
          $cat = new Cat("CodeCat");
          echo $cat->meow();
        ?>
      </p>
    </body>
</html>
</pre>
