<?php
  $page = "Lesson 3.1";
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
    <p>The if statement is a basic statement in Java used to make decisions, and it is controlled by boolean expressions, which is an expression that is either true or false. If the boolean expression is true (IF True, Then), the statements inside the if statement are executed. If false, they are skipped.</p>
    <code>if(boolean expression) {<br>
    &emsp;&emsp;// executed when boolean expression is true<br>
    }</code><br>
    <p>It has a number of forms:</p>
    <code>if(amount > balance) System.out.println("Insufficient funds!");<br>


    if(amount > balance) {<br>
     &emsp;&emsp;System.out.println("Insufficient funds!");<br>
     &emsp;&emsp;System.exit(0);    // terminates the program<br>
     }<br><br>

    if(amount > balance) {<br>
     &emsp;&emsp;System.out.println("Insufficient funds!");<br>
     &emsp;&emsp;System.exit(0);    // terminates the program<br>
     }<br>
     else {<br>
     &emsp;&emsp;balance -= amount;<br>
     }</code><br>
The ‘then-part’ and the ‘else-part’ do not need to be in curly braces { … } unless there is more than one statement in that part. However, you always CAN use curly braces. We recommend to ALWAYS use curly braces to avoid confusion.</p>

<p>Boolean expressions are done using relational expressions, which compare two values to one another. For numbers, the relational expressions are as follows:</p>
<ul>
<li>< less than</li>
<li>> greater than</li>
<li><= less than or equal to</li>
<li>>= greater than or equal to</li>
<li>== equal to</li>
<li>!= not equal to</li>
<li>If checking multiple expressions at the same time, && means and, and || means or</li>
</ul>
<p>NOTE: the test for equality is NOT ‘=’. Rather it is ‘==’ (2 equal signs together). The ‘=’ operator has been taken for assignment, so we need a different one. The designers of Java chose ‘==’.</p>
<p><strong>BEWARE: The most common programming error in Java is to use ‘=’ when you mean ‘==’.</strong></p>
<p>With the above operators you can check to see how two ‘int’s or their cousins (byte, short, long) relate to one another. Each of these operators returns a boolean value as the result.</p>
<p>How about doubles (and floats)? They can also be compared using the above (and compared with ints). However, the use of == and != is not recommended with doubles.</p>
<p>What if you have to test for a number of possibilities, instead of just two (true or false)? This can be accomplished with the if-else-if. The form of this is:</p>
     <code>if(BOOLEAN-EXPRESSION1) {<br>
         &emsp;&emsp;//STATEMENTS1<br>
     }<br>
    else if(BOOLEAN-EXPRESSION2) {<br>
         &emsp;&emsp;//STATEMENTS2<br>
     }<br>
    else if(BOOLEAN-EXPRESSION3) {<br>
        &emsp;&emsp;//STATEMENTS3<br>
    }<br>
    else {<br>
        &emsp;&emsp;//STATEMENTS4<br>
    }<br>
    //NEXT-STATEMENT</code><br>

<h3>Semantics</h3>
<p>BOOLEAN-EXPRESSION1 is tested. If true, STATEMENTS1 are executed and control skips to the very end of the structure (NEXT-STATEMENT).  If false, then BOOLEAN-EXPRESSION2 is tested. If true STATEMENTS2 are executed and control skips to NEXT-STATEMENT. If false, then BOOLEAN-EXPRESSION3 is tested, and so forth.</p>
<p>Essentially, the first (in order) BOOLEAN-EXPRESSION that is true has its STATEMENTS executed, and the rest are ignored. If two or more BOOLEAN-EXPRESSIONS are true, only the first has its STATEMENTS executed.</p>
<p>The else statements are executed only if NONE of the BOOLEAN-EXPRESSIONs are true. The else-clause may be omitted. In this case, if NONE of the BOOLEAN-EXPRESSIONs are true, nothing is executed and control passes directly to NEXT-STATEMENT</p>

<h3>else-if Exercise</h3>
<p>Consider a case where there are a number of different operations a user can perform on a number (square, square root, double it, halve it). The user will provide the number, then a code for the operation (S == square, s == square root, D == double, H == halve it).</p>
<p>Write a class, called Operation, with a main program in it, that prompts for a number (a double), and the code (a String). Then, based on the first (and hopefully the only) character in the String, do the appropriate operation and print out the result. If you have a String called operation, you can get the 1st character from it with operation.charAt(0).</p>
<p>Use the else-if to decide which operation to actually do.</p>
<code>import java.util.*;<br>
public class Operation {<br>
&emsp;&emsp;public static void main(String[] args) {<br>
&emsp;&emsp;&emsp;&emsp;Scanner in = new Scanner(System.in);<br>
&emsp;&emsp;&emsp;&emsp;System.out.print("Enter a number: ");<br>
&emsp;&emsp;&emsp;&emsp;double number = in.nextDouble();<br>
&emsp;&emsp;&emsp;&emsp;System.out.print("Enter an operation code (S, s, D, H): ");<br>
&emsp;&emsp;&emsp;&emsp;String operation = in.next();<br>
&emsp;&emsp;&emsp;&emsp;char code = operation.charAt(0);<br>

&emsp;&emsp;&emsp;&emsp;if(code == 'S') {<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("Square: " + number * number);<br>
&emsp;&emsp;&emsp;&emsp;}<br>
&emsp;&emsp;&emsp;&emsp;else if(code == 's') {<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("Square root: " + Math.sqrt(number));<br>
&emsp;&emsp;&emsp;&emsp;}<br>
&emsp;&emsp;&emsp;&emsp;else if(code == 'D') {<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("Double: " + 2.0 * number);<br>
&emsp;&emsp;&emsp;&emsp;}<br>
&emsp;&emsp;&emsp;&emsp;else if(code == 'H') {<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("Halve: " + number / 2.0);<br>
&emsp;&emsp;&emsp;&emsp;}<br>
&emsp;&emsp;}<br>
}</code><br>
<p>This version has no else-clause. Add an else-clause to print an error message if none of the 4 acceptable codes is entered:</p>

         <code>else {<br>
            &emsp;&emsp;System.out.println("Error: unexpected code: " + code);<br>
         }</code><br>

<p>Conditional operators puts an if-else all in one short operation:</p>
     <code>boolean ok = (age >= 18 ? true : false);<br>
     if(ok) {<br>
     &emsp;&emsp;System.out.println(“You can vote.”);<br>
    }<br>
    else {<br>
    &emsp;&emsp;System.out.println(“You cannot vote.”);<br>
    }</code><br>
<p>A, perhaps better, example:</p>
     <code>String message = (age >= 18 ? "You can vote" : "You cannot vote");<br>
     System.out.println(message);</code><br>
<p>Or even:</p>
     <code>System.out.println((age > 18 ? "You can vote" : "You cannot vote"));</code><br>
<p>This operator works as follows:</p>
     <code>( BOOLEAN-EXPRESSION ? TRUE-VALUE : FALSE-VALUE )</code><br>
<p>If the BOOLEAN-EXPRESSION is true, the TRUE-VALUE is used, otherwise the FALSE-VALUE is used.</p>
  </div>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
