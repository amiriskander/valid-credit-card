<?php

namespace AmirIskander\CreditCard;

use PHPUnit\Framework\TestCase;

/**
 * Class CreditCardValidatorTest
 *
 * @package AmirIskander\CreditCard
 */
class CreditCardValidatorTest extends TestCase
{
    /**
     * @var CreditCardValidator
     */
    private $creditCardValidator;

    /**
     *
     */
    protected function setup(): void
    {
        $this->creditCardValidator = new CreditCardValidator();
    }

    /**
     * Test CreditCardValidator::validateCreditCard method
     */
    public function testValidateCreditCard()
    {
        // Valid Visa Card (16 numbers)
        $validCard = $this->creditCardValidator->validateCreditCard('4485901577734580', '123');
        $this->assertEquals(true, $validCard);

        // Valid Visa Card
        $validCard = $this->creditCardValidator->validateCreditCard('4485901577734580', '123');
        $this->assertEquals(true, $validCard);

        // Number includes spaces - [Invalid]
        $validCard = $this->creditCardValidator->validateCreditCard('  4485901577734580  ', '123');
        $this->assertEquals(false, $validCard);

        // CVC length is 2 - [Invalid]
        $validCard = $this->creditCardValidator->validateCreditCard('4485901577734580', '12');
        $this->assertEquals(false, $validCard);

        // CVC length is 4 - [Invalid]
        $validCard = $this->creditCardValidator->validateCreditCard('4485901577734580', '1234');
        $this->assertEquals(false, $validCard);

        // CVC has letters - [Invalid]
        $validCard = $this->creditCardValidator->validateCreditCard('4485901577734580', '12A');
        $this->assertEquals(false, $validCard);

        // Number has letters - [Invalid]
        $validCard = $this->creditCardValidator->validateCreditCard('448590157773458M', '123');
        $this->assertEquals(false, $validCard);

        // No values were provided - [Invalid]
        $validCard = $this->creditCardValidator->validateCreditCard('', '');
        $this->assertEquals(false, $validCard);

        // Invalid Luhn result - [Invalid]
        $validCard = $this->creditCardValidator->validateCreditCard('4485901577734589', '123');
        $this->assertEquals(false, $validCard);

        // Valid Visa Card
        $validCard = $this->creditCardValidator->validateCreditCard('4485901577734580', '123');
        $this->assertEquals(true, $validCard);
    }
}
