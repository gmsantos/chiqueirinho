<?php

// Hipotesis: is strict type enabled by front controller?
// https://www.sitepoint.com/community/t/php7-strict-mode-globally/191403/3
// http://php.net/manual/pt_BR/migration70.new-features.php

require_once 'sum.php';
require_once 'sum_strict.php';
require_once 'sum_loose.php';

include 'run.php';
