<!DOCTYPE html>
<html>
<head>

<meta charset=utf-8 />
<title>Group Project</title>
<meta name="viewport" content="width=device width,initial-scale=1.0">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link href="assets/css/default.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Coda&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
    $(window).on('load resize',function(){
        if($(window).width() < 720){
            window.location = "mobile/quiz.html"
        }
    });
</script>
    
</head>
<body>
    

    
    <nav>
    <ul class="navigation">
      <li><a href="index.html">Home</a></li>
      <li><a class='active' href="content.html">Content</a></li>
      <img src="assets/img/gearmonke_logo.svg" alt="GearMonkeLogo" class="logo">
      <li><a href="#">About Us</a></li>
      <li><a href="#">Donate</a></li>
    </ul>
    </nav>
    
   <div class="sidenav">
    <button class="dropdown-btn">Chapter 1
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="./content.html">1.1</a>
    <a href="#">1.2</a>
    <a href="#">1.3</a>
    <a href="./quiz.html">Quiz</a>
  </div>
    <button class="dropdown-btn">Chapter 2
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">2.1</a>
    <a href="#">2.2</a>
    <a href="#">2.3</a>
    <a href="#">Quiz</a>
  </div>
    <button class="dropdown-btn">Chapter 3
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">3.1</a>
    <a href="#">3.2</a>
    <a href="#">3.3</a>
    <a href="#">Quiz</a>
  </div>
    <button class="dropdown-btn">Chapter 4
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">4.1</a>
    <a href="#">4.2</a>
    <a href="#">4.3</a>
    <a href="#">Quiz</a>
  </div>
  <button class="dropdown-btn">Chapter 5
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">5.1</a>
    <a href="#">5.2</a>
    <a href="#">5.3</a>
    <a href="#">Quiz</a>
  </div>
</div>
    
<script> 
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script> 
<div class='page'>
  <p class='breadcrumbs'>Content > Chapter 1 > Quiz</p>
  <h1>Chapter 1 Quiz</h1>
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
                $is1Correct = true;
                $reason1 = "This answer is correct!";
                break;
            case 'b':
                $is1Correct = false;
                $reason1 = "This answer is NOT correct! Each compiler has its own methods of storing settings.";
                break;
            case 'c':
                $is1Correct = false;
                $reason1 = "This answer is NOT correct! .class files contain the compiled code.";
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
            if($q2 == "public static void main(String[] args)") {
                $is2Correct = true;
                $reason2 = "This answer is correct!"; 
            } else {
                $is2Correct = false;
                $reason2 = "This answer is NOT correct! The correct answer is 'public static void main(String[] args)'."; 
            }
        }

        //q3
        switch($q3) {
            case 'a':
                $is3Correct = false;
                $reason3 = "This answer is partially correct, but there are multiple right answers.";
                break;
            case 'b':
                $is3Correct = false;
                $reason3 = "This answer is partially correct, but there are multiple right answers.";
                break;
            case 'c':
                $is3Correct = false;
                $reason3 = "This answer is NOT correct! '//' signifies a single line comment.";
                break;
            case 'd':
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
                $is4Correct = false;
                $reason4 = "This answer is NOT correct. @since is used for version control.";
                break;
            case 'b':
                $is4Correct = true;
                $reason4 = "This answer is correct!";
                break;
            case 'c':
                $is4Correct = false;
                $reason4 = "This answer is NOT correct! @param is used to declare parameters of a method.";
                break;
            case 'd':
                $is4Correct = false;
                $reason4 = "This answer is NOT correct! @author is used to declare the name of the person who wrote a program.";
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
                $reason5 = "This answer is NOT correct! In camelCase, the first word is not capitalized, but each proceeding word is.";
                break;
            case 'c':
                $is5Correct = false;
                $reason5 = "This answer is NOT correct! In camelCase, the first word is not capitalized, but each proceeding word is.";
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
    
    
  
    <footer>       
    <p class="footer"> @2021 GearMonke Inc.&emsp;&emsp;<a href="mailto:info@learn2codejava.com">Contact: info@learn2codejava.com</a></p>
    
    </footer>
     
   
    
    
 </body>
 </html>