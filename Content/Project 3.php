<?php
  $page = "Project 3: Car Database";
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
     <p>Databases are warehouses for information about something: names, items, addresses, or even cars. In this exercise, you are tasked with writing a Java program that will store entries. Keep in mind that ArrayLists are volatile (will be deleted when the program is terminated); we aren’t necessarily looking for the data to be saved, but this is a source for independent research should you want to incorporate data saving!</p>

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
<h3>Need a hint? Here's the key:<h3>
<code>
import java.util.*;<br><br>

public class Project3 {<br>
&emsp;&emsp;private String year;<br>
&emsp;&emsp;private String make;<br>
&emsp;&emsp;private String model;<br><br>

&emsp;&emsp;public Project3(String year, String make, String model) {<br>
&emsp;&emsp;&emsp;&emsp;this.year = year;<br>
&emsp;&emsp;&emsp;&emsp;this.make = make;<br>
&emsp;&emsp;&emsp;&emsp;this.model = model;<br>
&emsp;&emsp;}<br><br>
  
&emsp;&emsp;public String printCar() {<br>
&emsp;&emsp;&emsp;&emsp;return String.format("%s %s %s", year, make, model);<br>
&emsp;&emsp;}<br><br>

&emsp;&emsp;public static void main(String[] args) {<br>
&emsp;&emsp;&emsp;&emsp;Scanner scn = new Scanner(System.in);<br>
&emsp;&emsp;&emsp;&emsp;ArrayList<Project3> database = new ArrayList<Project3>();<br><br>

&emsp;&emsp;&emsp;&emsp;while(true) {<br>
&emsp;&emsp;&emsp;&emsp;System.out.print("Enter a command: \n\t 1 = Add New Car\n\t 2 = Print All Cars\n\t 3 = Exit\nChoice: ");<br>
&emsp;&emsp;&emsp;&emsp;int choice = scn.nextInt();<br><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if(choice == 1) {<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;scn.nextLine();<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.print("Enter Year: ");<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;String year = scn.nextLine();<br><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.print("Enter Make: ");<br><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;String make = scn.nextLine();<br><br>
      
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.print("Enter Model: ");<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;String model = scn.nextLine();<br><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Project3 ins = new Project3(year, make, model);<br><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("Adding Entry " + ins.printCar());<br><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;database.add(ins);<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else if (choice == 2) {<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;for (Project3 proj : database) {<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println(proj.printCar());<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}&emsp;&emsp;<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else if (choice == 3) {<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.exit(0);<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
&emsp;&emsp;&emsp;&emsp;}<br>
&emsp;&emsp;}<br>
}<br>
</code>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
