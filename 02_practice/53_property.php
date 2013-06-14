<p>As you remember, properties are pieces of data bound to an object, and you can imagine an object as a bundle of information and actions.</p>

<pre>

class Classname {
  public $propname = "Some value";
  public $otherProp;
}

</pre>

<p>As we want to add some public information, which can be accessed from everywhere, we use the public keyword (there is no var in objects in PHP 5).</p>

<p>The first one, $propname, contains a string called "Some value", while the second one, $otherProp, doesn't contain anything (yet). To access the property $propname of an existing $obj object, we have to use the following syntax:</p>

<pre>
$obj->propname;
</pre>

<p>So in PHP there is no dot notation as in JS, Python and Ruby, but there is an arrow notation, as we use arrows instead of dots in PHP. ;-)</p>

<ol>
  <li>Add a public $isAlive property to the Person class and assign the value true to $isAlive.</li>
  <li>Add three further public properties to thePerson class: $firstname, $lastname and $age. Don't assign any values to these.</li>
  <li>echo the value of the $isAlive property of your $teacher object.</li>
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
            }
            
            $teacher = new Person();
            $student = new Person();
            
            echo $teacher->isAlive;
        ?>
      </p>
    </body>
</html>
</pre>
