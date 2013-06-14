<p>The basic class syntax looks like the following:</p>

<pre>
class Classname {

}
</pre>

<p>The class keyword means that you create a new class; the syntax is quite similar to the function syntax.</p>

<p>And you can create new instances of this class using the following syntax:</p>

<pre>$obj1 = new Classname();</pre>

<p>The new keyword means that you create a new object and ensures that your arguments are added as properties, so it initializes the constructor (which we are going to deal with later).</p>

<p>We don't need to pass in any arguments, as we haven't added any properties (which can store different values depending on the instance) quite yet.</p>

<ol>
  <li>Add a pair of<?php ?> tags in line 9.</li>
  <li>Create a Person class.</li>
  <li>Create two instances of the Person class: $teacher and $student.</li>
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
            }
            
            $teacher = new Person();
            $student = new Person();
        ?>
      </p>
    </body>
</html>
</pre>
