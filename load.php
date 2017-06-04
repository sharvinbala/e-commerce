<?php

session_start();

include("includes/db.php");

include("functions/function.php");

switch($_REQUEST['sAction']){

default :

getProducts();

break;

case'getPaginator';

getPaginator();

break;

}

?>