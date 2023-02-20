<?php
include_once __DIR__ . '/includes/home_header.php';
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blood_bank_management";
//create connection
$connection = new mysqli($servername, $username, $password, $database);

$first_name = "";
$last_name = "";
$phone_number = "";
$blood_group = "";
$present_address = "";
$last_date_of_donation = "";
$gender = "";
$division = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone_number = $_POST["phone_number"];
    $blood_group = $_POST["blood_group"];
    $present_address = $_POST["present_address"];
    $last_date_of_donation = $_POST["date_of_birth"];
    $gender = $_POST["gender"];
    $division = $_POST["division"];

    do {
        if (empty($first_name) || empty($last_name) || empty($phone_number) || empty($blood_group) || empty($present_address) || empty($last_date_of_donation) || empty(gender) || empty(division)) {
            $errorMessage = "All the fiedls are requied";
            break;
        }
        //add new blood donators to database

        $sql = "INSERT INTO admin_infos (first_name,last_name,phone_number,blood_group,present_address,date_of_birth,gender,,division)" .
            "VALUES ('$first_name','$last_name','$phone_number','$blood_group','$present_address','$last_date_of_donation','$gender','$division')";
        $result = $connection->query($sql);
        if (!$result) {
            $errorMessage = "Invalid query:" > $connection->error;
            break;
        }
        $first_name = "";
        $last_name = "";
        $phone_number = "";
        $blood_group = "";
        $present_address = "";
        $date_of_birth = "";
        $gender = "";
        $division = "";
        $successMessage = "blood donator added successfully.";

        header("location :./admin/admin_dashboard.php");
        exit;
    } while (false);
}
?>

<main>
    <section class="container my-3">

        <form>

            <div class="grid md:grid-cols-2 md:gap-6">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First name</label>
                    <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="first_name" required="">
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last name</label>
                    <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="last_name" required="">
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone number</label>
                    <input type="tel" id="phone" name="phone_number" value="<?php echo $phone_number; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <label for="bloodGroup" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select blood group<select name="blood_group" value="<?php echo $blood_group; ?>" id="countries" class="bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select></label>
                <div class="relative z-0 mb-6 w-full group">
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Present address</label>
                        <input type="text" id="address" name="present_address" value="<?php echo $present_address; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="address" required="">
                    </div><label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender<select name="gender" value="<?php echo $gender; ?>" id="countries" class="d-flex bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </label>
                </div>
                <div>
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">last date of blood donation</label>
                    <input type="date" id="date" name="last_date_of_donation" value="<?php echo $last_date_of_donation; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="last date of blood donation" required="">
                </div>
                <label for="division" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Divition<select name="division" value="<?php echo $division; ?>" id="divition" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Dhaka</option>
                        <option>Chittagong</option>
                        <option>Rajshahi</option>
                        <option>Barishal</option>
                        <option>Rangpur</option>
                        <option>Mymansing</option>
                        <option>Sylet</option>
                        <option>khulna</option>
                    </select></label>
            </div>
            <button type="Submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            <button type="Reset" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Reset</button>


        </form>
    </section>
</main>
<!--main code end-->
<?php include_once __DIR__ . '/includes/footer.php';

?>