<?php

return [
    'interfaces' => [
        'google.cloud.dialogflow.v2beta1.Contexts' => [
            'ListContexts' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta1/{parent=projects/*/agent/sessions/*}/contexts',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/agent/environments/*/users/*/sessions/*}/contexts',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'GetContext' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta1/{name=projects/*/agent/sessions/*/contexts/*}',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{name=projects/*/agent/environments/*/users/*/sessions/*/contexts/*}',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'CreateContext' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta1/{parent=projects/*/agent/sessions/*}/contexts',
                'body' => 'context',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/agent/environments/*/users/*/sessions/*}/contexts',
                        'body' => 'context',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'UpdateContext' => [
                'method' => 'patch',
                'uriTemplate' => '/v2beta1/{context.name=projects/*/agent/sessions/*/contexts/*}',
                'body' => 'context',
                'additionalBindings' => [
                    [
                        'method' => 'patch',
                        'uriTemplate' => '/v2beta1/{context.name=projects/*/agent/environments/*/users/*/sessions/*/contexts/*}',
                        'body' => 'context',
                    ],
                ],
                'placeholders' => [
                    'context.name' => [
                        'getters' => [
                            'getContext',
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteContext' => [
                'method' => 'delete',
                'uriTemplate' => '/v2beta1/{name=projects/*/agent/sessions/*/contexts/*}',
                'additionalBindings' => [
                    [
                        'method' => 'delete',
                        'uriTemplate' => '/v2beta1/{name=projects/*/agent/environments/*/users/*/sessions/*/contexts/*}',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteAllContexts' => [
                'method' => 'delete',
                'uriTemplate' => '/v2beta1/{parent=projects/*/agent/sessions/*}/contexts',
                'additionalBindings' => [
                    [
                        'method' => 'delete',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/agent/environments/*/users/*/sessions/*}/contexts',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
        ],
        'google.longrunning.Operations' => [
            'GetOperation' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta1/{name=projects/*/operations/*}',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2/{name=projects/*/operations/*}',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
