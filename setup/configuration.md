# Configuration
You can learn how to set up your application credentials, modules, services, database and many more.

## Index:
- [Module](#module)
- [Config Folder](#config-folder)
    - [app.php](#app)
    - [cache.php](#cache)
    - [consoles.php](#consoles)
    - [database.php](#database)
    - [flysystem.php](#flysystem)
    - [inliner.php](#inliner)
    - [mail.php](#mail)
    - [queue.php](#queue)
    - [script](#script)
    - [services.php](#services)
    - [session.php](#session)

<a name="module"></a>
# Module

<a name="config-folder"></a>
# Config Folder

The folder is located at ``project-name/config/`` directory, by default that folder is a **production** config; to over-ride the configurations you should create a new folder something like ``project-name/config/local/`` and modify your ``.env`` file and change ``APP_ENV`` to local.

To call a configuration, you can use the helper ``config()``.

Let's have some samples below:

### Example #1:
```php
echo config()->app->lang;
```
The above code calls the instance ``config()`` helper. The ``app`` pulls the ``app.php`` file, and the ``lang`` gets the key value.

### Example #2:
```php
$swift_config = config()->mail->swift;

var_dump($swift_config);                // returns a stdClass object
var_dump($swift_config->toArray());     // returns an array

echo $swift_config->host;               // returns the host value.
echo $swift_config->toArray()['host'];  // returns the same value but it is an index call
```
The above code shows that if a key has an array value, it will return an object. While you have an option to turn it to an array by calling the function ``toArray()``.

### Example #3:
```php
echo config()->database->adapters->mysql->host;
```
The above code shows a multi chain object call, if we will extract the process:
- calls ``config()`` instance
- getting ``database.php`` file
- calling key 'adapters'
- calling key 'mysql'
- getting the value of this key 'host'

<a name="app"></a>
## App
This config holds most of the app itself, it refers to other config as well such as ``adapters``, ``services``, ``class aliases`` and ``http middlewares``.

Let's start and review each keys, the format shows you the first key in the config, it also shows you the default and current value of that key and the type required

| Key                 | Default                       | Type                                                       | Description
| :------------------ | :---------------------------- | :--------------------------------------------------------- | :----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------: |
| **debug**           | true                          | boolean                                                    | This is the setting you will need to set-up to enable debugging on your local or staging server, and disable it when deployed under production server.                                                                               |
| **lang**            | en                            | string                                                     | By default we're using **en** that refers to *english* language in which located at ``resources/lang/<folder name>``                                                                                                                 |
| **timezone**        | UTC                           | [timezones](http://php.net/manual/en/timezones.php)        | Timezone to use, helpful when creating records that has timestamp on it such as ``created_at``, ``updated_at`` and ``deleted_at``.                                                                                                   |
| **ssl**             | ['main' => false]             | array                                                      | If your module supports ssl, then apply **true** on it, else **false**                                                                                                                                                               |
| **base_uri**        | ['main' => 'slayer.app']      | array                                                      | Set your module's base uri, this is helpful when running command line or using RESTful request                                                                                                                                       |
| **session**         | en                            | string                                                     | Set the session name, this refers to the name found most of the browser's resources                                                                                                                                                  |
| **db_adapter**      | empty                         | string                                                     | Set the database adapter, base it on ``config/database.php`` under ***adapters*** key                                                                                                                                                |
| **nosql_adapter**   | mongo1                        | string                                                     | Set the nosql adapter, base it on ``config/database.php`` under ***adapters*** key, for now phalcon only supports mongodb for now                                                                                                    |
| **cache_adapter**   | file                          | string                                                     | Caching helps us to determine a global or a system variables; this is also used for storing repetitive sql query, to set the adapter, base it on ``config/cache.php`` under ***adapters*** key                                       |
| **queue_adapter**   | beanstalk                     | string                                                     | Queuing helps our system to handle background processes such as sending of emails and many more, to set the adapter base it on ``config/queue.php``                                                                                  |
| **session_adapter** | file                          | string                                                     | Sessions is a way to identify a unique requestor per browser, to set the adapter base it on ``config/session.php``                                                                                                                   |
| **flysystem**       | local                         | string                                                     | Flysystem is a manager or an instance that follows a single interface of all this multiple adapters/services such as Local/AwsS3/Rackspace/Dropbox/Copy and many more, to set the adapter base it on ``config/flysystem.php``        |
| **error_handler**   | `refer to the file`           | class                                                      | The class that handles the thrown exceptions and fatal errors                                                                                                                                                                        |
| **mailer_adapter**  | swift                         | string                                                     | This mail adapter is the one handling the process or way of sending emails, to set the adapter base it on ``config/mail.php``                                                                                                        |
| **logging_time**    | hourly                        | "monthly", "daily", "hourly" or false                      | By default it creates a log that appends the current time with the configured value, this way it will help you to divide each logs and find the specific time you want to tail                                                       |
| **auth**            | `refer to the file`           | array                                                      | When authenticating using the service 'auth', you can set the ``key`` to handler referrer links, on what ``model`` to use and is the ``password`` field                                                                              |
| **services**        | `refer to the file`           | array                                                      | This handles all of our dependencies, you can create your own service, to know more please refer to this link [TODO: link to service creation](#link)                                                                                |
| **aliases**         | `refer to the file`           | array                                                      | This is where you can apply an alias class to your facade class or any class you want                                                                                                                                                |
| **middlewares**     | `refer to the file`           | array                                                      | This will be your middleware classes, you can call them by adding a code like this to your controller ``$this->middleware('auth')``, to know more please refer to the controller                                                     |


<a name="cache"></a>
## Cache


<a name="consoles"></a>
## Consoles


<a name="database"></a>
## Database


<a name="flysystem"></a>
## Flysystem


<a name="inliner"></a>
## Inliner


<a name="mail"></a>
## Mail


<a name="queue"></a>
## Queue


<a name="script"></a>
## Script


<a name="services"></a>
## Services


<a name="session"></a>
## Session
