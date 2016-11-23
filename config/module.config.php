<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace CepConsulta;

use CepConsulta\Controller\ConsultaController;
use Zend\Router\Http\Literal;

return [
    'router' => [
        'routes' => [
            'public-cep' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/consulta'
                ],
                'may_terminate' => false,
                'child_routes' => [
                    'veiculo' => [
                        'type' => 'segment',
                        'options' => [
                            'verb' => 'get',
                            'route' => '/cep[/:id]',
                            'defaults' => [
                                'controller' => ConsultaController::class,
                            ]
                        ]
                    ]
                ]
            ],
        ],
    ],
    'view_manager' => [
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ]
];