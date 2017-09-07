<?php
class JMVPDO extends PDO
{
    public function __construct($file = '../../settings/jmv_settings.ini')
    {
        if (!$settings = parse_ini_file($file, TRUE)) throw new Exception('Unable to open ' . $file);

        $dsn = $settings['database']['driver'] . ':host=' . $settings['database']['host'] . ';dbName=' . $settings['database']['dbName'] . ';charset=' . $settings['database']['charset'] . ';port=' . $settings['database']['port'];

        //echo $settings['database']['port'];
        var_dump($dsn);

        parent::__construct($dsn, 'juanmaverde', 'nstlqe');
    }
}

$pdo = new JMVPDO();
// echo "<pre>";
// var_dump($pdo);
?>
