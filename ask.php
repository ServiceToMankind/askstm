<?php
// include functions
include('includes/functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>STM IS WITH STUDENTS</title>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <link rel="apple-touch-icon" href="accesories/service_to_man_kind-20200709-0001.jpg" sizes="180x180" />
    <link rel="icon" href="accesories/fevicon 32.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="accesories/fevicon 16.png" sizes="16x16" type="image/png" />
    <link rel="mask-icon" href="accesories/safari-tab.svg" color="#563d7c" />
    <link rel="icon" href="accesories/fevicon 32.ico" />
    <meta name="theme-color" content="#563d7c" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/templatemo-digital-trend.css" />
</head>

<body>
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img style="margin-top: 7px; margin-right: 5px" src="images/logo.png" width="50px" />
            <a class="navbar-brand" href="index.html"> STM INDIA </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index" class="nav-link smoothScroll">Home</a>
                    </li>
                    <!-- <li class="nav-item">
              <a href="#project" class="nav-link smoothScroll">Our Works</a>
            </li>
            <li class="nav-item">
              <a href="blog.html" class="nav-link">Blog</a>
            </li> -->
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTACT -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">
                    <h1 class="mb-4">
                        Drop Your <strong>Requirements</strong> here. <br />
                        We <strong>Help</strong> You !
                    </h1>
                    <p>Our Volunteers Are Giving Thier 100% Effort To Help You.</p>
                    <p>Please mention your problems</p>
                </div>

                <div class="col-lg-8 mx-auto col-md-10 col-12">
                    <form action="askstm" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300"
                        role="form">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <input type="text" class="form-control" name="name" placeholder="Name" required />
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="Mobile" class="form-control" name="number" placeholder="Mobile No."
                                    required />
                            </div>

                            <!-- email  -->
                            <div class="col-lg-12 col-12">
                                <input type="email" class="form-control" name="email" placeholder="Email" required />
                            </div>
                            <!-- service type  -->
                            <div class="col-lg-12 col-12">
                                <select class="form-control" name="service" required>
                                    Service Type
                                    <?php
                                    $data = get_api_data("http://localhost/apis.stmorg.in/askstm/services");
                                    $data = json_decode($data, true);
                                    $data = $data['data'];
                                    foreach ($data as $key => $value) {
                                        echo '<option value="' . $value['id'] . '">' . $value['service'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-lg-12 col-12">
                                <textarea class="form-control" rows="6" name="description"
                                    placeholder="Please, Explain Briefly !" required></textarea>
                            </div>

                            <div class="col-lg-5 mx-auto col-7">
                                <button type="submit" class="form-control" id="submit-button" name="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">
                        Your health is your family's happiness.... Take care...
                        <strong>STAY HOME STAY SAFE</strong>
                    </h1>
                    <p>Our Volunteers Are Giving Their 100% To Help You.</p>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="my-4">Contact Info</h4>

                    <p class="mb-1">
                        <i class="fa fa-phone mr-2 footer-icon"></i>
                        +91 7729812798
                    </p>

                    <!-- <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                servicetomankindorganization@gmail.com
              </a>
            </p> -->
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="my-4">Address :</h4>

                    <p class="mb-1">
                        <i class="fa fa-home mr-2 footer-icon"></i>
                        H.No - 109/B, Lakshmi Nagar Colony, Suraram, Hyderabad, 500055
                    </p>
                </div>

                <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
                    <p class="copyright-text">
                        Copyright &copy; 2023 Stmorg.in
                        <br />
                    </p>
                </div>

                <!-- <div
            class="col-lg-4 mx-lg-auto col-md-6 col-12"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <ul class="footer-link">
              <li><a href="#">Stories</a></li>
              <li><a href="#">Work with us</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div> -->

                <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <ul class="social-icon">
                        <li>
                            <a href="https://www.instagram.com/servicetomankindorg/" class="fa fa-instagram"></a>
                        </li>
                        <li>
                            <a href="https:/twitter.com/STM_ORG" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="https://facebook.com/stmorg.in" class="fa fa-facebook"></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCbdtIhRfuRYZbAQvM76lBOQ?view_as=subscriber"
                                class="fa fa-youtube"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
