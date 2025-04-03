<?php

define('DS', '/');

define('COMPONENT_PATH', dirname(__DIR__).'/components');
define('COMPONENT_URL', '/inc/components');

define('ASIDE_PATH', dirname(__DIR__).'/aside');
define('ASIDE_URL', 'inc/aside');


$NO_IS_SUBDIR = '';

include_once dirname(__FILE__).'/menu/menu.init.php';

include_once $STATIC_ROOT . DS . 'inc/render/Component.php';
include_once $STATIC_ROOT . DS . 'inc/render/Aside.php';