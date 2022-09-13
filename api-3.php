<?php

$password = $_POST["password"];
$boolean = false;

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if ($uppercase && $lowercase && $number && $specialChars && strlen($password) > 14) {
    $boolean = true;
} else {
    $boolean = false;
};

$results = [
    "password is strong" => $boolean
];


echo json_encode($results);
?>