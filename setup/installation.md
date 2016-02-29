# Installations

- [Requirements](#requirements)
	- [Basic](#basic-requirements)
	- [For Queuing](#for-queuing)
- [Project Creation](#project-creation)
- [Dot Environment](#dot-environment)

<a name="requirements"></a>
## Requirements:

Before installing, there are plenty of packages that we need to install first:
<a name="basic-requirements"></a>
#### Basic requirements:
  * PHP version atleast 5.5.9
  * [Phalcon Extension](https://phalconphp.com/en/download)
  * [Composer](https://getcomposer.org/)
  * [cURL](https://curl.haxx.se)
 
<a name="for-queuing"></a>
#### For Queuing:
 * You are required to install [Beanstalkd](http://kr.github.io/beanstalkd/)

Most of these packages are already installed on your favorite os box.

---
<a name="project-creation"></a>
## Project Creation:

Using composer, you can create a new project, write this code on your terminal:

```shell
composer create-project phalconslayer/slayer --prefer-dist <folder name>
```

After running this command, there should be an output, similar below:

```shell
Installing phalconslayer/slayer (version)
  - Installing phalconslayer/slayer (version)
    Downloading: 100%

Created project in folderName
> php -r "copy('.env.example', '.env');"
Loading composer repositories with package information
Installing dependencies (including require-dev)
```

---
<a name="dot-environment"></a>
## Dot Environment:

Let us say we have a  **local** / **staging** / **production** servers. The **local** comes with multiple ***developers***, however we don't want our developers to view those passwords or we call it "credentials", such as our production database, mail credentials, aws access token and many more.

On your project we have the **.env.example**, let's copy this file and name it as **.env**. Furthermore, this file handles a global constant value, let us say we have this:

```shell
DB_HOST=192.168.10.10
```

You can access the constant value ``DB_HOST`` by using the function ``env(<constant name>, <default value>)``

Try to check the file **config/database.php**, and find the ``env('DB_HOST', 'localhost')``, if there will be no value in our source, it will be based on the default value which is ``localhost``


**Note:**
This file is already ignored under your [***GIT Distributed Version Control***](https://git-scm.com/)