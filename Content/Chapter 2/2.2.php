<?php
  $page = "Lesson 2.2";
  $pagetype = "content";
  $path = "../../";
  $mydir1 = dirname(__FILE__);
  $myd = substr($mydir1, 40);
  include($path.'assets/inc/head-default.php');
?>
<body>
<?php
  include($path.'assets/inc/nav-content-default.php');
  include($path.'assets/inc/sideNav-default.php');
?>
  <div class='pagecontent'>
    <p>The Scanner class is a part of the java.util package, which means it is a class already created and supplied by Java. In order to gain access to Scanner, you must include import java.util.*; into the first line of your program, even before the class declaration (public class …).</p>

<p>The Scanner class is an easy way to get keyboard and user input into your program. Here is how to get it started:<br>
First, you must instantiate a new Scanner object connected to System.in, which is the standard input stream used to get input from the console. Here is the code: <code>Scanner scn = new Scanner(System.in);</code></p>
<p>After the instantiation, methods are called through referencing the name of the object (scn) in order to read in the input and save it as a variable <code>myInt = scn.nextInt();</code></p>
<p>The methods are as follows:</p>
<ul>
<li><code>scn.next()</code> → to read a single word</li>
<li><code>scn.nextInt()</code> → to read an int</li>
<li><code>scn.nextDouble()</code> → to read a double</li>
<li><code>scn.nextLine()</code> → to read a full line of text, including white spaces.</li>
</ul>
<p>If you are doing line-at-a-time input (not unusual), scn.nextLine() can cause a problem, if used with nextInt(), nextDouble() and next(). The problem is that nextInt(), nextDouble() and next() do not necessarily leave you at the start of a line. So the nextLine() may read that PARTIAL line, while you are thinking it is reading the next WHOLE line.
These methods can be used to save the respective inputs as variables.</p>
<p>Here is an example of using the Scanner Class:</p>

<code>import java.util.*;<br>
public class ScannerExample{<br>
    &emsp;&emsp;public static void main(String[] args){<br>
        &emsp;&emsp;&emsp;&emsp;Scanner scn = new Scanner(System.in);<br><br>
        
        &emsp;&emsp;&emsp;&emsp;System.out.print(“Enter an Integer: “);<br>
        &emsp;&emsp;&emsp;&emsp;int newInt = scn.nextInt();<br>
                        &emsp;&emsp;&emsp;&emsp;System.out.println(“Int: “ + newInt);<br>
    &emsp;&emsp;}<br>
}</code><br>

<p>Here is the output (user input is in “”):</p>

<code>Enter an Integer: “14”<br>
Int: 14</code><br>

<h3>Exercise</h3>
<p>Write a Java program that asks for (prompts for using <code>System.out.print()</code>) a person’s age (int), weight (double), and whole name (“Joe Smith”) and prints them back out. Use <code>scn.next()</code> to read the name.</p>
<p>Run the program. It should only print out the first name … why?<br>
Now, change the program so the name is read using </code>scn.nextLine()</code>. This will read the entire line.</p>
<p>Run the program again - now it should print the empty string for the name. Why? Because the nextDouble stopped BEFORE the newline, so the <code>scn.nextLine()</code> read just that newline and discarded it, leaving the empty string.</p>
<p>Now, put the line
     <code>scn.nextLine();</code>
right after the <code>scn.nextDouble();</code>
Run the program … it should work OK. The additional <code>scn.nextLine()</code> discards the partial line after the <code>scn.nextDouble()</code>. The <code>scn.nextLine()</code> reading the name now reads an entire line.</p>

<h3>Topic - Printf and String.format revisited</h3>
<p>Formatting output is done using String.format. The form of String.format is:
    <code>String.format(FORMAT, VAL1, VAL2, …);</code>
The number of values varies, and depends on the FORMAT. String.format returns a string that can be printed with System.out.print. It can also be concatenated onto other strings.
If you want to just print data, you can also use:
    <code>System.out.printf(FORMAT, VAL1, VAL2, …);</code>
Where the FORMAT and values are the same as in String.format.</p>
<p>Each of these methods returns, or prints, what is in the String FORMAT, except when a formatting specifier is found. A formatting specifier has the form:
     <code>%[-][,]W[.P]T</code>
where W is a width, and P is a precision, and T is a type indicator. When a formatting specifier is encountered, it is NOT printed (or returned). Instead, it is replaced by one of the VAL’s and that VAL is formatted according to the specifier. The VAL must be of a type that is compatible with the type indicator.</p>

<table>
  <tr>
    <th>T</th>
    <th>-</th>
    <th>,</th>
    <th>W</th>
    <th>.P</th>
  </tr>
  <tr>
    <td>f (float or double)</td>
    <td>See below</td>
    <td>See below</td>
    <td>Print the VAL using at least W spaces, right justified</td>
    <td>Print the VAL with P places to the right of the decimal point</td>
  </tr>
  <tr>
    <td>d (int – in decimal)</td>
    <td>See below</td>
    <td>See below</td>
    <td>Print the VAL in base 10 using at least W spaces, right justified</td>
    <td>Not allowed</td>
  </tr>
  <tr>
    <td>o (int – in octal)</td>
    <td>See below</td>
    <td>See below</td>
    <td>Print the VAL in base 8 using at least W spaces, right justified</td>
    <td>Not allowed</td>
  </tr>
  <tr>
    <td>x (int – in hexadecimal)</td>
    <td>See below</td>
    <td>See below</td>
    <td>Print the VAL in base 16 using at least W spaces, right justified</td>
    <td>Not allowed</td>
  </tr>
  <tr>
    <td>s (String)</td>
    <td>See below</td>
    <td>Not allowed</td>
    <td>Print the VAL using at least W spaces, right justified</td>
    <td>Use at MOST P spaces to print the VAL, truncating if necessary.</td>
  </tr>
  <tr>
    <td colspan="5">The ‘-‘ means to print the VAL left justified, instead of right justified.</td>
  </tr>
  <tr>
    <td colspan="5">The ‘,’ for numeric types means to print a ‘,’ every 3 digits to the left of the decimal point</td>
  </tr>
</table>

<h3>Exercise</h3>
 <p>Start a new class with just a main program. Declare variables as:</p>
     <code>String name = "Big Part";<br>
     int weight = 1818;<br>
     double cost = 185.96;<br>
     System.out.printf("Item %15s weight %5d cost %7.2f\n", name, weight, cost);</code><br>
 <p>Compile and run and see the output:</p>
    <code>Item&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Big Part weight&nbsp;&nbsp;1818 cost&nbsp;&nbsp;185.96</code><br>
    
<ul>
<li>‘Item plus a space from the FORMAT 🡪 5 characters</li>
<li>15 characters for the item name, right justified 🡪 total 20 characters</li>
<li>space, ‘weight’, space = 8 characters 🡪 total 28 characters</li>
<li>5 characters for ‘1818’, right justified 🡪 total 33 characters</li>
<li>space, ‘cost’, space = 6 characters 🡪 total 39 characters</li>
<li>the cost, right justified in 7 characters with 2 digits right of the decimal pt 🡪 total 46 characters</li>
</ul>
<h3>Print Overflow</h3>
<p>Now change the <code>System.out.printf</code> to<br>
    <code>System.out.printf("name %15s weight %3d cost %7.2f\n", name, weight, cost);</code><br>
This uses too short a width for the weight field. Compile and run:</p>
<code>Item&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Big Part weight 1818 cost&nbsp;&nbsp;185.96</code><br>
     
<p>This is almost the same. We lose one space before 1818 because the field is not too large anymore. But all of 1818 prints, even though we allow only 3 spaces for it. This is called print overflow and is done so that we do not lose information, even though it may mess up our formatting.</p>

<p>Now try:<br>
    <code>System.out.printf("Item %6s weight %5d cost %7.2f\n", name, weight, cost);</code><br>
Here we have changed the format for name to 6 spaces. Since it is more than 6 spaces long we will get overflow again. Try it. We get:<br>
    <code>Item Big Part weight&nbsp;&nbsp;1818 cost&nbsp;&nbsp;185.96</code><br>
    
which is shorter than the previous, because we shortened the field for the item name. The entire name is printed, using print overflow, however, taking as much space as it needs.</p>

<h3>Maximum Width with Strings</h3>
<p>With strings, we can prevent print overflow using the .P part of the format specifier. Try this…<br>
    <code>System.out.printf("Item %6.6s weight %5d cost %7.2f\n", name, weight, cost);</code><br>
Here the minimum and maximum width for the string is 6, meaning to use exactly 6 spaces for the item name. It is now truncated to 6 spaces<br>
         <code>Item Big Pa weight&nbsp;&nbsp;1818 cost&nbsp;&nbsp;185.96</code><br>

We have effectively stopped print overflow. This cannot be done with integers or doubles.</p>
<h3>Left Justification</h3>
<p>Next try this. Change the <code>System.out.printf</code> to<br>
<code>System.out.printf("Item %-15s weight %5d cost %7.2f\n", name, weight, cost);</code><br>
And try this. We get:<br>
     <code>Item Big Part&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;weight&nbsp;&nbsp;1818 cost&nbsp;&nbsp;185.96</code><br>

The width for the name is now more than what we want, but it is printed left justified in the field of 15 characters.</p>

<p>There is no rule, but most often, Strings are printed left justified while numbers are printed right justified.</p>
<h3>Commas in Numbers</h3>
<p>Finally, change the cost to 1200987.678 and then change the printf statement to<br>
<code>System.out.printf("Item %-15s weight %5d cost %,12.2f\n", name, weight, cost);</code><br>
We have made the width for the cost big enough, but have included a comma after the %. Try this. We get:<br>
     <code>Item Big Part&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;weight&nbsp;&nbsp;1818 cost 1,200,987.68</code>
     
So, the cost prints out OK, and with commas every three digits.</p>


  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
