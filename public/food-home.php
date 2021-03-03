<div class="container-fluid body-bg">
    <div class="content-wrapper food-section">
        <h2 class="section-title">
            Alimentação
            <div class="title-line"></div>
        </h2>

        <div class="food-search-container">
            <h3>Faça uma busca rápida abaixo:</h3>
            <form action="#" class="form-group">
                <input type="text" placeholder="Busque por uma cidade, endereço ou estabelecimento">
                <button type="submit">Buscar</button>
            </form>
        </div>

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

        <div class="food-cards">
            <?php 
                for($i = 0; $i < 3; $i++){
                    include 'food-card.php';
                }
            ?>
        </div>

        <?php 
            include 'button-primary.php';
        ?>
    </div>
</div>