<?php
    // define the basic default page
    define('DEFAULT_PAGE_NAME', 'index.php');

    // function for get the correct page
    function getPageName($level)
    {
        $requestParams = explode('/', $_SERVER['REQUEST_URI']);
        $scriptPath = explode('/', $_SERVER['SCRIPT_NAME']);

        // removing the basic path
        while ($requestParams[0] === $scriptPath[0]) {
            array_shift($requestParams);
            array_shift($scriptPath);
        }
        if ($level === 0) {
            return $requestParams[0] ?: DEFAULT_PAGE_NAME;
        }
        return isset($requestParams[$level]) ? $requestParams[$level] : '';
    }
  ?>
