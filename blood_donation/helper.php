<?php

if (!function_exists('dview')) {
    function dview($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        die();
    }
}

/**
 * insert() is a function that creates an insert query.
 * @param string $table
 * @param array $data
 * @return string
 */
if (!function_exists('insert')) {
    function insert(string $table, array $data)
    {
        $columns = implode(", ", array_keys($data));
        $values = implode('\',\'', array_values($data));

        $insQuery = 'INSERT INTO ' . $table . '(' . $columns . ') VALUES (\'' . $values . '\')';

        return $insQuery;
    }
}


/**
 * validateRequestData() is a function that checks if the request data is valid or not.
 * @param array $request_data
 * @return bool
 */
if (!function_exists('validateRequestData')) {
    function validateRequestData(array $request_data)
    {
        foreach ($request_data as $key => $value) {
            if (empty($value)) {
                return false;
            }
        }
        return true;
    }
}

/**
 * formatted_date() is a function that formats the date.
 * @param string $date
 */
if (!function_exists('formatted_date')) {
    function formatted_date($date): string
    {
        return date('jS F, Y', strtotime($date));
    }
}

/**
 * render image by blood group
 * @param $blood_group
 * @return string
 */
if (!function_exists('render_blood_group_image')) {
    function render_blood_group_image($blood_group)
    {
        switch ($blood_group) {
            case 'A+':
                return 'images/blood-group-A+.png';
                break;
            case 'A-':
                return 'images/blood-group-A-.png';
                break;
            case 'B+':
                return 'images/blood-group-B+.png';
                break;
            case 'B-':
                return 'images/blood-group-B-.png';
                break;
            case 'AB+':
                return 'images/blood-group-AB+.png';
                break;
            case 'AB-':
                return 'images/blood-group-AB-.png';
                break;
            case 'O+':
                return 'images/blood-group-O+.png';
                break;
            case 'O-':
                return 'images/blood-group-O-.png';
                break;
            default:
                return 'images/blood-group-A+.png';
                break;
        }
    }
}
