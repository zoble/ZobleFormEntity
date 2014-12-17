<?php
return array(

    'service_manager' => array(
        'factories' => array(
        ),
        'invokables' => array(
        ),
    ),

    'hydrators' => array(
        'factories' => array(
        )
    ),

    'router' => array(
        'routes' => array(
            'form_entity_module' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/form_entity_module',
                    'defaults' => array(
                        'controller' => 'FormEntityTest\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
           // 'FormEntityTest\Controller\Index' => 'FormEntityTest\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
         'template_map' => array(
             
         ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

);
