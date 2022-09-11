<?php include 'pages\header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Students Form <?php echo isset($message) ? $message :' ' ; ?> </h1>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <label for="name">Name :</label>
                            <input type="text" id="Name" name="name" class="form-control" placeholder="Enter your name"><br>

                            <label for="Roll">Roll :</label>
                            <input type="number" id="Roll" name="roll" class="form-control" placeholder="Enter your Roll"><br>


                            <label for="Phone">Phone :</label>
                            <input type="text" id="Phone" name="phone" class="form-control" placeholder="Enter your Phone number"><br>

                            <label for="Email">Email :</label>
                            <input type="text" id="Email" name="email" class="form-control" placeholder="Enter your Email"><br>


                            <label for="Department">Department :</label>
                            <input type="text" id="Department" name="department" class="form-control" placeholder="Enter your Department Name"><br>

                            <label for="Session">Session :</label>
                            <input type="text" id="Session" name="session" class="form-control" placeholder="Enter your Session"><br>

                            <label for="Address">Address :</label>

                            <textarea name="address" id="Address" cols="20" rows="5" class="form-control"></textarea><br>


                            <input type="submit" class="btn btn-success" name="submit" value="Submit">

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'pages\footer.php' ?>