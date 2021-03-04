<div class="container-fluid body-bg">
    <div class="content-wrapper events-section">
        <div class="section-title">
            <h2>Eventos</h2>
            <p>Veja abaixo os eventos disponíveis para os próximos dias.</p>
        </div>

        <!-- --========:mainFilter Box:========-- -->
        <div class="mainFilter-container">
            <div class="mainFilter-box">
                <form class="mainFilter-box-form" action="#">
                    <div class="form-group">
                        <label class="sr-only" for="select2">Data</label>
                        <input type="date" class="form-control" name="entrada" placeholder="Insira uma data de entrada" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="select4">Tipo de Evento</label>
                        <select name="hospedes" class="form-control">
                                <option value="" selected>SELECIONE</option><option value="shows">Shows</option><option value="feiras">Feiras</option><option value="internacionais">Internacionais</option><option value="esportivos">Esportivos</option>
                                <option value="culinario">Culinários</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="select4">Nº de pessoas</label>
                        <select name="hospedes" class="form-control">
                                            <option value="" selected>SELECIONE</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
                                            <option value="5+">5 ou mais</option>
                                        </select>
                    </div>
                    <button class="mainFilter-search-btn" type="submit">Buscar<span class="mdi mdi-magnify"></span></button>
                </form>
            </div>
        </div>

        <div class="swiper-container event-cards">
            <div class="swiper-wrapper">
                <?php 
                    for($i = 0; $i < 3; $i++){
                        include 'event-card.php';
                    }
                ?>
            </div>
        </div>

        <?php
            include 'button-primary.php';
        ?>
    </div>
</div>