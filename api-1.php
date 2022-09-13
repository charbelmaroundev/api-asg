<?php 

$string = $_GET["string"];
$boolean = false;

if ($string == strrev($string)) {
   $boolean = true;
} else {
      $boolean = false;
};

$result = [
    "Polindrome" => $boolean
];

echo json_encode($result);
?>