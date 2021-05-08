<?php
  $page = "Lesson 7.3";
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
      <h2>Binary Input and Output</h2>
      <p><strong>Important ideas:</strong></p>
      <ul>
        <li>Binary files are structured, so you can't just read all the binary data in and process it. You need to be specific about what type of data is being read in.</li>
        <li>For exanple, if you knew a binary file's data was structured (int, int, double, float, String, String, int) Java would have no idea what to do with that if it was brought in on its own. Luckily, there are methods in Java.io.* that help us deal with this type of data.</li>
      </ul>
      <p>Let's take this bit of data as an example</p>
      <code>
        000c 4765 6f72 6765 2042 726f 776e 0000<br>
        6068 400b 3333 3333 3333 000b 5261 6c70<br>
        6820 536d 6974 6800 0030 3940 1000 0000<br>
        0000 00<br>
      </code><br>
      <p>In this instance, because we made this data, we know that there will be a String, an Int, and a Double, and so on. It will take on that pattern until the end of the data.</p>
      <ul>
        <li>The methods we would use in java to read this in are:</li>
        <ul>
            <li><code>readUTF()</code></li>
            <li><code>readInt()</code></li>
            <li><code>readDouble()</code></li>
        </ul>
        <li>Java also has:</li>
        <ul>
            <li><code>readBoolean()</code></li>
            <li><code>readByte()</code></li>
            <li><code>readChar()</code></li>
            <li><code>readFloat()</code></li>
            <li><code>readLong()</code></li>
            <li><code>readShort()</code></li>
            <li>And a few more that we won't get into here</li>
        </ul>
        <li>Take a look at the full list <a href="https://docs.oracle.com/javase/7/docs/api/java/io/DataInputStream.html">here</a>!</li>
      </ul>
      <p>Now, as for the code to read in that binary data. Lets assume we have a object to bring this data into.</p>
      <code>
        public class Student {<br>
        &emsp;private String username;<br>
        &emsp;private int id;<br>
        &emsp;private double gpa;<br>
        &emsp;<br>
        &emsp;// Constructor<br>
        &emsp;public Student(String _username, int _id, double _gpa) {<br>
        &emsp;&emsp;username = _username;<br>
        &emsp;&emsp;id = _id;<br>
        &emsp;&emsp;gpa = _gpa;<br>
        &emsp;}<br>
        &emsp;<br>
        &emsp;// Accessors<br>
        &emsp;public String getUsername() { return username; }<br>
        &emsp;public int getId() { return id; }<br>
        &emsp;public double getGPA() { return gpa; }<br>
        &emsp;<br>
        &emsp;// Mutators<br>
        &emsp;public void setUsername(String _username) { username = _username; }<br>
        &emsp;public void setId(int _id) { id = _id; }<br>
        &emsp;public void setGPA(double _gpa) { gpa = _gpa; }<br>
        &emsp;<br>
        &emsp;// toString<br>
        &emsp;public String toString() {<br>
        &emsp;&emsp;return String.format("%-20.20s %5d %7.2f", username, id, gpa);<br>
        &emsp;}<br>
        }<br>
      </code><br>
      <p>This student class takes a String, an Int, and a Double. How convenient.</p>
      <p>This next bit will read in the data to two Student objects.</p>
      <code>
        import java.io.*;<br>
        public class TestInputBin {<br>
        &emsp;public static void main(String[] args) {<br>
        &emsp;&emsp;Student student1 = new Student("", 0, 0.0);<br>
        &emsp;&emsp;Student student2 = new Student("", 0, 0.0);<br>
        <br>
        &emsp;&emsp;// open the file for reading<br>
        &emsp;&emsp;final String fName = "data.dat";<br>
        &emsp;&emsp;DataInputStream dis = null;<br>
        &emsp;&emsp;try {<br>
        &emsp;&emsp;&emsp;FileInputStream fis = new FileInputStream(new File(fName));<br>
        &emsp;&emsp;&emsp;dis = new DataInputStream(fis);<br>
        &emsp;&emsp;}<br>
        &emsp;&emsp;catch(IOException ioe) {<br>
        &emsp;&emsp;&emsp;System.out.println("Error opening file: " + ioe);<br>
        &emsp;&emsp;&emsp;System.exit(1);<br>
        &emsp;&emsp;}<br>
        <br>
        &emsp;&emsp;try {<br>
        &emsp;&emsp;&emsp;// read in student1<br>
        &emsp;&emsp;&emsp;stu1.setUsername(dis.readUTF());<br>
        &emsp;&emsp;&emsp;stu1.setId(dis.readInt());<br>
        &emsp;&emsp;&emsp;stu1.setGPA(dis.readDouble());<br>
        <br>
        &emsp;&emsp;&emsp;// read in student2<br>
        &emsp;&emsp;&emsp;stu2.setUsername(dis.readUTF());<br>
        &emsp;&emsp;&emsp;stu2.setId(dis.readInt());<br>
        &emsp;&emsp;&emsp;stu2.setGPA(dis.readDouble());<br>
        &emsp;&emsp;}<br>
        &emsp;&emsp;catch(IOException ioe) {<br>
        &emsp;&emsp;&emsp;System.out.println("Error reading file: " + ioe);<br>
        &emsp;&emsp;&emsp;System.exit(1);<br>
        &emsp;&emsp;}<br>
        <br>
        &emsp;&emsp;// Close the file<br>
        &emsp;&emsp;try {<br>
        &emsp;&emsp;&emsp;dis.close();<br>
        &emsp;&emsp;}<br>
        &emsp;&emsp;catch(IOException ioe) {<br>
        &emsp;&emsp;&emsp;System.out.println("Error closing file: " + ioe);<br>
        &emsp;&emsp;&emsp;System.exit(1);<br>
        &emsp;&emsp;}<br>
        <br>
        &emsp;&emsp;// Print out results<br>
        &emsp;&emsp;System.out.println(stu1 + "\n\n" + stu2);<br>
        &emsp;}<br>
        }<br>
      </code>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->