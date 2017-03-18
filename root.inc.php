<?php
$protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
$url  = $protocol .$_SERVER['HTTP_HOST'].'/amirgee007.github.io';

define('BASE_URL', $url);
   