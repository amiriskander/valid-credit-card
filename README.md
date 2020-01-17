# Valid Credit Card

[![Build Status](https://travis-ci.org/amiriskander/valid-credit-card.svg?branch=master)](https://travis-ci.org/amiriskander/valid-credit-card) [![Latest Stable Version](https://poser.pugx.org/amiriskander/valid-credit-card/version)](https://packagist.org/packages/amiriskander/valid-credit-card) [![Total Downloads](https://poser.pugx.org/amiriskander/valid-credit-card/downloads)](https://packagist.org/packages/amiriskander/valid-credit-card) [![License](https://poser.pugx.org/amiriskander/valid-credit-card/license)](https://packagist.org/packages/amiriskander/valid-credit-card)

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
vendor/bin/phpunit tests
```

## Resources
* [Freeformatter.com guide to validate credit card numbers](https://www.freeformatter.com/credit-card-number-generator-validator.html)
* [Ignacio de Tomás credit card validator repository](https://github.com/inacho/php-credit-card-validator)