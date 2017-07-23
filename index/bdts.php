<?php
$urls = array(
    'http://www.wycweb.com',
    'http://www.wycweb.com/index.php/Home/index',
    'http://www.wycweb.com/index.php/Home/about',
    'http://http://www.wycweb.com/index.php/Home/life',
    'http://www.wycweb.com/index.php/Home/photo',
    'http://www.wycweb.com/index.php/Home/board',

);
$api = 'http://data.zz.baidu.com/urls?site=www.wycweb.com&token=lL69LQr4HZ8y108R';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
?>