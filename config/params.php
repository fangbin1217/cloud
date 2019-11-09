<?php

$commonParams = [
    'adminEmail' => 'admin@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'appid' => 'wx99eb6626b6d04429',
    'appsercet' => '9ea427b3707b55e82c527ec81b1f823c',
    'randkey' => 'GR511M',
    'loginCacheTime' => 7776000, //登陆状态记录时间，单位为秒  90天
    'withoutlogin' => ['login', 'test'],
    'name_fa' => '台板',
    'wechat_avatar' => 86400, //微信头像
    'wechat_nickname' => 2592000, //微信昵称
    'history_avatar' => 2592000,  //历史头像
    'roomCacheTime' => 86400, //房间缓存,
    'qrcodeImageTime' => 2592000, //qrcode缓存
    'XCX_ACCESS_TOKEN' => 7200,
    'MAX_PERSON_NUM' => 5, //最大人数上限
    'MAX_NICKNAME' => 8,
    'red' => '#E64340',
    'green' => '#09BB07',
    'black'=> '#353535',
    'page_size' => 2,
    'isChecked' => false,
    'image_default' => '../../images/defaultAvatar.png',
    'image_fa' => '../../images/fa.png',
    'image_jiajian' => '../../images/jiahao.png',
    'image_no1' => 'https://img.myshared.top/icon/NO.png',
    'image_no2' => 'https://img.myshared.top/icon/NO2.png',
    'shareImage' => 'https://img.myshared.top/share.png',
    'notice' => '尊敬的用户，你好，欢迎来到本小程序，您的满意是我们最好的服务！'
];

if (YII_ENV == 'dev') {
    $commonParams['serverHost'] = 'http://www.wechatserver2.com/';
    $commonParams['imgHost'] = 'https://img.myshared.top/';
    $commonParams['imageFirstPath'] = '/usr/local/var/www/wechatserver2/web';
} else {
    $commonParams['serverHost'] = 'https://cloud.myshared.top/';
    $commonParams['imgHost'] = 'https://img.fyy6.com/';
    $commonParams['imageFirstPath'] = '/home/www/wechatserver/web';

}

return $commonParams;

