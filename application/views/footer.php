    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-header">
                        <div class="footer-logo">
                            <img src="<?php echo base_url(); ?>themes/image/pmi_footer_logo.png" alt="Porosity and Permeability Material Testing Services | PMI logo">
                        </div>
                        <div class="footer-copyright-text">
                            <p>Copyright © 2025 All Rights Reserved.</p>
                        </div>
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/PorosityPermeabilityTesting/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/porosity-permeability-testing/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" data-bs-backdrop="static" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body bg-theme p-4 rounded-3">
                    <div class="d-flex mb-4 align-items-center justify-content-between">
                        <h2 class="modal-title fs-5 text-white" id="exampleModalToggleLabel">Enquiry Form</h2>
                        <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="member-contact-form contact-form">
                        <form id="enquiryForm" class="wow fadeInUp" data-wow-delay="0.2s">
                            <input type="hidden" name="enquiry_type" class="form-control" id="enquiry_type" value="Enquiry Popup">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="full_name" class="form-control" id="full_name" placeholder="First Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Enter Your Phone No.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name ="email" class="form-control" id="email" placeholder="Enter Your E-mail">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" name="city" class="form-control" id="city" placeholder="Your Location">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Write Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn-default btn-highlighted"><span>submit message</span></button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <script>
        // enquiry Form Save Function
        $("#contactForm").validate({
            rules: {
                full_name: {
                    required: true
                },
                company_name: {
                    required: true
                },
                phone_number: {
                    required: true,
                    digits: true,
                },
                email: {
                    email: true,
                    required: true
                },
                city : {
                    required: true
                }
            },
            messages: {
                full_name: {
                    required: "Please Enter Your Name",
                },
                company_name: {
                    required: "Please Enter Your Company Name",
                },
                phone_number: {
                    required: "Please Enter Your Phone Number",
                },
                email: {
                    required: "Please Enter Your Email",
                },
                city: {
                    required: "Please Enter Your Location",
                }
            },
            submitHandler: function (form) {
                var data = new FormData($('#contactForm').get(0));
                $.ajax({
                    url: '<?php echo base_url(); ?>enquiryFormSave',
                    data: data,
                    cache: false,
                    processData: false,
                    contentType: false,
                    method: 'POST',
                    dataType: 'json',
                    beforeSend: function () {
                        $(".successMessage").hide();
                    },
                    success: function (data) {
                        $(".loader").hide();
                        $(".successMessage").show();
                        setTimeout(function () {
                            window.location.href = "<?php echo base_url(); ?>thankyou";
                        }, 1500);
                    }
                });
                return false;
            }
        });

        // enquiry PopupForm Save Function
        $("#enquiryForm").validate({
            rules: {
                full_name: {
                    required: true
                },
                company_name: {
                    required: true
                },
                phone_number: {
                    required: true,
                    digits: true,
                },
                email: {
                    email: true,
                    required: true
                },
                city : {
                    required: true
                }
            },
            messages: {
                full_name: {
                    required: "Please Enter Your Name",
                },
                company_name: {
                    required: "Please Enter Your Company Name",
                },
                phone_number: {
                    required: "Please Enter Your Phone Number",
                },
                email: {
                    required: "Please Enter Your Email",
                },
                city: {
                    required: "Please Enter Your Location",
                }
            },
            submitHandler: function (form) {
                var data = new FormData($('#enquiryForm').get(0));
                $.ajax({
                    url: '<?php echo base_url(); ?>enquiryFormSave',
                    data: data,
                    cache: false,
                    processData: false,
                    contentType: false,
                    method: 'POST',
                    dataType: 'json',
                    beforeSend: function () {
                        $(".successMessage").hide();
                    },
                    success: function (data) {
                        $(".loader").hide();
                        $(".successMessage").show();
                        setTimeout(function () {
                            window.location.href = "<?php echo base_url(); ?>thankyou";
                        }, 1500);
                    }
                });
                return false;
            }
        });
    </script>
    
    <!-- Bootstrap js file -->
    <script src="<?php echo base_url(); ?>themes/js/bootstrap.min.js"></script>
    <!-- SlickNav js file -->
    <script src="<?php echo base_url(); ?>themes/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="<?php echo base_url(); ?>themes/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="<?php echo base_url(); ?>themes/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="<?php echo base_url(); ?>themes/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="<?php echo base_url(); ?>themes/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="<?php echo base_url(); ?>themes/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="<?php echo base_url(); ?>themes/js/gsap.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="<?php echo base_url(); ?>themes/js/SplitText.js"></script>
    <script src="<?php echo base_url(); ?>themes/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="<?php echo base_url(); ?>themes/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="<?php echo base_url(); ?>themes/js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="<?php echo base_url(); ?>themes/js/function.js"></script>
</body>

</html>