<?php
return [
    'doctrine' => [
        'driver' => [
            'organiza_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    0 => './module/organiza/src/V1/Entity',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'organiza' => 'organiza_driver',
                ],
            ],
        ],
    ],
    'router' => [
        'routes' => [
            'organiza.rest.doctrine.involved' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/involved[/:involved_id]',
                    'defaults' => [
                        'controller' => 'organiza\\V1\\Rest\\Involved\\Controller',
                    ],
                ],
            ],
            'organiza.rest.doctrine.user' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/user[/:user_id]',
                    'defaults' => [
                        'controller' => 'organiza\\V1\\Rest\\User\\Controller',
                    ],
                ],
            ],
            'organiza.rest.doctrine.contract' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/contract[/:contract_id]',
                    'defaults' => [
                        'controller' => 'organiza\\V1\\Rest\\Contract\\Controller',
                    ],
                ],
            ],
            'organiza.rest.doctrine.company' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/company[/:company_id]',
                    'defaults' => [
                        'controller' => 'organiza\\V1\\Rest\\Company\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'organiza.rest.doctrine.involved',
            1 => 'organiza.rest.doctrine.user',
            2 => 'organiza.rest.doctrine.contract',
            3 => 'organiza.rest.doctrine.company',
        ],
    ],
    'api-tools-rest' => [
        'organiza\\V1\\Rest\\Involved\\Controller' => [
            'listener' => \organiza\V1\Rest\Involved\InvolvedResource::class,
            'route_name' => 'organiza.rest.doctrine.involved',
            'route_identifier_name' => 'involved_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'involved',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \organiza\V1\Entity\Involved::class,
            'collection_class' => \organiza\V1\Rest\Involved\InvolvedCollection::class,
            'service_name' => 'Involved',
        ],
        'organiza\\V1\\Rest\\User\\Controller' => [
            'listener' => \organiza\V1\Rest\User\UserResource::class,
            'route_name' => 'organiza.rest.doctrine.user',
            'route_identifier_name' => 'user_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'user',
            'entity_http_methods' => [
                0 => 'PATCH',
                1 => 'PUT',
                2 => 'GET',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \organiza\V1\Entity\User::class,
            'collection_class' => \organiza\V1\Rest\User\UserCollection::class,
            'service_name' => 'User',
        ],
        'organiza\\V1\\Rest\\Contract\\Controller' => [
            'listener' => \organiza\V1\Rest\Contract\ContractResource::class,
            'route_name' => 'organiza.rest.doctrine.contract',
            'route_identifier_name' => 'contract_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'contract',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \organiza\V1\Entity\Contract::class,
            'collection_class' => \organiza\V1\Rest\Contract\ContractCollection::class,
            'service_name' => 'Contract',
        ],
        'organiza\\V1\\Rest\\Company\\Controller' => [
            'listener' => \organiza\V1\Rest\Company\CompanyResource::class,
            'route_name' => 'organiza.rest.doctrine.company',
            'route_identifier_name' => 'company_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'company',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \organiza\V1\Entity\Company::class,
            'collection_class' => \organiza\V1\Rest\Company\CompanyCollection::class,
            'service_name' => 'Company',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'organiza\\V1\\Rest\\Involved\\Controller' => 'HalJson',
            'organiza\\V1\\Rest\\User\\Controller' => 'HalJson',
            'organiza\\V1\\Rest\\Contract\\Controller' => 'HalJson',
            'organiza\\V1\\Rest\\Company\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'organiza\\V1\\Rest\\Involved\\Controller' => [
                0 => 'application/vnd.organiza.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'organiza\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.organiza.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'organiza\\V1\\Rest\\Contract\\Controller' => [
                0 => 'application/vnd.organiza.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'organiza\\V1\\Rest\\Company\\Controller' => [
                0 => 'application/vnd.organiza.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'organiza\\V1\\Rest\\Involved\\Controller' => [
                0 => 'application/vnd.organiza.v1+json',
                1 => 'application/json',
            ],
            'organiza\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.organiza.v1+json',
                1 => 'application/json',
            ],
            'organiza\\V1\\Rest\\Contract\\Controller' => [
                0 => 'application/vnd.organiza.v1+json',
                1 => 'application/json',
            ],
            'organiza\\V1\\Rest\\Company\\Controller' => [
                0 => 'application/vnd.organiza.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \organiza\V1\Entity\Involved::class => [
                'route_identifier_name' => 'involved_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'organiza.rest.doctrine.involved',
                'hydrator' => 'organiza\\V1\\Rest\\Involved\\InvolvedHydrator',
            ],
            \organiza\V1\Rest\Involved\InvolvedCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'organiza.rest.doctrine.involved',
                'is_collection' => true,
            ],
            \organiza\V1\Entity\User::class => [
                'route_identifier_name' => 'user_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'organiza.rest.doctrine.user',
                'hydrator' => 'organiza\\V1\\Rest\\User\\UserHydrator',
            ],
            \organiza\V1\Rest\User\UserCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'organiza.rest.doctrine.user',
                'is_collection' => true,
            ],
            \organiza\V1\Entity\Contract::class => [
                'route_identifier_name' => 'contract_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'organiza.rest.doctrine.contract',
                'hydrator' => 'organiza\\V1\\Rest\\Contract\\ContractHydrator',
            ],
            \organiza\V1\Rest\Contract\ContractCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'organiza.rest.doctrine.contract',
                'is_collection' => true,
            ],
            \organiza\V1\Entity\Company::class => [
                'route_identifier_name' => 'company_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'organiza.rest.doctrine.company',
                'hydrator' => 'organiza\\V1\\Rest\\Company\\CompanyHydrator',
            ],
            \organiza\V1\Rest\Company\CompanyCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'organiza.rest.doctrine.company',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools' => [
        'doctrine-connected' => [
            \organiza\V1\Rest\Involved\InvolvedResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'organiza\\V1\\Rest\\Involved\\InvolvedHydrator',
            ],
            \organiza\V1\Rest\User\UserResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'organiza\\V1\\Rest\\User\\UserHydrator',
            ],
            \organiza\V1\Rest\Contract\ContractResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'organiza\\V1\\Rest\\Contract\\ContractHydrator',
            ],
            \organiza\V1\Rest\Company\CompanyResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'organiza\\V1\\Rest\\Company\\CompanyHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'organiza\\V1\\Rest\\Involved\\InvolvedHydrator' => [
            'entity_class' => \organiza\V1\Entity\Involved::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'organiza\\V1\\Rest\\User\\UserHydrator' => [
            'entity_class' => \organiza\V1\Entity\User::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'organiza\\V1\\Rest\\Contract\\ContractHydrator' => [
            'entity_class' => \organiza\V1\Entity\Contract::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'organiza\\V1\\Rest\\Company\\CompanyHydrator' => [
            'entity_class' => \organiza\V1\Entity\Company::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
    ],
    'api-tools-content-validation' => [
        'organiza\\V1\\Rest\\Involved\\Controller' => [
            'input_filter' => 'organiza\\V1\\Rest\\Involved\\Validator',
        ],
        'organiza\\V1\\Rest\\User\\Controller' => [
            'input_filter' => 'organiza\\V1\\Rest\\User\\Validator',
        ],
        'organiza\\V1\\Rest\\Contract\\Controller' => [
            'input_filter' => 'organiza\\V1\\Rest\\Contract\\Validator',
        ],
        'organiza\\V1\\Rest\\Company\\Controller' => [
            'input_filter' => 'organiza\\V1\\Rest\\Company\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'organiza\\V1\\Rest\\Involved\\Validator' => [
            0 => [
                'name' => 'responsibleName',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'responsibilities',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 20,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'comments',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'dtResgister',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'organiza\\V1\\Rest\\User\\Validator' => [
            0 => [
                'name' => 'fullName',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'telephone',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 13,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'email',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 256,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'pPassword',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 256,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'permission',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'dtResgister',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'organiza\\V1\\Rest\\Contract\\Validator' => [
            0 => [
                'name' => 'files',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'size',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'status',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 20,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'dtResgister',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'organiza\\V1\\Rest\\Company\\Validator' => [
            0 => [
                'name' => 'fullName',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'cnpj',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 15,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'cep',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 8,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'logradouro',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'complemento',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'bairro',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                ],
            ],
            6 => [
                'name' => 'localidade',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                ],
            ],
            7 => [
                'name' => 'uf',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 2,
                        ],
                    ],
                ],
            ],
            8 => [
                'name' => 'dtResgister',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authorization' => [
            'organiza\\V1\\Rest\\User\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
];
