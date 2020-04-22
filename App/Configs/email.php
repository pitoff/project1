<?php
return [
    'driver' => [
        'smtp' => [
            'gmail' => [
                'host' => 'smtp.gmail.com',
                'port' => 587,
                'username' => '',
                'password' => '',
                'encrypt' => 'tls'
            ],

            'yahoo' => [
                'host' => 'smtp.yahoo.com',
                'port' => 465,
                'username' => '',
                'password' => '',
                'encrypt' => 'ssl'
            ],

            'mailgun' => [
                'host' => 'smtp.mailgun.com',
                'port' => 465,
                'username' => '',
                'password' => '',
                'encrypt' => 'tls'
            ]
        ]
    ]
];
