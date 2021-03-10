<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppliers</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/novoStyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <?php
        include ('public/header.php');
    ?>

    <div class="suppliersPage-filter">
        <?php
            include ('public/mainFilter-box.php');
        ?>
    </div>

    <div class="suppliersPage-header content-wrapper">
        <h2>Hospedagem em Laguna</h2>
        <?php
            include ('public/filter-cards.php');
        ?>
    </div>

    <div class="suppliersPage-body content-wrapper">
        <h3 class="content-wrapper">Hotéis encontrados: </h3>
        <div class="filterCards-links">
            <a href="">/Brasil</a>
            <a href="">/Sul</a>
            <a href="">/Santa Catarina</a>
            <a href="">/Laguna</a>
            <a href="">/Hospedagem</a>
        </div>
        <?php    
            for($i = 0; $i < 2; $i++){
                include 'public/supplier-card-hotel.php';
            }
        ?>

        <?php
            include ('public/full-carousel.php');
        ?>
    </div>
    
    <div class="overlay"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/side-menu.js"></script>
    <script src="js/filter-cards.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>

        const filterCardTitles = ['Hotéis', 'Cabanas', 'Hostéis', 'Casas', 'Chácaras', 'Pousadas', 'Chalés'];
        const filterCardIcons = ['mdi-office-building-outline', 'mdi-home-variant-outline', 'mdi-bed-outline', 'mdi-home-modern', 'mdi-home-outline', 'mdi-bed-king-outline', 'mdi-home-roof']

        insertContent();

        // Side menu
        var bookingTab = document.getElementsByClassName('mainFilter-tab');

        for (var i = 0; i < bookingTab.length; i++) {
            bookingTab[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }

        var swiper = new Swiper('.filterCards-cards', {
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 2
                },
                520: {
                    slidesPerView: 4
                },
                1024: {
                    slidesPerView: 6
                },
                1200: {
                    slidesPerView: 6
                }
            }
        });

        var swiper = new Swiper('.full-carousel-cards', {
            spaceBetween: 10,
            centeredSlides: false,
            grabCursor: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                520: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                }
            }
        });
    </script>
</body>