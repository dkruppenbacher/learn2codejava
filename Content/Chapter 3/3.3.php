<?php
  $page = "Lesson 3.3";
  $pagetype = "content";
  $path = "../../";
  $mydir1 = dirname(__FILE__);
  $myd = substr($mydir1, 38);
  include($path.'assets/inc/head-default.php');
?>
<body>
<?php
  include($path.'assets/inc/nav-content-default.php');
  include($path.'assets/inc/sideNav-default.php');
?>
  <div class='pagecontent'>
    <h3>String and Comparisons</h3>
<p>The if statement and Strings … If you wish to compare two strings for equality, do NOT use ‘==’.</p>
<p>Why? String is a class, so strings are objects. An object is a reference. Comparing two objects (Strings) with ‘==’ just tests to see if the two objects refer to the same piece of memory.</p>

<p>For example:<br>
&emsp;&emsp;String s1 = "Gearmonke";<br>
&emsp;&emsp;String s2 = s1;</p>
<p>You would expect s1 == s2, and it does, in this case, because s1 refers to the same area of memory as s2.</p>


<p>However, in this example:
&emsp;&emsp;String s1 = "gear";
&emsp;&emsp;String s2 = "gear";</p>
<p>It is NOT true that s1 == s2. These are two SEPARATE (in memory) Strings that happen to contain "gear".</p>

<p>This is because each time you type “gear”, Java does a <code>new String("gear")</code> for you to create two separate objects in two separate parts of memory.
Usually, you do not care if two Strings are in the same part of memory, you care if their contents are the same or not. To check this, do NOT use ==, instead use the <code>.equals</code> method of the String class:</p>
<code>&emsp;&emsp;if(s1.equals(s2)) …</code>
<p>In a switch statement, the use of .equals is implicit:</p>
     <code>switch(s1) {<br>
         &emsp;&emsp;case "gear":<br>
             &emsp;&emsp;&emsp;&emsp;STATEMENTS1<br>
             &emsp;&emsp;&emsp;&emsp;break;<br>
         &emsp;&emsp;case "monke":<br>
             &emsp;&emsp;&emsp;&emsp;STATEMENTS2<br>
              &emsp;&emsp;&emsp;&emsp;break;<br>
     }</code><br>
<p>Java tests to see if <code>s1.equals("gear")</code> and if so, executes STATEMENTS1. If not, it tests to see if <code>s1.equals("monke")</code> and if so, executes STATEMENTS2.</p>

<p>NOTE: if you want to compare two strings, without regards to the case (upper or lower), use <code>s1.equalsIgnoreCase("monke")</code>.</p>
<h3>Boolean Expressions</h3>
<p>Boolean expressions are made from relational expressions, that return a true/false result. They can be compound boolean expressions using and, or and not.
In Java, the and operator is && <strong>(beware of using only & … different operator, advanced, not the same)</strong>. The && operator takes two boolean operands and returns a boolean result if BOTH are true, as follows:</p>

<table>
  <tr>
    <td class='hidden' colspan='2'></td>
    <th colspan='2'>Right</th>
  </tr>
  <tr>
    <td class='hidden'></td>
    <th>&&</th>
    <td>T</td>
    <td>F</td>
  </tr>
  <tr>
    <th rowspan='2'>Left</th>
    <td>T</td>
    <td>T</td>
    <td>F</td>
  </tr>
  <tr>
    <td>F</td>
    <td>F</td>
    <td>F</td>
  </tr>
</table>

<p>In Java, the or operator is || <strong>(beware of using only | … different operator, advanced, not the same)</strong>. The || operator takes two boolean operands and returns a boolean result if EITHER or BOTH are true, as follows:</p>

<table>
  <tr>
    <td class='hidden' colspan='2'></td>
    <th colspan='2'>Right</th>
  </tr>
  <tr>
    <td class='hidden'></td>
    <th>&#8201;||&#8201;</th>
    <td>T</td>
    <td>F</td>
  </tr>
  <tr>
    <th rowspan='2'>Left</th>
    <td>T</td>
    <td>T</td>
    <td>T</td>
  </tr>
  <tr>
    <td>F</td>
    <td>T</td>
    <td>F</td>
  </tr>
</table>

<p>In Java, the not operator is !  The ! operator takes ONE boolean operand and returns its opposite value, as follows:</p>

<table>
  <tr>
    <td class='hidden'></td>
    <th colspan='2'>Right</th>
  </tr>
  <tr>
    <th>&#8201;!&#8201;</th>
    <td>T</td>
    <td>F</td>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <td>F</td>
    <td>T</td>
  </tr>
</table>

<p>When writing complex boolean expressions, it is usually too hard to remember the operator precedence <strong>! first, then &&, then ||</strong> so we recommend fully parenthesizing these to make things clearer. For example:</p>
     <code>if(((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0)) {<br>
         &emsp;&emsp;System.out.println(year + " is a leap year");<br>
     }<br>
     else {<br>
        &emsp;&emsp;System.out.println(year + " is NOT a leap year");<br>
     }</code><br>
  </div>
  </div>

<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
