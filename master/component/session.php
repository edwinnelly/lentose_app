<?php
session_start();
try {
    //secure web
    //echo $csrf =  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
} catch (Exception $e) {
}
