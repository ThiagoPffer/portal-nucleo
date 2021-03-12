<div class="container-fluid body-bg">
    <div class="mw-1440 events-section">
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
                        <input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="entrada" placeholder="Data" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="select4">Tipo de Evento</label>
                        <select name="hospedes" class="form-control">
                                <option value="" selected>Tipo de Evento</option><option value="shows">Shows</option><option value="feiras">Feiras</option><option value="internacionais">Internacionais</option><option value="esportivos">Esportivos</option>
                                <option value="culinario">Culinários</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="select4">Nº de pessoas</label>
                        <select name="hospedes" class="form-control">
                                            <option value="" selected>Nº de pessoas</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
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
                    for($i = 0; $i < 4; $i++){
                        include 'event-card.php';
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