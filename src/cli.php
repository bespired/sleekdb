#!/usr/bin/env php
<?php

if ('cli' !== php_sapi_name()) {
    die('cli only.');
} else {
    require_once('SleekCli.php');
    $cli = new SleekCli(parse_ini_file("config.ini"));
    $cli->check_args();
    exit(0);
}