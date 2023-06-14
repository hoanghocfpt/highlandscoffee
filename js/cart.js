// Lấy dữ liệu từ bộ nhớ
carts = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];

// Đẩy dữ liệu ra màn hình web
function countProduct() { 
    var count = 0;
    for (let i = 0; i < carts.length; i++) {
        count++;
    }
    document.querySelector('.count-product').innerHTML = count;
    console.log(count);
}
// Xử lý
countProduct();
// Lưu dữ liệu vào bộ nhớ
// localStorage.setItem("myCat", JSON.stringify('carts'));