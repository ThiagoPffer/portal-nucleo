// Selecionar os cards
// Criar os cards a partir de um for()
// Determinar o numero de cards pelo array de títulos

// Filter Cards & Section title
var filterCardTypes = document.getElementsByClassName('card-filter');
const filterCardsContainer = document.getElementById('filterCardsContainer');

// Cria o Card
function createCards() {
    const filterCard = document.createElement('div');
    const filterCardIcon = document.createElement('span');
    const filterCardTitle = document.createElement('h4');

    filterCard.classList.add('swiper-slide', 'card-filter');
    filterCardIcon.classList.add('mdi');

    filterCardsContainer.appendChild(filterCard);
    filterCard.appendChild(filterCardIcon);
    filterCard.appendChild(filterCardTitle);
}

// Insere o conteúdo no card
function insertContent() {
    for (var i = 0; i < filterCardTitles.length; i++) {
        createCards();
        var filterCardTitle = filterCardTypes[i].querySelector("h4");
        var filterCardIcon = filterCardTypes[i].querySelector("span");
        filterCardTitle.innerHTML = filterCardTitles[i];
        filterCardIcon.classList.add(filterCardIcons[i]);
    }
}