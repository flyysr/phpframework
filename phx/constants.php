<?php
// define paths of folders
define('DS', DIRECTORY_SEPARATOR);
define('PATH_BASE', __DIR__ . DS);
define('PATH_APP', PATH_BASE . 'app' . DS);
define('PATH_ASSETS', PATH_BASE . 'assets' . DS);
define('PATH_LOGS', PATH_BASE . 'logs' . DS);
define('PATH_CORE', PATH_BASE . 'core' . DS);
define('PATH_CORE_LIBS', PATH_BASE . 'core' . DS . 'libs' . DS);
define('PATH_CORE_HELPERS', PATH_BASE . 'core' . DS . 'helpers' . DS);
define('PATH_CORE_HANDLERS', PATH_BASE . 'core' . DS . 'handlers' . DS);

// define paths of files
define('EXT', '.php');
define('FILE_LOG_ERRORS', PATH_LOGS . 'errors.log');
define('FILE_BASE', PATH_BASE . 'index' . EXT);

// define cross platform line break
define('EOL', PHP_EOL);
