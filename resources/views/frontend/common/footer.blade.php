<footer class="footboxcoverset">
    <div class="container-fluid">

        <div class="fotrlistcoverbox">
            <div class="fotrlistcover_left">
                <div class="footerlogoleftsec">
                    <a href="javascript:;" alt="">
                        <img alt="Logo" title="Telesante E-Pharma" src="{{ url('frontend/assets/images/logo.png') }}">
                    </a>
                </div>
                <div class="footercontdetails">
                    <span>Call us</span>
                    <h3><a href="tel:+91 123 456 7890" alt="">+91 123 456 7890</a></h3>
                    <p>11 Shop 2, Hkk Lane, Kumbarpet, India
                    </p>
                    <p><a href="javascript:;" alt="">info@mypharmacy.com</a>
                    </p>
                </div>
            </div>
            <div class="fotrlistcover_mid">
                <ul>
                    <h3>My account</h3>
                    <li><a href="javascript:;" alt="">Offers</a></li>
                    <li><a href="javascript:;" alt="">Contact us</a></li>
                    <li><a href="javascript:;" alt="">My Account</a></li>
                    <li><a href="javascript:;" alt="">Shopping Cart</a></li>
                </ul>
                <ul>
                    <h3>Customer services</h3>
                    <li><a href="javascript:;" alt="">Terms Conditions </a></li>
                    <li><a href="javascript:;" alt="">Privacy Policy</a></li>
                    <li><a href="javascript:;" alt="">Return Policy</a></li>
                    <li><a href="javascript:;" alt="">FAQ’s</a>
                    </li>
                </ul>
            </div>
            <div class="fotrlistcover_right">
                <div class="downloadourapplist">
                    <h3>Download our app</h3>
                    <a href="javascript:;" target="_blank"><img src="{{ url('frontend/assets/images/play_store.png') }}" alt=""></a>
                    <a href="javascript:;"><img src="{{ url('frontend/assets/images/app_store.png') }}" alt=""></a>
                </div>

            </div>
        </div>
        <div class="footbotcopyrig_cover">
            <div class="footbotcopyrig_left">
                <p>Copyright © 2021 Telesante E-Pharma. All Rights Reserved.</p>
            </div>
            <div class="footbotcopyrig_right">
                <ul>
                    <li><a href="javascript:;" alt=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:;" alt=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:;" alt=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:;" alt=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="loader-wrapper" style="display: none;">
    <div class="loader-box">
        <div class="loadericonset">
            <i class="fas fa-first-aid"></i>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<!-- <script src="js/jquery-3.6.0.min.map"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/css-vars-ponyfill@2"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ url('frontend/assets/js/custom.js') }}"></script>

<script>

    $('.mainbannercoverset').owlCarousel({
        loop: true,
        nav: true,
        margin: 16,
        autoplay: true,
        autoplayTimeout: 5000,
        navText: ['<i class="material-symbols-outlined leftarrowboxicon">chevron_left</i>', '<i class="material-symbols-outlined rightarrowboxicon">chevron_right</i>'],
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $('#offerSliderFirst').owlCarousel({
        loop: false,
        nav: false,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        mouseDrag: true,
        pagination: false,
        dots: false,
        navText: ['<i class="material-symbols-outlined">arrow_back_ios_new</i>', '<i class="material-symbols-outlined">arrow_forward_ios</i>'],
        responsive: {
            0: {
                items: 1
            },

        }
    })

    $('#offerSliderSecond').owlCarousel({
        loop: false,
        nav: false,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        mouseDrag: true,
        pagination: false,
        dots: false,
        navText: ['<i class="material-symbols-outlined">arrow_back_ios_new</i>', '<i class="material-symbols-outlined">arrow_forward_ios</i>'],
        responsive: {
            0: {
                items: 1
            },

        }
    })

    $('#carouselSld1').owlCarousel({
        loop: false,
        nav: true,
        autoplay: false,
        autoplayTimeout: 4000,
        mouseDrag: false,
        pagination: false,
        dots: false,
        navText: ['<i class="material-symbols-outlined">arrow_back_ios_new</i>', '<i class="material-symbols-outlined">arrow_forward_ios</i>'],
        item: 4,
        responsive: {
            0: {
                items: 2,
            },
            390: {
                items: 2,
            },
            420: {
                items: 3,
            },
            520: {
                items: 3
            },
            768: {
                items: 5
            },
            992: {
                items: 6
            },
            1200: {
                items: 7
            }
        }
    })



    $('.product-slider-active').owlCarousel({
        loop: false,
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        mouseDrag: false,
        dots: false,
        navText: ['<i class="material-symbols-outlined">arrow_back_ios_new</i>', '<i class="material-symbols-outlined">arrow_forward_ios</i>'],
        item: 4,
        responsive: {
            0: {
                items: 2
            },
            420: {
                items: 2
            },
            520: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 5
            },
            1200: {
                items: 6
            }
        }
    })



    $('#featurebrandcover').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        mouseDrag: false,
        dots: false,
        navText: ['<i class="material-symbols-outlined">arrow_back_ios_new</i>', '<i class="material-symbols-outlined">arrow_forward_ios</i>'],
        item: 4,
        responsive: {
            0: {
                items: 2
            },
            420: {
                items: 2
            },
            520: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 5
            },
            1200: {
                items: 6
            }
        }
    })


    $('.bookappointmentcover').owlCarousel({
        loop: false,
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        mouseDrag: false,
        dots: false,
        navText: ['<i class="material-symbols-outlined">arrow_back_ios_new</i>', '<i class="material-symbols-outlined">arrow_forward_ios</i>'],
        item: 4,
        responsive: {
            0: {
                items: 2
            },
            420: {
                items: 2
            },
            520: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 5
            },
            1200: {
                items: 6
            }
        }
    })


    $('.healthpackboxcover').owlCarousel({
        loop: false,
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        mouseDrag: false,
        dots: false,
        navText: ['<i class="material-symbols-outlined">arrow_back_ios_new</i>', '<i class="material-symbols-outlined">arrow_forward_ios</i>'],
        item: 4,
        responsive: {
            0: {
                items: 1
            },
            420: {
                items: 2
            },
            520: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });


    $('.symptoms-slider').owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        margin: 15,
        autoplayTimeout: 5000,
        mouseDrag: false,
        dots: false,
        navText: ['<i class="material-symbols-outlined">arrow_back_ios_new</i>', '<i class="material-symbols-outlined">arrow_forward_ios</i>'],
        item: 4,
        responsive: {
            0: {
                items: 1
            },
            479: {
                items: 1
            },
            575: {
                items: 2
            },
            850: {
                items: 2
            },
            851: {
                items: 3
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })

    $('.top-doctors-slider').owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        margin: 15,
        autoplayTimeout: 5000,
        mouseDrag: false,
        dots: false,
        navText: ['<i class="material-symbols-outlined">arrow_back_ios_new</i>', '<i class="material-symbols-outlined">arrow_forward_ios</i>'],
        item: 4,
        responsive: {
            0: {
                items: 1
            },
            479: {
                items: 1
            },
            575: {
                items: 2
            },
            850: {
                items: 2
            },
            851: {
                items: 3
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });


    $('.allcustomerreviewcover').owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        mouseDrag: false,
        dots: false,
        navText: ['<i class="material-symbols-outlined">arrow_back_ios_new</i>', '<i class="material-symbols-outlined">arrow_forward_ios</i>'],
        item: 4,
        responsive: {
            0: {
                items: 1
            },
            420: {
                items: 2
            },
            520: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })


    $('.listofblogcoverset').owlCarousel({
        loop: false,
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        mouseDrag: false,
        dots: false,
        navText: ['<i class="material-symbols-outlined">arrow_back_ios_new</i>', '<i class="material-symbols-outlined">arrow_forward_ios</i>'],
        item: 4,
        responsive: {
            0: {
                items: 1
            },
            420: {
                items: 2
            },
            520: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 4
            }
        }
    })
</script>