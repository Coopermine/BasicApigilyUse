<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'AuthNova\\V1\\Rest\\Getconnect\\GetconnectResource' => 'AuthNova\\V1\\Rest\\Getconnect\\GetconnectResourceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'auth-nova.rest.getconnect' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/getconnect[/:getconnect_id]',
                    'defaults' => array(
                        'controller' => 'AuthNova\\V1\\Rest\\Getconnect\\Controller',
                    ),
                ),
            ),
            'auth-nova.rest.nova-cli' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/nova-cli[/:nova_cli_id]',
                    'defaults' => array(
                        'controller' => 'AuthNova\\V1\\Rest\\NovaCli\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'auth-nova.rest.getconnect',
            1 => 'auth-nova.rest.nova-cli',
        ),
    ),
    'zf-rest' => array(
        'AuthNova\\V1\\Rest\\Getconnect\\Controller' => array(
            'listener' => 'AuthNova\\V1\\Rest\\Getconnect\\GetconnectResource',
            'route_name' => 'auth-nova.rest.getconnect',
            'route_identifier_name' => 'getconnect_id',
            'collection_name' => 'getconnect',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'DELETE',
                2 => 'POST',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'AuthNova\\V1\\Rest\\Getconnect\\GetconnectEntity',
            'collection_class' => 'AuthNova\\V1\\Rest\\Getconnect\\GetconnectCollection',
            'service_name' => 'getconnect',
        ),
        'AuthNova\\V1\\Rest\\NovaCli\\Controller' => array(
            'listener' => 'AuthNova\\V1\\Rest\\NovaCli\\NovaCliResource',
            'route_name' => 'auth-nova.rest.nova-cli',
            'route_identifier_name' => 'nova_cli_id',
            'collection_name' => 'nova_cli',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'AuthNova\\V1\\Rest\\NovaCli\\NovaCliEntity',
            'collection_class' => 'AuthNova\\V1\\Rest\\NovaCli\\NovaCliCollection',
            'service_name' => 'NovaCli',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'AuthNova\\V1\\Rest\\Getconnect\\Controller' => 'HalJson',
            'AuthNova\\V1\\Rest\\NovaCli\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'AuthNova\\V1\\Rest\\Getconnect\\Controller' => array(
                0 => 'application/vnd.auth-nova.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'AuthNova\\V1\\Rest\\NovaCli\\Controller' => array(
                0 => 'application/vnd.auth-nova.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'AuthNova\\V1\\Rest\\Getconnect\\Controller' => array(
                0 => 'application/vnd.auth-nova.v1+json',
                1 => 'application/json',
            ),
            'AuthNova\\V1\\Rest\\NovaCli\\Controller' => array(
                0 => 'application/vnd.auth-nova.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'AuthNova\\V1\\Rest\\Getconnect\\GetconnectEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'auth-nova.rest.getconnect',
                'route_identifier_name' => 'getconnect_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'AuthNova\\V1\\Rest\\Getconnect\\GetconnectCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'auth-nova.rest.getconnect',
                'route_identifier_name' => 'getconnect_id',
                'is_collection' => true,
            ),
            'AuthNova\\V1\\Rest\\NovaCli\\NovaCliEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'auth-nova.rest.nova-cli',
                'route_identifier_name' => 'nova_cli_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'AuthNova\\V1\\Rest\\NovaCli\\NovaCliCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'auth-nova.rest.nova-cli',
                'route_identifier_name' => 'nova_cli_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'AuthNova\\V1\\Rest\\Getconnect\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'AuthNova\\V1\\Rest\\NovaCli\\NovaCliResource' => array(
                'adapter_name' => 'NovaCli',
                'table_name' => 'NovaCli',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'AuthNova\\V1\\Rest\\NovaCli\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'AuthNova\\V1\\Rest\\NovaCli\\NovaCliResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'AuthNova\\V1\\Rest\\NovaCli\\Controller' => array(
            'input_filter' => 'AuthNova\\V1\\Rest\\NovaCli\\Validator',
        ),
        'AuthNova\\V1\\Rest\\Getconnect\\Controller' => array(
            'input_filter' => 'AuthNova\\V1\\Rest\\Getconnect\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'AuthNova\\V1\\Rest\\NovaCli\\Validator' => array(
            0 => array(
                'name' => 'ub',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'sb',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'servidor',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'chave_N',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'razaosocial',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'descricao',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            6 => array(
                'name' => 'endereco',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            7 => array(
                'name' => 'cidade',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            8 => array(
                'name' => 'numero',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            9 => array(
                'name' => 'telefone',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            10 => array(
                'name' => 'site',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            11 => array(
                'name' => 'logo',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            12 => array(
                'name' => 'contato',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            13 => array(
                'name' => 'ativo',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            14 => array(
                'name' => 'sn',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            15 => array(
                'name' => 'lat',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            16 => array(
                'name' => 'lng',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            17 => array(
                'name' => 'az',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
        ),
        'AuthNova\\V1\\Rest\\Getconnect\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'id',
                'description' => '',
            ),
            1 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'chave_N',
            ),
            2 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'razaosocial',
            ),
        ),
    ),
);
