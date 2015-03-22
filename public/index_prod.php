<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 11/03/2015
 * Time: 19:18
 */

error_reporting(-1);
ini_set("display_errors", true);

require_once(__DIR__."/../vendor/autoload.php");
use \Mpwarfwk\Component\Bootstrap;
$bootstrap = new Bootstrap('prod');
$bootstrap->run();