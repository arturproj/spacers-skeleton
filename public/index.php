<?php

require '../vendor/autoload.php';
// Report all PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

\Spacers\Framework\Kernel::init(environments: [
    "SPACERS_PROJECT_DIR" => realpath(__DIR__ . "/../"),
    "APP_ENV" => "dev",
    "APP_DEBUG" => true
], callback: function () {

    // Set user-defined exception handler function
    set_exception_handler("exceptionHandler");
    // phpinfo();
});