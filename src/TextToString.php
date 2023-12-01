<?php

declare(strict_types=1);

namespace Effectra\ToString;

class TextToString
{
    /**
     * Converts a string to uppercase.
     *
     * @param string $text The input string.
     * @return string The string converted to uppercase.
     */
    public static function toUppercase(string $text): string
    {
        return strtoupper($text);
    }

    /**
     * Converts a string to lowercase.
     *
     * @param string $text The input string.
     * @return string The string converted to lowercase.
     */
    public static function toLowercase(string $text): string
    {
        return strtolower($text);
    }

    /**
     * Strips HTML and PHP tags from a string.
     *
     * @param string $text The input string.
     * @return string The string with tags stripped.
     */
    public static function strip(string $text): string
    {
        return strip_tags($text);
    }

    /**
     * Extracts the variable name from the caller's context.
     *
     * @param mixed $variable The variable to get the name from.
     * @return string The name of the variable.
     */
    public static function nameVar($variable): string
    {
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
        $callerLine = $backtrace[1]['line'];
        $callerFile = $backtrace[0]['file'];

        $source = file($callerFile);
        $line = $source[$callerLine - 1];

        preg_match('/\$(\w+)[;\s=]/', $line, $matches);

        return $matches[1];
    }

    /**
     * Converts a string to a URL-friendly slug.
     *
     * @param string $text The input string.
     * @return string The URL-friendly slug.
     */
    public static function textToSlug($text): string
    {
        // Convert the text to lowercase
        $text = strtolower($text);

        // Replace spaces and special characters with dashes
        $text = preg_replace('/[^a-z0-9]+/', '-', $text);

        // Remove leading and trailing dashes
        $text = trim($text, '-');

        return $text;
    }

    public static function snakeToCamel(string $string): string
    {
        $words = explode('_', $string);
        $camelWords = array_map('ucfirst', $words);
        return lcfirst(implode('', $camelWords));
    }

    /**
     * Convert a CamelCase string to snake_case.
     *
     * @param string $inputString The CamelCase string.
     *
     * @return string The snake_case string.
     */
    public static function camelToSnake(string $inputString): string
    {
        $outputString = preg_replace_callback('/([a-z])([A-Z])/', function ($matches) {
            return $matches[1] . '_' . strtolower($matches[2]);
        }, $inputString);

        return $outputString;
    }

    /**
     * Converts a URL-friendly slug back to a readable text.
     *
     * @param string $slug The input slug.
     * @return string The readable text.
     */
    public static function slugToText($slug): string
    {
        // Replace dashes with spaces
        $text = str_replace('-', ' ', $slug);

        // Capitalize the first letter of each word
        $text = ucwords($text);

        return $text;
    }

    /**
     * Generates a random text of specified length.
     *
     * @param int $length The length of the random text.
     * @return string The generated random text.
     */
    public static function generateRandomText($length): string
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomText = '';

        $characterCount = strlen($characters);
        for ($i = 0; $i < $length; $i++) {
            $randomText .= $characters[rand(0, $characterCount - 1)];
        }

        return $randomText;
    }

    /**
     * Converts a hyphen-separated text to camel case.
     *
     * @param string $text The text to be converted.
     * @return string The converted camel case text.
     */
    public static function hyphenToCamelCase(string $text): string
    {
        $words = explode('_', $text);
        $convertedWords = array_map('ucfirst', $words);
        $convertedText = lcfirst(implode('', $convertedWords));

        return $convertedText;
    }
    /**
     * Converts a dash-separated text to camel case.
     *
     * @param string $text The text to be converted.
     * @return string The converted camel case text.
     */
    function dashToCamelCase(string $text): string
    {
        $words = explode('-', $text);
        $convertedWords = array_map('ucfirst', $words);
        $convertedText = lcfirst(implode('', $convertedWords));

        return $convertedText;
    }
}
