const menuList = document.querySelector('.menu-list')
const downIcon = document.querySelector('.alllist svg')
const list = document.querySelector('.menu-list ul.bac1 .list')
const alllistClick = document.querySelector('.alllist-click')
const nameClick = document.querySelectorAll('.name-click')

list.style.display = 'none';
    
function openMenuList(){
    menuList.addEventListener('click', function(){
        if(list.style.display === 'none'){
            list.style.display = 'block'
            downIcon.style.rotate = '180deg'
        }
        else{
            list.style.display = 'none'
            
            downIcon.style.rotate = '0deg'
        }
    })

    nameClick.forEach(e => {
        e.addEventListener('click',function(){{
            alllistClick.textContent = e.textContent;
        }})
    });
}


if (window.matchMedia('(max-width: 768px)').matches) {
    // Màn hình di động
    openMenuList()

} else {
    // Màn hình desktop
    downIcon.style.display = 'none';
    list.style.display = 'block'; 
}

window.addEventListener('resize', function(){
    console.log(2);
    if (window.matchMedia('(max-width: 768px)').matches) {
        // Màn hình di động
        downIcon.style.display = '';
        list.style.display = 'none';
        openMenuList()
    
    } else {
        // Màn hình desktop
        downIcon.style.display = 'none';
        list.style.display = 'block'; 
    }
})
