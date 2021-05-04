<!-- head-normal.php start -->
<?php
  $page = "Quiz 5";
  $pagetype = "content";
  $path = '../../';
  $mydir1 = dirname(__FILE__);
  $myd = substr($mydir1, 40);
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
   <form name="Quiz1" action="<?php echo $path; ?>results/grade_quiz_5.php" method="POST">
     Q1: What do you have to import in order to access the ArrayList class?<br>
     <input type='radio' value ='a' id='a' name='q1' required>
       <label for='a'> A. <code>import java.io.*;</code></label><br>
     <input type='radio' value ='b' id='b' name='q1'>
       <label for='b'> B. <code>import java.util.*;</code></label><br>
     <input type='radio' value ='c' id='c' name='q1'>
       <label for='c'> C. <code>java.util.*;</code></label><br>
     <input type = 'radio' value = 'd' id = 'd' name = 'q1'>
     <label for = 'd'>D. <code>java.io.*;</code></label><br>

     <br><label for='q2'> Q2: What is the proper way instantiate an ArrayList of Strings called 'items'? (include semicolon)</label><br>
     <input type='text' id='q2' name='q2' required>

     <br><br>Q3: True or false: Arrays can grow or shrink in size. <br>
     <input type='radio' value ='a' id='a' name='q3' required>
     <label for='a'> A. True</label><br>
     <input type='radio' value ='b' id='b' name='q3'>
     <label for='b'> B. False</label><br>


     <br><br>Q4: Which is NOT a method used to access or modify ArrayLists? <br>
     <input type='radio' value ='a' id='a' name='q4' required>
     <label for='a'> A. <code>list.get(n);</code></label><br>
     <input type='radio' value ='b' id='b' name='q4'>
     <label for='b'> B. <code>list.set(n);</code></label><br>
     <input type='radio' value ='c' id='c' name='q4'>
     <label for='c'> C. <code>list.edit(n)</code></label><br>
     <input type='radio' value ='d' id='d' name='q4'>
     <label for='d'> D. <code>list.add(item);</code></label><br>

     <br><br>Q5: What is the index of the first item in an array or ArrayList? <br>
     <input type='radio' value ='a' id='a' name='q5' required>
     <label for='a'> A. 0</label><br>
     <input type='radio' value ='b' id='b' name='q5'>
     <label for='b'> B. 1</label><br>
     <input type='radio' value ='c' id='c' name='q5'>
     <label for='c'> C. It varies</label><br>

     <br><input type="submit"  name="Submit"  value="Grade Quiz"  />
   </form>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end -->