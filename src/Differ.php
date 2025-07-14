<?php

namespace Gendiff;

function parseFile(string $filepath): object
{
    if (!file_exists($filepath)) {
        throw new \Exception("File not found: {$filepath}");
    }

    $content = file_get_contents($filepath);
    $data = json_decode($content);

    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new \Exception("Invalid JSON in file: {$filepath}");
    }

    return $data;
}
