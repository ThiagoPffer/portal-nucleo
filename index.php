<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter-box</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <?php
    include ('public/header.html');
    include ('public/banner.html');
    include ('public/main-gallery.html');
    include ('public/half-carousel.php');
    include ('public/half-carousel-reverse.php');
    include ('public/half-carousel.php');
    include ('public/events-home.php');
    include ('public/anouncements.html');
    include ('public/food-home.php');
    ?>
    
    <div class="overlay"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/side-menu.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        // Main filter
        var bookingTab = document.getElementsByClassName('mainFilter-tab');

        for (var i = 0; i < bookingTab.length; i++) {
            bookingTab[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }

        // ::Swiper
        // half-carousel:
        var swiper = new Swiper('.half-carousel-cards', {
            slidesPerView: 3,
            spaceBetween: 15,
            grabCursor: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // when window width is >= 0px
                0: {
                    slidesPerView: 1.2,
                    centeredSlides: true
                },
                // when window width is >= 520px
                520: {
                    slidesPerView: 2
                },
                // when window width is >= 680px
                680: {
                    slidesPerView: 2.4
                },
                // when window width is >= 990px
                760: {
                    slidesPerView: 3
                }
            }
        });

        // food-banners:
        var swiper = new Swiper('.food-banners', {
            slidesPerView: 3,
            spaceBetween: 10,
            centeredSlides: false,
            grabCursor: true,
            breakpoints: {
                // when window width is >= 0px
                0: {
                    slidesPerView: 1
                },
                // when window width is >= 520px
                520: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });

        // event-cards:
        var swiper = new Swiper('.event-cards', {
            slidesPerView: 3,
            spaceBetween: 10,
            centeredSlides: false,
            breakpoints: {
                // when window width is >= 0px
                0: {
                    centeredSlides: true,
                    slidesPerView: 1
                },
                // when window width is >= 520px
                520: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    </script>
</body>



