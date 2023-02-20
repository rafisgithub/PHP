<?php
include './includes/home_header.php';
include './process/check_donor.php';
include 'helper.php';

// get user data using user id
$user_id = $_GET['user'];
$donor_info = getDonorInfo($user_id, $connection);

?>

<section class="container border border-danger mt-4" style="height: 450px !important;">
    <div class="row mb-4 mt-2">
        <h1 class="text-center text-3xl">Donor Profile</h1>
    </div>
    <hr>
    <?php if (!is_null($donor_info)) : ?>
        <div class="row m-4">
            <div class="col-md-4">
                Name:
            </div>
            <div class="col-md-8">
                <?= $donor_info['first_name'] . ' ' . $donor_info['last_name'] ?>
            </div>
        </div>
        <div class="row m-4">
            <div class="col-md-4">
                Email:
            </div>
            <div class="col-md-8">
                <?= $donor_info['email'] ?>
            </div>
        </div>
        <div class="row m-4">
            <div class="col-md-4">
                Phone:
            </div>
            <div class="col-md-8">
                <?= $donor_info['phone'] ?>
            </div>
        </div>
        <div class="row m-4">
            <div class="col-md-4">
                Blood Group:
            </div>
            <div class="col-md-8">
                <?= $donor_info['blood_group'] ?>
            </div>
        </div>
        <div class="row m-4">
            <div class="col-md-4">
                Joined At:
            </div>
            <div class="col-md-8">
                <?= formatted_date($donor_info['joined_at']) ?>
            </div>
        </div>
        <div class="row m-4">
            <div class="col-md-4">
                Address:
            </div>
            <div class="col-md-8">
                <?= $donor_info['present_address'] ?>
            </div>
        </div>
        <div class="row m-4">
            <div class="col-md-4">
                Last donation date:
            </div>
            <div class="col-md-8">
                <form action="./process/update_last_donation_date.php" method="POST">
                    <input type="text" id="dateID" name="last_date_of_donation" value="<?= $donor_info['last_date_of_donation'] ?>" required/?>
                    <input type="hidden" id="userID" name="user_id" value="<?= $donor_info['id'] ?>" />
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-10 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                </form>
            </div>
        </div>
    <?php else : ?>
        <div class="row m-4">
            <div class="col-md-12">
                <h1 class="text-center text-3xl text-warning">You are not donor yet. Please</h1>
                <a href="./be_donor.php?user_id=<?= $user_id ?>"><h1 class="text-center text-2xl text-info"><u>Be a donor <i class="fas fa-arrow-circle-right"></i></u></h1></a>
            </div>
        </div>
    <?php endif; ?>
</section>
<?php
include './includes/footer.php';
?>