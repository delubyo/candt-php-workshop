<?php

use function DI\factory;
use function DI\object;
use Delubyo\CandTPHPWorkshop\Exercise\HelloWorld;
use Delubyo\CandTPHPWorkshop\Exercise\AcceptArgs;
use Delubyo\CandTPHPWorkshop\Exercise\SumThem;

return [
    //Define your exercise factories here
    HelloWorld::class    => object(HelloWorld::class),
    AcceptArgs::class    => object(AcceptArgs::class),
    SumThem::class    => object(SumThem::class),
    'eventListeners' => [
        'create-solution-for-first-exercise' => [
            'exercise.selected.hello-world' => [
                function () {
                    if (!file_exists('hello-world.php')) {
                        touch('hello-world.php');
                    }
                }
            ]
        ]
    ]
];
