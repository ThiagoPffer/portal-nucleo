// Filter Cards

var filterCardTypes = document.getElementsByClassName('card-filter');
const hospedagemTitles = ['Hotéis', 'Cabanas', 'Hostéis', 'Casas', 'Chácaras', 'Pousadas', 'Chalés'];
const hospedagemIcons = ['mdi-office-building-outline', 'mdi-home-variant-outline', 'mdi-bed-outline', 'mdi-home-modern', 'mdi-home-outline', 'mdi-bed-king-outline', 'mdi-home-roof']

for (var i = 0; i < filterCardTypes.length; i++) {
    var filterCardTitle = filterCardTypes[i].querySelector("h4");
    var filterCardIcon = filterCardTypes[i].querySelector("span");
    filterCardTitle.innerHTML = hospedagemTitles[i];
    filterCardIcon.classList.add(hospedagemIcons[i]);
}