<!-- --========Filter Box========-- -->
<div class="mainFilter-wrapper">
    <div class="mainFilter-container ">
        <div class="mainFilter-title">
            <h3>Interesse</h3>
            <p>O que você procura?</p>
            <div class="mainFilter-tabs">
                <span class="mdi mdi-chevron-right arrowIcon-right"></span>
                <span class="mdi mdi-chevron-left arrowIcon-left"></span>
                <ul class="nav nav-tabs" id="mainFilterTabs" role="tablist">
                    <li class="mainFilter-tab active">
                        <a id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="true"><span class="mdi mdi-office-building-outline "></span>Hospedagem</a>
                    </li>
                    <li class="mainFilter-tab ">
                        <a id="food-tab" data-toggle="tab" href="#food" role="tab" aria-controls="food" aria-selected="true"><span class="mdi mdi-silverware-fork-knife "></span>Alimentação</a>
                    </li>
                    <li class="mainFilter-tab ">
                        <a id="leisure-tab" data-toggle="tab" href="#leisure" role="tab" aria-controls="leisure" aria-selected="true"><span class="mdi mdi-basketball "></span>Lazer</a>
                    </li>
                    <li class="mainFilter-tab ">
                        <a id="event-tab" data-toggle="tab" href="#event" role="tab" aria-controls="event" aria-selected="true"><span class="mdi mdi-calendar-week-begin "></span>Eventos</a>
                    </li>
                    <li class="mainFilter-tab ">
                        <a id="transfer-tab" data-toggle="tab" href="#transfer" role="tab" aria-controls="transfer" aria-selected="true"><span class="mdi mdi-van-passenger "></span>Transporte</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="collapse tab-content" id="collapseFilter">
            <!-- ========::HOSPEDAGEM::======== -->
            <div class="tab-pane fade show active mainFilter-box" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                <form class="mainFilter-box-form" action="# ">
                    <div class="form-group">
                        <label class="sr-only" for="localizacao">Localização</label>
                        <input type="text" class="form-control" id="localizacao" name="localizacao" placeholder="Localização" required>
                    </div>
                    <div class="form-group ">
                        <label class="sr-only" for="entrada">Check-in</label>
                        <input onfocus="(this.type='date')" onblur="(this.type='text')" type="text" class="form-control" id="entrada" name="entrada" placeholder="Check-in" required>
                    </div>
                    <div class="form-group ">
                        <label class="sr-only" for="saida ">Check-out</label>
                        <input onfocus="(this.type='date')" onblur="(this.type='text')" type="text" class="form-control" id="saida" name="saida" placeholder="Check-out" required>
                    </div>
                    <div class="form-group ">
                        <label class="sr-only" for="hospedes">Nº de pessoas</label>
                        <select name="hospedes" class="form-control" id="hospedes">
                                            <option value=" " selected>Nº de hóspedes</option><option value="1 ">1</option><option value="2 ">2</option><option value="3 ">3</option><option value="4 ">4</option>
                                            <option value="5+ ">5 ou mais</option>
                                        </select>
                    </div>
                    <button class="mainFilter-search-btn " type="submit ">Buscar<span class="mdi mdi-magnify "></span></button>
                </form>
            </div>
            <!-- ========::ALIMENTAÇÃO::======== -->
            <div class="tab-pane fade mainFilter-box" id="food" role="tabpanel" aria-labelledby="food-tab">
                <form class="mainFilter-box-form " action="# ">
                    <div class="form-group ">
                        <label class="sr-only" for="select1 ">Localização</label>
                        <input type="text" class="form-control " name="destino " placeholder="Localização" required>
                    </div>
                    <div class="form-group ">
                        <label class="sr-only" for="select2 ">Data</label>
                        <input onfocus="(this.type='date')" onblur="(this.type='text')" type="text" class="form-control" name="entrada " placeholder="Data" required>
                    </div>
                    <div class="form-group ">
                        <label class="sr-only" for="select3 ">Hora</label>
                        <input onfocus="(this.type='time')" onblur="(this.type='text')" type="text" class="form-control" name="hora " placeholder="Hora" required>
                    </div>
                    <div class="form-group ">
                        <label class="sr-only" for="select4 ">Nº de pessoas</label>
                        <select name="hospedes " class="form-control ">
                                            <option value=" " selected>Nº de pessoas</option><option value="1 ">1</option><option value="2 ">2</option><option value="3 ">3</option><option value="4 ">4</option>
                                            <option value="5+ ">5 ou mais</option>
                                        </select>
                    </div>
                    <button class="mainFilter-search-btn " type="submit ">Buscar<span class="mdi mdi-magnify "></span></button>
                </form>
            </div>
            <!-- ========::EVENTOS::======== -->
            <div class="tab-pane fade mainFilter-box" id="event" role="tabpanel" aria-labelledby="event-tab">
                <form class="mainFilter-box-form" action="#">
                    <div class="form-group">
                        <label class="sr-only" for="localizacao">Localização</label>
                        <input type="text" class="form-control" id="localizacao" name="localizacao" placeholder="Localização" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="data">Data</label>
                        <input onfocus="(this.type='date')" onblur="(this.type='text')" type="text" class="form-control" id="data" name="data" placeholder="Data" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="tipoEvento">Tipo de Evento</label>
                        <select name="tipoEvento" class="form-control" id="tipoEvento">
                                            <option value=" " selected>Tipo de Evento</option><option value="musicais">Musicais</option><option value="palestras">Palestras</option><option value="workshops">Workshops</option><option value="feiras">Feiras</option>
                                            <option value="esportivos">Esportivos</option>
                                        </select>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="select4">Nº de pessoas</label>
                        <select name="pessoas" class="form-control" id="pessoas">
                                            <option value=" " selected>Nº de pessoas</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
                                            <option value="5+">5 ou mais</option>
                                        </select>
                    </div>
                    <button class="mainFilter-search-btn" type="submit">Buscar<span class="mdi mdi-magnify"></span></button>
                </form>
            </div>
            <!-- ========::LAZER::======== -->
            <div class="tab-pane fade mainFilter-box" id="leisure" role="tabpanel" aria-labelledby="leisure-tab">
                <form class="mainFilter-box-form" action="#">
                    <div class="form-group">
                        <label class="sr-only" for="localizacao">Localização</label>
                        <input type="text" class="form-control" name="localizacao" placeholder="Localização" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="tipoLazer">Tipo de Lazer</label>
                        <select name="tipoLazer" class="form-control" id="tipoLazer">
                                            <option value=" " selected>Tipo de Lazer</option><option value="musicais">Musicais</option><option value="teatros">Teatros</option><option value="humor">Humor</option><option value="parques">Parques</option>
                                            <option value="esportivos">Esportivos</option>
                                        </select>
                    </div>
                    <button class="mainFilter-search-btn" type="submit">Buscar<span class="mdi mdi-magnify"></span></button>
                </form>
            </div>
            <!-- ========::TRANSPORTE::======== -->
            <div class="tab-pane fade mainFilter-box" id="transfer" role="tabpanel" aria-labelledby="transfer-tab">
                <form class="mainFilter-box-form" action="#">
                    <div class="form-group">
                        <label class="sr-only" for="localizacao">Localização</label>
                        <input type="text" class="form-control" name="localizacao" placeholder="Localização" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="data">Data</label>
                        <input onfocus="(this.type='date')" onblur="(this.type='text')" type="text" class="form-control" name="data" placeholder="Data" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="tipoTransporte">Tipo de Transporte</label>
                        <select name="tipoTransporte" class="form-control" id="tipoTransporte">
                                            <option value="" selected>Tipo de Transporte</option><option value="van">Van</option><option value="onibus">Ônibus</option><option value="carro">Carro</option><option value="barco">Barco</option>
                                            <option value="outros">Outros</option>
                                        </select>
                    </div>
                    <button class="mainFilter-search-btn" type="submit">Buscar<span class="mdi mdi-magnify"></span></button>
                </form>
            </div>
        </div>
        <button onclick="animateShowBtn();" class="showMore-btn" id="showMoreBtn" type="button" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">Mostrar mais<span class="mdi mdi-chevron-double-down"></span></button>
    </div>
</div>

