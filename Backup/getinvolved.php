<!--
Ben Chadwick
Jessica Sestak
Husrav Homidov
Tiffany Welo

Team Dotcom
11/1/20
This website is the resources for St. James Outreach
-->
<?php

// Include header file
include('includes/head.html');

?>
<body>

<!--NAVBAR-->
<nav class="navbar navbar-dark bg-dark navbar-expand-md sticky-top">
    <div class="container">
        <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#myTogglerNav"
                aria-controls="myTogglerNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="index.php" class="navbar-brand">Kent Outreach</a>
        <div class="collapse navbar-collapse" id="myTogglerNav">
            <div class="navbar-nav">
                <a href="index.php#assistance" class="nav-item nav-link">ASSISTANCE</a>
                <a href="index.php#contact" class="nav-item nav-link">CONTACTS</a>
                <a href="getinvolved.php" class="nav-item nav-link active">GET INVOLVED</a>
                <a href="resources.php" class="nav-item nav-link">RESOURCES</a>
            </div><!-- navbar -->
        </div>
    </div><!-- container -->
</nav><!-- nav -->

<div class="pageStyle container p-3 mb-5 bg-white rounded">

    <div class="w3-container w3-content w3-center w3-padding-64 band shadow-lg p-3 mb-5 rounded">
        <h2 class="mb-5">You Can Help Us Help Others</h2>
        <!--LINKS AND DESCRIPTION SECTION-->
        <div class="w3-container w3-theme w3-padding-32" id="myHeader">
            <div class="text-center">
                <hr>

                <div class="card mb-3"  style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card"  style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>





                    <!-- Example row of columns -->
                    <div class="row">
                        <div class="col-md-4 text-left">
                            <h3 class="mb-3">Donations</h3>

                            <ul class="list-unstyled">
                                <li class="mb-3"><strong>Financial Donation</strong><br>
                                    <a href="http://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=H9ERUZQAKHFUA"
                                       target="_blank"><img src="images/paypalicon.png" class="" alt="PayPal"/><u>PayPal
                                            Link</u></a>

                                </li>

                                <li class="mb-3"><strong>Supply Donations</strong><br>
                                    Canned goods, non-perishables, diapers, personal/feminine hygiene items
                                </li>
                            </ul>

                        </div>

                        <div class="col-md-4 text-left">
                            <h3 class="mb-3">Volunteer</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3"><strong>Thrift Shop volunteers</strong><br>
                                    <i class="fa fa-envelope contactFont"> </i>Email <a
                                            href="mailto:jacinta@stjameskent.org"><u>jacinta@stjameskent.org</u></a>
                                    for more information.
                                </li>
                                <li class="mb-3"><strong>Outreach office phone volunteers</strong><br>
                                    <i class="fa fa-envelope contactFont"> </i>Email <a
                                            href="mailto:postrander@stjameskent.org"><u>postrander@stjameskent.org</u></a>
                                    for more information.
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4 text-left">
                            <h3 class="mb-3">Seasonal Opportunities</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3"><strong>Winter Drive </strong>(gloves, socks, hand-warmers)</li>
                                <li class="mb-3"><strong>Back-to-school Drive </strong>(backpacks and school supplies)
                                </li>
                                <li class="mb-3"><strong>Angel Tree </strong>(Christmas gifts)</li>
                            </ul>
                        </div>

                    </div>
                    <img src="images/stjameslogoreal.png" class="img-fluid mt-5" alt="St. James logo">
                </div> <!-- /container -->
            </div>
        </div>
    </div>


    <!-- The Footer Section -->
    <div class="w3-container w3-content w3-center w3-padding-64 shadow-lg mb-5 bg-white w3-black rounded" id="contact">
        <!-- Footer -->
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 footer-about">
                            <h3 class="mb-5">Hours</h3>

                            <p><i class="fa fa-calendar contactFont"> </i>
                                Monday: 1:00pm to 4:00pm</p>
                            <p>Tuesday: 9:00am to 12:00 noon</p>
                            <p>Wednesday: 1:00pm to 4:00pm</p>

                        </div>

                        <div class="col-md-4 col-lg-4 footer-contact">
                            <h3 class="mb-5">Contacts</h3>
                            <!-- Google Map insertion -->
                            <p><i class="fa fa-map-marker" id="google"></i>
                                <a
                                        href="https://goo.gl/maps/UEuiGpguDtXozPjN7"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                >24447 94th Ave S, Kent, WA, 98030 </a></p>
                            <p><i class="fa fa-phone contactFont"></i> Phone:<a href="tel:253-852-4100">253-852-4100</a>
                            </p>
                            <p><i class="fa fa-envelope contactFont"> </i> Email:mail@mail.com</p>
                        </div>

                        <div class="col-md-4 col-lg-3 footer-location">
                            <h3 class="mb-3">Our Location</h3>
                            <!--Google map-->
                            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 200px">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10806.156076848025!2d-122.216393!3d47.381915!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54905eaea6606e61%3A0x206815f453c0e48b!2s24447%2094th%20Ave%20S%2C%20Kent%2C%20WA%2098030!5e0!3m2!1sen!2sus!4v1605391186289!5m2!1sen!2sus"
                                        width="300" height="150" style="border:0;" allowfullscreen=""
                                        aria-hidden="false"
                                        tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 footer-menu">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!--
        <footer
            class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge"
        >
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <p class="w3-medium">Made by Dotcom</p>
        </footer>-->
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
></script>
<script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"
></script>
<script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"
></script>

</body>
</html>