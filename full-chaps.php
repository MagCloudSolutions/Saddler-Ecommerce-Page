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
                    <h2>leather Full Chap</h2>
                    <span>Classic and stylish option for horse riders, providing extra protection</span>
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
                                <img src="assets/images/1.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/2.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/21.jpg" class="d-block w-100">
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
                    <span style="line-height:25px">Leather full chaps are a classic and stylish option for horse riders, providing extra protection for the horse's legs and hooves. 
                    Our collection of leather full chaps is made from high-quality materials, ensuring durability, comfort, and style.</span>

                    <h4>Features & Benefits:</h4>
                    <ul style="list-style:circle">
                    <li><span>Made from premium-quality leather materials</span></li>
                    <li><span>Available in a range of sizes to fit horses of all sizes</span></li>
                    <li><span>Available in a variety of styles and designs to suit your personal preferences</span></li>
                    <li><span>Helps prevent chafing and rubbing</span></li>
                    <li><span>Long-lasting and durable</span></li>
                    </ul>
                    <h4>Product Variations:</h4>
                    <ul><li>
                    <span><strong>Plain Leather Full Chaps:</strong> A simple and stylish option, perfect for everyday riding</span></li>
                    <li><span><strong>Tooled Leather Full Chaps:</strong> A decorative option, featuring intricate designs and patterns</span></li>
                    <li><span><strong>Custom Leather Full Chaps:</strong> Can be customized to match your personal style and preferences</span></li>
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