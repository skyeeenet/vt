var backgrounds_cards = [
    "images/1.jpg",
    "images/1.jpg",
    "images/1.jpg"
];
var cards = $('.card');
for (var i = 0; i < cards.length; i++) {
    $(cards[i]).css({ "background": "url(" + backgrounds_cards[i] + ")", "background-size": "cover" });
}