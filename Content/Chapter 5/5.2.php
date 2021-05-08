<?php
  $page = "Lesson 5.2";
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
    <p>ArrayList is a class in java, which means we must <code>import java.util.*;</code> in order to access it. To declare an ArrayList, we use the following form:</p>
    <code>
        ArrayList&lt;String&gt; list = new ArrayList&lt;String&gt;(); <br>
    </code>
    <!--Use <code> to define a code block. Use <br> to make line breaks, and a &emsp;&emsp; to define a tab-->
    <p>Initially this list has no elements, but it will grow as you add more elements. In this specific ArrayList, there will only be String elements. All elements must be of the instantiated type, just like an array. They are also numbered starting at 0.</p>
    <p>To add to an ArrayList, you use he add method, <code>list.add("Stawberries");</code>. This causes the list to grow by one slot, adding 'Strawberries' to the end of the list.</p>
    <p>To get the current size of the list, you use <code>list.size();</code></p>
    <p>To get an item at a specified position, n, use <code>String s = list.get(n);</code> This saves the String at position n to the new String variable s.</p>
    <p>You can also add a new value at any position, even if something exists already. This is done by <code>list.add(5, "Grapes");</code> This puts 'Grapes' at position 5, which moves all existing positions 5, 6, 7... to 6, 7, 8, and so on. It pushes apart the list to open up position 5 for 'Grapes'.</p>
    <p>You can also change a value at a specific location, using <code>list.set(n, "new value");</code></p>
    <p>To remove an item, use <code>list.remove(n);</code> This removes the item at this position, which then moves all te items after that one back down one spot. For example, if we remove, if we remove 3, then 4, 5, 6 would now be in spots 3, 4, 5.</p>
    <p>ArrayLists can be made of any object or class, not just String. Because of this, Java has created wrapper classes of the primitive types. For example, if you need a list of ints, you would use the wrapper class 'Integer' and instantiate it as <code>ArrayList&lt;Integer&gt; list = new ArrayList&lt;Integer&gt;();</code> Here are the wrapper classes:</p>
    <ul>
        <li>Integer = int</li>
        <li>Double = double</li>
        <li>Character = char</li>
        <li>Boolean = boolean</li>
    </ul>
    <p>Both arrays and ArrayLists can be used with for loops. For example, if you wanted to print out all the items in the ArrayList 'list', then you would do the following:</p>
    <code>
        for(int count = 0; count &lt; list.size(); count++) {<br>
        &emsp;&emsp;System.out.println(list.get(i)); <br>
        }  
    </code>
  </div>
</div>
<!-- footer-normal.php start -->
<?php
  include($path.'assets/inc/footer-default.php');
?>
<!-- footer-normal.php end-->
