<!-- head-normal.php start -->
<?php
  $page = "Quiz 6 Results";
  $pagetype = "content";
  $path = '../';
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
    <?php
        //get answers
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];

        //check answers and post correct/not correct

        //q1
        switch($q1) {
            case 'a':
                $is1Correct = false;
                $reason1 = "This answer is NOT correct! Java will not recognize the method unless it is told it is from the Car class.";
                break;
            case 'b':
                $is1Correct = false;
                $reason1 = "This answer is NOT correct! The idea is there, but there needs to be another set of parenthesis.";
                break;
            case 'c':
                $is1Correct = true;
                $reason1 = "This answer is correct!";
                break;  
            case 'd':
                $is2Correct = false;
                $reason1 = "This answer is NOT correct! Since Car is the subclass,  that needs to be in the set of parenthesis, and vehicle1 is the object you are downcasting, not car1.";
            default:
                $is1Correct = false;
                $reason1 = "No answer selected.";
        }

        //q2
        if(is_null($q2)) {
           $is2Correct = false;
           $reason2 = "No answer input."; 
        } else {
            if($q2 == "public class Dog extends Animal") {
                $is2Correct = true;
                $reason2 = "This answer is correct!"; 
            } else {
                $is2Correct = false;
                $reason2 = "This answer is NOT correct! The correct answer is <code>public class Dog extends Animal</code>."; 
            }
        }

        //q3
        switch($q3) {
            case 'a':
                $is3Correct = false;
                $reason3 = "This answer is NOT correct. You can upcast without any consequences, like casting an int to a double.";
                break;
            case 'b':
                $is3Correct = true;
                $reason3 = "This answer is correct!";
                break;       
            default:
                $is3Correct = false;
                $reason3 = "No answer selected.";
        }

        //q4
        switch($q4) {
            case 'a':
                $is4Correct = true;
                $reason4 = "This answer is correct!";
                break;
            case 'b':
                $is4Correct = false;
                $reason4 = "This answer is NOT correct. Both methods do need to have the same name.";
                break;
            case 'c':
                $is4Correct = false;
                $reason4 = "This answer is NOT correct. Both methods do need to have the same type of parameters";
                break;
            case 'd':
                $is4Correct = false;
                $reason4 = "This answer is NOT correct! Both methods need to have the same number of parameters.";
                break;        
            default:
                $is4Correct = false;
                $reason4 = "No answer selected.";
        }

        //q1
        switch($q5) {
            case 'a':
                $is5Correct = false;
                $reason5 = "This answer is NOT correct! The attributes are not automatically inherited, and must be accessed using accessors when they are private.";
                break;
            case 'b':
                $is5Correct = false;
                $reason5 = "This answer is NOT correct! Typically, the attributes will be private, which requires the use of accessors.";
                break;
            case 'c':
                $is5Correct = false;
                $reason5 = "This answer NOT correct. The subclass is related to the superclass. You are correct about needed accessors.";
                break;  
            case 'd':
                $is5Correct = true;
                $reason5 = "This answer is correct!";
                break;
            default:
                $is5Correct = false;
                $reason5 = "No answer selected.";
        }

        //post answers to page
        echo "Question 1: " . $reason1 . "<br>";
        echo "Question 2: " . $reason2 . "<br>";
        echo "Question 3: " . $reason3 . "<br>";
        echo "Question 4: " . $reason4 . "<br>";
        echo "Question 5: " . $reason5 . "<br>";
    ?>
  </div>
</div>
    
    
  
<?php
  include($path.'assets/inc/footer-default.php');
?>
