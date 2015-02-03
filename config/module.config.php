<?php

return [
    //controllers
    'controllers' => [
        'invokables' => [
            'JhHubBase\Controller\Index'            => 'JhHubBase\Controller\IndexController',
        ],
        'factories' => [
            'JhHubBase\Controller\RoleInstaller'    => 'JhHubBase\Controller\Factory\RoleInstallerControllerFactory',
            'JhHubBase\Controller\UserRest'         => 'JhHubBase\Controller\Factory\UserRestControllerFactory',
        ],
    ],

    //router
    'router' => [
        'routes' => [
            'home' => [
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller'    => 'JhHubBase\Controller\Index',
                        'action'        => 'dashboard'
                    ],
                ],
            ],
            'user-rest' => [
                'type' => 'segment',
                'options' => [
                    'route' => '/user-rest[/:id]',
                    'constraints' => [
                        'id' => '[0-9-]+',
                    ],
                    'defaults' => [
                        'controller' => 'JhHubBase\Controller\UserRest',
                    ]
                ],
            ]
        ],
    ],

    //console routes
    'console' => [
        'router' => [
            'routes' => [
                'role-installer' => [
                    'options'   => [
                        'route'     => 'install roles',
                        'defaults'  => [
                            'controller' => 'JhHubBase\Controller\RoleInstaller',
                            'action'     => 'installRoles'
                        ],
                    ],
                ],
            ],
        ],
    ],

    'service_manager' => [
        'abstract_factories' => [
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
            'JhHubBase\Factory\AbstractEmailNotificationFactory',
        ],
        'aliases' => [
            'translator'                => 'MvcTranslator',
            'JhHubBase\ObjectManager'   => 'Doctrine\ORM\EntityManager',
        ],
        'factories' => [
            'JhHubBase\Installer\RoleInstaller'                     => 'JhHubBase\Installer\Factory\RoleInstallerFactory',
            'JhHubBase\Installer\RoleInstallerListener'             => 'JhHubBase\Installer\Factory\RoleInstallerListenerFactory',
            'JhHubBase\Listener\SpiffyNavigationZfcRbacListener'    => 'JhHubBase\Listener\Factory\SpiffyNavigationZfcRbacListenerFactory',
            'SpiffyNavigation\Service\Navigation'                   => 'JhHubBase\Service\Factory\NavigationFactory',
            'JhHubBase\Options\ModuleOptions'                       => 'JhHubBase\Options\Factory\ModuleOptionsFactory'
        ],
        'invokables' => [
            'JhHubBase\Notification\NotificationService' => 'JhHubBase\Notification\NotificationService'
        ]
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'jh-hub/index/index'      => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],

    'spiffy_navigation' => [
        'containers' => [
            'default' => [
                'home' => [
                    'options' => [
                        'name' => 'Home',
                        'label' => 'Home',
                        'route' => 'home',
                    ],
                ],
            ],
            'admin' => [

            ]
        ],
    ],

    'jh_hub' => [
        'roles' => [
            'admin' => [
                'permissions' => [
                    'admin-nav.view',
                    'user.list'
                ],
                'children' => [
                    'user' => [
                        'permissions' => [
                            'user-nav.view',
                        ],
                        'children' => [
                            'guest',
                        ],
                    ],
                ],
            ],
        ]
    ],
];
