const sliderImages = [
    'images/banner1.png',
    'images/banner2.png',
    'images/banner3.jpg',
    'images/banner4.png',
    'images/banner5.png'
]
var img = document.querySelector('.slider .slider-container img')
var vitri = 0;
function loading() {
    img.setAttribute('src', sliderImages[vitri]);
}

setInterval(function(){
    vitri++;
    if (vitri > sliderImages.length - 1) {
        vitri = 0;
    }
    loading();
},2000);

loading();


