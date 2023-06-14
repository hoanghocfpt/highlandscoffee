
// Lấy dữ liệu từ bộ nhớ
const carts = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];
console.log(carts);
function addToCart() {
    // Get phần tử cha
    var productDocument = this.closest('.product-item-container')
    // Lấy thông tin sản phẩm
    var img = productDocument.querySelector('.product-img img').getAttribute('src');
    var name = productDocument.querySelector('.product-name').innerHTML;
    var price = productDocument.querySelector('.product-price').innerHTML;
    var dataPrice = productDocument.querySelector('.product-price').getAttribute('data-price');

    // Hiển thị
    var product = {
        img,
        name,
        price,
        dataPrice
    }
    carts.push(product)
    // console.log(carts);
    countProduct()
    // Lưu dữ liệu vào bộ nhớ
    localStorage.setItem("cart", JSON.stringify(carts));
}
var iconCart = document.querySelectorAll('svg.cart');
iconCart.forEach(icon => {
    icon.addEventListener('click',addToCart)
})


