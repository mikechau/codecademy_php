<p>Good job, now we have some properties.
But right now $teacher and $student are the same, which should be changed immediately, correct? :-)</p>

<p>The solution: we have to create a constructor to create different objects. This constructor is also a method, but you don't need to worry about this fact just yet.</p>

<pre>
public function __construct($prop1, $prop2) {
  $this->prop1 = $prop1;
  $this->prop2 = $prop2;
}
</pre>

<p>So you should remember the public keyword and the arrow notation.</p>

<p>Some new things:</p>
<ol>
  <li>You're creating a function bound to a class (a method).</li>
  <li>The constructor method has to be called __construct().</li>
  <li>Finally, the weird way to assign the values: $this->prop1 = $prop1 means that the value you pass in the __construct() function via the new keyword is assigned to $this, which represents the object you are dealing with, and ->prop1 is the actual property of the object.</li>
</ol>

<p>By creating a new instance using the new keyword, you actually call this __construct() method, which constructs the object. And that's why we have to pass in some arguments when we create an instance of a class, since this is how the properties get set!</p>

<ol>
  <li>The public properties $firstname, $lastname and $age should get a value via a constructor.</li>
  <li>
    <pre>
      Change the code, so $teacher's:
      $firstname is "boring",
      $lastname is "12345",
      $age is 12345
    </pre>
  </li>
  <ol>
   <li>Add your $firstname, $lastname and $age to $student.</li>
   <li>echo the $age of $student.</li>
  </ol>
</ol>

Example:

<pre>
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
            }
            
            $teacher = new Person("boring", "12345", "12345");
            $student = new Person("John", "Doe", "9001");
            
            echo $teacher->isAlive;
            echo $student->age;
        ?>
</pre>
