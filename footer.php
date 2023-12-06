<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row" style="padding-bottom: 40px;">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="index.php"> <span>Param Sales</span>
                        </a>
                    </div>
                    <ul>
                        <li>+91 8401952635</li>
                        <li>kp0657658@gmail.com</li>
                        <li>Vijalpore, NVS-Gujarat.</li>
                    </ul>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/explore" target="_blank"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="About.txt">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="pp.txt">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget" style="display: <?php if ($active == 'Register' || $active == 'Login') {
                                                                echo 'none';
                                                            };  ?>;">
                    <h5>Account</h5>
                    <ul>

                        <?php if (!($_SESSION['customer_email'] == 'unset')) {
                            echo "<li><a href='account.php?orders'>My Account</a></li>";
                        } ?>
                        <li><a href="
                        <?php if (!($_SESSION['customer_email'] == 'unset')) {
                            echo "shopping-cart.php";
                        } else {
                            echo "login.php";
                        }
                         ?>">Shopping Cart</a></li>

                        <li><a href="
                        <?php if (!($_SESSION['customer_email'] == 'unset')) {
                            echo "check-out.php";
                        } else {
                            echo "login.php";
                        }
                         ?>
                        ">Check Out</a></li>

                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</footer>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js" integrity="sha512-eUQ9hGdLjBjY3F41CScH3UX+4JDSI9zXeroz7hJ+RteoCaY+GP/LDoM8AO+Pt+DRFw3nXqsjh9Zsts8hnYv8/A==" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js" integrity="sha512-8vfyGnaOX2EeMypNMptU+MwwK206Jk1I/tMQV4NkhOz+W8glENoMhGyU6n/6VgQUhQcJH8NqQgHhMtZjJJBv3A==" crossorigin="anonymous"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
