<?php

return [
    'mysql' => [
        'host' => 'localhost',
        'database' => 'MYSQL_VERITABANI_ADI',
        'user' => 'MYSQL_KULLANICI_ADI',
        'password' => 'MYSQL_KULLANICI_SIFRE',
    ],
    'redis' => [
        'host' => '127.0.0.1', // Farklı bir sunucu kullanacaksanız onun IP adresi
        'port' => 6379, // Redis portu
        'password' => 'REDIS_SIFRESI', // Redis parolanızı buraya girin
        'database' => 0, // İhtiyacınıza göre Redis veritabanı numarasını değiştirin boş varsayılan olarak 0
    ],
];
