var showMoreBtn = document.getElementById('showMoreBtn');
var replacedBtn = showMoreBtn.innerHTML.replace("mais", "menos");
var replacedSpan = replacedBtn.replace("down", "up");

function animateShowBtn() {
    var aux = showMoreBtn.innerHTML;
    showMoreBtn.innerHTML = replacedSpan;
    replacedSpan = aux;
}