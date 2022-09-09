<?php include 'pages/header.php'?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">All product Info</h1>
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <?php foreach ($products as $product){?>
                    <div class="col-md-4">
                        <div class="card mb-5">
                            <img src="assets\image\<?php echo $product['image']?>" alt="" style="height: 350px">
                            <div class="card-body">
                                <h4>Product Name: <?php echo $product['name']?></h4>
                                <p>Product price:<?php echo $product['price']?></p>
                                <p>Product Description:<?php echo $product['description']?><p>
                                <p>Company Name:<?php echo $product['company_name']?></p>
                                <a href="action.php?page=details&id=<?php echo $product['id']?>" class="btn btn-outline-info">Details</a>

                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include 'pages/footer.php'?>