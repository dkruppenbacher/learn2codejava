<?php
  $page = "Lesson 6.3";
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
      <h2>Overriding Methods</h2>
        <p>Overloaded methods, as we have seen, have the same name as one another, but differ in the number and types of their parameters. With overridden methods, we replace a method in the super class with a new version of it in the subclass. For this to be overriding:</p>
        <ul>
            <li>Both methods must have the same name</li>
            <li>Both methods must have the same number of parameters</li>
            <li>The parameters for both classes mustbe of the same type</li>
        </ul>
        <p>A method in a subclass may 'overload' a method in a superclass, but for it to be overloading, the number and types of the parameters must differ.</p><br>
      
      <h2>Casting and Inheritance</h2>
      <h3>Upcasting</h3>
      <p>Any subclass (e.g Car), or sub-subclass, can be cast as any of it's superclasses (e.g Vehicle). This is an example of upcasting (like int to double), which is allowed since no information is lost. Everything in a superclass is also in the subclass. So if we have: <br>
          &emsp;&emsp;<code>Car car2 = new Car(...);</code><br>
          &emsp;&emsp;<code>Vehicle vehicle1;</code><br>
      We can write: <br>
          &emsp;&emsp;<code>vehicle1 = car2;</code></p>
      <h3>Downcasting</h3>
      <p>Converting to a superclass (e.g Vehicle) has a weird result. If we do this, it would seem to lose the additional attributes or methods of the subclass. For example:<br>
          &emsp;&emsp;<code>>Vehicle vehicle2 = new Car("Name", "Address", "ABC123", "June 2021", "Ford", "Edge", 2011, 5);</code><br>
      is allowed, but we cannot call the methods specific to the Car class, such as the accessors and mutators for make, model, year and passenger limit, which are all created in the Car class.</p>
      <p>Luckily, Java "knows" that vehicle2 is actually an object from the Car class, and you caan access the subclass methods by doing the following: <br>
      &emsp;&emsp;<code>((Car)vehicle2).getModel();</code><br>
      You cannot downcast an object to a class it does not belong to. This will cause a Class Cast Error. To avoid this error, you could use the "instanceof" operator. This can be thought of as an is-a(n) operator, which tests if the given object created is from the given class.</p>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
