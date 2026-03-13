<?php
declare(strict_types=1);

spl_autoload_register(function (string $class): void {
    $parts = explode('\\', $class);

    if (count($parts) > 1) {
        $namespace = $parts[0];

        if ('Spaghetti' === $namespace) {
            $parts[0] = __DIR__ . '/autoload';

            $filePath = implode('/', $parts) . '.php';

            @include $filePath;
        }
    }
});
