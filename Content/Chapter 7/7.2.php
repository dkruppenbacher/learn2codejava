<?php
  $page = "Lesson 7.2";
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
      <h2>Comma-separated Input and Output</h2>
      <p>Dealing with comma-separated data is almost idential to plain text. The main difference is how we deal with the lines.</p>
      <ul>
        <li>We first want to identify our rows of data. Comma-separated text is typically structured data, so it can be processed as such.</li>
        <li>Each line will be broken/split up and SEPARATED by its commas. To achieve this we will use the <code>.split()</code> method.</li>
        <li><code>.split()</code> takes a string as a delimiter and will break a string up based on that string. For example <code>lineOfData.split(",")</code> will take the line "Hello,World,I,Love,To,Code!" and break it up into 6 separate strings that will go into an array of strings. That will look like this: ["Hello", "World", "I", "Love", "To", "Code!"]</li>
      </ul>
      <code>
          ...<br>
          while(fIn.hasNextLine()) {<br>
          &emsp;String line = fIn.nextLine();<br>
          &emsp;String[] fields = line.split(",");<br>
          <br>
          &emsp;for (field : fields) {<br>
          &emsp;&emsp;//Do something to the data<br>
          &emsp;}<br>
          <br>
          <br>
          &emsp;if (array.length > 0) {<br>
          &emsp;&emsp;StringBuilder sb = new StringBuilder();<br>
          <br>
          &emsp;&emsp;for (String s : array) {<br>
          &emsp;&emsp;&emsp;sb.append(s).append(",");<br>
          &emsp;&emsp;}<br>
          <br>
          &emsp;&emsp;line = sb.deleteCharAt(sb.length() - 1).toString();<br>
          &emsp;}<br>
          <br>
          &emsp;fOut.println(out);<br>
          }<br>
          ...<br>
      </code><br>
      <p>In this case we are reading in comma-separated data, modifying it, and writing it in a comma-separated format.</p>
      <ul>
        <li>We used a <code>for each</code> statement to neatly loop though each value in the line and made a change to each of the fields. If we only wanted to change a specific field, a regular <code>for</code> loop or just an <code>if</code> statement might get the job done.</li>
      </ul>
      <p>The next lesson will take you through reading, processing, and writing with binary files.</p>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->