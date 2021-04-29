<div class='sidenav'>
<?php
$folderpath = $path."Content/";

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
             if (strstr($subfolder, ".")) {
              $gfgSubfolder = strval($subfolder);
              $dirpath = $path."Content/" . $subfolder;
              $subfolderTrim = substr($gfgSubfolder, 0, -4);
              $part1 = "<button class='sidenav-btn' onclick=";
              $part2 = '"window.location=';
              $part3 = ';"';
              echo $part1."".$part2."'".$dirpath."'".$part3.">".$subfolderTrim."</button>";
             }
             else if ($subfolder != '.' && $subfolder != '..') {
                    echo "<button class='dropdown-btn'>".$subfolder."\n<i class='fa fa-caret-down'></i>\n</button>";
                      
                $dirpath = $path."Content/" . $subfolder . "/";
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
                        echo "<a href='".$dirpath."".$gfgFilename."''>".$filenameTrim."</a>\n";
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
</div>
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

<?php
  echo "<div class='page'>";
  echo "<p class='breadcrumbs'>".$myd," > ".$page."</p>";
  echo "<h1>".$page."</h1>";
?>