<?php
//require_once './controllers/StartController.php';
require_once './vendor/autoload.php';

use CartController\CartController;

$controller=new CartController();

//require_once './views/selectedaction.php';
$controller->cartRemove();
?>
