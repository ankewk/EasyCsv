<?php
    include_once dirname(__FILE__).'/EasyCsv.php';
    # import csv file 
    $initRes = EasyCsv::init('array', dirname(__FILE__).'/demo.csv','r');
    if(!$initRes)
        $error = EasyCsv::getError();
    $data = EasyCsv::importCsv(['性别','年龄']);
    echo "<pre>";
    print_r($data);
?>