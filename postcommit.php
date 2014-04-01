<?php

// this script sets a flag in a file that gets checked by a cron job every minute
// the cron job then updates doxygen if required

// the simple act of calling this script will create a doxygen refresh in the next 60 seconds

file_put_contents("doxygen_refresh.txt", "1");

echo "Doxygen refresh scheduled for the next 60 seconds.";


//$poststr = print_r($_REQUEST['payload'], true);


//$json_data = json_decode($_REQUEST['payload'], true);


//var_dump($json_data);

//echo "hook id: " . $json_data["hook_id"];
//echo "action: " . $json_data["action"];
//echo "number: " . $json_data["number"];


//echo "git checkout master"
//echo "git pull " . $json_data["pull_request"]["head"]["url"] . " " . $json_data["pull_request"]["head"]["repo"][";



//file_put_contents("post.txt", $poststr);

?>

