<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 18/03/2015
 * Time: 21:26
 */

error_reporting(-1);
ini_set("display_errors", true);

require_once(__DIR__."/../vendor/autoload.php");
use \Mpwarfwk\Component\Bootstrap;
$bootstrap = new Bootstrap('dev');
$bootstrap->run();