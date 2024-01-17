<?php

function loadEnv($filePath)
{
    if (!file_exists($filePath)) {
        return false;
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        // Ignore comments and invalid lines
        if (strpos($line, '=') === false || strpos($line, '#') === 0) {
            continue;
        }

        list($name, $value) = explode('=', $line, 2) + [null, null];

        $name = trim($name);
        $value = trim($value);

        // Set the environment variable
        putenv("$name=$value");

        // Also set in $_ENV and $_SERVER
        $_ENV[$name] = $value;
        $_SERVER[$name] = $value;
    }

    return true;
}

// Load environment variables from .env
loadEnv(__DIR__ . '/.env');
