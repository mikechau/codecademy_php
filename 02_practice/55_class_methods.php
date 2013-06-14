<pre>
public function funcname($optionalParameter) {
  // Do something
}
</pre>

<p>Calling a method is similar to accessing a property, you just have to add the parentheses:</p>

<pre>
$obj1 -> meth1();
</pre>

<ol>
  <li>Add a method called greet() to your class. This method ought to return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)" .</li>
  <li>Call this new greet() method on $teacher and $student and echo the result to the page.</li>
</ol>

<pre>
<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php 
            class Person {
              public $isAlive = true;
              public $firstname;
              public $lastname;
              public $age;
              
              public function __construct($firstname, $lastname, $age) {
                  $this->firstname = $firstname;
                  $this->lastname = $lastname;
                  $this->age = $age;
              }
              
              public function greet() {
                  return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
              }
            }
            
            $teacher = new Person("boring", "12345", "12345");
            $student = new Person("John", "Doe", "9001");
            
            echo $teacher -> greet() . '<br />';
            echo $student -> greet();
        ?>
      </p>
    </body>
</html>
</pre>
