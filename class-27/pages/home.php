<?php include'pages\header.php' ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">All student Info</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover  text-center">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>

                            </thead>
                            <tbody>
                            <?php foreach ($students as $value){?>
                                <tr>
                                    <td><?php echo $value['id'] ?></td>
                                    <td><?php echo $value['name'] ?></td>
                                    <td><?php echo $value['email'] ?></td>
                                    <td><?php echo $value['phone'] ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'pages\footer.php'?>
