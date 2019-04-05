<?php

use function DI\factory;
use function DI\object;
use Delubyo\CandTPHPWorkshop\Exercise\HelloWorld;


return [
    //Define your exercise factories here
    HelloWorld::class    => object(HelloWorld::class),
];
