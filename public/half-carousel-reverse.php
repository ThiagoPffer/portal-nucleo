<div class="container-fluid body-bg half-carousel">
    <div class="row h-100 px-sm-4 row-reverse">
        <div class="col-lg-4 h-100 half-carousel-info reverse">
            <h2>Ofertas de Passeios</h2>
            <small>Lazer</small>
            <p>Eventos, passeios, trilhas, parques e muitas outras opções para você e sua família explorarem!</p>
        </div>
        <div class="col-lg-8 h-100 swiper-container half-carousel-cards">
            <div class="swiper-wrapper">
                <?php 
                    for($i = 0; $i < 9; $i++){
                        include 'general-card.php';
                    }
                ?>
            </div>

            <div class="swiper-button-prev body-bg"><span class="mdi mdi-chevron-left"></span></div>
            <div class="swiper-button-next body-bg"><span class="mdi mdi-chevron-right"></span></div>
        </div>
    </div>
</div>