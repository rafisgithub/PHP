<?php
session_start();
date_default_timezone_set("Asia/Dhaka");

include './db/connection.php';
include './helper.php';

// get all blood group...
$query = "SELECT * FROM blood_groups";
$blood_groups = $connection->query($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content=" Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Nurul Islam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Life Web</title>
    <link rel="shortcut icon" href="images/tittlelogo3.jpg" type="images/jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

    <style>
        .carusel-image {
            height: 500px !important;
            width: 100% !important;
        }
    </style>
</head>

<body>
    <!--header code started-->
    <header>
        <nav class="navbar navbar-expand-lg bg-danger">
            <a class="navbar-brand" href="index.php"><img src="images/title_logo_2.png" style="height: 60px; width: auto; margin: 8px 8px 8px 40px;" alt="Donate Life"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll float-right" style="--bs-scroll-height: 100px;">
                    <?php if (isset($_SESSION['role'])) : ?>
                        <?php if ($_SESSION['role'] == 'user') : ?>
                            <li class="nav-item text-bg-danger me-2  rounded-1">
                                <a class="nav-link text-light" href="./donor_info.php?user=<?= $_SESSION['id'] ?>">
                                    <i class="fas fa-user"></i> <?= $_SESSION['first_name'] ?>
                                </a>
                            </li>
                            <li class="nav-item dropdown text-bg-danger me-2  rounded-1">
                                <a class="nav-link text-light dropdown-toggle" href="donor.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Request
                                </a>
                                <ul class="dropdown-menu text-bg-info text-danger me-2  rounded-1">
                                    <li><a class="dropdown-item" href="./blood_request.php">Blood Request</a></li>
                                    <li><a class="dropdown-item" href="./plasma_request.php">Plasma Request</a></li>
                                </ul>
                            </li>
                            <li class="nav-item text-bg-danger me-2  rounded-1">
                                <a class="nav-link text-light" href="./all_requests.php">
                                    All Requests
                                </a>
                            </li>
                            <li class="nav-item dropdown text-bg-danger me-2  rounded-1">
                                <a class="nav-link text-light dropdown-toggle" href="donor.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Donar List
                                </a>
                                <ul class="dropdown-menu text-bg-info text-danger me-2  rounded-1">
                                    <?php foreach ($blood_groups as $blood_group) : ?>
                                        <li><a class="dropdown-item" href="./list.php?donar=<?= $blood_group['id'] ?>"><?= $blood_group['name'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="nav-item text-bg-danger me-2  rounded-1">
                                <a class="nav-link text-light" href="./process/logout.php">Logout</a>
                            </li>
                        <?php elseif ($_SESSION['role'] == 'admin') : ?>
                            <li class="nav-item text-bg-danger me-2  rounded-1">
                                <a class="nav-link active text-light" aria-current="page" href="./admin_dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item text-bg-danger me-2  rounded-1">
                                <a class="nav-link active text-light" aria-current="page" href="./addonor.php">Add Donor</a>
                            </li>
                            <li class="nav-item dropdown text-bg-danger me-2  rounded-1">
                                <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    All Request
                                </a>
                                <ul class="dropdown-menu text-bg-info text-danger me-2  rounded-1">
                                    <li><a class="dropdown-item" href="./request_list.php?data=blood">Blood Request</a></li>
                                    <li><a class="dropdown-item" href="./request_list.php?data=plasma">Plasma Request</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown text-bg-danger me-2  rounded-1">
                                <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Donar List
                                </a>
                                <ul class="dropdown-menu text-bg-info text-danger me-2  rounded-1">
                                    <?php foreach ($blood_groups as $blood_group) : ?>
                                        <li><a class="dropdown-item" href="./list.php?donar=<?= $blood_group['id'] ?>"><?= $blood_group['name'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="nav-item text-bg-danger me-2  rounded-1">
                                <a class="nav-link text-light" href="./process/logout.php">Logout</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item text-bg-danger me-2  rounded-1">
                                <a class="nav-link text-light" href="signin.php">Sign In</a>
                            </li>
                            <li class="nav-item text-bg-danger me-2  rounded-1">
                                <a class="nav-link text-light" href="signup.php">Sign Up</a>
                            </li>
                        <?php endif; ?>
                    <?php else : ?>
                        <li class="nav-item text-bg-danger me-2  rounded-1">
                            <a class="nav-link text-light" href="signin.php">Sign In</a>
                        </li>
                        <li class="nav-item text-bg-danger me-2  rounded-1">
                            <a class="nav-link text-light" href="signup.php">Sign Up</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>
    <!--header code end-->

    <!-- Message code started -->
    <?php if (isset($_SESSION['message'])) : ?>
        <div id="messageBody">
            <div class="mt-4 mb-4 bg-<?= $_SESSION['message_type'] ?> text-center">
                <?php
                echo '<h2 class="text-light">' . $_SESSION['message'] . '</h2>';
                unset($_SESSION['message']);
                ?>
            </div>
        </div>
    <?php endif; ?>