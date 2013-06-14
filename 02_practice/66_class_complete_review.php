<p>Useful object and class methods, like property_exists() and method_exists();</p>
<p>Inheritance;</p>
<p>How child classes can override the behavior of their parents;</p>
<p>How parent classes can prevent this with the final keyword;</p>
<p>What class constants are and how to reach them using the scope resolution operator, ::;</p>
<p>How to access class methods and properties without creating an instance of the class by using the static keyword and the scope resolution operator together.</p>
<p>Let's put all our newfound knowledge to work in one final (pun intended) exercise!</p>

<ol>
  <li>Create a class called Person. It should contain only a single method, say(), that should take no arguments and echo: `"Here are my thoughts!";</li>
  <li>Create another class, Blogger, that inherits from Person. It should contain only a single constant, cats, set to 50.</li>
  <li>Use the static keyword and the scope resolution operator to call Blogger's inherited say() method without creating an instance of the class.</li>
  <li>Use the scope resolution operator to echo the cats constant to the page. Give it a go, and check out the Hint if you need a syntax refresher!</li>
</ol>

<pre>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        class Person {
            static public function say() {
                echo "Here are my thoughts!";
            }
        }
        
        class Blogger extends Person {
            const cats = 50;
        }
        
        Person::say();
        echo ' Cats: ' . Blogger::cats;
      ?>
    </p>
  </body>
</html>
</pre>
