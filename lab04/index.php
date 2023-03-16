<?php

require("vendor/autoload.php");
$page=isset($_GET["page"])?$_GET["page"]:"";

switch($page){
    case "items":
        require_once("routes/itemsRouter.php");
        break;
    default:
        require_once("routes/itemsRouter.php");
        break;
}
