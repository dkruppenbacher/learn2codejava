   <div class="sidenav">
    <button class="dropdown-btn">Chapter 1
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="<?php echo $path; ?>Content/Chapter 1/1.1.php">1.1</a>
    <a href="<?php echo $path; ?>Content/Chapter 1/Chapter 1 quiz.php">Quiz</a>
  </div>
    <button class="dropdown-btn">Chapter 2
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="<?php echo $path; ?>Content/Chapter 2/2.1.php">2.1</a>
    <a href="<?php echo $path; ?>Content/Chapter 2/2.2.php">2.2</a>
    <a href="<?php echo $path; ?>Content/Chapter 2/Chapter 2 quiz.php">Quiz</a>
  </div>
    <button class="dropdown-btn">Chapter 3
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="<?php echo $path; ?>Content/Chapter 3/3.1.php">3.1</a>
    <a href="<?php echo $path; ?>Content/Chapter 3/3.2.php">3.2</a>
    <a href="<?php echo $path; ?>Content/Chapter 3/3.3.php">3.3</a>
    <a href="<?php echo $path; ?>Content/Chapter 3/Chapter 3 quiz.php">Quiz</a>
  </div>
    <button class="dropdown-btn">Chapter 4
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="<?php echo $path; ?>Content/Chapter 4/4.1.php">4.1</a>
    <a href="<?php echo $path; ?>Content/Chapter 4/4.2.php">4.2</a>
    <a href="<?php echo $path; ?>Content/Chapter 4/Chapter 4 quiz.php">Quiz</a>
  </div>
  <button class="dropdown-btn">Chapter 5
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="<?php echo $path; ?>Content/Chapter 5/5.1.php">5.1</a>
    <a href="<?php echo $path; ?>Content/Chapter 5/5.2.php">5.2</a>
    <a href="<?php echo $path; ?>Content/Chapter 5/Chapter 5 quiz.php">Quiz</a>
  </div>
  <button class="dropdown-btn">Chapter 6
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="<?php echo $path; ?>Content/Chapter 6/6.1.php">6.1</a>
    <a href="<?php echo $path; ?>Content/Chapter 6/6.2.php">6.2</a>
    <a href="<?php echo $path; ?>Content/Chapter 6/6.3.php">6.3</a>
    <a href="<?php echo $path; ?>Content/Chapter 6/Chapter 6 quiz.php">Quiz</a>
  </div>
  <button class="dropdown-btn">Chapter 7
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="<?php echo $path; ?>Content/Chapter 7/7.1.php">7.1</a>
    <a href="<?php echo $path; ?>Content/Chapter 7/7.2.php">7.2</a>
    <a href="<?php echo $path; ?>Content/Chapter 7/7.3.php">7.3</a>
    <a href="<?php echo $path; ?>Content/Chapter 7/Chapter 7 quiz.php">Quiz</a>
  </div>
  <button class='sidenav-btn' onclick="window.location='<?php echo $path; ?>Content/Project 1.php'">Project 1</button>
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

<?php
  echo "<div class='page'>";
  echo "<p class='breadcrumbs'>".$myd," > ".$page."</p>";
  echo "<h1>".$page."</h1>";
?>