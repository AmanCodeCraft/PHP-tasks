<?php
//preg Match function 
$string = "aman is gud boy.aman";
$exp = preg_match_all("/aman|gud/", $string, $finded_data); //find words in all array
if ($exp) {
    echo "match was found!";
} else {
    echo "was not found!";
}
print_r($finded_data);
