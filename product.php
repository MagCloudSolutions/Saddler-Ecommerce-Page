<?php require_once("header.php") ?>
<?php
$conn = mysqli_connect("localhost", "root", "", "saddleri_ecommerce");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
// $class_name = "HeyBags";
$result = mysqli_query($conn, "SELECT name, display,image_location FROM sad_catagory");

$classes = array();
while ($row = mysqli_fetch_array($result)) {
    $classes[$row['name']] = $row['display'];
    $link = $row['image_location']; 
}

mysqli_close($conn);
?>

<style>
    .thumb img{
        width:350px;
        height:300px;
    }
    .main-banner{
        padding-top: 10px;
    }
</style>

<!-- ***** Products Area Starts ***** -->
<section class="section mt-5" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Latest Products</h2>
                    <span>Check out all of our products.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="right-content">
                        <div class="row">
                            
                        <?php foreach ($classes as $class_name): ?>
                        <div class="col-lg-3">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4 class="<?php echo strtolower($class_name); ?>"><?php echo $class_name; ?></h4>
                                        <span><?php echo $class_name; ?> For Horse</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4 class="<?php echo strtolower($class_name); ?>"><?php echo $class_name; ?></h4>
                                            <p>Variety of <?php echo $class_name; ?> for all season.</p>
                                            <div class="main-border-button">
                                                <a href="<?php echo $link; ?>">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/11.jpg">
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>


                        </div>
                    </div>
                </div>


                <!-- end of right half -->
<!-- 
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Horse Rein</h4>
                                            <span>All type Horse Rein For Horse</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Horse Rein</h4>
                                                <p>Variety of Horse Rein for all season.</p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/12.jpg">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Horse Riding Helmet</h4>
                                            <span>All type Horse Riding Helmet</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Horse Riding Helmet</h4>
                                                <p>Horse Riding Helmet are available in different color, sizes,
                                                    materials and prices.
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/13.jpg">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Horse Riding Shoes</h4>
                                            <span>Horse Riding Shoes for Horses</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Horse Riding Shoes</h4>
                                                <p>Horse Riding Shoes are available in different color, sizes, materials
                                                    and
                                                    prices.</p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/14.jpg">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Horse Rugs</h4>
                                            <span>Best Trend Horse Rugs for Horses</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Horse Rugs</h4>
                                                <p>Horse Rugs Ropes are available in different color, sizes, materials
                                                    and prices.</p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/15.jpg">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4 class="Horse Boots & Wraps">Horse Boots & Wraps</h4>
                                            <span>Best Trend Horse Boots Wraps for Horses</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Horse Boots & Wraps</h4>
                                                <p>Horse Boots Wraps Ropes are available in different color, sizes,
                                                    materials
                                                    and prices.</p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/16.jpeg">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Horse-Bosal</h4>
                                            <span>Best Trend Horse-Bosal for Horses</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Horse-Bosal</h4>
                                                <p>Horse-Bosal Ropes are available in different color, sizes, materials
                                                    and prices.</p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/17.png">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Horse Saddle Cloth</h4>
                                            <span>Best Trend Horse Saddle Cloth for Horses</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Horse Saddle Cloth</h4>
                                                <p>Horse Saddle Cloth Ropes are available in different color, sizes,
                                                    materials
                                                    and prices.</p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/1.webp">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Horse Saddle Pads</h4>
                                            <span>Best Trend Horse Saddle Pads for Horses</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Horse Saddle Pads</h4>
                                                <p>Horse Saddle Pads Ropes are available in different color, sizes,
                                                    materials
                                                    and prices.</p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/18.webp">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Horse-Saddles</h4>
                                            <span>Best Trend Horse-Saddles for Horses</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Horse-Saddles</h4>
                                                <p>Horse-Saddles Ropes are available in different color, sizes,
                                                    materials
                                                    and prices.</p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img
                                            src="assets/images/19.webp">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Horse-Shoe</h4>
                                            <span>Best Trend Horse-Shoe for Horses</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Horse-Shoe</h4>
                                                <p>Horse-Shoe Ropes are available in different color, sizes, materials
                                                    and prices.</p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/20.jpg">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Horse-Sticks</h4>
                                            <span>Best Trend Horse-Sticks for Horses</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Horse-Sticks</h4>
                                                <p>Horse-Sticks Ropes are available in different color, sizes, materials
                                                    and prices.</p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/21-removebg-preview.png">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Horse-Stirrup</h4>
                                            <span>Best Trend Horse-Stirrup for Horses</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Horse-Stirrup</h4>
                                                <p>Horse-Stirrup Ropes are available in different color, sizes,
                                                    materials
                                                    and prices.</p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/22.webp">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Horse-Winter-Blankets</h4>
                                            <span>Best Trend Horse-Winter-Blankets for Horses</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Horse-Winter-Blankets</h4>
                                                <p>Horse-Winter-Blankets Ropes are available in different color, sizes,
                                                    materials
                                                    and prices.</p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="external_images/external/11.jpg">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Bell Boots</h4>
                                            <span>Best Trend Bell Boots for Horses</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Bell Boots</h4>
                                                <p>Bell Boots Ropes are available in different color, sizes, materials
                                                    and prices.</p>
                                                <div class="main-border-button">
                                                    <a href="<?php echo $link; ?>   ">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="external_images/original/1.jpg">
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>



</section>
<!-- ***** Products Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<?php require_once("footer.php")
    ?>