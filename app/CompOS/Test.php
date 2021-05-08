<?php

require __DIR__.'/../vendor/autoload.php';

use CompOS\Talker\Talker;
use CompOS\Entity\Auth;
use Address;
use CompOS\Firewall\FirewallFilter;


$auth = new Auth();
$auth->setHost("17.17.11.1");
$auth->setUsername("admin");
$auth->setPassword("7659872");


$talker = new Talker($auth);
//$filter = new FirewallFilter($talker);
//$a = $filter->getAll();


$ipaddr = new Address($talker);
$listIP = $ipaddr->getAll();


CompOS\Util\DebugDumper::dump($listIP);