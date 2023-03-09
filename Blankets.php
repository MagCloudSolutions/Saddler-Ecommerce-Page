<?php require_once("header.php") ?>
<!-- ***** Main Banner Area Start ***** -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    .carousel-item img{
        width:600px!important;
        height:450px;
    }
    .col-lg-6{
        align-items: center!important;
        display: flex!important;
    }
    h3{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    ul, li:not(.nav li){
        list-style:circle;
    }
    span{
        margin-top:8px!important;
        color:#8b8b8b!important;
    }
    #product .right-content h4{
        padding:10px 0px;
    }
</style>
<div class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Horse Blankets</h2>
                    <span>Keep your horse warm and cozy with our durable and stylish horse blankets.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->


<!-- ***** Product Area Starts ***** -->
<section class="section" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-3">
                <div class="left-images">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="external_images/external/6.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="external_images/external/5.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="external_images/external/3.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="external_images/external/8.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="external_images/external/7.jpg" class="d-block w-100">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- <img src="assets/images/single-product-01.jpg" alt="">
                    <img src="assets/images/single-product-02.jpg" alt=""> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <!-- <h3>Horse Blankets</h3> -->
                    <!-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt
                        ut labore.</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod.</p>
                    </div>
                    <div class="quantity-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ea consectetur provident aliquam! Earum recusandae dolor beatae quae aut qui perferendis corporis! Pariatur, voluptatibus voluptate!</p>
                    </div> -->
                    <!-- <h4>Introduction:</h4> -->
                    <span style="line-height:25px">Horse blankets are a must-have for any equestrian, providing warmth and protection from the elements for your horse. 
                        Our selection of horse blankets is made from high-quality materials, ensuring both durability and comfort for your horse. 
                        With a range of styles and colors to choose from, you're sure to find the perfect blanket to suit your needs.</span>

                    <h4>Features & Benefits:</h4>
                    <ul style="list-style:circle">
                    <li><span>Made from durable and high-quality materials</span></li>
                    <li><span>Available in a range of sizes to fit horses of all shapes and sizes</span></li>
                    <li><span>Available in a variety of styles and colors to suit your personal preferences</span></li>
                    <li><span>Easy to care for, so your horse can look and feel great all year round</span></li>
                    <li><span>Provides warmth and protection from the elements</span></li>
                    </ul>
                    <h4>Product Variations:</h4>
                    <ul><li>
                    <span><strong>Turnout Blankets:</strong> Perfect for keeping your horse warm and dry during turnout</span></li>
                    <li><span><strong>Stable Blankets:</strong> Ideal for use in the stable, providing extra warmth during the colder months</span></li>
                    <li><span><strong>Blanket Liners:</strong> Adds an extra layer of warmth under your horse's turnout blanket</span></li>
                    <li><span><strong>Sizing Guide:</strong> Our horse blankets are available in a range of sizes, from small to large, to fit horses of all shapes and sizes. To ensure the best fit for your horse, be sure to measure your horse and refer to our sizing guide before making your purchase.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<div class=container style="text-align:center">
<button class="btn btn-primary btn-lg"><a style='color:white' href="products.php">More Products</a></button>
</div>
<!-- ***** Product Area Ends ***** -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
<?php require_once("footer.php") ?>