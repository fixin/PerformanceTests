<?php
/**
 * Fixin Framework
 *
 * Copyright (c) Attila Jenei
 *
 * http://www.fixinphp.com
 */

(function() {
    $fixinPath = __DIR__ . '/vendor/fixin/fixin';
    $config = array_replace_recursive(include "$fixinPath/config/web.php", [
        'loader' => [
//        'prefixes' => require "$topPath/vendor/composer/autoload_psr4.php"
            'prefixes' => [
                'App' => __DIR__ . '/classes',
                'Fixin' => $fixinPath . '/classes/Fixin'
            ]
        ]
    ]);

    include "$fixinPath/boosts/minimal.php";

})();
