<?php

declare(strict_types=1);

namespace Effectra\ToString;

class ArrayToString
{
    /**
     * Converts an array to a string representation.
     *
     * @param array $array The input array.
     * @return string The string representation of the array.
     */
    public static function array(array $array): string
    {
        if (empty($array)) {
            return '[]';
        }

        // Use var_export to convert array to a string
        $string = var_export($array, true);

        // Format the string to remove unnecessary indentation
        $string = preg_replace("/^(\s+)(.*)/m", "$2", $string);

        return $string;
    }

    /**
     * Converts an array to a string by joining its elements with a separator.
     *
     * @param array $data The input array.
     * @param string $separator The separator used to join the array elements.
     * @return string The resulting string.
     */
    public static function arrayToText(array $data, string $separator = ','): string
    {
        return join($separator, $data);
    }

    /**
     * Converts an array to a URL-friendly slug by joining its elements with a separator.
     *
     * @param array $data The input array.
     * @return string The URL-friendly slug.
     */
    public function arrayToSlug(array $data): string
    {
        return static::arrayToText($data, '-');
    }

    /**
     * Converts an array or JSON string to a key-value pair string representation.
     *
     * @param array|string $data The input array or JSON string.
     * @return string The key-value pair string representation.
     */
    public static function arrayToTextKeyValue($data): string
    {
        if (is_string($data)) {
            $data = json_decode($data, true);
        }

        $output = '';
        foreach ($data as $key => $value) {
            if (is_array($value) || is_object($value)) {
                $value = json_encode($value);
            }
            $output .= $key . ': ' . $value . ",\n";
        }

        return $output;
    }
}
