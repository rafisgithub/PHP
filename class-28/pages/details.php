<?php include 'pages\header.php' ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Product Information</h1>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">

            <div class="col-xl-4 col-md-4">
                <div class="card">
                    <img src="assets\image\<?php echo $productById['image']?>" alt="">
                </div>
            </div>
            <div class="col-xl-8 col-md-8">
                <div class="card">
                <div class="card-body">
                    <h4>Product Name:<?php echo $productById['name']?></h4>
                    <p>Category Name:<?php echo $productById['category_id']?></p>
                    <p>Brand Name:<?php echo $productById['brand_id']?></p>
                    <p>Product price:<?php echo $productById['price']?></p>
                    <p>Product Description:<?php echo $productById['description']?></p>
                    <p>Company Name:<?php echo $productById['company_name']?></p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
