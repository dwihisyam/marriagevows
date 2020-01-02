<!DOCTYPE html>
<html>
<title>Marriage Vows</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?= base_url('assets/') ?>img/logo.png">
<link rel="stylesheet" href="<?= base_url('assets/') ?>css/w3.css">
<link rel="stylesheet" href="<?= base_url('assets/') ?>css/fonts-googleapis.css">
<link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url('assets/') ?>css/style2.css">
<link rel="stylesheet" href="<?= base_url('assets/') ?>css/magnific.css">
<link href="<?= base_url('assets/') ?>slick-1.8.1/slick/slick.css" rel="stylesheet">
<link href="<?= base_url('assets/') ?>slick-1.8.1/slick/slick-theme.css" rel="stylesheet">
<link href="<?= base_url('assets/') ?>aos-master/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>

<body>
    <div class="w3-hide-small" style="margin-top:32px">&nbsp;</div>
    <div class="w3-top w3-hide-small">
        <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
            <a href="<?= base_url('template/template1') ?>" style="width:33.3%" class="w3-bar-item w3-button">Template 1</a>
            <a href="<?= base_url('template/template2') ?>" style="width:33.3%" class="w3-bar-item w3-button">Template 2</a>
            <a href="<?= base_url('template/template3') ?>" style="width:33.3%" class="w3-bar-item w3-button">Template 3</a>
        </div>
    </div>

    <div id="sidebar">
        <a id="btn-close" href="javascript:void(0)" class="closebtn">&times;</a>
        <a id="btn-template1" style="width:100%" class="w3-bar-item w3-button mt-5">Template 1</a>
        <a id="btn-template2" style="width:100%" class="w3-bar-item w3-button">Template 2</a>
        <a id="btn-template3" style="width:100%" class="w3-bar-item w3-button">Template 3</a>
    </div>

    <audio id="music" src="<?= base_url('assets/') ?>musik.mp3" loop autoplay muted></audio>
    <div id="btn-music" style="right:20px;">
        <button><i class="fas fa-volume-mute fa-3x"></i></button>
    </div>

    <div id="btn-menu" style="left:20px;">
        <button><i class="fas fa-bars fa-3x"></i></button>
    </div>

    <!-- Header / Home-->
    <header class="w3-display-container w3-wide bgimg" id="home" style="overflow-x:hidden;">
        <div style="position:absolute;background-color: rgba(0,0,0,0.5);width: 100%;height: 100%;">
        </div>
        <div class="w3-display-middle w3-center" style="position:absolute;">
            <img src="<?= base_url('assets/') ?>img/template2/background-home.png" alt="">
        </div>
        <div class="w3-display-middle w3-center text-white">
            <div data-aos="fade-up">
                <h4>The Wedding Of</h4>
                <h1>Foger & Tyas</h1>
                <h3>29.12.2019</h3>
            </div>
        </div>
    </header>

    <!-- About / Jane And John -->
    <div class="w3-container w3-padding-64 w3-center page" id="about" style="background-color:#EEEEEE;">
        <div class="w3-content">
            <h1 class="mb-5"><b>About</b></h1>
            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-easing="ease-in-sine">
                    <img width="60%" class="img-fluid mb-3" src="<?= base_url('assets/') ?>img/template2/foger.jpg" alt="" style="border-radius:50%">
                    <h5>Foger Adi Abdullah</h5>
                    <p class="mb-1">17.05.1993</p>
                    <p>We did meet through a mutual friend at the end of our first year in college at Georgia. We got along really well and clicked instantly.</p>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-easing="ease-in-sine">
                    <img width="60%" class="img-fluid mb-3" src="<?= base_url('assets/') ?>img/template2/tyas.jpg" alt="" style="border-radius:50%">
                    <h5>Tyas Wijantantri</h5>
                    <p class="mb-1">17.05.1993</p>
                    <p>We met through a mutual friend at the end of our freshman year in college at Georgia. I noticed her eyes, and how outgoing she was.</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Ceremony -->
    <div class="w3-container w3-padding-64 w3-center page" id="ceremony">
        <div class="w3-content">
            <h1 class="mb-5"><b>Ceremony</b></h1>
            <div data-aos="zoom-out" class="text-center bgimgtime mx-auto mb-5 p-3" style="box-shadow: 0px 0px 5px rgba(0,0,0,0.2);width:90%;background-color:rgba(0,0,0,0.01)">
                <h3 style="font-weight:bold;">Until we getting married</h3>
                <div class="row my-4">
                    <div class="row mx-auto countdown">
                        <div class="mx-5">
                            <h1 style="font-size:50px;font-family:serif;font-style:italic;" id="hari"></h1>
                            <div style="font-weight:bold">Days</div>
                        </div>
                        <div class="mx-5">
                            <h1 style="font-size:50px;font-family:serif;font-style:italic;" id="jam"></h1>
                            <div style="font-weight:bold">Hours</div>
                        </div>
                        <div class="mx-5">
                            <h1 style="font-size:50px;font-family:serif;font-style:italic;" id="menit"></h1>
                            <div style="font-weight:bold">Minutes</div>
                        </div>
                        <div class="mx-5">
                            <h1 style="font-size:50px;font-family:serif;font-style:italic;" id="detik"></h1>
                            <div style="font-weight:bold">Seconds</div>
                        </div>
                    </div>
                </div>
                <h4 style="font-weight:bold;">are remaining</h4>
            </div>
            <div>
                <h3 class="mb-3" style="font-weight:bold;">Arrengement in progress</h3>
                <p>Our wedding day event order as follows with different cultures and religions will incorporate other elements or swap things around.</p>
                <div class="row mt-5" style="text-align:left">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <img class="img-fluid mb-3" src="<?= base_url('assets/') ?>img/progress-1.png" alt="">
                    </div>
                    <div class="col-md-5">
                        <h4>Marriage</h4>
                        <p style="text-align:justify">&emsp;The processional begins with the grandparents, flows through the parents, groom, officiant, wedding party, flower girl, and ring bearer, and ends with the bride making her entrance.</p>
                        <div class="mt-4">
                            Sunday, 29 December 2019, 08.00<br>
                            Bukit Golf Riverside
                        </div>
                    </div>
                </div>
                <div class="row mt-5" style="text-align:end">
                    <div class="col-md-1"></div>
                    <div class="col-md-5" style="text-align:left">
                        <h4>Wedding Ceremony</h4>
                        <p style="text-align:justify">&emsp;At the wedding party the officiant introduces the married couple for the first time. Then, the bride and groom lead the recessional back up the aisle as guests shower you with the rice!</p>
                        <div class="mt-4">
                            Sunday, 29 December 2019, 08.00<br>
                            Bukit Golf Riverside
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img class="img-fluid mb-3" src="<?= base_url('assets/') ?>img/progress-2.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Quotes -->
    <header class="w3-display-container w3-wide bgimg2" id="quotes">
        <div style="position:absolute;background-color: rgba(0,0,0,0.5);width: 100%;height: 100%; top:0%;">
        </div>
        <div class="w3-center text-white w3-padding-64">
            <div class="w3-content">
                <div class="multiple-items2 mx-auto" style="width:80%">
                    <div>
                        <h1 class="mb-5"><b>Quotes</b></h1>
                        <h1 class="mb-4" style="font-family:'Dancing Script', cursive">Happy is the man who finds a true friend, and far happpier is he who finds that true friend in his wife</h1>
                        -Franz Schubert-
                    </div>
                    <div>
                        <h1 class="mb-5"><b>Quotes</b></h1>
                        <h1 class="mb-4" style="font-family:'Dancing Script', cursive">Marriage is like a golden ring in a chain, whose beginning is a glance and whose ending is eternity.</h1>
                        -Khalil Gibran-
                    </div>
                    <div>
                        <h1 class="mb-5"><b>Quotes</b></h1>
                        <h1 class="mb-4" style="font-family:'Dancing Script', cursive">A happy marriage is a long conversation which always seems too short.</h1>
                        -Andre Maurois-
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Gallery -->
    <div class="w3-container w3-padding-64 w3-center page" id="gallery" style="background-color:#EEEEEE;">
        <div class="w3-content">
            <h1 class="mb-5"><b>Gallery</b></h1>
            <div class="row my-5 gallery">
                <div data-aos="zoom-in" class="col-md-4 img-gallery">
                    <img class="mx-auto my-3" src="<?= base_url('assets/') ?>img/template2/fogertyas.jpg" alt="">
                    <div class="img-view">
                        <a href="<?= base_url('assets/') ?>img/template2/fogertyas.jpg" style="color:white"><i class="fa fa-search fa-2x"></i></a>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-md-4 img-gallery">
                    <img class="mx-auto my-3" src="<?= base_url('assets/') ?>img/template2/fogertyas1.jpg" alt="">
                    <div class="img-view">
                        <a href="<?= base_url('assets/') ?>img/template2/fogertyas1.jpg" style="color:white"><i class="fa fa-search fa-2x"></i></a>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-md-4 img-gallery">
                    <img class="mx-auto my-3" src="<?= base_url('assets/') ?>img/template2/fogertyas3.jpg" alt="">
                    <div class="img-view">
                        <a href="<?= base_url('assets/') ?>img/template2/fogertyas3.jpg" style="color:white"><i class="fa fa-search fa-2x"></i></a>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-md-4 img-gallery">
                    <img class="mx-auto my-3" src="<?= base_url('assets/') ?>img/template2/fogertyas3.jpg" alt="">
                    <div class="img-view">
                        <a href="<?= base_url('assets/') ?>img/template2/fogertyas3.jpg" style="color:white"><i class="fa fa-search fa-2x"></i></a>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-md-4 img-gallery">
                    <img class="mx-auto my-3" src="<?= base_url('assets/') ?>img/template2/fogertyas1.jpg" alt="">
                    <div class="img-view">
                        <a href="<?= base_url('assets/') ?>img/template2/fogertyas1.jpg" style="color:white"><i class="fa fa-search fa-2x"></i></a>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-md-4 img-gallery">
                    <img class="mx-auto my-3" src="<?= base_url('assets/') ?>img/template2/fogertyas.jpg" alt="">
                    <div class="img-view">
                        <a href="<?= base_url('assets/') ?>img/template2/fogertyas.jpg" style="color:white"><i class="fa fa-search fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Location -->
    <div class="w3-container w3-padding-64 w3-center page" id="location">
        <div class="w3-content">
            <h1 class="mb-5"><b>Location</b></h1>
            <div class="map-responsive mx-auto mt-5" style="width:100%;height:100%;box-shadow: 0px 0px 5px rgba(0,0,0,0.3);">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7862268316658!2d106.90303191662264!3d-6.421507312277507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb2fc8c6d171%3A0x47a39e54424d6eda!2sBukit%20Golf%20Riverside!5e0!3m2!1sid!2sid!4v1576813034180!5m2!1sid!2sid" width="100%" height="400px" frameborder="0" style="border:0;box-shadow: 0px 0px 5px rgba(0,0,0,0.5);" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-padding-16 text-white" style="background-color:rgba(0,0,0,0.8)">
        <p>2019 &copy; Marriage Vows</p>
    </footer>

    <div class="w3-hide-small" style="margin-top:32px">&nbsp;</div>
    <div class="w3-bottom w3-hide-small">
        <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
            <a href="#home" style="width:16.6%" class="w3-bar-item w3-button">Home</a>
            <a href="#about" style="width:16.6%" class="w3-bar-item w3-button">About</a>
            <a href="#ceremony" style="width:16.6%" class="w3-bar-item w3-button">Ceremony</a>
            <a href="#quotes" style="width:16.6%" class="w3-bar-item w3-button">Quotes</a>
            <a href="#gallery" style="width:16.6%" class="w3-bar-item w3-button">Gallery</a>
            <a href="#location" style="width:16.6%" class="w3-bar-item w3-button">Location</a>
        </div>
    </div>

    <script src="<?= base_url('assets/') ?>slick-1.8.1/slick/slick.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/kit-fontawesome.js"></script>
    <script src="<?= base_url('assets/') ?>aos-master/dist/aos.js"></script>
    <script src="<?= base_url('assets/') ?>js/magnific.js"></script>

    <script>
        (function() {
            AOS.init();

            //countdown timer
            var countDownDate = new Date("Dec 30, 2019 00:00:00").getTime();
            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("hari").innerHTML = days;
                document.getElementById("jam").innerHTML = hours;
                document.getElementById("menit").innerHTML = minutes;
                document.getElementById("detik").innerHTML = seconds;
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("hari").innerHTML = "00";
                    document.getElementById("jam").innerHTML = "00";
                    document.getElementById("menit").innerHTML = "00";
                    document.getElementById("detik").innerHTML = "00";
                }
            }, 1000);

            //slick gallery
            if (window.innerWidth < 1024 && window.innerWidth >= 768) {
                $('.multiple-items').slick({
                    dots: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                });
            } else if (window.innerWidth < 768) {
                $('.multiple-items').slick({
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                });
            } else {
                $('.multiple-items').slick({
                    dots: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                });
            }

            //slick quotes
            $('.multiple-items2').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 10000,
                arrows: false
            });

            //button music
            $('#btn-music').click(function() {
                var music = document.getElementById("music");
                if (music.muted == true) {
                    music.muted = false;
                    $(this).children().children().removeClass('fa-volume-mute').addClass('fa-volume-up');
                } else {
                    music.muted = true;
                    $(this).children().children().removeClass('fa-volume-up').addClass('fa-volume-mute');
                }
            });

            //modal image
            $('.gallery').each(function() {
                $(this).magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    closeBtnInside: false,
                    gallery: {
                        enabled: true
                    }
                });
            });

            //menu responsive
            $('#btn-menu').click(function() {
                document.getElementById("sidebar").style.width = "50%";
            });
            $('#btn-close').click(function() {
                document.getElementById("sidebar").style.width = "0";
            });
            $("#btn-template1").click(function() {
                location.replace("template1");
            });
            $("#btn-template2").click(function() {
                location.replace("template2");
            });
            $("#btn-template3").click(function() {
                location.replace("template3");
            });
        }())
    </script>

</body>

</html>