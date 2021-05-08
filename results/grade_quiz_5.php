<!-- head-normal.php start -->
<?php
  $page = "Quiz 5 Results";
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
                $reason1 = "This answer is NOT correct! Importing java.io.*; is used for file writing and reading.";
                break;
            case 'b':
                $is1Correct = true;
                $reason1 = "This answer is correct!";
                break;
            case 'c':
                $is1Correct = false;
                $reason1 = "This answer is NOT correct! It is missing the 'import' statement";
                break;  
            case 'd':
                $is2Correct = false;
                $reason1 = "This answer is NOT correct! It is missing the 'import' statement, and it imported java.io.*; which is used for file reading and writing";
            default:
                $is1Correct = false;
                $reason1 = "No answer selected.";
        }

        //q2
        if(is_null($q2)) {
           $is2Correct = false;
           $reason2 = "No answer input."; 
        } else {
            if($q2 == "ArrayList<String>() items = new ArrayList<String>();") {
                $is2Correct = true;
                $reason2 = "This answer is correct!"; 
            } else {
                $is2Correct = false;
                $reason2 = "This answer is NOT correct! The correct answer is <code>ArrayList&lt;String&gt;() items = new ArrayList&lt;String&gt;()</code>"; 
            }
        }

        //q3
        switch($q3) {
            case 'a':
                $is3Correct = false;
                $reason3 = "This answer is NOT correct. Arrays cannot grow or shrink in size after they are instantiated.";
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
                $reason4 = "This answer is NOT correct. list.get(n) is a method used to access a specific index.";
                break;
            case 'b':
                $is4Correct = false;
                $reason4 = "This answer is NOT correct. list.set(n) is used to change a value at a specific index.";
                break;
            case 'c':
                $is4Correct = true;
                $reason4 = "This answer is correct!";
                break;
            case 'd':
                $is4Correct = false;
                $reason4 = "This answer is NOT correct! list.add(item) is used to add an item to the list.";
                break;        
            default:
                $is4Correct = false;
                $reason4 = "No answer selected.";
        }

        //q1
        switch($q5) {
            case 'a':
                $is5Correct = true;
                $reason5 = "This answer is correct!";
                break;
            case 'b':
                $is5Correct = false;
                $reason5 = "This answer is NOT correct! The index ALWAYS starts at 0.";
                break;
            case 'c':
                $is5Correct = false;
                $reason5 = "This answer is NOT correct! The index ALWAYS starts at 0, it cannot vary or be changed.";
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
