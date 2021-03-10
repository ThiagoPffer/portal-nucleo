<section class="container-fluid main-banner">
    <div class="mb-text">
        <h2>Use a busca abaixo para encontrar o melhor destino</h2>
    </div>
    <div class="mainFilter-wrapper">
        <div class="mainFilter-container">
            <div class="mainFilter-title">
                <h3>Interesse</h3>
                <p>O que você procura?</p>
                <div class="mainFilter-tabs">
                    <select name="filterTabs" id="filterTabs">
                        <option class="mainFilter-tab" value="hospedagem"><span class="mdi mdi-office-building-outline"></span>Hospedagem</option>
                        <option class="mainFilter-tab" value="hospedagem"><span class="mdi mdi-silverware-fork-knife"></span>Alimentação</option>
                        <option class="mainFilter-tab" value="hospedagem"><span class="mdi mdi-basketball"></span>Lazer</option>
                        <option class="mainFilter-tab" value="hospedagem"><span class="mdi mdi-calendar-week-begin"></span>Eventos</option>
                        <option class="mainFilter-tab" value="hospedagem"><span class="mdi mdi-van-passenger"></span>Transporte</option>
                    </select>
                    <ul>
                        <li class="mainFilter-tab"><span class="mdi mdi-office-building-outline"></span>Hospedagem</li>
                        <li class="mainFilter-tab active"><span class="mdi mdi-silverware-fork-knife"></span>Alimentação</li>
                        <li class="mainFilter-tab"><span class="mdi mdi-basketball"></span>Lazer</li>
                        <li class="mainFilter-tab"><span class="mdi mdi-calendar-week-begin"></span>Eventos</li>
                        <li class="mainFilter-tab"><span class="mdi mdi-van-passenger"></span>Transporte</li>
                    </ul>
                </div>
            </div>
            <div class="mainFilter-box">
                <form class="mainFilter-box-form" action="#">
                    <div class="form-group">
                        <label class="sr-only" for="select1">Localização</label>
                        <input type="text" class="form-control" name="destino" placeholder="Localização" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="select2">Check-in</label>
                        <input class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="entrada" placeholder="Check-in" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="select2">Check-out</label>
                        <input class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="entrada" placeholder="Check-out" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="select4">Hóspedes</label>
                        <select name="hospedes" class="form-control" aria-placeholder="Hóspedes">
                                        <option value="" selected>HÓSPEDES</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
                                        <option value="5+">5 ou mais</option>
                                    </select>
                    </div>
                    <button class="mainFilter-search-btn" type="submit">Buscar<span class="mdi mdi-magnify"></span></button>
                </form>
            </div>
        </div>
    </div>
    <img src="images/laguna-banner.png" alt="Banner principal">
</section>