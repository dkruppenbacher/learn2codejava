<?php
  $page = "Project 2: Simple Calculator with Error Checking";
  $pagetype = "content";
  $path = "../";
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
     <p>For our second project, we will be expanding our work from Project 1 by adding some additional Java technologies, including using the Scanner class to intake data, using if statements for input validation, and while loops for continuous operations. Most of our changes for this exercise will take place in the main method since our constructor and methods are suitable already.</p>

<p>Some helpful hints</p>
<ul>
  <li>Remember that methods with a type associated with them (ex. Double, int, String, etc.) must have a return associated with them. It could be as simple as returning an attribute or a calculation.</li>
  <li>In order to invoke a method on an Object, you must follow the following format
  <code>&lt;objectName&gt;.&lt;method&gt;(&lt;parameters, if required&gt;);</code></li>
  <li>Remember to import java.util.* in order to import the Scanner class</li>
  <li>A while(true) loop will run forever, you will need to terminate the program in order to escape the loop </li>
  <li>A switch statement case always requires a break, you won’t be able to get out of the switch statement otherwise </li>
  <li>String content equality should be checked by invoking the .equals() or .equalsIgnoreCase() methods on the String in question</li>
</ul>  
<h3>Code Shell:<h3>
<code>
import java.util.*;<br><br>


public class Project1 {<br>
&emsp;&emsp;//create an attribute, total, and make it of the double type<br><br>

&emsp;&emsp;//create a constructor that will set total equal to 0<br>
&emsp;&emsp;public Project1() {<br><br>

&emsp;&emsp;}<br><br><br>

&emsp;&emsp;/*<br>
&emsp;&emsp;&emsp;&emsp;Method Name: Add<br>
&emsp;&emsp;&emsp;&emsp;Parameters: a variable, value, of the double type<br>
&emsp;&emsp;&emsp;&emsp;Set total equal to total plus value<br>
&emsp;&emsp;&emsp;&emsp;return the total<br>
&emsp;&emsp;*/<br>
&emsp;&emsp;public double add() {<br><br>

&emsp;&emsp;}<br><br><br>

&emsp;&emsp;/*<br>
&emsp;&emsp;&emsp;&emsp;Method Name: subtract<br>
&emsp;&emsp;&emsp;&emsp;Parameters: a variable, value, of the double type<br>
&emsp;&emsp;&emsp;&emsp;Set total equal to total minus value<br>
&emsp;&emsp;&emsp;&emsp;return the total<br>
&emsp;&emsp;*/<br><br>

&emsp;&emsp;public double subtract() {<br><br>

&emsp;&emsp;}<br><br><br>

&emsp;&emsp;/*<br>
&emsp;&emsp;&emsp;&emsp;Method Name: Multiply<br>
&emsp;&emsp;&emsp;&emsp;Parameters: a variable, value, of the double type<br>
&emsp;&emsp;&emsp;&emsp;Set total equal to total times value<br>
&emsp;&emsp;&emsp;&emsp;return the total<br>
&emsp;&emsp;*/<br><br>

&emsp;&emsp;public double multiply() {<br><br>

&emsp;&emsp;}<br><br><br>

&emsp;&emsp;/*<br>
&emsp;&emsp;&emsp;&emsp;Method Name: divide<br>
&emsp;&emsp;&emsp;&emsp;Parameters: a variable, value, of the double type<br>
&emsp;&emsp;&emsp;&emsp;Set total equal to total divided by value<br>
&emsp;&emsp;&emsp;&emsp;return the total<br>
&emsp;&emsp;*/<br><br>

&emsp;&emsp;public double divide() {<br><br>

&emsp;&emsp;}<br><br><br>
  
&emsp;&emsp;public double getTotal() {<br><br>
&emsp;&emsp;&emsp;&emsp;return total;<br>
&emsp;&emsp;}<br><br><br>

&emsp;&emsp;//create the main method<br>
&emsp;&emsp;public static void main(String[] args) {<br>
&emsp;&emsp;&emsp;&emsp;//create an instance of the Project1 constructor<br>
&emsp;&emsp;&emsp;&emsp;Project1 pr1 = new Project1();<br>
&emsp;&emsp;&emsp;&emsp;//Create a scanner object, scn, and set it to accept all System input (System.in)<br><br>
      
&emsp;&emsp;&emsp;&emsp;while(true) {<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.print("Enter an Operation (ADD, SUB, MUL, DIV): ");<br><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;//using the Scanner object we created above, read in a String object, set it equal to op<br><br><br>


&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;//using String validation, make sure that the String equals one of the four options mentioned above<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;//if it doesn't, exit the program<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if () {<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.print("Enter a Number: ");<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;//using the Scanner object we created above, read in a double object, set it equal to num<br><br><br>


&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;//using a Switch Statement, determine which operation to complete<br><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;switch (op) {<br>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 'ADD':<br>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;//invoke the add method<br>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;//break out of the switch<br>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 'SUB':<br>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;//invoke the subtract method<br>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;//break out of the switch<br>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 'MUL':<br>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;//invoke the multiply method<br>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;//break out of the switch<br>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 'DIV':<br>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;//invoke the divide method<br>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;//break out of the switch  <br> 
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br><br>
              
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("Total: " + pr1.getTotal());<br><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("ERROR: Please Pick from one of the Codes above");<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.exit(0);<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br><br>
&emsp;&emsp;&emsp;&emsp;}<br><br>
&emsp;&emsp;}<br><br>
}<br>

</code>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
