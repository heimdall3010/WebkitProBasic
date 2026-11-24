<?php

declare(strict_types=1);

function loadJsonContent(string $file_path): array
{
    //Check File
    if (!is_file($file_path) || !is_readable($file_path)) {
        throw new RuntimeException(
            "JSON file not found or unreadable: {$file_path}"
        );
    }


    //Read JSON
    $json = file_get_contents($file_path);

    if ($json === false) {
        throw new RuntimeException(
            "Failed to read JSON file: {$file_path}"
        );
    }

    //Decode JSON
    try {

        $data = json_decode(
            $json,
            true,
            512,
            JSON_THROW_ON_ERROR
        );
    } catch (JsonException $exception) {

        throw new RuntimeException(
            "Invalid JSON in {$file_path}: " . $exception->getMessage(),
            0,
            $exception
        );
    }

    //Validate Root Structure
    if (!is_array($data)) {
        throw new UnexpectedValueException(
            "Expected a JSON array or object in: {$file_path}"
        );
    }

    return $data;
}
