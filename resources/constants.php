<?php
define(
    'PROVIDERS',
    [
        // Debit Cards
        'visaelectron'       => [
            'type'          => 'Visa Electron',
            'numberPattern' => '/^4(026|17500|405|508|844|91[37])/',
            'numberLength'  => [16],
            'cvcLength'     => [3],
            'validateLuhn'  => true,
        ],
        'maestro'            => [
            'type'          => 'Maestro',
            'numberPattern' => '/^(5(018|0[23]|[68])|6(39|7))/',
            'numberLength'  => [12, 13, 14, 15, 16, 17, 18, 19],
            'cvcLength'     => [3],
            'validateLuhn'  => true,
        ],
        'forbrugsforeningen' => [
            'type'          => 'Forbrugsforeningen',
            'numberPattern' => '/^600/',
            'numberLength'  => [16],
            'cvcLength'     => [3],
            'validateLuhn'  => true,
        ],
        'dankort'            => [
            'type'          => 'Dankort',
            'numberPattern' => '/^5019/',
            'numberLength'  => [16],
            'cvcLength'     => [3],
            'validateLuhn'  => true,
        ],
        // Credit cards
        'visa'               => [
            'type'          => 'Visa',
            'numberPattern' => '/^4/',
            'numberLength'  => [13, 16, 19],
            'cvcLength'     => [3],
            'validateLuhn'  => true,
        ],
        'mastercard'         => [
            'type'          => 'Mastercard',
            'numberPattern' => '/^(5[0-5]|2[2-7])/',
            'numberLength'  => [16],
            'cvcLength'     => [3],
            'validateLuhn'  => true,
        ],
        'amex'               => [
            'type'          => 'American Express',
            'numberPattern' => '/^3[47]\d{13,14}$/', // '/^3[47]/',
            'format'        => '/(\d{1,4})(\d{1,6})?(\d{1,5})?/',
            'numberLength'  => [15],
            'cvcLength'     => [3, 4],
            'validateLuhn'  => true,
        ],
        'dinersclub'         => [
            'type'          => 'Diners Club International',
            'numberPattern' => '/^3[0689]/',
            'numberLength'  => [14],
            'cvcLength'     => [3],
            'validateLuhn'  => true,
        ],
        'discover'           => [
            'type'          => 'Discover',
            'numberPattern' => '/^6([045]|22)/',
            'numberLength'  => [16],
            'cvcLength'     => [3],
            'validateLuhn'  => true,
        ],
        'unionpay'           => [
            'type'          => 'UnionPay',
            'numberPattern' => '/^(62|88)/',
            'numberLength'  => [16, 17, 18, 19],
            'cvcLength'     => [3],
            'validateLuhn'  => false,
        ],
        'jcb'                => [
            'type'          => 'JCB',
            'numberPattern' => '/^35/',
            'numberLength'  => [16],
            'cvcLength'     => [3],
            'validateLuhn'  => true,
        ],
    ]
);