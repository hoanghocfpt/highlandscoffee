var close = document.querySelector('#close-icon')

var bars = document.querySelector('#bars-icon')

bars.addEventListener('click',function(){
    var menuTab = document.querySelector('.menutab');
    menuTab.style.display = 'flex';
    document.body.style.overflow = 'hidden'
})

close.addEventListener('click',function(){
    var menuTab = document.querySelector('.menutab');
    menuTab.style.display = 'none';
    document.body.style.overflow = ''
})