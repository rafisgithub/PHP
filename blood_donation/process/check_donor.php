<?php

function getDonorInfo($user_id, $connection)
{
    $sql = "SELECT 
            blood_groups.name AS blood_group,
            donors.present_address,
            donors.last_date_of_donation,
            donors.gender,
            donors.created_at AS joined_at,
            users.email,
            users.phone,
            users.first_name,
            users.last_name,
            users.id
            FROM users
            INNER JOIN donors ON users.id = donors.user_id
            INNER JOIN blood_groups ON donors.blood_group = blood_groups.id
            WHERE users.id = $user_id";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    }
    else {
        return null;
    }
}


function donorInfoByBlood($blood, $connection)
{
    $sql = "SELECT 
            blood_groups.name AS blood_group,
            donors.present_address,
            donors.last_date_of_donation,
            donors.gender,
            donors.created_at AS joined_at,
            users.email,
            users.phone,
            users.first_name,
            users.last_name,
            users.id
            FROM users
            INNER JOIN donors ON users.id = donors.user_id
            INNER JOIN blood_groups ON donors.blood_group = blood_groups.id
            WHERE blood_groups.id = $blood";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        return $result;
    }
    else {
        return null;
    }
}