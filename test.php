<?php
$path = './';
$folderpath = $path."content/";
echo " <div class='sidenav'>\n";

// CHECKING WHETHER PATH IS A DIRECTORY OR NOT
if (is_dir($folderpath)) {
    // GETING INTO DIRECTORY
    $files = opendir($folderpath); {
        // CHECKING FOR SMOOTH OPENING OF DIRECTORY
        if ($files) {
            //READING NAMES OF EACH ELEMENT INSIDE THE DIRECTORY 
            while (($subfolder = readdir($files)) !== FALSE) {
                // CHECKING FOR FILENAME ERRORS
             $i = 0;
             if ($subfolder != '.' && $subfolder != '..') {
                    echo "<button class='dropdown-btn'>".$subfolder."\n<i class='fa fa-caret-down'></i>\n</button>";
                      
                $dirpath = $path."content/" . $subfolder . "/";
                    // GETING INSIDE EACH SUBFOLDERS
                    if (is_dir($dirpath)) {
                        $file = opendir($dirpath); {
                            if ($file) {
                //READING NAMES OF EACH FILE INSIDE SUBFOLDERS
               while (($filename = readdir($file)) !== FALSE) {
                if ($filename != '.' && $filename != '..') {
                        $gfgFilename = strval($filename);
                        $filenameTrim = substr($gfgFilename, 0, -4);
                        if ($i == 0) {
                          echo "\n<div class='dropdown-container'>";
                          $i = 1;
                        }
                        echo "<a href='".$path."".$dirpath."".$gfgFilename."''>".$filenameTrim."</a>\n";
                           }
                         }
                      }
                   }
               }
                    if ($i == 1) {
                      echo "</div>";
                    }
                  }
                }
            }
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Learn2CodeJava <?php echo $page;?></title> <!--set this based on page content-->
  <meta name="viewport" content="width=device width,initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link href="<?php echo $path; ?>assets/css/default.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Coda&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
      $(window).on('load resize',function(){
          if($(window).width() < 720){
              window.location = "<?php echo $path; ?>mobile/quiz.html" //link to current page but in ../mobile/ folder
          }
      });
  </script>
  <script> 
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script> 
</head>
<body>

</body>
</html>