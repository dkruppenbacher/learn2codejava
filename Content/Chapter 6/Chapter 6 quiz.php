<!-- head-normal.php start -->
<?php
  $page = "Quiz 6";
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
   <form name="Quiz1" action="<?php echo $path; ?>results/grade_quiz_6.php" method="POST">
     Q1: How do you correctly access a method when you downcast from the subclass Car (car1) to the superclass Vehicle (vehicle1)?<br>
     <input type='radio' value ='a' id='a' name='q1' required>
       <label for='a'> A. <code>vehicle1.getModel();</code></label><br>
     <input type='radio' value ='b' id='b' name='q1'>
       <label for='b'> B. <code>(Car) vehicle1.getModel();</code></label><br>
     <input type='radio' value ='c' id='c' name='q1'>
       <label for='c'> C. <code>((Car)vehicle1).getModel();</code></label><br>
     <input type = 'radio' value = 'd' id = 'd' name = 'q1'>
     <label for = 'd'>D. <code>((Vehicle)car1).getModel()</code></label><br>

     <br><label for='q2'> Q2: How would you write the class instantiation for a subclass 'Dog' that extends the superclass 'Animal'?</label><br>
      <input type='text' id='q2' name='q2' required>

     <br><br>Q3: True or False: Upcasting causes information to be lost. <br>
     <input type='radio' value ='a' id='a' name='q3' required>
     <label for='a'> A. True</label><br>
     <input type='radio' value ='b' id='b' name='q3'>
     <label for='b'> B. False</label><br>


     <br><br>Q4: Which of these is NOT needed to override a method?<br>
     <input type='radio' value ='a' id='a' name='q4' required>
     <label for='a'> A. The method that overrides must have an 'override' keyword.  </label><br>
     <input type='radio' value ='b' id='b' name='q4'>
     <label for='b'> B. Both methods have same name.</label><br>
     <input type='radio' value ='c' id='c' name='q4'>
     <label for='c'> C. Both methods contain the same type of parameters.</label><br>
     <input type='radio' value ='d' id='d' name='q4'>
     <label for='d'> D. Both methods contain same number of parameters.</label><br>

     <br><br>Q5: Do you have to use accessors in the subclass to access attributes from the superclass?<br>
     <input type='radio' value ='a' id='a' name='q5' required>
     <label for='a'> A. No, they are automatically inherited. </label><br>
     <input type='radio' value ='b' id='b' name='q5'>
     <label for='b'> B. No, because the attributes in a superclass are public.</label><br>
     <input type='radio' value ='c' id='c' name='q5'>
     <label for='c'> C. Yes, because the subclass has no relation to the superclass.</label><br>
     <input type = 'radio' value = 'd' id = 'd' name = 'q5' required>
     <label for ='d'>D. Yes, because the attributes in the superclass are private.</label><br>

     <br><input type="submit"  name="Submit"  value="Grade Quiz"  />
   </form>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end -->