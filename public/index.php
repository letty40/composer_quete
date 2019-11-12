<?php

require_once '../vendor/autoload.php';

use HelloWorld\SayHello;
echo SayHello::world();

use App\Wcs\Hello;
$qqch = new Hello();
echo $qqch->talk();