<?php

require_once __DIR__ . "/../vendor/autoload.php";

$sql = "select * from top_concurrents";
$ret = \db\ManagementTopConc::query($sql);

var_dump($ret);