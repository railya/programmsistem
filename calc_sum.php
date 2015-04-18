<?php

header('Content-Type: text/plain');

$arg1 = floor(isset($_GET['arg1']) ? $_GET['arg1'] : 0);
$arg2 = floor(isset($_GET['arg2']) ? $_GET['arg2'] : 0);

echo $arg1 + $arg2;