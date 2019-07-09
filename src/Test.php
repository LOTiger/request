<?php


require('./Autoload.php');
Autoload::init();
use Lotiger\Handle;
$request = new Handle();
// $request = Test::main();
// var_dump($request->get);

// class Test
// {
//     public static function main()
//     {
//         echo 'main is running';
//         return new Handle();
//     }
// }