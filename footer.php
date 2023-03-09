    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">J.B. International, Udyog Nagar, Kanpur, Uttar Pradesh</a></li>
                            <li><a href="mailto:enquiry@saddler.in">enquiry@saddler.in</a></li>
                            <li><a href="tel:+918081976557">+91-8081976557</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Our Company</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Our Products</h4>
                    <ul>
                        <li><a href="#">Horse Boots & Wraps</a></li>
                        <li><a href="#">Hay Bags</a></li>
                        <li><a href="#">Horse Bridles </a></li>
                        <li><a href="#">Horse Breastplate & Bosal </a></li>
                        <li><a href="#">Horse Saddle</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4 class="pt-3"></h4>
                <ul>
                    <li><a href="#">Horse Rugs</a></li>
                    <li><a href="#">Horse Exercise Sheet</a></li>
                    <li><a href="#">Horse Browband</a></li>
                    <li><a href="#">Horse Fly Masks</a></li>
                    <li><a href="#">Horse Fly Bonnets and Veils</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2023 <a href="https://www.saddler.in">Saddler.in</a>, Ltd. All Rights Reserved. 
                        <ul>
                            <li><a href="https://www.facebook.com/people/Saddler-India/pfbid08CPXajRM3xR95HBo2cvHcqmHnaw1Ww2PL2ufe5jx4jrshEvQTruzLmgbaoq3wx5Gl/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/SaddlerIndia"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/saddlerindia/ "><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>