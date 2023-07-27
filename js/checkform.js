
    function checkform() {
        // Thực hiện các kiểm tra của bạn ở đây
        // Nếu dữ liệu không hợp lệ, trả về false
        // Nếu dữ liệu hợp lệ, trả về true
        // Ví dụ:
        var nameInput = document.getElementById('name').value;
        var usernameInput = document.getElementById('username').value;
        var passwordInput = document.getElementById('password').value;

        if (nameInput === "" || usernameInput === "" || passwordInput === "") {
            alert("Vui lòng điền đầy đủ thông tin!");
            return false;
        }

        return true;
    }

