<?php

session_start();
session_unset();
session_destroy();
header('Location: /fazt/php-login');

?>