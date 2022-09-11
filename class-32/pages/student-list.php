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

                            <table class=" table table-bordered table-hover">
                                <tr>
                                    <th>sl N0</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Session</th>
                                    <th>Addresss</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach ($studentInfos as $studentInfo){?>
                                <tr>
                                    <td><?php echo $studentInfo['id']?></td>
                                    <td><?php echo $studentInfo['name']?></td>
                                    <td><?php echo $studentInfo['roll']?></td>
                                    <td><?php echo $studentInfo['phone']?></td>
                                    <td><?php echo $studentInfo['email']?></td>
                                    <td><?php echo $studentInfo['department']?></td>
                                    <td><?php echo $studentInfo['session']?></td>
                                    <td><?php echo $studentInfo['address']?></td>
                                    <td>
                                        <a href="">Edit</a>
                                        <a href="">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'pages\footer.php' ?>