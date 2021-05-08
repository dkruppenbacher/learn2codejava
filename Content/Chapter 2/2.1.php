<?php
  $page = "Lesson 2.1";
  $pagetype = "content";
  $path = "../../";
  $mydir1 = dirname(__FILE__);
  $myd = substr($mydir1, 38);
  include($path.'assets/inc/head-default.php');
?>
<body>
<?php
  include($path.'assets/inc/nav-content-default.php');
  include($path.'assets/inc/sideNav-default.php');
?>
  <div class='pagecontent'>
    <p>Java is an object-oriented programming language, so everything is associated with classes and objects.
A class is like the blueprint of the entire program, and it is used to create objects of that specific class.
Objects have attributes. For example, in real life, a car is an object, and the car has attributes, such as its color and size. All attributes should be declared at the top of the class, and always be “private”.
The objects also have methods, which are ways of accessing and manipulating the object and its attributes, which would be like driving or braking the car. Below is an example method:</p>

<code>public int methodName(int a) {<br>
&emsp;&emsp;//method body<br>
}</code><br>

<p>All method calls should be declared as “public”.
int is the return type, if the method returns something, the data type that it is returning is placed here. If nothing is being returned, then the return type is “void” (Like when declaring the main)
The methodName is the name you give the method.
int a is a parameter, which is a value that is taken in by the method and used in the method body.
When the method is called, you call it with its designated parameters, if applicable.</p>
<p>There are many different data types in Java, with one group being the Primitive data types. These data types are attributes, and they are used to describe the object created by the class. These are primitive values that contain the actual data. Here are the primitive types:</p>
<ul>
<li>Boolean → can store the values true or false</li>
<li>Char → can store a single character</li>
<li>Double → can store a number with decimals, similar to a float in other languages</li>
<li>Int → can store an integer number, no decimals</li></ul>
<p>Non primitive data types refer to objects, and they are also called Class data types. The most commonly used one is String, which is used to store a collection of characters surrounded by double quotes. Since String is a non-primitive data type, it can be accessed by methods from the String class.</p>

  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
