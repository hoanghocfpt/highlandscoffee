const coffee = [
    {
        img: 'images/coffee.png',
        name: 'PhinDi Choco',
        des: 'PhinDi Choco - Cà phê Phin thế hệ mới với chất Phin êm hơn, kết hợp cùng Choco ngọt tan mang đến hương vị mới lạ, không thể hấp dẫn hơn!',
        price: '45.000đ',
        pricedata: 45000
    },
    {
        img: 'images/coffee2.png',
        name: 'PhinDi Kem Sữa',
        des: 'PhinDi Kem Sữa - Cà phê Phin thế hệ mới với chất Phin êm hơn, kết hợp cùng Kem Sữa béo ngậy mang đến hương vị mới lạ, không thể hấp dẫn hơn!',
        price: '45.000đ',
        pricedata: 45000
    },
    {
        img: 'images/coffee3.png',
        name: 'Bạc Xỉu Đá',
        des: 'Nếu Phin Sữa Đá dành cho các bạn đam mê vị đậm đà, thì Bạc Xỉu Đá là một sự lựa chọn nhẹ “đô" cà phê nhưng vẫn thơm ngon, chất lừ không kém!',
        price: '29.000đ',
        pricedata: 29000
    },
    {
        img: 'images/coffee4.png',
        name: 'Latte',
        des: 'Ly cà phê sữa ngọt ngào đến khó quên! Với một chút nhẹ nhàng hơn so với Cappuccino, Latte của chúng tôi bắt đầu với cà phê espresso, sau đó thêm sữa tươi và bọt sữa một cách đầy nghệ thuật. Bạn có thể tùy thích lựa chọn uống nóng hoặc dùng chung với đá.',
        price: '65.000đ',
        pricedata: 65000
    }

]

const freeze = [
{
    img: 'images/freeze.png',
    name: 'Freeze Trà Xanh',
    des: 'Thức uống rất được ưa chuộng! Trà xanh thượng hạng từ cao nguyên Việt Nam, kết hợp cùng đá xay, thạch trà dai dai, thơm ngon và một lớp kem dày phủ lên trên vô cùng hấp dẫn. Freeze Trà Xanh thơm ngon, mát lạnh, chinh phục bất cứ ai!',
    price: '55.000đ',
    pricedata: 55000
},
{
    img: 'images/freeze2.png',
    name: 'Cookies & Cream',
    des: 'Một thức uống ngon lạ miệng bởi sự kết hợp hoàn hảo giữa cookies sô cô la giòn xốp cùng hỗn hợp sữa tươi cùng sữa đặc đem say với đá viên, và cuối cùng không thể thiếu được chính là lớp kem whip mềm mịn cùng cookies sô cô la say nhuyễn.',
    price: '55.000đ',
    pricedata: 55000
},
{
    img: 'images/freeze3.png',
    name: 'Freeze Sô-cô-la',
    des: 'Thiên đường đá xay sô cô la! Từ những thanh sô cô la Việt Nam chất lượng được đem xay với đá cho đến khi mềm mịn, sau đó thêm vào thạch sô cô la dai giòn, ở trên được phủ một lớp kem whip beo béo và sốt sô cô la ngọt ngào. Tạo thành Freeze Sô-cô-la ngon mê mẩn chinh phục bất kì ai!',
    price: '55.000đ',
    pricedata: 55000
},
{
    img: 'images/freeze4.png',
    name: 'Caramel Phin Freeze',
    des: 'Thơm ngon khó cưỡng! Được kết hợp từ cà phê truyền thống chỉ có tại Highlands Coffee, cùng với caramel, thạch cà phê và đá xay mát lạnh. Trên cùng là lớp kem tươi thơm béo và caramel ngọt ngào. Món nước phù hợp trong những cuộc gặp gỡ bạn bè, bởi sự ngọt ngào thường mang mọi người xích lại gần nhau.',
    price: '55.000đ',
    pricedata: 55000
}
]

const tea = [
{
    img: 'images/traviet.png',
    name: 'Trà Sen Vàng',
    des: 'Thức uống chinh phục những thực khách khó tính! Sự kết hợp độc đáo giữa trà Ô long, hạt sen thơm bùi và củ năng giòn tan. Thêm vào chút sữa sẽ để vị thêm ngọt ngào.',
    price: '45.000đ',
    pricedata: 45000
},
{
    img: 'images/traviet2.png',
    name: 'Trà Thạch Vải',
    des: 'Một sự kết hợp thú vị giữa trà đen, những quả vải thơm ngon và thạch giòn khó cưỡng, mang đến thức uống tuyệt hảo!',
    price: '45.000đ',
    pricedata: 45000
},
{
    img: 'images/traviet3.png',
    name: 'Trà Thạch Đào',
    des: 'Vị trà đậm đà kết hợp cùng những miếng đào thơm ngon mọng nước cùng thạch đào giòn dai. Thêm vào ít sữa để gia tăng vị béo.',
    price: '45.000đ',
    pricedata: 45000
},
{
    img: 'images/traviet4.png',
    name: 'Trà Thanh Đào',
    des: 'Một trải nghiệm thú vị khác! Sự hài hòa giữa vị trà cao cấp, vị sả thanh mát và những miếng đào thơm ngon mọng nước sẽ mang đến cho bạn một thức uống tuyệt vời.',
    price: '45.000đ',
    pricedata: 45000
}
]

const cake = [
{
    img: 'images/banhngot.png',
    name: 'Bánh Mousse Đào',
    des: 'Một sự kết hợp khéo léo giữa kem và lớp bánh mềm, được phủ lên trên vài lát đào ngon tuyệt.',
    price: '35.000đ',
    pricedata: 35000
},
{
    img: 'images/banhngot2.png',
    name: 'Bánh Mousse Ca Cao',
    des: 'Bánh Mousse Ca Cao, là sự kết hợp giữa ca-cao Việt Nam đậm đà cùng kem tươi.',
    price: '35.000đ',
    pricedata: 35000
},
{
    img: 'images/banhngot3.png',
    name: 'Bánh Caramel Phô Mai',
    des: 'Ngon khó cưỡng! Bánh phô mai thơm béo được phủ bằng lớp caramel ngọt ngào.',
    price: '35.000đ',
    pricedata: 35000
},
{
    img: 'images/banhngot4.png',
    name: 'Bánh Tiramisu',
    des: 'Tiramisu thơm béo, làm từ ca-cao Việt Nam đậm đà, kết hợp với phô mai ít béo, vani và chút rum nhẹ nhàng.',
    price: '35.000đ',
    pricedata: 35000
}
]

var index = coffee;
function loadingProductHot() {
var result = '';
var ourAlltimeFavorites = document.querySelector('.product-item');
for (let i = 0; i < 4; i++) {
    result += `<div class="product-item-container">
    <div class="product-img">
        <img src="${index[i].img}" alt="">
    </div>
    <div class="product-heading">
        <div class="product-name">${index[i].name}</div>
        <div class="des">${index[i].des}</div>
        <div class="product-price" data-price="${index[i].pricedata}">${index[i].price}</div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 save">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cart">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
        </svg>
    </div>
</div> `
}
ourAlltimeFavorites.innerHTML = result;
}

document.querySelector('.product-tab .coffee').addEventListener('click',function(){
index = coffee;
loadingProductHot();
});

document.querySelector('.product-tab .traviet').addEventListener('click',function(){
index = tea;
loadingProductHot();
});

document.querySelector('.product-tab .freeze').addEventListener('click',function(){
index = freeze;
loadingProductHot();
});

document.querySelector('.product-tab .banhngot').addEventListener('click',function(){
index = cake;
loadingProductHot();
});


loadingProductHot();
