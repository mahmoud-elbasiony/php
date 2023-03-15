<?php
session_start();
require("vendor/autoload.php");
$counter=new Counter();
$counter->increment_update();
echo "<h3>Number of visits: ".$counter->get_count()."</h3>";
