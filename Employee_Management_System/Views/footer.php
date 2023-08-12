<!-- Footer -->
<footer id="footer" class="py-sm-5 py-4 bg-theme">
        <div class="container">
            <div class="footer-top-w3ls">
                <h2><a href="index.html" class="navbar-brand">recruit</a></h2>
                <p class="text-white">Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam
                    erat, At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, no sea
                    takimata sanctus est Lorem ipsum dolor sit amet. Stet clita kasd gubergren, no sea takimata sanctus
                    est
                    Lorem ipsum dolor sit amet. no sea takimata sanctus est Lorem ipsum dolor sit amet. no sea takimata
                    sanctus est Lorem ipsum dolor sit amet. sed diam voluptua. </p>
            </div>
            <div class="row  pt-5">
                <div class="col-lg-3 col-sm-6 footer_grid1">
                    <h5>Address</h5>
                    <div class="d-flex align-items-center">
                        <span class="fa fa-building mr-4"></span>
                        <p>90 Street, landmark
                            <br>City State 34189.</p>
                    </div>
                    <div class="d-flex mt-3 align-items-center">
                        <span class="fa fa-building mr-4"></span>
                        <p>16 Street, landmark
                            <br>City State 74789.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li>
                            <a href="index.html">
                                <span class="fa fa-play"></span>Home</a>
                        </li>
                        <li>
                            <a href="about.html">
                                <span class="fa fa-play"></span>About</a>
                        </li>
                        <li>
                            <a href="job_list.html">
                                <span class="fa fa-play"></span>Job List</a>
                        </li>
                        <li>
                            <a href="job_single.html">
                                <span class="fa fa-play"></span>Job Single</a>
                        </li>
                        <li>
                            <a href="contact.html">
                                <span class="fa fa-play"></span>Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li>
                            <a href="index.html">
                                <span class="fa fa-play"></span>Home</a>
                        </li>
                        <li>
                            <a href="about.html">
                                <span class="fa fa-play"></span>About</a>
                        </li>
                        <li>
                            <a href="job_list.html">
                                <span class="fa fa-play"></span>Job List</a>
                        </li>
                        <li>
                            <a href="job_single.html">
                                <span class="fa fa-play"></span>Job Single</a>
                        </li>
                        <li>
                            <a href="contact.html">
                                <span class="fa fa-play"></span>Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                    <h5>subscribe to newsletter</h5>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control  border-0 border-rounded" id="emailid" placeholder="Enter email"
                                name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="Submit" class="form-control bg-light-theme  border-0 border-rounded" id="sub"
                                value="Submit" name="sub">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->
    <div class="cpy-right text-center py-4">
        <p class="text-dark">© 2018 Recruit. All rights reserved | Design by
            <a href="http://w3layouts.com" class="text-theme"> W3layouts.</a>
        </p>
    </div>
    
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- Slider-JavaScript -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider, #slider1").responsiveSlides({
                auto: true,
                nav: false,
                speed: 1500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <!-- //Slider-JavaScript -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- //js -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>