<?php

date_default_timezone_get('America/Sao_Paulo');
setlocale(LC_TIME, 'PT_BR', 'pt_BR.utf-8', 'portuguese');

// Pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));

require_once(realpath(dirname(__FILE__) .'/database.php'));