<?php
include './includes/home_header.php';
include './helper.php';
include './process/check_donor.php';

$blood_group_id = $_GET['donar'];
$donors = donorInfoByBlood($blood_group_id, $connection);

?>

<section class="container border border-danger mt-4" style="height: 450px !important;">
    <div class="row mb-4 mt-2">
        <h1 class="text-center text-3xl">Donor list blood group wise</h1>
    </div>
    <hr>

    <?php if (!empty($donors)) : ?>
        <div class="table-responsive mt-2">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Last date of donation</th>
                        <th>Blood Group</th>
                        <th>Name</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($donors as $index => $donor) : ?>
                        <tr>
                            <td><?= ++$index ?></td>
                            <td><?= formatted_date($donor['last_date_of_donation']) ?></td>
                            <td>
                                <img src="<?= render_blood_group_image($donor['blood_group']) ?>" style="height: 70px; width: 80px;" alt="<?= $donor['blood_group'] ?>">
                            </td>
                            <td><?= $donor['first_name'] . ' ' . $donor['last_name'] ?></td>
                            <td><?= $donor['phone'] ?></td>
                            <td class="text-info"><a href="mailto:<?= $donor['email'] ?>"><?= $donor['email'] ?></a></td>
                            <td><?= $donor['present_address'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else : ?>
        <div class="row">
            <h1 class="text-center text-2xl text-warning">No Donor Found</h1>
        </div>
    <?php endif; ?>

</section>

<?php include './includes/footer.php'; ?>