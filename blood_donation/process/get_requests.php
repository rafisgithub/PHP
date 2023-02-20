<?php

/**
 * Get all requests by type
 * @param $type
 * @param $connection
 * @return mixed
 */
function getRequestsBy($type, $connection)
{
    $sql = "SELECT 
        requests.*,
        users.first_name,
        users.last_name,
        users.email,
        blood_groups.name AS blood_group
        FROM requests
        INNER JOIN users ON requests.requested_by = users.id
        INNER JOIN blood_groups ON requests.blood_group = blood_groups.id
        WHERE request_type = '$type'
        ORDER BY requests.id DESC";

    $result = mysqli_query($connection, $sql);

    if ($result->num_rows > 0) {
        return $result;
    } else {
        return null;
    }
}

/**
 * Get all requests by user
 * @param $user_id
 * @param $connection
 * @return mixed
 */
function getRequestsByUser($user_id, $connection)
{
    $sql = "SELECT 
        requests.*,
        users.first_name,
        users.last_name,
        users.email,
        blood_groups.name AS blood_group
        FROM requests
        INNER JOIN users ON requests.requested_by = users.id
        INNER JOIN blood_groups ON requests.blood_group = blood_groups.id
        WHERE requested_by = '$user_id'
        ORDER BY requests.id DESC";

    $result = mysqli_query($connection, $sql);

    if ($result->num_rows > 0) {
        return $result;
    } else {
        return null;
    }
}
