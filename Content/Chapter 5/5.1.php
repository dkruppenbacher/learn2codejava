<?php
  $page = "Lesson 5.1";
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
    <p>Arrays are simple structures used to create a collection of items of the same type. Each item in an array can be accessed by it's position number, known as it's index. Lets look at the instantiation of an array:</p>
    <!--Use <code> to define a code block. Use <br> to make line breaks, and a &emsp;&emsp; to define a tab-->
    <code>
      TYPE[] NAME = new TYPE[number elements]; <br>
    </code><br>
      <p>Let's break it down:</p>
      <ul>
        <li> 'TYPE' is the data type you want to be in the array. Every element in an array has to be of the same type.</li>
        <li>'NAME' is the name that you give the array in order to access the data in the array</li>
        <li>The number of elements is the number of elements you wish to place in the array. This number cannot change once it is set.</li>
        <li>The numbering of indices ALWAYS starts at 0 and the last index is the number of elements - 1. For example, if you initialize an array of 10 ints, the indices will go from 0 to 9.</li>
    </ul>
    <p>There is another way to initialize an array, which is done by</p>
      <code>
        TYPE[] NAME = {Value1, Value2, Value3 ...}; <br>  
      </code><br>
      <p>This instantiation is used when you want to store all of the data for the array right away.</p>
      <p>Let's take a look at the ways to access and modify the array. Here is how you would access a specific index.</p>
      <code>
        NAME[INDEX]; <br>
      </code><br>
      <p>The name is the name you gave the array, and the index is the index of the data you want to access.</p>
      <p>To add a value to this index, you would take the statement above and assign it a value:</p>
      <code>
        NAME[INDEX] = newValue; <br>
      </code> <br>
      <p>Finally, to get the length of the array, you would use</p>
      <code>
        NAME.length; <br>
      </code><br>
      
      <p>Although arrays can be helpful, there are still many limitations to them. The size is fixed, which means the array cannot grow or shrink after it is instantiated. You also cannot easily add or delete values from the middle of the array; only at one end. For this reason, ArrayLists are commonly used. Continue to 5.2 to learn about them!</p>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
