<?php

use Facades\DB;

require 'autoload.php'; // Pas toucher svp

// echo "• Elephant" . PHP_EOL;
// $elephant = new Elephant("Babar");
// $elephant->manger();
// $elephant->dormir();

// echo "• Giraf" . PHP_EOL;
// $giraf = new Giraf("Sophie");
// $giraf->manger();
// $giraf->dormir();

var_dump(DB::getInstance());
