<!-- <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="home" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark" ><i class="bi bi-suitcase-lg"></i>Our Products</h1>
            <i class="bi bi-suitcase-lg"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
         
                <a href="product" class="nav-item nav-link active">Food</a>
                <a href="service" class="nav-item nav-link">Treat</a>
                <a href="about" class="nav-item nav-link">Chews</a>
                <a href="about" class="nav-item nav-link">Toys</a>
                <a href="about" class="nav-item nav-link">Beds</a>
                <a href="about" class="nav-item nav-link">Collar</a>
                <a href="product" class="nav-item nav-link">Bowl</a>
                <a href="product" class="nav-item nav-link">Health Supplements</a>
              
                
        </div>
    </nav> -->








<!-- Products Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
            </div>
            <form action="cart" method="post">

                <div class="owl-carousel product-carousel">
                    <?php foreach($products as $product)
						{
							?>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?php echo $product->image ?>" style="" alt="">
                        <h6 class="text-uppercase"><?php echo $product->description ?></h6>
                        <h5 class="text-primary mb-0"><?php echo $product->price ?></h5>
                        <div class="btn-action d-flex justify-content-center">
                            <button class="btn btn-primary py-2 px-3"><?php echo $product->id ?>Add to Cart</button>
                            <input type="hidden" name="item_price" value="<?php echo $product->price ?>">
                            <!-- <a class="btn btn-primary py-2 px-3" name= "add" href="" value=""><i class="bi bi-cart"></i></a> -->
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </form>
        </div>
    </div>
    <!-- Products End -->


    