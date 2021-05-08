<?php
  $page = "Comment";
  $pagetype = "comment";
  $path = './';
  include($path.'assets/inc/head-default.php');
  include($path.'assets/inc/nav-home-default.php');
?>

<h2 class="share">Share your questions with our team!</h2>
        <div class="Ccontainer">
            <form action="process.php" method="get" onsubmit="return validation();" name="myForm">
                <div class="row">
                    <div class="label">
                        <label for="fname">Name:</label>
                    </div>
                    <div class="input">
                        <input type="text" name="name" placeholder="Your name...">
                    </div>
                </div>
                <div class="row">
                    <div class="label">
                        <label for="subject">Comment:</label>
                    </div>
                    <div class="userinput">
                        <textarea name="comment" rows="5" cols="50" placeholder="Say Something!"></textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Share a comment" />
                </div>
            </form>
        </div>
        <h3>Latest Comments</h3>
        <hr>
<?php
            
            include("dbconn.php");
            $query = "SELECT * FROM `commentsGroup` ORDER BY id DESC"; // selects everything from database 
            $result = $mysqli->query($query);
            ?>
            <!-- loops through rrows and prints info out in the list -->
            <?php
                while($row = $result -> fetch_assoc()) {
                echo "<p><strong><div class='comment'>" . $row['name'] . ":</strong>". "@<i><small>" .$row['date'] . "</small></i><br>" . "<small><div class='message'>" . $row['message']  . "</div></small></p></div>"; 
            } 
            ?>

<?php
  include($path.'assets/inc/footer-default.php');
?>