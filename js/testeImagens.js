    // Imagens teste

    const cardsContainer = document.getElementsByClassName('cards-container');
    const generalCard = cardsContainer[0].getElementsByClassName('card');

    for (var i = 0; i < generalCard.length; i++) {
        var cardImage = generalCard[i].querySelector('img');
        cardImage.setAttribute('src', 'images/testimage' + [i] + '.jpg');
    }