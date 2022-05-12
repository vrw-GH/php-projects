<?php
echo '<h1> My Projects </h1> ';
echo "<hr>";

$path = '.';
// Check directory exists or not
if(file_exists($path) && is_dir($path)){
   // Scan the files in this directory
   $result = scandir($path);
   // Filter out the current (.) and parent (..) directories
   $files = array_diff($result, array('.', '..'));
   if(count($files) > 0){
      // Loop through retuned array
      foreach($files as $file){
         if(!is_file("$path/$file")){
            // Display Project link            
            // $a_link = '<a href="/projects/'.$file.'"> '.$file.' </a>';
            // echo $a_link;
            echo '<a href="/projects/'.$file.'"> '.$file.' </a>';
            echo '<br>';
         } else {
            // do nothing
         }
      }
   } else{
      echo "No Projects found.";
   }
} else {
   echo "ERROR: The directory does not exist.";
}
echo '<br>';
echo "------------ End Of List ------------".'<br>'.'<br>'.'<br>'.'<br>';
//todo echo '<a href="/projects">List Projects Directory</a>';  cant overide index.php
echo '<a href="/"> Home </a>';