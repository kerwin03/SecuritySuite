<?php
/**
 * Created by PhpStorm.
 * User: Sherlock
 * Date: 4/15/2017
 * Time: 9:51 PM
 */

require_once('../../vendor/php-console/php-console/src/PhpConsole/__autoload.php');
// Call debug from PhpConsole\Handler
$handler = PhpConsole\Handler::getInstance();
$handler->start();