<?php

require '../vendor/autoload.php';

\Spacers\Framework\Kernel::init(
    callback: function () {
        error_reporting(E_ALL);
        // Set user-defined exception handler function
        set_exception_handler("spacers_exception_handler");
        // phpinfo();
    }
);