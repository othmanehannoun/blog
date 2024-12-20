


<?php include "./header/header.php" ?>
        
        <!--header end-->


        <!--page title start-->

        <section class="page-title">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10">
                        <h1>
                            Contact us
                        </h1>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                <i class="bi bi-house-door me-1"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Contact</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="page-title-wave">
                <img src="images/page-bg.svg" alt="">
            </div>
        </section>

        <!--page title end-->


        <!--body content start-->

        <div class="page-content">

            <!--contact start-->

            <section>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 mb-6 mb-lg-0 order-lg-1">
                            <div class="theme-title">
                                <h6>Get In Touch</h6>
                                <h2>Drop A Line!</h2>
                            </div>
                            <form id="contact-form" method="post" action="php/contact.php">
                                <div class="messages"></div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Write Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <button class="themeht-btn primary-btn mt-4">
            <span>Send Message</span>
            <i class="bi bi-arrow-right"></i>
          </button>
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-12 pe-lg-10">
                            <div class="map iframe-h-2">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921"
                                    allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

       
            <!--contact end-->

        </div>

        <!--body content end-->



   
    

    <!-- page wrapper end -->
    <?php include "./header/footer.php" ?>