<?php

use core\database\Connection;
use core\database\QueryBuilder;

$app['config']= require 'config.php';

$app['database']=new QueryBuilder(
    Connection::make($app['config']['database'])
);
$app['database']->insert(
    'articles',[
        'name'=>'article1',
        'body'=>'body1'
    ]
    );
function view($file,$data=[]){
    extract($data);
    return require "/app/views/$file.view.php";

}