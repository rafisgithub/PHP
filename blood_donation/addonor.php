<?php
include './includes/home_header.php';
?>

<section class="container border border-danger mt-4">
    <div class="row mb-4 mt-2">
        <h1 class="text-center text-3xl">Add a Donor</h1>
    </div>
    <hr>

    <form method="POST" action="./process/new_donor.php" class="mt-2">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Donor Name</label>
                <input type="text" name="first_name" value="" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last name</label>
                <input type="text" name="last_name" name="" value="" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>

        <div class="grid gap-6 mb-6 md:grid-cols-2 mt-2">
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone number</label>
                <input type="text" name="phone" value="" placeholder="Enter Phone Number" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
                <input type="email" name="email" value="" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email" required="">
            </div>
        </div>

        <div class="grid gap-6 mb-6 md:grid-cols-2 mt-2">
            <div>
                <label for="present_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Present Address</label>
                <input type="text" name="present_address" value="" placeholder="Enter Present Address" id="present_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last Donation Date:</label>
                <input type="date" id="date" name="donation_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= date('Y-m-d') ?>" required="">
            </div>
        </div>

        <div class="grid gap-6 mb-6 md:grid-cols-2 mt-2">
            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Gender:
            </label>
            <select id="genderId" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                <option value="">Select a Gender</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Others">Others</option>
            </select>
            <label for="genderId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Blood group:
            </label>
            <select id="bloodGroup" name="blood_group" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                <option value="">Select Blood Group</option>
                <?php foreach ($blood_groups as $blood_group) : ?>
                    <option value="<?= $blood_group['id']; ?>"><?php echo $blood_group['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="grid gap-6 mb-6 md:grid-cols-2 mt-2">
            <div>
            </div>
            <div>
                <!-- <button type="submit" class=" submitBTN text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-10 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->

                <button type="submit" class="btn btn-outline-primary">Submit</button>
                
            </div>
        </div>
    </form>
</section>

<?php
include './includes/admin_footer.php';
?>