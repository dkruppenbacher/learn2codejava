<?php
  $page = "Lesson 7.1";
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
      <h2>Advanced Input/Output Overview</h2>
      <p><strong>Important terms:</strong></p>
      <ul>
        <li>Plain Text Files: These files contain human readable text. They're typically accompanied by the .txt extension and can be opened, edited, and saved by almost all text editors.</li>
        <li>Separated Value Files: These files typically contain data that has been separated by certain characters. Typically either a set of commas or semicolons are used to separate this data. These files are still human readable and can be opened by most text editors. They typically have the extension of .csv.</li>
        <li>Binary Files: These files are near impossible for humans to read as they contain binary data. Some text editors will do a better job at displaying binary data than others. There is very little overhead involved when processing binary files, so they are recommended for any large data sets.</li>
      </ul>
      <p>Let's start with the basics of input/output</p>
      <code>
          Hello there! I am Text!<br>
          And you are?           <br>
      </code><br>
      <p>Java has built in classes to deal with File I/O. Let's take that text above and run it through this code!</p>
      <code>
          import java.util.*; //Imported for the Scanner Class<br>
          import java.io.*; //Java Input/Output Classes<br>
          <br>
          public class readInFileAndWriteToUpperCase {<br>
          <br>
          &emsp;public static void main(String[] args) {<br>
          &emsp;&emsp;// Get file names<br>
          &emsp;&emsp;String fNameIn = "fileIn.txt";<br>
          &emsp;&emsp;String fNameOut = "fileOut.txt";<br>
          &emsp;&emsp;<br>
          &emsp;&emsp;// Open the files<br>
          &emsp;&emsp;Scanner fIn = null;<br>
          &emsp;&emsp;PrintWriter fOut = null;<br>
          &emsp;&emsp;<br>
          &emsp;&emsp;try {<br>
          &emsp;&emsp;&emsp;fIn = new Scanner(new FileReader(new File(fNameIn)));<br>
          &emsp;&emsp;&emsp;fOut = new PrintWriter(new FileWriter(new File(fNameOut)));<br>
          &emsp;&emsp;}<br>
          &emsp;&emsp;catch(FileNotFoundException fnfe) {<br>
          &emsp;&emsp;&emsp;System.out.println(fnfe);<br>
          &emsp;&emsp;&emsp;System.exit(1);<br>
          &emsp;&emsp;}<br>
          &emsp;&emsp;catch(IOException ioe) {<br>
          &emsp;&emsp;&emsp;System.out.println(ioe);<br>
          &emsp;&emsp;&emsp;System.exit(1);<br>
          &emsp;&emsp;}<br>
          &emsp;&emsp;catch(Exception e) {<br>
          &emsp;&emsp;&emsp;System.out.println(e);<br>
          &emsp;&emsp;&emsp;System.exit(1);<br>
          &emsp;&emsp;}<br>
          &emsp;&emsp;<br>
          &emsp;&emsp;// Copy with change to upper case<br>
          &emsp;&emsp;while(fIn.hasNextLine()) {<br>
          &emsp;&emsp;&emsp;String line = fIn.nextLine();<br>
          &emsp;&emsp;&emsp;line = line.toUpperCase();<br>
          &emsp;&emsp;&emsp;fOut.println(line);<br>
          &emsp;&emsp;}<br>
          &emsp;&emsp;<br>
          &emsp;&emsp;// Close files<br>
          &emsp;&emsp;fIn.close();<br>
          &emsp;&emsp;fOut.close();<br>
          &emsp;&emsp;}<br>
          &emsp;}<br>
          <br>
          }<br>
      </code><br>
      <p>The code above will return this.</p>
      <code>
          HELLO THERE! I AM TEXT!<br>
          AND YOU ARE?           <br>
      </code><br>
      <p>Let's break that down, line by line.</p>
      <ul>
        <li>The first two lines, we import <code>java.util.*</code> and <code>java.io.*</code>. Util contains the scanner class. IO contains the necessary classes to read and write files <code>(File, FileWriter, FileReader, and PrintWriter)</code>.</li>
        <li>The class name is an example and we are working withing a MAIN method.</li>
        <li>In the main method, we first define the file we want to INPUT. We then define the file we want to OUTPUT to (the output file is not required to exist for java to output to it).</li>
        <li>When dealing with files, we need to use try/catch statements. If a file does not exists or Java cannot access the file, we want it to fail gracefully.</li>
        <li>Inside out try statement, we will <code>try</code> to read in our file as well as set up out output file.</li>
        <li>We will <code>catch</code> any errors and exit the program if any exeptions are thrown. The first two exceptions are IO based and the last exception is a generic exception.</li>
        <li>Finally we will process the data in the while loop. The <code>.hasNextLine()</code> will return true if the file has another line.</li>
        <li>Files are read line by line using this method. The <code>.nextLine()</code> method will get the next line from our INPUT file and the <code>.println()</code> will write the modified lines to the OUTPUT file.</li>
        <li>Finally, we close the connection to the INPUT and OUTPUT files. <strong>ALWAYS close files when you are finished with them to ensure that every line/byte has been written to the file.</strong></li>
      </ul>
      <p>The next lesson will take you through reading, processing, and writing with comma-separated files.</p>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
