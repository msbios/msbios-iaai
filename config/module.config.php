<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\IaaI;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'controllers' => [
        'factories' => [
            Controller\StockController::class =>
                InvokableFactory::class
        ]
    ],

    'console' => [
        'router' => [
            'routes' => [
                'cli.stock' => [
                    'type' => 'simple',
                    'options' => [
                        'route' => 'stock',
                        'defaults' => [
                            'controller' => Controller\StockController::class,
                            'action' => 'synch',
                        ],
                    ],
                ],
            ],
        ],
    ],

    Module::class => [
        // ...
    ]
];
