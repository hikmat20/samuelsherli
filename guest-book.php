<?php
// require_once 'config/connection.php';
require_once 'models/timesince.php';

if (!isset($_GET['wed']) && !isset($_GET['key'])) {
    header('location:index.php');
}

$wed    = $_GET['wed'];
$key    = $_GET['key'];
$date   = $_GET['date'];
$edate  = $_GET['edate'];

if ($wed == "" || $key == "") {
    header('location:index.php');
    return false;
} elseif ($wed != "samuelsherli" ||  $key != "cl21003") {
    header('location:index.php');
    return false;
}
// wed = samuelsherli & key = cl09001
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <style type="text/css">
        .checkboxtext {
            background: none;
        }
    </style>
    <script type="text/javascript" src="assets/1eba3f19/jquery.js"></script>
    <title>Undangan Pernikahan Sherli &amp; Samuel</title>
    <link rel="shortcut icon" type="images/x-icon" href="images/wedding/logo/samuelsherli.png">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="Undangan Pernikahan Sherli & Samuel" />
    <meta name="keywords" content="undangan digital, undangan pernikahan, video undangan, jasa undangan, web pernikahan, gratis, web nikah, undangan online" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="Undangan Digital Website Nikah Digital - GRATIS!">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="theme-color" content="#1a1b30" />
    <meta name="msapplication-navbutton-color" content="#1a1b30">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="HandheldFriendly" content="true" />
    <meta name="format-detection" content="telephone=no">
    <link rel="canonical" href="#" />
    <meta property="og:title" content="Undangan Pernikahan Sherli & Samuel" />
    <meta property="og:description" content="22 September 2021 - @nikahalal.com" />
    <meta property="og:site_name" content="Undangan Digital Website Nikah Digital" />
    <meta property="og:url" content="https://nikahalal.com" />
    <meta property="og:image" content="images/wedding/logo/samuelsherli.png" />
    <link itemprop="thumbnailUrl" href="images/wedding/logo/samuelsherli.png">
    <span itemprop="thumbnail" itemscope itemtype="images/wedding/logo/samuelsherli.png">
        <link itemprop="url" href="images/wedding/logo/samuelsherli.png">
    </span>
    <!-- <meta property="fb:app_id" content="168414063189010" />
    	<meta property="fb:admins" content="1236159042" /> -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/css-plugin-collections.css" rel="stylesheet" />
    <link id="menuzord-menu-skins" href="assets/css/menuzord-skins/menuzord-bottom-trace.css" rel="stylesheet" />
    <link href="assets/css/style-main.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors/theme-skin-navy-rustic.css" rel="stylesheet" type="text/css">
    <link href="assets/css/preloader.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="assets/sweetalert2/dist/sweetalert2.all.min.js" rel="stylesheet" type="text/css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        body {
            overflow: overlay;
        }

        .svg-genders {
            fill: #BBAD62 !important;
        }

        .cover {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-image: url('images/wedding/bg/bg-cover.jpg');
            background-position: center;
            background-size: cover;
            z-index: 9999;
            display: block;
        }

        .cover.overlay::before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            content: "";
            background-color: black;
            /* z-index: 99991; */
            opacity: .5;
        }

        .content-cover {
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translateX(-50%);
            margin: auto;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
            height: 20px;
            background: none;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: none;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #f1f1f12e;
            border-radius: 20px;

        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #f1f1f13e;
        }

        .nav {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 55px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
            background-color: #ffffff;
            display: flex;
            overflow-x: auto;
            z-index: 999;
        }

        .nav__link {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            min-width: 50px;
            overflow: hidden;
            white-space: nowrap;
            font-family: sans-serif;
            font-size: 13px;
            color: #444444;
            text-decoration: none;
            -webkit-tap-highlight-color: transparent;
            transition: background-color 0.1s ease-in-out;
        }

        .nav__link:hover {
            background-color: #eeeeee;
        }

        .nav__link--active {
            color: #009578;
        }

        .nav__icon {
            font-size: 18px;
        }

        @media only screen and (max-width:450px) {
            /* .d-sm-block { */
            /* display:block !important; */
            /* } */

            .gototop.active {
                visibility: hidden !important;
            }

            .swal2-popup {
                font-size: 2rem;
            }

            #header {
                display: none;
            }
        }

        @media only screen and (min-width:451px) {
            .nav.d-hidden {
                display: none !important;
            }

            /* .gototop.active {
				visibility:hidden !important;
			} */
        }
    </style>

</head>

<body id="content" class="has-side-panel side-panel-right fullwidth-page side-push-panel" style="background-image: url(/images/wedding/bg/bg-04-2.png);background-position: top;background-size: cover;background-attachment: fixed;">
    <!-- NAVIGATION BAWAH -->
    <!-- <nav class="nav d-hidden d-sm-block">
        <a href="#home" class="nav__link">
            <i class="material-icons nav__icon">favorite</i>
            <span class="nav__text">HOME</span>
        </a>
        <a href="#couple" class="nav__link">
            <i class="material-icons nav__icon">volunteer_activism</i>
            <span class="nav__text">COUPLE</span>
        </a>
        <a href="#story" class="nav__link">
            <i class="material-icons nav__icon">event_available</i>
            <span class="nav__text">ACARA</span>
        </a>
        <a href="#maps" class="nav__link">
            <i class="material-icons nav__icon">add_location_alt</i>
            <span class="nav__text">MAPS</span>
        </a>
        <a href="#message" class="nav__link">
            <i class="material-icons nav__icon">mark_chat_read</i>
            <span class="nav__text">UCAPAN</span>
        </a>
    </nav> -->
    <input type="hidden" name="date" id="date" value="<?= $date; ?>">
    <input type="hidden" name="edate" id="edate" value="<?= $edate; ?>">

    <div id="wrapper" class="clearfix">
        <!-- Header -->

        <!-- Start main-content -->
        <div class="main-content">
            <!-- Section: Couple -->
            <section>
                <div class="container">
                    <div class="box box-solid bg-white tp-shadow5" style=" border-radius:1em">
                        <div class="box-header text-center pt-10">
                            <h2 class="text-danger box-title font-48">Buku Tamu</h2>
                        </div>
                        <hr>
                        <div class="box-body">
                            <div id="front">
                                <div class="p-20 text-center">
                                    <img class="img-thumbnail text-center" src="/images\wedding\bg\guest-book.jpg" alt="">
                                </div>

                                <div class="p-20 text-center">
                                    <button type="button" id="btn-guest-book" class="btn btn-danger mb-5"><i class="fa fa-book"></i> Isi Buku Tamu</button>
                                    <button type="button" id="btn-souvenir" class="btn btn-warning mb-5"><i class="fa fa-tag"></i> Ambil Souvenir</button>
                                    <a href="/index.php" class="btn btn-success"><i class="fa fa-reply"></i> Ke Undangan</a>
                                </div>
                            </div>
                            <div id="souvenir" style="display:none">
                                <div class="p-20 text-center">
                                    <div class="alert alert-warning">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Perhatian!</strong> Sebelum mengambil souvenir, pastikan Kamu sudah mengisi buku tamu terlebih dahulu.
                                    </div>
                                </div>
                                <div class="form-group pb-10">
                                    <label for="" class="col-md-2 text-left text-gray-darkgray">Masukan Nomor Handphone</label>
                                    <div class="col-lg-6 col-sm-10">
                                        <input type="number" name="handphone" class="form-control" placeholder="08..." required>
                                    </div>
                                </div>
                                <div class="p-20 mt-30 text-center">
                                    <button type="button" id="getSouvenir" class="btn btn-danger"><i class="fa fa-tag"></i> Ambil Souvenir</button>
                                    <button type="button" class="btn btn-warning back"><i class="fa fa-reply"></i> Kembali</button>
                                </div>
                            </div>

                            <div class="row" id="guest_book" style="display: none;">
                                <div class="col-md-10 p-30 col-md-offset-1">
                                    <div id="alert"></div>
                                    <form autocomplete="off" name="form-guest-book" id="form-guest-book" class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="" class="col-md-2 text-left text-gray-darkgray">Handphone</label>
                                            <div class="col-sm-10">
                                                <input type="number" name="handphone" id="handphone" class="form-control" placeholder="08..." required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-2 text-left text-gray-darkgray">Nama Tamu</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="guest_name" id="guest_name" class="form-control" placeholder="Nama Tamu" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-2 text-left text-gray-darkgray">Perusahaan/ Organisasi</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="organisasi" id="organisasi" class="form-control" placeholder="Perusahaan/Organisasi">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-2 text-left text-gray-darkgray">Alamat/Kota</label>
                                            <div class="col-sm-10">
                                                <textarea name="address" id="address" placeholder="Alamat/Kota" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <button class="btn btn-danger text-left btn-lg btn-sm-block" type="button" id="save"><i class="fa fa-save"></i> Simpan</button>
                                        <button class="btn btn-warning text-left btn-lg btn-sm-block" type="button" id="back"><i class="fa fa-save"></i> Kembali</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <audio loop type='audio/mp3' autoplay='false' id="myAudio"> -->
        <source src="images/wedding/music/Lagu.mp3">
    </audio>

    <!-- BACK TO TOP -->
    <!-- <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> -->
    <!-- end wrapper -->
    <script src="assets/js/jquery-2.2.0.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8">
    </script>
    <script>
        $(document).on('click', '#btn-guest-book', function() {
            $('#front').hide('ease');
            $('#guest_book').show('ease');
        })

        $(document).on('click', '#back,.back', function() {
            $('#front').show('ease');
            $('#guest_book').hide('ease');
            $('#souvenir').hide('ease');
        })

        $(document).on('click', '#btn-souvenir', function() {
            $('#front').hide('ease');
            $('#guest_book').hide('ease');
            $('#souvenir').show('ease');
        })

        $(document).on('click', '#save', function() {
            let formdata = new FormData($('#form-guest-book')[0]);
            let phone = $('#handphone').val();
            let name = $('#guest_name').val();
            let date_event = $('#date').val();
            let edate_event = $('#edate').val();
            let date = '<?= date('Y-m-d'); ?>';
            // alert(date_event + ", " + date)
            if (date < date_event) {
                Swal.fire({
                    title: 'Perhatian!',
                    text: 'Acara Pernikahan Belum dimulai.',
                    type: 'warning',
                    timer: 3000,
                    showConfirmButton: false
                })
                return false;
            }

            if (date > edate_event) {
                Swal.fire({
                    title: 'Perhatian!',
                    text: 'Acara Pernikahan Sudah berlalu.',
                    type: 'warning',
                    timer: 3000,
                    showConfirmButton: false
                })
                return false;
            }

            if (!phone) {
                $('#alert').html(`
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Peringatan!</strong> Nomor Handphone harus diisi.
                </div>`).fadeIn('ease')
            } else if (phone.length < 10) {
                $('#alert').html(`
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Peringatan!</strong> Nomor Handphone tidak valid.
                </div>`).fadeIn('ease')
                return false;
            } else if (!name) {
                $('#alert').html(`
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Peringatan!</strong> Nama harus diisi.
                </div>`).fadeIn('ease')

            }
            setTimeout(function() {
                $('#alert').fadeOut('ease').html('');
            }, 3000)

            // return false;

            if (formdata) {
                $.ajax({
                    url: '/models/guestBook.php',
                    data: formdata,
                    dataType: 'JSON',
                    type: 'POST',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(result) {
                        if (result.status == 1) {
                            send_to_sheet()
                            Swal.fire({
                                title: 'Terima Kasih!',
                                text: result.msg,
                                type: 'success',
                                showConfirmButton: false,
                                timer: 3000
                            }).then(() => {
                                location.reload();
                            })
                        } else if (result.status == 2) {
                            Swal.fire({
                                title: 'Kamu Sudah Terdaftar!',
                                text: result.msg,
                                type: 'info',
                                // timer: 3000,
                                showCancelButton: true,
                                confirmButtonText: 'Lihat Data Tamu',
                                cancelButtonText: 'Lihat Nanti',
                            }).then((res) => {
                                console.log(res.value);
                                if (res.value) {
                                    location.href = "/guest-book.php?wed=samuelsherli&key=cl21003&date=2021-09-22&guset=" + result.phone;
                                }
                            })
                        } else {
                            Swal.fire({
                                title: 'Failed!',
                                text: result.msg,
                                type: 'warning',
                                showConfirmButton: false,
                                timer: 3000
                            })
                        }
                    },
                    error: function(result) {
                        Swal.fire({
                            title: 'Error!',
                            text: result.msg,
                            type: 'error',
                            showConfirmButton: false,
                            timer: 3000
                        })
                    }
                })
            }
        })

        function send_to_sheet() {
            const scriptURL = 'https://script.google.com/macros/s/AKfycbwXT6FVqAyXBdGeSk9SZDp-0xUw2RBsQwfO_gegZCYqr121W5YRVZkHPggJvxW2q3qS/exec'
            const form = document.forms['form-guest-book']
            // const btnKirim = document.querySelector('#confirm')
            // const btnLoading = document.querySelector('#btnloading')
            // const showAlert = document.querySelector('#show-alert')

            // form.addEventListener('submit', e => {
            //     e.preventDefault()
            //     // btnLoading.classList.toggle('hidden')
            //     // btnKirim.classList.toggle('hidden')
            // })
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    // showAlert.classList.toggle('hidden')
                    // btnKirim.classList.toggle('hidden')
                    // btnLoading.classList.toggle('hidden')
                    form.reset()
                    console.log('Success!', response)
                })
                .catch(error => console.error('Error!', error.message))
        }

        // function view_guest(id = '') {
        //     if (id) {

        //     }
        // }

        $(document).ready(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

        $(document).on('click', '#buka-undangan', function() {
            $('#cover').fadeOut(1000, 'swing')
            $('body').removeClass('noscroll');
            playAudio();

            // Pop-Up Prokes COVID-19

            setTimeout(function() {
                Swal.fire({
                    title: 'Protokol Kesehatan!',
                    text: 'Para tamu undangan wajib menaati peraturan protokol kesehatan.',
                    imageUrl: 'images/setting/porkes/prokes.jpg',
                    imageWidth: '100%',
                    imageAlt: 'Custom image',
                })
            }, 5000)
        })
    </script>
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v9.0&appId=151237495231910&autoLogAppEvents=1" nonce="gfzwA6qw"></script> -->
    <script>
        $(document).ready(function(e) {
            var revapi = $(".rev_slider").revolution({
                sliderType: "standard",
                jsFileLocation: "js/revolution-slider/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "gyges",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 800,
                        style: "hebe",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 5,
                        tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                    }
                },
                responsiveLevels: [1240, 1024, 778],
                visibilityLevels: [1240, 1024, 778],
                gridwidth: [1170, 1024, 778, 480],
                gridheight: [700, 768, 960, 720],
                lazyType: "none",
                parallax: "mouse",
                parallaxBgFreeze: "off",
                parallaxLevels: [2, 3, 4, 5, 6, 7, 8, 9, 10, 1],
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        });
    </script>

    <a onclick="playAudio()" type="button" id='un-mute1' class='float'><img src='images/icon/music-mute.png' width='30px;'></a>
    <a onclick="pauseAudio()" type="button" id='mute1' class='float'><img src='images/icon/music.png' width='30px;'></a>

    <style>
        .float {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 70px;
            left: 15px;
            background-color: #1a1b30;
            opacity: 0.8;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            padding-top: 12px;
            z-index: 99999;
        }

        .modal-body {
            padding: 0px;
        }

        .swal2-styled.swal2-confirm {
            background-color: #1a1b30;
        }
    </style>

    <script>
        document.getElementById('mute1').style.display = 'none';
        var x = document.getElementById("myAudio");

        function playAudio() {
            x.play();
            document.getElementById('un-mute1').style.display = 'none';
            document.getElementById('mute1').style.display = 'inline-block';
        }

        function pauseAudio() {
            x.pause();
            document.getElementById('mute1').style.display = 'none';
            document.getElementById('un-mute1').style.display = 'inline-block';
        }
    </script>
    <script type="text/javascript">
        // Send greeting
        $(document).on('click', '#sendGreeting', function() {
            // alert('send');
            let name = $('#nama').val();
            let greeting = $('#greeting').val();
            if (name == '') {
                alert("Isi Nama kamu dulu ya!");
            } else if (greeting == '') {
                alert("Jangan lupa kasih Ucapan dan Do'a kamu untuk kedua mempelai!");
            } else {
                let formData = new FormData($('#form-greeting')[0])
                $.ajax({
                    url: 'models/create_greeting.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    async: false,
                    dataType: 'JSON',
                    beforeSend: function() {
                        $('#alertMsg').html("<img src='images/loader.gif' height='40px'>").fadeIn('slow').slideDown('slow')
                    },
                    success: function(result) {
                        if (result.code == 1) {
                            $('#nama').val('');
                            $('#greeting').val('');
                            $('#alertMsg').html("<div class='alert alert-success'>" + result.msg + "</div>")
                            $(`<div class="item m-10">
										<div class="tetimonial-wrapper text-white shadow text-center border-radius-10px p-30" style="border:3px solidd #BBAD62;background: rgb(45, 90, 61); backdrop-filter: blur(20px);">
											<p class="font-16">
												` + result.greeting + `
											</p>
											<p class="mt-0 mb-15 font-16 text-theme-colore">-- ` + result.nama + ` --</p>
										</div>
									</div>
								`).prependTo('#list-greeting').hide().fadeIn('3000');
                            setTimeout(function() {
                                $('.alert-success').fadeOut('slow');
                            }, 2000)

                        } else {
                            $('#alertMsg').html("<div class='alert alert-danger'> " + result.msg + "</div>")
                        }
                    },
                    error: function(result) {
                        $('#alertMsg').html("<div class='alert alert-danger'>#Internal server error!!</div>")
                    }
                })
            }
        })
    </script>
</body>

</html>