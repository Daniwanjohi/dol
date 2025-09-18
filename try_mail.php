<?php
require_once 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'Daniella Wanjohi',
    'mail_from' => 'wanjohidee21@gmail.com',
    'name_to' => 'Dee Wanjohi',
    'mail_to' => 'deewanjohi06@gmail.com',
    'subject' => 'Flash Sale!',
    'body' => 'Greetings <b>Customer</b>! Shop with us today for great offers!'
];


$ObjSendMail->Send_Mail($conf, $mailCnt);