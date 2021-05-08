<!-- head-normal.php start -->
<?php
  $page = "Quiz 3";
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
   <form name="Quiz1" action="<?php echo $path; ?>results/grade_quiz_3.php" method="POST">
     Q1: What does an if statement do?<br>
     <input type='radio' value ='a' id='a' name='q1' required>
     <label for='a'> A. Check if boolean expression is true.</label><br>
     <input type='radio' value ='b' id='b' name='q1'>
     <label for='b'> B. Check if value is greater than another number.</label><br>
     <input type='radio' value ='c' id='c' name='q1'>
     <label for='c'> C. Check if boolean expression is false.</label><br>

     <br><label for='q2'> Q2: What is the proper way to declare a if-else statement?</label><br>
     <input type='text' id='q2' name='q2' required>

     <br><br>Q3: When using a "&&" in a boolean expression, when will it return a TRUE? <br>
     <input type='radio' value ='a' id='a' name='q3' required>
     <label for='a'> A. When left is true.</label><br>
     <input type='radio' value ='b' id='b' name='q3'>
     <label for='b'> B. When right is true.</label><br>
     <input type='radio' value ='c' id='c' name='q3'>
     <label for='c'> C. When both are false.</label><br>
     <input type='radio' value ='d' id='d' name='q3'>
     <label for='d'> D. When both are true.</label><br>

     <br><br>Q4: When does an or operator (||) return true? <br>
     <input type='radio' value ='a' id='a' name='q4' required>
     <label for='a'> A. When both are false.</label><br>
     <input type='radio' value ='b' id='b' name='q4'>
     <label for='b'> B. When right is true.</label><br>
     <input type='radio' value ='c' id='c' name='q4'>
     <label for='c'> C. When both are true.</label><br>
     <input type='radio' value ='d' id='d' name='q4'>
     <label for='d'> D. When left is false.</label><br>

     <br><br>Q5: Which of the following is an example of a boolean expression? <br>
     <input type='radio' value ='a' id='a' name='q5' required>
     <label for='a'> A. A equals B</label><br>
     <input type='radio' value ='b' id='b' name='q5'>
     <label for='b'> B. B = A</label><br>
     <input type='radio' value ='c' id='c' name='q5'>
     <label for='c'> C. !(C)</label><br>

     <br><input type="submit"  name="Submit"  value="Grade Quiz"  />
   </form>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end -->