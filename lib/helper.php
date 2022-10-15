<?php

function redirect($page,int $sec):void{
    header("Refresh: $sec;url={$page}.php");
}
function redirectWithoutTime($page):void{
    header("LOCATION: {$page}.php");
}