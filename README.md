Anax Session
==================================

[![Latest Stable Version](https://poser.pugx.org/anax/session/v/stable)](https://packagist.org/packages/anax/session)
[![Join the chat at https://gitter.im/canax/session](https://badges.gitter.im/canax/session.svg)](https://gitter.im/canax/session?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

[![Build Status](https://travis-ci.org/canax/session.svg?branch=master)](https://travis-ci.org/canax/session)
[![CircleCI](https://circleci.com/gh/canax/session.svg?style=svg)](https://circleci.com/gh/canax/session)

[![Build Status](https://scrutinizer-ci.com/g/canax/session/badges/build.png?b=master)](https://scrutinizer-ci.com/g/canax/session/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/canax/session/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/canax/session/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/canax/session/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/canax/session/?branch=master)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/da3fd60b-900c-465a-b925-e3a361d25dbe/mini.png)](https://insight.sensiolabs.com/projects/da3fd60b-900c-465a-b925-e3a361d25dbe)

Anax Session module, for wrapping the session and providing useful helpers related to the session.



Table of content
------------------

* [Class, interface, trait](#Class-interface-trait)
* [Configuration file](#Configuration-file)
* [DI service](#DI-service)
* [Start the session](#Start-the-session)
* [Work with session variables](#Work-with-session-variables)
* [Session flash messages](#Session-flash-messages)
* [Debug the session](#Debug-the-session)
* [Destroy the session](#Destroy-the-session)



Class, interface, trait
------------------

The following classes and interfaces exists.

| Class, interface, trait            | Description |
|------------------------------------|-------------|
| `Anax\Session\Session`             | Wrapper class for sessions. |
| `Anax\Session\SessionInterface`    | Interface to implement for classes what want to wrap the session. |
| `Anax\Session\SessionConfigurable` | Extending wrapper class with ability to read its configuration from a file. |



Configuration file
------------------

This is a sample configuration file, it is usually stored in `config/session.php`.

```php
<?php
/**
 * Config-file for sessions.
 */

return [

    // Session name
    //"name" => preg_replace("/[^a-z\d]/i", "", __DIR__),
    "name" => preg_replace("/[^a-z\d]/i", "", ANAX_APP_PATH),

];
```



DI service
------------------

The session is created as a framework service within `$di`. The following is a sample on how the session service is created.

```php
"session" => [
    "shared" => true,
    "callback" => function () {
        $obj = new \Anax\Session\SessionConfigurable();
        $obj->configure("session.php");
        $obj->start();
        return $obj;
    }
],
```

The service is lazy loaded and not created until it is used.



Start the session
------------------

You can start the session any where. But a good place would be the frontkontroller `index.php`, after you have created `$di` and `$app`. Then the session will be available for all page requests.

You start the session by accessing it.

```php
# $app style
$app->session();
```

The session will not start when running in CLI (for example PHPUnit), but it will still be active and usable.



Work with session variables
------------------

There are helpers to use when reading and setting values in the session.

```php
# Check if a key is set in the session
$app->session->has($key);

# Get a value from the session, null if it is not set.
$app->session->get($key);

# Get a value from the session or get the default value.
$app->session->get($key, $default);

# Set a value in the session, associated with a key.
$app->session->set($key, $value);

# Delete a key from the session.
$app->session->delete($key);
```



Session flash messages
------------------

There is feature useful for flash messages. A value is retrieved from the session and is then deleted.

```php
# Get the value from the session and then delete its key, default is null.
$app->session->getOnce($key);

# Specify your own default value when key does not exists.
$app->session->getOnce($key, $default);
```



Debug the session
------------------

You can var_dump the session object and it will print out the content of `$_SESSION`.

```php
# Debug the session and review its content through var_dump.
var_dump($app->session);
```



Destroy the session
------------------

You can destroy the session which might be useful during development.

```php
# Destroy the session.
$app->session->destroy();
```



License
------------------

This software carries a MIT license.



```
 .  
..:  Copyright (c) 2013 - 2018 Mikael Roos, mos@dbwebb.se
```
