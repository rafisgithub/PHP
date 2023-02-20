<?php
include './includes/home_header.php';
include './security.php';
include './db/connection.php';
include './helper.php';


$sql = "SELECT * FROM  donors INNER JOIN blood_groups ON donors.blood_group = blood_groups.id INNER JOIN users ON donors.user_id = users.id";
$result = $connection->query($sql);

?>

<section class="container border border-danger mt-4">
    <div class="row mb-4 mt-2">
        <h1 class="text-center text-3xl">Donor List</h1>
    </div>
    <hr>

    <!-- Table section -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Blood Group</th>
                    <th>Last Donation Date</th>
                    <th>Address</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $index => $row) : ?>
                    <tr>
                        <td><?= ++$index ?></td>
                        <td><?= $row['first_name'] . ' ' . $row['last_name'] ?>
                        <td><?= $row['phone'] ?></td>
                        <td>
                            <img src="<?= render_blood_group_image($row['name']) ?>" style="height: 70px; width: 80px;" alt="<?= $row['name'] ?>">
                        </td>
                        <td><?= formatted_date($row['last_date_of_donation']) ?></td>
                        <td><?= $row['present_address'] ?></td>
                        <td>
                            <?php if (strtolower($row['gender']) == 'male') : ?>
                                <span class="text-success"><?= $row['gender'] ?></span>
                            <?php else : ?>
                                <span class="text-info"><?= $row['gender'] ?></span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    </div>

    <?php
    include './includes/admin_footer.php';
    ?>