<?php

return [
    'interfaces' => [
        'google.cloud.dialogflow.v2beta1.SessionEntityTypes' => [
            'ListSessionEntityTypes' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta1/{parent=projects/*/agent/sessions/*}/entityTypes',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/agent/environments/*/users/*/sessions/*}/entityTypes',
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
            'GetSessionEntityType' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta1/{name=projects/*/agent/sessions/*/entityTypes/*}',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{name=projects/*/agent/environments/*/users/*/sessions/*/entityTypes/*}',
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
            'CreateSessionEntityType' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta1/{parent=projects/*/agent/sessions/*}/entityTypes',
                'body' => 'session_entity_type',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/agent/environments/*/users/*/sessions/*}/entityTypes',
                        'body' => 'session_entity_type',
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
            'UpdateSessionEntityType' => [
                'method' => 'patch',
                'uriTemplate' => '/v2beta1/{session_entity_type.name=projects/*/agent/sessions/*/entityTypes/*}',
                'body' => 'session_entity_type',
                'additionalBindings' => [
                    [
                        'method' => 'patch',
                        'uriTemplate' => '/v2beta1/{session_entity_type.name=projects/*/agent/environments/*/users/*/sessions/*/entityTypes/*}',
                        'body' => 'session_entity_type',
                    ],
                ],
                'placeholders' => [
                    'session_entity_type.name' => [
                        'getters' => [
                            'getSessionEntityType',
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteSessionEntityType' => [
                'method' => 'delete',
                'uriTemplate' => '/v2beta1/{name=projects/*/agent/sessions/*/entityTypes/*}',
                'additionalBindings' => [
                    [
                        'method' => 'delete',
                        'uriTemplate' => '/v2beta1/{name=projects/*/agent/environments/*/users/*/sessions/*/entityTypes/*}',
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
