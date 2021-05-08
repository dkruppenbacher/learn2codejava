<?php
  $page = "Lesson 6.1";
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
      <h2>Inheritance Overview</h2>
      <p><strong>Important terms:</strong></p>
      <ul>
        <li>Superclass: The class whose features are inherited is known as the superclass (or as a base class or parent class).</li>
        <li>Subclass: The class that inherits the other class is known as the subclass (or a derived class, extended class, or child class). The subclass can add it's own fields and methods in addition to the superclass fields and methods.</li>
        <li>Reusability: Inheritance supports the concept of "reusability", i.e, when we want to create a new class and there is already a class that inclded some of the code that we want we can base our new class off of the existing class. By doing this, we are reusing the fields and methods of the existing class.</li>
      </ul>
      <p>How do we use inheritance? It is implemented simply with the keyword "extends".</p>
      <code>
        class Subclass extends Superclass { <br>
          &emsp;&emsp; // methods and fields<br>
          } <br>
      </code><br>
      <p>Inheritence is a core concept of <strong>Object Oriented Programming (OOP). To better understand both inheritance, here are the main principles of OOP.</strong></p>
      <ul>
        <li>Abstraction – producing a simplified representation of a real-world object that focuses only on the important parts: ShoppingList, BankAccount, Student, etc. Classes are abstractions of real world items or ideas.</li>
        <li>Encapsulation – Safeguarding an object by declaring attributes as private and channeling access through accessors and mutators, hiding the information (attributes) about an object inside the class. Using Encapsulation provides access to only the attributes that we decide are appropriate. Some may have only accessors, and no mutators.</li>
        <li>Inheritance – a mechanism that allows creating one class from another via ‘specialization.’ The new class has all the attributes and behaviors of the original class, but may have additional attributes and behaviors.</li>
        <li>There are also two types of relationships between classes in Java</li>
        <ul>
            <li>has-a relationships occur when an attribute of one class is an object of another class the ShoppingList class that used ArrayLists for the items included an attribute called list that was an ArrayList of Strings. We say that ShoppingList ‘has a(n)’ ArrayList object. </li> 
            <li>is-a relationships occur when one class is a specialization of another. The specialization is called a subclass of the other class, which is called the super class.</li>
        </ul>
      </ul>
      <p>The next lesson will take you through a full example of inheritance with a superclass and a subclass.</p>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
