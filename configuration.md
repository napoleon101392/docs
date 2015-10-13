# Configuration

- [Introduction](#introduction)
- [Files](#files)
    - [acl.php](#aclphp)
    - [app.php](#appphp)
    - [compile.php](#compilephp)
    - [consoles.php](#consolesphp)
    - [database.php](#databasephp)
    - [flysystem.php](#flysystemphp)
    - [inliner.php](#inlinerphp)
    - [path.php](#pathphp)
    - [script.php](#scriptphp)
    - [services.php](#servicesphp)

## Introduction

The first thing you need to do is to copy the *`.env.example`* as *`.env`* in the same root folder, modify the file on what configuration do you have.

```
...
APP_ENV=local
APP_DEBUG=true
...
```

* The `APP_ENV` is a constant variable that determines your current environment.
  * Thus, this will be the basis to know the main __config__ folder
* How this constant variables are generated? Try to check  the file *`<root>/config/local/app.php`* and find the *__`'debug' => env('APP_DEBUG')`__*.
  * This means that we're getting the global configuration
  * You can also pass a second parameter to put a default value e.g ( `env('APP_DEBUG', false)` )
* You're asking why there is a redundant files such as `<root>/config/app.php` and `<root>/config/local/app.php`
  * We assigned our environment to __*local*__, the process will be `local/app.php` will be loaded first before loading the base `app.php`.

## [Files](#files)

The listed files were the default configuration assigned, check their capability

#### [acl.php](#aclphp)
This handles the user roles, filtering classes such as CSRF, Authentication and Access.

#### [app.php](#appphp)
This handles the entire application configuration such as timezone, debug, language, flsystem, mailer, services and class aliases.

#### [compile.php](#compilephp)
This handles the lists of Slayer classes that possibly can be combined into 1 single file, that this will really perform faster.

#### [consoles.php](#consolesphp)
All console commands that have been listed using ``php slayer`` command are stored here.

#### [database.php](#databasephp)
The database configurations, adapters such as MySQL, PostgreSQL, sqlite or oracle.

#### [flysystem.php](#flysystemphp)
An extensive filesystem manager that supports not such a local but also S3, Rackspace, FTP and many more [(visit flysystem website)](http://flysystem.thephpleague.com)

#### [inliner.php](#inlinerphp)
This handles the mail inligning.

#### [path.php](#pathphp)
This handles the folder path of a certain instance, such as migrations, resources, logs, sotrage, models and more.

#### [script.php](#scriptphp)
The script command that you want be running using ``php slayer run <key>``

#### [services.php](#servicesphp)
This file is dedicated configuration for all vendors/services