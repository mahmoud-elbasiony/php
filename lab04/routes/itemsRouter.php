<?php

$item_id=isset($_GET["id"]) && is_numeric($_GET["id"])?intval($_GET["id"]):"";
$page_number=isset($_GET["page_number"]) && is_numeric($_GET["page_number"])?intval($_GET["page_number"]):0;
$items_count=get_rows_count("items");
$prev=($page_number-1)<0?0:($page_number-1);
$next=($page_number+1)>$items_count/__RECORDS_PER_PAGE__?$page_number:($page_number+1);

if(!empty($item_id)){
    require_once("./views/single.php");
}else{
    require_once("./views/all.php");
}