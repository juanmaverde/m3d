<?php
//@COME_BACK este archivo no funciona
$file = '../../settings/jmv_settings.ini';

$settings = parse_ini_file($file, TRUE);

   $dsn = $settings['database']['driver'] . ':host=' . $settings['database']['host'] . ';' . 'port=' . $settings['database']['port'] . ';dbname=' . $settings['database']['dbname'];

   $dbUser = $settings['database']['username'];
   $dbPass = $settings['database']['password'];

function getPDOData()
{
   return $dsn . ', ' . $dbUser . ', ' . $dbPass;
}

$var = getPDOData();
echo $var;

?>
