<!-- head-normal.php start -->
<?php
  $page = "Quiz 1";
  $pagetype = "content";
  $path = '../';
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
<div class='page'>
  <p class='breadcrumbs'>Content > Chapter 1 > Quiz</p>
  <h1>Chapter 1 Quiz</h1>
  <div class='pagecontent'>
   <form name="Quiz1" action="grade_quiz.php" method="POST">
     Q1: What is a .java file?<br>
     <input type='radio' value ='a' id='a' name='q1' required>
     <label for='a'> A. The file where the code is written.</label><br>
     <input type='radio' value ='b' id='b' name='q1'>
     <label for='b'> B. A configuration file for the compiler.</label><br>
     <input type='radio' value ='c' id='c' name='q1'>
     <label for='c'> C. The compiled code.</label><br>

     <br><label for='q2'> Q2: What is the proper way to define a main method?</label><br>
     <input type='text' id='q2' name='q2' required>

     <br><br>Q3: How can you declare a multiline comment in Java? <br>
     <input type='radio' value ='a' id='a' name='q3' required>
     <label for='a'> A. /** (text) */</label><br>
     <input type='radio' value ='b' id='b' name='q3'>
     <label for='b'> B. /* (text) */</label><br>
     <input type='radio' value ='c' id='c' name='q3'>
     <label for='c'> C. // (text)</label><br>
     <input type='radio' value ='d' id='d' name='q3'>
     <label for='d'> D. Both A and B</label><br>

     <br><br>Q4: Which of the following is NOT a JavaDoc comment tag? (Hint: Use the JavaDoc Documentation) <br>
     <input type='radio' value ='a' id='a' name='q4' required>
     <label for='a'> A. @since</label><br>
     <input type='radio' value ='b' id='b' name='q4'>
     <label for='b'> B. @name</label><br>
     <input type='radio' value ='c' id='c' name='q4'>
     <label for='c'> C. @param</label><br>
     <input type='radio' value ='d' id='d' name='q4'>
     <label for='d'> D. @author</label><br>

     <br><br>Q5: Which of the following is an example of "Camel Case"? <br>
     <input type='radio' value ='a' id='a' name='q5' required>
     <label for='a'> A. camelCase</label><br>
     <input type='radio' value ='b' id='b' name='q5'>
     <label for='b'> B. CamelCase</label><br>
     <input type='radio' value ='c' id='c' name='q5'>
     <label for='c'> C. Camelcase</label><br>

     <br><input type="submit"  name="Submit"  value="Grade Quiz"  />
   </form>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end -->
   
    
    
 </body>
 </html>