<!-- head-normal.php start -->
<?php
  $page = "Quiz 4 Results";
  $pagetype = "content";
  $path = '../';
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
                $reason1 = "This answer is NOT correct! This instantiation is missing the continuation statement.";
                break;
            case 'b':
                $is1Correct = true;
                $reason1 = "This answer is correct!";
                break;
            case 'c':
                $is1Correct = false;
                $reason1 = "This answer is NOT correct! The instantiation is missing the initialization statement";
                break;  
            case 'd':
                $is2Correct = false;
                $reason1 = "This answer is NOT correct! It will only loop through 9 times when i = 1 and i < 10.";
            default:
                $is1Correct = false;
                $reason1 = "No answer selected.";
        }

        //q2
        switch($q2) {
            case 'a':
                $is2Correct = false;
                $reason2 = "This answer is NOT correct. Infinite loops occur when the boolean is stuck at true.";
                break;
            case 'b':
                $is2Correct = true;
                $reason2 = "This answer is correct!.";
                break;       
            default:
                $is2Correct = false;
                $reason2 = "No answer selected.";
        }

        //q3
        switch($q3) {
            case 'a':
                $is3Correct = false;
                $reason3 = "This answer is NOT correct. Do-while loops must loop through at least once because the boolean is not tested until after the loop is executed once.";
                break;
            case 'b':
                $is3Correct = true;
                $reason3 = "This answer is correct!.";
                break;       
            default:
                $is3Correct = false;
                $reason3 = "No answer selected.";
        }

        //q4
        switch($q4) {
            case 'a':
                $is4Correct = false;
                $reason4 = "This answer is NOT correct. Input Validation loops are a type of while loop.";
                break;
            case 'b':
                $is4Correct = false;
                $reason4 = "This answer is NOT correct. Counting loops are a type of while loop.";
                break;
            case 'c':
                $is4Correct = true;
                $reason4 = "This answer is correct!";
                break;
            case 'd':
                $is4Correct = false;
                $reason4 = "This answer is NOT correct! Sentinel loops are a type of while loops.";
                break;        
            default:
                $is4Correct = false;
                $reason4 = "No answer selected.";
        }

        //q1
        switch($q5) {
            case 'a':
                $is5Correct = false;
                $reason5 = "This answer is NOT correct! The inner loop is executed each time the program loops through the outer loop.";
                break;
            case 'b':
                $is5Correct = false;
                $reason5 = "This answer is NOT correct! The inner loop is executed each time the program loops through the outer loop.";
                break;
            case 'c':
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
