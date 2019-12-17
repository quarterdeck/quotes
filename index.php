<?php
header('Content-type:application/json;charset=utf-8');

include_once('quotes.php');

echo json_encode($quotes[array_rand($quotes)]);
