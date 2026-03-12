<?php

$prefix = 'SensioLabs\\AnsiConverter\\';
$baseDir = '/usr/share/php/SensioLabs/AnsiConverter/';

spl_autoload_register(static function (string $class) use ($prefix, $baseDir): void {
    if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
        return;
    }

    $relativeClass = substr($class, strlen($prefix));
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (is_file($file)) {
        require $file;
    }
});
