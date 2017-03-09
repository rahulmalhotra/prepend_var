<?php

include('utility.php');

$data = "World";
$text = "Hello ";

$data = prepend_var($data,$text);

echo $data;

?>