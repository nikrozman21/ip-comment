<?php
define('DB_HOST', '116.203.97.25');
define('DB_NAME', 'ipinfo');
define('DB_USERNAME', 'ipinfo');
define('DB_PASSWORD', '9JBGB8rry95zKOO9');
define('NAME', 'ipinfo');

try {
    $odb = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    }
    catch( PDOException $Exception ) {
        error_log('ERROR: '.$Exception->getMessage().' - '.$_SERVER['REQUEST_URI'].' at '.date('l jS \of F, Y, h:i:s A')."\n", 3, 'error.log');
        die(ERROR_MESSAGE);
}

function error($string){
return '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR:</strong> '.$string.'</div>';
}

function success($string){
return '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>SUCCESS:</strong> '.$string.'</div>';
}

function IsSafe($string){
    if(preg_match('/[^a-zA-Z0-9_]/', $string) == 0){
        return true;
    } else {
        return false;
    }
}
?>
