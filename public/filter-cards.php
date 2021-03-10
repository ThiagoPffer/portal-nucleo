<div class="filterCards-container content-wrapper">
    <h3>Filtros:</h3>

    <div class="swiper-container filterCards-cards">
        <div id="filterCardsContainer" class="swiper-wrapper">

        </div>
        
        <div class="swiper-button-prev"><span class="mdi mdi-chevron-left"></span></div>
        <div class="swiper-button-next"><span class="mdi mdi-chevron-right"></span></div>
    </div>

    <div class="filterCards-btns">
        <div class="dropdown">
            <button class="filterBtn" id="dropdownOrdenacao" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ordenação</button>
            <div class="dropdown-menu " aria-labelledby="dropdownOrdenacao">
                <form action="">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="orderList" id="AZ_order" value="AZ_order" checked>
                        <label class="form-check-label" for="AZ_order">
                            Ordem alfabética de A-Z
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="orderList" id="ZA_order" value="ZA_order">
                        <label class="form-check-label" for="ZA_order">Ordem alfabética de Z-A</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="orderList" id="bigger_prices" value="bigger_prices">
                        <label class="form-check-label" for="bigger_prices">Maiores preços</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="orderList" id="smallest_prices" value="smallest_prices">
                        <label class="form-check-label" for="smallest_prices">Menores preços</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="orderList" id="oldest_items" value="oldest_items">
                        <label class="form-check-label" for="oldest_items">Data de adição (Mais antigos)</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="orderList" id="newer_items" value="newer_items">
                        <label class="form-check-label" for="newer_items">Data de adição (Mais novos)</label>
                    </div>
                </form>
            </div>
        </div>
        <div class="dropdown">
            <button class="filterBtn" id="dropdownTurismo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tipo de Turismo</button>
            <div class="dropdown-menu " aria-labelledby="dropdownTurismo">
                <form action="">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tourismList" id="tourism_caca" value="tourism_caca" checked>
                        <label class="form-check-label" for="tourism_caca">
                            Turismo de Caça
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tourismList1" id="tourism_neve" value="tourism_neve">
                        <label class="form-check-label" for="tourism_neve">Turismo de Neve</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tourismList2" id="tourism_rural" value="tourism_rural">
                        <label class="form-check-label" for="tourism_rural">Turismo Rural</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tourismList3" id="tourism_negocios" value="tourism_negocios">
                        <label class="form-check-label" for="tourism_negocios">Turismo de Negócios</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tourismList4" id="tourism_militar" value="tourism_militar">
                        <label class="form-check-label" for="tourism_militar">Turismo Militar</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tourismList5" id="tourism_religioso" value="tourism_religioso">
                        <label class="form-check-label" for="tourism_religioso">Turismo Religioso</label>
                    </div>
                </form>
            </div>
        </div>
        <div class="dropdown">
            <button class="filterBtn" id="dropdownRaio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Raio</button>
            <div class="dropdown-menu " aria-labelledby="dropdownRaio">
                <form>
                    <div class="form-group">
                        <label for="formControlRange">Até 15km</label>
                        <input type="range" class="form-control-range custom-range" min="0" max="10" id="formControlRange">
                    </div>
                </form>
            </div>
        </div>
        <div class="dropdown">
            <button class="filterBtn" id="dropdownEmpresa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresa</button>
            <div class="dropdown-menu " aria-labelledby="dropdownEmpresa">
                <form action="">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="companyList1" id="company1" value="company1" checked>
                        <label class="form-check-label" for="company1">
                            Nome da empresa
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="companyList2" id="company2" value="company2">
                        <label class="form-check-label" for="company2">Nome da empresa</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="companyList3" id="company3" value="company3">
                        <label class="form-check-label" for="company3">Nome da empresa</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="companyList4" id="company4" value="company4">
                        <label class="form-check-label" for="company4">Nome da empresa</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="companyList5" id="company5" value="company5">
                        <label class="form-check-label" for="company5">Nome da empresa</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="companyList6" id="company6" value="company6">
                        <label class="form-check-label" for="company6">Nome da empresa</label>
                    </div>
                </form>
            </div>
        </div>
        <div class="dropdown">
            <button class="filterBtn" id="dropdownPreferencias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Preferências</button>
            <div class="dropdown-menu " aria-labelledby="dropdownPreferencias">
                <form action="">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Preference1" id="preference1" value="preference1" checked>
                        <label class="form-check-label" for="preference1">
                            Aceita pets
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Preference2" id="preference2" value="preference2">
                        <label class="form-check-label" for="preference2">Ambiente acessível</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Preference3" id="preference3" value="preference3">
                        <label class="form-check-label" for="preference3">Ambiente com música</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Preference4" id="preference4" value="preference4">
                        <label class="form-check-label" for="preference4">Estacionamento gratuito</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Preference5" id="preference5" value="preference5">
                        <label class="form-check-label" for="preference5">Café da manhã gratuito</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Preference6" id="preference6" value="preference6">
                        <label class="form-check-label" for="preference6">Almoço gratuito</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>