<?php
include './includes/home_header.php';
include './security.php';
?>

<!--main code start-->
<form method="post" action="./process/set_request.php">
  <input hidden="hidden" name="request_type" value="plasma" required />
  <section class="container border border-danger mt-4">
    <div class="row mb-4 mt-2">
      <h1 class="text-center text-3xl">Request for Plasma</h1>
    </div>
    <hr>

    <div class="grid gap-6 mb-6 md:grid-cols-2 mt-2">
      <div>
        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Patient Name:</label>
        <input type="text" id="text" name="patient_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Patient Name" required>
      </div>
      <div>
        <label for="floating_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number:</label>
        <input type="tel" name="phone_number" id="floating_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Phone Number">
      </div>
    </div>

    <div class="grid gap-6 mb-6 md:grid-cols-2">
      <div class="mb-6">
        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hospital Name:</label>
        <input type="text" id="text" name="hospital_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Hospital Name" required>
      </div>
      <div class="mb-6">
        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hospital Address:</label>
        <input type="text" id="text" name="hospital_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Hospital Address" required>
      </div>
    </div>

    <div class="grid gap-6 mb-6 md:grid-cols-2">
      <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Plasma Bag (Units)
        :</label>
      <select id="bloodGroup" name="units" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
        <option value="">How many bag needed</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>

      <label for="bloodGroup" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Blood group:
      </label>
      <select id="bloodGroup" name="blood_group" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
        <option value="">Select Blood Group</option>
        <?php foreach ($blood_groups as $blood_group) : ?>
          <option value="<?= $blood_group['id']; ?>"><?php echo $blood_group['name']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="grid gap-6 mb-6 md:grid-cols-2">
      <div>
        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Donation Date:</label>
        <input type="date" id="date" name="donation_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= date('Y-m-d') ?>" required="">
      </div>
      <div>
        <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Donation Time:</label>
        <input type="text" id="time" name="donation_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= date('H:i A') ?>" required="">
      </div>
    </div>

    <div class="row mt-4 mb-4">
      <div class="col-md-12 text-center">
        <button type="reset" class="inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out mr-2">Reset</button>
        <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Submit</button>
      </div>
    </div>
  </section>
</form>
<!--main code end-->

<?php include_once __DIR__ . '/includes/footer.php'; ?>