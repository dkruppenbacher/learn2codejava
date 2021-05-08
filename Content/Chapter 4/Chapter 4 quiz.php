<!-- head-normal.php start -->
<?php
  $page = "Quiz 4";
  $pagetype = "content";
  $path = '../../';
  $mydir1 = dirname(__FILE__);
  $myd = substr($mydir1, 38);
  include($path.'assets/inc/head-default.php');
?>
<!-- head-normal.php end-->
<body>
<!-- nav-content-normal.php start -->
<?php
  include($path.'assets/inc/nav-content-default.php');
?>
<!-- nav-content-normal.php end -->
<!-- sideNav-normal.php start -->
<?php
  include($path.'assets/inc/sideNav-default.php');
?>
<!-- sideNav-normal.php end -->
  <div class='pagecontent'>
   <form name="Quiz1" action="<?php echo $path; ?>results/grade_quiz_4.php" method="POST">
     Q1: Which of the following is the correct instantiation of a for loop that will execute exactly 10 times?<br>
     <input type='radio' value ='a' id='a' name='q1' required>
       <label for='a'> A. <code>for(int i = 0; i &lt; 10) {}</code></label><br>
     <input type='radio' value ='b' id='b' name='q1'>
       <label for='b'> B. <code>for(int i = 0; i &lt; 10; i++) {}</code></label><br>
     <input type='radio' value ='c' id='c' name='q1'>
       <label for='c'> C. <code>for(i &lt; 10; i++) {}</code></label><br>
     <input type = 'radio' value = 'd' id = 'd' name = 'q1'>
     <label for = 'd'>D. <code>for(int i = 1; i &lt; 10; i++) {}</code></label><br>

     <br><label for='q2'> Q2: True or False: An infinite loop occurs when the boolean only returns false.</label><br>
     <input type='radio' value ='a' id='a' name='q2' required>
     <label for='a'> A. True</label><br>
     <input type='radio' value ='b' id='b' name='q2'>
     <label for='b'> B. False</label><br>

     <br><br>Q3: True or False: It is possible for a do-while loop to never execute. <br>
     <input type='radio' value ='a' id='a' name='q3' required>
     <label for='a'> A. True</label><br>
     <input type='radio' value ='b' id='b' name='q3'>
     <label for='b'> B. False</label><br>


     <br><br>Q4: Which of these is NOT a type of while loop?<br>
     <input type='radio' value ='a' id='a' name='q4' required>
     <label for='a'> A. Input Validation  </label><br>
     <input type='radio' value ='b' id='b' name='q4'>
     <label for='b'> B. Counting</label><br>
     <input type='radio' value ='c' id='c' name='q4'>
     <label for='c'> C. Boolean Test</label><br>
     <input type='radio' value ='d' id='d' name='q4'>
     <label for='d'> D. Sentinel Loop</label><br>

     <br><br>Q5: In a nested for loop, when is the inner loop executed?<br>
     <input type='radio' value ='a' id='a' name='q5' required>
     <label for='a'> A. The inner loop is executed once, only when the program loops through the outer loop for the first time. </label><br>
     <input type='radio' value ='b' id='b' name='q5'>
     <label for='b'> B. The inner loop is executed after the outer loop.</label><br>
     <input type='radio' value ='c' id='c' name='q5'>
     <label for='c'> C. The inner loop is fully executed each time the program loops through the outer loop.</label><br>

     <br><input type="submit"  name="Submit"  value="Grade Quiz"  />
   </form>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end -->