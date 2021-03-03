<div class="filterCards-container">
    <div class="filterCards-links">
        <a href="">/Brasil</a>
        <a href="">/Sul</a>
        <a href="">/Santa Catarina</a>
        <a href="">/Laguna</a>
        <a href="">/Hospedagem</a>
    </div>

    <div class="swiper-container filterCards-cards">
        <div class="swiper-wrapper">
            <?php 
                for($i = 0; $i < 9; $i++){
                    include 'card-filter.php';
                }
            ?>
        </div>
    </div>

    <div class="filterCards-btns">
        <button class="filterBtn">Ordenação</button>
        <button class="filterBtn">Turismo</button>
        <button class="filterBtn">Raio</button>
        <button class="filterBtn">Empresa</button>
        <button class="filterBtn">Preferências</button>
    </div>
</div>