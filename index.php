<!-- head-normal.php start -->
<?php
  $page = "Home";
  $pagetype = "home";
  $path = './';
  $mydir1 = dirname(__FILE__);
  $myd = substr($mydir1, 40);
  include($path.'assets/inc/head-default.php');
?>
<!-- head-normal.php end-->
<body>
<!-- nav-home-normal.php start -->
<?php
  include($path.'assets/inc/nav-home-default.php');
?>
<!-- nav-home-normal.php end -->
    <div class='page'>
    <img src="<?php echo $path; ?>assets/img/gearmonke_logo.svg" alt="GearMonkeLogo" class="gearMonke">
    
    <h1>Welcome to GearMonke Inc.'s<br>Learn2CodeJava website!</h1>
    <div class='pagecontent'>
    <p>
        Learn2CodeJava.com is your one stop shop for all things Java. Whether you are just starting out with the Java programming language, an adept coder, or an expert developer, Learn2CodeJava.com aims to teach you new skills! Throughout the site, you will be immersed in a variety of interactive lessons and projects, all of which will help tune you up to produce beautiful, syntactically correct programs!<br><br><br>

        Learn2CodeJava.com’s primary goal is to introduce users to the robust world of the Java programming language. Java, created by Oracle, is the most universally-recognized coding platform with around 8.2 million developers worldwide. Compared to other languages, such as Python, Java has over 800,000 more developers: proving the versatility and universal acceptance of the platform. In an estimate from Oracle, over 13 billion devices run Java, including popular devices using the Windows operating system, macOS operating system, or a multitude of Linux variants.<br><br><br>

        Whether the user is brand new to the Java programming language or a seasoned veteran, Learn2CodeJava.com aims to provide an intuitive approach to any Java related programming problem.<br><br><br>
        
        Users of Learn2CodeJava.com will be able to achieve the following:</p>
        <ul>
        <li>Understand the syntax and semantics of the Java language, including:</li>
        <ul>
        <li>Method Structures</li>
        <li>Best practices for indenting and bracket placement</li>
      </ul>
        <li>Understand the importance of documentation, including:</li>
        <ul>
        <li>Creating documentation for programs created by the user</li>
        <li>Using the Oracle supplied JavaDocs (Java Documentation) to further understand knowledge about the Java programming language</li>
        <li>Understand different data types and how to manipulate such data types</li>
      </ul>
    </ul>

    </p>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end -->

     