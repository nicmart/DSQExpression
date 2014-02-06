# DSQ Expression

Base Expression classes for DomainSpecificQuery libraries.

# Warning!

The library is not completed yet and it is in early development stage

[![Build Status](https://travis-ci.org/nicmart/DSQExpression.png)](https://travis-ci.org/nicmart/DSQExpression)
[![Coverage Status](https://coveralls.io/repos/nicmart/DSQExpression/badge.png)](https://coveralls.io/r/nicmart/DSQExpression)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/nicmart/DSQExpression/badges/quality-score.png?s=5b6a889703391063c942d3a29d8caca6d917b1b3)](https://scrutinizer-ci.com/g/nicmart/DSQExpression/)
## Install

The best way to install DSQExpression is [through composer](http://getcomposer.org).

Just create a composer.json file for your project:

```JSON
{
    "require": {
        "nicmart/dsq-expression": "dev-master"
    }
}
```

Then you can run these two commands to install it:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar install

or simply run `composer install` if you have have already [installed the composer globally](http://getcomposer.org/doc/00-intro.md#globally).

Then you can include the autoloader, and you will have access to the library classes:

```php
<?php
require 'vendor/autoload.php';
```
