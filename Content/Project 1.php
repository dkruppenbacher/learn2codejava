<?php
  $page = "Project 1: Simple Calculator";
  $pagetype = "content";
  $path = "../";
  $mydir1 = dirname(__FILE__);
  $myd = substr($mydir1, 40);
  include($path.'assets/inc/head-default.php');
?>
<body>
<?php
  include($path.'assets/inc/nav-content-default.php');
  include($path.'assets/inc/sideNav-default.php');
?>
  <div class='pagecontent'>
     <p>A calculator is a piece of hardware and/or software tasked with computing a number given another number. In its simplest form, a calculator is a simple cumulative device used for number manipulation. In this first project, you will be tasked with creating a simple four function calculator and manipulating an attribute, called total.</p>

<p>Some helpful hints</p>
<ul>
<li>Remember that methods with a type associated with them (ex. Double, int, String, etc.) must have a return associated with them. It could be as simple as returning an attribute or a calculation.</li>
<li>In order to invoke a method on an Object, you must follow the following format
<code>&lt;objectName&gt;.&lt;method&gt;(&lt;parameters, if required&gt;);</code></li>
<h3>Code Shell:<h3>
<code>public class Project1 {<br>
   &emsp;&emsp;//create an attribute, total, and make it of the double type<br><br>

   &emsp;&emsp;//create a constructor that will set total equal to 0<br>
   &emsp;&emsp;public Project1() {<br><br>

   &emsp;&emsp;}<br><br>

   &emsp;&emsp;/*<br>
       &emsp;&emsp;&emsp;&emsp;Method Name: Add<br>
       &emsp;&emsp;&emsp;&emsp;Parameters: a variable, value, of the double type<br>
       &emsp;&emsp;&emsp;&emsp;Set total equal to total plus value<br>
       &emsp;&emsp;&emsp;&emsp;return the total<br>
    &emsp;&emsp;*/<br>
   &emsp;&emsp;public double add() {<br><br>

   &emsp;&emsp;}<br><br>

   &emsp;&emsp;/*<br>
       &emsp;&emsp;&emsp;&emsp;Method Name: subtract<br>
       &emsp;&emsp;&emsp;&emsp;Parameters: a variable, value, of the double type<br>
       &emsp;&emsp;&emsp;&emsp;Set total equal to total minus value<br>
       &emsp;&emsp;&emsp;&emsp;return the total<br>
    &emsp;&emsp;*/<br>
   &emsp;&emsp;public double subtract() {<br><br>

   &emsp;&emsp;}<br><br>

   &emsp;&emsp;/*<br>
       &emsp;&emsp;&emsp;&emsp;Method Name: Multiply<br>
       &emsp;&emsp;&emsp;&emsp;Parameters: a variable, value, of the double type<br>
       &emsp;&emsp;&emsp;&emsp;Set total equal to total times value<br>
       &emsp;&emsp;&emsp;&emsp;return the total<br>
    &emsp;&emsp;*/<br>
   &emsp;&emsp;public double multiply() {<br><br>

   &emsp;&emsp;}<br><br>

   &emsp;&emsp;/*<br>
       &emsp;&emsp;&emsp;&emsp;Method Name: divide<br>
       &emsp;&emsp;&emsp;&emsp;Parameters: a variable, value, of the double type<br>
       &emsp;&emsp;&emsp;&emsp;Set total equal to total divided by value<br>
       &emsp;&emsp;&emsp;&emsp;return the total<br>
    &emsp;&emsp;*/<br>
   &emsp;&emsp;public double divide() {<br><br>

   &emsp;&emsp;}<br><br>
  
   &emsp;&emsp;//create the main method<br>
   &emsp;&emsp;public static void main(String[] args) {<br>
       &emsp;&emsp;&emsp;&emsp;//create an instance of the Project1 constructor<br><br>

&emsp;&emsp;&emsp;&emsp;//create a parameter, summation, of the double type<br>
&emsp;&emsp;&emsp;&emsp;//set summation equal to the invocation of the add method on the instance of Project1, add 5<br>
&emsp;&emsp;&emsp;&emsp;// print out summation on its own line<br><br>

&emsp;&emsp;&emsp;&emsp;//create a parameter, product, of the double type<br>
&emsp;&emsp;&emsp;&emsp;//set product equal to the invocation of the multiply method on the instance of Project1, multiply by 2, print the output<br>
&emsp;&emsp;&emsp;&emsp;// print out product on its own line<br><br>

&emsp;&emsp;&emsp;&emsp;//create a parameter, difference, of the double type<br>
&emsp;&emsp;&emsp;&emsp;//set difference equal to the invocation of the instance of Project1, subtract 2, print the output<br>
&emsp;&emsp;&emsp;&emsp;// print out difference on its own line<br><br>

&emsp;&emsp;&emsp;&emsp;//create a parameter, quotient, of the double type<br>
&emsp;&emsp;&emsp;&emsp;//set quotient equal to the invocation of the instance of Project1, divide by 2, print the output<br>
&emsp;&emsp;&emsp;&emsp;// print out quotient on its own line<br><br>

&emsp;&emsp;&emsp;&emsp;//final answer should be 4<br><br>

   &emsp;&emsp;}<br>
}</code>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
