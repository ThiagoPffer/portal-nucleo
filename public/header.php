<!-- --========Side Bar========-- -->
<div id="sidebar-wrapper">
    <section class="sidebar-header">
        <button class="sidebar-close toggle" id="menu-close"><span class="mdi mdi-arrow-right"></span></button>

        <button class="sidebar-login-btn">
            <span class="mdi mdi-account"></span>
            Entrar
        </button>

        <button class="sidebar-cart"><span class="mdi mdi-cart-outline"></span></button>

        <div class="sidebar-image">
            <h2>Bem Vindo!</h2>
        </div>
    </section>
    <ul class="sidebar-nav" id="accordion">
        <li>
            <div class="search-container">
                <form action="#">
                    <input type="text" placeholder="Pesquise algo.." name="search">
                    <button type="submit"><i class="mdi mdi-magnify"></i></button>
                </form>
            </div>
        </li>
        <li>
            <button class="item-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Categorias
                <span class="mdi mdi-chevron-down"></span>
            </button>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <ul class="body-list">
                    <li class="list-item">
                        <a href="attractions.php">
                            Home
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="attractions.php">
                            Sobre
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="attractions.php">
                            Eventos
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="attractions.php">
                            Notícias
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="attractions.php">
                            Ofertas
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="attractions.php">
                            Multimídia
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="attractions.php">
                            Contato
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <button class="sidebar-wpp">
        <span class="mdi mdi-whatsapp"></span>
        Contato no Whatsapp
    </button>
</div>

<header class="header-container">
    <div class="header-logo">
        <img src="images/laguna_logo.png" alt="Visite Laguna! (Logo)">
    </div>
    <section class="header-upper">
        <ul class="h-100">
            <li>
                <a href="#"><span class="mdi mdi-whatsapp"></span> Whatsapp</a>
            </li>
            <li class="header-contact">
                <a href="#">Contato:  <span>(48)99999-9999</span></a>
            </li>
            <li>
                <form action="#">
                    <span class="mdi mdi-magnify"></span>
                    <input type="text" placeholder="Buscar">
                </form>
            </li>
            <li>
                <a class="font-weight-bold text-uppercase" href="#">Entrar</a>
            </li>
            <li>
            </li>
        </ul>
    </section>
    <section class="header-lower">
        <ul class="h-100">
            <li class="hl-link">
                <a href="#">Home</a>
            </li>
            <li class="hl-link">
                <a href="#">Sobre</a>
            </li>
            <li class="hl-link">
                <a href="#">Eventos</a>
            </li>
            <li class="hl-link">
                <a href="#">Notícias</a>
            </li>
            <li class="hl-link">
                <a href="#">Ofertas</a>
            </li>
            <li class="hl-link">
                <a href="#">Multimídia</a>
            </li>
            <li class="hl-link">
                <a href="#">Contato</a>
            </li>
            <li class="hl-link cart">
                <a href="#"><span class="mdi mdi-cart-outline"></span></a>
            </li>
        </ul>
    </section>
    <button class="side-menu-show" id="menu-toggle"><span class="mdi mdi-menu"></span></button>
</header>