# Configuration
You can learn how to set up your application credentials, modules, services, database and many more.

- [App](#app)
- [Cache](#cache)
- [Consoles](#consoles)
- [Database](#database)
- [Flysystem](#flysystem)
- [Inliner](#inliner)
- [Mail](#mail)
- [Queue](#queue)
- [Script](#script)
- [Services](#services)
- [Session](#session)


<a name="app"></a>
## App
This config holds most of the app itself, it refers to other config as well such as ``adapters``, ``services``, ``class aliases`` and ``http middlewares``.

Let's start and review each keys, the format shows you the first key in the config, it also shows you the default and current value of that key and the type required

- **debug**
(*default value:* true | boolean)
This is the setting you will need to set-up to enable debugging on your local or staging server, and disable it when deployed under production server.

- **lang**
(*default value:* en | string <folder name>)
By default we're using **en** that refers to *english* language in which located at ``resources/lang/<folder name>``

- **timezone**
(*default value:* UTC | [timezones](http://php.net/manual/en/timezones.php))
Timezone to use, helpful when creating records that has timestamp on it such as ``created_at``, ``updated_at`` and ``deleted_at``.

- **ssl**
(*default value:* ['main' => false] | array)
If your module supports ssl, then apply **true** on it, else **false**

- **base_uri**
(*default value:* ['main' => 'slayer.app'] | array)
Set your module's base uri, this is helpful when running command line or using RESTful request

- **session**
(*default value:* en | string <name>)
Set the session name, this refers to the name found most of the browser's resources

- **db_adapter**
(*default value:* empty | string <adapter name>)
Set the database adapter, base it on ``config/database.php`` under ***adapters*** key

- **nosql_adapter**
(*default value:* mongo1 | string <adapter name>)
Set the nosql adapter, base it on ``config/database.php`` under ***adapters*** key, for now phalcon only supports mongodb for now

- **cache_adapter**
(*default value:* file | string <adapter name>)
Caching helps us to determine a global or a system variables; this is also used for storing repetitive sql query, to set the adapter, base it on ``config/cache.php`` under ***adapters*** key

- **queue_adapter**
(*default value:* beanstalk | string <adapter name>)
Queuing helps our system to handle background processes such as sending of emails and many more, to set the adapter base it on ``config/queue.php``

- **session_adapter**
(*default value:* file | string <adapter name>)
Sessions is a way to identify a unique requestor per browser, to set the adapter base it on ``config/session.php``

- **flysystem**
(*default value:* local | string <adapter name>)
Flysystem is a manager or an instance that follows a single interface of all this multiple adapters/services such as Local/AwsS3/Rackspace/Dropbox/Copy and many more, to set the adapter base it on ``config/flysystem.php``

- **error_handler**
(*default value:* <refer to the file> | class)
The class that handles the thrown exceptions and fatal errors

- **mailer_adapter**
(*default value:* swift | string <adapter name>)
This mail adapter is the one handling the process or way of sending emails, to set the adapter base it on ``config/mail.php``

- **logging_time**
(*default value:* hourly | <("monthly" | "daily" | "hourly") | false>)
By default it creates a log that appends the current time with the configured value, this way it will help you to divide each logs and find the specific time you want to tail

- **auth**
(*default value:* [refer to the file] | array)
When authenticating using the service 'auth', you can set the ``key`` to handler referrer links, on what ``model`` to use and is the ``password`` field

- **services**
(*default value:* [refer to the file] | array)
This handles all of our dependencies, you can create your own service, to know more please refer to this link [TODO: link to service creation](#link)

- **aliases**
(*default value:* [refer to the file] | array)
This is where you can apply an alias class to your facade class or any class you want

- **middlewares**
(*default value:* [refer to the file] | array)
This will be your middleware classes, you can call them by adding a code like this to your controller ``$this->middleware('auth')``, to know more please refer to the controller



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
