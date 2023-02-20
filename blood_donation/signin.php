<?php
    include_once './includes/home_header.php';
?>
<main>
    <div class="container mt-8">
        <div class="card mx-auto">
            <div class="card-header">
                <h4>Sign In</h4>
            </div>
            <div class="card-body">
                <form action="./process/login_process.php" method="POST">
                    <div class="row">
                        <label for="email" class="col-md-4">
                            Email:
                        </label>
                        <input type="email" name="email" value="" id="email" class="col-md-8" placeholder="Ener your email" required="">
                    </div>
                    <div class="row mt-2">
                        <label for="password" class="col-md-4">
                            Password:
                        </label>
                        <input type="password" name="password" value="" id="password" class="col-md-8" required="">
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-8">
                            <h6>New here? Please <a href="signup.php">Signup</a></h6>
                        </div>
                        <div class="col-md-4">
                            <!-- <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Sign In</button> -->

                            <button type="submit" class=" SignBTN btn btn-outline-primary">Sign In</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="mt-8">

    </div>
</main>
