<?php

$users = [
    [
        'name' => '葉茂森',
        'str' => '15',
        'vit' => '0',
        'int' => '18',
    ],
    [
        'name' => '張瀚元',
        'str' => '0',
        'vit' => '20',
        'int' => '10',
    ],
    [
        'name' => '盧冠驊',
        'str' => '30',
        'vit' => '5',
        'int' => '0',
    ],
];

foreach ($users as $user) {
    $string = '';

    $string .= '名稱:' . $user['name'] . ', ';

    if ($users === '0') {
        $string .= '力量：力殘, ';
    } else {
        $string .= '力量:' . $user['str'] . ', ';
    }

    if ($user['vit'] === '0') {
        $string .= '體質：體殘, ';
    } else {
        $string .= '體質:' . $user['vit'] . ', ';
    }

    if ($user['int'] === '0') {
        $string .= '智力：智殘, ';
    } else {
        $string .= '智力:' . $user['int'] . ', ';
    }

    echo $string . '<br />';
}
?>

