<?php
$username = $_POST['path'];
$target_dir = "json/";
$target_files = $target_dir.$username."*.json";
$return_text = 0;
$exists = false;
foreach (glob($target_files) as $filename) {
    $exists = true;
}
// Check file exist or not
if( $exists ){

// Remove file 
 array_map('unlink', glob($target_files));

// Set status
 $return_text = 1;
}else{

// Set status
 $return_text = 0;
}

// Return status
echo $return_text;
?>