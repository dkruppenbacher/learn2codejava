<?php
  $page = "Lesson 6.2";
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
      <h2>Inheritance Example</h2>
      <p>The DMV registers several kinds of vehicles, including cars, trucks, trailers, and boats. All of these have some things in common, such as the license plate number, the name of the registrant (and other info), and the date of expiration. However, the different kinds of vehicles also have differing information. For example, trucks and trailers have a MGW (maximum gross weight – weight of vehicle + payload) and cars have a passenger limit, that is different from trailers. To represent this, we will create a superclass, Vehicle, with the common attributes, and a group of sub classes for each kind.</p>
      <code>
        import java.util.*; <br>
        public class Vehicle {<br>
          &emsp;&emsp;private String registrantName;<br>
 	      &emsp;&emsp;private String registrantAddress;<br>
 	      &emsp;&emsp;private String licensePlate;<br>
 	      &emsp;&emsp;private GregorianCalendar	expiration;<br>
 	      &emsp;&emsp;private String status = "";<br><br>
          
 	      &emsp;&emsp;public Vehicle(String _name, String _address, String _plate,
     	  GregorianCalendar _expire) {<br>

     	  &emsp;&emsp;&emsp;&emsp;registrantName = _name;<br>
     	  &emsp;&emsp;&emsp;&emsp;registrantAddress = _address;<br>
     	  &emsp;&emsp;&emsp;&emsp;licensePlate = _plate;<br>
     	  &emsp;&emsp;&emsp;&emsp;expiration = _expire;<br>
     	  &emsp;&emsp;&emsp;&emsp;status = "active";<br>
 	      &emsp;&emsp;}<br><br>
          
          &emsp;&emsp;// accessors and mutators<br>
 	      &emsp;&emsp;public void renew(GregorianCalendar newDate) {<br>
     	  &emsp;&emsp;&emsp;&emsp;expiration = newDate;<br>
     	  &emsp;&emsp;&emsp;&emsp;status = "active";<br>
 	      &emsp;&emsp; }<br><br>
 	      &emsp;&emsp;public void surrender() {<br>
     	  &emsp;&emsp;&emsp;&emsp;status = "surrendered";<br>
 	      &emsp;&emsp; }<br><br>
	      &emsp;&emsp;public String toString() {<br>
     	  &emsp;&emsp;&emsp;&emsp;return registrantName + "\n" +<br>
          &emsp;&emsp;&emsp;&emsp;registrantAddress + "\n" +<br>
          &emsp;&emsp;&emsp;&emsp;licensePlate + "\n" +<br>
          &emsp;&emsp;&emsp;&emsp;status;<br>
 	      &emsp;&emsp;}<br>
        } // end of class Vehicle<br>
      </code><br>
      <p>Now, here is a subclass. We will now specialize the very general Vehicle class to represent a car. For a car, we will add a make, model, and year, plus a passenger limit. We do this by "extending" Vehicle.</p>
      <code>
      public class Car extends Vehicle {
        &emsp;&emsp;// registrantName, registrantAddress, licensePlate, expiration, and status <br>
        &emsp;&emsp;// are all inherited from Vehicle<br>
        &emsp;&emsp;private String make;<br>
        &emsp;&emsp;private String model;<br>
        &emsp;&emsp;private int year;<br>
        &emsp;&emsp;private int passengerLimit;<br><br>

        &emsp;&emsp;public Car(String _name, String _addr, String _plate,
        &emsp;&emsp;&emsp;&emsp;Calendar _expiration, String _make, String _model,
            int _year, int _passengers) {<br>

        &emsp;&emsp;&emsp;&emsp;super(_name, _addr, _plate, _expiration);<br>
        &emsp;&emsp;&emsp;&emsp;make = _make;<br>
        &emsp;&emsp;&emsp;&emsp;model = _model;<br>
        &emsp;&emsp;&emsp;&emsp;year = _year;<br>
        &emsp;&emsp;&emsp;&emsp;passengerLimit = _passengers;<br>
        &emsp;&emsp;}<br><br>
          
        &emsp;&emsp;// add accessors and mutators for make, model, year, and passengerLimit<br>
        
        
        &emsp;&emsp;public String toString() {<br>
        &emsp;&emsp;&emsp;&emsp;return year + " " + make + " " + model + "\n" +<br>
        &emsp;&emsp;&emsp;&emsp; "Registered to:\n   " +<br>
        &emsp;&emsp;&emsp;&emsp;getRegistrantName() + "\n   " +<br>
        &emsp;&emsp;&emsp;&emsp;getRegistrantAddress() + "\n" +<br>
        &emsp;&emsp;&emsp;&emsp;getLicensePlate() + "  Limit: " +<br>
        &emsp;&emsp;&emsp;&emsp;passengerLimit + " passengers";<br>
        &emsp;&emsp;}<br>
      }<br>
      </code><br>
      <p>The only new methods in the Car class are the mutators and accessors, everything else was inherited from Vehicle. In order to access the Vehicle attributes, we must call their respective accessors, because attributes are declares as 'private' to Vehicle.</p>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
