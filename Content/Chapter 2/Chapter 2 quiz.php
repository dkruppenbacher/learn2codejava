<!-- head-normal.php start -->
<?php
  $page = "Quiz 2";
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
   <form name="Quiz1" action="<?php echo $path; ?>results/grade_quiz_2.php" method="POST">
     Q1: What is an object?<br>
     <input type='radio' value ='a' id='a' name='q1' required>
     <label for='a'> A. The blueprint of the program.</label><br>
     <input type='radio' value ='b' id='b' name='q1'>
     <label for='b'> B. A descriptor of the class.</label><br>
     <input type='radio' value ='c' id='c' name='q1'>
     <label for='c'> C. Where the class state and behavior is stored.</label><br>

     <br><label for='q2'> Q2: What is the proper way to instantiate a Scanner object?</label><br>
     <input type='text' id='q2' name='q2' required>

     <br><br>Q3: How can you read a full line of input? <br>
     <input type='radio' value ='a' id='a' name='q3' required>
     <label for='a'> A. scn.next()</label><br>
     <input type='radio' value ='b' id='b' name='q3'>
     <label for='b'> B. scn.nextDouble()</label><br>
     <input type='radio' value ='c' id='c' name='q3'>
     <label for='c'> C. scn.nextLine()</label><br>
     <input type='radio' value ='d' id='d' name='q3'>
     <label for='d'> D. scn.nextInt()</label><br>

     <br><br>Q4: Which of the following is NOT a Primitive datatype?<br>
     <input type='radio' value ='a' id='a' name='q4' required>
     <label for='a'> A. Boolean</label><br>
     <input type='radio' value ='b' id='b' name='q4'>
     <label for='b'> B. Int</label><br>
     <input type='radio' value ='c' id='c' name='q4'>
     <label for='c'> C. Char</label><br>
     <input type='radio' value ='d' id='d' name='q4'>
     <label for='d'> D. Array</label><br>

     <br><br>Q5: Which of the following is a valid example of <code>System.out.printf()</code>? <br>
     <input type='radio' value ='a' id='a' name='q5' required>
     <label for='a'> A. <code>%s,4.0</code></label><br>
     <input type='radio' value ='b' id='b' name='q5'>
     <label for='b'> B. <code>%1.5f</code></label><br>
     <input type='radio' value ='c' id='c' name='q5'>
     <label for='c'> C. <code>%3.2d</code></label><br>

     <br><input type="submit"  name="Submit"  value="Grade Quiz"  />
   </form>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end -->