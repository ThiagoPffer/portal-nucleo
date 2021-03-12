<div class="container-fluid body-bg">
    <div class="mw-1440 food-section">

    <div class="swiper-container food-banners">
            <div class="swiper-wrapper">
                <div class="swiper-slide food-banner"></div>
                <div class="swiper-slide food-banner"></div>
                <div class="swiper-slide food-banner"></div>
                <div class="swiper-slide food-banner">Cupons</div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="section-title">
            <h2>Alimentação</h2>
            <p>Veja abaixo os melhores restaurantes e lanchonetes da região:</p>
        </div>


        <div class="food-search-container">
            <form action="#" class="form-group">
                <input type="search" placeholder="Faça uma busca">
                <button type="submit"><span class="mdi mdi-magnify"></button>
            </form>
        </div>



        <div class="swiper-container food-cards">
            <div class="swiper-wrapper">
                <?php 
                    for($i = 0; $i < 4; $i++){
                        include 'food-card.php';
                    }
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <?php 
            include 'button-primary.php';
        ?>
    </div>
</div>