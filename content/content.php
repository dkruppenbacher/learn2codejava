<?php
  $page = "Lesson 1.1";
  $pagetype = "content";
  $path = '../';
  include($path.'assets/inc/head-default.php');
?>
<body>
<?php
  include($path.'assets/inc/nav-content-default.php');
  include($path.'assets/inc/sideNav-default.php');
?>

<div class='page'>
  <p class='breadcrumbs'>Content > Chapter 1 > 1.1 Intro to Java</p>
  <h1>Introduction to Java</h1>
  <div class='pagecontent'>
    <p>Java is one of the simplest programming languages to understand. You use classes to define a Java program, and they are written like this:</p>
    <!--Use <code> to define a code block. Use <br> to make line breaks, and a &emsp;&emsp; to define a tab-->
    <code>
      /**<br>
      * Simplest program ever<br>
      * @author GearMonke Inc<br>
      * @version 1.0<br>
      */<br>
      public class example {<br>
      &emsp;&emsp;public static void main(String[] args) {<br>
      &emsp;&emsp;&emsp;&emsp;int i = 0;<br>
      &emsp;&emsp;}<br>
      }<br>
    </code><br>
    <p>Let’s break it down:</p>
    <ul>
      <li>The /** and */ are the beginning and end of a multiline comment. Comments are text that are ignored by the compiler, often used for making notes about the code.</li>
      <ul>
        <li><code>@author</code> is the tag to define the author of the program.</li>
        <li><code>@version</code> tag defines the version of the program.</li>
        <li>There are more tags that we will go over later.</li>
      </ul>
      <li>To define a class, use <code>public class className { </code>. Add a closing bracket } at the end of the code to close out the class.</li>
      <li>Every class requires a main method, where the most of the code is. To define a main method, use <code>public static void main(String[] args) { </code>.</li> 
      <ul>
        <li>Public means the method can be accessed from other classes.</li>
        <li>Static means the attributes inside won’t be changed by outside classes.</li>
        <li><code>(String[] args)</code> defines an array of Strings called args.</li>
        <li>Don't forget the closing bracket } !</li>
      </ul>
    </ul>
    <p>There are naming conventions for methods and classes. All names must use camel case, where the 1st letters of words are capitalized. Avoid abbreviations and acronyms, and no numbers should be used in class names.
    There are different files for different purposes. When writing a Java class, you would write in a .java file. Once you run the .java file through the compiler, it will return a .class file, which can then be run, or it can be packaged into a .jar executable program.</p>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
 </body>
 </html>