<?php
  $page = "Lesson 3.2";
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
    <p>When choosing among a number of int values (int includes char, byte, short, and long), or Strings, one can use the switch statement. The form of the switch statement is:</p>
    <code>switch(EXPRESSION) {<br>
        &emsp;&emsp;case VALUE1:<br>
            &emsp;&emsp;&emsp;&emsp;STATEMENTS1<br>
            &emsp;&emsp;&emsp;&emsp;break;<br>
        &emsp;&emsp;case VALUE2:<br>
            &emsp;&emsp;&emsp;&emsp;STATEMENTS2<br>
            &emsp;&emsp;&emsp;&emsp;break;<br>
        &emsp;&emsp;case VALUE3:<br>
            &emsp;&emsp;&emsp;&emsp;STATEMENTS3<br>
            &emsp;&emsp;&emsp;&emsp;break;<br>
        &emsp;&emsp;default:<br>
            &emsp;&emsp;&emsp;&emsp;STATEMENTS4<br>
            &emsp;&emsp;&emsp;&emsp;break;<br>
    }<br>
    NEXT-STATEMENT</code><br>

<p>Essentially, this simplifies the else-if statement. The “expression” is compared to each of the values, and if the expression matches a value, that value’s corresponding statements are executed, and then the “break” sends the program to the next statement outside of the switch statement.</p>
<p>If none of the values are equal to the expression, the default case is run. The default is not necessary, and if it is not there, then nothing is executed when none of the values match the expression.</p>
<h3>Semantics</h3>
<p>This is a short-hand for the else-if. The EXPRESSION is evaluated and then compared, in turn, to VALUE1, VALUE2, and VALUE3 (there may be any number of cases … not just 3). The first one that is equal to the EXPRESSION has its STATEMENTS executed. The break statement causes execution to continue at the NEXT-STATEMENT.</p>
<p>If none of the VALUEs match the EXPRESSION, then the STATEMENTS in the default clause are executed.</p>
<p>There does not have to be a default clause. If there is none, and none of the VALUES match the EXPRESSION, then execution passes directly to the NEXT-STATEMENT.</p>
<p>If you leave out the break statement in one of the cases, then after the STATEMENTS for that case are executed, execution passes to the STATEMENTS in the next case. This is odd … and is rarely used. However, if you forget to type in the break, this is what will happen.</p>
<p>The cases do NOT need to be in any particular order.</p>


<h3>switch Exercise</h3>
<p>Write a class called LetterGrade with a main program. Have the main program prompt for and read in a numeric (double) grade (use Scanner). Check that the grade is between 0 and 100, inclusive. If it is not, print an error message and terminate the program (System.exit(0)).</p>
<p>Cast the grade to an int, then divide the int by 10 using integer division. This will result in an int between 0 and 10, inclusive. For example:</p>

     <p>&emsp;&emsp;22 will produce a 2&emsp;&emsp;&emsp;&emsp;30 will produce a 3&emsp;&emsp;&emsp;&emsp;67 will produce a 6<br>
     &emsp;&emsp;77.5 will produce a 7&emsp;&emsp;&emsp;&emsp;82.67 will produce an 8&emsp;&emsp;&emsp;&emsp;92.4 will produce a 9<br>
     &emsp;&emsp;100 will produce a 10</p>
<p>Use a switch statement to convert this number into a letter grade.</p>
     <p>&emsp;&emsp;0, 1, 2, 3, 4, and 5 will be F’s.<br>
     &emsp;&emsp;6 will be a D.<br>
     &emsp;&emsp;7 will be a C.<br>
     &emsp;&emsp;8 will be a B.<br>
     &emsp;&emsp;9 and 10 will be A’s.</p>
<p>NOTE: if two (or more) cases should do the same thing, label their statements with two cases. For example:</p>
     <p>&emsp;&emsp;case 9:<br>
     &emsp;&emsp;case 10:<br>
         &emsp;&emsp;&emsp;&emsp;STATEMENTS<br>
         &emsp;&emsp;&emsp;&emsp;break;</p>

<code>import java.util.*;<br>
public class LetterGrade {<br>
&emsp;&emsp;public static void main(String[] args) {<br>
&emsp;&emsp;&emsp;&emsp;Scanner in = new Scanner(System.in);<br><br>
&emsp;&emsp;&emsp;&emsp;System.out.print("Enter a numeric grade (0..100): ");<br>
&emsp;&emsp;&emsp;&emsp;double grade = in.nextDouble();<br><br>

&emsp;&emsp;&emsp;&emsp;if(grade < 0.0 || grade > 100.0) {<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("The grade must be between 0 and 100 inclusive.");<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("Value entered: " + grade);<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.exit(0);<br>
&emsp;&emsp;&emsp;&emsp;}<br><br>
&emsp;&emsp;&emsp;&emsp;int intGrade = (int) grade;<br>
&emsp;&emsp;&emsp;&emsp;int decade = intGrade / 10;<br>
&emsp;&emsp;&emsp;&emsp;switch(decade) {<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 0: case 1: case 2: case 3:<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 4: case 5:<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("Grade " + grade + " == F");<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 6:<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("Grade " + grade + " == D");<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 7:<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("Grade " + grade + " == C");<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 8:<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("Grade " + grade + " == B");<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 9: case 10:<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;System.out.println("Grade " + grade + " == A");<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br>
&emsp;&emsp;&emsp;&emsp;}<br>
&emsp;&emsp;}<br>
}</code><br>
  </div>
  </div>

<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
