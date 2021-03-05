<div class="filterCards-container content-wrapper">
    <div class="filterCards-links">
        <a href="">/Brasil</a>
        <a href="">/Sul</a>
        <a href="">/Santa Catarina</a>
        <a href="">/Laguna</a>
        <a href="">/Hospedagem</a>
    </div>

    <h2>Filtros:</h2>

    <div class="swiper-container filterCards-cards">
        <div class="swiper-wrapper">
            <?php 
                for($i = 0; $i < 9; $i++){
                    include 'card-filter.php';
                }
            ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="swiper-container filterCards-btns">
        <div class="swiper-wrapper">
            <button class="swiper-slide filterBtn">Ordenação</button>
            <button class="swiper-slide filterBtn">Turismo</button>
            <button class="swiper-slide filterBtn">Raio</button>
            <button class="swiper-slide filterBtn">Empresa</button>
            <button class="swiper-slide filterBtn">Preferências</button>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>