    <nav>
    <ul class="navigation">
      <li><a <?php echo (isset($pagetype) && $pagetype=='home') ? ' class="active" ' :'' ?> href="<?php echo $path; ?>index.php">Home</a></li>
      <li><a <?php echo (isset($pagetype) && $pagetype=='content') ? ' class="active" ' :'' ?> href='<?php echo $path; ?>Content/Chapter 1/1.1.php'>Content</a></li>
      <img src="<?php echo $path; ?>assets/img/gearmonke_logo.svg" alt="GearMonkeLogo" class="logo">
      <li><a <?php echo (isset($pagetype) && $pagetype=='aboutus') ? ' class="active" ' :'' ?> href="<?php echo $path; ?>about.php">About Us</a></li>
      <li><a <?php echo (isset($pagetype) && $pagetype=='comment') ? ' class="active" ' :'' ?> href="<?php echo $path; ?>comments.php">Comments</a></li>
    </ul>
    </nav>
