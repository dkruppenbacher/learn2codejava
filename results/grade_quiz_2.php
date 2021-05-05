<!-- head-normal.php start -->
<?php
  $page = "Quiz 2 Results";
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
                $reason1 = "This answer is NOT correct! Review the descriptions of classes, objects and methods.";
                break;
            case 'b':
                $is1Correct = false;
                $reason1 = "This answer is NOT correct! An object does not describe the class.";
                break;
            case 'c':
                $is1Correct = true;
                $reason1 = "This answer is correct!";
                break;  
            default:
                $is1Correct = false;
                $reason1 = "No answer selected.";
        }

        //q2
        if(is_null($q2)) {
           $is2Correct = false;
           $reason2 = "No answer input."; 
        } else {
            if($q2 == "Scanner scn = new Scanner(System.in)") {
                $is2Correct = true;
                $reason2 = "This answer is correct!"; 
            } else {
                $is2Correct = false;
                $reason2 = "This answer is NOT correct! The correct answer is <code>Scanner scn = new Scanner(System.in)</code>."; 
            }
        }

        //q3
        switch($q3) {
            case 'a':
                $is3Correct = false;
                $reason3 = "This answer is NOT correct! scn.next() only takes the next group of characters.";
                break;
            case 'b':
                $is3Correct = false;
                $reason3 = "This answer is NOT correct! scn.nextDouble() only takes doubles.";
                break;
            case 'c':
                $is3Correct = true;
                $reason3 = "This answer is correct!";
                break;
            case 'd':
                $is3Correct = false;
                $reason3 = "This answer is NOT correct! scn.nextInt() only takes ints.";
                break;        
            default:
                $is3Correct = false;
                $reason3 = "No answer selected.";
        }

        //q4
        switch($q4) {
            case 'a':
                $is4Correct = false;
                $reason4 = "This answer is NOT correct. Boolean is primitive.";
                break;
            case 'b':
                $is4Correct = false;
                $reason4 = "This answer is NOT correct! Int is primitive.";
                break;
            case 'c':
                $is4Correct = false;
                $reason4 = "This answer is NOT correct! Char is primitive";
                break;
            case 'd':
                $is4Correct = true;
                $reason4 = "This answer is correct!";
                break;        
            default:
                $is4Correct = false;
                $reason4 = "No answer selected.";
        }

        //q1
        switch($q5) {
            case 'a':
                $is5Correct = false;
                $reason5 = "This answer is NOT correct! The 4.0 comes before the letter";
                break;
            case 'b':
                $is5Correct = true;
                $reason5 = "This answer is correct!";
                break;
            case 'c':
                $is5Correct = false;
                $reason5 = "This answer is NOT correct! You cannot have a decimal place with a decimal(int) declaration.";
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