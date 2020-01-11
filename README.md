# Valid Credit Card

[![Build Status](https://travis-ci.org/inacho/php-credit-card-validator.svg?branch=master)](https://travis-ci.org/inacho/php-credit-card-validator) [![Coverage Status](https://coveralls.io/repos/inacho/php-credit-card-validator/badge.svg?branch=master&service=github)](https://coveralls.io/github/inacho/php-credit-card-validator?branch=master) [![Latest Stable Version](https://poser.pugx.org/inacho/php-credit-card-validator/version)](https://packagist.org/packages/inacho/php-credit-card-validator) [![Total Downloads](https://poser.pugx.org/inacho/php-credit-card-validator/downloads)](https://packagist.org/packages/inacho/php-credit-card-validator)

Simple and lightweight package that validates credit cards and debit cards for popular providers.

It validates cards against their card number lengths, card number patterns, CVC length and using Luhn algorithm if it 
were supported by the provider.

## Installation

Require the package using composer 

```shell script
composer require amiriskander/valid-credit-card
```

Or add it manually to `composer.json` in the list of dependencies under `require`

```json
"require": {
    "amiriskander/valid-credit-card": "*"
},
```

## Usage

### Validate Credit/Debit card:

```php
use AmirIskander\CreditCard\CreditCardValidator;

$cardValidator = new CreditCardValidator();
$isValid = $cardValidator->validateCreditCard('4539392426082460', '123');
var_dump($isValid);
```

Output:
```
bool(true)
```

## Tests
Execute the below command to run the unit tests:

```shell script
vendor/bin/phpunit
```

## Resources
* [Freeformatter.com guide to validate credit card numbers](https://www.freeformatter.com/credit-card-number-generator-validator.html)
* [Ignacio de Tomás credit card validator repository](https://github.com/inacho/php-credit-card-validator)