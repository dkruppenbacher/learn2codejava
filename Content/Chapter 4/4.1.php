<?php
  $page = "Lesson 4.1";
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
      <h2>The For Loop</h2>
      <p>The 'for loop' is a generic counting loop, and it is used a lot when you need to execute the same code repeatedly. Here is the syntax of a typical for loop: </p>
      <code>
        for(INITIALIZATION; BOOLEAN-EXPRESSION; CONTINUATION) {<br>
        &emsp;&emsp;STATEMENTS; <br>
        }<br>
      </code><br>
      <p>'For' is a keyword, and then there are three statements inside the parenthesis, which are always separated by semicolons.</p>
      <ul>
        <li>The INITIALIZATION is where the loop variable is declared, as in <code> int count = 0;</code> This is executed only once, before the statements are executed.</li>
        <li>The BOOLEAN_EXPRESSION is tested at each iteration of the loop. If it is true, the statements are executed. If it is false, the program exits the loop.</li>
        <li>After the statements are executed each time, the CONTINUATION is executed. Typically, this either increments or decrements the loop variable.</li>
        <li>After the CONTINUATION executes, the BOOLEAN-EXPRESSION is tested, and the cycle, or loop, continues until the BOOLEAN-EXPRESSION returns false.</li>
      </ul>
      <p>Here is a simple exercise that will demonstrate the for loop. Write a class that prints out the numbers 1 through 10, and their squares. </p>
      <code>
        for(int count = 1; count &lt;= 10; count++) { <br>
          &emsp;&emsp;// This will print the count, followed by a comma and a space, then the square of the count. <br>
          &emsp;&emsp;System.out.println(count + ", " + (count * count)); <br>
          }<br>
      </code><br>
      <p>The output is the following: <br>1, 1<br>2, 4<br>3, 9<br>4, 16<br>5, 25<br>
                                        6, 36<br>7, 49<br>8, 64<br>9, 81<br>10, 100<br></p>
      <h2>The Nested For Loop</h2>
      <p>The 'Nested For Loop' is where there is an inner for loop inside, or nested, the outer for loop. During each iteration of the outer loop, the entire inner loop is executed. Therefore, if the outer loop runs 5 times, the inner loop is fully executed 5 times. Here is a basic example:</p>
      <code>
        // outer loop instantiation <br>
        for(int i = 1; i &lt;= 5; i++){<br>
          &emsp;&emsp;// Print out each time the program loops through the outer loop<br>
          &emsp;&emsp;System.out.print("\nOuter loop round: " + i + " ");<br>
          &emsp;&emsp;// inner loop instantiation<br>
          &emsp;&emsp;for(int j = 1; j &lt;= i; j++) {<br>
          &emsp;&emsp;&emsp;&emsp;System.out.print("*"); <br>
          &emsp;&emsp;}<br>
          }<br>
      </code><br>
      <p>The outer loop prints out which iteration it is at each time the program loops through it. Then, the program fully executes the inner loop, which prints a star based on the current iteration of the outer loop. For example, when i = 3 in the outer loop, the inner loop will print 3 stars, and then the program exits the inner loop and goes back to the next outer loop iteration, and so on. Here is the output:</p>
      <p>Outer loop round: 1 *<br>Outer loop round: 2 **<br>Outer loop round: 3 ***<br>Outer loop round: 4 ****<br>Outer loop round: 5 *****</p>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
