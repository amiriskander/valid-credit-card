<?php

namespace AmirIskander\CreditCard;

/**
 * Class CreditCardValidator
 *
 * @package AmirIskander\CreditCard
 */
class CreditCardValidator
{
    /**
     * @param $number
     * @param $cvc
     *
     * @return bool
     */
    public function validateCreditCard($number, $cvc)
    {
        // Check that the card number and cvc are numbers
        if (!$this->isNumber($number) || !$this->isNumber($cvc)) {
            return false;
        }
        // Check if there is a provider that can match the number length, cvc length and number pattern
        foreach ($this->getProviders() as $provider) {
            if (
                in_array(strlen($number), $provider['numberLength']) &&
                in_array(strlen($cvc), $provider['cvcLength']) &&
                preg_match($provider['numberPattern'], $number)
            ) {
                // Check if this provider should validate it's number using Luhn algorithm
                if ($provider['validateLuhn']) {
                    if (!$this->validLuhn($number)) {
                        return false;
                    }
                }
                return true;
            }
        }
        return false;
    }

    /**
     * @return array
     */
    protected function getProviders()
    {
        return PROVIDERS;
    }

    /**
     * @param $number
     *
     * @return bool
     */
    protected function isNumber($number)
    {
        return (bool) (preg_match("/^\d+$/", $number));
    }

    /**
     * @param $number
     *
     * @return bool
     */
    protected function validLuhn($number)
    {
        $number    = str_split($number);
        $lastDigit = $number[count($number) - 1];
        unset($number[count($number) - 1]); // Step 1: Drop last number
        $number = array_reverse($number);   // Step 2: Reverse the number
        for ($i = 0; $i < count($number); $i++) {
            if (($i + 1) % 2 != 0) { // Step 3: Multiply odd numbers by 2
                $number[$i] *= 2;
            }
            if ($number[$i] > 9) { // Step 4: Subtract 9 from numbers above 9
                $number[$i] -= 9;
            }
        }
        $sum = array_sum($number); // Step 5: Sum all digits

        return (($sum % 10) == $lastDigit); // Step 6: Check if sum modulo 10 is equal to last digit of the number
    }
}
