<?php

declare(strict_types=1);

namespace Effectra\ToString;

class DateToString
{
    /**
     * Formats a time value in seconds into HH:MM:SS format.
     *
     * @param int $time The time value in seconds.
     * @return string The formatted time string (HH:MM:SS).
     */
    public function formatTime(int $time): string
    {
        $hours = gmdate('H', $time);
        $minutes = gmdate('i', $time);
        $seconds = gmdate('s', $time);

        return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
    }

    /**
     * Formats a timestamp into YYYY-MM-DD format.
     *
     * @param int $timestamp The timestamp value.
     * @return string The formatted date string (YYYY-MM-DD).
     */
    public static function formatDate(int $timestamp, string $format = 'Y-m-d'): string
    {
        return date($format, $timestamp);
    }
}
