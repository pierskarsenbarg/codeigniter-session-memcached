<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Memcached Session Variables
|--------------------------------------------------------------------------
|
|
| "session_storage"			= where you will be storing your session data. Accepts "memcached", "database", "cookie"
| "memcache_ports"          = the port that you will connect to memcache on
| "memcached_nodes"			= array of IP addresses of Memcached nodes
|
|
*/

$config['session_storage'] = 'memcached';
$config ['memcached_port'] = '11211';
$config['memcached_nodes'] = array('127.0.0.1');