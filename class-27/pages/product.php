<?php include 'pages/header.php'?>

    <section py-4>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">All product Information</h1>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <?php foreach ($products as $product){?>
                    <div class="col-md-4 mt-5">
                        <div class="card">
                            <img src="assets\image\<?php echo $product['image']?>" alt=""" height=250px>
                            <div class="card-body">
                                <h4><?php echo $product['name']?></h4>
                                <p><?php echo $product['price']?></p>
                                <p><?php echo $product['description']?></p>
                                <p><?php echo $product['company_name']?></p>
                                <a href="action.php?page=product-details&&id=<?php echo $product['id']?>" class="btn btn-outline-danger">Details</a>


                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section>
<?php include 'pages/footer.php'?>