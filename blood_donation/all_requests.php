<?php
    include './includes/home_header.php';
    include './db/connection.php';
    include './process/get_requests.php';

    $id = $_SESSION['id']; // Get user id from session
    $requests = getRequestsByUser($id, $connection);
?>

<section class="container border border-danger mt-4" style="height: 450px !important;">
    <div class="row mb-4 mt-2">
        <h1 class="text-center text-3xl">All of your requests</h1>
    </div>
    <hr>

    <?php if (!empty($requests)) : ?>
        <div class="table-responsive mt-2">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Blood Group</th>
                        <th>Unit</th>
                        <th>Paient Name</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>Hospital Name</th>
                        <th>Hospital Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($requests as $index => $request) : ?>
                        <tr>
                            <td><?= ++$index ?></td>
                            <td><?= formatted_date($request['donation_date']) ?></td>
                            <td><?= $request['donation_time'] ?></td>
                            <td>
                                <img src="<?= render_blood_group_image($request['blood_group']) ?>" style="height: 70px; width: 80px;" alt="<?= $request['blood_group'] ?>">
                            </td>
                            <td><?= $request['units'] ?></td>
                            <td><?= $request['patient_name'] ?></td>
                            <td><?= $request['phone_number'] ?></td>
                            <td class="text-info"><a href="mailto:<?= $request['email'] ?>"><?= $request['email'] ?></a></td>
                            <td><?= $request['hostpital_name'] ?></td>
                            <td><?= $request['hostpital_address'] ?></td>
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

<?php include './includes/admin_footer.php'; ?>