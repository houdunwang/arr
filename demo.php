<?php
require 'vendor/autoload.php';
$obj = new \houdunwang\arr\Arr();
$d   = [ 'a' => 1, 'b' => 2,'app'=>['debug'=>33] ];
echo $obj->get( $d, 'app.debug', '没有数据哟' );