<?php

// เปลี่ยนชื่อ __db.php เป็น db.php
// rename file __db.php to db.php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=xx.xx.xx.xx;dbname=xxxxxxx',
    'username' => 'sa',
    'password' => '123456',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 60,
    'schemaCache' => 'cache',
];