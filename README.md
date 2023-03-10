# Raw Query

[![Software License][ico-license]](LICENSE.md)

## About

The `Raw Query` is a package to run raw query as php for first step to migrate old codes from php pure .

##### [Tutorial how create composer package](https://cirelramos.blogspot.com/2022/04/how-create-composer-package.html)

## Installation

Require the `cirelramos/raw-query` package in your `composer.json` and update your dependencies:
```sh
composer require cirelramos/raw-query
```


## Configuration

set provider and alias in app.php

```php
'providers' => [
    // ...
    Cirelramos\RawQuery\Providers\ServiceProvider::class,
],



'aliases' => [
    'RawQuery' => Cirelramos\RawQuery\Facades\RawQuery::class
]

```


The defaults are set in `config/raw-query.php`. Publish the config to copy the file to your own config:
```sh
php artisan vendor:publish --provider="Cirelramos\RawQuery\Providers\ServiceProvider"
```

> **Note:** this is necessary to you can change default config



## Usage

```php

use Cirelramos\RawQuery\Facades\RawQuery;


$product = RawQuery::to('mysql')->getRow("select * from products where id_product=".$idProduct);

```

## License

Released under the MIT License, see [LICENSE](LICENSE).


[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

