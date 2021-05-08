<!-- head-normal.php start -->
<?php
  $page = "Quiz 7";
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
   <form name="Quiz1" action="<?php echo $path; ?>results/grade_quiz_7.php" method="POST">
     Q1: Which statement is used with Scanner to see if a file has a new line? <br>
     <input type='radio' value ='a' id='a' name='q1' required>
       <label for='a'> A. <code>.hasNextLine();</code></label><br>
     <input type='radio' value ='b' id='b' name='q1'>
       <label for='b'> B. <code>.hasLine();</code></label><br>
     <input type='radio' value ='c' id='c' name='q1'>
       <label for='c'> C. <code>.nextLine;</code></label><br>
     <input type = 'radio' value = 'd' id = 'd' name = 'q1'>
     <label for = 'd'>D. <code>.hasNext();</code></label><br>

     <br><label for='q2'> Q2: How would you read in a new line using Scanner (scn)?</label><br>
     <input type='text' id='q2' name='q2' required>

     <br><br>Q3: True or false: Printwriter and Scanner are used for file writing. <br>
     <input type='radio' value ='a' id='a' name='q3' required>
     <label for='a'> A. True</label><br>
     <input type='radio' value ='b' id='b' name='q3'>
     <label for='b'> B. False</label><br>


     <br><br>Q4: What is the difference between plain text files and CSV files?<br>
     <input type='radio' value ='a' id='a' name='q4' required>
     <label for='a'> A. There are no differences. </label><br>
     <input type='radio' value ='b' id='b' name='q4'>
     <label for='b'> B. The lines and data in CSV files are comma separated.</label><br>
     <input type='radio' value ='c' id='c' name='q4'>
     <label for='c'> C. CSV files require you to split the line based on a delimeter.</label><br>
     <input type='radio' value ='d' id='d' name='q4'>
     <label for='d'> D. Both B and C </label><br>

     <br><br>Q5: Which of the following is not a method used to read from a Binary File? <br>
     <input type='radio' value ='a' id='a' name='q5' required>
     <label for='a'> A.<code>.readUTF()</code></label><br>
     <input type='radio' value ='b' id='b' name='q5'>
     <label for='b'> B. <code>.readInt()</code></label><br>
     <input type='radio' value ='c' id='c' name='q5'>
     <label for='c'> C. <code>.readString()</code></label><br>
     <input type='radio' value ='d' id='d' name='q5'>
     <label for='d'> D. <code>.readDouble()</code></label><br>  

     <br><input type="submit"  name="Submit"  value="Grade Quiz"  />
   </form>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end -->