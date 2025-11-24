<?php
/**
 * Load all notices from JSON file
 * @param int|null $limit Number of notices to return (optional)
 * @return array Sorted notices by date descending
 */
function load_notices($limit = null) {
    $file = __DIR__ . '/../data/notices.json';

    if (!file_exists($file)) {
        return [];
    }

    $json = file_get_contents($file);
    $arr = json_decode($json, true);

    if (!is_array($arr)) {
        return [];
    }

    // Sort notices by date descending
    usort($arr, function($a, $b) {
        $dateA = isset($a['date']) ? strtotime($a['date']) : 0;
        $dateB = isset($b['date']) ? strtotime($b['date']) : 0;
        return $dateB <=> $dateA;
    });

    if ($limit !== null && is_int($limit)) {
        return array_slice($arr, 0, $limit);
    }

    return $arr;
}

/**
 * Convert date string to human-readable format
 * e.g. "2025-06-20" => "20 June 2025"
 * @param string $dateStr
 * @return string
 */
function human_date($dateStr) {
    $timestamp = strtotime($dateStr);
    if ($timestamp === false) {
        return $dateStr; // return original if invalid
    }
    return date('d M Y', $timestamp);
}

/**
 * Load events from JSON file
 * @param int|null $limit Number of events to return (optional)
 * @return array Sorted events by date ascending
 */
function load_events($limit = null) {
    $file = __DIR__ . '/../data/events.json';

    if (!file_exists($file)) {
        return [];
    }

    $json = file_get_contents($file);
    $arr = json_decode($json, true);

    if (!is_array($arr)) {
        return [];
    }

    // Sort events by date ascending (upcoming first)
    usort($arr, function($a, $b) {
        $dateA = isset($a['date']) ? strtotime($a['date']) : 0;
        $dateB = isset($b['date']) ? strtotime($b['date']) : 0;
        return $dateA <=> $dateB;
    });

    if ($limit !== null && is_int($limit)) {
        return array_slice($arr, 0, $limit);
    }

    return $arr;
}
