<?php
  $page = "Lesson 4.2";
  $pagetype = "content";
  $path = "../../";
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
      <h2>The While Loop</h2>
      <p>While loops are used to repeat lines of code based on a boolean expression. The form of a while loop is as follows:</p>
      <code>
        while(BOOLEAN_EXPRESSION) {<br>
        &emsp;&emsp;STATEMENTS <br>
        }<br>
        NEXT-STATEMENT<br>
      </code><br>
      <ul>
        <li>The BOOLEAN-EXPRESSION determines whether the loop runs or not. If the boolean is false to begin with, the statements are never executed. They are only executed while the boolean returns true.</li>
        <li>If the boolean is true at the beginning, the statements are ran through, and then the boolean is checked again. If it's still true, the statements are ran again, and the cycle repeats until the boolean is false.</li>
        <li>When the boolean returns false, the NEXT-STATEMENT is executed and the program continues.</li>
        <li>At some point, the boolean must return false, otherwise the program will be stuck in an infinite loop, which means the program will continue o execute the statements forever.</li>      
      </ul>
      
      <p>Here are three examples of while loops:</p>
      <code>
        //Assume 'in' is a Scanner <br>
        double gpa = 0.0;<br>
        double totalGpa = 0.0;<br>
        int count = 0;<br>
        <br>
        while(gpa >= 0 || gpa &lt; 4) {<br>
        &emsp;&emsp;System.out.print("Enter a GPA (&lt;0 to stop): "); <br>
        &emsp;&emsp;gpa = in.nextDouble();<br>
        &emsp;&emsp;//Only add to count and GPA if valid one is entered.<br>
        &emsp;&emsp;if(gpa &lt;= 0 || gpa > 4){<br>
        &emsp;&emsp;&emsp;&emsp;totalGpa += gpa;<br>
        &emsp;&emsp;&emsp;&emsp;count++;<br>
        &emsp;&emsp;}<br>
        }<br>
        double average = (totalGpa / count); <br>
      </code><br>
      <p>This is an example of a <strong>sentinel loop</strong> loop, which means that it continues until a specific value is read or entered in, which then causes the loop to terminate. In this specific example, the sentinels are any values less than 0 and greater than 4. When that value is entered, the program leaves the loopa and calculates the average of the entered values that are NOT sentinel values.</p>
      <code>
        boolean keepGoing = true; <br><br>
        while(keepGoing) {<br>
        &emsp;&emsp;System.out.print("Enter an integer between 1 and 10: "); <br>
        &emsp;&emsp;number = in.nextInt();<br>
        &emsp;&emsp;if(number &lt; 1 || number > 10) { <br>
        &emsp;&emsp;&emsp;&emsp;keepGoing = false;<br>
        &emsp;&emsp;}<br>
        &emsp;&emsp;else{<br>
        &emsp;&emsp;&emsp;&emsp;total += number;<br>
        &emsp;&emsp;}<br>
        }<br>
      </code><br>
      <p>This is an example of an <strong>input validation loop</strong>. The control variable is keepGoing, and it is initially set to true to ensure the loop executes at least once. The loop tests the user input, and if it is invalid, keepGoing is set to false and the input is never added to the total. If the input is valid, it is added to the total and the loop runs again.</p>
      <code>
        int count = 0;<br>
        while(count != 5){<br>
        &emsp;&emsp;System.out.println(count);<br>
        &emsp;&emsp;count++;<br>
        }<br>
      </code><br>
      <p>This is a very basic example of a <strong>counting loop</strong>. It is used when the loop needs to be executed a specific amount of times. For example, this loop prints out the numbers 0 through 4, and then stops when the count gets to 5.</p><br>
      
      <h2>The Do-While Loop</h2>
      <p>This loop is not used as often as the other while loops. It is just like the whole loop, but the boolean is tested after the first iteration through the loop. This means that it <strong>ALWAYS</strong> executes at least one time.  Here is the basic syntax:</p>
      <code>
        do{<br>
        &emsp;&emsp;STATEMENTS<br>
        }<br>
        while(BOOLEAN-EXPRESSION);<br>
      </code><br>
      <p>This loop could be good for input validation, because it must read in the input before testing it. </p>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->