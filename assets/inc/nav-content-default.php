<nav>
    <ul class="navigation">
      <button class="showHideSidenav" id="showHide" onclick="showHide()">Hide side nav</button>
      <li><a href="<?php echo $path; ?>index.php">Home</a></li>
      <li><a <?php echo (isset($pagetype) && $pagetype=='content') ? ' class="active" ' :'' ?> class='active' href='<?php echo $path; ?>Content/Chapter 1/1.1.php'>Content</a></li>
      <img src="<?php echo $path; ?>assets/img/gearmonke_logo.svg" alt="GearMonkeLogo" class="logo">
      <li><a <?php echo (isset($pagetype) && $pagetype=='aboutus') ? ' class="active" ' :'' ?> href="<?php echo $path; ?>about.php">About Us</a></li>
      <li><a <?php echo (isset($pagetype) && $pagetype=='Comment') ? ' class="active" ' :'' ?> href="<?php echo $path; ?>comments.php">Comments</a></li>
    </ul>
</nav>
<script>
	function showHide() {
    	var x = document.getElementById('sidenav');
    	x.classList.toggle('hide');
    	var y = document.getElementById("showHide");
    if (y.innerHTML=="Hide side nav") y.innerHTML = "Show side nav";
    else y.innerHTML = "Hide side nav";
    }
    </script>
