<!-- head-normal.php start -->
<?php
  $page = "aboutus";
  $pagetype = "aboutus";
  $path = './';
  $mydir1 = dirname(__FILE__);
  $myd = substr($mydir1, 38);
  include($path.'assets/inc/head-default.php');
?>
<!-- head-normal.php end-->

<!-- nav-home-normal.php start -->
<?php
  include($path.'assets/inc/nav-home-default.php');
?>
<!-- nav-home-normal.php end -->
<div class="head">
    <h2 >About GearMonke</h2>
    <p>Learn2CodeJava.com is your one stop shop for all things Java. Whether you are just starting out with the Java programming language, an adept coder, or an expert developer, Learn2CodeJava.com aims to teach you new skills! Throughout the site, you will be immersed in a variety of interactive lessons and projects, all of which will help tune you up to produce beautiful, syntactically correct programs!
    </p>

<br>


<h2>Meet The Team</h2>
  </div>  
    <div class="center">
    <div class="Contain">
        <div class="card">
            <div class="imgBx">
                <img src="<?php echo $path; ?>assets/img/isaiah.jpg" alt="Isaiah Rivera">
            </div>
            <div class="content">
                <h3>Interactive Designer - Isaiah R.</h3>
                <p>Isaiah Rivera is a first year Human-Centered Computing student and was the Interactive Designer for this site he  developed the navigation from the wireframes that were created by the information architect and graphic designer. His goal was to make the navigation simple and easy to follow along so that the user does not get lost while also making it interactive.</p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="<?php echo $path; ?>assets/img/dalton.png" alt="Dalton K.">
            </div>
            <div class="content">
                <h3>Team Leader - Dalton K.</h3>
                <p>Dalton Kruppenbacher is a second year CIT student and was the team leader for this project.As the teamleader he was responsible for when and where the team met, monitered progress, made weekly progress reports, presents our projects to the class, and also helped out everyone else on the team.</p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="<?php echo $path; ?>assets/img/nate.png" alt="Nathaniel P.">
            </div>
            <div class="content">
                <h3>Information Architect - Nathaniel P.</h3>
                <p>Nathaniel Pellegrino is a second year CIT student and was the Information Architect for Gearmonke. Nate provided mobile and web views of what the site would look like and how it should be laid out. He also helped with providing content and quizzes for each page making it easy to read and learn. </p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="<?php echo $path; ?>assets/img/emma.jpg" alt="Emma T.">
            </div>
            <div class="content">
                <h3>Graphic Design - Emma T.</h3>
                <p>Emma Thomas is a first year Human-Centered Computing major at RIT and was the Graphic designer for Gearmonke. On campus, she is a member of the Womens's Swim Team and the Honor's college.</p>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h3>Content Creator - Trevor Y.</h3>
                <p>Trever Yendrzeski is a student at RIT and was the Content creator for Gearmonke and he provided notes for each chapter and quiz outlines of our site. </p>
            </div>
        </div>
        
        
        
    </div>
</div>       
            
      





<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end -->
