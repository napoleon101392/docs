<?php

return [

    'Prologue'  => [
        'Contribution Guide' => 'prologue/contribution_guide.md',
        'API Documentation'  => 'prologue/api_documentation.md',
    ],

    'Setup' => [
        'Installation'  => 'setup/installation.md',
        'Configuration' => 'setup/configuration.md',
    ],

    'MMVC' => [
        'Controller'    => 'mmvc/controller.md',
        'Model'         => 'mmvc/model.md',
        'Module'        => 'mmvc/module.md',
        'View'          => 'mmvc/view.md',
    ],

    'Supporting Structure' => [
        'Error Handler'    => 'supporting_structure/error_handler.md',
        'Routing'          => 'supporting_structure/routing.md',
        'Service Provider' => 'supporting_structure/provider.md',
        'Validator'        => 'supporting_structure/validator.md',
        'Sandbox'          => 'supporting_structure/sandbox.md',
        'Storage'          => [
            'Cache'      => 'supporting_structure/storage/cache.md',
            'Web Server' => 'supporting_structure/storage/web_server.md',
            'Logging'    => 'supporting_structure/storage/logging.md',
            'Session'    => 'supporting_structure/storage/session.md',
            'Views'      => 'supporting_structure/storage/views.md',
        ],
        'Unit Testing'     => 'supporting_structure/unit_testing.md',
    ],

    'Services' => [
        'Access Control Lists' => 'services/acl.md',
        'Aliaser'              => 'services/aliaser.md',
        'Auth'                 => 'services/auth.md',
        'Cache'                => 'services/cache.md',
        'DB'                   => 'services/db.md',
        'Dispatcher'           => 'services/dispatcher.md',
        'Filter'               => 'services/filter.md',
        'Flash'                => 'services/flash.md',
        'FlashBag'             => 'services/flash_bag.md',
        'Flysystem'            => 'services/flysystem.md',
        'Lang'                 => 'services/lang.md',
        'Log'                  => 'services/log.md',
        'Mail'                 => 'services/mail.md',
        // 'Metadata Adapter'  => 'services/metadata_adapter.md',
        'Mongo'                => 'services/mongo.md',
        'Redirect'             => 'services/redirect.md',
        'Request'              => 'services/request.md',
        'Response'             => 'services/response.md',
        'Router'               => 'services/router.md',
        'Session'              => 'services/session.md',
        'URL'                  => 'services/url.md',
        'View'                 => 'services/view.md',
    ],

    'Misc.' => [
        'Brood Console' => 'misc/console.md',
        'Database' => [
            'Migrations' => 'misc/database/migrations.md',
            'Factories'  => 'misc/database/factories.md',
        ],
    ],
];