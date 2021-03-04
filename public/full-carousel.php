<div class="container-fluid full-carousel">
    <div class="row h-100 px-4 px-sm-5">
        <div class="col-lg-12 px-0 h-100 full-carousel-info">
            <h2>Mais ofertas</h2>
            <p>Confira abaixo o que mais você pode fazer em Laguna:</p>
        </div>
        <div class="col-lg-12 px-0 h-100 swiper-container full-carousel-cards">
            <div class="swiper-wrapper">
                <?php 
                    for($i = 0; $i < 9; $i++){
                        include 'general-card.php';
                    }
                ?>
            </div>

            <div class="swiper-button-prev"><span class="mdi mdi-chevron-left"></span></div>
            <div class="swiper-button-next"><span class="mdi mdi-chevron-right"></span></div>
        </div>
    </div>
</div>