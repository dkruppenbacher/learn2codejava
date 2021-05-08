<?php
if(!isset($_GET['name']) || $_GET['name'] == "") {
        die('Error no name provided');
    }else{
        $name = $_GET['name'];
    }

if(!isset($_GET['comment']) || $_GET['comment'] == "") {
        die('Error no message provided');
    }else{
        $message = $_GET['comment'];
    }

    // Connect to database
    include("dbconn.php");

    $date = date("Y-m-d H:i:s"); // gets exact time

     // inserts data into datatable    
    $stmp = $mysqli->prepare("INSERT INTO `commentsGroup` (`name`, `message`, `date`) VALUES (?,?,?);");  
    
    // sets the values in the table
    $stmp->bind_param("sss", $_GET['name'], $_GET['comment'], $date);

    $stmp->execute(); // executes

    $mysqli->close(); // closes

    header('location: comments.php');
?>
