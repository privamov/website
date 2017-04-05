<?php

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/../');
define('WEB_DIR', realpath(dirname(__FILE__)) .'/');

define('CONTENT_DIR', ROOT_DIR .'content/');
define('CONTENT_EXT', '.md');
define('PLUGINS_DIR', ROOT_DIR .'plugins/');
define('THEMES_DIR', WEB_DIR .'themes/');
define('CACHE_DIR', ROOT_DIR .'var/cache/');

require_once(ROOT_DIR .'vendor/autoload.php');
require_once(ROOT_DIR .'lib/pico.php');
$pico = new Pico();
